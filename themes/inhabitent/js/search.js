jQuery(document).ready(function($) {
  $('header .search-field').attr('placeholder', 'TYPE AND HIT ENTER...');
  $('header .search-field').hide();
//click--- show, click again ---hide
  $('header .search-submit').toggle(function(){
    $('header .search-field').show('slow');
    $('header .search-field').focus();
  }, function() {
    $('header .search-field').hide('slow');
  });
  

  $(document).on('keypress', function(event) {
//if press enter, search
    if ( event.which === 13 && $('header .search-field').val() !== '') {
      $('.search-form').submit();
    }
  });
  //if the search field is empty click other place and hide the search field
  $('header .search-field').on('blur', function() {
    if ($('header .search-field').val() === '') {
      $('header .search-field').hide(500);
    }
  });
});
