$(document).ready(function() {
  $('.eye').on('click', (e) => {
    if ($(e.currentTarget).siblings("input").attr("type") === "password") {
      $(e.currentTarget).attr('class', 'fa-solid fa-eye-slash eye');
      $(e.currentTarget).siblings("input").attr('type', 'text');
    }else {
      $(e.currentTarget).attr('class', 'fa-solid fa-eye eye');
      $(e.currentTarget).siblings("input").attr('type', 'password');
    }
  })
})