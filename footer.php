<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Home_for_Paws
 */

?>
wordpress

<?php
/**
 * The footer template file.
 * @package MaidenHair
 * @since MaidenHair 1.0.0
*/
?>
  </div> <!-- end of main-content -->
  </div> <!-- end of wrapper-content -->
<footer id="wrapper-footer">
<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) { ?>
  <div id="footer">
<?php if ( !is_page_template('template-landing-page.php') ) { ?>
    <div class="footer-widget-area footer-widget-area-1">
<?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>    
    <div class="footer-widget-area footer-widget-area-2">
<?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div>   
    <div class="footer-widget-area footer-widget-area-3">
<?php dynamic_sidebar( 'sidebar-4' ); ?>
    </div>
<?php } ?>
  </div>
<?php } ?>
<?php if ( dynamic_sidebar( 'sidebar-5' ) ) : else : ?>
<?php endif; ?>
</footer>  <!-- end of wrapper-footer -->
</div> <!-- end of container-shadow -->
</div> <!-- end of container -->
<?php wp_footer(); ?>     
</body>
</html>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'home-for-paws' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'home-for-paws' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'home-for-paws' ), 'home-for-paws', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
