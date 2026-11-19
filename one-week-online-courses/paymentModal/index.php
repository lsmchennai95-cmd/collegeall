<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collegeall.com Enrollment Form | CollegeAll.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #0046ad;
            --primary-dark: #003a92;
            --secondary: #f3c613;
            --dark: #1e1f23;
            --light: #f7f7f7;
            --success: #198754;
            --gradient: linear-gradient(135deg, #0046ad 0%, #002a66 100%);
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --hover-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: #333;
            line-height: 1.6;
        }

        .course-header {
            background: var(--gradient);
            color: white;
            padding: 100px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .course-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }

        .course-header .container {
            position: relative;
            z-index: 1;
        }

        .course-header h1 {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            text-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .enroll-btn {
            background: var(--secondary);
            border: none;
            color: #000;
            font-weight: bold;
            padding: 14px 30px;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(243,198,19,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .enroll-btn:hover {
            background-color: #e0b411;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(243,198,19,0.4);
        }

        /* Modal Styles */
        .modal-content {
            border-radius: 16px;
            border: none;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .modal-header {
            background: var(--gradient);
            color: white;
            border-bottom: none;
            padding: 25px 30px;
            position: relative;
        }

        .modal-header .btn-close {
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .modal-header .btn-close:hover {
            opacity: 1;
        }

        .modal-title {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .modal-body {
            padding: 30px;
        }

        .form-label {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px 15px;
            border: 2px solid #e1e5ee;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(0, 70, 173, 0.15);
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        .form-control.is-valid {
            border-color: var(--success);
        }

        .invalid-feedback, .valid-feedback {
            font-size: 0.85rem;
            margin-top: 5px;
        }

        .submit-btn {
            background: var(--gradient);
            color: white;
            font-weight: 600;
            padding: 14px 20px;
            border-radius: 50px;
            border: none;
            width: 100%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin-top: 10px;
            box-shadow: 0 6px 20px rgba(0, 70, 173, 0.3);
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 70, 173, 0.4);
        }

        .submit-btn:disabled {
            background: #6c757d;
            transform: none;
            box-shadow: none;
            cursor: not-allowed;
        }

        .form-note {
            font-size: 0.85rem;
            color: #6c757d;
            text-align: center;
            margin-top: 20px;
        }

        .success-message {
            display: none;
            text-align: center;
            padding: 30px;
        }

        .success-message i {
            font-size: 4rem;
            color: var(--success);
            margin-bottom: 20px;
        }

        .success-message h4 {
            color: var(--success);
            margin-bottom: 15px;
        }

        .loading-spinner {
            display: none;
            text-align: center;
            padding: 20px;
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
            color: var(--primary);
        }

        /* ===== Smaller Modal & Compact Form ===== */
        .modal-dialog {
            max-width: 480px; /* reduced width */
        }

        .modal-body {
            padding: 20px 25px; /* reduced padding */
        }

        .modal-header {
            padding: 18px 25px;
        }

        .form-control {
            padding: 10px 12px; /* reduced field height */
            font-size: 0.95rem;
        }

        .submit-btn {
            padding: 12px 18px;
            font-size: 1rem;
            margin-top: 8px;
        }

        .promo-section {
            margin-bottom: 1rem;
        }

        .input-group .btn {
            padding: 8px 14px;
            font-size: 0.9rem;
        }

        .course-header h1 {
            font-size: 2.8rem;
        }

        @media (max-width: 576px) {
            .modal-body {
                padding: 20px;
            }
            
            .modal-header {
                padding: 20px;
            }
            
            .modal-dialog {
                max-width: 95%;
                margin: 10px;
            }
            .modal-body {
                padding: 18px;
            }
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
    <!-- Enrollment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">
                        <i class="bi bi-person-plus-fill me-2"></i>Enroll Now!
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Loading Spinner (Initially Hidden) -->
                    <div class="loading-spinner text-center" id="loadingSpinner" style="display:none;">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Processing...</span>
                        </div>
                        <p class="mt-3">Processing your enrollment...</p>
                    </div>

                    <!-- Course Info -->
                    <h6 id="courseTitle" class="fw-bold mb-2">Loading course...</h6>
                    <p id="coursePrice" class="fs-5 mb-3 text-success"></p>
                    
                    <p id="discountedPrice" class="fs-5 fw-bold text-success"></p>

                    <!-- Promo Code -->
                    <div class="mb-4 promo-section">
                        <label for="promoCode" class="form-label">Have a Promo Code?</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="promoCode" placeholder="Enter code (optional)">
                            <button type="button" class="btn btn-outline-primary" id="applyPromoBtn">Apply</button>
                        </div>
                        <!-- ✅ Message area -->
                        <div id="promoMsg" class="mt-2"></div>
                    </div>

                    <!-- Hidden Inputs -->
                    <input type="hidden" id="courseId">
                    <input type="hidden" id="course">
                    <input type="hidden" id="amount">

                    <!-- Enrollment Form -->
                    <form id="enrollmentForm" onsubmit="handleSubmit(event)">
                        <div class="mb-4">
                            <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                            <div class="invalid-feedback" id="nameError"></div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                            <div class="invalid-feedback" id="emailError"></div>
                        </div>

                        <div class="mb-4">
                            <label for="contact" class="form-label">Contact Number <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="contact" placeholder="Enter your 10-digit mobile number" pattern="[0-9]{10}">
                            <div class="invalid-feedback" id="contactError"></div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="agreePolicy">
                            <label class="form-check-label" for="agreePolicy">
                                I agree to the <a href="https://collegeall.com/privacy-policy/" class="text-primary">privacy policy</a> <span class="text-danger">*</span>
                            </label>
                            <div class="invalid-feedback" id="policyError"></div>
                        </div>

                        <button type="submit" class="submit-btn w-100" id="submitBtn">
                            <i class="bi bi-send-check me-2"></i>Submit Enrollment
                        </button>

                        <p class="form-note mt-3 text-center">
                            Our admission counselor will contact you within 24 hours to guide you through the enrollment process.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>