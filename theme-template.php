<?php
/**
 * Template Name: Theme Template
 *
 * @package sws
 */

get_header();
?>
<!-- Hometemplate.php -->
<?php

    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content-blocks' );
    endwhile;

get_footer();

?>