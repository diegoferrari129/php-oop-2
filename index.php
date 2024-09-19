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
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
    }

    class Food extends Product {
        protected $calories;

        public function __construct($name, $image, $price, $is_available = true, Category $category) {
            parent::__construct($name, $image, $price, $is_available, $category);
        }

        public function setCalories($calories){
            $this->calories = $calories;
        }

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