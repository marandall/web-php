<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers\Lists;
	
	use phpweb\Data\MailingLists;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Tools\EmailValidation;
	use phpweb\UI\Templates\BasicPanel;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class MailingListsIndexController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Mailing Lists');
			$this->setActivePage('community');
			
			if (isset($_POST['email'])) {
			    $this->submit();
            }
			
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			?>
            <p>
                There are many PHP-related mailing lists available on our server.
                Most of them are archived, and all of them are available as newsgroups
                on our <a href="news://news.php.net">news server</a>. You can search
                some mailing lists right from this website from <a href="/search.php">the
                    search page</a> or by using the search input box selecting the
                appropriate option on the top-right of every page.
            </p>
            <p>
                There is an experimental web interface for the news server at
                <a href="http://news.php.net/">http://news.php.net/</a>, and
                there are also other archives provided by
                <a href="http://marc.info/">Marc</a>.
            </p>

            <h2>Twitter</h2>
            <p>
                The PHP team maintains an official PHP.net account on twitter,
                <a href="https://twitter.com/official_php">@official_php</a>, for those
                interested in following news and other announcements from the PHP project.
            </p>

            <h2>Mailing List Posting guidelines</h2>

            <p>
                When posting to mailing lists or newsgroups, please keep the following in mind:
            </p>

            <ul>
                <li>
                    Use a valid email address. Every new poster's email address
                    is checked for validity through confirmation.
                </li>
                <li>
                    Send plain ASCII messages, no HTML-formatted emails please.
                </li>
                <li>
                    Turn on word wrapping so your entire message doesn't show up on
                    a single line.
                </li>
                <li>
                    Be sure to click <strong>Reply-All</strong> to reply to list. Clicking
                    <strong>Reply</strong> will email the author of the message privately.
                </li>
                <li>
                    No attachments please, just post a URL if you want someone to
                    look at something.
                </li>
                <li>
                    Don't GPG/PGP sign your messages. If you want people to be able
                    to send you encrypted email, stick your key-locator in your signature
                </li>
                <li>
                    Don't hijack other peoples' threads. To post on a new topic, start
                    a new message, don't reply and just change the subject.
                </li>
                <li>
                    Check the archives before posting a question, chances are it has
                    already been asked and answered a few times.
                </li>
                <li>
                    When asking a question, don't just tell us, &quot;it doesn't work&quot;.
                    Tell us what you are trying to accomplish, a <strong>short</strong> code
                    snippet showing how you tried to solve it, what you expected to get and
                    what you got instead.
                </li>
            </ul>
            <p>
                And make sure you have read our
                <a href="//git.php.net/?p=php-src.git;a=blob_plain;f=docs/mailinglist-rules.md;hb=HEAD">Mailinglist
                    Rules</a>.
            </p>

            <form method="post" action="/lists/">

                <h2 id="general">General Mailing Lists</h2>
				
				<?php $this->drawLists(MailingLists::GENERAL_LISTS); ?>

                <h2 id="internals">Internals Mailing Lists</h2>
				
				<?php $this->drawLists(MailingLists::INTERNALS_LISTS); ?>

                <p class="center">
                    <strong>Email:</strong>
                    <input type="text" name="email" size="40" value="user@example.com">
                    <input type="submit" name="action" value="Subscribe">
                    <input type="submit" name="action" value="Unsubscribe">
                </p>

            </form>

            <p>
                You will be sent a confirmation mail at the address you wish to
                be subscribed or unsubscribed, and only added to the list after
                following the directions in that mail.
            </p>

            <p>
                <strong>Warning:</strong> The PHP users mailing list gets close to 1500-2000
                messages per month currently. Do the math. That translates to about 60
                messages per day. If your mailbox can't handle this sort of traffic you
                might want to consider subscribing to the digest list instead (two messages
                per day), using the news server, or reading the mailing list using the
                archives.
            </p>

            <h2>Subscribe via Email</h2>

            <p>
                If you experience trouble subscribing via the form above, you may also
                subscribe by sending an email to the list server.
                To subscribe to any mailing list, send an email to
                <code><em>listname</em>-subscribe@lists.php.net</code>
                (substituting the name of the list for <code><em>listname</em></code>
                &mdash; for example, <code>php-general-subscribe@lists.php.net</code>).
            </p>

            <h2>Mailing list options</h2>

            <p>
                All of the mailing lists hosted at <a
                        href="http://lists.php.net/">lists.php.net</a> are managed using the <a
                        href="http://untroubled.org/ezmlm/">ezmlm-idx</a> mailing list software.
                There are a variety of commands you can use to modify your subscription.
                Either send a message to <code>php-whatever-help@lists.php.net</code> (as in,
                <code>php-general-help@lists.php.net</code>) or you can view the commands for
                ezmlm <a href="http://untroubled.org/ezmlm/ezman/ezman1.html">here.</a>
            </p>
			<?php
		}
		
		private function drawLists(array $mailing_lists) {
			echo '<table cellpadding="5" border="0" class="standard mailing-lists">', "\n";
			foreach ($mailing_lists as $listinfo) {
				if (!is_array($listinfo)) {
					echo "<tr><th>{$listinfo}</th><th>Moderated</th><th>Archive</th>" .
						"<th>Newsgroup</th><th>Normal</th><th>Digest</th></tr>\n";
				}
				else {
					echo '<tr align="center">';
					echo '<td align="left"><strong>' . $listinfo[1] . '</strong> <small>&lt;<a href="mailto:' . $listinfo[0] . '@lists.php.net">' . $listinfo[0] . '@lists.php.net</a>&gt;</small><br><small>' . $listinfo[2] . '</small></td>';
					echo '<td>' . ($listinfo[3] ? 'yes' : 'no') . '</td>';
					
					// Let the list name defined with a string, if the
					// list is archived under a different name then php.net
					// uses for it (for backward compatibilty for example)
					if ($listinfo[4] !== FALSE) {
						$larchive = ($listinfo[4] === TRUE ? $listinfo[0] : $listinfo[4]);
					}
					else {
						$larchive = FALSE;
					}
					echo '<td>' . ($larchive ? "<a href=\"http://marc.info/?l={$larchive}\">yes</a>" : 'n/a') . '</td>';
					echo '<td>' . ($listinfo[6] ? "<a href=\"news://news.php.net/{$listinfo[6]}\">yes</a> <a href=\"http://news.php.net/group.php?group={$listinfo[6]}\">http</a>" : 'n/a') . '</td>';
					echo '<td><input name="maillist" type="radio" value="' . $listinfo[0] . '"></td>';
					echo '<td>' . ($listinfo[5] ? '<input name="maillist" type="radio" value="' . $listinfo[0] . '-digest">' : 'n/a') . '</td>';
					echo "</tr>\n";
				}
			}
			echo "</table>\n";
		}
		
		protected function submit() {
			// No error found yet
			$error = "";
			
			// Check email address
			if (empty($_POST['email']) || $_POST['email'] === 'user@example.com' ||
				$_POST['email'] === 'fake@from.net' || !EmailValidation::IsEmailable($_POST['email'])) {
				$error = "You forgot to specify an email address to be added to the list, or specified an invalid address." .
					"<br>Please go back and try again.";
			}
			
			// Seems to be a valid email address
			else {
				// Decide on request mode, email address part and IP address
				$request = strtolower($_POST['action']);
				if ($request !== "subscribe" && $request !== "unsubscribe") {
					$request = "subscribe";
				}
				$remote_addr = i2c_realip();
				
				// Get in contact with master server to [un]subscribe the user
				$result = posttohost(
					"http://master.php.net/entry/subscribe.php",
					[
						"request"  => $request,
						"email"    => $_POST['email'],
						"maillist" => $_POST['maillist'],
						"remoteip" => $remote_addr,
						"referer"  => 'https://' . $_SERVER['HTTP_HOST'] . "/lists/",
					]
				);
				
				// Provide error if unable to [un]subscribe
				if ($result) {
					$error = "We were unable to subscribe you due to some technical problems.<br>" .
						"Please try again later.";
				}
			}
			
			if ($error !== '') {
				$this->addErrorPanel(new BasicPanel('Subscribe Error', $error));
            }
		}
	}