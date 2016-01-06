// Script For Smooth Scrolling

$('a#learn-more').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 800);
    return false;
});

$('#adelie-logo').hover(function(){
  $(this).css('cursor', 'pointer');
});
$('#adelie-logo').click(function(){
  window.location.href = '/';
});
//# sourceMappingURL=app.js.map
