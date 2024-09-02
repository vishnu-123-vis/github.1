<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];
    
    // Add task to session
    $_SESSION['tasks'][] = $task;
}

// Redirect back to the main page
header('Location: index.php');
exit();
?>

