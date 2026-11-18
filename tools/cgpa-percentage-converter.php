<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">

    <!-- SEO Meta Tags -->
    <title>CGPA to Percentage Converter | Instant Online Calculator</title>

    <meta name="description" content="Convert your CGPA to percentage instantly using our advanced online CGPA to Percentage Calculator. Fast, accurate, mobile-friendly, and supports all universities.">

    <meta name="keywords" content="CGPA to percentage, CGPA converter, GPA calculator, percentage calculator, online CGPA tool, CGPA to % converter, university CGPA calculator, CGPA percentage formula, calculate CGPA to percentage">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://collegeall.com/assets/css/all.min.css">

    <style>
        body {
            min-height: 100vh;
            transition: all 0.3s ease;
        }
        .cgpa-container .converter-card {
            border-radius: 18px;
            background: white;
            padding: 35px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.1);
            transition: transform .3s ease;
        }
        .cgpa-container .converter-card:hover { transform: translateY(-4px); }

        .cgpa-container .title {
            font-size: 28px;
            font-weight: 700;
        }

        .cgpa-container .history-box {
            max-height: 200px;
            overflow-y: auto;
            border-left: 3px solid #0d6efd;
            padding-left: 15px;
        }

        /* Dark Mode */
        body.dark-mode {
            background: #111827;
            color: white;
        }
        .dark-mode .converter-card {
            background: #1f2937;
            color: white;
            box-shadow: 0 10px 28px rgba(255,255,255,0.08);
        }
        .dark-mode #cgpaInput {
            background: #374151 !important;
            color: white !important;
            border-color: #4b5563 !important;
        }
        .dark-mode .history-box { border-left-color: #60a5fa; }
    </style>
</head>

<body>
    <?php echo file_get_contents('https://collegeall.com/header.php'); ?>
    <div class="container cgpa-container py-5">
        <div class="d-flex justify-content-end">
            <button class="btn btn-light shadow-lg ms-auto mb-3" id="toggleDarkMode">Dark Mode</button>
        </div>
        
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="converter-card">

                    <h2 class="title mb-3">CGPA → Percentage Converter</h2>
                    <p class="text-muted mb-4">Convert your CGPA to Percentage instantly with advanced calculator logic.</p>

                    <label class="fw-semibold mb-1">Enter your CGPA</label>
                    <input type="number" id="cgpaInput" class="form-control form-control-lg mb-3"
                        placeholder="e.g., 8.5" step="0.01" min="0" max="10">

                    <button class="btn btn-primary w-100 py-2 fw-semibold" onclick="convertCGPA()">
                        Convert Now
                    </button>

                    <div id="resultBox" class="mt-4" style="display:none;">
                        <h5 class="fw-bold">📊 Result</h5>
                        <p class="fs-4 fw-bold" id="percentageOutput"></p>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold">Previous Conversions</h6>
                    <div class="history-box" id="historyList"></div>

                </div>
            </div>
        </div>
    </div>

    
    <?php echo file_get_contents('https://collegeall.com/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function convertCGPA() {
            const cgpa = parseFloat(document.getElementById("cgpaInput").value);
            const resultBox = document.getElementById("resultBox");
            const output = document.getElementById("percentageOutput");

            if (!cgpa || cgpa < 0 || cgpa > 10) {
                output.innerHTML = "<span class='text-danger'>⚠️ Enter a valid CGPA between 0 and 10</span>";
                resultBox.style.display = "block";
                return;
            }

            // Standard conversion formula
            const percentage = (cgpa - 0.5) * 10;

            output.innerHTML = `${percentage.toFixed(2)}%`;
            resultBox.style.display = "block";

            saveHistory(cgpa, percentage.toFixed(2));
        }

        function saveHistory(cgpa, percentage) {
            const historyList = document.getElementById("historyList");

            const div = document.createElement("div");
            div.classList.add("mb-2");
            div.innerHTML = `<strong>CGPA:</strong> ${cgpa} → <strong>${percentage}%</strong>`;

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
