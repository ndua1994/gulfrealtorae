var ww = document.body.clientWidth;



$(document).ready(function () {






$('input[name="schedule_submit"]').on('click',function(e){
$('#property-form').validate({


rules:
{

  name:
  {
    required:true
  },
  email_id:
  {
    required:true,
    email:true
  },
  message:
  {
    required:true
  }

},
messages:
{
  name:
  {
    required:'Name is required'
  },
  email_id:
  {
    required:'Email ID is required',
    email:'Enter a valid Email ID'
  },
  message:
  {
    required:'Message is required'
  }
},
submitHandler:function(form)
{
  $.ajax({

    url:base_url+'property/enquiry-form',
    data:$('#property-form').serializeArray(),
    type:'POST',
    dataType:'json',
    beforeSend:function()
    {
      $('input[name="schedule_submit"]').val('Wait...');
      $('input[name="schedule_submit"]').prop('disabled',true);
    },
    success:function(r)
    {
      if(r.status=='success')
      {
          $('.prop_msg').text(r.msg);
          $('input[name="schedule_submit"]').val('Submit');
          $('input[name="schedule_submit"]').prop('disabled',false); 
          $("#property-frm")[0].reset();
      }
      else
      {
        $('.prop_msg').text(r.msg);
        $('input[name="schedule_submit"]').val('Submit');
        $('input[name="schedule_submit"]').prop('disabled',false); 
        $("#property-frm")[0].reset();

      }





    }



  });
}



});
});


$('input[name="popup_submit"]').on('click',function(e){

$('#login').validate({


rules:
{
   name:
   {
      required:true
   },
   email:
   {
    required:true,
    email:true
   },
   mobile:
   {
    required:true,
    number:true
   },
   message:
   {
    required:true
   }
},
messages:
{

  name:
  {
    required:'Name is required'
  },
  email:
  {
    required:'Email ID is required',
    email:'Enter a valid Email ID'
  },
  mobile:
  {
    required:'Mobile Number is required',
    number:'Mobile Number must be a numeric value'
  },
  message:
  {
    required:'Message is required'
  }
},
submitHandler:function(form)
{

 var popup_number_hidden=$('#login .iti__selected-dial-code').text();
$('input[name="popup_number_hidden"]').val(popup_number_hidden);


$.ajax({

url:base_url+'popup-form',
data:$('#login').serializeArray(),
type:'POST',
dataType:'json',
beforeSend:function()
{
  $('input[name="popup_submit"]').prop('disabled',true);
  $('input[name="popup_submit"]').val('WAIT...');
},
success:function(r)
{
  if(r.status=='success')
      {
          $('#message').text(r.msg);
          $('input[name="popup_submit"]').val('Send Message');
          $('input[name="popup_submit"]').prop('disabled',false); 
          $("#login")[0].reset();
          $('#login input').intlTelInput('setCountry', 'myDefaultCountry' );
      }
      else
      {
          $('#message').text(r.msg);
          $('input[name="popup_submit"]').val('Send Message');
          $('input[name="popup_submit"]').prop('disabled',false);
          $('#login input').intlTelInput('setCountry', 'myDefaultCountry' );
          $("#login")[0].reset();
      }
}



});
  
}



});

});

  'use strict';

  // Upload Submit Property
    // single upload
  $("#feature-img").on('change',function(){
    readURL(this,'.submit-property__upload-single','#feature-img-area','contain-img');
    $('#feature-img-area img').remove();
  })
  function readURL(input,$containImg,$input,$classToggle) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $($containImg).addClass($classToggle);
        $($input).append('<img src="'+e.target.result+'" alt="preview-img">'); 
      };
      reader.readAsDataURL(input.files[0]);
    }
    $($containImg).removeClass($classToggle);
  }

  Multiupload('#plan-img','#plan-img-area','.submit-property__upload-multi2','contain-multi2');

  Multiupload('#gall-img','#gall-img-area','.submit-property__upload-multi','contain-multi');
  function Multiupload($input,$output,$contain,$classToggle){
  $($input).on('change', function(){ //on file input change
    if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
    {
        
      var data = $(this)[0].files; //this file data
      
      $.each(data, function(index, file){ //loop though each file
          if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
              var fRead = new FileReader(); //new filereader
              fRead.onload = (function(file){ //trigger function on successful read
              return function(e) {
                  var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
                  $($output).append(img); //append image to output element
              };
              })(file);
              fRead.readAsDataURL(file); //URL representing the file's data.

          }
      });
      $($contain).addClass($classToggle);
    }else{
      $($contain).removeClass($classToggle);
      alert("Your browser doesn't support File API!"); //if File API is absent
    }
  });
  
}



  // Header 
  $(".header__nav a:not(:only-child)").each(function () {
    $(this).addClass("parent");
  });

  $(".nav-toggle").on('click', function () {
    $(this).toggleClass("active");
    $(".header__menu").slideToggle(200);
    return false;
  });

  adjustMenu();

  // Famous Agents Slider
  $(".famous-agents__wrapper").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $(".famous-agents__navigation-prev").on('click', function () {
    $(".famous-agents__wrapper").slick('slickPrev');
  });

  $(".famous-agents__navigation-next").on('click', function () {
    $(".famous-agents__wrapper").slick('slickNext');
  });

  // New Listing Slider

  $(".new-listing__wrapper").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    customPaging: function (slider, i) {
      var thumb = $(slider.$slides[i]).data();
      return '<span class="slick-dots__icon"></span>';
    },
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // Testimonial Slider

  $(".testimonial__slider--top").slick({
    asNavFor: '.testimonial__slider--bottom, .testimonial__slider--middle',
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $(".testimonial__slider--bottom").slick({
    asNavFor: '.testimonial__slider--top, .testimonial__slider--middle',
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $(".testimonial__slider--middle").slick({
    asNavFor: '.testimonial__slider--top, .testimonial__slider--bottom',
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 3,
    slidesToScroll: 1,
    focusOnSelect: true,
  });

  $(".testimonial__inner").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 8000,
    arrows: false,
  });

  $(".testimonial__navigation-prev").on('click', function () {
    $(".testimonial__inner").slick('slickPrev');
  });

  $(".testimonial__navigation-next").on('click', function () {
    $(".testimonial__inner").slick('slickNext');
  });

  // Feature Listing Slider

  $(".featured-listing__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    swipeToSlide: true,
    customPaging: function (slider, i) {
      var thumb = $(slider.$slides[i]).data();
      return '<span class="slick-dots__icon"></span>';
    },
  });

  // Feature Listing Slider Syncing
  $('.featured-listing__videos').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    fade: true,
    asNavFor: '.featured-listing__nav'
  });
  $('.featured-listing__nav').slick({
    vertical: true,
    verticalSwiping: true,
    swipeToSlide: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.featured-listing__videos',
    focusOnSelect: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },

      {
        breakpoint: 768,
        settings: {
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });

  // Property Slider Syncing

  $(".property__slider-nav--vertical").slick({
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 8,
    slidesToScroll: 1,
    focusOnSelect: true,
    autoplay: false,
    infinite: false,
    prevArrow: '<span class="ion-ios-arrow-up slick-vertical-arrow slick-vertical-prev-arrow"></span>',
    nextArrow: '<span class="ion-ios-arrow-down slick-vertical-arrow slick-vertical-next-arrow"></span>',
    asNavFor: '.property__slider-images',
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          prevArrow: '<span class="ion-ios-arrow-left slick-horizontal-arrow slick-horizontal-prev-arrow"></span>',
          nextArrow: '<span class="ion-ios-arrow-right slick-horizontal-arrow slick-horizontal-next-arrow"></span>',
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 6,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,
        settings: {
          prevArrow: '<span class="ion-ios-arrow-left slick-horizontal-arrow slick-horizontal-prev-arrow"></span>',
          nextArrow: '<span class="ion-ios-arrow-right slick-horizontal-arrow slick-horizontal-next-arrow"></span>',
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 479,
        settings: {
          prevArrow: '<span class="ion-ios-arrow-left slick-horizontal-arrow slick-horizontal-prev-arrow"></span>',
          nextArrow: '<span class="ion-ios-arrow-right slick-horizontal-arrow slick-horizontal-next-arrow"></span>',
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
    ]
  });

  $(".property__slider-nav--horizontal").slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    focusOnSelect: true,
    autoplay: false,
    infinite: false,
    prevArrow: '<span class="ion-ios-arrow-left slick-horizontal-arrow slick-horizontal-prev-arrow"></span>',
    nextArrow: '<span class="ion-ios-arrow-right slick-horizontal-arrow slick-horizontal-next-arrow"></span>',
    asNavFor: '.property__slider-images',
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 6,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 479,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
    ]
  });

  $(".property__slider-images").on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    $(".sliderInfo").text(i + "/" + slick.slideCount + " Photos");
  });

  $(".image-navigation__prev").on('click', function () {
    $(".property__slider-images").slick('slickPrev');
  });

  $(".image-navigation__next").on('click', function () {
    $(".property__slider-images").slick('slickNext');
  });

  $(".property__slider-images").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    infinite: false,
    arrows: false,
    fade: true,
    asNavFor: '.property__slider-nav',
  });

  // Listing Search Form 
  $(".ht-field").dropkick({
    mobile: true,
  });
  
  $(".listing-search__property-size").slider({
    range: true,
    min: 1000,
    max: 8000,
    step: 100,
    values: [1000, 8000],
    slide: function (event, ui) {
      $("#property-amount").text(ui.values[0] + " - " + ui.values[1]);
    }
  });

  $("#property-amount").text($(".listing-search__property-size").slider("values", 0) + " - " + $(".listing-search__property-size").slider("values", 1));

  $(".listing-search__lot-size").slider({
    range: true,
    min: 1000,
    max: 8000,
    step: 100,
    values: [1000, 8000],
    slide: function (event, ui) {
      $("#lot-amount").text(ui.values[0] + " - " + ui.values[1]);
    }
  });

  $("#lot-amount").text($(".listing-search__lot-size").slider("values", 0) + " - " + $(".listing-search__lot-size").slider("values", 1));

  $(".listing-search__btn").on('click', function () {

    $(this).toggleClass("js-hide");
    if ($(this).hasClass("js-hide")) {
      $(this).text("Hide");
    } else {
      $(this).text("Advance Search");
    }

    $(".listing-search__advance").slideToggle();
  
    return false;
  });

  $(".listing-search__more-btn").on('click', function () {
    $(this).toggleClass('listing-search__more-btn--show');
    $(".listing-search__more-inner").slideToggle();
    return false;
  });

  $(".main-listing__form-more-filter").on('click', function () {

    $(this).toggleClass("js-hide");
    if ($(this).hasClass("js-hide")) {
      $(this).text("Less Filter");
    } else {
      $(this).text("More Filter");
    }

    $(".main-listing__form-expand").slideToggle();

    return false;
  });

  // Property Accordion
  $(".property__accordion").on('click', '.property__accordion-header', function () {
    $(this).next().slideToggle(350);
    $(this).find('.property__accordion-expand').toggleClass('fa-caret-up fa-caret-down');
    $(this).parent().siblings().find('.property__accordion-content').slideUp(350);
    $(this).parent().siblings().find('.property__accordion-expand').removeClass('fa-caret-up').addClass('fa-caret-down');
  });

  // Property Tab
  $(".property__tab-list").on("click", ".property__tab", function(e) {
    e.preventDefault();
    $(".property__tab").removeClass("property__tab--active");
    $(".property__tab-content").removeClass("is-visible");
    $(this).addClass("property__tab--active");
    $($(this).attr("href")).addClass("is-visible");
  });
  
  // Property Form
  $(".property__form-date").dateDropper();
  $(".property__form-time").timeDropper();

  // Mortgage Calculator
  $(".form-calculator__submit").on('click', function (e) {
    e.preventDefault();
    $(".form-calculator__result").slideToggle(200);
  });

  // Sign up
  $(".sign-up__textcontent").on("click", ".sign-up__tab", function(e) {
    e.preventDefault();
    $(".sign-up__tab").removeClass('is-active');
    $(".sign-up__form").removeClass('is-visible');
    $(this).addClass('is-active');
    $($(this).attr('href')).addClass('is-visible');
  });

  // Back to Top
  $(window).on( 'scroll', function() {
    ( $(this).scrollTop() > 300 ) ? $('.back-to-top').addClass('is-visible') : $('.back-to-top').removeClass('is-visible is-fade-out'); 
    if ( $(this).scrollTop() > 1200 ) {
      $('.back-to-top').addClass('is-fade-out');
    }
  } );

  $('.back-to-top').on( 'click', function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0,
    }, 700);
  } );

  // WYSIWYG
  $('#submit-property-wysiwyg').trumbowyg();

  // Header User Menu
  $('.header__user').on( 'click', function() {
    $('.header__user-menu').toggleClass('is-visible');
  } );

  // Countdown Timer
  var deadline = new Date("16 September, 2018 00:00:00");

  function updateTimer(deadline) {
    var time = Date.parse(deadline) - Date.parse(new Date());
    
    return {
      'days' : Math.floor( time / (1000 * 60 * 60 * 24) ),
      'hours': Math.floor( time / (1000 * 60 * 60) % 24 ),
      'minutes': Math.floor( time / (1000 * 60) % 60 ),
      'seconds': Math.floor( time / (1000) % 60 ),
      'total': time
    };
  }

  function startTimer(deadline) {
    var timeInterval = setInterval(function () {

      var timer = updateTimer(deadline);

      $('.days').html(timer.days);
      $('.hours').html(('0' + timer.hours).slice(-2));
      $('.minutes').html(('0' + timer.minutes).slice(-2));
      $('.seconds').html(('0' + timer.seconds).slice(-2));

      if (timer.total <= 0) {
        clearInterval(timeInterval);
      }
    }, 1000);
  }

  startTimer(deadline);

  // Polyfill for sticky maps
  if ($(".map-container--sticky").length > 0) {
    Stickyfill.add($(".map-container--sticky")[0]);
  }
});

function adjustMenu() {
  if (ww < 992) {
    $(".header__nav li").unbind('mouseenter mouseleave');
    $("a.parent").unbind('click').bind('click', function() {
      $(this).parent('li').toggleClass('hover');
      $(this).toggleClass('active');
      return false;
    });
  } else if (ww >= 992) {
    $(".header__nav li").removeClass('hover');
    $(".header__nav li a").unbind('click');
    $("a.parent").removeClass('active').on('click', function () {
      return false;
    });
    $('.header__nav li').unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function () {
      $(this).toggleClass("hover");
    });
  }
}

$(window).on('resize orientationchange', function () {
  ww = document.body.clientWidth;
  adjustMenu();
});

function initMap() {

  var options = {
    disableDefaultUI: true,
    zoomControl: true,
    zoomControlOptions: {
      position: google.maps.ControlPosition.LEFT_BOTTOM,
    },
    styles: [
      {
        "featureType": "landscape",
        "stylers": [
          {
              "hue": "#FFBB00"
          },
          {
              "saturation": 43.400000000000006
          },
          {
              "lightness": 37.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.highway",
        "stylers": [
          {
              "hue": "#FFC200"
          },
          {
              "saturation": -61.8
          },
          {
              "lightness": 45.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 51.19999999999999
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.local",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 52
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "water",
        "stylers": [
          {
              "hue": "#0078FF"
          },
          {
              "saturation": -13.200000000000003
          },
          {
              "lightness": 2.4000000000000057
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "poi",
        "stylers": [
          {
              "hue": "#00FF6A"
          },
          {
              "saturation": -1.0989010989011234
          },
          {
              "lightness": 11.200000000000017
          },
          {
              "gamma": 1
          }
        ]
      }
    ]
  };

  var map = new google.maps.Map(document.getElementById("map"), options);
  var bounds = new google.maps.LatLngBounds();
  var markerList = [
    {
      coords: {lat: -31.563910, lng: 147.154312},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/castalia_shibakoen.jpg" alt="Castalia Shibakoen" class="listing__img"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Castalia Shibakoen</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -33.718234, lng: 150.363181},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/real_house_luxury_villa.jpg" alt="Real House Luxury Villa"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Real House Luxury Villa</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -33.727111, lng: 150.371124},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/dream_house_take_away.jpg" alt="Dream House Take Away"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">House Take Away</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -33.848588, lng: 151.209834},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/weston_hightpointe_place.jpg" alt="Weston Hightpointe Place"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Weston Hightpointe Place</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -33.851702, lng: 151.216968},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/sunhouse_apartment_c21.jpg" alt="Sunhouse Apartment C21"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Sunrise Apartment</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -34.671264, lng: 150.863657},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/real_house_luxury_villa.jpg" alt="Real House Luxury Villa"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Real House Luxury Villa</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -35.304724, lng: 148.662905},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/castalia_shibakoen.jpg" alt="Castalia Shibakoen"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Castalia Shibakoen</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -36.817685, lng: 175.699196},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/real_house_luxury_villa.jpg" alt="Real House Luxury Villa"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Real House Luxury Villa</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -36.828611, lng: 175.790222},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/weston_hightpointe_place.jpg" alt="Weston Hightpointe Place"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Weston Hightpointe Place</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -37.750000, lng: 145.116667},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/sunhouse_apartment_c21.jpg" alt="Sunhouse Apartment C21"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Sunhouse Apartment C21</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -37.759859, lng: 145.128708},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/weston_hightpointe_place.jpg" alt="Weston Hightpointe Place"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Weston Hightpointe Place</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -37.765015, lng: 145.133858},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/dream_house_take_away.jpg" alt="Dream House Take Away"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Dream House Take Away</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -37.770104, lng: 145.143299},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/castalia_shibakoen.jpg" alt="Castalia Shibakoen" class="listing__img"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Castalia Shibakoen</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -37.773700, lng: 145.145187},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/real_house_luxury_villa.jpg" alt="Real House Luxury Villa"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Real House Luxury Villa</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -37.774785, lng: 145.137978},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/dream_house_take_away.jpg" alt="Dream House Take Away"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">House Take Away</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -37.819616, lng: 144.968119},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/weston_hightpointe_place.jpg" alt="Weston Hightpointe Place"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Weston Hightpointe Place</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -38.330766, lng: 144.695692},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/sunhouse_apartment_c21.jpg" alt="Sunhouse Apartment C21"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Sunrise Apartment</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -39.927193, lng: 175.053218},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/real_house_luxury_villa.jpg" alt="Real House Luxury Villa"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Real House Luxury Villa</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -41.330162, lng: 174.865694},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/castalia_shibakoen.jpg" alt="Castalia Shibakoen"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Castalia Shibakoen</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
    {
      coords: {lat: -42.734358, lng: 147.439506},
      icon: 'images/map_marker.png',
      content:  '<div class="listing-box__container">' +
                  '<div class="listing__img">' +
                    '<a href="#"><img src="images/uploads/real_house_luxury_villa.jpg" alt="Real House Luxury Villa"></a>' + 
                    '<span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>' +
                    '<span class="listing__close">&times;</span>' +
                  '</div>' +
                  '<div class="listing__content">' +
                    '<h3 class="listing__title"><a href="#">Real House Luxury Villa</a></h3>' +
                    '<p class="listing__price">$2,285,500</p>' +
                  '</div>' +
                '</div>'
    },
  ];

  var markers = [];
  var infobox = new InfoBox({
    content: '',
    disableAutoPan: false,
    maxWidth: 220,
    pixelOffset: new google.maps.Size(-110, -300),
    zIndex: null,
    boxClass: 'listing-box',
    boxStyle: {
      "background-color": "#ffffff",
      "box-shadow": "0px 0px 7px 0px rgba(0, 0, 0, 0.2)",
      "width": "220px",
    },
    closeBoxURL: "",
    infoBoxClearance: new google.maps.Size(1, 1),
    isHidden: false,
    pane: "floatPane",
    enableEventPropagation: false
  });


  for (var i = 0; i < markerList.length; i++) {
    var position = markerList[i].coords;
    bounds.extend(position);
    var marker = new google.maps.Marker({
      map: map,
      position: position,
      icon: markerList[i].icon,
    });

    google.maps.event.addListener(marker, 'click', (function (marker, i) {
      return function() {
        
        var content = markerList[i].content;
        if (infobox) {
          infobox.close();
        }
        infobox.setContent(content);
        infobox.open(map, marker);
        map.panTo(marker.getPosition());
      }
    })(marker, i));

    map.fitBounds(bounds);
    markers.push(marker);
  }

  google.maps.event.addListener(map, 'click', function() {
    infobox.close();
  });

  var clusterStyles = [
    {
      textColor: 'white',
      textSize: 14,
      url: 'images/icon_mc.png',
      width: 60,
      height: 60,
      backgroundPosition: 'center'
    }
  ];

  var mcOptions = {
    styles: clusterStyles,
    maxZoom: 15,
  };

  var markerCluster = new MarkerClusterer(map, markers, mcOptions);

  var markerIndex = -1;

  $(".map-controls").on('click', function ( event ) {
    var $element = $( event.target.parentNode );

    if ( $element.hasClass('map-reset') ) {

      map.fitBounds(bounds);
      markerIndex = -1;
      if (infobox) {
        infobox.close();
      }

    } else if ( $element.hasClass('map-expand') ) {

      $(this).find("i").toggleClass("ion-arrow-expand ion-arrow-shrink");
      $(".map-container").toggleClass("map-full-width");
      google.maps.event.trigger(map, 'resize');
      map.fitBounds(bounds);

    } else if ( $element.hasClass('map-next') ) {

      markerIndex++;
      if (markerIndex === markers.length) {
        markerIndex = 0;
      }
      var content = markerList[markerIndex].content;
      if (infobox) {
        infobox.close();
      }
      infobox.setContent(content);
      infobox.open(map, markers[markerIndex]);
      map.setZoom(15);
      map.panTo(markers[markerIndex].getPosition());

    } else if ( $element.hasClass('map-prev') ) {

      markerIndex--;
      if (markerIndex < 0) {
        markerIndex = (markers.length - 1);
      }
      var content = markerList[markerIndex].content;
      if (infobox) {
        infobox.close();
      }
      infobox.setContent(content);
      infobox.open(map, markers[markerIndex]);
      map.setZoom(15);
      map.panTo(markers[markerIndex].getPosition());
    }

  });

  google.maps.event.addListener(infobox, 'domready', function() {
    var closeBtn = $(".listing__close").get();

    google.maps.event.addDomListener(closeBtn[0], 'click', function () {
      infobox.close();
    });
  });
}

function initMap2() {
  var latlng = new google.maps.LatLng(37.7357811,-122.390046);
  var options2 = {
    zoom: 15,
    center: latlng,
    disableDefaultUI: true,
    zoomControl: true,
    zoomControlOptions: {
      position: google.maps.ControlPosition.LEFT_BOTTOM,
    },
    styles: [
      {
        "featureType": "landscape",
        "stylers": [
          {
              "hue": "#FFBB00"
          },
          {
              "saturation": 43.400000000000006
          },
          {
              "lightness": 37.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.highway",
        "stylers": [
          {
              "hue": "#FFC200"
          },
          {
              "saturation": -61.8
          },
          {
              "lightness": 45.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 51.19999999999999
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.local",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 52
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "water",
        "stylers": [
          {
              "hue": "#0078FF"
          },
          {
              "saturation": -13.200000000000003
          },
          {
              "lightness": 2.4000000000000057
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "poi",
        "stylers": [
          {
              "hue": "#00FF6A"
          },
          {
              "saturation": -1.0989010989011234
          },
          {
              "lightness": 11.200000000000017
          },
          {
              "gamma": 1
          }
        ]
      }
    ]
  };

  var map2 = new google.maps.Map(document.getElementById("property-map"), options2);
  var marker = new google.maps.Marker({
    map: map2,
    position: latlng,
    icon: 'images/map_marker.png'
  });

  $(".property__control").on('click', function (event) {
    $(".property__control").removeClass("property__control--active");
    $(this).addClass('property__control--active');

    var $currentControl = $(event.target.parentNode);
    
    if ( $currentControl.hasClass('property__control-streetview') ) {

      $(".property__map").addClass('property__map--visible');
      map2.getStreetView().setOptions({
        visible: true, 
        position: latlng,
        linksControl: false,
        panControl: false,
        enableCloseButton: false,
        addressControl: false,
        fullscreenControl: false
      });

    } else if ( $currentControl.hasClass('property__control-map') ) {

      $(".property__map").addClass('property__map--visible');
      map2.getStreetView().setVisible(false);
      
    } else if ( $currentControl.hasClass('property__control-gallery') ) {

      openPhotoSwipe();

    }
  });
}

// PhotoSwipe
var openPhotoSwipe = function () {

  var pswpElement = document.querySelectorAll('.pswp')[0];
  var items = [
    {
      src: 'images/uploads/property_slider_1.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_2.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_3.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_4.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_5.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_6.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_7.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_8.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_9.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_10.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_11.jpeg',
      w: 1280,
      h: 650
    },
    {
      src: 'images/uploads/property_slider_12.jpeg',
      w: 1280,
      h: 650
    },
  ];
  
  var options = {
    index: 0
  };

  var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options );
  gallery.init();
  gallery.listen('close', function() {
    $(".property__control").removeClass("property__control--active");
  });
};

function initMap3 () {
  var latlng = new google.maps.LatLng(37.7357811,-122.390046);
  var options3 = {
    zoom: 15,
    center: latlng,
    disableDefaultUI: true,
    zoomControl: true,
    zoomControlOptions: {
      position: google.maps.ControlPosition.LEFT_BOTTOM,
    },
    styles: [
      {
        "featureType": "landscape",
        "stylers": [
          {
              "hue": "#FFBB00"
          },
          {
              "saturation": 43.400000000000006
          },
          {
              "lightness": 37.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.highway",
        "stylers": [
          {
              "hue": "#FFC200"
          },
          {
              "saturation": -61.8
          },
          {
              "lightness": 45.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 51.19999999999999
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.local",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 52
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "water",
        "stylers": [
          {
              "hue": "#0078FF"
          },
          {
              "saturation": -13.200000000000003
          },
          {
              "lightness": 2.4000000000000057
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "poi",
        "stylers": [
          {
              "hue": "#00FF6A"
          },
          {
              "saturation": -1.0989010989011234
          },
          {
              "lightness": 11.200000000000017
          },
          {
              "gamma": 1
          }
        ]
      }
    ]
  };
  var map3 = new google.maps.Map(document.getElementById("contact-map"), options3);
  var marker = new google.maps.Marker({
    map: map3,
    position: latlng,
    icon: 'images/map_marker.png'
  });
}

function initMap4 () {
  var latlng = new google.maps.LatLng(37.7357811,-122.390046);
  var options4 = {
    zoom: 15,
    center: latlng,
    disableDefaultUI: true,
    zoomControl: true,
    zoomControlOptions: {
      position: google.maps.ControlPosition.LEFT_BOTTOM,
    },
    styles: [
      {
        "featureType": "landscape",
        "stylers": [
          {
              "hue": "#FFBB00"
          },
          {
              "saturation": 43.400000000000006
          },
          {
              "lightness": 37.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.highway",
        "stylers": [
          {
              "hue": "#FFC200"
          },
          {
              "saturation": -61.8
          },
          {
              "lightness": 45.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 51.19999999999999
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.local",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 52
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "water",
        "stylers": [
          {
              "hue": "#0078FF"
          },
          {
              "saturation": -13.200000000000003
          },
          {
              "lightness": 2.4000000000000057
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "poi",
        "stylers": [
          {
              "hue": "#00FF6A"
          },
          {
              "saturation": -1.0989010989011234
          },
          {
              "lightness": 11.200000000000017
          },
          {
              "gamma": 1
          }
        ]
      }
    ]
  };
  var map4 = new google.maps.Map(document.getElementById("submit-property-map"), options4);
  var marker = new google.maps.Marker({
    map: map4,
    position: latlng,
    icon: 'images/map_marker.png'
  });
}

if ($("#map").length > 0) {
  google.maps.event.addDomListener( window, 'load', initMap );
}

if ($("#property-map").length > 0) {
  google.maps.event.addDomListener( window, 'load', initMap2 );
}

if ($("#contact-map").length > 0) {
  google.maps.event.addDomListener( window, 'load', initMap3 );
}

if ($("#submit-property-map").length > 0) {
  google.maps.event.addDomListener( window, 'load', initMap4 );
}

// Page Transition
;(function(){ 
  var startTime = new Date(),
      minTime = 200,
      elapsedTime;

  $('html').addClass('hidescrollbar');    

  window.addEventListener('load', function() { // when page loads
      elapsedTime = new Date() - startTime; // get time elapsed once page has loaded
      var hidePageTime = (elapsedTime > minTime)? 0 : minTime - elapsedTime;
        
      setTimeout(function(){
        $('#page-loader').addClass('dimissloader'); // dismiss transition
      }, hidePageTime);
        
      setTimeout(function(){
        $('html').removeClass('hidescrollbar');
      }, hidePageTime + 100); // 100 is the duration of the fade out effect
      
    }, false);
})();



  function genericSocialShare(url){
    window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
    return true;
}


/* flag starts*/

var mobile = document.querySelector("#mobile");
window.intlTelInput(mobile, {
   allowDropdown: true,
  // autoHideDialCode: false,
     autoPlaceholder: "on",
  // dropdownContainer: document.body,
  // excludeCountries: ["us"],
  // formatOnDisplay: false,
  // geoIpLookup: function(callback) {
  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
  //     var countryCode = (resp && resp.country) ? resp.country : "";
  //     callback(countryCode);
  //   });
  // },
  // hiddenInput: "full_number",
   initialCountry: "ae",
  // localizedCountries: { 'de': 'Deutschland' },
  // nationalMode: false,
  // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
  // placeholderNumberType: "MOBILE",
  // preferredCountries: ['cn', 'jp'],
   separateDialCode: true,
  utilsScript: "assist/js/utils.js",
});



/*flag ends*/

/* flag starts*/

var mobile = document.querySelector("#mobile_popup");
window.intlTelInput(mobile, {
   allowDropdown: true,
  // autoHideDialCode: false,
     autoPlaceholder: "on",
  // dropdownContainer: document.body,
  // excludeCountries: ["us"],
  // formatOnDisplay: false,
  // geoIpLookup: function(callback) {
  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
  //     var countryCode = (resp && resp.country) ? resp.country : "";
  //     callback(countryCode);
  //   });
  // },
  // hiddenInput: "full_number",
   initialCountry: "ae",
  // localizedCountries: { 'de': 'Deutschland' },
  // nationalMode: false,
  // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
  // placeholderNumberType: "MOBILE",
  // preferredCountries: ['cn', 'jp'],
   separateDialCode: true,
  utilsScript: "assist/js/utils.js",
});



/*flag ends*/


/*download brochure validation starts*/


$('#download-brochure-frm').validate({


rules:
{
  name:
  {
    required:true
  },
  email:
  {
    required:true,
    email:true
  },
  mobile:
  {
    required:true,
    number:true
  }
},
messages:
{
  name:
  {
    required:'Name is required'
  },
  email:
  {
    required:'Email ID is required',
    email:'Enter a valid Email ID'
  },
  mobile:
  {
    required:'Mobile Number is required',
    number:'Mobile Number must be a numeric value'
  }
},
submitHandler:function(form)
{
  var mobile_number_hidden=$('#contact-frm .iti__selected-dial-code').text();
  $('input[name="mobile_number_hidden"]').val(mobile_number_hidden);
 var brochure_url=$('input[name="brochure_url"]').val();

  $.ajax({

    url:base_url+'property/sale_property_download_brochure',
    data:$('#download-brochure-frm').serializeArray(),
    type:'POST',
    dataType:'json',
    beforeSend:function()
    {
      $('input[name="download_brochure_submit"]').val('Wait...');
      $('input[name="download_brochure_submit"]').prop('disabled',true);
    },
    success:function(r)
    {
      if(r.status=='success')
      {
          $.ajax({
          url: ''+base_url+'admin_HCSrRaVt58Ezffv/uploads/'+brochure_url+'',
          method: 'GET',
          xhrFields: {
          responseType: 'blob'
          },
          success: function (data) {
          var a = document.createElement('a');
          var url = window.URL.createObjectURL(data);
          a.href = url;
          a.download = brochure_url;
          document.body.append(a);
          a.click();
          a.remove();
          window.URL.revokeObjectURL(url);
          }
          });
$('#over').modal('hide');
/* $('.sale_brochure_msg').text(r.msg);*/
$('input[name="download_brochure_submit"]').val('Send Message');
$('input[name="download_brochure_submit"]').prop('disabled',false); 
$("#download-brochure-frm")[0].reset();
$('#download-brochure-frm input').intlTelInput('setCountry', 'myDefaultCountry');
      }
      else
      {
          $('.sale_brochure_msg').text(r.msg);
          $('input[name="download_brochure_submit"]').val('Send Message');
          $('input[name="download_brochure_submit"]').prop('disabled',false);
          $('#download-brochure-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
          $("#download-brochure-frm")[0].reset();

      }

    }
  });
}


})


/*download brochure validation ends*/


/*Contact us validation starts*/

$('#contact-frm').validate({
rules:
{
  name:
  {
    required:true
  },
  email:
  {
    required:true,
    email:true
  },
  mobile:
  {
    required:true,
    number:true
  },
  comment:
  {
    required:true
  }

},
messages:
{
  name:
  {
    required:'Name is required'
  },
  email:
  {
    required:'Email ID is required',
    email:'Enter a valid Email ID'
  },
  mobile:
  {
    required:'Mobile Number is required',
    number:'Mobile Number must be a numeric value'
  },
  comment:
  {
    required:'Comment is required'
  }
},
submitHandler:function(form)
{


  var mobile_number_hidden=$('#contact-frm .iti__selected-dial-code').text();
  $('input[name="mobile_number_hidden"]').val(mobile_number_hidden);


  $.ajax({

    url:base_url+'contact-us/contact_form',
    data:$('#contact-frm').serializeArray(),
    type:'POST',
    dataType:'json',
    beforeSend:function()
    {
      $('input[name="contact_submit"]').val('Wait...');
      $('input[name="contact_submit"]').prop('disabled',true);
    },
    success:function(r)
    {
      if(r.status=='success')
      {
          $('.contact_msg').text(r.msg);
          $('input[name="contact_submit"]').val('Send Message');
          $('input[name="contact_submit"]').prop('disabled',false); 
          $("#contact-frm")[0].reset();
          $('#contact-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
      }
      else
      {
          $('.contact_msg').text(r.msg);
          $('input[name="contact_submit"]').val('Send Message');
          $('input[name="contact_submit"]').prop('disabled',false);
          $('#contact-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
          $("#contact-frm")[0].reset();

      }

    }
  });
  


}



});

/*Contact us validation ends*/




/*About us form validation starts*/


$('#about-frm').validate({
rules:
{
  name:
  {
    required:true
  },
  email:
  {
    required:true,
    email:true
  },
  mobile:
  {
    required:true,
    number:true
  },
  comment:
  {
    required:true
  }

},
messages:
{
  name:
  {
    required:'Name is required'
  },
  email:
  {
    required:'Email ID is required',
    email:'Enter a valid Email ID'
  },
  mobile:
  {
    required:'Mobile Number is required',
    number:'Mobile Number must be a numeric value'
  },
  comment:
  {
    required:'Comment is required'
  }
},
submitHandler:function(form)
{

  var mobile_hidden=$('#about-frm .iti__selected-dial-code').text();
  $('input[name="mobile_hidden"]').val(mobile_hidden);
  

  $.ajax({

    url:base_url+'about-us/contact_form',
    data:$('#about-frm').serializeArray(),
    type:'POST',
    dataType:'json',
    beforeSend:function()
    {
      $('input[name="about_submit"]').val('Wait...');
      $('input[name="about_submit"]').prop('disabled',true);
    },
    success:function(r)
    {
      if(r.status=='success')
      {
        $('.success_msg').text(r.msg);
        $('input[name="about_submit"]').val('Send Message');
        $('input[name="about_submit"]').prop('disabled',false); 
         $("#about-frm")[0].reset();
         $('#about-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
      }
      else
      {
        $('.success_msg').text(r.msg);
        $('input[name="about_submit"]').val('Send Message');
        $('input[name="about_submit"]').prop('disabled',false);
         $('#about-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
          $("#about-frm")[0].reset();

      }

    }
  });

}



});




/*About us form validation ends*/



/*Virtual Tour form validation starts*/


$('#virtual-tour-frm').validate({


rules:
{
   name:
   {
    required:true
   },
   email:
   {
    required:true,
    email:true
   },
   mobile:
   {
    required:true,
    number:true
   },
   comment:
   {
    required:true
   }
},
messages:
{
  name:
  {
    required:'Name is required'
  },
  email:
  {
    required:'Email ID is required',
    email:'Enter a valid Email ID'
  },
  mobile:
  {
    required:'Mobil Number is required',
    number:'Mobile Number must be a numeric value'
  },
  comment:
  {
    required:'Comment is required'
  }
},
submitHandler:function()
{
  var virtual_tour_hidden=$('#virtual-tour-frm .iti__selected-dial-code').text();
  $('input[name="virtual_tour_hidden"]').val(virtual_tour_hidden);
  

  $.ajax({

    url:base_url+'virtual-tour/contact_form',
    data:$('#virtual-tour-frm').serializeArray(),
    type:'POST',
    dataType:'json',
    beforeSend:function()
    {
      $('input[name="vt_submit"]').val('Wait...');
      $('input[name="vt_submit"]').prop('disabled',true);
    },
    success:function(r)
    {
      if(r.status=='success')
      {
        $('.vt_msg').text(r.msg);
        $('input[name="vt_submit"]').val('Send Message');
        $('input[name="vt_submit"]').prop('disabled',false); 
         $("#virtual-tour-frm")[0].reset();
         $('#virtual-tour-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
      }
      else
      {
        $('.vt_msg').text(r.msg);
        $('input[name="vt_submit"]').val('Send Message');
        $('input[name="vt_submit"]').prop('disabled',false);
         $('#virtual-tour-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
          $("#virtual-tour-frm")[0].reset();

      }

    }
  });
}



});


/*Virtual Tour form validation ends*/






/*Community form validation starts*/


$('#community-frm').validate({


rules:
{
   name:
   {
    required:true
   },
   email:
   {
    required:true,
    email:true
   },
   mobile:
   {
    required:true,
    number:true
   },
   comment:
   {
    required:true
   }
},
messages:
{
  name:
  {
    required:'Name is required'
  },
  email:
  {
    required:'Email ID is required',
    email:'Enter a valid Email ID'
  },
  mobile:
  {
    required:'Mobil Number is required',
    number:'Mobile Number must be a numeric value'
  },
  comment:
  {
    required:'Comment is required'
  }
},
submitHandler:function()
{
      var community_hidden=$('#community-frm .iti__selected-dial-code').text();
  $('input[name="community_hidden"]').val(community_hidden);
  

  $.ajax({

    url:base_url+'community/contact_form',
    data:$('#community-frm').serializeArray(),
    type:'POST',
    dataType:'json',
    beforeSend:function()
    {
      $('input[name="comm_submit"]').val('Wait...');
      $('input[name="comm_submit"]').prop('disabled',true);
    },
    success:function(r)
    {
      if(r.status=='success')
      {
        $('.comm_msg').text(r.msg);
        $('input[name="comm_submit"]').val('Send Message');
        $('input[name="comm_submit"]').prop('disabled',false); 
         $("#community-frm")[0].reset();
         $('#community-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
      }
      else
      {
        $('.comm_msg').text(r.msg);
        $('input[name="comm_submit"]').val('Send Message');
        $('input[name="comm_submit"]').prop('disabled',false);
         $('#community-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
          $("#community-frm")[0].reset();

      }

    }
  });
}



});


/*Community form validation ends*/



/*Comunity search starts*/

$('input[name="comm_search"]').on('keyup',function(e){

var $t=$(this);
var comm_search=$t.val();

$.ajax({

url:base_url+'community/community_search/community_search',
data:{comm_search:comm_search},
type:'POST',
dataType:'json',
beforeSend:function(r)
{
     $('.comm_sec').html('');
},
success:function(r)
{
  $('.comm_sec').html(r.msg);
  history.replaceState('','',''+base_url+'community');
}


});



});


/*Community search ends*/






/*Agent form validation starts*/


$('#agent-frm').validate({


rules:
{
   name:
   {
      required:true
   },
   email:
   {
      required:true,
      email:true
   },
   mobile:
   {
      required:true,
      number:true
   },
   message:
   {
      required:true
   }
},
messages:
{

  name:
  {
    required:'Name is required'
  },
  email:
  {
    required:'Email ID is required',
    email:'Enter a valid Email ID'
  },
  mobile:
  {
    required:'Mobile Number is required',
    number:'Mobile Number must be a numeric value'
  },
  message:
  {
    required:'Message is required'
  }

},
submitHandler:function(form)
{
  var community_hidden=$('#agent-frm .iti__selected-dial-code').text();
  $('input[name="mobile_number_hidden"]').val(community_hidden);
  

  $.ajax({

    url:base_url+'agent/contact_form',
    data:$('#agent-frm').serializeArray(),
    type:'POST',
    dataType:'json',
    beforeSend:function()
    {
      $('input[name="agent_submit"]').val('Wait...');
      $('input[name="agent_submit"]').prop('disabled',true);
    },
    success:function(r)
    {
      if(r.status=='success')
      {
        $('.agent_msg').text(r.msg);
        $('input[name="agent_submit"]').val('Send Message');
        $('input[name="agent_submit"]').prop('disabled',false); 
        $("#agent-frm")[0].reset();
        $('#agent-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
      }
      else
      {
        $('.agent_msg').text(r.msg);
        $('input[name="agent_submit"]').val('Send Message');
        $('input[name="agent_submit"]').prop('disabled',false);
        $('#agent-frm input').intlTelInput('setCountry', 'myDefaultCountry' );
        $("#agent-frm")[0].reset();

      }

    }
  });
  
}


});

/*Agent form validation ends*/


/*Homepage property sort starts*/

$(document).on('change','select[name="sort_home"]',function(e){

  e.preventDefault();

  var $t=$(this);
  var sort=$t.val();

  

  $.ajax({
   
   url:base_url+'property/home_filter',
   data:{sort:sort},
   type:'POST',
   dataType:'json',
   beforeSend:function()
   {
       $('.item-grid').html('');
   },
   success:function(r)
   {
     $('.item-grid').hide().html(r.msg).fadeIn('slow');

   }


  });


});


/*Homepage property sort ends*/


/*sale property sort starts*/



$(document).on('change','select[name="sale_prop_sort"]',function(e){

  e.preventDefault();

  var $t=$(this);
  var sort=$t.val();

  

  $.ajax({
   
   url:base_url+'property/sale_filter',
   data:{sort:sort},
   type:'POST',
   dataType:'json',
   beforeSend:function()
   {
       $('.item-grid').html('');
   },
   success:function(r)
   {
     $('.item-grid').hide().html(r.msg).fadeIn('slow');

   }


  });


});

/*sale property sort ends*/


/*rent property sort starts*/



$(document).on('change','select[name="rent_prop_sort"]',function(e){

  e.preventDefault();

  var $t=$(this);
  var sort=$t.val();

  

  $.ajax({
   
   url:base_url+'property/rent_filter',
   data:{sort:sort},
   type:'POST',
   dataType:'json',
   beforeSend:function()
   {
       $('.item-grid').html('');
   },
   success:function(r)
   {
     $('.item-grid').hide().html(r.msg).fadeIn('slow');

   }


  });


});

/*rent property sort ends*/


/*offplan property sort starts*/



$(document).on('change','select[name="offplan_prop_sort"]',function(e){

  e.preventDefault();

  var $t=$(this);
  var sort=$t.val();

  

  $.ajax({
   
   url:base_url+'property/offplan_filter',
   data:{sort:sort},
   type:'POST',
   dataType:'json',
   beforeSend:function()
   {
       $('.item-grid').html('');
   },
   success:function(r)
   {
     $('.item-grid').hide().html(r.msg).fadeIn('slow');

   }


  });


});

/*offplan property sort ends*/

