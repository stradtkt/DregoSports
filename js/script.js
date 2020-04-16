(function($) {
    $(document).ready(function() {
        const navbarToggler = $('.navbar-toggler');
        const collapse = $('#navbarToggleExternalContent');
        const bg = $('.bg-dark');
        $(navbarToggler).click(function() {
            if(collapse.toggle('show')) {
                $(bg).slideDown('slow');
            } else {
                $(bg).slideUp('slow');
            }
        });
    });
})(jQuery);