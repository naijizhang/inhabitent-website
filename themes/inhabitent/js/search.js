jQuery(document).ready(function( $ ) {
    $('header .search-field').attr("placeholder", "TYPE AND HIT ENTER...");
    $('header .search-field').css("width","0");
    $('header .search-submit').hide();

    let $count=1;
    $('header .search-button').click(()=>{

           if($count++%2==0){
            $('.search-field').animate({
                width: '0px',
                left: 0,
                opacity: 0,
              
            }, {
                duration: 400,
                queue: false
            });
            
           }  else{
            $('header .search-field').attr("placeholder", "TYPE AND HIT ENTER...");
            $('header .search-field').animate({
                width: '250px',
                left: 0,
                opacity: 1,
            }, {
                duration: 400,
                queue: false
            });
            $('header .search-field').focus();
           }
           
           
           $( "body" ).mousedown(function() {
            if($('header .search-field').val()===""){
                $('header .search-field').animate({
                    width: '0px',
                    left: 0,
                    opacity: 0,
                  
                }, {
                    duration: 400,
                    queue: false
                });
                $count=1;
            }
          });
                
      });
	
});
