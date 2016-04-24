$(document).ready(function(){
    $(windows).scroll(function(){
        if($(this).scrollTop() > 0){
            $('header').addClass('headeredit');
        }else{
            $('header').removeClass('headeredit');
        }
    }); 
});