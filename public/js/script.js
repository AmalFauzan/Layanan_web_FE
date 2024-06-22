document.addEventListener('DOMContentLoaded', function() {
    const inputForm = document.getElementById('inputForm');
    const inputGradesForm = document.getElementById('inputGradesForm');
    const inputMenuBtn = document.getElementById('inputMenuBtn');
    const inputgradesBtn = document.getElementById('inputgradesBtn');
    const tableMenuBtn = document.getElementById('tableMenuBtn');
    const gradesMenuBtn = document.getElementById('gradesMenuBtn');
    const inputSection = document.getElementById('inputSection');
    const tableSection = document.getElementById('tableSection');
    const gradesSection = document.getElementById('gradesSection');
    const inputGradesSection = document.getElementById('inputGradesSection');
    const dataTable = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
    const gradesTable = document.getElementById('gradesTable').getElementsByTagName('tbody')[0];
    const nimsSelect = document.getElementById('nims');

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
        fetchNims();
    });

    inputForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(inputForm);
        const data = {};
        formData.forEach((value, key) => data[key] = value);

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
            alert(`Error: ${JSON.parse(error.message)}`);
        });
    });

    inputGradesForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(inputGradesForm);
        const data = {};
        formData.forEach((value, key) => data[key] = value);

        console.log('Submitting Grades Data:', data); // Debugging step to check form data before submission

        fetch('http://localhost:8001/api/students/grades', {
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
            inputGradesForm.reset();
        }).catch(error => {
            console.error('Error:', error);
            alert(`Error: ${JSON.parse(error.message)}`);
        });
    });

    function fetchStudentData() {
        fetch('http://localhost:8001/api/students')
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
        fetch('http://localhost:8001/api/students/grades')
            .then(response => response.json())
            .then(data => {
                gradesTable.innerHTML = '';
                data.forEach(grade => {
                    const row = gradesTable.insertRow();
                    row.insertCell(0).textContent = grade.student.nama;
                    row.insertCell(1).textContent = grade.student.nim;
                    row.insertCell(2).textContent = grade.matkul;
                    row.insertCell(3).textContent = grade.nilai;
                });
            }).catch(error => {
                console.error('Error fetching grades:', error);
            });
    }

    function fetchNims() {
        fetch('http://localhost:8001/api/students/nims')
            .then(response => response.json())
            .then(data => {
                console.log('Fetched NIMs:', data); // Debugging step to check if data is being fetched correctly
                nimsSelect.innerHTML = '<option value="">Select NIM</option>';
                data.forEach(student => {
                    const option = document.createElement('option');
                    option.value = student.nim;
                    option.text = student.nim;
                    nimsSelect.appendChild(option);
                });
            }).catch(error => {
                console.error('Error fetching NIMs:', error);
            });
    }
});
