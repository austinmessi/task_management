<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_title = $_POST['task_title'];
    $task_description = $_POST['task_description'];
    $due_date = $_POST['due_date'];

    $sql = "INSERT INTO tasks (task_title, task_description, due_date) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $task_title, $task_description, $due_date);
    $stmt->execute();
    
    header("Location: index.php");
    exit();
}
?>
