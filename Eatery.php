<?php

// Set page title for header
$page_title = "The Ulam Store";

// Include header with navigation
include 'includes/header.php';

// Include product data
include 'stock.php';

// Variables
$name = "Rustine";
$name = 'Guest';
$name = 'Rustine';
$price = '80';

$item       = "Adobo";
$stock      = 100;
$wanted     = 4;
$deliver    = true;

$can_buy    = (($wanted <= $stock) && ($deliver == true));

// Arrays - display products from stock
$offers = [
    ['name' => 'Adobo', 'price' => 80, 'stock' => 40],
    ['name' => 'Sinigang', 'price' => 80, 'stock' => 35],
    ['name' => 'Kare-Kare', 'price' => 120, 'stock' => 20],
    ['name' => 'Bicol Express', 'price' => 70, 'stock' => 25],
    ['name' => 'Sisig', 'price' => 80, 'stock' => 12],
    ['name' => 'Tinola', 'price' => 65, 'stock' => 8],
    ['name' => 'Laing', 'price' => 40, 'stock' => 5],
];

// Arrays
$favorites = ['Adobo', 'Sinigang', 'Kare-Kare', 'Bicol Express'];

// Variables
$ulamCount = '5';
$extraUlam = 2;

// Operations
$totalUlam = $ulamCount + $extraUlam;

// Variables
$isMember = true;
$bonusUlam = $isMember + 1;
$message = "You bought 1 ulam!";

$cart = [
    ['name' => 'Adobo', 'price' => 80, 'qty' => 1],
    ['name' => 'Sinigang', 'price' => 90, 'qty' => 1],
    ['name' => 'Kare-Kare', 'price' => 130, 'qty' => 1],
];

function computeTotal($cart) {
    $sum = 0;
    foreach ($cart as $c) {
        $sum += $c['price'] * $c['qty'];
    }
    return $sum;
}

$cartTotal = computeTotal($cart);

?>

    <h2>Welcome <?= $name; ?>!</h2>
    <p>The cost of your ulam is ₱<?= $price; ?> per serving.</p>

    <h2>Available Ulam</h2>
    <table>
        <tr>
            <th>Ulam</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>

    <!-- Loops -->
        <?php foreach ($offers as $food): ?>
            <tr>
                <td><?= $food['name'] ?></td>
                <td>₱<?= $food['price'] ?></td>
                <td><?= $food['stock'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <h2>Your Orders</h2>
    <?php foreach ($cart as $c): ?> 
        <p><?= $c['name'] ?> × <?= $c['qty'] ?> — ₱<?= $c['price'] * $c['qty'] ?></p>
    <?php endforeach; ?>
    <p><strong>Total: ₱<?= $cartTotal ?></strong></p>

    <h2>Your Favorite Ulam</h2>
    <p><?= $favorites[0] ?></p>

    <h2>Extra Info</h2>
    
    <p>Can buy <?= $wanted ?> <?= $item ?>? <?= $can_buy ? "Yes" : "No" ?></p> <!-- Conditionals -->

    <p>Total Ulam: <?= $totalUlam ?></p>
    <p>Bonus for Ulam Members: <?= $bonusUlam ?></p>
    <p><?= $message ?></p>

    
    <?php include "includes/footer.php"; ?>
