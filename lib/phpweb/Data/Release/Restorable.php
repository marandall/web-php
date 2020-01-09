<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	trait Restorable
	{
		public static function __set_state($arr) {
			$r = new static();
			foreach ($arr as $k => $v) {
				$r->{$k} = $v;
			}
			return $r;
		}
	}