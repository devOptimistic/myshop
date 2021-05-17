$(document).ready(function () {
    $('.input-g-in input,.input-g-in textarea').focus(function (e) { 
        $(this).parent('.input-g-in').addClass('input-g-in-focus');
    });
    $('.input-g-in input,.input-g-in textarea').focusout(function (e) { 
        if($(this).val()==""){
          $(this).parent('.input-g-in').removeClass('input-g-in-focus');
        }
    });
    $('.input-g-in h3').click(function (e) { 
          $(this).next('input,textarea').focus();
        
    });
});
