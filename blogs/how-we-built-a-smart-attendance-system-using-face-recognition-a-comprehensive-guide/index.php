
<?php
// Blog created on January 23, 2026
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="https://api.collegeall.com/Logo/fav.png">
    <title>How We Built a Smart Attendance System Using Face Recognition - A Comprehensive Guide</title>
    <meta name="description" content="Discover the journey of building a smart attendance system leveraging cutting-edge face recognition technology. Learn about its architecture, benefits, implementation steps, and challenges.">
    <meta name="keywords" content="smart attendance system, face recognition, AI attendance, biometric attendance, how to build attendance system, facial recognition benefits, attendance technology, OpenCV, Python, HR automation">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8359931951854136" crossorigin="anonymous"></script>
    
    <style>
      body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
      a { text-decoration: none; }
      
    .blog-hero-image { width: 100%; height: 400px; object-fit: cover; border-radius: 15px 15px 0 0; margin-bottom: 2rem; }
    .blog-content { background: #fff; border-radius: 15px; box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08); overflow: hidden; margin-bottom: 3rem; }
    .blog-body { padding: 2rem; }
    .blog-title { font-weight: 800; color: #2c3e50; }
    
    /* Component: Benefit Card (Simple Checklist/Summary) */
    .benefit-card { background: #fff; border-left: 4px solid #4361ee !important; border-radius: 12px; padding: 1.5rem; transition: all 0.3s ease; position: relative; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05); margin-bottom: 1rem; }
    
    /* Component: Benefit Item (Q&A, Detailed Points) */
    .benefit-item { background: #fff; border: 1px solid #e9ecef; border-radius: 12px; padding: 1.5rem; margin-bottom: 1rem; transition: all 0.3s ease; position: relative; animation: fadeInUp 0.6s ease-out; }
    .benefit-title { font-weight: 700; font-size: 1.1rem; margin-bottom: 0.75rem; color: #1e293b; }
    .benefit-content { color: #475569; line-height: 1.6; }
    .benefit-item::before { content: ''; position: absolute; left: 0; top: 0; height: 100%; width: 4px; background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%); border-radius: 2px 0 0 2px; }
    
    .highlight-text { background: linear-gradient(135deg, rgba(67, 97, 238, 0.1) 0%, rgba(58, 12, 163, 0.1) 100%); border-left: 4px solid #4361ee; padding: 1.5rem; border-radius: 8px; font-weight: 500; margin: 1.5rem 0; }
    .section-title { font-size: 1.8rem; font-weight: 700; color: #2c3e50; margin-bottom: 1.5rem; position: relative; padding-bottom: 0.5rem; }
    .section-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%); border-radius: 2px; }
    .sidebar-card { background: #fff; border-radius: 15px; box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08); padding: 1.5rem; margin-bottom: 2rem; border: 1px solid #f1f3f4; }
    .sidebar-title { font-size: 1.3rem; font-weight: 700; color: #2c3e50; margin-bottom: 1.5rem; position: relative; padding-bottom: 0.5rem; border-bottom: 2px solid #4361ee; }
    .cta-section { background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%); color: white; padding: 2rem; border-radius: 15px; text-align: center; margin-bottom: 2rem; }
    .list-group-item { border: none !important; border-bottom: 1px solid #e9ecef !important; transition: all 0.3s ease; display: flex; align-items: center; padding: 10px 0; text-decoration: none; color: #4a5568; }
    .list-group-item:hover { padding-left: 5px; color: #4361ee; }
    table { width: 100%; border-collapse: collapse; margin: 1rem 0; }
    table th, table td { border: 1px solid #dee2e6; padding: 0.75rem; text-align: left; }
    table th { background: #f8f9fa; font-weight: 600; }
    
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

    /* Dropdown specific styles */
    .navbar-nav .nav-item .dropdown-menu-wide { width: 650px; padding: 0; border: 1px solid #e0e0e0; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden; }
    .navbar-nav .nav-item .dropdown-body { display: flex; min-height: 350px; }
    .navbar-nav .nav-item .uni-list { width: 40%; border-right: 1px solid #e9ecef; max-height: 350px; overflow-y: auto; padding: 0; background-color: #f8f9fa; }
    .navbar-nav .nav-item .uni-list button { width: 100%; text-align: left; border: none; background: none; padding: 12px 16px; cursor: pointer; border-bottom: 1px solid #e9ecef; transition: all 0.2s ease; font-size: 0.9rem; color: #495057; }
    .navbar-nav .nav-item .uni-list button:hover { background-color: #e9ecef; }
    .navbar-nav .nav-item .uni-list button.active { background-color: #ffffff; font-weight: 600; color: #0d6efd; border-left: 3px solid #0d6efd; }
    .navbar-nav .nav-item .course-list { display: grid; grid-template-columns: auto auto; width: 100%; max-height: 350px; overflow-y: auto; padding: 16px; background-color: #ffffff; }
    .navbar-nav .nav-item .course-item { display: flex; align-items: center; padding: 10px 12px; margin-bottom: 8px; text-decoration: none; color: #212529; border-radius: 6px; transition: all 0.2s ease; border: 1px solid transparent; }
    .navbar-nav .nav-item .course-item:hover { background-color: #f1f3f5; text-decoration: none; color: #0d6efd; border-color: #e9ecef; }
    .navbar-nav .nav-item .course-logo { width: 24px; height: 24px; object-fit: contain; margin-right: 10px; border-radius: 4px; }
    .navbar-nav .nav-item .course-info { flex: 1; }
    .navbar-nav .nav-item .course-name { font-weight: 500; font-size: 0.9rem; margin-bottom: 2px; }
    .navbar-nav .nav-item .course-degree { font-size: 0.8rem; color: #6c757d; }
    .uni-list::-webkit-scrollbar, .course-list::-webkit-scrollbar { width: 6px; }
    .uni-list::-webkit-scrollbar-track, .course-list::-webkit-scrollbar-track { background: #f1f1f1; }
    .uni-list::-webkit-scrollbar-thumb, .course-list::-webkit-scrollbar-thumb { background: #c1c1c1; border-radius: 3px; }
    
    /* Navbar Styles */
    .navbar { background: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, .05); }
    .search-input { border: none; outline: none; background: transparent; width: 100%; padding: .6rem 1rem; }
    .search-container { border: 1px solid #e5e7eb; border-radius: 24px; display: flex; align-items: center; overflow: hidden; }
    .navbar .search-btn { background: none; }

      
.footer-modern { background: linear-gradient(135deg, #0f172a, #020617); color: #f8fafc; position: relative; overflow: hidden; }
.footer-modern::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 1px; background: linear-gradient(90deg, transparent, #004aad, transparent); }
.footer-modern .footer-brand { margin-bottom: 2rem; }
.footer-modern .footer-logo { background: white; border-radius: 8px; padding: 12px; display: inline-block; margin-bottom: 1.5rem; }
.footer-modern .footer-logo img { height: 35px; }
.footer-modern .social-links { display: flex; gap: 1rem; margin-bottom: 2rem; }
.footer-modern .social-link { width: 44px; height: 44px; border-radius: 50%; background: rgba(255, 255, 255, 0.1); display: flex; align-items: center; justify-content: center; color: #f8fafc; text-decoration: none; transition: all 0.3s ease; border: 1px solid rgba(255, 255, 255, 0.2); }
.footer-modern .social-link:hover { background: #004aad; transform: translateY(-2px); box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3); }
.footer-modern .footer-section { margin-bottom: 2.5rem; }
.footer-modern .footer-title { color: #f8fafc; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.1rem; position: relative; padding-bottom: 0.75rem; }
.footer-modern .footer-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 40px; height: 2px; background: #004aad; border-radius: 2px; }
.footer-modern .footer-links { list-style: none; padding: 0; margin: 0; }
.footer-modern .footer-links li { margin-bottom: 0.75rem; }
.footer-modern .footer-links a { color: #94a3b8; text-decoration: none; transition: all 0.3s ease; font-size: 0.9rem; line-height: 1.4; }
.footer-modern .footer-links a:hover { color: #f8fafc; padding-left: 5px; }
.footer-modern .contact-info { margin-bottom: 2rem; }
.footer-modern .phone-number { font-size: 1.25rem; font-weight: 600; color: #f8fafc; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; }
.footer-modern .whatsapp-btn { background: #25D366; border: none; border-radius: 8px; padding: 12px 20px; color: white; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3); }
.footer-modern .whatsapp-btn:hover { background: #128C7E; transform: translateY(-2px); box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4); color: white; }
.footer-modern .courses-columns { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; }
.footer-modern .course-category { margin-bottom: 2rem; }
.footer-modern .footer-bottom { border-top: 1px solid #334155; padding: 1.5rem 0; margin-top: 2rem; }
.footer-modern .footer-bottom-content { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; }
.footer-modern .legal-links { display: flex; gap: 2rem; }
.footer-modern .legal-links a { color: #94a3b8; text-decoration: none; font-size: 0.9rem; transition: color 0.3s ease; }
.footer-modern .legal-links a:hover { color: #f8fafc; }
.footer-modern .copyright { color: #94a3b8; font-size: 0.9rem; }
@media (max-width: 768px) { .footer-modern .footer-bottom-content { flex-direction: column; text-align: center; } .footer-modern .legal-links { justify-content: center; } .footer-modern .courses-columns { grid-template-columns: 1fr; } .footer-modern .social-links { justify-content: center; } }

    </style>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color:#fff; box-shadow:0 1px 5px rgba(0,0,0,0.1); z-index:1030;">
        <div class="container">
            <a class="navbar-brand" href="https://collegeall.com/" style="display:flex; align-items:center;">
                <img src="https://collegeall.com/img/Logo/collegeallLogo.png" height="38" alt="CollegeAll logo">
            </a>
            <div class="d-flex gap-1 d-lg-none ms-auto">
                <button class="border-0 bg-transparent" id="mobileSearchBtn" aria-label="Search"><i class="bi bi-search fs-5 text-dark"></i></button>
                <button class="navbar-toggler border-0 fs-1 bg-transparent" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuCanvas"><i class="bi bi-list"></i></button>
            </div>
            <div class="mx-lg-3 flex-grow-1 d-none d-lg-flex">
                <div class="search-container w-100  d-flex align-items-center border rounded-pill px-3" style="border-color:#ddd; height:35px;">
                    <input class="form-control border-0 shadow-none" type="search" id="searchInput" placeholder="Search Colleges, Courses, or Exams..." aria-label="Search" style="font-size:0.7rem; background:none;">
                    <button class="btn text-secondary px-2"><i class="bi bi-search"></i></button>
                </div>
            </div>
            <ul class="navbar-nav d-none d-lg-flex align-items-center ms-auto gap-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="programDropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:#333; font-weight:500; font-size:0.8rem;">Find Program</a>
                    <div class="dropdown-menu dropdown-menu-wide" id="dropdownMenu">
                        <div class="dropdown-body">
                            <div class="uni-list" id="uniList">Loading universities...</div>
                            <div class="course-container">
                                <div class="course-list" id="courseList">Loading courses...</div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="toolsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#333; font-weight:500; font-size:0.8rem;">Free Tools</a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3" aria-labelledby="toolsDropdown" style="font-size:0.8rem;">
                        <li><a href="https://collegeall.com/tools/qr-generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">QR Code Generator</a></li>
                    <li><a href="https://collegeall.com/tools/Password-Generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Password Generator</a></li>
                    <li><a href="https://collegeall.com/tools/data-convertor.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Array to CSV Convertor</a></li>
                    <li><a href="https://collegeall.com/tools/bmi-calculator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">BMI Calculator</a></li>
                    <li><a href="https://collegeall.com/tools/color-palette.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Color Picker</a></li>
                    <li><a href="https://collegeall.com/tools/gradient-generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Gradient Generator</a></li>
                    <li><a href="https://collegeall.com/tools/image-compressor.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Image Compressor</a></li>
                    <li><a href="https://collegeall.com/tools/api-tester.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Api Tester</a></li>
                    <li><a href="https://collegeall.com/tools/emi-calculator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">EMI Calculator</a></li>
                    <li><a href="https://collegeall.com/tools/resume-builder/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Resume Builder</a></li>
                
                    <div class="border-t border-gray-100 my-1"></div>
                
                    <li><a href="https://collegeall.com/tools/" class="block px-4 py-2.5 text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors text-center">More Tools</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="blogsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#333; font-weight:500; font-size:0.8rem;">Blogs</a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3" aria-labelledby="blogsDropdown" style="font-size:0.8rem;">
                        <li><a href="https://collegeall.com/blogs/vignan-university-online-mba/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                        Vignan University Online MBA
                    </a></li>
                        
                    <li><a href="https://collegeall.com/blogs/upgrade-your-skills-with-online-mba-in-project-management/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Upgrade Your Skills with Online MBA in Project Management
                    </a></li>
                        
                    <li><a href="https://collegeall.com/blogs/online-mcom-general-kurukshetra-university-ugc-approved-postgraduate-degree/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Online M.Com (Kurukshetra University)
                    </a></li>
                        
                    <li><a href="https://collegeall.com/blogs/online-mba-program/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Online MBA Program
                    </a></li>
                        
                    <li><a href="https://collegeall.com/blogs/mba-in-international-finance-accredited-by-acca-uk-jain-university-online/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       MBA in International Finance (Jain University)
                    </a></li>
                        
                    <li><a href="https://collegeall.com/blogs/gen-z-online-mba/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Gen Z Online MBA
                    </a></li>
                        
                    <li><a href="https://collegeall.com/blogs/boost-your-salary/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Boost Your Salary
                    </a></li>
                        
                    <div class="border-t border-gray-100 my-1"></div>
                        
                    <li><a href="https://collegeall.com/blogs/" class="block px-4 py-2.5 text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors text-center">
                       View All Blogs
                    </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="https://collegeall.com/university-suggestions/" class="btn" style="background: #ff3131 !important; color:#fff; border-radius:50px; padding:6px 16px; font-size:0.8rem;"><i class="bi bi-lightning-fill"></i> AI Match</a></li>
                <li class="nav-item"><a href="/signin" class="btn" style="border:1px solid #0d6efd; color:#0d6efd; border-radius:50px; padding:6px 16px; font-size:0.8rem;">Log in</a></li>
                <li class="nav-item"><a href="/signup" class="btn" style="background:#0d6efd; color:#fff; border-radius:50px; padding:6px 16px; font-size:0.8rem;">Sign up</a></li>
            </ul>
        </div>
    </nav>
    <div class="offcanvas offcanvas-end" id="mobileMenuCanvas" style="width:300px;">
        <div class="offcanvas-header" style="border-bottom:1px solid #eee;">
            <button class="border-0 bg-transparent ms-auto" data-bs-dismiss="offcanvas"><i class="bi bi-x-lg fs-5"></i></button>
        </div>
        <div class="offcanvas-body px-3 pt-3 mb-3">
            <div class="d-flex flex-column gap-2 mt-3 pb-3 border-bottom" style="border-color:red;">
                <a href="https://collegeall.com/university-suggestions/" class="d-flex align-items-center gap-2 text-decoration-none text-dark fw-semibold" style="padding:8px 0;"><i class="bi bi-lightning-fill text-primary"></i> AI Match</a>
                <a href="/signin" class="d-flex align-items-center gap-2 text-decoration-none text-dark" style="padding:8px 0;"><i class="bi bi-box-arrow-in-right text-primary"></i> Log in</a>
                <a href="/signup" class="d-flex align-items-center gap-2 text-decoration-none text-dark" style="padding:8px 0;"><i class="bi bi-person-plus-fill text-primary"></i> Sign up</a>
            </div>
            <div class="dropdown mt-4">
                <p class="fw-semibold mb-2" data-bs-toggle="dropdown" style="cursor:pointer; font-size:1rem;"><i class="bi bi-tools"></i> Free Tools List</p>
                <div class="dropdown-menu show border-0 shadow-sm p-3" style="position:relative; display:block; width:100%; font-size:0.8rem;">
                    <div class="d-flex flex-column gap-2">
                        <a href="https://collegeall.com/tools/qr-generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">QR Code Generator</a>
                        <a href="https://collegeall.com/tools/Password-Generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Password Generator</a>
                        <a href="https://collegeall.com/tools/data-convertor.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Array to CSV Convertor</a>
                        <a href="https://collegeall.com/tools/bmi-calculator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">BMI Calculator</a>
                        <a href="https://collegeall.com/tools/color-palette.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Color Picker</a>
                        <a href="https://collegeall.com/tools/gradient-generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Gradient Generator</a>
                        <a href="https://collegeall.com/tools/image-compressor.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Image Compressor</a>
                        <a href="https://collegeall.com/tools/api-tester.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Api Tester</a>
                        <a href="https://collegeall.com/tools/emi-calculator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">EMI Calculator</a>
                        <a href="https://collegeall.com/tools/resume-builder/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Resume Builder</a>
                    
                        <div class="border-t border-gray-100 my-1"></div>
                    
                        <a href="https://collegeall.com/tools/" class="block px-4 py-2.5 text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors text-center">More Tools</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main class="container py-5">
        <div class="row">
            
       <div class="col-lg-8">
             <img class="blog-hero-image" src="https://picsum.photos/800/400?random=blog-1769148399416-0" alt="How We Built a Smart Attendance System Using Face Recognition">
             <div class="blog-content">
                <div class="blog-body">
                    <h1 class="blog-title mb-4">How We Built a Smart Attendance System Using Face Recognition</h1>
                    <p class="lead">The landscape of workforce management is rapidly evolving, moving beyond traditional methods like punch cards and manual registers. At the forefront of this transformation is AI-powered face recognition technology, offering a seamless, efficient, and secure way to manage attendance. We embarked on a journey to build a smart attendance system leveraging this cutting-edge technology, and here's a deep dive into our experience.</p>

                    <h2 class="section-title mt-5">The Shift from Traditional to Smart Attendance</h2>
                    <p>Traditional attendance systems often grapple with inefficiencies, errors, and security vulnerabilities like "buddy punching" or lost ID cards. These challenges lead to administrative overhead, delayed payroll processing, and potential financial losses. Recognizing these pain points, we envisioned a solution that automates time tracking, enhances security, and provides real-time insights.</p>
                    <p>An AI face recognition attendance system is a biometric solution that identifies individuals based on their unique facial features, automatically logging their presence. Unlike older methods, it operates contactlessly, making the process hygienic and significantly faster.</p>

                    <h2 class="section-title mt-5">Key Benefits of Our Smart Attendance System</h2>
                    <p>Implementing our face recognition attendance system has unlocked numerous advantages, streamlining operations and improving the overall employee experience:</p>
                    <div class="subsection-paragraph benefit-card">
                        <p>✅   <strong>Accurate and Reliable:</strong> Our system minimizes human error and eliminates attendance fraud, such as "buddy punching," by verifying identities in real time.</p>
                        <p>✅   <strong>Time-Saving and Efficient:</strong> Employees no longer queue or fumble with cards; attendance is recorded within seconds, allowing for quicker check-ins.</p>
                        <p>✅   <strong>Enhanced Security:</strong> By accurately identifying individuals, the system restricts unauthorized access and bolsters overall workplace security.</p>
                        <p>✅   <strong>Real-Time Insights &amp; Reporting:</strong> Automated data collection provides instant access to attendance trends, overtime, and punctuality, aiding in informed decision-making.</p>
                        <p>✅   <strong>Contactless and Hygienic:</strong> Especially vital in today's health-conscious world, the touch-free nature of facial recognition reduces physical touchpoints.</p>
                        <p>✅   <strong>Seamless Integration:</strong> Our system is designed to integrate smoothly with existing HR and payroll platforms, automating data synchronization and reducing manual entry.</p>
                    </div>

                    <h2 class="section-title mt-5">The Building Blocks: How We Developed It</h2>
                    <p>Our development process followed a structured approach to ensure a robust and scalable solution:</p>

                    <div class="benefit-item">
                      <div class="benefit-title">1. Defining Requirements and Objectives</div>
                      <div class="benefit-content">Before writing a single line of code, we clearly outlined the system's goals, including real-time tracking, reporting functionalities, and security protocols.</div>
                    </div>

                    <div class="benefit-item">
                      <div class="benefit-title">2. Choosing the Right Hardware</div>
                      <div class="benefit-content">High-quality cameras were crucial. We selected cameras with good resolution (at least 720p), a wide field of view, and decent low-light performance to ensure clear image capture at entry points.</div>
                    </div>

                    <div class="benefit-item">
                      <div class="benefit-title">3. Collecting and Registering Employee Data</div>
                      <div class="benefit-content">A database of employee facial images was compiled, ensuring diverse angles and lighting conditions for each individual. Ethical considerations and privacy compliance were paramount during this phase.</div>
                    </div>

                    <div class="benefit-item">
                      <div class="benefit-title">4. Selecting and Developing AI Software</div>
                      <div class="benefit-content">We utilized Python as our core programming language, integrating libraries like OpenCV for face detection and recognition, and <code>face_recognition</code> and NumPy for feature extraction and comparison. Some advanced systems might use technologies like Tensorflow and FaceNet for deeper learning capabilities. The system captures an image, processes it to extract unique facial characteristics (like the distance between eyes or jaw contour), and compares it against stored profiles to verify identity.</div>
                    </div>

                    <div class="benefit-item">
                      <div class="benefit-title">5. Integrating with Existing Systems</div>
                      <div class="benefit-content">Seamless integration with HR and payroll platforms was a core objective. This allows for automatic feeding of accurate attendance data, reducing manual effort and speeding up payroll processing.</div>
                    </div>

                    <div class="benefit-item">
                      <div class="benefit-title">6. Implementing Security and Privacy Measures</div>
                      <div class="benefit-content">Given the sensitive nature of facial data, robust security protocols, including encrypted data storage and compliance with privacy regulations, were put in place. Liveness detection was also incorporated to prevent spoofing attempts using photos or videos.</div>
                    </div>

                    <div class="benefit-item">
                      <div class="benefit-title">7. Thorough Testing and Gradual Rollout</div>
                      <div class="benefit-content">Before full deployment, the system underwent extensive testing under real-world conditions. Employee training was also conducted to address any concerns and ensure smooth adoption.</div>
                    </div>

                    <div class="highlight-text">
                        <p><strong>Did you know?</strong> Modern AI attendance systems can learn from new data, continuously improving accuracy over time. Some companies report up to a 30% reduction in payroll errors after implementing such systems.</p>
                    </div>

                    <h2 class="section-title mt-5">Overcoming Challenges in Face Recognition Implementation</h2>
                    <p>While highly beneficial, building a face recognition system comes with its own set of challenges that require careful consideration and innovative solutions:</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Challenge</th>
                                <th>Description</th>
                                <th>Impact on Accuracy</th>
                                <th>Our Solutions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Lighting &amp; Image Quality</strong></td>
                                <td>Poor or inconsistent lighting, blurry images, or low-resolution cameras can lead to misidentification.</td>
                                <td>Decreases significantly</td>
                                <td>High-quality cameras, optimizing lighting conditions at entry points, and image preprocessing algorithms.</td>
                            </tr>
                            <tr>
                                <td><strong>Facial Variations &amp; Occlusions</strong></td>
                                <td>Changes in expressions, head angles, facial hair, makeup, glasses, or masks can confuse algorithms.</td>
                                <td>Decreases significantly</td>
                                <td>Advanced AI/deep learning algorithms that adapt to variations, 3D face modeling, and liveness detection.</td>
                            </tr>
                            <tr>
                                <td><strong>Dataset &amp; Model Limitations</strong></td>
                                <td>Small or non-diverse training datasets limit the system's ability to generalize to real-world conditions.</td>
                                <td>Decreases significantly</td>
                                <td>Utilizing diverse and large datasets for training, and continuously updating models with new data.</td>
                            </tr>
                            <tr>
                                <td><strong>Privacy &amp; User Acceptance</strong></td>
                                <td>Concerns about data privacy and user resistance to new technology can be significant hurdles.</td>
                                <td>Indirect (impacts adoption)</td>
                                <td>Ensuring robust data encryption, strict adherence to privacy regulations (e.g., GDPR), and clear communication with employees about system benefits and data handling.</td>
                            </tr>
                            <tr>
                                <td><strong>Scalability &amp; Real-time Processing</strong></td>
                                <td>Managing a large number of users and ensuring efficient real-time processing can be demanding on hardware and software.</td>
                                <td>Decreases if not optimized</td>
                                <td>Optimized algorithms, efficient database management (e.g., SQL-Lite, cloud solutions), and scalable infrastructure.</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 class="section-title mt-5">The Future of Smart Attendance</h2>
                    <p>The evolution of smart attendance systems is continuous. Future trends include even more sophisticated AI and deep learning algorithms capable of handling challenging conditions like varying lighting or partial facial obstructions more effectively. Multimodal biometric verification, combining face recognition with other methods like voice or fingerprint, is also emerging to enhance security and reliability further.</p>
                    <p>Our journey to build a smart attendance system using face recognition has been transformative. It has demonstrated the immense potential of AI and biometrics to revolutionize workplace operations, making them more secure, efficient, and user-friendly. While challenges exist, continuous innovation and a focus on ethical implementation pave the way for smarter, more adaptable attendance solutions.</p>
                </div>
            </div>
       </div>

            
<div class="col-lg-4">
    <div class="cta-section mb-4 p-4 text-white rounded">
        <h3 class="cta-title mb-3">Ready to Advance Your Career?</h3>
        <p class="cta-description mb-4">Take the first step towards your professional growth with our accredited Online MBA programs designed for working professionals.</p>
        <a href="https://collegeall.com/" class="btn btn-light text-primary px-4 py-2 rounded-pill d-inline-flex align-items-center">
            <i class="bi bi-rocket me-2"></i><span>Apply Now</span>
        </a>
    </div>
    <div class="sidebar-card mb-4">
        <h4 class="sidebar-title mb-3">Featured Program</h4>
        <div class="news-poster">
            <img alt="Featured MBA Program" class="img-fluid rounded" src="data:image/jpeg;base64,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">
        </div>
    </div>
    <div class="sidebar-card mb-4">
        <h4 class="sidebar-title mb-3">Popular MBA Specializations</h4>
        <div class="list-group">
            <a href="https://collegeall.com/" class="list-group-item list-group-item-action border-0 py-3"><i class="bi-people text-primary me-2"></i><span>Human Resource Management</span></a>
            <a href="https://collegeall.com/" class="list-group-item list-group-item-action border-0 py-3"><i class="bi-megaphone text-success me-2"></i><span>Marketing Management</span></a>
            <a href="https://collegeall.com/" class="list-group-item list-group-item-action border-0 py-3"><i class="bi-graph-up text-info me-2"></i><span>Finance &amp; Analytics</span></a>
            <a href="https://collegeall.com/" class="list-group-item list-group-item-action border-0 py-3"><i class="bi-diagram-3 text-warning me-2"></i><span>Operations &amp; Supply Chain</span></a>
            <a href="https://collegeall.com/" class="list-group-item list-group-item-action border-0 py-3"><i class="bi-laptop text-danger me-2"></i><span>Online MBA</span></a>
        </div>
    </div>
</div>
        </div>
    </main>

    

   <section class="footer-modern pt-5 pb-3">
        <div class="container">
            <div class="row">
                <!-- Brand & Contact Section -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <div class="footer-logo">
                            <img src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="CollegeAll">
                        </div>
                        
                        <div class="social-links">
                            <a href="https://www.instagram.com/collegeall_edu/" class="social-link" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/college-all/about/" class="social-link" aria-label="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="https://www.facebook.com/College.all/" class="social-link" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=919384080088" class="social-link" aria-label="WhatsApp">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <a href="https://www.youtube.com/@Collegeall" class="social-link" aria-label="YouTube">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="contact-info">
                        <div class="phone-number">
                            <i class="bi bi-telephone-fill"></i>
                            +91 93840 80088
                        </div>
                        <a href="https://wa.me/919384080088" class="whatsapp-btn" target="_blank">
                            <i class="bi bi-whatsapp"></i>
                            Join Us on WhatsApp
                        </a>
                    </div>
                    
                    <div class="footer-section">
                        <h5 class="footer-title">Legal &amp; Contact</h5>
                        <ul class="footer-links">
                            <li><a href="https://collegeall.com/terms-condition/">Terms &amp; Conditions</a></li>
                            <li><a href="https://collegeall.com/privacy-policy/">Privacy Policy</a></li>
                            <li><a href="https://collegeall.com/blogs/">Blogs</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Courses Sections -->
                <div class="col-lg-8 col-md-6">
                    <div class="courses-columns">
                        <!-- Bachelor's Degree Column -->
                        <div class="course-category">
                            <h5 class="footer-title">Bachelor's Degree</h5>
                            <ul class="footer-links">
                                <li><a href="https://collegeall.com/universities/srm-university/bba/">SRM Online BBA - General</a></li>
                                <li><a href="https://collegeall.com/universities/srm-university/bca/">SRM Online BCA - General</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/bba/general/">MUJ Online BBA - General</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/bca/cloud-computing/">MUJ Online BCA - Cloud Computing</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/bca/cyber-security/">MUJ Online BCA - Cyber Security</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/bca/data-science-analytics/">MUJ Online BCA - Data Science Analytics</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/bcom/general/">MUJ Online BCOM - General</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/ba/computer-applications/">VGU Online BA - Computer Applications</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/ba/economics/">VGU Online BA - Economics</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/ba/english/">VGU Online BA - English</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/ba/history/">VGU Online BA - History</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/ba/international-relations/">VGU Online BA - International Relations</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/ba/political-science/">VGU Online BA - Political Science</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/ba/psychology/">VGU Online BA - Psychology</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/ba/public-policy-development/">VGU Online BA - Public Policy Development</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/bba/digital-marketing/">VGU Online BBA - Digital Marketing</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/bba/fintech/">VGU Online BBA - Fintech</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/bba/retail-management/">VGU Online BBA - Retail Management</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/bca/artificial-intelligence/">VGU Online BCA - Artificial intelligence</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/bca/block-chain-technology/">VGU Online BCA - Block Chain Technology</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/bca/cloud-technology-information-security/">VGU Online BCA - Cloud Technology &amp; Information Security</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/bca/data-science/">VGU Online BCA - Data Science</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/bca/general/">VGU Online BCA - General</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/bca/ux-design/">VGU Online BCA - UX-Design</a></li>
                            </ul>
                        </div>
                        
                        <!-- Top Courses & MCA Column -->
                        <div class="course-category">
                            <div class="mb-4">
                                <h5 class="footer-title">Top Courses</h5>
                                <ul class="footer-links">
                                    <li><a href="https://collegeall.com/universities/liba/pgdm/business-analytics/">LIBA Online PGDM - Business Analytics</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/pgdm/financial-management/">LIBA Online PGDM - Financial Management</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/pgdm/healthcare-management/">LIBA Online PGDM - Healthcare Management</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/pgdm/human-resource-management/">LIBA Online PGDM - Human Resource Management</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/pgdm/logistics-and-supply-chain-management/">LIBA Online PGDM - Logistics &amp; Supply Chain Management</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/pgdm/marketing-management/">LIBA Online PGDM - Marketing Management</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/pgpm/ai-data-science/">LIBA Online PGPM - AI &amp; Data Science</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/pgpm/fintech/">LIBA Online PGPM - Fintech</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/pgpm/healthcare/">LIBA Online PGPM - Healthcare</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/ms-finance/">MS Finance</a></li>
                                    <li><a href="https://collegeall.com/universities/liba/dba/">Doctor of Business Analytics</a></li>
                                </ul>
                            </div>
                            
                            <div>
                                <h5 class="footer-title">Popular MCA Courses</h5>
                                <ul class="footer-links">
                                    <li><a href="https://collegeall.com/universities/srm-university/mca/">SRM Online MCA - General</a></li>
                                    <li><a href="https://collegeall.com/universities/vit-university/mca/ai-ml/">VIT Online MCA - AI &amp; ML</a></li>
                                    <li><a href="https://collegeall.com/universities/vit-university/mca/cyber-security/">VIT Online MCA - Cyber Security</a></li>
                                    <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mca/general/">MUJ Online MCA - General</a></li>
                                    <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mca/ai-data-science/">MUJ Online MCA - AI &amp; Data Science</a></li>
                                    <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mca/cloud-computing/">MUJ Online MCA - Cloud Computing</a></li>
                                    <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mca/cyber-security/">MUJ Online MCA - Cyber Security</a></li>
                                    <li><a href="https://collegeall.com/universities/andhra-university/mca/general/">AU Online MCA - General</a></li>
                                    <li><a href="https://collegeall.com/universities/sikkim-manipal-university/mca/cloud-computing/">SMU Online MCA - Cloud Computing</a></li>
                                    <li><a href="https://collegeall.com/universities/vivekananda-global-university/">VGU Online MCA - General</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- MBA Courses Column -->
                        <div class="course-category">
                            <h5 class="footer-title">Popular MBA Courses</h5>
                            <ul class="footer-links">
                                <li><a href="https://collegeall.com/universities/bharathidasan-university/mba/general/">BDU Online MBA - General</a></li>
                                <li><a href="https://collegeall.com/universities/vit-university/mba/digital-marketing/">VIT Online MBA - Digital Marketing</a></li>
                                <li><a href="https://collegeall.com/universities/vit-university/mba/finance/">VIT Online MBA - Finance</a></li>
                                <li><a href="https://collegeall.com/universities/vit-university/mba/human-resource-management/">VIT Online MBA - Human Resource Management</a></li>
                                <li><a href="https://collegeall.com/universities/vit-university/mba/operation-supply-chain-management/">VIT Online MBA - Operation Supply Chain management</a></li>
                                <li><a href="https://collegeall.com/universities/srm-university/mba/">SRM Online MBA - General</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/mba/agri-business-management/">VGU Online MBA - Agri-Business Management</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/mba/finance/">VGU Online MBA - Finance</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/mba/healthcare-management/">VGU Online MBA - Healthcare Management</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/mba/hrm/">VGU Online MBA - Human Resource Management</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/mba/information-technology/">VGU Online MBA - Information Technology</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/mba/international-business-management/">VGU Online MBA - International Business Management</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/mba/marketing/">VGU Online MBA - Marketing</a></li>
                                <li><a href="https://collegeall.com/universities/vivekananda-global-university/mba/operation-management/">VGU Online MBA - Operation Management</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mba/analytics-data-science/">MUJ Online MBA - Analytics &amp; Data Science</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mba/finance/">MUJ Online MBA - Finance</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mba/hrm/">MUJ Online MBA - Human Resource Management</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mba/information-systems/">MUJ Online MBA - Information Systems</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mba/international-business-management/">MUJ Online MBA - International Business Management</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mba/logistics-supply-chain-management/">MUJ Online MBA - Logistics Supply Chain Management</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mba/operations-management/">MUJ Online MBA - Operations Management</a></li>
                                <li><a href="https://collegeall.com/universities/manipal-university-jaipur/mba/project-management/">MUJ Online MBA - Project Management</a></li>
                                <li><a href="https://collegeall.com/universities/andhra-university/mba/finance/">AU Online MBA - Finance</a></li>
                                <li><a href="https://collegeall.com/universities/andhra-university/mba/hrm/">AU Online MBA - Human Resource Management</a></li>
                                <li><a href="https://collegeall.com/universities/andhra-university/mba/marketing/">AU Online MBA - Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <div class="copyright">
                        © <script>document.write(new Date().getFullYear())</script>
                        <a href="https://collegeall.com" class="text-decoration-none text-light fw-semibold">CollegeAll.com</a>. All Rights Reserved.
                    </div>
                    <div class="legal-links">
                        <a href="https://collegeall.com/terms-condition/">Terms &amp; Conditions</a>
                        <a href="https://collegeall.com/privacy-policy/">Privacy Policy</a>
                        <a href="https://collegeall.com/blogs/">Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
      (async () => {
         let ip = sessionStorage.getItem('ip_address');
         if (!ip) {
            try {
              const res = await fetch('https://api.ipify.org?format=json');
              const data = await res.json();
              ip = data.ip;
              sessionStorage.setItem('ip_address', ip);
            } catch(e) {}
         }
          
         let locationData = sessionStorage.getItem('location_data');
        
            if (!locationData) {
                const locRes = await fetch(`https://ipapi.co/${ip}/json/`);
                const locJson = await locRes.json();
        
                sessionStorage.setItem('location_data', JSON.stringify(locJson));
                locationData = JSON.stringify(locJson);
            }
        
            const loc = JSON.parse(locationData);
        
            const locationString = `${loc.city || ""}, ${loc.region || ""}, ${loc.country_name || loc.country || ""}`;
        
         
         const campaign_name = window.location.href;

         const page_id = '1';
          const by_id = '1';
      
          fetch('https://api.collegeall.com/api/v1/click-log', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({
                  ip_address: ip,
                  campaign_name,
                  by_id,
                  page_id,
                  location: locationString
              })
          });
         
         // Dropdown Logic
         let allProgram = [];
         const uniList = document.getElementById("uniList");
         const courseList = document.getElementById("courseList");
         const programDropdown = document.getElementById("programDropdown");

         async function fetchCourses() {
            try {
               const res = await fetch("https://api.collegeall.com/api/v1/topcourse", {
                   method: "POST",
                   headers: { "Content-Type": "application/json" }
               });
               const result = await res.json();
               allProgram = result.data.universities;
               
               const universities = [...new Set(allProgram.map(c => c.University_name?.trim()).filter(Boolean))].sort();
               renderUniversities(universities);
               
               if (universities.length > 0) {
                   selectUniversity(universities[0]);
               }
            } catch (err) {
               if(uniList) uniList.innerHTML = "<p class='text-danger p-2'>Error loading data</p>";
            }
         }

         function renderUniversities(universities) {
             if(!uniList) return;
             uniList.innerHTML = "";
             universities.forEach((uni, index) => {
               const btn = document.createElement("button");
               btn.textContent = uni;
               btn.className = index === 0 ? "active" : "";
               
               btn.addEventListener("click", (e) => {
                   e.stopPropagation();
                   selectUniversity(uni);
               });
               // Also support hover for desktop feel if desired
               btn.addEventListener("mouseenter", () => selectUniversity(uni));
               uniList.appendChild(btn);
             });
         }

         function selectUniversity(uniName) {
             if(!uniList) return;
             Array.from(uniList.children).forEach(btn => {
                 btn.classList.toggle("active", btn.textContent === uniName);
             });

             const filtered = allProgram.filter(c => c.University_name === uniName);
             if(!courseList) return;
             
             courseList.innerHTML = "";
             filtered.forEach(course => {
               const a = document.createElement("a");
               a.href = "https://collegeall.com/" + course.url;
               a.className = "course-item";
               a.innerHTML = `
                   <img src="${course.universities_logo}" class="course-logo" alt="logo" />
                   <div class="course-info">
                     <div class="course-name">${course.course_name}</div>
                     <div class="course-degree">${course.degree}</div>
                   </div>
               `;
               courseList.appendChild(a);
             });
         }
         
         if(programDropdown) {
             programDropdown.addEventListener("click", fetchCourses);
             // Trigger fetch on hover too for better UX
             programDropdown.addEventListener("mouseenter", fetchCourses);
         }
      })();
    </script>

</body></html>
