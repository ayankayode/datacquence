<?php
/**
 * Template for displaying search course form.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/search-form.php
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();
?>

<?php if ( ! ( learn_press_is_courses() || learn_press_is_search() ) ) {
	return;
} ?>

<form method="get" name="search-course" class="learn-press-search-course-form"
      action="<?php echo learn_press_get_page_link( 'courses' ); ?>">

    <input type="text" name="s" class="search-course-input" value="<?php echo esc_attr($s); ?>"
           placeholder="<?php esc_attr_e('Search course...', 'edubin'); ?>"/>
    <input type="hidden" name="ref" value="course"/>

    <button class="lp-button button search-course-button"><?php esc_html_e( 'Search', 'edubin' ); ?></button>
</form>