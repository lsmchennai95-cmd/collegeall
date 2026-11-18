<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Domain & Server Setup Made Easy: Go Live Like a Pro | CollegeAll</title>
    <meta name="title" content="Domain & Server Setup Made Easy: Go Live Like a Pro | CollegeAll Certified">
    <meta name="description" content="Learn domain registration, server setup, DNS, SSL, and website deployment in 7 days. Take your site live confidently with hands-on exercises.">
    <meta name="keywords" content="domain setup, server setup, website hosting, DNS configuration, SSL setup, cPanel, FTP, website deployment, email setup, live website, CollegeAll certified">
    <meta name="author" content="CollegeAll Certified">

    <!-- Open Graph -->
    <meta property="og:title" content="Domain & Server Setup Made Easy: Go Live Like a Pro | CollegeAll">
    <meta property="og:description" content="Launch your website live with proper domain and server setup. Learn hosting, DNS, SSL, cPanel, FTP, and email configuration in 7 days.">
    <meta property="og:image" content="https://collegeall.com/one-week-online-courses/img/dns.webp">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://collegeall.com/one-week-online-courses/courses/backend-and-hosting/domain-server-setup-made-easy/">

    <!-- Theme and Favicon -->
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../css/course.css">
    <link rel="stylesheet" href="../../../index.css">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-17357684990"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
 
        gtag('config', 'AW-17357684990');
    </script>
</head>
<body>

    <?php echo file_get_contents('https://collegeall.com/header.php'); ?>

    <div id="modalContainer"></div>
    
    <!-- Course Header Section -->
    <section class="course-header mt-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-4">Domain & Server Setup Made Easy: Go Live Like a Pro</h1>
                    <p class="lead mb-4">
                        Learn to configure domains, set up hosting servers, and launch websites efficiently. Master DNS, cPanel, FTP, and server essentials for smooth website deployment.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <div class="rating d-flex align-items-center">
                        <span class="fw-bold fs-5 me-1 text-warning">4.5</span>
                        <span class="fs-5 text-warning">★★★★⯪</span>
                        <small class="ms-2">(1,302 reviews)</small>
                        </div>
                        
                        <div class="d-flex align-items-center">
                        <i class="bi bi-people-fill me-2"></i>
                        <span>5,800 students enrolled</span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-success px-3 py-2 rounded-pill">
                        <i class="bi bi-patch-check-fill me-1"></i> CollegeAll Certified
                        </span>
                        <span class="badge bg-info px-3 py-2 rounded-pill text-dark">
                        <i class="bi bi-calendar-week me-1"></i> 1-Week Program
                        </span>
                        <span class="badge bg-warning px-3 py-2 rounded-pill text-dark">
                        <i class="bi bi-clock me-1"></i> 10+ Hours Content
                        </span>
                    </div>

                    <p class="instructor mb-0">
                        <i class="bi bi-person-badge-fill me-2"></i>
                        <strong>Instructor:</strong> Web Hosting Specialist
                    </p>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="price-card">
                        <div class="price mb-2 text-white">₹499 <span class="original-price">₹1,999</span></div>
                        <p class="text-white-50 mb-3">75% discount • Limited time offer</p>
                        <button class="btn buy-btn w-100" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="11">
                            <i class="bi bi-cart-check me-2"></i>Enroll Now
                        </button>
                        <p class="text-white-50 small mt-3 mb-0">30-Day Money-Back Guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="container">
        <div class="stats-section">
            <div class="row text-center">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">15K+</span>
                        <span class="stat-label">Students Enrolled</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Hours of Content</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Real Projects</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">Lifetime</span>
                        <span class="stat-label">Course Access</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container my-5">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8">
                <div class="what-learn mb-5">
                    <h2>What You'll Learn</h2>
                    <ul>
                        <li>Register and configure domains efficiently.</li>
                        <li>Set up hosting servers using cPanel and FTP.</li>
                        <li>Configure DNS, subdomains, and redirects.</li>
                        <li>Deploy websites and test them live.</li>
                        <li>Understand SSL certificates and HTTPS setup.</li>
                        <li>Manage server files, databases, and email accounts.</li>
                        <li>Troubleshoot common hosting issues.</li>
                        <li>Hands-on projects for live website deployment.</li>
                    </ul>
                </div>

                <div class="related-topics">
                    <h4 class="fw-bold mb-4 text-center">
                        <i class="bi bi-server me-2"></i>Technologies & Tools You'll Master
                    </h4>
                    <div class="d-flex flex-wrap justify-content-center">
                        <span class="topic-pill">cPanel</span>
                        <span class="topic-pill">FTP / SFTP</span>
                        <span class="topic-pill">DNS Configuration</span>
                        <span class="topic-pill">Domain Registration</span>
                        <span class="topic-pill">SSL & HTTPS</span>
                        <span class="topic-pill">Email Accounts</span>
                        <span class="topic-pill">Subdomains & Redirects</span>
                        <span class="topic-pill">Server File Management</span>
                        <span class="topic-pill">Database Management</span>
                        <span class="topic-pill">Website Launch & Testing</span>
                    </div>
                </div>

                <div class="coding-exercises mb-5">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-terminal me-2"></i>Hands-On Deployment Exercises
                    </h2>
                    <p class="fs-5 mb-4">
                        Practice setting up domains, deploying websites, managing server files, and configuring DNS. Every exercise ensures you can take a site live confidently.
                    </p>
                    <div class="text-center">
                        <img 
                        src="../../../img/dns.webp" 
                        alt="Domain Server" 
                        class="img-fluid rounded-3 shadow-sm"
                        >
                    </div>
                </div>

                <div class="course-content mb-4">
                    <section class="curriculum">
                        <h2 class="text-center mb-5 fw-bold">7-Day Domain & Server Setup Bootcamp Curriculum</h2>
                        <div class="accordion" id="curriculumAccordion">
                    
                            <!-- Day 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-calendar-check me-2"></i>Day 1 – Introduction to Domains & Hosting
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Understanding domain names and extensions</li>
                                            <li>Hosting types: shared, VPS, dedicated, cloud</li>
                                            <li>Choosing the right hosting plan</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Research and select a domain and hosting provider for practice.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        <i class="bi bi-calendar-check me-2"></i>Day 2 – Domain Registration & DNS Setup
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Registering domains with registrars</li>
                                            <li>Configuring DNS records: A, CNAME, MX</li>
                                            <li>Setting up subdomains and redirects</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Register a practice domain and configure DNS records for testing.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        <i class="bi bi-calendar-check me-2"></i>Day 3 – Hosting Basics & cPanel Overview
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Understanding cPanel interface and tools</li>
                                            <li>Uploading files using File Manager and FTP</li>
                                            <li>Creating databases and email accounts</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Log in to a hosting account and explore cPanel features.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Day 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        <i class="bi bi-calendar-check me-2"></i>Day 4 – File Management & Database Setup
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Uploading and managing website files</li>
                                            <li>Creating MySQL databases</li>
                                            <li>Connecting websites to databases</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Upload a test website and connect it to a database on your server.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        <i class="bi bi-calendar-check me-2"></i>Day 5 – SSL & Website Security
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Installing SSL certificates</li>
                                            <li>Setting up HTTPS for your website</li>
                                            <li>Basic security measures for hosting accounts</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Enable SSL and configure HTTPS for your hosted website.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">
                                        <i class="bi bi-calendar-check me-2"></i>Day 6 – Email Setup & Testing
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Creating professional email accounts</li>
                                            <li>Configuring email forwarding</li>
                                            <li>Testing email functionality</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Set up an email account for your domain and send test emails.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 7 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven">
                                        <i class="bi bi-calendar-check me-2"></i>Day 7 – Final Project & Live Session
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Deploy a complete live website with domain and server setup</li>
                                            <li>Apply all learned hosting, DNS, and security techniques</li>
                                            <li>Live Q&A session with the instructor</li>
                                        </ul>
                                        <strong>Final Project:</strong>
                                        <p>Launch a fully functional website with a custom domain, database, and email configured using
                                            everything learned in the course.</p>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </section>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-4">
                <div class="subscription-section">
                    <img src="../../../img/dns.webp" 
                        alt="Domain Server" 
                        class="img-fluid rounded-3 mb-3">

                    <p class="lead mb-4">
                    Master domain registration, server configuration, DNS, SSL, and live website deployment — 
                    and go live like a pro with confidence, managing every aspect of your hosting setup.
                    </p>

                    <hr>
                    
                    <div class="mb-3">
                        <p class="price-off mb-1">₹499 <span class="original-price-off">₹1,999</span></p>
                        <p class="text-success mb-0">75% discount • Limited time offer</p>
                    </div>
                    
                    <p class="blink mb-3" id="countdown">1 day left at this price!</p>
                    
                    <button class="btn subscription-btn" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="11">
                        <i class="bi bi-cart-check me-2"></i>Enroll Now
                    </button>
                    
                    <p class="small text-muted mt-3 mb-2">30-Day Money-Back Guarantee</p>
                    
                    <div class="mt-4">
                        <h5 class="mb-3">This course includes:</h5>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-play-circle-fill text-primary me-2"></i>
                                <span>20+ hours on-demand video</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-file-text-fill text-primary me-2"></i>
                                <span>10+ coding exercises</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-download text-primary me-2"></i>
                                <span>Downloadable resources</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-phone text-primary me-2"></i>
                                <span>Access on mobile and TV</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-award-fill text-primary me-2"></i>
                                <span>Certificate of completion</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php echo file_get_contents('https://collegeall.com/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="../../../js/course.js"></script>
    
</body>
</html>