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
        public function __construct($name, $image, $price, $is_available = true, Category $category) {
            $this->name = $name;
            $this->image = $image;
            $this->price = $price;
            $this->is_avaible = $is_available;
            $this->category = $category;
        }

        // definisco un metodo per restituire una stringa che contiene i valori assegnati
        public function getProductInfo() {
            return 'Name'.$this->name.',Price'.$this->price;
        }

    }

    // definisco la classe Category che viene inglobata dalla classe Product
    class Category {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
    }

    // definisco la sottoclasse Food per aggiungiere delle proprietà alla classe Product
    class Food extends Product {
        protected $calories;

        public function __construct($name, $image, $price, $is_available = true, Category $category) {

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

    }

?>

<!DOCpet html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>