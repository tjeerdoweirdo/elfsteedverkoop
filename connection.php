<?php
try {
    // Path to the SQLite database file
    $db_path = __DIR__ . '/db/database.db';
    $conn = new PDO("sqlite:" . $db_path);

    // Set error mode to exceptions for easier debugging
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to SQLite successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
