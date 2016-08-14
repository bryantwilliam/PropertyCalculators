<?php
/**
 * @package Sydney
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
	    <?php include('html/loanrepayment.html'); ?>
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
