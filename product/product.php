<?php
    class Product {
        public $price;
        public $name;
        public $brand;
        public $rating;

        function __construct($price, $name, $brand, $rating) {
            $this->setPrice($price);
            $this->setName($name); 
            $this->setBrand($brand); 
            $this->setRating($rating);
        }


        public function setPrice($num) {
            if (is_numeric($num)) {
            $this->price = $num;
            }
        }

        public function getPrice() {
            return $this->price;
        }

        public function setName($string) {
            if (ctype_alpha($string)) {
            $this->name = $string;
            }
        }

        public function getName() {
            return $this->name;
        }

        public function setBrand($string) {
            if (ctype_alpha($string)) {
            $this->brand = $string;
            }
        }

        public function getBrand() {
            return $this->brand;
        }

        public function setRating($num) {
            if (is_numeric($num) and 5 >= $num and 0 <= $num) {
            $this->rating = $num;
            }
        }

        public function getRating() {
            return $this->rating;
        }


    }

    
?>