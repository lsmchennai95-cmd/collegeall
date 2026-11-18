<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>College All - Blog </title>
    <meta name="description" content="Stay updated with the latest news, trends, and updates from top colleges and universities across India. Explore blogs on admissions, courses, scholarships, placements, and more.">
    <meta name="keywords" content="CollegeAll Blog, College News, Admission 2025, Indian Colleges, Top Universities, MBA, Engineering, BBA, Scholarships, Education Trends, Career Guidance">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="https://api.collegeall.com/Logo/fav.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '25443278008607273');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=25443278008607273&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8359931951854136"
     crossorigin="anonymous"></script>
</head>

<body class="main-blog">
    <!-- Header -->
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <!-- Featured Posts -->
    <section class="featured mt-5">
        <div class="container">
            <h2 class="section-title">Featured Articles</h2>
            <div class="featured-grid" id="featuredGrid"></div>
            <div class="row" id="featuredGridBottom"></div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses container">
        <!-- Heading & Nav Button -->
        <div class="row justify-content-between align-items-end mb-15" style="margin-right: 0px;">
            <div class="col-xl-6">
                <div class="section-tittle mb-30">
                    <h3>Popular Courses</h3>
                </div>
            </div>
            <div class="col-xl-8 col-md-9">
                <div class="properties__button">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-mba-tab" data-toggle="tab" href="#nav-mba" role="tab">MBA</a>
                            <a class="nav-item nav-link" id="nav-mca-tab" data-toggle="tab" href="#nav-mca" role="tab">MCA</a>
                            <a class="nav-item nav-link" id="nav-bba-tab" data-toggle="tab" href="#nav-bba" role="tab">BBA</a>
                            <a class="nav-item nav-link" id="nav-bca-tab" data-toggle="tab" href="#nav-bca" role="tab">BCA</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Tab content -->
        <div class="row" style="margin-right: 0px;">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">

                    <!-- MBA Tab -->
                    <div class="tab-pane fade show active" id="nav-mba" role="tabpanel">
                        <div class="row">
                            <!-- Left Details Caption -->
                            <div class="col-xl-6 col-lg-12">
                                <div class="whats-news-single mb-40">
                                    <div class="whates-img">
                                        <img src="assets/img/mba-main.webp" alt="">
                                    </div>
                                    <div class="whates-caption">
                                        <h4><a href="#">Master of Business Administration (MBA)</a></h4>
                                        <span>2 Years | Online Mode</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right side cards -->
                            <div class="col-xl-6 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/finance.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorb">Online MBA</span>
                                                <h4><a href="#">Finance</a></h4>
                                                <p>4 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/operation-management.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorg">Online MBA</span>
                                                <h4><a href="#">Human Resource Management</a></h4>
                                                <p>4 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/marketing-management.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorr">Online MBA</span>
                                                <h4><a href="#">Marketing Management</a></h4>
                                                <p>4 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/supply-chain.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorb">Online MBA</span>
                                                <h4><a href="#">Operation Supply chain Management</a></h4>
                                                <p>4 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MCA Tab -->
                    <div class="tab-pane fade" id="nav-mca" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="whats-news-single mb-40">
                                    <div class="whates-img">
                                        <img src="assets/img/computer.webp" alt="">
                                    </div>
                                    <div class="whates-caption">
                                        <h4><a href="#">Master of Computer Applications (MCA)</a></h4>
                                        <span>3 Years | Online Mode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/data-science.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorb">Online MCA</span>
                                                <h4><a href="#">AI & Data Science</a></h4>
                                                <p>4 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/cloud-computing.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorg">Online MCA</span>
                                                <h4><a href="#">Cloud Computing</a></h4>
                                                <p>4 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/cyber-security-.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorr">Online MCA</span>
                                                <h4><a href="#">Cyber Security</a></h4>
                                                <p>4 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/ai-ml.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorb">Online MCA</span>
                                                <h4><a href="#">AI & ML</a></h4>
                                                <p>4 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BBA Tab -->
                    <div class="tab-pane fade" id="nav-bba" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="whats-news-single mb-40">
                                    <div class="whates-img">
                                        <img src="assets/img/bba.webp" alt="">
                                    </div>
                                    <div class="whates-caption">
                                        <h4><a href="#">Bachelor of Business Administration (BBA)</a></h4>
                                        <span>3 Years | Online Mode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/fintech.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorb">Online BBA</span>
                                                <h4><a href="#">Fintech</a></h4>
                                                <p>6 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/bba-general.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorg">Online BBA</span>
                                                <h4><a href="#">General</a></h4>
                                                <p>6 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/digital.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorr">Online BBA</span>
                                                <h4><a href="#">Digital Marketing</a></h4>
                                                <p>6 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BCA Tab -->
                    <div class="tab-pane fade" id="nav-bca" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="whats-news-single mb-40">
                                    <div class="whates-img">
                                        <img src="assets/img/cloud.webp" alt="">
                                    </div>
                                    <div class="whates-caption">
                                        <h4><a href="#">Bachelor of Computer Applications (BCA)</a></h4>
                                        <span>3 Years | Online Mode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/cloud-computing.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorb">Online BCA</span>
                                                <h4><a href="#">Cloud Computing</a></h4>
                                                <p>6 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/cyber-security-.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorg">Online BCA</span>
                                                <h4><a href="#">Cyber Security</a></h4>
                                                <p>6 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="assets/img/data-science.webp" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorr">Online BCA</span>
                                                <h4><a href="#">Data Science Analytics</a></h4>
                                                <p>6 Semesters</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Nav Card -->
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news">
        <div class="container">
            <h2 class="section-title">Latest Education News</h2>

            <div class="news-grid">
                <div class="news-card">
                    <div class="news-image">
                        <img src="./assets/img/graduation1.webp" alt="Graduation">
                    </div>
                    <div class="news-content">
                        <span class="news-category">EVENTS</span>
                        <h3>Congratulations to Our Latest MBA Graduates</h3>
                        <div class="meta">
                            <span><i class="far fa-calendar"></i> 1 hour ago</span>
                        </div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="./assets/img/graduation2.webp" alt="Convocation">
                    </div>
                    <div class="news-content">
                        <span class="news-category">Graduated</span>
                        <h3>MCA Batch 2023-25 Successfully Completed</h3>
                        <div class="meta">
                            <span><i class="far fa-calendar"></i> 3 hours ago</span>
                        </div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="./assets/img/scholorship.webp" alt="Scholarship">
                    </div>
                    <div class="news-content">
                        <span class="news-category">SCHOLARSHIPS</span>
                        <h3>AICTE Announces New Scholarships for MBA Students</h3>
                        <div class="meta">
                            <span><i class="far fa-calendar"></i> 1 day ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending Section -->
    <section class="trending py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title display-5 fw-bold text-primary mb-3">Trending Now</h2>
                    <p class="lead text-muted">Discover the latest updates and news in education</p>
                </div>
            </div>

            <!-- Desktop Carousel -->
            <div id="trendingCarousel" class="carousel slide d-none d-lg-block" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="trending-card h-100">
                                    <div class="trending-image position-relative">
                                        <img src="./assets/img/admission.webp" alt="SRM University" class="w-100">
                                        <span class="badge bg-primary position-absolute top-0 start-0 m-3">Admissions</span>
                                    </div>
                                    <div class="trending-content p-4">
                                        <h4 class="fw-bold mb-3">SRM University Admissions Open for 2025</h4>
                                        <div class="meta text-muted d-flex align-items-center">
                                            <i class="far fa-calendar me-2"></i>
                                            <span>July 25, 2025</span>
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm mt-3">Read More</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="trending-card h-100">
                                    <div class="trending-image position-relative">
                                        <img src="./assets/img/placement.webp" alt="IIM Placements" class="w-100">
                                        <span class="badge bg-success position-absolute top-0 start-0 m-3">Placements</span>
                                    </div>
                                    <div class="trending-content p-4">
                                        <h4 class="fw-bold mb-3">IIM 2025 Placement Stats Break Previous Records</h4>
                                        <div class="meta text-muted d-flex align-items-center">
                                            <i class="far fa-calendar me-2"></i>
                                            <span>July 23, 2025</span>
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm mt-3">Read More</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="trending-card h-100">
                                    <div class="trending-image position-relative">
                                        <img src="./assets/img/top-univer.webp" alt="BBA Colleges" class="w-100">
                                        <span class="badge bg-info position-absolute top-0 start-0 m-3">Rankings</span>
                                    </div>
                                    <div class="trending-content p-4">
                                        <h4 class="fw-bold mb-3">Top 10 Colleges for BBA in India - 2025</h4>
                                        <div class="meta text-muted d-flex align-items-center">
                                            <i class="far fa-calendar me-2"></i>
                                            <span>July 22, 2025</span>
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm mt-3">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="trending-card h-100">
                                    <div class="trending-image position-relative">
                                        <img src="./assets/img/top-rank.webp" alt="NIRF Rankings" class="w-100">
                                        <span class="badge bg-warning position-absolute top-0 start-0 m-3">Rankings</span>
                                    </div>
                                    <div class="trending-content p-4">
                                        <h4 class="fw-bold mb-3">NIRF 2025 Rankings Announced: See Top Institutions</h4>
                                        <div class="meta text-muted d-flex align-items-center">
                                            <i class="far fa-calendar me-2"></i>
                                            <span>July 21, 2025</span>
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm mt-3">Read More</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="trending-card h-100">
                                    <div class="trending-image position-relative">
                                        <img src="./assets/img/ai-mba.webp" alt="AI in MBA" class="w-100">
                                        <span class="badge bg-danger position-absolute top-0 start-0 m-3">Technology</span>
                                    </div>
                                    <div class="trending-content p-4">
                                        <h4 class="fw-bold mb-3">How AI Is Transforming the Future of MBA Programs</h4>
                                        <div class="meta text-muted d-flex align-items-center">
                                            <i class="far fa-calendar me-2"></i>
                                            <span>July 20, 2025</span>
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm mt-3">Read More</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="trending-card h-100">
                                    <div class="trending-image position-relative">
                                        <img src="assets/img/remote-learing-mba.webp" alt="Remote Learning" class="w-100">
                                        <span class="badge bg-secondary position-absolute top-0 start-0 m-3">Trends</span>
                                    </div>
                                    <div class="trending-content p-4">
                                        <h4 class="fw-bold mb-3">Remote Learning Trends for Business Education in 2025</h4>
                                        <div class="meta text-muted d-flex align-items-center">
                                            <i class="far fa-calendar me-2"></i>
                                            <span>July 19, 2025</span>
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm mt-3">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#trendingCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#trendingCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- Mobile Horizontal Scroll -->
            <div class="d-lg-none">
                <div class="mobile-scroll-container">
                    <div class="mobile-scroll-wrapper">
                        <div class="mobile-scroll-content">
                            <!-- Card 1 -->
                            <div class="mobile-trending-card">
                                <div class="trending-image position-relative">
                                    <img src="./assets/img/admission.webp" alt="SRM University" class="w-100">
                                    <span class="badge bg-primary position-absolute top-0 start-0 m-2">Admissions</span>
                                </div>
                                <div class="trending-content p-3">
                                    <h4 class="fw-bold mb-2">SRM University Admissions Open for 2025</h4>
                                    <div class="meta text-muted d-flex align-items-center mb-2">
                                        <i class="far fa-calendar me-2"></i>
                                        <span>July 25, 2025</span>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm w-100">Read More</button>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="mobile-trending-card">
                                <div class="trending-image position-relative">
                                    <img src="./assets/img/placement.webp" alt="IIM Placements" class="w-100">
                                    <span class="badge bg-success position-absolute top-0 start-0 m-2">Placements</span>
                                </div>
                                <div class="trending-content p-3">
                                    <h4 class="fw-bold mb-2">IIM 2025 Placement Stats Break Previous Records</h4>
                                    <div class="meta text-muted d-flex align-items-center mb-2">
                                        <i class="far fa-calendar me-2"></i>
                                        <span>July 23, 2025</span>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm w-100">Read More</button>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="mobile-trending-card">
                                <div class="trending-image position-relative">
                                    <img src="./assets/img/top-univer.webp" alt="BBA Colleges" class="w-100">
                                    <span class="badge bg-info position-absolute top-0 start-0 m-2">Rankings</span>
                                </div>
                                <div class="trending-content p-3">
                                    <h4 class="fw-bold mb-2">Top 10 Colleges for BBA in India - 2025</h4>
                                    <div class="meta text-muted d-flex align-items-center mb-2">
                                        <i class="far fa-calendar me-2"></i>
                                        <span>July 22, 2025</span>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm w-100">Read More</button>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="mobile-trending-card">
                                <div class="trending-image position-relative">
                                    <img src="./assets/img/top-rank.webp" alt="NIRF Rankings" class="w-100">
                                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">Rankings</span>
                                </div>
                                <div class="trending-content p-3">
                                    <h4 class="fw-bold mb-2">NIRF 2025 Rankings Announced: See Top Institutions</h4>
                                    <div class="meta text-muted d-flex align-items-center mb-2">
                                        <i class="far fa-calendar me-2"></i>
                                        <span>July 21, 2025</span>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm w-100">Read More</button>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="mobile-trending-card">
                                <div class="trending-image position-relative">
                                    <img src="https://images.unsplash.com/photo-1532614338840-ab30cf10ed36?auto=format&fit=crop&w=1000&q=80" alt="AI in MBA" class="w-100">
                                    <span class="badge bg-danger position-absolute top-0 start-0 m-2">Technology</span>
                                </div>
                                <div class="trending-content p-3">
                                    <h4 class="fw-bold mb-2">How AI Is Transforming the Future of MBA Programs</h4>
                                    <div class="meta text-muted d-flex align-items-center mb-2">
                                        <i class="far fa-calendar me-2"></i>
                                        <span>July 20, 2025</span>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm w-100">Read More</button>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="mobile-trending-card">
                                <div class="trending-image position-relative">
                                    <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?auto=format&fit=crop&w=1000&q=80" alt="Remote Learning" class="w-100">
                                    <span class="badge bg-secondary position-absolute top-0 start-0 m-2">Trends</span>
                                </div>
                                <div class="trending-content p-3">
                                    <h4 class="fw-bold mb-2">Remote Learning Trends for Business Education in 2025</h4>
                                    <div class="meta text-muted d-flex align-items-center mb-2">
                                        <i class="far fa-calendar me-2"></i>
                                        <span>July 19, 2025</span>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm w-100">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Scroll Indicator -->
                    <div class="scroll-indicator mt-3 text-center">
                        <span class="text-muted small">
                            <i class="fas fa-arrows-left-right me-2"></i>
                            Scroll horizontally to view more
                        </span>
                    </div>
                </div>
            </div>

            <!-- Carousel Indicators for Desktop -->
            <div class="row mt-4 d-none d-lg-flex">
                <div class="col-12 text-center">
                    <div class="carousel-indicators position-static">
                        <button type="button" data-bs-target="#trendingCarousel" data-bs-slide-to="0" class="active bg-primary mx-1 rounded-circle" style="width: 12px; height: 12px;" aria-current="true"></button>
                        <button type="button" data-bs-target="#trendingCarousel" data-bs-slide-to="1" class="bg-primary mx-1 rounded-circle" style="width: 12px; height: 12px;"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Transform Your Career?</h2>
            <p>Join thousands of students who have advanced their careers with our programs. Get personalized guidance and start your journey today.</p>
            <button class="btn btn-primary" style="background: white; color: var(--primary);"><a href="https://collegeall.com/" style="text-decoration: none;">Get Started Now <i class="fas fa-arrow-right"></i></a></button>
        </div>
    </section>

    <!-- Footer -->
    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="assets/js/script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>