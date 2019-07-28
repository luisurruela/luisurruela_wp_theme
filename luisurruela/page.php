<?php get_header() ?>

<div class="container-fluid mt-md-5 mb-md-5 mt-4 mb-4 pl-4 pr-4">
	<div class="row">
		<div class="col-md-9">
			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="post pl-md-4">
						 
						 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

						 <small>Escrito el <?php the_time('d') ?> de <?php the_time(' F '); ?> de <?php the_time(' Y ') ?> por <?php the_author_posts_link(); ?></small>
						 
						  <div class="entry mt-4">
						  	<?php the_content(); ?>
						  </div>

					</div>		    
				<?php endwhile ?>
			<?php endif ?>

		</div>
		
		<div class="col-md-3">
			<?php get_sidebar() ?>
		</div>

	</div>
</div>

<?php get_footer() ?>