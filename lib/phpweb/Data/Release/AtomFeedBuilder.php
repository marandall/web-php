<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	
	/**
	 * Helper for preparing ATOM feeds of releases
	 */
	
	class AtomFeedBuilder
	{
		/**
		 * @param Release[] $releases
		 */
		public function build(array $releases, string $id): \SimpleXMLElement {
			$xml = simplexml_load_string('<feed xmlns="http://www.w3.org/2005/Atom" xmlns:php="http://php.net/ns/releases"></feed>');
			$xml->addChild('title', 'PHP.net Releases');
			
			$link = $xml->addChild('link');
			$link->addAttribute('href', $id);
			$link->addAttribute('rel', 'self');
			
			$author = $xml->addChild('author');
			$author->addChild('name', 'Webmaster');
			$author->addChild('uri', 'https://php.net/contact.php');
			$author->addChild('email', 'php-webmaster@lists.php.net');
			
			$xml->addChild('id', $id);
			
			/** @var \DateTime|null $latest_timestamp */
			$latest_timestamp = null;
			
			foreach ($releases as $release) {
				$entry = $xml->addChild('entry');
				$entry->addChild('title', 'PHP ' . $release->getVersionId() . ' released!');
				$entry->addChild('id', $release->getUrl());
				$entry->addChild('php:version', $release->getVersionId());
				$entry->addChild('published', $release->getDate()->format(DATE_ATOM));
				$entry->addChild('summary', 'There is a new PHP release in town!');
				$entry->addChild('updated', $release->getDate()->format(DATE_ATOM));
				
				$ct = $entry->addChild('content');
				$ct->addAttribute('src', $release->getUrl());
				$ct->addAttribute('type', 'text/html');
				
				foreach ($release->getSources() as $source) {
					$link = $entry->addChild('link');
					$link->addAttribute('rel', 'enclosure');
					$link->addAttribute('title', $source->getName());
					$link->addAttribute('href', $source->getUrl());
					$link->addChild('php:sha256', $source->getSha256());
					$link->addChild('php:releaseDate', $source->getDate()->format(DATE_ATOM));
				}
				
				if (!$latest_timestamp || $release->getDate() > $latest_timestamp) {
					$latest_timestamp = $release->getDate();
				}
			}
			
			if ($latest_timestamp !== null) {
				$xml->addChild('updated', $latest_timestamp->format(DATE_ATOM));
			}
			
			return $xml;
		}
	}