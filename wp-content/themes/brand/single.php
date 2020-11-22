<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="page-content" class="list-post box">
		<div  class="container">

	  <div class="row">
	    <div class="nine columns">	


				<?php if(!is_single()) : global $more; $more = 0; endif; //enable more link ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class("post clearfix $class"); ?>>

					<time datetime="<?php the_time('o-m-d') ?>" class="post-date" pubdate><?php the_time('M j, Y') ?></time>
					
					<h1 class="post-title"><?php the_title(); ?></h1>

					<p class="post-meta"> 
						<span class="post-category"><?php the_category(', ') ?></span>
						<?php the_tags(' <span class="post-tag">', ', ', '</span>'); ?>
						<?php if ( comments_open() ) : ?>
							<span class="post-comment"><?php comments_popup_link( __( '0 Comment', 'themify' ), __( '1 Comment', 'themify' ), __( '% Comments', 'themify' ) ); ?></span>
						<?php endif; //post comment ?>
					</p>
						
					<?php if( get_field('video') ): ?>
						<div style="margin-bottom: 3rem" class="videoWrapper"><?php the_field('video'); ?></div>
					<?php endif; ?>


					<?php the_content(); ?>
					
					<?php edit_post_link(__('Edit', 'themify'), '[', ']'); ?>
					
				</article>
				<!-- /.post -->



			<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','themify').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			<?php // get post-nav.php (next/prev post link) ?>
			<?php get_template_part( 'includes/post-nav'); ?>

			<?php // get comment template (comments.php) ?>
			<?php // comments_template(); ?>
		</div>

		<div class="three columns">
			 <?php get_sidebar(); ?>
		</div>
	</div>
	

	</div>
	<!-- /#content -->

<?php endwhile; ?>

	
<?php get_footer(); ?>