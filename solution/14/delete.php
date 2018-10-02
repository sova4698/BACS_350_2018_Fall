<?php

    // Connect to the database
    require_once 'subscriber_db.php';
    $db = subscribers_connect();


    // Delete all records
    $rows = clear_subscribers ($db, 'index.php');
    echo "<h1>DELETE</h1><p>$rows Rows deleted</p>";

//    // Go to index page
//    header('Location: index.php');

?>
