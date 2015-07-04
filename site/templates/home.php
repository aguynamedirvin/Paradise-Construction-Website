<?php snippet('header') ?>

	<!-- Slider -->
	<div id="main-slider">
		<div class="slide-container">
			
			<div class="slide" style="background-image: url(temp/images/palms.png);">
				<div class="slide-content wrap">
					<div class="slide-meta">
						<div class="big-logo">
							<svg class="icon" role="img">
								<use xlink:href="assets/images/svg-sprite.svg#icon-logo"></use>
							</svg>
						</div>
						<p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe soluta, facere hic officiis. Odio delectus libero itaque eius a quod blanditiis.</p>
						<a href="#contact" class="btn btn-line btn-big">Contact Us</a>
						<a href="#contact" class="btn btn-big">View Projects</a>
					</div>
				</div>
			</div>

			<?php foreach(page('slides')->children()->limit(5) as $slide): ?>
			<div class="slide" style="background-image: url(<?php echo thumb($slide->image($slide->background()), array('width' => 1440, 'height' => 650, 'crop' => true, 'upscale' => true, 'quality' => 80))->url() ?>);">
				<div class="slide-content wrap">
					<div class="slide-meta">
						<?php if ($slide->display_title() != 'false'): ?>
						<h2 class="title"><?php echo $slide->title() ?></h2>
						<?php endif ?>

						<?php if (!$slide->text()->isEmpty()): ?>
						<p class="summary"><?php echo $slide->text() ?></p>
						<?php endif ?>

						<?php if (!$slide->button_text()->isEmpty() && !$slide->button_link()->isEmpty()): ?>
						<a class="btn btn-big <?php ecco($slide->button_style() == 'btn-line', ' btn-line') ?>" href="<?php echo $slide->button_link() ?>">
							<?php echo $slide->button_text() ?>
						</a>
						<?php endif ?>
					</div>
				</div>
			</div>
			<?php endforeach ?>
				
			<div class="slide" style="background-image: url(temp/images/slide1.png);">
				<div class="slide-content wrap">
					<div class="slide-meta">
						<h2 class="title">Slide 2 title</h2>
						<p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nostrum quod, autem cum. Amet distinctio, placeat quos.</p>
						<a href="#contact" class="btn btn-dark">View projects</a>
					</div>
				</div>
			</div>
	
		</div>
	</div>

	<?php snippet('free_estimate') ?>
		
		<!-- Why Us -->
		<section id="why-us" class="section">
			<div class="wrap">
				<div class="section-meta">
					<h2 class="title section-title "><?php echo $page->why_us_title() ?></h2>
				</div>

				<div class="section-content">
					<ul>
						<li class="item">
							<div class="icon-container icon-round">
								<svg class="icon" role="img">
									<use xlink:href="assets/images/svg-sprite.svg#icon-helmet"></use>
								</svg>
							</div>
							<h3 class="service-title"><?php echo $page->decade_experience_title() ?></h3>
							<p class="service-summary"><?php echo $page->decade_experience_summary() ?></p>
						</li>
						<li class="item">
							<div class="icon-container icon-round">
								<svg class="icon" role="img">
									<use xlink:href="assets/images/svg-sprite.svg#icon-layers"></use>
								</svg>
							</div>
							<h3 class="service-title"><?php echo $page->all_in_one_title() ?></h3>
							<p class="service-summary"><?php echo $page->all_in_one_summary() ?></p>
						</li>
						<li class="item last">
							<div class="icon-container icon-round">
								<svg class="icon" role="img">
									<use xlink:href="assets/images/svg-sprite.svg#icon-tools"></use>
								</svg>
							</div>
							<h3 class="service-title"><?php echo $page->top_notch_materials_title() ?></h3>
							<p class="service-summary"><?php echo $page->top_notch_materials_summary() ?></p>
						</li>
					</ul>
				</div>
			</div>
		</section>


		<!-- Projects Gallery -->
		<div id="projects-showcase" class="section">
			
			<div class="section-meta">
				<h2 class="title section-title "><?php echo $page->projects_title() ?></h2>
			</div>

			<div class="section-content">
			
				<!-- Projects -->
				<div class="gallery">

					<?php projects(array('limit' => 4, 'columns' => 4)); ?>
					
				</div>

				<a href="<?php echo page('projects')->url() ?>"><button class="btn btn-line aligncenter"><?php echo $page->view_projects_btn() ?></button></a>
			</div>
		</div>


		<!-- Our services -->
		<div id="our-services" class="section">
			<div class="wrap">
				<div class="section-meta">
					<h2 class="title section-title "><?php echo $page->services_title() ?></h2>
				</div>

				<div class="section-content">
					
					<?php snippet('services') ?>
					
					<a href="<?php echo page('services')->url() ?>"><button class="btn aligncenter"><?php echo $page->services_btn() ?></button></a>
				</div>
			</div>
		</div>



		<!-- Client quotes -->
		<div id="client-quotes" class="section">
			<div class="wrap">
				<div class="section-meta">
					<h2 class="title section-title "><?php echo $page->client_quote_title() ?></h2>
				</div>

				<div class="section-content">
					<div class="quote-slider">
						<?php foreach(page('voices')->children()->limit(5) as $voice): ?>
							<div class="client-quote">
								<blockquote class="quote">&#8220;<?php echo $voice->quote() ?>&#8221;</blockquote>
								<div class="client-name"><?php echo $voice->title() ?></div>
							</div>
						<?php endforeach ?>
					</div>
				</div>

			</div>
		</div>


<?php snippet('footer') ?>