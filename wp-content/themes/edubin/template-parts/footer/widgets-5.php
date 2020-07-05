<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Edubin
 * Version: 1.0.0
 */

?>

<div class="footer-top">
    <div class="container">
        <div class="row footer-wrap">
            <div class="col-lg-3 col-md-4">
                <div class="footer-column">
                    <?php dynamic_sidebar( 'footer-1' ); ?>     
                </div>
             </div>
            <div class="col-lg-6 col-md-4">
                <div class="footer-column">
                    <?php dynamic_sidebar( 'footer-2' ); ?>     
                </div>
             </div>
            <div class="col-lg-3 col-md-4">
                <div class="footer-column">
                    <?php dynamic_sidebar( 'footer-3' ); ?>     
                </div>
             </div>
        </div>
    </div>
</div>