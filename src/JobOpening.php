<?php
    class JobOpening
    {
        private $title;
        private $description;


        function __construct($title, $description)
        {
            $this->title = $title;
            $this->description = $description;
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


    class Contact
    {
        private $name;
        private $email;
        private $phone;

        function __construct($name, $email, $phone)
        {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }

        function getName()
        {
            return $this->name;
        }

        function getEmail()
        {
            return $this->email;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function setName()
        {
            $this->name = $new_name;
        }

        function setEmail()
        {
            $this->email = $new_email;
        }

        function setPhone()
        {
            $this->phone = $new_phone;
        }

    }


?>
