<?php

    // Connect to the database
    require_once 'subscriber.php';


    // Pick out the inputs
    $name  = filter_input(INPUT_GET, 'name');
    $email = filter_input(INPUT_GET, 'email');


    // Add record
    $subscribers->add ($name, $email);

?>
