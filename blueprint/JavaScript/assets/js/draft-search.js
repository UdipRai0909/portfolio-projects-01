$(function () {
 $('a[href="#navSearch"]').on('click', function (event) {
  event.preventDefault();
  $('#navSearch').addClass('open');
  $('#navSearch > form > input[type="search"]').focus();
 });

 $('#navSearch, #navSearch button.close').on('click keyup', function (event) {
  if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
   $(this).removeClass('open');
  }
 });


 //Do not include! This prevents the form from submitting for DEMO purposes only!
 $('form').submit(function (event) {
  event.preventDefault();
  return false;
 })
});