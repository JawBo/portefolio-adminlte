$(window).scroll(function(){
    $('.divSpan').toggleClass('scrolled',$(this).scrollTop() > 600);
    $('.navUl').toggleClass('scrolled',$(this).scrollTop() > 600);
});