import './bootstrap';

// phone input


  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
  });
