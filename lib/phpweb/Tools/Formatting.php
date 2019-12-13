<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Tools;
	
	class Formatting
	{
		/**
		 * Used for representing how long ago / how long into the future something is
		 */
		public static function FormatInterval($from, $to = 'now') {
			try {
				$from_obj = $from instanceof \DateTime ? $from : new \DateTime($from);
				$to_obj = $to instanceof \DateTime ? $to : new \DateTime($to);
				$diff = $to_obj->diff($from_obj);
				
				$times = array();
				if ($diff->y) {
					$times[] = array($diff->y,'year');
					if ($diff->m) {
						$times[] = array($diff->m,'month');
					}
				} elseif ($diff->m) {
					$times[] = array($diff->m,'month');
				} elseif ($diff->d) {
					$times[] = array($diff->d,'day');
				} else {
					$eolPeriod = 'midnight';
				}
				if ($times) {
					$eolPeriod = implode(', ',
						array_map(
							function($t) {
								return "$t[0] $t[1]" .
									($t[0] != 1 ? 's' : '');
							},
							$times
						)
					);
					
					if ($diff->invert) {
						$eolPeriod = "$eolPeriod ago";
					} else {
						$eolPeriod = "in $eolPeriod";
					}
				}
			} catch(\Exception $e) {
				$eolPeriod = 'unknown';
			}
			
			return $eolPeriod;
		}
	}