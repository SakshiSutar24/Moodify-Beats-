<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $sql = "DELETE FROM users WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User deleted successfully'); window.location.href='manage_users.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
