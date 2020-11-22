<?php
/**
 * Template Name: Contact
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

			
		<section id="page-content">
			<div  class="container">
				<div class="box">
					<?php the_content(); ?>
				</div>

					<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','themify').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					
					<?php // edit_post_link(__('Edit','themify'), '[', ']'); ?>
			</div>
		</section>	
			

	<?php endwhile; ?>	
</div>


	</div>
	<!-- /body -->
		




	<section id="formsection" class="box">

		<div class="container clearfix">

			<?php echo do_shortcode('[contact-form-7 id="48" title="Contact form 1"]'); ?>

		</div>

	</section>

	<section id="ourclients" class="box">

		<div class="container clearfix">
		
			<h3>OUR CLIENTS</h3>

			<?php 
			    query_posts(array( 
			        'post_type' => 'clients'
			    ) );  
			?>
			<ul>
			<?php while (have_posts()) : the_post(); ?>
			        <li><?php the_post_thumbnail(); ?></li>
			<?php endwhile;?>
			</ul>

		</div>

	</section>


	<footer id="footer">
			
		<div class="container clearfix">
			<?php wp_nav_menu(array('theme_location' => 'footer-nav' , 'fallback_cb' => '' , 'container'  => '' , 'menu_id' => 'footer-nav' , 'menu_class' => 'footer-nav')); ?>
		

			<ul class="social">
				<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
				<li><a class="google" href="#"><i class="fa fa-google"></i></a></li>
			</ul>

			<hr>
<a href="<?php echo get_option('home'); ?>/" class="logofooter"></a>
			<div class="footer-text clearfix">
				&copy; <?php bloginfo(); ?>  <?php echo date( 'Y' ); ?><br>
			</div>
			<!-- /footer-text --> 

		</div>

	</footer>
	<!-- /#footer --> 

</div>
<!-- /#pagewrap -->

<!-- wp_footer -->
<?php wp_footer(); ?>

</body>
</html>