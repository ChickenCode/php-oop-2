<?php
    
    class Laptop extends Product {
        

        public $height;
        public $width;
        public $year;

        function __construct($price, $name, $brand, $rating, $height, $width, $year) {
            parent::__construct($price, $name, $brand, $rating);
            $this->setHeight($height);
            $this->setWidth($width);
            $this->setYear($year);
        }

        use Basics;

        // public function setHeight($num) {
        //     if (is_numeric($num)) {
        //     $this->height = $num;
        //     }
        // }

        // public function getHeight() {
        //     return $this->height;
        // }

        // public function setWidth($num) {
        //     if (is_numeric($num)) {
        //     $this->width = $num;
        //     }
        // }

        // public function getWidth() {
        //     return $this->width;
        // }

        // public function setYear($num) {
        //     if (is_numeric($num)) {
        //     $this->year = $num;
        //     }
        // }

        // public function getYear() {
        //     return $this->year;
        // }




    }