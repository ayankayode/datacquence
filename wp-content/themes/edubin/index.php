<?php
/**
 * The main template file
 * @package Edubin
 * Version: 1.0.0
 */

get_header(); 

$defaults = edubin_generate_defaults();
$blog_sidebar = get_theme_mod( 'blog_sidebar', $defaults['blog_sidebar']  );
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class="row">

                <?php if ('sidebarleft' == $blog_sidebar): ?>
                    <div class="col-md-4">
                        <?php get_sidebar(); ?>
                    </div> 
                <?php endif; ?>

                <?php if ('sidebarnone' == $blog_sidebar): ?>
                    <div class="col-md-12">
                        <?php else: ?>
                            <div class="<?php if (is_active_sidebar( 'sidebar-1' )):  echo 'col-md-8 content-wrapper'; else: echo 'col-md-12 content-wrapper'; endif;?>">
                            <?php endif; ?>

                            <?php
                            if ( have_posts() ) :

                                /* Start the Loop */
                                while ( have_posts() ) : the_post();

                                    get_template_part( 'template-parts/post/content', get_post_type() );
                                    
                                endwhile;
                                
                                the_posts_pagination( array(
                                    'prev_text' => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
                                    'next_text' => '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
                                ) );

                            else :

                                get_template_part( 'template-parts/post/content', 'none' );
                                
                            endif;
                            ?>
                        </div><!-- .col-md-8 -->
                        
                        <?php if ('sidebarright' == $blog_sidebar): ?>
                            <div class="col-md-4">
                                <?php get_sidebar(); ?>
                            </div> 

                            <?php elseif('sidebarnone' == $blog_sidebar): ?>

                                <?php else : ?>
                                    <div class="col-md-4">
                                        <?php get_sidebar(); ?>
                                    </div>
                                <?php endif; ?>

                            </div><!-- .row -->
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->
<?php get_footer();