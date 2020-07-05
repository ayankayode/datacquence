<?php
/**
 * Template for displaying instructor of single course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/instructor.php.
 *
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$course = LP_Global::course();
?>

<div class="course-author">

	<?php do_action( 'learn-press/before-single-course-instructor' ); ?>

    <p class="author-name">
		<?php echo wp_kses_post($course->get_instructor()->get_profile_picture()); ?>
    </p>
	<?php echo wp_kses_post($course->get_instructor_html()); ?>
	
    <?php edubin_about_author(); ?>

    <div class="author-bio">
		<?php echo wp_kses_post($course->get_author()->get_description()); ?>
    </div>
		<?php 	if ( class_exists('LearnPress') ) {
					edubin_co_instructors( get_the_ID(), get_the_author_meta( 'ID' ) );
		} ?>
	<?php do_action( 'learn-press/after-single-course-instructor' ); ?>

</div>