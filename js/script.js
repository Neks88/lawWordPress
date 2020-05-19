//ToolTop
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});



//Popover
$(document).ready(function () {
    $('[data-toggle="popover"]').popover();
});


//Smooth Scroll
$(function () {
    $('html').smoothScroll(1000);
});


//Back to Top
$("#scroll-to-top").illBeBack();


//wow.js
new WOW().init();

//Enable Bootstrap modal for wordpress

jQuery(document).ready(function ($) {
    $('.wpmodal').find('a').attr('data-toggle', 'modal');
    $('.wpmodal').find('a').attr('data-target', '#exampleModalLong');
});