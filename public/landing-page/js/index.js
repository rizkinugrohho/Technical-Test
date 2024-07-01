// for changing navbar bg color when scrolled
$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > 25);
    });
});

let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .collapse ul a');

window.onscroll = () => {

    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header .collapse ul a[href*=' + id + ']').classList.add('active');
            });
        }
    });

};

$(document).ready(function() {

    $("#benefit .bagaimana button").click(function() {

        $("#benefit .bagaimana button").removeClass("masuk-active btn-dark");
        $("#benefit .bagaimana button").addClass("masuk");
        $(this).addClass("masuk-active btn-dark");
        $(this).removeClass("masuk");

    });

    $("#kelas .lebih-dari button").click(function() {

        $("#kelas .lebih-dari button").removeClass("masuk-active btn-dark");
        $("#kelas .lebih-dari button").addClass("masuk");
        $(this).addClass("masuk-active btn-dark");
        $(this).removeClass("masuk");

    });

    $("#benefit .dashboard .select").click(function() {
        $("#benefit .dashboard .body").toggle();
    });
    $("#benefit .pre-post-test .select").click(function() {
        $("#benefit .pre-post-test .body").toggle();
    });
    $("#benefit .learning-reports .select").click(function() {
        $("#benefit .learning-reports .body").toggle();
    });
    $("#benefit .polling .select").click(function() {
        $("#benefit .polling .body").toggle();
    });
    $("#benefit .forum-diskusi .select").click(function() {
        $("#benefit .forum-diskusi .body").toggle();
    });
    $("#benefit .compatible-ad .select").click(function() {
        $("#benefit .compatible-ad .body").toggle();
    });
    $("#benefit .journey-bl .select").click(function() {
        $("#benefit .journey-bl .body").toggle();
    });

    $("#benefit .bagaimana .lms-toggle").click(function() {
        $("#benefit .hide").hide();
        $("#benefit .lms").show();
    });

    $("#benefit .bagaimana .featured-toggle").click(function() {
        $("#benefit .hide").hide();
        $("#benefit .featured").show();
    });

    $("#benefit .bagaimana .video-live-toggle").click(function() {
        $("#benefit .hide").hide();
        $("#benefit .video-live").show();
    });

    $("#benefit .bagaimana .inquiry-toggle").click(function() {
        $("#benefit .hide").hide();
        $("#benefit .inquiry").show();
    });

});