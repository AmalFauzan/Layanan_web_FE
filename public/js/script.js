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

    inputForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(inputForm);
        
        fetch('http://localhost:8001/api/students', { // Sesuaikan URL dengan backend Anda
            method: 'POST',
            body: formData
        }).then(response => response.json())
          .then(data => {
              alert(data.message);
              inputForm.reset();
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
        fetch('http://localhost:8001/api/students/grades') // Sesuaikan URL dengan backend Anda
            .then(response => response.json())
            .then(data => {
                gradesTable.innerHTML = '';
                data.forEach(student => {
                    const row = gradesTable.insertRow();
                    row.insertCell(0).innerText = student.nama;
                    row.insertCell(1).innerText = student.nim;
                    row.insertCell(2).innerText = student.kewarganegaraan;
                    row.insertCell(3).innerText = student.kewirausahaan;
                    // Tambahkan kursus lainnya di sini...
                    row.insertCell(4).innerHTML = '<button class="edit-btn">Edit</button> <button class="delete-btn">Delete</button>';
                });
            });
    }
});
