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
    const filterFakultas = document.getElementById('filterFakultas');
    const filterProgramStudi = document.getElementById('filterProgramStudi');
    const filterAngkatan = document.getElementById('filterAngkatan');
    const applyFiltersBtn = document.getElementById('applyFiltersBtn');
    let studentData = [];
    let gradesData = [];
    let currentStudentId = null;

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

        let url = 'http://localhost:8001/api/students';
        let method = 'POST';

        if (currentStudentId) {
            url = `http://localhost:8001/api/students/${currentStudentId}`;
            method = 'PUT';
        }

        fetch(url, {
            method: method,
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
            currentStudentId = null; // Reset the current student ID
            fetchStudentData(); // Refresh the data table
            inputSection.classList.remove('active');
            tableSection.classList.add('active');
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
            fetchGradesData(); // Refresh the grades table
        }).catch(error => {
            console.error('Error:', error);
            alert(`Error: ${JSON.parse(error.message)}`);
        });
    });

    function fetchStudentData() {
        fetch('http://localhost:8001/api/students')
            .then(response => response.json())
            .then(data => {
                studentData = data; // Save fetched data for filtering
                displayStudentData(studentData);
            }).catch(error => {
                console.error('Error fetching students:', error);
            });
    }

    function fetchGradesData() {
        fetch('http://localhost:8001/api/students/grades')
            .then(response => response.json())
            .then(data => {
                gradesData = data; // Save fetched data for filtering
                displayGradesData(gradesData);
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

    function displayStudentData(data) {
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
            row.insertCell(7).innerHTML = `
                <button class="edit-btn" data-id="${student.id}">Edit</button>
                <button class="delete-btn" data-id="${student.id}">Delete</button>`;
        });
        addEditDeleteListeners();
    }

    function displayGradesData(data) {
        gradesTable.innerHTML = '';
        data.forEach(grade => {
            const row = gradesTable.insertRow();
            row.insertCell(0).textContent = grade.student.nama;
            row.insertCell(1).textContent = grade.student.nim;
            row.insertCell(2).textContent = grade.matkul;
            row.insertCell(3).textContent = grade.nilai;
        });
    }

    function filterStudentData() {
        const selectedFakultas = filterFakultas.value;
        const selectedProgramStudi = filterProgramStudi.value;
        const selectedAngkatan = filterAngkatan.value;
        let filteredData = studentData;

        console.log('Filtering by:', { selectedFakultas, selectedProgramStudi, selectedAngkatan }); // Debugging step

        if (selectedFakultas) {
            filteredData = filteredData.filter(student => student.fakultas === selectedFakultas);
        }

        if (selectedProgramStudi) {
            filteredData = filteredData.filter(student => student.program_studi === selectedProgramStudi);
        }

        if (selectedAngkatan) {
            filteredData = filteredData.filter(student => student.angkatan === parseInt(selectedAngkatan));
        }

        displayStudentData(filteredData);
    }

    function filterGradesData() {
        const selectedMatkul = filterMatkul.value;
        const selectedNilai = filterNilai.value;
        let filteredData = gradesData;

        if (selectedMatkul) {
            filteredData = filteredData.filter(grade => grade.matkul === selectedMatkul);
        }

        if (selectedNilai) {
            filteredData = filteredData.filter(grade => grade.nilai === parseInt(selectedNilai, 10));
        }

        displayGradesData(filteredData);
    }

    applyFiltersBtn.addEventListener('click', function() {
        if (tableSection.classList.contains('active')) {
            filterStudentData();
        } else if (gradesSection.classList.contains('active')) {
            filterGradesData();
        }
    });

    document.querySelectorAll('#gradesTable thead th[data-sort]').forEach(th => {
        th.addEventListener('click', function() {
            const sortKey = th.getAttribute('data-sort');
            sortGradesData(sortKey);
        });
    });

    function sortGradesData(sortKey) {
        gradesData.sort((a, b) => {
            if (a.student[sortKey] < b.student[sortKey]) {
                return -1;
            }
            if (a.student[sortKey] > b.student[sortKey]) {
                return 1;
            }
            return 0;
        });
        displayGradesData(gradesData);
    }

    function addEditDeleteListeners() {
        document.querySelectorAll('.edit-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const studentId = this.getAttribute('data-id');
                editStudent(studentId);
            });
        });

        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const studentId = this.getAttribute('data-id');
                deleteStudent(studentId);
            });
        });
    }

    function editStudent(studentId) {
        fetch(`http://localhost:8001/api/students/${studentId}`)
            .then(response => response.json())
            .then(student => {
                currentStudentId = studentId; // Set the current student ID

                // Populate the form with the student data for editing
                document.getElementById('nama').value = student.nama;
                document.getElementById('nim').value = student.nim;
                document.getElementById('username').value = student.username;
                document.getElementById('password').value = ''; // Leave password blank
                document.getElementById('fakultas').value = student.fakultas;
                document.getElementById('programStudi').value = student.program_studi;
                document.getElementById('WaliDosen').value = student.wali_dosen;
                document.getElementById('angkatan').value = student.angkatan;

                // Show the input section for editing
                inputSection.classList.add('active');
                tableSection.classList.remove('active');
                gradesSection.classList.remove('active');
                inputGradesSection.classList.remove('active');
            });
    }

    function deleteStudent(studentId) {
        if (confirm('Are you sure you want to delete this student?')) {
            fetch(`http://localhost:8001/api/students/${studentId}`, {
                method: 'DELETE'
            }).then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw new Error(JSON.stringify(errorData));
                    });
                }
                return response.json();
            }).then(data => {
                alert(data.message);
                fetchStudentData(); // Refresh the data table
            }).catch(error => {
                console.error('Error:', error);
                alert(`Error: ${JSON.parse(error.message)}`);
            });
        }
    }
});
