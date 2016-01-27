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


$(document).ready(function(){
  setTimeout(function() {
    $('i#down-arrow').addClass('v-v bounce')
  }, 700);

  $('#cta').mouseover(function(){
    $('#request-quote').addClass('pulse');
  });
  $('#cta').mouseleave(function(){
    $('#request-quote').removeClass('pulse');
  });
});

//# sourceMappingURL=app.js.map
