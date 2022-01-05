/*-----------------------------------------------------------------------------------

    Theme Name: Hiluxx - One Page Parallax
    Description: One Page Parallax Multipurpose Template
    Author: chitrakootweb
    Version: 1.0

    ---------------------------------- */

$(function () {
  "use strict";
  var wind = $(window);
  $("#preloader").fadeOut("normall", function () {
    $(this).remove();
  });
  $.scrollIt({
    upKey: 38,
    downKey: 40,
    easing: "swing",
    scrollTime: 600,
    activeClass: "active",
    onPageChange: null,
    topOffset: -70,
  });
  wind.on("scroll", function () {
    if (wind.width() > 600) {
      if (wind.scrollTop() > 600) {
        $("#back-to-top").addClass("reveal");
      } else {
        $("#back-to-top").removeClass("reveal");
      }
    }
  });
  $("#back-to-top").on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 1000);
    return false;
  });
  if ($("#sidebar_toggle").length) {
    $("body").addClass("sidebar-menu");
    $("#sidebar_toggle").on("click", function () {
      $(".sidebar-menu").toggleClass("active");
      $(".side-menu").addClass("side-menu-active"),
        $("#close_sidebar").fadeIn(700);
    }),
      $("#close_sidebar").on("click", function () {
        $(".side-menu").removeClass("side-menu-active"),
          $(this).fadeOut(200),
          $(".sidebar-menu").removeClass("active");
      }),
      $("#btn_sidebar_colse").on("click", function () {
        $(".side-menu").removeClass("side-menu-active"),
          $("#close_sidebar").fadeOut(200),
          $(".sidebar-menu").removeClass("active");
      });
  }
  wind.on("scroll", function () {
    var bodyScroll = wind.scrollTop(),
      navbar = $(".navbar"),
      navbloglogo = $(".blog-nav .logo> img"),
      darkbg = $(".bg-black .logo> img"),
      lightbg = $(".bg-white .logo> img"),
      themebg = $(".bg-theme .logo> img"),
      logo = $(".navbar .logo> img");
    if (bodyScroll > 100) {
      navbar.addClass("nav-scroll");
      // logo.attr("src", "http://localhost/mimc1/themes/demo5/assets/images/logo-dark.png");
      // darkbg.attr("src", "");
      // themebg.attr("src", "img/logo-black.png");
      // lightbg.attr("src", "http://localhost/mimc1/themes/demo5/assets/images/logo-dark.png");
    } else {
      navbar.removeClass("nav-scroll");
      // logo.attr("src", "http://localhost/mimc1/themes/demo5/assets/images/logo-light.png");
      // lightbg.attr("src", "http://localhost/mimc1/themes/demo5/assets/images/logo-dark.png");
      // themebg.attr("src", "img/logo-white.png");
      // navbloglogo.attr("src", "http://localhost/mimc1/themes/demo5/assets/images/logo-dark.png");
    }
  });
  var windowsize = wind.width();
  if (windowsize <= 991) {
    $(".navbar-nav .nav-link").on("click", function () {
      $(".navbar-collapse.show").removeClass("show");
    });
  }
  wind.on("scroll", function () {
    $(".skills-progress span").each(function () {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      var myVal = $(this).attr("data-value");
      if (bottom_of_window > bottom_of_object) {
        $(this).css({ width: myVal });
      }
    });
  });
  var pageSection = $(".bg-img, section");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css(
        "background-image",
        "url(" + $(this).data("background") + ")"
      );
    }
  });
  $(".testimonials .owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    margin: 15,
    autoplay: true,
    smartSpeed: 500,
  });
  $(".team .owl-carousel").owlCarousel({
    loop: false,
    margin: 30,
    autoplay: false,
    smartSpeed: 500,
    responsiveClass: true,
    responsive: {
      0: { items: 1, margin: 0 },
      700: { items: 2, margin: 15 },
      1000: { items: 4 },
    },
  });
  $(".clients .owl-carousel").owlCarousel({
    loop: true,
    margin: 15,
    autoplay: true,
    smartSpeed: 500,
    responsiveClass: true,
    responsive: {
      0: { items: 1, margin: 0 },
      700: { items: 2, margin: 15 },
      1000: { items: 5 },
    },
  });
  $(".gallery").magnificPopup({
    delegate: ".popimg",
    type: "image",
    gallery: { enabled: true },
  });
  $(".story-video").magnificPopup({ delegate: ".video", type: "iframe" });
  if ($(".numbers").length !== 0) {
    $(".numbers").appear(function () {
      $(".count").countTo({
        speed: 4000,
        refreshInterval: 60,
        formatter: function (value, options) {
          return value.toFixed(options.decimals);
        },
      });
    });
  }
  $(window).on("load", function () {
    var wind = $(window);
    wind.stellar();
    $(".gallery").isotope({ itemSelector: ".items" });
    var $gallery = $(".gallery").isotope({});
    $(".filtering").on("click", "span", function () {
      var filterValue = $(this).attr("data-filter");
      $gallery.isotope({ filter: filterValue });
    });
    $(".filtering").on("click", "span", function () {
      $(this).addClass("active").siblings().removeClass("active");
    });
  });
  $(window).resize(function (event) {
    setTimeout(function () {
      SetResizeContent();
    }, 500);
    event.preventDefault();
  });
  function fullScreenHeight() {
    var element = $(".full-screen");
    var $minheight = $(window).height();
    element.css("min-height", $minheight);
  }
  function SetResizeContent() {
    fullScreenHeight();
  }
  SetResizeContent();
  $(document).ready(function () {
    var owl = $(".header .owl-carousel");
    $(".slider-fade .owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      margin: 0,
      autoplay: true,
      smartSpeed: 500,
      mouseDrag: false,
      animateIn: "fadeIn",
      animateOut: "fadeOut",
    });
    $(".owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      margin: 0,
      autoplay: true,
      smartSpeed: 500,
    });
    $(".slider .owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      margin: 0,
      mouseDrag: false,
      autoplay: true,
      smartSpeed: 500,
    });
    owl.on("changed.owl.carousel", function (event) {
      var item = event.item.index - 2;
      $("h3").removeClass("animated fadeInUp");
      $("h1").removeClass("animated fadeInUp");
      $("p").removeClass("animated fadeInUp");
      $(".btn").removeClass("animated fadeInUp");
      $(".owl-item")
        .not(".cloned")
        .eq(item)
        .find("h3")
        .addClass("animated fadeInUp");
      $(".owl-item")
        .not(".cloned")
        .eq(item)
        .find("h1")
        .addClass("animated fadeInUp");
      $(".owl-item")
        .not(".cloned")
        .eq(item)
        .find("p")
        .addClass("animated fadeInUp");
      $(".owl-item")
        .not(".cloned")
        .eq(item)
        .find(".btn")
        .addClass("animated fadeInUp");
    });
    if ($(".countdown").length !== 0) {
      $(".countdown").countdown({ date: "01 Jan 2021 00:01:00", format: "on" });
    }
    if ($("#canvas-basic").length !== 0) {
      var granimInstance = new Granim({
        element: "#canvas-basic",
        name: "basic-gradient",
        direction: "left-right",
        opacity: [1, 1],
        isPausedWhenNotInView: true,
        states: {
          "default-state": {
            gradients: [
              ["#ff9c00", "#d93b0a"],
              ["#c20165", "#4c0c82"],
              ["#061766", "#007f33"],
            ],
          },
        },
      });
    }
  });
});
