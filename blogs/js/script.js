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
            if (enrollmentForm) enrollmentForm.style.display = "none";
            if (loadingSpinner) loadingSpinner.style.display = "block";
            const submitBtn = document.getElementById("submitBtn");
            if (submitBtn) submitBtn.disabled = true;

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
                .then(async response => {
                    let result = null;
                    try {
                        result = await response.json();
                    } catch (parseErr) {
                        result = {
                            status: response.status,
                            error: true,
                            message: response.status >= 500
                                ? "Server error. Please try again later."
                                : "Unable to process response. Please try again."
                        };
                    }

                    console.log("API Response:", result);

                    // ✅ Check API response status
                    if ((response.ok || result.status === 200) && !result.error && result.data?.insertId) {
                        // Store insertId in session
                        sessionStorage.setItem("leadInsertId", result.data.insertId);
                        console.log("Stored insertId:", result.data.insertId);

                        if (typeof window.showToast === "function") {
                            window.showToast("Enrollment submitted! Please verify your OTP.", "success");
                        }

                        // Simulate OTP UI after success
                        setTimeout(() => {
                            if (loadingSpinner) loadingSpinner.style.display = "none";
                            if (otpSection) otpSection.style.display = "block";
                            const otpCodeInput = document.getElementById("otpCode");
                            if (otpCodeInput) otpCodeInput.focus();
                        }, 800);
                        return;
                    }

                    // ❌ API returned an error:
                    // 1. Hide the loading spinner immediately
                    if (loadingSpinner) loadingSpinner.style.display = "none";
                    // 2. Restore the enrollment form
                    if (enrollmentForm) enrollmentForm.style.display = "block";
                    if (submitBtn) submitBtn.disabled = false;

                    const rawMsg = (result && result.message) ? String(result.message) : "Failed to process your enrollment. Please try again later.";
                    const lowerMsg = rawMsg.toLowerCase();

                    // Check for duplicate email response
                    const isDuplicateEmail = lowerMsg.includes("already exists") ||
                                             lowerMsg.includes("already registered") ||
                                             (lowerMsg.includes("email") && (lowerMsg.includes("exist") || lowerMsg.includes("duplicate")));

                    if (isDuplicateEmail) {
                        // 3. Display an amber toast notification
                        if (typeof window.showToast === "function") {
                            window.showToast(rawMsg, "warning");
                        }
                        // 4. Highlight the email input
                        if (email) {
                            email.classList.add("is-invalid");
                            email.classList.remove("is-valid");
                            email.focus();
                        }
                        // 5. Display field-level validation feedback
                        const emailError = document.getElementById("emailError");
                        if (emailError) {
                            emailError.textContent = rawMsg;
                        }
                    } else if (lowerMsg.includes("phone") || lowerMsg.includes("mobile") || lowerMsg.includes("contact")) {
                        if (typeof window.showToast === "function") {
                            window.showToast(rawMsg, "warning");
                        }
                        if (contact) {
                            contact.classList.add("is-invalid");
                            contact.classList.remove("is-valid");
                            contact.focus();
                        }
                        const contactError = document.getElementById("contactError");
                        if (contactError) {
                            contactError.textContent = rawMsg;
                        }
                    } else {
                        const isWarning = (result.status === 400 || result.status === 403 || result.status === 422);
                        const toastType = isWarning ? "warning" : "error";
                        if (typeof window.showToast === "function") {
                            window.showToast(rawMsg, toastType);
                        }
                    }
                })
                .catch(error => {
                    // ❌ Network or server error
                    console.error("Network or connection error:", error);
                    if (loadingSpinner) loadingSpinner.style.display = "none";
                    if (enrollmentForm) enrollmentForm.style.display = "block";
                    const submitBtn = document.getElementById("submitBtn");
                    if (submitBtn) submitBtn.disabled = false;

                    if (typeof window.showToast === "function") {
                        window.showToast("Something went wrong while connecting to the server. Please try again.", "error");
                    }
                });
        }
    }
 
  
});
function verifyOtp() {
    const otpInput = document.getElementById("otpCode");
    const otpError = document.getElementById("otpError");
    const verifyBtn = document.getElementById("verifyOtpBtn");

    // Reset previous errors
    if (otpError) otpError.textContent = "";

    const otpValue = otpInput ? otpInput.value.trim() : "";
    const userId = sessionStorage.getItem("leadInsertId");

    // Validation before API call
    if (!otpValue) {
        if (otpError) otpError.textContent = "OTP is required.";
        if (otpInput) {
            otpInput.classList.add("is-invalid");
            otpInput.focus();
        }
        if (typeof window.showToast === "function") {
            window.showToast("Please enter the 6-digit OTP.", "warning");
        }
        return;
    } else {
        if (otpInput) otpInput.classList.remove("is-invalid");
    }

    if (!userId) {
        if (typeof window.showToast === "function") {
            window.showToast("User session not found. Please resubmit the enrollment form.", "warning");
        }
        return;
    }

    // Disable button temporarily
    if (verifyBtn) {
        verifyBtn.disabled = true;
        verifyBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2"></span>Verifying...`;
    }

    const payload = {
        user_id: userId,
        otp: otpValue
    };

    console.log("Verifying OTP with payload:", payload);

    const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
    fetch(`${apiBase}/api/v1/verify-otp`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    })
        .then(async response => {
            let result = null;
            try {
                result = await response.json();
            } catch (e) {
                result = {
                    status: response.status,
                    error: true,
                    message: "Verification failed. Please try again."
                };
            }
            console.log("OTP Verification Response:", result);

            if ((response.ok || result.status === 200) && !result.error) {
                // ✅ OTP verified successfully
                if (typeof window.showToast === "function") {
                    window.showToast("OTP Verified Successfully! Redirecting...", "success");
                }
                const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "https://collegeall.com";
                setTimeout(() => {
                    window.location.href = `${appUrl}/thank-you/`;
                }, 1000);
            } else {
                // ❌ OTP verification failed
                const errorMsg = result.message || "Invalid OTP. Please try again.";
                if (otpError) otpError.textContent = errorMsg;
                if (otpInput) {
                    otpInput.classList.add("is-invalid");
                    otpInput.focus();
                }
                if (typeof window.showToast === "function") {
                    window.showToast(errorMsg, "warning");
                }
            }
        })
        .catch(error => {
            console.error("Error verifying OTP:", error);
            if (typeof window.showToast === "function") {
                window.showToast("Something went wrong while verifying OTP. Please try again.", "error");
            }
        })
        .finally(() => {
            if (verifyBtn) {
                verifyBtn.disabled = false;
                verifyBtn.innerHTML = `<i class="bi bi-check2-circle me-2"></i>Verify OTP`;
            }
        });
}

// Clear field-level invalid states on user input
document.addEventListener("DOMContentLoaded", function () {
    ["email", "contact", "fullName", "otpCode"].forEach(function (id) {
        var el = document.getElementById(id);
        if (el) {
            el.addEventListener("input", function () {
                if (el.classList.contains("is-invalid")) {
                    el.classList.remove("is-invalid");
                    var errEl = document.getElementById(id === "otpCode" ? "otpError" : (id === "fullName" ? "nameError" : id + "Error"));
                    if (errEl) errEl.textContent = "";
                }
            });
        }
    });
});
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