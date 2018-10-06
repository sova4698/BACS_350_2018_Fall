<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'BACS 350 - Demo Server';
    $page_title = 'Regex';
    begin_page($site_title, $page_title);


    // Page Content
    echo '<p><a href="..">Solutions</a></p>';
   
    echo '
        <h2>Regex</h2>
        
        <h3>Unsolved Mystries</h3>
        
        <ul>
            <li>Text Match</li>
            <li>Text Replace</li>
            <li>Line Split</li>
            <li>Line Join</li>
            <li>Regex Replace</li>
            <li>Template with Vars</li>
            <li>Template with Expressions</li>
            <li>Substitution Dictionary</li>
            <li>Markdown Headlines</li>
            <li>Markdown Bullets</li>
            <li>Markdown Links</li>
            <li>Markdown Formatter</li>
            
            <li></li>
        </ul>
        
        
        <h3>Demo Code</h3>
    ';

    
    include 'demo1.php';
    include 'demo2.php';
    include 'demo3.php';



    end_page();
?>
