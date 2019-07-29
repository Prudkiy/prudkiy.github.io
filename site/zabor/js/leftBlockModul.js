$(document).ready(function() {   
    saveThisId = '';
    $('.leftBlockListList span').hide();
    $('.leftBlockListList li').click(function(){
        thisId = $(this).attr('id');
        if(thisId == saveThisId){
            $('.leftBlockListList span').hide()
            saveThisId = '2222';
            $('.leftBlockListList li').css('background-image','url("images/icon/str-left.png")');
        }
        else {
            $('.leftBlockListList span').hide();
            $('.leftBlockListList span[class='+thisId+']').show();
            $('.leftBlockListList li').css('background-image','url("images/icon/str-left.png")'); 
            $('.leftBlockListList #'+thisId+'').css('background-image','url("images/icon/str-left-hov.png")');
            saveThisId = thisId;
        }            
        
    });
});