<?php
$conn = new mysqli("localhost", "username", "password", "christmas_store");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
