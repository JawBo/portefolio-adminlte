const ScrollReveal = require ('scrollreveal/dist/scrollreveal')

/* Décomptage skills */

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

/* Display section */

ScrollReveal().reveal('.imdoe',{ delay: 300,easing: 'ease-in-out'  });
ScrollReveal().reveal('#sectAbout',{ delay: 1000,easing: 'ease-in-out'  });
ScrollReveal().reveal('.jsbody',{ delay: 1300,easing: 'ease-in-out'  });
ScrollReveal().reveal('#commentsSection',{ delay: 1700, easing: 'ease-in-out'  });
ScrollReveal().reveal('#contactSection',{ delay: 2000,easing: 'ease-in-out'  });
ScrollReveal().reveal('.footer',{ delay: 2200,easing: 'ease-in-out'  });

/* scroll to error */

if ($('#errorComment' )) {
    window.scrollTo(0,2000);
}
if ($('#errorContact')) {
    window.scrollTo(0,3000);
}