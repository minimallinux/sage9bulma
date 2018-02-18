import "../partials/ajax.js";
export default {
  init() {
// JavaScript to be fired on all pages
      $(".hamburger").click(function() {
      $(this).toggleClass("is-active");
      $("#primary_nav").toggleClass("is-active");
});
//eslint-disable-next-line no-unused-vars      

  
},
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};





  
