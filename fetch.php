<?php
include('db_connect.php');

try {
    $stmt = $conn->query("SELECT * FROM products");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($products as $product) {
        echo "<h3>" . htmlspecialchars($product['name']) . "</h3>";
        echo "<p>" . htmlspecialchars($product['description']) . "</p>";
        echo "<p>Price: $" . htmlspecialchars($product['price']) . "</p>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
