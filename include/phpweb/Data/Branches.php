<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	class Branches
	{
		public const BRANCHES = array(
			/* 3.0 is here because version_compare() can't handle the only version in
			 * $OLDRELEASES, and it saves another special case in
			 * get_branch_security_eol_date(). */
			'3.0' => array(
				'security' => '2000-10-20',
			),
			'5.3' => array(
				'stable'   => '2013-07-11',
				'security' => '2014-08-14',
			),
			'5.4' => array(
				'stable'   => '2014-09-14',
				'security' => '2015-09-03',
			),
			'5.5' => array(
				'stable'   => '2015-07-10',
				'security' => '2016-07-21',
			),
			'5.6' => array(
				'stable'   => '2017-01-19',
				'security' => '2018-12-31',
			),
			'7.0' => array(
				'stable'   => '2018-01-04',
				'security' => '2019-01-10',
			),
		);
	}