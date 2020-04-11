(function($) {

    const navButton = $('#navbar-toggler');
    const background = $('.bg-dark.p4');
    $(document).ready(function(e) {
        $(navButton).on('click', function() {
            $(background).slideDown('slow');
        });
    });

})(jQuery);