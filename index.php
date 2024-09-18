<?php

    class Products {
        public $name;
        public $description;
        public $price;
        private $category;
        protected $subcategory;

        public function __construct($name, $description, $price, $category, $subcategory) {
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
            return $this->category;
        }

        public function getSubCategory() {
            return $this->subcategory;
        }

    }

    $crochette = new Products('Crocchette', 'Molto buone, testate su esseri umani', '$9999.99', 'pet', 'cibo');
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