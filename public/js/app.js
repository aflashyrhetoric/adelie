// Script For Smooth Scrolling
$("#learn-more").click(function() {
    $('html, body').animate({
        scrollTop: $("#services").offset().top-50
    }, 1000);
});

// Disables text cursor on mouseover
$('#adelie-logo').hover(function(){
  $(this).css('cursor', 'pointer');
});

// Makes logo clickable link to homepage
$('#adelie-logo').click(function(){
  window.location.href = '/';
});
//# sourceMappingURL=app.js.map
