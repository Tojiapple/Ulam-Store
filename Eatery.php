<?php
//Variables
$name = "Rustine";
$price = 80; 

$item = "Adobo";
$stock = 40;
$wanted = 4;
$deliver = true;

$can_buy = ($wanted <= $stock) && $deliver;

$offers = [
    ['name' => 'Adobo', 'price' => 80, 'stock' => 40],
    ['name' => 'Sinigang', 'price' => 90, 'stock' => 32],
    ['name' => 'Kare-Kare', 'price' => 130, 'stock' => 18],
    ['name' => 'Bicol Express', 'price' => 100, 'stock' => 25],
];

$favorites = ['Adobo', 'Sinigang', 'Kare-Kare', 'Bicol Express'];

//Type Juggling
$ulamCount = "3";
$extraUlam = 1;
$totalUlam = $ulamCount + $extraUlam; 

$isMember = true;
$bonusUlam = $isMember + 1; 
$message = "You ordered " . $totalUlam . " servings of ulam!";

//Arrays
$cart = [
    ['name' => 'Adobo', 'price' => 80, 'qty' => 1],
    ['name' => 'Sinigang', 'price' => 90, 'qty' => 1],
    ['name' => 'Kare-Kare', 'price' => 130, 'qty' => 1],
];

$cartTotal = 0;
foreach($cart as $c) {
    $cartTotal += $c['price'] * $c['qty'];
}

$totalItems = count($cart);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ulam Store</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <h1>Ulam Store</h1>
    <h2>Hi <?= $name ?>!</h2>
    <p>Our ulam starts at around ₱<?= $price ?> each.</p>

    <h2>What we have today:</h2>
    <table>
        <tr><th>Ulam</th><th>Price</th><th>Stock</th></tr>
        <?php foreach($offers as $food): ?>
        <tr>
            <td><?= $food['name'] ?></td>
            <td>₱<?= $food['price'] ?></td>
            <td><?= $food['stock'] ?> left</td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Your Order:</h2>
    <?php foreach($cart as $c): ?>
        <p><?= $c['name'] ?> x<?= $c['qty'] ?> = ₱<?= $c['price'] * $c['qty'] ?></p>
    <?php endforeach; ?>
    <p><strong>Total: ₱<?= $cartTotal ?></strong></p>

    <h2>Favorite ulam</h2>
    <p><?= $favorites[0] ?></p>

    <h2>Order Summary</h2>
    <p>Total Items: <?= $totalItems ?></p>
    <p>Total cost: ₱<?= $cartTotal ?></p>

    <h2>Extras</h2>
    <p>Can buy <?= $wanted ?> <?= $item ?>? <?= $can_buy ? "Yes!" : "Nope" ?></p>
    <p>Total ulam count: <?= $totalUlam ?></p>
    <p>Member bonus: <?= $bonusUlam ?></p>
    <p><?= $message ?></p>

    <footer>
        Ulam Store &copy; 2025 - <br> Contact: 09126929801
    </footer>

</div>
</body>
</html>