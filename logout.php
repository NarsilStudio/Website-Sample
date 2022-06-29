<?php
    // Starts the session.
    session_start();

    // Unsets all variables.
    $_SESSION = array();

    // Destroys the session.
    if (session_destroy())
    {
        // Redirects the user to the home page.
        header("Location: index.php");
        exit;
    }
?>