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
                    <form action='/job-listings'>
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

    $app->get("/job-listings", function() {
        $new_job = new JobOpening($_GET['title'], $_GET['description'], $_GET['contact']);
        $new_job_title = $new_job->getTitle();
        $new_job_description = $new_job->getDescription();
        $new_job_contact = $new_job->getContact();

        return "
        <div class='container'>
            <h1>Looking for:</h1>
            <ul>
                <li><strong>Job Title:</strong> " . $new_job_title . "</li>
                <li><strong>Description:</strong> " . $new_job_description . "</li>
                <li><strong>Contact:</strong> ". $new_job_contact . "</li>
            </ul>
        </div>
        "
        ;

        // return $output;
    });

    return $app;
?>
