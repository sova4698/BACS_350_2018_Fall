<?php

echo '
        <div class="page">
        
        <h4>Demo 4 - Regex Replace</h4>
        
        <p>Code</p>
        <pre>
// Replace matching text
$text = "A stitch in time saves five.";
$regex = "/\wi\we/";
echo preg_replace($regex, "NINE", $text);
        </pre>
        
        <p>Results</p>
        <pre>'; 

    $text = "A stitch in time saves nine.";
    $regex = "/\wi\we/";
    $text = preg_replace($regex, "TIME", $text);
    echo $text;

    echo '</pre>';

    echo '
        <p>Code</p>
        <pre>
// Numbers only
$phoneNum = "(123) 456-7890";
$numbersOnly = preg_replace("/\D+/", "", $phoneNum);
echo $numbersOnly;
        </pre>
        
        <p>Results</p>
        <pre>'; 

    $phoneNum = "(123) 456-7890";
    $numbersOnly = preg_replace("/\D+/", "", $phoneNum);
    echo $numbersOnly;

    echo '</pre></div>';


?>
