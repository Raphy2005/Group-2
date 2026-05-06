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
ghelo
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
nian
<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Edit User</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
    <button type="submit">Update</button>
</form>
bruce
<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];

$conn->query("UPDATE users SET name='$name' WHERE id=$id");

header("Location: index.php");
?>

