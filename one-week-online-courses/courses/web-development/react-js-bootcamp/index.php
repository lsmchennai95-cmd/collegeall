<?php require_once __DIR__ . '/../../../../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>React JS Bootcamp: Create Dynamic Frontend Applications | CollegeAll</title>
    <meta name="description" content="Learn React JS in 7 days! Build responsive, interactive frontend applications using components, state, hooks, routing, and APIs.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/one-week-online-courses/courses/web-development/react-js-bootcamp/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="React JS Bootcamp: Create Dynamic Frontend Applications | CollegeAll">
    <meta property="og:description" content="Learn React JS in 7 days! Build responsive, interactive frontend applications using components, state, hooks, routing, and APIs.">
    <meta property="og:url" content="https://collegeall.com/one-week-online-courses/courses/web-development/react-js-bootcamp/">
    <meta property="og:image" content="https://college.com/one-week-online-courses/react-bootcamp.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="React JS Bootcamp: Create Dynamic Frontend Applications | CollegeAll">
    <meta name="twitter:description" content="Learn React JS in 7 days! Build responsive, interactive frontend applications using components, state, hooks, routing, and APIs.">
    <meta name="twitter:image" content="https://college.com/one-week-online-courses/react-bootcamp.webp">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "React JS Bootcamp",
      "description": "Learn React JS in 7 days! Build responsive, interactive frontend applications using components, state, hooks, routing, and APIs.",
      "url": "https://collegeall.com/one-week-online-courses/courses/web-development/react-js-bootcamp/",
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
    <meta charset="UTF-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <meta name="keywords" content="React JS course, React bootcamp, frontend development, JSX, components, state management, React hooks, React Router, API integration, interactive web apps, CollegeAll certified">    <meta name="author" content="CollegeAll Certified">    <!-- Open Graph -->    <!-- Theme and Favicon -->    <meta name="theme-color" content="#ffffff">    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <link rel="stylesheet" href="<?php echo asset_url('/one-week-online-courses/css/course.css'); ?>">    <link rel="stylesheet" href="<?php echo asset_url('/one-week-online-courses/index.css'); ?>">        </head>
<body>

    <?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <div id="modalContainer"></div>
    
    <!-- Course Header Section -->
    <section class="course-header mt-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-4">React JS Bootcamp: Create Dynamic Frontend Applications</h1>
                    <p class="lead mb-4">
                        Learn to build <strong>modern, responsive, and dynamic web applications</strong> using React JS, including components, state management, props, hooks, and routing.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <div class="rating d-flex align-items-center">
                        <span class="fw-bold fs-5 me-1 text-warning">4.5</span>
                        <span class="fs-5 text-warning">★★★★☆</span>
                        <small class="ms-2">(2,023 reviews)</small>
                        </div>
                        
                        <div class="d-flex align-items-center">
                        <i class="bi bi-people-fill me-2"></i>
                        <span>10,800 students enrolled</span>
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
                        <i class="bi bi-clock me-1"></i> 25+ Hours Content
                        </span>
                    </div>

                    <p class="instructor mb-0">
                        <i class="bi bi-person-badge-fill me-2"></i>
                        <strong>Instructor:</strong> Frontend Developer & React Expert
                    </p>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="price-card">
                        <div class="price mb-2 text-white">₹499 <span class="original-price">₹2,999</span></div>
                        <p class="text-white-50 mb-3">80% discount • Limited time offer</p>
                        <button class="btn buy-btn w-100" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="7">
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
                        <li>React fundamentals: JSX, components, props, and state management.</li>
                        <li>Building dynamic user interfaces with reusable components.</li>
                        <li>React hooks: useState, useEffect, and custom hooks.</li>
                        <li>Routing with React Router for multi-page applications.</li>
                        <li>Connecting frontend apps with APIs for real-time data.</li>
                        <li>Managing forms and events in React.</li>
                        <li>Optimizing React apps for performance and responsiveness.</li>
                        <li>Hands-on mini-projects to apply all concepts learned.</li>
                    </ul>
                </div>

                <div class="related-topics">
                    <h4 class="fw-bold mb-4 text-center">
                        <i class="bi bi-lightning-charge me-2"></i>Technologies & Tools You'll Master
                    </h4>
                    <div class="d-flex flex-wrap justify-content-center">
                        <span class="topic-pill">React JS</span>
                        <span class="topic-pill">JSX</span>
                        <span class="topic-pill">Components & Props</span>
                        <span class="topic-pill">State Management</span>
                        <span class="topic-pill">React Hooks</span>
                        <span class="topic-pill">React Router</span>
                        <span class="topic-pill">API Integration</span>
                        <span class="topic-pill">Forms & Event Handling</span>
                        <span class="topic-pill">Conditional Rendering</span>
                        <span class="topic-pill">Project Deployment</span>
                    </div>
                </div>

                <div class="coding-exercises mb-5">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-terminal me-2"></i>Hands-On React Exercises
                    </h2>
                    <p class="fs-5 mb-4">
                        Apply your learning with mini React projects: interactive forms, dynamic lists, API-driven content, and multi-page applications.
                    </p>
                    <div class="text-center">
                        <img 
                        src="../../../img/react-bootcamp.webp" 
                        alt="React" 
                        class="img-fluid rounded-3 shadow-sm"
                        >
                    </div>
                </div>

                <div class="course-content mb-4">
                    <section class="curriculum">
                        <h2 class="text-center mb-5 fw-bold">7-Day React Bootcamp Curriculum</h2>
                        <div class="accordion" id="curriculumAccordion">
                    
                            <!-- Day 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-calendar-check me-2"></i>Day 1 – Introduction to React
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>What is React and why it’s used</li>
                                            <li>Setting up React development environment</li>
                                            <li>Understanding JSX and virtual DOM</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create your first React component and render it on the webpage.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        <i class="bi bi-calendar-check me-2"></i>Day 2 – Components & Props
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Functional components</li>
                                            <li>Props and passing data between components</li>
                                            <li>Nested components and reusability</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Build a multi-component profile card app using props.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        <i class="bi bi-calendar-check me-2"></i>Day 3 – State Management
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Understanding state in React</li>
                                            <li>useState hook for dynamic UI</li>
                                            <li>Updating and rendering state changes</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create a counter app and interactive form using state management.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Day 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        <i class="bi bi-calendar-check me-2"></i>Day 4 – React Hooks & Lifecycle
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>useEffect hook and component lifecycle</li>
                                            <li>Handling side effects and API calls</li>
                                            <li>Best practices for state and effect management</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Fetch data from a public API and display it in a dynamic component.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        <i class="bi bi-calendar-check me-2"></i>Day 5 – React Router & Multi-Page Apps
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Setting up React Router</li>
                                            <li>Navigation between pages without full reload</li>
                                            <li>Nested routes and dynamic URLs</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Build a multi-page React application with routing and navigation links.</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Day 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">
                                        <i class="bi bi-calendar-check me-2"></i>Day 6 – Forms, Events & API Integration
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        <strong>Topics:</strong>
                                        <ul>
                                            <li>Handling form inputs and events</li>
                                            <li>Validating user input</li>
                                            <li>Fetching and sending data to APIs</li>
                                        </ul>
                                        <strong>Activity:</strong>
                                        <p>Create a contact form connected to a mock API and display results dynamically.</p>
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
                                            <li>Bringing all React concepts together</li>
                                            <li>Building dynamic, interactive frontend applications</li>
                                            <li>Live Q&A and personalized feedback session</li>
                                        </ul>
                                        <strong>Final Project:</strong>
                                        <p>Develop a complete multi-page React app (e.g., portfolio, blog, or e-commerce UI) demonstrating
                                            all learned skills.</p>
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
                    <img src="../../../img/react-bootcamp.webp" 
                        alt="React" 
                        class="img-fluid rounded-3 mb-3">

                    <p class="lead mb-4">
                    Master essential React JS skills — <strong>Components, Props, State, Hooks, Router, and API Integration</strong> — 
                    and create dynamic, responsive, and interactive web applications like a professional frontend developer.
                    </p>
                    <hr>
                    
                    <div class="mb-3">
                        <p class="price-off mb-1">₹499 <span class="original-price-off">₹2,999</span></p>
                        <p class="text-success mb-0">80% discount • Limited time offer</p>
                    </div>
                    
                    <p class="blink mb-3" id="countdown">1 day left at this price!</p>
                    
                    <button class="btn subscription-btn" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id="7">
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