<?php 

    require_once __DIR__.'/Models/Product.php';
    require_once __DIR__.'/Models/Food.php';
    require_once __DIR__.'/Models/Game.php';
    require_once __DIR__.'/Models/Kennel.php';
    require_once __DIR__.'/Models/Category.php';

    // instanze della classe Category
    $dog = new Category('Dogs', 'fa-solid fa-dog');
    $cat = new Category('Cats', 'fa-solid fa-cat');

    $product = new Product('Collar', 'https://picsum.photos/200/300', '20.80', true, $dog);
    $product->setColor('Red');

    // istanza della classe Food e associo la categoria
    $food = new Food('Croquettes', 'https://picsum.photos/200/300', '12.99', true, $dog);

    // richiamo il setter setCalories e gli assegno un valore
    $food->setCalories('4060Kcal');

    // var_dump($food);
    // var_dump($food->getProductInfo());

    $game = new Game('Ball of yarn', 'https://picsum.photos/200/300', '8.49', false, $cat);
    $game->setType('Lana');
    // var_dump($game);
    // var_dump($game->getProductInfo());

    $kennel = new Kennel('Padded', 'https://picsum.photos/200/300', '34.99', true, $dog);
    $kennel->setSize('999x999x999');
    // var_dump($kennel);
    // var_dump($kennel->getProductInfo());

    $products = [
        $product,
        $food,
        $game,
        $kennel
    ];

?>