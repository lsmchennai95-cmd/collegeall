<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

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
                            <label for="name">Password:</label>
                        </div>
                        <input type="password" id="password" placeholder="Enter your Password" required />
                        <div class="error-message" id="password-error"></div>
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
                        <label for="terms">I Agree to the <a href="#">terms & policy</a></label>
                        <div class="error-message" id="terms-error"></div>
                    </div>

                    <button class="signup-btn" type="submit">Signup</button>

                </div>
            </form>



            <div class="login-text">
                Have an account? <a href="../signin">Sign In</a>
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

    // 🧠 Fetch user's IP address (store it in sessionStorage)
    async function fetchIPAddress() {
        try {
            const res = await fetch("https://api.ipify.org?format=json");
            const data = await res.json();
            sessionStorage.setItem("ip", data.ip);
        } catch (err) {
            console.error("Error fetching IP:", err);
            sessionStorage.setItem("ip", "0.0.0.0"); // fallback
        }
    }

    // Call immediately when page loads
    fetchIPAddress();

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        // Inputs
        const name = document.getElementById("name");
        const email = document.getElementById("email");
        const password = document.getElementById("password");
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
        const phoneError = document.getElementById("phoneError");
        const ageError = document.getElementById("ageError");
        const dobError = document.getElementById("dobError");
        const stateError = document.getElementById("stateError");
        const cityError = document.getElementById("cityError");
        const termsError = document.getElementById("terms-error");

        // Reset errors
        nameError.textContent = "";
        emailError.textContent = "";
        passwordError.textContent = "";
        phoneError.textContent = "";
        ageError.textContent = "";
        dobError.textContent = "";
        stateError.textContent = "";
        cityError.textContent = "";
        termsError.textContent = "";
        let isValid = true;

        // Validation checks (same as before)
        if (name.value.trim() === "") {
            nameError.textContent = "Name is required.";
            isValid = false;
        }
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value)) {
            emailError.textContent = "Please enter a valid email address.";
            isValid = false;
        }
        if (password.value.length < 6) {
            passwordError.textContent = "Password must be at least 6 characters.";
            isValid = false;
        }
        if (mobile.value.length < 10) {
            phoneError.textContent = "Please enter a valid phone number.";
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
            termsError.textContent = "You must agree to the terms.";
            isValid = false;
        }

        // If valid → proceed
        if (isValid) {
            const phone = mobile.value;
            const phoneCode = iti.getSelectedCountryData().dialCode;
            const ip_address = sessionStorage.getItem("ip") || "0.0.0.0";

            const leadData = {
                user_name: name.value.trim(),
                email: email.value.trim(),
                password: password.value.trim(),
                phone: phone,
                phone_code: phoneCode,
                ip_address: ip_address, // ✅ included IP address
                age: age.value.trim(),
                dob: dob.value.trim(),
                state: state.value.trim(),
                city: city.value.trim()
            };

            fetch("https://api.collegeall.com/api/v1/leads", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(leadData)
            })
                .then(response => response.json())
                .then(data => {
                    console.log("Lead Submitted Successfully:", data);
                    if (data?.status == 200) {
                        sessionStorage.setItem('user_id', data?.data?.insertId);
                        window.location.href = '../verify';
                    } else {
                        alert('Your email is already registered in our system. Please go back to login.');
                    }
                })
                .catch(error => {
                    console.error("Error submitting lead:", error);
                    alert("Something went wrong. Please try again.");
                });
        }
    });
</script>


</html>