  document.addEventListener('DOMContentLoaded', (event) => {
    // Show the popup
    function showPopup() {
      document.getElementById('framePopup').style.display = 'flex';
    }

    // Hide the popup if clicking outside the content area
    function hidePopup(event) {
      if (event.target.id === 'framePopup') {
        document.getElementById('framePopup').style.display = 'none';
      }
    }
    function redirectToJadwal() {
        window.location.href = 'jadwal';
    }
    function redirectToNilai() {
            window.location.href = 'nilai';
    }
    function redirectToVisi() {
        window.location.href = 'visi';
    }
    // Attach the event listener to the popup overlay
    document.getElementById('framePopup').addEventListener('click', hidePopup);

    // For demonstration, attach the showPopup function to the click event of the triggering element
    document.querySelector('.wrapper-group-511').addEventListener('click', showPopup);
    document.getElementById('popupjADWALMATAKULIAHText').addEventListener('click', redirectToJadwal);
    document.getElementById('popupdAFTARNILAIText').addEventListener('click', redirectToNilai);
    document.getElementById('popupvISIMISIText').addEventListener('click', redirectToVisi);
    
    var student = JSON.parse(localStorage.getItem('student'));

    if (student) {
        document.getElementById('nim').innerText = student.nim;
        document.getElementById('student-name').innerText = student.nama;
        document.getElementById('wali-dosen').innerText = student.wali_dosen;
        document.getElementById('fakultas').innerText = student.fakultas;
        document.getElementById('program-studi').innerText = student.program_studi;
        document.getElementById('angkatan').innerText = student.angkatan + '/Aktif';
    } else {
        alert('No student data found. Please log in again.');
        window.location.href = '/login';
    }
  });