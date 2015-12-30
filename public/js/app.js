// Script For Smooth Scrolling

$('a#learn-more').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 800);
    return false;
});

//# sourceMappingURL=app.js.map
