<?php
include 'db.php'; // Database connection

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully!";
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}
?>

<!-- User Management Table -->
<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>
                <a href='update_user.php?id={$row['id']}'>Edit</a> |
                <a href='delete_user.php?id={$row['id']}'>Delete</a>
            </td>
        </tr>";
    }
    ?>
</table>
