<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Templates;
	
	use phpweb\Data\Conferences\Conference;
	use phpweb\Data\Conferences\ConferenceRepository;
	use phpweb\Services;
	
	class ConferencesPanel implements SidePanelInterface
	{
		public function getTitle(): string {
			return 'Conferences';
		}
		
		public function draw() {
			/** @var Conference[] $conferences */
			$conferences = Services::get(ConferenceRepository::class)->upcoming();
			shuffle($conferences);
			
			$conferences = array_values(array_slice($conferences, 0, 3));
			
			foreach ($conferences as $index => $conference) {
				?>
                <div class="r2-conference-panel" style="padding: 0px">
                    <table style="width: 100%; margin-bottom: 0">
                        <tbody>
                        <tr>
                            <td style="width: 80px; height: 80px; background-image: url('<?= htmlspecialchars(
		                        $conference->getImageUrl()
	                        ) ?>'); background-size: contain; background-position: center center; background-repeat: no-repeat">

                            </td>
                            <td style="padding-left: 20px; text-align: left">
                                <div style="font-weight: bold; left; margin-bottom: 0.5em"><?= htmlspecialchars(
				                        $conference->getTitle()
			                        ) ?></div>
                                <div><?= htmlspecialchars($conference->getStartDate()->format('d M Y')) ?></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
				<?php
                if ($index !== count($conferences) - 1) {
                    echo '<hr style="border: 1px dotted #cccccc; margin-top: 1em; margin-bottom: 1em" />';
                }
			}
		}
	}