<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\API;
	
	use Cassandra\Date;
	use phpweb\Data\Branches\Branches;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class SupportedVersionGraphController
	{
		private const MARGIN_LEFT = 80;
		private const YEAR_WIDTH = 120;
		
		public function __invoke(Request $request): Response {
		    ob_start();
			
			// Sizing constants.
			$margin_left   = 80;
			$margin_right  = 50;
			$header_height = 24;
			$year_width    = 120;
			$branch_height = 30;
			$footer_height = 24;
			
			$branches = Branches::GetBranches();
			$i        = 0;
			
			$branch_tops = [];
			foreach ($branches as $branch_id => $branch) {
				$branch_tops[$branch_id] = $header_height + ($branch_height * $i++);
			}
			
			$years  = iterator_to_array(new \DatePeriod($this->min_date(), new \DateInterval('P1Y'), $this->max_date()));
			$width  = $margin_left + $margin_right + ((count($years) - 1) * $year_width);
			$height = $header_height + $footer_height + (count($branches) * $branch_height);
			
			$now = new \DateTime();
			
			?><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 <?php echo $width ?> <?php echo $height ?>"
                 width="<?php echo $width ?>" height="<?php echo $height ?>">
                <style type="text/css">
                    <![CDATA[
                    @import url(/public/static/fonts/Fira/fira.css);

                    text {
                        fill: #333;
                        font-family: "Fira Sans", "Source Sans Pro", Helvetica, Arial, sans-serif;
                        font-size: <?php echo (2 / 3) * $header_height; ?>px;
                    }

                    g.eol rect,
                    .branches rect.eol {
                        fill: #f33;
                    }

                    g.eol text {
                        fill: white;
                    }

                    g.security rect,
                    .branches rect.security {
                        fill: #f93;
                    }

                    g.stable rect,
                    .branches rect.stable {
                        fill: #9c9;
                    }

                    .branch-labels text {
                        dominant-baseline: central;
                        text-anchor: middle;
                    }

                    .today line {
                        stroke: #f33;
                        stroke-dasharray: 7, 7;
                        stroke-width: 3px;
                    }

                    .today text {
                        fill: #f33;
                        text-anchor: middle;
                    }

                    .years line {
                        stroke: black;
                    }

                    .years text {
                        text-anchor: middle;
                    }

                    ]
                    ]
                    >
                </style>

                <!-- Branch labels -->
                <g class="branch-labels">
					<?php foreach ($branches as $branch_id => $branch) { ?>
                        <g class="<?= $branch_id ?>">
                            <rect x="0" y="<?= $branch_tops[$branch_id] ?>" width="<?= 0.5 * $margin_left ?>"
                                  height="<?= $branch_height ?>"/>
                            <text x="<?= 0.25 * $margin_left ?>"
                                  y="<?= $branch_tops[$branch_id] + (0.5 * $branch_height) ?>">
								<?php echo htmlspecialchars($branch->getBranchId()) ?>
                            </text>
                        </g>
					<?php } ?>
                </g>

                <!-- Branch blocks -->
                <g class="branches">
					<?php foreach ($branches as $branch_id => $branch) { ?>
						<?php
						$x_release = $this->date_horiz_coord($branch->getReleaseDate() ?: new \DateTime());
						$x_bug     = $this->date_horiz_coord($branch->getEolSecurityDate());
						$x_eol     = $this->date_horiz_coord($branch->getEolSecurityDate());
						?>
                        <rect class="stable" x="<?= $x_release ?>" y="<?= $branch_tops[$branch_id] ?>"
                              width="<?= $x_bug - $x_release ?>" height="<?= $branch_height ?>"/>
                        <rect class="security" x="<?php echo $x_bug ?>" y="<?= $branch_tops[$branch_id] ?>"
                              width="<?= $x_eol - $x_bug ?>" height="<?= $branch_height ?>"/>
					<?php } ?>
                </g>

                <!-- Year lines -->
                <g class="years">
					<?php foreach ($years as $date) { ?>
                        <line x1="<?= $this->date_horiz_coord($date) ?>" y1="<?= $header_height ?>"
                              x2="<?=  $this->date_horiz_coord($date) ?>"
                              y2="<?=  $header_height + (count($branches) * $branch_height) ?>"/>
				
                        <text x="<?= $this->date_horiz_coord($date) ?>" y="<?= 0.8 * $header_height ?>">
							<?= $date->format('j M Y') ?>
                        </text>
					<?php } ?>
                </g>

                <!-- Today -->
                <g class="today">
					<?php
						
						
						$x   = $this->date_horiz_coord(new \DateTime());
					?>
                    <line x1="<?= $x ?>" y1="<?= $header_height ?>" x2="<?= $x ?>"
                          y2="<?= $header_height + (count($branches) * $branch_height) ?>"/>
                    <text x="<?= $x ?>" y="<?= $header_height + (count(
								$branches
							) * $branch_height) + (0.8 * $footer_height) ?>">
						<?= 'Today: ' . $now->format('j M Y') ?>
                    </text>
                </g>
            </svg<?php
            
			$code = ob_get_clean();
			return new Response($code, 200, ['Content-Type' => 'image/svg']);
		}
		
		private function min_date() {
			$now = new \DateTime('January 1');
			return $now->sub(new \DateInterval('P3Y'));
		}
		
		private function max_date() {
			$now = new \DateTime('January 1');
			return $now->add(new \DateInterval('P5Y'));
		}
		
		private function date_horiz_coord(\DateTime $date) {
			$diff = $date->diff($this->min_date());
			if (!$diff->invert) {
				return self::MARGIN_LEFT;
			}
			
			return self::MARGIN_LEFT + ($diff->days / (365.24 / self::YEAR_WIDTH));
		}
	}