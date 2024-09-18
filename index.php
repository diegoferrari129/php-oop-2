<?php

    class Products {
        public $name;
        public $description;
        public $price;
        private $category;
        protected $subcategory;

        public function __construct($name, $description, $price, Category $category, $subcategory) {
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->category = $category;
            $this->subcategory = $subcategory;
        }

        public function getName() {
            return $this->name;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getCategory() {
            return $this->category->type;
        }

        public function getSubCategory() {
            return $this->subcategory;
        }

    }

    class Category {
        public $type;

        public function __construct($type) {
            $this->type = $type;
        }
    }

    $crochette = new Products('Crocchette', 'Molto buone, testate su esseri umani', '$9999.99', new Category('cani'), 'cibo');
    var_dump($crochette);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>