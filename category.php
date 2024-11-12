<?php include("db_connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category - Christmas Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header> <!-- Header content here --> </header>
    <main>
        <h2>Products</h2>
        <div class="product-list">
            <?php
            $category_id = $_GET['cat'];
            $result = $conn->query("SELECT * FROM products WHERE category_id = $category_id");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>Price: $" . $row['price'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </main>
</body>
</html>
