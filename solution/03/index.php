<?php

    // Start the page
    require_once 'views.php';

    $page_title = 'Page Design Pattern Demo';
    begin_page($page_title);


    // Your page content goes here

    echo '<a href="..">Solutions</a>
    <h1>BACS 350 - Project #3 - Standard Page Template</h1>';

    // Include other content
    require 'pattern.html';


    // End the page
    end_page();

?>
