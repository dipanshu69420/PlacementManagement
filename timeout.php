<?php
// PHP script that resets the session timeout
session_start();

// Set the session timeout duration to 30 minutes (in seconds)
$SESSION_TIMEOUT_DURATION = 2 * 60;

// Reset the session timeout duration by updating the session cookie
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $SESSION_TIMEOUT_DURATION)) {
    // Session has timed out
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
} else {
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}
?>