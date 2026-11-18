let enrollmentModal = null;


window.addEventListener("DOMContentLoaded", () => {

    fetch("../modal-form/index.html")
        .then(res => res.text())
        .then(html => {
            document.getElementById("modalContainer").innerHTML = html;

            const modalEl = document.getElementById("enrollmentModal");

            if (modalEl) {
                enrollmentModal = new bootstrap.Modal(modalEl, {
                    backdrop: 'static',
                    keyboard: false
                });
            }

            const form = document.getElementById("enrollmentForm");
            if (form) {
                form.addEventListener("submit", handleSubmit);
            }
        });

    // ✅ SAFE: button may exist before or after modal load
    document.addEventListener("click", (e) => {
        if (e.target.closest("#applyNowBtn")) {
            if (!enrollmentModal) {
                console.warn("Modal not ready yet");
                return;
            }
            enrollmentModal.show();
        }
    });

    // ===============================
    // IP STORE (FIXED)
    // ===============================
    async function storeUserIP() {
        try {
            if (!sessionStorage.getItem("ip")) {
                const res = await fetch("https://api.ipify.org?format=json");
                const data = await res.json();
                sessionStorage.setItem("ip", data.ip);
            }
        } catch (error) {
            console.error("IP fetch failed:", error);
        }
    }
    storeUserIP();

    // Call it automatically on page load
    window.addEventListener("load", storeUserIP);

    function handleSubmit(event) {
        event.preventDefault();
        const ipAddress = sessionStorage.getItem("ip");
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
                ip_address: ipAddress || "00:00:000:000",
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
 
  
});
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
document.addEventListener("DOMContentLoaded", async () => {

    const INTERVAL = 5000;
    let currentIndex = 0;

    const adImage = document.getElementById("adImage");
    const adLink = document.getElementById("adLink");
    const adContainer = document.getElementById("adContainer");

    let ads = [];

    try {
        const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
        const response = await fetch(`${apiBase}/api/v1/ads/active`);
        const result = await response.json();

        if (result.status !== 200 || !Array.isArray(result.data) || result.data.length === 0) {
            console.warn("No active ads found");
            return;
        }

        // Normalize backend response
        ads = result.data.map(ad => ({
            image_url: ad.adImage,      // Base64 image
            redirect_url: ad.adUrl
        }));

    } catch (error) {
        console.error("Failed to load ads:", error);
        return;
    }

    if (!ads.length) return;

    adContainer.style.display = "block";

    // Initial render
    renderAd(ads[0]);

    // Rotate ads
    setInterval(() => {
        currentIndex = (currentIndex + 1) % ads.length;
        renderAd(ads[currentIndex]);
    }, INTERVAL);

    function renderAd(ad) {
        adImage.style.opacity = 0;

        setTimeout(() => {
            adImage.src = ad.image_url;
            adLink.href = ad.redirect_url || "#";
            adImage.style.opacity = 1;
        }, 300);
    }

    adImage.onerror = () => {
        const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
        adImage.src = `${apiBase}/banner_compressed/LIBA.webp`;
    };
});

document.addEventListener("DOMContentLoaded", async () => {

    const INTERVAL = 5000;
    let currentIndex = 0;
    let ads = [];

    // ===== Banner Elements =====
    const adImage = document.getElementById("adImage");
    const adLink = document.getElementById("adLink");
    const adContainer = document.getElementById("adContainer");

    // ===== Popup Elements =====
    const popup = document.getElementById("adPopup");
    const popupImg = document.getElementById("popupAdImage");
    const popupLink = document.getElementById("popupAdLink");
    const closeBtn = document.getElementById("adPopupClose");

    // ===== Fetch Ads =====
    try {
        const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
        const response = await fetch(`${apiBase}/api/v1/ads/active`);
        const result = await response.json();

        if (result.status !== 200 || !Array.isArray(result.data) || !result.data.length) {
            console.warn("No active ads available");
            return;
        }

        ads = result.data.map(ad => ({
            image_url: ad.adImage,
            redirect_url: ad.adUrl
        }));

    } catch (err) {
        console.error("Ads API failed:", err);
        return;
    }

    if (!ads.length) return;

    // ==========================
    // 🔁 Banner Rotation Logic
    // ==========================
    if (adContainer && adImage && adLink) {
        adContainer.style.display = "block";
        renderBannerAd(ads[0]);

        setInterval(() => {
            currentIndex = (currentIndex + 1) % ads.length;
            renderBannerAd(ads[currentIndex]);
        }, INTERVAL);
    }

    function renderBannerAd(ad) {
        adImage.style.opacity = 0;

        setTimeout(() => {
            adImage.src = ad.image_url;
            adLink.href = ad.redirect_url || "#";
            adImage.style.opacity = 1;
        }, 300);
    }

    adImage && (adImage.onerror = () => {
        adImage.src = "/assets/img/default-ad.png";
    });

    // ==========================
    // 🪟 Popup Ad Logic (Random)
    // ==========================
    if (popup && popupImg && popupLink) {
        const randomAd = ads[Math.floor(Math.random() * ads.length)];
        popupImg.src = randomAd.image_url;
        popupLink.href = randomAd.redirect_url || "#";
        popup.style.display = "flex";
    }

    closeBtn && closeBtn.addEventListener("click", () => {
        popup.style.display = "none";
    });

})