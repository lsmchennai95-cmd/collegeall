<style>

    .otp-inner-container {
        background: #fff;
        padding: 40px 30px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 100%;
        max-width: 400px;
        animation: fadeIn 0.6s ease;
    }

    .otp-inner-container h2 {
        margin-bottom: 10px;
        color: #1e52aa;
        font-size: 24px;
    }

    .otp-inner-container p {
        margin-bottom: 25px;
        color: #555;
        font-size: 14px;
    }

    .otp-input {
        width: 100%;
        max-width: 220px;
        margin: 0 auto 25px;
        padding: 14px;
        font-size: 20px;
        text-align: center;
        border: 2px solid #ccc;
        border-radius: 12px;
        outline: none;
        transition: all 0.25s ease;
        letter-spacing: 8px;
    }

    .otp-input:focus {
        border-color: #1e52aa;
        box-shadow: 0 0 8px rgba(30, 82, 170, 0.3);
        transform: scale(1.03);
    }

    .is-invalid {
        border-color: red;
    }

    .error-text {
        color: red;
        font-size: 13px;
        margin-bottom: 10px;
    }

    .verify-btn {
        background-color: #1e52aa;
        color: white;
        border: none;
        padding: 12px 0;
        width: 100%;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .verify-btn:hover {
        background-color: #163f87;
    }

    @media (max-width: 576px) {
        .otp-inner-container {
            padding: 25px 20px;
        }

        .otp-input {
            max-width: 180px;
            padding: 12px;
            font-size: 18px;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
</head>

<body>

    <div class="otp-inner-container">
        <h2>Enter OTP</h2>
        <p>Please enter the 4-digit OTP sent to your registered number</p>

        <input type="text" maxlength="4" id="otpCode" class="otp-input" inputmode="numeric" placeholder="••••">
        <div id="otpError" class="error-text"></div>

        <button class="verify-btn" id="verifyOtpBtn" onclick="otpVerify()">Verify OTP</button>
    </div>

    <script src="../script.js"></script>