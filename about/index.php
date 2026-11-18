<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://api.collegeall.com/Logo/fav.png">
    <title>VisionCrafters – About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://collegeall.com/assets/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../index.css">

    <style>
        body {
            font-family: "Inter", sans-serif;
            background: #f4f4f4;
        }

        /* HERO TITLE */
        .page-section-title {
            margin-top: 60px;
            font-size: 14px;
            text-transform: uppercase;
            color: #007b2e;
            font-weight: 600;
        }

        .container .hero-section .hero-title {
            font-size: 38px;
            font-weight: 800;
            line-height: 1.3;
            text-align: center;
            margin-bottom: 25px;
        }

        /* HERO IMAGE */
        .container .hero-section .hero-image {
            border-radius: 30px;
            overflow: hidden;
            width: 100%;
            margin: 0 auto;
        }

        /* STATS SECTION */
        .stats-box {
            background: #f3eede;
            border-radius: 30px;
            padding: 25px 10px;
            margin-top: 25px;
        }

        .stats-box .stats-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 3px;
        }

        .stats-box .stats-sub {
            font-size: 14px;
            color: #555;
        }

        /* STORY SECTION */
        .story-section .story-section-title {
            text-align: center;
            color: #007b2e;
            font-weight: 600;
            margin-top: 50px;
            margin-bottom: 10px;
        }

        .story-section .story-main-title {
            text-align: center;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .story-section .story-text {
            font-size: 15px;
            color: #444;
            max-width: 850px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .logo-section {
            background: linear-gradient(90deg, #d7f8d6, #e8e4d3, #bcd7f4);
            border-radius: 30px;
            padding: 50px 40px;
        }

        .logo-section .logo-img {
            width: 100%;
            max-width: 350px;
        }

        .logo-section .logo-title {
            font-size: 36px;
            font-weight: 700;
        }

        .logo-section .logo-title span {
            color: #1a73e8;
        }

        .logo-section .logo-desc {
            font-size: 16px;
            color: #555;
            max-width: 550px;
        }

        .logo-section .btn-main {
            background-color: #1a73e8;
            color: #fff;
            padding: 12px 28px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 500;
        }

        .logo-section .btn-main:hover {
            background-color: #0e5fcc;
        }

        .logo-section .btn-light-custom {
            background: #ffffff;
            padding: 12px 28px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 500;
            border: 1px solid #dcdcdc;
        }

        .value-container .value-card {
            border: 1px solid #bcd7f4;
        }

        .teams-container .team-card:hover {
            background: #ebf5ffff;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        .video-container .video-card {
            border-radius: 18px;
            height: 300px;
            overflow: hidden;
            background: #fff;
            padding: 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
        }

        .video-container .video-card .position-relative {
            height: 300px;
        }

        .video-container .video-thumb {
            height: 100%;
            width: 100%;
            object-fit: cover;
            filter: brightness(0.75);
        }

        .video-container .play-btn {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: rgba(0, 0, 0, 0.55);
            color: #fff;
            padding: 10px 18px;
            border-radius: 50px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .video-container .testi-body {
            padding: 25px;
        }

        .video-container .testi-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .video-container .testi-desc {
            color: #6f6f6f;
            font-size: 15px;
            line-height: 1.6;
        }

        .video-container .watch-link {
            color: #0d6efd;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
        }

        .video-container .watch-link:hover {
            text-decoration: underline;
        }

        .video-container .view-all {
            border-radius: 30px;
            padding: 10px 28px;
            font-size: 15px;
            font-weight: 500;
        }

        @media screen and (max-width: 496px) {
            .video-container .video-card {
                height: 550px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <?php echo file_get_contents('https://collegeall.com/header.php'); ?>

    <div class="container">
        <!-- HERO -->
        <div class="hero-section">
            <p class="text-center page-section-title mt-2">About Us</p>

            <h2 class="hero-title">Empowering Minds, Shaping Futures</h2>

            <p class="text-center hero-description">
                At CollegeAll, we are committed to nurturing talent and fostering a community of innovation,
                learning, and growth. Our dedicated faculty and passionate students work together to create an
                environment where knowledge meets opportunity.
            </p>

            <div class="hero-image text-center">
                <img src="./group.jpg" class="img-fluid" alt="Our College Community">
            </div>

            <p class="text-center mt-3">
                From cutting-edge programs to extracurricular activities, we strive to bring out the best in every
                student, preparing them to make a meaningful impact in the world.
            </p>
        </div>


        <!-- STATS -->
        <div id="stats-container" class="stats-box row text-center">
            <!-- Stats will be rendered here dynamically -->
        </div>

        <div class="story-section">
            <h6 class="story-section-title">Shaping Futures</h6>

            <h2 class="story-main-title">The CollegeAll Journey Story</h2>

            <p class="story-text text-center">
                At CollegeAll.com, our journey began with a simple but powerful goal: to make higher education
                accessible,
                transparent, and tailored to every student’s aspirations. Founded over a decade ago by a team of
                passionate
                educators and technology enthusiasts, CollegeAll.com has grown into a trusted platform for students
                seeking
                guidance, resources, and opportunities for academic success.
                <br><br>
                Our story is one of dedication, innovation, and a commitment to student success. From helping students
                find
                the right courses to providing expert advice on admissions and scholarships, CollegeAll.com continues to
                empower learners on their journey toward a bright future.
            </p>
        </div>


    </div>

    <div class="container my-5 p-4 rounded-5" style="background: #e6f2ffff;">

        <style>
            .uniform-img {
                width: 100%;
                height: 300px;
                /* fixed height for all images */
                object-fit: cover;
                /* crops but maintains aspect ratio */
                border-radius: 1rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        </style>

        <!-- Section 1 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://images.pexels.com/photos/4145190/pexels-photo-4145190.jpeg?auto=compress&cs=tinysrgb&h=600&w=600"
                    alt="Students learning online" class="uniform-img">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Empowering Your Learning Journey</h2>
                <p style="font-size:15px; color:#444; line-height:1.6;">
                    CollegeAll.com connects you with the right courses, resources, and guidance to achieve your academic
                    goals. Explore our wide range of programs and take the first step toward a brighter future today.
                </p>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="mb-3">Guidance You Can Trust</h2>
                <p style="font-size:15px; color:#444; line-height:1.6;">
                    Our expert advisors help students navigate college applications, scholarships, and course
                    selections,
                    making it easy to plan your educational journey with confidence.
                </p>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://images.pexels.com/photos/4145195/pexels-photo-4145195.jpeg?auto=compress&cs=tinysrgb&h=600&w=600"
                    alt="Student guidance" class="uniform-img">
            </div>
        </div>

        <!-- Section 3 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://images.pexels.com/photos/4145191/pexels-photo-4145191.jpeg?auto=compress&cs=tinysrgb&h=600&w=600"
                    alt="Online courses" class="uniform-img">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Learn at Your Own Pace</h2>
                <p style="font-size:15px; color:#444; line-height:1.6;">
                    With a variety of online courses and flexible schedules, CollegeAll.com empowers students to learn
                    anytime, anywhere, ensuring that education fits your lifestyle.
                </p>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-3">Achieve Your Dreams</h2>
                <p style="font-size:15px; color:#444; line-height:1.6;">
                    From skill development to career guidance, CollegeAll.com provides the tools and support needed to
                    succeed academically and professionally. Start your journey today and unlock your full potential.
                </p>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://images.pexels.com/photos/3184410/pexels-photo-3184410.jpeg?auto=compress&cs=tinysrgb&h=600&w=600"
                    alt="Successful students" class="uniform-img">
            </div>
        </div>

    </div>


    <div class="container my-5">
        <div class="logo-section row d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <!-- Left Image -->
            <div class="col-md-6 mb-4">
                <img src="https://api.collegeall.com/Logo/fav.png" class="logo-img" alt="CollegeAll Logo">
            </div>

            <!-- Right Content -->
            <div class="col-md-6 mt-4 mt-lg-0 ps-lg-5">
                <h2 class="logo-title">
                    Empowering Your Education: <span>Get Started Today</span>
                </h2>

                <p class="logo-desc mt-3">
                    Ready to take the next step in your academic journey? CollegeAll.com helps you explore the right
                    courses, programs, and resources tailored to your goals. Our team of education experts is here to
                    guide you every step of the way.
                </p>

                <div class="mt-4 d-flex flex-wrap gap-3">
                    <a href="#" class="btn-main">Get Started →</a>
                    <a href="#" class="btn-light-custom">Learn More</a>
                </div>
            </div>
        </div>
    </div>


    <!-- MISSION & VALUES SECTION -->
    <div class="container text-center">
        <p class="text-center page-section-title">Our Mission and Values</p>
        <h2 class="hero-title">Empowering Students, Shaping Futures</h2>
        <p class="story-text mb-5">
            At CollegeAll.com, our mission is to make education accessible, personalized, and empowering for every
            student.
            We are dedicated to providing accurate guidance, reliable resources, and innovative tools that help learners
            achieve their academic and professional goals. Our core values—integrity, excellence, and community—guide
            everything we do as we strive to create a positive impact in the lives of students and the educational
            ecosystem.
        </p>
    </div>


    <div class="container-fluid d-flex justify-content-center" style="background: #e6f2ffff;">
        <div id="values-container" class="container value-container row g-4 p-4">
            <!-- Values will be rendered here dynamically -->

        </div>
    </div>

    <!-- TEAM SECTION -->
    <div class="container mt-2 p-4 rounded-4">
        <p class="text-center page-section-title">Our Team</p>
        <h2 class="hero-title text-center">Meet Our Dedicated Team</h2>
        <p class="story-text text-center mb-5">
            At VisionCrafters, our success is built upon the expertise, dedication, and collaborative spirit of our
            talented team.
            Meet the individuals who bring passion and professionalism to every project:
        </p>

        <div id="team-container" class="row g-4 justify-content-center rounded-5 p-4 teams-container"
            style="background: #e6f2ffff;">
            <!-- Team members will be rendered here dynamically -->
        </div>
    </div>

    <!-- VIDEO SECTION -->
    <div class="video-container rounded-4">
        <div class="container video-section text-center">
            <p class="text-center page-section-title">Video Feedback</p>
            <h2 class="hero-title text-center">Hear From Our Satisfied Coustomers</h2>
            <p class="story-text text-center mb-5">
                At VisionCrafters, our success is built upon the expertise, dedication, and collaborative spirit of our
                talented team.
                Meet the individuals who bring passion and professionalism to every project:
            </p>
        </div>
        <div class="container-fluid py-5" style="background: #e6f2ff;">
            <div class="container">
                <div class="video-card mb-3">
                    <div class="row g-0">

                        <div class="col-md-6 position-relative">
                            <iframe src="https://www.youtube.com/embed/235f6qkTnkQ" title="College Success Stories"
                                allowfullscreen class="video-thumb"></iframe>
                            <div class="play-btn"><span>▶</span> Watch the video</div>
                        </div>

                        <div class="col-md-6 bg-white">
                            <div class="testi-body">
                                <small class="text-muted">Video</small>
                                <h5 class="testi-title">Exceeding Expectations</h5>
                                <p class="testi-desc">
                                    VisionCrafters transformed our outdated home into a modern oasis.
                                    Their professionalism and attention to detail exceeded expectations.
                                </p>
                                <a href="https://www.youtube.com/embed/235f6qkTnkQ" class="watch-link">Click to watch
                                    video →</a>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="video-card mb-3">
                    <div class="row g-0">

                        <div class="col-md-6 position-relative">
                            <iframe src="https://www.youtube.com/embed/pWvX9k8t57o" title="Career Guidance"
                                allowfullscreen class="video-thumb"></iframe>
                            <div class="play-btn"><span>▶</span> Watch the video</div>
                        </div>

                        <div class="col-md-6 bg-white">
                            <div class="testi-body">
                                <small class="text-muted">Video</small>
                                <h5 class="testi-title">A Partnership of Trust</h5>
                                <p class="testi-desc">
                                    VisionCrafters delivered a state-of-the-art facility with
                                    proactive communication and innovative solutions.
                                </p>
                                <a href="https://www.youtube.com/embed/pWvX9k8t57o" class="watch-link">Click to watch
                                    video →</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="video-card mb-3">
                    <div class="row g-0">

                        <div class="col-md-6 position-relative">
                            <iframe src="https://www.youtube.com/embed/IzhUbloJ9nA" title="Campus Life" allowfullscreen
                                class="video-thumb"></iframe>
                            <div class="play-btn"><span>▶</span> Watch the video</div>
                        </div>

                        <div class="col-md-6 bg-white">
                            <div class="testi-body">
                                <small class="text-muted">Video</small>
                                <h5 class="testi-title">Success Through Collaboration</h5>
                                <p class="testi-desc">
                                    Their strategic planning and effective execution were key to
                                    completing our expansion goals.
                                </p>
                                <a href="https://www.youtube.com/embed/IzhUbloJ9nA" class="watch-link">Click to watch
                                    video →</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Testimonials -->
    <div class="container-fluid text-center py-5 px-0">
        <p class="text-center page-section-title">Testimonials</p>
        <h2 class="hero-title text-center mb-5">Our Client Success Stories</h2>

        <div class="d-flex justify-content-center align-items-center" style="background: #e6f2ffff;">
            <div id="testimonials-container" class="row g-4 p-5 rounded-4 container">
                <!-- Testimonials will be rendered here dynamically -->
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary shadow-lg">View All &rarr;</a>
        </div>
    </div>

    <!--  -->
    <div class="container my-5 p-4 rounded-4" style="background: #e6f2ffff;">
        <div class="row align-items-center mb-3">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="/mnt/data/e6337422-cf9c-4306-ae4b-210a996a9ce9.png" alt="VisionCrafters New Image"
                    class="img-fluid rounded-4 shadow-sm">
            </div>

            <div class="col-md-6">
                <h2 class="mb-3">Building Communities, Making a Difference <span style="color:#0066ff;">with
                        VisionCrafters</span></h2>
                <p style="font-size:15px; color:#444; line-height:1.6;">
                    At VisionCrafters, we are committed to positively impacting communities through meaningful
                    initiatives.
                    From clean-up drives to supporting families in need, our goal is to create lasting change and build
                    stronger communities together.
                </p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary me-2">Read more</a>
                </div>
            </div>
        </div>
        <div class="row align-items-center">

            <!-- Right Text -->
            <div class="col-md-6">
                <h2 class="mb-3">Building Communities, Making a Difference <span style="color:#0066ff;">with
                        VisionCrafters</span></h2>
                <p style="font-size:15px; color:#444; line-height:1.6;">
                    At VisionCrafters, we are committed to positively impacting communities through meaningful
                    initiatives.
                    From clean-up drives to supporting families in need, our goal is to create lasting change and build
                    stronger communities together.
                </p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary me-2">Read more</a>
                </div>
            </div>
            <!-- Left Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="/mnt/data/e6337422-cf9c-4306-ae4b-210a996a9ce9.png" alt="VisionCrafters New Image"
                    class="img-fluid rounded-4 shadow-sm">
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p class="text-center page-section-title">Need more help?</p>
                <h4 class="mb-3 text-center">Frequently Asked Questions (FAQ)</h4>
                <div id="faq-container" class="accordion rounded-3" id="faqAccordion">
                    <!-- FAQ items will be rendered here dynamically -->
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <div class="logo-section text-center p-4">
            <h3 class="hero-title mb-3 text-center">Stay Connected with CollegeAll</h3>
            <p class="mb-5"> At VisionCrafters, we are committed to positively impacting communities through meaningful
                initiatives.
                From clean-up drives to supporting families in need, our goal is to create lasting change and build
                stronger communities together.</p>
            <div class="d-flex justify-content-center align-items-center mb-3">
                <input type="email" class="p-2 border-0" placeholder="✉ enter you email">
                <button class="btn btn-primary rounded-0 p-2">Subscribe</button>
            </div>
            <p>Wre can about the protection of your data. Read our <a href="https://collegeall.com/privacy-policy/"
                    class="text-primary">Privacy Policy</a></p>
        </div>
    </div>

    <?php echo file_get_contents('https://collegeall.com/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Data arrays
        const statsData = [
            { value: "100+", label: "employees" },
            { value: "15+", label: "Countries" },
            { value: "60+", label: "Projects done" },
            { value: "30+", label: "Offices" },
            { value: "25+", label: "Project Awards" }
        ];

        const valuesData = [
            {
                icon: "https://img.icons8.com/ios-filled/50/4CAF50/shield.png",
                title: "Integrity",
                description: "We believe in honesty, transparency, and ethical practices in every aspect of our work. Integrity is the foundation upon which we build trust with our clients and partners.",
                link: "#"
            },
            {
                icon: "https://img.icons8.com/ios-filled/50/DAA520/diamond.png",
                title: "Excellence",
                description: "We are committed to delivering exceptional quality and craftsmanship in all our projects. From concept to completion, we strive for excellence in every detail.",
                link: "#"
            },
            {
                icon: "https://img.icons8.com/ios-filled/50/90EE90/collaboration.png",
                title: "Collaboration",
                description: "We value teamwork, both internally and externally. By fostering open communication, we build strong relationships with clients and partners.",
                link: "#"
            },
            {
                icon: "https://img.icons8.com/ios-filled/50/1E90FF/idea.png",
                title: "Innovation",
                description: "We embrace creativity and new technologies to stay at the forefront of construction. Our aim is to deliver innovative and sustainable solutions.",
                link: "#"
            }
        ];

        const teamData = [
            {
                image: "https://randomuser.me/api/portraits/men/11.jpg",
                name: "John Doe",
                position: "Founder & CEO"
            },
            {
                image: "https://randomuser.me/api/portraits/women/21.jpg",
                name: "Jane Smith",
                position: "Project Manager"
            },
            {
                image: "https://randomuser.me/api/portraits/men/31.jpg",
                name: "Michael Johnson",
                position: "Founder & CEO"
            },
            {
                image: "https://randomuser.me/api/portraits/women/41.jpg",
                name: "Sarah Williams",
                position: "Construction Foreman"
            }
        ];

        const testimonialsData = [
            {
                image: "/mnt/data/035bcde0-2589-465b-8c26-084f409c5cf1.png",
                title: "Exceeding Expectations",
                description: "VisionCrafters transformed our outdated home into a modern oasis. Their professionalism, attention to detail, and commitment to quality exceeded our expectations.",
                link: "#"
            },
            {
                image: "/mnt/data/035bcde0-2589-465b-8c26-084f409c5cf1.png",
                title: "A Partnership of Trust",
                description: "VisionCrafters delivered a state-of-the-art office building that surpassed our expectations. Their proactive communication and innovative solutions ensured a successful project.",
                link: "#"
            },
            {
                image: "/mnt/data/035bcde0-2589-465b-8c26-084f409c5cf1.png",
                title: "Success Through Collaboration",
                description: "VisionCrafters optimized our production workflow and operational space. Their strategic planning, precise execution, and project management helped us achieve our goals.",
                link: "#"
            }
        ];

        const faqData = [
            {
                question: "How do I request a quote?",
                answer: "Click the \"Request a Quote\" button at the top or fill the contact form — we'll follow up within 48 hours."
            },
            {
                question: "What services do you offer?",
                answer: "Architecture, project management, construction, fit-outs, and community engagement programs."
            },
            {
                question: "Are you licensed & insured?",
                answer: "Yes — we carry all required licenses and insurance coverage for our projects."
            }
        ];

        // Render functions
        function renderStats() {
            const container = document.getElementById('stats-container');
            container.innerHTML = statsData.map(stat => `
            <div class="col-6 col-md">
                <p class="stats-title">${stat.value}</p>
                <p class="stats-sub">${stat.label}</p>
            </div>
        `).join('');
        }

        function renderValues() {
            const container = document.getElementById('values-container');
            container.innerHTML = valuesData.map((value, index) => `
            <div class="col-md-3">
                <div class="card value-card h-100 text-center p-3 shadow-sm rounded-3">
                    <div class="mb-3">
                        <img src="${value.icon}"/>
                    </div>
                    <h5 class="fw-bold">${value.title}</h5>
                    <p class="small text-muted">${value.description}</p>
                    <a href="${value.link}" class="text-primary text-decoration-none">Read more &rarr;</a>
                </div>
            </div>
        `).join('');
        }

        function renderTeam() {
            const container = document.getElementById('team-container');
            container.innerHTML = teamData.map(member => `
            <div class="col-6 col-md-3 text-center py-3 rounded-4 team-card">
                <img src="${member.image}" class="rounded-circle mb-3" width="80" height="80">
                <h6 class="fw-bold">${member.name}</h6>
                <p class="text-muted small">${member.position}</p>
            </div>
        `).join('');
        }

        function renderTestimonials() {
            const container = document.getElementById('testimonials-container');
            container.innerHTML = testimonialsData.map(testimonial => `
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="${testimonial.image}" class="card-img-top" alt="${testimonial.title}">
                    <div class="card-body">
                        <h5 class="card-title">${testimonial.title}</h5>
                        <p class="card-text fs-6">${testimonial.description}</p>
                        <a href="${testimonial.link}" class="text-white text-decoration-none">Click to watch video &rarr;</a>
                    </div>
                </div>
            </div>
        `).join('');
        }

        function renderFAQ() {
            const container = document.getElementById('faq-container');
            container.innerHTML = faqData.map((faq, index) => `
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq${index}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}">${faq.question}</button>
                </h2>
                <div id="collapse${index}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted">${faq.answer}</div>
                </div>
            </div>
        `).join('');
        }

        // Initialize all render functions when DOM is loaded
        document.addEventListener('DOMContentLoaded', function () {
            renderStats();
            renderValues();
            renderTeam();
            renderTestimonials();
            renderFAQ();
        });
    </script>
</body>

</html>