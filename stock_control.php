<?php
declare(strict_types=1);

$page_title = "Stock Control";
include "includes/header.php";

// Global tax rate
$tax_rate = 12; // 12% VAT

// Include product data and functions
include 'stock.php';
include 'functions.php';

?>

    <h2>Stock Control Management</h2>
    <p>Monitor and manage your product inventory</p>

    <table>
        <tr>
            <th>Product</th>
            <th>Price (₱)</th>
            <th>Stock</th>
            <th>Reorder?</th>
            <th>Total Value (₱)</th>
            <th>Tax Due (<?= $tax_rate ?>%)</th>
        </tr>

        <?php foreach ($products as $product_name => $data): ?>
        <tr>
            <td><?= $product_name ?></td>
            <td><?= number_format($data["price"], 2) ?></td>
            <td><?= $data["stock"] ?></td>
            <td><?= get_reorder_message($data["stock"]) ?></td>
            <td><?= number_format(get_total_value($data["price"], $data["stock"]), 2) ?></td>
            <td><?= number_format(get_tax_due($data["price"], $data["stock"], $tax_rate), 2) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php include "includes/footer.php"; ?>
