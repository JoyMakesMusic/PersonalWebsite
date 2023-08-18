// All JQuery Code
$(document).ready(// Highlights the page the user is on in the navbar
function(){ $("[href]").each(function() { if (this.href == window.location.href) { $(this).addClass("current"); } }); },// Enable tooltips for attributions info
$(function () { $("body").tooltip({ selector: '[data-toggle=tooltip]' }); }),// Event listeners for enabling submit button
    $(function() {
        var inputs = document.getElementsByClassName('form-control');

        for(var i = 0; i < inputs.length; i++) {
            (inputs.item(i)).addEventListener("keyup", toggleSubmit);
        }
        
    }),
// Popup nav menu for mobile devices
$('#link-wrapper').on('click', function() { $('#mobile-links').toggle();if ($('#mobile-links').css('display') === 'none' ) { $('#link-wrapper').css('background-color', 'transparent'); $('#link-wrapper').css({ 'border-left': 'none', 'border-bottom': 'none'}); } else { $('#link-wrapper').css('background-color', 'white'); $('#link-wrapper').css({ 'border-left': '1px solid lightgray', 'border-bottom': '1px solid lightgray'}); } }) );

