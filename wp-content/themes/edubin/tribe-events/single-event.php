<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if (!defined('ABSPATH')) {
    die('-1');
}

    // CMB2
    $post_id = edubin_get_id();
    $prefix = '_edubin_';
    $defaults = edubin_generate_defaults();

    $edubin_tribe_events_layout = get_theme_mod( 'edubin_tribe_events_layout', $defaults['edubin_tribe_events_layout']  );
?>
         
<?php if ($edubin_tribe_events_layout == 'layout_2'): ?>
    
    <?php get_template_part('tribe-events/custom-template/single', 'layout_2');?>

<?php else :  ?>

    <?php get_template_part('tribe-events/custom-template/single', 'layout_1');?>

<?php endif ?>

