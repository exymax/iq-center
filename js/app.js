$(document).ready(function() {
    var linkToForm = $('.link-to-form'),
        mailContainer = $('.hero-mail'),
        advantagesContainer = $('.hero-advantages'),
        heroIntro = $('.hero-intro'),
        enrollBtn = $('.enroll'),
        windowRef = $(window),
        formSend = $('.form-send'),
        formSubmit = $('.form-submit');
    linkToForm.click(function() {
        windowRef.scrollTo(advantagesContainer, 400);
    });

    enrollBtn.click(function() {
        windowRef.scrollTo(mailContainer, 500);
    });

    formSubmit.click(function(e) {
        e.preventDefault();
        $.post('mail.php', formSend.serialize())
            .done(function(data) {
                console.log(data);
            });
    });

    $('.gallery-container').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
    });

    $('.feedback-links').slick({
        asNavFor: '.feedback-cards',
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        centerMode: true
    });

    $('.feedback-cards').slick({
        asNavFor: '.feedback-links',
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true
    });

    $('.tab').tab({
        trigger_event_type: 'mouseover'
    });

});