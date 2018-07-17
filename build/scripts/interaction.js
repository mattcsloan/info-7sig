// Main JavaScript Document
var $ = jQuery; //negates Wordpress from going into noConflict() mode and allow for use of '$' instead of 'jQuery'

$(document).ready(function() {
  //set copyright year to current year
  $('.footer span.year').html(new Date().getFullYear());
});

