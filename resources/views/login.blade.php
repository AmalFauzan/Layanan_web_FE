<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./css/global.css" />
  <link rel="stylesheet" href="./css/index.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
  />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Login Page</title>
</head>
<body>
    <form id="login-form">
        @csrf
        <div class="login">
            <div class="item-image">
                <div class="item-image-child"></div>
                <div class="frame-parent">
                    <div class="pngtreeuniversity-logo-png-68-wrapper">
                        <img
                            class="pngtreeuniversity-logo-png-68"
                            loading="lazy"
                            alt=""
                            src="./images/pngtreeuniversity-logo-png-6855396-1@2x.png"
                        />
                    </div>
                    <h1 class="universitas-abc">UNIVERSITAS ABC</h1>
                </div>
                <div class="since-1969-wrapper">
                    <b class="since-1969">SINCE 1969</b>
                </div>
            </div>
            <div class="frame-group">
                <div class="simamik-wrapper">
                    <h1 class="simamik">
                        <p class="simamik1">SIMAMIK</p>
                    </h1>
                </div>
                <div class="system-info">
                    <div class="sistem-informasi-akademik">
                        Sistem Informasi Akademik Universitas ABC
                    </div>
                </div>
                <div class="frame-container">
                    <div class="image-7-parent">
                        <img class="image-7-icon" alt="" src="./images/image-7@2x.png" />
                        <div class="wrapper-rectangle-13">
                            <img
                                class="wrapper-rectangle-13-child"
                                alt=""
                                src="./svg/rectangle-13.svg"
                            />
                        </div>
                    </div>
                    <div class="user-location">
                        <img
                            class="user-location-child"
                            alt=""
                            src="./svg/rectangle-141.svg"
                        />
                        <div class="frame-div">
                            <div class="login-wrapper">
                                <h2 class="login1">LOGIN</h2>
                            </div>
                            <div class="button-container-parent">
                                <div class="button-container">
                                    <div class="button-container-child"></div>
                                    <div class="button-container-inner">
                                        <div class="user-solid-1-parent">
                                            <img
                                                class="user-solid-1-icon"
                                                alt=""
                                                src="./svg/usersolid-1.svg"
                                            />
                                            <input
                                                class="frame-child"
                                                placeholder="username"
                                                type="username"
                                                name="username"
                                                id="username" required>
                                        </div>
                                    </div>
                                    <div class="input-border"></div>
                                </div>
                                <div class="recommended-item-card">
                                    <div class="recommended-item-card-child"></div>
                                    <div class="recommended-item-card-inner">
                                        <div class="key-solid-1-parent">
                                            <img
                                                class="key-solid-1-icon"
                                                alt=""
                                                src="./svg/keysolid-1.svg"
                                            />
                                            <input
                                                class="frame-item"
                                                placeholder="password"
                                                type="password"
                                                name="password"
                                                id="password" required>
                                        </div>
                                    </div>
                                    <div class="recommended-item-card-item"></div>
                                </div>
                                <div id="error-messages"></div>
                            </div>
                        </div>
                        <button class="rectangle-parent" type="submit">
                            <div class="frame-inner"></div>
                            <div class="login-container">
                                <div class="login2">LOGIN</div>
                            </div>
                            <div class="submit-background"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            $('#login-form').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                // Clear previous error messages
                $('#error-messages').empty();

                var username = $('#username').val();
                var password = $('#password').val();

                $.ajax({
                    url: 'http://127.0.0.1:8001/api/login',
                    method: 'POST',
                    data: {

                        username: username,
                        password: password
                    },
                    success: function(response) {
                        if (response.status) {
                            alert('Login successful!');
                            // Redirect to the dashboard
                            window.location.href = '/dashboard';
                        } else {
                            $('#error-messages').html('<p>' + response.message + '</p>');
                        }
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        var errorMessages = '';
                        for (var key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                errorMessages += '<p>' + errors[key] + '</p>';
                            }
                        }
                        $('#error-messages').html(errorMessages);
                    }
                });
            });
        });
    </script>
</body>
</html>
