<?php
    // start the session 
    session_start();

    // destroy all session variables
    session_unset();

    // destroy the session itself
    session_destroy();

    // redirect the user to the normal page
    header("Location: Home.html");
    exit();
?>