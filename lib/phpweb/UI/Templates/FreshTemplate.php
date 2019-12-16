<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Templates;
	
	class FreshTemplate implements RendererInterface
	{
		public function render(PHPWebTemplate $tpl, callable $body) {
			$config = [
				'headsup'         => '',
				'meta-navigation' => [],
				'languages'       => [],
				'thispage'        => '',
			];
			
			$css = $tpl->getCssFiles();
			$css[] = '/static/r2/css/r2.css';
			
			?>
			<!DOCTYPE html>
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
				<title>PHP: <?= htmlspecialchars($tpl->getPageTitle()) ?></title>
				
				<link rel="shortcut icon" href="/favicon.ico">
				
				<link rel="search" type="application/opensearchdescription+xml"
				      href="/opensearch.xml" title="Add PHP.net search">
				
				<link rel="alternate" type="application/atom+xml" href="/releases/api/releases.xml"
				      title="PHP Release feed">
				
				<link rel="alternate" type="application/atom+xml" href="/feed.atom"
				      title="PHP: Hypertext Preprocessor">
				
				<?php foreach ($config["meta-navigation"] as $rel => $page): ?>
					<link rel="<?php echo $rel ?>" href="/<?php echo $page ?>">
				<?php endforeach ?>
				
				<?php foreach ($config["languages"] as $code): ?>
					<link rel="alternate"
					      href="/manual/<?php echo $code ?>/<?php echo $config["thispage"] ?>"
					      hreflang="<?php echo $code ?>">
				<?php endforeach ?>
				
				<?php foreach ($css as $filename): ?>
					<link rel="stylesheet" type="text/css"
					      href="<?= htmlspecialchars($filename) ?>" media="screen">
				<?php endforeach ?>
				
				<!--[if IE]>
				<script src="/public/static/js/ext/html5.js"></script>
				<![endif]-->
				
				<?php foreach ($tpl->getJscriptFiles() as $file) { ?>
					<script type="text/javascript" src="<?= htmlspecialchars($file) ?>"></script>
				<?php } ?>
			</head>
			<body>
			
			<nav id="head-nav" class="navbar navbar-fixed-top">
				<div class="navbar-inner clearfix">
					<a href="/" class="brand"><img src="/static/images/logos/php-logo.svg" width="48" height="24"
					                               alt="php"></a>
					<div id="mainmenu-toggle-overlay"></div>
					<input type="checkbox" id="mainmenu-toggle">
					<ul class="nav">
						<?php foreach ($tpl->getPageHeaders() as $k => $header) { ?>
							<li class="<?= ($tpl->getActivePage() === $k) ? 'active' : '' ?> top-menu top-menu-<?= htmlspecialchars(
								$k
							) ?>" data-menu="<?= htmlspecialchars($k) ?>">
								<a href="<?= htmlspecialchars($header['url']) ?>">
									<?= htmlspecialchars($header['title']) ?>
								</a>
							</li>
						<?php } ?>
					</ul>
					<form class="navbar-search" id="topsearch" action="/search/search.php">
						<input type="hidden" name="show" value="quickref">
						<input type="search" name="pattern" class="search-query" placeholder="Search" accesskey="s">
					</form>
				</div>
				<div id="flash-message"></div>
			</nav>
            
            <div class="r2-outer" style="width: 100%; background-color: white; color: black">
                <div style="width: 1200px; display: grid; grid-template-columns: auto 330px; margin-left: auto; margin-right: auto; grid-column-gap: 10px">
                    <div class="r2-inner-left" style="background-color: #ffffff" >
                        <div style="padding: 10px; padding-left: 0">
                            <h1 style="margin-top: 10px"><?= htmlspecialchars($tpl->getPageTitle()) ?></h1>
	
	                        <?php foreach ($tpl->getErrorPanels() as $panel) { ?>
                                <div style="margin-bottom; 1em; background-color: darkred; color: white; padding: 1em">
			                        <?php $panel->draw(); ?>
                                </div>
	                        <?php } ?>
	
	                        <?php $body(); ?>
                        </div>
                    </div>
                    <div class="r2-inner-nav" >
                        <br />
	                    <?php foreach (array_reverse($tpl->getSidePanels()) as $panel) { ?>
                            <div class="r2-side-panel">
                                <div class="r2-side-panel-title">
                                    <?= htmlspecialchars($panel->getTitle()) ?>
                                </div>
                                <div class="r2-side-panel-contents">
	                                <?php $panel->draw(); ?>
                                </div>
                            </div>
	                    <?php } ?>
                    </div>
                </div>
            </div>
            
			<footer>
				<div class="container footer-content">
					<div class="row-fluid">
						<ul class="footmenu">
							<li><a href="/about/copyright.php">Copyright &copy; 2001-<?= date('Y') ?> The PHP Group</a>
							</li>
							<li><a href="/my.php">My PHP.net</a></li>
							<li><a href="/about/contact.php">Contact</a></li>
							<li><a href="/about/sites.php">Other PHP.net sites</a></li>
							<li><a href="/about/privacy.php">Privacy policy</a></li>
						</ul>
					</div>
				</div>
			</footer>
			
			<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top"
			                                                                    src="/static/images/to-top@2x.png"></a>
			
			<?php foreach ($tpl->getPageHeaders() as $nav_id => $header) {
				if (count($header['sections']) === 0) {
					continue;
				}
				?>
				<div style="line-height: 1em; display: none; width: 100%; height: 200px; background-color: #eeeeee; position: fixed; top: 48px; left: 0; right: 0; z-index: 10000"
				     class="nav-<?= $nav_id ?> top-menu" data-menu="<?= $nav_id ?>">
					<div class="inner-align" style="margin-left: auto; margin-right: auto; padding: 10px">
						<div style="display: flex; flex-direction: row">
							<?php foreach ($header['sections'] as $category_label => $links) { ?>
								<div style="padding: 10px; width: 200px">
									<div style="font-weight: bold; margin-bottom: 0.5em; color: #555555">
										<?= htmlspecialchars($category_label) ?>
									</div>
									<?php foreach ($links as $url => $link_label) { ?>
										<div style="margin-bottom: 0.5em">
											<a href="<?= htmlspecialchars($url) ?>"
											   style="text-decoration: none !important; font-size: 14px; color: #333333"><?= htmlspecialchars(
													$link_label
												) ?></a>
										</div>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
			<script type="text/javascript">
                $(function () {
                    var top_bar = $('#head-nav'),
                        layout_area = $('#layout-content');

                    $('.top-menu').each(function () {
                        var self = $(this),
                            menu_id = $(this).attr('data-menu'),
                            target = $('.nav-' + menu_id);

                        function show() {
                            if ($(window).width() > 900) {
                                target.find('.inner-align').css('width', layout_area.width() + 'px');
                                target.show();
                            }
                        }

                        function hide() {
                            target.hide();
                        }

                        target.css('top', (top_bar.outerHeight() - 5) + 'px');

                        self.mouseenter(show).mouseleave(hide);
                        target.mouseenter(show).mouseleave(hide);
                    });
                });
			</script>
			</body>
			</html>
			<?php
		}
	}