<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Branches\InstallHelpers;
	
	use phpweb\Data\Branches\Branch;
	
	class HelperSearch
	{
		/**
		 * Finds which helpers are available for a particular branch
		 *
		 * @param Branch $branch
		 * @return HelperDescription[]
		 */
		public function findHelpers(Branch $branch): array {
			$helpers = [];
			
			if ($branch->getMajorVer() >= 5) {
				$helpers[] = new HelperDescription(
					'Ubuntu / Debian',
					$branch->getUrl() . 'install/ubuntu_ppa',
					'/static/images/logos/installers/launchpad.png'
				);
			}
			
			$helpers[] = new  HelperDescription(
				'Docker',
				$branch->getUrl() . 'install/docker',
				'/static/images/logos/installers/docker.png'
			);
			
			$helpers[] = new  HelperDescription(
				'Windows IIS',
				$branch->getUrl() . 'install/iis',
				'/static/images/logos/installers/iis.png'
			);
			
			
			
			$helpers[] = new  HelperDescription(
				'Compile from Source',
				$branch->getUrl() . 'install/source',
				'/static/images/logos/installers/php.png'
			);
			
			return $helpers;
		}
	}