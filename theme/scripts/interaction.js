// Main JavaScript Document

var $ = jQuery; //negates Wordpress from going into noConflict() mode and allow for use of '$' instead of 'jQuery'

$(document).ready(function() {
  // collapse header if user is scrolled
  toggleScrolledClass();
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