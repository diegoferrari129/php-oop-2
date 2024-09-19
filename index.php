<?php

    require_once __DIR__.'/db.php';

?>

<!DOCpet html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mt-5">
                    <h2>
                        Products
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($products as $product){ ?>
            <div class="col-3">

                <div class="card my-4">
                    <img src="<?php echo $product->image?>" class="card-img-top" alt="<?php echo $product->name?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->name?></h5>
                        <p class="card-text">
                            <strong>Category</strong>
                            <i class="<?php echo $product->category->icon ?>"></i>
                        </p>
                        <p>
                            Subcategory:
                            <?php
                                $className = $product->getClassName();
                                if ($className == 'Product') {
                                    echo 'Product'.'<br>';
                                    echo 'Color: '.$product->getColor();
                                }
                                else if($className == 'Food') {
                                    echo 'Food'.'<br>';
                                    echo 'Calories: '.$product->getCalories();
                                }
                                else if($className == 'Game') {
                                    echo 'Game'.'<br>';
                                    echo 'Material: '.$product->getType();
                                }
                                else if($className == 'Kennel') {
                                    echo 'Kennel'.'<br>';
                                    echo 'Size: '.$product->getSize();
                                }
                            ?>
                        </p>
                        <p>
                            <?php echo $product->getProductInfo(); ?>
                            
                        </p>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>