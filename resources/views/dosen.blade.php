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
                <input type="hidden" id="student_id" name="student_id">
                <!-- Add input fields for each course -->
                
                <div class="form-group">
                    <label for="kewarganegaraan">kewarganegaraan:</label>
                    <select id="kewarganegaraan">
                        <option value="">Nilai kewarganegaraan</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>


                <div class="form-group">
                    <label for="kewirausahaan">kewirausahaan:</label>
                    <select id="kewirausahaan">
                        <option value="">Nilai kewirausahaan</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                       <option value="1">D</option>
                       <option value="0">F</option>
                       <!-- Add more options as needed -->
                </select>
            </div>
    
                <div class="form-group">
                    <label for="indo">Bahasa Indonesia:</label>
                    <select id="indo">
                        <option value="">Nilai Bahasa Indonesia</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="inggris">Bahasa Inggris:</label>
                    <select id="inggris">
                        <option value="">Nilai Bahasa Inggris</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="kalkulus">Kalkulus:</label>
                    <select id="kalkulus">
                        <option value="">Nilai Kalkulus</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="aljabar">Aljabar:</label>
                    <select id="aljabar">
                        <option value="">Nilai Aljabar</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="mtk">Matematika:</label>
                    <select id="mtk">
                        <option value="">Nilai Matematika</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="seni">Seni Budaya:</label>
                    <select id="seni">
                        <option value="">Nilai Seni Budaya</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="fisika">Fisika:</label>
                    <select id="fisika">
                        <option value="">Nilai Fisika</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="kimia">Kimia:</label>
                    <select id="kimia">
                        <option value="">Nilai Kimia</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="jarkom">Jaringan Komputer:</label>
                    <select id="jarkom">
                        <option value="">Nilai Jaringan Komputer</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="pemkom">Pemrograman Komputer:</label>
                    <select id="pemkom">
                        <option value="">Nilai Pemrograman Komputer</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="jarkom">Jaringan Komputer:</label>
                    <select id="jarkom">
                        <option value="">Nilai Jaringan Komputer</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="web">Layanan Web:</label>
                    <select id="web">
                        <option value="">Nilai Layanan Web</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="statistik">Statistik:</label>
                    <select id="statistik">
                        <option value="">Nilai Statistik</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="grafika">Grafika Komputer:</label>
                    <select id="grafika">
                        <option value="">Nilai Grafika Komputer</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="mining">Data Mining:</label>
                    <select id="mining">
                        <option value="">Nilai Data Mining</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="algoritma">Algoritma:</label>
                    <select id="algoritma">
                        <option value="">Nilai Algoritma</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="sisdig">Sistem Digital:</label>
                    <select id="sisdig">
                        <option value="">Nilai Sistem Digital</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="kp">Kerja Praktek:</label>
                    <select id="kp">
                        <option value="">Nilai Kerja Praktek</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="kkn">Kuliah Kerja Nyata:</label>
                    <select id="kkn">
                        <option value="">Nilai Kuliah Kerja Nyata</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="skripsi">Skripsi:</label>
                    <select id="skripsi">
                        <option value="">Nilai Skripsi</option>
                        <option value="4">A</option>
                        <option value="3">B</option>
                        <option value="2">C</option>
                        <option value="1">D</option>
                        <option value="0">F</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
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
                        <th>Kewarganegaraan</th>
                        <th>Kewirausahaan</th>
                        <th>Bahasa Indonesia</th>
                        <th>Bahasa Inggris</th>
                        <th>Kalkulus</th>
                        <th>Aljabar</th>
                        <th>Matematika</th>
                        <th>Seni Budaya</th>
                        <th>Fisika</th>
                        <th>Kimia</th>
                        <th>Jaringan Komputer</th>
                        <th>Pemrograman Komputer</th>
                        <th>Jaringan Komputer</th>
                        <th>Layanan Web</th>
                        <th>Statistik</th>
                        <th>Grafika Komputer</th>
                        <th>Data Mining</th>
                        <th>Algoritma</th>
                        <th>Sistem Digital</th>
                        <th>Kerja Praktek</th>
                        <th>Kuliah Kerja Nyata</th>
                        <th>Skripsi</th>
                        <!-- Add headers for other subjects -->
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
