<?php
/**
 * LearnPress compatibility
 *
 * @package Edubin
 */
/**
 * Check if WooCommerce is active
 * Use in the active_callback when adding the WooCommerce Section to test if WooCommerce is activated
 *
 * @return boolean
 */
function edubin_is_woocommerce_active()
{
    if (class_exists('woocommerce')) {
        return true;
    }
    return false;
}
/// Learnpress
remove_action('learn-press/before-main-content', 'learn_press_breadcrumb', 10);
remove_action('learn-press/content-landing-summary', 'learn_press_course_students', 10);
remove_action('learn-press/content-landing-summary', 'learn_press_course_price', 25);
remove_action('learn-press/content-landing-summary', 'learn_press_course_buttons', 30);
remove_action('learn-press/before-main-content', 'learn_press_search_form', 15);
remove_action('learn-press/after-courses-loop', 'learn_press_courses_pagination', 5);
remove_action('learn-press/course-buttons', 'learn_press_course_retake_button', 20);

function edubin_custom_pagination()
{

    the_posts_pagination(array(
        'prev_text' => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
        'next_text' => '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
    ));
}

add_action('learn-press/after-courses-loop', 'edubin_custom_pagination', 5);
/**
 * Learnpress default buy this now text overridden
 */
function edubin_learn_press_course_buttons_text_overridden($custom_buy_this_now_text)
{

    $defaults              = edubin_generate_defaults();
    $lp_course_buy_now_btn = get_theme_mod('lp_course_buy_now_btn', $defaults['lp_course_buy_now_btn']);

    if ($lp_course_buy_now_btn) {
        $custom_buy_this_now_text = esc_html_e($lp_course_buy_now_btn, 'edubin');
    } else {
        $custom_buy_this_now_text = esc_html_e('Buy Now', 'edubin');
    }

    return $custom_buy_this_now_text;

}

add_filter('learn-press/purchase-course-button-text', 'edubin_learn_press_course_buttons_text_overridden', 50);

/**
 * Learnpress default enroll button text overridden
 */
function edubin_learn_press_course_external_link_buttons_text_overridden($custom_enroll_text)
{
    $defaults             = edubin_generate_defaults();
    $lp_course_enroll_btn = get_theme_mod('lp_course_enroll_btn', $defaults['lp_course_enroll_btn']);

    if ($lp_course_enroll_btn) {
        $custom_enroll_text = esc_html_e($lp_course_enroll_btn, 'edubin');
    } else {
        $custom_enroll_text = esc_html_e('Enroll', 'edubin');
    }

    return $custom_enroll_text;
}

add_filter('learn-press/enroll-course-button-text', 'edubin_learn_press_course_external_link_buttons_text_overridden', 50);

/**
 * Learnpress course info
 */

if (!function_exists('edubin_course_info')) {

    function edubin_course_info()
    {
        // Prefix
        $prefix = '_edubin_';

        $course_id = get_the_ID();
        $course    = learn_press_get_the_course();

        $lp_duration     = get_post_meta(get_the_ID(), '_lp_duration');
        $lp_max_students = get_post_meta(get_the_ID(), '_lp_max_students');
        $lp_students     = get_post_meta(get_the_ID(), '_lp_students');
        $lp_retake_count = get_post_meta(get_the_ID(), '_lp_retake_count');
        $lp_curriculum   = get_post_meta(get_the_ID(), '_lp_curriculum');
        $lp_quizzes      = $course->get_curriculum_items('lp_quiz');

        $defaults                       = edubin_generate_defaults();
        $lp_course_feature_title        = get_theme_mod('lp_course_feature_title', $defaults['lp_course_feature_title']);
        $lp_course_feature_quizzes      = get_theme_mod('lp_course_feature_quizzes', $defaults['lp_course_feature_quizzes']);
        $lp_course_feature_duration     = get_theme_mod('lp_course_feature_duration', $defaults['lp_course_feature_duration']);
        $lp_course_feature_max_tudents  = get_theme_mod('lp_course_feature_max_tudents', $defaults['lp_course_feature_max_tudents']);
        $lp_course_feature_enroll       = get_theme_mod('lp_course_feature_enroll', $defaults['lp_course_feature_enroll']);
        $lp_course_feature_retake_count = get_theme_mod('lp_course_feature_retake_count', $defaults['lp_course_feature_retake_count']);
        $lp_course_feature_skill_level  = get_theme_mod('lp_course_feature_skill_level', $defaults['lp_course_feature_skill_level']);
        $lp_course_feature_language     = get_theme_mod('lp_course_feature_language', $defaults['lp_course_feature_language']);
        $lp_course_feature_assessments  = get_theme_mod('lp_course_feature_assessments', $defaults['lp_course_feature_assessments']);

        $lp_course_feature_quizzes_show      = get_theme_mod('lp_course_feature_quizzes_show', $defaults['lp_course_feature_quizzes_show']);
        $lp_course_feature_duration_show     = get_theme_mod('lp_course_feature_duration_show', $defaults['lp_course_feature_duration_show']);
        $lp_course_feature_max_students_show = get_theme_mod('lp_course_feature_max_students_show', $defaults['lp_course_feature_max_students_show']);
        $lp_course_feature_enroll_show       = get_theme_mod('lp_course_feature_enroll_show', $defaults['lp_course_feature_enroll_show']);
        $lp_course_feature_retake_count_show = get_theme_mod('lp_course_feature_retake_count_show', $defaults['lp_course_feature_retake_count_show']);
        $lp_course_feature_skill_level_show  = get_theme_mod('lp_course_feature_skill_level_show', $defaults['lp_course_feature_skill_level_show']);
        $lp_course_feature_language_show     = get_theme_mod('lp_course_feature_language_show', $defaults['lp_course_feature_language_show']);
        $lp_course_feature_assessments_show  = get_theme_mod('lp_course_feature_assessments_show', $defaults['lp_course_feature_assessments_show']);

        ?>

	<div class="edubin-course-info">
		<?php if ($lp_course_feature_title): ?>
			<h2 class="widget-title"><?php echo esc_html($lp_course_feature_title); ?></h2>
		<?php else: ?>
			<h2 class="widget-title"><?php esc_html_e('Course Features', 'edubin');?></h2>
		<?php endif;?>
		<ul class="course-info-list">

		<?php if ($lp_quizzes && $lp_course_feature_quizzes_show == '1'): ?>
			<li>
				<i class="fa fa-puzzle-piece"></i>
				<?php if ($lp_course_feature_quizzes): ?>
					<span class="label"><?php echo esc_html($lp_course_feature_quizzes); ?></span>
				<?php else: ?>
					<span class="label"><?php esc_html_e('Quizzes :', 'edubin');?></span>
				<?php endif;?>
				<span class="value"><?php echo esc_html($lp_quizzes[0]) ?></span>
			</li>
			<?php endif?>
			<?php if ($lp_duration && $lp_course_feature_duration_show == '1'): ?>
				<li>
					<i class="fa fa-clock-o"></i>
				<?php if ($lp_course_feature_duration): ?>
					<span class="label"><?php echo esc_html($lp_course_feature_duration); ?></span>
				<?php else: ?>
					<span class="label"><?php esc_html_e('Duration :', 'edubin');?></span>
				<?php endif;?>
					<span class="value"><?php echo esc_html($lp_duration[0]); ?></span>
				</li>
			<?php endif?>

			<?php if ($lp_max_students && $lp_course_feature_max_students_show == '1'): ?>
				<li>
					<i class="fa fa-th-large"></i>
				<?php if ($lp_course_feature_max_tudents): ?>
					<span class="label"><?php echo esc_html($lp_course_feature_max_tudents); ?></span>
				<?php else: ?>
					<span class="label"><?php esc_html_e('Max Students :', 'edubin');?></span>
				<?php endif;?>
					<span class="value"><?php echo esc_html($lp_max_students[0]); ?></span>
				</li>
			<?php endif?>

			<?php if ($lp_students && $lp_course_feature_enroll_show == '1'): ?>
				<li>
					<i class="fa fa-users"></i>
				<?php if ($lp_course_feature_enroll): ?>
					<span class="label"><?php echo esc_html($lp_course_feature_enroll); ?></span>
				<?php else: ?>
					<span class="label"><?php esc_html_e('Enrolled :', 'edubin');?></span>
				<?php endif;?>
					<?php $user_count = $course->get_users_enrolled() ? $course->get_users_enrolled() : 0;?>
					<span class="value"><?php echo esc_html($user_count); ?></span>
				</li>
			<?php endif?>

			<?php if ($lp_retake_count && $lp_course_feature_retake_count_show == '1'): ?>
				<li>
					<i class="fa fa-repeat"></i>
				<?php if ($lp_course_feature_retake_count): ?>
					<span class="label"><?php echo esc_html($lp_course_feature_retake_count); ?></span>
				<?php else: ?>
					<span class="label"><?php esc_html_e('Re-take Course :', 'edubin');?></span>
				<?php endif;?>
					<span class="value"><?php echo esc_html($lp_retake_count[0]); ?></span>
				</li>
			<?php endif?>

			<?php
$edubin_course_skill_level = esc_html(get_post_meta($course_id, 'edubin_course_skill_level', true));
        if ($edubin_course_skill_level && $lp_course_feature_skill_level_show == '1'): ?>
				<li>
					<i class="fa fa-level-up"></i>
				<?php if ($lp_course_feature_skill_level): ?>
					<span class="label"><?php echo esc_html($lp_course_feature_skill_level); ?></span>
				<?php else: ?>
					<span class="label"><?php esc_html_e('Skill Level :', 'edubin');?></span>
				<?php endif;?>
					<span class="value"><?php echo esc_html(get_post_meta($course_id, 'edubin_course_skill_level', true)); ?></span>
				</li>
			<?php endif?>
			<?php
$edubin_course_language = esc_html(get_post_meta($course_id, 'edubin_course_language', true));
        if ($edubin_course_language && $lp_course_feature_language_show == '1'): ?>
				<li>
					<i class="fa fa-language"></i>
				<?php if ($lp_course_feature_language): ?>
					<span class="label"><?php echo esc_html($lp_course_feature_language); ?></span>
				<?php else: ?>
					<span class="label"><?php esc_html_e('Language :', 'edubin');?></span>
				<?php endif;?>
					<span class="value"><?php echo esc_html(get_post_meta($course_id, 'edubin_course_language', true)); ?></span>
				</li>
			<?php endif?>
			<?php if ($course_id && $lp_course_feature_assessments_show == '1'): ?>
				<li>
					<i class="fa fa-check-square-o"></i>
				<?php if ($lp_course_feature_assessments): ?>
					<span class="label"><?php echo esc_html($lp_course_feature_assessments); ?></span>
				<?php else: ?>
					<span class="label"><?php esc_html_e('Assessments :', 'edubin');?></span>
				<?php endif;?>
					<span class="value"><?php echo (get_post_meta($course_id, '_lpr_course_final', true) == 'yes') ? esc_html_e('Yes', 'edubin') : esc_html_e('Self', 'edubin'); ?></span>
				</li>
			<?php endif?>

			<!-- Custom course features cmb2 reparable meta display -->
            <?php
$lp_custom_feature_group = get_post_meta(get_the_ID(), 'lp_custom_feature_group', true);
        if ($lp_custom_feature_group): ?>
                    <?php
foreach ((array) $lp_custom_feature_group as $key => $entry) {?>

							<li>
                       			<?php if (isset($entry['lp_custom_feature_group_icon'])): ?>
									<i class="fa <?php echo esc_html($entry['lp_custom_feature_group_icon']); ?>"></i>
								<?php else: ?>
									<i class="fa fa-check-square-o"></i>
                        		<?php endif;?>

                       			<?php if (isset($entry['lp_custom_feature_group_label'])): ?>
									<span class="label"><?php echo esc_html($entry['lp_custom_feature_group_label']); ?></span>
                        		<?php endif;?>
                        		<?php if (isset($entry['lp_custom_feature_group_value'])): ?>
									<span class="value"><?php echo esc_html($entry['lp_custom_feature_group_value']); ?></span>
								<?php endif;?>
							</li>

                       	<?php
}
        ;
        endif;
        ?>

		</ul>
	</div>

	<?php

    }
}

/**
 * Display related courses sidebar
 */
if (!function_exists('edubin_related_courses')) {
    function edubin_related_courses()
    {
        $related_courses = edubin_get_related_courses(null, array('posts_per_page' => 3));
        if ($related_courses) {
            $ids = wp_list_pluck($related_courses, 'ID');
            ?>
			<div class="col-lg-12 col-md-6">
				<div class="edubin-related-course">
					<h2 class="widget-title"><?php esc_html_e('You May Like', 'edubin');?></h2>
					<?php foreach ($related_courses as $course_item): ?>
						<?php
$course      = LP_Course::get_course($course_item->ID);
            $is_required = $course->is_required_enroll();
            $count       = $course->get_users_enrolled();
            ?>

						<div class="single-maylike mt-20">
							<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($course_item->ID), 'thumbnail', false, '');?>
							<div class="image">
								<img src="<?php echo esc_url($src[0]); ?>" alt="<?php echo esc_attr($course_item->post_title); ?>">
							</div>
							<div class="cont">
								<a href="<?php echo get_the_permalink($course_item->ID); ?>"><h4><?php echo esc_html($course_item->post_title); ?></h4></a>
								<ul>
									<li class="enroll-student"><i class="glyph-icon flaticon-profile"></i><?php echo esc_html($count); ?></li>

									<?php if ($price = $course->get_price_html()) {

                $origin_price = $course->get_origin_price_html();
                $sale_price   = $course->get_sale_price();
                $sale_price   = isset($sale_price) ? $sale_price : '';
                $class        = '';
                if ($course->is_free() || !$is_required) {
                    $class .= ' free-course';
                    $price = __('Free', 'edubin');
                }
                ?>
										<li><?php
if ($sale_price !== '') {
                    echo '<span class="course-origin-price">' . $origin_price . '</span>';
                }
                ?>
										<?php echo esc_html($price);
            } ?>
								</li>
							</ul>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>

	<?php
}
    }
}

if (!function_exists('edubin_get_related_courses')) {
    function edubin_get_related_courses($limit)
    {
        if (!$limit) {
            $limit = 3;
        }
        $course_id = get_the_ID();

        $tag_ids = array();
        $tags    = get_the_terms($course_id, 'course_tag');

        if ($tags) {
            foreach ($tags as $individual_tag) {
                $tag_ids[] = $individual_tag->slug;
            }
        }

        $args = array(
            'posts_per_page'      => $limit,
            'paged'               => 1,
            'ignore_sticky_posts' => 1,
            'post__not_in'        => array($course_id),
            'post_type'           => 'lp_course',
        );

        if ($tag_ids) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'course_tag',
                    'field'    => 'slug',
                    'terms'    => $tag_ids,
                ),
            );
        }

        $related = array();
        if ($posts = new WP_Query($args)) {
            global $post;
            while ($posts->have_posts()) {
                $posts->the_post();
                $related[] = $post;
            }
        }
        wp_reset_postdata();

        return $related;
    }
}

/**
 * @edubin_extra_user_profile_fields
 */
if (!function_exists('edubin_extra_user_profile_fields')) {
    function edubin_extra_user_profile_fields($user)
    {
        $user_info = get_the_author_meta('lp_info', $user->ID);
        ?>
		<h3><?php esc_html_e('LearnPress Profile', 'edubin');?></h3>

		<table class="form-table">
			<tbody>
				<tr>
					<th>
						<label for="lp_major"><?php esc_html_e('Major', 'edubin');?></label>
					</th>
					<td>
						<input id="lp_major" class="regular-text" type="text"
						value="<?php echo isset($user_info['major']) ? $user_info['major'] : ''; ?>"
						name="lp_info[major]">
					</td>
				</tr>
				<tr>
					<th>
						<label for="lp_facebook"><?php esc_html_e('Facebook Account', 'edubin');?></label>
					</th>
					<td>
						<input id="lp_facebook" class="regular-text" type="text"
						value="<?php echo isset($user_info['facebook']) ? $user_info['facebook'] : ''; ?>"
						name="lp_info[facebook]">
					</td>
				</tr>
				<tr>
					<th>
						<label for="lp_twitter"><?php esc_html_e('Twitter Account', 'edubin');?></label>
					</th>
					<td>
						<input id="lp_twitter" class="regular-text" type="text"
						value="<?php echo isset($user_info['twitter']) ? $user_info['twitter'] : ''; ?>"
						name="lp_info[twitter]">
					</td>
				</tr>
				<tr>
					<th>
						<label for="lp_instagram"><?php esc_html_e('Instagram Account', 'edubin');?></label>
					</th>
					<td>
						<input id="lp_instagram" class="regular-text" type="text"
						value="<?php echo isset($user_info['instagram']) ? $user_info['instagram'] : ''; ?>"
						name="lp_info[instagram]">
					</td>
				</tr>
				<tr>
					<th>
						<label for="lp_linkedin"><?php esc_html_e('LinkedIn Plus Account', 'edubin');?></label>
					</th>
					<td>
						<input id="lp_linkedin" class="regular-text" type="text"
						value="<?php echo isset($user_info['linkedin']) ? $user_info['linkedin'] : ''; ?>"
						name="lp_info[linkedin]">
					</td>
				</tr>
				<tr>
					<th>
						<label for="lp_youtube"><?php esc_html_e('Youtube Account', 'edubin');?></label>
					</th>
					<td>
						<input id="lp_youtube" class="regular-text" type="text"
						value="<?php echo isset($user_info['youtube']) ? $user_info['youtube'] : ''; ?>"
						name="lp_info[youtube]">
					</td>
				</tr>
			</tbody>
		</table>
		<?php
}
}

add_action('show_user_profile', 'edubin_extra_user_profile_fields');
add_action('edit_user_profile', 'edubin_extra_user_profile_fields');

function edubin_save_extra_user_profile_fields($user_id)
{

    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }
    update_user_meta($user_id, 'lp_info', $_POST['lp_info']);
}

add_action('personal_options_update', 'edubin_save_extra_user_profile_fields');
add_action('edit_user_profile_update', 'edubin_save_extra_user_profile_fields');

/**
 * Display co instructors
 *
 * @param $course_id
 */
if (!function_exists('edubin_co_instructors')) {
    function edubin_co_instructors($course_id, $author_id)
    {
        if (!$course_id) {
            return;
        }

        if (class_exists('LP_Co_Instructor_Preload') or class_exists('LP_Multiple_Instructor_Preload')) {
            $instructors = get_post_meta($course_id, '_lp_co_teacher');
            $instructors = array_diff($instructors, array($author_id));
            if ($instructors) {
                foreach ($instructors as $instructor) {
                    //Check if instructor not exist
                    $user = get_userdata($instructor);
                    if ($user === false) {
                        break;
                    }
                    $lp_info = get_the_author_meta('lp_info', $instructor);
                    $link    = learn_press_user_profile_link($instructor);
                    ?>
						<div class="edubin-about-author edubin-co-instructor">
						<div class="author-wrapper">
							<div class="author-avatar">
								<?php echo get_avatar($instructor, 110); ?>
							</div>
							<div class="author-bio">
								<div class="author-top">
									<a itemprop="url" class="name" href="<?php echo esc_url($link); ?>">
										<span itemprop="name"><?php echo get_the_author_meta('display_name', $instructor); ?></span>
									</a>
									<?php if (isset($lp_info['major']) && $lp_info['major']): ?>
										<p class="job"
										itemprop="jobTitle"><?php echo esc_html($lp_info['major']); ?></p>
									<?php endif;?>
								</div>
								<ul class="edubin-author-social">
								<?php if (isset($lp_info['facebook']) && $lp_info['facebook']): ?>
								<li>
								<a href="<?php echo esc_url($lp_info['facebook']); ?>" class="facebook"><i
									class="fa fa-facebook"></i></a>
								</li>
								<?php endif;?>

								<?php if (isset($lp_info['twitter']) && $lp_info['twitter']): ?>
								<li>
									<a href="<?php echo esc_url($lp_info['twitter']); ?>" class="twitter"><i
										class="fa fa-twitter"></i></a>
									</li>
								<?php endif;?>

								<?php if (isset($lp_info['instagram']) && $lp_info['instagram']): ?>
									<li>
										<a href="<?php echo esc_url($lp_info['instagram']); ?>" class="instagram"><i
											class="fa fa-instagram"></i></a>
										</li>
									<?php endif;?>

									<?php if (isset($lp_info['linkedin']) && $lp_info['linkedin']): ?>
										<li>
											<a href="<?php echo esc_url($lp_info['linkedin']); ?>" class="linkedin"><i
												class="fa fa-linkedin"></i></a>
											</li>
										<?php endif;?>

										<?php if (isset($lp_info['youtube']) && $lp_info['youtube']): ?>
											<li>
												<a href="<?php echo esc_url($lp_info['youtube']); ?>" class="youtube"><i
													class="fa fa-youtube"></i></a>
												</li>
											<?php endif;?>
										</ul>

									</div>
									<div class="author-description" itemprop="description">
										<?php echo get_the_author_meta('description', $instructor); ?>
									</div>
								</div>
							</div>
					<?php
}
            }
        }
    }
}
/**
 * About the author/ default instructor only
 */
if (!function_exists('edubin_about_author')) {
    function edubin_about_author()
    {
        $lp_info = get_the_author_meta('lp_info');
        ?>
		<div class="edubin-about-author">

			<div class="author-top">
				<?php if (isset($lp_info['major']) && $lp_info['major']): ?>
					<p class="job"><?php echo esc_html($lp_info['major']); ?></p>
				<?php endif;?>
			</div>

			<ul class="edubin-author-social">
				<?php if (isset($lp_info['facebook']) && $lp_info['facebook']): ?>
					<li>
						<a href="<?php echo esc_url($lp_info['facebook']); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
					</li>
				<?php endif;?>

				<?php if (isset($lp_info['twitter']) && $lp_info['twitter']): ?>
					<li>
						<a href="<?php echo esc_url($lp_info['twitter']); ?>" class="twitter"><i class="fa fa-twitter"></i></a>
					</li>
				<?php endif;?>

				<?php if (isset($lp_info['instagram']) && $lp_info['instagram']): ?>
					<li>
						<a href="<?php echo esc_url($lp_info['instagram']); ?>" class="instagram"><i
							class="fa fa-instagram"></i></a>
						</li>
					<?php endif;?>

					<?php if (isset($lp_info['linkedin']) && $lp_info['linkedin']): ?>
						<li>
							<a href="<?php echo esc_url($lp_info['linkedin']); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
						</li>
					<?php endif;?>

					<?php if (isset($lp_info['youtube']) && $lp_info['youtube']): ?>
						<li>
							<a href="<?php echo esc_url($lp_info['youtube']); ?>" class="youtube"><i class="fa fa-youtube"></i></a>
						</li>
					<?php endif;?>
				</ul>
			</div>
			<?php

    }
}

/**
 * Display course review
 */
if (!function_exists('edubin_course_review')) {
    function edubin_course_review()
    {
        if (!class_exists('LP_Addon_Course_Review_Preload')) {
            return;
        }

        $course_id     = get_the_ID();
        $course_review = learn_press_get_course_review($course_id, isset($_REQUEST['paged']) ? $_REQUEST['paged'] : 1, 5, true);
        $course_rate   = learn_press_get_course_rate($course_id);
        $total         = learn_press_get_course_rate_total($course_id);
        $reviews       = $course_review['reviews'];

        ?>
		<div class="course-rating">
			<div class="detailed-rating">
				<div class="rating-box">
					<?php edubin_detailed_rating($course_id, $total);?>
				</div>
			</div>
		</div>
		<?php
}
}
if (!function_exists('edubin_print_rating')) {
    function edubin_print_rating($rate)
    {
        if (!class_exists('LP_Addon_Course_Review_Preload')) {
            return;
        }

        ?>
		<div class="review-stars-rated">
			<ul class="review-stars">
				<li><span class="fa fa-star-o"></span></li>
				<li><span class="fa fa-star-o"></span></li>
				<li><span class="fa fa-star-o"></span></li>
				<li><span class="fa fa-star-o"></span></li>
				<li><span class="fa fa-star-o"></span></li>
			</ul>
			<ul class="review-stars filled"
			style="<?php echo esc_attr('width: calc(' . ($rate * 20) . '% - 2px)') ?>">
			<li><span class="fa fa-star"></span></li>
			<li><span class="fa fa-star"></span></li>
			<li><span class="fa fa-star"></span></li>
			<li><span class="fa fa-star"></span></li>
			<li><span class="fa fa-star"></span></li>
		</ul>
	</div>
	<?php

    }
}
/**
 * Display review button
 *
 * @param $course_id
 */
if (!function_exists('edubin_review_button')) {
    function edubin_review_button($course_id)
    {
        if (!class_exists('LP_Addon_Course_Review_Preload')) {
            return;
        }

        if (!get_current_user_id()) {
            return;
        }
        $user = learn_press_get_current_user();
        if ($user->has_course_status($course_id, array('enrolled', 'completed', 'finished'))) {
            if (!learn_press_get_user_rate($course_id)) {
                ?>
				<div class="add-review">
					<h3 class="title"><?php esc_html_e('Leave A Review', 'edubin');?></h3>

					<p class="description"><?php esc_html_e('Please provide as much detail as you can to justify your rating and to help others.', 'edubin');?></p>
					<?php do_action('learn_press_before_review_fields');?>
					<form method="post">
						<div>
							<label for="review-title"><?php esc_html_e('Title', 'edubin');?>
							<span class="required">*</span></label>
							<input required type="text" id="review-title" name="review-course-title"/>
						</div>
						<div>

							<label><?php esc_html_e('Rating', 'edubin');?>
							<span class="required">*</span></label>

							<div class="review-stars-rated">
								<ul class="review-stars">
									<li><span class="fa fa-star-o"></span></li>
									<li><span class="fa fa-star-o"></span></li>
									<li><span class="fa fa-star-o"></span></li>
									<li><span class="fa fa-star-o"></span></li>
									<li><span class="fa fa-star-o"></span></li>
								</ul>
								<ul class="review-stars filled" style="width: 100%">
									<li><span class="fa fa-star"></span></li>
									<li><span class="fa fa-star"></span></li>
									<li><span class="fa fa-star"></span></li>
									<li><span class="fa fa-star"></span></li>
									<li><span class="fa fa-star"></span></li>
								</ul>
							</div>
						</div>
						<div>
							<label for="review-content"><?php esc_html_e('Comment', 'edubin');?>
							<span class="required">*</span></label>
							<textarea required id="review-content" name="review-course-content"></textarea>
						</div>
						<input type="hidden" id="review-course-value" name="review-course-value" value="5"/>
						<input type="hidden" id="comment_post_ID" name="comment_post_ID"
						value="<?php echo get_the_ID(); ?>"/>
						<button type="submit"><?php esc_html_e('Submit Review', 'edubin');?></button>
					</form>
					<?php do_action('learn_press_after_review_fields');?>
				</div>
				<?php
}
        }

    }
}

/**
 * Display table detailed rating
 *
 * @param $course_id
 * @param $total
 */
if (!function_exists('edubin_detailed_rating')) {
    function edubin_detailed_rating($course_id, $total)
    {

        if (!class_exists('LP_Addon_Course_Review_Preload')) {
            return;
        }

        $course_id       = get_the_ID();
        $course_rate_res = learn_press_get_course_rate($course_id, false);
        $course_rate     = $course_rate_res['rated'];
        $total           = $course_rate_res['total'];
        ?>

		<div class="course-rate">

			<h2 class="widget-title"><?php esc_html_e('Rating', 'edubin');?></h2>

			<div class="rating-box">
				<p class="rating-number">
					<?php esc_html_e('Average Rating: ', 'edubin');?>
					<span><?php printf(__(' %1.2f ', 'edubin'), $course_rate);?></span>
				</p>
				<div class="total-rating-star"><?php learn_press_course_review_template('rating-stars.php', array('rated' => $course_rate));?></div>

			</div>

			<div class="rating-items">
				<?php
if (isset($course_rate_res['items']) && !empty($course_rate_res['items'])):
            foreach ($course_rate_res['items'] as $item):
            ?>
											<div class="course-rate">
												<span><?php esc_html($item['rated']);?><?php esc_html_e(' Star', 'edubin');?></span>
												<div class="review-bar">
													<div class="rating" style="width:<?php echo esc_html($item['percent']); ?>% "></div>
												</div>
												<span><?php echo esc_html($item['percent']); ?>%</span>
											</div>
											<?php
endforeach;
        endif;
        ?>
			</div>
			</div>
		<?php
}
}
