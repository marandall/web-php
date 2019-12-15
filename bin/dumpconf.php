<?php
	
	require_once __DIR__ . '/../lib/vendor/autoload.php';
	
	error_reporting(E_ALL);
	
	$base = \phpweb\Config\Site::GetDataDir() . '/archive/entries';
	
	foreach (scandir($base, SCANDIR_SORT_ASCENDING) as $file) {
		if (substr($file, -4) !== '.xml') {
			continue;
		}
		
		$base_str = file_get_contents($base . '/' . $file);
		$base_str = str_replace(
			[ 'xmlns="http://www.w3.org/2005/Atom"', 'xmlns:default="http://php.net/ns/news"', 'default:'],
			['', '', ''],
			$base_str
		);
		
		
		$xml = simplexml_load_string($base_str);
		
		$title     = (string)$xml->title;
		$published = new \DateTimeImmutable((string)$xml->published);
		$updated   = new \DateTimeImmutable((string)$xml->updated);
		
		/* only those with category conferences are legit */
		$is_conference = false;
		foreach ($xml->category as $category_element) {
			if ((string)$category_element['term'] === 'conferences') {
				$is_conference = true;
				break;
			}
		}
		
		if (!$is_conference) {
			continue;
		}
		
		$teaser = (string)$xml->finalTeaserDate;
		if (!$teaser) {
			continue;
		}
		
		$conference_date = new \DateTimeImmutable($teaser);
		$id              = $conference_date->format('Y-m-d') . '-' . str_replace(' ', '-', strtolower($title));
		
		
		$content = $xml['content'][0];
		
		$cn               = new DOMDocument('1.0', 'UTF-8');
		$cn->formatOutput = true;
		
		$conf_xml = $cn->createElement('conference');
		$cn->appendChild($conf_xml);
		
		$vnode = function ($type, $value) use ($cn): DOMElement {
			$node            = $cn->createElement($type);
			$node->nodeValue = $value;
			return $node;
		};
		
		$conf_xml->appendChild($vnode('title', (string)$xml->title));
		$conf_xml->appendChild($vnode('id', $id));
		$conf_xml->appendChild($vnode('start_date', $conference_date->format('Y-m-d')));
		$conf_xml->appendChild($vnode('end_date', $conference_date->add(new DateInterval('P1D'))->format('Y-m-d')));
		$conf_xml->appendChild($vnode('image', (string)$xml->newsImage));
		
		foreach ($xml->link as $link) {
			$url = (string)$link['href'];
			if (strpos($url, 'php.net') === false) {
				$conf_xml->appendChild($vnode('website', $link['href']));
			}
		}
		
		$content_node = $cn->importNode(dom_import_simplexml($xml->content), true);
		$conf_xml->appendChild($content_node);
		
		$xml_str = str_replace('default:', '', $cn->saveXML());
		
		file_put_contents(
			\phpweb\Config\Site::GetDataDir() . '/events/conferences/' . $id . '.xml',
			$xml_str
		);
	}
	
	