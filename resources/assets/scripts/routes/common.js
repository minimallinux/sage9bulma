export default {
  init() {
// JavaScript to be fired on all pages

     $(".hamburger").click(function() {
      $(this).toggleClass("is-active");
      $("#primary_nav").toggleClass("is-active");
});
},
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};




 //var el = document.querySelector('#primary_nav');  