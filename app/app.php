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
                            <label for='name'>Contact Name: </label>
                            <input type='text' name='name'>
                        </div>
                        <div class='form-group'>
                            <label for='email'>Contact Email: </label>
                            <input type='text' name='email'>
                        </div>
                        <div class='form-group'>
                            <label for='phone'>Contact Phone Number: </label>
                            <input type='text' name='phone'>
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
        $new_job = new JobOpening($_GET['title'], $_GET['description']);
        $new_contact = new Contact($_GET['name'], $_GET['email'], $_GET['phone']);
        $new_job_title = $new_job->getTitle();
        $new_job_description = $new_job->getDescription();
        // $new_job_contact = $new_job->getContact();
        $new_contact_name = $new_contact->getName();
        $new_contact_email = $new_contact->getEmail();
        $new_contact_phone = $new_contact->getPhone();

        return "
        <div class='container'>
            <h1>Looking for:</h1>
            <ul>
                <li><strong>Job Title:</strong> " . $new_job_title . "</li>
                <li><strong>Description:</strong> " . $new_job_description . "</li>
                <li><strong>Contact: </li>
                    <ul>
                        <li><strong>Name:</strong> " . $new_contact_name. "</li>
                        <li><strong>Email:</strong> " . $new_contact_email . "</li>
                        <li><strong>Phone:</strong> " . $new_contact_phone . "</li>
                    </ul>
            </ul>
        </div>
        "
        ;

        // return $output;
    });

    return $app;
?>
