
<?php
// Blog created on December 24, 2025
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="https://api.collegeall.com/Logo/fav.png">
    <title>NMC: Unpacking the Latest Reforms and Trends in Medical and Nursing Regulation</title>
    <meta name="description" content="Explore the significant recent developments from the National Medical Commission (India) and the Nursing and Midwifery Council (UK), impacting medical education, healthcare practice, and professional standards.">
    <meta name="keywords" content="NMC, National Medical Commission, Nursing and Midwifery Council, medical education, nursing regulation, MBBS seats, NEET, healthcare trends, UK nursing, India medical, healthcare policy">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8359931951854136"
     crossorigin="anonymous"></script>
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
             <div class="blog-content">
                <img src="data:image/webp;base64,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" class="blog-hero-image" alt="Healthcare professionals discussing NMC regulations">
                <div class="blog-body">
                    <h1 class="blog-title mb-4">NMC in Focus: Decoding the Evolving Landscape of Medical and Nursing Regulation</h1>
                    
                    <p>The acronym "NMC" resonates deeply across the healthcare sectors of both India and the United Kingdom, albeit representing two distinct, yet equally vital, regulatory bodies: the National Medical Commission (India) and the Nursing and Midwifery Council (UK). These institutions are the bedrock of medical and nursing education, practice, and professional standards in their respective nations. Recent months have seen both NMCs at the forefront of significant reforms, policy changes, and evolving challenges, all aimed at enhancing healthcare quality and workforce resilience.</p>

                    <h2 class="section-title">National Medical Commission (India): Expanding Horizons for Medical Education</h2>
                    <p>The National Medical Commission (NMC) in India stands as the principal statutory body entrusted with regulating medical education, medical professionals, and research within the country. Replacing the Medical Council of India (MCI) in 2020, the NMC has been proactive in introducing reforms to address the nation's healthcare demands and elevate the standards of medical training.</p>

                    <div class="benefit-card">
                        <p>✅ <strong>MBBS Seat Expansion:</strong> Applications are now open for new medical colleges and for existing institutions to increase undergraduate (MBBS) seats for the 2026-27 academic year. The NMC aims to tackle the doctor shortage by allowing existing colleges to admit up to 250 MBBS students, a significant rise from the previous limit of 150.</p>
                        <p>✅ <strong>Revised Regulations for Faculty:</strong> The new 'Medical Institutions (Qualifications of Faculty) Regulations, 2025' aim to broaden the pool of eligible faculty, increase the upper age limit for senior residents in preclinical/paraclinical subjects to 50 years, and recognize a wider range of qualifications for teaching positions. This move is expected to facilitate the expansion of both undergraduate and postgraduate seats.</p>
                        <p>✅ <strong>NEET Updates:</strong> The NMC has released updated syllabi for NEET UG 2026 and revised the NEET-PG Counselling Schedule for the Academic Year 2025, streamlining the admission process for aspiring medical professionals.</p>
                        <p>✅ <strong>Focus on Quality and Competency:</strong> New regulations emphasize skill and competency-based learning, stricter academic progress reviews, and transparent digital records, aiming to strengthen doctor training quality and align it with global benchmarks.</p>
                    </div>

                    <p class="highlight-text">The NMC's strategic initiatives reflect a concerted effort to expand access to quality medical education and ensure a sufficient supply of skilled medical professionals across India.</p>

                    <h2 class="section-title">Nursing and Midwifery Council (UK): Navigating Reforms and Workforce Dynamics</h2>
                    <p>In the United Kingdom, the Nursing and Midwifery Council (NMC) acts as the regulator for nursing and midwifery professions, maintaining a register of eligible practitioners and setting standards for their education, training, and conduct. The UK NMC has recently entered a "new phase" following a year of significant reforms and faces ongoing challenges in a demanding healthcare landscape.</p>

                    <div class="benefit-item">
                        <div class="benefit-title">1. Reforms and Fitness to Practise Improvements</div>
                        <div class="benefit-content">The NMC has reported faster case handling and its strongest Fitness to Practise performance in five years, signaling progress in its regulatory functions. Leaders assert that the organization is building a "new NMC" to be a strong and independent regulator.</div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-title">2. Workforce Challenges and International Recruitment</div>
                        <div class="benefit-content">Despite overall growth in the UK register, there has been an almost 50% collapse in international professionals joining the NMC register compared to the previous year, significantly slowing workforce growth. Additionally, data indicates a concerning decline in registered midwives and learning disability nurses.</div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-title">3. Education Standard Consultations and Proposed Fee Increases</div>
                        <div class="benefit-content">The NMC is consulting on modernizing education standards, including potential reductions in program hours and the introduction of mandatory community-based placements for nursing students. However, the regulator has also drawn criticism for its proposal to increase the registration fee from £120 to £143 per year, with concerns raised about the financial burden on an already pressured workforce.</div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-title">4. Support Amidst Winter Pressures</div>
                        <div class="benefit-content">In a joint message, the Chief Nursing Officers for England, Wales, and Northern Ireland, along with the NMC Chief Executive, offered reassurance and support to registered professionals during an anticipated challenging winter period. They acknowledged rising pressures and emphasized that the NMC would consider the full context of care delivery when assessing any regulatory concerns.</div>
                    </div>

                    <h2 class="section-title">The Road Ahead</h2>
                    <p>Both the National Medical Commission of India and the Nursing and Midwifery Council of the UK are instrumental in shaping the future of healthcare. While India's NMC is actively working to expand its medical education infrastructure and enhance the quality of training, the UK's NMC is focused on internal reforms, addressing workforce challenges, and adapting education standards to meet evolving healthcare needs. The actions and policies of these regulatory bodies will continue to have a profound impact on medical and nursing professionals, ultimately influencing the health and well-being of millions.</p>
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
            <img alt="Featured MBA Program" class="img-fluid rounded" src="https://collegeall.com/blogs/assets/img/mba-large-banner.png">
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
