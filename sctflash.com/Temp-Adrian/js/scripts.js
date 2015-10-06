$(function(){
$("#header").load("header.html"); 
$("#footer").load("footer.html");
$("#responsive-top-nav").load("responsive-top-nav.html");
});



// Smooth scroll /////////////////////////////////////////

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 750);
        return false;
      }
    }
  });
});


// Responsive Vehicle Filter ///////////////////////////////

$(function(){
	
	$("div.responsive-vehicle-filter-slidedown").on("click", function(){

		$("div.vehicle-filter-slidedown").addClass("active-vehicle-filter-slidedown");
				
		return false;

	});
	
	$("div.vehicle-filter-slidedown div.close").on("click", function(){

		$("div.vehicle-filter-slidedown").removeClass("active-vehicle-filter-slidedown");
				
		return false;

	});
		
});



//HOMEPAGE FEATURE SLIDER/////////////////////////////////

$(function(){

    $("a.feature-button-2").on("click", function(){

    $("section.feature-2").addClass("active");

    $("section.feature-1, section.feature-3").removeClass("active");

    return false;

    });
    
    $("a.feature-button-3").on("click", function(){

    $("section.feature-3").addClass("active");

    $("section.feature-1, section.feature-2").removeClass("active"); 

    return false;

    });
    
    $("a.feature-button-1").on("click", function(){

    $("section.feature-1").addClass("active");

    $("section.feature-2, section.feature-3").removeClass("active"); 

    return false;

    });

});


//HEADER SCROLL BORDER///////////////////////////////////////

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 3) {
    $('header#header').addClass('scroll-border');
  } else {
    $('header#header').removeClass('scroll-border');
  }
});



//FILTERED SCT PRODUCT SLIDER//////////////////////////////////

$(document).ready(function(){
  $('.bxslider').bxSlider({
  
      adaptiveHeight: 'true',
      touchEnabled: 'true',
      swipeThreshold: 1,
  
  });
    
});


//LEAVE A REVIEW MODAL//////////////////////////////////////

$(function(){
$('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});});



//LEAVE A REVIEW CHAR COUNT///////////////////////////////////

function countChar(val) {
var len = val.value.length;
if (len >= 500) {
  val.value = val.value.substring(0, 500);
} else {
  $('#charNum').text(500 - len);
}
};



//LEAVE A REVIEW MODAL//////////////////////////////////////////

$(function(){
	
	$("div.inactive-rating-star-1").on("click", function(){

		$("div.inactive-rating-star-1").addClass("active-rating-star");

	});
    
    $("div.inactive-rating-star-2").on("click", function(){

		$("div.inactive-rating-star-1,div.inactive-rating-star-2").addClass("active-rating-star");

	});
    
    $("div.inactive-rating-star-3").on("click", function(){

		$("div.inactive-rating-star-1,div.inactive-rating-star-2, div.inactive-rating-star-3").addClass("active-rating-star");

	});
    
    $("div.inactive-rating-star-4").on("click", function(){

		$("div.inactive-rating-star-1,div.inactive-rating-star-2, div.inactive-rating-star-3, div.inactive-rating-star-4").addClass("active-rating-star");

	});

    $("div.inactive-rating-star-5").on("click", function(){

		$("div.inactive-rating-star-1,div.inactive-rating-star-2, div.inactive-rating-star-3,div.inactive-rating-star-4, div.inactive-rating-star-5").addClass("active-rating-star");

	});
    
    $("div.inactive-rating-star-4").on("click", function(){

		$("div.inactive-rating-star-5").removeClass("active-rating-star");

	});
    
    $("div.inactive-rating-star-3").on("click", function(){

		$("div.inactive-rating-star-5, div.inactive-rating-star-4").removeClass("active-rating-star");

	});
    
    $("div.inactive-rating-star-2").on("click", function(){

		$("div.inactive-rating-star-5, div.inactive-rating-star-4, div.inactive-rating-star-3").removeClass("active-rating-star");

	});
    
    $("div.inactive-rating-star-1").on("click", function(){

		$("div.inactive-rating-star-5, div.inactive-rating-star-4, div.inactive-rating-star-3, div.inactive-rating-star-2").removeClass("active-rating-star");

	});
    
    $("div.inactive-rating-star-1").on("mouseover", function(){

		$("div.inactive-rating-star-1").addClass("hover-rating-star");

	});
    
    $("div.inactive-rating-star-2").on("mouseover", function(){

		$("div.inactive-rating-star-1, div.inactive-rating-star-2").addClass("hover-rating-star");

	});
    
    $("div.inactive-rating-star-3").on("mouseover", function(){

		$("div.inactive-rating-star-1, div.inactive-rating-star-2, div.inactive-rating-star-3").addClass("hover-rating-star");

	});
    
    $("div.inactive-rating-star-4").on("mouseover", function(){

		$("div.inactive-rating-star-1, div.inactive-rating-star-2, div.inactive-rating-star-3, div.inactive-rating-star-4").addClass("hover-rating-star");

	});
    
    $("div.inactive-rating-star-5").on("mouseover", function(){

		$("div.inactive-rating-star-1, div.inactive-rating-star-2, div.inactive-rating-star-3, div.inactive-rating-star-4, div.inactive-rating-star-5").addClass("hover-rating-star");

	});
    
    $("div.inactive-rating-star-1, div.inactive-rating-star-2, div.inactive-rating-star-3, div.inactive-rating-star-4, div.inactive-rating-star-5").on("mouseout", function(){

		$("div.inactive-rating-star-1, div.inactive-rating-star-2, div.inactive-rating-star-3, div.inactive-rating-star-4, div.inactive-rating-star-5").removeClass("hover-rating-star");

	});
		
});



//QUANTITY BUTTONS/////////////////////////////////////////////

$(function() {

  $(".quantity-select .button").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
       // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
        } else {
        newVal = 0;
      }
  }

  $button.parent().find("input").val(newVal);

});

});