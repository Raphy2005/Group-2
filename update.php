<?php
$conn = new mysqli("localhost", "root", "", "crud_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: crud.php");
    exit;
}