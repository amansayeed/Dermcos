$(function() {
    "use strict";
    $('a[href="#"]').click(function(e) {
        e.preventDefault()
    });
    $("#services-home-carousel").owlCarousel({
        autoPlay: !0,
        items: 3,
        loop: !0,
        stopOnHover: !0,
        navigation: !0,
        pagination: !1,
        navigationText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"]
    });
    $("#testimonials-carousel").owlCarousel({
        autoPlay: !0,
        singleItem: !0,
        stopOnHover: !0,
        navigation: !0,
        pagination: !1,
        navigationText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"]
    });
    var $active = $("#accordion-1 .panel-collapse.in").prev().addClass("active");
    $active.find("a").append("<span class=\"fa fa-minus-circle pull-right\"></span>");
    $("#accordion-1 .panel-heading").not($active).find('a').prepend("<span class=\"fa fa-plus-circle pull-right\"></span>");
    $("#accordion-1").on("show.bs.collapse", function(e) {
        $("#accordion-1 .panel-heading.active").removeClass("active").find(".fa").toggleClass("fa-plus-circle fa-minus-circle");
        $(e.target).prev().addClass("active").find(".fa").toggleClass("fa-plus-circle fa-minus-circle")
    });
    $("#accordion-1").on("hide.bs.collapse", function(e) {
        $(e.target).prev().removeClass("active").find(".fa").removeClass("fa-minus-circle").addClass("fa-plus-circle")
    });
    var $grid = $('#gallery-grid');
    $grid.shuffle({
        itemSelector: '.gallery-grid-item',
        speed: 500
    });
    $('#gallery-filter li a').click(function(e) {
        $('#gallery-filter li a').removeClass('active');
        $(this).addClass('active');
        var groupName = $(this).attr('data-group');
        $grid.shuffle('shuffle', groupName)
    });
    $('#gallery-grid').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: !0
        }
    });

    function initialize($) {
        var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(17.421306, 78.457553),
            disableDefaultUI: !0
        };
        var map = new google.maps.Map(document.querySelector('.map, .contact-page-map'), mapOptions)
    }
    google.maps.event.addDomListener(window, 'load', initialize)
})