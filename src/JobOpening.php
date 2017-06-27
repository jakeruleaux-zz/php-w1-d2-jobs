<?php
    class JobOpening
    {
        private $title;
        private $description;
        private $contact;

        function __construct($title, $description, $contact)
        {
            $this->title = $title;
            $this->description = $description;
            $this->contact = $contact;
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
    }


?>
