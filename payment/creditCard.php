<?php
    class CreditCard {
        public $number;
        public $cvv;
        public $ownerFirstName;
        public $ownerLastName;
        public $expDate;
        public $valid;

        function __construct($number, $cvv, $firstName, $lastName, $date) {
            $this->getNumber($number);
            $this->getCVV($cvv);
            $this->getOwnerFirstName($firstName);
            $this->getOwnerLastName($lastName);
            $this->setExpDate($date);
        }

        public function getNumber($num) {
            if (ctype_digit($num) and strlen($num) == 16) {
                $this->number = $num;
            }
        }

        public function setNumber() {
            return $this->number;
        }

        public function getCVV($num) {
            if (ctype_digit($num) and strlen($num) == 3) {
                $this->cvv = $num;
            }
        }

        public function setCVV() {
            return $this->cvv;
        }

        public function getOwnerFirstName($string) {
            if (ctype_alpha($string)) {
                $this->ownerFirstName = $string;
            }
        }

        public function setOwnerFirstName() {
            return $this->ownerFirstName;    
        }

        public function getOwnerLastName($string) {
            if (ctype_alpha($string)) {
                $this->ownerLastName = $string;
            }
        }

        public function setOwnerLastName() {
            return $this->ownerLastName;    
        }

        public function setExpDate($date) {
                $this->expDate = $date;
                $this->isValid($date);
        }

        public function getExpDate() {
            return $this->expDate;
        }

        public function isValid($expDate) {
            if (strtotime($expDate) > strtotime(date('d/m/Y'))) {
                $this->valid = true;
            }

            else {
                $this->valid = false;
            }
        }


    }

?>