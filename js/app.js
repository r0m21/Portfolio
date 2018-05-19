$(function(){
    
    $('#lien1, #lien2').click(function(){
        $('html, body').animate({
            scrollTop : $($(this).attr('href')).offset().top
        }, 1000);
    });

 });
 