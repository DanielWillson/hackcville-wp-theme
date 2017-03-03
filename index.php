<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
 
<h1>Hi, this is Julius.</h1>
<h1>Hi, this is Daniel.</h1>

    <?php get_template_part( 'loop', 'index' ); ?>
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>