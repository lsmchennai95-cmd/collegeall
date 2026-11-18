<?php require_once __DIR__ . '/../../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Thank You! | CollegeAll</title>
    <meta name="description"
        content="Master web development with HTML, CSS, JavaScript, and React. Learn to build responsive, modern websites with our certified 1-week program.">
    <meta name="keywords"
        content="web development, HTML, CSS, JavaScript, React JS, frontend development, responsive websites, coding bootcamp, web design, web apps">
    <meta name="author" content="CollegeAll Certified">
    <meta property="og:title" content="The Complete Web Development Bootcamp | CollegeAll">
    <meta property="og:description"
        content="Learn web development fast! HTML, CSS, JavaScript & React in 1 week. Perfect for beginners and aspiring developers.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./img/web-development.webp">

    <!-- Theme and Favicon -->
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <link rel="stylesheet" href="../index.css">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-17357684990"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
 
        gtag('config', 'AW-17357684990');
    </script>

        <style>
        .thank-container{
            background-color:#007bff; 
            padding:5rem 1rem; 
            text-align:center; 
            color:white; 
            min-height: 80vh; 
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <!-- Thank You Page Start -->
    <div class="thank-container">
        <div class="">
            <i class="fas fa-check-circle" style="font-size:2rem; display:block; margin-bottom:1rem;"></i>
            <h1 style="font-size:2.5rem; margin-bottom:1rem;">Thank You</h1>
            <p style="font-size:1.25rem; margin-bottom:2rem;">Your application has been submitted successfully.</p>
            <a href="../"
                style="background-color:white; color:#007bff; padding:0.75rem 1.5rem; text-decoration:none; border-radius:0.25rem;">Back
                to Home</a>
        </div>
    </div>
    <!-- Thank You Page End -->

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <script src="https://kit.fontawesome.com/a2d9b6a76b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../script.js"></script>

</body>

</html>