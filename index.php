<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/DogProduct.php';
require_once __DIR__ . '/Models/CatProduct.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Bed.php';
require_once __DIR__ . '/Models/Card.php';

$dogFood = new DogProduct('dog_food.jpg', 'Cibo per Cani', 19.99, 'Cibo');
$catToy = new CatProduct('cat_toy.jpg', 'Gioco per Gatti', 9.99, 'Gioco');
$dogBed = new DogProduct('dog_bed.jpg', 'Cuccia per Cani', 49.99, 'Cuccia');

$products = [
    $dogFood,
    $catToy,
    $dogBed
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop Online</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 16px;
            margin: 16px;
            width: 200px;
            text-align: center;
            display: inline-block;
        }
        .card img {
            max-width: 100%;
            border-radius: 5px;
        }
        .card h2 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .card p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Benvenuti nel nostro Pet Shop</h1>
    <?php
    foreach ($products as $product) {
        Card::printCard($product);
    }
    ?>
</body>
</html>
