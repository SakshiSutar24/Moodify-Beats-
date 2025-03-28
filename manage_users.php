<?php
include 'config.php'; // Database connection

$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if (!$result) {
    die("Error fetching users: " . $conn->error);
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('manage.png');
        height: 50px;
        width: 90%
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: class_alias;
        color: #212529;
    }
    .home-btn {
        background-color:rgb(243, 2, 118);
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        border-radius: 5px;
        align-items: center;
        justify-content: center;
        display: flex;
        position: absolute;
        top: 2px;
        right: 20px;
        transition: background-color 0.3s ease-in-out;
        z-index: 100;
    }
    .home-btn:hover {
        background-color:rgb(253, 3, 187);
    }
    table {
        height: 40px;
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: rgba(0, 0, 0, 0.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        overflow: hidden;
        font-size: 16px;
        position: relative;
        padding: 20px;
        z-index: 1;
        overflow-x: auto;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    a {
        color: red;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
<button class="home-btn" onclick="window.location.href='sutar.php'">
    <i class="bi bi-house-door-fill"></i> Home
</button>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td><?php echo htmlspecialchars($row['username']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td>
            <a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
