<?php
session_start();
require('../controller/sessionCheck.php');

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: ../controller/logout.php");
    exit();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../model/project_model.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user input
    $NAME = filter_input(INPUT_POST, 'NAME', FILTER_SANITIZE_STRING);
    $summary = filter_input(INPUT_POST, 'summary', FILTER_SANITIZE_STRING);
    $githubLink = filter_input(INPUT_POST, 'github_link', FILTER_SANITIZE_URL);

    // Validate required fields
    if (empty($NAME) || empty($summary) || empty($githubLink)) {
        echo "All fields are required.";
        exit();
    }

    // Call the addProject function
    $addResult = addProject($NAME, $summary, $githubLink);

    // Send response based on the result
    if ($addResult) {
        echo "Project added successfully.";
    } else {
        echo "Failed to add project.";
    }
}
?>

<html lang="en">
<head>
    <title>Add Project</title>
</head>
<body>
    <a href="code.php">Back</a> |

    <h2>Add New Project</h2>

    <form method="post" action="add_project.php">
        <label for="NAME">Name:</label>
        <input type="text" name="NAME" required><br>

        <label for="summary">Summary:</label>
        <textarea name="summary" required></textarea><br>

        <label for="github_link">GitHub Link:</label>
        <input type="text" name="github_link" required><br>

        <input type="submit" value="Add Project">
    </form>
    <a href="../controller/logout.php">Logout</a>
</body>
</html>
