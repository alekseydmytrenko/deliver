$(window).load(function() {
    var menu = $('#menu-nav-open');
    //mobile menu button
    $('#btn-toggle').on("click", function (e) {

        if (menu.hasClass('on')){
            menu.toggle('fast').removeClass('on');
        } else {
            menu.toggle('slow').addClass('on');
        }
        e.stopPropagation();
    });

    $('body').on('click', function () {
        if (menu.hasClass('on')){
            menu.hide('fast').removeClass('on');
        }
    });
});