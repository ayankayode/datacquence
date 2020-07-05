<?php
/**
 * Displays header site branding
 *
 * @package Edubin
 * Version: 1.0.0
 */

?>
<?php
    $defaults = edubin_generate_defaults();
    $top_email   = get_theme_mod('top_email', $defaults["top_email"]);
    $top_phone   = get_theme_mod('top_phone', $defaults["top_phone"]);
    $top_massage   = get_theme_mod('top_massage', $defaults["top_massage"]);
    $top_massage_animation_show   = get_theme_mod('top_massage_animation_show', $defaults["top_massage_animation_show"]);
    $login_reg_show   = get_theme_mod('login_reg_show', $defaults["login_reg_show"]);
    $profile_show   = get_theme_mod('profile_show', $defaults["profile_show"]);
    $custom_profile_page_link   = get_theme_mod('custom_profile_page_link', $defaults["custom_profile_page_link"]);
    $custom_logout_link    = get_theme_mod('custom_logout_link');
    $custom_login_link    = get_theme_mod('custom_login_link');
    $custom_register_link    = get_theme_mod('custom_register_link');

?>

        <div class="header-left">
            <?php
                if ((!empty($top_phone) || !empty($top_email) || !empty($top_massage))) {?>

                <ul class="contact-info list-inline">

                    <?php if (!empty($top_email)) {?>
                        <li class="email list-inline-item">
                            <i class="glyph-icon flaticon-message-closed-envelope"></i>
                                <a href="mailto:<?php echo sanitize_email($top_email); ?>">
                                    <?php echo sanitize_email($top_email); ?>
                                </a>
                        </li>
                    <?php }?>

                    <?php if (!empty($top_phone)) {?>
                        <li class="phone list-inline-item">
                           <i class="glyph-icon flaticon-phone-receiver"></i>
                            <?php echo esc_html($top_phone); ?>
                        </li>
                    <?php }?>
                     
                   
                    <?php if (!empty($top_massage)) {?>
                        <li class="massage list-inline-item">
                            <?php if ($top_massage_animation_show) : ?><marquee class="top-marquee"><?php endif; ?><?php echo esc_html($top_massage); ?><?php if ($top_massage_animation_show) : ?></marquee><?php endif; ?>
                        </li>
                    <?php }?>

                </ul>
                <?php
            }?>

        </div><!-- .header-left -->

        <div class="header-right">

            <ul>
                <?php if ( is_active_sidebar( 'header-top' ) ) { ?>
                    <li class="header-top-widget-area list-inline-item align-right">
                        <?php dynamic_sidebar( 'header-top' ); ?>
                    </li>
                <?php } ?>
            </ul><!-- .Top widget -->

            <div class="social">
               <?php $edubin_social = edubin_get_social_media(); ?>
               <?php if (!empty($edubin_social)) : ?>
                <span class="follow-us"><?php echo esc_html__( 'Follow Us :', 'edubin' ); ?></span>
                <?php echo edubin_get_social_media(); ?>
                 <?php endif; ?>
            </div>  <!-- .Social -->  

            <?php if ($profile_show == '1') : ?>
                <?php
                    if ( is_user_logged_in() ) : ?>

                    <div class="edubin-custom-user-profile">
                      <ul> 
                        <?php if (!empty($custom_profile_page_link)) : ?>
                            <li class="profile">
                                <a href="<?php echo esc_url($custom_profile_page_link); ?>"><?php echo esc_html__( 'Profile', 'edubin' ); ?></a>
                        <?php else : ?>
                                <a href="<?php echo esc_url(get_edit_user_link()); ?>"><?php echo esc_html__( 'Profile', 'edubin' ); ?></a>
                            <li>
                        <?php endif; ?>
                          <li class="top-seperator"><?php echo esc_attr('/'); ?></li>
                      </ul>
                    </div>
                <?php endif; ?>
            <?php endif; ?> 

            <?php if ($login_reg_show == '1') : ?>
                <?php
                    if ( is_user_logged_in() ) : ?>
                        
                    <div class="login-register logout">
                      <ul> 
                        <li class="logouthide">
                            <?php if (!empty($custom_logout_link)) : ?>
                                <a href="<?php echo esc_url(wp_logout_url( home_url('/') )); ?>"><?php echo esc_html__( 'Logout', 'edubin' ); ?></a>
                            <?php else : ?>
                                <a href="<?php echo esc_url(wp_logout_url( home_url('/') )); ?>"><?php echo esc_html__( 'Logout', 'edubin' ); ?></a>
                            <?php endif; ?>
                        <li>
                      </ul>
                    </div>
                    <?php else : ?>
                    <div class="login-register">
                      <ul>
                        <?php if (!empty($custom_login_link)) : ?>
                            <li> <a href="<?php echo esc_url($custom_login_link); ?>"><?php echo esc_html__( 'Login', 'edubin' ); ?></a></li>
                        <?php else : ?>
                            <li><a href="<?php echo esc_url(wp_login_url( home_url('/') )); ?>"><?php echo esc_html__( 'Login', 'edubin' ); ?></a></li>
                        <?php endif; ?>
                            <li class="top-seperator"><?php echo esc_attr('/'); ?></li>
                        <?php if (!empty($custom_register_link)) : ?>
                            <li> <a href="<?php echo esc_url($custom_register_link); ?>"><?php echo esc_html__( 'Register', 'edubin' ); ?></a></li>
                        <?php else : ?>
                            <li> <a href="<?php echo esc_url( wp_registration_url() ); ?>"><?php echo esc_html__( 'Register', 'edubin' ); ?></a></li>
                        <?php endif; ?>

                      </ul>
                    </div>
                <?php endif; ?>
            <?php endif; ?> 
        </div><!-- .header-right -->




