<?php
/* 
*Plugin name: Assignment three Home for Paws 
*Description: A plugin that creates a custom post shortcode as well as a sidebar widget that allows users to change custom posts seen. 
*Version: 1.0
*Author: Alexandra, Ashley, Harbani 
*Work adapted from: https://codex.wordpress.org/Post_Types, https://www.airpair.com/wordpress/posts/developing-wordpress-plugin-from-scratch, https://generatewp.com/shortcodes/? https://github.com/thingsym/custom-post-type-widgets/blob/master/custom-post-type-widgets.phpclone=recent-posts-shortcode, http://michaelsoriano.com/wordpress-widget-custom-post-types/
*/
/* Widget for custom post type widget */

/* init */
function hfp_custom_post_type (){

}
add_action ('init', 'hfp_custom_post_type');
// Add Shortcode

function recent_posts_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'posts' => '5',
		), $atts )
	);

	// Code
	$output = '<ul>';
	
	$the_query = new WP_Query( array ( 'posts_per_page' => $posts ) );
	
	while ( $the_query->have_posts() ):
		$the_query->the_post();
		$output .= '<li>' . get_the_title() . '</li>';
	endwhile;
	
	wp_reset_postdata();
	
	$output .= '</ul>';
	
	return $output;
	
}
add_shortcode( 'recent-posts', 'recent_posts_shortcode' ); /* Adds Shortcode Function to the Plugin */

function n2wp_latest_cpt_init() {
if ( !function_exists( 'register_sidebar_widget' ))
return;

function n2wp_latest_cpt($args) {
global $post;
extract($args);

// These are our own options for the Shortcode
$options = get_option( 'n2wp_latest_cpt' );
$title = $options['title']; // Widget title
$phead = $options['phead']; // Heading format
$ptype = $options['ptype']; // Post type
$pshow = $options['pshow']; // Number of Tweets

$beforetitle = '';
$aftertitle = '';

// Output
echo $before_widget;

if ($title) echo $beforetitle . $title . $aftertitle;

$pq = new WP_Query(array( 'post_type' => $ptype, 'showposts' => $pshow ));
if( $pq->have_posts() ) :
?>
<ul>
<ul><?php while($pq->have_posts()) : $pq->the_post(); ?>
    <li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
</ul>
</ul>
<?php wp_reset_query();
endwhile; ?>

<?php endif; ?>


<?php
// echo widget closing tag
echo $after_widget;
}

/**
* Widget settings form function
*/
function n2wp_latest_cpt_control() {

// Get options
$options = get_option( 'n2wp_latest_cpt' );
// options exist? if not set defaults Leads to the widget appearing in the widgets section on the WordPress Dashboard.
if ( !is_array( $options ))
$options = array(
'title' => 'Latest Posts',
'phead' => 'h2',
'ptype' => 'post',
'pshow' => '5'
);
// Get options for form fields to show
$title = $options['title'];
$phead = $options['phead'];
$ptype = $options['ptype'];
$pshow = $options['pshow'];

// The widget form fields
?>

<label for="latest-cpt-title"><?php echo __( 'Widget Title' ); ?>
<input id="latest-cpt-title" type="text" name="latest-cpt-title" size="30" value="<?php echo $title; ?>" />
</label>

<label for="latest-cpt-phead"><?php echo __( 'Widget Heading Format' ); ?></label>

<select name="latest-cpt-phead"><option selected="selected" value="h2">H2 - <h2></h2></option><option selected="selected" value="h3">H3 - <h3></h3></option><option selected="selected" value="h4">H4 - <h4></h4></option><option selected="selected" value="strong">Bold - <strong></strong></option></select><select name="latest-cpt-ptype"><option value="">- <?php echo __( 'Select Post Type' ); ?> -</option></select><?php $args = array( 'public' => true );
$post_types = get_post_types( $args, 'names' );
foreach ($post_types as $post_type ) { ?>

<select name="latest-cpt-ptype"><option selected="selected" value="<?php echo $post_type; ?>"><?php echo $post_type;?></option></select><?php } ?>

<label for="latest-cpt-pshow"><?php echo __( 'Number of posts to show' ); ?>
<input id="latest-cpt-pshow" type="text" name="latest-cpt-pshow" size="2" value="<?php echo $pshow; ?>" />
</label>

<input id="latest-cpt-submit" type="hidden" name="latest-cpt-submit" value="1" />
<?php
}
 /* Appears in the Sidebar of our Page - Called in the Footer */
wp_register_sidebar_widget( 'widget_latest_cpt', __('Latest Custom Posts'), 'n2wp_latest_cpt' );
wp_register_widget_control( 'widget_latest_cpt', __('Latest Custom Posts'), 'n2wp_latest_cpt_control', 300, 200 );

}
add_action( 'widgets_init', 'n2wp_latest_cpt_init' );

?>
