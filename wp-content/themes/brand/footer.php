	</div>
	<!-- /body -->
		




	<section id="formsection" class="box">

		<div class="container clearfix">

			<h3>CONTACT US</h3>

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
				<?php if( get_field('facebook_link', 'option') ): ?><li><a class="facebook" href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php endif; ?>
				<?php if( get_field('twitter_link', 'option') ): ?><li><a class="twitter" href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
				<?php if( get_field('instagram_link', 'option') ): ?><li><a class="twitter" href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
				<?php if( get_field('youtube_link', 'option') ): ?><li><a class="youtube" href="<?php the_field('youtube_link', 'option'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li><?php endif; ?>
				<?php if( get_field('vimeo_link', 'option') ): ?><li><a class="vimeo" href="<?php the_field('vimeo_link', 'option'); ?>" target="_blank"><i class="fa fa-vimeo"></i></a></li><?php endif; ?>
				<?php if( get_field('google_link', 'option') ): ?><li><a class="google" href="<?php the_field('google_link', 'option'); ?>" target="_blank"><i class="fa fa-google"></i></a></li><?php endif; ?>
			</ul>

			<hr>

			<a class="logofooter" href="<?php echo get_option('home'); ?>/"></a>

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