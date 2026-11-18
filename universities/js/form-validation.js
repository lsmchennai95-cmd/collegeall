// IP
async function storeUserIP() {
    try {
    // Only fetch if not already stored in this session
    if (!sessionStorage.getItem("ip")) {
        const response = await fetch("https://api.ipify.org?format=json");
        const data = await response.json();
        sessionStorage.setItem("ip", data.ip);
        console.log("User IP stored in sessionStorage:", data.ip);
    } else {
        console.log("IP already stored:", sessionStorage.getItem("ip"));
    }
    } catch (error) {
    console.error("Error fetching IP:", error);
    }
}

// Call it automatically on page load
window.addEventListener("load", storeUserIP);

function handleSubmit(event) {
    event.preventDefault();
    const ip = sessionStorage.getItem("ip");
    const fullName = document.getElementById("fullName");
    const email = document.getElementById("email");
    const contact = document.getElementById("contact");
    const checkBox = document.getElementById("agreePolicy");
 
    const enrollmentForm = document.getElementById("enrollmentForm");
    const loadingSpinner = document.getElementById("loadingSpinner");
    const otpSection = document.getElementById("otpVerificationSection");
 
    // Reset all error messages
    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("contactError").textContent = "";
    document.getElementById("policyError").textContent = "";
 
    let valid = true;
 
    // ✅ Full Name Validation
    if (!fullName.value.trim()) {
        document.getElementById("nameError").textContent = "Full Name is required.";
        fullName.classList.add("is-invalid");
        valid = false;
    } else {
        fullName.classList.remove("is-invalid");
        fullName.classList.add("is-valid");
    }
 
    // ✅ Email Validation
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!email.value.trim() || !emailPattern.test(email.value)) {
        document.getElementById("emailError").textContent = "Valid Email is required.";
        email.classList.add("is-invalid");
        valid = false;
    } else {
        email.classList.remove("is-invalid");
        email.classList.add("is-valid");
    }
 
    // ✅ Contact Validation
    const contactPattern = /^[0-9]{10}$/;
    if (!contact.value.trim() || !contactPattern.test(contact.value)) {
        document.getElementById("contactError").textContent = "Valid Mobile Number is required.";
        contact.classList.add("is-invalid");
        valid = false;
    } else {
        contact.classList.remove("is-invalid");
        contact.classList.add("is-valid");
    }
 
    // ✅ Policy Validation
    if (!checkBox.checked) {
        document.getElementById("policyError").textContent = "Please accept the privacy policy.";
        checkBox.classList.add("is-invalid");
        valid = false;
    } else {
        checkBox.classList.remove("is-invalid");
        checkBox.classList.add("is-valid");
    }
 
    if (valid) {
        // Hide form, show loader
        enrollmentForm.style.display = "none";
        loadingSpinner.style.display = "block";
 
        const formData = {
            user_name: fullName.value.trim(),
            email: email.value.trim(),
            phone: contact.value.trim(),
            phone_code: "+91",
            url: window.location.href,
            ip_address: ip || "00:00:000:000",
            dob: "00-00-0000",
            city: "default",
            state: "default"
        };
 
        console.log("Data: ", formData);
 
        const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
        fetch(`${apiBase}/api/v1/crm_leads`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(formData)
        })
            .then(response => response.json())
            .then(result => {
                console.log("API Response:", result);
 
                // ✅ Check API response status
                if (result.status === 200 && !result.error && result.data?.insertId) {
                    // Store insertId in session
                    sessionStorage.setItem("leadInsertId", result.data.insertId);
                    console.log("Stored insertId:", result.data.insertId);
 
                    // Simulate OTP UI after success
                    setTimeout(() => {
                        loadingSpinner.style.display = "none";
                        otpSection.style.display = "block";
                    }, 1000);
 
                } else {
                    // ❌ API returned an error
                    loadingSpinner.style.display = "none";
                    enrollmentForm.style.display = "block";
 
                    // Show readable error message to user
                    alert(result.message || "Failed to process your enrollment. Please try again later.");
                }
            })
            .catch(error => {
                // ❌ Network or server error
                console.error("Error:", error);
                loadingSpinner.style.display = "none";
                enrollmentForm.style.display = "block";
                alert("Something went wrong while connecting to the server. Please try again.");
            });
    }
}
function verifyOtp() {
    const otpInput = document.getElementById("otpCode");
    const otpError = document.getElementById("otpError");
    const verifyBtn = document.getElementById("verifyOtpBtn");
 
    // Reset previous errors
    otpError.textContent = "";
 
    const otpValue = otpInput.value.trim();
    const userId = sessionStorage.getItem("leadInsertId");
 
    // Validation before API call
    if (!otpValue) {
        otpError.textContent = "OTP is required.";
        otpInput.classList.add("is-invalid");
        return;
    } else {
        otpInput.classList.remove("is-invalid");
    }
 
    if (!userId) {
        alert("User ID not found. Please restart the process.");
        return;
    }
 
    // Disable button temporarily
    verifyBtn.disabled = true;
    verifyBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2"></span>Verifying...`;
 
    const payload = {
        user_id: userId,
        otp: otpValue
    };
 
    console.log("Verifying OTP with payload:", payload);
 
    const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
    fetch(`${apiBase}/api/v1/verify-otp`, {  // 🔹 Adjust to your backend URL
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    })
        .then(response => response.json())
        .then(result => {
            console.log("OTP Verification Response:", result);
 
            if (result.status === 200 && !result.error) {
                // ✅ OTP verified successfully
                alert("✅ OTP Verified Successfully!");
                const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "https://collegeall.com";
                window.location.href = `${appUrl}/thank-you/`; // or any redirect page
            } else {
                // ❌ OTP verification failed
                otpError.textContent = result.message || "Invalid OTP. Please try again.";
                otpInput.classList.add("is-invalid");
            }
        })
        .catch(error => {
            console.error("Error verifying OTP:", error);
            alert("Something went wrong while verifying OTP. Please try again.");
        })
        .finally(() => {
            verifyBtn.disabled = false;
            verifyBtn.innerHTML = `<i class="bi bi-check2-circle me-2"></i>Verify OTP`;
        });
}