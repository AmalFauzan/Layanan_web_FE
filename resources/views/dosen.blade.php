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
            <button id="inputgradesBtn">input Grades</button>
            <button id="tableMenuBtn">View Data</button>
            <button id="gradesMenuBtn">View Grades</button>
            
        </nav>
        
        <section id="inputSection" class="section active">
            <h2>Input Data Mahasiswa</h2>
            <form id="inputForm">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" id="nim" name="nim" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas:</label>
                    <select id="fakultas" name="fakultas" required>
                        <option value="Teknik">Teknik</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="programStudi">Program Studi:</label>
                    <select id="programStudi" name="program_studi" required>
                        <option value="Informatika">Informatika</option>
                        <option value="Manajemen">Manajemen</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="WaliDosen">Wali Dosen:</label>
                    <select id="WaliDosen" name="wali_dosen" required>
                        <option value="">Wali Dosen</option>
                        <option value="ASO SUDIARJO. M.KOM.">ASO SUDIARJO. M.KOM.</option>
                        <option value="RUDI HARTONO, ST., M.KOM.">RUDI HARTONO, ST., M.KOM.</option>
                        <option value="YUSUF SUMARYANA, ST., M.KOM.">YUSUF SUMARYANA, ST., M.KOM.</option>
                        <option value="IR. RUUHWAN, ST.,M.KOM.,CEH.,CHFI.">IR. RUUHWAN, ST.,M.KOM.,CEH.,CHFI.</option>
                        <option value="MISSI HIKMATYAR, M.KOM.,CHFI.">MISSI HIKMATYAR, M.KOM.,CHFI.</option>
                        <option value="AGUS SUPRIATMAN, ST., M.KOM.">AGUS SUPRIATMAN, ST., M.KOM.</option>
                        <option value="TEGUH IKHLAS RAMADHAN, M.KOM.">TEGUH IKHLAS RAMADHAN, M.KOM.</option>
                        <option value="EVI DEWI SRI MULYANI, S.KOM., M.KOM.">EVI DEWI SRI MULYANI, S.KOM., M.KOM.</option>
                        <option value="SHINTA SITI SUNDARI, S.KOM., M.KOM.">SHINTA SITI SUNDARI, S.KOM., M.KOM.</option>
                        <option value="TEUKU MUFIZAR, S.KOM., M.KOM.">TEUKU MUFIZAR, S.KOM., M.KOM.</option>
                        <option value="DEDE SYAHRUL ANWAR, S.KOM., M.KOM.">DEDE SYAHRUL ANWAR, S.KOM., M.KOM.</option>
                        <option value="CEPI RAHMAT HIDAYAT, S.KOM., M.KOM.">CEPI RAHMAT HIDAYAT, S.KOM., M.KOM.</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="angkatan">Angkatan:</label>
                    <select id="angkatan" name="angkatan" required>
                        <option value="">Tahun Masuk</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <button type="submit">Submit</button>
            </form>
            
        </section>
        

                <section id="inputGradesSection" class="section">
                    <h2>Input Nilai</h2>
                    <form id="inputGradesForm">
                        <div class="form-group">
                            <label for="nims">NIM:</label>
                                <select id="nims" name="nim" required>
                                <option value="">Select NIM</option>
                                <!-- NIM options will be populated here by JavaScript -->
                            </select>
                        </div>
                <!-- Add input fields for each course -->
                <div class="form-group">
                    <label for="matkul">Mata Kuliah :</label>
                    <select id="matkul" name="matkul" required>
                        <option value="">Mata Kuliah</option>
                        <option value="Kewarnegaraan">Kewarnegaraan</option>
                        <option value="Kewirausahaan">Kewirausahaan</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Kalkulus">Kalkulus</option>
                        <option value="Aljabar">Aljabar</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Seni Budaya">Seni Budaya</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Data Mining">Data Mining</option>
                        <option value="Programming">Programming</option>
                        <option value="Kerja Praktek">Kerja Praktek</option>
                        <option value="KKN">KKN</option>
                        <option value="SKRIPSI">SKRIPSI</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai:</label>
                    <select id="nilai" name="nilai" required>
                        <option value="">Nilai Matkul</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <button type="submit">Submit</button>
            </div>

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
                        <th>Mata Kuliah</th>
                        <th>Nilai</th>
                        <!-- Add headers for other subjects dynamically if needed -->
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
