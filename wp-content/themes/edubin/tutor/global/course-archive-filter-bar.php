<?php
/**
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

    // Customizer option
    $defaults = edubin_generate_defaults();
    $top_course_filter = get_theme_mod( 'top_course_filter', $defaults['top_course_filter']); 
?>

<?php if ($top_course_filter) : ?>
    <div class="tutor-course-filter-wrap">
        <div class="tutor-course-archive-results-wrap">
    		<?php
    		$courseCount = tutor_utils()->get_archive_page_course_count();
    		echo sprintf(__("%s Courses", "edubin"), "<strong>{$courseCount}</strong>");
    		?>
        </div>

        <div class="tutor-course-archive-filters-wrap">
            <form class="tutor-course-filter-form" method="get">
                <select name="tutor_course_filter">
                    <option value="newest_first" <?php if (isset($_GET["tutor_course_filter"]) ? selected("newest_first",$_GET["tutor_course_filter"]) : "" ); ?> ><?php _e("Release Date (newest first)", "edubin");
    					?></option>
                    <option value="oldest_first" <?php if (isset($_GET["tutor_course_filter"]) ? selected("oldest_first",$_GET["tutor_course_filter"]) : "" ); ?>><?php _e("Release Date (oldest first)", "edubin"); ?></option>
                    <option value="course_title_az" <?php if (isset($_GET["tutor_course_filter"]) ? selected("course_title_az",$_GET["tutor_course_filter"]) : "" ); ?>><?php _e("Course Title (a-z)", "edubin"); ?></option>
                    <option value="course_title_za" <?php if (isset($_GET["tutor_course_filter"]) ? selected("course_title_za",$_GET["tutor_course_filter"]) : "" ); ?>><?php _e("Course Title (z-a)", "edubin"); ?></option>
                </select>
            </form>
        </div>
    </div>
<?php endif; ?>