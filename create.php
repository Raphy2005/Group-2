<?php include 'db.php'; ?>

<h2>Add User</h2>

<form method="POST">
    <input type="text" name="name" required>
    <button type="submit">Save</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $conn->query("INSERT INTO users (name) VALUES ('$name')");
    header("Location: index.php");
}
?>