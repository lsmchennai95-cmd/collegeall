<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>The Complete Web Development Bootcamp | CollegeAll</title>
    <meta name="description"
        content="Master web development with HTML, CSS, JavaScript, and React. Learn to build responsive, modern websites with our certified 1-week program.">
    <meta name="keywords"
        content="web development, HTML, CSS, JavaScript, React JS, frontend development, responsive websites, coding bootcamp, web design, web apps">
    <meta name="author" content="CollegeAll Certified">
    <meta property="og:title" content="The Complete Web Development Bootcamp | CollegeAll">
    <meta property="og:description"
        content="Learn web development fast! HTML, CSS, JavaScript & React in 1 week. Perfect for beginners and aspiring developers.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./img/web-development.webp">

    <!-- Theme and Favicon -->
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./index.css">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-17357684990"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-17357684990');
    </script>

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
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
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
            box-shadow: 0 6px 20px rgba(243, 198, 19, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .enroll-btn:hover {
            background-color: #e0b411;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(243, 198, 19, 0.4);
        }

        #coursePrice {
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        #coursePrice:hover {
            background-color: #d1e7dd; /* light green hover */
            transform: scale(1.05);
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

        .invalid-feedback,
        .valid-feedback {
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

        @media (max-width: 576px) {
            .modal-body {
                padding: 20px;
            }

            .modal-header {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <div id="modalContainer"></div>

    <section class="container-fluid landing-header py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-7">
                    <p class="text-warning fw-bold mb-2 blink">
                        <i class="bi bi-fire me-1"></i> New Batches Starting Soon — Enroll Today!
                    </p>

                    <h1 class="fw-bold mb-4 display-5 text-warning">
                        Learn Smarter. Grow Faster.
                        <span class="text-white">CollegeAll Certified 7-Day Courses</span>
                    </h1>

                    <p class="lead mb-4 text-white">
                        Explore a wide range of <strong>career-boosting short-term programs</strong> designed by
                        experts.
                        From <strong>technology</strong> and <strong>business</strong> to <strong>design</strong>
                        and <strong>digital skills</strong> —
                        learn the most valuable skills for the future, all in just <strong>7 days</strong>.
                        Get certified and move one step closer to your dream career.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <span class="badge bg-success px-3 py-2 rounded-pill">
                            <i class="bi bi-patch-check-fill me-1"></i> CollegeAll Certified
                        </span>
                        <span class="badge bg-info px-3 py-2 rounded-pill text-dark">
                            <i class="bi bi-calendar-week me-1"></i> 7-Day Learning Programs
                        </span>
                        <span class="badge bg-warning px-3 py-2 rounded-pill text-dark">
                            <i class="bi bi-stars me-1"></i> Future-Ready Skill Tracks
                        </span>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-5 text-center mt-4 mt-lg-0 right-image">
                    <img src="https://collegeall.com/img/all_logo/collegeall.png" alt="CollegeAll Learning"
                        class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </section>
    <div class="container py-5 mt-5 course-container">
        <div class="timer" id="countdown">
            <p>Today's Offer Ends In:</p>
            <div class="countdown-blocks">
                <div class="time-box">
                    <span id="hours">00</span>
                    <small>Hours</small>
                </div>
                <div class="time-box">
                    <span id="minutes">00</span>
                    <small>Minutes</small>
                </div>
                <div class="time-box">
                    <span id="seconds">00</span>
                    <small>Seconds</small>
                </div>
            </div>
        </div>
        <h2 class="text-center">1-Week Certification Programs by CollegeAll</h2>
        <!-- Tabs -->
        <div id="courseTabs" class="mb-4 text-center">
            <!-- Tab buttons -->
        </div>

        <!-- Laptop device Course Cards -->
        <div class="row g-4" id="courseContainer">
            <!-- Course Cards -->
        </div>

        <!-- Mobile device Course Cards -->
        <div id="mobileCourseContainer" class="d-none">

        </div>
    </div>
    <!-- Universities Logos Section -->
    <section class="universities-logos-section py-3">
        <div class="container text-center">
            <h2>Our University Partners</h2>
            <p class="subtitle">Trusted by over 100+ universities and millions of learners around the world</p>

            <div id="universities-logos-grid" class="logos-grid"></div>
        </div>
    </section>

    <!-- Footer -->
    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <script src="https://kit.fontawesome.com/a2d9b6a76b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- <script src="./js/course.js"></script> -->

    
    <script src="./js/course.js"></script>
    <script src="script.js"></script>

</body>

</html>