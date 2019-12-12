<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers;
	
	use phpweb\Data\Countries;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class MyController extends PHPWebTemplate
	{
		private $country = '';
		
		public function __invoke(Request $request): Response {
			$this->setPageTitle('My PHP.net Preferences');
			$this->setActivePage('docs');
			
			return $this->render(
				function () use ($request) {
					$this->renderContents($request);
				}
			);
		}
		
		public function renderContents(Request $request) {
			$country = $request->getVisitor()->getCountry();
			?>
			<form action="/my.php" method="post">
				<p>
					This page allows you to customize the PHP.net site.
				</p>
				
				<?php if (!is_official_mirror()) { ?>
					<p class="warn">
						This is not an official PHP.net mirror site, and therefore the settings
						you set and see here will <strong>not</strong> be effective on any
						official PHP.net mirror site. The settings you specify here are only
						going to be active for this URL, and only if you have cookies enabled.
					</p>
				<?php } else { ?>
					<p>
						These settings are cookie-based and will work on all official PHP.net
						mirror sites.
					</p>
				<?php } ?>
				
				<h2>Preferred language</h2>
				
				<p>
					If you use a shortcut or search for a function, the language used
					is determined by checking for the following settings. The list is
					in priority order, the first is the most important. Normally you don't
					need to set your preferred language, as your last seen language is
					always remembered, and is a good estimate of your preferred language
					most of the time.
				</p>
				
				<div class="indent">
					<table border="0" cellpadding="3" cellspacing="2" class="standard">
						<?php
							
							// Data for the language settings table
							$langinfo = [
								
								"Your preferred language" =>
									$langpref,
								
								"Last seen language" =>
									(isset($_COOKIE['LAST_LANG']) ? htmlentities(
										$_COOKIE['LAST_LANG'], ENT_QUOTES | ENT_IGNORE, 'UTF-8'
									) : "None"),
								
								"Your Accept-Language browser setting" =>
									(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? htmlentities(
										$_SERVER['HTTP_ACCEPT_LANGUAGE'], ENT_QUOTES | ENT_IGNORE, 'UTF-8'
									) : "None"),
								
								"The mirror's default language" =>
									default_language(),
								
								"Default" => "en",
							];
							
							// Write a row for all settings
							foreach ($langinfo as $lin => $lid) {
								echo " <tr>\n  <td class=\"sub\">" . $lin . "</td>\n";
								echo "  <td>" . $lid . "</td>\n </tr>\n";
							}
						
						?>
					</table>
				</div>
				
				<p>
					These settings are only overridden in case you have passed a language
					setting URL parameter or POST data to a page or you are viewing a manual
					page in a particular language. In these cases, the explicit specification
					overrides the language selected from the above list.
				</p>
				
				<p>
					The language setting is honored when you use a
					<a href="/urlhowto.php">URL shortcut</a>, when you start
					a function list search on a non-manual page, when you visit
					the <a href="/download-docs.php">manual download</a> or
					<a href="/docs.php">language selection</a> pages, etc.
				</p>
				
				<h2>Your country</h2>
				
				<p>
					The PHP.net site tries to detect your country
					using the <a href="http://www.directi.com/?site=ip-to-country">Directi
						Ip-to-Country Database</a>. This information is used to mark
					the events in your country specially.
				</p>
				
				<div class="indent">
					<?php
						if (i2c_valid_country()) {
							echo "We detected that you are from <b>" . Countries::COUNTRIES_BY_ALPHA_3[$COUNTRY] . "</b>";
						}
						else {
							echo "We were unable to detect your country";
						}
					?>
				</div>
				
				<h2>URL search fallback</h2>
				
				<p>
					When you try to access a PHP.net page via a URL shortcut, and
					the site is unable to find that particular page, it falls back
					to a documentation search, or a function list lookup, depending on
					your choice. The default is a function list lookup, as most of
					the URL shortcut users try to access function documentation pages.
				</p>
				
				<div class="indent">
					Your setting: <input type="radio" name="urlsearch" value="quickref"
						<?php
							$type = myphpnet_urlsearch();
							if ($type === MYPHPNET_URL_NONE || $type === MYPHPNET_URL_FUNC) {
								echo ' checked="checked"';
							}
							echo '> Function list search <input type="radio" name="urlsearch" value="manual"';
							if ($type === MYPHPNET_URL_MANUAL) {
								echo ' checked="checked"';
							}
						?>
					> PHP Documentation search
				</div>
				
				<br>
				<h2>User Group tips</h2>
				
				<p>
					We are experimenting with listing nearby user groups. This feature is highly experimental
					and will very likely change a lot and be broken at times.
				</p>
				<label for="showugenable">Enable UG tips</label> <input type="radio" name="showug" id="showugenable"
				                                                        value="enable" <?php echo myphpnet_showug(
				) ? "checked=checked" : "" ?>><br>
				<label for="showugdisable">Disable UG tips</label> <input type="radio" name="showug" id="showugdisable"
				                                                          value="disable" <?php echo myphpnet_showug(
				) ? "" : "checked=checked" ?>>
				
				<p class="center">
					<input type="submit" value="Set All Preferences">
				</p>
			</form>
			<?php
		}
	}