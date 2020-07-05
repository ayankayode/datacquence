/*==================================
Edubin theme activation scripts  
====================================*/
(function($) {
    "use strict";
    
    //===== Prealoder
    $(window).on('load', function(event) {
        $('.preloader').delay(500).fadeOut(500);

        // Preloader two 
         $('#preloader_two').fadeOut()
         
        // Icon Preloader 
        $(".edubin_image_preloader").fadeOut("slow");;
    });

    // === Sticky header
    $(function() {
        var header = $(".is-header-sticky"),
            yOffset = 0,
            triggerPoint = 220;
        $(window).on('scroll', function() {
            yOffset = $(window).scrollTop();
            if (yOffset >= triggerPoint) {
                header.addClass("sticky-active animated slideInDown");
            } else {
                header.removeClass("sticky-active animated slideInDown");
            }
        });
    });

    //===== Count Down
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<div class="count-down-time"><div class="single-count"><span class="number">%D :</span><span class="title">Days</span></div><div class="single-count"><span class="number">%H :</span><span class="title">Hours</span></div><div class="single-count"><span class="number">%M :</span><span class="title">Minuets</span></div><div class="single-count"><span class="number">%S</span><span class="title">Seconds</span></div></div>'));
        });
    });

    //===== Search
    $('#search').on('click', function() {
        $(".edubin-search-box").fadeIn(600);
    });
    $('.edubin-closebtn').on('click', function() {
        $(".edubin-search-box").fadeOut(600);
    });

    //===== Add class for tribe event archive page
    jQuery(function() {
        jQuery('.post-type-archive-tribe_events .page-title').each(function() {
            var text = this.innerHTML;
            var firstSpaceIndex = text.indexOf(" ");
            if (firstSpaceIndex > 0) {
                var substrBefore = text.substring(0, firstSpaceIndex);
                var substrAfter = text.substring(firstSpaceIndex, text.length)
                var newText = '<span class="firstWord">' + substrBefore + '</span>' + substrAfter;
                this.innerHTML = newText;
            } else {
                this.innerHTML = '<span class="firstWord hidden">' + text + '</span>';
            }
        });
    });

})(jQuery);