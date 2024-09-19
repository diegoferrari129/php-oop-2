<?php

    // definisco la classe base Product
    class Product {
        // assegno delle proprietà alla classe Product
        public $name;
        public $image;
        public $price;
        public $is_available;
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
            return 'Name:'.' '.$this->name.', Price:'.' '.$this->price;
        }

    }

?>