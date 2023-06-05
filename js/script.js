$(document).ready(function() {
  // toggle eye password
  $('.eye').on('click', (e) => {
    if ($(e.currentTarget).siblings("input").attr("type") === "password") {
      $(e.currentTarget).attr('class', 'fa-solid fa-eye-slash eye');
      $(e.currentTarget).siblings("input").attr('type', 'text');
    }else {
      $(e.currentTarget).attr('class', 'fa-solid fa-eye eye');
      $(e.currentTarget).siblings("input").attr('type', 'password');
    }
  })
  
  //check inputs validation
  function errorMessage(message){ return `
    <div class="mt-2 alert alert-danger alert-dismissible fade show text-center" role="alert">
      <strong>${message}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  `};
  $("#signup-form").on('submit', (e) => {
    if ($("#password").val() !== $("#cpassword").val()) {
      e.preventDefault();
      $("#signup-form").prepend(errorMessage('Your passwords do not match.'));
    }
    // validate password
    function validatePassword(password) {
      const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
      return regex.test(password);
    }
    if (!(validatePassword($("#password").val())) && $("#password").val() === $("#cpassword").val()) {
      e.preventDefault();
      $("#signup-form").prepend(errorMessage('Password must be at least 8 characters with uppercase, lowercase, and number.'));
    }

    // validate email address
    function validateName(email) {
      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return regex.test(email);
    }
    if (!(validateName($("#email").val()))) {
      e.preventDefault();
      $("#signup-form").prepend(errorMessage('Please enter a valid email address'));
    }
  })
})