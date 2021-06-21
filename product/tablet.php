<?php
    require __DIR__ . "./product.php";

    class Smartphone extends Product {
        public $height;
        public $width;
        public $year;

        function __construct($price, $name, $brand, $rating, $height, $width, $year) {
            parent::__construct($price, $name, $brand, $rating);
            $this->getHeight($height);
            $this->getWidth($width);
            $this->getYear($year);
        }

        public function setHeight($num) {
            if (is_numeric($num)) {
            $this->height = $num;
            }
        }

        public function getHeight() {
            return $this->height;
        }

        public function setWidth($num) {
            if (is_numeric($num)) {
            $this->width = $num;
            }
        }

        public function getWidth() {
            return $this->width;
        }

        public function setYear($num) {
            if (is_numeric($num)) {
            $this->year = $num;
            }
        }

        public function getYear() {
            return $this->year;
        }




    }