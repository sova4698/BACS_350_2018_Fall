<?php
       
    header("Pragma: no-cache");
    header("Expires: 0");
    //header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);


    // Connect to the database

    require_once 'subscriber.php';


    // Delete all records
    if ($subscribers->clear()) {
//        echo '<p><b>Clear successful</b>&nbsp;<a href="index.php">Subscribers</a></p>';
//        $this->query();
          header("Location: index.php");
    }

?>
