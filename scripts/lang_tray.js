$( document ).ready(function() {
    $isDropdownActive = false;
    $dropDownElement = $('.lang-dropdown');
    $languageList = $("li[code2]");
    $selectedLangElement = null;

    $("li[code2]").click(function(){
        onLanguageSelect($(this));
    });

    $(document).mouseup(function (e){
        if(!$(".lang-tray span").is(e.target)){
            setDropdownActivity(false);
        }
    });

    $(".lang-tray span").click(function(){
        setDropdownActivity($isDropdownActive = !$isDropdownActive)
    }) 
});

function onLanguageSelect($targetLanguage){
    $targetLanguage.insertBefore($languageList[0]);
    $languageList[0] = $targetLanguage;
    $('.code2').html($targetLanguage.attr('code2'));
}

function setDropdownActivity($isActive){
    $isDropdownActive = $isActive;
    $dropDownElement.attr('is-dropdown-active', $isActive.toString());
}