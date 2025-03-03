<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT status FROM tasks WHERE id = $id");
    $row = $result->fetch_assoc();
    $current_status = $row['status'];

    $new_status = ($current_status == 'Pending') ? 'In Progress' : 'Completed';
    $conn->query("UPDATE tasks SET status = '$new_status' WHERE id = $id");
    
    header("Location: index.php");
    exit();
}
?>
