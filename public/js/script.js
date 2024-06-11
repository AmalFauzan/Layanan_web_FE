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

    // Collecting grades
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

    // Storing in localStorage
    let storedData = JSON.parse(localStorage.getItem('lecturerData')) || [];
    storedData.push(data);
    localStorage.setItem('lecturerData', JSON.stringify(storedData));

    displayData();
    this.reset();
});

function displayData() {
    const tableBody = document.querySelector('#dataTable tbody');
    tableBody.innerHTML = '';

    let storedData = JSON.parse(localStorage.getItem('lecturerData')) || [];
    storedData.forEach((data, index) => {
        let row = document.createElement('tr');

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
    // Implement editing functionality
}

// Display data on page load
document.addEventListener('DOMContentLoaded', displayData);
