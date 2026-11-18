<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>The Complete Web Development Bootcamp | CollegeAll</title>
    <meta name="description" content="Master web development with HTML, CSS, JavaScript, and React. Learn to build responsive, modern websites with our certified 1-week program.">
    <meta name="keywords" content="web development, HTML, CSS, JavaScript, React JS, frontend development, responsive websites, coding bootcamp, web design, web apps">
    <meta name="author" content="CollegeAll Certified">
    <meta property="og:title" content="The Complete Web Development Bootcamp | CollegeAll">
    <meta property="og:description" content="Learn web development fast! HTML, CSS, JavaScript & React in 1 week. Perfect for beginners and aspiring developers.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://collegeall.com/one-week-online-courses/img/web-development.webp">

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
                    <h1 class="fw-bold mb-4">The Complete Full-Stack Web Development Bootcamp</h1>
                    <p class="subtitle mb-4">
                        Master modern web technologies — HTML, CSS, JavaScript, React, Node.js, MongoDB, Web3 & DApps — and become a job-ready full-stack developer.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <div class="rating d-flex align-items-center">
                            <span class="fw-bold fs-5 me-1 text-warning">5.0</span>
                            <span class="fs-5 text-warning">★★★★★</span>
                            <small class="ms-2">(2,354 reviews)</small>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <i class="bi bi-people-fill me-2"></i>
                            <span>15,842 students enrolled</span>
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
                        <strong>Instructor:</strong> FullStack Developer
                    </p>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="price-card">
                        <div class="price mb-2 text-white">₹499 <span class="original-price">₹2,499</span></div>
                        <p class="text-white-50 mb-3">79% discount • Limited time offer</p>
                        <button class="btn buy-btn w-100" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="1">
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
                        <span class="stat-number">40+</span>
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
                        <li>Build 10+ real-world full-stack projects to showcase in your developer portfolio.</li>
                        <li>Master the most in-demand technologies — HTML, CSS, JavaScript, React, Node.js, MongoDB, and Web3.</li>
                        <li>Gain the skills to design, develop, and deploy fully functional websites and web applications.</li>
                        <li>Understand both front-end and back-end development through hands-on practice.</li>
                        <li>Learn to create and manage APIs, handle databases, and connect your apps to the cloud.</li>
                        <li>Develop modern, responsive, and interactive UIs using React.</li>
                        <li>Launch your career as a full-stack web developer or freelance professional.</li>
                    </ul>
                </div>

                <div class="related-topics">
                    <h4 class="fw-bold mb-4 text-center">
                        <i class="bi bi-code-slash me-2"></i>Technologies & Tools You'll Master
                    </h4>
                    <div class="d-flex flex-wrap justify-content-center">
                        <span class="topic-pill">HTML5</span>
                        <span class="topic-pill">CSS3</span>
                        <span class="topic-pill">Bootstrap 5</span>
                        <span class="topic-pill">JavaScript (ES6+)</span>
                        <span class="topic-pill">React JS</span>
                        <span class="topic-pill">Node.js</span>
                        <span class="topic-pill">Express.js</span>
                        <span class="topic-pill">MongoDB</span>
                        <span class="topic-pill">Git & GitHub</span>
                        <span class="topic-pill">REST APIs</span>
                        <span class="topic-pill">Web Hosting & Deployment</span>
                    </div>
                </div>

                <div class="coding-exercises mb-5">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-terminal me-2"></i>Hands-On Coding Exercises
                    </h2>
                    <p class="fs-5 mb-4">
                        Sharpen your skills with hands-on coding challenges after every module. 
                        Each exercise helps you apply what you've learned in real-world scenarios — 
                        from building layouts to creating dynamic web apps.
                    </p>

                    <div class="text-center">
                        <img src="../../../img/web-development.webp" 
                            alt="Coding Practice" 
                            class="img-fluid rounded-3">
                    </div>
                </div>

                <div class="course-content mb-4">
                    <section class="curriculum">
                        <h2 class="text-center mb-5">7-Day Course Curriculum</h2>
                        <div class="accordion" id="curriculumAccordion">
                
                            <!-- Day 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                        <i class="bi bi-calendar-check me-2"></i>Day 1 – Introduction to HTML & Web Structure
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>What is HTML? How it works with CSS & JS</li>
                                            <li>Anatomy of an HTML document
                                                (<code>&lt;!DOCTYPE html&gt;, &lt;html&gt;, &lt;head&gt;, &lt;body&gt;</code>)</li>
                                            <li>Basic tags:
                                                <code>&lt;h1&gt;–&lt;h6&gt;, &lt;p&gt;, &lt;br&gt;, &lt;hr&gt;, &lt;a&gt;, &lt;img&gt;, &lt;strong&gt;, &lt;em&gt;</code>
                                            </li>
                                            <li>Folder structure for web projects</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create your first HTML page (<code>index.html</code>) with a heading, paragraph, and an
                                            image.</p>
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
                                            <li>Using <code>&lt;div&gt;</code> and <code>&lt;span&gt;</code> for layout grouping</li>
                                            <li>File paths & linking other pages</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Build a simple "About Me" page with navigation links.</p>
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
                                            <li>Accessibility basics: alt text, proper headings</li>
                                            <li>Structuring content meaningfully</li>
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
                                            <li>Creating forms:
                                                <code>&lt;form&gt;, &lt;input&gt;, &lt;textarea&gt;, &lt;select&gt;, &lt;option&gt;, &lt;button&gt;</code>
                                            </li>
                                            <li>Input types: text, email, password, number, radio, checkbox, date</li>
                                            <li>Labels and form accessibility</li>
                                            <li>Basic validation (required, minlength, pattern)</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create a "Contact Us" or "Sign Up" form.</p>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Day 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        <i class="bi bi-calendar-check me-2"></i>Day 5 – Media & Embedding
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Adding images, audio, and video</li>
                                            <li>Embedding YouTube or maps with <code>&lt;iframe&gt;</code></li>
                                            <li>Relative vs absolute URLs</li>
                                            <li><code>&lt;figure&gt;</code> and <code>&lt;figcaption&gt;</code> tags</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Add media content (e.g., intro video or gallery) to your webpage.</p>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Day 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">
                                        <i class="bi bi-calendar-check me-2"></i>Day 6 – SEO-Friendly Markup
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Meta tags: <code>&lt;meta&gt;, &lt;title&gt;, &lt;description&gt;</code></li>
                                            <li>Headings hierarchy & keyword placement</li>
                                            <li>Alt attributes & link text optimization</li>
                                            <li>Open Graph tags for social sharing</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Optimize your website's homepage for search engines.</p>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Day 7 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven">
                                        <i class="bi bi-calendar-check me-2"></i>Day 7 – Final Project & Review
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Putting it all together</li>
                                            <li>Folder organization: <code>index.html, about.html, contact.html</code></li>
                                            <li>Linking pages & ensuring navigation works</li>
                                            <li>Validate your HTML using W3C Validator</li>
                                            <li>Wrap-up and best practices</li>
                                        </ul>
                                        <strong>Final Project:</strong>
                                        <p>Build a 3-page website (Home, About, Contact) using everything learned during the bootcamp.
                                        </p>
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
                    <img src="../../../img/web-development.webp" 
                         alt="Full-Stack Web Development" 
                         class="img-fluid rounded-3">
                    <p class="mt-3">Master modern web technologies — HTML, CSS, JavaScript, React, Node.js, MongoDB, Web3 & DApps — and become a job-ready full-stack developer.</p>
                    
                    <hr>
                    
                    <div class="mb-3">
                        <p class="price-off mb-1">₹499 <span class="original-price-off">₹2,499</span></p>
                        <p class="text-success mb-0">79% discount • Limited time offer</p>
                    </div>
                    
                    <p class="blink mb-3" id="countdown">1 day left at this price!</p>
                    
                    <button class="btn subscription-btn" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="1">
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