<?php 

    require_once __DIR__.'/Models/Product.php';
    require_once __DIR__.'/Models/Food.php';
    require_once __DIR__.'/Models/Category.php';

    // instanze della classe Category
    $dog = new Category('Dogs');
    $cat = new Category('Cats');

    // istanza della classe Food e associo la categoria
    $food = new Food('Crochette', 'immagine', '99.99', true, $dog);

    // richiamo il setter setCalories e gli assegno un valore
    $food->setCalories(9000);

    var_dump($food);
    var_dump($food->getProductInfo());

?>