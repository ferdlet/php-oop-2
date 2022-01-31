<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Product.php';

$users = [
    new User("Antonio", "Di Petto", "email@antoniodipetto.it", 60),
    new User("Luigi", "Brancaccio", "email@luigibrancaccio.it", 55),
    new User("Biagio", "Rossetti", "email@biagiorossetti.it", 50),
];

$products = [
    new Product("Apple", "Macbook Pro 16 M1 Pro", "16gb ram, 512gb ssd", 2500.00),
    new Product("Lenovo", "Yoga Slim 7 Pro Gen 6", "Ryzen 7 5800H, 16gb ram, 512gb ssd", 1000.00),
    new Product("Dell", "Inspiron 15 5000", "Intel i7-1165G7, 16gb ram, 512gb ssd", 1200.00),
    new Product("Xiaomi", "12 Pro", "Snapdragon 888, 8gb ram, 256gb memory", 600.00),
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
</head>

<body>
    <h1>Shop Online</h1>
    <?php foreach ($products as $product) { ?>
        <ul>
            <li>
                <strong>Marca: </strong><?php echo $product->getMarca(); ?>
            </li>
            <li>
                <strong>Modello: </strong><?php echo $product->getModello(); ?>
            </li>
            <li>
                <strong>Descrizione: </strong><?php echo $product->getDescrizione(); ?>
            </li>
            <li>
                <strong>Prezzo: </strong><?php echo $product->getPrezzo(); ?>
            </li>
        </ul>
    <?php } ?>
</body>

</html>