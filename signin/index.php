<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign In | CollegeAll Student Portal</title>
    <meta name="description" content="Sign in to your CollegeAll student portal to manage course enrollments, track applications, and access personalized career resources.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://collegeall.com/signin/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Sign In | CollegeAll Student Portal">
    <meta property="og:description" content="Sign in to your CollegeAll student portal to manage course enrollments, track applications, and access personalized career resources.">
    <meta property="og:url" content="https://collegeall.com/signin/">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Sign In | CollegeAll Student Portal">
    <meta name="twitter:description" content="Sign in to your CollegeAll student portal to manage course enrollments, track applications, and access personalized career resources.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta charset="UTF-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">    <style>        * {            box-sizing: border-box;            margin: 0;            padding: 0;            font-family: 'Inter', sans-serif;        }        body {            display: flex;            height: 100vh;        }        .left-side {            flex: 1;            padding: 60px 10%;            background-color: white;            display: flex;            flex-direction: column;            justify-content: center;        }        .left-side h1 {            font-size: 32px;            margin-bottom: 10px;            font-weight: 600;        }        .left-side p {            font-size: 16px;            color: #444;            margin-bottom: 30px;        }        form input[type="email"],        form input[type="password"],        form input[type="text"] {            width: 100%;            padding: 12px;            margin: 10px 0;            border: 1px solid #ccc;            border-radius: 6px;            font-size: 15px;        }        .form-label {            display: flex;            justify-content: space-between;            align-items: center;            font-size: 14px;            color: #333;        }        .form-label a {            text-decoration: none;            color: #0147A6;            font-weight: 500;        }        .checkbox {            margin: 15px 0;            font-size: 14px;        }        .login-btn {            width: 100%;            padding: 14px;            background-color: #0147A6;            color: white;            font-weight: 600;            font-size: 16px;            border: none;            border-radius: 6px;            cursor: pointer;            margin-bottom: 20px;        }        .social-buttons {            display: flex;            gap: 10px;            margin-bottom: 20px;        }        .social-buttons button {            flex: 1;            display: flex;            align-items: center;            justify-content: center;            gap: 8px;            padding: 12px;            background: #f1f1f1;            border: 1px solid #ccc;            border-radius: 6px;            cursor: pointer;            font-size: 14px;        }        .signup-text {            font-size: 14px;            text-align: center;        }        .signup-text a {            color: #0147A6;            font-weight: 600;            text-decoration: none;        }        .right-side {            flex: 1;            background-color: #0147A6;            display: flex;            align-items: center;            justify-content: center;        }        .logo {            max-width: 250px;        }        .error-message {            color: red;            font-size: 13px;            margin-top: -8px;            margin-bottom: 8px;        }        .password-wrapper {            position: relative;        }        .password-wrapper input {            width: 100%;            padding-right: 40px;        }        .password-wrapper i {            position: absolute;            right: 12px;            top: 50%;            transform: translateY(-50%);            cursor: pointer;            color: #888;        }        @media only screen and (max-width: 900px) {            .right-side {                display: none;            }            .left-side h1 {                font-size: 20px;            }            .left-side p {                font-size: 11px;            }            .left-side form label {                font-size: 10px;            }            .left-side form input {                height: 30px;            }            .left-side form input::placeholder {                font-size: 10px;            }            .left-side a {                font-size: 8px;            }            .left-side .checkbox {                display: flex;                align-items: center;                gap: 5px;            }            .left-side .login-btn {                width: 100%;                height: 10%;                display: flex;                align-items: center;                justify-content: center;                font-size: 12px;            }        }        .login-btn.loading {            pointer-events: none;            opacity: 0.8;        }        .login-btn.loading::after {            content: "";            width: 16px;            height: 16px;            border-radius: 50%;            border: 2px solid #fff;            border-right-color: transparent;            display: inline-block;            margin-left: 8px;            animation: spin .6s linear infinite;        }        @keyframes spin {            to { transform: rotate(360deg); }        }    </style>    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="        crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- Global site tag (gtag.js) - Google Analytics & Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BED9GZX87Z"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-BED9GZX87Z');
      gtag('config', 'AW-17357684990');
    </script>
</head>

<body>

    <div class="left-side">
        <h1 style="color:#0147A6;">Welcome Back!!!</h1>
        <p>Enter your Credentials to access your account</p>

        <form id="loginForm" novalidate>
            <div class="form-label">
                <label for="email">Email address</label>
            </div>
            <input type="email" id="email" placeholder="Enter your email" required />
            <div class="error-message" id="emailError"></div>

            <div class="form-label">
                <label for="password">Password</label>
                <a href="#">Forgot password</a>
            </div>
            <div class="password-wrapper">
                <input type="password" id="password" class="" placeholder="Enter your password" required />
                <i class="fa-solid fa-eye" id="togglePassword"></i>
            </div>
            <div class="error-message" id="passwordError"></div>

            <div class="checkbox">
                <input type="checkbox" id="remember" />
                <label for="remember">Remember for 30 days</label>
            </div>

            <button class="login-btn" id="loginBtn" type="submit">Login</button>
        </form>

        <div class="signup-text">
            Don’t have an account? <a href="../signup">Sign Up</a>
        </div>
    </div>

    <div class="right-side">
        <img src="../img/all_logo/collegeall.png" alt="Logo" class="logo" />
    </div>

    <script>
        const loginBtn = document.getElementById("loginBtn");

        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();

            loginBtn.classList.add("loading");

            let email = document.getElementById('email');
            let password = document.getElementById('password');
            let emailError = document.getElementById('emailError');
            let passwordError = document.getElementById('passwordError');

            let valid = true;

            emailError.textContent = '';
            passwordError.textContent = '';

            if (!email.value || !email.value.includes('@')) {
                emailError.textContent = 'Please enter a valid email address.';
                valid = false;
            }

            if (password.value.length < 6) {
                passwordError.textContent = 'Password must be at least 6 characters.';
                valid = false;
            }

            if (valid) {
                const myHeaders = new Headers();
                myHeaders.append("Content-Type", "application/json");

                const raw = JSON.stringify({
                    email: email.value,
                    password: password.value
                });

                const requestOptions = {
                    method: "POST",
                    headers: myHeaders,
                    body: raw,
                    redirect: "follow"
                };

                fetch("https://api.collegeall.com/api/v1/login", requestOptions)
                    .then((response) => response.json())
                    .then((result) => {
                        if (result.status === 200 && !result.error) {
                            localStorage.setItem("authToken", result.data.authToken);
                            window.location.href = "../dashboard";
                        } else {
                            loginBtn.classList.remove("loading");
                            alert("Login failed: " + (result.message || "Unknown error"));
                        }
                    })
                    .catch((error) => {
                        console.error("Error:", error);
                        alert("Something went wrong. Please try again later.");
                    });
            }
        });
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>