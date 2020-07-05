<?php
function edubin_import_files()
{
    return array(
        array(
            'import_file_name'             => 'Home v1 (LearnPress)',
            'categories'                   => array('LearnPress'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v1.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://www.youtube.com/watch?v=FoXWLqJPZz0">Installation & Setup Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style="color:#ec5761">LearnPress</span> LMS content.', 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v1 (Tutor)',
            'categories'                   => array('Tutor'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/tutor/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/tutor/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/tutor/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v1.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/tutor',
            'import_notice'                => __("Don't activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style='color:#ec5761'>Tutor</span> LMS content.", 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v1 (LearnDash)',
            'categories'                   => array('LearnDash'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learndash/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learndash/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learndash/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v1.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/learndash/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://youtu.be/_qg0igPtPF8">LearnDash Installation Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the <span style="color:#ec5761">LearnDash</span> LMS dummy.', 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v2 (LearnPress)',
            'categories'                   => array('LearnPress'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v2.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/home-v2',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://www.youtube.com/watch?v=FoXWLqJPZz0">Installation & Setup Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style="color:#ec5761">LearnPress</span> LMS content.', 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v2 (Tutor)',
            'categories'                   => array('Tutor'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/tutor/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/tutor/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/tutor/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v2.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/tutor/home-v2/',
            'import_notice'                => __("Don't activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style='color:#ec5761'>Tutor</span> LMS content.", 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v2 (LearnDash)',
            'categories'                   => array('LearnDash'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learndash/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learndash/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learndash/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v2.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/learndash/home-v2/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://youtu.be/_qg0igPtPF8">LearnDash Installation Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the <span style="color:#ec5761">LearnDash</span> LMS dummy.', 'edubin'),
        ),

        array(
            'import_file_name'             => 'Home v3 (LearnPress)',
            'categories'                   => array('LearnPress'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v3.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/home-v3/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://www.youtube.com/watch?v=FoXWLqJPZz0">Installation & Setup Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style="color:#ec5761">LearnPress</span> LMS content.', 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v3 (Tutor)',
            'categories'                   => array('Tutor'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/tutor/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/tutor/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/tutor/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v3.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/tutor/home-v3/',
            'import_notice'                => __("Don't activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style='color:#ec5761'>Tutor</span> LMS content.", 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v3 (LearnDash)',
            'categories'                   => array('LearnDash'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learndash/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learndash/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learndash/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v3.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/learndash/home-v3/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://youtu.be/_qg0igPtPF8">LearnDash Installation Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the <span style="color:#ec5761">LearnDash</span> LMS dummy.', 'edubin'),
        ),

        array(
            'import_file_name'             => 'Home v4 (LearnPress)',
            'categories'                   => array('LearnPress'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v4.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/home-v4/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://www.youtube.com/watch?v=FoXWLqJPZz0">Installation & Setup Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style="color:#ec5761">LearnPress</span> LMS content.', 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v4 (Tutor)',
            'categories'                   => array('Tutor'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/tutor/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/tutor/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/tutor/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v4.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/tutor/home-v4/',
            'import_notice'                => __("Don't activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style='color:#ec5761'>Tutor</span> LMS content.", 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v4 (LearnDash)',
            'categories'                   => array('LearnDash'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learndash/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learndash/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learndash/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v4.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/learndash/home-v4/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://youtu.be/_qg0igPtPF8">LearnDash Installation Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the <span style="color:#ec5761">LearnDash</span> LMS dummy.', 'edubin'),
        ),

        array(
            'import_file_name'             => 'Home v5 (LearnPress)',
            'categories'                   => array('LearnPress'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v5.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/home-v5/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://www.youtube.com/watch?v=FoXWLqJPZz0">Installation & Setup Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style="color:#ec5761">LearnPress</span> LMS content.', 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v5 (Tutor)',
            'categories'                   => array('Tutor'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/tutor/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/tutor/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/tutor/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v5.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/tutor/home-v5/',
            'import_notice'                => __("Don't activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style='color:#ec5761'>Tutor</span> LMS content.", 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v5 (LearnDash)',
            'categories'                   => array('LearnDash'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learndash/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learndash/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learndash/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v5.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/learndash/home-v5/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://youtu.be/_qg0igPtPF8">LearnDash Installation Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the <span style="color:#ec5761">LearnDash</span> LMS dummy.', 'edubin'),
        ),

        array(
            'import_file_name'             => 'Home v6 (LearnPress)',
            'categories'                   => array('LearnPress'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learnpress/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v6.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/home-v6/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://www.youtube.com/watch?v=FoXWLqJPZz0">Installation & Setup Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style="color:#ec5761">LearnPress</span> LMS content.', 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v6 (Tutor)',
            'categories'                   => array('Tutor'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/tutor/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/tutor/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/tutor/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v6.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/tutor/home-v6/',
            'import_notice'                => __("Don't activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style='color:#ec5761'>Tutor</span> LMS content.", 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v6 (LearnDash)',
            'categories'                   => array('LearnDash'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learndash/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learndash/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learndash/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v6.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/learndash/home-v6/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://youtu.be/_qg0igPtPF8">LearnDash Installation Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the <span style="color:#ec5761">LearnDash</span> LMS dummy.', 'edubin'),
        ),

        array(
            'import_file_name'             => 'Home v7 (LearnPress)',
            'categories'                   => array('LearnPress'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learnpress-red/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learnpress-red/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learnpress-red/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v7.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/learnpress-red/home-v7/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://www.youtube.com/watch?v=FoXWLqJPZz0">Installation & Setup Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style="color:#ec5761">LearnPress</span> LMS content.', 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v7 (Tutor)',
            'categories'                   => array('Tutor'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/tutor-red/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/tutor-red/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/tutor-red/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v7.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/tutor-red/home-v7/',
            'import_notice'                => __("Don't activate more than one LMS plugin at the same site. By importing it you will get the site dummy with <span style='color:#ec5761'>Tutor</span> LMS content.", 'edubin'),
        ),
        array(
            'import_file_name'             => 'Home v7 (LearnDash)',
            'categories'                   => array('LearnDash'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/learndash-red/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/learndash-red/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/learndash-red/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . 'admin/demo/images/home-v7.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/learndash-red/home-v7/',
            'import_notice'                => __('<a target="_blank" class="button edubin-ld-video-link" href="https://youtu.be/_qg0igPtPF8">LearnDash Installation Guide</a> Don\'t activate more than one LMS plugin at the same site. By importing it you will get the <span style="color:#ec5761">LearnDash</span> LMS dummy.', 'edubin'),
        ),

        array(
            'import_file_name'             => 'RTL Language',
            'categories'                   => array('RTL Language'),
            'local_import_file'            => trailingslashit(get_template_directory()) . 'admin/demo/rtl/content.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'admin/demo/rtl/widget_data.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'admin/demo/rtl/customizer.dat',
            'import_preview_image_url'     => trailingslashit(get_template_directory_uri()) . '/assets/images/demo-rtl.jpg',
            'preview_url'                  => 'https://thepixelcurve.com/wp/edubin/rtl/',
            'import_notice'                => __('Don\'t activate more than one LMS plugin at the same site. By importing it you will get <span style="color:#ec5761">RTL ready with LearnPress LMS</span> dummy. If you want to use RTL with LearnDash or Tutor LMS plugin. Please deactivate all other LMS plugins on your site, reset your site permalink then activate your LearnDash or Tutor LMS plugin.', 'edubin'),
        ),

    );
}
add_filter('pt-ocdi/import_files', 'edubin_import_files');

function edubin_dialog_options($options)
{
    return array_merge($options, array(
        'width'       => 300,
        'dialogClass' => 'wp-dialog',
        'resizable'   => false,
        'height'      => 'auto',
        'modal'       => true,
    ));
}
add_filter('pt-ocdi/confirmation_dialog_options', 'edubin_dialog_options', 10, 1);
add_filter('pt-ocdi/disable_pt_branding', '__return_true');

function edubin_after_import_setup($selected_import)
{
    // Assign menus to their locations.
    $main_menu   = get_term_by('name', 'Primary', 'nav_menu');
    $footer_menu = get_term_by('name', 'Footer Menu', 'nav_menu');

    set_theme_mod('nav_menu_locations', array(
        'primary'     => $main_menu->term_id,
        'footer_menu' => $footer_menu->term_id,
    )
    );
    // LearnPress LMS
    if ('Home v1 (LearnPress)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home');
    } elseif ('Home v2 (LearnPress)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v2');
    } elseif ('Home v3 (LearnPress)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v3');
    } elseif ('Home v4 (LearnPress)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v4');
    } elseif ('Home v5 (LearnPress)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v5');
    } elseif ('Home v6 (LearnPress)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v6');
    } elseif ('Home v7 (LearnPress)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v7');
    }
    // Tutor LMS
    elseif ('Home v1 (Tutor)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home');
    } elseif ('Home v2 (Tutor)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v2');
    } elseif ('Home v3 (Tutor)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v3');
    } elseif ('Home v4 (Tutor)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v4');
    } elseif ('Home v5 (Tutor)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v5');
    } elseif ('Home v6 (Tutor)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v6');
    } elseif ('Home v7 (Tutor)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v7');
    }

    // LearnDash LMS
    elseif ('Home v1 (LearnDash)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home');
    } elseif ('Home v2 (LearnDash)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v2');
    } elseif ('Home v3 (LearnDash)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v3');
    } elseif ('Home v4 (LearnDash)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v4');
    } elseif ('Home v5 (LearnDash)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v5');
    } elseif ('Home v6 (LearnDash)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v6');
    } elseif ('Home v7 (LearnDash)' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home v7');
    }
    // RTL Languages
    elseif ('RTL Language' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home');
    }

    $blog_page_id = get_page_by_title('Blog');
    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);
    update_option('page_for_posts', $blog_page_id->ID);

    // Reset site permalink
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');

}
add_action('pt-ocdi/after_import', 'edubin_after_import_setup');

function ocdi_before_content_import($selected_import)
{
    // Customizer reset
    delete_option('theme_mods_' . get_option('stylesheet'));
    // Old style.
    $theme_name = get_option('current_theme');
    if (false === $theme_name) {
        $theme_name = wp_get_theme()->get('edubin');
    }
    delete_option('mods_' . $theme_name);

    // Activate/Deactivate plugins
    // Check LearnPress LMS
    if ('Home v1 (LearnPress)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress/learnpress.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress/learnpress.php')) {
            activate_plugin('/learnpress/learnpress.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress-course-review/learnpress-course-review.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress-course-review/learnpress-course-review.php')) {
            activate_plugin('/learnpress-course-review/learnpress-course-review.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v2 (LearnPress)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress/learnpress.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress/learnpress.php')) {
            activate_plugin('/learnpress/learnpress.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress-course-review/learnpress-course-review.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress-course-review/learnpress-course-review.php')) {
            activate_plugin('/learnpress-course-review/learnpress-course-review.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v3 (LearnPress)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress/learnpress.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress/learnpress.php')) {
            activate_plugin('/learnpress/learnpress.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress-course-review/learnpress-course-review.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress-course-review/learnpress-course-review.php')) {
            activate_plugin('/learnpress-course-review/learnpress-course-review.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v4 (LearnPress)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress/learnpress.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress/learnpress.php')) {
            activate_plugin('/learnpress/learnpress.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress-course-review/learnpress-course-review.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress-course-review/learnpress-course-review.php')) {
            activate_plugin('/learnpress-course-review/learnpress-course-review.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v5 (LearnPress)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress/learnpress.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress/learnpress.php')) {
            activate_plugin('/learnpress/learnpress.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress-course-review/learnpress-course-review.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress-course-review/learnpress-course-review.php')) {
            activate_plugin('/learnpress-course-review/learnpress-course-review.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v6 (LearnPress)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress/learnpress.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress/learnpress.php')) {
            activate_plugin('/learnpress/learnpress.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress-course-review/learnpress-course-review.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress-course-review/learnpress-course-review.php')) {
            activate_plugin('/learnpress-course-review/learnpress-course-review.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v7 (LearnPress)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress/learnpress.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress/learnpress.php')) {
            activate_plugin('/learnpress/learnpress.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/learnpress-course-review/learnpress-course-review.php';
        if (file_exists($plugin_file) && !is_plugin_active('learnpress-course-review/learnpress-course-review.php')) {
            activate_plugin('/learnpress-course-review/learnpress-course-review.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    }

    // Check Tutor LMS
    elseif ('Home v1 (Tutor)' === $selected_import['import_file_name']) {
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor/tutor.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor/tutor.php')) {
            activate_plugin('/tutor/tutor.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor-pro/tutor-pro.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor-pro/tutor-pro.php')) {
            activate_plugin('/tutor-pro/tutor-pro.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v2 (Tutor)' === $selected_import['import_file_name']) {
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor/tutor.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor/tutor.php')) {
            activate_plugin('/tutor/tutor.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor-pro/tutor-pro.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor-pro/tutor-pro.php')) {
            activate_plugin('/tutor-pro/tutor-pro.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v3 (Tutor)' === $selected_import['import_file_name']) {
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor/tutor.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor/tutor.php')) {
            activate_plugin('/tutor/tutor.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor-pro/tutor-pro.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor-pro/tutor-pro.php')) {
            activate_plugin('/tutor-pro/tutor-pro.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v4 (Tutor)' === $selected_import['import_file_name']) {
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor/tutor.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor/tutor.php')) {
            activate_plugin('/tutor/tutor.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor-pro/tutor-pro.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor-pro/tutor-pro.php')) {
            activate_plugin('/tutor-pro/tutor-pro.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v5 (Tutor)' === $selected_import['import_file_name']) {
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor/tutor.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor/tutor.php')) {
            activate_plugin('/tutor/tutor.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor-pro/tutor-pro.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor-pro/tutor-pro.php')) {
            activate_plugin('/tutor-pro/tutor-pro.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v6 (Tutor)' === $selected_import['import_file_name']) {
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor/tutor.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor/tutor.php')) {
            activate_plugin('/tutor/tutor.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor-pro/tutor-pro.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor-pro/tutor-pro.php')) {
            activate_plugin('/tutor-pro/tutor-pro.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v7 (Tutor)' === $selected_import['import_file_name']) {
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        if (class_exists('SFWD_LMS')) {
            deactivate_plugins('/sfwd-lms/sfwd_lms.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor/tutor.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor/tutor.php')) {
            activate_plugin('/tutor/tutor.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/tutor-pro/tutor-pro.php';
        if (file_exists($plugin_file) && !is_plugin_active('tutor-pro/tutor-pro.php')) {
            activate_plugin('/tutor-pro/tutor-pro.php');
        }
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    }

    // Check LearnDash LMS
    elseif ('Home v1 (LearnDash)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/sfwd-lms/sfwd_lms.php';
        if (file_exists($plugin_file) && !is_plugin_active('sfwd-lms/sfwd_lms.php')) {
            activate_plugin('/sfwd-lms/sfwd_lms.php');
        }

        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v2 (LearnDash)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/sfwd-lms/sfwd_lms.php';
        if (file_exists($plugin_file) && !is_plugin_active('sfwd-lms/sfwd_lms.php')) {
            activate_plugin('/sfwd-lms/sfwd_lms.php');
        }

        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v3 (LearnDash)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/sfwd-lms/sfwd_lms.php';
        if (file_exists($plugin_file) && !is_plugin_active('sfwd-lms/sfwd_lms.php')) {
            activate_plugin('/sfwd-lms/sfwd_lms.php');
        }

        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v4 (LearnDash)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/sfwd-lms/sfwd_lms.php';
        if (file_exists($plugin_file) && !is_plugin_active('sfwd-lms/sfwd_lms.php')) {
            activate_plugin('/sfwd-lms/sfwd_lms.php');
        }

        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v5 (LearnDash)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/sfwd-lms/sfwd_lms.php';
        if (file_exists($plugin_file) && !is_plugin_active('sfwd-lms/sfwd_lms.php')) {
            activate_plugin('/sfwd-lms/sfwd_lms.php');
        }

        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v6 (LearnDash)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/sfwd-lms/sfwd_lms.php';
        if (file_exists($plugin_file) && !is_plugin_active('sfwd-lms/sfwd_lms.php')) {
            activate_plugin('/sfwd-lms/sfwd_lms.php');
        }

        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    } elseif ('Home v7 (LearnDash)' === $selected_import['import_file_name']) {
        if (function_exists('tutor')) {
            deactivate_plugins('/tutor/tutor.php');
        }
        if (function_exists('tutor_pro')) {
            deactivate_plugins('/tutor-pro/tutor-pro.php');
        }
        if (class_exists('LearnPress')) {
            deactivate_plugins('/learnpress/learnpress.php');
        }
        if (class_exists('LP_Addon_Course_Review_Preload')) {
            deactivate_plugins('/learnpress-course-review/learnpress-course-review.php');
        }
        $plugin_file = WP_PLUGIN_DIR . '/sfwd-lms/sfwd_lms.php';
        if (file_exists($plugin_file) && !is_plugin_active('sfwd-lms/sfwd_lms.php')) {
            activate_plugin('/sfwd-lms/sfwd_lms.php');
        }

        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    }

}
add_action('pt-ocdi/before_content_import', 'ocdi_before_content_import');

// // disable the One Click Demo plugin author branding notice after successful demo import
// add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

//disable generation of smaller images (thumbnails) during the content import
// add_filter('pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false');
