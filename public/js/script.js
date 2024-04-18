// jQuery(function ($) {
//   $("accordion-container").on("click", function () {
//     $(this).next().slideToggle(200);
//     $(this).toggleClass("open", 200);
//   }).next();
// });

// jQuery(function ($) {

// })
// $('.accordion').click(function () {
//   $(this).toggleClass('is-open');
//   $(this).siblings('.menu').toggleClass('is-open');
// });

// const parentMenu = document.querySelectorAll(".accordion-title > li> a");
// for (let i = 0; i < parentMenu.length; i++) {
//   parentMenu[i].addEventListener("click", function (e) {
//     e.preventDefault();
//     this.nextElementSibling.classList.toggle("active");
//   })
// }


$(function () {
  $('.accordion-title').click(function () {
    $(this).next().slideToggle();
  });
});
