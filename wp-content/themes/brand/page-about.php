<?php
/**
 * Template Name: About
 *
 */
get_header(); ?>

<div id="content" class="clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
			
		<section id="title-content">
			<div  class="container">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<hr>
			</div>
		</section>



<section id="about-boxes">
		<?php if( have_rows('boxes') ): ?>
			<?php $row = 0; ?>
			<?php while( have_rows('boxes') ): the_row(); 
				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$subtitle = get_sub_field('subtitle');
				$content = get_sub_field('content');
			?>

			<?php if ($row % 2 === 0) :?>
							<section class="box">
								<div class="container">
									<h3><?php echo $title; ?></h3>
									<h5><?php echo $subtitle; ?></h5>
									<div class="row">
									    <div class="six columns">
											<img src="<?php echo $image; ?>">
									    </div>
									    <div class="six columns">
											<?php echo $content; ?>
									    </div>
									</div>
							    </div>
							</section>
			 <?php else: ?>
							<section class="box red">
								<div class="container">
									<div class="row">
									    <div class="six columns">
									    	<h3><?php echo $title; ?></h3>
											<h5><?php echo $subtitle; ?></h5>
									    </div>
									</div>
									<div class="row">
									    <div class="six columns">
									    	<?php echo $content; ?>
									    </div>
									    <div class="six columns">
											<img src="<?php echo $image; ?>">
									    </div>
									</div>
							    </div>
							</section>
			<?php endif; ?>

            <?php $row++; endwhile; ?>


		<?php endif; ?>
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




	<?php endwhile; ?>	
</div>
<?php get_footer(); ?>