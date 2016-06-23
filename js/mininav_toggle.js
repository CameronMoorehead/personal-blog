// Toggles the view for responsive mininav menu on click

jQuery(document).ready(function($) {

    $('#mini-nav-image').click(function() {
        $('.responsive-menu').slideToggle('slow', function() {
            console.log('animation done');
        });
    });

});
