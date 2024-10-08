<?php

    // definisco la classe base Product
    class Product {
        // assegno delle proprietà alla classe Product
        public $name;
        public $image;
        public $price;
        public $is_available;
        private $color;
        public $category; // istanza della classe Category che devo passare come argomento

        // utilizzo il costruttore per inizializzare le proprietà
        public function __construct($name, $image, $price, $is_available, Category $category) {

            $this->name = $name;
            $this->image = $image;
            $this->price = $price;
            $this->is_available = $is_available;
            $this->category = $category;

        }

        // definisco un metodo per restituire una stringa che contiene i valori assegnati
        public function getProductInfo() {

           $info = 'Price:'.' '.$this->price.'€ <br>';

           if($this->is_available){
               $info .= 'Available';
           }

           else{
                $info .= 'Not in Stock';
           }

           return $info;

        }

        public function setColor($color) {
            if(!is_string($color)) {
                throw new Exception("Color must be a string");
            }
            $this->color = $color;
        }

        public function getColor() {
            return $this->color;
        }

        public function getClassName(){
            return get_class($this);
        }
    }

?>