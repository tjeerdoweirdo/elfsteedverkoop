<?php
include('db_connect.php');

$search = isset($_GET['search']) ? $_GET['search'] : '';

try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE :search");
    $stmt->execute([':search' => "%$search%"]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Christmas Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Christmas Store</h1>
    <form method="GET" action="index.php">
        <input type="text" name="search" placeholder="Search for products..." value="<?php echo htmlspecialchars($search); ?>">
        <button type="submit">Search</button>
    </form>
    <div>
        <?php foreach ($products as $product): ?>
            <h3><a href="product.php?id=<?php echo $product['id']; ?>"><?php echo htmlspecialchars($product['name']); ?></a></h3>
            <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p>
        <?php endforeach; ?>
    </div>
</body>
</html>
