// Set the session timeout duration to 30 minutes (in milliseconds)
const SESSION_TIMEOUT_DURATION = 30 * 60 * 1000;

// Define a function that resets the session timeout by making an AJAX request to the server
function resetSessionTimeout() {
  // Send an AJAX request to the server to reset the session timeout
  $.ajax({
    url: "/reset-session-timeout.php",
    method: "POST"
  });
}

// Start the session timeout timer
let sessionTimeoutTimer = setTimeout(function() {
  // Redirect the user to the logout page when the session timeout duration is exceeded
  window.location.href = "/logout.php";
}, SESSION_TIMEOUT_DURATION);

// Reset the session timeout whenever a page is loaded or refreshed
$(document).ready(function() {
  resetSessionTimeout();
});

// Reset the session timeout whenever the user interacts with the page
$(document).on("click keydown scroll", function() {
  clearTimeout(sessionTimeoutTimer);
  sessionTimeoutTimer = setTimeout(function() {
    // Redirect the user to the logout page when the session timeout duration is exceeded
    window.location.href = "/logout.php";
  }, SESSION_TIMEOUT_DURATION);
});