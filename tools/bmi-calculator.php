<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BMI Calculator</title>
    <meta name="description" content="Calculate your Body Mass Index (BMI) easily with our BMI Calculator. Enter your height and weight to assess your health status.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/bmi-calculator.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="BMI Calculator">
    <meta property="og:description" content="Calculate your Body Mass Index (BMI) easily with our BMI Calculator. Enter your height and weight to assess your health status.">
    <meta property="og:url" content="https://collegeall.com/tools/bmi-calculator.php">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="BMI Calculator">
    <meta name="twitter:description" content="Calculate your Body Mass Index (BMI) easily with our BMI Calculator. Enter your height and weight to assess your health status.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "BMI Calculator",
      "description": "Calculate your Body Mass Index (BMI) easily with our BMI Calculator. Enter your height and weight to assess your health status.",
      "url": "https://collegeall.com/tools/bmi-calculator.php",
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
    <meta charset="UTF-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <meta name="keywords" content="BMI calculator, body mass index, calculate BMI, BMI chart, ideal weight, weight calculator, health calculator, BMI online, body weight index, fitness calculator, healthy weight range, BMI formula, BMI checker, height and weight calculator, adult BMI calculator">    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>    <link rel="stylesheet" href="../index.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">    <style>        /* Background */        body {            background: linear-gradient(135deg, #0a1930, #112845, #0d1c36);            min-height: 100vh;        }        /* Main container - glass */        .bmi-container {            width: 100%;            max-width: 520px;            padding: 35px;            border-radius: 22px;            backdrop-filter: blur(18px);            background: rgba(255, 255, 255, 0.06);            border: 1px solid rgba(255, 255, 255, 0.12);            box-shadow:                 0 15px 35px rgba(0, 0, 0, 0.4),                inset 0 0 25px rgba(255, 255, 255, 0.1);            color: #eaf2ff;        }        .bmi-container h1 {            text-align: center;            font-size: 28px;            margin-bottom: 25px;            color: #ffffff;            text-shadow: 0px 3px 12px rgba(255,255,255,0.25);        }        /* Field wrapper */        .field {            margin-bottom: 22px;        }        /* Labels */        .field label {            display: block;            margin-bottom: 8px;            font-weight: 600;        }        /* Inputs & selects – frosted style */        .field input,        .field select {            width: 100%;            padding: 12px;            border-radius: 14px;            font-size: 15px;            border: none;            outline: none;            background: rgba(255, 255, 255, 0.08);            color: #f8fbff;            backdrop-filter: blur(6px);            border: 1px solid rgba(255, 255, 255, 0.18);            transition: 0.3s;        }        .field input::placeholder {            color: #becce4;        }        .field input:focus,        .field select:focus {            border: 1px solid #4ca6ff;            box-shadow: 0 0 12px rgba(76, 166, 255, 0.5);        }        /* Buttons row */        button {            padding: 12px 20px;            border-radius: 14px;            font-size: 15px;            font-weight: 600;            border: none;            margin: 8px 6px;            cursor: pointer;            transition: 0.3s ease;        }        /* Calculate – blue glass */        .calculate {            background: rgba(76, 166, 255, 0.3);            color: white;            border: 1px solid rgba(76, 166, 255, 0.4);        }        .calculate:hover {            background: rgba(76, 166, 255, 0.45);            box-shadow: 0 0 15px rgba(76, 166, 255, 0.7);        }        /* Reset – neutral */        .reset {            background: rgba(255, 255, 255, 0.18);            color: #e4ecf8;            border: 1px solid rgba(255, 255, 255, 0.25);        }        .reset:hover {            background: rgba(255, 255, 255, 0.28);            box-shadow: 0 0 10px rgba(255,255,255,0.3);        }        /* Save – green glow */        .save {            background: rgba(40, 255, 160, 0.25);            color: #eafff4;            border: 1px solid rgba(40, 255, 160, 0.4);        }        .save:hover {            background: rgba(40, 255, 160, 0.4);            box-shadow: 0 0 15px rgba(40, 255, 160, 0.7);        }        /* Frosted result box */        .result {            margin-top: 25px;            padding: 20px;            border-radius: 18px;            background: rgba(255,255,255,0.1);            border-left: 5px solid #4ca6ff;            backdrop-filter: blur(10px);            box-shadow: inset 0 0 20px rgba(255,255,255,0.1);        }        /* Explanation */        .explanation {            margin-top: 18px;            padding: 15px;            border-radius: 18px;            background: rgba(255,255,255,0.07);            border-left: 4px solid #9bb6d8;            backdrop-filter: blur(10px);        }        /* Saved message */        .saved {            margin-top: 18px;            padding: 15px;            border-radius: 18px;            background: rgba(40,255,160,0.15);            border-left: 5px solid #29ffa2;            color: #c8ffe8;            backdrop-filter: blur(10px);        }        /* Responsive */        @media (max-width: 480px) {            .bmi-container {                padding: 25px;                width: 95%;            }            button {                width: 100%;                margin-top: 12px;            }        }    </style></head>

<body>
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>
    <div class="bmi-container container mt-5 mb-5">
        <h1>BMI Calculator</h1>

        <div class="field">
            <label for="height">Height:</label>
            <div id="heightInputs">
                <input type="number" id="height" placeholder="Enter height in cm">
            </div>
            <select class="mt-2" id="heightUnit">
                <option value="cm">Centimeters</option>
                <option value="ftin">Feet/Inches</option>
            </select>
        </div>

        <div class="field">
            <label for="weight">Weight:</label>
            <input type="number" id="weight" placeholder="Enter weight in kg">
            <select class="mt-2" id="weightUnit">
                <option value="kg">Kilograms</option>
                <option value="lb">Pounds</option>
            </select>
        </div>

        <div>
            <button class="calculate" onclick="calculateBMI()">Calculate</button>
            <button class="reset" onclick="resetForm()">Reset</button>
            <button class="save" onclick="saveResult()">Save Result</button>
        </div>

        <div id="result" class="result" style="display: none;"></div>
        <div id="explanation" class="explanation"></div>
        <div id="saved" class="saved"></div>
    </div>

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const heightSelect = document.getElementById('heightUnit');
        const heightInputsDiv = document.getElementById('heightInputs');

        heightSelect.addEventListener('change', () => {
            if (heightSelect.value === 'ftin') {
                heightInputsDiv.innerHTML = `
          <input type="number" id="heightFt" placeholder="Feet" style="width:48%; display:inline-block;">
          <input type="number" id="heightIn" placeholder="Inches" style="width:48%; display:inline-block; float:right;">
        `;
            } else {
                heightInputsDiv.innerHTML = `
          <input type="number" id="height" placeholder="Enter height in cm">
        `;
            }
        });

        function calculateBMI() {
            let heightCm = 0;
            if (heightSelect.value === 'cm') {
                heightCm = parseFloat(document.getElementById('height').value);
            } else {
                const ft = parseFloat(document.getElementById('heightFt').value) || 0;
                const inches = parseFloat(document.getElementById('heightIn').value) || 0;
                heightCm = (ft * 30.48) + (inches * 2.54);
            }

            const weightInput = parseFloat(document.getElementById('weight').value);
            const weightUnit = document.getElementById('weightUnit').value;
            const weightKg = weightUnit === 'kg' ? weightInput : weightInput * 0.453592;

            if (!heightCm || !weightKg) {
                alert("Please enter valid height and weight!");
                return;
            }

            const heightM = heightCm / 100;
            const bmi = weightKg / (heightM * heightM);
            const resultDiv = document.getElementById('result');
            const explanationDiv = document.getElementById('explanation');

            let category = '';
            let explanation = '';
            let cssClass = '';

            if (bmi < 18.5) {
                category = 'Underweight';
                cssClass = 'underweight';
                explanation = 'Your BMI is below the normal range. Consider consulting a nutritionist for a healthy weight gain plan.';
            } else if (bmi < 25) {
                category = 'Normal';
                cssClass = 'normal';
                explanation = 'Your BMI is within the healthy range. Keep maintaining a balanced diet and active lifestyle.';
            } else if (bmi < 30) {
                category = 'Overweight';
                cssClass = 'overweight';
                explanation = 'Your BMI is above the normal range. Consider more physical activity and mindful eating habits.';
            } else {
                category = 'Obese';
                cssClass = 'obese';
                explanation = 'Your BMI falls into the obese category. Seek guidance from a healthcare professional for tailored advice.';
            }

            resultDiv.style.display = 'block';
            resultDiv.className = `result ${cssClass}`;
            resultDiv.innerHTML = `<strong>BMI: ${bmi.toFixed(1)}</strong><br>${category}`;
            explanationDiv.textContent = explanation;
        }

        function resetForm() {
            document.querySelector('input[type="number"]').value = '';
            document.getElementById('heightInputs').innerHTML = `<input type="number" id="height" placeholder="Enter height in cm">`;
            document.getElementById('heightUnit').value = 'cm';
            document.getElementById('weightUnit').value = 'kg';
            document.getElementById('result').style.display = 'none';
            document.getElementById('explanation').textContent = '';
            document.getElementById('saved').textContent = '';
        }

        function saveResult() {
            const resultDiv = document.getElementById('result');
            if (resultDiv.style.display === 'none') {
                alert("Please calculate BMI first.");
                return;
            }
            const savedResults = JSON.parse(localStorage.getItem('bmiResults')) || [];
            const newEntry = {
                bmi: resultDiv.textContent.trim(),
                date: new Date().toLocaleString()
            };
            savedResults.push(newEntry);
            localStorage.setItem('bmiResults', JSON.stringify(savedResults));
            document.getElementById('saved').textContent = '✅ Result saved locally!';
        }
    </script>
</body>

</html>