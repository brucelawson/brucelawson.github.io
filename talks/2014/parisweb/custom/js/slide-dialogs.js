/**
 * Settings and configuration for dialogs used in the presentation
 */
$(document).ready(function () {
    'use strict';

    var viewportWidth = $(window).width(),
        viewportHeight = $(window).height();

    $('.dialog').each(function () {
        var theSrc = $(this).attr('data-source') + '.html';
        $(this).load(theSrc);
    }).hide();

    $(window).resize(function () {
        var viewportWidth = $(window).width(),
            viewportHeight = $(window).height();
        $(".dialog").dialog({
            maxHeight: viewportHeight * .8,
            maxWidth: viewportWidth / 2,
            width: viewportWidth / 2,
            modal: true
        });
    });

    $(".opener").click(function () {
        $("#" + $(this).attr('data-target')).dialog("open");
    });
    $(".dialog").dialog({
        autoOpen: false,
        maxHeight: viewportHeight * .8,
        maxWidth: viewportWidth / 2,
        minWidth: viewportWidth / 2,
        modal: true
    });
});
