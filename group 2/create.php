<?php include 'db.php'; ?>

<h2>Users List</h2>
<a href="create.php">Add New</a>

<ul>
<?php
$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo "<li>
        {$row['name']}
        <a href='edit.php?id={$row['id']}'>Edit</a>
        <a href='delete.php?id={$row['id']}'>Delete</a>
    </li>";
}
?>
</ul>