/* self executing function to get the width of window to change where the portfolio id hashtag goes to */
(function () {
    var width = $(window).width();
    if(width <= 1000) {
       $('a[href^="#portfolio"]').attr('href', '#portfolioSmall');
    } else {
        $('a[href^="#portfolio"]').attr('href', '#portfolioLarge');
    }
})();

$(window).resize(function() {
    var width = $(window).width();
    if(width <= 1000) {
       $('a[href^="#portfolio"]').attr('href', '#portfolioSmall');
    } else {
        $('a[href^="#portfolio"]').attr('href', '#portfolioLarge');
    }
});

$('a[href^="#"]').on('click', function(event) {
    var target = $( $(this).attr('href') );
    
    if(target.length) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

/* fantastic slide to using just jquery and animate */