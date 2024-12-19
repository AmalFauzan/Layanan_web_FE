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
    document.querySelector('.wrapper-group-50').addEventListener('click', showPopup);
    document.getElementById('popupjADWALMATAKULIAHText').addEventListener('click', redirectToJadwal);
    document.getElementById('popupdAFTARNILAIText').addEventListener('click', redirectToNilai);
    document.getElementById('popupvISIMISIText').addEventListener('click', redirectToVisi);
    
  });

