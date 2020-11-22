<?php
/**
 * Template Name: Property
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
					</div>
				</section>	


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


			<?php endwhile; ?>	










		</div>

<?php get_footer(); ?>