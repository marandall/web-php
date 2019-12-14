<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Events;
	
	use phpweb\Config\Site;
	use phpweb\Data\Countries;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class CalendarController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Event Calendar');
			$this->setActivePage('community');
			
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			/*
			 This script serves three different forms of the calendar data:
				a monthly view ($cm, $cy)
				a daily view ($cm, $cd, $cy)
				an individual item view ($id)
			 For the last two, the month view is also displayed beneath the
			 specifically requested data. If we encounter an error, we have
			 a fallback to display the actual month/year.
			*/
			
			$begun  = FALSE;
			$errors = [];
			$id     = isset($_GET['id']) ? (int)$_GET['id'] : 0;
			$cy     = isset($_GET['cy']) ? (int)$_GET['cy'] : 0;
			$cm     = isset($_GET['cm']) ? (int)$_GET['cm'] : 0;
			$cd     = isset($_GET['cd']) ? (int)$_GET['cd'] : 0;

			// If the year is not valid, set it to the current year
			// This excludes all the "too old", or "too far in the future"
			// calendar displays (so search engines can handle this page too)
			if ($cy != 0 && !$this->valid_year($cy)) {
				$cy = date("Y");
			}

			// We need to look up an event with an ID
			if ($id) {
				// Try to load event by ID and display header and info for that event
				if ($event = $this->load_event($id)) {
					$this->display_event($event, 0);
					$begun = TRUE;
				}
				// Unable to find event, put this to the error messages' list
				else {
					$errors[] = "There is no event for specified id ('" . htmlentities(
							$id, ENT_QUOTES | ENT_IGNORE, 'UTF-8'
						) . "')";
				}
			}

			// Year, month and day specified, display a daily view
			elseif ($cy && $cm && $cd) {
				
				// Check if date is valid
				if (checkdate($cm, $cd, $cy)) {
					
					// Date integer for that day
					$date = mktime(0, 0, 1, $cm, $cd, $cy);
					
					// Try to load events for that day, and display them all
					if ($events = $this->load_events($date)) {
						$site_header_config = ['classes' => 'calendar calendar-day'] + $site_header_config;
						
						echo "<h2>", date("F j, Y", $date), "</h2>\n";
						foreach ($events as $event) {
							$this->display_event($event, 0);
							echo "<br>";
						}
						$begun = TRUE;
					}
					
					// Unable to load events for that day
					else {
						$errors[] = "There are no events for the specified date (" . date("F j, Y", $date) . ").";
					}
				}
				
				// Wrong date specified
				else {
					$errors[] = "The specified date (" . htmlentities(
							"$cy/$cm/$cd", ENT_QUOTES | ENT_IGNORE, 'UTF-8'
						) . ") was not valid.";
					unset($cm);
					unset($cd);
					unset($cy);
				}
			}

			// Check if month and year is valid
			if ($cm && $cy && !checkdate($cm, 1, $cy)) {
				$errors[] = "The specified year and month (" . htmlentities(
						"$cy, $cm", ENT_QUOTES | ENT_IGNORE, 'UTF-8'
					) . ") are not valid.";
				unset($cm);
				unset($cy);
			}

			// Give defaults for the month and day values if they were invalid
			if (!isset($cm) || $cm == 0) {
				$cm = idate("m");
			}
			if (!isset($cy) || $cy == 0) {
				$cy = idate("Y");
			}

			// Start of the month date
			$date = mktime(0, 0, 1, $cm, 1, $cy);
			
			if (!$begun) {
				?>
				<div class="tip">
					<p>
						If you would like to suggest an upcoming event to be listed on this
						calendar, you can use <a href="submit-event.php">our event submission
							form</a>.
					</p>
					<p>
						You can click on each of the events for details, or on the number for a day
						to get the details for all of the events taking place that day.
					</p>
				</div>
				<?php
			}

			// Get events list for a whole month
			$events = $this->load_events($date, TRUE);

			// If there was an error, or there are no events, this is an error
			if ($events === FALSE || count($events) == 0) {
				$errors[] = "No events found for this month";
			}

			// If there were any error, display them
			if (count($errors) > 0) {
				display_errors($errors);
				site_footer();
				exit;
			}

			// Beginning and end of this month
			$bom = mktime(0, 0, 1, $cm, 1, $cy);
			$eom = mktime(0, 0, 1, $cm + 1, 0, $cy);

			// Link to previous month (but do not link to too early dates)
			$lm = mktime(0, 0, 1, $cm, 0, $cy);
			if ($this->valid_year(idate("Y", $lm))) {
				$prev_link = '<a href="' . strftime('?cm=%m&amp;cy=%Y">%B, %Y</a>', $lm);
			}
			else {
				$prev_link = '&nbsp;';
			}

			// Link to next month (but do not link to too early dates)
			$nm = mktime(0, 0, 1, $cm + 1, 1, $cy);
			if ($this->valid_year(idate("Y", $nm))) {
				$next_link = '<a href="' . strftime('?cm=%m&amp;cy=%Y">%B, %Y</a>', $nm);
			}
			else {
				$next_link = '&nbsp;';
			}

			// Print out navigation links for previous and next month
			echo '<br><table id="calnav" width="100%" border="0" cellspacing="0" cellpadding="3">',
			"\n<tr>", '<td align="left" width="33%">', $prev_link, '</td>',
			'<td align="center" width="33%">', strftime('<b>%B, %Y</b></td>', $bom),
			'<td align="right" width="33%">', $next_link, "</td></tr>\n</table>\n";

			// Begin the calendar table
			echo '<table id="cal" width="100%" border="1" cellspacing="0" cellpadding="3">',
			"\n", '<tr>', "\n";

			// Print out headers for weekdays
			for ($i = 0; $i < 7; $i++) {
				echo '<th width="14%">', date("l", mktime(0, 0, 1, 4, $i + 1, 2001)), "</th>\n";
			}
			echo "</tr>\n<tr>";

			// Generate the requisite number of blank days to get things started
			for ($days = $i = date("w", $bom); $i > 0; $i--) {
				echo '<td class="notaday">&nbsp;</td>';
			}

			// Print out all the days in this month
			for ($i = 1; $i <= date("t", $bom); $i++) {
				
				// Print out day number and all events for the day
				echo '<td><a class="day" href="', "?cm=$cm&amp;cd=$i&amp;cy=$cy",
				'">', $i, '</a>';
				$this->display_events_for_day(date("Y-m-", $bom) . sprintf("%02d", $i), $events);
				echo '</td>';
				
				// Break HTML table row if at end of week
				if (++$days % 7 == 0) {
					echo "</tr>\n<tr>";
				}
			}

			// Generate the requisite number of blank days to wrap things up
			for (; $days % 7; $days++) {
				echo '<td class="notaday">&nbsp;</td>';
			}

			// End HTML table of events
			echo "</tr>\n</table>\n";
		}
		
		// Generate the date on which a recurring event falls for a given month
		// $bom and $eom are the first and last day of the month to look at

		function display_events_for_day($day, $events) {
			// For preservation of state in the links
			global $cm, $cy, $COUNTRY;
			
			// For all events, try to find the events for this day
			foreach ($events as $event) {
				
				// Multiday event, which still lasts, or the event starts today
				if (($event['type'] == 2 && $event['start'] <= $day && $event['end'] >= $day)
					|| ($event['start'] == $day)) {
					echo '<div class="event">',
					($COUNTRY == $event['country'] ? "<strong>" : ""),
						'<a class="cat' . $event['category'] . '" href="',
					"?id=$event[id]&amp;cm=$cm&amp;cy=$cy", '">',
					stripslashes(htmlentities($event['sdesc'], ENT_QUOTES | ENT_IGNORE, 'UTF-8')),
					'</a>',
					($COUNTRY == $event['country'] ? "</strong>" : ""),
					'</div>';
				}
			}
		}
		
		// Display a <div> for each of the events that are on a given day

		function load_event($id) {
			// Open events CSV file, return on error
			$fp = @fopen(Site::GetDataDir() . "/events/events.csv", 'r');
			if (!$fp) {
				return FALSE;
			}
			
			// Read as we can, event by event
			while (!feof($fp)) {
				
				$event = $this->read_event($fp);
				
				// Return with the event, if it's ID is the one
				// we search for (also close the file)
				if ($event !== FALSE && $event['id'] == $id) {
					fclose($fp);
					return $event;
				}
			}
			
			// Close file, and return sign of failure
			fclose($fp);
			return FALSE;
		}
		
		// Find a single event in the events file by ID

		function read_event($fp) {
			// We were unable to read a line from the file, return
			if (($linearr = fgetcsv($fp, 8192)) === FALSE) {
				return FALSE;
			}
			
			// Corrupt line in CSV file
			if (count($linearr) < 13) {
				return FALSE;
			}
			
			// Get components
			[
				$day, $month, $year, $country,
				$sdesc, $id, $ldesc, $url, $recur, $tipo, $sdato, $edato, $category,
			] = $linearr;
			
			// Get info on recurring event
			@list($recur, $recur_day) = explode(":", $recur, 2);
			
			// Return with SQL-resultset like array
			return [
				'id'        => $id,
				'type'      => $tipo,
				'start'     => $sdato,
				'end'       => $edato,
				'recur'     => $recur,
				'recur_day' => $recur_day,
				'sdesc'     => $sdesc,
				'url'       => $url,
				'ldesc'     => base64_decode($ldesc),
				'country'   => $country,
				'category'  => $category,
			];
		}
		
		// Load a list of events. Either for a particular day ($from) or a whole
		// month (if second parameter specified with TRUE)

		function load_events($from, $whole_month = FALSE) {
			// Take advantage of the equality behavior of this date format
			$from_date = date("Y-m-d", $from);
			$bom       = mktime(0, 0, 1, idate("m", $from), 1, idate("Y", $from));
			$eom       = mktime(0, 0, 1, idate("m", $from) + 1, 0, idate("Y", $from));
			$to_date   = date("Y-m-d", $whole_month ? $eom : $from);
			
			// Set arrays to their default
			$events = $seen = [];
			
			// Try to open the events file for reading, return if unable to
			$fp = @fopen(Site::GetDataDir() . "/events/events.csv", 'r');
			if (!$fp) {
				return FALSE;
			}
			
			// For all events, read in the event and check it if fits our scope
			while (!feof($fp)) {
				
				// Read the event data into $event, or continue with next
				// line, if there was an error with this line
				if (($event = $this->read_event($fp)) === FALSE) {
					continue;
				}
				
				// Keep event's seen list up to date
				// (for repeating events with the same ID)
				if (!isset($seen[$event['id']])) {
					$seen[$event['id']] = 1;
				}
				else {
					continue;
				}
				
				// Check if event is in our scope, depending on type
				switch ($event['type']) {
					
					// Recurring event
					case 3:
						$date           = $this->date_for_recur($event['recur'], $event['recur_day'], $bom, $eom);
						$event['start'] = date("Y-m-d", $date);
					// Fall through. Now it is just like a single-day event
					
					// Single-day event
					case 1:
						if ($event['start'] >= $from_date && $event['start'] <= $to_date) {
							$events[] = $event;
						}
						break;
					
					// Multi-day event
					case 2:
						if (($event['start'] >= $from_date && $event['start'] <= $to_date)
							|| ($event['end'] >= $from_date && $event['end'] <= $to_date)
							|| ($event['start'] <= $from_date && $event['end'] >= $to_date)) {
							$events[] = $event;
						}
						break;
				}
			}
			
			// Close file and return with results
			fclose($fp);
			return $events;
		}
		
		// Reads an event from the event listing
		// Parameter: opened event listing file

		function date_for_recur($recur, $day, $bom, $eom) {
			
			// $day == 1 == 'Sunday' == date("w",'some sunday')+1
			
			// ${recur}th $day of the month
			if ($recur > 0) {
				$bomd = date("w", $bom) + 1;
				$days = (($day - $bomd + 7) % 7) + (($recur - 1) * 7);
				return mktime(0, 0, 1, idate("m", $bom), $days + 1, idate("Y", $bom));
			}
			
			// ${recur}th to last $day of the month
			else {
				$eomd = date("w", $eom) + 1;
				$days = (($eomd - $day + 7) % 7) + ((abs($recur) - 1) * 7);
				return mktime(0, 0, 1, idate("m", $bom) + 1, -$days, idate("Y", $bom));
			}
		}
		
		// We would not like to allow any year to be viewed, because
		// it would fool some [not clever enough] search engines

		function valid_year($year) {
			// Get current year and compare to one sent in
			$current_year = date("Y");
			
			// We only allow this and the next year for displays
			if ($year != $current_year && $year != $current_year + 1) {
				return FALSE;
			}
			
			// The year is all right
			return TRUE;
		}


		// Displays an event. Used in event submission
		// previews and event information displays
		function display_event($event, $include_date = 1)
		{
			// Current month (int)($_GET['cm'] ?: 0)
			global $cm;
			// Current year (int)($_GET['cy'] ?: 0)
			global $cy;
			
			// Weekday names array
			for ($i = 1; $i <= 7; $i++) {
				$days[$i] = strftime('%A', mktime(12, 0, 0, 4, $i, 2012));
			}
			
			// Recurring possibilities
			$re = array(
				1 => 'First',
				2 => 'Second',
				3 => 'Third',
				4 => 'Fourth',
				-1 => 'Last',
				-2 => '2nd Last',
				-3 => '3rd Last'
			);
			
			if (!isset($event['start']) && isset($event['sday'])) {
				$sday = mktime(12,0,0,$event['smonth'],$event['sday'],$event['syear']);
			} else {
				$sday = (isset($event['start']) && !empty($event['start'])) ? strtotime($event['start']) : 0;
			}
			
			if (!isset($event['end']) && isset($event['eday'])) {
				$eday = mktime(12,0,0,$event['emonth'],$event['eday'],$event['eyear']);
			} else {
				$eday = (isset($event['end']) && !empty($event['end'])) ? strtotime($event['end']) : 0;
			}
			?>
			<table border="0" cellspacing="0" cellpadding="3" width="100%" class="vevent">
				<tr bgcolor="#dddddd"><td>
						<?php
							
							// Print out date if needed
							if ($include_date && (isset($event['start']))) {
								echo "<b>", date("F j, Y", $sday), "</b>\n";
							}
							
							// Print link in case we have one
							if ($event['url']) { echo '<a href="', htmlentities($event['url'], ENT_QUOTES | ENT_IGNORE, 'UTF-8'),'" class="url">'; }
							// Print event description
							echo "<b class='summary'>", stripslashes(htmlentities($event['sdesc'], ENT_QUOTES | ENT_IGNORE, 'UTF-8')), "</b>";
							// End link
							if ($event['url']) { echo "</a>"; }
							
							// Print extra date info for recurring and multiday events
							switch ($event['type']) {
								case 2:
								case 'multi':
									$dtend = date("Y-m-d", strtotime("+1 day", $eday));
									echo " (<abbr class='dtstart'>", date("Y-m-d",$sday), "</abbr> to <abbr class='dtend' title='$dtend'>", date("Y-m-d",$eday), "</abbr>)";
									break;
								case 3:
								case 'recur':
									$days = $re[$event['recur']]. " " .$days[$event['recur_day']];
									if (!$cm || $cy) {
										$cm = idate("m");
										$cy = idate("Y");
									}
									$month = date("M", mktime(0, 0, 0, (int)$cm, 1, (int)$cy));
									$dtstart = date("Y-m-d", strtotime($days . ' 0st' .$month. ' ' .$cy));
									echo ' (Every <abbr class="dtstart" title="'.$dtstart.'">', $days, "</abbr> of the month)";
									break;
							}
							
							// Event category
							if(isset($event['category']) && $event['category']) {
								$cat = array("unknown", "User Group Event", "Conference", "Training");
								echo ' [' . $cat[$event['category']] . '] ';
							}
							
							// Print out country information
							echo ' (<span class="location">' , Countries::COUNTRIES_BY_ALPHA_3[$event['country']] , '</span>)';
						?>
					</td></tr>
				<tr bgcolor="#eeeeee" class="description"><td>
						<?php
							
							// Print long description
							echo preg_replace("/\r?\n\r?\n/", "<br><br>", trim(htmlentities($event['ldesc'],ENT_QUOTES | ENT_IGNORE, 'UTF-8')));
							// If we have an URL, print it out
							if ($event['url']) {
								echo '<br><br><b>URL:</b> ',
								'<a href="', htmlentities($event['url'], ENT_QUOTES | ENT_IGNORE, 'UTF-8'), '">',
								htmlentities($event['url'], ENT_QUOTES | ENT_IGNORE, 'UTF-8'), '</a>';
							}
						?>
					</td></tr>
			</table>
			<?php
		}
	}