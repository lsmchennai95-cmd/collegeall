<?php require_once __DIR__ . '/../../../../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>CSS Mastery: Design Beautiful, Responsive Websites | CollegeAll</title>
    <meta name="title" content="CSS Mastery: Design Beautiful, Responsive Websites | CollegeAll Certified">
    <meta name="description" content="Learn CSS from basics to advanced techniques in 7 days. Master responsive design, Flexbox, Grid, animations, and modern web styling.">
    <meta name="keywords" content="CSS course, CSS3, Flexbox, Grid, responsive design, web design, animations, transitions, frontend development, CollegeAll certified, mobile-friendly websites, web styling, design course">
    <meta name="author" content="CollegeAll Certified">

    <!-- Open Graph -->
    <meta property="og:title" content="CSS Mastery: Design Beautiful, Responsive Websites | CollegeAll">
    <meta property="og:description" content="Master CSS in 7 days: responsive layouts, animations, Flexbox, Grid, and modern design techniques. Live review session included.">
    <meta property="og:image" content="https://collegeall.com/one-week-online-courses/img/CSS-mastery.webp">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://collegeall.com/one-week-online-courses/courses/web-development/css-mastery-responsive-websites/">

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
                    <h1 class="fw-bold mb-4">CSS Mastery: Design Beautiful, Responsive Websites</h1>
                    <p class="lead mb-4">
                        Learn to style, layout, and animate websites using <strong>CSS3, Flexbox, Grid, Responsive Design, and Animations</strong>. 
                        Create visually stunning, modern, and mobile-friendly websites.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <div class="rating d-flex align-items-center">
                        <span class="fw-bold fs-5 me-1 text-warning">4.5</span>
                        <span class="fs-5 text-warning">★★★★⯪</span>
                        <small class="ms-2">(1,750 reviews)</small>
                        </div>
                        
                        <div class="d-flex align-items-center">
                        <i class="bi bi-people-fill me-2"></i>
                        <span>9,850 students enrolled</span>
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
                        <strong>Instructor:</strong> Frontend Web Design Expert
                    </p>
                </div>


                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="price-card">
                        <div class="price mb-2 text-white">₹499 <span class="original-price">₹1,999</span></div>
                        <p class="text-white-50 mb-3">75% discount • Limited time offer</p>
                        <button class="btn buy-btn w-100" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="18">
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
                        <li>Master CSS fundamentals: selectors, specificity, box model, and typography.</li>
                        <li>Design layouts using Flexbox and CSS Grid for responsive websites.</li>
                        <li>Create animations, transitions, and hover effects to enhance UX.</li>
                        <li>Build mobile-friendly designs with media queries and responsive units.</li>
                        <li>Implement modern design trends: gradients, shadows, and UI components.</li>
                        <li>Optimize CSS for maintainability and performance.</li>
                        <li>Work on projects to build your portfolio of beautiful websites.</li>
                        <li>Understand cross-browser compatibility and best practices for design.</li>
                    </ul>
                </div>

                <div class="related-topics">
                    <h4 class="fw-bold mb-4 text-center">
                        <i class="bi bi-palette me-2"></i>Tools & Technologies You'll Master
                    </h4>
                    <div class="d-flex flex-wrap justify-content-center">
                        <span class="topic-pill">CSS3</span>
                        <span class="topic-pill">Flexbox</span>
                        <span class="topic-pill">CSS Grid</span>
                        <span class="topic-pill">Media Queries</span>
                        <span class="topic-pill">CSS Variables</span>
                        <span class="topic-pill">Transitions & Animations</span>
                        <span class="topic-pill">Box Model & Layout</span>
                        <span class="topic-pill">Typography & Fonts</span>
                        <span class="topic-pill">Shadows, Gradients & Effects</span>
                        <span class="topic-pill">Responsive Design</span>
                    </div>
                </div>

                <div class="coding-exercises mb-5">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-terminal me-2"></i>Hands-On CSS Projects
                    </h2>
                    <p class="fs-5 mb-4">
                        Apply CSS skills through real-world projects. Build responsive layouts, style interactive components, create animations, and optimize websites for all devices.
                    </p>

                    <div class="text-center">
                        <img 
                        src="../../../img/CSS-mastery.webp" 
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
                                        <i class="bi bi-calendar-check me-2"></i>Day 1 – CSS Basics & Selectors
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>CSS syntax, selectors, and specificity</li>
                                            <li>Understanding the box model, padding, margin, and borders</li>
                                            <li>Colors, fonts, and typography basics</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Style a simple webpage with headings, paragraphs, and images using CSS.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        <i class="bi bi-calendar-check me-2"></i>Day 2 – Layouts with Flexbox
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Flex container & items</li>
                                            <li>Alignment, spacing, and ordering</li>
                                            <li>Responsive layouts using Flexbox</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create a responsive navigation bar and multi-column layout using Flexbox.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        <i class="bi bi-calendar-check me-2"></i>Day 3 – Advanced Layouts with Grid
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>CSS Grid fundamentals</li>
                                            <li>Creating complex layouts with rows and columns</li>
                                            <li>Responsive grid designs</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Build a complete page layout using CSS Grid.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        <i class="bi bi-calendar-check me-2"></i>Day 4 – Responsive Design
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Media queries for different devices</li>
                                            <li>Flexible units and responsive typography</li>
                                            <li>Mobile-first design approach</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Convert a desktop layout to a fully responsive mobile layout.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        <i class="bi bi-calendar-check me-2"></i>Day 5 – Animations & Transitions
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>CSS transitions and hover effects</li>
                                            <li>Keyframe animations</li>
                                            <li>Animating UI components</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create a landing page with interactive buttons and animated sections.</p>
                                    </div>
                                </div>
                    
                                <!-- Day 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix">
                                            <i class="bi bi-calendar-check me-2"></i>Day 6 – Modern Design Techniques
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                        <div class="accordion-body">
                                            <strong>Topics:</strong>
                                            <ul>
                                                <li>CSS variables and reusable styles</li>
                                                <li>Shadows, gradients, and layered effects</li>
                                                <li>Best practices for clean and maintainable CSS</li>
                                            </ul>
                                            <strong>Activity:</strong>
                                            <p>Style a multi-section webpage using modern CSS techniques and reusable components.</p>
                                        </div>
                                    </div>
                                </div>
                    
                                <!-- Day 7 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeven">
                                            <i class="bi bi-calendar-check me-2"></i>Day 7 – Final Project & Live Review
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                        <div class="accordion-body">
                                            <strong>Topics:</strong>
                                            <ul>
                                                <li>Bring together all CSS concepts learned</li>
                                                <li>Build a fully responsive, animated website</li>
                                                <li>Ensure cross-browser compatibility</li>
                                                <li>Live review and feedback session with instructor</li>
                                            </ul>
                                            <strong>Final Project:</strong>
                                            <p>Create a multi-page, responsive, and visually appealing website using all learned CSS
                                                techniques. Submit it for personalized feedback.</p>
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
                    <img src="../../../img/CSS-mastery.webp" 
                        alt="digital marketing" 
                        class="img-fluid rounded-3 mb-3">

                    <p class="lead mb-4">
                    Master essential CSS skills — <strong>Flexbox, Grid, Animations, Responsive Design, and Modern Styling Techniques</strong> — 
                    and create visually stunning, mobile-friendly websites like a professional frontend designer.
                    </p>
                    
                    <hr>
                    
                    <div class="mb-3">
                        <p class="price-off mb-1">₹499 <span class="original-price-off">₹1,999</span></p>
                        <p class="text-success mb-0">75% discount • Limited time offer</p>
                    </div>
                    
                    <p class="blink mb-3" id="countdown">1 day left at this price!</p>
                    
                    <button class="btn subscription-btn" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="5">
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