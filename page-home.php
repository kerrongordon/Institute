<?php
/**
 *Template Name: Home page
 * @package tamcc
 */
get_header(); ?>
	
		<section class="main-homeTitle">
			<div class="container">
				<h2 class="wow fadeInDownBig">What is Renewable Energy?</h2>

				<p class="wow zoomIn hometext center">
					Renewable energy is energy generated from natural resources—such as sunlight, wind, rain , tides and geothermal heat—which are renewable (naturally replenished). Renewable energy technologies range from solar power, wind power, hydroelectricity/micro hydro, biomass and biofuels for transportation.
					<a href="<?php echo get_site_url(); ?>/projects/energy-research/">Learn more</a>
				</p>

				<div class="big-h-icons wow fadeInUpBig">
					<a href="<?php echo get_site_url(); ?>/projects/energy-research/">
					<?php include 'assets/img/Renewable-icons.php'; ?>
					</a>
				</div>
			</div>
		</section>

		<section class="reimportant">
			<div class="container">
				<h3 class="wow zoomIn">Why is Renwable Eneregy Important</h3>

				<ol>
					<li class="wow fadeInRight" data-wow-delay=".20s">Environmental Benefits</li>

					<li class="wow fadeInRight" data-wow-delay=".40s">Energy for our children's children's children</li>

					<li class="wow fadeInRight" data-wow-delay=".60s">Jobs and the Economy</li>

					<li class="wow fadeInRight" data-wow-delay=".80s">Energy Security</li>
				</ol>
			</div>
		</section>

		<section class="highlight">
			<div class="container">
				
								
				<div class="boxg">
				<div class="inboxg">
				<div class="big-h-icons wow fadeInUpBig">
					<a href="<?php echo get_site_url(); ?>/projects/energy-research/">
					<?php include 'assets/img/Purpose.php'; ?>
					</a>
				</div>
				<h3 class="wow fadeInUp">Purpose</h3>
					<p class="wow fadeInLeft hometext center">
					Grenada Innovative Renewable Energy Solution Center For Technology Promotion and Transfer in Developing Communities. 
					</p>
				</div>

				<div class="inboxg">
				<div class="big-h-icons wow fadeInUpBig">
					<a href="<?php echo get_site_url(); ?>/projects/energy-research/">
					<?php include 'assets/img/Classification.php'; ?>
					</a>
				</div>
				<h3 class="wow fadeInUp">Classification</h3>
					<p class="wow fadeInRight hometext center">
					Educational/Community development -Demonstration/Research, institution for Public/Private solar Training/Product Development, Test center. 
					</p>
				</div>
				</div>
			
			</div>
		</section>

<?php get_footer(); ?>