<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<!-- begin sidebar -->
<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>

<ul>
	<li>

		<h2><?php _e('Menu'); ?></h2>
		<ul><?php wp_list_pages('depth=1&title_li=' ); ?></ul>
	</li>
	<li>
		<h2><?php _e('Categories'); ?></h2>
		<ul>
		<?php wp_list_cats(); ?>
		</ul>
	</li>

	<li>
		<h2><?php _e('Archives'); ?></h2>
		<ul>
		<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>

	<?php if ( is_home() ) { get_links_list(); } ?>	

<?php endif; ?>
</div>

<!-- end sidebar -->
</aside><!-- #secondary -->
