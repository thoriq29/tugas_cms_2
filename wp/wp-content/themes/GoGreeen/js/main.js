const $ = jQuery

$(document).ready(function(){
    $('body').on('click', 'nav#navbar .collapse', function(){
        if($('nav#navbar .collapse-ul').hasClass('active')){
            $('nav#navbar .collapse-ul').removeClass('active')
        }
        else{
            $('nav#navbar .collapse-ul').addClass('active')
        }
    });
})