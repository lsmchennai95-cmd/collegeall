<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You | CollegeAll</title>
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '934599835700729');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=934599835700729&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #2b7cff, #6fb1ff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .thank-you-container {
            background: #ffffff;
            max-width: 520px;
            width: 100%;
            padding: 40px 30px;
            border-radius: 14px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .logo img {
            max-width: 180px;
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .icon {
            font-size: 56px;
            color: #2b7cff;
            margin: 10px 0 20px;
        }

        h1 {
            font-size: 28px;
            color: #222;
            margin-bottom: 12px;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .highlight {
            color: #2b7cff;
            font-weight: 600;
        }

        .btn {
            display: inline-block;
            padding: 14px 30px;
            background: #2b7cff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #1f63cc;
        }

        footer {
            margin-top: 25px;
            font-size: 13px;
            color: #888;
        }

        /* Mobile Responsive */
        @media (max-width: 480px) {
            .thank-you-container {
                padding: 30px 20px;
                border-radius: 10px;
            }

            h1 {
                font-size: 24px;
            }

            p {
                font-size: 15px;
            }

            .icon {
                font-size: 48px;
            }

            .btn {
                width: 100%;
                padding: 14px;
                font-size: 15px;
            }
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics & Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BED9GZX87Z"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-BED9GZX87Z');
      gtag('config', 'AW-17357684990');
      (function () {
          var leadId = sessionStorage.getItem('leadInsertId') ||
                       sessionStorage.getItem('userId') ||
                       sessionStorage.getItem('user_id') ||
                       sessionStorage.getItem('insert_id');
          if (leadId) {
              var conversionKey = 'gads_lead_converted_' + leadId;
              if (!sessionStorage.getItem(conversionKey)) {
                  gtag('event', 'conversion', { 'send_to': 'AW-17357684990/xrmxCJ7B8YEbEP6B5dRA' });
                  sessionStorage.setItem(conversionKey, 'true');
              }
          }
      })();
    </script>
</head>

<body>
    <div class="thank-you-container">
        <div class="logo">
            <img src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="CollegeAll Logo">
        </div>

        <div class="icon">✔</div>

        <h1>Thank You!</h1>
        <p>
            Your details have been successfully submitted to
            <span class="highlight">CollegeAll</span>.
        </p>
        <p>
            Our counseling experts will contact you soon to guide you toward the
            best college and career options.
        </p>

        <a href="https://collegeall.com" class="btn">Back to Home</a>

        <footer>
            © 2026 CollegeAll. All rights reserved.
        </footer>
    </div>
</body>

</html>