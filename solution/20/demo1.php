<?php

    echo '
        
        <h4>Demo 1 - Text Match</h4>
        
        <p>Code</p>
        <pre>
            $text = "A stitch in time saves five.";
            $regex = "/five/";
            if (preg_match($regex, $text)) {
                  echo "Line matches: $text";
            }
        </pre>
        
        <p>Results</p>
        <pre>
        '; 

            $text = "A stitch in time saves five.";
            $regex = "/five/";
            if (preg_match($regex, $text)) {
                  echo "Line matches: $text";
            }

    echo '</pre>';


?>
