<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package landscape
 */

get_header(); ?>

		<section id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( '[ %s ] 的搜尋結果', 'landscape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>


			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</section><!-- #primary .content-area -->

  <?php landscape_content_nav( 'nav-above' ); ?>
<?php if(0){ ?>
  <?php landscape_content_nav( 'nav-below' ); ?>
<?php } ?>
	


<?php get_sidebar(); ?>
<?php get_footer(); ?>
