<?php

    /*
        add_subscriber_form -- Create an HTML form to add record.
    */

    function add_subscriber_form() {
        
        echo '
            <h2>Add Subscriber</h2>
            <div class="card">
                <form action="insert.php" method="get">
                    <p><label>Name:</label> &nbsp; <input type="text" name="name"></p>
                    <p><label>Email:</label> &nbsp; <input type="text" name="email"></p>
                    <p><input type="submit" value="Sign Up"/></p>
                </form>
            </div>
            ';
        
    }


    /*
        render_simple_page -- Create the HTML page.
    */

    function render_simple_page($title, $text) {
        
        echo "<h1>$title</h1><p>$text</p>";
    }


    /*
        render_list -- Loop over all of the subscribers to make a bullet list
    */
 
    function render_list($list) {

        echo '<h2>Subscribers in List</h2> 
              <ul>';
        foreach ($list as $s) {
            echo '<li>' . $s['id'] . ', ' . $s['name'] . ', ' . $s['email'] . '</li>';
        }
        echo '</ul>';
    
    }
    

?>