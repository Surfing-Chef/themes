// DEFINE VARIABLES FOR STYLE ADJUSTMENTS
var brandingHeight;
var navHeight;
var topMargin;

// AFTER LOADING THE PAGE...
$(function(){
  // ADJUST CONTENT TOP MARGIN
  // because the header is out of document flow (position: fixed)

  // calculate variables - heights of fixed containers
  brandingHeight = $(".branding-wrapper").height();
  navHeight = $("#site-navigation").height();

  // set content margin based on whether a video was loaded
  if($('.youtube-video iframe').height()){
    topMargin = $( window ).height();
    $(".site-content").css("margin-top", topMargin);
  } else {
    topMargin = brandingHeight + navHeight;
    $(".site-content").css("margin-top", topMargin);
  }


  // :: definition 1.0 ::
  // adjust header height and colour based on scroll
  //$( window ).scroll(adjustHeader);

  // :: definition 1.1 ::
  // modify z-index for all pages except front-page
  checkIfFrontPage();

  // :: definition 1.2 ::
  // adjust content top margin if slick nav in effect
  adjustForSlickNav();
});

$( window ).scroll(function() {
  // :: definition 1.0 ::
  adjustHeader();
});

// :: FUNCTIONS
// definition 1.0 ::
// adjust header attributes based on scroll
function adjustHeader(){
  var yTop = $( window ).scrollTop();

  if (yTop === 0){
    //sets backgrounds default
    $(".branding-wrapper").css("background", "rgba(139, 145, 152, 0.4)");
    $(".site-header-inner > nav").css("background", "rgba(139, 145, 152, 0.4)");
  } else if (yTop > 0 && yTop < brandingHeight)  {
    // changes header based on scroll position
    var scrolled = (0.4 + 0.6 * yTop / brandingHeight);
    $(".site-header-inner").css("margin-top", 0 - yTop);
    $(".branding-wrapper").css("background", "rgba(139, 145, 152, " + scrolled + ")");
    $(".site-header-inner > nav").css("background", "rgba(139, 145, 152, " + scrolled + ")");
  } else{
    //code
  }
}

// definition 1.1 ::
function checkIfFrontPage(){
 if(!$('.youtube-video iframe').height()){
    $("#masthead").css({ "position" : "relative", "z-index" : "2" });
  }
}

// definition 1.2 ::
function adjustForSlickNav(){
  if($( window ).width < 1025){
    console.log("slick Nav");
  }
}
