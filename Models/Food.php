<?php

    require_once __DIR__.'/Product.php';

    // definisco la sottoclasse Food per aggiungiere delle proprietà alla classe Product
    class Food extends Product {
        protected $calories;

        public function __construct($name, $image, $price, $is_available, Category $category) {

            // richiamo il costruttore della classe genitore per inizializzare le proprietà ereditate
            parent::__construct($name, $image, $price, $is_available, $category);
        }

        // definisco un metodo setter per impostare il valore della proprietà $calories
        public function setCalories($calories){
            $this->calories = $calories;
        }

        // definisco un metodo getter per restituire il valore definito dal metodo setter
        public function getCalories() {
            return $this->calories;
        }

        public function getClassName(){
            return get_class($this);
        }
    }

?>