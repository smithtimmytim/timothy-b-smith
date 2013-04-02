jQuery(function($) {
  $(".main-content, .content, .video-pusher").fitVids();

  $('.main-content a:not([href^="http://timothybsmith.com"]):not([href^="#"]):not([href^="/"]):not([href^="http://dev.ttimsmith:8888/"]) ').attr("target","_blank");

  $('.dot-irecommendthis').one('click', function() {
    $(this).addClass('animated bounce');
  });
});