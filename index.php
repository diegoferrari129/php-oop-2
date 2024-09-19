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
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h2">
                    Products
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($products as $product){ ?>
            <div class="col-4">

                <div class="card">
                    <img src="<?php echo $product->image?>" class="card-img-top" alt="<?php echo $product->name?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->name?></h5>
                        <p class="card-text">
                            <strong>Category:</strong>
                            <?php echo $product->category->name ?>
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