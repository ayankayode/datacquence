<?php
/**
 * Template for displaying course content within the loop.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/content-single-course.php
 *
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

if ( post_password_required() ) {
	echo get_the_password_form();

	return;
}

/**
 * @deprecated
 */
do_action( 'learn_press_before_main_content' );
do_action( 'learn_press_before_single_course' );
do_action( 'learn_press_before_single_course_summary' );

/**
 * @since 3.0.0
 */
do_action( 'learn-press/before-main-content' );

do_action( 'learn-press/before-single-course' );


$profile = LP_Global::profile();
$course    = LP()->global['course'];
$course_id = get_the_ID();
$defaults = edubin_generate_defaults();
$count = $course->get_users_enrolled();
$lp_instructor_single = get_theme_mod( 'lp_instructor_single', $defaults['lp_instructor_single']); 
$lp_cat_single = get_theme_mod( 'lp_cat_single', $defaults['lp_cat_single']); 
$lp_review_single = get_theme_mod( 'lp_review_single', $defaults['lp_review_single']); 

?>
<div class="row">
  <div class="col-lg-8">
    <div class="corses-single-left">
      
      <?php if ( has_post_thumbnail() ):?>
       <div class="corses-single-image">
        <?php the_post_thumbnail();?>
      </div> 
    <?php endif; ?>

    <?php
				/**
				 * @since 3.0.0
				 *
				 * @see learn_press_single_course_summary()
				 */
				do_action( 'learn-press/single-course-summary' );
				?>

      </div> <!-- course single left -->
      
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12 col-md-12">

          <div class="course-features">
            <?php edubin_course_info(); ?>
            <div class="price-button pt-10">
             <?php if (function_exists( 'learn_press_courses_loop_item_price' ) ) : ?>
              <div class="lp-price-btn">
                <span class="price-label"><?php esc_html_e( 'Price : ', 'edubin' ); ?> </span>
                <?php learn_press_courses_loop_item_price(); ?>
              </div>
            <?php endif; ?>
            <?php if (function_exists( 'learn_press_course_buttons' ) ) : ?>
              <?php learn_press_course_buttons(); ?>
            <?php endif; ?>
          </div>
        </div> <!-- course features -->
        
          <?php if ( class_exists('LP_Addon_Course_Review_Preload') ) : ?>
          <div class="course-features">
              <div class="edubin-course-rating" id="tab-course-review">
                <?php edubin_course_review(); ?>
              </div>
          </div> <!-- course features -->
          <?php endif; ?>
      </div>
    </div>
  </div>
</div> <!-- row -->

<?php

/**
 * @since 3.0.0
 */
do_action( 'learn-press/after-main-content' );

do_action( 'learn-press/after-single-course' );

/**
 * @deprecated
 */
do_action( 'learn_press_after_single_course_summary' );
do_action( 'learn_press_after_single_course' );
do_action( 'learn_press_after_main_content' );