// Main JavaScript Document

var $ = jQuery; //negates Wordpress from going into noConflict() mode and allow for use of '$' instead of 'jQuery'

$(document).ready(function() {
  // collapse header if user is scrolled
  toggleScrolledClass();

    // Accordions
  $(".mod .page_item_has_children .children").hide();
  $(".page_item_has_children > a").each(function () {
      if ($(this).parent().hasClass("current_page_parent") || $(this).parent().hasClass("current_page_item")) {
        $(this).parent().addClass("expanded");
        $(this).next().show();
      }
  });


  $(".home .page_item_has_children").first().addClass("expanded");
  $(".home .page_item_has_children > a").first().next().show();
});

$(".page_item_has_children > a").on("click", function() {
	if($(this).parent().hasClass('expanded')) {
		$(this).next().slideUp("fast");
		$(this).parent().removeClass("expanded");
	} else {
		$(".page_item_has_children").each(function () {
			$(".children", this).slideUp("fast");
			$(this).removeClass("expanded");
		});
		$(this).next().slideDown("fast", function() {
			$(this).parent().addClass("expanded");
		});
	}
	return false;
});

$(window).scroll(function() {
  toggleScrolledClass();
});

function toggleScrolledClass() {
  var headerHeight = $('.header').outerHeight();
  if($(window).scrollTop() > headerHeight - 10) {
    $('body').addClass('scrolled');
  } else {
    $('body').removeClass('scrolled');
  }
}