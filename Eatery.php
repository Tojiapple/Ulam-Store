<?php
// Variables
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
    <title>The Ulam Store</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <h1>The Ulam Store</h1>

    <h2>WELCOME <?= strtoupper($name) ?>!</h2>
    <p>The cost of your ulam is ₱<?= $price ?> per serving.</p>

    <h2>AVAILABLE ULAM</h2>

    <table>
        <tr>
            <th>Ulam</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>

        <?php foreach($offers as $food): ?>
            <tr>
                <td><?= $food['name'] ?></td>
                <td>₱<?= $food['price'] ?></td>
                <td><?= $food['stock'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>YOUR ORDERS</h2>

    <?php foreach($cart as $c): ?>
        <p><?= $c['name'] ?> × <?= $c['qty'] ?> — ₱<?= $c['price'] * $c['qty'] ?></p>
    <?php endforeach; ?>

    <p><strong>Total: ₱<?= $cartTotal ?></strong></p>

    <h2>YOUR FAVORITE ULAM</h2>
    <p><?= $favorites[0] ?></p>

    <h2>EXTRA INFO</h2>
    <p>Can buy <?= $wanted ?> <?= $item ?>? <?= $can_buy ? "Yes" : "No" ?></p>
    <p>Total Items Ordered: <?= $totalItems ?></p>

    <footer>
        Ulam Store © 2025 <br>
        Contact: 09126929801
    </footer>

</div>

</body>
</html>
