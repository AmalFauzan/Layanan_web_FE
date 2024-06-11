document.getElementById('inputMenuBtn').addEventListener('click', function() {
    document.getElementById('inputSection').style.display = 'block';
    document.getElementById('tableSection').style.display = 'none';
});

document.getElementById('tableMenuBtn').addEventListener('click', function() {
    document.getElementById('inputSection').style.display = 'none';
    document.getElementById('tableSection').style.display = 'block';
    displayData();
});

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
    document.getElementById('inputSection').style.display = 'none';
    document.getElementById('tableSection').style.display = 'block';
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
    document.getElementById('inputSection').style.display = 'block';
    document.getElementById('tableSection').style.display = 'none';
}

// Display data on page load
document.addEventListener('DOMContentLoaded', displayData);
