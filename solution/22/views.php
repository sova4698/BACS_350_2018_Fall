<?php

    /*
        begin_page -- Create the HTML for the beginning of a page.  Add a page title and headline.
    */

    function begin_page($site_title, $page_title) {

        header("Pragma: no-cache");
        header("Expires: 0");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        
        echo '
            <!DOCTYPE html>
            <html lang="en">
                <head>
        
                    <meta charset="UTF-8">
                    <title>' . $page_title . '</title>

                    <link rel="stylesheet" href="style.css">

                </head>
                <body>

                    <header>
                        <img src="Bear.png" alt="Bear Logo"/>
                        <h1>' . $site_title . '</h1>
                        <h2>' . $page_title . '</h2>
                    </header>
                    <main>
        ';
    }


    /*
        end_page -- Create the HTML for the end of a page.
    */

    function end_page() {

        echo '
                    </main>
                </body>
            </html>
        ';
        
    }


    /*
        render_simple_page -- Create the HTML page.
    */

    function render_simple_page($title, $text) {
        
        echo "<h1>$title</h1><p>$text</p>";
    }


    // render_list -- Loop over all of the log to make a bullet list
    function render_list($list) {

        echo '
            <div class="card">
                <h3>Page Load History</h3> 
                <ul>
            ';
        foreach ($list as $s) {
            echo '<li>' . $s['id'] . ', ' . $s['date'] . ', ' . $s['text'] . '</li>';
        }
        echo '
                </ul>
            </div>';
    
    }
?>
