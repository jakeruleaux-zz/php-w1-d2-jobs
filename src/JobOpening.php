<?php
    class JobOpening
    {
        private $title;
        private $description;
        private $contact;
    }

    function __construct($inputted_title, $inpuuted_description, $inputted_contact)
    {
        $this->title = $inputted_title;
        $this->description = $inpuuted_description;
        $this->contact = $inputted_contact;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getContact()
    {
        return $this->contact;
    }

    function setTitle()
    {
        $this->title = $new_title;
    }

    function setDescription()
    {
        $this->title = $new_description;
    }

    function setContact()
    {
        $this->title = $new_contact;
    }




?>
