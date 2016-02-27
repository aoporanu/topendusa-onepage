/**
 * Created by adyopo on 31.01.2016.
 */
var revapi;
jQuery(document).ready(function($) {
    revapi = $('.tp-banner').revolution({
        delay: 15000,
        startwidth: 1170,
        startheight: 500,
        hideThumbs: 10,
        fullWidth: "on",
        fullScreen: "on",
        fullScreenOffsetContainer: "",
        stopAtSlide: 1,
        stopAfterLoops: 1
    });
});
