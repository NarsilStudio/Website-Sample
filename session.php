<?php
    // Starts the session.
    session_start();

    // Checks if the user is already logged in.
    if (isset($_SESSION["userid"]))
    {
        // Redirects the user to the home page.
        header("location: index.php");     
        exit;
    }
?>