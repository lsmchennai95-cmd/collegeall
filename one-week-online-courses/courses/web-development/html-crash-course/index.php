<?php require_once __DIR__ . '/../../../../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>HTML Crash Course: Build the Structure of the Web | CollegeAll</title>
   <meta name="title" content="HTML Crash Course: Build the Structure of the Web | CollegeAll Certified">
    <meta name="description" content="Learn HTML from scratch in 7 days! Master the structure of the web, create semantic layouts, forms, and multi-page websites. Perfect for beginners and aspiring web developers.">
    <meta name="keywords" content="HTML course, learn HTML, HTML crash course, web structure, website building, semantic HTML, beginner web development, HTML5 tutorial, coding for beginners, frontend basics, web design foundation">
    <meta name="author" content="CollegeAll Certified">

    <!-- Open Graph / Social Meta -->
    <meta property="og:title" content="HTML Crash Course: Build the Structure of the Web | CollegeAll">
    <meta property="og:description" content="Master HTML in 7 days! Build and structure web pages like a pro with our hands-on, beginner-friendly course.">
    <meta property="og:image" content="https://collegeall.com/one-week-online-courses/img/html.webp">
    <meta property="og:type" content="website">

    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HTML Crash Course: Build the Structure of the Web">
    <meta name="twitter:description" content="Learn to build and structure the web using HTML — the foundation of every website. 7-day beginner-friendly course by CollegeAll.">
    <meta name="twitter:image" content="https://collegeall.com/one-week-online-courses/img/html.webp">

    <meta property="og:type" content="website">
    <meta property="og:image" content="https://collegeall.com/one-week-online-courses/img/html.webp">

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
                    <h1 class="fw-bold mb-4">HTML Crash Course: Build the Structure of the Web</h1>
                    <p class="subtitle mb-4">
                        A focused 1-week online bootcamp that teaches semantic HTML, accessibility best practices, forms, media, and how to structure real web pages — perfect for absolute beginners and those refreshing fundamentals.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <div class="rating d-flex align-items-center">
                        <span class="fw-bold fs-5 me-1 text-warning">4.5</span>
                        <span class="fs-5 text-warning">★★★★⯪</span>
                        <small class="ms-2">(2, 373 reviews)</small>
                        </div>

                        <div class="d-flex align-items-center">
                        <i class="bi bi-people-fill me-2"></i>
                        <span>8,732 students enrolled</span>
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
                        <span class="badge bg-secondary px-3 py-2 rounded-pill text-white">
                        <i class="bi bi-journal-bookmark me-1"></i> Beginner Friendly
                        </span>
                    </div>

                    <p class="instructor mb-0">
                        <i class="bi bi-person-badge-fill me-2"></i>
                        <strong>Instructor:</strong> Frontend Instructor — HTML & Accessibility Specialist
                    </p>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="price-card">
                        <div class="price mb-2 text-white">₹499 <span class="original-price">₹1,999</span></div>
                        <p class="text-white-50 mb-3">75% discount • Limited time offer</p>
                        <button class="btn buy-btn w-100" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="4">
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
                        <li>Understand the role of HTML in web development and how it forms the structure of every webpage.</li>
                        <li>Learn and apply all essential HTML tags — headings, paragraphs, links, lists, tables, and more.</li>
                        <li>Build semantic and accessible web page layouts using clean, organized HTML code.</li>
                        <li>Embed images, videos, and audio to create rich multimedia experiences.</li>
                        <li>Create and style professional forms with input fields, buttons, and validation attributes.</li>
                        <li>Structure multi-page websites with internal and external linking.</li>
                        <li>Work on mini-projects to build a complete, real-world HTML portfolio website.</li>
                        <li>Get certified by CollegeAll upon completion of the course.</li>
                    </ul>
                </div>

                <div class="related-topics">
                    <h4 class="fw-bold mb-4 text-center">
                        <i class="bi bi-code-slash me-2"></i>Technologies & Tools You'll Master
                    </h4>
                    <div class="d-flex flex-wrap justify-content-center">
                        <span class="topic-pill">HTML5</span>
                        <span class="topic-pill">Semantic HTML</span>
                        <span class="topic-pill">Forms & Input Elements</span>
                        <span class="topic-pill">Multimedia (Images, Audio, Video)</span>
                        <span class="topic-pill">Links & Navigation</span>
                        <span class="topic-pill">Tables & Lists</span>
                        <span class="topic-pill">Basic Accessibility (A11Y)</span>
                        <span class="topic-pill">Code Editors (VS Code)</span>
                        <span class="topic-pill">Version Control Basics (Git)</span>
                        <span class="topic-pill">Website Deployment (GitHub Pages)</span>
                    </div>
                </div>

                <div class="coding-exercises mb-5">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-terminal me-2"></i>Hands-On HTML Practice Exercises
                    </h2>
                    <p class="fs-5 mb-4">
                        Reinforce your learning through interactive HTML coding challenges after every lesson. 
                        Practice creating web page structures, working with tags, building forms, and adding media. 
                        Each exercise is designed to help you apply concepts immediately and build confidence in writing clean, semantic HTML.
                    </p>

                    <div class="text-center">
                        <img 
                        src="../../../img/html.webp" 
                        alt="HTML Coding Practice" 
                        class="img-fluid rounded-3 shadow-sm"
                        >
                    </div>
                </div>

                <div class="course-content mb-4">
                    <section class="curriculum">
                        <h2 class="text-center mb-5 fw-bold">
                            7-Day Course Curriculum
                        </h2>
                    
                        <div class="accordion" id="curriculumAccordion">
                    
                            <!-- Day 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-calendar-check me-2"></i>Day 1 – Introduction to HTML & Web Structure
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>What is HTML and how it works with CSS & JavaScript</li>
                                            <li>Understanding the anatomy of an HTML document:
                                                <code>&lt;!DOCTYPE html&gt;, &lt;html&gt;, &lt;head&gt;, &lt;body&gt;</code>
                                            </li>
                                            <li>Basic tags:
                                                <code>&lt;h1&gt;–&lt;h6&gt;, &lt;p&gt;, &lt;br&gt;, &lt;hr&gt;, &lt;a&gt;, &lt;img&gt;, &lt;strong&gt;, &lt;em&gt;</code>
                                            </li>
                                            <li>Folder structure for a web project</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create your first HTML page (<code>index.html</code>) with a heading, paragraph, and image.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        <i class="bi bi-calendar-check me-2"></i>Day 2 – Structuring Pages with HTML Elements
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Block vs Inline elements</li>
                                            <li>Lists: <code>&lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;</code></li>
                                            <li>Links and navigation menus</li>
                                            <li>Using <code>&lt;div&gt;</code> and <code>&lt;span&gt;</code> for grouping content</li>
                                            <li>Understanding file paths & linking multiple pages</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Build a simple “About Me” page with navigation links.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        <i class="bi bi-calendar-check me-2"></i>Day 3 – Semantic HTML & Best Practices
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>What is semantic HTML and why it matters</li>
                                            <li>Key semantic elements:
                                                <code>&lt;header&gt;, &lt;nav&gt;, &lt;main&gt;, &lt;section&gt;, &lt;article&gt;, &lt;aside&gt;, &lt;footer&gt;</code>
                                            </li>
                                            <li>Accessibility basics: alt text, headings, and structure</li>
                                            <li>Organizing content meaningfully for users and search engines</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Rebuild your homepage using semantic HTML elements.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        <i class="bi bi-calendar-check me-2"></i>Day 4 – Forms & User Input
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Creating forms with
                                                <code>&lt;form&gt;, &lt;input&gt;, &lt;textarea&gt;, &lt;select&gt;, &lt;option&gt;, &lt;button&gt;</code>
                                            </li>
                                            <li>Understanding input types: text, email, password, number, radio, checkbox, date</li>
                                            <li>Labels and form accessibility</li>
                                            <li>Basic validation attributes: required, minlength, pattern</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create a “Contact Us” or “Sign-Up” form.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        <i class="bi bi-calendar-check me-2"></i>Day 5 – Working with Media & Embedding
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Adding images, audio, and video</li>
                                            <li>Embedding YouTube videos and maps using <code>&lt;iframe&gt;</code></li>
                                            <li>Relative vs absolute URLs</li>
                                            <li>Using <code>&lt;figure&gt;</code> and <code>&lt;figcaption&gt;</code> for descriptive media
                                            </li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Add a media gallery or an introduction video to your webpage.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">
                                        <i class="bi bi-calendar-check me-2"></i>Day 6 – SEO-Friendly & Accessible Markup
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Essential meta tags: <code>&lt;meta&gt;, &lt;title&gt;, &lt;description&gt;</code></li>
                                            <li>Headings hierarchy & proper content structure</li>
                                            <li>Alt attributes, link text, and accessibility basics</li>
                                            <li>Open Graph tags for better social sharing</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Optimize your homepage for SEO and accessibility.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 7 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven">
                                        <i class="bi bi-calendar-check me-2"></i>Day 7 – Final Project, Review & Live Session
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Bringing all concepts together</li>
                                            <li>Folder organization:
                                                <code>index.html, about.html, contact.html</code>
                                            </li>
                                            <li>Internal linking & website navigation</li>
                                            <li>Validating your code using the W3C Validator</li>
                                            <li>Final review & Q&A discussion</li>
                                        </ul>
                    
                                        <strong>Final Project:</strong>
                                        <p>Build a 3-page responsive website (Home, About, Contact) using all the concepts learned in this
                                            7-day course.</p>
                    
                                        <strong>💻 Live Session:</strong>
                                        <p>Join a live mentor-led session to review your final project, clarify doubts, and receive
                                            personalized feedback before earning your CollegeAll Certification.</p>
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
                    <img src="../../../img/html.webp" 
                        alt="Full-Stack Web Development" 
                        class="img-fluid rounded-3 mb-3">

                    <p class="lead mb-4">
                        Master modern web technologies — <strong>HTML, CSS, JavaScript, React, Node.js, MongoDB, Web3 & DApps</strong> — 
                        and become a job-ready full-stack developer.
                    </p>
                    
                    <hr>
                    
                    <div class="mb-3">
                        <p class="price-off mb-1">₹499 <span class="original-price-off">₹1,999</span></p>
                        <p class="text-success mb-0">75% discount • Limited time offer</p>
                    </div>
                    
                    <p class="blink mb-3" id="countdown">1 day left at this price!</p>
                    
                    <button class="btn subscription-btn" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="4">
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