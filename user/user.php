<?php

    include "creditCard\creditCard.php";

    class User {
        public $name;
        public $lastName;
        public $userName;
        public $age;
        public $email;

        function __construct($name, $lastName, $userName, $age, $email)  {
            $this->setName($name);
            $this->setLastName($lastName);
            $this->setUserName($userName);
            $this->setAge($age);
            $this->setEmail($email);
        }

        public function setName($string) {
            if (ctype_alpha($string)) {
            $this->name = $string;
            }
        }

        public function getName() {
            return $this->name;
        }

        public function setLastName($string) {
            if (ctype_alpha($string)) {
            $this->lastName = $string;
            }
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function setUserName($string) {
            if (strlen($string) > 5 and ctype_alpha($string)) {
            $this->userName = $string;
            }
        }

        public function getUserName() {
            return $this->userName;
        }

        public function setAge($num) {
            if (is_numeric($num)) {
            $this->age = $num;
            }
        }

        public function getAge() {
            return $this->age;
        }

        public function setEmail($string) {
            if (strlen($string) > 10) {
            $this->email = $string;
            }
        }

        public function getEmail() {
            return $this->email;
        }
    }




?>