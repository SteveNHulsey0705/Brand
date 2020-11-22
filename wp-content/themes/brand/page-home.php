<?php
/**
 * Template Name: Home
 *
 */
get_header(); ?>

<div id="content" class="clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
			

	<section style="background: url('<?php the_field("background_top"); ?>')" class="hometop box">

		<div class="container">

			<div class="row">
		   	 	<div class="seven columns">
					<?php if( get_field('video') ): ?>
						<div class="video-container"><?php the_field('video'); ?></div>
					<?php endif; ?>
		   	 	</div>
		   	 	<div class="five columns">
		   	 		<?php echo do_shortcode('[contact-form-7 id="163" title="Home Form"]'); ?>
		   	 	</div>
		  	</div>

		</div>

	</section>


	<section class="featured_boxes">
		<div class="container">
			<?php if( have_rows('featured_boxes') ): ?>

					<?php while( have_rows('featured_boxes') ): the_row(); 
						$image = get_sub_field('image');
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						$button_text = get_sub_field('button_text');
						$link = get_sub_field('link');
					?>

						<div class="featured-item" style="background: url('<?php echo $image;?>')"><span class="bgBlack"></span>
				    		<h5><?php echo $title; ?></h5>
						    <?php echo $text; ?>
							<a href="<?php echo $link; ?>"><?php echo $button_text; ?></a>
						</div>
					

					<?php endwhile; ?>

				<?php endif; ?>
			</div>
		</section>




<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" />

	<section class="testimonials">

		<div class="titlecontent">
			<div class="container">
				<h3><span></span>TESTIMONIALS<span></span></h3>
			</div>
		</div>








		<?php if( have_rows('testimonials') ): ?>
<ul class="testimonialsslide">
			<?php while( have_rows('testimonials') ): the_row(); 
				$photo = get_sub_field('photo');
				$text = get_sub_field('text');
				$name = get_sub_field('name');
				$position = get_sub_field('position');
			?>


				<li class="testimonial-item">
					<div class="container">
							<span class="iris"></span>
						    <div class="image" style="background: url('<?php echo $photo; ?>')">
						    </div>
					    	<div class="info">
							    <?php echo $text; ?>
							    <h5><?php echo $name; ?></h5>
								<span><?php echo $position; ?></span>
							</div>
					</div>
				</li>

			<?php endwhile; ?>
</ul>
		<?php endif; ?>

		<script>
			$(document).ready(function(){
			  $('.testimonialsslide').bxSlider({
			  mode: 'fade',
			  auto: true,
			  autoControls: true,
			  pause: 6000
			  });
			});
		</script>

	</section>



	<section class="home_bottom">
		<div class="container">

			<div class="row">
		   	 	<div class="six columns">
		   	 		<h3>WHO WE ARE</h3>

		   	 		<div class="row">
		   	 			<div class="four columns">
							<?php if( get_field('who_we_are_image') ): ?>
								<img src="<?php the_field('who_we_are_image'); ?>">
							<?php endif; ?>
						</div>
						<div class="eight columns">
							<?php if( get_field('who_we_are_text') ): ?>
								<?php the_field('who_we_are_text'); ?>
							<?php endif; ?>
							<?php if( get_field('who_we_are_link') ): ?>
								<a class="button" href="<?php the_field('who_we_are_link'); ?>">READ MORE</a>
							<?php endif; ?>
						</div>
					</div>
		   	 	</div>
		   	 	<div class="six columns red">
		   	 		<h3>SERVICES</h3>
					<ul>
					<?php if( have_rows('services') ): ?>

							<?php while( have_rows('services') ): the_row(); 
								$title = get_sub_field('title');
								$link = get_sub_field('link');
							?>

								<li>
						    		<?php if( $link ): ?><a href="<?php echo $link; ?>"><?php endif; ?><?php echo $title; ?><?php if( $link ): ?></a><?php endif; ?>
								    
								</li>
							

							<?php endwhile; ?>

						<?php endif; ?>
					</ul>

		   	 	</div>
		  	</div>




		</div>
	</section>



	<?php endwhile; ?>	
</div>
<?php get_footer(); ?>