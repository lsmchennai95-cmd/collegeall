const appConfig = window.APP_CONFIG || { appUrl: 'https://collegeall.com', apiBaseUrl: 'https://api.collegeall.com' };
let originalPrice;

fetch((appConfig.appUrl || 'https://collegeall.com') + '/one-week-online-courses/paymentModal/')
.then(response => response.text())
.then(html => {
    document.getElementById('modalContainer').innerHTML = html;

    const paymentModal = document.getElementById('paymentModal');

    paymentModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        const courseId = button.getAttribute('data-id');

        const titleEl = paymentModal.querySelector('#courseTitle');
        const priceEl = paymentModal.querySelector('#coursePrice');
        const amountInput = paymentModal.querySelector('#amount');
        const courseInput = paymentModal.querySelector('#course');
        const idInput = paymentModal.querySelector('#courseId');

        // Reset values
        titleEl.textContent = "Loading course...";
        priceEl.textContent = "";
        amountInput.value = "";
        courseInput.value = "";
        idInput.value = courseId;

        // Fetch course list
        fetch((appConfig.apiBaseUrl || 'https://api.collegeall.com') + '/api/v1/get-one-week-course')
        .then(res => res.json())
        .then(data => {
            const course = data?.data?.courses?.find(c => c.id == parseInt(courseId));
                if (course) {
                    titleEl.textContent = course.title;
                    priceEl.textContent = `Price: ₹${course.price}`;
                    amountInput.value = course.price;
                    courseInput.value = course.title;

                    originalPrice = Number(course.price);
                } else {
                    titleEl.textContent = "Course not found!";
                }
            })
            .catch(() => {
                titleEl.textContent = "Error loading course details!";
            });
    });

    // PROMO CODE

    document.getElementById('applyPromoBtn').addEventListener('click', async function () {
        const promoInput = document.getElementById('promoCode');
        const promoMsg = document.getElementById('promoMsg');
        const priceEl = document.getElementById('coursePrice');
        const discountedEl = document.getElementById('discountedPrice');
        const amountInput = document.getElementById('amount');
        const courseId = document.getElementById('courseId').value;

        const enteredCode = promoInput.value.trim();

        if (!enteredCode) {
            promoMsg.textContent = "Please enter a promo code.";
            promoMsg.className = "text-danger small";
            return;
        }

        const originalAmount = parseFloat(priceEl.textContent.replace(/[^\d.]/g, '')) || 0;

        // Disable button during processing
        const applyBtn = document.getElementById('applyPromoBtn');
        applyBtn.disabled = true;
        applyBtn.textContent = "Checking...";

        try {
            const response = await fetch("' + (appConfig.apiBaseUrl || 'https://api.collegeall.com') + '/api/v1/promo_code/verify", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    code: enteredCode,
                    course_id: courseId,
                    amount: originalAmount
                })
            });

            const result = await response.json();

            if (result?.status === 200 && !result.error) {
                const discountAmount = parseFloat(result.data?.discount_value);
                const finalPrice = originalAmount - discountAmount;

                // Update UI
                priceEl.style.textDecoration = "line-through";
                priceEl.style.color = "red";
                discountedEl.textContent = `Discounted Price: ₹${finalPrice}`;
                promoMsg.textContent = `✅ Promo code applied successfully! You saved ₹${discountAmount}.`;
                promoMsg.className = "text-success small";

                // Update hidden amount field
                amountInput.value = finalPrice;

                // Store in sessionStorage for reference
                sessionStorage.setItem("promo_code", enteredCode);
                sessionStorage.setItem("discounted_price", finalPrice);

            } else {
                // Invalid code or expired
                priceEl.style.textDecoration = "none";
                priceEl.style.color = "green";
                discountedEl.textContent = "";
                promoMsg.textContent = result?.message || "❌ Invalid or expired promo code.";
                promoMsg.className = "text-danger small";
                amountInput.value = originalAmount;

                sessionStorage.removeItem("promo_code");
                sessionStorage.removeItem("discounted_price");
            }
        } catch (error) {
            console.error("Promo verification error:", error);
            promoMsg.textContent = "❌ Error verifying promo code. Try again later.";
            promoMsg.className = "text-danger small";
            amountInput.value = originalAmount;
        } finally {
            applyBtn.disabled = false;
            applyBtn.textContent = "Apply";
        }
    });
});


// count down
const countdownEl = document.getElementById("countdown");

function updateCountdown() {
    const now = new Date();

    // Set target as the end of today (23:59:59)
    const endOfDay = new Date();
    endOfDay.setHours(23, 59, 59, 999);

    const distance = endOfDay - now;

    const hours = Math.floor((distance / (1000 * 60 * 60)));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    countdownEl.innerHTML = `${hours}h ${minutes}m ${seconds}s left today!`;
}

setInterval(updateCountdown, 1000);
updateCountdown();

// Get IP
async function setUserIP() {
    try {
        const existingIP = sessionStorage.getItem("user_ip");
        if (existingIP) return existingIP;

        const res = await fetch("https://api.ipify.org?format=json");
        const data = await res.json();
        const ip = data.ip;

        sessionStorage.setItem("user_ip", ip);
        return ip;
    } catch (error) {
        console.error("Error fetching IP:", error);
        sessionStorage.setItem("user_ip", "0.0.0.0");
        return "0.0.0.0";
    }
}

// Call IP
setUserIP();

// Form
async function handleSubmit(event) {
    event.preventDefault();

    const fullName = document.getElementById("fullName");
    const email = document.getElementById("email");
    const contact = document.getElementById("contact");
    const checkBox = document.getElementById("agreePolicy");
    const enrollmentForm = document.getElementById("enrollmentForm");
    const loadingSpinner = document.getElementById("loadingSpinner");

    const courseId = document.getElementById("courseId").value;
    const courseName = document.getElementById("course").value;
    const promoInput = document.getElementById("promoCode");
    const priceEl = originalPrice;
    const discountedEl = document.getElementById("discountedPrice");
    const ipAddress = sessionStorage.getItem("user_ip") || "0.0.0.0";

    // Reset previous errors
    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("contactError").textContent = "";
    document.getElementById("policyError").textContent = "";

    let valid = true;

    // Basic validation
    if (!fullName.value.trim()) {
        document.getElementById("nameError").textContent = "Full Name is required.";
        fullName.classList.add("is-invalid");
        valid = false;
    } else fullName.classList.remove("is-invalid");

    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email.value.trim())) {
        document.getElementById("emailError").textContent = "Valid Email is required.";
        email.classList.add("is-invalid");
        valid = false;
    } else email.classList.remove("is-invalid");

    const contactPattern = /^[0-9]{10}$/;
    if (!contactPattern.test(contact.value.trim())) {
        document.getElementById("contactError").textContent = "Valid Mobile Number is required.";
        contact.classList.add("is-invalid");
        valid = false;
    } else contact.classList.remove("is-invalid");

    if (!checkBox.checked) {
        document.getElementById("policyError").textContent = "Please accept policy.";
        valid = false;
    }

    if (!valid) return;

    enrollmentForm.style.display = "none";
    loadingSpinner.style.display = "block";
    
    const originalAmount = parseFloat(priceEl) || 499.00;
    const promoCode = promoInput.value.trim().toUpperCase();

    let discountApplied = 0;
    let finalAmount = originalAmount;

    try {
        // ✅ Verify Promo Code
        if (promoCode) {
            const verifyResponse = await fetch("' + (appConfig.apiBaseUrl || 'https://api.collegeall.com') + '/api/v1/promo_code/verify", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    code: promoCode,
                    course_id: courseId,
                    amount: originalAmount
                })
            });

            const verifyResult = await verifyResponse.json();
            if (verifyResult.status === 200 && verifyResult.data?.discount_value) {
                discountApplied = Number(verifyResult.data.discount_value);
                const final_amounts = originalAmount - discountApplied;
                
                finalAmount = final_amounts;
            } else {
                discountApplied = 0;
                finalAmount = originalAmount;
            }
        }

        // ✅ Send Enrollment Data (lead creation + OTP trigger)
        const formData = {
            fullName: fullName.value.trim(),
            email: email.value.trim(),
            phone: contact.value.trim(),
            phone_code: "+91",
            url: window.location.href,
            ip_address: ipAddress,
            course_id: courseId,
            course_name: courseName,
            promo_code: promoCode || "",
            discount_applied: discountApplied.toFixed(2),
            amount: originalAmount,
            final_amount: finalAmount
        };

        console.log("DATA: ", formData);
        

        const response = await fetch((window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl ? window.APP_CONFIG.apiBaseUrl : (appConfig.apiBaseUrl || "https://api.collegeall.com")) + "/api/v1/course_leads", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(formData)
        });

        const result = await response.json();
        console.log("Lead API Result:", result);

        loadingSpinner.style.display = "none";

        if ((result.status === 200 || !result.error) && result.data?.insertedId) {
            sessionStorage.setItem("insert_id", result.data.insertedId);
            if (typeof window.showToast === "function") {
                window.showToast("Enrollment initiated! Please verify your mobile number.", "success");
            }
            showOtpSection(contact.value.trim(), finalAmount);
        } else {
            enrollmentForm.style.display = "block";
            const rawMsg = (result && result.message) ? String(result.message) : "Something went wrong while creating your enrollment.";
            const lowerMsg = rawMsg.toLowerCase();
            const isDuplicateEmail = lowerMsg.includes("already exists") || lowerMsg.includes("already registered") || (lowerMsg.includes("email") && lowerMsg.includes("exist"));

            if (isDuplicateEmail) {
                if (typeof window.showToast === "function") {
                    window.showToast(rawMsg, "warning");
                }
                const emailInput = document.getElementById("email") || (fullName && fullName.form ? fullName.form.querySelector('input[type="email"]') : null);
                if (emailInput) {
                    emailInput.classList.add("is-invalid");
                    emailInput.focus();
                }
            } else {
                const toastType = (result.status === 400 || result.status === 422) ? "warning" : "error";
                if (typeof window.showToast === "function") {
                    window.showToast(rawMsg, toastType);
                }
            }
        }

    } catch (error) {
        console.error("❌ Error:", error);
        loadingSpinner.style.display = "none";
        enrollmentForm.style.display = "block";
        if (typeof window.showToast === "function") {
            window.showToast("Something went wrong while connecting to the server. Please try again.", "error");
        }
    }
}

// ✅ Show OTP Input Section (same modal)
function showOtpSection(contact, amount) {
    const modalBody = document.querySelector(".modal-body");
    modalBody.innerHTML = `
        <div class="text-center">
            <h5 class="mb-3">Verify Your Mobile</h5>
            <p class="text-muted">Enter the 4-digit OTP sent to <strong>${contact}</strong></p>
            <div class="d-flex justify-content-center gap-2 mb-3">
                <input type="text" id="otpInput" class="form-control text-center" maxlength="4" style="max-width:120px; font-size:1.5rem; letter-spacing:5px;">
            </div>
            <div id="otpError" class="text-danger mb-2"></div>
            <button class="btn btn-primary w-100" onclick="verifyOtp('${contact}', ${amount})">Verify OTP</button>
        </div>
    `;
}

// ✅ Verify OTP
async function verifyOtp(contact, amount) {
    const otp = document.getElementById("otpInput").value.trim();
    const otpError = document.getElementById("otpError");
    otpError.textContent = "";
    const inserId = sessionStorage.getItem("insert_id");

    if (otp.length !== 4) {
        otpError.textContent = "Please enter a valid 4-digit OTP.";
        if (typeof window.showToast === "function") {
            window.showToast("Please enter a valid 4-digit OTP.", "warning");
        }
        return;
    }

    try {
        const verifyResponse = await fetch((window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl ? window.APP_CONFIG.apiBaseUrl : (appConfig.apiBaseUrl || "https://api.collegeall.com")) + "/api/v1/course-verify-otp", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ user_id: inserId ,otp: otp })
        });

        const verifyResult = await verifyResponse.json();
        console.log("OTP Verify Result:", verifyResult);

        if (verifyResult.status === 200 || !verifyResult.error) {
            if (typeof window.showToast === "function") {
                window.showToast("OTP Verified Successfully!", "success");
            }
            if (amount <= 0) {
                window.location.href = "../thank-you/";
            } else {
                openRazorpay(amount, contact);
            }
        } else {
            const err = verifyResult.message || "Invalid or expired OTP. Try again.";
            otpError.textContent = err;
            if (typeof window.showToast === "function") {
                window.showToast(err, "warning");
            }
        }
    } catch (error) {
        otpError.textContent = "Something went wrong while verifying OTP.";
        console.error(error);
        if (typeof window.showToast === "function") {
            window.showToast("Something went wrong while verifying OTP.", "error");
        }
    }
}


// ✅ Razorpay Payment
function openRazorpay(amount, contact) {
    const options = {
        key: "rzp_live_03ijsdCrvMvOp9", 
        amount: amount * 100, 
        currency: "INR",
        name: "CollegeAll",
        description: "Course Enrollment Payment",
        handler: function (response) {
            console.log("✅ Payment Successful:", response);
            window.location.href = (appConfig.appUrl || "https://collegeall.com") + "/thank-you/";
        },
        prefill: {
            contact: contact
        },
        theme: {
            color: "#0046ad"
        }
    };
    const rzp = new Razorpay(options);
    rzp.open();
}


// Search
document.getElementById("searchInput").addEventListener("focus", function () {
    window.location.href = (appConfig.appUrl || "https://collegeall.com") + "/search/";
});

document.getElementById("mobileSearchBtn").addEventListener("click", function () {
    window.location.href = (appConfig.appUrl || "https://collegeall.com") + "/search/"; 
});