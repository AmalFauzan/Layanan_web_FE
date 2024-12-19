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
    document.querySelector('.wrapper-rectangle-31').addEventListener('click', showPopup);
    document.getElementById('popupjADWALMATAKULIAHText').addEventListener('click', redirectToJadwal);
    document.getElementById('popupdAFTARNILAIText').addEventListener('click', redirectToNilai);
    document.getElementById('popupvISIMISIText').addEventListener('click', redirectToVisi);

    var student = JSON.parse(localStorage.getItem('student'));

            if (!student) {
                alert('No student data found. Please log in again.');
                window.location.href = '/login';
                return;
            }

            fetch(`http://127.0.0.1:8001/api/grades/${student.nim}`)
                .then(response => response.json())
                .then(data => {
                    if (data.status) {
                        var gradesBody = document.getElementById('grades-body');
                        gradesBody.innerHTML = '';

                        data.grades.forEach(grade => {
                            var row = document.createElement('tr');
                            var courseCell = document.createElement('td');
                            var gradeCell = document.createElement('td');

                            courseCell.textContent = grade.matkul;
                            gradeCell.textContent = grade.nilai;

                            row.appendChild(courseCell);
                            row.appendChild(gradeCell);
                            gradesBody.appendChild(row);
                        });
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error fetching grades:', error);
                    alert('Failed to fetch grades.');
                });

  });

