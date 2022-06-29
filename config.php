<?php
    // Database credentials. 
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'users');
    
    // Attempts the connection.
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
    // Checks the connection.
    if($db === false)
    {
        die("Error: Failed to connect to the database. " . mysqli_connect_error());
    }
?>