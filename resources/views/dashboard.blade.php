<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/pengumuman-1.css" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />
</head>
<body>
    <div class="pengumuman-1">
        <header class="pengumuman-1-inner">
            <div class="frame-parent5">
                <div class="wrapper-group-50-wrapper">
                    <div class="wrapper-group-50">
                        <img
                            class="wrapper-group-50-child"
                            alt=""
                            src="./svg/group-51.svg"
                            id="group"
                        />
                    </div>
                </div>
                <div class="frame-wrapper4">
                    <div class="akademik-pengumuman-parent">
                        <h3 class="akademik-pengumuman">AKADEMIK PENGUMUMAN</h3>
                        <img
                            class="image-1-icon"
                            loading="lazy"
                            alt=""
                            src="./images/image-1@2x.png"
                        />
                    </div>
                </div>
                <div class="frame-wrapper5">
                    <main class="frame-main">
                        <div class="frame-wrapper6" id="groupContainer">
                            <div class="vector-container" id="groupContainer">
                                <img
                                    class="frame-child2"
                                    alt=""
                                    src="./svg/rectangle-89.svg"
                                />

                                <img
                                    class="grommet-iconsannounce1"
                                    alt=""
                                    src="./svg/grommeticonsannounce.svg"
                                />

                                <div class="website-link">
                                    <div class="home1">Home</div>
                                </div>
                            </div>
                        </div>
                        <div class="vector-parent1" id="groupContainer1">
                            <img
                                class="frame-child3"
                                alt=""
                                src="./svg/rectangle-89.svg"
                            />

                            <img class="vector-icon1" alt="" src="./svg/vector.svg" />

                            <div class="akun1">Akun</div>
                        </div>
                        <div class="rectangle-container">
                            <div class="frame-child4" id="rectangle"></div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <div class="logout1" id="logoutText" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</div>
                        </div>
                    </main>
                </div>
            </div>
        </header>
        <main class="frame-parent6">
            <div class="parent">
                <img
                    class="icon"
                    loading="lazy"
                    alt=""
                    src="./images/2-203010344@2x.png"
                />

                <div class="cara-terbaik-untuk-kita-dalam-parent">
                    <div class="cara-terbaik-untuk">
                        Cara terbaik untuk kita dalam mempersiapan diri agar lebih baik
                        dimasa yang akan datang, yaitu dengan cara terus belajar dan bisa
                        memberikan manfaat bagi masyarakat dilingkungan sekitar kita
                    </div>
                    <div class="p-m-b-website">
                        <div class="social-media-icons">
                            <div class="header-logo">
                                <div class="penerimaan-mahasiswa-baru">
                                    Penerimaan Mahasiswa Baru
                                </div>
                            </div>
                            <div class="httpspmbabccom" id="httpspmbabccomText">
                                ‎ https://pmbabc.com
                            </div>
                        </div>
                        <div class="logosfacebook-parent">
                            <img
                                class="logosfacebook-icon"
                                loading="lazy"
                                alt=""
                                src="./svg/logosfacebook.svg"
                            />

                            <img
                                class="skill-iconsinstagram"
                                loading="lazy"
                                alt=""
                                src="./svg/skilliconsinstagram.svg"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <button class="frame-button">
                <div class="frame-child5"></div>
                <img class="icon1" loading="lazy" alt="" src="./images/1-1@2x.png" />

                <img class="frame-icon" alt="" src="./images/frame-53@2x.png" />

                <img class="frame-child6" alt="" src="./images/frame-531@2x.png" />

                <img class="frame-child7" alt="" src="./images/frame-531@2x.png" />

                <img class="frame-child8" alt="" src="./images/frame-53@2x.png" />

                <div class="wrapper">
                    <img class="icon2" alt="" src="./images/1-1@2x.png" />
                </div>
            </button>
        </main>
    </div>

    <div id="framePopup" class="popup-overlay" style="display: none">
        <div class="text-parent">
            <div class="text"></div>
            <div class="simamik-container">
                <div class="simamik2">SIMAMIK</div>
            </div>
            <div class="frame-child14"></div>
            <div class="rectangle-parent2">
                <div class="frame-child15"></div>
                <div class="frame-wrapper10">
                    <div class="frame-parent9">
                        <div class="daftar-nilai-wrapper">
                            <div class="daftar-nilai" id="popupdAFTARNILAIText">
                                DAFTAR NILAI
                            </div>
                        </div>
                        <div class="presensi-mahasiswa-wrapper">
                            <div class="presensi-mahasiswa" id="popuppRESENSIMAHASISWAText">
                                PRESENSI MAHASISWA
                            </div>
                        </div>
                        <div class="frame-parent10">
                            <div class="jadwal-matakuliah-wrapper">
                                <div class="jadwal-matakuliah" id="popupjADWALMATAKULIAHText">
                                    JADWAL MATAKULIAH
                                </div>
                            </div>
                            <div class="frame-child16"></div>
                        </div>
                        <div class="frame-wrapper11">
                            <div class="dokumen-parent">
                                <div class="dokumen">DOKUMEN</div>
                                <div class="program-studi-wrapper">
                                    <div class="program-studi1" id="popuppROGRAMSTUDIText">
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
                        <div class="frame-parent11">
                            <div class="pembayaran-wrapper">
                                <div class="pembayaran" id="popuppEMBAYARANText">
                                    PEMBAYARAN
                                </div>
                            </div>
                            <div class="frame-child17"></div>
                        </div>
                        <div class="frame-parent12">
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
                            <div class="frame-child18"></div>
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
                <div class="frame-child19"></div>
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
                <img class="frame-child20" alt="" src="./svg/rectangle-59.svg" />

                <div class="frame-child21"></div>
                <div class="frame-child22"></div>
                <div class="frame-child23"></div>
                <div class="frame-child24"></div>
                <div class="frame-child25"></div>
                <img
                    class="group-icon"
                    loading="lazy"
                    alt=""
                    src="./svg/group.svg"
                />

                <div class="frame-child26"></div>
            </main>
        </div>
    </div>
</body>
</html>
