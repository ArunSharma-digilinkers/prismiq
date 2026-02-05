<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>
<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="main-wrapper">
	<div class="main-cover">
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-4 side-nav-wrap">
					<?php include_once('components/side-nav.php'); ?>
				</div>
				<div class="col-lg-9 col-md-8">

					<div class="page-banner page-banner--about">
						<div class="page-banner-caption">
							<h5 class="txt-light txt-capitalize">Components</h5>
						</div>
					</div>

					<!-- Two column layout 1 -->
					<section class="section section-entry" id="two-col-layout-1">
						<div class="container">
							<div class="section-title">
								<h2>Two column layout with background image</h2>
							</div>
							<?php include_once('components/two-column-layout-1.php'); ?>
						</div>
					</section>

					<!-- Side card layout 1 -->
					<section class="section section-entry" id="side-card-layout-1">
						<div class="container">
							<div class="section-title">
								<h2>Side cards layout 1</h2>
							</div>
							<?php include_once('components/side-card-layout-1.php'); ?>
						</div>
					</section>

					<!-- Three column layout 1 -->
					<section class="section section-entry" id="three-col-layout-1">
						<div class="container">
							<div class="section-title">
								<h2>Three column card layout 1</h2>
							</div>
							<?php include_once('components/three-column-card-layout-1.php'); ?>
						</div>
					</section>

					<!-- Three column layout 2 -->
					<section class="section section-entry" id="three-col-layout-2">
						<div class="container">
							<div class="section-title">
								<h2>Three column card layout 2</h2>
							</div>
							<?php include_once('components/three-column-card-layout-2.php'); ?>
						</div>
					</section>

					<!-- Togglers -->
					<section class="section section-entry" id="togglers-layout">
						<div class="container">
							<h2 class="mrb30">Togglers</h2>
							<ul class="toggler-list">
								<li><img src="<?php echo $path; ?>img/toggler.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler1.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler2.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler3.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler4.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler5.png" alt="" class="img-fluid"></li>
							</ul>
							<ul class="toggler-list toggler-list-white">
								<li><img src="<?php echo $path; ?>img/toggler-w.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler1-w.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler2-w.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler3-w.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler4-w.png" alt="" class="img-fluid"></li>
								<li><img src="<?php echo $path; ?>img/toggler5-w.png" alt="" class="img-fluid"></li>
							</ul>
						</div>
					</section>

					<!-- Buttons -->
					<section class="section section-entry" id="buttons-layout">
						<div class="container">
						<h2 class="mrb30">Buttons</h2>
							<div class="hr-spacer">
								<!-- Button type 1 -->
								<a href="#" class="btn c-btn"><span>Know more</span></a>
							</div>
							<div class="hr-spacer">
								<!-- Button type 2 -->
								<a href="#" class="btn c-btn s2"><span>Know more</span></a>
							</div>
							<div class="hr-spacer">
								<!-- Button type 3 -->
								<a href="#" class="btn c-btn s3">Button</a>
							</div>
							<div class="hr-spacer">
								<!-- Button type 4 -->
								<a href="#" class="btn c-btn s4"><span>Get started</span></a>
							</div>
						</div>
					</section>				

				</div>
			</div>
		</div>
	</div>
</main> 


<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
