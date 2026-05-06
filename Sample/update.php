<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];

$conn->query("UPDATE users SET name='$name' WHERE id=$id");

header("Location: index.php");