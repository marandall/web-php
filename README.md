## Local development

This is a major rework of the php.net website by Mark Randall
started due to a sense of utter rage at the old version being aimed
at PHP 5.3

It is purely for demo purposes. 
It uses most of the content from the official PHP repo at:

https://github.com/php/web-php/

To setup a local mirror of the website:

    $ git clone https://github.com/marandall/web-php.git
	$ cd web-php
	$ php -S localhost:8080 .router.php

## Code requirements

Code must function on PHP 7.4 because modern standards are important. 
