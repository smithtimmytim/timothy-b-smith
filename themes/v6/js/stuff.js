jQuery(function($) {
  $(".main-content, .content, .video-pusher").fitVids();

  $(".main-content a[href^='http://']").attr("target","_blank");

  $('.dot-irecommendthis').one('click', function() {
    $(this).addClass('animated bounce');
  });
});