<?php
/**
 * Template Name: Social Media
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

						  <div class="row">
								<?php if( get_field('subtitle') ): ?>
									<h3><?php the_field('subtitle'); ?></h3>
								<?php endif; ?>


								<?php the_content(); ?>




<?php if( have_rows('items') ): ?>

	<ul class="item-social">

	<?php while( have_rows('items') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$text = get_sub_field('text');
		$link  = get_sub_field('link');
		?>

		<li class="item">

			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>

				<img src="<?php echo $image; ?>" />

			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

			<div class="iteminfo">
		    	<h5><?php echo $title; ?></h5>
		    	<?php echo $text; ?>
		    </div>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>


								
		
			
						    </div>
						  </div>

					</div>
				</section>	
					

			<?php endwhile; ?>	
		</div>

<?php get_footer(); ?>