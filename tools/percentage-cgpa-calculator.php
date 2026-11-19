<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percentage to CGPA Converter | Instant Online Calculator</title>
    <meta name="description" content="Convert Percentage to CGPA instantly using our advanced online calculator. Fast, accurate, and supports multiple university formulas. Mobile-friendly Percentage to CGPA Converter.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/percentage-cgpa-calculator.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Percentage to CGPA Converter | Instant Online Calculator">
    <meta property="og:description" content="Convert Percentage to CGPA instantly using our advanced online calculator. Fast, accurate, and supports multiple university formulas. Mobile-friendly Percentage to CGPA Converter.">
    <meta property="og:url" content="https://collegeall.com/tools/percentage-cgpa-calculator.php">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Percentage to CGPA Converter | Instant Online Calculator">
    <meta name="twitter:description" content="Convert Percentage to CGPA instantly using our advanced online calculator. Fast, accurate, and supports multiple university formulas. Mobile-friendly Percentage to CGPA Converter.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Percentage to CGPA Converter",
      "description": "Convert Percentage to CGPA instantly using our advanced online calculator. Fast, accurate, and supports multiple university formulas. Mobile-friendly Percentage to CGPA Converter.",
      "url": "https://collegeall.com/tools/percentage-cgpa-calculator.php",
      "applicationCategory": "EducationalApplication",
      "operatingSystem": "All",
      "browserRequirements": "Requires JavaScript",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "INR"
      },
      "publisher": {
        "@type": "Organization",
        "name": "CollegeAll",
        "url": "https://collegeall.com/",
        "logo": "https://api.collegeall.com/Logo/collegeallLogo.png"
      }
    }
    </script>
    <meta charset="UTF-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <meta name="keywords"    content="percentage to CGPA, percentage to CGPA converter, CGPA calculator, convert percentage, grade calculator, university CGPA formula, online converter">    <!-- Bootstrap -->    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">    <!-- Google Font -->    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">    <link rel="stylesheet" href="../index.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">    <style>        body {            min-height: 100vh;            transition: all 0.3s ease;        }        .percentage-container .converter-card {            border-radius: 18px;            background: white;            padding: 35px;            box-shadow: 0 10px 28px rgba(0,0,0,0.1);            transition: transform .3s ease;        }        .percentage-container .converter-card:hover { transform: translateY(-4px); }        .percentage-container .title {            font-size: 28px;            font-weight: 700;        }        .percentage-container .history-box {            max-height: 200px;            overflow-y: auto;            border-left: 3px solid #0d6efd;            padding-left: 15px;        }        /* Dark Mode */        body.dark-mode {            background: #111827;            color: white;        }        .dark-mode .converter-card {            background: #1f2937;            color: white;            box-shadow: 0 10px 28px rgba(255,255,255,0.08);        }        .dark-mode #percentageTnput {            background: #374151 !important;            color: white !important;            border-color: #4b5563 !important;        }        .dark-mode .history-box { border-left-color: #60a5fa; }    </style></head>

<body>
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <div class="container percentage-container py-5">
        <div class="d-flex justify-content-end">
            <button class="btn btn-light shadow-lg ms-auto mb-3" id="toggleDarkMode">Dark Mode</button>
        </div>
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="converter-card">

                    <h2 class="title mb-3">Percentage to CGPA Converter</h2>
                    <p class="text-muted mb-4">Convert your percentage to CGPA instantly using standard calculation formulas.</p>

                    <label class="fw-semibold mb-1">Enter your Percentage</label>
                    <input type="number" id="percentInput" class="form-control form-control-lg mb-3"
                        placeholder="e.g., 85" step="0.01" min="0" max="100">

                    <button class="btn btn-primary w-100 py-2 fw-semibold" onclick="convertPercentage()">
                        Convert Now
                    </button>

                    <div id="resultBox" class="mt-4" style="display:none;">
                        <h5 class="fw-bold">📊 Result</h5>
                        <p class="fs-3 fw-bold" id="cgpaOutput"></p>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold">Previous Conversions</h6>
                    <div class="history-box" id="historyList"></div>

                </div>
            </div>
        </div>
    </div>

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function convertPercentage() {
            const percent = parseFloat(document.getElementById("percentInput").value);
            const resultBox = document.getElementById("resultBox");
            const output = document.getElementById("cgpaOutput");

            if (!percent || percent < 0 || percent > 100) {
                output.innerHTML = "<span class='text-danger'>⚠️ Enter a valid Percentage (0 - 100)</span>";
                resultBox.style.display = "block";
                return;
            }

            // Standard Formula (Used by many universities)
            const cgpa = (percent / 9.5);

            output.innerHTML = `CGPA: ${cgpa.toFixed(2)}`;
            resultBox.style.display = "block";

            saveHistory(percent, cgpa.toFixed(2));
        }

        function saveHistory(percent, cgpa) {
            const historyList = document.getElementById("historyList");

            const div = document.createElement("div");
            div.classList.add("mb-2");
            div.innerHTML = `<strong>${percent}%</strong> → CGPA: <strong>${cgpa}</strong>`;

            historyList.prepend(div);
        }

        // Dark Mode Toggle
        const toggleBtn = document.getElementById("toggleDarkMode");
        toggleBtn.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");
            toggleBtn.textContent =
                document.body.classList.contains("dark-mode") ? "Light Mode" : "Dark Mode";
        });
    </script>

</body>
</html>
