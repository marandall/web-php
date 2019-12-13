<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches\Install;
	
	use phpweb\Controllers\Versions\Branches\BranchRouter;
	use phpweb\Data\Branches\Branch;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class InstallBranchFromPPAController extends BranchRouter
	{
		private const CGI_LIST = [
			'fpm', 'cli', 'cgi',
		];
		
		private const MODULE_LIST = [
			'bcmath'   => 'BCMath',
			'bz2'      => 'BZip 2',
			'curl'     => 'CURL',
			'dba'      => 'DBA',
			'gd'       => 'GD Image Library',
			'imap'     => 'IMage',
			'intl'     => 'International Support',
			'json'     => 'JSON Handling',
			'mbstring' => 'Multibyte String Handling',
			'mysql'    => 'MYSQL',
			'odbc'     => 'ODBC',
			'opcache'  => 'Opcache',
			'pgsql'    => 'Postgres SQL',
			'snmp'     => 'SNMP',
			'soap'     => 'SOAP',
			'sqllite3' => 'SQLLite3',
			'tidy'     => 'Tidy Module',
			'xml'      => 'XML Parsing and Generation',
			'xls'      => 'XLS Generation',
			'zip'      => 'Zip Archive support',
		];
		
		protected function invokeForBranch(Request $request, Branch $branch): Response {
			$this->setPageTitle('Install ' . $branch->getBranchId() . ' on Ubuntu using Ondřej PPA');
			return $this->render(
				function () use ($request, $branch) {
					$this->renderContents($request, $branch);
				}
			);
		}
		
		public function renderContents(Request $request, Branch $branch) {
			$modules_selected = $request->getQueryBag()->get('m', null);
			if (!is_array($modules_selected)) {
				$modules_selected = [
					'cli', 'fpm', 'opcache',
				];
			}
			
			$commands = ['sudo', 'apt-get', 'install'];
			foreach ($modules_selected as $module) {
				$commands[] = 'php' . $branch->getBranchId() . '-' . $module;
			}
			
			?>
			The Ondřej Surý PPA (Personal Package Archive) is a common way of installing specific versions
			of the PHP runtime on Ubuntu using the APT package manager.
			<br/><br/>
			
			<strong>This is an unofficial source and is not maintained by PHP.net. Use at your own risk.</strong>
			<br/><br/>
			
			<h3>Installation Guide</h3>
			Before you can begin using PHP versions from this repository you must first add the PPA to your
			list of allowed sources:
			<br/><br/>
			<div style="background-color: lightgoldenrodyellow; font-family: 'Courier New'; padding: 1em">
				sudo add-apt-repository ppa:ondrej/php<br/>
				sudo apt-get update<br ><br />
				
				# To update these modules use the installation helper below <br />
				<?= htmlspecialchars(implode(' ', $commands)) ?>
			</div>
			<br/>
			
			<h3>Installation Helper</h3>
			This tool will help you create a command that will install PHP modules from the Ondřej Surý PPA.
			<form method="get" >
				<h4>CGI Methods</h4>
				<?php foreach (self::CGI_LIST as $cgi) { ?>
					<div>
						<input name="m[]" type="checkbox" value="<?= htmlspecialchars($cgi) ?>"
						       <?= (in_array($cgi, $modules_selected, true) ? 'checked="checked"' : '') ?>/>
						<?= htmlspecialchars($cgi) ?>
					</div>
				<?php } ?>
				
				<h4>Extensions</h4>
				<?php foreach (self::MODULE_LIST as $cgi => $label) { ?>
					<div>
						<input name="m[]" type="checkbox" value="<?= htmlspecialchars($cgi) ?>"
						       <?= (in_array($cgi, $modules_selected, true) ? 'checked="checked"' : '') ?>/>
						<?= htmlspecialchars($label) ?>
					</div>
				<?php } ?>
				<br />
				
				<input type="submit" value="Generate Commands"/>
			</form>
			
			<?php
		}
	}