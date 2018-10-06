<?php

echo '
        
        <h4>Demo 2 - Word Match</h4>
        
        <p>Code</p>

        <pre>
            $words = ["ban", "babble", "make", "flab"];
            $regex = "/ab/";

            foreach ($words as $word) {
               if (preg_match($regex, $word)) {
                  echo "$word matches!";
               }
            }
        </pre>
        
        <p>Results</p>
        <pre>
        '; 

            $words = ["ban", "babble", "make", "flab"];
            $regex = "/ab/";

            foreach ($words as $word) {
               if (preg_match($regex, $word)) {
                  echo "<p>$word matches!</p>";
               }
            }
    echo '</pre>';


?>
