<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>5-Question Career Explorer - Discover Your Ideal Career Path</title>
    <meta name="description" content="Take our free career quiz with 5 questions to discover your ideal career path based on your interests, skills, and personality.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/career-quizz.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="5-Question Career Explorer - Discover Your Ideal Career Path">
    <meta property="og:description" content="Take our free career quiz with 5 questions to discover your ideal career path based on your interests, skills, and personality.">
    <meta property="og:url" content="https://collegeall.com/tools/career-quizz.php">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="5-Question Career Explorer - Discover Your Ideal Career Path">
    <meta name="twitter:description" content="Take our free career quiz with 5 questions to discover your ideal career path based on your interests, skills, and personality.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "5-Question Career Explorer - Discover Your Ideal Career Path",
      "description": "Take our free career quiz with 5 questions to discover your ideal career path based on your interests, skills, and personality.",
      "url": "https://collegeall.com/tools/career-quizz.php",
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
    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <meta name="keywords" content="career quiz, career test, job finder, career assessment, career guidance, career path">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    <link rel="stylesheet" href="../index.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">    <style>        :root {            --primary: #4361ee;            --secondary: #3a0ca3;            --success: #4cc9f0;            --light: #f8f9fa;            --dark: #212529;            --warning: #f72585;        }        body {            min-height: 100vh;            padding-bottom: 2rem;        }        .quiz-main-container .quiz-container {            background: white;            border-radius: 15px;            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);            overflow: hidden;            margin-top: 2rem;        }        .quiz-main-container .quiz-header {            background: linear-gradient(to right, var(--primary), var(--secondary));            color: white;            padding: 2rem;            text-align: center;        }        .quiz-main-container .quiz-body {            padding: 2rem;        }        .quiz-main-container .question-container {            display: none;        }        .quiz-main-container .question-container.active {            display: block;            animation: fadeIn 0.5s ease;        }        @keyframes fadeIn {            from { opacity: 0; transform: translateY(10px); }            to { opacity: 1; transform: translateY(0); }        }        .quiz-main-container .question-text {            font-size: 1.3rem;            font-weight: 600;            margin-bottom: 1.5rem;            color: var(--dark);        }        .quiz-main-container .option-card {            border: 2px solid #e9ecef;            border-radius: 10px;            padding: 1.2rem;            margin-bottom: 1rem;            cursor: pointer;            transition: all 0.3s ease;        }        .quiz-main-container .option-card:hover {            border-color: var(--primary);            background-color: rgba(67, 97, 238, 0.05);        }        .quiz-main-container .option-card.selected {            border-color: var(--primary);            background-color: rgba(67, 97, 238, 0.1);        }        .quiz-main-container .progress {            height: 10px;            margin-bottom: 2rem;        }        .quiz-main-container .result-card {            text-align: center;            padding: 2rem;            display: none;        }        .quiz-main-container .career-icon {            font-size: 4rem;            color: var(--primary);            margin-bottom: 1.5rem;        }        .quiz-main-container .career-title {            color: var(--secondary);            font-weight: 700;            margin-bottom: 1rem;        }        .quiz-main-container .career-description {            color: #6c757d;            margin-bottom: 1.5rem;        }        .quiz-main-container .btn-primary {            background-color: var(--primary);            border-color: var(--primary);            padding: 0.7rem 1.5rem;            font-weight: 600;        }        .quiz-main-container .btn-primary:hover {            background-color: var(--secondary);            border-color: var(--secondary);        }        .quiz-main-container .btn-outline-primary {            color: var(--primary);            border-color: var(--primary);        }        .quiz-main-container .btn-outline-primary:hover {            background-color: var(--primary);            border-color: var(--primary);        }        .feature-card {            border-radius: 10px;            padding: 1.5rem;            text-align: center;            height: 100%;            width: 100%;            transition: transform 0.3s ease;        }        .feature-card:hover {            transform: translateY(-5px);        }        .feature-icon {            font-size: 2.5rem;            color: var(--primary);            margin-bottom: 1rem;        }        .quiz-main-container .nav-buttons {            display: flex;            justify-content: space-between;            margin-top: 2rem;        }        .quiz-main-container .career-match-card {            border-left: 4px solid var(--primary);            transition: transform 0.3s ease;        }        .quiz-main-container .career-match-card:hover {            transform: translateY(-5px);        }        .quiz-main-container .match-high {            background-color: #d4edda;            border-left-color: #28a745;        }        .quiz-main-container .match-medium {            background-color: #fff3cd;            border-left-color: #ffc107;        }        .quiz-main-container .match-low {            background-color: #f8d7da;            border-left-color: #dc3545;        }    </style></head>
<body>
    
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <!-- Hero Section -->
    <section class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Find Your <span class="text-primary">Dream Career</span> in 5 Questions</h1>
                <p class="lead mb-4">Our quick 5-question quiz will match you with careers that fit your personality, interests, and strengths.</p>
                <div class="d-flex gap-3 mb-3">
                    <button class="btn btn-primary btn-lg" onclick="startQuiz()">
                        <i class="fas fa-play me-2"></i>Start Quiz
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" class="img-fluid rounded shadow" alt="Career exploration">
            </div>
        </div>
    </section>

    <!-- Quiz Container -->
    <section class="container mt-5 quiz-main-container" id="quizSection" style="display: none;">
        <div class="quiz-container">
            <div class="quiz-header">
                <h2>Career Explorer Quiz</h2>
                <p>Answer these 5 questions to discover careers that match your personality</p>
            </div>
            <div class="quiz-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <span id="progressText">Question 1 of 5</span>
                    <button class="btn btn-outline-primary btn-sm" onclick="restartQuiz()">
                        <i class="fas fa-redo me-1"></i>Restart
                    </button>
                </div>
                
                <div class="progress">
                    <div id="quizProgress" class="progress-bar" role="progressbar" style="width: 20%"></div>
                </div>
                
                <!-- Question 1 -->
                <div class="question-container active" id="question1">
                    <div class="question-text">1. Which of these activities do you enjoy the most?</div>
                    <div class="options">
                        <div class="option-card" onclick="selectOption(this, 1, 'creative')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-paint-brush fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Creating art, writing, or designing</h5>
                                    <p class="mb-0 text-muted">Expressing ideas through creative mediums</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 1, 'analytical')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-calculator fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Solving problems and analyzing data</h5>
                                    <p class="mb-0 text-muted">Working with numbers and logical systems</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 1, 'helping')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-hands-helping fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Helping and caring for others</h5>
                                    <p class="mb-0 text-muted">Supporting people's wellbeing and development</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 1, 'leading')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-chart-line fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Leading projects and making decisions</h5>
                                    <p class="mb-0 text-muted">Managing teams and driving initiatives</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-buttons">
                        <div></div> <!-- Empty div for spacing -->
                        <button class="btn btn-primary" onclick="nextQuestion()">Next Question <i class="fas fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
                
                <!-- Question 2 -->
                <div class="question-container" id="question2">
                    <div class="question-text">2. What type of work environment do you prefer?</div>
                    <div class="options">
                        <div class="option-card" onclick="selectOption(this, 2, 'flexible')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-home fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Flexible and remote</h5>
                                    <p class="mb-0 text-muted">Working from home or various locations</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 2, 'structured')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-building fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Structured office setting</h5>
                                    <p class="mb-0 text-muted">Traditional workplace with clear routines</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 2, 'dynamic')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-clinic-medical fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Fast-paced and dynamic</h5>
                                    <p class="mb-0 text-muted">Hospitals, labs, or emergency settings</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 2, 'outdoor')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-tree fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Outdoors or field work</h5>
                                    <p class="mb-0 text-muted">Working in natural environments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-buttons">
                        <button class="btn btn-outline-primary" onclick="prevQuestion()"><i class="fas fa-arrow-left me-2"></i>Previous</button>
                        <button class="btn btn-primary" onclick="nextQuestion()">Next Question <i class="fas fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
                
                <!-- Question 3 -->
                <div class="question-container" id="question3">
                    <div class="question-text">3. Which skills do you consider your strongest?</div>
                    <div class="options">
                        <div class="option-card" onclick="selectOption(this, 3, 'technical')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-laptop-code fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Technical and computer skills</h5>
                                    <p class="mb-0 text-muted">Programming, software, or technical expertise</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 3, 'communication')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Communication and interpersonal skills</h5>
                                    <p class="mb-0 text-muted">Working with people and building relationships</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 3, 'creative')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-lightbulb fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Creative and innovative thinking</h5>
                                    <p class="mb-0 text-muted">Generating new ideas and solutions</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 3, 'organizational')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-tasks fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Organizational and planning skills</h5>
                                    <p class="mb-0 text-muted">Managing projects and details effectively</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-buttons">
                        <button class="btn btn-outline-primary" onclick="prevQuestion()"><i class="fas fa-arrow-left me-2"></i>Previous</button>
                        <button class="btn btn-primary" onclick="nextQuestion()">Next Question <i class="fas fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
                
                <!-- Question 4 -->
                <div class="question-container" id="question4">
                    <div class="question-text">4. What is most important to you in a career?</div>
                    <div class="options">
                        <div class="option-card" onclick="selectOption(this, 4, 'impact')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-heart fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Making a positive impact</h5>
                                    <p class="mb-0 text-muted">Helping others and contributing to society</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 4, 'growth')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-chart-line fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Career growth and advancement</h5>
                                    <p class="mb-0 text-muted">Opportunities for promotion and development</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 4, 'balance')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-balance-scale fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Work-life balance</h5>
                                    <p class="mb-0 text-muted">Time for family, hobbies, and personal life</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 4, 'financial')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-money-bill-wave fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Financial security and stability</h5>
                                    <p class="mb-0 text-muted">High earning potential and job security</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-buttons">
                        <button class="btn btn-outline-primary" onclick="prevQuestion()"><i class="fas fa-arrow-left me-2"></i>Previous</button>
                        <button class="btn btn-primary" onclick="nextQuestion()">Next Question <i class="fas fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
                
                <!-- Question 5 -->
                <div class="question-container" id="question5">
                    <div class="question-text">5. How do you prefer to learn new things?</div>
                    <div class="options">
                        <div class="option-card" onclick="selectOption(this, 5, 'hands-on')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-tools fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Hands-on practice</h5>
                                    <p class="mb-0 text-muted">Learning by doing and experimenting</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 5, 'reading')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-book fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Reading and research</h5>
                                    <p class="mb-0 text-muted">Studying materials and documentation</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 5, 'collaborative')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-user-friends fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Collaborative learning</h5>
                                    <p class="mb-0 text-muted">Working with others in groups or teams</p>
                                </div>
                            </div>
                        </div>
                        <div class="option-card" onclick="selectOption(this, 5, 'instruction')">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Formal instruction</h5>
                                    <p class="mb-0 text-muted">Classes, workshops, and guided training</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-buttons">
                        <button class="btn btn-outline-primary" onclick="prevQuestion()"><i class="fas fa-arrow-left me-2"></i>Previous</button>
                        <button class="btn btn-primary" onclick="showResults()">See Results <i class="fas fa-chart-bar ms-2"></i></button>
                    </div>
                </div>
                
                <!-- Results -->
                <div class="result-card" id="quizResult">
                    <div class="career-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h2 class="career-title" id="resultTitle">Your Career Match</h2>
                    <p class="career-description" id="resultDescription">Based on your answers, we've identified careers that align with your interests and strengths.</p>
                    
                    <div class="row mt-4" id="careerResults">
                        <!-- Career results will be dynamically inserted here -->
                    </div>
                    
                    <div class="mt-4">
                        <button class="btn btn-primary me-3" onclick="restartQuiz()">
                            <i class="fas fa-redo me-2"></i>Retake Quiz
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-download me-2"></i>Download Results
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container mt-5 quiz-main-container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="fw-bold">How Our Career Quiz Works</h2>
                <p class="lead">Our 5-question assessment is designed to match you with careers based on multiple factors</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="feature-card shadow-sm bg-white">
                    <div class="feature-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h4>Answer 5 Questions</h4>
                    <p>Respond to questions about your interests, skills, and work preferences.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card shadow-sm bg-white">
                    <div class="feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h4>Get Analyzed</h4>
                    <p>Our algorithm evaluates your responses against hundreds of career profiles.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card shadow-sm bg-white">
                    <div class="feature-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h4>Receive Matches</h4>
                    <p>Get personalized career recommendations with detailed information.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentQuestion = 1;
        const totalQuestions = 5;
        const userAnswers = {};
        
        // Define career profiles with scoring criteria
        const careerProfiles = {
            "Software Developer": {
                traits: ["analytical", "technical", "flexible", "growth", "hands-on"],
                icon: "fas fa-laptop-code",
                description: "Create applications and systems to solve problems"
            },
            "Graphic Designer": {
                traits: ["creative", "flexible", "creative", "balance", "hands-on"],
                icon: "fas fa-paint-brush",
                description: "Create visual concepts to communicate ideas"
            },
            "Healthcare Professional": {
                traits: ["helping", "dynamic", "communication", "impact", "collaborative"],
                icon: "fas fa-user-md",
                description: "Provide medical care and support to patients"
            },
            "Teacher/Educator": {
                traits: ["helping", "structured", "communication", "impact", "instruction"],
                icon: "fas fa-chalkboard-teacher",
                description: "Educate and inspire students of all ages"
            },
            "Business Manager": {
                traits: ["leading", "structured", "organizational", "growth", "collaborative"],
                icon: "fas fa-briefcase",
                description: "Lead teams and manage business operations"
            },
            "Data Analyst": {
                traits: ["analytical", "structured", "technical", "growth", "reading"],
                icon: "fas fa-chart-bar",
                description: "Interpret complex data to drive decisions"
            },
            "Marketing Specialist": {
                traits: ["creative", "flexible", "communication", "growth", "collaborative"],
                icon: "fas fa-bullhorn",
                description: "Develop strategies to promote products and services"
            },
            "Environmental Scientist": {
                traits: ["analytical", "outdoor", "technical", "impact", "hands-on"],
                icon: "fas fa-tree",
                description: "Study and protect the natural environment"
            }
        };
        
        function startQuiz() {
            document.getElementById('quizSection').style.display = 'block';
            document.querySelector('section.container.mt-5').scrollIntoView({ behavior: 'smooth' });
        }
        
        function selectOption(optionElement, questionNum, answerValue) {
            // Remove selected class from all options in this question
            const options = optionElement.parentElement.querySelectorAll('.option-card');
            options.forEach(option => {
                option.classList.remove('selected');
            });
            
            // Add selected class to clicked option
            optionElement.classList.add('selected');
            
            // Store the answer
            userAnswers[questionNum] = answerValue;
        }
        
        function nextQuestion() {
            // Check if an option is selected
            const currentOptions = document.querySelector(`#question${currentQuestion} .options`);
            const selectedOption = currentOptions.querySelector('.option-card.selected');
            
            if (!selectedOption) {
                alert('Please select an option before continuing.');
                return;
            }
            
            // Hide current question
            document.getElementById(`question${currentQuestion}`).classList.remove('active');
            
            // Move to next question
            currentQuestion++;
            
            // Update progress
            updateProgress();
            
            // Show next question
            document.getElementById(`question${currentQuestion}`).classList.add('active');
        }
        
        function prevQuestion() {
            // Hide current question
            document.getElementById(`question${currentQuestion}`).classList.remove('active');
            
            // Move to previous question
            currentQuestion--;
            
            // Update progress
            updateProgress();
            
            // Show previous question
            document.getElementById(`question${currentQuestion}`).classList.add('active');
        }
        
        function updateProgress() {
            const progressPercent = (currentQuestion / totalQuestions) * 100;
            document.getElementById('quizProgress').style.width = `${progressPercent}%`;
            document.getElementById('progressText').textContent = `Question ${currentQuestion} of ${totalQuestions}`;
        }
        
        function calculateCareerMatches() {
            const userTraits = Object.values(userAnswers);
            const careerScores = {};
            
            // Calculate match scores for each career
            for (const [career, profile] of Object.entries(careerProfiles)) {
                let score = 0;
                
                // Compare user traits with career profile traits
                for (const trait of userTraits) {
                    if (profile.traits.includes(trait)) {
                        score++;
                    }
                }
                
                careerScores[career] = score;
            }
            
            // Sort careers by score (highest first)
            const sortedCareers = Object.entries(careerScores)
                .sort((a, b) => b[1] - a[1])
                .slice(0, 3); // Get top 3 matches
            
            return sortedCareers;
        }
        
        function showResults() {
            // Check if an option is selected for current question
            const currentOptions = document.querySelector(`#question${currentQuestion} .options`);
            const selectedOption = currentOptions.querySelector('.option-card.selected');
            
            if (!selectedOption) {
                alert('Please select an option before viewing results.');
                return;
            }
            
            // Hide current question
            document.getElementById(`question${currentQuestion}`).classList.remove('active');
            
            // Update progress to 100%
            document.getElementById('quizProgress').style.width = '100%';
            document.getElementById('progressText').textContent = 'Quiz Complete';
            
            // Calculate career matches
            const topCareers = calculateCareerMatches();
            
            // Display results
            displayCareerResults(topCareers);
            
            // Show results section
            document.getElementById('quizResult').style.display = 'block';
        }
        
        function displayCareerResults(topCareers) {
            const resultsContainer = document.getElementById('careerResults');
            resultsContainer.innerHTML = '';
            
            // Determine career category based on top match
            const topCareer = topCareers[0][0];
            let careerCategory = "General";
            
            if (topCareer.includes("Developer") || topCareer.includes("Analyst")) {
                careerCategory = "Technology & Analysis";
            } else if (topCareer.includes("Design") || topCareer.includes("Marketing")) {
                careerCategory = "Creative & Marketing";
            } else if (topCareer.includes("Healthcare") || topCareer.includes("Teacher")) {
                careerCategory = "Healthcare & Education";
            } else if (topCareer.includes("Manager") || topCareer.includes("Business")) {
                careerCategory = "Business & Management";
            } else if (topCareer.includes("Environmental")) {
                careerCategory = "Science & Environment";
            }
            
            // Update result title and description
            document.getElementById('resultTitle').textContent = careerCategory;
            document.getElementById('resultDescription').textContent = 
                `Based on your answers, we've identified these careers as your best matches:`;
            
            // Create career cards for top matches
            topCareers.forEach(([career, score], index) => {
                const profile = careerProfiles[career];
                let matchLevel = "match-low";
                let matchText = "Low Match";
                
                if (score >= 4) {
                    matchLevel = "match-high";
                    matchText = "High Match";
                } else if (score >= 3) {
                    matchLevel = "match-medium";
                    matchText = "Medium Match";
                }
                
                const careerCard = `
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm career-match-card ${matchLevel}">
                            <div class="card-body text-center">
                                <i class="${profile.icon} fa-2x text-primary mb-3"></i>
                                <h5>${career}</h5>
                                <p class="text-muted">${profile.description}</p>
                                <span class="badge ${matchLevel === 'match-high' ? 'bg-success' : matchLevel === 'match-medium' ? 'bg-warning' : 'bg-danger'}">${matchText}</span>
                                <div class="mt-2 small text-muted">Match Score: ${score}/5</div>
                            </div>
                        </div>
                    </div>
                `;
                
                resultsContainer.innerHTML += careerCard;
            });
        }
        
        function restartQuiz() {
            currentQuestion = 1;
            
            // Clear stored answers
            for (let i = 1; i <= totalQuestions; i++) {
                userAnswers[i] = null;
            }
            
            // Hide all questions and results
            document.querySelectorAll('.question-container').forEach(container => {
                container.classList.remove('active');
            });
            
            document.getElementById('quizResult').style.display = 'none';
            
            // Show first question
            document.getElementById('question1').classList.add('active');
            
            // Reset progress
            updateProgress();
            
            // Clear selections
            document.querySelectorAll('.option-card').forEach(option => {
                option.classList.remove('selected');
            });
        }
    </script>
</body>
</html>