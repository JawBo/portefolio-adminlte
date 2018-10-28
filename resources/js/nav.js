$(window).scroll(function(){
    $('.divSpan').toggleClass('scrolled',$(this).scrollTop() > 850 && $(this).scrollTop() < 1800);
    $('.navUl').toggleClass('scrolled',$(this).scrollTop() > 850 && $(this).scrollTop() < 1800);
});