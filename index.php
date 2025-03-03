<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- External CSS file -->
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Task Management System</h2>
        
        <!-- Task Form -->
        <div class="task-card">
            <h4 class="text-center">Add a New Task</h4>
            <form action="add_task.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Task Title</label>
                    <input type="text" name="task_title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="task_description" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Due Date</label>
                    <input type="date" name="due_date" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100">Add Task</button>
            </form>
        </div>

        <!-- Task List -->
        <div class="task-table-container mt-4">
            <h4 class="text-center">Task List</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Due Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM tasks");
                    while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['task_title'] ?></td>
                            <td><?= $row['task_description'] ?></td>
                            <td>
                                <span class="status-label status-<?= strtolower(str_replace(' ', '_', $row['status'])) ?>">
                                    <?= $row['status'] ?>
                                </span>
                            </td>
                            <td><?= $row['due_date'] ?></td>
                            <td>
                                <a href="update_task.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Update</a>
                                <a href="delete_task.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
