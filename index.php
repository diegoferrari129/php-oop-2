<?php

    class Product {
        public $name;
        public $image;
        public $price;
        public $is_available;
        public $category;

        public function __construct($name, $image, $price, $is_available = true, Category $category) {
            $this->name = $name;
            $this->image = $image;
            $this->price = $price;
            $this->is_avaible = $is_available;
            $this->category = $category;
        }

        public function getProductInfo() {
            return 'Name'.$this->name.',Price'.$this->price;
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