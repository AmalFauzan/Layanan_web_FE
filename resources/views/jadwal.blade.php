<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/j-a-d-w-a-l.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />
  </head>
  <body>
    <div class="jadwal">
      <div class="wrapper-rectangle-136">
        <img
          class="wrapper-rectangle-13-child4"
          alt=""
          src="./svg/rectangle-132.svg"
        />
      </div>
      <img
        class="jadwal-child"
        alt=""
        src="./svg/rectangle-143.svg"
        id="rectangle1"
      />

      <div class="wrapper-rectangle-31"onclick="showPopup()">
        <img
          class="wrapper-rectangle-31-child"
          alt=""
          src="./svg/rectangle-143.svg"
        />
      </div>
      <div class="wrapper-group-294">
        <div class="kotak-putih">
          <!-- Tabel Jadwal Matakuliah -->
          <div class="schedule-container">
            <table class="schedule-table">
              <thead>
                <tr>
                  <th>Hari</th>
                  <th>Mata Kuliah</th>
                  <th>Ruangan</th>
                  <th>Waktu</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Senin</td>
                  <td>Kewarganegaraan</td>
                  <td>Ruangan 101</td>
                  <td>08:00 - 09:30</td>
                </tr>
                <tr>
                  <td>Senin</td>
                  <td>Bahasa Indonesia</td>
                  <td>Ruangan 102</td>
                  <td>10:00 - 11:30</td>
                </tr>
                <tr>
                  <td>Selasa</td>
                  <td>Bahasa Inggris</td>
                  <td>Ruangan 103</td>
                  <td>08:00 - 09:30</td>
                </tr>
                <tr>
                  <td>Rabu</td>
                  <td>Kalkulus dan Aljabar</td>
                  <td>Ruangan 104</td>
                  <td>08:00 - 09:30</td>
                </tr>
                <tr>
                  <td>Kamis</td>
                  <td>Kewirausahaan</td>
                  <td>Ruangan 105</td>
                  <td>08:00 - 09:30</td>
                </tr>
                <tr>
                  <td>Jumat</td>
                  <td>Bahasa Indonesia</td>
                  <td>Ruangan 106</td>
                  <td>08:00 - 09:30</td>
                </tr>
                <tr>
                  <td>Sabtu</td>
                  <td>Kewarganegaraan</td>
                  <td>Ruangan 107</td>
                  <td>08:00 - 09:30</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <img
          class="wrapper-group-29-child2"
          alt=""
          src="./svg/group-29.svg"
        />
      </div>
      <div class="rectangle-parent12">
        <div class="frame-child110" id="rectangle"></div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        <a class="logout7" id="logoutText" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
      </div>
      <div class="jadwal-matakuliah-parent">
        <h2 class="jadwal-matakuliah1">JADWAL MATAKULIAH</h2>
        <img
          class="image-1-icon6"
          loading="lazy"
          alt=""
          src="./images/image-1@2x.png"
        />
      </div>
      <img
        class="icon-park-solidlist-bottom4"
        loading="lazy"
        alt=""
        src="./svg/iconparksolidlistbottom.svg"
      />

      <div class="wrapper-rectangle-784">
        <img
          class="wrapper-rectangle-78-child2"
          loading="lazy"
          alt=""
          src="./svg/rectangle-78.svg"
          id="rectangle3"
        />
      </div>
      <b class="quiit">QUIIT</b>
      <b class="quit1">QUIT</b>
      <button class="vector-parent21" id="groupButton">
        <img class="frame-child111" alt="" src="./svg/rectangle-89.svg" />

        <img class="vector-icon9" alt="" src="./svg/vector.svg" />
        <div class="akun8" id="akunButton" onclick="window.location.href='/profil';">Akun</div>
      </button>
      <div class="frame-parent49" id="groupContainer2">
        <div class="vector-parent22" id="groupContainer">
          <img class="frame-child112" alt="" src="./svg/rectangle-89.svg" />
          <div class="home7" id="Hometext" onclick="window.location.href='/dashboard';">Home</div>
        </div>
        <img
          class="grommet-iconsannounce7"
          loading="lazy"
          alt=""
          src="./svg/grommeticonsannounce.svg"
        />
      </div>
    </div>

    <div id="framePopup" class="popup-overlay" style="display: none">
      <div class="text-parent">
        <div class="text"></div>
        <div class="simamik-container">
          <div class="simamik2">SIMAMIK</div>
        </div>
        <div class="frame-child9"></div>
        <div class="rectangle-parent1">
          <div class="frame-child10"></div>
          <div class="frame-wrapper7">
            <div class="frame-parent7">
              <div class="daftar-nilai-wrapper">
                <div class="daftar-nilai" id="popupdAFTARNILAIText">
                  DAFTAR NILAI
                </div>
              </div>
              <div class="frame-parent8">
                <div class="jadwal-matakuliah-wrapper">
                  <div class="jadwal-matakuliah" id="popupjADWALMATAKULIAHText">
                    JADWAL MATAKULIAH
                  </div>
                </div>
              </div>
              <div class="frame-wrapper8">
                <div class="dokumen-parent">
                  <div class="dokumen">DOKUMEN</div>
                  <div class="program-studi-wrapper">
                    <div class="program-studi" id="popuppROGRAMSTUDIText">
                      PROGRAM STUDI
                    </div>
                  </div>
                </div>
              </div>
              <div class="kartu-ujian-wrapper">
                <div class="kartu-ujian" id="popupkARTUUJIANText">
                  KARTU UJIAN
                </div>
              </div>
              <div class="frame-parent9">
                <div class="pembayaran-wrapper">
                  <div class="pembayaran" id="popuppEMBAYARANText">
                    PEMBAYARAN
                  </div>
                </div>
              </div>
              <div class="frame-parent10">
                <div class="hubungi-jurusan-wrapper">
                  <div class="hubungi-jurusan">HUBUNGI JURUSAN</div>
                </div>
                <div class="companynetworkoutlookcom-wrapper">
                  <div
                    class="companynetworkoutlookcom"
                    id="popupcompanynetworkoutlookcomText"
                  >
                    company.network@outlook.com
                  </div>
                </div>
              </div>
              <div class="about-us-wrapper">
                <div class="about-us2">ABOUT US</div>
              </div>
            </div>
          </div>
        </div>
        <div class="visi-misi-wrapper">
          <div class="visi-misi" id="popupvISIMISIText">VISI MISI</div>
        </div>
        <div class="rectangle-wrapper">
        </div>
        <main class="tab-component-parent">
          <section class="tab-component">
            <img
              class="tab-component-child"
              alt=""
              src="./svg/rectangle-58.svg"
            />

            <div class="tab-component-item"></div>
            <div class="tab-component-inner"></div>
          </section>
          <img class="frame-child15" alt="" src="./svg/rectangle-59.svg" />

          <div class="frame-child16"></div>
          <div class="frame-child17"></div>
          <div class="frame-child18"></div>
          <div class="frame-child19"></div>
          <div class="frame-child20"></div>
          <img
            class="group-icon"
            loading="lazy"
            alt=""
            src="./svg/group.svg"
          />

          <div class="frame-child21"></div>
        </main>
      </div>
    </div>

    <script src="./js/nilai.js"></script>
  </body>
</html>
