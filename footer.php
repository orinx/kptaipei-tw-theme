<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package landscape
 */
?>

</div><!-- #main .site-main -->
</div><!-- #page .hfeed .site -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p style="font-size:16px;">Copyright © 柯文哲官方網站 2014</p>
<?php if(0){ ?>
			<?php do_action( 'landscape_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'landscape' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'landscape' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( '%1$s Theme by %2$s', 'landscape' ), 'Landscape', '<a href="http://blankthemes.com/" rel="designer">Blank Themes</a>' ); ?>
		</div><!-- .site-info -->

<?php } ?>
	</footer><!-- #colophon .site-footer -->


<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50968884-3', 'kptaipei.tw');
  ga('send', 'pageview');

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&appId=1414107302196303&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>

