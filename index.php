<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        
        <!-- Form to add new tasks -->
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <button type="submit">Add Task</button>
        </form>

        <?php
        // Start session to store tasks
        session_start();
        
        // Initialize tasks array if not already set
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }

        // Display tasks
        if (!empty($_SESSION['tasks'])) {
            echo "<ul>";
            foreach ($_SESSION['tasks'] as $key => $task) {
                echo "<li>$task <a href='delete_task.php?key=$key'>Delete</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No tasks added yet!</p>";
        }
        ?>
    </div>
</body>
</html>
