AOS.init();
var $window = $(window);

//slick-slider settings
$('.sect1-slick').slick(    {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    dotsClass: 'my-dots',
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    fade: true,
    cssEase: 'linear',
    pauseOnHover:false,
    customPaging: function (slider, i) {
        // var thumb = $(slider.$slides[i]).data();
        return '<a class="custom-dots">' + '0' + (i + 1) + '</a>';
    },
});
$('.sect1-slick .slider1 .slider-lines .front')
    .css('animation','categoryProgress 4500ms infinite linear both')
    .css('-webkit-animation','categoryProgress 4500ms infinite linear both');
// On edge hit
$('.sect1-slick').on('edge', function(event, slick, direction){
    console.log('edge was hit')
});
$('.sect4-slick').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    // variableWidth: true,
    dots: false,
    prevArrow: '<button type="button" class="my-slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="my-slick-next"><i class="fas fa-chevron-right"></i></button>',
    // infinite: true,
    // fade: true,
    // cssEase: 'linear',
    // pauseOnHover:false,
});
$('.sect4-slick-mobile').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    arrow: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 4000,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('.sect6-slick').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    prevArrow: '<button type="button" class="my-slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="my-slick-next"><i class="fas fa-chevron-right"></i></button>',
    // infinite: true,
    // fade: true,
    // cssEase: 'linear',
    // pauseOnHover:false,
    responsive: [
        {
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('.recommended-products').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    prevArrow: '<button type="button" class="my-slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="my-slick-next"><i class="fas fa-chevron-right"></i></button>',
    // infinite: true,
    // fade: true,
    // cssEase: 'linear',
    // pauseOnHover:false,
    responsive: [
        {
            breakpoint: 1281,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        },
        {
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('.sect8-slick').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    prevArrow: '<button type="button" class="my-slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="my-slick-next"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1281,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('.wok-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.wok-slider-nav'
});
$('.wok-slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.wok-slider-for',
    dots: false,
    prevArrow: '<button type="button" class="my-slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="my-slick-next"><i class="fas fa-chevron-right"></i></button>',
    // centerMode: true,
    focusOnSelect: true

});
$('.blog-article-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    prevArrow: '<button type="button" class="my-slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="my-slick-next"><i class="fas fa-chevron-right"></i></button>',
    // infinite: true,
    // fade: true,
    // cssEase: 'linear',
    // pauseOnHover:false,
    responsive: [
        {
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('.blog-article-slider-full').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    prevArrow: '<button type="button" class="my-slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="my-slick-next"><i class="fas fa-chevron-right"></i></button>',
    // infinite: true,
    // fade: true,
    // cssEase: 'linear',
    // pauseOnHover:false,
    /*responsive: [
        {
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]*/
});
$('.sect-blog-bottom-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
        {
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

//anchor fixed-catalogue
$(document).ready(function(){
    $(".fixed-catalogue").on("click","a", function (event) {
        event.preventDefault();

        var id  = $(this).attr('href'),
            top = $(id).offset().top - 100;

        $('body,html').animate({scrollTop: top}, 1000);
    });
});

// fixed menu
$(function(){
    var $nav = $('.fixed-header'),
        $h = $nav.offset().top;
    $window.scroll(function(){
        if ($window.scrollTop() > $h){
            $nav.addClass('fixed');
        } else {
            $nav.removeClass('fixed');
        }
    });
});



// appearance & hiding of header-top
(function($) {
    function sayHi() {
        $('.header-top').css({'display' : 'block'});
    }
    setTimeout(sayHi, 2000);

    $('.header-top .close').click(function () {
        $('.header-top').css({'display' : 'none'});
    });
})(jQuery);

// burger-menu appearance & hiding submenu
$(function(){
    $('.pushy li.parent-submenu').click(function(){
        $('li.parent-submenu ul.submenu').toggle('slow', function() {
            $(this).toggleClass('expanded');
        });
    });
});

// button back_to_top
$(document).ready(function() {
    var button = $('.back_to_top');
    $(window).scroll (function () {
        if ($(this).scrollTop () > 300) {
            button.fadeIn();
        } else {
            button.fadeOut();
        }
    });
    button.on('click', function(){
        $('body, html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});

// show/hide text on .sect8
$('.sect8').on('click', '.js-show', function () {
    $('.js-show-text').toggleClass('visible');
});

//validation settings
$(".modal-form").each(function() {
    $(this).validate({
        debug: true,
        success: "valid",
        invalidHandler: function(event, validator) {
            // 'this' refers to the form

            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = 'Error! Fill the requested fields' ;
                $(this).find("div.error span").html(message);
                $(this).find("div.error").show();
            } else {
                $(this).find("div.error").hide();
            }
        },
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });
});

// faq
$(document).ready(function(){
    $('.pane_header').click(function(){
        if ($(this).parent().children('div.subitem').is(':visible')){
            $('div.subitem').slideUp().siblings('normal');
            $('.pane_header').removeClass("active");
            $('.pane_header').parent().removeClass("active");
        }
        else {
            $('div.subitem').slideUp().siblings('normal');
            $('.pane_header').removeClass("active");
            $('.pane_header').parent().removeClass("active");
            $(this).toggleClass("active");
            $(this).parent().children('div.subitem').slideToggle().siblings('normal');
            $(this).parent().toggleClass("active");
        }
    });
});

$('a.item').on('click', 'p.button:not(.catalogue-button)' , function () {
    event.preventDefault();
});

$('.js-button-buy').on('click','', function () {
    let $this = $(this),
        $amazonButton = $('.js-buy-amazon'),
        $ebayButton = $('.js-buy-ebay'),
        dataAmazon = $this.attr('data-amazon'),
        dataEbay = $this.attr('data-ebay');

    $amazonButton.css('display', 'none');
    $ebayButton.css('display', 'none');

    if ($this.attr("data-amazon")) {
        console.log('has am')
        $amazonButton
            .attr('href', dataAmazon)
            .css('display', 'flex');
    }
    if($this.attr("data-ebay")){
        console.log('has e');
        $ebayButton
            .attr('href', dataEbay)
            .css('display', 'flex')
    }
});

$('.js-top_sales').append('<div class="fire"><i class="fas fa-fire"></i> top sales</div>');

$('.wpcf7-form-control-wrap.Message')
    .addClass('col-12')
    .find('textarea').attr('rows', '5');
$('.wpcf7-form-control-wrap.your-name')
    .addClass('col-6');
$('.wpcf7-form-control-wrap.E-mail')
    .addClass('col-6');

$('form .parent-col-6')
    .parent()
    .addClass('col-6');
$('form .parent-col-12')
    .parent()
    .addClass('col-12');

// $('.lang-item-en').find('a').html('<img src="http://logvin.website/yosukata-new/wp-content/themes/yosukata/img/usa.jpg" alt="">')
// $('.lang-item-de').find('a').html('<img src="http://logvin.website/yosukata-new/wp-content/themes/yosukata/img/ger.jpg" alt="">')
// $('.lang-item-fr').find('a').html('<img src="http://logvin.website/yosukata-new/wp-content/themes/yosukata/img/fr.jpg" alt="">')