<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $sql = "DELETE FROM feedbacks WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Feedback deleted successfully'); window.location.href='manage_feedback.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
