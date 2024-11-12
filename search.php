<?php include("db_connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header> <!-- Header content here --> </header>
    <main>
        <h2>Search Results</h2>
        <div class="product-list">
            <?php
            $query = $conn->real_escape_string($_GET['query']);
            $result = $conn->query("SELECT * FROM products WHERE name LIKE '%$query%' OR description LIKE '%$query%'");
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
