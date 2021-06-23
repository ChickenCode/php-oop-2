<?php

    require __DIR__ . "./user.php";

    class PrimeUser extends User {
        public $prime = true;
        public $subscriptionDate;
        function __construct($name, $lastName, $userName, $age, $email, $subscriptionDate = null) {

            parent::__construct($name, $lastName, $userName, $age, $email);
            if (!isset($subscriptionDate)) {
                $subscriptionDate = date("Y-m-d H:i:s");
            }
            $this->subscriptionDate = $subscriptionDate;
        }
        
        
    }

?>