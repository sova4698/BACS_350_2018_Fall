<?php

    require_once 'views.php';
 
    $site_title = 'BACS 350 - Demo Server';
    $page_title = 'Page Logging';
    begin_page($site_title, $page_title);


    // Page Content
    echo '<p><a href="..">Solutions</a></p>';

    
    // Bring in log logic
    require_once 'log.php';
    $log->add('solution/11/index.php');
    $log->show_log();


//    // Render a list of subscribers
//    $subscribers->show_subscribers();
//    
//
//    // Show the add form
//    $subscribers->add_form();
//
//
//    // Button to clear
//    echo '<a href="delete.php">Reset Subscribers</a>';
//
//
//
//
//
//    // Log the page loading
//    $page = 'solution/11/index.php';
//    $text = "Loading Page: $page";
//    require('log.php');
//
//
//    // Include the main page content
//    echo '<h1>Page Logging Demo</h1>';
//    require ('log-history');
//

    end_page();

 ?>
