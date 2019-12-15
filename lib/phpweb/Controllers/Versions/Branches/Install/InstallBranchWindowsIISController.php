<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches\Install;
	
	use phpweb\Controllers\Versions\Branches\BranchRouter;
	use phpweb\Data\Branches\Branch;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class InstallBranchWindowsIISController extends BranchRouter
	{
		protected function invokeForBranch(Request $request, Branch $branch): Response {
			$this->setPageTitle('Install ' . $branch->getBranchId() . ' on Windows + IIS');
			return $this->render(
				function () use ($branch) {
					$this->renderContents($branch);
				}
			);
		}
		
		public function renderContents(Branch $branch) {
			?>
            <p style="float: right">
                <img src="/static/images/logos/installers/iis.png" alt="IIS" style="padding: 1em; padding-top: 0"/>
            </p>
            <p>
                If you're wanting to run PHP <?= htmlspecialchars($branch->getBranchId()) ?> on Windows using
                IIS (Internet Information Services) then you will first need to download the ZIP file from the
                <a href="https://windows.php.net">windows.php.net</a> server.
            </p>

            <p>
                Please pay attention to the additional download and install requirements for the Visual Studio Runtime
                Environment as without these you may encounter an error when attempting to run PHP.
            </p>

            <p>
                This article assumes that you already have IIS installed and have already setup a
                local site with suitable permissions.
            </p>
            <div class="clearfix"></div>

            <h2>Unzipping PHP <?= htmlspecialchars($branch->getBranchId()) ?></h2>
            <p>
                Once you have downloaded the appropriate ZIP file, unzip it to your hard drive.
                You will want to place it in a suitable location. In most cases, it is recommended that
                you create a new directory in C called PHP, and then a subdirectory for the version
                of PHP that you will be installing.
                <br/><br/>

                Example:<br/>
                c:\php\php74
            </p>

            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/unzip.png" alt="Unzip"/>
            </p>

            <h3>Selecting Your INI File</h3>
            <p>
                Most of the PHP configuration options are controlled by a php.ini file.
                You can open, read and edit these files using any simple text editor such as
                notepad or Notepad++.
            </p>
            <p>
                The directory that you just unzipped the PHP code to will now contain two of them,
                one called <em>php.ini-development</em> and one called <em>php.ini-production</em>
                which act as basic templates for the role you're going to use this machine for.
            </p>
            <p>
                <strong>php.ini-development</strong> defaults to showing errors and warnings that will allow
                you to more readily develop and debug code.
            </p>
            <p>
                <strong>php.ini-production</strong> defaults to hiding errors. This should be your template
                if you are going to be running PHP on a public facing server.
            </p>

            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/ini_example.png" alt="Example INI"/>
            </p>

            <p>
                We will assume this is for development purposes, so begin by renaming <em>php.ini-development</em>
                to <em>php.ini</em>.
            </p>

            <h2>Configuring Internet Information Services (IIS) FastCGI</h2>
            <p>
                Running PHP on IIS is most effective using FastCGI. This is a protocol built in to many webservers
                where the webserver will manage a &quot;pool&quot; of processes, and will distribute incoming
                requests to them to process, and then return the result to the web server to send back to the
                person requesting it.
            </p>
            <p>
                To configure IIS with PHP, open up the IIS Manager and click on the Local Machine icon in the
                connections panel to the left to open up the main server configuration.
            </p>
            <p>
                Look for the icon which says FastCGI Settings. If you do not have this option available you may
                need to install the CGI feature of the IIS Role using Windows Features.
            </p>

            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/iis_admin_panel.png" alt="IIS Admin Panel"/>
            </p>

            <p>
                Open up the FastCGI settings window and then click on <em>Add Application</em> on the
                right hand side.
            </p>

            <p>
                The <em>Full Path</em> should be the path to the <em>php-cgi.exe</em> file within the folder
                that you previously unzipped the install files to. Make sure to select the <em>php-cgi.exe</em>
                and not the <em>php.exe</em> file.
            </p>

            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/iis_fastcgi_application.png" alt="IIS Admin Panel FastCGI"/>
            </p>

            <p>
                Good general settings for <em>Instance MaxRequests</em> is 2000, and <em>Max Instances</em> should
                be 2 (this means your web server will process 2 PHP requests at once).
            </p>

            <p>
                Setting the <em>Monitor Changes to File</em>
                to the absolute path of the <em>php.ini</em> that you renamed earlier will automatically restart
                the web server if you change the configuration file, which is useful for development.
            </p>

            <p>
                Once you're done, hit OK and your FastCGI settings list should look something like this:
            </p>

            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/iis_fastcgi_application_done.png"
                     alt="IIS Admin Panel FastCGI"/>
            </p>

            <h2>Configuring Your Site</h2>
            <p>
                Now that you have FastCGI configured to use PHP, you will need to attach it to your site as a handler
                mapping.
            </p>
            <p>
                Select your site from the connections window on the left, and then select handler mappings.
            </p>

            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/iis_handler_mappings.png" alt="IIS Admin Panel Handlers"/>
            </p>

            <p>
                Select the <em>Add Module Mapping</em> option from the right hand side to open up the configuration
                dialog screen.
            </p>

            <p>
                The <em>request path</em> is which types of file this handler is to process, we want to just handle php
                files
                so we add <em>*.php</em>.
            </p>
            <p>
                The <em>Module</em> will be FastCGIModule.
            </p>
            <p>
                The <em>Executable</em> will be the full path to the <em>php-cgi.exe</em> that you unzipped earlier.
                This
                MUST be identical to the path that you entered while configuring the FastCGI executable in the previous
                step.
            </p>
            <p>
                The <em>Name</em> is used for IIS to manage its module mappings, we recommend PHP_via_FastCGI.
            </p>

            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/iis_add_module_mapping.png"
                     alt="IIS Admin Panel Module Mapping"/>
            </p>
            <p>
                Hit OK and the module mapping should appear in the configuration list.
            </p>

            <h2>Testing Your Deployment</h2>
            <p>
                The easiest way to check that PHP has been installed correctly is to try printing the PHP information
                dump.
            </p>
            <p>
                In the root of your webserver directory (the directory hosting your site, NOT the directory you unzipped
                PHP into), add the following file called info.php.
            </p>
            <p style="font-family: 'Courier New'; padding-left: 20px">
				<?php
					echo '<?php phpinfo(); ';
				?>
            </p>

            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/info_file.png"
                     alt="IIS Admin Panel Module Mapping"/>
            </p>

            <p>
                Open your web browser and navigate to the site name that you configured and append info.php onto the
                URL.
            </p>
            <p>
                Tip: If you only have a single site this will usually be http://localhost/info.php.
            </p>
            <p>
                If the installation has succeeded, you will be presented with the PHP info document.
            </p>


            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/phpinfo.png"
                     alt="PHP Info Panel"/>
            </p>

            <h2>Configuring Extensions</h2>
            <p>
                Out of the box, PHP is very bare-bones and has very few functions available.
            </p>
            <p>
                To access more functions such as database connectivity, JSON parsing, UTF8 handling
                or to add additional engine enhancements such as the OPCache
                performance module, we need to enable those extensions.
            </p>
            <p>
                Fortunately, the Windows PHP ZIP packages come with a large number of modules
                already available, they're just not enabled. If you want to see which extensions
                came as standard, you can look in the <em>ext/</em> directory of the location you
                unzipped PHP into.
            </p>
            <p>
                To enable an extension you will need to edit the <em>php.ini</em> file that you renamed
                earlier.
            </p>
            <p>
                Open the <em>php.ini</em> file, the first thing we need to do is set the path to the extension
                directory. That's easy enough as the INI file already has that setting prepared, it's just commented
                out.
            </p>
            <p>
                Search for the following line, and remove the semicolon at the start. This will &quot;uncomment&quot;
                the configuration option and make it active. This will let PHP know to look in the ext directory to find
                extension files.
            </p>

            <p style="font-family: 'Courier New'; background: burlywood; padding: 10px; margin-bottom: 1em">
                <strong>;extension_dir = &quot;ext&quot;</strong>
            </p>
            <p>
                Now it's time to select which extensions you wish to enable, this will heavily depend
                on the requirements of your PHP codebase, and enabling certain extensions will require
                additional configuration options to be added to tell PHP not only that they should be enabled,
                but how they should work.
            </p>

            <p>
                The <em>php.ini</em> file already has entries for all of the extensions it ships with, but they
                are commented out with semicolons. To enable an extension, just remove the semicolon from before
                its name.
            </p>

            <p style="text-align: center">
                <img src="/static/tutorials/install_iis/extensions.png"
                     alt="PHP Extensions"/>
            </p>

            <p>
                Save the <em>php.ini</em> file. If you configured the monitor changes file earlier, your IIS
                server should automatically restart PHP with the new settings. If it doesnt you will need to do
                this manually by issuing &quot;iisreset.exe&quot; from the RUN command using admin privileges.
            </p>
			<?php
		}
	}