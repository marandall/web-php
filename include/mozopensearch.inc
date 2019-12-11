<?php use phpweb\Config\Site;
	
	echo '<?xml version="1.0"?>'."\n"; ?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/" xmlns:moz="http://www.mozilla.org/2006/browser/search/">
 <ShortName>PHP.net</ShortName>
 <Description>PHP.net - Search</Description>
 <InputEncoding>UTF-8</InputEncoding>
 <Contact>gothicx@sapo.pt</Contact>
 <Image height="16" width="16" type="image/x-icon"><?php echo Site::$BaseUrl; ?>images/phpnetsearch.png</Image>
 <Developer>Marco Rodrigues</Developer>
 <Url type="text/html" method="get" template="<?php echo Site::$BaseUrl; ?>manual-lookup.php?pattern={searchTerms}&amp;src={referrer:source?}" />
</OpenSearchDescription>
