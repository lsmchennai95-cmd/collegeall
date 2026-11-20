<?php
require_once __DIR__ . '/../config/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up | CollegeAll Student Portal</title>
    <meta name="description" content="Create your CollegeAll student account to explore top online degree programs, connect with counselors, and apply with ease.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://collegeall.com/signup/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Sign Up | CollegeAll Student Portal">
    <meta property="og:description" content="Create your CollegeAll student account to explore top online degree programs, connect with counselors, and apply with ease.">
    <meta property="og:url" content="https://collegeall.com/signup/">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Sign Up | CollegeAll Student Portal">
    <meta name="twitter:description" content="Create your CollegeAll student account to explore top online degree programs, connect with counselors, and apply with ease.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/toast.css'); ?>">
    <script src="<?php echo asset_url('/assets/js/toast.js'); ?>"></script>
    <?php render_app_config_script(); ?>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }
        body {
            display: flex;
        }
        .left-side {
            flex: 1;
            padding: 10px 10%;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
        }
        .left-side h1 {
            font-size: 32px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        form input[type="text"],
        form input[type="email"],
        form input[type="password"],
        form input[type="number"],
        form input[type="date"] {
            width: 100%;
            padding: 12px;
            margin: 3px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }
        .iti {
            width: 100% !important;
        }
        .checkbox {
            margin: 15px 0;
        }
        .checkbox label {
            font-size: 14px;
        }
        .checkbox a {
            color: black;
            font-weight: 600;
            text-decoration: none;
        }
        .signup-btn {
            width: 100%;
            padding: 14px;
            background-color: #0147A6;
            color: white;
            font-weight: 600;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }
        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background-color: #ccc;
        }
        .divider::before {
            left: 0;
        }
        .divider::after {
            right: 0;
        }
        .divider span {
            padding: 0 10px;
            background-color: white;
            font-size: 14px;
        }
        .social-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .social-buttons button {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px;
            background: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 6px;
            cursor: pointer;
        }
        .login-text {
            font-size: 14px;
            text-align: center;
        }
        .login-text a {
            color: #0147A6;
            font-weight: 600;
            text-decoration: none;
        }
        .right-side {
            flex: 1;
            background-color: #0147A6;
            display: flex;
            align-items: center;
            justify-content: center;
            height: auto;
        }
        .logo {
            max-width: 250px;
        }
        .error-message {
            color: red;
            font-size: 13px;
            margin-top: 4px;
            margin-bottom: 10px;
        }
        @media only screen and (max-width: 900px){
            .right-side{
                display: none;
            }
            .left-side{
                padding-top: 400px;
            }
            .left-side h1{
                font-size: 20px;
            }
            .left-side form label{
                font-size: 12px;
            }
            .left-side form input{
                height: 32px;
            }
            .left-side form input[type=date]{
                font-size: 10px;
            }
            .left-side form input::placeholder{
                font-size: 10px;
            }
            .left-side form .iti{
                font-size: 10px;
            }
            .left-side .checkbox{
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
            }
            .left-side .signup-btn{
                display: flex;
                align-items: center;
                justify-content: center;
                height: 10px;
                font-size: 10px;
            }
            .left-side .login-text{
                font-size: 12px;
                padding-bottom: 20px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '25443278008607273');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=25443278008607273&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics & Google Ads -->
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
        <div class="container">
            <h1 style="color:#0147A6;">Get Started Now</h1>
            <form id="signup-form" novalidate>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-label">
                            <label for="name">Full Name:</label>
                        </div>
                        <input type="text" id="name" placeholder="Enter your Name" required />
                        <div class="error-message" id="name-error"></div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-label">
                            <label for="password">Password:</label>
                        </div>
                        <input type="password" id="password" placeholder="Enter your Password" required />
                        <div class="error-message" id="password-error"></div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-label">
                            <label for="confirm_password">Confirm Password:</label>
                        </div>
                        <input type="password" id="confirm_password" placeholder="Confirm your Password" required />
                        <div class="error-message" id="confirm-password-error"></div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-label">
                            <label for="email">Email ID:</label>
                        </div>
                        <input type="email" id="email" placeholder="Enter your Email Id" required />
                        <div class="error-message" id="email-error"></div>
                    </div>

                    <div class="col-lg-6 mt-2 col-sm-6">
                        <div class="form-label">
                            <label for="phone">Phone Number:</label>
                        </div>
                        <input type="text" id="mobile" placeholder="01234556789" required width="100%" />
                        <div class="error-message" id="phoneError"></div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-label">
                            <label for="age">Age:</label>
                        </div>
                        <input type="text" id="age" placeholder="Enter your Age" required />
                        <div class="error-message" id="ageError"></div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-label">
                            <label for="name">DOB:</label>
                        </div>
                        <input type="date" id="dob" placeholder="Enter Your DOB" required />
                        <div class="error-message" id="dobError"></div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-label">
                            <label for="name">State:</label>
                        </div>
                        <input type="text" id="state" placeholder="Enter Your State" required />
                        <div class="error-message" id="stateError"></div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-label">
                            <label for="name">City:</label>
                        </div>
                        <input type="text" id="city" placeholder="Enter Your City" required />
                        <div class="error-message" id="cityError"></div>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" id="terms" required />
                        <label for="terms">I Agree to the <a href="<?php echo function_exists('app_url') ? app_url('/terms-condition/') : '../terms-condition/'; ?>" target="_blank">terms & policy</a></label>
                        <div class="error-message" id="terms-error"></div>
                    </div>

                    <button class="signup-btn" type="submit">Signup</button>

                </div>
            </form>



            <div class="login-text">
                Have an account? <a href="<?php echo function_exists('app_url') ? app_url('/signin/') : '../signin/'; ?>">Sign In</a>
            </div>
        </div>
    </div>

    <div class="right-side">
        <img src="../img/all_logo/collegeall.png" alt="Logo" class="logo" />
    </div>

</body>
<script src="../script.js"></script>
<script>
    const input = document.querySelector("#mobile");
    const iti = intlTelInput(input, {
        initialCountry: "in",  // Default country code is India
        separateDialCode: true,  // Shows the country code next to the number
        nationalMode: false,  // Enforces full international format
    });
</script>
<script>
    const form = document.getElementById("signup-form");

    // Fetch user's IP address safely with fallback
    if (!sessionStorage.getItem("ip")) {
        sessionStorage.setItem("ip", "0.0.0.0");
    }

    async function fetchIPAddress() {
        try {
            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 2500);
            const res = await fetch("https://api.ipify.org?format=json", { signal: controller.signal });
            clearTimeout(timeoutId);
            if (res.ok) {
                const data = await res.json();
                if (data && data.ip) {
                    sessionStorage.setItem("ip", data.ip);
                }
            }
        } catch (err) {
            console.warn("External IP lookup failed, using fallback:", err.message);
        }
    }

    fetchIPAddress();

    // Inputs
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirm_password");
    const mobile = document.getElementById("mobile");
    const age = document.getElementById("age");
    const dob = document.getElementById("dob");
    const state = document.getElementById("state");
    const city = document.getElementById("city");
    const terms = document.getElementById("terms");

    // Error elements
    const nameError = document.getElementById("name-error");
    const emailError = document.getElementById("email-error");
    const passwordError = document.getElementById("password-error");
    const confirmPasswordError = document.getElementById("confirm-password-error");
    const phoneError = document.getElementById("phoneError");
    const ageError = document.getElementById("ageError");
    const dobError = document.getElementById("dobError");
    const stateError = document.getElementById("stateError");
    const cityError = document.getElementById("cityError");
    const termsError = document.getElementById("terms-error");

    // Clear errors on input
    const inputsWithErrors = [
        [name, nameError],
        [email, emailError],
        [password, passwordError],
        [confirmPassword, confirmPasswordError],
        [mobile, phoneError],
        [age, ageError],
        [dob, dobError],
        [state, stateError],
        [city, cityError],
        [terms, termsError]
    ];
    inputsWithErrors.forEach(([inputEl, errEl]) => {
        if (inputEl && errEl) {
            const evt = inputEl.type === 'checkbox' || inputEl.type === 'date' ? 'change' : 'input';
            inputEl.addEventListener(evt, () => { errEl.textContent = ""; });
        }
    });

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const signupBtn = form.querySelector(".signup-btn");
        if (signupBtn && signupBtn.disabled) {
            return;
        }

        // Reset errors
        nameError.textContent = "";
        emailError.textContent = "";
        passwordError.textContent = "";
        if (confirmPasswordError) confirmPasswordError.textContent = "";
        phoneError.textContent = "";
        ageError.textContent = "";
        dobError.textContent = "";
        stateError.textContent = "";
        cityError.textContent = "";
        termsError.textContent = "";
        let isValid = true;

        if (name.value.trim() === "") {
            nameError.textContent = "Name is required.";
            isValid = false;
        }
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value.trim())) {
            emailError.textContent = "Please enter a valid email address.";
            isValid = false;
        }
        if (!password.value) {
            passwordError.textContent = "Password is required.";
            isValid = false;
        } else if (password.value.length < 6) {
            passwordError.textContent = "Password must be at least 6 characters.";
            isValid = false;
        }
        if (confirmPassword) {
            if (!confirmPassword.value) {
                confirmPasswordError.textContent = "Please confirm your password.";
                isValid = false;
            } else if (confirmPassword.value !== password.value) {
                confirmPasswordError.textContent = "Passwords do not match.";
                isValid = false;
            }
        }
        if (mobile.value.trim().length < 10) {
            phoneError.textContent = "Please enter a valid phone number (at least 10 digits).";
            isValid = false;
        }
        if (age.value.trim() === "") {
            ageError.textContent = "Age is required.";
            isValid = false;
        }
        if (dob.value === "") {
            dobError.textContent = "DOB is required.";
            isValid = false;
        }
        if (state.value.trim() === "") {
            stateError.textContent = "State is required.";
            isValid = false;
        }
        if (city.value.trim() === "") {
            cityError.textContent = "City is required.";
            isValid = false;
        }
        if (!terms.checked) {
            termsError.textContent = "You must agree to the terms & policy.";
            isValid = false;
        }

        if (!isValid) {
            return;
        }

        if (signupBtn) {
            signupBtn.disabled = true;
            signupBtn.textContent = "Signing up...";
        }

        const phone = mobile.value.trim();
        const phoneCode = (typeof iti !== 'undefined' && iti.getSelectedCountryData) ? iti.getSelectedCountryData().dialCode : "91";
        const ip_address = sessionStorage.getItem("ip") || "0.0.0.0";

        // Preserve strictly the existing backend payload contract (unmodified password, no confirm_password)
        const leadData = {
            user_name: name.value.trim(),
            email: email.value.trim(),
            password: password.value,
            phone: phone,
            phone_code: phoneCode,
            ip_address: ip_address,
            age: age.value.trim(),
            dob: dob.value.trim(),
            state: state.value.trim(),
            city: city.value.trim()
        };

        const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
        fetch(`${apiBase}/api/v1/leads`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(leadData)
        })
            .then(response => response.json())
            .then(data => {
                if (signupBtn) {
                    signupBtn.disabled = false;
                    signupBtn.textContent = "Signup";
                }
                console.log("Lead Submitted Successfully:", data);
                if (data?.status == 200 && data?.data?.insertId) {
                    sessionStorage.setItem('user_id', data.data.insertId);
                    sessionStorage.setItem('userId', data.data.insertId);
                    if (typeof window.showToast === 'function') {
                        window.showToast("Registration successful! Redirecting to verification...", "success", 2000, "Sign Up");
                    }
                    const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "..";
                    setTimeout(() => {
                        window.location.href = `${appUrl.replace(/\/+$/, '')}/verify/`;
                    }, 600);
                } else {
                    let errorMsg = "Registration failed. Please check your details and try again.";
                    if (data?.message) {
                        if (typeof data.message === "string") {
                            const lower = data.message.toLowerCase();
                            if (lower.includes("already") || lower.includes("exist") || lower.includes("duplicate")) {
                                errorMsg = "Your email or phone number is already registered in our system. Please sign in.";
                            } else {
                                errorMsg = data.message;
                            }
                        } else if (typeof data.message === "object") {
                            const vals = Object.values(data.message).map(v => String(v).trim()).filter(Boolean);
                            if (vals.length > 0) errorMsg = vals.join(". ");
                        }
                    }
                    if (typeof window.showToast === 'function') {
                        window.showToast(errorMsg, "error", 5000, "Registration Failed");
                    } else {
                        alert(errorMsg);
                    }
                }
            })
            .catch(error => {
                console.error("Error submitting lead:", error);
                if (signupBtn) {
                    signupBtn.disabled = false;
                    signupBtn.textContent = "Signup";
                }
                if (typeof window.showToast === 'function') {
                    window.showToast("Network error occurred while signing up. Please try again.", "error", 4000, "Registration Failed");
                } else {
                    alert("Network error occurred while signing up. Please try again.");
                }
            });
    });
</script>


</html>