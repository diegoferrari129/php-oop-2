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
    }

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