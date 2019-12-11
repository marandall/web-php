<search
 name="PHP.net"
 description="PHP.net - Search"
 method="GET"
 action="<?php use phpweb\Config\Site;
	
	 echo Site::$BaseUrl; ?>manual-lookup.php"
 searchForm="<?php echo Site::$BaseUrl; ?>"
 update="<?php echo Site::$BaseUrl; ?>phpnetsearch.src"
 updateCheckDays="7"
>

<input name="sourceid" value="Mozilla-search">
<input name="pattern" user="">

<interpret
 browserResultType="result"
 resultListStart="<!-- result list start -->"
 resultListEnd="<!-- result list end -->"
 resultItemEnd="<br>"
>

<browser
 update="<?php echo Site::$BaseUrl; ?>phpnetsearch.src"
 updateIcon="<?php echo Site::$BaseUrl; ?>images/phpnetsearch.png"
 updateCheckDays="7"
>

</search>
