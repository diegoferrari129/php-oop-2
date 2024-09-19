<?php 

    require_once __DIR__.'/Models/Product.php';
    require_once __DIR__.'/Models/Food.php';
    require_once __DIR__.'/Models/Game.php';
    require_once __DIR__.'/Models/Kennel.php';
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

    $game = new Game('Gomitolo', 'immagine', '99.99', false, $cat);
    $game->setType('lana');

    var_dump($game);
    var_dump($game->getProductInfo());

    $kennel = new Kennel('Bed', 'immagine', '99.99', true, $dog);
    $kennel->setSize('999x999x999');

    var_dump($kennel);
    var_dump($kennel->getProductInfo());

?>