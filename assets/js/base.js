(function ($) {
  "use strict";

  function initPage() {
    //Use lightslider lib to manage carousel slider functionality on site
    function carouselSlider() {
      var slider = $("#carousel-advocates").lightSlider({
        item: 4,
        autoWidth: false,
        loop: true,
        pager: false,
        controls: false,
        responsive: [
          {
            breakpoint: 900,
            settings: {
              item: 2,
            },
          },
          {
            breakpoint: 550,
            settings: {
              item: 1,
            },
          },
        ],
      });

      $("#prevSlide").on("click", function () {
        slider.goToPrevSlide();
      });
      $("#nextSlide").on("click", function () {
        slider.goToNextSlide();
      });
    }

    //Focus on images when hovering over them
    function imageFocus() {
      var img = $(".expandable img");
      img.mouseenter(function () {
        $(this).addClass("expand");
      });
      img.mouseleave(function () {
        $(this).removeClass("expand");
      });
    }

    //Change text size functionalty
    function changeTextSize() {
      var tiny = $(".tiny");
      var medium = $(".medium");
      var large = $(".large");

      tiny.click(function () {
        $(".text-size span").removeClass("active");
        $(this).addClass("active");
        tiny.addClass("active");
        $("p").css("font-size", "17px");
      });
      medium.click(function () {
        $(".text-size span").removeClass("active");
        $(this).addClass("active");
        medium.addClass("active");
        $("p").css("font-size", "19px");
      });
      large.click(function () {
        $(".text-size span").removeClass("active");
        $(this).addClass("active");
        large.addClass("active");
        $("p").css("font-size", "21px");
      });
    }

    //Mobile menu functionality
    function mobileMenu() {
      new Pushbar({
        blur: true,
        overlay: true,
      });
    }

    //Form submit functionality
    function formSubmit() {
      var form = $("#crewe-form");

      form.submit(function (event) {
        event.preventDefault();
        $(".form-message").addClass("success");
        $(".form-message").append(
          "<p>Form has been submitted successfully, we will contact you soon!</p>"
        );
      });
    }

    carouselSlider();
    imageFocus();
    changeTextSize();
    mobileMenu();
    formSubmit();
  }

  $(document).ready(function () {
    initPage();
  });
})(jQuery);
