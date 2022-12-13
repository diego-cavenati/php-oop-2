<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennels.php';
require_once __DIR__ . '/Traits/Sizable.php';
require_once __DIR__ . '/Traits/Weightable.php';


$products = [
    '0'=> $geo_freesbee_tornado = new Game('Georplast', 'Geo Frisbee Tornado', 'Il Frisbee per cani Tornado di Georplast si distingue da tutti gli altri giochi canini per il suo design innovativo, creato per facilitare la presa del tuo amico a quattro zampe', 2, new Category('dog'), 'plastic'),
    $royal_canin_v_diet = new Food('Royal canin', 'Royal Canin V-Diet Urinary S/O Multipack sfilaccetti Gatto', 'Royal Canin V-Diet Urinary S/O Multipack è un elemento umido dietetico appositamente studiato per gatti adulti che soffrono di malattie delle vie urinarie.', 12.25, new Category('cat'), 'pollo'),
]


$geo_freesbee_tornado->set_size('30x30', 'cm');
var_dump($geo_freesbee_tornado);

// $royal_canin_v_diet->set_weight(300, 'grammi');
// var_dump($royal_canin_v_diet);

?>

<!doctype html>
<html lang='it'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='Diego Cavenati'>
    <title>Animals e-commerce</title>
    <!-- Font awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <!-- Personal CSS -->
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>

<body>


    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <h5 class="card-title">
                            <?php echo $product->name ?>
                        </h5>
                        <div>
                            <?php echo $product->brand ?>
                        </div>
                        <p class="card-text">
                            <?php echo $product->description ?>
                        </p>
                        <p class="card-text">
                            <?php echo $product->price ?>
                        </p>
                        <a href="#" class="btn btn-primary">Add cart</a>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>


    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>