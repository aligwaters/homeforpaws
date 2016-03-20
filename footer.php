<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->
<div id="footer-menu">
<?php wp_nav_menu( array( 'theme_location'=>
'secondary', 'menu_class'=>'foot-menu' ) ); ?>
</div><!-- #footer-menu -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
	        <div id="footer-widgets">
	            <?php if ( is_active_sidebar( 'footer' ) ) : ?>
	                <aside id="widget-foot" class="widget-foot">
	                    <?php dynamic_sidebar( 'footer' ); ?>
	                </aside>
	            <?php endif; ?>
	        </div><!-- end #footer-widgets -->
	        
		<div class="site-info">
			<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>. All Rights Reserved.</p> 
                <p class="credits"><?php printf( __( 'Theme: %1$s by %2$s.', 'Harbani and Ash and Ali' ), 'homeforpaws', '<a href="http://underscores.me" rel="designer">Home For Paws</a>' ); ?></p>
		</div><!-- .site-info -->
			
<div id="footer-menu">
	<?php wp_nav_menu( array( 'theme_location'=>'
	secondary','menu_class'=>'foot-menu' ) ); ?>
		</div><!-- #footer-menu -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


