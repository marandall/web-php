<?php
	
	declare(strict_types=1);
	
	
	namespace phpweb\Data;
	
	
	class MailingLists
	{
		// array of lists (list, name, short desc., moderated, archive, digest, newsgroup)
		public const GENERAL_LISTS = [
			'General mailing lists for PHP users',
			[
				'php-announce', 'Announcements',
				'Announcements of new PHP releases are sent to this very low-volume list',
				TRUE, FALSE, FALSE, 'php.announce',
			],
			[
				'php-general', 'General user list',
				'This is a high volume list for general PHP support; ask PHP questions here',
				FALSE, TRUE, TRUE, 'php.general',
			],
			[
				'php-windows', 'Windows PHP users list',
				'Using PHP on Microsoft Windows',
				FALSE, TRUE, TRUE, 'php.windows',
			],
			
			'Subject specific lists for PHP users',
			[
				'php-install', 'Installation issues and problems',
				'How to install PHP with particular configurations and servers',
				FALSE, TRUE, TRUE, 'php.install',
			],
			[
				'php-db', 'Databases and PHP',
				'This list is for the discussion of PHP database topics',
				FALSE, TRUE, TRUE, 'php.db',
			],
			[
				'php-i18n', 'Unicode and Internationalization',
				'Unicode support, Internationalization (i18n) and localization (l10n) issues and features',
				FALSE, TRUE, TRUE, 'php.i18n',
			],
			[
				'php-evangelism', 'PHP evangelism mailing list',
				'A list for people interested in promoting PHP and learning good reasons to support PHP in the enterprise',
				TRUE, TRUE, TRUE, 'php.evangelism',
			],
			[
				'soap', 'PHP SOAP list',
				'List for the SOAP developers',
				FALSE, FALSE, FALSE, 'php.soap',
			],
			'Non-English language mailing lists',
			[
				'php-es', 'Spanish PHP Mailing list',
				'List for Spanish speaking people interested in PHP',
				FALSE, FALSE, FALSE, 'php.general.es',
			],
		
		];
		
		// array of lists (list, name, short desc., moderated, archive, digest, newsgroup)
		public const INTERNALS_LISTS = [
			'PHP and Zend Engine internals lists',
			[
				'internals', 'Internals list',
				'A medium volume list for those who want to help out with the development of PHP',
				FALSE, 'php-internals', TRUE, 'php.internals',
			],
			[
				'internals-win', 'Windows Internals list',
				'A low volume list for those who want to help out with the development of PHP on Windows',
				FALSE, FALSE, TRUE, 'php.internals.win',
			],
			[
				'php-cvs', 'Git commit list',
				'All commits to internals (php-src) and the Zend Engine are posted to this list automatically',
				TRUE, TRUE, FALSE, 'php.cvs',
			],
			[
				'git-pulls', 'Git pull requests',
				'Pull requests from Github',
				FALSE, FALSE, FALSE, 'php.git-pulls',
			],
			[
				'php-qa', 'Quality Assurance list',
				'List for the members of the PHP-QA Team',
				FALSE, TRUE, FALSE, 'php.qa',
			],
			[
				'php-bugs', 'General bugs',
				'General bug activity are posted here',
				FALSE, FALSE, FALSE, 'php.bugs',
			],
			[
				'standards', 'PHP Standardization and interoperability list',
				'Development of language standards',
				FALSE, FALSE, FALSE, 'php.standards',
			],
			
			'PHP internal website mailing lists',
			[
				'php-webmaster', 'PHP php.net internal infrastructure discussion',
				'List for discussing and maintaining the php.net web infrastructure.<br>
      			 For general PHP support questions, see "General Mailing Lists" or the <a href="/support.php">support page</a>',
				FALSE, FALSE, FALSE, 'php.webmaster',
			],
			
			'PHP documentation mailing lists',
			[
				'phpdoc', 'Documentation discussion',
				'List for discussing the PHP documentation',
				FALSE, TRUE, FALSE, 'php.doc',
			],
			[
				'doc-cvs', 'Documentation changes and commits',
				'Changes to the documentation are posted here',
				TRUE, 'php-doc-cvs', FALSE, 'php.doc.cvs',
			],
			[
				'doc-bugs', 'Documentation bugs',
				'Documentation bug activity (translations, sources, and build system) are posted here',
				TRUE, 'php-doc-bugs', FALSE, 'php.doc.bugs',
			],
		];
	}