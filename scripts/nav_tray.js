$( document ).ready(function() {
    $toggled = false;
    $navBar = $('.nav-bar');
    $mobileNavBtn = $('.mobile-nav-btn');

    $(window).on('resize', function(){
        $toggled = false;
        $($navBar).attr('is-active', 'false');
    });
    
    $($mobileNavBtn).click(function(){
       $toggled = !$toggled;

       $($navBar).attr('is-active', $toggled.toString());
    });
});