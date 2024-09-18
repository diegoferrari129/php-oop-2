<?php

    class Products {
        public $name;
        public $description;

        public function __construct($name, $description) {
            $this->name = $name;
            $this->description = $description;
        }

        public function getName() {
            return $this->name;
        }

        public function getDescription() {
            return $this->description;
        }

    }

    class Category {
        public $pet;

        public function __construct($pet) {
            $this->pet = $pet;
        }
    }

    class Food extends Products {
        public $brand;
        public $price;
        public $pet;

        public function __construct($name, $description, $brand, $price, $pet) {
            parent::__construct($name, $description);

            $this->brand = $brand;
            $this->price = $price;
            $this->pet = $pet;
        }

    }

    

    $dogFood = new Food('Dog Food', 'ciao ciao ciao', 'Ultima', '100', new Category('dog'));
    var_dump($dogFood);

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