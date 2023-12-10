function showAddProjectForm() {
  const form = document.getElementById('add-project-form');
  form.style.display = 'block';
}

function addProject() {
  // Get form data
  const name = document.getElementById('name').value;
  const summary = document.getElementById('summary').value;
  const githubLink = document.getElementById('github_link').value;

  // Prepare AJAX request
  const xhr = new XMLHttpRequest();

  // Set request method and URL
  xhr.open('POST', '/path/to/add_project.php', true);

  // Set header for sending JSON data
  xhr.setRequestHeader('Content-Type', 'application/json');

  // Prepare JSON data
  const data = JSON.stringify({
    name,
    summary,
    githubLink
  });

  // Define a callback function for successful response
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      // Update project list with new project data
      updateProjectList();

      // Clear form fields
      document.getElementById('add-project-form').reset();

      // Hide add project form
      document.getElementById('add-project-form').style.display = 'none';

      // Show message using innerHTML
      const messageContainer = document.getElementById('message-container');
      const message = xhr.status === 200 ? `<p class="success-message">${xhr.responseText}</p>` : `<p class="error-message">Failed to add project: ${xhr.statusText}</p>`;
      messageContainer.innerHTML = message;
    }
  };

  xhr.send(data);
}

// Clear messages when the user clicks anywhere on the page
document.addEventListener('click', function () {
  const messageContainer = document.getElementById('message-container');
  messageContainer.innerHTML = '';
});
