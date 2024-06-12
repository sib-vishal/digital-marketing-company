// for word captcha start
var code;
function createCaptcha() {
  //clear the contents of captcha div first
  document.getElementById("captcha").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 120;
  canv.height = 35;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
$("#refresh_captcha").click(function () {
  createCaptcha();
});
function validateCaptcha(action) {
  //   debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
    $("#enquiryForm").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox").val("");
    return false;
  }
}

// for word captcha start
var code2;
function createCaptcha2() {
  //clear the contents of captcha div first
  document.getElementById("captcha2").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha2 = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha2.indexOf(charsArray[index]) == -1)
      captcha2.push(charsArray[index]);
    else i--;
  }
  var canv2 = document.createElement("canvas");
  canv2.id = "captcha2";
  canv2.width = 120;
  canv2.height = 35;
  var ctx2 = canv2.getContext("2d");
  ctx2.font = "25px Georgia";
  ctx2.strokeText(captcha2.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code2 = captcha2.join("");
  document.getElementById("captcha2").appendChild(canv2); // adds the canvas to the body element
}
$("#refresh_captcha2").click(function () {
  createCaptcha2();
});
function validateCaptcha2() {
  //   debugger
  if (document.getElementById("cpatchaTextBox2").value == code) {
    $("#enquiryForm2").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm2").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox2").val("");
    return false;
  }
}

$(function () {
  AOS.init();
  window.addEventListener("load", AOS.refresh);
  $(window).on("scroll", function () {
    $(function () {
      if ($(".stricky").length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
          $(".stricky").addClass("stricky-fixed");
          $(".scroll-to-top").fadeIn(1500);
        } else if ($(this).scrollTop() <= strickyScrollPos) {
          $(".stricky").removeClass("stricky-fixed");
          $(".scroll-to-top").fadeOut(1500);
        }
      }
    });
  });
});
$(function () {
  $(window).on("scroll", function () {
    var scrolled = $(window).scrollTop();
    if (scrolled > 80) $(".go-top").addClass("active");
    if (scrolled < 80) $(".go-top").removeClass("active");
  });
  $(function () {
    $(".go-top").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: "0",
        },
        500
      );
    });
  });
});
$(function () {
  $(".dropDown").click(function () {
    $(this).siblings("li").find("ul").slideUp();
    $(this)
      .siblings("li")
      .find("i")
      .removeClass("fa-chevron-up")
      .addClass("fa-chevron-down");
    $(this).find("ul").slideToggle();
    $(this).find("i").toggleClass("fa-chevron-up");
  });
});
$(".serviceSlider").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(".reviews").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(".clients").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});

// service carousel
$(".services-Carousel").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  // centerMode:,
  arrows: false,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 1,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});

// testimonials
$(".testimonials").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  // centerMode:,
  arrows: false,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 4,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});


$(function () {
  $(".leftCategory ul li").click(function () {
    $(".itemTab").hide();
    $(".leftCategory ul li").removeClass("active");
    $(this).addClass("active");
    var getText = $(this).attr("data-tab");
    var chngData = $(".tabContent").attr("data-content", getText);
    var newTab = $(".tabContent").attr("data-content");
    if (getText == newTab) {
      $("#" + newTab).show();
    }
  });
});
$(function () {
  $(".promotionBanner").hover(
    function () {
      const video = $(this).find("video").get(0);
      video.currentTime = 0; // Start from the beginning
      video.play();
    },
    function () {
      const video = $(this).find("video").get(0);
      video.pause();
      video.currentTime = 0; // Reset to the beginning
    }
  );
});

$(function () {
  $(".tabList ul li").click(function () {
    $(".itemTabs").hide();
    $(".tabList ul li").removeClass("active");
    $(this).addClass("active");
    var getText = $(this).attr("data-tab");
    var chngData = $(".tabContents").attr("data-content", getText);
    var newTab = $(".tabContents").attr("data-content");
    if (getText == newTab) {
      $("#" + newTab).show();
      $(".productSlider").slick("refresh");
    }
  });
  $(".inputAction").on("keypress", function () {
    $(".btnForm").addClass("active");
  });
  $(".inputAction").on("input", function () {
    if ($(this).val().length === 0) {
      $(".btnForm").removeClass("active");
    }
  });
  $(".loginForm").click(function (event) {
    event.stopPropagation();
    $(".popupForm").fadeIn();
  });

  $(".closePopup").click(function () {
    $(".popupForm").fadeOut();
  });

  $(".innerPopup").click(function (event) {
    event.stopPropagation();
  });

  $(document).click(function () {
    $(".popupForm").fadeOut();
  });
});

// case study js

$(document).ready(function () {
  $(".filter-button").click(function () {
    $(".filter-button").removeClass("active1");

    $(this).addClass("active1");

    var value = $(this).attr("data-filter");

    if (value == "all") {
      $(".filter").show("1000");
    } else {
      $(".filter")
        .not("." + value)
        .hide("3000");
      $(".filter")
        .filter("." + value)
        .show("3000");
    }
  });
});

// portfolio gallery

var imageURLs = [
  "images/portfolio/portfolio.jpg",
  "images/portfolio/portfolio.jpg",
  "images/portfolio/portfolio.jpg",
  "images/portfolio/portfolio.jpg",
];
var backgroundColors = [
  "image/portfolio/portfolio.jpg",
  "#00ff00",
  "#0000ff",
  "#ffff00",
];

var galleryProducts = document.querySelectorAll(".portfolio_images");
var gallery_product = document.querySelectorAll(".gallery_product");

gallery_product.forEach(function (element, index) {
  element.setAttribute("href", imageURLs[index % imageURLs.length]);
});
galleryProducts.forEach(function (element, index) {
  element.style.backgroundImage = `url(${imageURLs[index % imageURLs.length]})`;
});

$(document).ready(function () {
  $(".fancybox").fancybox();
});

$(function () {
  var a = 0;
  $(window).scroll(function () {
    if ($(".counter")[0]) {
      var oTop = $(".counter").offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter-value").each(function () {
          var $this = $(this),
            countTo = $this.attr("data-count");
          $({
            countNum: $this.text(),
          }).animate(
            {
              countNum: countTo,
            },
            {
              duration: 1000,
              easing: "swing",
              step: function () {
                $this.text(Math.floor(this.countNum) + "+");
              },
              complete: function () {
                $this.text(this.countNum + "+");
                //alert('finished');
              },
            }
          );
        });
        a = 1;
      }
    }
  });
});
