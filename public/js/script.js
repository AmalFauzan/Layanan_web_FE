document.addEventListener('DOMContentLoaded', function() {
    const inputForm = document.getElementById('inputForm');
    const inputMenuBtn = document.getElementById('inputMenuBtn');
    const inputgradesBtn = document.getElementById('inputgradesBtn');
    const tableMenuBtn = document.getElementById('tableMenuBtn');
    const gradesMenuBtn = document.getElementById('gradesMenuBtn');
    const inputSection = document.getElementById('inputSection');
    const tableSection = document.getElementById('tableSection');
    const gradesSection = document.getElementById('gradesSection');
    const dataTable = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
    const gradesTable = document.getElementById('gradesTable').getElementsByTagName('tbody')[0];
    const inputGradesForm = document.getElementById('inputGradesForm');
    const inputGradesSection = document.getElementById('inputGradesSection');

    

    inputMenuBtn.addEventListener('click', function() {
        inputSection.classList.add('active');
        tableSection.classList.remove('active');
        gradesSection.classList.remove('active');
        inputGradesSection.classList.remove('active');
        fetchStudentData();
    });

    tableMenuBtn.addEventListener('click', function() {
        inputSection.classList.remove('active');
        tableSection.classList.add('active');
        gradesSection.classList.remove('active');
        inputGradesSection.classList.remove('active');
        fetchStudentData();
    });

    gradesMenuBtn.addEventListener('click', function() {
        inputSection.classList.remove('active');
        tableSection.classList.remove('active');
        gradesSection.classList.add('active');
        inputGradesSection.classList.remove('active');
        fetchGradesData();
    });

    inputgradesBtn.addEventListener('click', function() {
        inputSection.classList.remove('active');
        tableSection.classList.remove('active');
        gradesSection.classList.remove('active');
        inputGradesSection.classList.add('active');
        fetchGradesData();
    });

    inputGradesForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const studentId = document.getElementById('student_id').value;
        const gradesData = new FormData(inputGradesForm);
        const grades = {};

        gradesData.forEach((value, key) => {
            if (key !== 'student_id') {
                grades[key] = value;
            }
        });

        fetch(`http://localhost:8001/api/students/${studentId}/grades`, { // Adjust URL if needed
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                student_id: studentId,
                grades: grades
            })
        }).then(response => response.json())
          .then(data => {
              alert(data.message);
              inputGradesForm.reset();
          });
    });

    inputForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(inputForm);
        const data = {};
        formData.forEach((value, key) => data[key] = value);
        
        console.log(data); // Log the form data for inspection
    
        fetch('http://localhost:8001/api/students', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(response => {
            if (!response.ok) {
                return response.json().then(errorData => {
                    throw new Error(JSON.stringify(errorData));
                });
            }
            return response.json();
        }).then(data => {
            alert(data.message);
            inputForm.reset();
        }).catch(error => {
            console.error('Error:', error);
            alert(`Error: ${JSON.parse(error.message)}`); // Display detailed error to the user
        });
    });
    
    

    function fetchStudentData() {
        fetch('http://localhost:8001/api/students') // Sesuaikan URL dengan backend Anda
            .then(response => response.json())
            .then(data => {
                dataTable.innerHTML = '';
                data.forEach(student => {
                    const row = dataTable.insertRow();
                    row.insertCell(0).innerText = student.nama;
                    row.insertCell(1).innerText = student.nim;
                    row.insertCell(2).innerText = student.username;
                    row.insertCell(3).innerText = student.fakultas;
                    row.insertCell(4).innerText = student.program_studi;
                    row.insertCell(5).innerText = student.wali_dosen;
                    row.insertCell(6).innerText = student.angkatan;
                    row.insertCell(7).innerHTML = '<button class="edit-btn">Edit</button> <button class="delete-btn">Delete</button>';
                });
            });
    }

    function fetchGradesData() {
        fetch('http://localhost:8001/api/students/grades') // Adjust URL if needed
            .then(response => response.json())
            .then(data => {
                gradesTable.innerHTML = '';
                data.forEach(student => {
                    let row = gradesTable.insertRow();
                    row.insertCell(0).textContent = student.nama;
                    row.insertCell(1).textContent = student.nim;
                    student.grades.forEach(grade => {
                        row.insertCell().textContent = grade.grade;
                    });
                });
            });
    }
});
