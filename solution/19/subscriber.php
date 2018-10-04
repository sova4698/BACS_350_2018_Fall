<?php

    // Bring in subscribers logic
    require_once 'subscriber_db.php';
    require_once 'subscriber_crud.php';
    require_once 'subscriber_views.php';


    // My Subscriber list
    class Subscribers {

        // Database connection
        private $db;

        
        // Automatically connect
        function __construct() {
            $this->db =  subscribers_connect();
        }

        
        function query() {
            return query_subscribers($this->db);
        }
        
    
        function clear() {
            if (clear_subscribers($this->db)) {
                //echo '<p><b>Clear successful</b></p>';
                header("Location: index.php");
            }
        }
        
        function add($name, $email) {
            if (add_subscriber ($this->db, $name, $email)) {
                //echo '<p><b>Insert successful</b></p>';
                header("Location: index.php");
            }
        }
        
        
        function show_subscribers() {
            render_list($this->query());
        }
        
        
        function add_form() {
            add_subscriber_form();
        }
    }


    // Create a list object and connect to the database
    $subscribers = new Subscribers;

?>
