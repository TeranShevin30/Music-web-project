<?php

    define('DB_SERVER', '127.0.0.0:3306');     // Server address
    define('DB_USERNAME', 'root');         // Database username
    define('DB_PASSWORD', 'mariadb');             // Database password
    define('DB_NAME', 'musicdb');    // Database name
    
    // Create connection using defined constants
    $connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (!$connect) {
        die("connection failed");
    }
    else {
        //echo "connected successfully";
    }
    

?>