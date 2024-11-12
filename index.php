<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Christmas Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the Christmas Store</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="info.php">Info</a>
            <a href="contact.php">Contact</a>
        </nav>
        <form action="search.php" method="GET">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </header>
    <section id="categories">
        <h2>Categories</h2>
        <!-- PHP loop for categories -->
    </section>
    <section id="featured">
        <h2>Featured Products</h2>
        <!-- PHP loop for featured products -->
    </section>
</body>
</html>
