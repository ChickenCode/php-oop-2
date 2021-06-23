<?php
    class CreditCard {
        public $number;
        public $cvv;
        public $ownerFirstName;
        public $ownerLastName;
        public $expDate;
        public $valid;

        function __construct($number, $cvv, $firstName, $lastName, $date) {
            $this->setNumber($number);
            $this->setCVV($cvv);
            $this->setOwnerFirstName($firstName);
            $this->setOwnerLastName($lastName);
            $this->setExpDate($date);
        }

        public function setNumber($num) {
            if (ctype_digit($num) and strlen($num) == 16) {
                $this->number = $num;
            }

            else {
                throw new Exception("Your credit card is not valid.");
            }
        }

        public function getNumber() {
            return $this->number;
        }

        public function setCVV($num) {
            if (ctype_digit($num) and strlen($num) == 3) {
                $this->cvv = $num;
            }
        }

        public function getCVV() {
            return $this->cvv;
        }

        public function setOwnerFirstName($string) {
            if (ctype_alpha($string)) {
                $this->ownerFirstName = $string;
            }
        }

        public function getOwnerFirstName() {
            return $this->ownerFirstName;    
        }

        public function setOwnerLastName($string) {
            if (ctype_alpha($string)) {
                $this->ownerLastName = $string;
            }
        }

        public function getOwnerLastName() {
            return $this->ownerLastName;    
        }

        public function setExpDate($date) {
                $this->expDate = $date;
                $this->isValid($date);
        }

        public function getExpDate() {
            return $this->expDate;
        }

        public function isValid() {
            if (strtotime($this->expDate) > strtotime(date('d/m/Y'))) { 
                $this->valid =  true;
            }

            else {
                $this->valid = false;
            }
        }


    }

?>