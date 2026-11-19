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
  <meta charset="UTF-8" />  <meta name="viewport" content="width=device-width, initial-scale=1.0" />  <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png" />  <style>    * {      box-sizing: border-box;    }    body {      margin: 0;      font-family: 'Segoe UI', sans-serif;      background-color: #f9f9f9;    }    .otp {      display: flex;      justify-content: center;      align-items: center;      min-height: 100vh;    }    .otp .otp-card {      background: white;      padding: 40px 30px;      border-radius: 12px;      box-shadow: 0 6px 24px rgba(0, 0, 0, 0.1);      text-align: center;      max-width: 800px;      width: 100%;    }    .otp h1 {      color: #0056b3;    }    .otp h2 {      margin-bottom: 10px;      color: #333;    }    .otp p {      color: #555;      font-size: 0.95rem;      margin-bottom: 20px;    }    .otp .otp-inputs {      display: flex;      justify-content: center;      gap: 20px;      margin-bottom: 20px;    }    .otp .otp-inputs input {      width: 50px;      height: 60px;      font-size: 1.5rem;      text-align: center;      border: 2px solid gray;      border-radius: 8px;      outline: none;      transition: border-color 0.2s;    }    .otp .otp-inputs input:focus {      border-color: #0056b3;    }    .otp button {      background-color: #0056b3;      color: white;      border: none;      padding: 12px 24px;      border-radius: 6px;      font-size: 1rem;      cursor: pointer;      transition: background-color 0.3s ease;    }    .otp button:hover {      background-color: #003f88;    }    .otp .resend {      margin-top: 15px;      font-size: 0.9rem;    }    .otp .resend a {      color: #0056b3;      text-decoration: none;    }    .otp .resend a:hover {      text-decoration: underline;    }    header .logo {      padding: 30px 50px;    }    header .logo img {      max-height: 50px;    }  </style>    <!-- Meta Pixel Code -->    <script>        !function(f,b,e,v,n,t,s)        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?        n.callMethod.apply(n,arguments):n.queue.push(arguments)};        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';        n.queue=[];t=b.createElement(e);t.async=!0;        t.src=v;s=b.getElementsByTagName(e)[0];        s.parentNode.insertBefore(t,s)}(window, document,'script',        'https://connect.facebook.net/en_US/fbevents.js');        fbq('init', '25443278008607273');        fbq('track', 'PageView');    </script>    <noscript><img height="1" width="1" style="display:none"    src="https://www.facebook.com/tr?id=25443278008607273&ev=PageView&noscript=1"    /></noscript>    <!-- End Meta Pixel Code -->    <!-- Global site tag (gtag.js) - Google Analytics & Google Ads -->
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
          <input type="text" id="num1" maxlength="1" inputmode="numeric" required />
          <input type="text" id="num2" maxlength="1" inputmode="numeric" required />
          <input type="text" id="num3" maxlength="1" inputmode="numeric" required />
          <input type="text" id="num4" maxlength="1" inputmode="numeric" required />
        </div>

        <button type="submit" id="submit">Verify</button>
        <p>The OTP has been Sent Successfully. <br> Please Check Your Email.</p>
        <p class="resend">Didn't get the Code? <a href="#"><strong>Resend</strong></a></p>
      </form>
    </div>
  </div>

  <script>
    document.getElementById("otpForm").addEventListener("submit", function (e) {
      e.preventDefault();

      const otp = ['num1', 'num2', 'num3', 'num4']
        .map(id => document.getElementById(id).value.trim())
        .join('');

      if (otp.length < 4 || !/^\d{4}$/.test(otp)) {
        alert("Please enter a valid 4-digit OTP.");
        return;
      }

      const user_id = sessionStorage.getItem('user_id');
      if (!user_id) {
        alert("User session expired or invalid.");
        return;
      }

      fetch("https://api.collegeall.com/api/v1/verify-otp", {
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
          if (result.status == 200) {
            alert("OTP Verified Successfully!");
            window.location.href = '../emailverified';
          } else {
            alert("Invalid OTP. Please try again.");
          }
        })
        .catch(error => {
          console.error("Error:", error);
          alert("An error occurred while verifying. Please try again.");
        });
    });

  </script>
</body>

</html>