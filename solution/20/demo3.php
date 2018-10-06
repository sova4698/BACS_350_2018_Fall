<?php

    echo '
        <div class="page">
        <h4>Demo 3 - Text Replace</h4>
        
        <p>Code</p>
        <pre>
// Replace matching text
$text = "A stitch in time saves five.";
$regex = "/five/";
echo preg_replace($regex, "NINE", $text);
        </pre>
        
        <p>Results</p>
        <pre>'; 

    $text = "A stitch in time saves five.";
    $regex = "/five/";
    echo preg_replace($regex, "NINE", $text);

    echo '</pre></div>';


?>
