<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer's Interface</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Lecturer's Interface</h1>
        </header>
        <nav>
            <button id="inputMenuBtn">Input Data</button>
            <button id="tableMenuBtn">View Data</button>
            <button id="gradesMenuBtn">View Grades</button>
        </nav>
        
        <section id="inputSection" class="section active">
            <h2>Input Data Dosen</h2>
            <form id="inputForm">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" id="nim" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" required>
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas:</label>
                    <select id="fakultas" required>
                        <option value="Teknik">Teknik</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="programStudi">Program Studi:</label>
                    <select id="programStudi" required>
                        <option value="Informatika">Informatika</option>
                        <option value="Manajemen">Manajemen</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="waliDosen">Wali Dosen:</label>
                    <input type="text" id="waliDosen" required>
                </div>
                <div class="form-group">
                    <label for="angkatan">Angkatan:</label>
                    <input type="number" id="angkatan" min="2000" max="2100" required>
                </div>

                <h3>Input Nilai</h3>
                <!-- Add input fields for each course -->
                <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan:</label>
                    <input type="number" id="kewarganegaraan" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="kewirausahaan">Kewirausahaan:</label>
                    <input type="number" id="kewirausahaan" min="0" max="100">
                </div>
                <!-- Repeat similar divs for all other courses... -->

                <button type="submit">Submit</button>
            </form>
        </section>
        
        <section id="tableSection" class="section">
            <h2>Data Tersimpan</h2>
            <table id="dataTable">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Username</th>
                        <th>Fakultas</th>
                        <th>Program Studi</th>
                        <th>Wali Dosen</th>
                        <th>Angkatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated here by JavaScript -->
                </tbody>
            </table>
        </section>

        <section id="gradesSection" class="section">
            <h2>Data Nilai</h2>
            <table id="gradesTable">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kewarganegaraan</th>
                        <th>Kewirausahaan</th>
                        <!-- Add headers for other subjects -->
                        <th>Aksi</th> <!-- Added for edit and delete actions -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Grade data will be populated here by JavaScript -->
                </tbody>
            </table>
        </section>        
    </div>

    <script src="./js/script.js"></script>
</body>
</html>
