const showStudent = () => {
  const { id, name, cgpa, program, department } = {
    id: "",
    name: "",
    cgpa: "",
    program: "",
    department: "",
  };

  const data = JSON.stringify({ id, name, cgpa, program, department });
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/studentCheck.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("student=" + data);
  xhttp.onreadystatechange = () => {
    if (this.readyState === 4 && this.status === 200) {
      const students = JSON.parse(this.responseText);
      let studentInfo = "";
      for (const { id, name, cgpa, program, department } of students) {
        studentInfo += `
          ID: ${id}<br>
          Name: ${name}<br>
          CGPA: ${cgpa}<br>
          Program: ${program}<br>
          Department: ${department}
          <hr>
        `;
      }
      document.getElementById("info").innerHTML = studentInfo;
    }
  };
};
