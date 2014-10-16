$(document).ready(function () {
    'use strict';

    $("#Cover").backstretch("pictures/bright-idea.jpg");
    $("#quicksand").backstretch("pictures/quicksand.gif");
    $("#widget-challenges").backstretch("pictures/divsoup.png");
    $("#never-took-off").backstretch("pictures/flight.jpg");
    $("#objects").backstretch("pictures/uncommon-objects.jpg");


    $('#pour ol li strong').each(function () {
        var el = $(this), text = el.html(), first = text.slice(0, 1), rest = text.slice(1);
        el.html("<span class='firstletter'>" + first + "</span>" + rest);
    });

    $('.inline-example').each(function () {
        var theSrc = '../examples/' + $(this).attr('data-source') + '.html';
        $(this).load(theSrc);
    });

    /**
     * Hack for backstretch. Backstretch adds the image using img element but does
     * not allow you to provide alt attribute. In this case an empty alt is fine
     * because I'm using them solely as decoration. So basically I just
     * add an empty alt for any image that doesn't have it
     */
    $('img:not([alt])').attr('alt', '');

    /**
     * JAVASCRIPT USED FOR EXAMPLES
     */


    $.fn.extend({
        addVideoJS: function (opts, sources) {
            var self = $(this);

            //Settings list and the default values
            var defaults = {
                preload: 'auto',
                width: '640',
                height: '320',
                controls: '',
                autoplay: false
            };

            var options = $.extend(defaults, opts);

            return self.each(function () {
                var o = options,
                    s = sources,
                    video;

                video = $('<video>');
                video.prop('controls',true);

                video.attr({
                    id: o.id,
                    poster: o.poster,
                    preload: o.preload,
                    width: o.width,
                    height: o.height
                });

                video.addClass('video-js').addClass('vjs-default-skin').addClass('vjs-big-play-centered');

                if (s.hasOwnProperty('ogg')) {
                    video.append('<source src="' + s.ogg + '" type="video/ogg" />');
                }

                if (s.hasOwnProperty('mp4')) {
                    video.append('<source src="' + s.mp4 + '" type="video/mp4" />');
                }
                if (s.hasOwnProperty('webm')) {
                    video.append('<source src="' + s.webm + '" type="video/webm" />');
                }


                video.appendTo(self);
            });
        }
    });


    $('#rdio').addVideoJS(
        {
            id: 'custom_radio'
        },
        {
            mp4: '/slides/videos/CustomUIRadioButtonAccessibilityFail.mp4',
            ogg: '/slides/videos/CustomUIRadioButtonAccessibilityFail.ogv',
            webm: '/slides/videos/CustomUIRadioButtonAccessibilityFail.webm'
        }
    );

    $('#chosen').addVideoJS(
        {
            id: 'custom_widgets'
        },
        {
            mp4: '/slides/videos/CustomUIWidgetAccessibilityProblems.mp4',
            ogg: '/slides/videos/CustomUIWidgetAccessibilityProblems.ogv',
            webm: '/slides/videos/CustomUIWidgetAccessibilityProblems.webm'
        }
    );
});