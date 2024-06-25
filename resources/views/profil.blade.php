<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/a-k-u-n.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />
  </head>
  <body>
    <div class="akun6">
      <header class="frame-parent47">
        <div class="wrapper-group-51-wrapper">
          <div class="wrapper-group-511" onclick="showPopup()">
            <img
              class="wrapper-group-51-item"
              loading="lazy"
              alt=""
              src="./svg/group-51.svg"
              id="group"
            />
          </div>
        </div>
        <div class="frame-wrapper17">
          <div class="akun-mahasiswa-parent">
            <h3 class="akun-mahasiswa">AKUN MAHASISWA</h3>
            <img
              class="image-1-icon5"
              loading="lazy"
              alt=""
              src="./images/topi.png"
            />
          </div>
        </div>
        <div class="topbar-wrapper">
          <nav class="topbar">
            <div class="topbar-inner" id="groupContainer">
              <div class="vector-parent17" id="groupContainer">
                <img
                  class="frame-child106"
                  alt=""
                  src="./svg/rectangle-89.svg"
                />

                <img
                  class="grommet-iconsannounce6"
                  loading="lazy"
                  alt=""
                  src="./svg/grommeticonsannounce.svg"
                />

                <div class="home-wrapper2">
                  <div class="home6" id="Hometext" onclick="window.location.href='/dashboard';">Home</div>
                </div>
              </div>
            </div>
            <button class="vector-parent18" id="groupButton">
              <img
                class="frame-child107"
                alt=""
                src="./svg/rectangle-89.svg"
              />

              <img class="vector-icon7" alt="" src="./svg/vector.svg" />

              <div class="akun7">Akun</div>
            </button>
            <div class="rectangle-parent11">
              <div class="frame-child108" id="rectangle"></div>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
              <a class="logout6" id="logoutText" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </div>
          </nav>
        </div>
      </header>
        <div class="wrapper-rectangle-13-parent2">
          <div class="wrapper-rectangle-135">
            <img
              class="wrapper-rectangle-13-child3"
              alt=""
              src="./svg/rectangle-131.svg"
            />
          </div>
          <div class="vector-parent19">
            <img
              class="frame-child109"
              alt=""
              src="./svg/rectangle-142.svg"
            />

            <section class="frame-section">
              <nav class="frame-parent48">
                <div class="nama-wrapper">
                  <div class="nama">Nama</div>
                </div>
                <div class="input-fields">
                  <div class="fakultas-container">
                    <div class="vector-parent20">
                      <img
                        class="vector-icon8"
                        loading="lazy"
                        alt=""
                        src="./svg/vector-1.svg"
                      />

                      <div class="image">image</div>
                    </div>
                  </div>
                  <div class="second-row">
                    <div class="class-i-d">2203010343</div>
                    <div class="nim">NIM</div>
                    <div class="tryanda-anggita-suwito">
                      TRYANDA ANGGITA SUWITO
                    </div>
                    <div class="teguh-ikhlas-ramadhan">
                      Teguh Ikhlas Ramadhan  S.Kom., M.Kom.
                    </div>
                    <div class="faculty-box">
                      <div class="faculty-info">
                        <div class="fakultas">Fakultas</div>
                        <div class="fakultas-teknik">FAKULTAS TEKNIK</div>
                        <div class="program-studi1">Program Studi</div>
                      </div>
                      <div class="teknik-informatika">TEKNIK INFORMATIKA</div>
                      <div class="dosen-wali">Dosen Wali</div>
                    </div>
                    <div class="angkatanstatus">Angkatan/Status</div>
                    <div class="aktif">2019/Aktif</div>
                  </div>
                </div>
              </nav>
            </section>
            <div class="semester-info1">
              <div class="semester0-wrapper">
                <div class="semester0">SEMESTER:0</div>
              </div>
              <div class="kelasxx">KELAS:XX</div>
              <div class="total-sks00-wrapper">
                <div class="total-sks00">TOTAL SKS:00</div>
              </div>
              <div class="nilai-ipk00-wrapper">
                <div class="nilai-ipk00">NILAI IPK:0.0</div>
              </div>
            </div>
          </div>
        </div>
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
    <script src="./js/profil.js"></script>
  </body>
</html>
