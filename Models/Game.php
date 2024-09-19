<?php

    require_once __DIR__.'/Product.php';

    // definisco la sottoclasse Food per aggiungiere delle proprietà alla classe Product
    class Game extends Product {
        protected $type;

        public function __construct($name, $image, $price, $is_available, Category $category) {

            // richiamo il costruttore della classe genitore per inizializzare le proprietà ereditate
            parent::__construct($name, $image, $price, $is_available, $category);
        }

        // definisco un metodo setter per impostare il valore della proprietà $calories
        public function setType($type){
            $this->type = $type;
        }

        // definisco un metodo getter per restituire il valore definito dal metodo setter
        public function getType() {
            return $this->type;
        }

    }

?>