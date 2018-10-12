<?php

    /*
        add_subscriber_form -- Create an HTML form to add record.
    */

    function add_subscriber_form() {
        
        echo '
            <div class="card">
                <h3>Add Subscriber</h3>
            
                <form action="index.php" method="post">
                    <p><label>Name:</label> &nbsp; <input type="text" name="name"></p>
                    <p><label>Email:</label> &nbsp; <input type="text" name="email"></p>
                    <p><input type="submit" value="Sign Up"/></p>
                    <input type="hidden" name="action" value="add">
                </form>
            </div>
            ';
        
    }

?>
