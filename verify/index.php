<?php
require_once __DIR__ . '/../config/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account Verification | CollegeAll</title>
    <meta name="description" content="Verify your CollegeAll student account to securely complete your application and counseling profile.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://collegeall.com/verify/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Account Verification | CollegeAll">
    <meta property="og:description" content="Verify your CollegeAll student account to securely complete your application and counseling profile.">
    <meta property="og:url" content="https://collegeall.com/verify/">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Account Verification | CollegeAll">
    <meta name="twitter:description" content="Verify your CollegeAll student account to securely complete your application and counseling profile.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png" />
    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/toast.css'); ?>">
    <script src="<?php echo asset_url('/assets/js/toast.js'); ?>"></script>
    <?php render_app_config_script(); ?>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
        }
        .otp {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .otp .otp-card {
            background: white;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 800px;
            width: 100%;
        }
        .otp h1 {
            color: #0056b3;
        }
        .otp h2 {
            margin-bottom: 10px;
            color: #333;
        }
        .otp p {
            color: #555;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }
        .otp .otp-inputs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .otp .otp-inputs input {
            width: 50px;
            height: 60px;
            font-size: 1.5rem;
            text-align: center;
            border: 2px solid gray;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.2s;
        }
        .otp .otp-inputs input:focus {
            border-color: #0056b3;
        }
        .otp button {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .otp button:hover {
            background-color: #003f88;
        }
        .otp button:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }
        .otp .resend {
            margin-top: 15px;
            font-size: 0.9rem;
        }
        .otp .resend a {
            color: #0056b3;
            text-decoration: none;
            cursor: pointer;
        }
        .otp .resend a:hover {
            text-decoration: underline;
        }
        header .logo {
            padding: 30px 50px;
        }
        header .logo img {
            max-height: 50px;
        }
    </style>
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
  <div class="otp container">
    <div class="otp-card">
      <div class="logo" onclick="Navigate()" style="cursor:pointer;">
        <img src="../img/Logo/collegeallLogo.png" alt="CollegeAll Logo" />
      </div>
      <h2>Verify Your Email Address</h2>
      <p>Enter the 4-Digit Code Sent to Your Email</p>

      <form id="otpForm">
        <div class="otp-inputs">
          <input type="text" id="num1" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="one-time-code" required />
          <input type="text" id="num2" maxlength="1" inputmode="numeric" pattern="[0-9]" required />
          <input type="text" id="num3" maxlength="1" inputmode="numeric" pattern="[0-9]" required />
          <input type="text" id="num4" maxlength="1" inputmode="numeric" pattern="[0-9]" required />
        </div>

        <button type="submit" id="submit">Verify</button>
        <p>The OTP has been Sent Successfully. <br> Please Check Your Email.</p>
        <p class="resend">Didn't get the Code? <a href="javascript:void(0)" id="resendOtpBtn"><strong>Resend</strong></a></p>
      </form>
    </div>
  </div>

  <script>
    function Navigate() {
        const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : '../';
        window.location.href = appUrl.replace(//+$/, '') + '/';
    }

    // OTP Input enhancement: auto-focus, backspace navigation, paste support
    const otpInputIds = ['num1', 'num2', 'num3', 'num4'];
    const otpInputs = otpInputIds.map(id => document.getElementById(id));

    if (otpInputs[0]) {
        otpInputs[0].focus();
    }

    otpInputs.forEach((input, index) => {
        if (!input) return;

        input.addEventListener("input", function (e) {
            const clean = e.target.value.replace(/D/g, '');
            e.target.value = clean ? clean[0] : '';
            if (e.target.value && index < otpInputs.length - 1) {
                otpInputs[index + 1].focus();
            }
        });

        input.addEventListener("keydown", function (e) {
            if (e.key === "Backspace") {
                if (!e.target.value && index > 0) {
                    otpInputs[index - 1].focus();
                    otpInputs[index - 1].value = '';
                }
            } else if (e.key === "ArrowLeft" && index > 0) {
                otpInputs[index - 1].focus();
            } else if (e.key === "ArrowRight" && index < otpInputs.length - 1) {
                otpInputs[index + 1].focus();
            }
        });

        input.addEventListener("paste", function (e) {
            e.preventDefault();
            const pasteData = (e.clipboardData || window.clipboardData).getData('text').replace(/D/g, '').slice(0, 4);
            if (!pasteData) return;
            for (let i = 0; i < pasteData.length; i++) {
                if (otpInputs[i]) {
                    otpInputs[i].value = pasteData[i];
                }
            }
            const focusIndex = Math.min(pasteData.length, otpInputs.length - 1);
            if (otpInputs[focusIndex]) otpInputs[focusIndex].focus();
        });
    });

    // Resend OTP handler
    const resendBtn = document.getElementById("resendOtpBtn");
    if (resendBtn) {
        resendBtn.addEventListener("click", function (e) {
            e.preventDefault();
            if (typeof window.showToast === 'function') {
                window.showToast("Automated OTP resend is currently unavailable. Please check your spam folder or register again.", "warning", 5000, "Resend OTP");
            } else {
                alert("Automated OTP resend is currently unavailable. Please check your spam folder or register again.");
            }
        });
    }

    document.getElementById("otpForm").addEventListener("submit", function (e) {
      e.preventDefault();

      const submitBtn = document.getElementById("submit");
      if (submitBtn && submitBtn.disabled) {
          return;
      }

      const otp = otpInputIds
        .map(id => document.getElementById(id).value.trim())
        .join('');

      if (otp.length < 4 || !/^d{4}$/.test(otp)) {
        if (typeof window.showToast === 'function') {
            window.showToast("Please enter a valid 4-digit numeric OTP.", "warning", 3000, "Invalid Code");
        } else {
            alert("Please enter a valid 4-digit OTP.");
        }
        return;
      }

      const user_id = sessionStorage.getItem('user_id') || sessionStorage.getItem('userId');
      if (!user_id) {
        if (typeof window.showToast === 'function') {
            window.showToast("User session expired or invalid. Please sign up or sign in again.", "error", 4000, "Session Expired");
        } else {
            alert("User session expired or invalid.");
        }
        return;
      }

      if (submitBtn) {
          submitBtn.disabled = true;
          submitBtn.textContent = "Verifying...";
      }

      const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
      fetch(`${apiBase}/api/v1/verify-otp`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          otp,
          user_id
        })
      })
        .then(response => response.json())
        .then(result => {
          if (submitBtn) {
              submitBtn.disabled = false;
              submitBtn.textContent = "Verify";
          }
          if (result.status == 200 && !result.error) {
            if (typeof window.showToast === 'function') {
                window.showToast("OTP Verified Successfully! Redirecting...", "success", 2000, "Verified");
            }
            const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "..";
            setTimeout(() => {
                window.location.href = `${appUrl.replace(/\/+$/, '')}/emailverified/`;
            }, 600);
          } else {
            const msg = result.message || "Invalid OTP. Please check the code and try again.";
            if (typeof window.showToast === 'function') {
                window.showToast(msg, "error", 4000, "Verification Failed");
            } else {
                alert(msg);
            }
          }
        })
        .catch(error => {
          console.error("Error:", error);
          if (submitBtn) {
              submitBtn.disabled = false;
              submitBtn.textContent = "Verify";
          }
          if (typeof window.showToast === 'function') {
              window.showToast("An error occurred while verifying. Please check your connection and try again.", "error", 4000, "Verification Failed");
          } else {
              alert("An error occurred while verifying. Please try again.");
          }
        });
    });
  </script>
</body>

</html>
