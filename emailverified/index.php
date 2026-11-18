<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email Verified</title>
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png" />

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .verified-card {
            background: white;
            padding: 50px 40px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 90%;
        }

        .verified-card h1 {
            color: #0056b3;
            margin-bottom: 10px;
        }

        .verified-card p {
            color: #444;
            font-size: 1rem;
            margin-bottom: 30px;
        }

        .verified-card img {
            width: 100px;
            margin-bottom: 20px;
        }

        .verified-card a {
            display: inline-block;
            background-color: #0056b3;
            color: white;
            padding: 12px 28px;
            border-radius: 6px;
            font-size: 1rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .verified-card a:hover {
            background-color: #003f88;
        }
    </style>

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

    <div class="verified-card">
        <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" alt="Verified Icon" />
        <h1>Email Verified!</h1>
        <p>Your email address has been successfully verified. You can now continue to use our platform.</p>
        <a href="../signin">Go to Sign in</a>
    </div>

</body>

</html>