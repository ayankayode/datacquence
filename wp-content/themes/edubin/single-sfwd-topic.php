<?php
/**
 * The template for displaying learndash single page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package edubin
 */

$post_id = edubin_get_id();

if (function_exists('edubinGetPostViews')) {edubinSetPostViews(get_the_ID());}

get_header();

get_template_part('template-parts/page/learndash', 'page');

get_footer();
