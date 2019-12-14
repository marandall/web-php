<?php
/*
  This script provides functions to print out
  error messages for users in case something is
  not available.
*/

// A 'good looking' 404 error message page
	use phpweb\Config\ErrorRedirects;
	use phpweb\Config\Site;
	use phpweb\Data\Languages;
	
	function error_404()
{
    status_header(404);
    site_header('404 Not Found', array("noindex"));
    echo "<h1>Not Found</h1>\n<p><strong>" .
         htmlspecialchars(substr(Site::$BaseUrl, 0, -1) . $_SERVER['REQUEST_URI']) .
         "</strong> not found on this server.</p>\n";
    site_footer();
    exit;
}

// A 'good looking' 404 error message page for manual pages
function error_404_manual()
{
    status_header(404);
    site_header('404 Not Found', array("noindex"));
    echo "<h1>Not Found</h1>\n" .
         "<p>The manual page you are looking for (<strong>" .
         htmlspecialchars(substr(Site::$BaseUrl, 0, -1) . $_SERVER['REQUEST_URI']) .
         "</strong>) is not available on this server right now. " .
         "Please check back later, or if the problem persists, " .
         "<a href=\"/about/contact.php\">contact the webmasters</a>.</p>\n";
    site_footer();
    exit;
}

// An error message page for manual pages from inactive languages
function error_inactive_manual_page($lang_name, $en_page)
{
    status_header(404);
    site_header('Page gone', array("noindex"));
    echo "<h1>Page gone</h1>\n" .
         "<p>The " . htmlspecialchars($lang_name) . " manual page you are looking for (<strong>" .
         htmlspecialchars(substr(Site::$BaseUrl, 0, -1) . $_SERVER['REQUEST_URI']) .
         "</strong>) is no longer available.</p>\n";
    $en_url = htmlspecialchars(substr(Site::$BaseUrl, 0, -1) . $en_page);
    echo "<p>The English page is available at <a href=\"{$en_url}\">{$en_url}</a></p>\n";
    echo "<p>Several other languages are also available:</p>\n";
    echo "<ul>\n";
    
    foreach (Languages::GetActiveLanguages() as $alt_lang => $alt_lang_name) {
        if ($alt_lang === "en") {
            continue;
        }
        $alt_url = htmlspecialchars(substr(Site::$BaseUrl, 0, -1) . str_replace("/en/", "/{$alt_lang}/", $en_page));
        echo "<li><a href=\"{$alt_url}\">" . htmlspecialchars($alt_lang_name) . "</a></li>\n";
    }
    echo "</ul>\n";
    site_footer();
    exit;
}

// This service is not working right now
function error_noservice()
{
    site_header('Service not working', array("noindex"));
    echo "<h1>Service not working</h1>\n" .
         "<p>The service you tried to access with <strong>" .
         htmlspecialchars(substr(Site::$BaseUrl, 0, -1) . $_SERVER['REQUEST_URI']) .
         "</strong> is not available on this server right now. " .
         "Please check back later, or if the problem persists, " .
         "<a href=\"/about/contact.php\">contact the webmasters</a>.</p>\n";
    site_footer();
    exit;
}

// There is no such mirror
function error_nomirror($mirror) {
	site_header("No such mirror", array("noindex"));
	echo "<h1>No such mirror</h1>\n<p>The mirror you tried to access (" .
		 htmlspecialchars($mirror) .
		 ") is not registered php.net mirror. Please check back later," .
		 " or if the problem persists, " .
		 "<a href=\"/about/contact.php\">contact the webmasters</a>.</p>\n";
	site_footer();
	exit;
}

// Send out a proper status header
function status_header($num)
{
    // Set status text
    switch ($num) {
        case 200: $status = "OK"; break;
        case 301: $status = "Moved Permanently"; break;
        case 302: $status = "Found"; break;
        case 404: $status = "Not Found"; break;
        default: return FALSE;
    }

    // Figure out HTTP protocol version - use 1.1 answer for 1.1 request,
    // answer with HTTP/1.0 for any other (ancient or futuristic) user
    switch (strtoupper($_SERVER['SERVER_PROTOCOL'])) {
        case 'HTTP/1.0':
            @header("HTTP/1.0 $num $status");
            break;

        case 'HTTP/1.1':
        default:
            @header("HTTP/1.1 $num $status");
            break;
    }

    // BC code for PHP < 4.3.0
    @header("Status: $num $status", TRUE, $num);

    return TRUE;
}

/******************************************************************************
In the future every mirror will have SQLite instead of hacks like this. Or, some
other means like a ginormous array! But the point is we'll end up storing
everything like functions, variables, constants, common search terms, etc.

This exists today because as of PHP 5.3.0 there are over 200 links within the
php.ini files so these create nicer urls and allow language detection to work.

The most commonly searched terms have also been added.

TODO: Determine if we want to continue 301 -OR- make these official URLs.
******************************************************************************/

function is_known_ini (string $ini) {
	return ErrorRedirects::KNOWN_INIS[$ini] ?? false;
}

function is_known_variable(string $variable) {
	if ($variable[0] === '$') {
		$variable = ltrim($variable, '$');
	}

	return ErrorRedirects::KNOWN_VARIABLES[$variable] ?? false;
}

function is_known_term (string $term) {
	return ErrorRedirects::KNOWN_TERMS[$term] ?? false;
}

/*
Search snippet provider: A dirty proof-of-concept:
	This will probably live in sqlite one day, and be more intelligent (tagging?)
	This is a 100% hack currently, and let's hope temporary does not become permanent (Hello year 2014!)
	And this is English only today... we should add translation support via the manual, generated by PhD

	This really is a proof-of-concept, where the choices below are the most popular searched terms at php.net
	It should also take into account vague searches, such as 'global' and 'str'. The search works well enough for,
	most terms, so something like $_SERVER isn't really needed but it's defined below anyways...
*/
function is_known_snippet($term) {
$snippets = array(
	'global'	=> '
		The <b>global</b> keyword is used to manipulate <a href="/language.variables.scope">variable scope</a>, and
		there is also the concept of <a href="/language.variables.superglobals">super globals</a> in PHP,
		which are special variables with a global scope.',
	'string'	=> '
		There is the <a href="/language.types.string">string type</a>, which is a scalar,
		and also many <a href="/ref.strings">string functions.</a>',
	'str'		=> '
		Many <a href="/ref.strings">string functions</a> begin with <b>str</b>,
		and there is also the <a href="/language.types.string">string type</a>.',
	'_server'	=> '
		<a href="/reserved.variables.server">$_SERVER</a>
		is a <a href="/language.variables.superglobals">super global</a>,
		and is home to many predefined variables that are typically provided by a web server',
	'class'		=> '
		A <a href="/language.oop5">class</a> is an OOP (Object Oriented Programming) concept,
		and PHP is both a procedural and OOP friendly language.',
	'function'	=> '
		PHP contains thousands of functions. You might be interested in how a
		<a href="/language.functions">function is defined</a>, or
		<a href="/about.prototypes">how to read a function prototype</a>.
		See also the list of <a href="/extensions">PHP extensions</a>',
	);

	$term = strtolower(trim($term));
	if (isset($term[0]) && $term[0] === '$') {
		$term = ltrim($term, '$');
	}

	return isset($snippets[$term]) ? $snippets[$term] : false;

}
