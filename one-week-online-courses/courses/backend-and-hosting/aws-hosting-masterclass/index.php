<?php require_once __DIR__ . '/../../../../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>AWS Hosting Masterclass: Deploy and Manage Cloud Applications | CollegeAll</title>
    <meta name="title" content="AWS Hosting Masterclass: Deploy and Manage Cloud Applications | CollegeAll Certified">
    <meta name="description" content="Learn AWS cloud hosting in 7 days! Deploy applications, manage S3, EC2, Lambda, Route 53, monitoring, and scaling. Hands-on projects included.">
    <meta name="keywords" content="AWS hosting course, cloud deployment, EC2, S3, Lambda, Route 53, CloudWatch, Auto Scaling, serverless applications, cloud engineer, CollegeAll certified">
    <meta name="author" content="CollegeAll Certified">

    <!-- Open Graph -->
    <meta property="og:title" content="AWS Hosting Masterclass: Deploy and Manage Cloud Applications | CollegeAll">
    <meta property="og:description" content="Master AWS hosting: deploy web apps, manage cloud resources, monitor performance, and scale applications in the cloud. 7-day hands-on course.">
    <meta property="og:image" content="https://collegeall.com/one-week-online-courses/img/hosting.webp">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://collegeall.com/one-week-online-courses/courses/backend-and-hosting/aws-hosting-masterclass/">

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

    <?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <div id="modalContainer"></div>
    
    <!-- Course Header Section -->
    <section class="course-header mt-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-4">AWS Hosting Masterclass: Deploy and Manage Cloud Applications</h1>
                    <p class="lead mb-4">
                        Learn to deploy, manage, and scale applications in the cloud using <strong>AWS</strong>. Master EC2, S3, Lambda, Route 53, and other essential AWS services for modern web deployment.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <div class="rating d-flex align-items-center">
                        <span class="fw-bold fs-5 me-1 text-warning">4.5</span>
                        <span class="fs-5 text-warning">★★★★⯪</span>
                        <small class="ms-2">(1,603 reviews)</small>
                        </div>
                        
                        <div class="d-flex align-items-center">
                        <i class="bi bi-people-fill me-2"></i>
                        <span>7,341 students enrolled</span>
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
                        <i class="bi bi-clock me-1"></i> 15+ Hours Content
                        </span>
                    </div>

                    <p class="instructor mb-0">
                        <i class="bi bi-person-badge-fill me-2"></i>
                        <strong>Instructor:</strong> Cloud Solutions Architect
                    </p>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="price-card">
                        <div class="price mb-2 text-white">₹499 <span class="original-price">₹1,999</span></div>
                        <p class="text-white-50 mb-3">75% discount • Limited time offer</p>
                        <button class="btn buy-btn w-100" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="10">
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
                        <li>Deploy web applications using AWS EC2 instances and security groups.</li>
                        <li>Host static websites using AWS S3 and CloudFront.</li>
                        <li>Use Route 53 for domain management and DNS configuration.</li>
                        <li>Automate deployments with AWS Lambda and serverless architectures.</li>
                        <li>Monitor and scale applications using AWS CloudWatch and Auto Scaling.</li>
                        <li>Manage databases in the cloud with RDS.</li>
                        <li>Implement security best practices including IAM, policies, and roles.</li>
                        <li>Hands-on cloud deployment projects for real-world applications.</li>
                    </ul>
                </div>

                <div class="related-topics">
                    <h4 class="fw-bold mb-4 text-center">
                        <i class="bi bi-cloud-upload-fill me-2"></i>Technologies & Tools You'll Master
                    </h4>
                    <div class="d-flex flex-wrap justify-content-center">
                        <span class="topic-pill">AWS EC2</span>
                        <span class="topic-pill">S3 & CloudFront</span>
                        <span class="topic-pill">AWS Lambda</span>
                        <span class="topic-pill">Route 53</span>
                        <span class="topic-pill">RDS & Databases</span>
                        <span class="topic-pill">IAM & Security</span>
                        <span class="topic-pill">Auto Scaling & CloudWatch</span>
                        <span class="topic-pill">Serverless Applications</span>
                        <span class="topic-pill">Deployment Best Practices</span>
                        <span class="topic-pill">Monitoring & Logging</span>
                    </div>
                </div>

                <div class="coding-exercises mb-5">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-terminal me-2"></i>Hands-On Cloud Exercises
                    </h2>
                    <p class="fs-5 mb-4">
                        Deploy real-world applications to the cloud, configure domains, set up monitoring, and scale resources. Practice managing AWS services hands-on.
                    </p>
                    <div class="text-center">
                        <img 
                        src="../../../img/hosting.webp" 
                        alt="AWS Hosting" 
                        class="img-fluid rounded-3 shadow-sm"
                        >
                    </div>
                </div>

                <div class="course-content mb-4">
                    <section class="curriculum">
                        <h2 class="text-center mb-5 fw-bold">7-Day AWS Hosting Bootcamp Curriculum</h2>
                        <div class="accordion" id="curriculumAccordion">

                            <!-- Day 1 -->
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                <i class="bi bi-calendar-check me-2"></i>Day 1 – Introduction to Cloud & AWS
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                                <div class="accordion-body">
                                <strong>Topics:</strong>
                                <ul>
                                    <li>What is cloud computing and why it matters</li>
                                    <li>AWS global infrastructure overview</li>
                                    <li>Creating an AWS account and basic console navigation</li>
                                </ul>
                                <strong>Activity:</strong>
                                <p>Explore AWS services and set up your free-tier account.</p>
                                </div>
                            </div>
                            </div>

                            <!-- Day 2 -->
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                <i class="bi bi-calendar-check me-2"></i>Day 2 – EC2 & Hosting Applications
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                <div class="accordion-body">
                                <strong>Topics:</strong>
                                <ul>
                                    <li>Launching EC2 instances</li>
                                    <li>Configuring security groups and SSH access</li>
                                    <li>Deploying a simple web application on EC2</li>
                                </ul>
                                <strong>Activity:</strong>
                                <p>Launch a server and host your first web app in the cloud.</p>
                                </div>
                            </div>
                            </div>

                            <!-- Day 3 -->
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                <i class="bi bi-calendar-check me-2"></i>Day 3 – S3 & Static Website Hosting
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                <div class="accordion-body">
                                <strong>Topics:</strong>
                                <ul>
                                    <li>Creating and configuring S3 buckets</li>
                                    <li>Hosting static websites on S3</li>
                                    <li>Using CloudFront for content delivery</li>
                                </ul>
                                <strong>Activity:</strong>
                                <p>Deploy a static website with S3 and enable CloudFront CDN.</p>
                                </div>
                            </div>
                            </div>
                                <!-- Day 4 -->
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                <i class="bi bi-calendar-check me-2"></i>Day 4 – Route 53 & Domain Management
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                <div class="accordion-body">
                                <strong>Topics:</strong>
                                <ul>
                                    <li>Registering and connecting domains</li>
                                    <li>Configuring DNS with Route 53</li>
                                    <li>Setting up subdomains and redirects</li>
                                </ul>
                                <strong>Activity:</strong>
                                <p>Connect a custom domain to your hosted application and configure DNS properly.</p>
                                </div>
                            </div>
                            </div>

                            <!-- Day 5 -->
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                <i class="bi bi-calendar-check me-2"></i>Day 5 – AWS Lambda & Serverless Deployment
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                <div class="accordion-body">
                                <strong>Topics:</strong>
                                <ul>
                                    <li>Introduction to serverless architecture</li>
                                    <li>Creating Lambda functions</li>
                                    <li>Triggering functions via API Gateway</li>
                                </ul>
                                <strong>Activity:</strong>
                                <p>Deploy a serverless application using Lambda and API Gateway.</p>
                                </div>
                            </div>
                            </div>

                            <!-- Day 6 -->
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                <i class="bi bi-calendar-check me-2"></i>Day 6 – Monitoring & Auto Scaling
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                <div class="accordion-body">
                                <strong>Topics:</strong>
                                <ul>
                                    <li>Monitoring applications with CloudWatch</li>
                                    <li>Setting up alarms and notifications</li>
                                    <li>Auto Scaling groups and load balancing</li>
                                </ul>
                                <strong>Activity:</strong>
                                <p>Implement monitoring for your hosted apps and configure auto-scaling policies.</p>
                                </div>
                            </div>
                            </div>

                            <!-- Day 7 -->
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                                <i class="bi bi-calendar-check me-2"></i>Day 7 – Final Project & Live Session
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                <div class="accordion-body">
                                <strong>Topics:</strong>
                                <ul>
                                    <li>Deploying a full cloud-based web application</li>
                                    <li>Applying all learned AWS services together</li>
                                    <li>Live Q&A session with instructor</li>
                                </ul>
                                <strong>Final Project:</strong>
                                <p>Deploy a fully functional cloud application integrating EC2, S3, Lambda, and Route 53.</p>
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
                    <img src="../../../img/hosting.webp" 
                        alt="AWS Hosting" 
                        class="img-fluid rounded-3 mb-3">

                    <p class="lead mb-4">
                    Master AWS cloud deployment — <strong>EC2, S3, Lambda, Route 53, Auto Scaling, CloudWatch, and Security</strong> — 
                    and deploy, manage, and scale web applications in the cloud like a professional cloud engineer.
                    </p>

                    <hr>
                    
                    <div class="mb-3">
                        <p class="price-off mb-1">₹499 <span class="original-price-off">₹1,999</span></p>
                        <p class="text-success mb-0">75% discount • Limited time offer</p>
                    </div>
                    
                    <p class="blink mb-3" id="countdown">1 day left at this price!</p>
                    
                    <button class="btn subscription-btn" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="10">
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
    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="../../../js/course.js"></script>
    
</body>
</html>