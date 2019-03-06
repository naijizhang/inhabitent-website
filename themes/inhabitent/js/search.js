jQuery(document).ready(function($) {
  $('header .search-field').attr('placeholder', 'TYPE AND HIT ENTER...');
  $('header .search-field').hide();

  $('header .search-submit').on('click', function(event) {
    event.preventDefault();
    $('header .search-field').show('slow');
    $('header .search-field').focus();
  });
  $(document).on('keypress', function(event) {
    if ($('header .search-field').val() !== '') {
      $('.search-form').submit();
    }
  });
  $('header .search-field').on('blur', function() {
    $('header .search-field').hide(500);
  });
});
