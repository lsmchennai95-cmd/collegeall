<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
    <title>Percentage Predictor</title>
     <meta name="description" content="Calculate your academic percentage and predict future scores. Find out how many marks you need to achieve your target percentage.">
    <meta name="keywords" content="percentage calculator, marks predictor, academic calculator, grade predictor, score calculator, education tool">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://collegeall.com/assets/css/all.min.css">
    <link rel="stylesheet" href="../index.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .percentage-container .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            border: none;
        }
        .percentage-container .card-header {
            border-radius: 15px 15px 0 0 !important;
            font-weight: 600;
        }
        .percentage-container .btn-primary {
            background-color: #4361ee;
            border-color: #4361ee;
        }
        .percentage-container .btn-primary:hover {
            background-color: #3a56d4;
            border-color: #3a56d4;
        }
        .percentage-container .result-box {
            background-color: #e9ecef;
            border-radius: 10px;
            padding: 15px;
            margin-top: 15px;
            display: none;
        }
        .percentage-container .highlight {
            color: #4361ee;
            font-weight: bold;
        }
        .percentage-container .nav-tabs .nav-link.active {
            background-color: #4361ee;
            color: white;
            border: none;
        }
        .percentage-container .nav-tabs .nav-link {
            color: #4361ee;
            border: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    <?php echo file_get_contents('https://collegeall.com/header.php'); ?>
    <div class="container percentage-container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-4">
                    <h1 class="display-4 text-primary">Percentage Predictor</h1>
                    <p class="lead">Calculate your current percentage and predict future scores</p>
                </div>

                <ul class="nav nav-tabs mb-4 justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="target-tab" data-bs-toggle="tab" data-bs-target="#target" type="button" role="tab" aria-controls="target" aria-selected="true">Target Percentage</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="predict-tab" data-bs-toggle="tab" data-bs-target="#predict" type="button" role="tab" aria-controls="predict" aria-selected="false">Predict Percentage</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <!-- Target Percentage Tab -->
                    <div class="tab-pane fade show active" id="target" role="tabpanel" aria-labelledby="target-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Calculate Marks Needed for Target Percentage</h5>
                            </div>
                            <div class="card-body">
                                <p>Enter your current marks, total marks, and desired percentage to find out how many marks you need in your next exam.</p>
                                
                                <div class="mb-3">
                                    <label for="currentMarks" class="form-label">Marks Obtained So Far</label>
                                    <input type="number" class="form-control" id="currentMarks" placeholder="Enter marks obtained">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="totalMarksSoFar" class="form-label">Total Marks So Far</label>
                                    <input type="number" class="form-control" id="totalMarksSoFar" placeholder="Enter total marks available">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="targetPercentage" class="form-label">Target Percentage</label>
                                    <input type="number" class="form-control" id="targetPercentage" placeholder="Enter desired percentage">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="remainingTotalMarks" class="form-label">Total Marks in Next Exam</label>
                                    <input type="number" class="form-control" id="remainingTotalMarks" placeholder="Enter total marks in next exam">
                                </div>
                                
                                <button class="btn btn-primary w-100" onclick="calculateTargetMarks()">Calculate Required Marks</button>
                                
                                <div class="result-box" id="targetResult">
                                    <h5>Result</h5>
                                    <p>To achieve <span class="highlight" id="targetPercentValue"></span>%, you need to score at least <span class="highlight" id="requiredMarks"></span> marks out of <span id="remainingMarksTotal"></span> in your next exam.</p>
                                    <p>Your overall percentage would then be <span class="highlight" id="overallPercentage"></span>%.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Predict Percentage Tab -->
                    <div class="tab-pane fade" id="predict" role="tabpanel" aria-labelledby="predict-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Predict Final Percentage</h5>
                            </div>
                            <div class="card-body">
                                <p>Enter your current marks, total marks, and expected marks in remaining exams to predict your final percentage.</p>
                                
                                <div class="mb-3">
                                    <label for="predictCurrentMarks" class="form-label">Marks Obtained So Far</label>
                                    <input type="number" class="form-control" id="predictCurrentMarks" placeholder="Enter marks obtained">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="predictTotalMarksSoFar" class="form-label">Total Marks So Far</label>
                                    <input type="number" class="form-control" id="predictTotalMarksSoFar" placeholder="Enter total marks available">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="expectedMarks" class="form-label">Expected Marks in Next Exam</label>
                                    <input type="number" class="form-control" id="expectedMarks" placeholder="Enter expected marks">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="predictRemainingTotalMarks" class="form-label">Total Marks in Next Exam</label>
                                    <input type="number" class="form-control" id="predictRemainingTotalMarks" placeholder="Enter total marks in next exam">
                                </div>
                                
                                <button class="btn btn-primary w-100" onclick="predictPercentage()">Predict Percentage</button>
                                
                                <div class="result-box" id="predictResult">
                                    <h5>Result</h5>
                                    <p>If you score <span class="highlight" id="expectedMarksValue"></span> marks out of <span id="predictRemainingMarksTotal"></span> in your next exam:</p>
                                    <p>Your final percentage would be <span class="highlight" id="predictedPercentage"></span>%.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php echo file_get_contents('https://collegeall.com/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function calculateTargetMarks() {
            // Get input values
            const currentMarks = parseFloat(document.getElementById('currentMarks').value);
            const totalMarksSoFar = parseFloat(document.getElementById('totalMarksSoFar').value);
            const targetPercentage = parseFloat(document.getElementById('targetPercentage').value);
            const remainingTotalMarks = parseFloat(document.getElementById('remainingTotalMarks').value);
            
            // Validate inputs
            if (isNaN(currentMarks) || isNaN(totalMarksSoFar) || isNaN(targetPercentage) || isNaN(remainingTotalMarks)) {
                alert("Please enter valid numbers in all fields.");
                return;
            }
            
            if (currentMarks > totalMarksSoFar) {
                alert("Marks obtained cannot be greater than total marks available.");
                return;
            }
            
            // Calculate required marks
            const totalMarks = totalMarksSoFar + remainingTotalMarks;
            const requiredTotalMarks = (targetPercentage / 100) * totalMarks;
            const requiredMarks = requiredTotalMarks - currentMarks;
            
            // Calculate overall percentage
            const overallPercentage = ((currentMarks + requiredMarks) / totalMarks) * 100;
            
            // Display results
            document.getElementById('targetPercentValue').textContent = targetPercentage;
            document.getElementById('requiredMarks').textContent = Math.max(0, requiredMarks.toFixed(2));
            document.getElementById('remainingMarksTotal').textContent = remainingTotalMarks;
            document.getElementById('overallPercentage').textContent = overallPercentage.toFixed(2);
            document.getElementById('targetResult').style.display = 'block';
        }
        
        function predictPercentage() {
            // Get input values
            const currentMarks = parseFloat(document.getElementById('predictCurrentMarks').value);
            const totalMarksSoFar = parseFloat(document.getElementById('predictTotalMarksSoFar').value);
            const expectedMarks = parseFloat(document.getElementById('expectedMarks').value);
            const remainingTotalMarks = parseFloat(document.getElementById('predictRemainingTotalMarks').value);
            
            // Validate inputs
            if (isNaN(currentMarks) || isNaN(totalMarksSoFar) || isNaN(expectedMarks) || isNaN(remainingTotalMarks)) {
                alert("Please enter valid numbers in all fields.");
                return;
            }
            
            if (currentMarks > totalMarksSoFar) {
                alert("Marks obtained cannot be greater than total marks available.");
                return;
            }
            
            if (expectedMarks > remainingTotalMarks) {
                alert("Expected marks cannot be greater than total marks in next exam.");
                return;
            }
            
            // Calculate predicted percentage
            const totalMarks = totalMarksSoFar + remainingTotalMarks;
            const finalMarks = currentMarks + expectedMarks;
            const predictedPercentage = (finalMarks / totalMarks) * 100;
            
            // Display results
            document.getElementById('expectedMarksValue').textContent = expectedMarks;
            document.getElementById('predictRemainingMarksTotal').textContent = remainingTotalMarks;
            document.getElementById('predictedPercentage').textContent = predictedPercentage.toFixed(2);
            document.getElementById('predictResult').style.display = 'block';
        }
    </script>
</body>
</html>