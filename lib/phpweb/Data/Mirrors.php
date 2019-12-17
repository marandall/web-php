<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	class Mirrors
	{
		protected const HISTORICAL = [
			['ARG', 'ar2.php.net', 'XMundo Hosting Solutions', 'http://www.xmundo.net'],
			['ARM', 'am1.php.net', 'ARMINCO Global Telecommunications', 'http://www.arminco.com/'],
			['AUS', 'au1.php.net', 'Melbourne IT Pty Ltd', 'https://www.melbourneit.com.au/'],
			['AUS', 'au2.php.net', 'Servers Australia Pty. Ltd.', 'http://www.serversaustralia.com.au/'],
			['AUT', 'at1.php.net', 'Goodie Domain Service', 'http://www.gdsw.at/'],
			['AUT', 'at2.php.net', 'Yalwa Local Directory Services Austria', 'http://www.yalwa.at/'],
			['BGD', 'bd1.php.net', 'IS Pros Limited', 'http://www.ispros.com.bd'],
			['BEL', 'be2.php.net', 'Cu.be Solutions', 'http://www.cu.be/'],
			['BIH', 'ba1.php.net', 'BHTelecom', 'https://www.bhtelecom.ba/'],
			['BRA', 'br1.php.net', 'HostNet Internet', 'http://www.hostnet.com.br'],
			['BRA', 'br2.php.net', 'Umbler', 'http://umbler.com'],
			['BGR', 'bg2.php.net', 'Data.BG', 'http://www.data.bg'],
			['CAN', 'ca1.php.net', 'easyDNS', 'http://www.easydns.com/'],
			['CAN', 'ca2.php.net', 'Parasane, LLC', 'http://www.parasane.net/'],
			['CAN', 'ca3.php.net', 'egateDOMAINS', 'http://www.egatedomains.ca/?RP=DJFEIWHFEWQ'],
			['CHL', 'cl1.php.net', 'Caos Consultores', 'http://www.caos.cl'],
			['CHN', 'cn2.php.net', 'Sina App Engine (SAE)', 'http://sae.sina.com.cn/'],
			['CZE', 'cz1.php.net', 'Czech Technical University in Prague', 'http://www.cvut.cz/'],
			['CZE', 'cz2.php.net', 'Softaculous Ltd.', 'http://www.softaculous.com/'],
			['DNK', 'dk1.php.net', 'Siminn Denmark', 'http://www.siminn.dk'],
			['DNK', 'dk2.php.net', 'Kobalt', 'http://kobalt.dk/'],
			['EST', 'ee1.php.net', 'Zone Media LLC', 'https://www.zone.ee/'],
			['FIN', 'fi1.php.net', 'Avenla Oy', 'http://www.avenla.fi/'],
			['FIN', 'fi2.php.net', 'Planeetta Internet OY', 'http://www.planeetta.net/'],
			['FRA', 'fr2.php.net', 'Crihan', 'http://www.crihan.fr/'],
			['DEU', 'de1.php.net', '@GLOBE GmbH', 'http://www.globe.de/'],
			['DEU', 'de2.php.net', 'Locanto Kleinanzeigen', 'http://www.locanto.de/'],
			['HKG', 'hk1.php.net', 'Nethub Online Limited', 'http://www.nethub.com.hk/'],
			['HKG', 'hk2.php.net', 'Website Solution Web Hosting', 'http://www.website-solution.net/'],
			['ISL', 'is1.php.net', 'Hýsingarfélagið ehf', 'http://www.hysingar.is/'],
			['ISL', 'is2.php.net', 'Dotgeek', 'http://dotgeek.org/'],
			['IND', 'in1.php.net', 'Directi Web Hosting', 'http://www.directi.com'],
			['IND', 'in3.php.net', 'IndiaLinks Web Hosting Pvt Ltd', 'http://www.indialinks.com'],
			['IDN', 'id1.php.net', 'PT Pasifik Satelit Nusantara', 'http://www.pesat.net.id'],
			['IRN', 'ir1.php.net', 'Golha.IR', 'http://www.golha.ir/'],
			['IRN', 'ir2.php.net', 'ParsPack.com', 'http://parspack.com/'],
			['IRL', 'ie1.php.net', 'Yalwa - Local Directory Services Ireland', 'http://www.yalwa.ie/'],
			['IRL', 'ie2.php.net', 'Hosting Ireland', 'http://www.hostingireland.ie/'],
			['ISR', 'il1.php.net', 'SPD HOSTING LTD', 'http://www.spd.co.il/'],
			['ITA', 'it1.php.net', 'Register.it', 'http://www.register.it/'],
			['ITA', 'it2.php.net', 'Interalta', 'https://www.interalta.com/'],
			['JAM', 'jm2.php.net', 'Teamopolis Sports Websites Inc.', 'http://www.teamopolis.com/'],
			['JPN', 'jp1.php.net', 'PacketBusiness, Inc.', 'http://www.packetbusiness.com/'],
			['JPN', 'jp2.php.net', 'snotch', 'http://bloggers.ja.bz/sunouchi/'],
			['KOR', 'kr1.php.net', 'ask.sarang.net', 'http://ask.sarang.net'],
			['LIE', 'li1.php.net', 'Telecom Liechtenstein AG', 'http://www.telecom.li/'],
			['LTU', 'lt1.php.net', 'UAB "Interneto vizija"', 'http://serveriai.lt/'],
			['LUX', 'lu1.php.net', 'root eSolutions ISP', 'http://www.root.lu'],
			['LVA', 'lv1.php.net', 'Māris Ozoliņš', 'http://netparks.lv/'],
			['LVA', 'lv1.php.net', 'Kaspars Foigts', 'https://laacz.lv/'],
			['MYS', 'my1.php.net', 'MaxDedicated', 'http://www.maxdedicated.com/'],
			['MEX', 'mx1.php.net', 'uServers Mexico', 'http://www.uservers.net/?in=php'],
			['MEX', 'mx2.php.net', 'Universidad Autónoma Metropolitana Azcapotzalco', 'http://www.azc.uam.mx'],
			['MDA', 'md1.php.net', 'dev.md', 'http://www.dev.md/'],
			['NCL', 'nc1.php.net', 'Nautile', 'http://www.nautile.nc/'],
			['NLD', 'nl1.php.net', 'Stream Service', 'http://www.streamservice.nl/'],
			['NLD', 'nl3.php.net', 'Computel Standby BV', 'http://www.computel.nl/'],
			['NZL', 'nz2.php.net', 'Catalyst IT Ltd', 'http://catalyst.net.nz/'],
			['NOR', 'no1.php.net', 'Pål Sollie', 'https://sparkz.no/'],
			['NOR', 'no2.php.net', 'Verdens Gang AS', 'http://www.vg.no'],
			['PAN', 'pa1.php.net', 'Unidominios', 'http://www.unidominios.com/'],
			['POL', 'pl1.php.net', 'WEBdev', 'http://webdev.pl/'],
			['ROU', 'ro1.php.net', 'SpiderVPS', 'http://www.spidervps.com/'],
			['RUS', 'ru2.php.net', 'Cronyx Plus LLC', 'http://isp.rinet.ru/'],
			['SGP', 'sg2.php.net', 'Xssist Group (Singapore) Pte Ltd', 'http://www.xssist.com/'],
			['ESP', 'es1.php.net', 'GRN Serveis Telematics', 'http://www.grn.es/classic'],
			['SVN', 'si1.php.net', 'DOMENAR.net', 'http://www.domenar.net/'],
			['SVN', 'si2.php.net', 'Domene in gostovanje NEOSERV', 'http:///www.neoserv.si'],
			['SWE', 'se1.php.net', 'Portlane AB', 'http://www.portlane.com/'],
			['SWE', 'se2.php.net', 'SpaceDump IT AB', 'http://www.spacedump.se/'],
			['ZAF', 'za1.php.net', 'AfriCC', 'https://www.afri.cc/'],
			['CHE', 'ch1.php.net', 'ComunidadHosting', 'http://www.comunidadhosting.com/'],
			['TWN', 'tw1.php.net', 'twemail.com', 'http://twemail.com/'],
			['TWN', 'tw2.php.net', 'www.mirror.tw', 'http://www.mirror.tw/'],
			['THA', 'th1.php.net', 'THAIWEB.network', 'http://www.thaiweb.net'],
			['TUR', 'tr1.php.net', 'İstanbul Teknik Üniversitesi Bilgi İşlem Daire Başkanlığı', 'http://www.itu.edu.tr/'],
			['TUR', 'tr2.php.net', 'DGN Teknoloji', 'http://www.dgn.net.tr/'],
			['TZA', 'tz1.php.net', 'Aptus Solutions', 'http://aptus.co.tz'],
			['UKR', 'ua1.php.net', 'ELRO Corporation', 'http://elro.com'],
			['UKR', 'ua2.php.net', 'Max Khaikin', 'http://www.masterlogic.net/'],
			['GBR', 'uk1.php.net', 'Camel Network', 'http://camelnetwork.com/'],
			['GBR', 'uk3.php.net', 'CatN PHP Hosting', 'http://www.catn.com/'],
			['USA', 'us1.php.net', 'NEXCESS.NET', 'http://www.nexcess.net/'],
			['USA', 'us2.php.net', 'Hurricane Electric', 'http://he.net/'],
			['USA', 'us3.php.net', 'C7 Data Centers', 'https://www.c7.com/'],
			['VNM', 'vn1.php.net', 'DigiStar Co., Ltd', 'http://www.digistar.vn/'],
		];
		
		public static function GetHistoricalMirrors(): array {
			return self::HISTORICAL;
		}
	}