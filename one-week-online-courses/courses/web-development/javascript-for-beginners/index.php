<?php require_once __DIR__ . '/../../../../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>JavaScript for Beginners: Make Your Websites Come Alive | CollegeAll</title>
    <meta name="title" content="JavaScript for Beginners: Make Your Websites Come Alive | CollegeAll Certified">
    <meta name="description" content="Learn JavaScript in 7 days! Master DOM manipulation, events, functions, arrays, ES6+, and create interactive web pages.">
    <meta name="keywords" content="JavaScript course, JS for beginners, DOM manipulation, events, functions, arrays, ES6, interactive websites, frontend development, web programming, CollegeAll certified">
    <meta name="author" content="CollegeAll Certified">

    <!-- Open Graph -->
    <meta property="og:title" content="JavaScript for Beginners: Make Your Websites Come Alive | CollegeAll">
    <meta property="og:description" content="Learn JavaScript from scratch in 7 days. Create interactive, dynamic, and responsive web pages with live project review.">
    <meta property="og:image" content="https://collegeall.com/one-week-online-courses/img/js.webp">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://collegeall.com/one-week-online-courses/courses/web-development/javascript-for-beginners/">

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
                    <h1 class="fw-bold mb-4">JavaScript for Beginners: Make Your Websites Come Alive</h1>
                    <p class="lead mb-4">
                        Learn the fundamentals of <strong>JavaScript, DOM manipulation, events, functions, and ES6+</strong> to create interactive, dynamic, and engaging websites.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <div class="rating d-flex align-items-center">
                        <span class="fw-bold fs-5 me-1 text-warning">5</span>
                        <span class="fs-5 text-warning">★★★★★</span>
                        <small class="ms-2">(2,230 reviews)</small>
                        </div>
                        
                        <div class="d-flex align-items-center">
                        <i class="bi bi-people-fill me-2"></i>
                        <span>12,500 students enrolled</span>
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
                        <i class="bi bi-clock me-1"></i> 20+ Hours Content
                        </span>
                    </div>

                    <p class="instructor mb-0">
                        <i class="bi bi-person-badge-fill me-2"></i>
                        <strong>Instructor:</strong> Frontend Developer & JavaScript Expert
                    </p>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="price-card">
                        <div class="price mb-2 text-white">₹499 <span class="original-price">₹1,999</span></div>
                        <p class="text-white-50 mb-3">75% discount • Limited time offer</p>
                        <button class="btn buy-btn w-100" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="6">
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
            <!-- Left Column: What you'll learn, Coding Exercises, Course Content -->
            <div class="col-lg-8">
                <div class="what-learn mb-5">
                    <h2>What You'll Learn</h2>
                    <ul>
                        <li>JavaScript basics: variables, data types, operators, and expressions.</li>
                        <li>Control structures: loops, conditionals, and logic flow.</li>
                        <li>Functions, events, and DOM manipulation.</li>
                        <li>ES6+ features: let/const, arrow functions, template literals, and modules.</li>
                        <li>Interactive UI elements: buttons, forms, modals, sliders, and dynamic content.</li>
                        <li>Debugging and troubleshooting JavaScript code efficiently.</li>
                        <li>Integrate JavaScript with HTML & CSS to create responsive web apps.</li>
                        <li>Build small real-world projects to practice and showcase your skills.</li>
                    </ul>
                </div>

                <div class="related-topics">
                    <h4 class="fw-bold mb-4 text-center">
                        <i class="bi bi-lightning-charge me-2"></i>Tools & Technologies You'll Master
                    </h4>
                    <div class="d-flex flex-wrap justify-content-center">
                        <span class="topic-pill">JavaScript (ES6+)</span>
                        <span class="topic-pill">DOM Manipulation</span>
                        <span class="topic-pill">Events & Event Listeners</span>
                        <span class="topic-pill">Functions & Scope</span>
                        <span class="topic-pill">Arrays & Objects</span>
                        <span class="topic-pill">Form Validation</span>
                        <span class="topic-pill">Timers & Intervals</span>
                        <span class="topic-pill">Debugging & Console</span>
                        <span class="topic-pill">Template Literals</span>
                        <span class="topic-pill">Modules & Imports</span>
                        <span class="topic-pill">Interactive Web Pages</span>
                    </div>
                </div>

                <div class="coding-exercises mb-5">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-terminal me-2"></i>Interactive Coding Exercises
                    </h2>
                    <p class="fs-5 mb-4">
                        Practice JavaScript in real-time! Create interactive forms, animations, sliders, and mini web apps to apply your learning and strengthen your skills.
                    </p>

                    <div class="text-center">
                        <img 
                        src="../../../img/js.webp" 
                        alt="HTML Coding Practice" 
                        class="img-fluid rounded-3 shadow-sm"
                        >
                    </div>
                </div>

                <div class="course-content mb-4">
                    <section class="curriculum">
                        <h2 class="text-center mb-5 fw-bold">7-Day Course Curriculum</h2>
                    
                        <div class="accordion" id="curriculumAccordion">
                    
                            <!-- Day 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-calendar-check me-2"></i>Day 1 – Introduction to JavaScript
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>What is JavaScript and its role in web development</li>
                                            <li>Integrating JavaScript into HTML pages</li>
                                            <li>Variables, data types, and basic operators</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Write your first JS script to display messages and calculate simple math operations.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        <i class="bi bi-calendar-check me-2"></i>Day 2 – Control Structures & Functions
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>If-else statements and logical operators</li>
                                            <li>Loops: for, while, do-while</li>
                                            <li>Defining and calling functions</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create a small calculator and greeting script using functions and loops.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        <i class="bi bi-calendar-check me-2"></i>Day 3 – DOM Manipulation
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Understanding the Document Object Model (DOM)</li>
                                            <li>Selecting and modifying HTML elements</li>
                                            <li>Changing styles, content, and attributes dynamically</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create an interactive webpage that updates content and styles using DOM methods.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        <i class="bi bi-calendar-check me-2"></i>Day 4 – Events & Event Listeners
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Responding to user actions: click, hover, input</li>
                                            <li>Adding event listeners and callbacks</li>
                                            <li>Form validation and interactive UI</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Build a form that validates input and responds to user actions in real-time.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        <i class="bi bi-calendar-check me-2"></i>Day 5 – Arrays & Objects
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Creating and manipulating arrays</li>
                                            <li>Working with objects and object properties</li>
                                            <li>Iterating over arrays and objects</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Build a dynamic todo list or product catalog using arrays and objects.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">
                                        <i class="bi bi-calendar-check me-2"></i>Day 6 – ES6+ Features & Modern JavaScript
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>let, const, template literals</li>
                                            <li>Arrow functions and default parameters</li>
                                            <li>Modules, imports, and exports</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Refactor existing scripts using modern JavaScript practices.</p>
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
                                            <li>Bringing all JavaScript concepts together</li>
                                            <li>Build interactive elements, dynamic pages, and responsive UI</li>
                                            <li>Live Q&A and code review session with instructor</li>
                                        </ul>
                                        <strong>Final Project:</strong>
                                        <p>Create a mini web application (e.g., interactive portfolio, quiz, or gallery) demonstrating all
                                            learned JavaScript skills.</p>
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
                    <img src="../../../img/js.webp" 
                        alt="digital marketing" 
                        class="img-fluid rounded-3 mb-3">

                    <p class="lead mb-4">
                    Master essential JavaScript skills — <strong>DOM manipulation, Events, Functions, ES6+, and Interactive Web Features</strong> — 
                    and bring your websites to life with dynamic, responsive, and engaging functionality like a professional frontend developer.
                    </p>
                    
                    <hr>
                    
                    <div class="mb-3">
                        <p class="price-off mb-1">₹499 <span class="original-price-off">₹1,999</span></p>
                        <p class="text-success mb-0">75% discount • Limited time offer</p>
                    </div>
                    
                    <p class="blink mb-3" id="countdown">1 day left at this price!</p>
                    
                    <button class="btn subscription-btn" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="6">
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