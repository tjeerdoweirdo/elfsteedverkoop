<?php
include('db_connect.php');

$categoryId = isset($_GET['id']) ? intval($_GET['id']) : 0;

try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :id");
    $stmt->execute([':id' => $categoryId]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Category Products</title>
</head>
<body>
    <h1>Category Products</h1>
    <?php foreach ($products as $product): ?>
        <h3><a href="product.php?id=<?php echo $product['id']; ?>"><?php echo htmlspecialchars($product['name']); ?></a></h3>
        <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p>
    <?php endforeach; ?>
</body>
</html>
