$(document).ready(function() {
    var linkToForm = $('.link-to-form'),
        mailContainer = $('.hero-mail'),
        advantagesContainer = $('.hero-advantages'),
        heroIntro = $('.hero-intro'),
        enrollBtn = $('.enroll'),
        windowRef = $(window);
    linkToForm.click(function() {
        windowRef.scrollTo(advantagesContainer, 400);
    });

    enrollBtn.click(function() {
        windowRef.scrollTo(mailContainer, 500);
    });
});