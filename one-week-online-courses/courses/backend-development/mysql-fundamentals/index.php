<?php require_once __DIR__ . '/../../../../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MySQL Fundamentals: Master Databases and SQL Queries | CollegeAll</title>
    <meta name="description" content="Learn MySQL in 7 days! Master database design, SQL queries, relationships, optimization, and transactions. Build functional database applications.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/one-week-online-courses/courses/backend-development/mysql-fundamentals/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="MySQL Fundamentals: Master Databases and SQL Queries | CollegeAll">
    <meta property="og:description" content="Learn MySQL in 7 days! Master database design, SQL queries, relationships, optimization, and transactions. Build functional database applications.">
    <meta property="og:url" content="https://collegeall.com/one-week-online-courses/courses/backend-development/mysql-fundamentals/">
    <meta property="og:image" content="https://collegeall.com/one-week-online-courses/img/MySQL-fundamentals.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="MySQL Fundamentals: Master Databases and SQL Queries | CollegeAll">
    <meta name="twitter:description" content="Learn MySQL in 7 days! Master database design, SQL queries, relationships, optimization, and transactions. Build functional database applications.">
    <meta name="twitter:image" content="https://collegeall.com/one-week-online-courses/img/MySQL-fundamentals.webp">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "MySQL Fundamentals",
      "description": "Learn MySQL in 7 days! Master database design, SQL queries, relationships, optimization, and transactions. Build functional database applications.",
      "url": "https://collegeall.com/one-week-online-courses/courses/backend-development/mysql-fundamentals/",
      "provider": {
        "@type": "Organization",
        "name": "CollegeAll Certified",
        "url": "https://collegeall.com/one-week-online-courses/"
      },
      "offers": {
        "@type": "Offer",
        "price": "499",
        "priceCurrency": "INR",
        "category": "Online Short Course",
        "availability": "https://schema.org/InStock"
      },
      "hasCourseInstance": {
        "@type": "CourseInstance",
        "courseMode": "Online",
        "courseWorkload": "1 Week"
      }
    }
    </script>
    <meta charset="UTF-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <meta name="keywords" content="MySQL course, SQL queries, database design, relational databases, normalization, joins, stored procedures, transactions, backend development, CollegeAll certified">    <meta name="author" content="CollegeAll Certified">    <!-- Open Graph -->    <!-- Theme and Favicon -->    <meta name="theme-color" content="#ffffff">    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <link rel="stylesheet" href="<?php echo asset_url('/one-week-online-courses/css/course.css'); ?>">    <link rel="stylesheet" href="<?php echo asset_url('/one-week-online-courses/index.css'); ?>">        </head>
<body>

    <?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <div id="modalContainer"></div>
    
    <!-- Course Header Section -->
    <section class="course-header mt-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-4">MySQL Fundamentals: Master Databases and SQL Queries</h1>
                    <p class="lead mb-4">
                        Learn to design, manage, and query relational databases using <strong>MySQL</strong>. Master SQL queries, database design, relationships, and data management for real-world applications.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <div class="rating d-flex align-items-center">
                        <span class="fw-bold fs-5 me-1 text-warning">4.5</span>
                        <span class="fs-5 text-warning">★★★★⯪</span>
                        <small class="ms-2">(1,803 reviews)</small>
                        </div>
                        
                        <div class="d-flex align-items-center">
                        <i class="bi bi-people-fill me-2"></i>
                        <span>8,932 students enrolled</span>
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
                        <strong>Instructor:</strong> Database Developer & SQL Expert
                    </p>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="price-card">
                        <div class="price mb-2 text-white">₹499 <span class="original-price">₹1,999</span></div>
                        <p class="text-white-50 mb-3">75% discount • Limited time offer</p>
                        <button class="btn buy-btn w-100" data-bs-toggle="modal" data-bs-target="#paymentModal" data-title="MySQL Fundamentals: Master Databases and SQL Queries" data-price="499">
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
                        <li>Understanding relational databases and data modeling concepts.</li>
                        <li>Writing basic and advanced SQL queries: SELECT, JOIN, GROUP BY, and more.</li>
                        <li>Creating, updating, and deleting tables and records.</li>
                        <li>Managing database relationships using primary and foreign keys.</li>
                        <li>Optimizing queries for performance and efficiency.</li>
                        <li>Using MySQL Workbench and command-line tools for database management.</li>
                        <li>Integrating MySQL with backend applications (Node.js/Express or Python).</li>
                        <li>Hands-on projects to solidify SQL skills and database design.</li>
                    </ul>
                </div>

                <div class="related-topics">
                    <h4 class="fw-bold mb-4 text-center">
                        <i class="bi bi-database-fill me-2"></i>Technologies & Tools You'll Master
                    </h4>
                    <div class="d-flex flex-wrap justify-content-center">
                        <span class="topic-pill">MySQL</span>
                        <span class="topic-pill">SQL Queries</span>
                        <span class="topic-pill">Database Design</span>
                        <span class="topic-pill">Primary & Foreign Keys</span>
                        <span class="topic-pill">Normalization</span>
                        <span class="topic-pill">Indexes & Query Optimization</span>
                        <span class="topic-pill">MySQL Workbench</span>
                        <span class="topic-pill">Command-Line Tools</span>
                        <span class="topic-pill">CRUD Operations</span>
                        <span class="topic-pill">Database Integration</span>
                    </div>
                </div>

                <div class="coding-exercises mb-5">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-terminal me-2"></i>Hands-On SQL Exercises
                    </h2>
                    <p class="fs-5 mb-4">
                        Apply your knowledge with practical exercises: create tables, write queries, manage relationships, and optimize database performance.
                    </p>
                    <div class="text-center">
                        <img 
                        src="../../../img/MySQL-fundamentals.webp" 
                        alt="MySql" 
                        class="img-fluid rounded-3 shadow-sm"
                        >
                    </div>
                </div>

                <div class="course-content mb-4">
                    <section class="curriculum">
                        <h2 class="text-center mb-5 fw-bold">7-Day MySQL Bootcamp Curriculum</h2>
                        <div class="accordion" id="curriculumAccordion">
                    
                            <!-- Day 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-calendar-check me-2"></i>Day 1 – Introduction to Databases & SQL
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>What is a database and why it matters</li>
                                            <li>Introduction to MySQL and relational databases</li>
                                            <li>Installing MySQL and MySQL Workbench</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Set up your first database and create sample tables with basic data.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        <i class="bi bi-calendar-check me-2"></i>Day 2 – Basic SQL Queries
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>SELECT, WHERE, ORDER BY, and LIMIT clauses</li>
                                            <li>Inserting, updating, and deleting records</li>
                                            <li>Filtering and sorting data</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Write queries to retrieve and manipulate data in your database.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        <i class="bi bi-calendar-check me-2"></i>Day 3 – Table Relationships & Joins
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Primary and foreign keys</li>
                                            <li>One-to-many and many-to-many relationships</li>
                                            <li>Using JOINs to combine tables</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create related tables and write JOIN queries to retrieve combined data.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Day 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        <i class="bi bi-calendar-check me-2"></i>Day 4 – Advanced SQL Queries
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>GROUP BY and aggregate functions (SUM, COUNT, AVG, MAX, MIN)</li>
                                            <li>HAVING clause for filtering groups</li>
                                            <li>Subqueries and nested queries</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Analyze data with aggregate queries and generate summary reports.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        <i class="bi bi-calendar-check me-2"></i>Day 5 – Indexes, Constraints & Optimization
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Creating indexes for faster queries</li>
                                            <li>Defining constraints: UNIQUE, NOT NULL, CHECK</li>
                                            <li>Query optimization techniques</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Optimize a database by adding indexes and proper constraints to improve performance.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">
                                        <i class="bi bi-calendar-check me-2"></i>Day 6 – Stored Procedures & Transactions
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Creating stored procedures and functions</li>
                                            <li>Using transactions to manage multiple operations</li>
                                            <li>Error handling in transactions</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create stored procedures and implement a transaction for a multi-step operation.</p>
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
                                            <li>Applying all concepts: tables, relationships, queries, optimization</li>
                                            <li>Designing a complete database schema for a sample project</li>
                                            <li>Live Q&A and review session with instructor</li>
                                        </ul>
                                        <strong>Final Project:</strong>
                                        <p>Build a fully functional database application (e.g., inventory, e-commerce, or library system)
                                            with all learned MySQL concepts.</p>
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
                    <img src="../../../img/MySQL-fundamentals.webp" 
                        alt="MySql" 
                        class="img-fluid rounded-3 mb-3">

                    <p class="lead mb-4">
                    Master MySQL — <strong>Database Design, SQL Queries, Relationships, Optimization, Transactions, and Stored Procedures</strong> — 
                    and manage, query, and scale relational databases like a professional backend developer.
                    </p>

                    <hr>
                    
                    <div class="mb-3">
                        <p class="price-off mb-1">₹499 <span class="original-price-off">₹1,999</span></p>
                        <p class="text-success mb-0">75% discount • Limited time offer</p>
                    </div>
                    
                    <p class="blink mb-3" id="countdown">1 day left at this price!</p>
                    
                    <button class="btn subscription-btn" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="9">
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