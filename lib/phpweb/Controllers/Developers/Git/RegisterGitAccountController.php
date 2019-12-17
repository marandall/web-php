<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Developers\Git;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Tools\EmailValidation;
	use phpweb\UI\Templates\BasicCallbackPanel;
	use phpweb\UI\Templates\BasicCallbackPanel as BasicCallbackPanelAlias;
	use phpweb\UI\Templates\FreshTemplate;
	
	class RegisterGitAccountController  implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Register for GIT Access')
                ->addSidePanel(new BasicCallbackPanelAlias('More About Git', fn() => $this->renderPanel()))
				->render([$this, 'renderContents']);
		}
		
		public function renderThanksContent() {
			?>
            <p>
                Thank you. Your request has been sent. You should hear something within the
                next week or so. If you haven't heard anything by around <?php echo date('l, F jS', time() + 604800); ?>
                then please send an email to the appropriate <a href="/community/lists/">mailing list</a>:
            </p>
            <ul>
                <li>Internals: <a href="mailto:internals@lists.php.net">internals@lists.php.net</a></li>
                <li>Documentation: <a href="mailto:phpdoc@lists.php.net">phpdoc@lists.php.net</a></li>
                <li>PECL: <a href="mailto:pecl-dev@lists.php.net">pecl-dev@lists.php.net</a></li>
                <li>PEAR: <a href="mailto:pear-dev@lists.php.net">pear-dev@lists.php.net</a></li>
                <li>Other: <a href="mailto:group@php.net">group@php.net</a></li>
            </ul>
            <p>
                This is to let us know that we've
                forgotten you, but you haven't forgotten us! It happens. There's several of
                us, and sometimes we think that someone else has taken care of your request,
                and they think that we took care of it. Sorry. You can also speed up the
                process by having an existing Git account holder who works in the area you are
                interested in mail us to vouch for you.
            </p>

            <p>
                If you are not familiar with Git, you should have a look at the various
                documentation resources available at
                <a href="http://git-scm.com/">the official Git site</a>. This is also where
                to get the most recent version of the Git client.
            </p>

            <p>
                All Git commit messages to the PHP sources get sent to the php-git mailing lists.
                You should subscribe yourself to one or more of these mailing lists. Instructions
                for subscribing are on the <a href="/community/lists/">Mailing Lists</a> page.
            </p>

            <p>
                Git itself is quite easy to use. You can follow the steps listed on the
                <a href="/git.php">Git</a> page for checking out your tree. Please note that
                you do not have to log in to check out your tree; you will not be asked for
                your username and password until you attempt to commit changes.
            </p>

            <p>
                The <a href="https://wiki.php.net/vcs/gitworkflow">Git workflow</a> and
                <a href="https://wiki.php.net/vcs/gitfaq">Git FAQ</a> pages on the Wiki are
                good starting points to learn how we use Git to develop PHP. Beyond that, you
                can familiarise yourself with Git in general via the
                <a href="http://git-scm.com/documentation">Git documentation</a> and the
                <a href="http://progit.org/">Pro Git</a> book. They should all be executed
                from within the checked out tree. eg. <code>cd php-src</code>.
            </p>
			<?php
		}
		
		protected function onFormSubmission(Request $request) {
		    $error = '';
		    
			// Check for errors
			if (empty($_POST['id'])) {
				$error .= 'You must supply a desired Git user id. <br>';
			}
            elseif (!preg_match('!^[a-z]\w+$!', $_POST['id']) || strlen($_POST['id']) > 16) {
				$error .= 'Your user id must be from 1-16 characters long, start with ' .
					'a letter and contain nothing but a-z, 0-9, and _ <br>';
			}
			if (empty($_POST['fullname'])) {
				$error .= 'You must supply your real name. <br>';
			}
			if (empty($_POST['realpurpose'])) {
				$error .= 'You must supply a reason for requesting the Git account. <br>';
			}
			if (empty($_POST['password'])) {
				$error .= 'You must supply a desired password. <br>';
			}
			
			if (empty($_POST['email']) || !EmailValidation::IsEmailable($cleaned['email'])) {
				$error .= 'You must supply a proper email address. <br>';
			}
			if (empty($_POST['yesno']) || $_POST['yesno'] != 'yes') {
				$error .= 'You did not fill the form out correctly. <br>';
			}
			if (empty($_POST['group']) || $_POST['group'] === 'none' || !isset($groups[$_POST['group']])) {
				$error .= 'You did not fill out where to send the request. <br>';
			}
			if (!isset($_POST['guidelines']) || !$_POST['guidelines']) {
				$error .= 'You did not agree to follow the contribution guidelines. <br>';
			}
			
			// Post the request if there is no error
			if (!$error) {
				$error = posttohost(
					'http://master.php.net/entry/svn-account.php',
					[
						'username' => $cleaned['id'],
						'name'     => $cleaned['fullname'],
						'email'    => $cleaned['email'],
						'passwd'   => $cleaned['password'],
						'note'     => $cleaned['realpurpose'],
						'yesno'    => $cleaned['yesno'],
						'group'    => $cleaned['group'],
					]
				);
				// Error while posting
				if ($error) {
					$error = "An error occurred when trying to create the account: $error.";
				}
			}
			
			// Some error was found, while checking or submitting the data
			if ($error) {
				echo "<div class=\"warning\"><p>$error</p></div>";
			}
		}
		
		protected function renderPanel() {
			?>
            <p>
                You can find more information about Git and download clients for most major
                platforms at <a href="http://git-scm.com/">the official Git site</a>.
            </p>

            <h3>Git access</h3>
            <p>
                If you would like to grab PHP sources or other PHP.net
                hosted project data from PHP.net, you can also use
                <a href="./">Github</a>. No Git account is required.
            </p>
			<?php
		}
		
		public function renderContents() {
			$groups = array(
				'none' => 'Choose One',
				'php'  => 'PHP Group',
				'pear' => 'PEAR Group',
				'pecl' => 'PECL Group',
				'doc'  => 'Doc Group',
			);
			?>
            <form action="" method="post" >
                <table border="0" class="standard" style="width: 100%;">
                    <tr>
                        <th class="subr">Full Name:</th>
                        <td><input type="text" size="50" name="fullname"
                                   class="max" value="<?php if (isset($_POST['fullname'])) {
								echo clean($_POST['fullname']);
							}
							?>"></td>
                    </tr>
                    <tr>
                        <th class="subr">Email:</th>
                        <td><input type="text" size="50" name="email"
                                   class="max" value="<?php if (isset($_POST['email'])) {
								echo clean($_POST['email']);
							}
							?>"></td>
                    </tr>
                    <tr>
                        <th class="subr">For what purpose do you require a Git account:<br>
                            (check all that apply)
                        </th>
                        <td>
							<?php
								$purposes = ['Learning PHP', 'Coding in PHP', 'Reading the PHP source',
								             'Using PHP extensions', 'Creating experimental PHP extensions',
								             'Submitting a patch to PHP', 'Adding notes to the documentation',
								             'Writing web pages with PHP',
								];
								
								foreach ($purposes
								
								as $i => $p) { ?>
                            <input type="checkbox" name="purpose[<?php echo $i ?>   value=" 1"
                            checked="checked" id="vcs-purpose-<?php echo $i; ?>"> <label
                                    for="vcs-purpose-<?php echo $i; ?> ><?php echo $p; ?></label>
                                <br>
                            <?php } ?>
        </td>
        </tr>
        <tr>
            <th class=" subr">If your intended purpose is not in the list, <br>please state it here:
                            <textarea cols="50" rows="5" name="realpurpose"
                                      class="max"><?php if (isset($_POST['realpurpose'])) {
			                        echo clean($_POST['realpurpose']);
		                        } ?></textarea>
                        
                        </th>
                    </tr>
                    <tr>
                        <th class="subr">Do you agree to follow the <a href="license/contrib-guidelines-code.php">contribution
                                guidelines</a>?
                        </th>
                        <td><input type="checkbox" name="guidelines" value="1" id="vcs-guidelines"> <label
                                    for="vcs-guidelines">Check
                                the box if you agree</label></td>
                    </tr>
                    <tr>
                        <th class="subr">User ID:<br> <small>(single word, lower case, max 16 characters)</small></th>
                        <td><input type="text" size="10" name="id"
                                   class="max" value="<?php if (isset($_POST['id'])) {
								echo clean($_POST['id']);
							} ?>"></td>
                    </tr>
                    <tr>
                        <th class="subr">Requested Password:</th>
                        <td><input type="password" size="10" name="password"
                                   class="max" value="<?php if (isset($_POST['password'])) {
								echo clean($_POST['password']);
							} ?>"></td>
                    </tr>
                    <tr>
                        <th class="subr">Did you fill this form out correctly (yes/no)?</th>
                        <td><input type="text" size="10" name="yesno" class="max" value="no"></td>
                    </tr>
                    <tr>
                        <th class="subr">Type of initial karma (who to send this request to):</th>
                        <td>
                            <select name="group">
								<?php
									foreach ($groups as $group => $name) {
										$selected = (isset($_POST['group']) && $_POST['group'] == $group) ? ' selected="selected"' : '';
										echo "<option value='$group'$selected>$name</option>\n";
									}
								?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2"><input type="submit" value="Send Request"></th>
                    </tr>
                </table>
            </form>
			<?php
		}
	}
	