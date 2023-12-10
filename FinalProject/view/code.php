<?php

session_start();
require('../controller/sessionCheck.php');
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "Welcome, $username!";
}
?>

<?php
require_once('../model/project_model.php');

if (isset($_GET['delete_id'])) {
  $deleteId = $_GET['delete_id'];
  $deleteResult = deleteProject($deleteId);

  if ($deleteResult) {
    echo "Project deleted successfully.";
  } else {
    echo "Failed to delete project.";
  }
}

$projects = getAllProject();
?>

<html lang="en">
<head>
  <title>Code Repository</title>
</head>
<body>
  <a href="loggedDashboard.php">Back</a> |

  <table id="project-list" border=1>
    <thead>
      <tr>
        <th>Name</th>
        <th>Summary</th>
        <th>GitHub Link</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($projects as $project): ?>
        <tr id="project-row-<?php echo $project['id']; ?>">
          <td><?php echo isset($project['NAME']) ? $project['NAME'] : 'N/A'; ?></td>
          <td><?php echo isset($project['summary']) ? $project['summary'] : 'N/A'; ?></td>
          <td><?php echo isset($project['github_link']) ? $project['github_link'] : 'N/A'; ?></td>
          <td>
            <a href='edit.php?id=<?php echo $project['id']; ?>'>EDIT</a> |
            <a href="#" onclick="deleteProject(<?php echo $project['id']; ?>)">DELETE</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <br>
  <button onclick="showAddProjectForm()">Add Project</button>
  <div id="add-project-form" style="display: none;">
    <h3>Add New Project</h3>
    <form id="add-project-form">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br>

      <label for="summary">Summary:</label>
      <textarea id="summary" name="summary" required></textarea><br>

      <label for="github_link">GitHub Link:</label>
      <input type="text" id="github_link" name="github_link" required><br>

      <input type="button" value="Add Project" onclick="addProject()">
    </form>
  </div>

  <div id="message-container"></div>

  <script src="script.js"></script>
</body>
</html>
