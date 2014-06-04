<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package landscape
 */

get_header("page"); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template( '', true );
					?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js" type="text/javascript"></script>
<script>
var container = jQuery('.site-content')[0];
var msnry = new Masonry( container, {
  // options
//  columnWidth: 200,
  itemSelector: '.post-item'
});

(function($){

  jQuery(".post-entry").each(function(){
     if($(this).css("left") =="500px"){
       $(this).css("margin-left","40px");
     }
   });

    $("#content").append("<div class='line'></div>");
    $("#content .line").height($("#content").height());

     $("#masthead .more").click(function(){
        $(document).scrollTop($("#main").offset().top);
	return false;
     });
})(jQuery);
</script>


