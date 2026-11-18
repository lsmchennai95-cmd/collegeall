<?php require_once __DIR__ . '/../../../../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Data Analysis with Excel & Python | CollegeAll</title>
    <meta name="title" content="Data Analysis with Excel & Python | CollegeAll Certified">
    <meta name="description" content="Learn data analysis in 7 days using Excel and Python. Clean, visualize, and interpret real-world datasets. Perfect for beginners and aspiring data analysts.">
    <meta name="keywords" content="data analysis course, learn Excel, Python for data analysis, Pandas, NumPy, data visualization, Matplotlib, Seaborn, beginner data analytics, CollegeAll certified, Excel tutorial, Python tutorial">
    <meta name="author" content="CollegeAll Certified">

    <!-- Open Graph -->
    <meta property="og:title" content="Data Analysis with Excel & Python | CollegeAll">
    <meta property="og:description" content="Master data analysis in 7 days with hands-on exercises in Excel and Python. Live review session included.">
    <meta property="og:image" content="https://collegeall.com/one-week-online-courses/img/excel.webp">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://collegeall.com/one-week-online-courses/courses/data-analysis/data-analysis-with-excel-python/">

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
                    <h1 class="fw-bold mb-4">Data Analysis with Excel & Python</h1>
                    <p class="lead mb-4">
                        Learn to analyze, visualize, and interpret data efficiently using <strong>Excel, Python, Pandas, NumPy, and Matplotlib</strong>. 
                        Gain practical skills to make data-driven decisions and reports.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <div class="rating d-flex align-items-center">
                        <span class="fw-bold fs-5 me-1 text-warning">4.6</span>
                        <span class="fs-5 text-warning">★★★★⯪</span>
                        <small class="ms-2">(1,940 reviews)</small>
                        </div>
                        
                        <div class="d-flex align-items-center">
                        <i class="bi bi-people-fill me-2"></i>
                        <span>10,820 students enrolled</span>
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
                        <strong>Instructor:</strong> Data Analyst / Python Expert
                    </p>
                </div>


                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="price-card">
                        <div class="price mb-2 text-white">₹499 <span class="original-price">₹2,099</span></div>
                        <p class="text-white-50 mb-3">76% discount • Limited time offer</p>
                        <button class="btn buy-btn w-100" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="3">
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
                        <li>Data cleaning, transformation, and organization using Excel and Python (Pandas, NumPy).</li>
                        <li>Create visualizations and dashboards using Excel charts and Python’s Matplotlib & Seaborn.</li>
                        <li>Analyze real-world datasets and draw actionable insights.</li>
                        <li>Use formulas, pivot tables, and conditional formatting in Excel efficiently.</li>
                        <li>Perform exploratory data analysis (EDA) using Python.</li>
                        <li>Generate automated reports and summaries from large datasets.</li>
                        <li>Understand basic statistics to make data-driven decisions.</li>
                        <li>Complete projects and case studies to showcase your skills.</li>
                    </ul>
                </div>

                <div class="related-topics">
                    <h4 class="fw-bold mb-4 text-center">
                        <i class="bi bi-bar-chart-line me-2"></i>Tools & Technologies You'll Master
                    </h4>
                    <div class="d-flex flex-wrap justify-content-center">
                        <span class="topic-pill">Excel</span>
                        <span class="topic-pill">Pivot Tables & Charts</span>
                        <span class="topic-pill">Formulas & Functions</span>
                        <span class="topic-pill">Python</span>
                        <span class="topic-pill">Pandas</span>
                        <span class="topic-pill">NumPy</span>
                        <span class="topic-pill">Matplotlib</span>
                        <span class="topic-pill">Seaborn</span>
                        <span class="topic-pill">Data Cleaning & Transformation</span>
                        <span class="topic-pill">Exploratory Data Analysis (EDA)</span>
                        <span class="topic-pill">Reporting & Dashboards</span>
                    </div>
                </div>

                <div class="coding-exercises mb-5">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-terminal me-2"></i>Practical Exercises & Campaigns
                    </h2>
                    <p class="fs-5 mb-4">
                        Apply your skills to real-world datasets. Perform data cleaning, analysis, visualization, and reporting using Excel and Python.  
                        Gain hands-on experience with step-by-step exercises and projects.
                    </p>

                    <div class="text-center">
                        <img 
                        src="../../../img/excel.webp" 
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
                                        <i class="bi bi-calendar-check me-2"></i>Day 1 – Introduction & Excel Basics
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Course introduction & dataset overview</li>
                                            <li>Excel interface, formulas, and basic functions</li>
                                            <li>Data entry, formatting, and tables</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Practice data entry and formatting using sample Excel datasets.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        <i class="bi bi-calendar-check me-2"></i>Day 2 – Data Cleaning in Excel
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Handling missing values, duplicates, and errors</li>
                                            <li>Sorting, filtering, and conditional formatting</li>
                                            <li>Using pivot tables for data summarization</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Clean and summarize a dataset using Excel tools.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        <i class="bi bi-calendar-check me-2"></i>Day 3 – Introduction to Python for Data Analysis
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Python setup & Jupyter Notebook</li>
                                            <li>Python basics: variables, data types, and loops</li>
                                            <li>Introduction to Pandas & NumPy</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Load sample datasets and perform basic operations using Python.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        <i class="bi bi-calendar-check me-2"></i>Day 4 – Data Cleaning with Python
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Handling missing values, duplicates, and incorrect formats</li>
                                            <li>Filtering, sorting, and indexing dataframes</li>
                                            <li>Combining datasets and data transformation</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Clean and transform a dataset using Pandas.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        <i class="bi bi-calendar-check me-2"></i>Day 5 – Data Visualization
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Charts and graphs in Excel</li>
                                            <li>Matplotlib and Seaborn basics</li>
                                            <li>Creating informative plots for analysis</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Visualize sample datasets in Excel and Python.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">
                                        <i class="bi bi-calendar-check me-2"></i>Day 6 – Exploratory Data Analysis & Statistics
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Summary statistics and distributions</li>
                                            <li>Correlation and data trends</li>
                                            <li>Exploratory Data Analysis (EDA) workflow</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Analyze a dataset and summarize insights using Python and Excel.</p>
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
                                            <li>Combine Excel & Python skills for a complete project</li>
                                            <li>Clean, analyze, and visualize a real-world dataset</li>
                                            <li>Live mentor review & Q&A session</li>
                                        </ul>
                                        <strong>Final Project:</strong>
                                        <p>Complete a data analysis project and generate actionable insights with visualizations and
                                            reports.</p>
                                        <strong>💻 Live Session:</strong>
                                        <p>Participate in a live interactive session to review your final project and get personalized
                                            feedback before receiving your CollegeAll Certificate.</p>
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
                    <img src="../../../img/excel.webp" 
                        alt="digital marketing" 
                        class="img-fluid rounded-3 mb-3">

                    <p class="lead mb-4">
                    Master essential data analysis skills — <strong>Excel, Python, Pandas, NumPy, Matplotlib & Seaborn</strong> — 
                    and make data-driven decisions like a professional analyst.
                    </p>
                    
                    <hr>
                    
                    <div class="mb-3">
                        <p class="price-off mb-1">₹499 <span class="original-price-off">₹2,099</span></p>
                        <p class="text-success mb-0">76% discount • Limited time offer</p>
                    </div>
                    
                    <p class="blink mb-3" id="countdown">1 day left at this price!</p>
                    
                    <button class="btn subscription-btn" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="3">
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