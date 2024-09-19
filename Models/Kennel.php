<?php

    require_once __DIR__.'/Product.php';

    // definisco la sottoclasse Food per aggiungiere delle proprietà alla classe Product
    class Kennel extends Product {
        protected $size;

        public function __construct($name, $image, $price, $is_available, Category $category) {

            // richiamo il costruttore della classe genitore per inizializzare le proprietà ereditate
            parent::__construct($name, $image, $price, $is_available, $category);
        }

        // definisco un metodo setter per impostare il valore della proprietà $calories
        public function setSize($size){
            $this->size = $size;
        }

        // definisco un metodo getter per restituire il valore definito dal metodo setter
        public function getSize() {
            return $this->size;
        }

        public function getClassName(){
            return get_class($this);
        }
    }

?>