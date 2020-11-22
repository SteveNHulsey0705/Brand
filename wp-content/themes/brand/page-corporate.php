<?php
/**
 * Template Name: Corporate
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

					
				<section id="page-content" class="box">

					<div  class="container">
							<?php the_content(); ?>

							<a class="buttoncorporate" href="<?php echo get_option('home'); ?>/contact">CONTACT US FOR YOUR NEXT CORPORATE VIDEO </a>
					</div>

					<section id="videos" class="container">

						<?php if( have_rows('videos') ): ?>

							<ul>

							<?php while( have_rows('videos') ): the_row(); 
								$title = get_sub_field('title');
								$video = get_sub_field('video');
								?>

								<li class="item">
										<div class="video-container"><?php echo $video; ?></div>
										<p><?php echo $title; ?></p>
								</li>

							<?php endwhile; ?>

							</ul>

						<?php endif; ?>
					</section>

					<div  class="container bottom_content">
						<?php if( get_field('bottom_content') ): ?>
							<?php the_field('bottom_content'); ?>
						<?php endif; ?> 
					</div>

			
					



				</section>	
					

			<?php endwhile; ?>	










		</div>

<?php get_footer(); ?>