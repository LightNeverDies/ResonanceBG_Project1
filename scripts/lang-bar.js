$( document ).ready(function() {

    $(".lang-bar").click(function(){
        if(!$(this).hasClass('open')){
            $(this).attr('is-selector-active', 'true');
            $(this).addClass('open');
        }else{
            $(this).attr('is-selector-active', 'false');
            $(this).removeClass('open');
        }
    }) 
});

function loadLanguages(){

}
function languageTray(){

}