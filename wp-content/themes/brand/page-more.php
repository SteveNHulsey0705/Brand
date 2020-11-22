<?php
/**
 * Template Name: More
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
					<div  class="container box">
							<?php the_content(); ?>
							
							<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','themify').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							
							<?php edit_post_link(__('Edit','themify'), '[', ']'); ?>

						  <div class="row">
						    <div class="six columns">

								<section id="we_can_assist_with" class="box red">
									<h3>WE CAN ASSIST WITH</h3>

									<?php if( have_rows('we_can_assist_with') ): ?>

										<ul>

										<?php while( have_rows('we_can_assist_with') ): the_row(); 
											$name = get_sub_field('name');
											$link = get_sub_field('link');
											?>

											<li class="item">
												<?php if( $link ): ?>
													<a href="<?php echo $link; ?>">
												<?php endif; ?>
													<?php echo $name; ?>
												<?php if( $link ): ?>
													</a>
												<?php endif; ?>
											</li>

										<?php endwhile; ?>

										</ul>

									<?php endif; ?>
								</section>

						    </div>
						    <div class="six columns">
								<section id="formsection" class="box red">

										<h3>CONTACT</h3>

										<?php echo do_shortcode('[contact-form-7 id="48" title="Contact form 1"]'); ?>

								</section>
						    </div>
						  </div>
					 </div>



				</section>	
					

			<?php endwhile; ?>	










		</div>

	</div>
	<!-- /body -->
		






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

			<div class="footer-text clearfix">
				&copy; <?php bloginfo(); ?>  <?php echo date( 'Y' ); ?><br>
			</div>
			<!-- /footer-text --> 

		</div>
<a href="<?php echo get_option('home'); ?>/" class="logofooter"></a>
	</footer>
	<!-- /#footer --> 

</div>
<!-- /#pagewrap -->

<!-- wp_footer -->
<?php wp_footer(); ?>

</body>
</html>