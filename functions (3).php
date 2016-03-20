<?php
/*
Alexandra Waters
flullychild
Lab2 
*/
function cd_child_enqueue_scripts(){
	wp_enqueue_style( 'parent-css', get_template_directory_uri() .'/style.css' );
}
add_action ( 'wp_enqueue_scripts', 'cd_child_enqueue_scripts' ); 
/* 
Derived from https://codex.wordpress.org/Customizing_the_Read_More
Changing the more... 
*/
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Continue</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* side bar 
Discussion board help and slides 
Fluffy 
Codediva.com
*/

add_action('widgets_init', 'cd_child_widgets_init');

function cd_child_widgets_init (){
register_sidebar(array(
'name'=> __('Sidebar','codediva'),
'id'=> 'the_sidebar',
'before_widget'=> '<aside id="%1$s" class="widget %2$s">',
'after_widget'=> '</aside>',
'before_title'=> '<h1 class="widget-title">',
'after_title'=> '</h1>',
));
}

/* derived from http://www.1dogwoof.com/2013/11/how-to-add-a-signature-to-all-wordpress-posts.html
*/ 
// Adds a Signature Image after single post
add_filter('the_content','add_signature', 1);
function add_signature($text) {
 global $post;
 if(($post->post_type == 'post')) 
    $text .= '<div class="signature"><img src="http://phoenix.sheridanc.on.ca/~ccit3432/wp-content/uploads/2016/02/signature-1.png"></div>';
    return $text;
}
/*
Derived from https://developer.wordpress.org/reference/functions/the_excerpt/
change the read more...
*/
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Continue', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
/*
From CodeDiva, fluffy master 
*/
function cd_posts_navigation() {
	if ( $GLOBALS['wp_query']->max_num_pages < 5 ) {
		return;
	}
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'fluffychild' ); ?></h2>
		<div class="nav-links">

			
			<div class="nav-previous"><?php next_posts_link(__( 'Back Please', 'fluffychild' ) ); ?></div>
			
			
			<div class="nav-next"><?php previous_posts_link( __( 'New Please', 'fluffychild' )  ); ?></div>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

/*
derived from http://codeplaylove.com/add-a-custom-gravatar/
custom avatar 
*/

add_filter( 'avatar_defaults', 'cd_custom_gravatar' );
 
function cd_custom_gravatar ($avatar_defaults) {
    $myavatar = 'http://phoenix.sheridanc.on.ca/~ccit3432/wp-content/uploads/2016/02/gavatar.jpg';
    $avatar_defaults[$myavatar] = __( 'Custom Gravatar', 'YOUR TEXT DOMAIN' );
    return $avatar_defaults;
}
/* codex
*/ 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200);