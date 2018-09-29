<?php

    // Start the page
    include '../../views.php';

    $site_title = 'BACS 350 - Demo Server';
    $page_title = 'Form Input Design Pattern';
    begin_page($site_title, $page_title);


    // Your content goes here

    echo '<h2>Form using POST</h2>

    <form action="welcome.php" method="post">
        
        <p><label>What is your name?</label> &nbsp; <input type="text" name="my_name"></p>
        
        <p><input type="submit" value="Save"/></p>
        
    </form>';


    // End the page
    end_page();

?>
