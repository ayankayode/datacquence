<?php
/**
 * Template for displaying archive course content.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/content-archive-course.php
 *
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

global $post, $wp_query, $lp_tax_query, $wp_query;

/**
 * @deprecated
 */
do_action( 'learn_press_before_main_content' );

/**
 * @since 3.0.0
 */
do_action( 'learn-press/before-main-content' );

/**
 * @deprecated
 */
do_action( 'learn_press_archive_description' ); ?>

<?php
/**
 * @since 3.0.0
 */
do_action( 'learn-press/archive-description' );

if ( LP()->wp_query->have_posts() ) :

	/**
	 * @deprecated
	 */
do_action( 'learn_press_before_courses_loop' );

	/**
	 * @since 3.0.0
	 */
	do_action( 'learn-press/before-courses-loop' ); 

	$lp_header_top = get_theme_mod( 'lp_header_top', false);

	if ( is_category() ) {
		$total = get_queried_object();
		$total = $total->count;
	} elseif ( !empty( $_REQUEST['s'] ) ) {
		$total = $wp_query->found_posts;
	} else {
		$total = wp_count_posts( 'post' );
		$total = $total->publish;
	}

	if ( $total == 0 ) {
		echo '<p class="message message-error">' . esc_html__( 'There are no available posts!', 'edubin' ) . '</p>';
		return;
	} elseif ( $total == 1 ) {
		$index = esc_html__( 'Showing only one result', 'edubin' );
	} else {
		$courses_per_page = absint( get_option( 'posts_per_page' ) );
		$paged            = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;

		$from = 1 + ( $paged - 1 ) * $courses_per_page;
		$to   = ( $paged * $courses_per_page > $total ) ? $total : $paged * $courses_per_page;

		if ( $from == $to ) {
			$index = sprintf(
				__( 'Showing last post of %s results', 'edubin' ),
				$total
			);
		} else {
			$index = sprintf(
				__( 'Showing %s-%s of %s results', 'edubin' ),
				$from,
				$to,
				$total
			);
		}
	}

	?>
	<?php if ( $lp_header_top == true): ?>
		<div class="courses-top-search">
			<ul class="nav float-left" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid" role="tab" aria-controls="courses-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
				</li>
				<li class="nav-item">
					<a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab" aria-controls="courses-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
				</li>
				<li class="nav-item"><?php echo esc_html($index) ; ?></li>

			</ul> <!-- nav -->
			
			<div class="courses-search float-right">
				<div class="courses-searching">
					<form method="get" action="<?php echo esc_url( get_post_type_archive_link( 'lp_course' ) ); ?>">
						<input type="text" value="" name="s" placeholder="<?php esc_attr_e( 'Search our courses', 'edubin' ) ?>" class="form-control course-search-filter" autocomplete="off" />
						<input type="hidden" value="course" name="ref" />
						<button type="submit"><i class="glyph-icon flaticon-musica-searcher"></i></button>
						<span class="widget-search-close"></span>
					</form>
					<ul class="courses-list-search list-unstyled"></ul>
				</div>
			</div> <!-- courses search -->
		</div> <!-- courses top search -->
	<?php endif; ?>
	
	<?php 
	echo '<div class="row">'; ?>
	<?php if(is_active_sidebar( 'lp-course-sidebar-1' )): ?>
		<div class="<?php if(is_active_sidebar( 'lp-course-sidebar-1' )):  echo 'col-md-8 has-lp-sidebar'; endif;?>">
	<?php endif; ?>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
			<?php learn_press_begin_courses_loop(); 

				while ( LP()->wp_query->have_posts() ) : LP()->wp_query->the_post();

				learn_press_get_template_part( 'content', 'course-grid' );

				endwhile; ?>

			<?php learn_press_end_courses_loop(); ?>
		</div>

		<div class="tab-pane fade" id="courses-list" role="tabpanel" aria-labelledby="courses-list-tab">

			<?php learn_press_begin_courses_loop(); 

				while ( LP()->wp_query->have_posts() ) : LP()->wp_query->the_post();

				learn_press_get_template_part( 'content', 'course-list' );

				endwhile; ?>

			<?php learn_press_end_courses_loop(); ?>
		</div>

	</div>

<?php if(is_active_sidebar( 'lp-course-sidebar-1' )): ?>
</div>

<div class="col-md-4">
	<div id="secondary" class="widget-area">
    	<?php dynamic_sidebar( 'lp-course-sidebar-1' ); ?>
	</div>
</div> 
<?php endif; ?>

<?php	
echo '</div>';
  
/**
	 * @since 3.0.0
	 */
do_action( 'learn_press_after_courses_loop' );

	/**
	 * @deprecated
	 */
	do_action( 'learn-press/after-courses-loop' );

	wp_reset_postdata();

else:
	learn_press_display_message( esc_html__( 'No course found.', 'edubin' ), 'error' );
endif;

/**
 * @since 3.0.0
 */
do_action( 'learn-press/after-main-content' );

/**
 * @deprecated
 */
do_action( 'learn_press_after_main_content' );