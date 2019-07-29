$(document).ready(function() {
    i = 0;
    $('#imgSlide img').hide();
    $('.sl_1').show();
            $('#butNavSlide li').click(play);
            function play(){
                $('#butNavSlide li').removeClass('thisButHead')
                $(this).addClass('thisButHead');
                        idImg = $(this).attr('id');
                        $('#imgSlide img').fadeOut(600);
                        $('#imgSlide img[class='+idImg+']').fadeIn(1500);
                        i = idImg.substr((idImg.length-1),1);
                        i--;
            }
     setInterval(function(){
        i++;
        if(i == 3){ // кол. слайдов
            $('#butNavSlide li').removeClass('thisButHead')
            $('#sl_1').addClass('thisButHead');
            $('#imgSlide img').fadeOut(600);
            $('#imgSlide img[class=sl_1]').fadeIn(1500);
            i = 0;
        }
        else {
                idImg = $('#butNavSlide li[class=thisButHead]').attr('id');
                $('#butNavSlide li').removeClass('thisButHead')
                $('#'+idImg+'').next().addClass('thisButHead');
                idImg = $('#butNavSlide li[class=thisButHead]').attr('id');
                $('#imgSlide img').fadeOut(600);
                $('#imgSlide img[class='+idImg+']').fadeIn(1500);
        }      
                
     },10000); // инт. время смены      
    
    
    /* слайд на внутр. №1*/
    
    $('#slideVnutr1Wrap .slideWorkWrap').hide();
    $('#slideVnutr1Wrap #slide2-1').show();
    
    
    
});