<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Manual;
	
	use phpweb\Data\Languages;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class HelpTranslateController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Help Translate PHP Manuals');
			$this->setActivePage('docs');
			
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			?>
            <section class="r2-sec" id="looking_for">
                <h2>Looking for a translation?</h2>
                <div>
                    <p>
                        The PHP Manual has over 30 translations already setup, but due to inactivity many have been taken
                        offline. The odds are high that your language has already started a translation, but for various reasons
                        it's no longer being updated or shown at php.net.
                    </p>
                </div>
            </section>

            <section class="r2-sec" id="how_to_help">
                <h2>How to help translate the PHP Manual</h2>
                <div>
                    <p>
                        If you're interested in helping translate a specific language, then please read the translation section
                        of the <a href="http://doc.php.net/tutorial/">Guide for Manual Contributors</a> and contact the
                        appropriate mailing list. Whether or not your language is shown below, you are very welcome to help
                        translate the PHP Manual from English to another language.
                    </p>
                </div>
            </section>
			
            <section class="r2-sec" id="using_outdated">
                <h2>Using outdated translations</h2>
                <div>
                    <p>
                        The following list of languages already contain SVN modules, and will show up on the documentation
                        development server. Warning: These translations are considered outdated, so content within each may be
                        completely wrong or insecure!
                    </p>
                </div>
            </section>
			
			<section class="r2-sec" id="inactive_languages">
                <h2>Inactive languages already in SVN</h2>
                <div>
                    <ul>
		                <?php
			                // $archived are manuals we have old versions of
			                $archived = ['da', 'kr', 'pl', 'tw'];
			
			                foreach (Languages::INACTIVE_ONLINE as $cc => $lang) {
				                $link = 'no archive';
				                if (in_array($cc, $archived)) {
					                $link = '<a href="http://docs.php.net/manual/' . $cc . '">archive</a>';
				                }
				                echo '<li>', $lang, ': (', $link, ')</li>';
			                }
		                ?>
                    </ul>
                </div>
            </section>
			<?php
		}
	}