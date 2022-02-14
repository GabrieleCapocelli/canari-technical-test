(function($, window, undefined) {

    var $navBar = $('#navigation');
    var $submenu = $navBar.find('.submenu');

    $navBar.hover(function(){
        $(this).toggleClass('is-open');
    });

    $('.menu-item').hover(function(){
        $(this).find($submenu).toggleClass('submenu-open');
    });

})(jQuery, window);


