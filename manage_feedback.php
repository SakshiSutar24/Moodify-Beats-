<?php
include 'config.php'; // Ensure this file exists in the same directory or adjust the path accordingly

$sql = "SELECT * FROM feedbacks";
$result = $conn->query($sql);

if (!$result) {
    die("Error fetching feedback: " . $conn->error);
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background: url('manage.png') no-repeat center center fixed; /* Feedback image */
        background-size: cover; /* Ensure the image covers the entire background */
        color: #212529; /* Dark text */
    }
    .home-btn {
        background-color:rgb(216, 18, 134); /* Purple */
        color: white;
        border: none;
        padding: 10px 10px;
        cursor: pointer;
        border-radius: 10px;
        font-size: 16px;
        text-transform: uppercase;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute; /* Position the button */
        top: 20px; /* Distance from the top */
        right: 20px; /* Distance from the right */
    }
    .home-btn i {
        margin-right: 10px;
        font-size: 20px;
    }
    .home-btn:hover {
        background-color:rgb(238, 18, 139); /* Darker purple */
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 60px; /* Move table further down */
        background-color: rgba(102, 91, 100, 0.6);
        box-shadow: 0 4px 8px rgba(129, 117, 126, 0.64);
        border-radius: 8px;
        overflow: hidden;
        font-size: 15px; /* Slightly larger font for better readability */
    }
    table, th, td {
        border: 1px rgb(195, 28, 139); /* Light gray border */
        padding: 10px;
        text-align: left;
        font-size: 15px;
        color:rgb(221, 44, 162); /* Darker text for better contrast */
    }
    th {
        background-color:rgb(0, 0, 0, 0.6); /* Darker gray for header */
        color: white;
        padding: 15px;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px; /* Add spacing between letters */
    }
    td {
        padding: 15px; 
        transition: background-color 0.3s ease; /* Smooth background color change */
        text-align: left;
        font-size: 15px;
        color:rgb(1, 1, 1); /* Darker text for better contrast */
    }
    tr:nth-child(even) {
        background-color:rgb(207, 146, 185); /* Light gray for even rows */
    }
    tr:nth-child(odd) {
        background-color:rgb(224, 181, 209); /* White for odd rows */
    }
    tr:hover {
        background-color:rgb(239, 70, 163); /* Slightly darker gray on hover */
        transition: background-color 0.3s ease; /* Smooth hover effect */
    }
    .delete-btn {
        background-color:rgb(150, 24, 83); /* Pink */
        color: white;
        padding: 8px 15px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        text-transform: uppercase;
        display: inline-block;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .delete-btn:hover {
        background-color: #c82362; /* Darker pink */
    }
</style>

<button class="home-btn" onclick="window.location.href='sutar.php'">
    <i class="bi bi-house-door-fill"></i> Home
</button>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Feedback</th>
        <th>Action</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['feedback']); ?></td>
        <td>
            <a class="delete-btn" href="delete_feedback.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
