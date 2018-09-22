<?php

    // Start the page
    $page_title = 'BACS 350 - Exam 1 - Contact Manager';
    require_once 'header.php';

    echo '<h1>My Contacts</h1>';


    // Show the list after the insert
    require 'select.php';


    // Add a record
    echo '<form action="insert.php" method="get">
        
        <p><label>Title:</label> &nbsp; <input type="text" name="title"></p>
        <p><label>Author:</label> &nbsp; <input type="text" name="author"></p>
        <p><label>Summary:</label> &nbsp; <input type="text" name="summary"></p>
        
        <p><input type="submit" value="Add New Contact"/></p>
        
    </form>';


    // End the page
    require_once 'footer.php';

?>