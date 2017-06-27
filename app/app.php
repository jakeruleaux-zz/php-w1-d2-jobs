<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";

    $app = new Silex\Application();

    $app->get("/", function() {

        return "
        <!DOCTYPE html>
        <html>
            <head>
                <title>Job Openings</title>
            </head>
            <body>
                <div class='container'>
                    <form action='/job-listings' method='post'>
                        <div class='form-group'>
                            <label for='title'>Job Title: </label>
                            <input type='text' name='title'>
                        </div>
                        <div class='form-group'>
                            <label for='description'>Description: </label>
                            <input type='text' name='description'>
                        </div>
                        <div class='form-group'>
                            <label for='contact'>Contact Person: </label>
                            <input type='text' name='contact'>
                        </div>
                        <button type='submit' name='submit'>Post</button>
                    </ form>
                </div>
            </body>
        </html>
        "
        ;
    });
    $output = "";

    return $app;
?>
