jQuery(document).ready(function( $ ) {
    $('.search-field').attr("placeholder", "TYPE AND HIT ENTER...");
    $('.search-field').css("width","0");
    $('.search-submit').hide();

    let $count=1;
    $('.search-button').click(()=>{

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
            $('.search-field').attr("placeholder", "TYPE AND HIT ENTER...");
            $('.search-field').animate({
                width: '250px',
                left: 0,
                opacity: 1,
            }, {
                duration: 400,
                queue: false
            });
            $('.search-field').focus();
           }
           
           
           $( "body" ).mousedown(function() {
            if($('.search-field').val()===""){
                $('.search-field').animate({
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
