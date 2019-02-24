
//add toggle class()
// jQuery(document).ready(function( $ ) {
	
// 	// $ Works! You can test it with next line if you like
//     // console.log($);
//     let field, default_button,search_button;

//     field = document.getElementsByClassName('search-field');
//     if (!field[0]) {
//       return;
//     }
//     default_button = document.getElementsByClassName('search-submit')[0];
//     if (!default_button) {
//       return;
//     }
//     default_button = document.getElementsByClassName('search-submit')[0];
//     if (!default_button) {
//       return;
//     }
//   console.log(button);
  
//   button.setAttribute('style','display:none');
  
	
// });
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
                queue: true
            });
            
           }  else{
            $('.search-field').attr("placeholder", "TYPE AND HIT ENTER...");
            $('.search-field').animate({
                width: '200px',
                left: 0,
                opacity: 1,
            }, {
                duration: 400,
                queue: true
            });
            
           }
                
      });
	
});
