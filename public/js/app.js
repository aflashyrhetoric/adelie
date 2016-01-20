// Script For Smooth Scrolling
$('a#learn-more').click(function(){
    $('html, body').animate({
        scrollTop: $('#services').offset().top-50
    }, 1200);
});

// Disables mouse text cursor on hover
$('#adelie-logo').hover(function(){
  $(this).css('cursor', 'pointer');
});

// Creates logo link
$('#adelie-logo').click(function(){
  window.location.href = '/';
});
//# sourceMappingURL=app.js.map
