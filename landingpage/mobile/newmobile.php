<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '25443278008607273');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=25443278008607273&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
    <style>
        :root {
            overflow-x: hidden;
        }

        body {
            overflow-x: hidden !important;
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            position: fixed;
            z-index: 100;
            width: 100%;
        }

        .brand-logo img {
            height: 40px;
            cursor: pointer;
        }

        .menu-toggle {
            display: flex;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .menu-toggle span {
            height: 3px;
            width: 25px;
            background: #333;
            border-radius: 3px;
            transition: 0.3s;
        }

        .offcanvas-menu {
            position: fixed;
            top: 0;
            right: -100%;
            height: 100%;
            width: 280px;
            background: #fff;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
            transition: right 0.3s ease;
            z-index: 999;
        }

        .offcanvas-menu.active {
            right: 0;
        }

        .offcanvas-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 10px;
        }

        .search-box {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 5px 10px;
        }

        .search-box input {
            border: none;
            outline: none;
            flex: 1;
            padding: 5px;
        }

        .search-box img {
            width: 20px;
            height: 20px;
        }

        .menu-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .menu-buttons button {
            padding: 12px;
            border: none;
            border-radius: 6px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .menu-buttons button:hover {
            background-color: #0056b3;
        }

        .offcanvas-header {
            display: flex;
            justify-content: flex-end;
            padding: 15px 20px 0;
        }

        .close-btn {
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            color: #333;
            transition: color 0.3s ease;
        }

        .close-btn:hover {
            color: #007bff;
        }

        .banner {
            margin-top: 70px;
        }

        .banner img {
            width: 100%;
        }

        .card-top {
            padding: 10px 40px;
        }

        .card-top img {
            width: 100%;
        }

        .mobile .logo-slider {
            display: flex;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            width: 100%;
            background: #f8f8f8;
            padding: 20px 0;
        }

        .logo-slider {
            display: flex;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            width: 100%;
            background: #f8f8f8;
            padding: 20px 0;
        }

        .logo-slider {
            display: flex;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            width: 100%;
            background: #f8f8f8;
            padding: 20px 0;
        }

        .logo-track {
            display: flex;
            gap: 30px;
            animation: scrollLeft 50s linear infinite;
        }

        .logo-track img {
            height: 60px;
            max-width: 150px;
            object-fit: contain;
        }

        @keyframes scrollLeft {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .button-group {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
            /* makes it responsive */
            margin-top: 10px;
        }

        .course-button {
            font-size: 12px;
            border-radius: 6px;
            border: 1px solid #d1cbcb;
            padding: 4px 10px;
            white-space: nowrap;
            background-color: #ffffff;
            color: #333;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .course-button:hover {
            background-color: #f0f0f0;
        }

        .course-button.active {
            background-color: #004aad;
            color: #ffffff;
            border-color: #004aad;
        }

        #topUniversityList {
            display: flex;
            overflow-x: scroll;
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: red;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* background of the scroll track */
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: reds;

        }

        .faq-question {
            width: 100%;
            text-align: left;
            padding: 12px 20px;
            margin-top: 10px;
            background-color: #f1f1f1;
            border: none;
            border-left: 5px solid #004AAD;
            cursor: pointer;
            font-size: 16px;
            color: #004AAD;
            transition: background-color 0.3s ease;
        }

        .faq-question:hover {
            background-color: #e0e0e0;
        }

        .faq-answer {
            display: none;
            background-color: #f9f9f9;
            border-left: 5px solid #004AAD;
            border-top: 1px solid #ddd;
            color: #333;
            font-size: 15px;
        }

        .jjj button {
            background-color: #4CAF50;
            /* Green */
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
            margin-left: 10px;
        }

        .jjj button:hover {
            background-color: #45a049;
        }

        /* Style for the button group */
        .button-group {
            display: flex;
            overflow-x: auto;
            /* Allows horizontal scrolling */
            padding: 10px 0;
            gap: 10px;
            /* Space between buttons */
            white-space: nowrap;
            /* Prevents wrapping of buttons */
        }

        /* Style for the course cards container */
        #topcourses_info {
            display: flex;
            flex-wrap: nowrap;
            /* Ensure cards are not wrapped */
            overflow-x: auto;
            /* Allows horizontal scrolling */
            gap: 15px;
            /* Space between cards */
            padding: 20px 0;
        }

        /* Style for each course card */
        .course-card {
            min-width: 300px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            flex-shrink: 0;
            padding: 15px;
            transition: transform 0.3s ease;
        }

        .course-card button {
            width: 100%;
            background-color: #004AAD;
            color: white;
            border: none;
            border-radius: 10px;
        }

        .course-card:hover {
            transform: translateY(-5px);
            /* Add a subtle hover effect */
        }

        /* Optional: Style for course card content like images and text */
        .course-content {
            display: flex;
            flex-direction: column;
        }

        .course-degree,
        .course-name {
            margin: 5px 0;
        }

        .university-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .university-logo {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .university-name {
            font-weight: bold;
        }

        .course-meta div {
            margin-bottom: 5px;
        }

        .rating i {
            color: #ffd700;
        }

        /* Container to hold all student cards */
        #students-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 16px;
            padding: 16px;
        }

        /* Individual student card */
        .img-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.2s ease;
        }

        .img-card:hover {
            transform: translateY(-5px);
        }

        /* Student image */
        .img-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        /* Student name */
        .img-card p {
            margin: 0;
            padding: 8px 5px;
            background-color: rgb(161, 192, 236);
            font-weight: bold;
            font-size: 14px;
            color: #000;
        }

        /* Company logo wrapper */
        .company-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px 0;
        }

        /* Company logo image */
        .company-logo img {
            max-height: 24px;
            max-width: 80px;
            object-fit: contain;
        }

        @media (max-width: 480px) {
            #students-container {
                grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
                gap: 12px;
             
            }

            .img-card p {
                font-size: 12px;
            }
        }
    </style>
    <?php
    $data = file_get_contents('https://api.collegeall.com/script/model.php');
    echo $data
        ?>
    <div class="row">
        <div class="col-lg-12 mobile">
            <header class="main-header">
                <div class="brand-logo" onclick="Navigate()">
                    <img src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="CollegeAll Logo">
                </div>

                <div class="menu-toggle" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="offcanvas-menu" id="offcanvasMenu">
                    <div class="offcanvas-header">
                        <span class="close-btn" onclick="toggleMenu()">&times;</span>
                    </div>

                    <div class="offcanvas-content">
                        <div class="search-box">
                            <input type="text" placeholder="Search..." id="searchInput">
                            <img src="https://api.collegeall.com/icons/search.png" alt="Search Icon">
                        </div>
                        <div class="menu-buttons">
                            <a onclick="Login()">Login</a>
                            <a onclick="Signup()">Sign Up</a>
                        </div>
                    </div>
                </div>

            </header>

        </div>
        <div class="col-lg-12">
            <div class="banner">
                <img src="./img/landing/bannermobile.png">
            </div>

        </div>
        <div class="col-lg-12">
            <div class="adv">
                <h6 class="text-center">LIBA Admissions Closing Soon</h6>
                <h6 class="text-center"><span style="background-color:red; color: #ffff; padding:2px 4px;">01</span>
                    Day left!!!</h6>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card-top" style="display:flex; align-items: center; justify-content: center;">
                <img src="./img/landing/topcard.png" />
            </div>
        </div>
        <div class="col-lg-12" style="padding-right:0px;">
            <div class="text-center">
                <h6>50 + <span style="color:#0056D2;">Online Universities</span></h6>
            </div>
        </div>
        <div class="col-lg-12" style="padding-right:0px;">
            <div class="logo-slider">
                <div class="logo-track" id="logoTrack">
                    <!-- Logos will be inserted here dynamically -->
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="text-center">Our University Inspires Future Leaders</h6>
        </div>
        <div class="col-lg-12">

            <!-- Desktop carousel -->
            <div id="topUniversityCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
                <div class="carousel-inner" id="topuniversity_info">
                </div>
            </div>
            <div id="topUniversityList">
                <!-- Dynamic university cards injected here -->
            </div>
        </div>
        <div class="col-lg-12 mt-5">
            <h6 class="text-center">Find Your Course of Interest</h6>
        </div>
        <div class="col-lg-12">
            <div class="button-group">
                <button class="course-button active" id="ug-button">UG Courses</button>
                <button class="course-button" id="pg-button">PG Courses</button>
            </div>
        </div>
        <div class="col-lg-12">
            <div id="topcourses_info"></div>
        </div>

        <div class="col-lg-12 mt-5">
            <div class="img-container mt-5" style="background-color: #004AAD;">
                <h6 class="text-center">Student Alumni</h6>
                <div class="img-container-body" id="students-container">
                </div>
            </div>
        </div>

        <div class="col-12">
            <h3 class="mt-5 text-center pb-3" style="font-size:17px; color: #004AAD;">Frequently Asked Questions
            </h3>
            <button class="faq-question" onclick="toggleAnswer(1)">What are the Institutes Partnered With
                College
                All? </button>
            <div class="faq-answer" id="answer1">Details About Partnered Institutes...</div>


            <button class="faq-question" onclick="toggleAnswer(2)">What are the Online Courses Offered by
                College
                All?</button>
            <div class="faq-answer" id="answer2">List of Online Courses...</div>

            <button class="faq-question" onclick="toggleAnswer(3)">Are these Online Degrees Really
                Credible?</button>
            <div class="faq-answer" id="answer3">Information About Credibility...</div>
        </div>



        <div class="col-12 mt-5" style="background-color: #004AAD; color: #ffff;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 pt-5">
                        <h5> About College All</h5>
                        <div style="padding-top: 10px; padding-bottom: 15px;">
                            <img src="./img/all_logo/collegeall.png" alt="college all" height="50px" width="50px">
                        </div>
                        <h5 class="pt-2"><i class="fas fa-university"></i> Explore All Universities</h5>
                        <p>Unlock access to the world’s top universities – verified, detailed, and ready to help you
                            shape your future.</p>

                        <h5><i class="fas fa-globe"></i> Browse by Country</h5>
                        <p>Navigate education opportunities across 200+ countries – find the best colleges where your
                            dreams can begin.</p>

                        <h5><i class="fas fa-book-open"></i> Discover All Courses</h5>
                        <p>From trending tech programs to timeless arts and sciences – explore courses that match your
                            passion and career goals.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Legal/Contact</h5>
                        <p style="color:#fff;"><a href="#" style="color:#fff;">Terms & Condition</a></p>
                        <p style="color:#fff;"><a href="#" style="color:#fff;">Privacy & Policy</a></p>
                    </div>
                    <div class="col-md-4">
                        <h5>Contact Us</h5>
                        <p>📞 89250 35718</p>
                        <button class="btn-success" style="padding:5px; border-radius: 5px;">Join Us on
                            WhatsApp</button>
                        <h5 class="mt-4 mb-3">Follow Us</h5>

                        <p>
                            <a href="https://www.instagram.com/college.all/"><i class="fa-brands fa-instagram"
                                    style="font-size:30px; padding-right: 8px; color: #ffff;"></i></a>
                            <a href="https://www.linkedin.com/company/college-all/about/"><i
                                    class="fa-brands fa-linkedin"
                                    style="font-size:30px; padding-right: 8px; color: #ffff;"></i></a>
                            <a href="https://www.facebook.com/College.all/"><i class="fa-brands fa-facebook"
                                    style="font-size:30px; color: #ffff;"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        const students = [
          
            {
                companyUrl: './img/icons/amazon.png',
                name: 'Anu',
                imageUrl: './img/academic/Anu.png'
            },
            {
                companyUrl: './img/icons/googlee.jpg',
                name: 'Deepak',
                imageUrl: './img/academic/Deepak.png'
            },
            {
                companyUrl: './img/icons/hcl.png',
                name: 'Suba',
                imageUrl: './img/academic/Suba.png'
            },
            {
                companyUrl: './img/icons/ibm.png',
                name: 'Sinthu',
                imageUrl: './img/academic/Sinthu.png'
            },
            {
                companyUrl: './img/icons/amazon.png',
                name: 'Harish',
                imageUrl: './img/academic/Harish.png'
            },
            {
                companyUrl: './img/icons/zoho logo.jpg',
                name: 'Janani',
                imageUrl: './img/academic/Janani.png'
            },
            {
                companyUrl: './img/icons/cognizant.png',
                name: 'Karthik',
                imageUrl: './img/academic/Karthik.png'
            },
            {
                companyUrl: './img/icons/wipro.png',
                name: 'Kaviya',
                imageUrl: './img/academic/Kaviya.png'
            },
            {
                companyUrl: './img/icons/hcl.png',
                name: 'Keerthi',
                imageUrl: './img/academic/Keerthi.png'
            },
            {
                companyUrl: './img/icons/zoho logo.jpg',
                name: 'Maha',
                imageUrl: './img/academic/Maha.png'
            },
            {
                companyUrl: './img/icons/wipro.png',
                name: 'Mathan',
                imageUrl: './img/academic/Mathan.png'
            },
            {
                companyUrl: './img/icons/ibm.png',
                name: 'Pavi',
                imageUrl: './img/academic/Pavi.png'
            },
            {
                companyUrl: './img/icons/cognizant.png',
                name: 'Selvi',
                imageUrl: './img/academic/Selvi.png'
            },
            {
                companyUrl: './img/icons/zoho logo.jpg',
                name: 'Krishna',
                imageUrl: './img/academic/Krishna.png'
            },
            {
                companyUrl: './img/icons/hcl.png',
                name: 'Harini',
                imageUrl: './img/academic/Sri.png'
            }
        ];

        function renderStudentCards() {
            const container = document.getElementById('students-container');

            students.forEach(student => {
                const card = document.createElement('div');
                card.classList.add('img-card');

                card.innerHTML = `
        <img src="${student.imageUrl}" alt="Student Image" >
         <p style="color:#000;font-weight:bold;background-Color:rgb(161, 192, 236); height=30px;">${student.name}</p>
        <div class="student-name">
            <div class="company-logo">
             <img src="${student.companyUrl}" alt="company Image" height="20px" style="padding-left:5px; padding-right:5px;">
            </div>
            
        </div>
    `;

                container.appendChild(card);
            });
        }

        renderStudentCards();
        function toggleAnswer(id) {
            const answer = document.getElementById('answer' + id);
            const isVisible = answer.style.display === 'block';
            answer.style.display = isVisible ? 'none' : 'block';
        }
    </script>

    <script>
        const topcourses_info = document.getElementById('topcourses_info');
        let allCourses = [];

        // Fetch the course data from the API
        async function topcourses() {
            try {
                const response = await fetch('https://api.collegeall.com/api/v1/topcourse', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                });

                const result = await response.json();
                allCourses = result?.data?.universities;  // Store the fetched data globally
                renderCourses(allCourses);  // Render all courses initially
                filterByLevel('UG');
            } catch (error) {
                console.error("Error fetching top courses:", error);
            }
        }

        // Function to render courses
        function renderCourses(courses) {
            topcourses_info.innerHTML = courses.map(item => `
        <div class="course-card">
            <div class="card-content">
                <h5 class="course-degree">${item?.degree}  ${item?.course_name}</h5>
                    <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <div class="university-info">
                    <img src="${item?.universities_logo}" alt="${item?.University_name}" class="university-logo">
                    <h6 class="university-name">${item?.University_name}</h6>
                </div>
                <div class="course-meta">
                    <div><strong>Duration:</strong> <span>${item?.years} Years</span></div>
                    <div><strong>Level:</strong> <span>${item?.course_level}</span></div>
                    <div><strong>Fees:</strong> <span>₹ ${item?.fee} Overall</span></div>
                </div>
            
                <button class="more-info-btn" onclick="NavigateUrl('${item?.url}')">More Info</button>
            </div>
        </div>
    `).join('');
        }

        // This function is for navigating to the course URL when the "More Info" button is clicked.
        function NavigateUrl(url) {
            window.location.href = url;
        }

        // Filter functions based on course level
        function filterByLevel(level) {
            const filteredCourses = allCourses.filter(course => course?.course_level === level);
            renderCourses(filteredCourses);
        }

        // Event Listeners for the filter buttons
        document.getElementById('ug-button').addEventListener('click', function () {
            filterByLevel('UG');  // Filter for UG courses
            updateButtonActiveState('ug-button');
        });

        document.getElementById('pg-button').addEventListener('click', function () {
            filterByLevel('PG');  // Filter for PG courses
            updateButtonActiveState('pg-button');
        });

     

        // Function to update the active button state
        function updateButtonActiveState(activeButtonId) {
            const buttons = document.querySelectorAll('.course-button');
            buttons.forEach(button => button.classList.remove('active'));
            document.getElementById(activeButtonId).classList.add('active');
        }

        // Call the topcourses function when the page loads
        window.onload = topcourses();

        const topuniversity_info = document.getElementById('topuniversity_info');
        const topUniversityList = document.getElementById('topUniversityList');

        async function topUniversity() {
            try {
                const response = await fetch('https://api.collegeall.com/api/v1/all-universities', {
                    method: 'GET',
                    headers: { 'Content-Type': 'application/json' },
                });

                const result = await response.json();
                const university_data = result?.data?.universities;

                topuniversity_info.innerHTML = university_data.map((item, index) => createCarouselItem(item, index)).join('');
                topUniversityList.innerHTML = university_data.map((item) => createListItem(item)).join('');

            } catch (error) {
                console.error(`Error fetching university data:`, error);
            }
        }

        function generateCourseButtons(courses, courseCount, url) {
            const courseArray = (courses || "").split(',').map(course => course.trim());
            let buttonsHTML = courseArray.slice(0, 2).map(course => `<button style="margin-left:10px;">${course}</button>`).join('');
            if (courseCount > 2) {
                buttonsHTML += `<a href="./${url}" style="margin-left: 10px;">${courseCount - 2}+ Courses</a>`;
            }
            return buttonsHTML;
        }

        function createCarouselItem(item, index) {
            return `
        <div class="carousel-item ${index === 0 ? 'active' : ''}">
            ${generateUniversityCard(item)}
        </div>
    `;
        }

        function createListItem(item) {
            return `<div style="margin-bottom: 15px;">${generateUniversityCard(item)}</div>`;
        }

        function generateUniversityCard(item) {
            return `
        <div style="width: 300px; padding: 10px; box-sizing: border-box;" class='jjj'>
            <div style="border: 1px solid #ccc; border-radius: 5px; overflow: hidden; text-align: center;">
                <img src="${item.University_backgound}" alt="${item.University_name}" 
                    style="width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                <div style="padding: 10px;">
                    <h3 style='font-size: 15px; color: #1A235F; font-weight: 400; margin: 0;'>${item?.University_name}</h3>
                    <h5 style="font-size: 12px; word-wrap: break-word; margin: 5px 0;">
                        ${item.University_name}
                        <span style="padding-left: 5px;">
                            <i class="fa-solid fa-star" style="color: #FFDD0B;"></i> 4.5/5
                        </span>
                    </h5>
                    <h6 style="margin: 5px 0;">
                        <i class="fa-solid fa-location-dot"></i> Chennai
                    </h6>
                    <div style="text-align: left; margin: 5px 0;">
                        <p style="margin: 0;"><strong>Fees:</strong>${item?.average_fee}</p>
                    </div>
                    <div style="text-align: left; margin: 5px 0;">
                        <p style="margin: 0;"><strong>Reviews:</strong> 182 reviews</p>
                    </div>
                    <div style="font-size: 12px; word-wrap: break-word; margin: 5px 0;">
                        ${generateCourseButtons(item.sample_courses, item.course_count, item.univeristy_url)}
                    </div>
                    <h6 style="cursor: pointer; text-align: center; margin-top: 10px;">
                        <i class="fa-solid fa-download"></i> 
                        <a onclick="modelopen()" style="text-decoration: none; color: inherit;">Brochure</a>
                    </h6>
                </div>
            </div>
        </div>
    `;
        }

        topUniversity();



        const array = [
            { name: "amity", img_url: "./img/all_logo/amity.webp" },
            { name: "AU", img_url: "./img/all_logo/AU.webp" },
            { name: "bdu", img_url: "./img/all_logo/bdu.webp" },
            { name: "Chandigarh university", img_url: "./img/all_logo/Chandigarh university.webp" },
            { name: "GGU", img_url: "./img/all_logo/GGU.webp" },
            { name: "JAIN", img_url: "./img/all_logo/JAIN.webp" },
            { name: "Manipal", img_url: "./img/all_logo/Manipal.webp" },
            { name: "MGR", img_url: "./img/all_logo/MGR.webp" },
            { name: "NOIDA INTERNATIONAL UNIVERSITY", img_url: "./img/all_logo/NOIDA INTERNATIONAL UNIVERSITY.webp" },
            { name: "OP Jindal", img_url: "./img/all_logo/OP Jindal.webp" },
            { name: "vgu logo (1)", img_url: "./img/all_logo/vgu logo (1).webp" },
            { name: "vignan", img_url: "./img/all_logo/vignan.webp" }
        ];
        const logoTrack = document.getElementById("logoTrack");
        function populateLogos() {
            array.forEach(logo => {
                const img = document.createElement("img");
                img.src = logo.img_url;
                img.alt = logo.name;
                logoTrack.appendChild(img);
            });
            array.forEach(logo => {
                const img = document.createElement("img");
                img.src = logo.img_url;
                img.alt = logo.name;
                logoTrack.appendChild(img);
            });
        }
        populateLogos();

        function toggleMenu() {
            const menu = document.getElementById("offcanvasMenu");
            menu.classList.toggle("active");
        }
    </script>
</body>

</html>