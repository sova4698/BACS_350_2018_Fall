<?php

    // Start the page
    require_once '/views.php';

    $page_title = 'Page Design Pattern Demo';
    begin_page($page_title);
?>


    <!--  Your code goes here -->
    <a href="../..">Home</a>
    <h1>BACS 350 - Project #3 - Standard Page Template</h1>

    

    <p>This is a simple HTML page that demonstrates using an Include to capture boiler-plate code.</p>
    <p>This reduces duplication in code.</p>
    <p>In this demo the <b>$page_title</b> is set as a variable that is used by the <b>header.php</b> file.</p>
    <p>This page also includes a stylesheet.</p>

<?php
   // End the page
    end_page();
?>
