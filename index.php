<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Home_for_Paws
 */
/*displays the header*/
get_header(); ?> 

	<div id="primary" class="content-area"> 
		<main id="main" class="site-main" role="main">
	</br>
<p class=>
<img src="http://phoenix.sheridanc.on.ca/~ccit3432/wp-content/uploads/2016/03/bostonterrier.jpg" id="dogone" alt="photo of boston terrier" title="boston terrier">
<img src="http://phoenix.sheridanc.on.ca/~ccit3432/wp-content/uploads/2016/03/chihuahua.jpg" id="dogtwo" alt="photo of chihuahua pups" title=" chihuahuas">
<img src="http://phoenix.sheridanc.on.ca/~ccit3432/wp-content/uploads/2016/03/pug.jpg" id="dogthree" alt="photo of pug" title="pug">
</p>

</div>
	
<div id="tableone">
<h2 class="homehead">Testimonials</h2>
<p>"Home For Paws helped us give our fur baby a forever home. We love you, Fido!" - Jan and Lisa Smith</p>
<p>"You guys made the adoption process so thorough but so easy" - Ulrich McDoodle</p>
<p>"Find a pup for you with Home For Paws! Do it now!" - Xenu Cruise</p>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
get_footer(); 