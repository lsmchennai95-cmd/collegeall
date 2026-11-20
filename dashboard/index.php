<?php
require_once __DIR__ . '/../config/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Dashboard | CollegeAll</title>
    <meta name="description" content="Manage your course enrollments, applications, and education counseling status from your personalized CollegeAll student dashboard.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://collegeall.com/dashboard/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Student Dashboard | CollegeAll">
    <meta property="og:description" content="Manage your course enrollments, applications, and education counseling status from your personalized CollegeAll student dashboard.">
    <meta property="og:url" content="https://collegeall.com/dashboard/">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Student Dashboard | CollegeAll">
    <meta name="twitter:description" content="Manage your course enrollments, applications, and education counseling status from your personalized CollegeAll student dashboard.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <meta name="theme-color" content="#1f3c88">    <!-- Bootstrap CSS -->    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <!-- Font Awesome -->    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">    <!-- Custom CSS -->    <link href="./Css/index.css" rel="stylesheet">    <!-- Global site tag (gtag.js) - Google Analytics & Google Ads -->
    <?php render_app_config_script(); ?>
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
    <!-- Header -->
    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-xl-2 sidebar p-0">
                <?php include 'sidebar.php'; ?>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-xl-10 main-content mt-5">
                <!-- Courses Selected Section -->
                <div id="courses-selected" class="content-section">
                    <?php include './Pages/courses-selected.php'; ?>
                </div>

                <!-- Payment Section -->
                <div id="payment" class="content-section d-none">
                    <?php include './Pages/payment.php'; ?>
                </div>

                <!-- Course Details Section -->
                <div id="course-details" class="content-section d-none">
                    <?php include './Pages/course-details.php'; ?>
                </div>

                <!-- User Details Section -->
                <div id="user-details" class="content-section d-none">
                    <?php include './Pages/user-details.php'; ?>
                </div>

                <!-- Certificate Process Section -->
                <div id="certificate-process" class="content-section d-none">
                    <?php include './Pages/certificate-process.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Selection Modal -->
    <div class="modal fade" id="courseModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="fas fa-book me-2"></i>Select Course</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">University:</label>
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle w-100 text-start" type="button" id="universityDropdown" data-bs-toggle="dropdown">
                                -- Select University --
                            </button>
                            <ul class="dropdown-menu w-100" id="universityList" style="height: 250px; overflow-y: auto;">
                                <!-- Universities will be loaded here -->
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Course:</label>
                        <select class="form-select" id="courseSelect" disabled>
                            <option value="">-- Select Course --</option>
                        </select>
                    </div>
                    
                    <div id="courseDetails" class="mt-3 p-3 bg-light rounded" style="display: none;">
                        <h6 class="text-primary mb-3"><i class="fas fa-info-circle me-2"></i>Course Details</h6>
                        <div class="row">
                            <div class="col-4">
                                <small class="text-muted d-block">Fee</small>
                                <strong id="fee">-</strong>
                            </div>
                            <div class="col-4">
                                <small class="text-muted d-block">Duration</small>
                                <strong id="duration">-</strong>
                            </div>
                            <div class="col-4">
                                <small class="text-muted d-block">Course Level</small>
                                <strong id="course_level">-</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveCourse">Enroll Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="./js/script.js"></script>
</body>
</html>