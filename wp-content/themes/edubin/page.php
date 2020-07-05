<?php
/**
 * The template for displaying all pages
 * @package Edubin
 * Version: 1.0.0
 */

get_header(); ?>
<div class="container">
    <?php
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/page/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
    ?>
</div>
<?php get_footer();
