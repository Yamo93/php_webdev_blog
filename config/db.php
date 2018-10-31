<?php

    // Connect to MySQLi
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check Connection for MySQLi
    if(mysqli_connect_errno()) {
        // Connection failed
        echo 'Failed to connect'.mysqli_connect_errno();
    }