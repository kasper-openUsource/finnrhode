(function ($) {


    $.fn.slideBlock = function (arg) {
        /* define variables */
        var trigger = this,
            container = this,
            distance = 50,
            start_position = parseInt(this.css("right"));
        if (typeof arg!="undefined") {
            if (typeof arg.trigger != "undefined") trigger = arg.trigger;
            if (typeof arg.distance != 'undefined') distance = start_position + (parseInt(arg.distance));
        }

        $(trigger).bind("click", function () {
            toggle_slide(container, distance, start_position);
        });
    }


    /* support functions */

    function toggle_slide(block, distance, start_position) {
        if ($(block).hasClass('slided')) {
            $(block).animate({
                right: start_position
            });
            $(block).removeClass("slided");
        } else {
            $(block).animate({
                right: distance
            });
            $(block).addClass("slided");
        }
    }

})(jQuery);
