<?php
if (!defined('COLLEGEALL_BOOTSTRAPPED')) {
    require_once __DIR__ . '/config/bootstrap.php';
}
echo render_app_config_script();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNHD5DRD" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
<nav class="navbar navbar-expand-lg sticky-top"
    style="background-color:#fff; box-shadow:0 1px 5px rgba(0,0,0,0.1); z-index:1030;">
    <div class="container">
 
        <!-- Brand -->
        <a class="navbar-brand" href="<?php echo app_url('/'); ?>" style="display:flex; align-items:center;">
            <img src="<?php echo asset_url('/img/Logo/collegeallLogo.png'); ?>" height="38" alt="CollegeAll logo">
        </a>
 
        <!-- mobile icons -->
        <div class="d-flex gap-1 d-lg-none ms-auto">
            <!-- search icon only mobile -->
            <button class="border-0 bg-transparent" id="mobileSearchBtn" aria-label="Search">
                <i class="bi bi-search fs-5 text-dark"></i>
            </button>
 
            <!-- mobile menu trigger -->
            <button class="navbar-toggler border-0 fs-1 bg-transparent" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenuCanvas">
                <i class="bi bi-list"></i>
            </button>
        </div>
 
        <!-- desktop search -->
        <div class="mx-lg-3 flex-grow-1 d-none d-lg-flex">
            <div class="search-container w-100  d-flex align-items-center border rounded-pill px-3"
                style="border-color:#ddd; height:35px;">
                <input class="form-control border-0 shadow-none" type="search" id="searchInput"
                    placeholder="Search Colleges, Courses, or Exams..." aria-label="Search" style="font-size:0.7rem; background:none;">
                <button class="btn text-secondary px-2"><i class="bi bi-search"></i></button>
            </div>
        </div>
 
        <!-- desktop nav items -->
        <ul class="navbar-nav d-none d-lg-flex align-items-center ms-auto gap-3">
            <!-- Program Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="programDropdown" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false" style="color:#333; font-weight:500; font-size:0.8rem;">
                    Find Program
                </a>
                <div class="dropdown-menu dropdown-menu-wide" id="dropdownMenu">
                    <div class="dropdown-body">
                        <div class="uni-list" id="uniList">
                            Loading universities...
                        </div>
                        <div class="course-container">
                            <div class="course-list" id="courseList">
                                Loading courses...
                            </div>
                        </div>
                        
                    </div>
                </div>
            </li>

            <!-- Tools Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="toolsDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="color:#333; font-weight:500; font-size:0.8rem;">
                    Free Tools
                </a>
                <ul class="dropdown-menu shadow-sm border-0 rounded-3" aria-labelledby="toolsDropdown"
                    style="font-size:0.8rem;">
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/qr-generator.php'); ?>">QR Code Generator</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/Password-Generator.php'); ?>">Password Generator</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/data-convertor.php'); ?>">Array to CSV Convertor</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/bmi-calculator.php'); ?>">BMI Calculator</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/color-palette.php'); ?>">Color Picker</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/gradient-generator.php'); ?>">Gradient Generator</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/image-compressor.php'); ?>">Image Compressor</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/api-tester.php'); ?>">Api Tester</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/emi-calculator.php'); ?>">EMI Calculator</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/tools/resume-builder/'); ?>">Resume Builder</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item fw-semibold text-primary" href="<?php echo app_url('/tools/'); ?>">More Tools</a></li>
                </ul>
            </li>
 
            <!-- Blogs Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="blogsDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="color:#333; font-weight:500; font-size:0.8rem;">
                    Blogs
                </a>
                <ul class="dropdown-menu shadow-sm border-0 rounded-3" aria-labelledby="blogsDropdown"
                    style="font-size:0.8rem;">
                    <li><a class="dropdown-item"
                            href="<?php echo app_url('/blogs/vignan-university-online-mba/'); ?>">Vignan University Online
                            MBA</a></li>
                    <li><a class="dropdown-item"
                            href="<?php echo app_url('/blogs/upgrade-your-skills-with-online-mba-in-project-management/'); ?>">Upgrade
                            Your Skills with Online MBA in Project Management</a></li>
                    <li><a class="dropdown-item"
                            href="<?php echo app_url('/blogs/online-mcom-general-kurukshetra-university-ugc-approved-postgraduate-degree/'); ?>">Online
                            M.Com (Kurukshetra University)</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/blogs/online-mba-program/'); ?>">Online MBA
                            Program</a></li>
                    <li><a class="dropdown-item"
                            href="<?php echo app_url('/blogs/mba-in-international-finance-accredited-by-acca-uk-jain-university-online/'); ?>">MBA
                            in International Finance (Jain University)</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/blogs/gen-z-online-mba/'); ?>">Gen Z Online
                            MBA</a></li>
                    <li><a class="dropdown-item" href="<?php echo app_url('/blogs/boost-your-salary/'); ?>">Boost Your
                            Salary</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item fw-semibold text-primary" href="<?php echo app_url('/blogs/'); ?>">View All
                            Blogs</a></li>
                </ul>
            </li>
 
            <!-- CTAs -->
            <li class="nav-item">
                <a href="<?php echo app_url('/university-suggestions/'); ?>" class="btn"
                    style="background: #ff3131 !important; color:#fff; border-radius:50px; padding:6px 16px; font-size:0.8rem;">
                    <i class="bi bi-lightning-fill"></i> AI Match
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo app_url('/signin/'); ?>" class="btn"
                    style="border:1px solid #0d6efd; color:#0d6efd; border-radius:50px; padding:6px 16px; font-size:0.8rem;">Log
                    in</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo app_url('/signup/'); ?>" class="btn"
                    style="background:#0d6efd; color:#fff; border-radius:50px; padding:6px 16px; font-size:0.8rem;">Sign
                    up</a>
            </li>
        </ul>
 
    </div>
</nav>
 
<!-- MOBILE MENU OFFCANVAS -->
<div class="offcanvas offcanvas-end" id="mobileMenuCanvas" style="width:300px;">
    <div class="offcanvas-header" style="border-bottom:1px solid #eee;">
        <button class="border-0 bg-transparent ms-auto" data-bs-dismiss="offcanvas">
            <i class="bi bi-x-lg fs-5"></i>
        </button>
    </div>
 
    <div class="offcanvas-body px-3 pt-3 mb-3">
 
        <!-- Mobile CTAs -->
        <div class="d-flex flex-column gap-2 mt-3 pb-3 border-bottom" style="border-color:red;">
            <a href="<?php echo app_url('/university-suggestions/'); ?>"
                class="d-flex align-items-center gap-2 text-decoration-none text-dark fw-semibold"
                style="padding:8px 0;">
                <i class="bi bi-lightning-fill text-primary"></i> AI Match
            </a>
            <a href="<?php echo app_url('/signin/'); ?>" class="d-flex align-items-center gap-2 text-decoration-none text-dark"
                style="padding:8px 0;">
                <i class="bi bi-box-arrow-in-right text-primary"></i> Log in
            </a>
            <a href="<?php echo app_url('/signup/'); ?>" class="d-flex align-items-center gap-2 text-decoration-none text-dark"
                style="padding:8px 0;">
                <i class="bi bi-person-plus-fill text-primary"></i> Sign up
            </a>
        </div>
 
        <!-- Free Tools Dropdown -->
        <div class="dropdown mt-4">
            <p class="fw-semibold mb-2" data-bs-toggle="dropdown" style="cursor:pointer; font-size:1rem;">
                <i class="bi bi-tools"></i> Free Tools List
            </p>
            <div class="dropdown-menu show border-0 shadow-sm p-3"
                style="position:relative; display:block; width:100%; font-size:0.8rem;">
                <div class="d-flex flex-column gap-2">
                    <a href="<?php echo app_url('/tools/qr-generator.php'); ?>" class="text-dark text-decoration-none">QR Code Generator</a>
                    <a href="<?php echo app_url('/tools/Password-Generator.php'); ?>" class="text-dark text-decoration-none">Password Generator</a>
                    <a href="<?php echo app_url('/tools/data-convertor.php'); ?>" class="text-dark text-decoration-none">Array to CSV Convertor</a>
                    <a href="<?php echo app_url('/tools/Age-calculator.php'); ?>" class="text-dark text-decoration-none">Age Calculator</a>
                    <a href="<?php echo app_url('/tools/stopwatch.php'); ?>" class="text-dark text-decoration-none">Stopwatch</a>
                    <a href="<?php echo app_url('/tools/countdown-timer.php'); ?>" class="text-dark text-decoration-none">Countdown Timer</a>
                    <a href="<?php echo app_url('/tools/box-shadow-generator.php'); ?>" class="text-dark text-decoration-none">Box Shadow CSS Generator</a>
                    <a href="<?php echo app_url('/tools/Word-character-counter.php'); ?>" class="text-dark text-decoration-none">Word Counter</a>
                    <a href="<?php echo app_url('/tools/color-palette.php'); ?>" class="text-dark text-decoration-none">Color Picker</a>
                    <a href="<?php echo app_url('/tools/gradient-generator.php'); ?>" class="text-dark text-decoration-none">Gradient Generator</a>
                </div>
            </div>
        </div>
 
        <!-- Blogs Dropdown -->
        <div class="dropdown mt-4">
            <p class="fw-semibold mb-2" data-bs-toggle="dropdown" style="cursor:pointer; font-size:1rem;">
                <i class="bi bi-journal-text"></i> Blogs
            </p>
            <div class="dropdown-menu show border-0 shadow-sm p-3"
                style="position:relative; display:block; width:100%; font-size:0.8rem;">
                <div class="d-flex flex-column gap-2">
                    <a href="<?php echo app_url('/blogs/vignan-university-online-mba/'); ?>"
                        class="text-dark text-decoration-none">Vignan University Online MBA</a>
                    <a href="<?php echo app_url('/blogs/upgrade-your-skills-with-online-mba-in-project-management/'); ?>"
                        class="text-dark text-decoration-none">Upgrade Your Skills with Online MBA in Project Management</a>
                    <a href="<?php echo app_url('/blogs/online-mcom-general-kurukshetra-university-ugc-approved-postgraduate-degree/'); ?>"
                        class="text-dark text-decoration-none">Online M.Com (Kurukshetra University)</a>
                    <a href="<?php echo app_url('/blogs/online-mba-program/'); ?>"
                        class="text-dark text-decoration-none">Online MBA Program</a>
                    <a href="<?php echo app_url('/blogs/mba-in-international-finance-accredited-by-acca-uk-jain-university-online/'); ?>"
                        class="text-dark text-decoration-none">MBA in International Finance (Jain University)</a>
                    <a href="<?php echo app_url('/blogs/gen-z-online-mba/'); ?>" class="text-dark text-decoration-none">Gen Z Online MBA</a>
                    <a href="<?php echo app_url('/blogs/boost-your-salary/'); ?>"
                        class="text-dark text-decoration-none">Boost Your Salary</a>
                    <hr style="margin:8px 0;">
                    <a href="<?php echo app_url('/blogs/'); ?>" class="text-primary text-decoration-none fw-semibold">View All Blogs</a>
                </div>
            </div>
        </div>
 
    </div>
</div>
