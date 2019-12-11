<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	class Languages
	{
		/**
		 * This is a list of all manual languages hosted within PHP SVN modules (phpdoc-{lang})
		 *
		 * Some codes, like "kr", "tw" and "hk" are not in
		 * conformance with the official language code standard!
		 *
		 * http://www.unicode.org/unicode/onlinedat/languages.html
		 */
		public const ACTIVE = [
			'en'    => 'English',
			'ar'    => 'Arabic',
			'bg'    => 'Bulgarian',
			'pt_BR' => 'Brazilian Portuguese',
			'zh'    => 'Chinese (Simplified)',
			'hk'    => 'Chinese (Hong Kong Cantonese)',
			'tw'    => 'Chinese (Traditional)',
			'ca'    => 'Catalan',
			'cs'    => 'Czech',
			'da'    => 'Danish',
			'nl'    => 'Dutch',
			'fi'    => 'Finnish',
			'fr'    => 'French',
			'de'    => 'German',
			'el'    => 'Greek',
			'he'    => 'Hebrew',
			'hu'    => 'Hungarian',
			'id'    => 'Indonesian',
			'it'    => 'Italian',
			'ja'    => 'Japanese',
			'kr'    => 'Korean',
			'lt'    => 'Lithuanian',
			'no'    => 'Norwegian',
			'pl'    => 'Polish',
			'pt'    => 'Portuguese',
			'ro'    => 'Romanian',
			'ru'    => 'Russian',
			'fa'    => 'Persian',
			'sr'    => 'Serbian',
			'sk'    => 'Slovak',
			'sl'    => 'Slovenian',
			'es'    => 'Spanish',
			'sv'    => 'Swedish',
			'tr'    => 'Turkish',
			'uk'    => 'Ukrainian',
		];
		
		/**
		 * The following languages are inactive, which means they will not:
		 * - Show up via the language select box at php.net
		 * - Be selectable via my.php
		 * - Accept redirections to the translation, despite ACCEPT_LANGUAGE
		 * - Be listed at php.net/docs or php.net/download-docs
		 * However, these languages are available on the doc dev server:
		 * - http://docs.php.net/
		 */
		public  const INACTIVE_ONLINE = [
			'ar' => 'Arabic',
			'bg' => 'Bulgarian',
			'hk' => 'Chinese (Hong Kong Cantonese)',
			'tw' => 'Chinese (Traditional)',
			'ca' => 'Catalan',
			'cs' => 'Czech',
			'da' => 'Danish',
			'nl' => 'Dutch',
			'fi' => 'Finnish',
			'el' => 'Greek',
			'he' => 'Hebrew',
			'hu' => 'Hungarian',
			'id' => 'Indonesian',
			'it' => 'Italian',
			'kr' => 'Korean',
			'lt' => 'Lithuanian',
			'no' => 'Norwegian',
			'pl' => 'Polish',
			'pt' => 'Portuguese',
			'fa' => 'Persian',
			'sr' => 'Serbian',
			'sk' => 'Slovak',
			'sl' => 'Slovenian',
			'sv' => 'Swedish',
			'uk' => 'Ukrainian',
		];
		
		public static function GetActiveLanguages(): array {
			return array_diff(self::ACTIVE, self::INACTIVE_ONLINE);
		}
		
		/**
		 * Convert between language codes back and forth
		 * [We use non standard languages codes and so conversion
		 * is needed when communicating with the outside world]
		 */
		public static function Convert(string $langcode, bool $to_phpweb_format = TRUE)
		{
			if ($to_phpweb_format) {
				switch ($langcode) {
					case 'zh_cn': return 'zh';
					case 'zh_hk': return 'hk';
					case 'zh_tw': return 'tw';
					case 'ko'   : return 'kr';
					default:
						if (isset(self::ACTIVE[$langcode])) {
							return $langcode;
						}
						// Fallback on english if we got something wacky
						return "en";
				}
			}
			else {
				switch ($langcode) {
					case 'cn': return 'zh_cn';
					case 'hk': return 'zh_hk';
					case 'tw': return 'zh_tw';
					case 'kr': return 'ko';
					default:
						if (isset(self::ACTIVE[$langcode])) {
							return $langcode;
						}
						// Fallback on english if we got something wacky
						return "en";
				}
			}
		}

	}