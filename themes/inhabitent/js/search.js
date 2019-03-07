jQuery(document).ready(function($) {
  $('header .search-field').attr('placeholder', 'TYPE AND HIT ENTER...');
  $('header .search-field').hide();
  //alert(directory_uri.stylesheet_directory_uri); 
  //click--- show, click again ---hide
  $('header .search-submit').toggle(
    function() {
      $('header .search-field').show('slow');
      $('header .search-field').focus();
    },
    function() {
      $('header .search-field').hide('slow');
    }
  );

  $(document).on('keypress', function(event) {
    //if press enter, search
    if (event.which === 13 && $('header .search-field').val() !== '') {
      $('.search-form').submit();
    }
  });
  //if the search field is empty click other place and hide the search field
  $('header .search-field').on('blur', function() {
    if ($('header .search-field').val() === '') {
      $('header .search-field').hide(500);
    }
  });
  //On home page, listen to scroll action, change the header position
  if (jQuery('body').hasClass('home')) {
    $(window).scroll(function() {
      //if passed the banner
      if (this.scrollY > 689) {
        //if logged in
        if (jQuery('body').hasClass('logged-in')) {
          $('.container').css({
            position: 'fixed',
            top: '30px',
            background: 'rgba(255,255,255,0.8)',
            'border-bottom': '1px solid rgb(214, 214, 214)',
          });
        
          $('.container').addClass('green');
          $('.site-logo').attr("src",directory_uri.stylesheet_directory_uri+ '/assets/images/logos/inhabitent-logo-tent.svg');
        
        } else {
          //not logged in
          $('.container').css({
            position: 'fixed',
            top: '0px',
            background: 'rgba(255,255,255,0.8)',
            'border-bottom': '1px solid rgb(214, 214, 214)',
          });
          $('.container').addClass('green');
          $('.site-logo').attr("src",directory_uri.stylesheet_directory_uri+ '/assets/images/logos/inhabitent-logo-tent.svg');
        
        }
        //not pass the banner
      } else {
        //not scroll over the banner
        $('.container').css({
          position: 'absolute',
          top: '0px',
          background: 'transparent',
          'border-bottom': 'none',
        });
        $('.container').removeClass('green');
        $('.site-logo').attr("src",directory_uri.stylesheet_directory_uri+ '/assets/images/logos/inhabitent-logo-tent-white.svg');
      }
    });
  }

  if (!jQuery('body').hasClass('home')&&!jQuery('body').hasClass('single-adventure')&&!jQuery('body').hasClass('page-template-about')) {
    $('.container').addClass('green');
    if(jQuery('body').hasClass('logged-in')){
    $('.container').addClass('fixed-header-logged');
   }else{
    $('.container').addClass('fixed-header-unlog');
   }
 
     
  }
});
