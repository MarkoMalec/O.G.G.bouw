$( '.js-input' ).keyup(function() {
    if( $(this).val() ) {
       $(this).addClass('not-empty');
    } else {
       $(this).removeClass('not-empty');
    }
  });


   
    function init() {
       document.querySelectorAll('input-text').value = "";
      //  for(let i = 0; i < elements.length; i++) {
      //    elements[i].value = "";
      // }
    }
    window.onload = init;

 