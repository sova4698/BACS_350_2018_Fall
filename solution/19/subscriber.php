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

        // Method to query
        function query() {
            return query_subscribers($this->db);
        }
        
        // Method to show subscribers
        function show_subscribers() {
            render_list($this->query());
        }
        
        // Show the add form
        function add_form() {
            add_subscriber_form();
        }
    }

?>
