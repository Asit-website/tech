(function($) {
  $('.next').click(function() {
      $('.carousel').carousel('next');
      return false;
  });
  $('.prev').click(function() {
      $('.carousel').carousel('prev');
      return false;
  });
})
(jQuery);
let sd = document.getElementById('sd');
sd.addEventListener('click', () => {
  window.location.href = "https://www.instagram.com/asitmandal7488/";
});