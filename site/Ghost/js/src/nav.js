

$( document ).ready(function() {

    // navitgation button menu mobile
        let nav__menu_mobStatus = false;
        let ulNavHeader = $('nav ul');
        $('#nav__menu_mob').click(function(){
            if(!nav__menu_mobStatus) {
               ulNavHeader.css('display', 'block');
               nav__menu_mobStatus = true;
            }
            else {
              ulNavHeader.css('display', 'none');
              nav__menu_mobStatus = false;
            }
        });   
    });
    
    
    
    