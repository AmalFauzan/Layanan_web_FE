document.getElementById('inputMenuBtn').addEventListener('click', function() {
    showSection('inputSection');
});

document.getElementById('tableMenuBtn').addEventListener('click', function() {
    showSection('tableSection');
    displayData();
});

document.getElementById('gradesMenuBtn').addEventListener('click', function() {
    showSection('gradesSection');
    displayGrades();
});

function showSection(sectionId) {
    document.querySelectorAll('.section').forEach(section => {
        section.classList.remove('active');
        if (section.id === sectionId) {
            section.classList.add('active');
        }
    });
}

document.getElementById('inputForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const nama = document.getElementById('nama').value;
    const nim = document.getElementById('nim').value;
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const fakultas = document.getElementById('fakultas').value;
    const programStudi = document.getElementById('programStudi').value;
    const waliDosen = document.getElementById('waliDosen').value;
    const angkatan = document.getElementById('angkatan').value;

    const grades = {
        kewarganegaraan: document.getElementById('kewarganegaraan').value,
        kewirausahaan: document.getElementById('kewirausahaan').value,
        // Add other fields similarly
    };

    const data = {
        nama,
        nim,
        username,
        password,
        fakultas,
        programStudi,
        waliDosen,
        angkatan,
        grades
    };

    let storedData = JSON.parse(localStorage.getItem('lecturerData')) || [];
    const editIndex = document.getElementById('inputForm').dataset.editIndex;
    if (editIndex !== undefined) {
        storedData[editIndex] = data;
        document.getElementById('inputForm').removeAttribute('data-edit-index');
    } else {
        storedData.push(data);
    }
    localStorage.setItem('lecturerData', JSON.stringify(storedData));

    displayData();
    this.reset();
    showSection('tableSection');
});

function displayData() {
    const storedData = JSON.parse(localStorage.getItem('lecturerData')) || [];
    const tableBody = document.querySelector('#dataTable tbody');
    tableBody.innerHTML = '';

    storedData.forEach((data, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${data.nama}</td>
            <td>${data.nim}</td>
            <td>${data.username}</td>
            <td>${data.fakultas}</td>
            <td>${data.programStudi}</td>
            <td>${data.waliDosen}</td>
            <td>${data.angkatan}</td>
            <td>
                <button onclick="editData(${index})">Edit</button>
                <button onclick="deleteData(${index})">Delete</button>
                <button onclick="viewGrades(${index})">View Grades</button>
            </td>
        `;
        tableBody.appendChild(row);
    });
}

function deleteData(index) {
    let storedData = JSON.parse(localStorage.getItem('lecturerData'));
    storedData.splice(index, 1);
    localStorage.setItem('lecturerData', JSON.stringify(storedData));
    displayData();
}

function editData(index) {
    let storedData = JSON.parse(localStorage.getItem('lecturerData'));
    const data = storedData[index];

    document.getElementById('nama').value = data.nama;
    document.getElementById('nim').value = data.nim;
    document.getElementById('username').value = data.username;
    document.getElementById('password').value = data.password;
    document.getElementById('fakultas').value = data.fakultas;
    document.getElementById('programStudi').value = data.programStudi;
    document.getElementById('waliDosen').value = data.waliDosen;
    document.getElementById('angkatan').value = data.angkatan;

    document.getElementById('kewarganegaraan').value = data.grades.kewarganegaraan;
    document.getElementById('kewirausahaan').value = data.grades.kewirausahaan;
    // Set values for other grades similarly

    document.getElementById('inputForm').dataset.editIndex = index;
    showSection('inputSection');
}

function viewGrades(index) {
    showSection('gradesSection');
    const storedData = JSON.parse(localStorage.getItem('lecturerData'));
    const data = storedData[index];
    const gradesTableBody = document.querySelector('#gradesTable tbody');
    gradesTableBody.innerHTML = `
        <tr>
            <td>${data.nama}</td>
            <td>${data.nim}</td>
            <td>${data.grades.kewarganegaraan}</td>
            <td>${data.grades.kewirausahaan}</td>
            <!-- Add other grade columns similarly -->
            <td>
                <button onclick="editData(${index})">Edit</button>
                <button onclick="deleteData(${index})">Delete</button>
            </td>
        </tr>
    `;
}

function displayGrades() {
    const storedData = JSON.parse(localStorage.getItem('lecturerData')) || [];
    const gradesTableBody = document.querySelector('#gradesTable tbody');
    gradesTableBody.innerHTML = '';

    storedData.forEach((data, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${data.nama}</td>
            <td>${data.nim}</td>
            <td>${data.grades.kewarganegaraan}</td>
            <td>${data.grades.kewirausahaan}</td>
            <!-- Add other grade columns similarly -->
            <td>
                <button onclick="editData(${index})">Edit</button>
                <button onclick="deleteData(${index})">Delete</button>
            </td>
        `;
        gradesTableBody.appendChild(row);
    });
}



function displayGrades() {
    const storedData = JSON.parse(localStorage.getItem('lecturerData')) || [];
    const gradesTableBody = document.querySelector('#gradesTable tbody');
    gradesTableBody.innerHTML = '';

    storedData.forEach(data => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${data.nama}</td>
            <td>${data.nim}</td>
            <td>${data.grades.kewarganegaraan}</td>
            <td>${data.grades.kewirausahaan}</td>
            <!-- Add other grade columns similarly -->
        `;
        gradesTableBody.appendChild(row);
    });
}

// Display data on page load
document.addEventListener('DOMContentLoaded', function() {
    displayData();
    displayGrades();
});
