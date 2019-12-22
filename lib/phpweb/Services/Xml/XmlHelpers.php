<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\Xml;
	
	class XmlHelpers
	{
		public static function SimpleXmlToFormattedXml(\SimpleXMLElement $element) {
			$dom_sxe = @dom_import_simplexml($element);
			if (!$dom_sxe) {
				throw new \DomainException('Cannot convert SimpleXML to DOM');
			}
			
			$dom = new \DOMDocument('1.0');
			$dom->formatOutput = true;
			$dom_sxe = $dom->importNode($dom_sxe, true);
			$dom_sxe = $dom->appendChild($dom_sxe);
			
			return $dom->saveXML();
		}
	}