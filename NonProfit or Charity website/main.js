jQuery(document).ready(function ($) {
    // Toggle navigation menu
    $('.menu-toggle').on('click', function () {
        $('.main-menu').toggleClass('active');
    });
    
    // Smooth scroll to anchor links
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 500);
    });
    
    // Display alert on form submission
    $('#donate-form').on('submit', function () {
        alert('Thank you for your donation!');
    });
    
    // Add your custom frontend scripts here
    
    // Example: Submit form with AJAX
    $('#volunteer-form').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: form.serialize(),
            success: function (response) {
                alert('Thank you for signing up as a volunteer!');
            },
            error: function () {
                alert('Oops! Something went wrong. Please try again later.');
            }
        });
    });
});
