<?php
	
	use mrandall\pfw\dbkit\EntityFactoryTest;
	use mrandall\pfw\dbkit\MysqlConnection;
	
	namespace PHPSTORM_META {
		override(
			\phpweb\Services::get(0),
			map(
				[
					'' => '@'
				]
			)
		);
	}