<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches\Install;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Controllers\Middleware\UiReleasesMiddleware;
	use phpweb\Controllers\Versions\Branches\BranchLoaderMiddleware;
	use phpweb\Data\Branches\Branch;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class InstallBranchDockerController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				UiReleasesMiddleware::class,
				BranchLoaderMiddleware::class,
				$this
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$branch = $request->get(Branch::class);
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Install ' . $branch->getBranchId() . ' via Docker')
				->render(fn() => $this->renderContents($branch));
		}
		
		public function renderContents(Branch $branch) {
			$image_recommendations = [
				[
					'for'         => 'Web Server (FastCGI)',
					'tag'         => $branch->getBranchId() . '-fpm-alpine',
					'description' => 'Recommended for running with NGINX or other FastCGI server',
				],
				[
					'for'         => 'Web Server (Apache)',
					'tag'         => $branch->getBranchId() . '-apache-stretch',
					'description' => 'Used when running as an Apache module',
				],
				[
					'for'         => 'Command Line',
					'tag'         => $branch->getBranchId() . '-cli-alpine',
					'description' => 'Useful for running tools such as composer or batch processes',
				],
			]
			
			?>
            <p style="float: right">
                <img src="/static/images/logos/installers/docker.png" alt="docker"
                     style="padding: 1em; padding-top: 0"/>
            </p>
            <p>
                Docker is the industry standard for running containerised applications. By using a docker
                container you can create a consistent install of PHP that can be run locally or remotely
                without needing to install it on the underlying operating system.
            </p>

            <p>
                This makes it great for both development and production as environments can
                easily be shared between developers and engineering teams.
            </p>


            <div class="clearfix"></div>

            <h2>Official Docker Images</h2>
            <p>
                PHP.net does not offer its own docker images, instead,
                each time PHP.net releases a new version, Docker (the company) automatically downloads
                the latest source code and compiles it multiple times to create various docker images
                which are then made available via the default repository of
                <em><a href="https://hub.docker.com/_/php">docker hub</a></em>.
            </p>
            <p>
                As well as this, additional scripts are provided to make it easy to install additional
                extensions as part of a Dockerfile build process.
            </p>
            <p>
                For a full list of official docker PHP images please see <a href="https://hub.docker.com/_/php">https://hub.docker.com/_/php</a>
            </p>

            <h3>Naming Schemes</h3>
            <p>
                Each unique version of a docker image is given a <em>tag</em> which describes it. Docker provides many
                different PHP images so deciphering which you want can be confusing at first, here's what you need to
                know.
            </p>
            <p>
                Each image is of the form <em>php</em>:<em>version</em>-<em>sapi</em>-<em>base</em> for example
                <em>php:<?= htmlspecialchars($branch->getBranchId()) ?>-fpm-alpine</em>.
            </p>

            <p>
                The <em>version</em> can be either a <em>branch</em> for example <?= htmlspecialchars(
					$branch->getBranchId()
				) ?> or a
                specific release of a branch, such as <?= htmlspecialchars($branch->getBranchId()) ?>.1.
            </p>
            <p>
                Branch tags automatically
                get recompiled with the latest release from their branch and are the recommended images to use, as they
                will always
                be the most recent version whenever you pull them.
            </p>
            <p>
                <em>SAPI</em> means Server API, it determines how PHP actually runs, be it as an independent server
                (FPM),
                a command line interface or an apache module. If you are installing to run a website for development or
                production you should be looking for <em>fpm</em>.
            </p>
            <p>
                The <em>base</em> is what operating system image the PHP image was built upon. This is mainly down to
                what
                other applications and libraries you may need to have inside the image. For the smallest images with the
                least
                overhead, select the <em>alpine</em> base images.
            </p>

            <p>
                Recommendations for PHP <?= htmlspecialchars($branch->getBranchId()) ?>
            </p>
            <table class="standard" style="width: 100%">
                <tbody>
				<?php foreach ($image_recommendations as $recommendation) { ?>
                    <tr>
                        <td style="width: 200px; font-weight: bold"><?= htmlspecialchars($recommendation['for']) ?></td>
                        <td>
                            <a href="https://hub.docker.com/_/php?tab=tags&name=<?= urlencode(
								$recommendation['tag']
							) ?>" target="_blank" rel="nofollow">
								<?= htmlspecialchars($recommendation['tag']) ?>
                            </a>
                        </td>
                        <td><?= htmlspecialchars($recommendation['description']) ?></td>
                    </tr>
				<?php } ?>
                </tbody>
            </table>

            <h2>Installing Extensions</h2>
            <p>
                If you need to install additional extensions, or configure your <em>php.ini</em> file, you will
                need to create your own Dockerfile. This effectively takes an existing docker image and extends it
                to include new features and settings.
            </p>
            <p>
                Fortunately the official docker images contain scripts to help you perform these actions.
            </p>
            <p style="background: burlywood; font-family: 'Courier New';padding: 1em">
                FROM php:<?= htmlspecialchars($image_recommendations[0]['tag']) ?>
	            <br /><br />
	            
	            RUN docker-php-ext-install -j$(nproc) mysqli opcache
	            <br /><br />
	            
	            ADD php.ini /usr/local/etc/php.ini
            </p>
			<p>
				To get the full power out of some extensions, they require additional libraries to be installed
				as part of the build step, an example is the GD image library which depends on various image processing
				libraries being present before being installed.
			</p>
			<p style="background: burlywood; font-family: 'Courier New';padding: 1em">
				FROM php:<?= htmlspecialchars($image_recommendations[0]['tag']) ?>
				<br /><br />
				
				RUN apk add --update --no-cache libgd libpng-dev libjpeg-turbo-dev freetype-dev
				<br /><br />
				
				RUN docker-php-ext-install -j$(nproc) gd
				<br /><br />
				
				ADD php.ini /usr/local/etc/php.ini
			</p>
			<p>
				If you're experiencing failures during your Dockerfile build step then it will often be because
				dependencies are missing.
			</p>
			<?php
		}
	}