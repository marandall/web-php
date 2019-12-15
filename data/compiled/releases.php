<?php return array (
  '3.0.x (latest)' => 
  array (
    'version' => '3.0.x (latest)',
    'date' => '20 Oct 2000',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 3.0.18 Source Code',
        'filename' => 'php-3.0.18.tar.gz',
        'sha256' => '',
        'md5' => 'b4b8f7f1151ce66d5f3910a066651133',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.0.0' => 
  array (
    'version' => '4.0.0',
    'date' => '22 May 2000',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.0.0.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.0.1' => 
  array (
    'version' => '4.0.1',
    'date' => '28 June 2000',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.0.1.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => '4.0.1pl2 Source (tar.gz)',
        'filename' => 'php-4.0.1pl2.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.0.2' => 
  array (
    'version' => '4.0.2',
    'date' => '29 August 2000',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.0.2.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.0.3' => 
  array (
    'version' => '4.0.3',
    'date' => '11 October 2000',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.0.3.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => '4.0.3pl1 Source (tar.gz)',
        'filename' => 'php-4.0.3pl1.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.0.4' => 
  array (
    'version' => '4.0.4',
    'date' => '19 December 2000',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.0.4.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => '4.0.4pl1 Source (tar.gz)',
        'filename' => 'php-4.0.4pl1.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.0.5' => 
  array (
    'version' => '4.0.5',
    'date' => '30 April 2001',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.0.5.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.0.6' => 
  array (
    'version' => '4.0.6',
    'date' => '23 June 2001',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.0.6.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.1.0' => 
  array (
    'version' => '4.1.0',
    'date' => '10 Dec 2001',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.1.0.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>
 After a lengthy QA process, PHP 4.1.0 is <a href="/downloads/">finally out</a>!<br/>
 [ <a href="/releases/4_1_0_fr.php">Version Française</a> ]
</p>

<p> PHP 4.1.0 includes several other key improvements:</p>
<ul>
 <li>A new input interface for improved security (read below)</li>
 <li>Highly improved performance in general</li>
 <li>
  Revolutionary performance and stability improvements under
  Windows.  The multithreaded server modules under Windows (ISAPI,
  Apache, etc.) perform as much as 30 times faster under load!  We
  want to thank Brett Brewer and his team in Microsoft for working
  with us to improve PHP for Windows.
 </li>
 <li>
  Versioning support for extensions.  Right now it\'s barely being
  used, but the infrastructure was put in place to support separate
  version numbers for different extensions.  The negative side effect
  is that loading extensions that were built against old versions of
  PHP will now result in a crash, instead of in a nice clear message.
  Make sure you only use extensions built with PHP 4.1.0.
 </li>
 <li>Turn-key output compression support</li>
 <li><strong>LOTS</strong> of fixes and new functions</li>
</ul>

<p>
 As some of you may notice, this version is quite historic, as it\'s
 the first time in history we actually incremented the middle digit! :)
 The two key reasons for this unprecedented change were the new input
 interface, and the broken binary compatibility of modules due to the
 versioning support.
</p>

<p>
 Following is a description of the new input mechanism. For a full list of
 changes in PHP 4.1.0, see the <a href="/ChangeLog-4.php#4.1.0">ChangeLog</a>.
</p>

<hr/>

<h2>SECURITY: NEW INPUT MECHANISM</h2>

<p>
 First and foremost, it\'s important to stress that regardless of
 anything you may read in the following lines, PHP 4.1.0 <strong>still
 supports</strong> the old input mechanisms from older versions.
 Old applications should go on working fine without modification!
</p>

<p>Now that we have that behind us, let\'s move on :)</p>

<p>
 For various reasons, PHP setups which rely on register_globals
 being on (i.e., on form, server and environment variables becoming
 a part of the global namespace, automatically) are very often
 exploitable to various degrees.  For example, the piece of code:
</p>

<?php highlight_php(\'<?php
if (authenticate_user()) {
  $authenticated = true;
}
...
??>\');?&gt;

<p>
 May be exploitable, as remote users can simply pass on \'authenticated\'
 as a form variable, and then even if authenticate_user() returns false,
 $authenticated will actually be set to true.  While this looks like a
 simple example, in reality, quite a few PHP applications ended up being
 exploitable by things related to this misfeature.
</p>

<p>
 While it is quite possible to write secure code in PHP, we felt that the
 fact that PHP makes it too easy to write insecure code was bad, and we\'ve
 decided to attempt a far-reaching change, and deprecate register_globals.
 Obviously, because the vast majority of the PHP code in the world relies
 on the existence of this feature, we have no plans to actually remove it
 from PHP anytime in the foreseeable future, but we\'ve decided to encourage
 people to shut it off whenever possible.
</p>

<p>
 To help users build PHP applications with register_globals being off,
 we\'ve added several new special variables that can be used instead of the
 old global variables. There are 7 new special arrays:
</p>

<ul>
 <li>$_GET - contains form variables sent through GET</li>
 <li>$_POST - contains form variables sent through POST</li>
 <li>$_COOKIE - contains HTTP cookie variables</li>
 <li>$_SERVER - contains server variables (e.g., REMOTE_ADDR)</li>
 <li>$_ENV - contains the environment variables</li>
 <li>
  $_REQUEST - a merge of the GET variables, POST variables and Cookie variables.
  In other words - all the information that is coming from the user,
  and that from a security point of view, cannot be trusted.
 </li>
 <li>$_SESSION - contains HTTP variables registered by the session module</li>
</ul>

<p>
 Now, other than the fact that these variables contain this special information,
 they\'re also special in another way - they\'re automatically global in any
 scope. This means that you can access them anywhere, without having to
 \'global\' them first. For example:
</p>

<?php highlight_php(\'<?php
function example1()
{
	print $_GET["name"];   // works, \\\'global $_GET;\\\' is not necessary!
}
??>\');?&gt;

<p>
 would work fine! We hope that this fact would ease the pain in migrating
 old code to new code a bit, and we\'re confident it\'s going to make writing
 new code easier. Another neat trick is that creating new entries in the
 $_SESSION array will automatically register them as session variables, as
 if you called session_register(). This trick is limited to the session
 module only - for example, setting new entries in $_ENV will
 <strong>not</strong> perform an implicit putenv().
</p>

<p>
 PHP 4.1.0 still defaults to have register_globals set to on. It\'s a
 transitional version, and we encourage application authors, especially
 public ones which are used by a wide audience, to change their applications
 to work in an environment where register_globals is set to off. Of course,
 they should take advantage of the new features supplied in PHP 4.1.0 that
 make this transition much easier.
</p>

<p>
 As of the next semi-major version of PHP, new installations of PHP will
 default to having register_globals set to off. No worries! Existing
 installations, which already have a php.ini file that has register_globals
 set to on, will not be affected. Only when you install PHP on a brand new
 machine (typically, if you\'re a brand new user), will this affect you, and
 then too - you can turn it on if you choose to.
</p>

<p>
 Note: Some of these arrays had old names, e.g. $HTTP_GET_VARS. These names
 still work, but we encourage users to switch to the new shorter, and
 auto-global versions.
</p>

<p>
 Thanks go to Shaun Clowes (shaun at securereality dot com dot au) for
 pointing out this problem and for analyzing it.
</p>


</announcement>',
      ),
    ),
  ),
  '4.1.1' => 
  array (
    'version' => '4.1.1',
    'date' => '26 Dec 2001',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.1.1.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>
 Due to a few bugs in PHP 4.1.0, we decided to release PHP 4.1.1.  The bugs
 that were fixed are not major ones but minor ones, which could be annoying
 if you get bitten by them.
</p>

<p>
 Our recommendation is that people who already upgraded to PHP 4.1.0 do
 <strong>not</strong> upgrade to <a href="/downloads/">PHP 4.1.1</a>,
 unless they\'re experiencing one of the described bugs.
</p>

<p>
 <strong>No</strong> new features or security updates are available
 in this release.
</p>

<p>Full list of fixes:</p>

<ul>
 <li>
  Fixed incompatibility with Windows .NET / IIS 6 - may improve stability
  under other versions of IIS. (Zeev)
 </li>
 <li>
  Fixed bug that caused crashes or error notices on shutdown on threaded
  platforms. (Zeev)
 </li>
 <li>Fixed several crash bugs in the xslt extension. (Markus, Derick)</li>
 <li>
  Fixed problem with dbase not returning very large (larger than long)
  integers properly. (Vlad)
 </li>
 <li>Fixed several bugs and memleaks in the domxml extension. (Markus)</li>
 <li>
  Fixed bug in gmmktime() which was one hour off during standard time -
  bug #9878. Patch by bfoddy@mediaone.net. (jmoore)
 </li>
 <li>Fixed bug in gmdate() timezone handling on Windows - bug #13885. (jmoore)</li>
 <li>Fixed several crash bugs in the mcrypt extension. (Derick)</li>
 <li>
  Made the mcrypt extension compile with the libmcrypt 2.2 series again.
  (Sterling)
 </li>
 <li>
  Fixed a bug where the is_file() family of functions would in-correctly give
  an error when they were given filenames that didn\'t exist. (Sterling)
 </li>
 <li>
  Fixed a bug in the strtotime() function where it was incorrectly recognizing
  GMT +0100 and GMT -0100. (Derick)
 </li>
</ul>


</announcement>',
      ),
    ),
  ),
  '4.1.2' => 
  array (
    'version' => '4.1.2',
    'date' => '12 March 2002',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.1.2.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.2.0' => 
  array (
    'version' => '4.2.0',
    'date' => '22 April 2002',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.2.0.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>
 After an orderly QA process, PHP 4.2.0 is <a href="/downloads/">out</a>!<br/>
 [ <a href="/releases/4_2_0_fr.php">Version Française</a> ]
</p>

<h2>External variables</h2>

<p>
 The biggest change in PHP 4.2.0 concerns variable handling. <strong>External
 variables (from the environment, the HTTP request, cookies or the web server)
 are no longer registered in the global scope by default.</strong> The preferred
 method of accessing these external variables is by using the new Superglobal
 arrays, introduced in PHP 4.1.0. More information about this change:</p>

<ul>
 <li><a href="/variables.predefined">PHP Manual: Predefined variables</a></li>
 <li><a href="/releases/4_1_0.php">The PHP 4.1.0 release announcement</a></li>
 <li><a href="http://www.zend.com/zend/art/art-oertli.php">Thomas Oertli\'s article on secure programming in PHP</a></li>
</ul>

<h2>Compatibility</h2>

<p>
 The Apache Software Foundation recently released their first
 General Availability version of Apache 2. PHP 4.2.0 will have
 <strong>EXPERIMENTAL</strong> support for this version. You can
 build a DSO module for Apache 2 with --with-apxs2. We do
 <strong>not</strong> recommend that you use this in a production
 environment.
</p>
<p>
 PHP 4.2.0 still lacks certain key features on Mac OS X and
 Darwin, and isn\'t officially supported by the PHP Group on
 these platforms. Specifically, building PHP as a dynamically
 loaded Apache module isn\'t supported at this time. PHP 4.3.0,
 due to be released in August, 2002, will be the first PHP
 release to officially support Mac OS X. It, along with future
 Mac OS X and Apache releases, will enable full feature parity
 with other PHP platforms. <strong>Update:</strong>
 <a href="http://www.entropy.ch/software/macosx/php/">Instructions on
 overcoming these limitations</a>
</p>

<h2>Improvements</h2>

<p>PHP 4.2.0 includes several improvements:</p>

<ul>
 <li>
  <strong>External variables (from the environment, the HTTP request, cookies or
  the web server) are no longer registered as global variables</strong>
 </li>
 <li>Overhaul of the sockets extension</li>
 <li>Highly improved performance with file uploads</li>
 <li>
  The satellite and mailparse extensions were moved to PECL and are no longer
  bundled with the official PHP release
 </li>
 <li>The posix extension has been cleaned up</li>
 <li>iconv handling has been improved</li>
 <li>
  Output buffering support, which was introduced in PHP 4.1.0 has
  been stabilized
 </li>
 <li>Improved performance and stability of the domxml extension</li>
 <li>New multibyte regular expression support</li>
 <li><strong>LOTS</strong> of fixes and new functions</li>
</ul>

<p>
 For a full list of changes in PHP 4.2.0,
 <a href="/ChangeLog-4.php#4.2.0">see the ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.2.1' => 
  array (
    'version' => '4.2.1',
    'date' => '13 May 2002',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.2.1.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>[ <a href="/releases/4_2_1_fr.php">Version Française</a> ]</p>

<h2>Bugfix release</h2>

<p>
 This bug fix release solves a few bugs found in PHP 4.2.0.
 PHP 4.2.1 includes the following fixes:
</p>

<ul>
 <li>Fix for the MySQL extension not be able to connect to a MySQL server.</li>
 <li>Fix for a crash in the COM extension when using an outproc server.</li>
 <li>Fix for SID logic in the session extension.</li>
 <li>
  Fixes for the mbstring extension, including SJIS directory
  name handling and mb_output_buffer().
 </li>
 <li>
  Fix for a bug in socket_select() that could cause unexpected behavior when
  using a statement like $w = $e = array($sock);
 </li>
 <li>Almost full DOM compliance for the domxml extension, and fixes for several functions.</li>
 <li>Safe_mode checks for show_source(), parse_ini_file() and rmdir().</li>
</ul>

<p>
 For a full list of changes in PHP 4.2.1, see the
 <a href="/ChangeLog-4.php#4.2.1">ChangeLog</a>.
</p>

<h2>Compatibility</h2>

<p>
 PHP 4.2.1 also has improved (but still experimental) support for Apache version 2.
 We do <strong>not</strong> recommend that you use this in a production environment,
 but feel free to test it and report bugs to the <a href="http://bugs.php.net">bug
 system</a>.
</p>

<h2>External variables</h2>

<p>
 We would also like to attend you on a big change in PHP 4.2.0 concerning
 variable handling. <strong>External variables (from the environment, the HTTP
 request, cookies or the web server) are no longer registered in the global
 scope by default.</strong> The preferred method of accessing these external
 variables is by using the new Superglobal arrays, introduced in PHP 4.1.0.
 More information about this change:
</p>

<ul>
 <li><a href="/manual/en/language.variables.predefined.php">PHP Manual: Predefined variables</a></li>
 <li><a href="/release_4_1_0.php">The PHP 4.1.0 release announcement</a></li>
 <li><a href="http://www.zend.com/zend/art/art-oertli.php">Thomas Oertli\'s article on secure programming in PHP</a></li>
</ul>


</announcement>',
      ),
    ),
  ),
  '4.2.2' => 
  array (
    'version' => '4.2.2',
    'date' => '22 July 2002',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.2.2.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">

<h1>
 PHP Security Advisory: Vulnerability in PHP versions 4.2.0 and 4.2.1
</h1>

<p>[ <a href="/releases/4_2_2_fr.php">Version Française</a> ]</p>

<dl>
 <dt>Issued on:</dt>
 <dd>July 22, 2002</dd>
 <dt>Software:</dt>
 <dd>PHP versions 4.2.0 and 4.2.1</dd>
 <dt>Platforms:</dt>
 <dd>All</dd>
</dl>

<p>
 The PHP Group has learned of a serious security vulnerability in PHP
 versions 4.2.0 and 4.2.1. An intruder may be able to execute arbitrary
 code with the privileges of the web server. This vulnerability may be
 exploited to compromise the web server and, under certain conditions,
 to gain privileged access.
</p>

<h2>Description</h2>

<p>
 PHP contains code for intelligently parsing the headers of HTTP POST
 requests. The code is used to differentiate between variables and files
 sent by the user agent in a "multipart/form-data" request. This parser
 has insufficient input checking, leading to the vulnerability.
</p>

<p>
 The vulnerability is exploitable by anyone who can send HTTP POST
 requests to an affected web server. Both local and remote users, even
 from behind firewalls, may be able to gain privileged access.
</p>

<h2>Impact</h2>

<p>
 Both local and remote users may exploit this vulnerability to compromise
 the web server and, under certain conditions, to gain privileged access.
 So far only the IA32 platform has been verified to be safe from the
 execution of arbitrary code. The vulnerability can still be used on IA32
 to crash PHP and, in most cases, the web server.
</p>

<h2>Solution</h2>

<p>
 The PHP Group has released a new PHP version, 4.2.2, which incorporates
 a fix for the vulnerability. All users of affected PHP versions are
 encouraged to upgrade to this latest version. <a href="/downloads/">The
 downloads page</a> has the new 4.2.2 source tarballs, Windows binaries
 and source patches from 4.2.0 and 4.2.1 available for download.
</p>

<h2>Workaround</h2>

<p>
 If the PHP applications on an affected web server do not rely on HTTP
 POST input from user agents, it is often possible to deny POST requests
 on the web server.
</p>

<p>
 In the Apache web server, for example, this is possible with the
 following code included in the main configuration file or a top-level
 .htaccess file:
</p>

<pre>
&lt;Limit POST&gt;
   Order deny,allow
   Deny from all
&lt;/Limit&gt;
</pre>

<p>
 Note that an existing configuration and/or .htaccess file may have
 parameters contradicting the example given above.
</p>

<h2>Credits</h2>

<p>
 The PHP Group would like to thank Stefan Esser of e-matters GmbH for
 discovering this vulnerability. e-matters GmbH has also released an
 <a href="http://security.e-matters.de/advisories/022002.html">independent
 advisory</a>, describing the vulnerability in more detail.
</p>


</announcement>',
      ),
    ),
  ),
  '4.2.3' => 
  array (
    'version' => '4.2.3',
    'date' => '6 September 2002',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.2.3.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '4.3.0' => 
  array (
    'version' => '4.3.0',
    'date' => '27 December 2002',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.0.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


            <p>[ <a href="/releases/4_3_0_fr.php">Version Française</a> ]
            </p>

            <p>
                After a long and arduous 8 months of development and testing, PHP 4.3.0 is
                <a href="/downloads/">out</a>! With regard to scope, time, and effort, this
                is the largest 4.x release of PHP, and it further elevates PHP\'s standing as a
                serious contender in the general purpose scripting language arena.
            </p>

            <h2>Command line interface</h2>

            <p>
                This version finalizes the separate command line interface (CLI) that can be
                used for developing shell and desktop applications (with
                <a href="http://gtk.php.net/">PHP-GTK</a>). The CLI is always built, but
                installed automatically only if CGI version is disabled via --disable-cgi
                switch during configuration. Alternatively, one can use <strong>make
                install-cli
            </strong> target. On Windows CLI can be found in
                <strong>cli</strong>
                folder.
            </p>

            <p>
                CLI has a number of differences compared to other server APIs. More information
                can be found in the PHP Manual:
                <a href="/features.commandline">Using PHP from the command line</a>
            </p>

            <h2>Streams</h2>

            <p>
                A very important "under the hood" feature is the streams API. It introduces a
                unified approach to the handling of files, pipes, sockets, and other I/O
                resources in the PHP core and extensions.
            </p>
            <p>
                What this means for users is that any I/O function that works with streams
                (and that is almost all of them) can access built-in protocols, such as
                HTTP/HTTPS and FTP/FTPS, as well as custom protocols registered from PHP
                scripts. For more information please see:
                <a href="/wrappers">List
                    of Supported Protocols/Wrappers
                </a>
            </p>

            <h2>New build system</h2>

            <p>
                This iteration of the build system, among other things, replaces the slow
                recursive make with one global Makefile and eases the integration of proper
                dependencies. Automake is only needed for its aclocal tool. The build process is
                now more portable and less resource-consuming.
            </p>

            <h2>Improvements</h2>

            <p>PHP 4.3.0 has many improvements and enhancements:</p>

            <ul>
                <li>
                    <strong>
                        GD library is now bundled with the distribution and it is recommended
                        to always use the bundled version
                    </strong>
                </li>
                <li>vpopmail and cybermut extensions are moved to PECL</li>
                <li>
                    several deprecated extensions (aspell, ccvs, cybercash, icap)
                    and SAPIs (fastcgi, fhttpd) are removed
                </li>
                <li>speed improvements in a variety of string functions</li>
                <li>
                    Apache2 filter is improved, but is still considered experimental
                    (use with PHP in prefork and not worker (thread) model since many
                    extensions based on external libraries are not thread safe)
                </li>
                <li>various security fixes (imap, mysql, mcrypt, file upload, gd, etc)</li>
                <li>new SAPI for embedding PHP in other applications (experimental)</li>
                <li>much better test suite</li>
                <li>significant improvements in dba, gd, pcntl, sybase, and xslt extensions</li>
                <li>debug_backtrace() should help with debugging</li>
                <li>
                    error messages now contain URLs linking to pages describing the error or
                    function in question
                </li>
                <li>Zend Engine has some fixes and minor performance enhancements</li>
                <li>and <strong>TONS</strong> of other fixes, updates, new functions, etc
                </li>
            </ul>

            <p>
                For the full list of changes in PHP 4.3.0, see the
                <a href="/ChangeLog-4.php#4.3.0">ChangeLog</a>
                file.
            </p>


        </announcement>',
      ),
    ),
  ),
  '4.3.1' => 
  array (
    'version' => '4.3.1',
    'date' => '17 February 2003',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.1.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">

<h1>
PHP Security Advisory: CGI vulnerability in PHP version 4.3.0
</h1>

<dl>
 <dt>Issued on:</dt>
 <dd>February 17, 2003</dd>
 <dt>Software:</dt>
 <dd>PHP version 4.3.0</dd>
 <dt>Platforms:</dt>
 <dd>All</dd>
</dl>

<p>
 The PHP Group has learned of a serious security vulnerability in
 the CGI SAPI of PHP version 4.3.0.
</p>

<h2>Description</h2>

<p>
 PHP contains code for preventing direct access to the CGI binary with
 configure option "--enable-force-cgi-redirect" and php.ini option
 "cgi.force_redirect". In PHP 4.3.0 there is a bug which renders these
 options useless.
</p>

<p>
 NOTE: This bug does NOT affect any of the other SAPI modules.
 (such as the Apache or ISAPI modules, etc.)
</p>

<h2>Impact</h2>

<p>
 Anyone with access to websites hosted on a web server which employs
 the CGI module may exploit this vulnerability to gain access to any file
 readable by the user under which the webserver runs.
</p>

<p>
 A remote attacker could also trick PHP into executing arbitrary PHP code
 if attacker is able to inject the code into files accessible by the CGI.
 This could be for example the web server access-logs.
</p>

<h2>Solution</h2>

<p>
 The PHP Group has released a new PHP version, 4.3.1, which incorporates
 a fix for the vulnerability. All users of affected PHP versions are
 encouraged to upgrade to this latest version. <a href="/downloads/">The
 downloads page</a> has the new 4.3.1 source tarballs, Windows binaries
 and source patch from 4.3.0 available for download. You will only need
 to upgrade if you\'re using the CGI module of PHP 4.3.0. There are no
 other bugfixes contained in this release.
</p>

<h2>Workarounds</h2>

<p>None.</p>

<h2>Credits</h2>

<p>
 The PHP Group would like to thank Kosmas Skiadopoulos for discovering
 this vulnerability.
</p>


</announcement>',
      ),
    ),
  ),
  '4.3.10' => 
  array (
    'version' => '4.3.10',
    'date' => '15 Dec 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.10.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.3.10.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>[ <a href="/releases/4_3_10_fr.php">Version Française</a> ]</p>
<p>
PHP Development Team would like to announce the immediate release of <a href="/downloads/">PHP 4.3.10</a>. This is a
maintenance release that in addition to over 30 non-critical bug fixes addresses several very
serious security issues.
</p>
<p>
These include the following:
</p>
<p>
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1018">CAN-2004-1018</a> - shmop_write() out of bounds memory write access.<br/>
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1018">CAN-2004-1018</a> - integer overflow/underflow in pack() and unpack() functions.<br/>
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1019">CAN-2004-1019</a> - possible information disclosure, double free and negative reference index array underflow in deserialization code.<br/>
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1020">CAN-2004-1020</a> - addslashes() not escaping \\0 correctly.<br/>
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1063">CAN-2004-1063</a> - safe_mode execution directory bypass.<br/>
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1064">CAN-2004-1064</a> - arbitrary file access through path truncation.<br/>
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1065">CAN-2004-1065</a> - exif_read_data() overflow on long sectionname.<br/>
magic_quotes_gpc could lead to one level directory traversal with file uploads.
</p>
<p>All Users of PHP are strongly encouraged to upgrade to this release as soon as possible.</p>

<h2>Bugfix release</h2>

<p>
 Aside from the above mentioned issues this release includes the following important fixes:
</p>

<ul>
<li> Possible crash inside ftp_get().</li>
<li> get_current_user() crashes on Windows.</li>
<li> Possible crash in ctype_digit() on large numbers.</li>
<li> Crash when parsing <i>?getvariable[][</i>.</li>
<li> Possible crash in the curl_getinfo() function.</li>
<li> Double free when openssl_csr_new fails.</li>
<li> Crash when using unknown/unsupported session.save_handler and/or session.serialize_handler.</li>
<li> Prevent infinite recursion in url redirection.</li>
<li> Ensure that temporary files created by GD are removed.</li>
<li> Crash in fgetcsv() with negative length.</li>
<li> Improved performance of the foreach() construct.</li>
<li> Improved number handling on non-English locales.</li>
</ul>

<p>
 For a full list of changes in PHP 4.3.10, see the
 <a href="/ChangeLog-4.php#4.3.10">ChangeLog</a>.
 </p>


</announcement>',
      ),
    ),
  ),
  '4.3.11' => 
  array (
    'version' => '4.3.11',
    'date' => '31 Mar 2005',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.11.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.3.11.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>[ <a href="/releases/4_3_11_fr.php">Version Française</a> ]</p>
<p>
PHP Development Team is would like to announce the immediate release of <a href="/downloads/">PHP 4.3.11</a>.
This is a maintenance release that in addition to over 70 non-critical bug fixes addresses several
security issues inside the exif and fbsql extensions as well as the unserialize(),
swf_definepoly() and getimagesize() functions.
</p>

<p>All Users of PHP are strongly encouraged to upgrade to this release.</p>

<h2>Bugfix release</h2>

<ul>
<li> Crash in bzopen() if supplied path to non-existent file.</li>
<li> DOM crashing when attribute appended to Document.</li>
<li> unserialize() float problem on non-English locales.</li>
<li> Crash in msg_send() when non-string is stored without being serialized.</li>
<li> Possible infinite loop in imap_mail_compose().</li>
<li> Fixed crash in chunk_split(), when chunklen &gt; strlen.</li>
<li> session_set_save_handler crashes PHP when supplied non-existent object ref.</li>
<li> Memory leak in zend_language_scanner.c.</li>
<li> Compile failures of zend_strtod.c.</li>
<li> Fixed crash in overloaded objects &amp; overload() function.</li>
<li> cURL functions bypass open_basedir.</li>
</ul>

<p>
 For a full list of changes in PHP 4.3.11, see the
 <a href="/ChangeLog-4.php#4.3.11">ChangeLog</a>.
 </p>


</announcement>',
      ),
    ),
  ),
  '4.3.2' => 
  array (
    'version' => '4.3.2',
    'date' => '29 May 2003',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.2.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.3.2.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>[ <a href="/releases/4_3_2_fr.php">Version Française</a> ]</p>

<p>
 After a lengthy QA process, <a href="/downloads/">PHP 4.3.2</a> is finally out!<br/>
 This maintenance release solves a lot of bugs found in earlier PHP versions
 and is a <strong>strongly</strong> recommended upgrade for all users of PHP.
</p>

<h2>Bugfix release</h2>

<p>
 PHP 4.3.2 contains, among others, following important fixes, additions and improvements:
</p>

<ul>
 <li>Fixes several potentially hazardous integer and buffer overflows.</li>
 <li>Fixes for several 64-bit problems.</li>
 <li>
  New Apache 2.0 SAPI module (sapi/apache2handler,
  enabled with --with-apxs2).
 </li>
 <li>
  New session_regenerate_id() function. (Important feature
  against malicious session planting).
 </li>
 <li>Improvements to dba extension.</li>
 <li>Improvements to thttpd SAPI module.</li>
 <li>Dropped support for GDLIB version 1.x.x (php_gd.dll) on Windows.</li>
 <li>An unix man page for CLI version of PHP.</li>
 <li>
  New "disable_classes" php.ini option to allow administrators to
  disable certain classes for security reasons.
 </li>
 <li>..and a <strong>HUGE</strong> amount of other bug fixes!</li>
</ul>

<p>
 For a full list of changes in PHP 4.3.2, see the
 <a href="/ChangeLog-4.php#4.3.2">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.3.3' => 
  array (
    'version' => '4.3.3',
    'date' => '25 August 2003',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.3.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.3.3.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>[ <a href="/releases/4_3_3_fr.php">Version Française</a> ]</p>

<p>
 After a lengthy QA process, <a href="/downloads/">PHP 4.3.3</a> is finally out!<br/>
 This maintenance release solves a fair number of bugs found in prior PHP versions and
 addresses several security issues. All users are <strong>strongly</strong> advised to
 upgrade to 4.3.3 as soon as possible.
</p>

<h2>Bugfix release</h2>

<p>
 PHP 4.3.3 contains, among others, following important fixes, additions and improvements:
</p>

<ul>
 <li>Improved the engine to use POSIX/socket IO where feasible.</li>
 <li>Fixed several potentially hazardous integer and buffer overflows.</li>
 <li>Fixed corruption of multibyte character including 0x5c as second byte in multipart/form-data.</li>
 <li>Fixed each() to be binary safe for keys.</li>
 <li>Major improvements to the NSAPI SAPI.</li>
 <li>Improvements to the IMAP extension.</li>
 <li>Improvements to the InterBase extension.</li>
 <li>Added DBA handler \'inifile\' to support ini files.</li>
 <li>Added long options into CLI &amp; CGI (e.g. --version).</li>
 <li>Added a new parameter to preg_match*() that can be used to specify the starting offset in the subject string to match from.</li>
 <li>Upgraded the bundled Expat library to version 1.95.6</li>
 <li>Upgraded the bundled PCRE library to version 4.3</li>
 <li>Upgraded the bundled GD library to version GD 2.0.15</li>

 <li>Over 100 various bug fixes!</li>
</ul>

<p>
 For a full list of changes in PHP 4.3.3, see the
 <a href="/ChangeLog-4.php#4.3.3">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.3.4' => 
  array (
    'version' => '4.3.4',
    'date' => '03 November 2003',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.4.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>[ <a href="/releases/4_3_4_fr.php">Version Française</a> ]</p>

<p>
 After a lengthy QA process, <a href="/downloads/">PHP 4.3.4</a> is finally out!<br/>
 This is a medium size maintenance release, with a fair number of bug fixes. All users
 are encouraged to upgrade to 4.3.4.
</p>

<h2>Bugfix release</h2>

<p>
 PHP 4.3.4 contains, among others, following important fixes, additions and improvements:
</p>

<ul>
 <li>Fixed disk_total_space() and disk_free_space() under FreeBSD.</li>
 <li>Fixed FastCGI support on Win32.</li>
 <li>Fixed FastCGI being unable to bind to a specific IP.</li>
 <li>Fixed several bugs in mail() implementation on win32.</li>
 <li>Fixed crashes in a number of functions.</li>
 <li>Fixed compile failure on MacOSX 10.3 Panther.</li>

 <li>Over 60 various bug fixes!</li>
</ul>

<p>
 For a full list of changes in PHP 4.3.4, see the
 <a href="/ChangeLog-4.php#4.3.4">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.3.5' => 
  array (
    'version' => '4.3.5',
    'date' => '26 March 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.5.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>[ <a href="/releases/4_3_5_fr.php">Version Française</a> ]</p>

<p>
 PHP Development Team is proud to announce the release of <a href="/downloads/">PHP 4.3.5</a>.
 This is primarily a bug fix release, without any new features or additions. PHP 4.3.5
 is by far the most stable release of PHP to date and it is recommended that
 all users upgrade to this release whenever possible.
</p>

<h2>Bugfix release</h2>

<p>
 PHP 4.3.5 contains, among others, following important fixes, additions and improvements:
</p>

<ul>
 <li>Fixed INI leak between Apache virtual hosts.</li>
 <li>Fixed crashes inside fgetcsv() and make the function binary safe.</li>
 <li>Fixed compilation with early versions of GCC 3.0.</li>
 <li>Fixed a bug that prevented feof() from working correctly with sockets.</li>
 <li>Improved the matching algorithm inside the get_browser() function.</li>
 <li>Fixed resolving of open_basedir on Win32 systems.</li>
 <li>Fixed incorrect errors for non-existent directories when safe_mode is enabled.</li>
 <li>Bundled OpenSSL dlls on Win32 upgraded to 0.9.7c</li>
 <li>Updated bundled PostgreSQL library to version 7.4 in Windows distribution.</li>
 <li>Bundled PCRE library upgraded to 4.5</li>
 <li>Synchronized bundled GD library with GD 2.0.17</li>
 <li>A number of fixes for 64bit systems.</li>

 <li>Aside from the above mentioned fixes, this release resolves over 140 various bugs and implementational problems.</li>
</ul>

<p>
 For a full list of changes in PHP 4.3.5, see the
 <a href="/ChangeLog-4.php#4.3.5">ChangeLog</a>.
 </p>


</announcement>',
      ),
    ),
  ),
  '4.3.6' => 
  array (
    'version' => '4.3.6',
    'date' => '15 April 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.6.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>[ <a href="/releases/4_3_6_fr.php">Version Française</a> ]</p>

<p>
 PHP Development Team is proud to announce the release of PHP <a href="/downloads/">PHP 4.3.6</a>.
 This is is a bug fix release whose primary goal is to address two bugs which may
 result in crashes in PHP builds with thread-safety enabled. All users of PHP
 in a threaded environment (Windows) are strongly encouraged to upgrade to
 this release.
</p>

<h2>Bugfix release</h2>

<p>
 Aside from the above mentioned issues this release includes the following important fixes:
</p>

<ul>
 <li>Updated bundled PDFLib library to version 5.0.3p1 in Windows distribution.</li>
 <li>Synchronized bundled GD library with GD 2.0.22.</li>
 <li>Fixed bugs that prevented building of the GD extension against the external GD library versions 1.2-1.8.</li>
 <li>Fixed a bugs resulting in leakage of session settings across requests.</li>
 <li>Fixed several daylight savings bugs inside the mktime and strtotime functions.</li>
 <li>Fixed a bug that prevented compilation of cURL extension against libcurl 7.11.1</li>
 <li>Fixed a number of crashes inside domxml and mssql extensions.</li>

 <li>All in all this release fixes approximately 25 bugs that have been discovered
 since the 4.3.5 release.</li>
</ul>

<p>
 For a full list of changes in PHP 4.3.6, see the
 <a href="/ChangeLog-4.php#4.3.6">ChangeLog</a>.
 </p>


</announcement>',
      ),
    ),
  ),
  '4.3.7' => 
  array (
    'version' => '4.3.7',
    'date' => '03 June 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.7.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>[ <a href="/releases/4_3_7_fr.php">Version Française</a> ]</p>

<p>
 PHP Development Team is proud to announce the release of PHP <a href="/downloads/">PHP 4.3.7</a>.
 This is a maintenance release that in addition to several non-critical bug fixes, addresses an input
 validation vulnerability in escapeshellcmd() and escapeshellarg() functions on the Windows platform.
 Users of PHP on Windows are encouraged to upgrade to this release as soon as possible.
</p>

<h2>Bugfix release</h2>

<p>
 Aside from the above mentioned issues this release includes the following important fixes:
</p>

<ul>
 <li>Synchronized bundled GD library with GD 2.0.23.</li>
 <li>Fixed a bug that prevented compilation of GD extensions against FreeType 2.1.0-2.1.2.</li>
 <li>Fixed thread safety issue with informix connection id.</li>
 <li>Fixed incorrect resolving of relative paths by glob() in windows.</li>
 <li>Fixed mapping of Greek letters to html entities.</li>
 <li>Fixed a bug that caused an on shutdown crash when using PHP with Apache 2.0.49.</li>
 <li>Fixed a number of crashes inside pgsql, cpdf and gd extensions.</li>

 <li>All in all this release fixes over 30 bugs that have been discovered and resolved
 since the 4.3.6 release.</li>
</ul>

<p>
 For a full list of changes in PHP 4.3.7, see the
 <a href="/ChangeLog-4.php#4.3.7">ChangeLog</a>.
 </p>


</announcement>',
      ),
    ),
  ),
  '4.3.8' => 
  array (
    'version' => '4.3.8',
    'date' => '13 July 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.8.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<!--
<p>[ <a href="/releases/4_3_8_fr.php">Version Fran&ccedil;aise</a> ]</p>
-->

<p>
 PHP Development Team is would like to announce the immediate availability of <a href="/downloads/">PHP 4.3.8</a>.
 This release is made in response to several security issues that have been discovered since the
 4.3.7 release. All users of PHP are strongly encouraged to upgrade to PHP 4.3.8 as soon as possible.
</p>

<h2>Security Fixes release</h2>

<p>
 This release addresses several important security issues.
</p>

<p>
 For a full list of changes in PHP 4.3.8, see the
 <a href="/ChangeLog-4.php#4.3.8">ChangeLog</a>.
 </p>


</announcement>',
      ),
    ),
  ),
  '4.3.9' => 
  array (
    'version' => '4.3.9',
    'date' => '22 Sep 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.3.9.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.3.9.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>[ <a href="/releases/4_3_9_fr.php">Version Française</a> ]</p>
<p>
 PHP Development Team is proud to announce the immediate release of PHP <a href="/downloads/">PHP 4.3.9</a>.
 This is a maintenance release that in addition to over 50 non-critical bug fixes, addresses a problem
 with GPC input processing. This release also re-introduces ability to write
 GIF images via the bundled GD extension.
 All Users of PHP are encouraged to upgrade to this release as soon as possible.
</p>

<h2>Bugfix release</h2>

<p>
 Aside from the above mentioned issues this release includes the following important fixes:
</p>

<ul>
 <li>Implemented periodic PCRE compiled regexp cache cleanup, to avoid memory exhaustion</li>
 <li>Fixed strip_tags() to correctly handle \'\\0\' characters.</li>
 <li>Rewritten UNIX and Windows install help files.</li>
 <li>Fixed a file-descriptor leak with phpinfo() and other \'special\' URLs.</li>
 <li>Fixed possible crash inside php_shutdown_config().</li>
 <li>Fixed isset crashes on arrays.</li>
 <li>Fixed imagecreatefromstring() crashes with external GD library.</li>
 <li>Fixed fgetcsv() parsing of strings ending with escaped enclosures.</li>
 <li>Fixed overflow in array_slice(), array_splice(), substr(), substr_replace(), strspn(), strcspn().</li>
 <li>Fixed \'\\0\' in Authenticate header passed via safe_mode.</li>
 <li>Allow bundled GD to compile against freetype 2.1.2.</li>


 <li>All in all this release fixes over 50 bugs that have been discovered and resolved
 since the 4.3.8 release.</li>
</ul>

<p>
 For a full list of changes in PHP 4.3.9, see the
 <a href="/ChangeLog-4.php#4.3.9">ChangeLog</a>.
 </p>


</announcement>',
      ),
    ),
  ),
  '4.4.0' => 
  array (
    'version' => '4.4.0',
    'date' => '11 Jul 2005',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.4.0.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.4.0.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP Development Team would like to announce the immediate release of
<a href="/downloads/">PHP 4.4.0</a>.
</p>
<p>
This is a maintenance release that addresses a serious memory corruption
problem within PHP concerning references. If references were used in a wrong
way, PHP would often create memory corruptions which would not always surface
or be visible. In other cases it could cause variables and objects to change
type or class unexpectedly. If you encountered strange behavior like this, this
release might fix it. The increased middle digit was required because the fix that
corrected the problem with references changed PHP\'s internal API, breaking
binary compatibility with the PHP 4.3.* series. This means that all binary
extension modules need to be recompiled in order to work with this release.
</p>
<p>
As part of the solution for the reference bug, you are very likely to find that
your own or third-party PHP scripts, considered \'clean\' code under previous
versions of PHP, will now throw an E_NOTICE when references are incorrectly used
in the script. This is intended to alert developers to minor errors in their
approach, and does not affect the script\'s performance in any other way.
</p>
<p>
Besides the reference problem, this release also fixes numerous other bugs,
including a small security problem with our bundled shtool.
</p>

<h2>Bugfix release</h2>

<ul>
<li>Memory corruptions with references.</li>
<li>Small security problem with bundled shtool.</li>
</ul>

<p>
 For a full list of changes in PHP 4.4.0, see the
 <a href="/ChangeLog-4.php#4.4.0">ChangeLog</a>.
 </p>


</announcement>',
      ),
    ),
  ),
  '4.4.1' => 
  array (
    'version' => '4.4.1',
    'date' => '31 Oct 2005',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.4.1.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.4.1.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP Development Team would like to announce the immediate release of
<a href="/downloads/">PHP 4.4.1</a>.
</p>
<p>
This is a bug fix release, which addresses some security problems too. The
security issues that this release fixes are:
</p><ul>
<li>Fixed a Cross Site Scripting (<a href="http://www.cgisecurity.com/articles/xss-faq.shtml">XSS</a>)
	vulnerability in <a href="/phpinfo">phpinfo</a>() that could
	lead f.e. to cookie exposure, when a phpinfo() script is accidently left
	on a production server.</li>
<li>Fixed multiple safe_mode/open_basedir bypass vulnerabilities in ext/curl
	and ext/gd that could lead to exposure of files normally not accessible due
	to safe_mode or open_basedir restrictions.</li>
<li>Fixed a possible $GLOBALS overwrite problem in file upload handling,
	extract() and import_request_variables() that could lead to unexpected
	security holes in scripts assumed secure. (For more information, see <a href="http://www.hardened-php.net/globals-problem">here</a>).</li>
<li>Fixed a problem when a request was terminated due to memory_limit
	constraints during certain
	<a href="/parse_str">parse_str</a>() calls. In some cases
	this can result in register_globals being turned on.</li>
<li>Fixed an issue with trailing slashes in allowed basedirs. They were ignored
	by open_basedir checks, so that specified basedirs were handled as prefixes
	and not as full directory names.</li>
<li>Fixed an issue with calling <a href="/virtual">virtual</a>()
	on Apache 2. This allowed bypassing of certain configuration directives
	like safe_mode or open_basedir.</li>
<li>Updated to the latest pcrelib to fix a possible integer overflow
	vulnerability announced in <a href="http://cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2005-2491">CAN-2005-2491</a>.</li>
</ul>

<p>
This release also fixes 35 other defects, where the most important is the
the fix that removes a notice when passing a by-reference result of a function
as a by-reference value to another function. (Bug #<a href="http://bugs.php.net/33558">33558</a>).
</p>
<p>
 For a full list of changes in PHP 4.4.1, see the
 <a href="/ChangeLog-4.php#4.4.1">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.4.2' => 
  array (
    'version' => '4.4.2',
    'date' => '13 Jan 2006',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.4.2.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.4.2.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP Development Team would like to announce the immediate release of
<a href="/downloads/">PHP 4.4.2</a>.
</p>
<p>
This is a bug fix release, which addresses some security problems too. The
major points that this release corrects are:
</p><ul>
<li>Prevent header injection by limiting each header to a single line.</li>
<li>Possible XSS inside error reporting functionality.</li>
<li>Missing safe_mode/open_basedir checks into cURL extension.</li>
<li>Apache 2 regression with sub-request handling on non-Linux systems.</li>
<li>key() and current() regression related to references.</li>
</ul>

<p>
This release also fixes about 30 other defects.
</p>
<p>
 For a full list of changes in PHP 4.4.2, see the
 <a href="/ChangeLog-4.php#4.4.2">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.4.3' => 
  array (
    'version' => '4.4.3',
    'date' => '03 Aug 2006',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.4.3.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.4.3.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the release of <a href="/downloads.php#v4">PHP 4.4.3</a>.
This release combines small number of bug fixes and resolves a number of security issues.
All PHP 4.x users are encouraged to upgrade to this release as soon as possible.
</p>

<p>
The security issues resolved include the following:
</p><ul>
	<li>Disallow certain characters in session names.</li>
	<li>Fixed a buffer overflow inside the wordwrap() function.</li>
	<li>Prevent jumps to parent directory via the 2nd parameter of the tempnam() function.</li>
	<li>Improved safe_mode check for the error_log() function.</li>
	<li>Fixed cross-site scripting inside the phpinfo() function.</li>
</ul>


<p>
The release also includes about 20 bug fixes and an upgraded PCRE library
(version 6.6).
</p>

<p>
 For a full list of changes in PHP 4.4.3, see the
 <a href="/ChangeLog-4.php#4.4.3">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.4.4' => 
  array (
    'version' => '4.4.4',
    'date' => '17 Aug 2006',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.4.4.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.4.4.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
This release address a series of locally exploitable security problems
discovered since PHP 4.4.3.  All PHP users are encouraged to upgrade to this
release as soon as possible.
</p>

<p>
This release provides the following security fixes:
</p><ul>
	<li>Added missing safe_mode/open_basedir checks inside the error_log(), file_exists(), imap_open() and imap_reopen() functions.</li>
	<li>Fixed overflows inside str_repeat() and wordwrap() functions on 64bit systems.</li>
	<li>Fixed possible open_basedir/safe_mode bypass in cURL extension.</li>
	<li>Fixed overflow in GD extension on invalid GIF images.</li>
	<li>Fixed a buffer overflow inside sscanf() function.</li>
	<li>Fixed memory_limit restriction on 64 bit system.</li>
</ul>


<p>
In addition to the security fixes, both releases include a small number of non-security related bug fixes.
</p>

<p>
 For a full list of changes in PHP 4.4.4, see the
 <a href="/ChangeLog-4.php#4.4.4">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.4.5' => 
  array (
    'version' => '4.4.5',
    'date' => '14 Feb 2007',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.4.5.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.4.5.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate availability of
PHP 4.4.5.  This release is a stability and security enhancement of the 4.4.X
branch, and all users are strongly encouraged to upgrade to it as soon as
possible.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 4.4.5:</b>
</p>
<ul>
<li>Fixed possible safe_mode &amp; open_basedir bypasses inside the session extension.</li>
<li>Fixed unserialize() abuse on 64 bit systems with certain input strings.</li>
<li>Fixed possible overflows and stack corruptions in the session extension.</li>
<li>Fixed an underflow inside the internal sapi_header_op() function.</li>
<li>Fixed possible overflows inside zip &amp; imap extensions.</li>
<li>Fixed non-validated resource destruction inside the shmop extension.</li>
<li>Fixed a possible overflow in the str_replace() function.</li>
<li>Fixed possible clobbering of super-globals in several code paths.</li>
<li>Fixed a possible information disclosure inside the wddx extension.</li>
<li>Fixed a possible string format vulnerability in *print() functions on 64 bit systems.</li>
<li>Fixed a possible buffer overflow inside ibase_{delete,add,modify}_user() function.</li>
<li>Fixed a string format vulnerability inside the odbc_result_all() function.</li>
<li>Fixed a possible buffer overflow inside mail() function on Windows.</li>
</ul>

<p>
The majority of the security vulnerabilities discovered and resolved can in
most cases be only abused by local users and cannot be triggered remotely.
However, some of the above issues can be triggered remotely in certain
situations, or exploited by malicious local users on shared hosting setups
utilizing PHP as an Apache module. Therefore, we strongly advise all users of
PHP, regardless of the version to upgrade to 4.4.5 release as soon as possible.
PHP 5.2.1 with equivalent security corrections is <a href="5_2_1.php">available</a> as well.
</p>

<p>
In addition to the security fixes, this release includes a number of
non-security related bug fixes.
</p>

<p>
 For a full list of changes in PHP 4.4.5, see the
 <a href="/ChangeLog-4.php#4.4.5">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.4.6' => 
  array (
    'version' => '4.4.6',
    'date' => '01 Mar 2007',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-4.4.6.tar.bz2',
        'sha256' => '',
        'md5' => '5db283824310c87efb18c76b4735c4bd',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-4.4.6.tar.gz',
        'sha256' => '',
        'md5' => '07c607fcf12435f0078d72fe0de4e3c0',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate availability of
PHP 4.4.6.  This release addresses a crash problem with the session extension
when register_globals is turned on that was introduced in PHP 4.4.5. This
release comes also with the new version 7.0 of PCRE and it addresses a number
of minor bugs.
</p>

<p>
 For a full list of changes in PHP 4.4.6, see the
 <a href="/ChangeLog-4.php#4.4.6">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '4.4.7' => 
  array (
    'version' => '4.4.7',
    'date' => '03 May 2007',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 4.4.7 (tar.bz2)',
        'filename' => 'php-4.4.7.tar.bz2',
        'sha256' => '',
        'md5' => '3f21b44d37a57ca3876d3aea713c700d',
        'date' => '03 May 2007',
      ),
      1 => 
      array (
        'name' => 'PHP 4.4.7 (tar.gz)',
        'filename' => 'php-4.4.7.tar.gz',
        'sha256' => '',
        'md5' => '2669d2049822ac14abb263703d24f643',
        'date' => '03 May 2007',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate availability of
PHP 4.4.7.  This release continues to improve the security and the stability of
the 4.4 branch and all users are strongly encouraged to upgrade to it as soon
as possible.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 4.4.7:</b>
</p>
<ul>
	<li>Fixed CVE-2007-1001, GD wbmp used with invalid image size (by Ivan Fratric)</li>
	<li>Fixed asciiz byte truncation inside mail() (MOPB-33 by Stefan Esser)</li>
	<li>Fixed a bug in mb_parse_str() that can be used to activate register_globals (MOPB-26 by Stefan Esser)</li>
	<li>Fixed unallocated memory access/double free in in array_user_key_compare() (MOPB-24 by Stefan Esser)</li>
	<li>Fixed a double free inside session_regenerate_id() (MOPB-22 by Stefan Esser)</li>
	<li>Added missing open_basedir &amp; safe_mode checks to zip:// and bzip:// wrappers. (MOPB-21 by Stefan Esser).</li>
	<li>Limit nesting level of input variables with max_input_nesting_level as fix for (MOPB-03 by Stefan Esser)</li>
	<li>XSS in phpinfo() (MOPB-8 by Stefan Esser)</li>
	<li>Fixed CRLF injection inside ftp_putcmd(). (by loveshell[at]Bug.Center.Team)</li>
	<li>Fixed a possible super-global overwrite inside import_request_variables(). (by Stefano Di Paola, Stefan Esser)</li>
	<li>Fixed a remotely trigger-able buffer overflow inside bundled libxmlrpc library. (by Stanislav Malyshev)</li>
</ul>

<p>
While majority of the issues outlined above are local, few issues such as the
XML-RPC overflows can be triggered remotely and therefor should be considered
critical. If you use the XML-RPC extension consider upgrading as soon as
possible.
</p>

<p>
<b>Other improvements of PHP 4.4.7 include:</b>
</p>
<ul>
	<li>About 10 bug fixes.</li>
</ul>

<p>
 For a full list of changes in PHP 4.4.7, see the <a href="/ChangeLog-4.php#4.4.7">ChangeLog</a>.
</p>



</announcement>',
      ),
    ),
  ),
  '4.4.8' => 
  array (
    'version' => '4.4.8',
    'date' => '03 January 2008',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 4.4.8 (tar.bz2)',
        'filename' => 'php-4.4.8.tar.bz2',
        'sha256' => '',
        'md5' => 'ed31e77414e0331e787487b53732dbca',
        'date' => '03 January 2008',
      ),
      1 => 
      array (
        'name' => 'PHP 4.4.8 (tar.gz)',
        'filename' => 'php-4.4.8.tar.gz',
        'sha256' => '',
        'md5' => '8ad5d1ca793d55b24cd82e591248c04e',
        'date' => '03 January 2008',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate availability of
PHP 4.4.8.  It continues to improve the security and the stability of the 4.4
branch and all users are strongly encouraged to upgrade to it as soon as
possible. This release wraps up all the outstanding patches for the PHP 4.4
series, and is therefore the last normal PHP 4.4 release. If necessary,
releases to address security issues could be made until 2008-08-08.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 4.4.8:</b>
</p>
<ul>
	<li>Improved fix for MOPB-02-2007.</li>
	<li>Fixed an integer overflow inside chunk_split(). Identified by Gerhard Wagner.</li>
	<li>Fixed integer overlow in str[c]spn().</li>
	<li>Fixed regression in glob when open_basedir is on introduced by #41655 fix.</li>
	<li>Fixed money_format() not to accept multiple %i or %n tokens.</li>
	<li>Addded "max_input_nesting_level" php.ini option to limit nesting level of input variables. Fix for MOPB-03-2007.</li>
	<li>Fixed INFILE LOCAL option handling with MySQL - now not allowed when open_basedir or safe_mode is active.</li>
	<li>Fixed session.save_path and error_log values to be checked against open_basedir and safe_mode (CVE-2007-3378).</li>
</ul>

<p>
 For a full list of changes in PHP 4.4.8, see the <a href="/ChangeLog-4.php#4.4.8">ChangeLog</a>.
</p>



</announcement>',
      ),
    ),
  ),
  '4.4.9' => 
  array (
    'version' => '4.4.9',
    'date' => '07 August 2008',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 4.4.9 (tar.bz2)',
        'filename' => 'php-4.4.9.tar.bz2',
        'sha256' => '',
        'md5' => '2e3b2a0e27f10cb84fd00e5ecd7a1880',
        'date' => '07 August 2008',
      ),
      1 => 
      array (
        'name' => 'PHP 4.4.9 (tar.gz)',
        'filename' => 'php-4.4.9.tar.gz',
        'sha256' => '',
        'md5' => '9bcc1aba50be0dfeeea551d018375548',
        'date' => '07 August 2008',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate availability of
PHP 4.4.9.  It continues to improve the security and the stability of the 4.4
branch and all users are strongly encouraged to upgrade to it as soon as
possible. This release wraps up all the outstanding patches for the PHP 4.4
series, and is therefore the <b>last</b> PHP 4.4 release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 4.4.9:</b>
</p>
<ul>
	<li>Updated PCRE to version 7.7.</li>
	<li>Fixed overflow in memnstr().</li>
	<li>Fixed crash in imageloadfont when an invalid font is given.</li>
	<li>Fixed open_basedir handling issue in the curl extension.</li>
	<li>Fixed mbstring.func_overload set in .htaccess becomes global.</li>
</ul>

<p>
 For a full list of changes in PHP 4.4.9, see the <a href="/ChangeLog-4.php#4.4.9">ChangeLog</a>.
</p>



</announcement>',
      ),
    ),
  ),
  '5.0.0' => 
  array (
    'version' => '5.0.0',
    'date' => '13 July 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.0.0.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '5.0.1' => 
  array (
    'version' => '5.0.1',
    'date' => '12 Aug 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.0.1.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '5.0.2' => 
  array (
    'version' => '5.0.2',
    'date' => '23 Sep 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.0.2.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '5.0.3' => 
  array (
    'version' => '5.0.3',
    'date' => '15 Dec 2004',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.0.3.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '5.0.4' => 
  array (
    'version' => '5.0.4',
    'date' => '31 Mar 2005',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.0.4.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '5.0.5' => 
  array (
    'version' => '5.0.5',
    'date' => '05 Sep 2005',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.0.5.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
    ),
  ),
  '5.1.0' => 
  array (
    'version' => '5.1.0',
    'date' => '24 Nov 2005',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.1.0.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the release of PHP <a href="/downloads/">PHP 5.1.0</a>.<br/>
Some of the key features of <a href="/downloads/">PHP 5.1.0</a> include:
</p>
<p>
</p><ul>
<li>A complete rewrite of date handling code, with improved timezone support.</li>
<li>Significant performance improvements compared to PHP 5.0.X.</li>
<li>PDO extension is now enabled by default.</li>
<li>Over 30 new functions in various extensions and built-in functionality.</li>
<li>Bundled libraries, PCRE and SQLite upgraded to latest versions.</li>
<li>Over 400 various bug fixes.</li>
<li>PEAR upgraded to version 1.4.5</li>
</ul>


<p>
 For a full list of changes in PHP 5.1.0, see the
 <a href="/ChangeLog-5.php#5.1.0">ChangeLog</a>.
</p>

<p>
In addition to new features, this release includes a number of important security fixes:
</p><ul>
<li>Fixed a Cross Site Scripting (<a href="http://www.cgisecurity.com/articles/xss-faq.shtml">XSS</a>)
	vulnerability in <a href="/phpinfo">phpinfo</a>() that could
	lead f.e. to cookie exposure, when a phpinfo() script is accidently left
	on a production server.</li>
<li>Fixed multiple safe_mode/open_basedir bypass vulnerabilities in ext/curl
	and ext/gd that could lead to exposure of files normally not accessible due
	to safe_mode or open_basedir restrictions.</li>
<li>Fixed a possible $GLOBALS overwrite problem in file upload handling,
	extract() and import_request_variables() that could lead to unexpected
	security holes in scripts assumed secure. (For more information, see <a href="http://www.hardened-php.net/globals-problem">here</a>).</li>
<li>Fixed a problem when a request was terminated due to memory_limit
	constraints during certain
	<a href="/parse_str">parse_str</a>() calls. In some cases
	this can result in register_globals being turned on.</li>
<li>Fixed an issue with trailing slashes in allowed basedirs. They were ignored
	by open_basedir checks, so that specified basedirs were handled as prefixes
	and not as full directory names.</li>
<li>Fixed an issue with calling <a href="/virtual">virtual</a>()
	on Apache 2. This allowed bypassing of certain configuration directives
	like safe_mode or open_basedir.</li>
<li>Updated to the latest pcrelib to fix a possible integer overflow
	vulnerability announced in <a href="http://cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2005-2491">CAN-2005-2491</a>.</li>
<li>Possible header injection in mb_send_mail() function via the "To" address, the first parameter of the function.</li>
</ul>


<p>
All users of PHP 5.0 and early adopters of 5.1 betas are strongly advised to upgrade to 5.1 as soon as
possible. Furthermore, 5.1 branch obsoletes the 5.0 PHP branch.
</p>

<p><a href="/migration51">Upgrading Guide</a> is available to ease the transition from prior PHP versions.</p>


</announcement>',
      ),
    ),
  ),
  '5.1.1' => 
  array (
    'version' => '5.1.1',
    'date' => '28 Nov 2005',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.1.1.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">
            <p>
                The PHP Development Team would like to announce the immediate release of
                <a href="/downloads/">PHP 5.1.1</a>.
            </p>
            <p>
                This is a regression correction release aimed at addressing several issues
                that may cause issues for certain applications. The main fixes found in this
                release include the following:
            </p>
            <ul>
                <li>Native date class is withdrawn to prevent namespace conflict with PEAR\'s date package.</li>
                <li>Fixed fatal parse error when the last line of the script is a PHP comment.</li>
                <li>eval() hangs when the code being evaluated ends with a comment.</li>
                <li>Usage of \\{$var} in PHP 5.1.0 resulted in the output of {$var} instead of the $var variable\'s value
                    enclosed in {}.
                </li>
                <li>Fixed inconsistency in the format of PHP_AUTH_DIGEST between Apache 1 and 2 sapis.</li>
                <li>Improved safe_mode/open_basedir checks inside the cURL extension.</li>
            </ul>

            <p>
                For a full list of changes in PHP 5.1.1, see the
                <a href="/ChangeLog-5.php#5.1.1">ChangeLog</a>.
            </p>
        </announcement>',
      ),
    ),
  ),
  '5.1.2' => 
  array (
    'version' => '5.1.2',
    'date' => '12 Jan 2006',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.1.2.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the release of <a href="/downloads/">PHP 5.1.2</a>.
This release combines small feature enhancements with a fair number of
bug fixes and addresses three security issues. All PHP 5 users are encouraged to
upgrade to this release.
</p>

<p>
The security issues resolved include the following:
</p><ul>
<li>HTTP Response Splitting has been addressed in ext/session and in the
   header() function.  Header() can no longer be used to send multiple
   response headers in a single call.
</li>
<li>Format string vulnerability in ext/mysqli.</li>
<li>Possible cross-site scripting problems in certain error conditions.</li>
</ul>


<p>
The feature enhancements include the following notables:
</p><ul>
<li>Hash extension was added to core and is now enabled by default. This
    extension provides support for most common hashing algorithms without
    reliance on 3rd party libraries.</li>
<li>XMLWriter was added and enabled by default.</li>
<li>New OCI8 extension that includes numerous fixes.</li>
<li>PNG compression support added to the GD extension.</li>
<li>Added --enable-gcov configure option to enable C-level code coverage.</li>
<li>getNamespaces() and getDocNamespaces() methods added to SimpleXML extension.</li>
</ul>


<p>
The release also includes over 85 bug fixes with a focus on:
</p><ul>
<li>Correction of the many regressions in the strtotime() function.</li>
<li>Fixes of several crashes, leaks and memory corruptions found in the
    imap, pdo, gd, mysqli, mcrypt and soap extensions.</li>
<li>Corrected problems with the usage of SSI and virtual() in the Apache2 SAPI.</li>
<li>Build fixes for iconv and sybase_ct extensions.</li>
<li>Fixed the previously broken Sun(rise|set) functions.</li>
<li>SQLite libraries upgraded to 2.8.17 and 3.2.8
</li><li>Win32 binaries now include libxml2-2.6.22 and libxslt-1.1.15.</li>
</ul>


<p>
 For a full list of changes in PHP 5.1.2, see the
 <a href="/ChangeLog-5.php#5.1.2">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.1.3' => 
  array (
    'version' => '5.1.3',
    'date' => '02 May 2006',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.1.3.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the release of <a href="/downloads/">PHP 5.1.3</a>.
This release combines small number of feature enhancements with a significant amount of bug fixes and resolves a number of security issues.
All PHP users are encouraged to upgrade to this release as soon as possible.
</p>

<p>
The security issues resolved include the following:
</p><ul>
	<li>Disallow certain characters in session names.</li>
	<li>Fixed a buffer overflow inside the wordwrap() function.</li>
	<li>Prevent jumps to parent directory via the 2nd parameter of the tempnam() function.</li>
	<li>Enforce safe_mode for the source parameter of the copy() function.</li>
	<li>Fixed cross-site scripting inside the phpinfo() function.</li>
	<li>Fixed offset/length parameter validation inside the substr_compare() function.</li>
	<li>Fixed a heap corruption inside the session extension.</li>
	<li>Fixed a bug that would allow variable to survive unset().</li>
</ul>


<p>
The feature enhancements include the following notables:
</p><ul>
	<li>The use of the var keyword to declare properties no longer raises a deprecation E_STRICT.</li>
	<li>FastCGI interface was completely reimplemented.</li>
	<li>Multitude of improvements to the SPL, SimpleXML, GD, CURL and Reflection extensions.</li>
	<li>Support for many additional date formats added to the strtotime() function.</li>
	<li>A number of performance improvements added to the engine and the core extensions.</li>
	<li>Added imap_savebody() that allows message body to be written to a file.</li>
	<li>Added lchown() and lchgrp() to change user/group ownership of symlinks.</li>
	<li>Upgraded bundled PCRE library to version 6.6</li>
</ul>


<p>
The release also includes over 120 bug fixes with a focus on:
</p><ul>
	<li>Make auto_globals_jit work without too many INI changes.</li>
	<li>Fixed tiger hash algorithm generating wrong results on big endian platforms.</li>
	<li>Fixed a number of errors in the SOAP extension.</li>
	<li>Fixed recursion handling in the serialize() functionality.</li>
	<li>Make is_*() function account of open_basedir restrictions.</li>
	<li>Fixed a number of crashes in the DOM and PDO extensions.</li>
	<li>Addressed a number of regressions in the strtotime() function.</li>
	<li>Make memory_limit work in Win32 systems.</li>
	<li>Fixed a deadlock in the sqlite extension caused by the sqlite_fetch_column_types() function.</li>
	<li>Fixed memory leaks in the realpath() cache.</li>
</ul>


<p>
 For a full list of changes in PHP 5.1.3, see the
 <a href="/ChangeLog-5.php#5.1.3">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.1.4' => 
  array (
    'version' => '5.1.4',
    'date' => '04 May 2006',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-5.1.4.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.1.4.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
A critical bug with file uploads as well as the fastcgi sapi has been discovered in PHP 5.1.3 and a new PHP release 5.1.4 has been
 made available to address these two issues. All PHP users are encouraged to upgrade to this release as soon as possible.
</p>

<p>
This release provides fixes for the following bugs:
</p><ul>
	<li>Fixed problems with file uploads and the $_POST array handling.</li>
	<li>Resolved multiple problems with the FastCGI sapi.</li>
	<li>Fixed possible crash in highlight_string().</li>
	<li>Fixed cloning of DOM Documents and Noded.</li>
	<li>Several fixes to PDO ODBC driver.</li>
</ul>


<p>
 For a full list of changes in PHP 5.1.4, see the
 <a href="/ChangeLog-5.php#5.1.4">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.1.5' => 
  array (
    'version' => '5.1.5',
    'date' => '17 Aug 2006',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-5.1.5.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.1.5.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
This release address a series of locally exploitable security problems discovered since PHP 5.1.4.
All PHP users are encouraged to upgrade to this release as soon as possible.
</p>

<p>
This release provides the following security fixes:
</p><ul>
	<li>Added missing safe_mode/open_basedir checks inside the error_log(), file_exists(), imap_open() and imap_reopen() functions.</li>
	<li>Fixed overflows inside str_repeat() and wordwrap() functions on 64bit systems.</li>
	<li>Fixed possible open_basedir/safe_mode bypass in cURL extension and with realpath cache.</li>
	<li>Fixed overflow in GD extension on invalid GIF images.</li>
	<li>Fixed a buffer overflow inside sscanf() function.</li>
	<li>Fixed an out of bounds read inside stripos() function.</li>
	<li>Fixed memory_limit restriction on 64 bit system.</li>
</ul>


<p>
In addition to the security fixes, both releases include a small number of non-security related bug fixes.
</p>

<p>
 For a full list of changes in PHP 5.1.5, see the
 <a href="/ChangeLog-5.php#5.1.5">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.1.6' => 
  array (
    'version' => '5.1.6',
    'date' => '24 Aug 2006',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-5.1.6.tar.bz2',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.1.6.tar.gz',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
This release is a re-release of PHP 5.1.5, which was missing the fix for memory_limit restriction
on 64 bit systems. If you rely on this functionality and use 64bit machines, you are advised to upgrade.
</p>

<p>
 For a full list of changes in PHP 5.1.6, see the
 <a href="/ChangeLog-5.php#5.1.6">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.2.0' => 
  array (
    'version' => '5.2.0',
    'date' => '02 Nov 2006',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-5.2.0.tar.bz2',
        'sha256' => '',
        'md5' => 'e6029fafcee029edcfa2ceed7a005333',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.2.0.tar.gz',
        'sha256' => '',
        'md5' => '52d7e8b3d8d7573e75c97340f131f988',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the immediate release of PHP
5.2.0. This release is a major improvement in the 5.X series, which includes a
large number of new features, bug fixes and security enhancements.
</p>

<p>
<b>The key features of PHP 5.2.0 include:</b>
</p>
<ul>
	<li>New memory manager for the Zend Engine with improved performance and a more accurate memory usage tracking.</li>
	<li>Input filtering extension was added and enabled by default.</li>
	<li>JSON extension was added and enabled by default.</li>
	<li>ZIP extension for creating and editing zip files was introduced.</li>
	<li>Hooks for tracking file upload progress were introduced.</li>
	<li>Introduced E_RECOVERABLE_ERROR error mode.</li>
	<li>Introduced DateTime and DateTimeZone objects with methods to manipulate date/time information.</li>
	<li>Upgraded bundled SQLite, PCRE libraries.</li>
	<li>Upgraded OpenSSL, MySQL and PostgreSQL client libraries for Windows installations.</li>
	<li>Many performance improvements.</li>
	<li>Over 200 bug fixes.</li>
</ul>
<p>
<b>Security Enhancements and Fixes in PHP 5.2.0:</b>
</p>
<ul>
	<li>Made PostgreSQL escaping functions in PostgreSQL and PDO extension keep track of character set encoding whenever possible.</li>
	<li>Added allow_url_include, set to Off by default to disallow use of URLs for include and require.</li>
	<li>Disable realpath cache when open_basedir and safe_mode are being used.</li>
	<li>Improved safe_mode enforcement for error_log() function.</li>
	<li>Fixed a possible buffer overflow in the underlying code responsible for htmlspecialchars() and htmlentities() functions.</li>
	<li>Added missing safe_mode and open_basedir checks for the cURL extension.</li>
	<li>Fixed overflow in str_repeat() &amp; wordwrap() functions on 64bit machines.</li>
	<li>Fixed handling of long paths inside the tempnam() function.</li>
	<li>Fixed safe_mode/open_basedir checks for session.save_path, allowing them to account for extra parameters.</li>
	<li>Fixed ini setting overload in the ini_restore() function.</li>
</ul>

<p>
All users of PHP, especially those using earlier PHP 5 releases are advised
to upgrade to this release as soon as possible. This release also obsoletes
the 5.1 branch of PHP.
</p>

<p>
For users upgrading from PHP 5.0 and PHP 5.1 there is an upgrading guide
available <a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.0.
</p>

<p>
 For a full list of changes in PHP 5.2.0, see the
 <a href="/ChangeLog-5.php#5.2.0">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.2.1' => 
  array (
    'version' => '5.2.1',
    'date' => '08 Feb 2007',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-5.2.1.tar.bz2',
        'sha256' => '',
        'md5' => '261218e3569a777dbd87c16a15f05c8d',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.2.1.tar.gz',
        'sha256' => '',
        'md5' => '604eaee2b834bb037d2c83e53e300d3f',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate availability of PHP 5.2.1.
This release is a major stability and security enhancement of the 5.X branch, and all
users are strongly encouraged to upgrade to it as soon as possible.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.1:</b>
</p>
<ul>
	<li>Fixed possible safe_mode &amp; open_basedir bypasses inside the session extension.</li>
	<li>Prevent search engines from indexing the phpinfo() page.</li>
	<li>Fixed a number of input processing bugs inside the filter extension.</li>
	<li>Fixed unserialize() abuse on 64 bit systems with certain input strings.</li>
	<li>Fixed possible overflows and stack corruptions in the session extension.</li>
	<li>Fixed an underflow inside the internal sapi_header_op() function.</li>
	<li>Fixed allocation bugs caused by attempts to allocate negative values in some code paths.</li>
	<li>Fixed possible stack overflows inside zip, imap &amp; sqlite extensions.</li>
	<li>Fixed several possible buffer overflows inside the stream filters.</li>
	<li>Fixed non-validated resource destruction inside the shmop extension.</li>
	<li>Fixed a possible overflow in the str_replace() function.</li>
	<li>Fixed possible clobbering of super-globals in several code paths.</li>
	<li>Fixed a possible information disclosure inside the wddx extension.</li>
	<li>Fixed a possible string format vulnerability in *print() functions on 64 bit systems.</li>
	<li>Fixed a possible buffer overflow inside mail() and  ibase_{delete,add,modify}_user() functions.</li>
	<li>Fixed a string format vulnerability inside the odbc_result_all() function.</li>
	<li>Memory limit is now enabled by default.</li>
	<li>Added internal heap protection.</li>
	<li>Extended filter extension support for $_SERVER in CGI and apache2 SAPIs.</li>
</ul>

<p>
The majority of the security vulnerabilities discovered and resolved can in most cases be only abused by local users and cannot be triggered
remotely. However, some of the above issues can be triggered remotely in certain situations, or exploited by malicious local users on shared hosting setups
utilizing PHP as an Apache module. Therefore, we strongly advise all users of PHP, regardless of the version to upgrade to 5.2.1 release
as soon as possible. PHP 4.4.5 with equivalent security corrections is <a href="4_4_5.php">available</a> as well.
</p>

<p>
<b>The key improvements of PHP 5.2.1 include:</b>
</p>
<ul>
	<li>Several performance improvements in the engine, streams API and some Windows specific optimizations.</li>
	<li>PDO_MySQL now uses buffered queries by default and emulates prepared statements to bypass limitations of MySQL\'s prepared statement API.</li>
	<li>Many improvements and enhancements to the filter and zip extensions.</li>
	<li>Memory limit is now always enabled, this includes Windows builds, with a default limit of 128 megabytes.</li>
	<li>Added several performance optimizations using faster Win32 APIs (this change means that PHP no longer supports Windows 98).</li>
	<li>FastCGI speed optimized build of PHP for Windows made available for downloading.</li>
	<li>Over 180 bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.1.
</p>

<p>
 For a full list of changes in PHP 5.2.1, see the <a href="/ChangeLog-5.php#5.2.1">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.2.10' => 
  array (
    'version' => '5.2.10',
    'date' => '18 June 2009',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.10 (tar.bz2)',
        'filename' => 'php-5.2.10.tar.bz2',
        'sha256' => '',
        'md5' => '15c7b5a87f57332d6fc683528e28247b',
        'date' => '18 June 2009',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.10 (tar.gz)',
        'filename' => 'php-5.2.10.tar.gz',
        'sha256' => '',
        'md5' => '85753ba2909ac9fae5bca516adbda9e9',
        'date' => '18 June 2009',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.10. This release focuses on improving the stability of
the PHP 5.2.x branch with over 100 bug fixes, one of which is security related.
All users of PHP are encouraged to upgrade to this release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.10:</b>
</p>
<ul>
	<li>Fixed bug #48378 (exif_read_data() segfaults on certain corrupted .jpeg files). (Pierre)</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.10 include:</b>
</p>
<ul>
	<li>Added "ignore_errors" option to http fopen wrapper. (David Zulke, Sara)</li>
	<li>Fixed memory corruptions while reading properties of zip files. (Ilia)</li>
	<li>Fixed memory leak in ob_get_clean/ob_get_flush. (Christian)</li>
	<li>Fixed segfault on invalid session.save_path. (Hannes)</li>
	<li>Fixed leaks in imap when a mail_criteria is used. (Pierre)</li>
	<li>Changed default value of array_unique()\'s optional sorting type parameter back to SORT_STRING to fix backwards compatibility breakage introduced in PHP 5.2.9. (Moriyoshi)</li>
	<li>Fixed bug #47940 (memory leaks in imap_body). (Pierre, Jake Levitt)</li>
	<li>Fixed bug #47903 ("@" operator does not work with string offsets). (Felipe)</li>
	<li>Fixed bug #47644 (Valid integers are truncated with json_decode()). (Scott)</li>
	<li>Fixed bug #47564 (unpacking unsigned long 32bit big endian returns wrong result). (Ilia)</li>
	<li>Fixed bug #47365 (ip2long() may allow some invalid values on certain 64bit systems).</li>
	<li>Over 100 bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.10.
</p>

<p>
 For a full list of changes in PHP 5.2.10, see the <a href="/ChangeLog-5.php#5.2.10">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.2.11' => 
  array (
    'version' => '5.2.11',
    'date' => '17 September 2009',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.11 (tar.bz2)',
        'filename' => 'php-5.2.11.tar.bz2',
        'sha256' => '',
        'md5' => '286bf34630f5643c25ebcedfec5e0a09',
        'date' => '17 September 2009',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.11 (tar.gz)',
        'filename' => 'php-5.2.11.tar.gz',
        'sha256' => '',
        'md5' => '0223d71f0d6987c06c54b7557ff47f1d',
        'date' => '17 September 2009',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.11. This release focuses on improving the stability of
the PHP 5.2.x branch with over 75 bug fixes, some of which are security related.
All users of PHP 5.2 are encouraged to upgrade to this release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.11:</b>
</p>
<ul>
	<li>Fixed certificate validation inside php_openssl_apply_verification_policy. (Ryan Sleevi, Ilia)</li>
	<li>Fixed sanity check for the color index in imagecolortransparent(). (Pierre)</li>
	<li>Added missing sanity checks around exif processing. (Ilia)</li>
	<li>Fixed bug #44683 (popen crashes when an invalid mode is passed). (Pierre)</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.11 include:</b>
</p>
<ul>
	<li>Fixed regression in cURL extension that prevented flush of data to output defined as a file handle.</li>
	<li>A number of fixes for the FILTER_VALIDATE_EMAIL validation rule</li>
	<li>Fixed bug #49361 (wordwrap() wraps incorrectly on end of line boundaries).</li>
	<li>Fixed bug #48696 (ldap_read() segfaults with invalid parameters)</li>
	<li>Fixed bug #48645 (mb_convert_encoding() doesn\'t understand hexadecimal html-entities).</li>
	<li>Fixed bug #48619 (imap_search ALL segfaults).</li>
	<li>Fixed bug #48400 (imap crashes when closing stream opened with OP_PROTOTYPE flag).</li>
	<li>Fixed bug #47351 (Memory leak in DateTime).</li>
	<li>Over 60 bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.11.
</p>

<p>
 For a full list of changes in PHP 5.2.11, see the <a href="/ChangeLog-5.php#5.2.11">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.2.12' => 
  array (
    'version' => '5.2.12',
    'date' => '17 December 2009',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.12 (tar.bz2)',
        'filename' => 'php-5.2.12.tar.bz2',
        'sha256' => '',
        'md5' => '5b7077e366c7eeab34da31dd860a1923',
        'date' => '17 December 2009',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.12 (tar.gz)',
        'filename' => 'php-5.2.12.tar.gz',
        'sha256' => '',
        'md5' => 'e6d6cc6570c77f60d8d4c99565d42ffd',
        'date' => '17 December 2009',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.12. This release focuses on improving the stability of
the PHP 5.2.x branch with over 60 bug fixes, some of which are security related.
All users of PHP 5.2 are encouraged to upgrade to this release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.12:</b>
</p>
<ul>
	<li>Fixed a safe_mode bypass in tempnam() identified by Grzegorz Stachowiak. (CVE-2009-3557, Rasmus)</li>
	<li>Fixed a open_basedir bypass in posix_mkfifo() identified by Grzegorz Stachowiak. (CVE-2009-3558, Rasmus)</li>
	<li>Added "max_file_uploads" INI directive, which can be set to limit the number of file uploads per-request to 20 by default, to prevent possible DOS via temporary file exhaustion, identified by Bogdan Calin. (CVE-2009-4017, Ilia)</li>
	<li>Added protection for $_SESSION from interrupt corruption and improved "session.save_path" check, identified by Stefan Esser. (CVE-2009-4143, Stas)</li>
	<li>Fixed bug #49785 (insufficient input string validation of htmlspecialchars()). (CVE-2009-4142, Moriyoshi, hello at iwamot dot com)</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.12 include:</b>
</p>
<ul>
	<li>Fixed unnecessary invocation of setitimer when timeouts have been disabled. (Arvind Srinivasan)</li>
	<li>Fixed crash in com_print_typeinfo when an invalid typelib is given. (Pierre)</li>
	<li>Fixed crash in SQLiteDatabase::ArrayQuery() and SQLiteDatabase::SingleQuery() when calling using Reflection. (Felipe)</li>
	<li>Fixed crash when instantiating PDORow and PDOStatement through Reflection. (Felipe)</li>
	<li>Fixed memory leak in openssl_pkcs12_export_to_file(). (Felipe)</li>
	<li>Fixed bug #50207 (segmentation fault when concatenating very large strings on 64bit linux). (Ilia)</li>
	<li>Fixed bug #50162 (Memory leak when fetching timestamp column from Oracle database). (Felipe)</li>
	<li>Fixed bug #50006 (Segfault caused by uksort()). (Felipe)</li>
	<li>Fixed bug #50005 (Throwing through Reflection modified Exception object makes segmentation fault). (Felipe)</li>
	<li>Fixed bug #49174 (crash when extending PDOStatement and trying to set queryString property). (Felipe) </li>
	<li>Fixed bug #49098 (mysqli segfault on error). (Rasmus)</li>

	<li>Over 50 other bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.12.
</p>

<p>
 For a full list of changes in PHP 5.2.12, see the <a href="/ChangeLog-5.php#5.2.12">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.2.13' => 
  array (
    'version' => '5.2.13',
    'date' => '25 Feb 2010',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.13 (tar.bz2)',
        'filename' => 'php-5.2.13.tar.bz2',
        'sha256' => '',
        'md5' => 'eb4d0766dc4fb9667f05a68b6041e7d1',
        'date' => '25 Feb 2010',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.13 (tar.gz)',
        'filename' => 'php-5.2.13.tar.gz',
        'sha256' => '',
        'md5' => 'cdf95cdc1ebccccce9c96653fd593dd4',
        'date' => '25 Feb 2010',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.13. This release focuses on improving the stability of
the PHP 5.2.x branch with over 40 bug fixes, some of which are security related.
All users of PHP 5.2 are encouraged to upgrade to this release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.13:</b>
</p>
<ul>
	<li>Fixed safe_mode validation inside tempnam() when the directory path does not end with a /). (Martin Jansen)</li>
	<li>Fixed a possible open_basedir/safe_mode bypass in the session extension identified by Grzegorz Stachowiak. (Ilia)</li>
	<li>Improved LCG entropy. (Rasmus, Samy Kamkar)</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.13 include:</b>
</p>
<ul>
	<li>Fixed bug #50940 Custom content-length set incorrectly in Apache sapis.  (Brian France, Rasmus)</li>
	<li>Fixed bug #50847 (strip_tags() removes all tags greater then 1023 bytes long). (Ilia)</li>
	<li>Fixed bug #50661 (DOMDocument::loadXML does not allow UTF-16). (Rob)</li>
	<li>Fixed bug #50632 (filter_input() does not return default value if the variable does not exist). (Ilia)</li>
	<li>Fixed bug #50540 (Crash while running ldap_next_reference test cases). (Sriram)</li>
	<li>Fixed bug #49851 (http wrapper breaks on 1024 char long headers). (Ilia)</li>

	<li>Over 30 other bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.13.
</p>

<p>
 For a full list of changes in PHP 5.2.13, see the <a href="/ChangeLog-5.php#5.2.13">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.2.14' => 
  array (
    'version' => '5.2.14',
    'date' => '22 July 2010',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.14 (tar.bz2)',
        'filename' => 'php-5.2.14.tar.bz2',
        'sha256' => '',
        'md5' => '21ceeeb232813c10283a5ca1b4c87b48',
        'date' => '22 July 2010',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.14 (tar.gz)',
        'filename' => 'php-5.2.14.tar.gz',
        'sha256' => '',
        'md5' => '5adf1a537895c2ec933fddd48e78d8a2',
        'date' => '22 July 2010',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.14. This release focuses on improving the
stability of the PHP 5.2.x branch with over 60 bug fixes, some of which
are security related.</p>

<p>
This release marks the end of the active support for PHP
5.2. Following this release the PHP 5.2 series will receive no further
active bug maintenance. Security fixes for PHP 5.2 might be published on a
case by cases basis. All users of PHP 5.2 are encouraged to upgrade to
PHP 5.3.</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.14:</b>
</p>
<ul>

	<li>Rewrote var_export() to use smart_str rather than output buffering, prevents data disclosure if a fatal error occurs.</li>
	<li>Fixed a possible interruption array leak in strrchr().(CVE-2010-2484)</li>
	<li>Fixed a possible interruption array leak in strchr(), strstr(), substr(), chunk_split(), strtok(), addcslashes(), str_repeat(), trim().</li>
	<li>Fixed a possible memory corruption in substr_replace().</li>
	<li>Fixed SplObjectStorage unserialization problems (CVE-2010-2225).</li>
	<li>Fixed a possible stack exaustion inside fnmatch().</li>
	<li>Fixed a NULL pointer dereference when processing invalid XML-RPC requests (Fixes CVE-2010-0397, bug #51288).</li>
	<li>Fixed handling of session variable serialization on certain prefix characters.</li>
	<li>Fixed a possible arbitrary memory access inside sqlite extension. Reported by Mateusz Kocielski.</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.14 include:</b>
</p>
<ul>

	<li>Upgraded bundled PCRE to version 8.02.</li>
	<li>Updated timezone database to version 2010.5.</li>
	<li>Fixed bug #52238 (Crash when an Exception occured in iterator_to_array).</li>
	<li>Fixed bug #52237 (Crash when passing the reference of the property of a non-object).</li>
	<li>Fixed bug #52041 (Memory leak when writing on uninitialized variable returned from function).</li>
	<li>Fixed bug #51822 (Segfault with strange __destruct() for static class variables).</li>
	<li>Fixed bug #51552 (debug_backtrace() causes segmentation fault and/or memory issues).</li>
	<li>Fixed bug #49267 (Linking fails for iconv on MacOS: "Undefined symbols: _libiconv").</li>
</ul>

<p>To prepare for upgrading to PHP 5.3, now that PHP 5.2\'s support ended, a
migration guide available on <a href="/migration53">http://php.net/migration53</a>, details the changes between
PHP 5.2 and PHP 5.3.</p>

<p>For a full list of changes in PHP 5.2.14 see the ChangeLog at
<http:>.</http:></p>


</announcement>',
      ),
    ),
  ),
  '5.2.15' => 
  array (
    'version' => '5.2.15',
    'date' => '09 December 2010',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.15 (tar.bz2)',
        'filename' => 'php-5.2.15.tar.bz2',
        'sha256' => '',
        'md5' => 'd4ccad187b12835024980a0cea362893',
        'date' => '09 December 2010',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.15 (tar.gz)',
        'filename' => 'php-5.2.15.tar.gz',
        'sha256' => '',
        'md5' => 'dbbb2beed6b51e05d134744f137091a9',
        'date' => '09 December 2010',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.15. This release marks the end of support
for PHP 5.2. All users of PHP 5.2 are encouraged to upgrade to PHP 5.3.
</p>

<p>
This release focuses on improving the security and stability of the
PHP 5.2.x branch with a small number, of predominatly security fixes.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.15:</b>
</p>
<ul>
	<li>Fixed extract() to do not overwrite $GLOBALS and $this when using EXTR_OVERWRITE.</li>
	<li>Fixed crash in zip extract method (possible CWE-170).</li>
	<li>Fixed a possible double free in imap extension.</li>
	<li>Fixed possible flaw in open_basedir (CVE-2010-3436).</li>
	<li>Fixed NULL pointer dereference in ZipArchive::getArchiveComment. (CVE-2010-3709).</li>
	<li>Fixed bug #52929 (Segfault in filter_var with FILTER_VALIDATE_EMAIL with large amount of data).</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.15 include:</b>
</p>
<ul>
	<li>Fixed bug #47643 (array_diff() takes over 3000 times longer than php 5.2.4).</li>
	<li>Fixed bug #44248 (RFC2616 transgression while HTTPS request through proxy with SoapClient object).</li>
</ul>

<p>To prepare for upgrading to PHP 5.3, now that PHP 5.2\'s support ended, a
migration guide available on <a href="/migration53">http://php.net/migration53</a>, details the changes between
PHP 5.2 and PHP 5.3.</p>

<p>For a full list of changes in PHP 5.2.15 see the ChangeLog at
<a href="http://www.php.net/ChangeLog-5.php#5.2.15">http://www.php.net/ChangeLog-5.php#5.2.15</a>.</p>


</announcement>',
      ),
    ),
  ),
  '5.2.16' => 
  array (
    'version' => '5.2.16',
    'date' => '16 December 2010',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.16 (tar.bz2)',
        'filename' => 'php-5.2.16.tar.bz2',
        'sha256' => '',
        'md5' => '3b0bd012bd53bac9a5fefca61eccd5c6',
        'date' => '16 December 2010',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.16 (tar.gz)',
        'filename' => 'php-5.2.16.tar.gz',
        'sha256' => '',
        'md5' => '68f2c92b5b33d131b1ea70ece9fc40ad',
        'date' => '16 December 2010',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.16. This release marks the end of support
for PHP 5.2. All users of PHP 5.2 are encouraged to upgrade to PHP 5.3.
</p>

<p>
This release focuses on addressing a regression in open_basedir implementation
introduced in 5.2.15 in addition to fixing a crash inside PDO::pgsql
on data retrieval when the server is down. All users who have upgraded to 5.2.15 and are
utilizing open_basedir are strongly encouraged to upgrade to 5.2.16 or 5.3.4.
</p>

<p>To prepare for upgrading to PHP 5.3, now that PHP 5.2\'s support ended, a
migration guide available on <a href="/migration53">http://php.net/migration53</a>, details the changes between
PHP 5.2 and PHP 5.3.</p>

<p>For a full list of changes in PHP 5.2.16 see the ChangeLog at
<a href="/ChangeLog-5.php#5.2.16">http://www.php.net/ChangeLog-5.php#5.2.16</a>.</p>


</announcement>',
      ),
    ),
  ),
  '5.2.17' => 
  array (
    'version' => '5.2.17',
    'date' => '06 January 2011',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.17 (tar.bz2)',
        'filename' => 'php-5.2.17.tar.bz2',
        'sha256' => '',
        'md5' => 'b27947f3045220faf16e4d9158cbfe13',
        'date' => '06 January 2011',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.17 (tar.gz)',
        'filename' => 'php-5.2.17.tar.gz',
        'sha256' => '',
        'md5' => '04d321d5aeb9d3a051233dbd24220ef1',
        'date' => '06 January 2011',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.17.</p>

<p>This release resolves a critical issue, reported as PHP bug #53632,
where conversions from string to double might cause the PHP interpreter
to hang on systems using x87 FPU registers.</p>

<p>The problem is known to only affect x86 32-bit PHP processes, regardless
of whether the system hosting PHP is 32-bit or 64-bit. You can test
whether your system is affected by running <a href="/distributions/test_bug53632.txt">this script</a>
from the command line.</p>

<p>All users of PHP are strongly advised to update to these versions
immediately.</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.17:</b>
</p>
<ul>
  <li>Fixed bug #53632 (PHP hangs on numeric value 2.2250738585072011e-308). (CVE-2010-4645)</li>
</ul>


</announcement>',
      ),
    ),
  ),
  '5.2.2' => 
  array (
    'version' => '5.2.2',
    'date' => '03 May 2007',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-5.2.2.tar.bz2',
        'sha256' => '',
        'md5' => 'd084337867d70b50a10322577be0e44e',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.2.2.tar.gz',
        'sha256' => '',
        'md5' => '7a920d0096900b2b962b21dc5c55fe3c',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate availability of PHP 5.2.2.
This release continues to improve the security and the stability of the 5.X
branch and all users are strongly encouraged to upgrade to it as soon as possible.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.2:</b>
</p>
<ul>
	<li>Fixed CVE-2007-1001, GD wbmp used with invalid image size (by Ivan Fratric)</li>
	<li>Fixed a header injection via Subject and To parameters to the mail() function (MOPB-34 by Stefan Esser)</li>
	<li>Fixed asciiz byte truncation inside mail() (MOPB-33 by Stefan Esser)</li>
	<li>Fixed wrong length calculation in unserialize S type (MOPB-29 by Stefan Esser)</li>
	<li>Fixed a bug in mb_parse_str() that can be used to activate register_globals (MOPB-26 by Stefan Esser)</li>
	<li>Fixed unallocated memory access/double free in in array_user_key_compare() (MOPB-24 by Stefan Esser)</li>
	<li>Fixed a double free inside session_regenerate_id() (MOPB-22 by Stefan Esser)</li>
	<li>Added missing open_basedir &amp; safe_mode checks to zip:// and bzip:// wrappers. (MOPB-20, MOPB-21 by Stefan Esser).</li>
	<li>Fixed substr_compare and substr_count information leak (MOPB-14 by Stefan Esser) (Stas, Ilia)</li>
	<li>Limit nesting level of input variables with max_input_nesting_level as fix for (MOPB-03 by Stefan Esser)</li>
	<li>Fixed CRLF injection inside ftp_putcmd(). (by loveshell[at]Bug.Center.Team)</li>
	<li>Fixed a possible super-global overwrite inside import_request_variables(). (by Stefano Di Paola, Steffan Esser)</li>
	<li>Fixed a remotely trigger-able buffer overflow inside make_http_soap_request(). (by Ilia Alshanetsky)</li>
	<li>Fixed a buffer overflow inside user_filter_factory_create(). (by Ilia Alshanetsky)</li>
	<li>Fixed a remotely trigger-able buffer overflow inside bundled libxmlrpc library. (by Stanislav Malyshev)</li>
</ul>

<p>
While majority of the issues outlined above are local, in some circumstances given specific code paths they can be
triggered externally. Therefor, we strongly recommend that if you use code utilizing the functions and extensions identified as
having had vulnerabilities in them, you consider upgrading your PHP.
</p>

<p>
<b>The key improvements of PHP 5.2.2 include:</b>
</p>
<ul>
	<li>Further improvements to the Memory Manager with the goal of improving realloc() performance.</li>
	<li>Bundled GD, SQLite and PCRE libraries were upgraded.</li>
	<li>Additional methods were added to SPL\'s DirectoryIterator and SplFileInfo classes.</li>
	<li>Over 120 bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.2.
</p>

<p>
 For a full list of changes in PHP 5.2.2, see the <a href="/ChangeLog-5.php#5.2.2">ChangeLog</a>.
</p>



</announcement>',
      ),
    ),
  ),
  '5.2.3' => 
  array (
    'version' => '5.2.3',
    'date' => '31 May 2007',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-5.2.3.tar.bz2',
        'sha256' => '',
        'md5' => 'eb50b751c8e1ced05bd012d5a0e4dec3',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.2.3.tar.gz',
        'sha256' => '',
        'md5' => 'df79b04d63fc4c1ccb6d8ea58a9cf3ac',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate availability
of PHP 5.2.3. This release continues to improve the security and the
stability of the 5.X branch as well as addressing two regressions introduced
by the previous 5.2 releases. These regressions relate to the timeout
handling over non-blocking SSL connections and the lack of
HTTP_RAW_POST_DATA in certain conditions. All users are encouraged to
upgrade to this release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.3:</b>
</p>
<ul>
	<li>Fixed an integer overflow inside chunk_split() (by Gerhard Wagner, CVE-2007-2872)</li>
	<li>Fixed possible infinite loop in imagecreatefrompng. (by Xavier Roche, CVE-2007-2756)</li>
	<li>Fixed ext/filter Email Validation Vulnerability (MOPB-45 by Stefan Esser, CVE-2007-1900)</li>
	<li>Fixed bug #41492 (open_basedir/safe_mode bypass inside realpath()) (by bugs dot php dot net at chsc dot dk)</li>
	<li>Improved fix for CVE-2007-1887 to work with non-bundled sqlite2 lib.</li>
	<li>Added mysql_set_charset() to allow runtime altering of connection encoding.</li>
</ul>

<p>
<b>The key improvements of PHP 5.2.3 include:</b>
</p>
<ul>
	<li>Improved compilation of heredocs and interpolated strings.</li>
	<li>Optimized out a couple of per-request syscalls.</li>
	<li>Optimized digest generation in md5() and sha1() functions.</li>

	<li>Fixed bug #41236 (Regression in timeout handling of non-blocking SSL connections during reads and writes)</li>
	<li>Fixed bug #39542 (Behavior of require/include different to 
	</li><li>Fixed bug #41293 (Fixed creation of HTTP_RAW_POST_DATA when there is no default post handler)</li>
	<li>Fixed bug #41347 (checkdnsrr() segfaults on empty hostname)</li>
	<li>Fixed bug #41353 (crash in openssl_pkcs12_read() on invalid input)</li>
	<li>Fixed bug #41403 (json_decode cannot decode floats if localeconv decimal_point is not \'.\')</li>
	<li>Fixed bug #41421 (Uncaught exception from a stream wrapper segfaults)</li>
	<li>Fixed bug #41504 (json_decode() incorrectly decodes JSON arrays with empty string keys).</li>

	<li>Over 40 bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.3.
</p>

<p>
 For a full list of changes in PHP 5.2.3, see the <a href="/ChangeLog-5.php#5.2.3">ChangeLog</a>.
</p>



</announcement>',
      ),
    ),
  ),
  '5.2.4' => 
  array (
    'version' => '5.2.4',
    'date' => '30 August 2007',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-5.2.4.tar.bz2',
        'sha256' => '',
        'md5' => '55c97a671fdabf462cc7a82971a656d2',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.2.4.tar.gz',
        'sha256' => '',
        'md5' => '0826e231c3148b29fd039d7a8c893ad3',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.4. This release focuses on improving the stability
of the PHP 5.2.X branch with over 120 various bug fixes in
addition to resolving several low priority security bugs. All
users of PHP are encouraged to upgrade to this release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.4:</b>
</p>
<ul>
	<li>Fixed a floating point exception inside wordwrap() (Reported by Mattias Bengtsson)</li>
	<li>Fixed several integer overflows inside the GD extension (Reported by Mattias Bengtsson)</li>
	<li>Fixed size calculation in chunk_split() (Reported by Gerhard Wagner)</li>
	<li>Fixed integer overflow in str[c]spn(). (Reported by Mattias Bengtsson)</li>
	<li>Fixed money_format() not to accept multiple %i or %n tokens. (Reported by Stanislav Malyshev)</li>
	<li>Fixed zend_alter_ini_entry() memory_limit interruption vulnerability. (Reported by Stefan Esser)</li>
	<li>Fixed INFILE LOCAL option handling with MySQL extensions not to be allowed when open_basedir or safe_mode is active. (Reported by Mattias Bengtsson)</li>
	<li>Fixed session.save_path and error_log values to be checked against open_basedir and safe_mode (CVE-2007-3378) (Reported by Maksymilian Arciemowicz)</li>
	<li>Fixed a possible invalid read in glob() win32 implementation (CVE-2007-3806) (Reported by shinnai)</li>
	<li>Fixed a possible buffer overflow in php_openssl_make_REQ (Reported by zatanzlatan at hotbrev dot com)</li>
	<li>Fixed an open_basedir bypass inside glob() function (Reported by dr at peytz dot dk)</li>
	<li>Fixed a possible open_basedir bypass inside session extension when the session file is a symlink (Reported by c dot i dot morris at durham dot ac dot uk)</li>
	<li>Improved fix for MOPB-03-2007.</li>
	<li>Corrected fix for CVE-2007-2872.</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.4 include:</b>
</p>
<ul>
	<li>Upgraded PCRE to version 7.2</li>
	<li>Added persistent connection status checker to pdo_pgsql.</li>
	<li>Fixed oci8 and PDO_OCI extensions to allow configuring with Oracle 11g client libraries.</li>
	<li>Fixed bug #41831 (pdo_sqlite prepared statements convert resources to strings).</li>
	<li>Fixed bug #41770 (SSL: fatal protocol error due to buffer issues)</li>
	<li>Fixed bug #41713 (Persistent memory consumption on win32 since 5.2)</li>

	<li>Over 120 bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.4.
</p>

<p>
 For a full list of changes in PHP 5.2.4, see the <a href="/ChangeLog-5.php#5.2.4">ChangeLog</a>.
</p>



</announcement>',
      ),
    ),
  ),
  '5.2.5' => 
  array (
    'version' => '5.2.5',
    'date' => '08 November 2007',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'Source (tar.bz2)',
        'filename' => 'php-5.2.5.tar.bz2',
        'sha256' => '',
        'md5' => '1fe14ca892460b09f06729941a1bb605',
        'date' => '',
      ),
      1 => 
      array (
        'name' => 'Source (tar.gz)',
        'filename' => 'php-5.2.5.tar.gz',
        'sha256' => '',
        'md5' => '61a0e1661b70760acc77bc4841900b7a',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.5. This release focuses on improving the stability of
the PHP 5.2.x branch with over 60 bug fixes, several of which are security related.
All users of PHP are encouraged to upgrade to this release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.5:</b>
</p>
<ul>
	<li>Fixed dl() to only accept filenames. Reported by Laurent Gaffie.</li>
	<li>Fixed dl() to limit argument size to MAXPATHLEN (CVE-2007-4887). Reported by Laurent Gaffie.</li>
	<li>Fixed htmlentities/htmlspecialchars not to accept partial multibyte sequences. Reported by Rasmus Lerdorf</li>
	<li>Fixed possible triggering of buffer overflows inside glibc implementations of the fnmatch(), setlocale() and glob() functions. Reported by Laurent Gaffie.</li>
	<li>Fixed "mail.force_extra_parameters" php.ini directive not to be modifiable in .htaccess due to the security implications. Reported by SecurityReason.</li>
	<li>Fixed bug #42869 (automatic session id insertion adds sessions id to non-local forms).</li>
	<li>Fixed bug #41561 (Values set with php_admin_* in httpd.conf can be overwritten with ini_set()).</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.5 include:</b>
</p>
<ul>
	<li>Upgraded PCRE to version 7.3</li>
	<li>Updated timezone database to version 2007.9</li>
	<li>Added ability to control memory consumption between request using ZEND_MM_COMPACT environment variable.</li>
	<li>Improved speed of array_intersect_key(), array_intersect_assoc(), array_uintersect_assoc(), array_diff_key(), array_diff_assoc() and array_udiff_assoc() functions</li>
	<li>Fixed bug #43139 (PDO ignores ATTR_DEFAULT_FETCH_MODE in some cases with fetchAll())</li>
	<li>Fixed bug #42785 (json_encode() formats doubles according to locale rather then following standard syntax)</li>
	<li>Fixed bug #42549 (ext/mysql failed to compile with libmysql 3.23)</li>
	<li>Over 60 bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.5.
</p>

<p>
 For a full list of changes in PHP 5.2.5, see the <a href="/ChangeLog-5.php#5.2.5">ChangeLog</a>.
</p>



</announcement>',
      ),
    ),
  ),
  '5.2.6' => 
  array (
    'version' => '5.2.6',
    'date' => '01 May 2008',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.6 (tar.bz2)',
        'filename' => 'php-5.2.6.tar.bz2',
        'sha256' => '',
        'md5' => '7380ffecebd95c6edb317ef861229ebd',
        'date' => '01 May 2008',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.6 (tar.gz)',
        'filename' => 'php-5.2.6.tar.gz',
        'sha256' => '',
        'md5' => '1720f95f26c506338f0dba3a51906bbd',
        'date' => '01 May 2008',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.6. This release focuses on improving the stability of
the PHP 5.2.x branch with over 120 bug fixes, several of which are security related.
All users of PHP are encouraged to upgrade to this release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.6:</b>
</p>
<ul>
	<li>Fixed possible stack buffer overflow in the FastCGI SAPI identified by Andrei Nigmatulin.</li>
	<li>Fixed integer overflow in printf() identified by Maksymilian Aciemowicz.</li>
	<li>Fixed security issue detailed in CVE-2008-0599 identified by Ryan Permeh.</li>
	<li>Fixed a safe_mode bypass in cURL identified by Maksymilian Arciemowicz.</li>
	<li>Properly address incomplete multibyte chars inside escapeshellcmd() identified by Stefan Esser.</li>
	<li>Upgraded bundled PCRE to version 7.6</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.6 include:</b>
</p>
<ul>
	<li>Fixed two possible crashes inside the posix extension.</li>
	<li>Fixed bug #44069 (Huge memory usage with concatenation using . instead of .=)</li>
	<li>Fixed bug #44141 (private parent constructor callable through static function).</li>
	<li>Fixed bug #43589 (a possible infinite loop in bz2_filter.c).</li>
	<li>Fixed bug #43450 (Memory leak on some functions with implicit object __toString() call).</li>
	<li>Fixed bug #43201 (Crash on using uninitialized vals and __get/__set).</li>
	<li>Fixed bug #42978 (mismatch between number of bound params and values causes a crash in pdo_pgsql).</li>
	<li>Fixed bug #42937 (__call() method not invoked when methods are called on parent from child class).</li>
	<li>Fixed bug #42736 (xmlrpc_server_call_method() crashes).</li>
	<li>Fixed bug #42369 (Implicit conversion to string leaks memory).</li>
	<li>Fixed bug #41562 (SimpleXML memory issue).</li>
	<li>Over 120 bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.6.
</p>

<p>
 For a full list of changes in PHP 5.2.6, see the <a href="/ChangeLog-5.php#5.2.6">ChangeLog</a>.
</p>



</announcement>',
      ),
    ),
  ),
  '5.2.8' => 
  array (
    'version' => '5.2.8',
    'date' => '08 December 2008',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.8 (tar.bz2)',
        'filename' => 'php-5.2.8.tar.bz2',
        'sha256' => '',
        'md5' => '8760a833cf10433d3e72271ab0d0eccf',
        'date' => '08 December 2008',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.8 (tar.gz)',
        'filename' => 'php-5.2.8.tar.gz',
        'sha256' => '',
        'md5' => 'e748cace3cfecb66fb6de9a945f98e2a',
        'date' => '08 December 2008',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate availability
of PHP 5.2.8. This release addresses a regression introduced by 5.2.7 in
regard to the magic_quotes functionality, that was broken by an incorrect fix
to the filter extension. All users who have upgraded to 5.2.7 are encouraged
to upgrade to this release, alternatively you can apply a work-around for
the bug by changing "filter.default_flags=0" in php.ini
</p>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.8.
</p>

<p>
 For a full list of changes in PHP 5.2.8, see the <a href="/ChangeLog-5.php#5.2.8">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.2.9' => 
  array (
    'version' => '5.2.9',
    'date' => '26 February 2009',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.2.9 (tar.bz2)',
        'filename' => 'php-5.2.9.tar.bz2',
        'sha256' => '',
        'md5' => '280d6cda7f72a4fc6de42fda21ac2db7',
        'date' => '26 February 2009',
      ),
      1 => 
      array (
        'name' => 'PHP 5.2.9 (tar.gz)',
        'filename' => 'php-5.2.9.tar.gz',
        'sha256' => '',
        'md5' => '98b647561dc664adefe296106056cf11',
        'date' => '26 February 2009',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.2.9. This release focuses on improving the stability of
the PHP 5.2.x branch with over 50 bug fixes, several of which are security related.
All users of PHP are encouraged to upgrade to this release.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.2.9:</b>
</p>
<ul>
	<li>Fixed security issue in imagerotate(), background colour isn\'t validated correctly with a non truecolour image. Reported by Hamid Ebadi, APA Laboratory (Fixes CVE-2008-5498). (Scott)</li>
	<li>Fixed a crash on extract in zip when files or directories entry names contain  a relative path. (Pierre)</li>
	<li>Fixed explode() behavior with empty string to respect negative limit. (Shire)</li>
	<li>Fixed a segfault when malformed string is passed to json_decode(). (Scott)</li>
</ul>

<p>
<b>Key enhancements in PHP 5.2.9 include:</b>
</p>
<ul>
	<li>Added optional sorting type flag parameter to array_unique(). Default is SORT_REGULAR. (Andrei)</li>
	<li>Fixed bug #45996 (libxml2 2.7 causes breakage with character data in xml_parse()). (Rob)</li>
	<li>A number of fixes in the mbstring extension (Moriyoshi)</li>
	<li>Fixed bug #44336 (Improve pcre UTF-8 string matching performance). (frode at coretrek dot com, Nuno)</li>
	<li>Fixed bug #46699 (xml_parse crash when parser is namespace aware). (Rob)</li>
	<li>Fixed bug #46748 (Segfault when an SSL error has more than one error). (Scott)</li>
	<li>Fixed bug #46889 (Memory leak in strtotime()). (Derick)</li>
	<li>Fixed bug #47049 (SoapClient::__soapCall causes a segmentation fault). (Dmitry)</li>
	<li>Fixed bug #47165 (Possible memory corruption when passing return value by reference). (Dmitry)</li>
	<li>Fixed bug #47282 (FILTER_VALIDATE_EMAIL is marking valid email addresses as invalid). (Ilia)</li>
	<li>Fixed bug #47422 (modulus operator returns incorrect results on 64 bit linux). (Matt)</li>
	<li>Over 50 bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.0 and PHP 5.1, an upgrade guide is available
<a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
and PHP 5.2.9.
</p>

<p>
 For a full list of changes in PHP 5.2.9, see the <a href="/ChangeLog-5.php#5.2.9">ChangeLog</a>.
</p>



</announcement>',
      ),
    ),
  ),
  '5.3.0' => 
  array (
    'version' => '5.3.0',
    'date' => '30 June 2009',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.0 (tar.bz2)',
        'filename' => 'php-5.3.0.tar.bz2',
        'sha256' => '',
        'md5' => '846760cd655c98dfd86d6d97c3d964b0',
        'date' => '30 June 2009',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.0 (tar.gz)',
        'filename' => 'php-5.3.0.tar.gz',
        'sha256' => '',
        'md5' => 'f4905eca4497da3f0beb5c96863196b4',
        'date' => '30 June 2009',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the immediate release of PHP
5.3.0. This release is a major improvement in the 5.X series, which includes a
large number of new features and bug fixes.
</p>

<p>
<b>The key features of PHP 5.3.0 include:</b>
</p>
<ul>
  <li>Support for <a href="http://php.net/namespaces">namespaces</a></li>
  <li><a href="http://php.net/lsb">Late static binding</a></li>
  <li><a href="http://php.net/closures">Lambda Functions and Closures</a></li>
  <li>
   Syntax additions:
   <a href="http://php.net/nowdoc">NOWDOC</a>,
   <a href="http://php.net/ternary">ternary short cut "?:"</a> and
   <a href="http://php.net/goto">jump label</a> (limited goto),
   <a href="http://php.net/__callstatic">__callStatic()</a>
  </li>
  <li>Under the hood performance improvements</li>
  <li>Optional <a href="http://php.net/gc_enable">garbage collection</a> for cyclic references</li>
  <li>Optional <a href="http://php.net/mysqli.mysqlnd">mysqlnd</a> PHP native replacement for libmysql</li>
  <li>Improved <a href="http://windows.php.net">Windows</a> support including VC9 and experimental X64 binaries
  as well as portability to other supported platforms</li>
  <li>More consistent float rounding</li>
  <li>Deprecation notices are now handled via <code>E_DEPRECATED</code> (part of <code>E_ALL</code>)
  instead of the <code>E_STRICT</code> error level</li>
  <li>Several enhancements to enable more <a href="http://php.net/ini.sections">flexiblity in php.ini</a> (and ini parsing in general)</li>
  <li>New bundled extensions:
   <a href="http://php.net/phar">ext/phar</a>,
   <a href="http://php.net/intl">ext/intl</a>,
   <a href="http://php.net/fileinfo">ext/fileinfo</a>,
   <a href="http://php.net/sqlite3">ext/sqlite3</a>,
   <a href="http://php.net/enchant">ext/enchant</a>
  </li>
  <li>Over 140 bug fixes and improvements to PHP, in particular to:
   <a href="http://php.net/openssl">ext/openssl</a>,
   <a href="http://php.net/spl">ext/spl</a> and
   <a href="http://php.net/datetime">ext/date</a>
  </li>
</ul>
<p>This release also drops several extensions and unifies the usage of internal APIs.
Users should be aware of the following known backwards compatibility breaks:</p>
<ul>
  <li>Parameter parsing API unification will cause some functions to behave more
  or less strict when it comes to type juggling</li>
  <li>Removed the following extensions:
   <a href="http://php.net/mhash">ext/mhash</a> (see <a href="http://php.net/hash">ext/hash</a>),
   <a href="http://php.net/msql">ext/msql</a>,
   <a href="http://php.net/pspell">ext/pspell</a> (see <a href="http://php.net/enchant">ext/enchant</a>),
   <a href="http://php.net/sybase">ext/sybase</a> (see <a href="http://php.net/sybase">ext/sybase_ct</a>)
  </li>
  <li>Moved the following extensions to PECL:
   <a href="http://php.net/ming">ext/ming</a>,
   <a href="http://php.net/fbsql">ext/fbsql</a>,
   <a href="http://php.net/ncurses">ext/ncurses</a>,
   <a href="http://php.net/fdf">ext/fdf</a>
  </li>
  <li>Removed <a href="http://php.net/manual/ini.core.php#ini.zend.ze1-compatibility-mode">zend.ze1_compatibility_mode</a></li>
</ul>

<p>
For users upgrading from PHP 5.2 there is a migration guide
available <a href="http://php.net/migration53">here</a>, detailing
the changes between those releases and PHP 5.3.0.
</p>

<p>
 For a full list of changes in PHP 5.3.0, see the
 <a href="/ChangeLog-5.php#5.3.0">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.1' => 
  array (
    'version' => '5.3.1',
    'date' => '19 Nov 2009',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.1 (tar.bz2)',
        'filename' => 'php-5.3.1.tar.bz2',
        'sha256' => '',
        'md5' => '63e97ad450f0f7259e785100b634c797',
        'date' => '19 Nov 2009',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.1 (tar.gz)',
        'filename' => 'php-5.3.1.tar.gz',
        'sha256' => '',
        'md5' => '41fbb368d86acb13fc3519657d277681',
        'date' => '19 Nov 2009',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the immediate release of PHP
5.3.1. This is a maintenance release in the 5.3 series, which includes a
large number of bug fixes.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.3.1:</b>
</p>
<ul>
  <li>Added "max_file_uploads" INI directive, which can be set to limit the number of file uploads per-request to 20 by default, to prevent possible DOS via temporary file exhaustion.</li>
  <li>Added missing sanity checks around exif processing.</li>
  <li>Fixed a safe_mode bypass in tempnam().</li>
  <li>Fixed a open_basedir bypass in posix_mkfifo().</li>
  <li>Fixed bug #50063 (safe_mode_include_dir fails).</li>
  <li>Fixed bug #44683 (popen crashes when an invalid mode is passed).</li>
</ul>

<p>
<b>Key Bug Fixes in PHP 5.3.1 include:</b>
</p>
<ul>
  <li>Fixed crash in com_print_typeinfo when an invalid typelib is given.</li>
  <li>Fixed crash in SQLiteDatabase::ArrayQuery() and SQLiteDatabase::SingleQuery() when calling using Reflection.</li>
  <li>Fixed crash when instantiating PDORow and PDOStatement through Reflection.</li>
  <li>Fixed bug #49910 (no support for ././@LongLink for long filenames in phar
  tar support).</li>
  <li>Fixed bug #49908 (throwing exception in __autoload crashes when interface is not defined).</li>
  <li>Around 100 other bug fixes</li>
</ul>

<p>
For users upgrading from PHP 5.2 there is a migration guide
available <a href="http://php.net/migration53">here</a>, detailing
the changes between those releases and PHP 5.3.
</p>

<p>
 For a full list of changes in PHP 5.3.1, see the
 <a href="/ChangeLog-5.php#5.3.1">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.10' => 
  array (
    'version' => '5.3.10',
    'date' => '02 February 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.10 (tar.bz2)',
        'filename' => 'php-5.3.10.tar.bz2',
        'sha256' => '',
        'md5' => '816259e5ca7d0a7e943e56a3bb32b17f',
        'date' => '02 February 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.10 (tar.gz)',
        'filename' => 'php-5.3.10.tar.gz',
        'sha256' => '',
        'md5' => '2b3d2d0ff22175685978fb6a5cbcdc13',
        'date' => '02 February 2012',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.3.10. This release delivers a critical security
fix.</p>

<p>Security Fixes in PHP 5.3.10:</p>

<ul>
  <li>Fixed arbitrary remote code execution vulnerability reported by Stefan
    Esser, CVE-2012-0830.</li>
</ul>

<p>All users are strongly encouraged to upgrade to PHP 5.3.10.</p>


</announcement>',
      ),
    ),
  ),
  '5.3.11' => 
  array (
    'version' => '5.3.11',
    'date' => '26 April 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.11 (tar.bz2)',
        'filename' => 'php-5.3.11.tar.bz2',
        'sha256' => '',
        'md5' => '5b9529ed89dbc48c498e9693d1af3caf',
        'date' => '26 April 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.11 (tar.gz)',
        'filename' => 'php-5.3.11.tar.gz',
        'sha256' => '',
        'md5' => 'acd566dbd70f855c19d17fc3c0e876a2',
        'date' => '26 April 2012',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of
PHP 5.3.11. This release focuses on improving the stability of the
PHP 5.3 branch with over 60 bug fixes, some of which are security related.</p>

<p>Security Enhancements for PHP 5.3.11:</p>

<ul>
  <li>Fixed bug #61043 (Regression in magic_quotes_gpc fix for CVE-2012-0831).
    Reported by Stefan Esser. (OndÅej SurÃ½)</li>
  <li>Fixed bug #54374 (Insufficient validating of upload name leading to
    corrupted $_FILES indices). (CVE-2012-1172). (Stas, lekensteyn at
    gmail dot com, Pierre)</li>
  <li>Add open_basedir checks to readline_write_history and readline_read_history.
    (Rasmus, reported by Mateusz Goik)</li>
</ul>

<p>Key enhancements in PHP 5.3.11 include:</p>

<ul>
  <li>Added debug info handler to DOM objects. (Gustavo, Joey Smith)</li>
  <li>Fixed bug #61172 (Add Apache 2.4 support). (Chris Jones)</li>
</ul>

<p>For a full list of changes in PHP 5.3.11, see the <a href="/ChangeLog-5.php#5.3.11">ChangeLog</a>. For source downloads please visit
our <a href="/downloads/">downloads page</a>, Windows binaries can be found
on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.</p>

<p>All users of PHP 5.3 are strongly encouraged to upgrade to PHP 5.3.11.</p>


</announcement>',
      ),
    ),
  ),
  '5.3.12' => 
  array (
    'version' => '5.3.12',
    'date' => '03 May 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.12 (tar.bz2)',
        'filename' => 'php-5.3.12.tar.bz2',
        'sha256' => '',
        'md5' => 'cf02c29be279c506cbd4ffc2819d7c82',
        'date' => '03 May 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.12 (tar.gz)',
        'filename' => 'php-5.3.12.tar.gz',
        'sha256' => '',
        'md5' => 'aac80e478eb0785c50855ae8cefe735a',
        'date' => '03 May 2012',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.3.12. This release delivers a security fix.</p>

<p>There is a vulnerability in certain CGI-based setups that has gone
unnoticed for at least 8 years. <a href="http://tools.ietf.org/html/draft-robinson-www-interface-00#section-7">Section
7 of the CGI spec</a> states:</p>

<cite>
   Some systems support a method for supplying a array of strings to the
   CGI script. This is only used in the case of an `indexed\' query. This
   is identified by a "GET" or "HEAD" HTTP request with a URL search
   string not containing any unencoded "=" characters.
</cite>

<p>So requests that do not have a "=" in the query string are treated
differently from those who do in some CGI implementations. For PHP this
means that a request containing ?-s may dump the PHP source code for the
page, but a request that has ?-s&amp;a=1 is fine.</p>

<p>A large number of sites run PHP as either an Apache module through
mod_php or using php-fpm under nginx. Neither of these setups are
vulnerable to this. Straight shebang-style CGI also does not appear to
be vulnerable.</p>

<p>If you are using Apache mod_cgi to run PHP you may be vulnerable. To see
if you are just add ?-s to the end of any of your URLs. If you see your
source code, you are vulnerable. If your site renders normally, you are not.</p>

<p>Making a bad week worse, we had a bug in our bug system that toggled the
private flag of a bug report to public on a comment to the bug report
causing this issue to go public before we had time to test solutions to
the level we would like.</p>

<p>To fix this update to PHP 5.3.12 or PHP 5.4.2. We recognize that since
this is a rather outdated way to run PHP it may not be feasible to
upgrade these sites to a modern version of PHP, so an alternative is to
configure your web server to not let these types of requests with query
strings starting with a "-" and not containing a "=" through. Adding a
rule like this should not break any sites. For Apache using mod_rewrite
it would look like this:</p>

<pre>
    RewriteCond %{QUERY_STRING} ^(%2d|-)[^=]+$ [NC]
    RewriteRule ^(.*) $1? [L]
</pre>

<p>If you are writing your own rule, be sure to take the urlencoded ?%2ds
version into account.</p>

<p>For source downloads of PHP 5.3.12 please visit
our <a href="/downloads/">downloads page</a>, Windows binaries can be found
on <a href="http://windows.php.net/download/">windows.php.net/download/</a>. A
<a href="/ChangeLog-5.php#5.3.12">ChangeLog</a> exists.</p>


</announcement>',
      ),
    ),
  ),
  '5.3.13' => 
  array (
    'version' => '5.3.13',
    'date' => '08 May 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.13 (tar.bz2)',
        'filename' => 'php-5.3.13.tar.bz2',
        'sha256' => '',
        'md5' => '370be99c5cdc2e756c82c44d774933c8',
        'date' => '08 May 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.13 (tar.gz)',
        'filename' => 'php-5.3.13.tar.gz',
        'sha256' => '',
        'md5' => '179c67ce347680f468edbfc3c425476a',
        'date' => '08 May 2012',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.3.13. This release delivers a security fix.
All users of PHP 5.3 are encouraged to upgrade to this release</p>

<p>PHP 5.3.13 completes a fix for a vulnerability in CGI-based setups
(CVE-2012-2311). Note: mod_php and php-fpm are not vulnerable to this
attack.</p>

<p>For source downloads of PHP 5.3.13 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.13">ChangeLog</a>.</p>


</announcement>',
      ),
    ),
  ),
  '5.3.14' => 
  array (
    'version' => '5.3.14',
    'date' => '14 June 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.14 (tar.bz2)',
        'filename' => 'php-5.3.14.tar.bz2',
        'sha256' => '',
        'md5' => '370be99c5cdc2e756c82c44d774933c8',
        'date' => '14 June 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.14 (tar.gz)',
        'filename' => 'php-5.3.14.tar.gz',
        'sha256' => '',
        'md5' => '148730865242a031a638ee3bab4a9d4d',
        'date' => '14 June 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.14 binaries and source',
        'filename' => 'Windows 5.3.14 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.3.14. This release fixes two security related
issues. All users of PHP 5.3 are encouraged to upgrade to this release.</p>

<p>PHP 5.3.14 fixes an security issue in the implementation of crypt() and a
heap overflow in the Phar extension. Over 30 bugs were fixed</p>

<p>Please note that php://fd is now only available if the CLI SAPI is used</p>

<p>For source downloads of PHP 5.3.14 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.14">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.15' => 
  array (
    'version' => '5.3.15',
    'date' => '19 July 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.15 (tar.bz2)',
        'filename' => 'php-5.3.15.tar.bz2',
        'sha256' => '',
        'md5' => '5cfcfd0fa4c4da7576f397073e7993cc',
        'date' => '19 July 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.15 (tar.gz)',
        'filename' => 'php-5.3.15.tar.gz',
        'sha256' => '',
        'md5' => '7c885c79a611b89f3a1095fce6eae5c6',
        'date' => '19 July 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.15 binaries and source',
        'filename' => 'Windows 5.3.15 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.3.15. Over 30 bugs were fixed, including a security
related overflow issue in the stream implementation. All users of PHP
are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.3.15 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.15">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.16' => 
  array (
    'version' => '5.3.16',
    'date' => '16 Aug 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.16 (tar.bz2)',
        'filename' => 'php-5.3.16.tar.bz2',
        'sha256' => '',
        'md5' => '99cfd78531643027f60c900e792d21be',
        'date' => '16 Aug 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.16 (tar.gz)',
        'filename' => 'php-5.3.16.tar.gz',
        'sha256' => '',
        'md5' => '59b776edeac2897ebe3712dcc94b6706',
        'date' => '16 Aug 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.16 binaries and source',
        'filename' => 'Windows 5.3.16 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.3.16. About 5 bugs were fixed. All users of PHP are encouraged to upgrade to
PHP 5.4.6. Alternatively, PHP 5.3.16 is recommended for those wishing to remain
on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.16 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.16">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.17' => 
  array (
    'version' => '5.3.17',
    'date' => '13 Sep 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.17 (tar.bz2)',
        'filename' => 'php-5.3.17.tar.bz2',
        'sha256' => '',
        'md5' => '29ee79c941ee85d6c1555c176f12f7ef',
        'date' => '13 Sep 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.17 (tar.gz)',
        'filename' => 'php-5.3.17.tar.gz',
        'sha256' => '',
        'md5' => '002e02e36c2cbcada8c49a7e5956d787',
        'date' => '13 Sep 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.17 binaries and source',
        'filename' => 'Windows 5.3.17 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.3.17. About 5 bugs were fixed. All users of PHP are encouraged to upgrade to
PHP 5.4.7. Alternatively, PHP 5.3.17 is recommended for those wishing to remain
on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.17 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.17">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.18' => 
  array (
    'version' => '5.3.18',
    'date' => '18 Oct 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.18 (tar.bz2)',
        'filename' => 'php-5.3.18.tar.bz2',
        'sha256' => '',
        'md5' => '52539c19d0f261560af3c030143dfa8f',
        'date' => '18 Oct 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.18 (tar.gz)',
        'filename' => 'php-5.3.18.tar.gz',
        'sha256' => '',
        'md5' => 'ff2009aadc7c4d1444f6cd8e45f39a41',
        'date' => '18 Oct 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.18 binaries and source',
        'filename' => 'Windows 5.3.18 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.3.18. About 10 bugs were fixed. All users of PHP are encouraged to upgrade to
PHP 5.4.8. Alternatively, PHP 5.3.18 is recommended for those wishing to remain
on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.18 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.18">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.19' => 
  array (
    'version' => '5.3.19',
    'date' => '22 Nov 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.19 (tar.bz2)',
        'filename' => 'php-5.3.19.tar.bz2',
        'sha256' => '',
        'md5' => 'e1d2a3ec7849d4b3032bd1abf1916aa4',
        'date' => '22 Nov 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.19 (tar.gz)',
        'filename' => 'php-5.3.19.tar.gz',
        'sha256' => '',
        'md5' => 'e1bcda4f14bb39ba041297abbf18f8d1',
        'date' => '22 Nov 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.19 binaries and source',
        'filename' => 'Windows 5.3.19 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.3.19. About 10 bugs were fixed. All users of PHP are encouraged to upgrade to
PHP 5.4.9. Alternatively, PHP 5.3.19 is recommended for those wishing to remain
on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.19 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.19">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.2' => 
  array (
    'version' => '5.3.2',
    'date' => '04 Mar 2010',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.2 (tar.bz2)',
        'filename' => 'php-5.3.2.tar.bz2',
        'sha256' => '',
        'md5' => '46f500816125202c48a458d0133254a4',
        'date' => '04 Mar 2010',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.2 (tar.gz)',
        'filename' => 'php-5.3.2.tar.gz',
        'sha256' => '',
        'md5' => '4480d7c6d6b4a86de7b8ec8f0c2d1871',
        'date' => '04 Mar 2010',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the immediate release of PHP
5.3.2. This is a maintenance release in the 5.3 series, which includes a
large number of bug fixes.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.3.2:</b>
</p>
<ul>
  <li>Improved LCG entropy. (Rasmus, Samy Kamkar)</li>
  <li>Fixed safe_mode validation inside tempnam() when the directory path does not end with a /). (Martin Jansen)</li>
  <li>Fixed a possible open_basedir/safe_mode bypass in the session extension identified by Grzegorz Stachowiak. (Ilia)</li>
</ul>

<p>
<b>Key Bug Fixes in PHP 5.3.2 include:</b>
</p>
<ul>
  <li>Added support for SHA-256 and SHA-512 to php\'s crypt.</li>
  <li>Added protection for $_SESSION from interrupt corruption and improved "session.save_path" check.</li>
  <li>Fixed bug #51059 (crypt crashes when invalid salt are given).</li>
  <li>Fixed bug #50940 Custom content-length set incorrectly in Apache sapis.</li>
  <li>Fixed bug #50847 (strip_tags() removes all tags greater then 1023 bytes long).</li>
  <li>Fixed bug #50723 (Bug in garbage collector causes crash).</li>
  <li>Fixed bug #50661 (DOMDocument::loadXML does not allow UTF-16).</li>
  <li>Fixed bug #50632 (filter_input() does not return default value if the variable does not exist).</li>
  <li>Fixed bug #50540 (Crash while running ldap_next_reference test
cases).</li>
  <li>Fixed bug #49851 (http wrapper breaks on 1024 char long headers).</li>
  <li>Over 60 other bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.2 there is a migration guide
available <a href="http://php.net/migration53">here</a>, detailing
the changes between those releases and PHP 5.3.
</p>

<p>
 For a full list of changes in PHP 5.3.2, see the
 <a href="/ChangeLog-5.php#5.3.2">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.20' => 
  array (
    'version' => '5.3.20',
    'date' => '20 Dec 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.20 (tar.bz2)',
        'filename' => 'php-5.3.20.tar.bz2',
        'sha256' => '',
        'md5' => '00241b9e89e93adf3baac32c56211e4e',
        'date' => '20 Dec 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.20 (tar.gz)',
        'filename' => 'php-5.3.20.tar.gz',
        'sha256' => '',
        'md5' => '1e202851bf2ba1ee96d7dc5b48944119',
        'date' => '20 Dec 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.20 binaries and source',
        'filename' => 'Windows 5.3.20 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.3.20. About 15 bugs were fixed. Please note that the PHP 5.3 series will enter an end of life cycle and receive only critical fixes as of March 2013. All users of PHP are encouraged to upgrade to PHP 5.4. PHP 5.3.20 is recommended for those wishing to remain on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.20 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.20">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.21' => 
  array (
    'version' => '5.3.21',
    'date' => '17 Jan 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.21 (tar.bz2)',
        'filename' => 'php-5.3.21.tar.bz2',
        'sha256' => '',
        'md5' => '1b214fc19bb5f5c0902ba27c74d5f4a2',
        'date' => '17 Jan 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.21 (tar.gz)',
        'filename' => 'php-5.3.21.tar.gz',
        'sha256' => '',
        'md5' => 'f47fbe3407520e5d9d895168950aa683',
        'date' => '17 Jan 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.21 binaries and source',
        'filename' => 'Windows 5.3.21 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.3.21. About 5 bugs were fixed All users of PHP are encouraged to upgrade to PHP 5.4. PHP 5.3.21 is recommended for those wishing to remain on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.21 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.21">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.22' => 
  array (
    'version' => '5.3.22',
    'date' => '21 Feb 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.22 (tar.bz2)',
        'filename' => 'php-5.3.22.tar.bz2',
        'sha256' => '',
        'md5' => 'bf351426fc7f97aa13914062958a6100',
        'date' => '21 Feb 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.22 (tar.gz)',
        'filename' => 'php-5.3.22.tar.gz',
        'sha256' => '',
        'md5' => '5008d8e70195d933e30bfbae3651b4ed',
        'date' => '21 Feb 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.22 binaries and source',
        'filename' => 'Windows 5.3.22 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.3.22. About 5 bugs were fixed. All users of PHP are encouraged to upgrade to PHP 5.4. PHP 5.3.22 is recommended for those wishing to remain on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.22 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.22">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.23' => 
  array (
    'version' => '5.3.23',
    'date' => '14 Mar 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.23 (tar.bz2)',
        'filename' => 'php-5.3.23.tar.bz2',
        'sha256' => '',
        'md5' => 'ab7bd1dd3bbc8364cb9fcaa2d79fb502',
        'date' => '14 Mar 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.23 (tar.gz)',
        'filename' => 'php-5.3.23.tar.gz',
        'sha256' => '',
        'md5' => '9cd92b0de2b51dcd372f46fa623984f4',
        'date' => '14 Mar 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.23 binaries and source',
        'filename' => 'Windows 5.3.23 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.3.23. About 7 bugs were fixed, including fixes for CVE-2013-1643 and CVE-2013-1635. All users of PHP are encouraged to upgrade to PHP 5.4. PHP 5.3.23 is recommended for those wishing to remain on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.23 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.23">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.24' => 
  array (
    'version' => '5.3.24',
    'date' => '11 Apr 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.24 (tar.bz2)',
        'filename' => 'php-5.3.24.tar.bz2',
        'sha256' => '',
        'md5' => '9820604df98c648297dcd31ffb8214e8',
        'date' => '11 Apr 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.24 (tar.gz)',
        'filename' => 'php-5.3.24.tar.gz',
        'sha256' => '',
        'md5' => 'cb0311a6a5ed6ffff8f41f713f9d8e84',
        'date' => '11 Apr 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.24 binaries and source',
        'filename' => 'Windows 5.3.24 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.3.24. About 5 bugs were fixed. All users of PHP are encouraged to upgrade to PHP 5.4. PHP 5.3.24 is recommended for those wishing to remain on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.24 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.24">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.25' => 
  array (
    'version' => '5.3.25',
    'date' => '09 May 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.25 (tar.bz2)',
        'filename' => 'php-5.3.25.tar.bz2',
        'sha256' => '',
        'md5' => 'd71db8d92edbb48beb5b645b55471139',
        'date' => '09 May 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.25 (tar.gz)',
        'filename' => 'php-5.3.25.tar.gz',
        'sha256' => '',
        'md5' => 'a430a48b8939fe1f8915ee38681b0afa',
        'date' => '09 May 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.25 binaries and source',
        'filename' => 'Windows 5.3.25 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.3.25. About 5 bugs were fixed. All users of PHP are encouraged to upgrade to PHP 5.4. PHP 5.3.25 is recommended for those wishing to remain on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.25 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.25">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.26' => 
  array (
    'version' => '5.3.26',
    'date' => '06 Jun 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.26 (tar.bz2)',
        'filename' => 'php-5.3.26.tar.bz2',
        'sha256' => '',
        'md5' => 'd71db8d92edbb48beb5b645b55471139',
        'date' => '06 Jun 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.26 (tar.gz)',
        'filename' => 'php-5.3.26.tar.gz',
        'sha256' => '',
        'md5' => 'a430a48b8939fe1f8915ee38681b0afa',
        'date' => '06 Jun 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.26 binaries and source',
        'filename' => 'Windows 5.3.26 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.3.25. About 6 bugs were fixed, including CVE 2013-2110. All users of PHP are encouraged to upgrade to PHP 5.4. PHP 5.3.26 is recommended for those wishing to remain on the 5.3 series.</p>

<p>For source downloads of PHP 5.3.26 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.26">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.27' => 
  array (
    'version' => '5.3.27',
    'date' => '11 Jul 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.27 (tar.bz2)',
        'filename' => 'php-5.3.27.tar.bz2',
        'sha256' => 'e12db21c623b82a2244c4dd9b06bb75af20868c1b748a105a6829a5acc36b287',
        'md5' => '',
        'date' => '11 Jul 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.27 (tar.gz)',
        'filename' => 'php-5.3.27.tar.gz',
        'sha256' => '5ecd737fc79ad33b5c79a9784c0b4211d211ba682d4d721ac6ce975907a5b12b',
        'md5' => '',
        'date' => '11 Jul 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.27 binaries and source',
        'filename' => 'Windows 5.3.27 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.3.27. About 10 bugs were fixed, including a security fix in the XML parser (Bug #65236).</p>

<p><b>Please Note:</b> This will be the last regular release of the PHP 5.3 series. All users of PHP are encouraged to upgrade to PHP 5.4 or PHP 5.5. The PHP 5.3 series will receive only security fixes for the next year.</p>

<p>For source downloads of PHP 5.3.27 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.27">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.28' => 
  array (
    'version' => '5.3.28',
    'date' => '11 Jul 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.28 (tar.bz2)',
        'filename' => 'php-5.3.28.tar.bz2',
        'sha256' => '0cac960c651c4fbb3d21cf2f2b279a06e21948fb35a0d1439b97296cac1d8513',
        'md5' => '',
        'date' => '12 Dec 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.28 (tar.gz)',
        'filename' => 'php-5.3.28.tar.gz',
        'sha256' => 'ace8fde82a4275d6dcec4e15feb047416e1813fea46e159dfd113298371396d0',
        'md5' => '',
        'date' => '12 Dec 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.3.28 binaries and source',
        'filename' => 'Windows 5.3.28 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.3.28. This release fixes two security issues in OpenSSL module in PHP 5.3 - CVE-2013-4073 and CVE-2013-6420. All PHP 5.3 users are encouraged to upgrade to PHP 5.3.28 or latest versions of PHP 5.4 or PHP 5.5.</p>

<p>For source downloads of PHP 5.3.28 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.3.28">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.29' => 
  array (
    'version' => '5.3.29',
    'date' => '14 Aug 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.29 (tar.bz2)',
        'filename' => 'php-5.3.29.tar.bz2',
        'sha256' => 'c4e1cf6972b2a9c7f2777a18497d83bf713cdbecabb65d3ff62ba441aebb0091',
        'md5' => '',
        'date' => '14 Aug 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.29 (tar.gz)',
        'filename' => 'php-5.3.29.tar.gz',
        'sha256' => '57cf097de3d6c3152dda342f62b1b2e9c988f4cfe300ccfe3c11f3c207a0e317',
        'md5' => '',
        'date' => '14 Aug 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.3.29 (tar.xz)',
        'filename' => 'php-5.3.29.tar.xz',
        'sha256' => '8438c2f14ab8f3d6cd2495aa37de7b559e33b610f9ab264f0c61b531bf0c262d',
        'md5' => '',
        'date' => '14 Aug 2014',
      ),
      3 => 
      array (
        'name' => 'Windows 5.3.29 binaries and source',
        'filename' => 'Windows 5.3.29 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of
     PHP 5.3.29. This release marks the <strong>end of life</strong> of the <strong>PHP 5.3 series</strong>.
     Future releases of this series are <strong>not planned</strong>. All PHP 5.3 users are
     encouraged to upgrade to the current stable version of PHP 5.5 or
     previous stable version of PHP 5.4, which are supported till at least
     2016 and 2015 respectively.</p>

     <p>PHP 5.3.29 contains about 25 potentially security related fixes
	     backported from PHP 5.4 and 5.5.</p>

     <p>For source downloads of PHP 5.3.29, please visit our <a href="http://www.php.net/downloads/">downloads page</a>. Windows
     binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>. The list of changes is recorded in
     the <a href="http://www.php.net/ChangeLog-5.php#5.3.29">ChangeLog</a>.</p>

     <p>For helping your migration to newer versions please refer to our migration
     guides for updates from <a href="http://php.net/migration54">PHP 5.3 to
	     5.4</a> and from <a href="http://php.net/migration55">PHP 5.4 to 5.5</a>.</p>


</announcement>',
      ),
    ),
  ),
  '5.3.3' => 
  array (
    'version' => '5.3.3',
    'date' => '22 July 2010',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.3 (tar.bz2)',
        'filename' => 'php-5.3.3.tar.bz2',
        'sha256' => '',
        'md5' => '21ceeeb232813c10283a5ca1b4c87b48',
        'date' => '22 July 2010',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.3 (tar.gz)',
        'filename' => 'php-5.3.3.tar.gz',
        'sha256' => '',
        'md5' => '5adf1a537895c2ec933fddd48e78d8a2',
        'date' => '22 July 2010',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.3.3. This release focuses on improving the
stability and security of the PHP 5.3.x branch with over 100 bug
fixes, some of which are security related. All users are encouraged
to upgrade to this release.
</p>

<p>
<b>Backwards incompatible change:</b>
</p>
<ul>
	<li>Methods with the same name as the last element of a namespaced class name
	will no longer be treated as constructor. This change doesn\'t affect
	non-namespaced classes.

	<p><?php highlight_string(\'<?php
namespace Foo;
class Bar {
    public function Bar() {
        // treated as constructor in PHP 5.3.0-5.3.2
        // treated as regular method in PHP 5.3.3
    }
}
??>\');
	?&gt;</p>
	<p>There is no impact on migration from 5.2.x because namespaces were only introduced in PHP 5.3.</p></li>
</ul>
<p>
<b>Security Enhancements and Fixes in PHP 5.3.3:</b>
</p>
<ul>
	<li>Rewrote var_export() to use smart_str rather than output buffering, prevents data disclosure if a fatal error occurs (CVE-2010-2531).</li>
	<li>Fixed a possible resource destruction issues in shm_put_var().</li>
	<li>Fixed a possible information leak because of interruption of XOR operator.</li>
	<li>Fixed a possible memory corruption because of unexpected call-time pass by refernce and following memory clobbering through callbacks.</li>
	<li>Fixed a possible memory corruption in ArrayObject::uasort().</li>
	<li>Fixed a possible memory corruption in parse_str().</li>
	<li>Fixed a possible memory corruption in pack().</li>
	<li>Fixed a possible memory corruption in substr_replace().</li>
	<li>Fixed a possible memory corruption in addcslashes().</li>
	<li>Fixed a possible stack exhaustion inside fnmatch().</li>
	<li>Fixed a possible dechunking filter buffer overflow.</li>
	<li>Fixed a possible arbitrary memory access inside sqlite extension.</li>
	<li>Fixed string format validation inside phar extension.</li>
	<li>Fixed handling of session variable serialization on certain prefix characters.</li>
	<li>Fixed a NULL pointer dereference when processing invalid XML-RPC requests (Fixes CVE-2010-0397, bug #51288).</li>
	<li>Fixed SplObjectStorage unserialization problems (CVE-2010-2225).</li>
	<li>Fixed possible buffer overflows in mysqlnd_list_fields,  mysqlnd_change_user.</li>
	<li>Fixed possible buffer overflows when handling error packets in mysqlnd.</li>
</ul>

<p>
<b>Key enhancements in PHP 5.3.3 include:</b>
</p>
<ul>
	<li>Upgraded bundled sqlite to version 3.6.23.1.</li>
	<li>Upgraded bundled PCRE to version 8.02.</li>
	<li>Added FastCGI Process Manager (FPM) SAPI.</li>
	<li>Added stream filter support to mcrypt extension.</li>
	<li>Added full_special_chars filter to ext/filter.</li>
	<li>Fixed a possible crash because of recursive GC invocation.</li>
	<li>Fixed bug #52238 (Crash when an Exception occured in iterator_to_array).</li>
	<li>Fixed bug #52041 (Memory leak when writing on uninitialized variable returned from function).</li>
	<li>Fixed bug #52060 (Memory leak when passing a closure to method_exists()).</li>
	<li>Fixed bug #52001 (Memory allocation problems after using variable variables).</li>
	<li>Fixed bug #51723 (Content-length header is limited to 32bit integer with Apache2 on Windows).</li>
	<li>Fixed bug #48930 (__COMPILER_HALT_OFFSET__ incorrect in PHP &gt;= 5.3).</li>
</ul>

<p>
For users upgrading from PHP 5.2 there is a migration guide available on
<a href="/migration53">http://php.net/migration53</a>, detailing the changes between those
releases and PHP 5.3.
</p>

<p>
 For a full list of changes in PHP 5.3.3, see the <a href="/ChangeLog-5.php#5.3.3">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.4' => 
  array (
    'version' => '5.3.4',
    'date' => '09 December 2010',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.4 (tar.bz2)',
        'filename' => 'php-5.3.4.tar.bz2',
        'sha256' => '',
        'md5' => '2c069d8f690933e3bf6a8741ed818150',
        'date' => '09 December 2010',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.4 (tar.gz)',
        'filename' => 'php-5.3.4.tar.gz',
        'sha256' => '',
        'md5' => 'b69b36132899c5ca3bf155efa0218676',
        'date' => '09 December 2010',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the immediate release of PHP
5.3.4. This is a maintenance release in the 5.3 series, which includes a
large number of bug fixes.
</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.3.4:</b>
</p>
<ul>
  <li>Fixed crash in zip extract method (possible CWE-170).</li>
  <li>Paths with NULL in them (foo\\0bar.txt) are now considered as invalid (CVE-2006-7243).</li>
  <li>Fixed a possible double free in imap extension (Identified by Mateusz
    Kocielski). (CVE-2010-4150).</li>
  <li>Fixed NULL pointer dereference in ZipArchive::getArchiveComment.
    (CVE-2010-3709).</li>
  <li>Fixed possible flaw in open_basedir (CVE-2010-3436).</li>
  <li>Fixed MOPS-2010-24, fix string validation. (CVE-2010-2950).</li>
  <li>Fixed symbolic resolution support when the target is a DFS share.</li>
  <li>Fixed bug #52929 (Segfault in filter_var with FILTER_VALIDATE_EMAIL with
    large amount of data) (CVE-2010-3710).</li>
</ul>

<p>
<b>Key Bug Fixes in PHP 5.3.4 include:</b>
</p>
<ul>
  <li>Added stat support for zip stream.</li>
  <li>Added follow_location (enabled by default) option for the http stream
    support.</li>
  <li>Added a 3rd parameter to get_html_translation_table. It now takes a charset hint, like htmlentities et al.</li>
  <li>Implemented FR #52348, added new constant ZEND_MULTIBYTE to detect
    zend multibyte at runtime.</li>
  <li>Multiple improvements to the FPM SAPI.</li>
  <li>Over 100 other bug fixes.</li>
</ul>

<p>
For users upgrading from PHP 5.2 there is a migration guide
available <a href="http://php.net/migration53">here</a>, detailing
the changes between those releases and PHP 5.3.
</p>

<p>
 For a full list of changes in PHP 5.3.4, see the
 <a href="/ChangeLog-5.php#5.3.4">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.3.5' => 
  array (
    'version' => '5.3.5',
    'date' => '06 January 2011',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.5 (tar.bz2)',
        'filename' => 'php-5.3.5.tar.bz2',
        'sha256' => '',
        'md5' => '8aaf20c95e91f25c5b6a591e5d6d61b9',
        'date' => '06 January 2011',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.5 (tar.gz)',
        'filename' => 'php-5.3.5.tar.gz',
        'sha256' => '',
        'md5' => 'fb727a3ac72bf0ce37e1a20468a7bb81',
        'date' => '06 January 2011',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team would like to announce the immediate
availability of PHP 5.3.5.</p>

<p>This release resolves a critical issue, reported as PHP bug #53632,
where conversions from string to double might cause the PHP interpreter
to hang on systems using x87 FPU registers.</p>

<p>The problem is known to only affect x86 32-bit PHP processes, regardless
of whether the system hosting PHP is 32-bit or 64-bit. You can test
whether your system is affected by running <a href="/distributions/test_bug53632.txt">this script</a>
from the command line.</p>

<p>All users of PHP are strongly advised to update to these versions
immediately.</p>

<p>
<b>Security Enhancements and Fixes in PHP 5.3.5:</b>
</p>
<ul>
  <li>Fixed bug #53632 (PHP hangs on numeric value 2.2250738585072011e-308). (CVE-2010-4645)</li>
</ul>


</announcement>',
      ),
    ),
  ),
  '5.3.6' => 
  array (
    'version' => '5.3.6',
    'date' => '19 March 2011',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.6 (tar.bz2)',
        'filename' => 'php-5.3.6.tar.bz2',
        'sha256' => '',
        'md5' => '2286f5a82a6e8397955a0025c1c2ad98',
        'date' => '19 March 2011',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.6 (tar.gz)',
        'filename' => 'php-5.3.6.tar.gz',
        'sha256' => '',
        'md5' => '88a2b00047bc53afbbbdf10ebe28a57e',
        'date' => '19 March 2011',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.3.6. This release focuses on improving the
stability of the PHP 5.3.x branch with over 60 bug fixes, some of which
are security related.</p>

<p><b>Security Enhancements and Fixes in PHP 5.3.6:</b></p>
<ul>
    <li>Enforce security in the fastcgi protocol parsing with fpm SAPI.</li>
    <li>Fixed bug #54247 (format-string vulnerability on Phar). (CVE-2011-1153)</li>
    <li>Fixed bug #54193 (Integer overflow in shmop_read()). (CVE-2011-1092)</li>
    <li>Fixed bug #54055 (buffer overrun with high values for precision ini setting).</li>
    <li>Fixed bug #54002 (crash on crafted tag in exif). (CVE-2011-0708)</li>
    <li>Fixed bug #53885 (ZipArchive segfault with FL_UNCHANGED on empty archive). (CVE-2011-0421)</li>
</ul>

<p><b>Key enhancements in PHP 5.3.6 include:</b></p>
<ul>
    <li>Upgraded bundled Sqlite3 to version 3.7.4.</li>
    <li>Upgraded bundled PCRE to version 8.11.</li>
    <li>Added ability to connect to HTTPS sites through proxy with basic authentication using stream_context/http/header/Proxy-Authorization.</li>
    <li>Added options to debug backtrace functions.</li>
    <li>Changed default value of ini directive serialize_precision from 100 to 17.</li>
    <li>Fixed Bug #53971 (isset() and empty() produce apparently spurious runtime error).</li>
    <li>Fixed Bug #53958 (Closures can\'t \'use\' shared variables by value and by reference).</li>
    <li>Fixed bug #53577 (Regression introduced in 5.3.4 in open_basedir with a trailing forward slash).</li>
    <li>Over 60 other bug fixes.</li>
</ul>

<p>Windows users: please mind that we do no longer provide builds created
with Visual Studio C++ 6. It is impossible to maintain a high quality
and safe build of PHP for Windows using this unmaintained compiler.</p>

<p>For Apache SAPIs (php5_apache2_2.dll), be sure that you use a Visual
Studio C++ 9 version of Apache. We recommend the Apache builds as provided
by <a href="http://www.apachelounge.com/">ApacheLounge</a>. For any other
SAPI (CLI, FastCGI via mod_fcgi, FastCGI with IIS or other FastCGI capable
server), everything works as before. Third party extension providers
must rebuild their extensions to make them compatible and loadable with
the Visual Studio C++9 builds that we now provide.</p>

<p>All PHP users should note that the PHP 5.2 series is NOT supported
anymore. All users are strongly encouraged to upgrade to PHP 5.3.6.</p>



</announcement>',
      ),
    ),
  ),
  '5.3.7' => 
  array (
    'version' => '5.3.7',
    'date' => '18 August 2011',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.7 (tar.bz2)',
        'filename' => 'php-5.3.7.tar.bz2',
        'sha256' => '',
        'md5' => '2d47d003c96de4e88863ff38da61af33',
        'date' => '18 August 2011',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.7 (tar.gz)',
        'filename' => 'php-5.3.7.tar.gz',
        'sha256' => '',
        'md5' => '1ec460bf3a40cea4079ee80076558d51',
        'date' => '18 August 2011',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.3.7. This release focuses on improving the
stability of the PHP 5.3.x branch with over 90 bug fixes, some of which
are security related.</p>

<p><b>Security Enhancements and Fixes in PHP 5.3.7:</b></p>
<ul>
	<li>Updated crypt_blowfish to 1.2. (CVE-2011-2483)</li>
	<li>Fixed crash in error_log(). Reported by Mateusz Kocielski</li>
	<li>Fixed buffer overflow on overlog salt in crypt().</li>
	<li>Fixed bug #54939 (File path injection vulnerability in RFC1867 File upload filename). Reported by Krzysztof Kotowicz. (CVE-2011-2202)</li>
	<li>Fixed stack buffer overflow in socket_connect(). (CVE-2011-1938)</li>
	<li>Fixed bug #54238 (use-after-free in substr_replace()). (CVE-2011-1148)</li>
</ul>

<p><b>Key enhancements in PHP 5.3.7 include:</b></p>
<ul>
    <li>Upgraded bundled Sqlite3 to version 3.7.7.1</li>
    <li>Upgraded bundled PCRE to version 8.12</li>
    <li>Fixed bug #54910 (Crash when calling call_user_func with unknown function name)</li>
    <li>Fixed bug #54585 (track_errors causes segfault)</li>
    <li>Fixed bug #54262 (Crash when assigning value to a dimension in a non-array)</li>
    <li>Fixed a crash inside dtor for error handling</li>
    <li>Fixed bug #55339 (Segfault with allow_call_time_pass_reference = Off)</li>
    <li>Fixed bug #54935 php_win_err can lead to crash</li>
    <li>Fixed bug #54332 (Crash in zend_mm_check_ptr // Heap corruption)</li>
    <li>Fixed bug #54305 (Crash in gc_remove_zval_from_buffer)</li>
    <li>Fixed bug #54580 (get_browser() segmentation fault when browscap ini directive is set through php_admin_value)</li>
    <li>Fixed bug #54529 (SAPI crashes on apache_config.c:197)</li>
    <li>Fixed bug #54283 (new DatePeriod(NULL) causes crash).</li>
    <li>Fixed bug #54269 (Short exception message buffer causes crash)</li>
    <li>Fixed Bug #54221 (mysqli::get_warnings segfault when used in multi queries)</li>
    <li>Fixed bug #54395 (Phar::mount() crashes when calling with wrong parameters)</li>
    <li>Fixed bug #54384 (Dual iterators, GlobIterator, SplFileObject and SplTempFileObject crash when user-space classes don\'t call the parent constructor)</li>
    <li>Fixed bug #54292 (Wrong parameter causes crash in SplFileObject::__construct())</li>
  	<li>Fixed bug #54291 (Crash iterating DirectoryIterator for dir name starting with \\0)</li>
  	<li>Fixed bug #54281 (Crash in non-initialized RecursiveIteratorIterator)</li>
  	<li>Fixed bug #54623 (Segfault when writing to a persistent socket after closing a copy of the socket)</li>
  	<li>Fixed bug #54681 (addGlob() crashes on invalid flags)</li>
    <li>Over 80 other bug fixes.</li>
</ul>

<p>Windows users: please mind that we do no longer provide builds created
with Visual Studio C++ 6. It is impossible to maintain a high quality
and safe build of PHP for Windows using this unmaintained compiler.</p>

<p>For Apache SAPIs (php5_apache2_2.dll), be sure that you use a Visual
Studio C++ 9 version of Apache. We recommend the Apache builds as provided
by <a href="http://www.apachelounge.com/">ApacheLounge</a>. For any other
SAPI (CLI, FastCGI via mod_fcgi, FastCGI with IIS or other FastCGI capable
server), everything works as before. Third party extension providers
must rebuild their extensions to make them compatible and loadable with
the Visual Studio C++9 builds that we now provide.</p>

<p>All PHP users should note that the PHP 5.2 series is NOT supported
anymore. All users are strongly encouraged to upgrade to PHP 5.3.7.</p>



</announcement>',
      ),
    ),
  ),
  '5.3.8' => 
  array (
    'version' => '5.3.8',
    'date' => '23 August 2011',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.8 (tar.bz2)',
        'filename' => 'php-5.3.8.tar.bz2',
        'sha256' => '',
        'md5' => '704cd414a0565d905e1074ffdc1fadfb',
        'date' => '23 August 2011',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.8 (tar.gz)',
        'filename' => 'php-5.3.8.tar.gz',
        'sha256' => '',
        'md5' => 'f4ce40d5d156ca66a996dbb8a0e7666a',
        'date' => '23 August 2011',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.3.8. This release fixes two issues introduced in
the PHP 5.3.7 release:</p>

<ul>
    <li>Fixed bug #55439 (crypt() returns only the salt for MD5)</li>
    <li>Reverted a change in timeout handling restoring PHP 5.3.6 behavior,
     which caused mysqlnd SSL connections to hang (Bug #55283).</li>
</ul>

<p>All PHP users should note that the PHP 5.2 series is NOT supported
anymore. All users are strongly encouraged to upgrade to PHP 5.3.8.</p>



</announcement>',
      ),
    ),
  ),
  '5.3.9' => 
  array (
    'version' => '5.3.9',
    'date' => '10 January 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.3.9 (tar.bz2)',
        'filename' => 'php-5.3.9.tar.bz2',
        'sha256' => '',
        'md5' => 'dd3288ed5c08cd61ac5bf619cb357521',
        'date' => '10 January 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.3.9 (tar.gz)',
        'filename' => 'php-5.3.9.tar.gz',
        'sha256' => '',
        'md5' => 'c79e374c61423beb64a69da1eb5526b7',
        'date' => '10 January 2012',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.3.9. This release focuses on improving the
stability of the PHP 5.3.x branch with over 90 bug fixes, some of
which are security related.</p>

<p>Security Enhancements and Fixes in PHP 5.3.9:</p>

<ul>
  <li>Added max_input_vars directive to prevent attacks based on hash collisions. (CVE-2011-4885)</li>
  <li>Fixed bug #60150 (Integer overflow during the parsing of invalid exif
    header). (CVE-2011-4566)</li>
</ul>

<p>Key enhancements in PHP 5.3.9 include:</p>

<ul>
  <li>Fixed bug #55475 (is_a() triggers autoloader, new optional 3rd argument to
    is_a and is_subclass_of).</li>
  <li>Fixed bug #55609 (mysqlnd cannot be built shared)</li>
  <li>Many changes to the FPM SAPI module</li>
</ul>

<p>All users are strongly encouraged to upgrade to PHP 5.3.9.</p>


</announcement>',
      ),
    ),
  ),
  '5.4.0' => 
  array (
    'version' => '5.4.0',
    'date' => '01 March 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.0 (tar.bz2)',
        'filename' => 'php-5.4.0.tar.bz2',
        'sha256' => '',
        'md5' => '04bb6f9d71ea86ba05685439d50db074',
        'date' => '01 March 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.0 (tar.gz)',
        'filename' => 'php-5.4.0.tar.gz',
        'sha256' => '',
        'md5' => '46b72e274c6ea7e775245ffdb81c9ce5',
        'date' => '01 March 2012',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the immediate availability
of PHP <a href="http://php.net/downloads.php#v5.4.0">5.4.0</a>.
This release is a major leap forward in the 5.x series,
and includes a large number of new features and bug fixes.
</p>

<p>
<b>The key features of PHP 5.4.0 include:</b>
</p>
<ul>
 <li>New language syntax including <a href="http://php.net/traits">Traits</a>,
    <a href="http://docs.php.net/manual/language.types.array.php">shortened array syntax</a>
    and <a href="http://docs.php.net/manual/migration54.new-features.php">more</a></li>
 <li>Improved performance and reduced memory consumption</li>
 <li>Support for multibyte languages now available in all builds of PHP at the flip of a runtime switch</li>
 <li><a href="http://php.net/manual/features.commandline.webserver.php">
    Built-in webserver</a> in CLI mode to simplify development workflows and testing</li>
 <li>Cleaner code base thanks to the removal of multiple deprecated language features</li>
 <li>Many more improvements and fixes</li>
</ul>

<p>
<b>Changes that affect compatibility:</b>
</p>
<ul>
  <li><a href="http://www.php.net/manual/security.globals.php">Register globals</a>, <a href="http://www.php.net/manual/security.magicquotes.php">magic quotes</a> and <a href="http://www.php.net/manual/features.safe-mode.php">safe mode</a> were removed</li>
  <li>The <a href="http://php.net/manual/control-structures.break.php">break</a>/<a href="http://php.net/manual/control-structures.continue.php">continue</a> $var syntax was removed</li>
  <li>The ini option <a href="http://www.php.net/manual/ini.core.php#ini.allow-call-time-pass-reference">allow_call_time_pass_reference</a> was removed</li>
  <li>The PHP <a href="http://www.php.net/manual/ini.core.php#ini.default-charset">default_charset</a> is now "UTF-8" within the distributed php.ini files, but still defaults to ""</li>
</ul>

<p>
<b>Extensions moved to <a href="http://pecl.php.net">PECL</a>:</b>
</p>
<ul>
  <li><a href="http://www.php.net/manual/ref.sqlite.php">ext/sqlite</a> (<a href="http://www.php.net/manual/book.sqlite3.php">ext/sqlite3</a> and <a href="http://www.php.net/manual/ref.pdo-sqlite.php">ext/pdo_sqlite</a> are not affected)</li>
</ul>

<p>
PHP 5.4 will be the last series to support Windows XP and Windows
2003. We will not provide binary packages for these Windows versions
after PHP 5.4.
</p>

<p>
For users upgrading from PHP 5.3 there is a migration guide available
<a href="http://php.net/migration54">here</a>, detailing the changes between
PHP 5.3 and PHP 5.4.0.
</p>

<p>
 For a full list of changes in PHP 5.4.0, see the
 <a href="/ChangeLog-5.php#5.4.0">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.1' => 
  array (
    'version' => '5.4.1',
    'date' => '26 April 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.1 (tar.bz2)',
        'filename' => 'php-5.4.1.tar.bz2',
        'sha256' => '',
        'md5' => '5b9529ed89dbc48c498e9693d1af3caf',
        'date' => '26 April 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.1 (tar.gz)',
        'filename' => 'php-5.4.1.tar.gz',
        'sha256' => '',
        'md5' => 'acd566dbd70f855c19d17fc3c0e876a2',
        'date' => '26 April 2012',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of
PHP 5.4.1. This release focuses on improving the stability of the
PHP 5.4 branch with over 60 bug fixes, some of which are security related.</p>

<p>Security Enhancements for PHP 5.4.1:</p>

<ul>
  <li>Fixed bug #54374 (Insufficient validating of upload name leading to
    corrupted $_FILES indices). (CVE-2012-1172). (Stas, lekensteyn at
    gmail dot com, Pierre)</li>
  <li>Add open_basedir checks to readline_write_history and readline_read_history.
    (Rasmus, reported by Mateusz Goik)</li>
</ul>

<p>Key enhancements in PHP 5.4.1 include:</p>

<ul>
  <li>Added debug info handler to DOM objects. (Gustavo, Joey Smith)</li>
  <li>Fixed bug #61172 (Add Apache 2.4 support). (Chris Jones)</li>
</ul>

<p>For a full list of changes in PHP 5.4.1, see the <a href="/ChangeLog-5.php#5.4.1">ChangeLog</a>. For source downloads please visit
our <a href="/downloads/">downloads page</a>, Windows binaries can be found
on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.</p>

<p>All users of PHP are strongly encouraged to upgrade to PHP 5.4.1.</p>


</announcement>',
      ),
    ),
  ),
  '5.4.10' => 
  array (
    'version' => '5.4.10',
    'date' => '20 Dec 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.10 (tar.bz2)',
        'filename' => 'php-5.4.10.tar.bz2',
        'sha256' => '',
        'md5' => 'cb716b657a30570b9b468b9e7bc551a1',
        'date' => '20 Dec 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.10 (tar.gz)',
        'filename' => 'php-5.4.10.tar.gz',
        'sha256' => '',
        'md5' => '1e7fbe418658d5433bd315030584c45c',
        'date' => '20 Dec 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.10 binaries and source',
        'filename' => 'Windows 5.4.10 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.10. About 15 bugs were fixed. All
users of PHP are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.10 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.10">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.11' => 
  array (
    'version' => '5.4.11',
    'date' => '17 Jan 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.11 (tar.bz2)',
        'filename' => 'php-5.4.11.tar.bz2',
        'sha256' => '',
        'md5' => '9975e68c22b86b013b934743ad2d2276',
        'date' => '17 Jan 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.11 (tar.gz)',
        'filename' => 'php-5.4.11.tar.gz',
        'sha256' => '',
        'md5' => '32fa16b3abd5527316c3c076b3395914',
        'date' => '17 Jan 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.11 binaries and source',
        'filename' => 'Windows 5.4.11 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.11. About 10 bugs were fixed. All
users of PHP are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.11 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.11">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.12' => 
  array (
    'version' => '5.4.12',
    'date' => '21 Feb 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.12 (tar.bz2)',
        'filename' => 'php-5.4.12.tar.bz2',
        'sha256' => '',
        'md5' => '5c7b614242ae12e9cacca21c8ab84818',
        'date' => '21 Feb 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.12 (tar.gz)',
        'filename' => 'php-5.4.12.tar.gz',
        'sha256' => '',
        'md5' => '81b20cac4f977b8764ae904302048d84',
        'date' => '21 Feb 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.12 binaries and source',
        'filename' => 'Windows 5.4.12 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.12. About 10 bugs were fixed. All
users of PHP are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.12 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.12">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.13' => 
  array (
    'version' => '5.4.13',
    'date' => '14 Mar 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.13 (tar.bz2)',
        'filename' => 'php-5.4.13.tar.bz2',
        'sha256' => '',
        'md5' => 'cacd308e978b7cf9ba4993196612ccf7',
        'date' => '14 Mar 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.13 (tar.gz)',
        'filename' => 'php-5.4.13.tar.gz',
        'sha256' => '',
        'md5' => '445025340677d5bfe22eb670d6db6795',
        'date' => '14 Mar 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.13 binaries and source',
        'filename' => 'Windows 5.4.13 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.13. About 15 bugs were fixed, including fixes for CVE-2013-1643 and CVE-2013-1635. All
users of PHP are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.13 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.13">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.14' => 
  array (
    'version' => '5.4.14',
    'date' => '11 Apr 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.14 (tar.bz2)',
        'filename' => 'php-5.4.14.tar.bz2',
        'sha256' => '',
        'md5' => 'cfdc044be2c582991a1fe0967898fa38',
        'date' => '11 Apr 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.14 (tar.gz)',
        'filename' => 'php-5.4.14.tar.gz',
        'sha256' => '',
        'md5' => '08df8196af12bc850409a7bff13bf8f0',
        'date' => '11 Apr 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.14 binaries and source',
        'filename' => 'Windows 5.4.14 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.14. About 15 bugs were fixed. All users of PHP are encouraged to
upgrade to this release.</p>

<p>For source downloads of PHP 5.4.14 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.14">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.15' => 
  array (
    'version' => '5.4.15',
    'date' => '09 May 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.15 (tar.bz2)',
        'filename' => 'php-5.4.15.tar.bz2',
        'sha256' => '',
        'md5' => '145ea5e845e910443ff1eddb3dbcf56a',
        'date' => '09 May 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.15 (tar.gz)',
        'filename' => 'php-5.4.15.tar.gz',
        'sha256' => '',
        'md5' => '2651b983c18df9d455ec4c69aef45834',
        'date' => '09 May 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.15 binaries and source',
        'filename' => 'Windows 5.4.15 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.15. About 10 bugs were fixed. All users of PHP are encouraged to
upgrade to this release.</p>

<p>For source downloads of PHP 5.4.15 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.15">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.16' => 
  array (
    'version' => '5.4.16',
    'date' => '09 May 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.16 (tar.bz2)',
        'filename' => 'php-5.4.16.tar.bz2',
        'sha256' => '',
        'md5' => '3d2c694d28861d707b2622c3cc941cff',
        'date' => '06 Jun 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.16 (tar.gz)',
        'filename' => 'php-5.4.16.tar.gz',
        'sha256' => '',
        'md5' => '3940a5295872964495f9c56596272d68',
        'date' => '06 Jun 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.16 binaries and source',
        'filename' => 'Windows 5.4.16 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.16. About 15 bugs were fixed, including CVE 2013-2110. All users of PHP are encouraged to
upgrade to this release.</p>

<p>For source downloads of PHP 5.4.16 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.16">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.17' => 
  array (
    'version' => '5.4.17',
    'date' => '04 Jul 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.17 (tar.bz2)',
        'filename' => 'php-5.4.17.tar.bz2',
        'sha256' => '',
        'md5' => '1e027e99e2a874310fd518e87e3947af',
        'date' => '04 Jul 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.17 (tar.gz)',
        'filename' => 'php-5.4.17.tar.gz',
        'sha256' => '',
        'md5' => 'cc698032dcdcb9ad158edcc90fe798d6',
        'date' => '04 Jul 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.17 binaries and source',
        'filename' => 'Windows 5.4.17 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.17. About 20 bugs were fixed. All users of PHP are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.17 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.17">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.18' => 
  array (
    'version' => '5.4.18',
    'date' => '04 Jul 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.18 (tar.bz2)',
        'filename' => 'php-5.4.18.tar.bz2',
        'sha256' => '',
        'md5' => 'b2e185b46b22a48a385cf21a0dc76e65',
        'date' => '15 Aug 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.18 (tar.gz)',
        'filename' => 'php-5.4.18.tar.gz',
        'sha256' => '',
        'md5' => 'd0a3f55deceaec921f45f76d7b4e764b',
        'date' => '15 Aug 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.18 binaries and source',
        'filename' => 'Windows 5.4.18 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.18. About 30 bugs were fixed, including security issues CVE-2013-4113 and CVE-2013-4248.
</p>

<p><b>NOTE:</b> Please do not use this release, due to the bug in the fix for CVE-2013-4248. This bug is fixed in
PHP 5.4.19.</p>

<p>For source downloads of PHP 5.4.18 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.18">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.19' => 
  array (
    'version' => '5.4.19',
    'date' => '22 Aug 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.19 (tar.bz2)',
        'filename' => 'php-5.4.19.tar.bz2',
        'sha256' => '',
        'md5' => 'f06f99b9872b503758adab5ba7a7e755',
        'date' => '22 Aug 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.19 (tar.gz)',
        'filename' => 'php-5.4.19.tar.gz',
        'sha256' => '',
        'md5' => '9e7ad2494ba3de519328f74267de8342',
        'date' => '22 Aug 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.19 binaries and source',
        'filename' => 'Windows 5.4.19 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.19. This release fixes a bug in the patch for CVE-2013-4248 in OpenSSL module and
compile failure with ZTS enabled.</p>

<p>All PHP 5.4 users are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.19 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.19">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.2' => 
  array (
    'version' => '5.4.2',
    'date' => '03 May 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.2 (tar.bz2)',
        'filename' => 'php-5.4.2.tar.bz2',
        'sha256' => '',
        'md5' => '252a6546db3a26260b419a883c875615',
        'date' => '03 May 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.2 (tar.gz)',
        'filename' => 'php-5.4.2.tar.gz',
        'sha256' => '',
        'md5' => '4b62935cbea385a23335f17d64d716c7',
        'date' => '03 May 2012',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.2. This release delivers a security fix.</p>

<p>There is a vulnerability in certain CGI-based setups that has gone
unnoticed for at least 8 years. <a href="http://tools.ietf.org/html/draft-robinson-www-interface-00#section-7">Section
7 of the CGI spec</a> states:</p>

<cite>
   Some systems support a method for supplying a array of strings to the
   CGI script. This is only used in the case of an `indexed\' query. This
   is identified by a "GET" or "HEAD" HTTP request with a URL search
   string not containing any unencoded "=" characters.
</cite>

<p>So requests that do not have a "=" in the query string are treated
differently from those who do in some CGI implementations. For PHP this
means that a request containing ?-s may dump the PHP source code for the
page, but a request that has ?-s&amp;a=1 is fine.</p>

<p>A large number of sites run PHP as either an Apache module through
mod_php or using php-fpm under nginx. Neither of these setups are
vulnerable to this. Straight shebang-style CGI also does not appear to
be vulnerable.</p>

<p>If you are using Apache mod_cgi to run PHP you may be vulnerable. To see
if you are just add ?-s to the end of any of your URLs. If you see your
source code, you are vulnerable. If your site renders normally, you are not.</p>

<p>Making a bad week worse, we had a bug in our bug system that toggled the
private flag of a bug report to public on a comment to the bug report
causing this issue to go public before we had time to test solutions to
the level we would like.</p>

<p>To fix this update to PHP 5.3.12 or PHP 5.4.2. We recognize that since
this is a rather outdated way to run PHP it may not be feasible to
upgrade these sites to a modern version of PHP, so an alternative is to
configure your web server to not let these types of requests with query
strings starting with a "-" and not containing a "=" through. Adding a
rule like this should not break any sites. For Apache using mod_rewrite
it would look like this:</p>

<pre>
    RewriteCond %{QUERY_STRING} ^(%2d|-)[^=]+$ [NC]
    RewriteRule ^(.*) $1? [L]
</pre>

<p>If you are writing your own rule, be sure to take the urlencoded ?%2ds
version into account.</p>

<p>For source downloads of PHP 5.4.2 please visit
our <a href="/downloads/">downloads page</a>, Windows binaries can be found
on <a href="http://windows.php.net/download/">windows.php.net/download/</a>. A
<a href="/ChangeLog-5.php#5.4.2">ChangeLog</a> exists.</p>


</announcement>',
      ),
    ),
  ),
  '5.4.20' => 
  array (
    'version' => '5.4.20',
    'date' => '19 Sep 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.20 (tar.bz2)',
        'filename' => 'php-5.4.20.tar.bz2',
        'sha256' => '',
        'md5' => 'e25db5592ed14842b4239be9d990cce8',
        'date' => '19 Sep 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.20 (tar.gz)',
        'filename' => 'php-5.4.20.tar.gz',
        'sha256' => '',
        'md5' => 'e505b63ebe383ef9a378467216ba69d4',
        'date' => '19 Sep 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.20 binaries and source',
        'filename' => 'Windows 5.4.20 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.20. About 30 bugs were fixed. All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.20 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.20">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.21' => 
  array (
    'version' => '5.4.21',
    'date' => '17 Oct 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.21 (tar.bz2)',
        'filename' => 'php-5.4.21.tar.bz2',
        'sha256' => '',
        'md5' => '3dcf021e89b039409d0b1c346b936b5f',
        'date' => '17 Oct 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.21 (tar.gz)',
        'filename' => 'php-5.4.21.tar.gz',
        'sha256' => '',
        'md5' => 'cc8da0d18683e3a83b332f264af7ca83',
        'date' => '17 Oct 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.21 binaries and source',
        'filename' => 'Windows 5.4.21 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.21. About 10 bugs were fixed. All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.21 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.21">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.22' => 
  array (
    'version' => '5.4.22',
    'date' => '14 Nov 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.22 (tar.bz2)',
        'filename' => 'php-5.4.22.tar.bz2',
        'sha256' => '3b8619b030e372f2b64e3a059d05a3ef3354e81f8a72923ba45475bf222f7cca',
        'md5' => '',
        'date' => '14 Nov 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.22 (tar.gz)',
        'filename' => 'php-5.4.22.tar.gz',
        'sha256' => 'ca6e52a0ba11e9521c6a26f293a602cdc00cad1adbb4658e35b8d3f41057cbb8',
        'md5' => '',
        'date' => '14 Nov 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.22 binaries and source',
        'filename' => 'Windows 5.4.22 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.22. About 10 bugs were fixed. All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.22 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.22">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.23' => 
  array (
    'version' => '5.4.23',
    'date' => '12 Dec 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.23 (tar.bz2)',
        'filename' => 'php-5.4.23.tar.bz2',
        'sha256' => 'ae7c070fa9b9e16413ef944d910b68f3ba79192eca4010b0af132b8631bd91cc',
        'md5' => '',
        'date' => '12 Dec 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.23 (tar.gz)',
        'filename' => 'php-5.4.23.tar.gz',
        'sha256' => 'c9add0e59f41298a253bbb9090c47a03064b099120a563ca8ad289e18fcd1ce7',
        'md5' => '',
        'date' => '12 Dec 2013',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.23 binaries and source',
        'filename' => 'Windows 5.4.23 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.23. About 10 bugs were fixed, including a security issue in OpenSSL module (CVE-2013-6420).
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.23 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.23">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.24' => 
  array (
    'version' => '5.4.24',
    'date' => '9 Jan 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.24 (tar.bz2)',
        'filename' => 'php-5.4.24.tar.bz2',
        'sha256' => '97fe70eddaf5b93969714a551870fe03f6b0a387f85b83a6d63a40a76199a327',
        'md5' => '',
        'date' => '9 Jan 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.24 (tar.gz)',
        'filename' => 'php-5.4.24.tar.gz',
        'sha256' => 'c64d6e3b428e78b44760167557e26cd16a9f83f449a255e69d5e035bdd7057ed',
        'md5' => '',
        'date' => '9 Jan 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.24 binaries and source',
        'filename' => 'Windows 5.4.24 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.24. About 14 bugs were fixed.
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.24 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.24">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.25' => 
  array (
    'version' => '5.4.25',
    'date' => '6 Feb 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.25 (tar.bz2)',
        'filename' => 'php-5.4.25.tar.bz2',
        'sha256' => 'b6c18c07c6bf34f75e601b28829d636e44c1c9f4267aac4ed013443c32a2245f',
        'md5' => '',
        'date' => '6 Feb 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.25 (tar.gz)',
        'filename' => 'php-5.4.25.tar.gz',
        'sha256' => '0c66cec73bfbd31f68c96e5a4d8454599271f0b0462c2ff7dedce4262fda8fe3',
        'md5' => '',
        'date' => '6 Feb 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.25 binaries and source',
        'filename' => 'Windows 5.4.25 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.25. 5 bugs were fixed in this release.
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.25 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.25">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.26' => 
  array (
    'version' => '5.4.26',
    'date' => '6 Mar 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.26 (tar.bz2)',
        'filename' => 'php-5.4.26.tar.bz2',
        'sha256' => '5053649317b9331df40bd836c976a32b31dbc5c5d68997d3ae01cb90db22d240',
        'md5' => '',
        'date' => '6 Mar 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.26 (tar.gz)',
        'filename' => 'php-5.4.26.tar.gz',
        'sha256' => 'ec3f902b5e8cbdd660e01e784b537f1210a12182d9bbd62164776075bc097eca',
        'md5' => '',
        'date' => '6 Mar 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.26 binaries and source',
        'filename' => 'Windows 5.4.26 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.26. 5 bugs were fixed in this release, including CVE-2014-1943.
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.26 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.26">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.27' => 
  array (
    'version' => '5.4.27',
    'date' => '3 Apr 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.27 (tar.bz2)',
        'filename' => 'php-5.4.27.tar.bz2',
        'sha256' => '09dcc44cded735e1cf1b1b9f2749d1a0fd90e03378b6a70364a662f4740e61e2',
        'md5' => '',
        'date' => '3 Apr 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.27 (tar.gz)',
        'filename' => 'php-5.4.27.tar.gz',
        'sha256' => 'a70dc68eeed902f8378fded473d53e4e37be645b941554dcf4237559cbda2bb3',
        'md5' => '',
        'date' => '3 Apr 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.27 binaries and source',
        'filename' => 'Windows 5.4.27 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.27. 6 bugs were fixed in this release, including CVE-2013-7345.
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.27 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.27">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.28' => 
  array (
    'version' => '5.4.28',
    'date' => '2 May 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.28 (tar.bz2)',
        'filename' => 'php-5.4.28.tar.bz2',
        'sha256' => '3fe780e5179e90c4d37276e79acc0d0692f1bc0911985af694b92c664c0ef3c4',
        'md5' => '',
        'date' => '2 May 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.28 (tar.gz)',
        'filename' => 'php-5.4.28.tar.gz',
        'sha256' => '5140292c94a0301db7a807e6b3aadf6ee966346d0005aa3d15464bd4c595a786',
        'md5' => '',
        'date' => '2 May 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.28 binaries and source',
        'filename' => 'Windows 5.4.28 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.28. 19 bugs were fixed in this release, including CVE-2014-0185.
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.28 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.28">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.29' => 
  array (
    'version' => '5.4.29',
    'date' => '29 May 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.29 (tar.bz2)',
        'filename' => 'php-5.4.29.tar.bz2',
        'sha256' => '62ce3ca063cf04f6065eeac82117e43b44e20487bc0a0a8d05436e17a0b1e2a7',
        'md5' => '',
        'date' => '29 May 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.29 (tar.gz)',
        'filename' => 'php-5.4.29.tar.gz',
        'sha256' => '9fa51d3e44783802ea51b910719ad524a8994524f7cf7307f683fe89191bc401',
        'md5' => '',
        'date' => '29 May 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.29 binaries and source',
        'filename' => 'Windows 5.4.29 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.29. 16 bugs were fixed in this release, including two security issues in fileinfo extension.
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.29 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.29">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.3' => 
  array (
    'version' => '5.4.3',
    'date' => '08 May 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.3 (tar.bz2)',
        'filename' => 'php-5.4.3.tar.bz2',
        'sha256' => '',
        'md5' => '51f9488bf8682399b802c48656315cac',
        'date' => '08 May 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.3 (tar.gz)',
        'filename' => 'php-5.4.3.tar.gz',
        'sha256' => '',
        'md5' => 'c9dccc89cc89d39e84f6e6f0cf1c8a65',
        'date' => '08 May 2012',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.3. This release delivers two security fixes.
All users of PHP 5.4 are encouraged to upgrade to this release</p>

<p>PHP 5.4.3 completes a fix for a vulnerability in CGI-based setups
(CVE-2012-2311). Note: mod_php and php-fpm are not vulnerable to this
attack.</p>

<p>A buffer overflow vulnerability in the apache_request_headers()
was fixed (CVE-2012-2329).</p>

<p>For source downloads of PHP 5.4.3 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.3">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.30' => 
  array (
    'version' => '5.4.30',
    'date' => '26 Jun 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.30 (tar.bz2)',
        'filename' => 'php-5.4.30.tar.bz2',
        'sha256' => '32b83644e42d57388d6e5ec700c3502cde5f5e1207395b1e361e4cb2ce496ce6',
        'md5' => '',
        'date' => '26 Jun 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.30 (tar.gz)',
        'filename' => 'php-5.4.30.tar.gz',
        'sha256' => 'c17da64890b728bdc146bdc69b37085412d4e2585fac98848ac2e824bb564c85',
        'md5' => '',
        'date' => '26 Jun 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.30 binaries and source',
        'filename' => 'Windows 5.4.30 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.30. Over 20 bugs were fixed in this release, including the following security issues:
CVE-2014-3981, CVE-2014-0207, CVE-2014-3478, CVE-2014-3479, CVE-2014-3480, CVE-2014-3487,
CVE-2014-4049, CVE-2014-3515.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>Please, note that this release also fixes a backward compatibility issue that has been
detected in the PHP 5.4.29 release. Still, the fix in PHP 5.4.30 may break some very rare
situations. As this tiny compatibility break involves security, and as security is our primary
concern, we had to fix it. This concerns
<a href="https://bugs.php.net/bug.php?id=67072">bug 67072</a>. For more information about
this bug and its actual resolution, please refer to our
<a href="http://git.php.net/?p=php-src.git;a=blob_plain;f=UPGRADING;hb=refs/heads/PHP-5.4">upgrading guide</a>, section 4a.
We apologize for any inconvenience you may have experienced with this behavior.</p>


<p>For source downloads of PHP 5.4.30 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.30">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.31' => 
  array (
    'version' => '5.4.31',
    'date' => '24 Jul 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.31 (tar.bz2)',
        'filename' => 'php-5.4.31.tar.bz2',
        'sha256' => '5e8e491431fd1d99df925d762b05da05c80b02cb38c9b3db616e8894a307914d',
        'md5' => '',
        'date' => '24 Jul 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.31 (tar.gz)',
        'filename' => 'php-5.4.31.tar.gz',
        'sha256' => '332f62e4f751482d40ad08544ee97e004170d0382c84d01ce8efe405d0972f66',
        'md5' => '',
        'date' => '24 Jul 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.31 binaries and source',
        'filename' => 'Windows 5.4.31 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.31. Over 10 bugs were fixed in this release.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.31 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.31">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.32' => 
  array (
    'version' => '5.4.32',
    'date' => '21 Aug 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.32 (tar.bz2)',
        'filename' => 'php-5.4.32.tar.bz2',
        'sha256' => '26d0717669a098f18cd22dc3ae8282101d38508054500c26775ddcc26ca7c826',
        'md5' => '',
        'date' => '21 Aug 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.32 (tar.gz)',
        'filename' => 'php-5.4.32.tar.gz',
        'sha256' => '80ebdf34f91b8e1d516080363804137177368777aa9ecffee600f2957e8b0f94',
        'md5' => '',
        'date' => '21 Aug 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.32 binaries and source',
        'filename' => 'Windows 5.4.32 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.32. 16 bugs were fixed in this release, including the following security-related issues:
CVE-2014-2497, CVE-2014-3538, CVE-2014-3587, CVE-2014-3597, CVE-2014-4670, CVE-2014-4698, CVE-2014-5120.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.32 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.32">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.33' => 
  array (
    'version' => '5.4.33',
    'date' => '18 Sep 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.33 (tar.bz2)',
        'filename' => 'php-5.4.33.tar.bz2',
        'sha256' => '1a75b2d0835e74b8886cd3980d9598a0e06691441bb7f91d19b74c2278e40bb5',
        'md5' => '',
        'date' => '18 Sep 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.33 (tar.gz)',
        'filename' => 'php-5.4.33.tar.gz',
        'sha256' => '74e542dd2f15ebbc123738a71e867d57d2996a6edb40e6ac62fcf5ab85763d19',
        'md5' => '',
        'date' => '18 Sep 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.33 binaries and source',
        'filename' => 'Windows 5.4.33 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.33. 10 bugs were fixed in this release.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>
This release is the last planned release that contains regular bugfixes. All the consequent releases
will contain only security-relevant fixes, for the term of one year.
PHP 5.4 users that need further bugfixes are encouraged to upgrade to PHP 5.6 or PHP 5.5.
</p>

<p>For source downloads of PHP 5.4.33 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.33">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.34' => 
  array (
    'version' => '5.4.34',
    'date' => '16 Oct 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.34 (tar.bz2)',
        'filename' => 'php-5.4.34.tar.bz2',
        'sha256' => '57d4ea10f0c18b096a7c8fd0a98dcbe40c8f4dc94453fd3ca0a10e35fb2f8234',
        'md5' => '',
        'date' => '16 Oct 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.34 (tar.gz)',
        'filename' => 'php-5.4.34.tar.gz',
        'sha256' => 'c8d909062ad7616cedb54dc03d85b40d40f6d4adce986ec8cabd9b8b94872096',
        'md5' => '',
        'date' => '16 Oct 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.34 binaries and source',
        'filename' => 'Windows 5.4.34 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.34. 6 security-related bugs were fixed in this release, including fixes for
CVE-2014-3668, CVE-2014-3669 and CVE-2014-3670. Also, a fix for OpenSSL which
produced regressions was reverted.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.34 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.34">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.35' => 
  array (
    'version' => '5.4.35',
    'date' => '13 Nov 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.35 (tar.bz2)',
        'filename' => 'php-5.4.35.tar.bz2',
        'sha256' => '8cdb4265cd0f778befacd1e6b5939ec23315fff38400e17e77a36e4c55b9746b',
        'md5' => '',
        'date' => '13 Nov 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.35 (tar.gz)',
        'filename' => 'php-5.4.35.tar.gz',
        'sha256' => '7ecab4ebb880b6d4f68bd4e3e49d837d4704fe26d81dc992b17b74151ee950a7',
        'md5' => '',
        'date' => '13 Nov 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.35 binaries and source',
        'filename' => 'Windows 5.4.35 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.35. 4 security-related bugs were fixed in this release, including the fix for CVE-2014-3710.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.35 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.35">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.36' => 
  array (
    'version' => '5.4.36',
    'date' => '18 Dec 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.36 (tar.bz2)',
        'filename' => 'php-5.4.36.tar.bz2',
        'sha256' => 'b0951608c3e8afb978a624c7f79a889980210f5258f666c1d997bd6491e13241',
        'md5' => '',
        'date' => '18 Dec 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.36 (tar.gz)',
        'filename' => 'php-5.4.36.tar.gz',
        'sha256' => 'e11851662222765d6ab6e671adc983c657d5358a183856b43a5bad0c612d2959',
        'md5' => '',
        'date' => '18 Dec 2014',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.36 binaries and source',
        'filename' => 'Windows 5.4.36 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.36. Two security-related bugs were fixed in this release, including the fix for CVE-2014-8142.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.36 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.36">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.37' => 
  array (
    'version' => '5.4.37',
    'date' => '22 Jan 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.37 (tar.bz2)',
        'filename' => 'php-5.4.37.tar.bz2',
        'sha256' => '857bf6675eeb0ae9c3cd6f9ccdb2a9b7bf89dcfda7f0a80857638fe023f3a8ad',
        'md5' => '',
        'date' => '22 Jan 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.37 (tar.gz)',
        'filename' => 'php-5.4.37.tar.gz',
        'sha256' => '6bf3b3ebefa600cfb6dd7f2678f23b17a958e82e8ce2d012286818d7c36dfd31',
        'md5' => '',
        'date' => '22 Jan 2015',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.37 binaries and source',
        'filename' => 'Windows 5.4.37 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.37. Six security-related bugs were fixed in this release, including CVE-2015-0231, CVE-2014-9427
and CVE-2015-0232.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.37 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.37">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.38' => 
  array (
    'version' => '5.4.38',
    'date' => '19 Feb 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.38 (tar.bz2)',
        'filename' => 'php-5.4.38.tar.bz2',
        'sha256' => 'abf37db0cfadc9bb814f9df35f6aa966ad63f4f4c4475e432ec625568a5d3e88',
        'md5' => '',
        'date' => '19 Feb 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.38 (tar.gz)',
        'filename' => 'php-5.4.38.tar.gz',
        'sha256' => 'e694b7265f314f73c9df43538e0e54e2495cb72252e8a91c1aec66ffcf47241f',
        'md5' => '',
        'date' => '19 Feb 2015',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.38 binaries and source',
        'filename' => 'Windows 5.4.38 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.38. Seven security-related bugs were fixed in this release, including CVE-2015-0273 and mitigation for CVE-2015-0235.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.38 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.38">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.39' => 
  array (
    'version' => '5.4.39',
    'date' => '19 Mar 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.39 (tar.bz2)',
        'filename' => 'php-5.4.39.tar.bz2',
        'sha256' => '7ceb76538e709c74533210ae41148d5c01c330ac8a73220954bbc4fcae69d77e',
        'md5' => '',
        'date' => '19 Mar 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.39 (tar.gz)',
        'filename' => 'php-5.4.39.tar.gz',
        'sha256' => '9af5d2c3782aa94b7336401755dc44b62dc4ea881bf5e39540a4c7181b54d945',
        'md5' => '',
        'date' => '19 Mar 2015',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.39 binaries and source',
        'filename' => 'Windows 5.4.39 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.39. Six security-related bugs were fixed in this release, including CVE-2015-0231, CVE-2015-2305 and CVE-2015-2331.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.39 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.39">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.4' => 
  array (
    'version' => '5.4.4',
    'date' => '14 June 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.4 (tar.bz2)',
        'filename' => 'php-5.4.4.tar.bz2',
        'sha256' => '',
        'md5' => '1fd98dc3f6f3805cd67bff12a26ed77f',
        'date' => '14 June 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.4 (tar.gz)',
        'filename' => 'php-5.4.4.tar.gz',
        'sha256' => '',
        'md5' => '8366c3626f2275ab8c7ef5e2d6bc5bd7',
        'date' => '14 June 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.4 binaries and source',
        'filename' => 'Windows 5.4.4 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.4. This release fixes two security related
issues. All users of PHP are encouraged to upgrade to this release.</p>

<p>PHP 5.4.4 fixes an security issue in the implementation of crypt() and a
heap overflow in the Phar extension. Over 30 bugs were fixed</p>

<p>Please note that php://fd is now only available if the CLI SAPI is used</p>

<p>For source downloads of PHP 5.4.4 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.4">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.40' => 
  array (
    'version' => '5.4.40',
    'date' => '16 Apr 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.40 (tar.bz2)',
        'filename' => 'php-5.4.40.tar.bz2',
        'sha256' => '4898ffe8ac3ccb2d8cc94f7d76a9ea0414d954f5d4479895ddfccdc2e158a51a',
        'md5' => '',
        'date' => '16 Apr 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.40 (tar.gz)',
        'filename' => 'php-5.4.40.tar.gz',
        'sha256' => '663f5d06cd648e81ba4f2d6ad621bb580d83de70240c832dae527c97954da33d',
        'md5' => '',
        'date' => '16 Apr 2015',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.40 binaries and source',
        'filename' => 'Windows 5.4.40 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.40. 14 security-related bugs were fixed in this release, including
CVE-2014-9709, CVE-2015-2301, CVE-2015-2783, CVE-2015-1352.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.40 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.40">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.41' => 
  array (
    'version' => '5.4.41',
    'date' => '14 May 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.41 (tar.bz2)',
        'filename' => 'php-5.4.41.tar.bz2',
        'sha256' => '5bc4b45a1280ff80a3cf5b8563716f325cfd0121d7fd25aa54d56ff38b3b8272',
        'md5' => '',
        'date' => '14 May 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.41 (tar.gz)',
        'filename' => 'php-5.4.41.tar.gz',
        'sha256' => '638cf19c865bc4eba2a4bab8952116a62691d1a72e1e2c9a9a2aadee92d1ce2e',
        'md5' => '',
        'date' => '14 May 2015',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.41 binaries and source',
        'filename' => 'Windows 5.4.41 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.41. Seven security-related issues were fixed in this version.

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.41 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.41">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.42' => 
  array (
    'version' => '5.4.42',
    'date' => '11 Jun 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.42 (tar.bz2)',
        'filename' => 'php-5.4.42.tar.bz2',
        'sha256' => '6285b2e64bfaa69e5d983d7d981b4f254f5259ad3fd591ca832722a4cc1ae0f9',
        'md5' => '',
        'date' => '11 Jun 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.42 (tar.gz)',
        'filename' => 'php-5.4.42.tar.gz',
        'sha256' => 'f0b40c097a6f11c4c2f5078d34f50fb9428d79b9e9821117bd7d6cca6af78d11',
        'md5' => '',
        'date' => '11 Jun 2015',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.42 binaries and source',
        'filename' => 'Windows 5.4.42 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.42. Six security-related issues in PHP were fixed in this release,
as well as several security issues in bundled sqlite library (CVE-2015-3414, CVE-2015-3415, CVE-2015-3416).

All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.42 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.42">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.43' => 
  array (
    'version' => '5.4.43',
    'date' => '09 Jul 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.43 (tar.bz2)',
        'filename' => 'php-5.4.43.tar.bz2',
        'sha256' => '25d7724fb00ad1b520f5bad2173717031153d0a8e3de2c75e7a084c76f8ecd6b',
        'md5' => '',
        'date' => '09 Jul 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.43 (tar.gz)',
        'filename' => 'php-5.4.43.tar.gz',
        'sha256' => 'cfc2176adc05f009666ecfab4a1cc66cc546c5d071245b2a048b3d113f67a2af',
        'md5' => '',
        'date' => '09 Jul 2015',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.43 binaries and source',
        'filename' => 'Windows 5.4.43 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.43. Five security-related issues in PHP were fixed in this release, including CVE-2015-3152.
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.43 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.43">ChangeLog</a>.
</p>

<p>Please note that PHP 5.4 branch is nearing the end of its <a href="http://php.net/supported-versions.php">support timeframe</a>.
If your PHP installations is based on PHP 5.4, it may be a good time to start making the plans for the upgrade.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.44' => 
  array (
    'version' => '5.4.44',
    'date' => '06 Aug 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.44 (tar.bz2)',
        'filename' => 'php-5.4.44.tar.bz2',
        'sha256' => '8dd59e5ce9248cf36ac3de5412a518b8b24c01ace6c46ce3d12e4ce981a3856d',
        'md5' => '',
        'date' => '06 Aug 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.44 (tar.gz)',
        'filename' => 'php-5.4.44.tar.gz',
        'sha256' => '1799998e48da3d8f34722840628e18789e26ea21741d4e498ade6749b3266602',
        'md5' => '',
        'date' => '06 Aug 2015',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.44 binaries and source',
        'filename' => 'Windows 5.4.44 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.44. 11 security-related issues were fixed in this release.
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.44 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.44">ChangeLog</a>.
</p>

<p>Please note that PHP 5.4 branch is nearing the end of its <a href="http://php.net/supported-versions.php">support timeframe</a>. Either September or October release, depending on discovered issues, will be the last official release of PHP 5.4.
If your PHP installation is based on PHP 5.4, it may be a good time to start making the plans for the upgrade.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.45' => 
  array (
    'version' => '5.4.45',
    'date' => '03 Sep 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.45 (tar.bz2)',
        'filename' => 'php-5.4.45.tar.bz2',
        'sha256' => '4e0d28b1554c95cfaea6fa2b64aac85433f158ce72bb571bcd5574f98f4c6582',
        'md5' => '',
        'date' => '03 Sep 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.45 (tar.gz)',
        'filename' => 'php-5.4.45.tar.gz',
        'sha256' => '25bc4723955f4e352935258002af14a14a9810b491a19400d76fcdfa9d04b28f',
        'md5' => '',
        'date' => '03 Sep 2015',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.45 binaries and source',
        'filename' => 'Windows 5.4.45 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.4.45. Ten security-related issues were fixed in this release.
All PHP 5.4 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.4.45 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.45">ChangeLog</a>.
</p>

<p>Please note that according to the <a href="http://php.net/supported-versions.php">PHP version support timelines</a>,
PHP 5.4.45 is the last scheduled release of PHP 5.4 branch. There may be additional release if we discover
important security issues that warrant it, otherwise this release will be the final one in the PHP 5.4 branch.
If your PHP installation is based on PHP 5.4, it may be a good time to start making the plans for the upgrade to PHP 5.5 or PHP 5.6.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.5' => 
  array (
    'version' => '5.4.5',
    'date' => '19 July 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.5 (tar.bz2)',
        'filename' => 'php-5.4.5.tar.bz2',
        'sha256' => '',
        'md5' => 'ffcc7f4dcf2b79d667fe0c110e6cb724',
        'date' => '19 July 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.5 (tar.gz)',
        'filename' => 'php-5.4.5.tar.gz',
        'sha256' => '',
        'md5' => '51fb5bf974d92359f0606dffc810735a',
        'date' => '19 July 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.5 binaries and source',
        'filename' => 'Windows 5.4.5 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.5. Over 30 bugs were fixed, including a security
related overflow issue in the stream implementation. All users of PHP
are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.5 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.5">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.6' => 
  array (
    'version' => '5.4.6',
    'date' => '16 Aug 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.6 (tar.bz2)',
        'filename' => 'php-5.4.6.tar.bz2',
        'sha256' => '',
        'md5' => 'c9aa0f4996d1b91ee9e45afcfaeb5d2e',
        'date' => '16 Aug 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.6 (tar.gz)',
        'filename' => 'php-5.4.6.tar.gz',
        'sha256' => '',
        'md5' => 'efe59afb73190c9bd6d50614998ffceb',
        'date' => '16 Aug 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.6 binaries and source',
        'filename' => 'Windows 5.4.6 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.6. Over 20 bugs were fixed. All users of PHP
are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.6 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.6">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.7' => 
  array (
    'version' => '5.4.7',
    'date' => '13 Sep 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.7 (tar.bz2)',
        'filename' => 'php-5.4.7.tar.bz2',
        'sha256' => '',
        'md5' => '9cd421f1cc8fa8e7f215e44a1b06199f',
        'date' => '13 Sep 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.7 (tar.gz)',
        'filename' => 'php-5.4.7.tar.gz',
        'sha256' => '',
        'md5' => '94661b761dcfdfdd5108e8b12e0dd4f8',
        'date' => '13 Sep 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.7 binaries and source',
        'filename' => 'Windows 5.4.7 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.7. Over 20 bugs were fixed. All users of PHP
are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.7 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.7">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.8' => 
  array (
    'version' => '5.4.8',
    'date' => '18 Oct 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.8 (tar.bz2)',
        'filename' => 'php-5.4.8.tar.bz2',
        'sha256' => '',
        'md5' => 'bb8c816a9299be8995255ef70c63b800',
        'date' => '18 Oct 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.8 (tar.gz)',
        'filename' => 'php-5.4.8.tar.gz',
        'sha256' => '',
        'md5' => 'b25b735f342efbfdcdaf00b83189f183',
        'date' => '18 Oct 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.8 binaries and source',
        'filename' => 'Windows 5.4.8 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.8. Over 20 bugs were fixed. In addition OpenSSL
signature verification now supports the SHA-2 family and RMD160. All
users of PHP are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.8 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.8">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.4.9' => 
  array (
    'version' => '5.4.9',
    'date' => '22 Nov 2012',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.4.9 (tar.bz2)',
        'filename' => 'php-5.4.9.tar.bz2',
        'sha256' => '',
        'md5' => '076a9f84d861d3f664a2878d5773ba78',
        'date' => '22 Nov 2012',
      ),
      1 => 
      array (
        'name' => 'PHP 5.4.9 (tar.gz)',
        'filename' => 'php-5.4.9.tar.gz',
        'sha256' => '',
        'md5' => 'e1ac28e1cf20738f0aeeba8261aa4537',
        'date' => '22 Nov 2012',
      ),
      2 => 
      array (
        'name' => 'Windows 5.4.9 binaries and source',
        'filename' => 'Windows 5.4.9 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.9. Over 15 bugs were fixed. All
users of PHP are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.9 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.9">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.0' => 
  array (
    'version' => '5.5.0',
    'date' => '20 Jun 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.0 (tar.bz2)',
        'filename' => 'php-5.5.0.tar.bz2',
        'sha256' => '',
        'md5' => 'daf2d54e79def9fd0fb2ac7dfcefb7f3',
        'date' => '20 Jun 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.0 (tar.gz)',
        'filename' => 'php-5.5.0.tar.gz',
        'sha256' => '',
        'md5' => '79c4e7a8cb0f8e2e072120775b92c523',
        'date' => '20 Jun 2013',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.0 (tar.xz)',
        'filename' => 'php-5.5.0.tar.xz',
        'sha256' => '',
        'md5' => 'c7df0cb28cfff4e277fd9cd9b73cebfb',
        'date' => '20 Jun 2013',
      ),
      3 => 
      array (
        'name' => 'Windows 5.5.0 binaries and source',
        'filename' => 'Windows 5.5.0 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the immediate availability
of PHP <a href="http://php.net/downloads.php#v5.5.0">5.5.0</a>.
This release includes a large number of new features and bug fixes.
</p>

<p>
<b>The key features of PHP 5.5.0 include:</b>
</p>
<ul>
 <li>Added <a href="http://php.net/generators">generators</a> and coroutines.</li>
 <li>Added the <a href="http://php.net/exceptions">finally</a> keyword.</li>
 <li>Added a <a href="http://php.net/password">simplified password hashing API</a>.</li>
 <li>Added <a href="http://php.net/migration55.new-features#migration55.new-features.const-dereferencing">support for constant array/string dereferencing</a>.</li>
 <li>Added scalar class name resolution via <a href="http://php.net/oop5.basic#language.oop5.basic.class.class">::class</a>.</li>
 <li>Added <a href="http://php.net/migration55.new-features#migration55.new-features.empty">support for using empty() on the result of function calls and other expressions</a>.</li>
 <li>Added <a href="http://php.net/migration55.new-features#migration55.new-features.non-scalar-iterator-keys">support for non-scalar Iterator keys in foreach</a>.</li>
 <li>Added <a href="http://php.net/foreach#control-structures.foreach.list">support for list() constructs in foreach statements</a>.</li>
 <li>Added the <a href="http://php.net/opcache">Zend OPcache</a> extension for opcode caching.</li>
 <li>The GD library has been upgraded to version 2.1 adding new functions and improving existing functionality.</li>
 <li>A lot more improvements and fixes.</li>
</ul>

<p>
<b>Changes that affect compatibility:</b>
</p>
<ul>
  <li><a href="http://php.net/php_logo_guid">PHP logo GUIDs</a> have been removed.</li>
  <li>Windows XP and 2003 support dropped.</li>
  <li>Case insensitivity is no longer locale specific. All case insensitive matching for function, class and constant names is now performed in a locale independent manner according to ASCII rules.</li>
</ul>

<p>
For users upgrading from PHP 5.4,
<a href="http://php.net/migration55">a migration guide is available</a>
detailing the changes between 5.4 and 5.5.0.
</p>

<p>
 For a full list of changes in PHP 5.5.0, see the
 <a href="http://php.net/ChangeLog-5.php#5.5.0">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.1' => 
  array (
    'version' => '5.5.1',
    'date' => '18 Jul 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.1 (tar.bz2)',
        'filename' => 'php-5.5.1.tar.bz2',
        'sha256' => '',
        'md5' => 'e6520ba8f86e03451f1e9226ca2be681',
        'date' => '18 Jul 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.1 (tar.gz)',
        'filename' => 'php-5.5.1.tar.gz',
        'sha256' => '',
        'md5' => 'a7d9598c0e60b47960b8e803e51c4309',
        'date' => '18 Jul 2013',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.1 (tar.xz)',
        'filename' => 'php-5.5.1.tar.xz',
        'sha256' => '',
        'md5' => '365403c216d22255c3aa57fe54944f8e',
        'date' => '18 Jul 2013',
      ),
      3 => 
      array (
        'name' => 'Windows 5.5.1 binaries and source',
        'filename' => 'Windows 5.5.1 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>
The PHP development team is proud to announce the immediate availability
of PHP <a href="http://php.net/downloads.php#v5.5.1">5.5.1</a>.
This release fixes several bugs.
</p>

<p>The PHP development team announces the immediate availability of PHP
5.5.1. About 20 bugs were fixed, including a security fix in the XML parser (Bug #65236).
All users of PHP are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.5.1 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.1">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.10' => 
  array (
    'version' => '5.5.10',
    'date' => '6 Mar 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.10 (tar.bz2)',
        'filename' => 'php-5.5.10.tar.bz2',
        'sha256' => 'bb34e61f8e6f56c612867bfe85d144d5045cd5e44497539bc126a4e8c6795419',
        'md5' => '',
        'date' => '6 Mar 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.10 (tar.gz)',
        'filename' => 'php-5.5.10.tar.gz',
        'sha256' => 'abf751810593844e0897007797210828b193a213d9b204f203e0331019cadb90',
        'md5' => '',
        'date' => '6 Mar 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.10.
This release fixes several bugs against PHP 5.5.9, as well as CVE-2014-1943, CVE-2014-2270
and CVE-2013-7327</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.10, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.10">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.11' => 
  array (
    'version' => '5.5.11',
    'date' => '3 Apr 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.11 (tar.bz2)',
        'filename' => 'php-5.5.11.tar.bz2',
        'sha256' => '60e14c255f2a461a7a26639b84a2fc448cc2f91c8dead0e9fd00cd8ba27a2e96',
        'md5' => '',
        'date' => '3 Apr 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.11 (tar.gz)',
        'filename' => 'php-5.5.11.tar.gz',
        'sha256' => 'a8b7bb1049732bf806e94090661f39f8359e0bf36d59ce6b98a53ea80411b450',
        'md5' => '',
        'date' => '3 Apr 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.11.
This release fixes several bugs against PHP 5.5.10, as well as CVE-2013-7345 regarding Fileinfo</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.11, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.11">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.12' => 
  array (
    'version' => '5.5.12',
    'date' => '30 Apr 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.12 (tar.bz2)',
        'filename' => 'php-5.5.12.tar.bz2',
        'sha256' => '519ee29e28532782676f3d8e31a808ffbfee383e0279ccc8cbd2b12ed53c2335',
        'md5' => '',
        'date' => '30 Apr 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.12 (tar.gz)',
        'filename' => 'php-5.5.12.tar.gz',
        'sha256' => 'a10c6e6ce1145762d6c15ca7ce1aeaab69662c197d24e1294c2519aa85c97bd6',
        'md5' => '',
        'date' => '30 Apr 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.12.
This release fixes several bugs against PHP 5.5.11, as well as CVE-2014-0185 regarding PHP-FPM.</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.12, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.12">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.13' => 
  array (
    'version' => '5.5.13',
    'date' => '29 May 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.13 (tar.bz2)',
        'filename' => 'php-5.5.13.tar.bz2',
        'sha256' => 'e58a4a754eb18d2d8b1a120cad5cce4ed24a7db5d49eca5830a40e4c8ca78b9c',
        'md5' => '',
        'date' => '29 May 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.13 (tar.gz)',
        'filename' => 'php-5.5.13.tar.gz',
        'sha256' => '15e34eb7c45e66963cbece29fb41e53cc6c6e3ec4a54c291a53cf6a1527771b6',
        'md5' => '',
        'date' => '29 May 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.13.
This release fixes several bugs against PHP 5.5.12, and addresses several
CVEs in Fileinfo (CVE-2014-0238 and CVE-2014-0237).</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.13, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.13">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.14' => 
  array (
    'version' => '5.5.14',
    'date' => '26 Jun 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.14 (tar.bz2)',
        'filename' => 'php-5.5.14.tar.bz2',
        'sha256' => 'df5a057877f827549e0a60b43fb01e4bd440814bcf04fbd70bacbddf74482610',
        'md5' => '',
        'date' => '26 Jun 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.14 (tar.gz)',
        'filename' => 'php-5.5.14.tar.gz',
        'sha256' => 'ef7e4f4942c5767e01b96650a5bd4178c663738436f99b5695c3144732ff7166',
        'md5' => '',
        'date' => '26 Jun 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.14.
This release fixes several bugs against PHP 5.5.13.
Also, this release fixes a total of 8 CVEs, half of them concerning the FileInfo
extension.</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>Please, note that this release also fixes a backward compatibility issue that has been
detected in the PHP 5.5.13 release. Still, the fix in PHP 5.5.14 may break some very rare
situations. As this tiny compatibility break involves security, and as security is our primary
concern, we had to fix it. This concerns
<a href="https://bugs.php.net/bug.php?id=67072">bug 67072</a>. For more information about
this bug and its actual resolution, please visit our
<a href="http://git.php.net/?p=php-src.git;a=blob_plain;f=UPGRADING;hb=refs/heads/PHP-5.5">upgrading guide</a>.
We apologize for any inconvenience you may have experienced with this behavior.</p>

<p>For source downloads of PHP 5.5.14, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.14">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.15' => 
  array (
    'version' => '5.5.15',
    'date' => '24 Jul 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.15 (tar.bz2)',
        'filename' => 'php-5.5.15.tar.bz2',
        'sha256' => '00f24226b12fee27e332383b6304f1b9ed3f4d9173dd728a68c5c3f5a59b8ba7',
        'md5' => '',
        'date' => '24 Jul 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.15 (tar.gz)',
        'filename' => 'php-5.5.15.tar.gz',
        'sha256' => '578febd686018401c4857699b29502b1aecaf82bf43525d810867f583961ac6e',
        'md5' => '',
        'date' => '24 Jul 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.15 (tar.xz)',
        'filename' => 'php-5.5.15.tar.xz',
        'sha256' => 'c20e360cf06bd4279ab423a7785d36aba0e2a9fdcd0b817883ab01cf0d914dd6',
        'md5' => '',
        'date' => '24 Jul 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.15.
This release fixes several bugs against PHP 5.5.14.
</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.15, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.15">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.16' => 
  array (
    'version' => '5.5.16',
    'date' => '21 Aug 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.16 (tar.bz2)',
        'filename' => 'php-5.5.16.tar.bz2',
        'sha256' => 'a1d7c4556a80bed744a348211b33bc35303edd56dd0a34e0a75a948c879cc5f6',
        'md5' => '',
        'date' => '21 Aug 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.16 (tar.gz)',
        'filename' => 'php-5.5.16.tar.gz',
        'sha256' => 'cdea80ab1b0466f4656b46155e341b700799e78569a5cc582eeaededb448086c',
        'md5' => '',
        'date' => '21 Aug 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.16 (tar.xz)',
        'filename' => 'php-5.5.16.tar.xz',
        'sha256' => '8276e8de4928e8e7011d1ac6c841c5adfc4561c7329ef2f5e055e7f4e1af0e48',
        'md5' => '',
        'date' => '21 Aug 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.16.
This release fixes several bugs against PHP 5.5.15 and resolves CVE-2014-3538, CVE-2014-3587,
CVE-2014-2497, CVE-2014-5120 and CVE-2014-3597.
</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.16, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.16">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.17' => 
  array (
    'version' => '5.5.17',
    'date' => '18 Sep 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.17 (tar.bz2)',
        'filename' => 'php-5.5.17.tar.bz2',
        'sha256' => '5d81db0c8b2a68da05715c363d037922b82a45c966785d64a77482e5c01e4e1b',
        'md5' => '',
        'date' => '18 Sep 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.17 (tar.gz)',
        'filename' => 'php-5.5.17.tar.gz',
        'sha256' => '657169be88ae70625d97bb94dd29140c2b602f1ba8d5e42ca14a400b63cf4720',
        'md5' => '',
        'date' => '18 Sep 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.17 (tar.xz)',
        'filename' => 'php-5.5.17.tar.xz',
        'sha256' => '382b2a1cfbf67ca9e30171c9c49bfe260d5e458e07850d4b036e8430e1829093',
        'md5' => '',
        'date' => '18 Sep 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
     5.5.17. Several bugs were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.17 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.17">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.18' => 
  array (
    'version' => '5.5.18',
    'date' => '16 Oct 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.18 (tar.bz2)',
        'filename' => 'php-5.5.18.tar.bz2',
        'sha256' => 'f974279927b72b672dda4ef4b4362b4847fd3d19ce1d4f2e982230a4e93bb842',
        'md5' => '',
        'date' => '16 Oct 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.18 (tar.gz)',
        'filename' => 'php-5.5.18.tar.gz',
        'sha256' => '71f6445cc21c944a3b98592193c62e29a58af3fe26d097312502b4fd400286e4',
        'md5' => '',
        'date' => '16 Oct 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.18 (tar.xz)',
        'filename' => 'php-5.5.18.tar.xz',
        'sha256' => 'ccfbf6af18d1e56145867454dcbc75d90512f40ee9d3e57fdc6cb5fe3fc9726e',
        'md5' => '',
        'date' => '16 Oct 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.5.18. Several bugs were fixed in this release. A regression in OpenSSL introduced in PHP 5.5.17 has
     also been addressed in this release.
     PHP 5.5.18 also fixes 4 CVEs in different components.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.18 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.18">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.19' => 
  array (
    'version' => '5.5.19',
    'date' => '13 Nov 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.19 (tar.bz2)',
        'filename' => 'php-5.5.19.tar.bz2',
        'sha256' => '4366dbb904cba8c8dd32224ac9408495d20aecaed86a871d78df420f5a23bbff',
        'md5' => '',
        'date' => '13 Nov 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.19 (tar.gz)',
        'filename' => 'php-5.5.19.tar.gz',
        'sha256' => '8d39f224424f37644da913353f1e773c20b7fc55bb3cc81526c18f91d1d6394e',
        'md5' => '',
        'date' => '13 Nov 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.19 (tar.xz)',
        'filename' => 'php-5.5.19.tar.xz',
        'sha256' => 'ccff8dfcd342e48a5b1e8b85c1c8c95d2e2eefab869757dcaa5224f11bb30e21',
        'md5' => '',
        'date' => '13 Nov 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.5.19. This release fixes several bugs and one CVE in the fileinfo extension.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.19 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.19">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.2' => 
  array (
    'version' => '5.5.2',
    'date' => '15 Aug 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.2 (tar.bz2)',
        'filename' => 'php-5.5.2.tar.bz2',
        'sha256' => '',
        'md5' => 'caf7f4d86514a568fb3c8021b096a9f0',
        'date' => '15 Aug 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.2 (tar.gz)',
        'filename' => 'php-5.5.2.tar.gz',
        'sha256' => '',
        'md5' => '2a90884749f97868071538098b3debc1',
        'date' => '15 Aug 2013',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.2 (tar.xz)',
        'filename' => 'php-5.5.2.tar.xz',
        'sha256' => '',
        'md5' => '95c6d7a4c36c475b10447954dea056a5',
        'date' => '15 Aug 2013',
      ),
      3 => 
      array (
        'name' => 'Windows 5.5.2 binaries and source',
        'filename' => 'Windows 5.5.2 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.5.2. About 20 bugs were fixed, including security issue in OpenSSL module (CVE-2013-4248) and session fixation problem (CVE-2011-4718).
</p>

<p><b>NOTE:</b> Please do not use this release, due to the bug in the fix for CVE-2013-4248. This bug is fixed in
PHP 5.5.3.</p>

<p>For source downloads of PHP 5.5.2 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.2">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.20' => 
  array (
    'version' => '5.5.20',
    'date' => '18 Dec 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.20 (tar.bz2)',
        'filename' => 'php-5.5.20.tar.bz2',
        'sha256' => 'f28a150d1cd8991bd1a41dce4fdff4e343d1dbe01a48b9b44bea74532ce0391a',
        'md5' => '',
        'date' => '18 Dec 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.20 (tar.gz)',
        'filename' => 'php-5.5.20.tar.gz',
        'sha256' => '7454e4f2dba3b08b2c88bb178e7bf704ed100f3d7ab6b83ea5046a6e4acb7295',
        'md5' => '',
        'date' => '18 Dec 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.20 (tar.xz)',
        'filename' => 'php-5.5.20.tar.xz',
        'sha256' => 'a0649450f8b0a23cd4c9ad15d0aa271d956f9516fc37b9e9dc492459b57721c8',
        'md5' => '',
        'date' => '18 Dec 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.5.20. This release fixes several bugs and one CVE related to unserialization.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.20 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.20">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.21' => 
  array (
    'version' => '5.5.21',
    'date' => '22 Jan 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.21 (tar.bz2)',
        'filename' => 'php-5.5.21.tar.bz2',
        'sha256' => '62e9429975c4ca5d7067a5052d5388fbf2ac8c51eeee581d59b04cc5a8da83fe',
        'md5' => '',
        'date' => '22 Jan 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.21 (tar.gz)',
        'filename' => 'php-5.5.21.tar.gz',
        'sha256' => '45adba5b4d2519f6174b85fd5b07a77389f397603d84084bdd26c44b3d7dc8af',
        'md5' => '',
        'date' => '22 Jan 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.21 (tar.xz)',
        'filename' => 'php-5.5.21.tar.xz',
        'sha256' => 'f2583540b2698d7d0ee9cfc071c2b56ccc64a52a2b53101511ba8df5b126d6d2',
        'md5' => '',
        'date' => '22 Jan 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



      <p>The PHP development team announces the immediate availability of PHP
     5.5.21. This release fixes several bugs as well as CVE-2015-0231, CVE-2014-9427 and CVE-2015-0232.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.21 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.21">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.22' => 
  array (
    'version' => '5.5.22',
    'date' => '20 Feb 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.22 (tar.bz2)',
        'filename' => 'php-5.5.22.tar.bz2',
        'sha256' => 'c218c184bef2905bc79fcdda6040f3d1738261395fb706396935d1c6f6e162bb',
        'md5' => '',
        'date' => '20 Feb 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.22 (tar.gz)',
        'filename' => 'php-5.5.22.tar.gz',
        'sha256' => 'cb6174e1e74de233ec7b461302f823a7eacf7bcc946d347486c930e53f2b7db7',
        'md5' => '',
        'date' => '20 Feb 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.22 (tar.xz)',
        'filename' => 'php-5.5.22.tar.xz',
        'sha256' => '5256a7e3999eb11f8b4b407408ea4780f60aa959e0c48cfcf376091e721df223',
        'md5' => '',
        'date' => '20 Feb 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.5.22. This release fixes several bugs and addresses CVE-2015-0235 and CVE-2015-0273.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.22 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.22">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.23' => 
  array (
    'version' => '5.5.23',
    'date' => '20 Feb 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.23 (tar.bz2)',
        'filename' => 'php-5.5.23.tar.bz2',
        'sha256' => 'a99ab264dcd40181baa9defeaa4b21eb2c20d4e9316b904cc05f628762e6ada7',
        'md5' => '',
        'date' => '20 Feb 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.23 (tar.gz)',
        'filename' => 'php-5.5.23.tar.gz',
        'sha256' => 'bf1246d4aca5b1a4e26f5cea273565ad3ee4607f20b7f28a508e3cab1a4d0c82',
        'md5' => '',
        'date' => '20 Feb 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.23 (tar.xz)',
        'filename' => 'php-5.5.23.tar.xz',
        'sha256' => '2fc8315606cd6a51dae2e1fe9ac7a9bead76dace3eaf888ba372506695403af4',
        'md5' => '',
        'date' => '20 Feb 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



 <p>The PHP development team announces the immediate availability of PHP
     5.5.23. Several bugs have been fixed as well as CVE-2015-0231, CVE-2015-2305 and CVE-2015-2331.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.23 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.23">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.24' => 
  array (
    'version' => '5.5.24',
    'date' => '16 Apr 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.24 (tar.bz2)',
        'filename' => 'php-5.5.24.tar.bz2',
        'sha256' => '801b5cf2e0c01b07314d4ac3c8a7c28d524bdd8263ebdd0e33a99008251316a2',
        'md5' => '',
        'date' => '16 Apr 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.24 (tar.gz)',
        'filename' => 'php-5.5.24.tar.gz',
        'sha256' => '43e6b83fe8151f8d2062ca4da915312fc92e47789801049231c705a8b29b05bc',
        'md5' => '',
        'date' => '16 Apr 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.24 (tar.xz)',
        'filename' => 'php-5.5.24.tar.xz',
        'sha256' => 'ffb6235a25043cab71e6445cfc9e8bf16ae80a2835f0373cdd948fcc31eafe57',
        'md5' => '',
        'date' => '16 Apr 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.24. Several bugs have been fixed some of them beeing security related, like CVE-2015-1351 and CVE-2015-1352.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.24 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.24">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.25' => 
  array (
    'version' => '5.5.25',
    'date' => '14 May 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.25 (tar.bz2)',
        'filename' => 'php-5.5.25.tar.bz2',
        'sha256' => '68df37e725ddd05675c0df906041038127938ecc52113a54d10e1e4029262c63',
        'md5' => '',
        'date' => '14 May 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.25 (tar.gz)',
        'filename' => 'php-5.5.25.tar.gz',
        'sha256' => 'c9397f60bff139e0df441c5e2766108c5bc7ad690de136eb9f5b2f9bbf771240',
        'md5' => '',
        'date' => '14 May 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.25 (tar.xz)',
        'filename' => 'php-5.5.25.tar.xz',
        'sha256' => 'ac10015dddfc103b58ccc949504bd50f0d79d0abe74a0cc7842251af06ce8b07',
        'md5' => '',
        'date' => '14 May 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.25. Several bugs have been fixed.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.25 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.25">ChangeLog</a>.


</p></announcement>',
      ),
    ),
  ),
  '5.5.26' => 
  array (
    'version' => '5.5.26',
    'date' => '11 Jun 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.26 (tar.bz2)',
        'filename' => 'php-5.5.26.tar.bz2',
        'sha256' => '816afffdb03ff4c542bc172a2f77f9c69b817df82d60cce05c1b4f578c2c926e',
        'md5' => '',
        'date' => '11 Jun 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.26 (tar.gz)',
        'filename' => 'php-5.5.26.tar.gz',
        'sha256' => 'bee980d433bab99d07ee2bf6f2dcb87d746e49d57adec7d0ce7edb39306695ec',
        'md5' => '',
        'date' => '11 Jun 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.26 (tar.xz)',
        'filename' => 'php-5.5.26.tar.xz',
        'sha256' => '97672c41cf2f95628dbffb63648147b43b23ea41b99ad22ccf5f4fe9b6e91b51',
        'md5' => '',
        'date' => '11 Jun 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.26. Several bugs have been fixed as well as several security issues into some
     bundled librairies (CVE-2015-3414, CVE-2015-3415, CVE-2015-3416, CVE-2015-2325 and CVE-2015-2326).

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>




</announcement>',
      ),
    ),
  ),
  '5.5.27' => 
  array (
    'version' => '5.5.27',
    'date' => '09 Jul 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.27 (tar.bz2)',
        'filename' => 'php-5.5.27.tar.bz2',
        'sha256' => 'c4b4c6a534c0ca67a9ae39bec4f51e52d13e820135dd016eae230e15337e1f70',
        'md5' => '',
        'date' => '09 Jul 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.27 (tar.gz)',
        'filename' => 'php-5.5.27.tar.gz',
        'sha256' => '57cc716ebb37a62654c154582e48a282055b08ce91995c79b0be41b9940237f0',
        'md5' => '',
        'date' => '09 Jul 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.27 (tar.xz)',
        'filename' => 'php-5.5.27.tar.xz',
        'sha256' => '7ee398058067a7d8184e402fcdccb25003852cb8dc94eefa3cda051a3e47fdd8',
        'md5' => '',
        'date' => '09 Jul 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.27. Several bugs were fixed in this release as well as CVE-2015-3152.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>
     According to <a href="http://php.net/supported-versions.php">our release calendar</a>, this PHP 5.5 version
     is the last planned release that contains regular bugfixes. All the consequent releases
     will contain only security-relevant fixes, for the term of one year.
     PHP 5.5 users that need further bugfixes are encouraged to upgrade to PHP 5.6.
     </p>

     <p>For source downloads of PHP 5.5.27 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.27">ChangeLog</a>.


</p></announcement>',
      ),
    ),
  ),
  '5.5.28' => 
  array (
    'version' => '5.5.28',
    'date' => '06 Aug 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.28 (tar.bz2)',
        'filename' => 'php-5.5.28.tar.bz2',
        'sha256' => '197d2c572e030c177e53d3763d59ac6d363d7c78dc22e6cc1e2ac65573d9c2f3',
        'md5' => '',
        'date' => '06 Aug 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.28 (tar.gz)',
        'filename' => 'php-5.5.28.tar.gz',
        'sha256' => '6084f25a39ab2f79ade46bf0258a1cd6c9bbb09a106b40dd996dbdf8cd3b08f2',
        'md5' => '',
        'date' => '06 Aug 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.28 (tar.xz)',
        'filename' => 'php-5.5.28.tar.xz',
        'sha256' => 'd060455c804c622cda9f3f5f084b10c6ceba73ee76c1720897e17137a0f75ecd',
        'md5' => '',
        'date' => '06 Aug 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.28. 12 security-related issues were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>
     According to <a href="http://php.net/supported-versions.php">our release calendar</a>, this PHP 5.5 version
     is the first security release of the PHP 5.5 branch. This and all the following releases of this branch
	 do not contain bugfixes that are not considered relevant for security.
     PHP 5.5 users that need further bugfixes are encouraged to upgrade to PHP 5.6.
     </p>

     <p>For source downloads of PHP 5.5.28 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.28">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.29' => 
  array (
    'version' => '5.5.29',
    'date' => '03 Sep 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.29 (tar.bz2)',
        'filename' => 'php-5.5.29.tar.bz2',
        'sha256' => 'fbcee579ecc77cad6960a541116aee669cf145c2cd9a54bf60503a870843b946',
        'md5' => '',
        'date' => '03 Sep 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.29 (tar.gz)',
        'filename' => 'php-5.5.29.tar.gz',
        'sha256' => 'c25a4c4eae558cc9899d2994813dd272eafff9466926f30821a83edaafe620a9',
        'md5' => '',
        'date' => '03 Sep 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.29 (tar.xz)',
        'filename' => 'php-5.5.29.tar.xz',
        'sha256' => '22c72d1b88c8d9a8ab9ca565e9ca5844287c006134098805d9a373a862bbbcad',
        'md5' => '',
        'date' => '03 Sep 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.29. This is a security release. Many security-related issues were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.29 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.29">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.3' => 
  array (
    'version' => '5.5.3',
    'date' => '22 Aug 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.3 (tar.bz2)',
        'filename' => 'php-5.5.3.tar.bz2',
        'sha256' => '',
        'md5' => '886b08ee6865d654911a6bb02ae98ee8',
        'date' => '22 Aug 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.3 (tar.gz)',
        'filename' => 'php-5.5.3.tar.gz',
        'sha256' => '',
        'md5' => 'a5dfdd41ccf539942db966310f7429da',
        'date' => '22 Aug 2013',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.3 (tar.xz)',
        'filename' => 'php-5.5.3.tar.xz',
        'sha256' => '',
        'md5' => '437e98144ef014dfab0922a9eed36853',
        'date' => '22 Aug 2013',
      ),
      3 => 
      array (
        'name' => 'Windows 5.5.3 binaries and source',
        'filename' => 'Windows 5.5.3 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.5.3.
This release fixes a bug in the patch for CVE-2013-4248 in OpenSSL module.</p>

<p>All PHP users are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.5.3 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.3">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.30' => 
  array (
    'version' => '5.5.30',
    'date' => '01 Oct 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.30 (tar.bz2)',
        'filename' => 'php-5.5.30.tar.bz2',
        'sha256' => 'e7332a713cecdd1cb44a1b1336739885c9789f633f0f51236b25e48ab03c3b29',
        'md5' => '',
        'date' => '01 Oct 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.30 (tar.gz)',
        'filename' => 'php-5.5.30.tar.gz',
        'sha256' => '8ad57f4317391354e66c83d26752f67515b2e923277eb97b2b420dfeff3c1007',
        'md5' => '',
        'date' => '01 Oct 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.30 (tar.xz)',
        'filename' => 'php-5.5.30.tar.xz',
        'sha256' => 'd00dc06fa5e0f3de048fb0cf940b3cc59b43b3f8cad825d4fffb35503cf2e8f2',
        'md5' => '',
        'date' => '01 Oct 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.30. This is a security release. Two security bugs were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.30 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.30">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.31' => 
  array (
    'version' => '5.5.31',
    'date' => '07 Jan 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.31 (tar.bz2)',
        'filename' => 'php-5.5.31.tar.bz2',
        'sha256' => 'fb4a382b9a9dceb749b7ef047d8251320bc8d371c843714e5b4f4b70d61ba277',
        'md5' => '',
        'date' => '07 Jan 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.31 (tar.gz)',
        'filename' => 'php-5.5.31.tar.gz',
        'sha256' => '59a4417029ba5497d17ee02b65f419129ecf9ca8a1d864e0bccd5a3d4407a597',
        'md5' => '',
        'date' => '07 Jan 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.31 (tar.xz)',
        'filename' => 'php-5.5.31.tar.xz',
        'sha256' => 'a9ac5b94fcc3811b661a090dddd716f81e43947240b35e6a0123e609a135ac54',
        'md5' => '',
        'date' => '07 Jan 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.31. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.31 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.31">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.32' => 
  array (
    'version' => '5.5.32',
    'date' => '04 Feb 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.32 (tar.bz2)',
        'filename' => 'php-5.5.32.tar.bz2',
        'sha256' => 'b0f2c108db8e05db9f6366aaba9a754fd0ee31f3f86ee889561b608dfd6e92ee',
        'md5' => '',
        'date' => '04 Feb 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.32 (tar.gz)',
        'filename' => 'php-5.5.32.tar.gz',
        'sha256' => '419aa62a68a640192799928a29e5cd4cd5b965458223bea2b3209a68c3e95989',
        'md5' => '',
        'date' => '04 Feb 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.32 (tar.xz)',
        'filename' => 'php-5.5.32.tar.xz',
        'sha256' => '02f569dcf5bd57dd5e390ddcab8609e3957a698e2db0b793cf2c11a7e33743c9',
        'md5' => '',
        'date' => '04 Feb 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.32. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.32 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.32">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.33' => 
  array (
    'version' => '5.5.33',
    'date' => '03 Mar 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.33 (tar.bz2)',
        'filename' => 'php-5.5.33.tar.bz2',
        'sha256' => 'c490b1ed4df596b48eb68f630d89ca512945e2650840e7dace1119cc7e600aa9',
        'md5' => '',
        'date' => '03 Mar 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.33 (tar.gz)',
        'filename' => 'php-5.5.33.tar.gz',
        'sha256' => 'd2747bcf2cc94f652ac216f522904863a22042c66fabcf82ad7449d261d7a45b',
        'md5' => '',
        'date' => '03 Mar 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.33 (tar.xz)',
        'filename' => 'php-5.5.33.tar.xz',
        'sha256' => 'b91dbd3c53f9895e8f7b29e5fed25a64dd3a76b454f6ef7265e73c96b4303f30',
        'md5' => '',
        'date' => '03 Mar 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.33. This is a security release. Two security bugs were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.33 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.33">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.34' => 
  array (
    'version' => '5.5.34',
    'date' => '31 Mar 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.34 (tar.bz2)',
        'filename' => 'php-5.5.34.tar.bz2',
        'sha256' => 'af88884416a92619de842ad0fd23f7f7e8140efb0b9194f98a38a78781e5851c',
        'md5' => '',
        'date' => '31 Mar 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.34 (tar.gz)',
        'filename' => 'php-5.5.34.tar.gz',
        'sha256' => '0e573b406441294b233e35e1f2e12d7896d68457e3e10bf6e1f4825e75271cca',
        'md5' => '',
        'date' => '31 Mar 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.34 (tar.xz)',
        'filename' => 'php-5.5.34.tar.xz',
        'sha256' => '6989a4f9900e6ddec7248790449bbb4aa55728730bff4973acb49d236c9e9e2a',
        'md5' => '',
        'date' => '31 Mar 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.34. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.34 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.34">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.35' => 
  array (
    'version' => '5.5.35',
    'date' => '31 Mar 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.35 (tar.bz2)',
        'filename' => 'php-5.5.35.tar.bz2',
        'sha256' => '2d648dd648e820fd64693ce72f9bf07064d147220e594e39fb9f6310238258d7',
        'md5' => '',
        'date' => '28 Apr 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.35 (tar.gz)',
        'filename' => 'php-5.5.35.tar.gz',
        'sha256' => '21e10a49c62ab34a7edc976af686a952e70142f19135ca8da67758e1c8c3df30',
        'md5' => '',
        'date' => '28 Apr 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.35 (tar.xz)',
        'filename' => 'php-5.5.35.tar.xz',
        'sha256' => '9bef96634af853960be085690b2f4cea5850b749ea950942769b22b1a9f24873',
        'md5' => '',
        'date' => '28 Apr 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.35. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.35 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.35">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.36' => 
  array (
    'version' => '5.5.36',
    'date' => '26 May 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.36 (tar.bz2)',
        'filename' => 'php-5.5.36.tar.bz2',
        'sha256' => '2484edfaa3de606d74f927b55c5206f51b1ae24ea8e428aa9fc15474c7bb71bb',
        'md5' => '',
        'date' => '26 May 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.36 (tar.gz)',
        'filename' => 'php-5.5.36.tar.gz',
        'sha256' => 'ef829f9a9600a858e2363533b80c4e4773505bdc8ea3692d703fc893f267728a',
        'md5' => '',
        'date' => '26 May 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.36 (tar.xz)',
        'filename' => 'php-5.5.36.tar.xz',
        'sha256' => 'e1bbe33d6b4da66b15c483131520a9fc505eeb6629fa70c5cfba79590a1d0801',
        'md5' => '',
        'date' => '26 May 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.36. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.36 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.36">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.37' => 
  array (
    'version' => '5.5.37',
    'date' => '23 Jun 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.37 (tar.bz2)',
        'filename' => 'php-5.5.37.tar.bz2',
        'sha256' => 'd2380ebe46caf17f2c4cd055867d00a82e6702dc5f62dc29ce864a5742905d88',
        'md5' => '',
        'date' => '23 Jun 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.37 (tar.gz)',
        'filename' => 'php-5.5.37.tar.gz',
        'sha256' => '7cef04b549fdbe00c26dc785b6ba10439672a1596db518fc46632ecba45f44b9',
        'md5' => '',
        'date' => '23 Jun 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.37 (tar.xz)',
        'filename' => 'php-5.5.37.tar.xz',
        'sha256' => 'c322444fdf6d3ba26aa67d67ee32d1e815a877f35831351c83763431a80e3612',
        'md5' => '',
        'date' => '23 Jun 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.5.37. This is a security release, several security bugs were fixed.

     All PHP 5.5 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.5.37 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.37">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.38' => 
  array (
    'version' => '5.5.38',
    'date' => '21 Jul 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.38 (tar.bz2)',
        'filename' => 'php-5.5.38.tar.bz2',
        'sha256' => '473c81ebb2e48ca468caee031762266651843d7227c18a824add9b07b9393e38',
        'md5' => '',
        'date' => '21 Jul 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.38 (tar.gz)',
        'filename' => 'php-5.5.38.tar.gz',
        'sha256' => '4f458c9b504269615715a62f182b7c2f89bb8284f484befc221b56a1571b506e',
        'md5' => '',
        'date' => '21 Jul 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.38 (tar.xz)',
        'filename' => 'php-5.5.38.tar.xz',
        'sha256' => 'cb527c44b48343c8557fe2446464ff1d4695155a95601083e5d1f175df95580f',
        'md5' => '',
        'date' => '21 Jul 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


	<p>
       The PHP development team announces the immediate availability of PHP 5.5.38. This is a security release that fixes
       some security related bugs.
    </p>



	<p>For source downloads of PHP 5.5.38 please visit our downloads page, Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>. The list of changes is recorded in the <a href="http://php.net/ChangeLog-5.php#5.5.38">ChangeLog</a>.</p>

	<p>
	Note that according to <a href="http://www.php.net/supported-versions.php">our release schedule</a>, PHP 5.5.38 is the last release of the PHP 5.5 branch.
	There may be additional release if we discover important security issues that warrant it, otherwise this release will be the final one in the PHP 5.5 branch. If your PHP installation is based on PHP 5.5, it may be a good time to start making the plans for the upgrade to PHP 5.6 or PHP 7.0.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.5.4' => 
  array (
    'version' => '5.5.4',
    'date' => '19 Sep 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.4 (tar.bz2)',
        'filename' => 'php-5.5.4.tar.bz2',
        'sha256' => '',
        'md5' => '456f2eb1ee36f2a277bd4cc778e720eb',
        'date' => '19 Sep 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.4 (tar.gz)',
        'filename' => 'php-5.5.4.tar.gz',
        'sha256' => '',
        'md5' => 'bf842770ac64a47ff599f463e6cf1334',
        'date' => '19 Sep 2013',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.4 (tar.xz)',
        'filename' => 'php-5.5.4.tar.xz',
        'sha256' => '',
        'md5' => '32c1dc56701d21def91a39a312392b54',
        'date' => '19 Sep 2013',
      ),
      3 => 
      array (
        'name' => 'Windows 5.5.4 binaries and source',
        'filename' => 'Windows 5.5.4 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.5.4.
This release fixes several bugs against PHP 5.5.3.</p>

<p>All PHP users are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.5.4 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.4">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.5' => 
  array (
    'version' => '5.5.5',
    'date' => '17 Oct 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.5 (tar.bz2)',
        'filename' => 'php-5.5.5.tar.bz2',
        'sha256' => 'a400b324ae288eb0c9285e550fe5fd7f92c0f4e126496c3b05f9041da6cc04de',
        'md5' => '',
        'date' => '17 Oct 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.5 (tar.gz)',
        'filename' => 'php-5.5.5.tar.gz',
        'sha256' => '483ff2370fa3a8863e6b023383c4bcfcc3ba462137c30c5fc75043e1755b7d17',
        'md5' => '',
        'date' => '17 Oct 2013',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.5 (tar.xz)',
        'filename' => 'php-5.5.5.tar.xz',
        'sha256' => '82cc9c88b946354bfe629917a85ed33d8cfc901460d432a75f823667d94f29ee',
        'md5' => '',
        'date' => '17 Oct 2013',
      ),
      3 => 
      array (
        'name' => 'Windows 5.5.5 binaries and source',
        'filename' => 'Windows 5.5.5 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.5.
This release fixes about twenty bugs against PHP 5.5.4, some of them regarding the build system.</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.5, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.5">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.6' => 
  array (
    'version' => '5.5.6',
    'date' => '14 Nov 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.6 (tar.bz2)',
        'filename' => 'php-5.5.6.tar.bz2',
        'sha256' => 'a9b7d291199d7e6b90ef1d78eb791d738944d66856e76bde9463ce2645b0e4a4',
        'md5' => '',
        'date' => '14 Nov 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.6 (tar.gz)',
        'filename' => 'php-5.5.6.tar.gz',
        'sha256' => '01f9c45154d4c9a47a825aa662bd64493082bd57dafdc720cf899ee194220a67',
        'md5' => '',
        'date' => '14 Nov 2013',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.6 (tar.xz)',
        'filename' => 'php-5.5.6.tar.xz',
        'sha256' => '3235a5c15e8fc55498dd80fe43f4aecc51dba35a7fc916aee7ef12d4e1f8767a',
        'md5' => '',
        'date' => '14 Nov 2013',
      ),
      3 => 
      array (
        'name' => 'Windows 5.5.6 binaries and source',
        'filename' => 'Windows 5.5.6 binaries and source',
        'sha256' => '',
        'md5' => '',
        'date' => '',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.6.
This release fixes some bugs against PHP 5.5.5, and adds some performance improvements.</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.6, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.6">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.7' => 
  array (
    'version' => '5.5.7',
    'date' => '12 Dec 2013',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.7 (tar.bz2)',
        'filename' => 'php-5.5.7.tar.bz2',
        'sha256' => '2cb9425ef514b984dd233097d82a66f4623b9bf48f2ef265bc7ba25d697d6008',
        'md5' => '',
        'date' => '12 Dec 2013',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.7 (tar.gz)',
        'filename' => 'php-5.5.7.tar.gz',
        'sha256' => '7b954338d7dd538ef6fadbc110e6a0f50d0b39dabec2c12a7f000c17332591b8',
        'md5' => '',
        'date' => '12 Dec 2013',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.7 (tar.xz)',
        'filename' => 'php-5.5.7.tar.xz',
        'sha256' => 'b7bae5d878b8fc3f4b481eb8f2179b5e71d30dfb3bc3640a5068c1b46633f08c',
        'md5' => '',
        'date' => '12 Dec 2013',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.7.
This release fixes some bugs against PHP 5.5.6, and fixes CVE-2013-6420.</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.7, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.7">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.8' => 
  array (
    'version' => '5.5.8',
    'date' => '9 Jan 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.8 (tar.bz2)',
        'filename' => 'php-5.5.8.tar.bz2',
        'sha256' => '6d5f45659d13383fc8429f185cc9da0b30c7bb72dcae9baf568f0511eb7f8b68',
        'md5' => '',
        'date' => '9 Jan 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.8 (tar.gz)',
        'filename' => 'php-5.5.8.tar.gz',
        'sha256' => '67c74a9a2357dc65f5b1701cadb574f1309c4c3a20a2a5c56aeae4c4be90f2f8',
        'md5' => '',
        'date' => '9 Jan 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.8.
This release fixes about 20 bugs against PHP 5.5.7.</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.8, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.8">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.5.9' => 
  array (
    'version' => '5.5.9',
    'date' => '6 Feb 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.5.9 (tar.bz2)',
        'filename' => 'php-5.5.9.tar.bz2',
        'sha256' => '9d1dea5195e2bcd928416130a6e19173d02bd36fb76c382522bf145c458fbed3',
        'md5' => '',
        'date' => '6 Feb 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.5.9 (tar.gz)',
        'filename' => 'php-5.5.9.tar.gz',
        'sha256' => 'ec1bf0cb3be80240049dbd92c272d4bf242a614fa5f9dcc42a15adb5fd01ccde',
        'md5' => '',
        'date' => '6 Feb 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.5.9 (tar.xz)',
        'filename' => 'php-5.5.9.tar.xz',
        'sha256' => '7f7a7b1189472e59b234233daab9aa9692bb5eb8404485e9a78221f75ee4664a',
        'md5' => '',
        'date' => '6 Feb 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.5.9.
This release fixes several bugs against PHP 5.5.8.</p>

<p>All PHP users are encouraged to upgrade to this new version.</p>

<p>For source downloads of PHP 5.5.9, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.5.9">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.6.0' => 
  array (
    'version' => '5.6.0',
    'date' => '28 Aug 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.0 (tar.bz2)',
        'filename' => 'php-5.6.0.tar.bz2',
        'sha256' => '097af1be34fc73965e6f8401fd10e73eb56e1969ed4ffd691fb7e91606d0fc09',
        'md5' => '',
        'date' => '28 Aug 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.0 (tar.gz)',
        'filename' => 'php-5.6.0.tar.gz',
        'sha256' => '284b85376c630a6a7163e5278d64b8526fa1324fe5fd5d21174b54e2c056533f',
        'md5' => '',
        'date' => '28 Aug 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.0 (tar.xz)',
        'filename' => 'php-5.6.0.tar.xz',
        'sha256' => '8fc5411cd05cc6cc663247e588931fe67b1dc0e42550fa28ab2c943ad84eda02',
        'md5' => '',
        'date' => '28 Aug 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP Development Team announces the immediate availability of PHP 5.6.0.
This new version comes with new features, some backward incompatible changes and many improvements.
</p>

<p><b>The main features of PHP 5.6.0 include:</b></p>
<ul>
 <li><a href="http://php.net/migration56.new-features#migration56.new-features.const-scalar-exprs">Constant scalar expressions</a>.</li>
 <li><a href="http://php.net/functions.arguments#functions.variable-arg-list">Variadic functions</a> and argument unpacking using the <code>...</code> operator.</li>
<li><a href="http://php.net/language.operators.arithmetic">Exponentiation using the <code>**</code> operator</a>.</li>
 <li><a href="http://php.net/migration56.new-features#migration56.new-features.use">Function and constant importing</a> with the <a href="http://php.net/language.namespaces.importing">use keyword</a>.</li>
 <li><a href="http://phpdbg.com/docs">phpdbg</a> as an interactive integrated debugger SAPI.</li>
 <li><a href="http://php.net/wrappers#wrappers.php.input">php://input</a> is now reusable, and <code>$HTTP_RAW_POST_DATA</code> is deprecated.</li>
 <li><a href="http://php.net/book.gmp">GMP</a> objects now support operator overloading.</li>
 <li>File uploads larger than 2 gigabytes in size are now accepted.</li>
</ul>

<p>For a full list of new features, you may read <a href="http://php.net/migration56.new-features">the new features chapter of the migration guide</a>.</p>

<p>
<b>PHP 5.6.0 also introduces changes that affect compatibility:</b>
</p>

<ul>
 <li>Array keys won\'t be overwritten when defining an array as a property of a class via an array literal.</li>
 <li><a href="http://php.net/function.json-decode">json_decode()</a> is more strict in JSON syntax parsing.</li>
 <li>Stream wrappers now verify peer certificates and host names by default when using SSL/TLS.</li>
 <li><a href="http://php.net/book.gmp">GMP</a> resources are now objects.</li>
 <li><a href="http://php.net/book.mcrypt">Mcrypt</a> functions now require valid keys and IVs.</li>
</ul>

<p>
 For users upgrading from PHP 5.5, <a href="http://php.net/migration56">a full migration guide</a> is available, detailing the changes between 5.5 and 5.6.0.
</p>

<p>For source downloads of PHP 5.6.0, please visit our <a href="http://www.php.net/downloads/">downloads page</a>.
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The full list of changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.6.0">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.6.1' => 
  array (
    'version' => '5.6.1',
    'date' => '02 Oct 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.1 (tar.bz2)',
        'filename' => 'php-5.6.1.tar.bz2',
        'sha256' => '82c1ccd17830d697d7a4d75bb60ea12be58fa80b4dba101e97db1a6372ca45f0',
        'md5' => '',
        'date' => '02 Oct 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.1 (tar.gz)',
        'filename' => 'php-5.6.1.tar.gz',
        'sha256' => 'e34f0ab6b1f431f3115f60094f6d7ded12a90db2361194b8ef9e6eff812db21c',
        'md5' => '',
        'date' => '02 Oct 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.1 (tar.xz)',
        'filename' => 'php-5.6.1.tar.xz',
        'sha256' => '57640a700364949292da06e55423f162428a864451d05751a8829ae04d65745e',
        'md5' => '',
        'date' => '02 Oct 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.1. Several bugs were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.1 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.1">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.10' => 
  array (
    'version' => '5.6.10',
    'date' => '11 Jun 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.10 (tar.bz2)',
        'filename' => 'php-5.6.10.tar.bz2',
        'sha256' => '0a579c81c724ea41815eee0caa8ea7d8eeb302458519d8cc4fc5b055577c8c45',
        'md5' => '',
        'date' => '11 Jun 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.10 (tar.gz)',
        'filename' => 'php-5.6.10.tar.gz',
        'sha256' => '7759d6e178be524085e1482921748c14d11cbd0a133ba8aabb96c391ce7ed3fc',
        'md5' => '',
        'date' => '11 Jun 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.10 (tar.xz)',
        'filename' => 'php-5.6.10.tar.xz',
        'sha256' => '1af720c955b0a57aa47606e928616e84c78868aff2a5f269c70601a77d6da8c1',
        'md5' => '',
        'date' => '11 Jun 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.10. Several bugs have been fixed as well as several security issues into some
     bundled librairies (CVE-2015-3414, CVE-2015-3415, CVE-2015-3416, CVE-2015-2325 and CVE-2015-2326).

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.10 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.10">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.11' => 
  array (
    'version' => '5.6.11',
    'date' => '10 Jul 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.11 (tar.bz2)',
        'filename' => 'php-5.6.11.tar.bz2',
        'sha256' => 'bd6b260816764c267244749ead07482120dbf8d1920ebbbb0dcb2aa411033866',
        'md5' => '',
        'date' => '10 Jul 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.11 (tar.gz)',
        'filename' => 'php-5.6.11.tar.gz',
        'sha256' => '85916b46c0d1f2a5315c84fb2773293f4084c3676ba4ed420d0432cbb60ff9d8',
        'md5' => '',
        'date' => '10 Jul 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.11 (tar.xz)',
        'filename' => 'php-5.6.11.tar.xz',
        'sha256' => '3f97dbb1c646b90e1ef638defabe429ef036f903b5baa1c34769d3de4fe62bd4',
        'md5' => '',
        'date' => '10 Jul 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
5.6.11. Five security-related issues in PHP were fixed in this release, including CVE-2015-3152.
All PHP 5.6 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.6.11 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.11">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.6.12' => 
  array (
    'version' => '5.6.12',
    'date' => '06 Aug 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.12 (tar.bz2)',
        'filename' => 'php-5.6.12.tar.bz2',
        'sha256' => '6f27104272af7b2a996f85e4100fac627630fbdaf39d7bd263f16cf529c8853a',
        'md5' => '',
        'date' => '06 Aug 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.12 (tar.gz)',
        'filename' => 'php-5.6.12.tar.gz',
        'sha256' => '7799b42606c1770d1ad90bfc7521d2b6c294c4c27dcf1a206dee562533b4f984',
        'md5' => '',
        'date' => '06 Aug 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.12 (tar.xz)',
        'filename' => 'php-5.6.12.tar.xz',
        'sha256' => 'f8a8446866c0dc3f33319aa196ce87b64d71cab3dd96e39c8816adccc7e8ef33',
        'md5' => '',
        'date' => '06 Aug 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.12. 12 security-related issues were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.12 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.12">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.13' => 
  array (
    'version' => '5.6.13',
    'date' => '03 Sep 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.13 (tar.bz2)',
        'filename' => 'php-5.6.13.tar.bz2',
        'sha256' => '6358837c9cbab41b91ede59dbf0670ae0fb925a1369ecbc1a44a27212420f893',
        'md5' => '',
        'date' => '03 Sep 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.13 (tar.gz)',
        'filename' => 'php-5.6.13.tar.gz',
        'sha256' => '92acc6c067f5e015a6881b4119eafec10eca11722e810f2c2083f72e17119bcf',
        'md5' => '',
        'date' => '03 Sep 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.13 (tar.xz)',
        'filename' => 'php-5.6.13.tar.xz',
        'sha256' => 'c1f0837df20cd3bed149033924770deca3e7e2d18e2e7e81395096576f153fdc',
        'md5' => '',
        'date' => '03 Sep 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.13. 11 security-related issues were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.13 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.13">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.14' => 
  array (
    'version' => '5.6.14',
    'date' => '01 Oct 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.14 (tar.bz2)',
        'filename' => 'php-5.6.14.tar.bz2',
        'sha256' => '36f295f11641c1839a5df00e693f685fd134c65e8a1d46e8ee0abae8662b2eb0',
        'md5' => '',
        'date' => '01 Oct 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.14 (tar.gz)',
        'filename' => 'php-5.6.14.tar.gz',
        'sha256' => '29baf7ffca644f7f8e86028c40275b9e460342bdf9562d45f8f0498899cb738d',
        'md5' => '',
        'date' => '01 Oct 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.14 (tar.xz)',
        'filename' => 'php-5.6.14.tar.xz',
        'sha256' => 'c8edf6b05fd8a69ebd88d90c5c0975ee168502204622ad5cfcd550bc222632d9',
        'md5' => '',
        'date' => '01 Oct 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.14. This is a security release. Two security bugs were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.14 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.14">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.15' => 
  array (
    'version' => '5.6.15',
    'date' => '29 Oct 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.15 (tar.bz2)',
        'filename' => 'php-5.6.15.tar.bz2',
        'sha256' => '11a0645c4d4b749e256da1e0d6df89dd886b5b06b83c914d942653661dbd1c38',
        'md5' => '',
        'date' => '29 Oct 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.15 (tar.gz)',
        'filename' => 'php-5.6.15.tar.gz',
        'sha256' => 'bb2d4c226a4897b7c3659c2538a87aef7ec104f58f5ae930a263dd77fb8ebc40',
        'md5' => '',
        'date' => '29 Oct 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.15 (tar.xz)',
        'filename' => 'php-5.6.15.tar.xz',
        'sha256' => 'cf52e2e621e60997269663fa4bc06253191fa2a41dc9b08c8c911435b3ebcca9',
        'md5' => '',
        'date' => '29 Oct 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.15. Several bugs have been fixed.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.15 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.15">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.16' => 
  array (
    'version' => '5.6.16',
    'date' => '26 Nov 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.16 (tar.bz2)',
        'filename' => 'php-5.6.16.tar.bz2',
        'sha256' => '4fe6f40964c1bfaba05fc144ba20a2cdad33e11685f4f101ea5a48b98bbcd2ae',
        'md5' => '',
        'date' => '26 Nov 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.16 (tar.gz)',
        'filename' => 'php-5.6.16.tar.gz',
        'sha256' => 'b6618df6b11a275fa28596f1775727679f8492e100f3bd488d8a8bfbfc19349f',
        'md5' => '',
        'date' => '26 Nov 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.16 (tar.xz)',
        'filename' => 'php-5.6.16.tar.xz',
        'sha256' => '8ef43271d9bd8cc8f8d407d3ba569de9fa14a28985ae97c76085bb50d597de98',
        'md5' => '',
        'date' => '26 Nov 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.16. Several bugs have been fixed.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.16 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.16">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.17' => 
  array (
    'version' => '5.6.17',
    'date' => '07 Jan 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.17 (tar.bz2)',
        'filename' => 'php-5.6.17.tar.bz2',
        'sha256' => '77b45f56a1e63e75bb22b42cfb8b438ec4083c59ce774b4d7c1685544b7add3b',
        'md5' => '',
        'date' => '07 Jan 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.17 (tar.gz)',
        'filename' => 'php-5.6.17.tar.gz',
        'sha256' => 'f5036535651e919415f4b6589391c95e4ff48f2d391818251c45da216791aac8',
        'md5' => '',
        'date' => '07 Jan 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.17 (tar.xz)',
        'filename' => 'php-5.6.17.tar.xz',
        'sha256' => 'ea9d5749380c7c7171e131616466deacd7cb124b5010eafc34e551b0a7b0fb2c',
        'md5' => '',
        'date' => '07 Jan 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.17. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.17 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.17">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.18' => 
  array (
    'version' => '5.6.18',
    'date' => '04 Feb 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.18 (tar.bz2)',
        'filename' => 'php-5.6.18.tar.bz2',
        'sha256' => 'c3cd4a29a9562309d36e2b128407d6eaa5c7dde590d2b1a464457383e517f4ed',
        'md5' => '',
        'date' => '04 Feb 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.18 (tar.gz)',
        'filename' => 'php-5.6.18.tar.gz',
        'sha256' => '76da4150dc2da86b7b63b1aad3c20d1d11964796251ac0dd4d26d0a3f5045015',
        'md5' => '',
        'date' => '04 Feb 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.18 (tar.xz)',
        'filename' => 'php-5.6.18.tar.xz',
        'sha256' => '54dd9106c3469bc7028644d72ac140af00655420bbaaf4a742a64e9ed02ec1b0',
        'md5' => '',
        'date' => '04 Feb 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.18. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.18 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.18">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.19' => 
  array (
    'version' => '5.6.19',
    'date' => '03 Marc 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.19 (tar.bz2)',
        'filename' => 'php-5.6.19.tar.bz2',
        'sha256' => '2a24a3f84971680ac0a4c71050067de4f76ee235aa4a041fae21bfa69975c168',
        'md5' => '',
        'date' => '03 Marc 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.19 (tar.gz)',
        'filename' => 'php-5.6.19.tar.gz',
        'sha256' => 'fce49cddac9337f0c83afbafac5acfb82ba9f876a5a880c88240feac8c9b7a22',
        'md5' => '',
        'date' => '03 Marc 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.19 (tar.xz)',
        'filename' => 'php-5.6.19.tar.xz',
        'sha256' => 'bb32337f93a00b71789f116bddafa8848139120e7fb6f4f98a84f52dbcb8329f',
        'md5' => '',
        'date' => '03 Marc 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.19. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.19 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.19">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.2' => 
  array (
    'version' => '5.6.2',
    'date' => '16 Oct 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.2 (tar.bz2)',
        'filename' => 'php-5.6.2.tar.bz2',
        'sha256' => '671dcf1f636410c63bb9eb015c4c180d904f5436f81217be0adbf52da9becdb5',
        'md5' => '',
        'date' => '16 Oct 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.2 (tar.gz)',
        'filename' => 'php-5.6.2.tar.gz',
        'sha256' => '4bb316831979317caf738bb9e2c590bf3b7951ce60c69b9ca33f26069d9a2f39',
        'md5' => '',
        'date' => '16 Oct 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.2 (tar.xz)',
        'filename' => 'php-5.6.2.tar.xz',
        'sha256' => '9be1322d33520fb2164282fb0fcdc212f66ffedcd912bff60955d5696454fe39',
        'md5' => '',
        'date' => '16 Oct 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.6.2.
Four security-related bugs were fixed in this release, including fixes for CVE-2014-3668, CVE-2014-3669 and CVE-2014-3670.
All PHP 5.6 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.6.2 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.2">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.6.20' => 
  array (
    'version' => '5.6.20',
    'date' => '31 Marc 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.20 (tar.bz2)',
        'filename' => 'php-5.6.20.tar.bz2',
        'sha256' => '5ac7bf7caec7a79b18cf458e786fd1609ad2da771224b80bc15cc6f01b22bf1f',
        'md5' => '',
        'date' => '31 Marc 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.20 (tar.gz)',
        'filename' => 'php-5.6.20.tar.gz',
        'sha256' => '9a7ec6e1080ee93dcbe7df3e49ea1c3c3da5fc2258aff763f39ab3786baf8d56',
        'md5' => '',
        'date' => '31 Marc 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.20 (tar.xz)',
        'filename' => 'php-5.6.20.tar.xz',
        'sha256' => '2b87d40213361112af49157a435e0d4cdfd334c9b7c731c8b844932b1f444e7a',
        'md5' => '',
        'date' => '31 Marc 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.20. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.20 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.20">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.21' => 
  array (
    'version' => '5.6.21',
    'date' => '28 Apr 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.21 (tar.bz2)',
        'filename' => 'php-5.6.21.tar.bz2',
        'sha256' => 'b4ed7ab574b689fd6d6494fde954826c06efc85c505e017b8d776c7c7f479590',
        'md5' => '',
        'date' => '28 Apr 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.21 (tar.gz)',
        'filename' => 'php-5.6.21.tar.gz',
        'sha256' => '5997668c1f6f2d86a59cf75cc86b4a94687884614dec481fad7e13a76b70fcd5',
        'md5' => '',
        'date' => '28 Apr 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.21 (tar.xz)',
        'filename' => 'php-5.6.21.tar.xz',
        'sha256' => '566ff1a486cb0485ed477a91ea292423f77a58671270ff73b74e67e3ce7084f9',
        'md5' => '',
        'date' => '28 Apr 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.21. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.21 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.21">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.22' => 
  array (
    'version' => '5.6.22',
    'date' => '26 May 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.22 (tar.bz2)',
        'filename' => 'php-5.6.22.tar.bz2',
        'sha256' => '90da8a80cc52fa699cf2bfa4c6fa737c772df7c92b81ef483460aa3b1e9f88c6',
        'md5' => '',
        'date' => '26 May 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.22 (tar.gz)',
        'filename' => 'php-5.6.22.tar.gz',
        'sha256' => '4ce0f58c3842332c4e3bb2ec1c936c6817294273abaa37ea0ef7ca2a68cf9b21',
        'md5' => '',
        'date' => '26 May 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.22 (tar.xz)',
        'filename' => 'php-5.6.22.tar.xz',
        'sha256' => 'c96980d7de1d66c821a4ee5809df0076f925b2fe0b8c362d234d92f2f0a178e2',
        'md5' => '',
        'date' => '26 May 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.22. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.22 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.22">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.23' => 
  array (
    'version' => '5.6.23',
    'date' => '23 Jun 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.23 (tar.bz2)',
        'filename' => 'php-5.6.23.tar.bz2',
        'sha256' => 'facd280896d277e6f7084b60839e693d4db68318bfc92085d3dc0251fd3558c7',
        'md5' => '',
        'date' => '23 Jun 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.23 (tar.gz)',
        'filename' => 'php-5.6.23.tar.gz',
        'sha256' => '5f2274a13970887e8c81500c2afe292d51c3524d1a06554b0a87c74ce0a24ffe',
        'md5' => '',
        'date' => '23 Jun 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.23 (tar.xz)',
        'filename' => 'php-5.6.23.tar.xz',
        'sha256' => '39141e9a617af172aedbbacee7a63eb15502850f7cea20d759a9cffa7cfb0a1a',
        'md5' => '',
        'date' => '23 Jun 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


     <p>The PHP development team announces the immediate availability of PHP
     5.6.23. Several bugs were fixed in this release, including security-related ones.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.23 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.23">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.24' => 
  array (
    'version' => '5.6.24',
    'date' => '21 Jul 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.24 (tar.bz2)',
        'filename' => 'php-5.6.24.tar.bz2',
        'sha256' => 'bf23617ec3ed0a125ec8bde2b7bca9d3804b2ff4df8de192890c84dc9fac38c6',
        'md5' => '',
        'date' => '21 Jul 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.24 (tar.gz)',
        'filename' => 'php-5.6.24.tar.gz',
        'sha256' => '5f8b2e4e00360fee6eb1b89447266ae45993265955bd1ea9866270d75cdb6ec1',
        'md5' => '',
        'date' => '21 Jul 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.24 (tar.xz)',
        'filename' => 'php-5.6.24.tar.xz',
        'sha256' => 'ed7c38c6dac539ade62e08118258f4dac0c49beca04d8603bee4e0ea6ca8250b',
        'md5' => '',
        'date' => '21 Jul 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.24. This is a security release. Several security bugs were fixed in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.24 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.24">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.25' => 
  array (
    'version' => '5.6.25',
    'date' => '18 Aug 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.25 (tar.bz2)',
        'filename' => 'php-5.6.25.tar.bz2',
        'sha256' => '58ce6032aced7f3e42ced492bd9820e5b3f2a3cd3ef71429aa92fd7b3eb18dde',
        'md5' => '',
        'date' => '18 Aug 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.25 (tar.gz)',
        'filename' => 'php-5.6.25.tar.gz',
        'sha256' => '733f1c811d51c2d4031a0c058dc94d09d03858d781ca2eb2cce78853bc76db58',
        'md5' => '',
        'date' => '18 Aug 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.25 (tar.xz)',
        'filename' => 'php-5.6.25.tar.xz',
        'sha256' => '7535cd6e20040ccec4594cc386c6f15c3f2c88f24163294a31068cf7dfe7f644',
        'md5' => '',
        'date' => '18 Aug 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.25. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.25 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.25">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.26' => 
  array (
    'version' => '5.6.26',
    'date' => '15 Sep 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.26 (tar.bz2)',
        'filename' => 'php-5.6.26.tar.bz2',
        'sha256' => 'd47aab8083a4284b905777e1b45dd7735adc53be827b29f896684750ac8b6236',
        'md5' => '',
        'date' => '15 Sep 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.26 (tar.gz)',
        'filename' => 'php-5.6.26.tar.gz',
        'sha256' => 'f76b6cc23739d9dabf875aee57d91ae73f15e88ddf78803369b8b4728b19b924',
        'md5' => '',
        'date' => '15 Sep 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.26 (tar.xz)',
        'filename' => 'php-5.6.26.tar.xz',
        'sha256' => '203a854f0f243cb2810d1c832bc871ff133eccdf1ff69d32846f93bc1bef58a8',
        'md5' => '',
        'date' => '15 Sep 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.26. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.26 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.26">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.27' => 
  array (
    'version' => '5.6.27',
    'date' => '13 Oct 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.27 (tar.bz2)',
        'filename' => 'php-5.6.27.tar.bz2',
        'sha256' => '3b77d3a067b6e9cc7bb282d4d5b0e6eeb0623a828bb0479241e3b030446f2a3c',
        'md5' => '',
        'date' => '13 Oct 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.27 (tar.gz)',
        'filename' => 'php-5.6.27.tar.gz',
        'sha256' => '3e6cecec615907587a2b35fa8e7f915f038034dc57530734c2b94d381e664a1a',
        'md5' => '',
        'date' => '13 Oct 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.27 (tar.xz)',
        'filename' => 'php-5.6.27.tar.xz',
        'sha256' => '16eb544498339d1d855292826e2e547ab01a31600141094959073e5e10e93ab5',
        'md5' => '',
        'date' => '13 Oct 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.27. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.27 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.27">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.28' => 
  array (
    'version' => '5.6.28',
    'date' => '10 Nov 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.28 (tar.bz2)',
        'filename' => 'php-5.6.28.tar.bz2',
        'sha256' => 'c55ea3f4aad5a0b65631d01c4468930fd981ad208ffcd242acdf731bcb47548f',
        'md5' => '',
        'date' => '10 Nov 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.28 (tar.gz)',
        'filename' => 'php-5.6.28.tar.gz',
        'sha256' => '27a47ac15e0868d51181d3909cfe3c63ae9b643a3ab40dc30a75b5b500bce500',
        'md5' => '',
        'date' => '10 Nov 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.28 (tar.xz)',
        'filename' => 'php-5.6.28.tar.xz',
        'sha256' => '07187ba2870f89cef334cd2ad6cb801aeec5eaf283da0293a9a6be75d6786d11',
        'md5' => '',
        'date' => '10 Nov 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.28. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.28 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.28">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.29' => 
  array (
    'version' => '5.6.29',
    'date' => '08 Dec 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.29 (tar.bz2)',
        'filename' => 'php-5.6.29.tar.bz2',
        'sha256' => '499b844c8aa7be064c111692e51a093ba94e54d2d9abb01e70ea76183a1825bb',
        'md5' => '',
        'date' => '08 Dec 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.29 (tar.gz)',
        'filename' => 'php-5.6.29.tar.gz',
        'sha256' => '0b1b939129a7286c5a474ac2cf845b979477f26dff36639e04022def9e252574',
        'md5' => '',
        'date' => '08 Dec 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.29 (tar.xz)',
        'filename' => 'php-5.6.29.tar.xz',
        'sha256' => '0ff352a433f73e2c82b0d5b283b600402518569bf72a74e247f356dacbf322a7',
        'md5' => '',
        'date' => '08 Dec 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.29. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.29 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.29">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.3' => 
  array (
    'version' => '5.6.3',
    'date' => '13 Nov 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.3 (tar.bz2)',
        'filename' => 'php-5.6.3.tar.bz2',
        'sha256' => '8986b20124d14430d795165e47801ef065a38d5855bea39d0d47b13ab9ad4009',
        'md5' => '',
        'date' => '13 Nov 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.3 (tar.gz)',
        'filename' => 'php-5.6.3.tar.gz',
        'sha256' => '7ac79fe7ef50c2d5893375f5d8854909337adf1632e42bb08b36b66a0d8016a7',
        'md5' => '',
        'date' => '13 Nov 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.3 (tar.xz)',
        'filename' => 'php-5.6.3.tar.xz',
        'sha256' => 'fad244506cc7f10fe56aba8129b3c39a4f9316d9544a4fba932c3f81fc2244b5',
        'md5' => '',
        'date' => '13 Nov 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP 5.6.3.
This release fixes several bugs and one CVE in the fileinfo extension.
All PHP 5.6 users are encouraged to upgrade to this version.
</p>

<p>For source downloads of PHP 5.6.3 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.3">ChangeLog</a>.
</p>


</announcement>',
      ),
    ),
  ),
  '5.6.30' => 
  array (
    'version' => '5.6.30',
    'date' => '19 Jan 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.30 (tar.bz2)',
        'filename' => 'php-5.6.30.tar.bz2',
        'sha256' => 'a105c293fa1dbff118b5b0ca74029e6c461f8c78f49b337a2a98be9e32c27906',
        'md5' => '',
        'date' => '19 Jan 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.30 (tar.gz)',
        'filename' => 'php-5.6.30.tar.gz',
        'sha256' => '8bc7d93e4c840df11e3d9855dcad15c1b7134e8acf0cf3b90b932baea2d0bde2',
        'md5' => '',
        'date' => '19 Jan 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.30 (tar.xz)',
        'filename' => 'php-5.6.30.tar.xz',
        'sha256' => 'a363185c786432f75e3c7ff956b49c3369c3f6906a6b10459f8d1ddc22f70805',
        'md5' => '',
        'date' => '19 Jan 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.30. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>
     According to <a href="http://php.net/supported-versions.php">our release calendar</a>, this PHP 5.6 version
     is the last planned release that contains regular bugfixes. All the consequent releases
     will contain only security-relevant fixes, for the term of two years.
     PHP 5.6 users that need further bugfixes are encouraged to upgrade to PHP 7.
     </p>

     <p>For source downloads of PHP 5.6.30 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.30">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.31' => 
  array (
    'version' => '5.6.31',
    'date' => '06 Jul 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.31 (tar.bz2)',
        'filename' => 'php-5.6.31.tar.bz2',
        'sha256' => '8f397169cb65f0539f3bcb04060f97770d73e19074a37bd2c58b98ebf6ecb10f',
        'md5' => '',
        'date' => '06 Jul 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.31 (tar.gz)',
        'filename' => 'php-5.6.31.tar.gz',
        'sha256' => '6687ed2f09150b2ad6b3780ff89715891f83a9c331e69c90241ef699dec4c43f',
        'md5' => '',
        'date' => '06 Jul 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.31 (tar.xz)',
        'filename' => 'php-5.6.31.tar.xz',
        'sha256' => 'c464af61240a9b7729fabe0314cdbdd5a000a4f0c9bd201f89f8628732fe4ae4',
        'md5' => '',
        'date' => '06 Jul 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.31. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.31 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.31">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.32' => 
  array (
    'version' => '5.6.32',
    'date' => '26 Oct 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.32 (tar.bz2)',
        'filename' => 'php-5.6.32.tar.bz2',
        'sha256' => '3ee44e7a5fa42b563652b3ea0d3487bc236fcc9e5ea74b583775cab867abcb51',
        'md5' => '',
        'date' => '26 Oct 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.32 (tar.gz)',
        'filename' => 'php-5.6.32.tar.gz',
        'sha256' => '7bef1ae8cd633df5b9c5964262d276d2dc21acbfcd94022d1e2084d199315df4',
        'md5' => '',
        'date' => '26 Oct 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.32 (tar.xz)',
        'filename' => 'php-5.6.32.tar.xz',
        'sha256' => '8c2b4f721c7475fb9eabda2495209e91ea933082e6f34299d11cba88cd76e64b',
        'md5' => '',
        'date' => '26 Oct 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.32. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.32 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.32">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.33' => 
  array (
    'version' => '5.6.33',
    'date' => '04 Jan 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.33 (tar.bz2)',
        'filename' => 'php-5.6.33.tar.bz2',
        'sha256' => '07f696a9761dcd839e2045c95c3a4d2ffb52c54417477cca9d30a14975b831cc',
        'md5' => '',
        'date' => '04 Jan 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.33 (tar.gz)',
        'filename' => 'php-5.6.33.tar.gz',
        'sha256' => 'bedfac81cfaa25961812a1aec458c4109411a14991b43a416343ffb830b8da6a',
        'md5' => '',
        'date' => '04 Jan 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.33 (tar.xz)',
        'filename' => 'php-5.6.33.tar.xz',
        'sha256' => '9004995fdf55f111cd9020e8b8aff975df3d8d4191776c601a46988c375f3553',
        'md5' => '',
        'date' => '04 Jan 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.33. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.33 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.33">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.34' => 
  array (
    'version' => '5.6.34',
    'date' => '01 Mar 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.34 (tar.bz2)',
        'filename' => 'php-5.6.34.tar.bz2',
        'sha256' => 'e19f499d8cee4b0b0780361ecb6a00c41654772a754803ab9ea866b8d47cf2cd',
        'md5' => '',
        'date' => '01 Mar 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.34 (tar.gz)',
        'filename' => 'php-5.6.34.tar.gz',
        'sha256' => 'de28251ef6d7eb945eb7b770ff668b9f978d9adad52a8c763f6ee409a96732ea',
        'md5' => '',
        'date' => '01 Mar 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.34 (tar.xz)',
        'filename' => 'php-5.6.34.tar.xz',
        'sha256' => '21453be3a045204cd2717543ef42771324f411f40962ecda4fe841930a933128',
        'md5' => '',
        'date' => '01 Mar 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.34. This is a security release. One security bug was fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.34 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.34">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.35' => 
  array (
    'version' => '5.6.35',
    'date' => '29 Mar 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.35 (tar.bz2)',
        'filename' => 'php-5.6.35.tar.bz2',
        'sha256' => 'ee78a7e9ca21d8ea394d037c55effff477a49dbae31c7753c547036f5bd73b92',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.35 (tar.gz)',
        'filename' => 'php-5.6.35.tar.gz',
        'sha256' => 'dd0242304f510d48a5216dd2f5796bcf59e8e18366658259aaf205e1d63abf71',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.35 (tar.xz)',
        'filename' => 'php-5.6.35.tar.xz',
        'sha256' => '9985cb64cb8224c289effff5b34f670d14f838175f76daea0507d643eec650d2',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.35. This is a security release. One security bug was fixed in
     this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.35 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.35">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.36' => 
  array (
    'version' => '5.6.36',
    'date' => '26 Apr 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.36 (tar.bz2)',
        'filename' => 'php-5.6.36.tar.bz2',
        'sha256' => '626a0e3f5d8a0e686a2b930f0dd3a0601fe3dcb5e43dd0e8c3fab631e64e172a',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.36 (tar.gz)',
        'filename' => 'php-5.6.36.tar.gz',
        'sha256' => '06086a8b6a9964ef8009c4d9176b4eeb0c564ea39c1213f015e24f3466d2d69f',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.36 (tar.xz)',
        'filename' => 'php-5.6.36.tar.xz',
        'sha256' => '18f536bf548e909b4e980379d0c4e56d024b2b1eb1c9768fd169360491f1d6dd',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.36. This is a security release. Several security bugs have been fixed
     in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.36 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.36">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.37' => 
  array (
    'version' => '5.6.37',
    'date' => '19 Jul 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.37 (tar.bz2)',
        'filename' => 'php-5.6.37.tar.bz2',
        'sha256' => '886ad63d05d94ea3e54322691aadea0cf1d4bcdb4450b02fe300e5b570788b23',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.37 (tar.gz)',
        'filename' => 'php-5.6.37.tar.gz',
        'sha256' => 'b7ec077f35ef3a8cdd33c29124140b1761111a1429878b4c463bb20d2a31b184',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.37 (tar.xz)',
        'filename' => 'php-5.6.37.tar.xz',
        'sha256' => '5000d82610f9134aaedef28854ec3591f68dedf26a17b8935727dac2843bd256',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.37. This is a security release. Several security bugs have been fixed
     in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.37 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.37">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.38' => 
  array (
    'version' => '5.6.38',
    'date' => '13 Sep 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.38 (tar.bz2)',
        'filename' => 'php-5.6.38.tar.bz2',
        'sha256' => 'd65b231bbdd63be4439ef5ced965cfd63e62983429dbd4dfcfb49981593ebc03',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.38 (tar.gz)',
        'filename' => 'php-5.6.38.tar.gz',
        'sha256' => '3b74d46cd79a45cce90c8059e09d8bd0beeb5de562cbb0cb42f96ff8fa665fd4',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.38 (tar.xz)',
        'filename' => 'php-5.6.38.tar.xz',
        'sha256' => 'c2fac47dc6316bd230f0ea91d8a5498af122fb6a3eb43f796c9ea5f59b04aa1e',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.38. This is a security release. One security bug has been fixed
     in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.38 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.38">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.39' => 
  array (
    'version' => '5.6.39',
    'date' => '06 Dec 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.39 (tar.bz2)',
        'filename' => 'php-5.6.39.tar.bz2',
        'sha256' => 'b3db2345f50c010b01fe041b4e0f66c5aa28eb325135136f153e18da01583ad5',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.39 (tar.gz)',
        'filename' => 'php-5.6.39.tar.gz',
        'sha256' => '127b122b7d6c7f3c211c0ffa554979370c3131196137404a51a391d8e2e9c7bb',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.39 (tar.xz)',
        'filename' => 'php-5.6.39.tar.xz',
        'sha256' => '8147576001a832ff3d03cb2980caa2d6b584a10624f87ac459fcd3948c6e4a10',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.39. This is a security release. Several security bugs have been fixed
     in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.39 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.39">ChangeLog</a>.
     </p>

     <p>Please note that according to the <a href="http://php.net/supported-versions.php">PHP version
support timelines</a>,
        PHP 5.6.39 is the last scheduled release of PHP 5.6 branch. There may be additional release if we
discover
        important security issues that warrant it, otherwise this release will be the final one in the PHP
5.6 branch.
        If your PHP installation is based on PHP 5.6, it may be a good time to start making the plans for
the upgrade
        to PHP 7.1, PHP 7.2 or PHP 7.3.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.4' => 
  array (
    'version' => '5.6.4',
    'date' => '18 Dec 2014',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.4 (tar.bz2)',
        'filename' => 'php-5.6.4.tar.bz2',
        'sha256' => '576f9001b612f5ddc22f447311bbec321e2c959b6a52259d664c4ba04ef044f1',
        'md5' => '',
        'date' => '18 Dec 2014',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.4 (tar.gz)',
        'filename' => 'php-5.6.4.tar.gz',
        'sha256' => '9c318f10af598e3d0b306a00860cfeb13c34024a9032a59ff53e3cd3c7791e97',
        'md5' => '',
        'date' => '18 Dec 2014',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.4 (tar.xz)',
        'filename' => 'php-5.6.4.tar.xz',
        'sha256' => '8cf44c59f467cdc2dd76c1167d1f368575ccff9b12941e199a362eb44a79acea',
        'md5' => '',
        'date' => '18 Dec 2014',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.4. This release fixes several bugs and one CVE related to unserialization.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.4 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.4">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.40' => 
  array (
    'version' => '5.6.40',
    'date' => '10 Jan 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.40 (tar.bz2)',
        'filename' => 'php-5.6.40.tar.bz2',
        'sha256' => 'ffd025d34623553ab2f7fd8fb21d0c9e6f9fa30dc565ca03a1d7b763023fba00',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.40 (tar.gz)',
        'filename' => 'php-5.6.40.tar.gz',
        'sha256' => '56fb9878d12fdd921f6a0897e919f4e980d930160e154cbde2cc6d9206a27cac',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.40 (tar.xz)',
        'filename' => 'php-5.6.40.tar.xz',
        'sha256' => '1369a51eee3995d7fbd1c5342e5cc917760e276d561595b6052b21ace2656d1c',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.40. This is a security release. Several security bugs have been fixed
     in this release.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.40 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.40">ChangeLog</a>.
     </p>

     <p>Please note that according to the <a href="http://php.net/supported-versions.php">PHP version
support timelines</a>,
        PHP 5.6.40 is the last scheduled release of PHP 5.6 branch. There may be additional release if we
discover
        important security issues that warrant it, otherwise this release will be the final one in the PHP
5.6 branch.
        If your PHP installation is based on PHP 5.6, it may be a good time to start making the plans for
the upgrade
        to PHP 7.1, PHP 7.2 or PHP 7.3.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.5' => 
  array (
    'version' => '5.6.5',
    'date' => '22 Jan 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.5 (tar.bz2)',
        'filename' => 'php-5.6.5.tar.bz2',
        'sha256' => 'adab4c0775512a5ca0ae74e08efdc941d92529b75283e0f44d3f53822cdfd06d',
        'md5' => '',
        'date' => '22 Jan 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.5 (tar.gz)',
        'filename' => 'php-5.6.5.tar.gz',
        'sha256' => 'f67c480bcf2f6f703ec8d8a772540f4a518f766b08d634d7a919402c13a636cf',
        'md5' => '',
        'date' => '22 Jan 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.5 (tar.xz)',
        'filename' => 'php-5.6.5.tar.xz',
        'sha256' => 'c5ef4abaef8c1ea66dcfd5a075a2f357b666aff5c5b686fca7c78c1cfd64e996',
        'md5' => '',
        'date' => '22 Jan 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



      <p>The PHP development team announces the immediate availability of PHP
     5.6.5. This release fixes several bugs as well as CVE-2015-0231, CVE-2014-9427 and CVE-2015-0232.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.5 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.5">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.6' => 
  array (
    'version' => '5.6.6',
    'date' => '19 Feb 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.6 (tar.bz2)',
        'filename' => 'php-5.6.6.tar.bz2',
        'sha256' => '09625c9b65e0c8198dc76995a35f0feec0e13ea4489526e64a00954b12adbb4c',
        'md5' => '',
        'date' => '19 Feb 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.6 (tar.gz)',
        'filename' => 'php-5.6.6.tar.gz',
        'sha256' => '164fb27bab0a0ca4902bc67d5f5638e43466c88153aee3b54546d8ec682ec03b',
        'md5' => '',
        'date' => '19 Feb 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.6 (tar.xz)',
        'filename' => 'php-5.6.6.tar.xz',
        'sha256' => 'b963b2d45baeebeeb421c05ee60889e87971e3e27a4be873d265fee3250fde20',
        'md5' => '',
        'date' => '19 Feb 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.6. This release fixes several bugs and addresses CVE-2015-0235 and CVE-2015-0273.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.6 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.6">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.7' => 
  array (
    'version' => '5.6.7',
    'date' => '19 Mar 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.7 (tar.bz2)',
        'filename' => 'php-5.6.7.tar.bz2',
        'sha256' => '02954fb74c61a7879d48ebdcd4ecb78aa0056f4215ca9b096232de28eb8f17bc',
        'md5' => '',
        'date' => '19 Mar 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.7 (tar.gz)',
        'filename' => 'php-5.6.7.tar.gz',
        'sha256' => '11398540a582c876f5e070207231afde975eb49bb2eeae20b052e8ca325c0f47',
        'md5' => '',
        'date' => '19 Mar 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.7 (tar.xz)',
        'filename' => 'php-5.6.7.tar.xz',
        'sha256' => 'a85522dd2e6f80ee5637e537447ee54896c77a8fabe49d2310830d0e20952787',
        'md5' => '',
        'date' => '19 Mar 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


 <p>The PHP development team announces the immediate availability of PHP
     5.6.7. Several bugs have been fixed as well as CVE-2015-0231, CVE-2015-2305 and CVE-2015-2331.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.7 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.7">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.8' => 
  array (
    'version' => '5.6.8',
    'date' => '16 Apr 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.8 (tar.bz2)',
        'filename' => 'php-5.6.8.tar.bz2',
        'sha256' => '0af0045745d61eeb74a3ea744529a2481b27cb689da720e6c0250675043724e4',
        'md5' => '',
        'date' => '16 Apr 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.8 (tar.gz)',
        'filename' => 'php-5.6.8.tar.gz',
        'sha256' => 'c5b1c75c5671c239473eb611129f33ac432a55a1c341990b70009a2aa3b8dbc3',
        'md5' => '',
        'date' => '16 Apr 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.8 (tar.xz)',
        'filename' => 'php-5.6.8.tar.xz',
        'sha256' => '4c417387b88e100ca306adeda8051eb9fad93dae8da983f962dabf91a14b2b7b',
        'md5' => '',
        'date' => '16 Apr 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


      <p>The PHP development team announces the immediate availability of PHP
     5.6.8. Several bugs have been fixed some of them beeing security related, like CVE-2015-1351 and CVE-2015-1352.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.8 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.8">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '5.6.9' => 
  array (
    'version' => '5.6.9',
    'date' => '14 May 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 5.6.9 (tar.bz2)',
        'filename' => 'php-5.6.9.tar.bz2',
        'sha256' => '19d3b87b7b8bba3be24cf6d757d16b723a98881c3af8d15469fd25501e9abcb9',
        'md5' => '',
        'date' => '14 May 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 5.6.9 (tar.gz)',
        'filename' => 'php-5.6.9.tar.gz',
        'sha256' => '49527ba66357fe65bcd463dfb8dcff1b8879419f88b3c334f50696a2aceacb87',
        'md5' => '',
        'date' => '14 May 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 5.6.9 (tar.xz)',
        'filename' => 'php-5.6.9.tar.xz',
        'sha256' => '1fac497b596f5e4e87d87a7ca90f8725e39a8ca3f9d7adb500fa83c4bb70a73f',
        'md5' => '',
        'date' => '14 May 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     5.6.9. Several bugs have been fixed.

     All PHP 5.6 users are encouraged to upgrade to this version.
     </p>

     <p>For source downloads of PHP 5.6.9 please visit our <a href="http://www.php.net/downloads/">downloads page</a>,
     Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.6.9">ChangeLog</a>.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.0' => 
  array (
    'version' => '7.0.0',
    'date' => '03 Dec 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.0 (tar.bz2)',
        'filename' => 'php-7.0.0.tar.bz2',
        'sha256' => 'a92a54306832167a39f7c0ec00524fc6f3f7d985c806caa7632561d0ddedfcea',
        'md5' => '',
        'date' => '03 Dec 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.0 (tar.gz)',
        'filename' => 'php-7.0.0.tar.gz',
        'sha256' => 'd6ae7b4a2e5c43a9945a97e83b6b3adfb7d0df0b91ef78b647a6dffefaa9c71b',
        'md5' => '',
        'date' => '03 Dec 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.0 (tar.xz)',
        'filename' => 'php-7.0.0.tar.xz',
        'sha256' => '7dbdda74c502960febe0544b3e3a7c430389a7a4260e94c73fd8ca26c33b8540',
        'md5' => '',
        'date' => '03 Dec 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.0. This release marks the start of the new major PHP 7 series.
     </p>
     <p>
     PHP 7.0.0 comes with a new version of the Zend Engine, numerous improvements
     and new features such as
     </p>
     <ul>
        <li>Improved performance: PHP 7 is up to twice as fast as PHP 5.6</li>
	<li>Significantly reduced memory usage</li>
        <li>Abstract Syntax Tree</li>
        <li>Consistent 64-bit support</li>
        <li>Improved Exception hierarchy</li>
	<li>Many fatal errors converted to Exceptions</li>
	<li>Secure random number generator</li>
        <li>Removed old and unsupported SAPIs and extensions</li>
        <li>The null coalescing operator (??)</li>
        <li>Return and Scalar Type Declarations</li>
        <li>Anonymous Classes</li>
	<li>Zero cost asserts</li>
     </ul>


     <p>
     The <a href="http://php.net/manual/migration70.php">migration guide</a> is available in the PHP Manual. Please consult
     it for the detailed list of new features and backward incompatible changes.
     </p>

     <p>
     The inconvenience of the release lateness in several time zones is caused by the need to ensure the
     compatibility with the latest OpenSSL 1.0.2e release. Thanks for the patience!
     </p>

     <p>
     It is not just a next major PHP version being released today.
     The release being introduced is an outcome of the almost two years development
     journey. It is a very special accomplishment of the core team. And, it is a
     result of incredible efforts of many active community members.
     Indeed, it is not just a final release being brought out today, it is the rise of
     a new PHP generation with an enormous potential.
     </p>

     <p>Congratulations everyone to this spectacular day for the PHP world!</p>
     <p>Grateful thanks to all the contributors and supporters!</p>


</announcement>',
      ),
    ),
  ),
  '7.0.1' => 
  array (
    'version' => '7.0.1',
    'date' => '17 Dec 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.1 (tar.bz2)',
        'filename' => 'php-7.0.1.tar.bz2',
        'sha256' => '04ce3bd1da001397b342c2219a5093be9ecbbc97f022e1e6a0ec2fedc3d93e42',
        'md5' => '',
        'date' => '17 Dec 2015',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.1 (tar.gz)',
        'filename' => 'php-7.0.1.tar.gz',
        'sha256' => 'd12aaba2bead056322aa53bd5fbe762b27a42d37f451cd42ff2e7a549ca21dbf',
        'md5' => '',
        'date' => '17 Dec 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.1 (tar.xz)',
        'filename' => 'php-7.0.1.tar.xz',
        'sha256' => '84fcb8b9c61f70db802d3b6636c6ba602470a375e593375c0c744483aa0c0357',
        'md5' => '',
        'date' => '17 Dec 2015',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.1. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.0.10' => 
  array (
    'version' => '7.0.10',
    'date' => '18 Aug 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.10 (tar.bz2)',
        'filename' => 'php-7.0.10.tar.bz2',
        'sha256' => '8055bbe5a736986931c0c6a08b765d6d778271ec7d2d56c50a1ad259ec09f6de',
        'md5' => '',
        'date' => '18 Aug 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.10 (tar.gz)',
        'filename' => 'php-7.0.10.tar.gz',
        'sha256' => '46216e05db09c0fffbf832e3b64f3722ccbdd6d4ae16d9791e41adf0a4b00641',
        'md5' => '',
        'date' => '18 Aug 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.10 (tar.xz)',
        'filename' => 'php-7.0.10.tar.xz',
        'sha256' => '348476ff7ba8d95a1e28e1059430c10470c5f8110f6d9133d30153dda4cdf56a',
        'md5' => '',
        'date' => '18 Aug 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.10. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.11' => 
  array (
    'version' => '7.0.11',
    'date' => '15 Sep 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.11 (tar.bz2)',
        'filename' => 'php-7.0.11.tar.bz2',
        'sha256' => 'f99b729dc1149858844b18af1e8c0de6dd1cdfdd52e22fbb4de2aa78bf9bf7f1',
        'md5' => '',
        'date' => '15 Sep 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.11 (tar.gz)',
        'filename' => 'php-7.0.11.tar.gz',
        'sha256' => '02d27b5d140dbad8d400a95af808e1e9ce87aa8d2a2100870734ba26e6700d79',
        'md5' => '',
        'date' => '15 Sep 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.11 (tar.xz)',
        'filename' => 'php-7.0.11.tar.xz',
        'sha256' => 'd4cccea8da1d27c11b89386f8b8e95692ad3356610d571253d00ca67d524c735',
        'md5' => '',
        'date' => '15 Sep 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.11. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.12' => 
  array (
    'version' => '7.0.12',
    'date' => '13 Oct 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.12 (tar.bz2)',
        'filename' => 'php-7.0.12.tar.bz2',
        'sha256' => '38c47294fe8fb239b0230dc63a93c3e4044f472ab93b5dff8b65feb4103a6a27',
        'md5' => '',
        'date' => '13 Oct 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.12 (tar.gz)',
        'filename' => 'php-7.0.12.tar.gz',
        'sha256' => 'c4693cc363b4bbc7224294cc94faf3598e616cbe8540dd6975f68c7d3c52682f',
        'md5' => '',
        'date' => '13 Oct 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.12 (tar.xz)',
        'filename' => 'php-7.0.12.tar.xz',
        'sha256' => 'f3d6c49e1c242e5995dec15e503fde996c327eb86cd7ec45c690e93c971b83ff',
        'md5' => '',
        'date' => '13 Oct 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.12. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.0.13' => 
  array (
    'version' => '7.0.13',
    'date' => '10 Nov 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.13 (tar.bz2)',
        'filename' => 'php-7.0.13.tar.bz2',
        'sha256' => 'd090bb523812117ec0c08d8f0b5c5f0616aa7a29a2eeee0374efe53a7cfe88c1',
        'md5' => '',
        'date' => '10 Nov 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.13 (tar.gz)',
        'filename' => 'php-7.0.13.tar.gz',
        'sha256' => 'c8d8cf1b29e7f7e89be9ee64f453cb7ef6d20e1d13a83cba037bd654ef2da42c',
        'md5' => '',
        'date' => '10 Nov 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.13 (tar.xz)',
        'filename' => 'php-7.0.13.tar.xz',
        'sha256' => '357ba7f93975d7d836abed0852dc3ed96a988af539e87750613294cbee82f1bf',
        'md5' => '',
        'date' => '10 Nov 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.13. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.0.14' => 
  array (
    'version' => '7.0.14',
    'date' => '08 Dec 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.14 (tar.bz2)',
        'filename' => 'php-7.0.14.tar.bz2',
        'sha256' => 'fbc4369a0d42b55fd1ce75eb4f3d17b012da754a67567d8e3288fbfbb7490534',
        'md5' => '',
        'date' => '08 Dec 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.14 (tar.gz)',
        'filename' => 'php-7.0.14.tar.gz',
        'sha256' => '320cfd2184e7252d3d77eae5d5474554fa04ab9fbee7c6094c07e8bd3b5b632b',
        'md5' => '',
        'date' => '08 Dec 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.14 (tar.xz)',
        'filename' => 'php-7.0.14.tar.xz',
        'sha256' => '0f1dff6392a1cc2ed126b9695f580a2ed77eb09d2c23b41cabfb41e6f27a8c89',
        'md5' => '',
        'date' => '08 Dec 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.14. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.15' => 
  array (
    'version' => '7.0.15',
    'date' => '19 Jan 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.15 (tar.bz2)',
        'filename' => 'php-7.0.15.tar.bz2',
        'sha256' => 'a8c8f947335683fa6dd1b7443ed70f2a42bc33e8b6c215f139138cee89e47dd9',
        'md5' => '',
        'date' => '19 Jan 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.15 (tar.gz)',
        'filename' => 'php-7.0.15.tar.gz',
        'sha256' => 'c24324c6d4bf27e8bc1d12da0aae4f15a43c8374f681e23e9b1e67f5b719c3a6',
        'md5' => '',
        'date' => '19 Jan 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.15 (tar.xz)',
        'filename' => 'php-7.0.15.tar.xz',
        'sha256' => '300364d57fc4a6176ff7d52d390ee870ab6e30df121026649f8e7e0b9657fe93',
        'md5' => '',
        'date' => '19 Jan 2017',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.15. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.16' => 
  array (
    'version' => '7.0.16',
    'date' => '16 Feb 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.16 (tar.bz2)',
        'filename' => 'php-7.0.16.tar.bz2',
        'sha256' => '83c5f57575dc0feca563af529d6f1d60183bf9c2c13e98a6da131fbd0a3597ab',
        'md5' => '',
        'date' => '16 Feb 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.16 (tar.gz)',
        'filename' => 'php-7.0.16.tar.gz',
        'sha256' => 'bc6709dc7612957d0533c09c9c8a9c2e7c4fd9d64e697707bb1b39670eab61d4',
        'md5' => '',
        'date' => '16 Feb 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.16 (tar.xz)',
        'filename' => 'php-7.0.16.tar.xz',
        'sha256' => '244ac39bc657448962860aa7a590e4417f68513ad5e86ee2727b1328b0537309',
        'md5' => '',
        'date' => '16 Feb 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.16. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.17' => 
  array (
    'version' => '7.0.17',
    'date' => '30 Mar 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.17 (tar.bz2)',
        'filename' => 'php-7.0.17.tar.bz2',
        'sha256' => 'aee503926b96d807692fac3e0fd64e3259788f5139819a983152679cb6e91d4b',
        'md5' => '',
        'date' => '30 Mar 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.17 (tar.gz)',
        'filename' => 'php-7.0.17.tar.gz',
        'sha256' => '1f42ffe9895dad746baf4a0e8d81f2272f55fdef66cf298ac911d8791ceb1e80',
        'md5' => '',
        'date' => '30 Mar 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.17 (tar.xz)',
        'filename' => 'php-7.0.17.tar.xz',
        'sha256' => '471c16fcdd6a5e1a37199e97bcaeea6117626229785185be7532aaa7c6ee04be',
        'md5' => '',
        'date' => '30 Mar 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.17. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.18' => 
  array (
    'version' => '7.0.18',
    'date' => '13 Apr 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.18 (tar.bz2)',
        'filename' => 'php-7.0.18.tar.bz2',
        'sha256' => 'b20cc63d507032b39d8bb14cb64784e460b0e47997e90a8704b703bcbb233fd1',
        'md5' => '',
        'date' => '13 Apr 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.18 (tar.gz)',
        'filename' => 'php-7.0.18.tar.gz',
        'sha256' => 'e0fb336749d72e6c9cfcebb9b48497f004fa99f93b68c21cb3eb657053665e1d',
        'md5' => '',
        'date' => '13 Apr 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.18 (tar.xz)',
        'filename' => 'php-7.0.18.tar.xz',
        'sha256' => '679cffcdf2495dee5ab89bda595e678a1096136678b3a1d08f1f57ba347c234d',
        'md5' => '',
        'date' => '13 Apr 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.18. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.19' => 
  array (
    'version' => '7.0.19',
    'date' => '11 May 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.19 (tar.bz2)',
        'filename' => 'php-7.0.19.tar.bz2',
        'sha256' => '0f3ac0afc02aec22f6b1659045da9287453e9309439d0499622bc8e94a7f7d59',
        'md5' => '',
        'date' => '11 May 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.19 (tar.gz)',
        'filename' => 'php-7.0.19.tar.gz',
        'sha256' => '4b4120acdbb8cbf5f7a18625c2eb5cdd2fdb4fc69a4831bc7ffdfd1ee78b1ce0',
        'md5' => '',
        'date' => '11 May 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.19 (tar.xz)',
        'filename' => 'php-7.0.19.tar.xz',
        'sha256' => '640e5e3377d15a6d19adce2b94a9d876eeddabdb862d154a5e347987f4225ef6',
        'md5' => '',
        'date' => '11 May 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.19. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.2' => 
  array (
    'version' => '7.0.2',
    'date' => '07 Jan 2015',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.2 (tar.bz2)',
        'filename' => 'php-7.0.2.tar.bz2',
        'sha256' => '9b1b75fbd9c92c6b0003b234e550965038826d11ea1f430bf279964da9da2236',
        'md5' => '',
        'date' => '07 Jan 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.2 (tar.gz)',
        'filename' => 'php-7.0.2.tar.gz',
        'sha256' => '040198aef3dc5f17c253c1282160aabc6a05ca0b18b3d6fc9213970363083412',
        'md5' => '',
        'date' => '07 Jan 2015',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.2 (tar.xz)',
        'filename' => 'php-7.0.2.tar.xz',
        'sha256' => '556121271a34c442b48e3d7fa3d3bbb4413d91897abbb92aaeced4a7df5f2ab2',
        'md5' => '',
        'date' => '07 Jan 2015',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.2. 31 reported bugs has been fixed, including 6 security related issues.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.20' => 
  array (
    'version' => '7.0.20',
    'date' => '08 Jun 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.20 (tar.bz2)',
        'filename' => 'php-7.0.20.tar.bz2',
        'sha256' => 'cdfddfe01cc615218e333e34a1c761c9ef8fdf5199b27617264a02705eda7fc3',
        'md5' => '',
        'date' => '08 Jun 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.20 (tar.gz)',
        'filename' => 'php-7.0.20.tar.gz',
        'sha256' => 'b44947f0c1926928d5c2f176506b878c32b5cd09ce3b5b52bbbecf4328ab812d',
        'md5' => '',
        'date' => '08 Jun 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.20 (tar.xz)',
        'filename' => 'php-7.0.20.tar.xz',
        'sha256' => '31b9cf1fb83fe3cd82c2f6603a0ae81ae6abacb5286827e362d8f85e68908e0a',
        'md5' => '',
        'date' => '08 Jun 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.20. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.21' => 
  array (
    'version' => '7.0.21',
    'date' => '06 Jul 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.21 (tar.bz2)',
        'filename' => 'php-7.0.21.tar.bz2',
        'sha256' => '2ba133c392de6f86aacced8c54e0adefd1c81d3840ac323b9926b8ed3dc6231f',
        'md5' => '',
        'date' => '06 Jul 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.21 (tar.gz)',
        'filename' => 'php-7.0.21.tar.gz',
        'sha256' => 'f2f05f629dd02c75834ddf033916bd5ff92a720602839d81fd8b6d90e37b6225',
        'md5' => '',
        'date' => '06 Jul 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.21 (tar.xz)',
        'filename' => 'php-7.0.21.tar.xz',
        'sha256' => '6713fe3024365d661593235b525235045ef81f18d0043654658c9de1bcb8b9e3',
        'md5' => '',
        'date' => '06 Jul 2017',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.21. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.0.22' => 
  array (
    'version' => '7.0.22',
    'date' => '03 Aug 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.22 (tar.bz2)',
        'filename' => 'php-7.0.22.tar.bz2',
        'sha256' => '88e0b27f69abdd12ecde81f000c5a9ea479af7218456ea7f6557edb43c6dfdde',
        'md5' => '',
        'date' => '03 Aug 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.22 (tar.gz)',
        'filename' => 'php-7.0.22.tar.gz',
        'sha256' => '04292eaea0eeb75e9b6a36a3db8e90a3d43f939646fd9d7d1e083e5b70884383',
        'md5' => '',
        'date' => '03 Aug 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.22 (tar.xz)',
        'filename' => 'php-7.0.22.tar.xz',
        'sha256' => '408c3fbc235ec940433bfac1f3ed4bf797f61b4a1693b9fb0b6a04b2c1832501',
        'md5' => '',
        'date' => '03 Aug 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.22. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>
</announcement>',
      ),
    ),
  ),
  '7.0.23' => 
  array (
    'version' => '7.0.23',
    'date' => '31 Aug 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.23 (tar.bz2)',
        'filename' => 'php-7.0.23.tar.bz2',
        'sha256' => '6fe94cefc7d2c60ee2c1648b977beed756ad9cd0a7e4ea8bb8cf521d9355a09c',
        'md5' => '',
        'date' => '31 Aug 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.23 (tar.gz)',
        'filename' => 'php-7.0.23.tar.gz',
        'sha256' => 'd511089ecaf386f3ab752efba76558c03558afa6b5b3fe71d84881c76644b466',
        'md5' => '',
        'date' => '31 Aug 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.23 (tar.xz)',
        'filename' => 'php-7.0.23.tar.xz',
        'sha256' => '8e526e3551a58e00c8055fa4a72804aa1bd3ee1c0411b25bf1504cc4992609df',
        'md5' => '',
        'date' => '31 Aug 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.23. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.24' => 
  array (
    'version' => '7.0.24',
    'date' => '28 Sep 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.24 (tar.bz2)',
        'filename' => 'php-7.0.24.tar.bz2',
        'sha256' => '9bf91982694f178821c0aaf03563a20494873ece6933e2eeecfd76f325bdcf19',
        'md5' => '',
        'date' => '28 Sep 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.24 (tar.gz)',
        'filename' => 'php-7.0.24.tar.gz',
        'sha256' => '151015b578c14a4ab47d1e5894b36c85cf5655237599b805a08d106fe18a8c8e',
        'md5' => '',
        'date' => '28 Sep 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.24 (tar.xz)',
        'filename' => 'php-7.0.24.tar.xz',
        'sha256' => '4dba7aa365193c9229f89f1975fad4c01135d29922a338ffb4a27e840d6f1c98',
        'md5' => '',
        'date' => '28 Sep 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.24. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.25' => 
  array (
    'version' => '7.0.25',
    'date' => '26 Oct 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.25 (tar.bz2)',
        'filename' => 'php-7.0.25.tar.bz2',
        'sha256' => '95a24d96d126a196e1550e394182b43a6460cdd2026f1a77bef01e422415cc25',
        'md5' => '',
        'date' => '26 Oct 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.25 (tar.gz)',
        'filename' => 'php-7.0.25.tar.gz',
        'sha256' => '081b46bf588d38c636fd6cd1dab8855b6b3e171550d1e65f770f53aede594ee7',
        'md5' => '',
        'date' => '26 Oct 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.25 (tar.xz)',
        'filename' => 'php-7.0.25.tar.xz',
        'sha256' => '5cc14bd20fb2226f6d34465662425cd100441bde9042ea1cef2e4506d6ded8cc',
        'md5' => '',
        'date' => '26 Oct 2017',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.25. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.0.26' => 
  array (
    'version' => '7.0.26',
    'date' => '23 Nov 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.26 (tar.bz2)',
        'filename' => 'php-7.0.26.tar.bz2',
        'sha256' => '2590d722f7b23b6a903c5a00cf04e7ee728df79d10ae473e3a81ba41588509a7',
        'md5' => '',
        'date' => '23 Nov 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.26 (tar.gz)',
        'filename' => 'php-7.0.26.tar.gz',
        'sha256' => '04c345f7c9e3f1cd02f275bfec893a4e0290e724073f2f3d7282a219128b537c',
        'md5' => '',
        'date' => '23 Nov 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.26 (tar.xz)',
        'filename' => 'php-7.0.26.tar.xz',
        'sha256' => 'ed5cbb4bbb0ddef8985f100bba2e94002ad22a230b5da2dccfe148915df5f199',
        'md5' => '',
        'date' => '23 Nov 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.26. Several bugs have been fixed.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.27' => 
  array (
    'version' => '7.0.27',
    'date' => '04 Jan 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.27 (tar.bz2)',
        'filename' => 'php-7.0.27.tar.bz2',
        'sha256' => '99fa2563bb4c4c1cde9febe87cfe97324227d7b4b8828f2e936e507127394131',
        'md5' => '',
        'date' => '04 Jan 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.27 (tar.gz)',
        'filename' => 'php-7.0.27.tar.gz',
        'sha256' => '809c0181e970dd17c6a6cabbf64518e719c7253e7490f8e1279bc1e1fbdf7996',
        'md5' => '',
        'date' => '04 Jan 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.27 (tar.xz)',
        'filename' => 'php-7.0.27.tar.xz',
        'sha256' => '4b2bc823e806dbf7b62fe0b92b0d14b0c6e03f88c3fc5d96278416c54ce11f6c',
        'md5' => '',
        'date' => '04 Jan 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.27. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.28' => 
  array (
    'version' => '7.0.28',
    'date' => '01 Mar 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.28 (tar.bz2)',
        'filename' => 'php-7.0.28.tar.bz2',
        'sha256' => 'ae5491b4613f3710e3d09e688ba3d30d3acc1112c7b96a8703663b8a95063c7f',
        'md5' => '',
        'date' => '01 Mar 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.28 (tar.gz)',
        'filename' => 'php-7.0.28.tar.gz',
        'sha256' => 'cd2fd94feb0d5809ffb9d900138643fa74e70656436e5f2595b03239dd97aa9c',
        'md5' => '',
        'date' => '01 Mar 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.28 (tar.xz)',
        'filename' => 'php-7.0.28.tar.xz',
        'sha256' => 'e738ffce2c30bc0e84be9446af86bef0a0607d321f1a3d04bbfe2402fb5f6de0',
        'md5' => '',
        'date' => '01 Mar 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.28. This is a security release. One security bug was fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>
</announcement>',
      ),
    ),
  ),
  '7.0.29' => 
  array (
    'version' => '7.0.29',
    'date' => '29 Mar 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.29 (tar.bz2)',
        'filename' => 'php-7.0.29.tar.bz2',
        'sha256' => '989142d5c5ff7a11431254f9c1995235bad61a3364b99c966e11e06aa10d3fbc',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.29 (tar.gz)',
        'filename' => 'php-7.0.29.tar.gz',
        'sha256' => '5efe45e345f967cb20f9ff92cd514753872a65feffea1bf311c71864344bd8e8',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.29 (tar.xz)',
        'filename' => 'php-7.0.29.tar.xz',
        'sha256' => 'ca79d3ecc123bff4b623d4a1bbf5ad53ad39f5f2f5912fecc0ea97e95eba21cc',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.29. This is a security release. One security bug was fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>
</announcement>',
      ),
    ),
  ),
  '7.0.3' => 
  array (
    'version' => '7.0.3',
    'date' => '04 Feb 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.3 (tar.bz2)',
        'filename' => 'php-7.0.3.tar.bz2',
        'sha256' => '826823d754f09c779222a99becf9c53a4dc719dba2d777aca7807c6ca68e6fc6',
        'md5' => '',
        'date' => '04 Feb 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.3 (tar.gz)',
        'filename' => 'php-7.0.3.tar.gz',
        'sha256' => '5521df8db153aba35c90cf1a1829106b6bbdac32425216d440f9cc29f00a7c08',
        'md5' => '',
        'date' => '04 Feb 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.3 (tar.xz)',
        'filename' => 'php-7.0.3.tar.xz',
        'sha256' => '3af2b62617a0e46214500fc3e7f4a421067224913070844d3665d6cc925a1cca',
        'md5' => '',
        'date' => '04 Feb 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.3. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.30' => 
  array (
    'version' => '7.0.30',
    'date' => '26 Apr 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.30 (tar.bz2)',
        'filename' => 'php-7.0.30.tar.bz2',
        'sha256' => '213f38400c239b8fab2f6f59d6f4d4bd463d0a75bd4edf723dd4d5fea8850b50',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.30 (tar.gz)',
        'filename' => 'php-7.0.30.tar.gz',
        'sha256' => '54e7615205123b940b996300bf99c707c2317b6b78388061a204b23ab3388a26',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.30 (tar.xz)',
        'filename' => 'php-7.0.30.tar.xz',
        'sha256' => 'c90892fb68ab9b8476519658d3f78f6388f2609ae1309bdc2a2e1cc9f92dd686',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.30. This is a security release. Several security bugs have been fixed
     in this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.0.31' => 
  array (
    'version' => '7.0.31',
    'date' => '19 Jul 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.31 (tar.bz2)',
        'filename' => 'php-7.0.31.tar.bz2',
        'sha256' => '7e8bd73eced6e679a179d39571e8fee6c83e51c86f43338f65c2dc88c1106b91',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.31 (tar.gz)',
        'filename' => 'php-7.0.31.tar.gz',
        'sha256' => '182f36e5709837158bd4970ce57fe80735bdf79025133c00d6ad882d1c4d98dd',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.31 (tar.xz)',
        'filename' => 'php-7.0.31.tar.xz',
        'sha256' => '68f57b3f4587071fb54a620cb83a1cfb3f0bd4ee071e0ce3bf7046a5f2d2f3cf',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.31. This is a security release. Several security bugs have been fixed
     in this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.32' => 
  array (
    'version' => '7.0.32',
    'date' => '13 Sep 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.32 (tar.bz2)',
        'filename' => 'php-7.0.32.tar.bz2',
        'sha256' => '56e8d8cf9c08178afa8663589805f83bdb01634efd98131977038e24066492e1',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.32 (tar.gz)',
        'filename' => 'php-7.0.32.tar.gz',
        'sha256' => '08d13389f611ec55f3b9164347a97e410099238a3dd85946e556a288ce366fbe',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.32 (tar.xz)',
        'filename' => 'php-7.0.32.tar.xz',
        'sha256' => 'ff6f62afeb32c71b3b89ecbd42950ef6c5e0c329cc6e1c58ffac47e6f1f883c4',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.32. This is a security release. One security bug has been fixed
     in this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.33' => 
  array (
    'version' => '7.0.33',
    'date' => '10 Jan 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.33 (tar.bz2)',
        'filename' => 'php-7.0.33.tar.bz2',
        'sha256' => '4933ea74298a1ba046b0246fe3771415c84dfb878396201b56cb5333abe86f07',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.33 (tar.gz)',
        'filename' => 'php-7.0.33.tar.gz',
        'sha256' => 'd71a6ecb6b13dc53fed7532a7f8f949c4044806f067502f8fb6f9facbb40452a',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.33 (tar.xz)',
        'filename' => 'php-7.0.33.tar.xz',
        'sha256' => 'ab8c5be6e32b1f8d032909dedaaaa4bbb1a209e519abb01a52ce3914f9a13d96',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



<p>The PHP development team announces the immediate availability of PHP
7.0.33. Five security-related issues were fixed in this release.
All PHP 7.0 users are encouraged to upgrade to this version.
</p>


<p>Please note that according to the <a href="http://php.net/supported-versions.php">PHP version support timelines</a>,
PHP 7.0.33 is the last scheduled release of PHP 7.0 branch. There may be additional release if we discover
important security issues that warrant it, otherwise this release will be the final one in the PHP 7.0 branch.
If your PHP installation is based on PHP 7.0, it may be a good time to start making the plans for the upgrade
to PHP 7.1, PHP 7.2 or PHP 7.3.
</p>


</announcement>',
      ),
    ),
  ),
  '7.0.4' => 
  array (
    'version' => '7.0.4',
    'date' => '03 Mar 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.4 (tar.bz2)',
        'filename' => 'php-7.0.4.tar.bz2',
        'sha256' => 'a246c503709c189ba8e1e22ed2cb22abc27da43a997ff1b3318e181baf529dcc',
        'md5' => '',
        'date' => '03 Mar 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.4 (tar.gz)',
        'filename' => 'php-7.0.4.tar.gz',
        'sha256' => 'f6cdac2fd37da0ac0bbcee0187d74b3719c2f83973dfe883d5cde81c356fe0a8',
        'md5' => '',
        'date' => '03 Mar 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.4 (tar.xz)',
        'filename' => 'php-7.0.4.tar.xz',
        'sha256' => '584e0e374e357a71b6e95175a2947d787453afc7f9ab7c55651c10491c4df532',
        'md5' => '',
        'date' => '03 Mar 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.4. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.0.5' => 
  array (
    'version' => '7.0.5',
    'date' => '31 Mar 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.5 (tar.bz2)',
        'filename' => 'php-7.0.5.tar.bz2',
        'sha256' => '2c09af7fe64537ea795f098b9b542ead407ef83f7cdc65b3787115ccbbb51de9',
        'md5' => '',
        'date' => '31 Mar 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.5 (tar.gz)',
        'filename' => 'php-7.0.5.tar.gz',
        'sha256' => 'f9d93419031b4df663fc48f03b8a833545de8776225e46637563e2be6029908d',
        'md5' => '',
        'date' => '31 Mar 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.5 (tar.xz)',
        'filename' => 'php-7.0.5.tar.xz',
        'sha256' => 'c41f1a03c24119c0dd9b741cdb67880486e64349fc33527767f6dc28d3803abb',
        'md5' => '',
        'date' => '31 Mar 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.5. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.6' => 
  array (
    'version' => '7.0.6',
    'date' => '28 Apr 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.6 (tar.bz2)',
        'filename' => 'php-7.0.6.tar.bz2',
        'sha256' => '14ddf192a9965c858c1e742a61456be2f34a4db87556172c0d76f08de96329b7',
        'md5' => '',
        'date' => '28 Apr 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.6 (tar.gz)',
        'filename' => 'php-7.0.6.tar.gz',
        'sha256' => 'f6b47cb3e02530d96787ae5c7888aefbd1db6ae4164d68b88808ee6f4da94277',
        'md5' => '',
        'date' => '28 Apr 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.6 (tar.xz)',
        'filename' => 'php-7.0.6.tar.xz',
        'sha256' => '1b237a9455e5476a425dbb9d99966bad68107747c601958cb9558a7fb49ab419',
        'md5' => '',
        'date' => '28 Apr 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.6. This is a security release. Several security bugs were fixed in
     this release, including</p>
     <ul>
         <li>CVE-2016-3078</li>
         <li>CVE-2016-3074</li>
     </ul>
     <p>
     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>

</announcement>',
      ),
    ),
  ),
  '7.0.7' => 
  array (
    'version' => '7.0.7',
    'date' => '26 May 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.7 (tar.bz2)',
        'filename' => 'php-7.0.7.tar.bz2',
        'sha256' => '474f2925c4782b94016e3afbb17b14ff9cc6f4fdb6f6e231b36a378bb18a3d1a',
        'md5' => '',
        'date' => '26 May 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.7 (tar.gz)',
        'filename' => 'php-7.0.7.tar.gz',
        'sha256' => '66282ff4a9f88fe9607d9574e15bf335885b964245591a1740adb3f79c514a67',
        'md5' => '',
        'date' => '26 May 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.7 (tar.xz)',
        'filename' => 'php-7.0.7.tar.xz',
        'sha256' => '9cc64a7459242c79c10e79d74feaf5bae3541f604966ceb600c3d2e8f5fe4794',
        'md5' => '',
        'date' => '26 May 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.7. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.0.8' => 
  array (
    'version' => '7.0.8',
    'date' => '23 Jun 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.8 (tar.bz2)',
        'filename' => 'php-7.0.8.tar.bz2',
        'sha256' => '66dc7ba388490e07b1313fe3a06b1fa822e1310585fe29f4909995f131e27c8d',
        'md5' => '',
        'date' => '23 Jun 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.8 (tar.gz)',
        'filename' => 'php-7.0.8.tar.gz',
        'sha256' => '1f024fa6d87594b99fa312e3185c357dcffa42e07d21c726f41d1fa6f773720b',
        'md5' => '',
        'date' => '23 Jun 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.8 (tar.xz)',
        'filename' => 'php-7.0.8.tar.xz',
        'sha256' => '0a2142c458b0846f556b16da1c927d74c101aa951bb840549abe5c58584fb394',
        'md5' => '',
        'date' => '23 Jun 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.8. This is a security release. Several security bugs were fixed in
     this release.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.0.9' => 
  array (
    'version' => '7.0.9',
    'date' => '21 Jul 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.0.9 (tar.bz2)',
        'filename' => 'php-7.0.9.tar.bz2',
        'sha256' => '2ee6968b5875f2f38700c58a189aad859a6a0b85fc337aa102ec2dc3652c3b7b',
        'md5' => '',
        'date' => '21 Jul 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.0.9 (tar.gz)',
        'filename' => 'php-7.0.9.tar.gz',
        'sha256' => '93895a6a610c94751c890e5ee91a7f4bc0eae476b95fe30425d13f7ae88753d5',
        'md5' => '',
        'date' => '21 Jul 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.0.9 (tar.xz)',
        'filename' => 'php-7.0.9.tar.xz',
        'sha256' => '970c322ba3e472cb0264b8ba9d4d92e87918da5d0cca53c4aba2a70545b8626d',
        'md5' => '',
        'date' => '21 Jul 2016',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.0.9. This is a security release. Several security bugs were fixed in
     this release, including the HTTP_PROXY issue.

     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.1.0' => 
  array (
    'version' => '7.1.0',
    'date' => '01 Dec 2016',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.0 (tar.bz2)',
        'filename' => 'php-7.1.0.tar.bz2',
        'sha256' => '68bcfd7deed5b3474d81dec9f74d122058327e2bed0ac25bbc9ec70995228e61',
        'md5' => '',
        'date' => '01 Dec 2016',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.0 (tar.gz)',
        'filename' => 'php-7.1.0.tar.gz',
        'sha256' => '9e84c5b13005c56374730edf534fe216f6a2e63792a9703d4b894e770bbccbae',
        'md5' => '',
        'date' => '01 Dec 2016',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.0 (tar.xz)',
        'filename' => 'php-7.1.0.tar.xz',
        'sha256' => 'a810b3f29c21407c24caa88f50649320d20ba6892ae1923132598b8a0ca145b6',
        'md5' => '',
        'date' => '01 Dec 2016',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP 7.1.0. This release is the first point release in the 7.x series.</p>

     <p>PHP 7.1.0 comes with numerous improvements and new features such as</p>

     <ul>
          <li><a href="https://wiki.php.net/rfc/nullable_types">Nullable types</a></li>
          <li><a href="https://wiki.php.net/rfc/void_return_type">Void return type</a></li>
          <li><a href="https://wiki.php.net/rfc/iterable">Iterable pseudo-type</a></li>
          <li><a href="https://wiki.php.net/rfc/class_const_visibility">Class constant visiblity modifiers</a></li>
          <li><a href="https://wiki.php.net/rfc/short_list_syntax">Square bracket syntax for <code>list()</code></a> and <a href="https://wiki.php.net/rfc/list_keys">the ability to specify keys in <code>list()</code></a></li>
          <li><a href="https://wiki.php.net/rfc/multiple-catch">Catching multiple exceptions types</a></li>
          <li><a href="https://wiki.php.net/rfc#php_71">Many more features and changesâ¦</a></li>
     </ul>

     <p>For source downloads of PHP 7.1.0 please visit our <a href="http://www.php.net/downloads/">downloads</a> page, Windows binaries can be found on the <a href="http://windows.php.net/download">PHP for Windows</a> site. The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-7.php#7.1.0">ChangeLog</a>.</p>

     <p>The <a href="http://php.net/manual/en/migration71.php">migration guide</a> is available in the PHP Manual. Please consult it for the detailed list of new features and backward incompatible changes.</p>

     <p>Many thanks to all the contributors and supporters!</p>


</announcement>',
      ),
    ),
  ),
  '7.1.1' => 
  array (
    'version' => '7.1.1',
    'date' => '19 Jan 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.1 (tar.bz2)',
        'filename' => 'php-7.1.1.tar.bz2',
        'sha256' => 'd791d39d7b54ec42441a05a5f06d68a495647d843210e3ae4f2c6adb99c675bc',
        'md5' => '',
        'date' => '19 Jan 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.1 (tar.gz)',
        'filename' => 'php-7.1.1.tar.gz',
        'sha256' => 'c136279d539c3c2c25176bf149c14913670e79bb27ee6b73e1cd69003985a70d',
        'md5' => '',
        'date' => '19 Jan 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.1 (tar.xz)',
        'filename' => 'php-7.1.1.tar.xz',
        'sha256' => 'b3565b0c1441064eba204821608df1ec7367abff881286898d900c2c2a5ffe70',
        'md5' => '',
        'date' => '19 Jan 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.1.1. Several bugs have been fixed.

     All PHP 7.1 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.1.10' => 
  array (
    'version' => '7.1.10',
    'date' => '28 Sep 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.10 (tar.bz2)',
        'filename' => 'php-7.1.10.tar.bz2',
        'sha256' => '0ee51b9b1ae7eca3e9558f772ce20cbacd1f76420009b3af630c87027f9a41af',
        'md5' => '',
        'date' => '28 Sep 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.10 (tar.gz)',
        'filename' => 'php-7.1.10.tar.gz',
        'sha256' => 'edc6a7c3fe89419525ce51969c5f48610e53613235bbef255c3a4db33b458083',
        'md5' => '',
        'date' => '28 Sep 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.10 (tar.xz)',
        'filename' => 'php-7.1.10.tar.xz',
        'sha256' => '2b8efa771a2ead0bb3ae67b530ca505b5b286adc873cca9ce97a6e1d6815c50b',
        'md5' => '',
        'date' => '28 Sep 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.10. This is a bugfix release, with several bug fixes included.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>


</announcement>',
      ),
    ),
  ),
  '7.1.11' => 
  array (
    'version' => '7.1.11',
    'date' => '26 Oct 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.11 (tar.bz2)',
        'filename' => 'php-7.1.11.tar.bz2',
        'sha256' => '7646d7de701fc969e3305eeeb2eddda3d46af6a88ee20ef4a47270c447228573',
        'md5' => '',
        'date' => '26 Oct 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.11 (tar.gz)',
        'filename' => 'php-7.1.11.tar.gz',
        'sha256' => 'de41b2c166bc5ec8ea96a337d4dd675c794f7b115a8a47bb04595c03dbbdf425',
        'md5' => '',
        'date' => '26 Oct 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.11 (tar.xz)',
        'filename' => 'php-7.1.11.tar.xz',
        'sha256' => '074093e9d7d21afedc5106904218a80a47b854abe368d2728ed22184c884893e',
        'md5' => '',
        'date' => '26 Oct 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.11. This is a bugfix release, with several bug fixes included.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>



</announcement>',
      ),
    ),
  ),
  '7.1.12' => 
  array (
    'version' => '7.1.12',
    'date' => '23 Nov 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.12 (tar.bz2)',
        'filename' => 'php-7.1.12.tar.bz2',
        'sha256' => 'f9ce3361ab99dce8f3f2fba663695ac9b18a3579bc8014dc280368d1577d87c4',
        'md5' => '',
        'date' => '23 Nov 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.12 (tar.gz)',
        'filename' => 'php-7.1.12.tar.gz',
        'sha256' => '188c67d8e424ce7a6fe93475aa64f53182c1d80ca3ac99439651ca91569d969c',
        'md5' => '',
        'date' => '23 Nov 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.12 (tar.xz)',
        'filename' => 'php-7.1.12.tar.xz',
        'sha256' => 'a0118850774571b1f2d4e30b4fe7a4b958ca66f07d07d65ebdc789c54ba6eeb3',
        'md5' => '',
        'date' => '23 Nov 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.12. This is a bugfix release, with several bug fixes included.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>

</announcement>',
      ),
    ),
  ),
  '7.1.13' => 
  array (
    'version' => '7.1.13',
    'date' => '4 Jan 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.13 (tar.bz2)',
        'filename' => 'php-7.1.13.tar.bz2',
        'sha256' => '35fda51d2d44600940185fd5818d336a79e77ab3c98e2bd075091f2f91cf98a1',
        'md5' => '',
        'date' => '4 Jan 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.13 (tar.gz)',
        'filename' => 'php-7.1.13.tar.gz',
        'sha256' => '12fcbf59c9eb9af215ef38815d5da39b9d74549092c34b0dfc31442699740ce9',
        'md5' => '',
        'date' => '4 Jan 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.13 (tar.xz)',
        'filename' => 'php-7.1.13.tar.xz',
        'sha256' => '1a0b3f2fb61959b57a3ee01793a77ed3f19bde5aa90c43dcacc85ea32f64fc10',
        'md5' => '',
        'date' => '4 Jan 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.13. This is a bugfix release, with several bug fixes included.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>




</announcement>',
      ),
    ),
  ),
  '7.1.14' => 
  array (
    'version' => '7.1.14',
    'date' => '1 Feb 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.14 (tar.bz2)',
        'filename' => 'php-7.1.14.tar.bz2',
        'sha256' => '63b2fd139ed7656756b0fa290bc42f8fff854723c3d2710a700e646370c581f4',
        'md5' => '',
        'date' => '1 Feb 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.14 (tar.gz)',
        'filename' => 'php-7.1.14.tar.gz',
        'sha256' => '8c7360209d255ee46d388bdcd43ef1a2d14b370c331be30ea628ece18a1e7683',
        'md5' => '',
        'date' => '1 Feb 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.14 (tar.xz)',
        'filename' => 'php-7.1.14.tar.xz',
        'sha256' => 'c09f0c1074f5689b492d79034adb84e6a6c6d08c6763c02282e6318d41156779',
        'md5' => '',
        'date' => '1 Feb 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.14. This is a bugfix release, with several bug fixes included.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>

</announcement>',
      ),
    ),
  ),
  '7.1.15' => 
  array (
    'version' => '7.1.15',
    'date' => '1 Mar 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.15 (tar.bz2)',
        'filename' => 'php-7.1.15.tar.bz2',
        'sha256' => 'e117a54738e9485de5fc75673d39dbe937dd87f0f9cc9e281960ef9b961adcbd',
        'md5' => '',
        'date' => '1 Mar 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.15 (tar.gz)',
        'filename' => 'php-7.1.15.tar.gz',
        'sha256' => '0669c68a52cbd2f1cfa83354918ed03b0bcaa34ed9bafaee7dfd343461b881d4',
        'md5' => '',
        'date' => '1 Mar 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.15 (tar.xz)',
        'filename' => 'php-7.1.15.tar.xz',
        'sha256' => '0e17192fb43532e4ebaa190ecec9c7e59deea7dadb7dab67b19c2081a68bd817',
        'md5' => '',
        'date' => '1 Mar 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.15. This is a security fix release, containing one security fix and many bug fixes.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>



</announcement>',
      ),
    ),
  ),
  '7.1.16' => 
  array (
    'version' => '7.1.16',
    'date' => '29 Mar 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.16 (tar.bz2)',
        'filename' => 'php-7.1.16.tar.bz2',
        'sha256' => '348e2af9c7c0f327a57a972674078777dfde189e2598acbcb8618b9645b0e7e5',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.16 (tar.gz)',
        'filename' => 'php-7.1.16.tar.gz',
        'sha256' => 'c8e6fed5b350b29a5b9eaa9fce7c5e8618629346e9a58212f3dc380046065442',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.16 (tar.xz)',
        'filename' => 'php-7.1.16.tar.xz',
        'sha256' => 'a5d67e477248a3911af7ef85c8400c1ba8cd632184186fd31070b96714e669f1',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.16. This is a security fix release, containing one security fix and many bug fixes.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>

</announcement>',
      ),
    ),
  ),
  '7.1.17' => 
  array (
    'version' => '7.1.17',
    'date' => '26 Apr 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.17 (tar.bz2)',
        'filename' => 'php-7.1.17.tar.bz2',
        'sha256' => 'e124e3ac552c50f3890ed981d07b2ee473cac961885e75186ded0bbb5b78dbcf',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.17 (tar.gz)',
        'filename' => 'php-7.1.17.tar.gz',
        'sha256' => 'aba44265bf814a020282afa63321323e1f81da61bd7318ab2b941857a15cb144',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.17 (tar.xz)',
        'filename' => 'php-7.1.17.tar.xz',
        'sha256' => '1a784806866e06367f7a5c88775d239d6f30041c7ce65a8232d03a3d4de56d56',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.17. This is a security fix release, containing many bugfixes.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>

</announcement>',
      ),
    ),
  ),
  '7.1.18' => 
  array (
    'version' => '7.1.18',
    'date' => '24 May 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.18 (tar.bz2)',
        'filename' => 'php-7.1.18.tar.bz2',
        'sha256' => '580e375515ede831a6d82e13c0ec25dd08b225c6d87dfc24d7cd5f3bd542bf8e',
        'md5' => '',
        'date' => '24 May 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.18 (tar.gz)',
        'filename' => 'php-7.1.18.tar.gz',
        'sha256' => '07c24ae4dd59d81d3dc0ce89025ae667979150e2ee0e9e30dd89e04e31d510fb',
        'md5' => '',
        'date' => '24 May 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.18 (tar.xz)',
        'filename' => 'php-7.1.18.tar.xz',
        'sha256' => '8bd91cea072ea5b368cc9b4533a1a683eb426abdacbf024bb6ffa9b799cd3b01',
        'md5' => '',
        'date' => '24 May 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.18.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>



</announcement>',
      ),
    ),
  ),
  '7.1.19' => 
  array (
    'version' => '7.1.19',
    'date' => '21 Jun 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.19 (tar.bz2)',
        'filename' => 'php-7.1.19.tar.bz2',
        'sha256' => '13c43e7be3040ad53f192b0770c7ed99e5b3e348dfc6674666179d557fd770f3',
        'md5' => '',
        'date' => '21 Jun 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.19 (tar.gz)',
        'filename' => 'php-7.1.19.tar.gz',
        'sha256' => 'e1ae477b72bed02cdcb04f0157b8f8767bd4f6030416ae06408b4f6d85ee66a1',
        'md5' => '',
        'date' => '21 Jun 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.19 (tar.xz)',
        'filename' => 'php-7.1.19.tar.xz',
        'sha256' => '7cab88f269b90a8a38dbcccf3ec0d5c6eba86122431a53eaa94405bbb60370a8',
        'md5' => '',
        'date' => '21 Jun 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.19.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>
</announcement>',
      ),
    ),
  ),
  '7.1.2' => 
  array (
    'version' => '7.1.2',
    'date' => '16 Feb 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.2 (tar.bz2)',
        'filename' => 'php-7.1.2.tar.bz2',
        'sha256' => 'e0f2214e2366434ee231156ba70cfefd0c59790f050d8727a3f1dc2affa67004',
        'md5' => '',
        'date' => '16 Feb 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.2 (tar.gz)',
        'filename' => 'php-7.1.2.tar.gz',
        'sha256' => 'e6773217c9c719ca22abb104ae3d437d53daceaf31faf2e5eeb1f9f5028005d8',
        'md5' => '',
        'date' => '16 Feb 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.2 (tar.xz)',
        'filename' => 'php-7.1.2.tar.xz',
        'sha256' => 'd815a0c39fd57bab1434a77ff0610fb507c22f790c66cd6f26e27030c4b3e971',
        'md5' => '',
        'date' => '16 Feb 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.1.2. Several bugs have been fixed.

     All PHP 7.1 users are encouraged to upgrade to this version.
     </p>
</announcement>',
      ),
    ),
  ),
  '7.1.20' => 
  array (
    'version' => '7.1.20',
    'date' => '16 Aug 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.20 (tar.bz2)',
        'filename' => 'php-7.1.20.tar.bz2',
        'sha256' => '3a1b476c88fb81254ea572e891a1d65053ab54068348e00c75e8b54fae691d45',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.20 (tar.gz)',
        'filename' => 'php-7.1.20.tar.gz',
        'sha256' => '77a2091f4ab50367a6c68274a0d92e0da9ecdbf428b280c9836c5c6d512da450',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.20 (tar.xz)',
        'filename' => 'php-7.1.20.tar.xz',
        'sha256' => 'cd7d1006201459d43fae0790cce4eb3451add5c87f4cadb13b228d4c179b850c',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



    <p>The PHP development team announces the immediate availability of PHP
     7.1.20. This is a security release. Several security bugs have been fixed
     in this release.

     All PHP 7.1 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.1.21' => 
  array (
    'version' => '7.1.21',
    'date' => '13 Sep 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.21 (tar.bz2)',
        'filename' => 'php-7.1.21.tar.bz2',
        'sha256' => 'c2409c574bde23763b48a96b93922f530156df044585ff60108bce7b27b19580',
        'md5' => '',
        'date' => '17 Aug 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.21 (tar.gz)',
        'filename' => 'php-7.1.21.tar.gz',
        'sha256' => '4b448ba9b3c81b88543c1e1fbef465391fecd64d7f19a744df26e9923295dd00',
        'md5' => '',
        'date' => '17 Aug 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.21 (tar.xz)',
        'filename' => 'php-7.1.21.tar.xz',
        'sha256' => 'd4da6dc69d3fe1e6b2b80f16b262f391037bfeb21213c966e026bd45d7ca2813',
        'md5' => '',
        'date' => '17 Aug 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



    <p>The PHP development team announces the immediate availability of PHP
     7.1.21. This is a bugfix release.

     All PHP 7.1 users are encouraged to upgrade to this version.
     </p>


</announcement>',
      ),
    ),
  ),
  '7.1.22' => 
  array (
    'version' => '7.1.22',
    'date' => '13 Sep 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.22 (tar.bz2)',
        'filename' => 'php-7.1.22.tar.bz2',
        'sha256' => 'c8e91f19c8aa810ae95f228ff31cf0e4805cb89f4c10870ee12c85491b26e763',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.22 (tar.gz)',
        'filename' => 'php-7.1.22.tar.gz',
        'sha256' => '1d275115593a33315647094a5a4ee9bd73c7960c08686cee35dc2e683a68b157',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.22 (tar.xz)',
        'filename' => 'php-7.1.22.tar.xz',
        'sha256' => '9194c9b3a592d8376fde837dde711ec01ee26f8607fc2884047ef6f7c089b15d',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



    <p>The PHP development team announces the immediate availability of PHP
     7.1.22. This is a security release.

     All PHP 7.1 users are encouraged to upgrade to this version.
     </p>



</announcement>',
      ),
    ),
  ),
  '7.1.23' => 
  array (
    'version' => '7.1.23',
    'date' => '11 Oct 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.23 (tar.bz2)',
        'filename' => 'php-7.1.23.tar.bz2',
        'sha256' => '2d79aa86d8f0faa760a712a1d7be50b57838a9770c1dff34020876630c2ecc4b',
        'md5' => '',
        'date' => '11 Oct 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.23 (tar.gz)',
        'filename' => 'php-7.1.23.tar.gz',
        'sha256' => 'b839a4de32e6770d10b87c2495c070d09277fe61008804b2992466f0dcc5f0fa',
        'md5' => '',
        'date' => '11 Oct 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.23 (tar.xz)',
        'filename' => 'php-7.1.23.tar.xz',
        'sha256' => '227a3c76133c3dc1cec937989456cbd89ed00e68e7260c651900dbe1f5b798bc',
        'md5' => '',
        'date' => '11 Oct 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.1.23.
This is a bugfix release.</p>


</announcement>',
      ),
    ),
  ),
  '7.1.24' => 
  array (
    'version' => '7.1.24',
    'date' => '08 Nov 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.24 (tar.bz2)',
        'filename' => 'php-7.1.24.tar.bz2',
        'sha256' => '66de24e73c7f6006f090c1b187d6b218c8fa6a513acca4ff5c14b695a7391e0b',
        'md5' => '',
        'date' => '08 Nov 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.24 (tar.gz)',
        'filename' => 'php-7.1.24.tar.gz',
        'sha256' => '1e780b1af3eeb8fba9e5af6205c960184a0c3a0ef091aaa192e7b7d6b67405d0',
        'md5' => '',
        'date' => '08 Nov 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.24 (tar.xz)',
        'filename' => 'php-7.1.24.tar.xz',
        'sha256' => 'e70dcec0ae28b6bc308b78972ec15aa850808819cc765f505aa51e5a7e2fa5d7',
        'md5' => '',
        'date' => '08 Nov 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.1.24.
This is a bugfix release.</p>


</announcement>',
      ),
    ),
  ),
  '7.1.25' => 
  array (
    'version' => '7.1.25',
    'date' => '06 Dec 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.25 (tar.bz2)',
        'filename' => 'php-7.1.25.tar.bz2',
        'sha256' => '002cdc880ac7cfaede2c389204d366108847db0f3ac72edf1ba95c0577f9aaac',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.25 (tar.gz)',
        'filename' => 'php-7.1.25.tar.gz',
        'sha256' => '7dc40e202140e8b4fb3d992c15a68d98dc06b805e6b218497d260abbe51f5958',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.25 (tar.xz)',
        'filename' => 'php-7.1.25.tar.xz',
        'sha256' => '0fd8dad1903cd0b2d615a1fe4209f99e53b7292403c8ffa1919c0f4dd1eada88',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.1.25.
This is a security release.</p>




</announcement>',
      ),
    ),
  ),
  '7.1.26' => 
  array (
    'version' => '7.1.26',
    'date' => '10 Jan 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.26 (tar.bz2)',
        'filename' => 'php-7.1.26.tar.bz2',
        'sha256' => '5b351ca86bc7e4600778aaf1d61ab9e4e38864efa86ab4cc4d5b02ea7f542ae6',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.26 (tar.gz)',
        'filename' => 'php-7.1.26.tar.gz',
        'sha256' => '069315d3c3f964fd165bbbb3c2fc56005813e2cf97bed05055318dcc4e775328',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.26 (tar.xz)',
        'filename' => 'php-7.1.26.tar.xz',
        'sha256' => '10b7ae634c12852fae52a22dc2262e5f12418ad59fd20da2d00d71a212235d31',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.26. This is a security release which also contains several bug fixes.</p>





</announcement>',
      ),
    ),
  ),
  '7.1.27' => 
  array (
    'version' => '7.1.27',
    'date' => '07 Mar 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.27 (tar.bz2)',
        'filename' => 'php-7.1.27.tar.bz2',
        'sha256' => 'dad7ecd30941911528e471c555a01911a68aa9219696bfc1e005f8b669f4ec4b',
        'md5' => '',
        'date' => '07 Mar 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.27 (tar.gz)',
        'filename' => 'php-7.1.27.tar.gz',
        'sha256' => '353b9ed341048388cc95e6fa6dab587eee44a3d4d297989aa297936090864357',
        'md5' => '',
        'date' => '07 Mar 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.27 (tar.xz)',
        'filename' => 'php-7.1.27.tar.xz',
        'sha256' => '25672a3a6060eff37c865a0c84e284da50b7ee8cd57174c78f0ae244b90a96a8',
        'md5' => '',
        'date' => '07 Mar 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.27. This is a security release which also contains several bug fixes.</p>






</announcement>',
      ),
    ),
  ),
  '7.1.28' => 
  array (
    'version' => '7.1.28',
    'date' => '02 May 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.28 (tar.bz2)',
        'filename' => 'php-7.1.28.tar.bz2',
        'sha256' => '739e8733fe1fc5e69e6226da6dba7a31bacfd2e3871ad2c97a792638f22c54c9',
        'md5' => '',
        'date' => '04 Apr 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.28 (tar.gz)',
        'filename' => 'php-7.1.28.tar.gz',
        'sha256' => '4df587338d4c5dfe27050c7ac72a6b7583ecaee9d3fbfc03427667a86e081999',
        'md5' => '',
        'date' => '04 Apr 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.28 (tar.xz)',
        'filename' => 'php-7.1.28.tar.xz',
        'sha256' => '45131497ec0a947e3f9145c000e8fcc1f86b46518ee3f6810d80efa2d39521e2',
        'md5' => '',
        'date' => '04 Apr 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.28. This is a security release.</p>



</announcement>',
      ),
    ),
  ),
  '7.1.29' => 
  array (
    'version' => '7.1.29',
    'date' => '02 May 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.29 (tar.bz2)',
        'filename' => 'php-7.1.29.tar.bz2',
        'sha256' => '8528d17efe82662dc740d96ddb32217f4e161a597d709f19571b0c82fbb88335',
        'md5' => '',
        'date' => '02 May 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.29 (tar.gz)',
        'filename' => 'php-7.1.29.tar.gz',
        'sha256' => 'bdd0e1707100c8b87f1be516f5b95a26e3eb4114d4316eaf0663bf292ead35bb',
        'md5' => '',
        'date' => '02 May 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.29 (tar.xz)',
        'filename' => 'php-7.1.29.tar.xz',
        'sha256' => 'b9a9b094687edc2d9c9553d5531e38e249b569127cf3b32fe1c84280509746fb',
        'md5' => '',
        'date' => '02 May 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.29. This is a security release.</p>




</announcement>',
      ),
    ),
  ),
  '7.1.3' => 
  array (
    'version' => '7.1.3',
    'date' => '16 Mar 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.3 (tar.bz2)',
        'filename' => 'php-7.1.3.tar.bz2',
        'sha256' => 'c145924d91b7a253eccc31f8d22f15b61589cd24d78105e56240c1bb6413b94f',
        'md5' => '',
        'date' => '16 Mar 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.3 (tar.gz)',
        'filename' => 'php-7.1.3.tar.gz',
        'sha256' => '4bfadd0012b966eced448497272150ffeede13136a961aacb9e71553b8e929ec',
        'md5' => '',
        'date' => '16 Mar 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.3 (tar.xz)',
        'filename' => 'php-7.1.3.tar.xz',
        'sha256' => 'e4887c2634778e37fd962fbdf5c4a7d32cd708482fe07b448804625570cb0bb0',
        'md5' => '',
        'date' => '16 Mar 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



     <p>The PHP development team announces the immediate availability of PHP
     7.1.3. Several bugs have been fixed.

     All PHP 7.1 users are encouraged to upgrade to this version.
     </p>
</announcement>',
      ),
    ),
  ),
  '7.1.30' => 
  array (
    'version' => '7.1.30',
    'date' => '30 May 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.30 (tar.bz2)',
        'filename' => 'php-7.1.30.tar.bz2',
        'sha256' => '664850774fca19d2710b9aa35e9ae91214babbde9cd8d27fd3479cc97171ecb3',
        'md5' => '',
        'date' => '30 May 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.30 (tar.gz)',
        'filename' => 'php-7.1.30.tar.gz',
        'sha256' => 'a604edf85d5dfc28e6ff3016dad3954c50b93db69afc42295178b4fdf42e026c',
        'md5' => '',
        'date' => '30 May 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.30 (tar.xz)',
        'filename' => 'php-7.1.30.tar.xz',
        'sha256' => '6310599811536dbe87e4bcf212bf93196bdfaff519d0c821e4c0068efd096a7c',
        'md5' => '',
        'date' => '30 May 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.30. This is a security release.</p>



</announcement>',
      ),
    ),
  ),
  '7.1.31' => 
  array (
    'version' => '7.1.31',
    'date' => '01 Aug 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.31 (tar.bz2)',
        'filename' => 'php-7.1.31.tar.bz2',
        'sha256' => '767573c2b732e78cc647602ec61fc948941a941a4071db59b522cf5e076825dd',
        'md5' => '',
        'date' => '01 Aug 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.31 (tar.gz)',
        'filename' => 'php-7.1.31.tar.gz',
        'sha256' => 'ea0558735653b9ce63e9cea41dd8f0d0b90dba6c39d39dd9a6aad5cc58b0bdfc',
        'md5' => '',
        'date' => '01 Aug 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.31 (tar.xz)',
        'filename' => 'php-7.1.31.tar.xz',
        'sha256' => '5cb53b63592ec4361f0ab12c684b10430344821a024881a387ead4299df78fa5',
        'md5' => '',
        'date' => '01 Aug 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.31. This is a security release.</p>



</announcement>',
      ),
    ),
  ),
  '7.1.32' => 
  array (
    'version' => '7.1.32',
    'date' => '29 Aug 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.32 (tar.bz2)',
        'filename' => 'php-7.1.32.tar.bz2',
        'sha256' => 'd7c7a1adddc75ac17f63349e966db25930b6b3ce736640349bea9e10909cab7a',
        'md5' => '',
        'date' => '29 Aug 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.32 (tar.gz)',
        'filename' => 'php-7.1.32.tar.gz',
        'sha256' => '6e51a2fc610352438b2a1c40310468a1e2b5baf2fff43be77f9f408a9111590c',
        'md5' => '',
        'date' => '29 Aug 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.32 (tar.xz)',
        'filename' => 'php-7.1.32.tar.xz',
        'sha256' => '7f38b5bdaae3184d325a8c70e86c010afcc33651d15faafe277a0db6d2ea2741',
        'md5' => '',
        'date' => '29 Aug 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.32. This is a security release.</p>


</announcement>',
      ),
    ),
  ),
  '7.1.33' => 
  array (
    'version' => '7.1.33',
    'date' => '24 Oct 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.33 (tar.bz2)',
        'filename' => 'php-7.1.33.tar.bz2',
        'sha256' => '95a5e5f2e2b79b376b737a82d9682c91891e60289fa24183463a2aca158f4f4b',
        'md5' => '',
        'date' => '24 Oct 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.33 (tar.gz)',
        'filename' => 'php-7.1.33.tar.gz',
        'sha256' => '0055f368ffefe51d5a4483755bd17475e88e74302c08b727952831c5b2682ea2',
        'md5' => '',
        'date' => '24 Oct 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.33 (tar.xz)',
        'filename' => 'php-7.1.33.tar.xz',
        'sha256' => 'bd7c0a9bd5433289ee01fd440af3715309faf583f75832b64fe169c100d52968',
        'md5' => '',
        'date' => '24 Oct 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.33. This is a security release.</p>





</announcement>',
      ),
    ),
  ),
  '7.1.4' => 
  array (
    'version' => '7.1.4',
    'date' => '13 Apr 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.4 (tar.bz2)',
        'filename' => 'php-7.1.4.tar.bz2',
        'sha256' => '39bf697836e2760b3a44ea322e9e5f1f5b1f07abeb0111f6495eff7538e25805',
        'md5' => '',
        'date' => '13 Apr 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.4 (tar.gz)',
        'filename' => 'php-7.1.4.tar.gz',
        'sha256' => 'ed0006c86de503684dde04c6dd811ea2354a3b6d10ebd9f0cb103dcd28f0e70f',
        'md5' => '',
        'date' => '13 Apr 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.4 (tar.xz)',
        'filename' => 'php-7.1.4.tar.xz',
        'sha256' => '71514386adf3e963df087c2044a0b3747900b8b1fc8da3a99f0a0ae9180d300b',
        'md5' => '',
        'date' => '13 Apr 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



    <p>The PHP development team announces the immediate availability of PHP
	7.1.4. Several bugs have been fixed.

	All PHP 7.1 users are encouraged to upgrade to this version.
	</p>



</announcement>',
      ),
    ),
  ),
  '7.1.5' => 
  array (
    'version' => '7.1.5',
    'date' => '11 May 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.5 (tar.bz2)',
        'filename' => 'php-7.1.5.tar.bz2',
        'sha256' => '28eaa4784f1bd8b7dc71206dc8c4375510199432dc17af6906b14d16b3058697',
        'md5' => '',
        'date' => '11 May 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.5 (tar.gz)',
        'filename' => 'php-7.1.5.tar.gz',
        'sha256' => 'f7ff8039f5c3a7da4d62a3cce6378280224acfa27ab5a5bee25b7439bce01c17',
        'md5' => '',
        'date' => '11 May 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.5 (tar.xz)',
        'filename' => 'php-7.1.5.tar.xz',
        'sha256' => 'd149a3c396c45611f5dc6bf14be190f464897145a76a8e5851cf18ff7094f6ac',
        'md5' => '',
        'date' => '11 May 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



    <p>The PHP development team announces the immediate availability of PHP
	7.1.5. Several bugs have been fixed.

	All PHP 7.1 users are encouraged to upgrade to this version.
	</p>


</announcement>',
      ),
    ),
  ),
  '7.1.6' => 
  array (
    'version' => '7.1.6',
    'date' => '08 Jun 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.6 (tar.bz2)',
        'filename' => 'php-7.1.6.tar.bz2',
        'sha256' => '6e3576ca77672a18461a4b089c5790647f1b2c19f82e4f5e94c962609aabffcf',
        'md5' => '',
        'date' => '08 Jun 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.6 (tar.gz)',
        'filename' => 'php-7.1.6.tar.gz',
        'sha256' => '7ff8c01af791c7e499ee77e1b82e4b1d56e379efe1f706b1203d48751481fd9f',
        'md5' => '',
        'date' => '08 Jun 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.6 (tar.xz)',
        'filename' => 'php-7.1.6.tar.xz',
        'sha256' => '01584dc521ab7ec84b502b61952f573652fe6aa00c18d6d844fb9209f14b245b',
        'md5' => '',
        'date' => '08 Jun 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.6. Several bugs have been fixed.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>


</announcement>',
      ),
    ),
  ),
  '7.1.7' => 
  array (
    'version' => '7.1.7',
    'date' => '06 Jul 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.7 (tar.bz2)',
        'filename' => 'php-7.1.7.tar.bz2',
        'sha256' => '079b6792987f38dc485f92258c04f9e02dedd593f9d260ebe725343f812d1ff8',
        'md5' => '',
        'date' => '06 Jul 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.7 (tar.gz)',
        'filename' => 'php-7.1.7.tar.gz',
        'sha256' => 'e0dbab8da601ee5119368d6f93dc1a86ad53b799d2f8c1209d6b827a2b259f92',
        'md5' => '',
        'date' => '06 Jul 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.7 (tar.xz)',
        'filename' => 'php-7.1.7.tar.xz',
        'sha256' => '0d42089729be7b2bb0308cbe189c2782f9cb4b07078c8a235495be5874fff729',
        'md5' => '',
        'date' => '06 Jul 2017',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.7. This is a security release with several bug fixes included.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>



</announcement>',
      ),
    ),
  ),
  '7.1.8' => 
  array (
    'version' => '7.1.8',
    'date' => '03 Aug 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.8 (tar.bz2)',
        'filename' => 'php-7.1.8.tar.bz2',
        'sha256' => '7064a00a9450565190890c7a4be04e646e0be73b2e0f8c46ae34419f343ca2f8',
        'md5' => '',
        'date' => '03 Aug 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.8 (tar.gz)',
        'filename' => 'php-7.1.8.tar.gz',
        'sha256' => '63517b3264f7cb17fb58e1ce60a6cd8903160239b7cf568d52024e9cf4d6cb04',
        'md5' => '',
        'date' => '03 Aug 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.8 (tar.xz)',
        'filename' => 'php-7.1.8.tar.xz',
        'sha256' => '8943858738604acb33ecedb865d6c4051eeffe4e2d06f3a3c8f794daccaa2aab',
        'md5' => '',
        'date' => '03 Aug 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.8. This is a bugfix release, with several bug fixes included.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>


</announcement>',
      ),
    ),
  ),
  '7.1.9' => 
  array (
    'version' => '7.1.9',
    'date' => '31 Aug 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.1.9 (tar.bz2)',
        'filename' => 'php-7.1.9.tar.bz2',
        'sha256' => '314dcc10dfdd7c4443edb4fe1e133a44f2b2a8351be8c9eb6ab9222d45fd9bae',
        'md5' => '',
        'date' => '31 Aug 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.1.9 (tar.gz)',
        'filename' => 'php-7.1.9.tar.gz',
        'sha256' => '499c31ad19b2ff553ae686ebf53749aa2351af7d955ee9f1986f144089561a4b',
        'md5' => '',
        'date' => '31 Aug 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.1.9 (tar.xz)',
        'filename' => 'php-7.1.9.tar.xz',
        'sha256' => 'ec9ca348dd51f19a84dc5d33acfff1fba1f977300604bdac08ed46ae2c281e8c',
        'md5' => '',
        'date' => '31 Aug 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.1.9. This is a bugfix release, with several bug fixes included.

  All PHP 7.1 users are encouraged to upgrade to this version.
  </p>

</announcement>',
      ),
    ),
  ),
  '7.2.0' => 
  array (
    'version' => '7.2.0',
    'date' => '30 Nov 2017',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.0 (tar.bz2)',
        'filename' => 'php-7.2.0.tar.bz2',
        'sha256' => '2bfefae4226b9b97879c9d33078e50bdb5c17f45ff6e255951062a529720c64a',
        'md5' => '',
        'date' => '30 Nov 2017',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.0 (tar.gz)',
        'filename' => 'php-7.2.0.tar.gz',
        'sha256' => '801876abd52e0dc58a44701344252035fd50702d8f510cda7fdb317ab79897bc',
        'md5' => '',
        'date' => '30 Nov 2017',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.0 (tar.xz)',
        'filename' => 'php-7.2.0.tar.xz',
        'sha256' => '87572a6b924670a5d4aac276aaa4a94321936283df391d702c845ffc112db095',
        'md5' => '',
        'date' => '30 Nov 2017',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



	<p>The PHP development team announces the immediate availability of PHP 7.2.0.
	This release marks the second feature update to the PHP 7 series.</p>

	<p>PHP 7.2.0 comes with numerous improvements and new features such as</p>

	<ul>
	<li><a href="https://wiki.php.net/rfc/convert_numeric_keys_in_object_array_casts">Convert numeric keys in object/array casts</a></li>
	<li><a href="https://wiki.php.net/rfc/counting_non_countables">Counting of non-countable objects</a></li>
	<li><a href="https://wiki.php.net/rfc/object-typehint">Object typehint</a></li>
	<li><a href="https://wiki.php.net/rfc/hash-context.as-resource">HashContext as Object</a></li>
	<li><a href="https://wiki.php.net/rfc/argon2_password_hash">Argon2 in password hash</a></li>
	<li><a href="https://wiki.php.net/rfc/improved-tls-constants">Improve TLS constants to sane values</a></li>
	<li><a href="https://wiki.php.net/rfc/mcrypt-viking-funeral">Mcrypt extension removed</a></li>
	<li><a href="https://wiki.php.net/rfc/libsodium">New sodium extension</a></li>
	</ul>

	<p>The <a href="http://php.net/manual/en/migration72.php">migration guide</a> is available in the PHP Manual.
	Please consult it for the detailed list of new features and backward incompatible changes.</p>

	<p>Many thanks to all the contributors and supporters!</p>


</announcement>',
      ),
    ),
  ),
  '7.2.1' => 
  array (
    'version' => '7.2.1',
    'date' => '4 Jan 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.1 (tar.bz2)',
        'filename' => 'php-7.2.1.tar.bz2',
        'sha256' => 'fe06793f268a4dd29cbc5f4ef415f01e786877152b02221ad7d18dbb6864eb79',
        'md5' => '',
        'date' => '4 Jan 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.1 (tar.gz)',
        'filename' => 'php-7.2.1.tar.gz',
        'sha256' => '8ecb2950571054a00687ccbd023874a4a075ccd1e2ec3dc00fc25ef589a77dba',
        'md5' => '',
        'date' => '4 Jan 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.1 (tar.xz)',
        'filename' => 'php-7.2.1.tar.xz',
        'sha256' => '6c6cf82fda6660ed963821eb0525214bb3547e8e29f447b9c15b2d8e6efd8822',
        'md5' => '',
        'date' => '4 Jan 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.2.1. This is a bugfix release, with several bug fixes included.</p>





</announcement>',
      ),
    ),
  ),
  '7.2.10' => 
  array (
    'version' => '7.2.10',
    'date' => '13 Sep 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.10 (tar.bz2)',
        'filename' => 'php-7.2.10.tar.bz2',
        'sha256' => '01b6129a0921a1636b07da9bc598a876669e45a462cef4b5844fc26862dbda9d',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.10 (tar.gz)',
        'filename' => 'php-7.2.10.tar.gz',
        'sha256' => 'd2d908b49b6005e65dcc46cdc986603a19b7ff103119fce8ddd4648586d430a4',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.10 (tar.xz)',
        'filename' => 'php-7.2.10.tar.xz',
        'sha256' => '01c2154a3a8e3c0818acbdbc1a956832c828a0380ce6d1d14fea495ea21804f0',
        'md5' => '',
        'date' => '13 Sep 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.10.
This is a security release which also contains several minor bug fixes.</p>



</announcement>',
      ),
    ),
  ),
  '7.2.11' => 
  array (
    'version' => '7.2.11',
    'date' => '11 Oct 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.11 (tar.bz2)',
        'filename' => 'php-7.2.11.tar.bz2',
        'sha256' => '4a0d7f402d07966b37a600796283f4ca4079d955d96d5bec024dd02009d8b4c5',
        'md5' => '',
        'date' => '11 Oct 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.11 (tar.gz)',
        'filename' => 'php-7.2.11.tar.gz',
        'sha256' => '180c63a9647c0a50d438b6bd5c7a8e7a11bceee8ad613a59d3ef15151fc158d4',
        'md5' => '',
        'date' => '11 Oct 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.11 (tar.xz)',
        'filename' => 'php-7.2.11.tar.xz',
        'sha256' => 'da1a705c0bc46410e330fc6baa967666c8cd2985378fb9707c01a8e33b01d985',
        'md5' => '',
        'date' => '11 Oct 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.11.
This is a bugfix release.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.12' => 
  array (
    'version' => '7.2.12',
    'date' => '08 Nov 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.12 (tar.bz2)',
        'filename' => 'php-7.2.12.tar.bz2',
        'sha256' => 'b724c4c20347b6105be109d98cc395a610174e8aadb506c82e8cb645b65ef6b6',
        'md5' => '',
        'date' => '08 Nov 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.12 (tar.gz)',
        'filename' => 'php-7.2.12.tar.gz',
        'sha256' => 'd7cabdf4e51db38121daf0d494dc074743b24b6c79e592037eeedd731f1719dd',
        'md5' => '',
        'date' => '08 Nov 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.12 (tar.xz)',
        'filename' => 'php-7.2.12.tar.xz',
        'sha256' => '989c04cc879ee71a5e1131db867f3c5102f1f7565f805e2bb8bde33f93147fe1',
        'md5' => '',
        'date' => '08 Nov 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.12.
This is a bugfix release.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.13' => 
  array (
    'version' => '7.2.13',
    'date' => '06 Dec 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.13 (tar.bz2)',
        'filename' => 'php-7.2.13.tar.bz2',
        'sha256' => '5b4a46fb76491bcd3eee1213773382e570f6ecf9b22d623b24e2822298b3e92d',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.13 (tar.gz)',
        'filename' => 'php-7.2.13.tar.gz',
        'sha256' => 'e563cee406b1ec96649c22ed2b35796cfe4e9aa9afa6eab6be4cf2fe5d724744',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.13 (tar.xz)',
        'filename' => 'php-7.2.13.tar.xz',
        'sha256' => '14b0429abdb46b65c843e5882c9a8c46b31dfbf279c747293b8ab950c2644a4b',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.13.
This is a security release.</p>



</announcement>',
      ),
    ),
  ),
  '7.2.14' => 
  array (
    'version' => '7.2.14',
    'date' => '07 Feb 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.14 (tar.bz2)',
        'filename' => 'php-7.2.14.tar.bz2',
        'sha256' => 'f56132d248c7bf1e0efc8a680a4b598d6ff73fc6b9c84b5d7b539ad8db7a6597',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.14 (tar.gz)',
        'filename' => 'php-7.2.14.tar.gz',
        'sha256' => '87e13d80b0c3a66bd463d1cb47dc101335884a0d192ab924f547f8aed7f70c08',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.14 (tar.xz)',
        'filename' => 'php-7.2.14.tar.xz',
        'sha256' => 'ee3f1cc102b073578a3c53ba4420a76da3d9f0c981c02b1664ae741ca65af84f',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.14.
This is a security release which also contains several minor bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.15' => 
  array (
    'version' => '7.2.15',
    'date' => '07 Mar 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.15 (tar.bz2)',
        'filename' => 'php-7.2.15.tar.bz2',
        'sha256' => 'c93e7616946a463911818c7e9f9e21276c7793fb8c7cb15877188dd0546d0554',
        'md5' => '',
        'date' => '07 Feb 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.15 (tar.gz)',
        'filename' => 'php-7.2.15.tar.gz',
        'sha256' => '9b13bde9f5a32d6f6bdb8b911bb55bb818d0c4073538f8dc48aa2deb560f55a3',
        'md5' => '',
        'date' => '07 Feb 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.15 (tar.xz)',
        'filename' => 'php-7.2.15.tar.xz',
        'sha256' => '75e90012faef700dffb29311f3d24fa25f1a5e0f70254a9b8d5c794e25e938ce',
        'md5' => '',
        'date' => '07 Feb 2019',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.15.
This is a bugfix release.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.16' => 
  array (
    'version' => '7.2.16',
    'date' => '04 Apr 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.16 (tar.bz2)',
        'filename' => 'php-7.2.16.tar.bz2',
        'sha256' => '2c0ad10053d58694cd14323248ecd6d9ba71d2733d160973c356ad01d09e7f38',
        'md5' => '',
        'date' => '07 Mar 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.16 (tar.gz)',
        'filename' => 'php-7.2.16.tar.gz',
        'sha256' => 'fb95e0bb69caba1dfd3bbac4eeef7a0485e5ea3d6191d35ad5657e18243aa02d',
        'md5' => '',
        'date' => '07 Mar 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.16 (tar.xz)',
        'filename' => 'php-7.2.16.tar.xz',
        'sha256' => '7d91ed3c1447c6358a3d53f84599ef854aca4c3622de7435e2df115bf196e482',
        'md5' => '',
        'date' => '07 Mar 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.16.
This is a security release which also contains several minor bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.17' => 
  array (
    'version' => '7.2.17',
    'date' => '02 May 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.17 (tar.bz2)',
        'filename' => 'php-7.2.17.tar.bz2',
        'sha256' => '91a811ab6f6d7acb312159cf6b0a3cffe968676fdebf042e9253245cc6094f75',
        'md5' => '',
        'date' => '04 Apr 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.17 (tar.gz)',
        'filename' => 'php-7.2.17.tar.gz',
        'sha256' => 'e1c6c2553cdb7edbfa65b89e259690ed01b31b12d57349c90b6ed00a410f62b5',
        'md5' => '',
        'date' => '04 Apr 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.17 (tar.xz)',
        'filename' => 'php-7.2.17.tar.xz',
        'sha256' => 'a3e5f51a9ae08813b3925bea3a4de02cd4906fcccf75646e267a213bb63bcf84',
        'md5' => '',
        'date' => '04 Apr 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.17.
This is a security release which also contains several minor bug fixes.</p>




</announcement>',
      ),
    ),
  ),
  '7.2.18' => 
  array (
    'version' => '7.2.18',
    'date' => '30 May 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.18 (tar.bz2)',
        'filename' => 'php-7.2.18.tar.bz2',
        'sha256' => 'fa1a27b12d1173207e81e798a48d4a7f77ba897f5c5200ac0b5d62aa8b4c4b72',
        'md5' => '',
        'date' => '02 May 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.18 (tar.gz)',
        'filename' => 'php-7.2.18.tar.gz',
        'sha256' => '48aeb291814f3cd3ba03c52e79e8e61896d0271fd4c228198f80a072e568f84b',
        'md5' => '',
        'date' => '02 May 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.18 (tar.xz)',
        'filename' => 'php-7.2.18.tar.xz',
        'sha256' => '9970dbb3ab1298c9e6aac54bebfa841c8ad14b18eead65594a68fa841364cb8d',
        'md5' => '',
        'date' => '02 May 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.18.
This is a security release which also contains several minor bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.19' => 
  array (
    'version' => '7.2.19',
    'date' => '30 May 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.19 (tar.bz2)',
        'filename' => 'php-7.2.19.tar.bz2',
        'sha256' => 'ebd0b1f375fe07ed4925acc213d2f5ef76a61bd5de174e7b666b98421a90a099',
        'md5' => '',
        'date' => '30 May 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.19 (tar.gz)',
        'filename' => 'php-7.2.19.tar.gz',
        'sha256' => '1cd2266a058f3224d3cba594540045542606996f026eeef96747f27f6b3d22b6',
        'md5' => '',
        'date' => '30 May 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.19 (tar.xz)',
        'filename' => 'php-7.2.19.tar.xz',
        'sha256' => '4ffa2404a88d60e993a9fe69f829ebec3eb1e006de41b6048ce5e91bbeaa9282',
        'md5' => '',
        'date' => '30 May 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.19.
This is a security release which also contains several minor bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.2' => 
  array (
    'version' => '7.2.2',
    'date' => '1 Feb 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.2 (tar.bz2)',
        'filename' => 'php-7.2.2.tar.bz2',
        'sha256' => 'f841ac58e17471f2241ea892b34edb01dc9b93ad9f661ffe4e3f1f476a8f4aee',
        'md5' => '',
        'date' => '1 Feb 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.2 (tar.gz)',
        'filename' => 'php-7.2.2.tar.gz',
        'sha256' => '5963df05fec21927c03fe9f7bf379be2d1eacde6c0f9dcde6143c7133e55abd4',
        'md5' => '',
        'date' => '1 Feb 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.2 (tar.xz)',
        'filename' => 'php-7.2.2.tar.xz',
        'sha256' => '47d7607d38a1d565fc43ea942c92229a7cd165f156737f210937e375b243cb11',
        'md5' => '',
        'date' => '1 Feb 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.2.2. This is a bugfix release, with several bug fixes included.</p>




</announcement>',
      ),
    ),
  ),
  '7.2.20' => 
  array (
    'version' => '7.2.20',
    'date' => '04 Jul 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.20 (tar.bz2)',
        'filename' => 'php-7.2.20.tar.bz2',
        'sha256' => '9fb829e54e54c483ae8892d1db0f7d79115cc698f2f3591a8a5e58d9410dca84',
        'md5' => '',
        'date' => '04 Jul 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.20 (tar.gz)',
        'filename' => 'php-7.2.20.tar.gz',
        'sha256' => 'd1dbf6f299514c9aa55b2995928b798b27c21811a0447f0688993cdf36be0749',
        'md5' => '',
        'date' => '04 Jul 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.20 (tar.xz)',
        'filename' => 'php-7.2.20.tar.xz',
        'sha256' => 'eff09da83e235c2ba25c85deea1d4f663bd71d50fd51ad11e1acebe26d733494',
        'md5' => '',
        'date' => '04 Jul 2019',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.20.
This is a bugfix release.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.21' => 
  array (
    'version' => '7.2.21',
    'date' => '01 Aug 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.21 (tar.bz2)',
        'filename' => 'php-7.2.21.tar.bz2',
        'sha256' => '343183a1be8336670171885c761d57ffcae99cbbcf1db43da7cb5565056b14ef',
        'md5' => '',
        'date' => '01 Aug 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.21 (tar.gz)',
        'filename' => 'php-7.2.21.tar.gz',
        'sha256' => '8327682bee4a8fd2edf5bbfcc393d986b945bec433fc74458d05e766701b313c',
        'md5' => '',
        'date' => '01 Aug 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.21 (tar.xz)',
        'filename' => 'php-7.2.21.tar.xz',
        'sha256' => 'de06aff019d8f5079115795bd7d8eedd4cd03daecb62d58abb18f492dd995c95',
        'md5' => '',
        'date' => '01 Aug 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.21.
This is a security release which also contains several minor bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.22' => 
  array (
    'version' => '7.2.22',
    'date' => '29 Aug 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.22 (tar.bz2)',
        'filename' => 'php-7.2.22.tar.bz2',
        'sha256' => 'c10a9883b586ada5ef1149f2571625b27efdcc3e70a04fbb9121979633b0f08a',
        'md5' => '',
        'date' => '29 Aug 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.22 (tar.gz)',
        'filename' => 'php-7.2.22.tar.gz',
        'sha256' => '6e2ccc77484c27971d4550b7071a57b79bc910bfb2d4a74a57ae2c18b78c3dc7',
        'md5' => '',
        'date' => '29 Aug 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.22 (tar.xz)',
        'filename' => 'php-7.2.22.tar.xz',
        'sha256' => 'eb597fcf8dc0a6211a42a6346de4f63ee166829a6df6d8ed767fe14be8d1c3a3',
        'md5' => '',
        'date' => '29 Aug 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.2.22. This is a security release which also contains several bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.23' => 
  array (
    'version' => '7.2.23',
    'date' => '26 Sep 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.23 (tar.bz2)',
        'filename' => 'php-7.2.23.tar.bz2',
        'sha256' => 'a17af3643d29d7e730f977e3776dc3e325d5ca00b361e41dbfc2368ebad5430d',
        'md5' => '',
        'date' => '26 Sep 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.23 (tar.gz)',
        'filename' => 'php-7.2.23.tar.gz',
        'sha256' => 'b32b426c84ff45154d6c11f00aff433bcac831a5c0a09bf0297075eefaea8fcc',
        'md5' => '',
        'date' => '26 Sep 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.23 (tar.xz)',
        'filename' => 'php-7.2.23.tar.xz',
        'sha256' => '74e045ec8ff26290db6a3688826dcdf43b87bc509e508e9cb76dab742804ca14',
        'md5' => '',
        'date' => '26 Sep 2019',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.2.23. This is a bugfix release.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.24' => 
  array (
    'version' => '7.2.24',
    'date' => '24 Oct 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.24 (tar.bz2)',
        'filename' => 'php-7.2.24.tar.bz2',
        'sha256' => 'a079934db63068bbcc9bbd2e7b916b9891fc97719862697e5f954c639984f603',
        'md5' => '',
        'date' => '24 Oct 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.24 (tar.gz)',
        'filename' => 'php-7.2.24.tar.gz',
        'sha256' => '01baf7a34c856d2c552121fbad7296a8cde18389ce83db32f18252bc1cee4dd6',
        'md5' => '',
        'date' => '24 Oct 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.24 (tar.xz)',
        'filename' => 'php-7.2.24.tar.xz',
        'sha256' => 'a6a6cc03388060aa5f8f9e45799b72bce1c7ed7b9d7b3f1187787202aad91d25',
        'md5' => '',
        'date' => '24 Oct 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.24.
This is a security release which also contains several minor bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.25' => 
  array (
    'version' => '7.2.25',
    'date' => '21 Nov 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.25 (tar.bz2)',
        'filename' => 'php-7.2.25.tar.bz2',
        'sha256' => '7cb336b1ed0f9d87f46bbcb7b3437ee252d0d5060c0fb1a985adb6cbc73a6b9e',
        'md5' => '',
        'date' => '21 Nov 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.25 (tar.gz)',
        'filename' => 'php-7.2.25.tar.gz',
        'sha256' => 'b2cb1bd46454d33b2c65c2fd559f464cd14e57dd47b953adf5caa77fdf0de52b',
        'md5' => '',
        'date' => '21 Nov 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.25 (tar.xz)',
        'filename' => 'php-7.2.25.tar.xz',
        'sha256' => '746efeedc38e6ff7b1ec1432440f5fa801537adf6cd21e4afb3f040e5b0760a9',
        'md5' => '',
        'date' => '21 Nov 2019',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.2.25. This is a bug fix release.</p>




</announcement>',
      ),
    ),
  ),
  '7.2.3' => 
  array (
    'version' => '7.2.3',
    'date' => '1 Mar 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.3 (tar.bz2)',
        'filename' => 'php-7.2.3.tar.bz2',
        'sha256' => '4a735aac0ba764dd8208ea29007d3916396c5292e003ba8d3bec49edcdd5bf92',
        'md5' => '',
        'date' => '1 Mar 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.3 (tar.gz)',
        'filename' => 'php-7.2.3.tar.gz',
        'sha256' => '5dc98f2266db40c5e4d9b5edf5e29e2449e819fff8321a07eb3830cf0b104bbb',
        'md5' => '',
        'date' => '1 Mar 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.3 (tar.xz)',
        'filename' => 'php-7.2.3.tar.xz',
        'sha256' => 'b3a94f1b562f413c0b96f54bc309706d83b29ac65d9b172bc7ed9fb40a5e651f',
        'md5' => '',
        'date' => '1 Mar 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP
7.2.3. This is a security release with also contains several minor bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.4' => 
  array (
    'version' => '7.2.4',
    'date' => '29 Mar 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.4 (tar.bz2)',
        'filename' => 'php-7.2.4.tar.bz2',
        'sha256' => '11658a0d764dc94023b9fb60d4b5eb75d438ad17981efe70abb0d0d09a447ef3',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.4 (tar.gz)',
        'filename' => 'php-7.2.4.tar.gz',
        'sha256' => '58e28e978baea0fe9009432bcb436934eaacccfdcb5f5409c7526431a595857b',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.4 (tar.xz)',
        'filename' => 'php-7.2.4.tar.xz',
        'sha256' => '7916b1bd148ddfd46d7f8f9a517d4b09cd8a8ad9248734e7c8dd91ef17057a88',
        'md5' => '',
        'date' => '29 Mar 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.4.
This is a security release which also contains several minor bug fixes.</p>



</announcement>',
      ),
    ),
  ),
  '7.2.5' => 
  array (
    'version' => '7.2.5',
    'date' => '26 Apr 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.5 (tar.bz2)',
        'filename' => 'php-7.2.5.tar.bz2',
        'sha256' => 'f3820efa8efa79628b6e1b5b2f8c1b04c08d32e6721fa1654039ce5f89796031',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.5 (tar.gz)',
        'filename' => 'php-7.2.5.tar.gz',
        'sha256' => 'c198aedd4cd16db0803e0ef955036722a1f4ce9ad3827546709fac05f1567ba5',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.5 (tar.xz)',
        'filename' => 'php-7.2.5.tar.xz',
        'sha256' => 'af70a33b3f7a51510467199b39af151333fbbe4cc21923bad9c7cf64268cddb2',
        'md5' => '',
        'date' => '26 Apr 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.5.
This is a security release which also contains several minor bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.6' => 
  array (
    'version' => '7.2.6',
    'date' => '24 May 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.6 (tar.bz2)',
        'filename' => 'php-7.2.6.tar.bz2',
        'sha256' => 'ae5d3e8ada80b9d293d0c8bd643d07c2d988538ff1052a3f7144c6b0cd0ff2c3',
        'md5' => '',
        'date' => '24 May 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.6 (tar.gz)',
        'filename' => 'php-7.2.6.tar.gz',
        'sha256' => 'a9f30daf6af82ac02e692465cfd65b04a60d56106c961926e264d2621d313f0e',
        'md5' => '',
        'date' => '24 May 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.6 (tar.xz)',
        'filename' => 'php-7.2.6.tar.xz',
        'sha256' => '1f004e049788a3effc89ef417f06a6cf704c95ae2a718b2175185f2983381ae7',
        'md5' => '',
        'date' => '24 May 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.6.
This is a primarily a bugfix release which includes a memory corruption fix for EXIF.</p>

<p>PHP 7.2 users are encouraged to upgrade to this version.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.7' => 
  array (
    'version' => '7.2.7',
    'date' => '21 Jun 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.7 (tar.bz2)',
        'filename' => 'php-7.2.7.tar.bz2',
        'sha256' => 'cc81675a96af4dd18d8ffc02f26a36c622abadf86af7ecfea7bcde8d3c96d5a3',
        'md5' => '',
        'date' => '21 Jun 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.7 (tar.gz)',
        'filename' => 'php-7.2.7.tar.gz',
        'sha256' => '014f0560cfa22e6301b0024a6fd888c3612a0dc102ff355fa2b49544d16d43b1',
        'md5' => '',
        'date' => '21 Jun 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.7 (tar.xz)',
        'filename' => 'php-7.2.7.tar.xz',
        'sha256' => 'eb01c0153b3baf1f64b8b044013ce414b52fede222df3f509e8ff209478f31f0',
        'md5' => '',
        'date' => '21 Jun 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.7.
This is a primarily a bugfix release which includes a segfault fix for opcache.</p>

<p>PHP 7.2 users are encouraged to upgrade to this version.</p>
</announcement>',
      ),
    ),
  ),
  '7.2.8' => 
  array (
    'version' => '7.2.8',
    'date' => '19 Jul 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.8 (tar.bz2)',
        'filename' => 'php-7.2.8.tar.bz2',
        'sha256' => '1f8068f520a60fff3db19be1b849f0c02a33a0fd8b34b7ae05556ef682187ee6',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.8 (tar.gz)',
        'filename' => 'php-7.2.8.tar.gz',
        'sha256' => 'a0cb9bf2f78498fc090eb553df03cdacc198785dec0818efa7a1804c2b7a8722',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.8 (tar.xz)',
        'filename' => 'php-7.2.8.tar.xz',
        'sha256' => '53ba0708be8a7db44256e3ae9fcecc91b811e5b5119e6080c951ffe7910ffb0f',
        'md5' => '',
        'date' => '19 Jul 2018',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.8.
This is a security release which also contains several minor bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.2.9' => 
  array (
    'version' => '7.2.9',
    'date' => '16 Aug 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.2.9 (tar.bz2)',
        'filename' => 'php-7.2.9.tar.bz2',
        'sha256' => 'e9e3aaa6c317b7fea78246a758b017544366049d2789ad5a44fe9398464c53a8',
        'md5' => '',
        'date' => '16 Aug 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.2.9 (tar.gz)',
        'filename' => 'php-7.2.9.tar.gz',
        'sha256' => '23fcc1e4d10e06ddfdbc1163a8f0d147a7813467273f7946eb0de1b825d1d3e6',
        'md5' => '',
        'date' => '16 Aug 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.2.9 (tar.xz)',
        'filename' => 'php-7.2.9.tar.xz',
        'sha256' => '3585c1222e00494efee4f5a65a8e03a1e6eca3dfb834814236ee7f02c5248ae0',
        'md5' => '',
        'date' => '16 Aug 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


<p>The PHP development team announces the immediate availability of PHP 7.2.9.
This is a bugfix release.</p>


</announcement>',
      ),
    ),
  ),
  '7.3.0' => 
  array (
    'version' => '7.3.0',
    'date' => '06 Dec 2018',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.0 (tar.bz2)',
        'filename' => 'php-7.3.0.tar.bz2',
        'sha256' => '7a267daec9969a997c5c8028c350229646748e0fcc71e2f2dbb157ddcee87c67',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.0 (tar.gz)',
        'filename' => 'php-7.3.0.tar.gz',
        'sha256' => '391bd0f91d9bdd01ab47ef9607bad8c65e35bc9bb098fb7777b2556e2c847b11',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.0 (tar.xz)',
        'filename' => 'php-7.3.0.tar.xz',
        'sha256' => '7d195cad55af8b288c3919c67023a14ff870a73e3acc2165a6d17a4850a560b5',
        'md5' => '',
        'date' => '06 Dec 2018',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">


            <p>The PHP development team announces the immediate availability of PHP 7.3.0.
                This release marks the third feature update to the PHP 7 series.
            </p>

            <p>PHP 7.3.0 comes with numerous improvements and new features such as</p>

            <ul>
                <li>
                    <a href="http://php.net/manual/migration73.new-features.php#migration73.new-features.core.heredoc">
                        Flexible Heredoc and Nowdoc Syntax
                    </a>
                </li>
                <li>
                    <a href="http://php.net/manual/migration73.other-changes.php#migration73.other-changes.pcre">PCRE2
                        Migration
                    </a>
                </li>
                <li>
                    <a href="http://php.net/manual/migration73.new-features.php#migration73.new-features.mbstring">
                        Multiple MBString Improvements
                    </a>
                </li>
                <li>
                    <a href="http://php.net/manual/migration73.new-features.php#migration73.new-features.ldap">LDAP
                        Controls Support
                    </a>
                </li>
                <li>
                    <a href="http://php.net/manual/migration73.new-features.php#migration73.new-features.fpm">Improved
                        FPM Logging
                    </a>
                </li>
                <li>
                    <a href="http://php.net/manual/migration73.windows-support.php#migration73.windows-support.core.file-descriptors">
                        Windows File Deletion Improvements
                    </a>
                </li>
                <li>
                    <a href="http://php.net/manual/migration73.deprecated.php">Several Deprecations</a>
                </li>
            </ul>

            <p>The <a href="http://php.net/manual/en/migration73.php">migration guide</a> is available in the PHP
                Manual.
                Please consult it for the detailed list of new features and backward incompatible changes.
            </p>

            <p>Many thanks to all the contributors and supporters!</p>


        </announcement>',
      ),
    ),
  ),
  '7.3.1' => 
  array (
    'version' => '7.3.1',
    'date' => '10 Jan 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.1 (tar.bz2)',
        'filename' => 'php-7.3.1.tar.bz2',
        'sha256' => 'afef2b0cd7f2641274a1a0aabe67e30f2334970d7c530382dfa9d79cfe74388e',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.1 (tar.gz)',
        'filename' => 'php-7.3.1.tar.gz',
        'sha256' => '8006211f7a041dde22fffedc416d142e0ebf22066014077ca936d7e6f655ead5',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.1 (tar.xz)',
        'filename' => 'php-7.3.1.tar.xz',
        'sha256' => 'cfe93e40be0350cd53c4a579f52fe5d8faf9c6db047f650a4566a2276bf33362',
        'md5' => '',
        'date' => '10 Jan 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.1. This is a security release which also contains several bug fixes.</p>




</announcement>',
      ),
    ),
  ),
  '7.3.10' => 
  array (
    'version' => '7.3.10',
    'date' => '26 Sep 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.10 (tar.bz2)',
        'filename' => 'php-7.3.10.tar.bz2',
        'sha256' => '506dd871c0fb8f00f872f53dd3b1dfa5f23a9edb4dfc521e5669c78a78c45448',
        'md5' => '',
        'date' => '26 Sep 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.10 (tar.gz)',
        'filename' => 'php-7.3.10.tar.gz',
        'sha256' => 'fb670723a9b8fda31c89529f27e0dda289d8af4b6ce9f152c8010876639c0fb4',
        'md5' => '',
        'date' => '26 Sep 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.10 (tar.xz)',
        'filename' => 'php-7.3.10.tar.xz',
        'sha256' => '42f00a15419e05771734b7159c8d39d639b8a5a6770413adfa2615f6f923d906',
        'md5' => '',
        'date' => '26 Sep 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.10. This is a security release which also contains several bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.3.11' => 
  array (
    'version' => '7.3.11',
    'date' => '24 Oct 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.11 (tar.bz2)',
        'filename' => 'php-7.3.11.tar.bz2',
        'sha256' => '92d1ff4b13c7093635f1ec338a5e6891ca99b10e65fbcadd527e5bb84d11b5e7',
        'md5' => '',
        'date' => '24 Oct 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.11 (tar.gz)',
        'filename' => 'php-7.3.11.tar.gz',
        'sha256' => '8f385f5bdf9193791f6c0f6303f518f3c324b6655ac108fdb3c426da7f3cf4d4',
        'md5' => '',
        'date' => '24 Oct 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.11 (tar.xz)',
        'filename' => 'php-7.3.11.tar.xz',
        'sha256' => '657cf6464bac28e9490c59c07a2cf7bb76c200f09cfadf6e44ea64e95fa01021',
        'md5' => '',
        'date' => '24 Oct 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.11. This is a security release which also contains several bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.3.12' => 
  array (
    'version' => '7.3.12',
    'date' => '21 Nov 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.12 (tar.bz2)',
        'filename' => 'php-7.3.12.tar.bz2',
        'sha256' => 'd317b029f991410578cc38ba4b76c9f764ec29c67e7124e1fec57bceb3ad8c39',
        'md5' => '',
        'date' => '21 Nov 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.12 (tar.gz)',
        'filename' => 'php-7.3.12.tar.gz',
        'sha256' => 'd617e5116f8472a628083f448ebe4afdbc4ac013c9a890b08946649dcbe61b34',
        'md5' => '',
        'date' => '21 Nov 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.12 (tar.xz)',
        'filename' => 'php-7.3.12.tar.xz',
        'sha256' => 'aafe5e9861ad828860c6af8c88cdc1488314785962328eb1783607c1fdd855df',
        'md5' => '',
        'date' => '21 Nov 2019',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.12. This is a bug fix release.</p>




</announcement>',
      ),
    ),
  ),
  '7.3.2' => 
  array (
    'version' => '7.3.2',
    'date' => '07 Feb 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.2 (tar.bz2)',
        'filename' => 'php-7.3.2.tar.bz2',
        'sha256' => '946f50dacbd2f61e643bb737021cbe8b1816e780ee7ad3e0cd999a1892ab0add',
        'md5' => '',
        'date' => '07 Feb 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.2 (tar.gz)',
        'filename' => 'php-7.3.2.tar.gz',
        'sha256' => '4597294b00edc1c63a021b6c7838eb43384f62eeb9e392f0b91c38a3c090f499',
        'md5' => '',
        'date' => '07 Feb 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.2 (tar.xz)',
        'filename' => 'php-7.3.2.tar.xz',
        'sha256' => '010b868b4456644ae227d05ad236c8b0a1f57dc6320e7e5ad75e86c5baf0a9a8',
        'md5' => '',
        'date' => '07 Feb 2019',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



    <p>The PHP development team announces the immediate availability of PHP
    7.3.2. This is a bugfix release, with several bug fixes included.</p>





</announcement>',
      ),
    ),
  ),
  '7.3.3' => 
  array (
    'version' => '7.3.3',
    'date' => '07 Mar 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.3 (tar.bz2)',
        'filename' => 'php-7.3.3.tar.bz2',
        'sha256' => '61969e943adfea79701a34b8e701edd3f95be829d16601a4aabeb05f83023ce6',
        'md5' => '',
        'date' => '07 Mar 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.3 (tar.gz)',
        'filename' => 'php-7.3.3.tar.gz',
        'sha256' => '9bde40cbf8608ae9c595a6643a02cf0c692c131e2b3619af3fd2af8425d8e677',
        'md5' => '',
        'date' => '07 Mar 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.3 (tar.xz)',
        'filename' => 'php-7.3.3.tar.xz',
        'sha256' => '6bb03e79a183d0cb059a6d117bbb2e0679cab667fb713a13c6a16f56bebab9b3',
        'md5' => '',
        'date' => '07 Mar 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.3. This is a security release which also contains several bug fixes.</p>



</announcement>',
      ),
    ),
  ),
  '7.3.4' => 
  array (
    'version' => '7.3.4',
    'date' => '04 Apr 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.4 (tar.bz2)',
        'filename' => 'php-7.3.4.tar.bz2',
        'sha256' => '2e2c3d8212c83649e443b61efffbd03df4b9edd0f9c7a679081fe4cb2da12b78',
        'md5' => '',
        'date' => '04 Apr 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.4 (tar.gz)',
        'filename' => 'php-7.3.4.tar.gz',
        'sha256' => 'dd41ecf43fe1172030f41d2581909457a0af7bd137a057c3874e0b0f3c2e8761',
        'md5' => '',
        'date' => '04 Apr 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.4 (tar.xz)',
        'filename' => 'php-7.3.4.tar.xz',
        'sha256' => '6fe79fa1f8655f98ef6708cde8751299796d6c1e225081011f4104625b923b83',
        'md5' => '',
        'date' => '04 Apr 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.4. This is a security release which also contains several bug fixes.</p>



</announcement>',
      ),
    ),
  ),
  '7.3.5' => 
  array (
    'version' => '7.3.5',
    'date' => '02 May 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.5 (tar.bz2)',
        'filename' => 'php-7.3.5.tar.bz2',
        'sha256' => '4380b80ef98267c3823c3416eb05f7729ba7a33de6b3d14ec96013215d62c35e',
        'md5' => '',
        'date' => '02 May 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.5 (tar.gz)',
        'filename' => 'php-7.3.5.tar.gz',
        'sha256' => 'c953749b7f3310a3a74f920ef698f6d1c04636d11656ac9ffb3ab10d34e30e1e',
        'md5' => '',
        'date' => '02 May 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.5 (tar.xz)',
        'filename' => 'php-7.3.5.tar.xz',
        'sha256' => 'e1011838a46fd4a195c8453b333916622d7ff5bce4aca2d9d99afac142db2472',
        'md5' => '',
        'date' => '02 May 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">
            <p>The PHP development team announces the immediate availability of PHP
                7.3.5. This is a security release which also contains several bug fixes.
            </p>
        </announcement>',
      ),
    ),
  ),
  '7.3.6' => 
  array (
    'version' => '7.3.6',
    'date' => '30 May 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.6 (tar.bz2)',
        'filename' => 'php-7.3.6.tar.bz2',
        'sha256' => '1e5ac8700154835c0910e3a814517da9b87bb4a82cc7011fea1a82096b6f6f77',
        'md5' => '',
        'date' => '30 May 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.6 (tar.gz)',
        'filename' => 'php-7.3.6.tar.gz',
        'sha256' => '72fbf223ff8659a61eed08eebffb4ede0256e7a69d2151ae24affa5377b70bb8',
        'md5' => '',
        'date' => '30 May 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.6 (tar.xz)',
        'filename' => 'php-7.3.6.tar.xz',
        'sha256' => 'fefc8967daa30ebc375b2ab2857f97da94ca81921b722ddac86b29e15c54a164',
        'md5' => '',
        'date' => '30 May 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.6. This is a security release which also contains several bug fixes.</p>


</announcement>',
      ),
    ),
  ),
  '7.3.7' => 
  array (
    'version' => '7.3.7',
    'date' => '04 Jul 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.7 (tar.bz2)',
        'filename' => 'php-7.3.7.tar.bz2',
        'sha256' => 'c3608fa7114642725854119ccffe722f42fc7c31e5e4c00d5cb4cb1a0d16bf18',
        'md5' => '',
        'date' => '04 Jul 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.7 (tar.gz)',
        'filename' => 'php-7.3.7.tar.gz',
        'sha256' => '4230bbc862df712b013369de94b131eddea1e5e946a8c5e286b82d441c313328',
        'md5' => '',
        'date' => '04 Jul 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.7 (tar.xz)',
        'filename' => 'php-7.3.7.tar.xz',
        'sha256' => 'ba067200ba649956b3a92ec8b71a6ed8ce8a099921212443c1bcf3260a29274c',
        'md5' => '',
        'date' => '04 Jul 2019',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.7. This is a bug fix release.</p>



</announcement>',
      ),
    ),
  ),
  '7.3.8' => 
  array (
    'version' => '7.3.8',
    'date' => '01 Aug 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.8 (tar.bz2)',
        'filename' => 'php-7.3.8.tar.bz2',
        'sha256' => 'd566c630175d9fa84a98d3c9170ec033069e9e20c8d23dea49ae2a976b6c76f5',
        'md5' => '',
        'date' => '01 Aug 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.8 (tar.gz)',
        'filename' => 'php-7.3.8.tar.gz',
        'sha256' => '31af3eff3337fb70733c9b02a3444c3dae662ecab20aeec7fdc3c42e22071490',
        'md5' => '',
        'date' => '01 Aug 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.8 (tar.xz)',
        'filename' => 'php-7.3.8.tar.xz',
        'sha256' => 'f6046b2ae625d8c04310bda0737ac660dc5563a8e04e8a46c1ee24ea414ad5a5',
        'md5' => '',
        'date' => '01 Aug 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.8. This is a security release which also contains several bug fixes.</p>




</announcement>',
      ),
    ),
  ),
  '7.3.9' => 
  array (
    'version' => '7.3.9',
    'date' => '29 Aug 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.3.9 (tar.bz2)',
        'filename' => 'php-7.3.9.tar.bz2',
        'sha256' => 'a39c9709a8c9eb7ea8ac4933ef7a78b92f7e5735a405c8b8e42ee39541d963c4',
        'md5' => '',
        'date' => '29 Aug 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.3.9 (tar.gz)',
        'filename' => 'php-7.3.9.tar.gz',
        'sha256' => '5ecc1b1ad7228ed2e99a970c45358871644fcab1d9fd079a7b129326a7bde42d',
        'md5' => '',
        'date' => '29 Aug 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.3.9 (tar.xz)',
        'filename' => 'php-7.3.9.tar.xz',
        'sha256' => '4007f24a39822bef2805b75c625551d30be9eeed329d52eb0838fa5c1b91c1fd',
        'md5' => '',
        'date' => '29 Aug 2019',
      ),
    ),
    'tags' => 
    array (
      0 => 'security',
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">



  <p>The PHP development team announces the immediate availability of PHP
  7.3.9. This is a security release which also contains several bug fixes.</p>



</announcement>',
      ),
    ),
  ),
  '7.4.0' => 
  array (
    'version' => '7.4.0',
    'date' => '28 Nov 2019',
    'source' => 
    array (
      0 => 
      array (
        'name' => 'PHP 7.4.0 (tar.bz2)',
        'filename' => 'php-7.4.0.tar.bz2',
        'sha256' => 'bf206be96a39e643180013df39ddcd0493966692a2422c4b7d3355b6a15a01c0',
        'md5' => '',
        'date' => '28 Nov 2019',
      ),
      1 => 
      array (
        'name' => 'PHP 7.4.0 (tar.gz)',
        'filename' => 'php-7.4.0.tar.gz',
        'sha256' => '004a1a8176176ee1b5c112e73d705977507803f425f9e48cb4a84f42b22abf22',
        'md5' => '',
        'date' => '28 Nov 2019',
      ),
      2 => 
      array (
        'name' => 'PHP 7.4.0 (tar.xz)',
        'filename' => 'php-7.4.0.tar.xz',
        'sha256' => '9bb751b20e5d6cc1ea9b1ebf23ef2d5f07f99b2d9cc417bf1d70c04f8b20ec42',
        'md5' => '',
        'date' => '28 Nov 2019',
      ),
    ),
    'tags' => 
    array (
    ),
    'announcements' => 
    array (
      'en' => 
      array (
        'format' => 'html',
        'content' => '<announcement lang="en">
            <p>The PHP development team announces the immediate availability of PHP 7.4.0.
                This release marks the fourth feature update to the PHP 7 series.
            </p>

            <p>PHP 7.4.0 comes with numerous improvements and new features such as:</p>

            <ul>

                <li>
                    <a href="https://www.php.net/manual/migration74.new-features.php#migration74.new-features.core.typed-properties">
                        Typed Properties
                    </a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/migration74.new-features.php#migration74.new-features.core.arrow-functions">
                        Arrow Functions
                    </a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/migration74.new-features.php#migration74.new-features.core.type-variance">
                        Limited Return Type Covariance and Argument Type Contravariance
                    </a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/migration74.new-features.php#migration74.new-features.core.unpack-inside-array">
                        Unpacking Inside Arrays
                    </a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/migration74.new-features.php#migration74.new-features.core.numeric-literal-separator">
                        Numeric Literal Separator
                    </a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/migration74.new-features.php#migration74.new-features.core.weakreference">
                        Weak References
                    </a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/migration74.new-features.php#migration74.new-features.core.tostring-exceptions">
                        Allow Exceptions from __toString()
                    </a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/opcache.configuration.php#ini.opcache.preload">Opcache
                        Preloading
                    </a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/migration74.deprecated.php">Several Deprecations</a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/migration74.removed-extensions.php">Extensions Removed from the
                        Core
                    </a>
                </li>
            </ul>

            <p>The <a href="http://php.net/manual/en/migration74.php">migration guide</a> is available in the PHP
                Manual.
                Please consult it for the detailed list of new features and backward incompatible changes.
            </p>

            <p>Many thanks to all the contributors and supporters!</p>
        </announcement>',
      ),
    ),
  ),
);