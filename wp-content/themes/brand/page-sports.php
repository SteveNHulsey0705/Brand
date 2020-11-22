<?php
/**
 * Template Name: Sports
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

			<?php endwhile; ?>	



<?php 
    $args = array(
        'post_type' => 'sports-detail',
        'order' => 'ASC',
        'showposts' => 10 
        );

    $the_query = new WP_Query ($args);
?>

<?php if ( have_posts() ) : $count == 0; ?> 







<div class="mobilecontent">




<?php while ( $the_query -> have_posts() ) : $the_query -> the_post();  $count++;  if ($count %2 == 0) :?>

			<section id="page-content" class="rightimage">
					<div  class="container">
					
					<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						  <div class="sport-item">

						  	<div class="image" style="background:url('<?php echo $url; ?>')">
						  		<span class="iris"></span>
						  		<a class="play" href="<?php the_permalink(); ?>"></a>
						  	</div>
						    <div class="info">

									<h3><?php the_title(); ?></h3>

								<?php if( get_field('short_description') ): ?>
									<?php the_field('short_description'); ?>
								<?php endif; ?>

								<a class="button" href="<?php the_permalink(); ?>">READ MORE</a>
						    </div>
						  </div>

					</div>
				</section>

<?php elseif ($count != 0) : ?>


			<section id="page-content">
					<div  class="container">
					
					<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						  <div class="sport-item">

						  	<div class="image" style="background:url('<?php echo $url; ?>')">
						  		<span class="iris"></span>
						  		<a class="play" href="<?php the_permalink(); ?>"></a>
						  	</div>
						    <div class="info">

									<h3><?php the_title(); ?></h3>

								<?php if( get_field('short_description') ): ?>
									<?php the_field('short_description'); ?>
								<?php endif; ?>

								<a class="button" href="<?php the_permalink(); ?>">READ MORE</a>
						    </div>
						  </div>

					</div>
				</section>

		
<?php endif; endwhile;?>




</div>
<div class="desktopcontent">





<?php while ( $the_query -> have_posts() ) : $the_query -> the_post();  $count++;  if ($count %2 == 0) :?>

<section id="page-content">
					<div  class="container">
					<span class="iris"></span>
					<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						  <div class="sport-item">

						    <div class="info">

									<h3><?php the_title(); ?></h3>

								<?php if( get_field('short_description') ): ?>
									<?php the_field('short_description'); ?>
								<?php endif; ?>

								<a class="button" href="<?php the_permalink(); ?>">READ MORE</a>
						    </div>
						    <div class="image" style="background:url('<?php echo $url; ?>')">
						   		<a class="play" href="<?php the_permalink(); ?>"></a>
						  	</div>

						  </div>

					</div>
				</section>

<?php elseif ($count != 0) : ?>


			<section id="page-content">
					<div  class="container">
					<span class="iris"></span>
					<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						  <div class="sport-item">

						  	<div class="image" style="background:url('<?php echo $url; ?>')">
						  		<a class="play" href="<?php the_permalink(); ?>"></a>
						  	</div>
						    <div class="info">

									<h3><?php the_title(); ?></h3>

								<?php if( get_field('short_description') ): ?>
									<?php the_field('short_description'); ?>
								<?php endif; ?>

								<a class="button" href="<?php the_permalink(); ?>">READ MORE</a>
						    </div>
						  </div>

					</div>
				</section>

		
<?php endif; endwhile;?>





</div>





<?php endif; ?>

					
		






		</div>

<?php get_footer(); ?>