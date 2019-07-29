$(document).ready(function() {
    $('.butHead').click(function(){
        $(this).removeClass('thisButHead');
        thisName = $(this).attr('name');
        if(thisName == 'oneButH'){
            $(this).removeClass('thisButHead');
            $('button[name=thueButH]').addClass('thisButHead');
            $('#headBas').attr('class','fonHeaderDer');
        }
        if(thisName == 'thueButH'){
            $(this).removeClass('thisButHead');
            $('button[name=oneButH]').addClass('thisButHead');
            $('#headBas').attr('class','fonHeaderMet');
        }
    });
    
});