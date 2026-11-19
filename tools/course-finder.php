<!doctype html>
<html lang="en">
<head>
    <title>Course Finder After 12th — Smart AI Recommendations</title>
    <meta name="description" content="Advanced Course Finder after 12th with AI-powered recommendations. Select group, enter subject marks, pick interests — get personalized course suggestions and college pointers.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/course-finder.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Course Finder After 12th — Smart AI Recommendations">
    <meta property="og:description" content="Advanced Course Finder after 12th with AI-powered recommendations. Select group, enter subject marks, pick interests — get personalized course suggestions and college pointers.">
    <meta property="og:url" content="https://collegeall.com/tools/course-finder.php">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Course Finder After 12th — Smart AI Recommendations">
    <meta name="twitter:description" content="Advanced Course Finder after 12th with AI-powered recommendations. Select group, enter subject marks, pick interests — get personalized course suggestions and college pointers.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Course Finder After 12th",
      "description": "Advanced Course Finder after 12th with AI-powered recommendations. Select group, enter subject marks, pick interests — get personalized course suggestions and college pointers.",
      "url": "https://collegeall.com/tools/course-finder.php",
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
  <meta charset="utf-8" />  <meta name="viewport" content="width=device-width,initial-scale=1" />  <meta name="keywords" content="course finder after 12th, course recommendation, 12th group to courses, career guidance, AI course recommender" />  <!-- Bootstrap CSS -->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">  <!-- Bootstrap Icons -->  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">  <style>    :root {      --card-radius: 14px;      --accent: #0d6efd;      --accent-light: #3b82f6;      --accent-dark: #1e40af;      --bg: #f4f7ff;      --success: #10b981;      --warning: #f59e0b;      --danger: #ef4444;    }    body {      font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;      background: var(--bg);      min-height: 100vh;      color: #0f1724;      transition: background .25s, color .25s;    }    .app-card {      border-radius: var(--card-radius);      padding: 20px;      background: white;      box-shadow: 0 8px 30px rgba(13,110,253,0.06);      transition: transform 0.2s, box-shadow 0.2s;    }    .app-card:hover {      transform: translateY(-2px);      box-shadow: 0 12px 40px rgba(13,110,253,0.1);    }    .title {       font-weight: 700;       font-size: 1.25rem;       background: linear-gradient(90deg, var(--accent), var(--accent-light));      -webkit-background-clip: text;      -webkit-text-fill-color: transparent;    }    .muted { color: #6b7280; }    .result-item {       border-left: 4px solid rgba(13,110,253,0.12);       padding: 16px;       border-radius: 8px;       background: #fff;       transition: all 0.2s;    }    .result-item:hover {      border-left-color: var(--accent);      box-shadow: 0 4px 12px rgba(0,0,0,0.05);    }    .chip {       display: inline-block;       padding: 4px 10px;       border-radius: 999px;       background: #eef4ff;       margin-right: 6px;       margin-bottom: 6px;      font-size: .8rem;       color: var(--accent);       transition: all 0.2s;    }    .chip:hover {      background: var(--accent);      color: white;      cursor: pointer;    }    .history-box {       max-height: 220px;       overflow: auto;       border-left: 3px solid var(--accent);       padding-left: 12px;     }    .explain { font-size: .9rem; color: #374151; }    .progress {      height: 8px;      border-radius: 4px;    }    .match-score {      font-size: 0.85rem;      font-weight: 600;    }    .course-badge {      position: absolute;      top: 10px;      right: 10px;      font-size: 0.7rem;      padding: 2px 8px;    }    .ai-insight {      background: linear-gradient(135deg, #e0f2fe, #f0f9ff);      border-left: 4px solid var(--accent);      padding: 12px;      border-radius: 8px;      margin-bottom: 16px;    }    .ai-icon {      color: var(--accent);      margin-right: 8px;    }    .subject-input-group {      position: relative;    }    .subject-score {      position: absolute;      right: 10px;      top: 38px;      font-size: 0.8rem;      color: var(--accent);      font-weight: 600;    }    .interest-cloud {      display: flex;      flex-wrap: wrap;      gap: 8px;      margin-bottom: 16px;    }    .interest-item {      padding: 6px 12px;      border-radius: 20px;      background: #f1f5f9;      color: #475569;      font-size: 0.85rem;      cursor: pointer;      transition: all 0.2s;    }    .interest-item:hover {      background: #e2e8f0;    }    .interest-item.selected {      background: var(--accent);      color: white;    }    .stats-card {      text-align: center;      padding: 12px;      border-radius: 8px;      background: #f8fafc;    }    .stats-value {      font-size: 1.5rem;      font-weight: 700;      color: var(--accent);    }    .stats-label {      font-size: 0.8rem;      color: #64748b;    }    .comparison-chart {      height: 200px;      margin: 20px 0;    }    .trend-indicator {      display: inline-flex;      align-items: center;      font-size: 0.8rem;      padding: 2px 6px;      border-radius: 4px;    }    .trend-up {      background: #dcfce7;      color: #166534;    }    .trend-down {      background: #fee2e2;      color: #991b1b;    }    body.dark-mode {      background: #071023;       color: #e6eef8;    }    body.dark-mode .app-card {       background: #07192b;       box-shadow: 0 8px 30px rgba(255,255,255,0.03);     }    body.dark-mode input,     body.dark-mode select,     body.dark-mode textarea {       background: #071827;       color: #e6eef8;       border-color: #233047;     }    body.dark-mode .chip {       background: rgba(96,165,250,0.12);       color: #93c5fd;     }    body.dark-mode .ai-insight {      background: linear-gradient(135deg, #0c4a6e, #1e3a8a);    }    body.dark-mode .interest-item {      background: #1e293b;      color: #cbd5e1;    }    body.dark-mode .interest-item:hover {      background: #334155;    }    body.dark-mode .interest-item.selected {      background: var(--accent);      color: white;    }    body.dark-mode .stats-card {      background: #1e293b;    }    .small-muted { color: #6b7280; }    @media (max-width: 540px) {      .app-card { padding: 16px; }    }  </style>    <!-- Global site tag (gtag.js) - Google Analytics & Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BED9GZX87Z"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-BED9GZX87Z');
      gtag('config', 'AW-17357684990');
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid px-4">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
      <i class="bi bi-search-heart me-2"></i>
      Course Finder AI
    </a>
    <div class="d-flex gap-2 ms-auto">
      <button class="btn btn-light btn-sm" id="toggleDark">
        <i class="bi bi-moon"></i> Dark Mode
      </button>
      <button class="btn btn-outline-light btn-sm" id="exportDbBtn" title="Download embedded course DB JSON">
        <i class="bi bi-download"></i> Export DB
      </button>
    </div>
  </div>
</nav>

<main class="container py-4">
  <div class="row gy-4">
    <!-- Left Panel -->
    <div class="col-lg-4">
      <div class="app-card">
        <div class="d-flex justify-content-between align-items-start">
          <div>
            <div class="title">Find courses after 12th</div>
            <div class="muted small">Select your group, enter marks & interests — get AI-powered recommendations.</div>
          </div>
        </div>

        <hr>

        <label class="form-label fw-semibold">1. Select 12th Group</label>
        <select id="groupSelect" class="form-select mb-3">
          <option value="">-- Select Your Group --</option>
        </select>

        <label class="form-label fw-semibold">2. Enter Subject Marks</label>
        <div id="subjectsContainer" class="mb-3">
          <!-- dynamic inputs appear here -->
        </div>

        <div class="d-flex justify-content-between mb-3">
          <div class="stats-card flex-fill me-2">
            <div class="stats-value" id="avgMarks">0</div>
            <div class="stats-label">Average</div>
          </div>
          <div class="stats-card flex-fill me-2">
            <div class="stats-value" id="totalMarks">0</div>
            <div class="stats-label">Total</div>
          </div>
          <div class="stats-card flex-fill">
            <div class="stats-value" id="percentage">0%</div>
            <div class="stats-label">Percentage</div>
          </div>
        </div>

        <label class="form-label fw-semibold">3. Select Interests</label>
        <div class="mb-3" id="interestCloud">
          <!-- interest cloud -->
        </div>

        <label class="form-label fw-semibold">4. Career Preferences</label>
        <div class="mb-3">
          <select id="careerPref" class="form-select">
            <option value="">-- Select Career Preference --</option>
            <option value="corporate">Corporate Job</option>
            <option value="entrepreneur">Entrepreneurship</option>
            <option value="research">Research & Academia</option>
            <option value="government">Government Job</option>
            <option value="creative">Creative Field</option>
            <option value="social">Social Work</option>
          </select>
        </div>

        <label class="form-label fw-semibold">5. Extra: Ambition / Notes</label>
        <textarea id="notes" class="form-control mb-3" rows="2" placeholder="e.g., I want engineering abroad or prefer design"></textarea>

        <div class="d-grid gap-2">
          <button id="recommendBtn" class="btn btn-primary d-flex align-items-center justify-content-center">
            <i class="bi bi-robot me-2"></i> Get AI Recommendations
          </button>
          <button id="clearBtn" class="btn btn-outline-secondary">Clear All</button>
        </div>

        <hr class="my-3">

        <div class="d-flex justify-content-between align-items-center mb-2">
          <div class="fw-semibold small">Saved Searches</div>
          <div class="small muted">Stored locally</div>
        </div>
        <div id="historySaved" class="history-box small"></div>
      </div>
    </div>

    <!-- Right Panel -->
    <div class="col-lg-8">
      <div class="app-card">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <div>
            <div class="title">AI-Powered Recommendations</div>
            <div class="muted small">Personalized suggestions with match scores and insights.</div>
          </div>
          <div>
            <button class="btn btn-outline-primary btn-sm" id="saveResultBtn">
              <i class="bi bi-bookmark"></i> Save Result
            </button>
            <button class="btn btn-outline-success btn-sm" id="downloadReportBtn">
              <i class="bi bi-file-earmark-pdf"></i> Download Report
            </button>
          </div>
        </div>

        <div class="mb-3">
          <input id="searchInput" class="form-control" placeholder="Search courses (name / tag)..." />
        </div>

        <div id="aiInsights" class="ai-insight">
          <i class="bi bi-lightbulb ai-icon"></i>
          <span id="aiInsightText">Enter your details to get personalized course recommendations.</span>
        </div>

        <div class="d-flex justify-content-between mb-3">
          <div class="fw-semibold">Top Recommendations</div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="showDetails" checked>
            <label class="form-check-label small" for="showDetails">Show Details</label>
          </div>
        </div>

        <div id="resultsContainer" class="row g-3">
          <!-- recommendations go here -->
        </div>

        <hr class="my-3">

        <div class="d-flex justify-content-between align-items-center mb-2">
          <div class="fw-semibold small">Course Database (30+ courses)</div>
          <div class="small muted">Embedded JSON</div>
        </div>

        <pre id="dbPreview" class="small" style="max-height:220px; overflow:auto; background:#f8fafc; padding:12px; border-radius:8px;"></pre>
      </div>
    </div>
  </div>
</main>

<!-- Embedded database-like JSON (30+ main courses mapped to groups) -->
<script>
/* Enhanced Embedded DB: courses array and group list.
   Each course object: {
     id, name, tags[], suitableGroups[], topColleges[], recommendedAvg (0-100),
     description, careerPaths[], difficulty, demand, salaryPotential
   }
*/
const courseDB = [
  { 
    id: 'CE', 
    name: 'B.E / B.Tech (Computer Science)', 
    tags: ['engineering','cs','programming','maths','technology','software'], 
    suitableGroups: ['pcm','pcm_cs','pcmb'], 
    topColleges: ['IITs','NITs','IIITs','BITS Pilani','VIT','SRM'], 
    recommendedAvg: 75, 
    description: 'Core engineering degree focusing on computer systems, software development, algorithms, and data structures.', 
    careerPaths: ['Software Engineer', 'Data Scientist', 'Web Developer', 'AI Engineer', 'Cybersecurity Analyst'],
    difficulty: 'High',
    demand: 'Very High',
    salaryPotential: 'High'
  },
  { 
    id: 'ME', 
    name: 'B.E / B.Tech (Mechanical Engineering)', 
    tags: ['engineering','mechanical','design','manufacturing','automobile'], 
    suitableGroups: ['pcm','pcm_cs'], 
    topColleges: ['IITs','NITs','BITS Pilani','COEP','PSG Tech'], 
    recommendedAvg: 70, 
    description: 'Mechanical systems, manufacturing processes, thermodynamics, and machine design.', 
    careerPaths: ['Mechanical Engineer', 'Automotive Engineer', 'Production Manager', 'Design Engineer'],
    difficulty: 'High',
    demand: 'Medium',
    salaryPotential: 'Medium'
  },
  { 
    id: 'EE', 
    name: 'B.E / B.Tech (Electrical & Electronics)', 
    tags: ['engineering','ee','circuits','power','electronics'], 
    suitableGroups: ['pcm','pcm_cs'], 
    topColleges: ['IITs','NITs','BITS Pilani','Jadavpur University','DTU'], 
    recommendedAvg: 70, 
    description: 'Electronics, power systems, electrical circuits, control systems, and signal processing.', 
    careerPaths: ['Electrical Engineer', 'Electronics Engineer', 'Power Systems Engineer', 'Control Engineer'],
    difficulty: 'High',
    demand: 'Medium',
    salaryPotential: 'Medium'
  },
  { 
    id: 'CEIT', 
    name: 'B.E / B.Tech (Information Technology)', 
    tags: ['engineering','it','cs','networking','software'], 
    suitableGroups: ['pcm','pcm_cs'], 
    topColleges: ['NITs','VIT','SRM','MIT Manipal','Amrita'], 
    recommendedAvg: 68, 
    description: 'Software development, computer networks, database systems, and web technologies.', 
    careerPaths: ['IT Consultant', 'Network Engineer', 'Software Developer', 'System Administrator'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium-High'
  },
  { 
    id: 'ARCH', 
    name: 'B.Arch (Architecture)', 
    tags: ['architecture','design','maths','creative','construction'], 
    suitableGroups: ['pcm','pcmb','pcm_cs'], 
    topColleges: ['CEPT','SPA','IIT Kharagpur','NIT Trichy','JJ College'], 
    recommendedAvg: 75, 
    description: 'Architectural design, building planning, construction technology, and urban design.', 
    careerPaths: ['Architect', 'Urban Planner', 'Interior Designer', 'Construction Manager'],
    difficulty: 'Medium',
    demand: 'Medium',
    salaryPotential: 'Medium'
  },
  { 
    id: 'BCA', 
    name: 'BCA (Computer Applications)', 
    tags: ['cs','programming','it','software','applications'], 
    suitableGroups: ['pcm','commerce_general','pcm_cs','commerce_cs'], 
    topColleges: ['Christ University','Symbiosis','DU','IP University','Amity'], 
    recommendedAvg: 60, 
    description: 'Programming languages, database management, software engineering, and web development.', 
    careerPaths: ['Software Developer', 'Web Designer', 'System Analyst', 'Database Administrator'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium'
  },
  { 
    id: 'BSC_CS', 
    name: 'B.Sc Computer Science', 
    tags: ['cs','programming','theory','algorithms'], 
    suitableGroups: ['pcm','pcm_cs','pcmb'], 
    topColleges: ['St. Stephen\'s','Loyola','Christ University','Fergusson','St. Xavier\'s'], 
    recommendedAvg: 65, 
    description: 'Computer science fundamentals, programming, algorithms, and computational theory.', 
    careerPaths: ['Software Developer', 'Data Analyst', 'Research Scientist', 'IT Consultant'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium'
  },
  { 
    id: 'BBA', 
    name: 'BBA (Business Administration)', 
    tags: ['management','business','entrepreneurship','marketing'], 
    suitableGroups: ['commerce_general','commerce_bm'], 
    topColleges: ['NMIMS','Symbiosis','Christ University','Shaheed Sukhdev','IPE'], 
    recommendedAvg: 60, 
    description: 'Business management principles, marketing, finance, human resources, and entrepreneurship.', 
    careerPaths: ['Business Analyst', 'Marketing Manager', 'HR Executive', 'Entrepreneur'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium-High'
  },
  { 
    id: 'BCom', 
    name: 'B.Com (Commerce)', 
    tags: ['commerce','accounts','finance','taxation','business'], 
    suitableGroups: ['commerce_general','commerce_cs','commerce_bm'], 
    topColleges: ['SRCC','Loyola','St. Xavier\'s','Narsee Monjee','Christ University'], 
    recommendedAvg: 55, 
    description: 'Accounting, business law, economics, taxation, and financial management.', 
    careerPaths: ['Accountant', 'Financial Analyst', 'Tax Consultant', 'Banking Professional'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium'
  },
  { 
    id: 'CA', 
    name: 'Chartered Accountancy (CA Foundation → CA)', 
    tags: ['finance','accounts','professional','taxation','audit'], 
    suitableGroups: ['commerce_general','commerce_bm'], 
    topColleges: ['ICAI Institutions','Top Coaching Centers'], 
    recommendedAvg: 75, 
    description: 'Professional accounting, auditing, taxation, financial reporting, and business laws.', 
    careerPaths: ['Chartered Accountant', 'Financial Controller', 'Auditor', 'Tax Consultant'],
    difficulty: 'Very High',
    demand: 'High',
    salaryPotential: 'High'
  },
  { 
    id: 'MBBS', 
    name: 'MBBS (Medicine)', 
    tags: ['medical','medicine','healthcare','biology','surgery'], 
    suitableGroups: ['pcb','pcmb','bio_cs','bio_related'], 
    topColleges: ['AIIMS','JIPMER','MAMC','KGMU','CMC Vellore'], 
    recommendedAvg: 90, 
    description: 'Medical science, human anatomy, physiology, pharmacology, and clinical practice.', 
    careerPaths: ['Doctor', 'Surgeon', 'Medical Researcher', 'Public Health Specialist'],
    difficulty: 'Very High',
    demand: 'Very High',
    salaryPotential: 'High'
  },
  { 
    id: 'BDS', 
    name: 'BDS (Dentistry)', 
    tags: ['medical','dentistry','biology','oral-health'], 
    suitableGroups: ['pcb','pcmb'], 
    topColleges: ['Maulana Azad','Manipal','SDM','Govt Dental College'], 
    recommendedAvg: 85, 
    description: 'Dental medicine, oral health, orthodontics, and dental surgery.', 
    careerPaths: ['Dentist', 'Oral Surgeon', 'Orthodontist', 'Dental Researcher'],
    difficulty: 'High',
    demand: 'High',
    salaryPotential: 'High'
  },
  { 
    id: 'BPharm', 
    name: 'B.Pharm (Pharmacy)', 
    tags: ['pharmacy','life-science','medicine','research'], 
    suitableGroups: ['pcb','pcmb','pcm'], 
    topColleges: ['NIPER','BITS Pilani','JSS','Manipal','Delhi University'], 
    recommendedAvg: 65, 
    description: 'Pharmaceutical sciences, drug formulation, pharmacology, and medicinal chemistry.', 
    careerPaths: ['Pharmacist', 'Drug Inspector', 'Pharmaceutical Researcher', 'Medical Representative'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium'
  },
  { 
    id: 'BSc_Bio', 
    name: 'B.Sc (Biology / Life Sciences)', 
    tags: ['biology','research','life-science','laboratory'], 
    suitableGroups: ['pcb','pcmb','bio_related'], 
    topColleges: ['St. Stephen\'s','Loyola','Fergusson','St. Xavier\'s','Christ University'], 
    recommendedAvg: 55, 
    description: 'Biological sciences, genetics, microbiology, biochemistry, and biotechnology.', 
    careerPaths: ['Biotechnologist', 'Research Scientist', 'Lab Technician', 'Science Writer'],
    difficulty: 'Medium',
    demand: 'Medium',
    salaryPotential: 'Medium'
  },
  { 
    id: 'BSc_Agri', 
    name: 'B.Sc Agriculture / Allied', 
    tags: ['agriculture','bio','farming','horticulture'], 
    suitableGroups: ['pcb','voc_agri'], 
    topColleges: ['Agriculture Universities','TNAU','PAU','GBPUAT'], 
    recommendedAvg: 55, 
    description: 'Agricultural science, crop production, soil science, plant pathology, and agribusiness.', 
    careerPaths: ['Agricultural Scientist', 'Farm Manager', 'Agri-Business Consultant', 'Horticulturist'],
    difficulty: 'Medium',
    demand: 'Medium',
    salaryPotential: 'Medium'
  },
  { 
    id: 'BArchDesign', 
    name: 'B.Des / Fashion / Design', 
    tags: ['design','creative','fashion','art','ui-ux'], 
    suitableGroups: ['arts','pcm','pcmb','voc_fashion'], 
    topColleges: ['NID','NIFT','Srishti','Pearl Academy','MIT ID'], 
    recommendedAvg: 65, 
    description: 'Design principles, visual communication, fashion design, product design, and UI/UX.', 
    careerPaths: ['Graphic Designer', 'Fashion Designer', 'UI/UX Designer', 'Product Designer'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium-High'
  },
  { 
    id: 'BA', 
    name: 'B.A (Arts & Humanities)', 
    tags: ['arts','humanities','literature','sociology','psychology'], 
    suitableGroups: ['arts','commerce_general'], 
    topColleges: ['St. Stephen\'s','Loyola','Christ University','St. Xavier\'s','Lady Shri Ram'], 
    recommendedAvg: 50, 
    description: 'Humanities subjects, literature, sociology, political science, history, and philosophy.', 
    careerPaths: ['Writer', 'Journalist', 'Teacher', 'Civil Servant', 'Social Worker'],
    difficulty: 'Low',
    demand: 'Medium',
    salaryPotential: 'Medium'
  },
  { 
    id: 'LAW', 
    name: 'BA LLB / LLB (Law)', 
    tags: ['law','professional','legal','justice'], 
    suitableGroups: ['arts','commerce_general','pcm_cs'], 
    topColleges: ['NLUs','Symbiosis Law','ILS','Christ University','Amity Law'], 
    recommendedAvg: 75, 
    description: 'Constitutional law, criminal law, corporate law, litigation, and legal research.', 
    careerPaths: ['Lawyer', 'Legal Advisor', 'Judge', 'Corporate Counsel'],
    difficulty: 'High',
    demand: 'High',
    salaryPotential: 'High'
  },
  { 
    id: 'NURSING', 
    name: 'B.Sc Nursing / Nursing Courses', 
    tags: ['healthcare','nursing','medical','patient-care'], 
    suitableGroups: ['pcb','voc_nursing'], 
    topColleges: ['AIIMS','CMC Vellore','Armed Forces','RGUHS','Manipal'], 
    recommendedAvg: 65, 
    description: 'Nursing science, patient care, medical ethics, and healthcare management.', 
    careerPaths: ['Nurse', 'Nursing Educator', 'Healthcare Administrator', 'Clinical Nurse Specialist'],
    difficulty: 'Medium',
    demand: 'Very High',
    salaryPotential: 'Medium'
  },
  { 
    id: 'HOTEL', 
    name: 'Hotel Management / Hospitality', 
    tags: ['hotel','management','service','tourism','hospitality'], 
    suitableGroups: ['arts','commerce_general','voc_tourism'], 
    topColleges: ['IHM','Welcomgroup','Christ University','Amity','Oberoi Centre'], 
    recommendedAvg: 50, 
    description: 'Hospitality management, hotel operations, food service, and tourism management.', 
    careerPaths: ['Hotel Manager', 'Event Planner', 'Restaurant Manager', 'Tourism Officer'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium'
  },
  { 
    id: 'FASHION', 
    name: 'Fashion Design / Textile', 
    tags: ['fashion','design','textile','creative','apparel'], 
    suitableGroups: ['arts','voc_fashion'], 
    topColleges: ['NIFT','Pearl Academy','Symbiosis','Amity','MGD'], 
    recommendedAvg: 60, 
    description: 'Fashion design, textile technology, apparel manufacturing, and fashion marketing.', 
    careerPaths: ['Fashion Designer', 'Textile Designer', 'Fashion Stylist', 'Merchandiser'],
    difficulty: 'Medium',
    demand: 'Medium',
    salaryPotential: 'Medium'
  },
  { 
    id: 'MEDIA', 
    name: 'Journalism / Mass Communication / Multimedia', 
    tags: ['media','journalism','multimedia','communication','broadcasting'], 
    suitableGroups: ['arts','voc_media','commerce_general'], 
    topColleges: ['XIC','SIMC','IIMC','AJK MCRC','Christ University'], 
    recommendedAvg: 55, 
    description: 'Media studies, journalism, broadcasting, digital media, and communication theories.', 
    careerPaths: ['Journalist', 'Content Creator', 'Media Planner', 'Public Relations Officer'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium'
  },
  { 
    id: 'ANIMATION', 
    name: 'Animation & VFX / Game Design', 
    tags: ['animation','creative','multimedia','vfx','gaming'], 
    suitableGroups: ['arts','voc_media','pcm_cs'], 
    topColleges: ['NID','Arena Animation','MAAC','Toonz Academy','VFS'], 
    recommendedAvg: 55, 
    description: 'Animation techniques, visual effects, game design, 3D modeling, and digital art.', 
    careerPaths: ['Animator', 'VFX Artist', 'Game Designer', '3D Modeler'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium-High'
  },
  { 
    id: 'LAW_ONLY', 
    name: 'LLB (After 12th pathways via integrated courses)', 
    tags: ['law','professional','legal'], 
    suitableGroups: ['arts','commerce_general'], 
    topColleges: ['NLU / State Law Colleges','Symbiosis','Christ University'], 
    recommendedAvg: 70, 
    description: 'Integrated or direct law courses after 12th focusing on legal education and practice.', 
    careerPaths: ['Lawyer', 'Legal Advisor', 'Corporate Counsel', 'Legal Researcher'],
    difficulty: 'High',
    demand: 'High',
    salaryPotential: 'High'
  },
  { 
    id: 'DIPLOMA', 
    name: 'Diploma / Polytechnic (Engineering Vocational)', 
    tags: ['diploma','polytechnic','vocational','technical'], 
    suitableGroups: ['voc_ct','voc_electrical','voc_mech','voc_auto'], 
    topColleges: ['Polytechnic Colleges','ITI','Govt Polytechnics'], 
    recommendedAvg: 45, 
    description: 'Practical engineering diplomas and skill-based technical training programs.', 
    careerPaths: ['Technician', 'Junior Engineer', 'Service Engineer', 'Technical Supervisor'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium'
  },
  { 
    id: 'BFT', 
    name: 'B.Sc Food Technology / Nutrition', 
    tags: ['food','nutrition','science','health','dietetics'], 
    suitableGroups: ['pcb','voc_food'], 
    topColleges: ['Food Tech Colleges','Agriculture Universities','Mumbai University'], 
    recommendedAvg: 55, 
    description: 'Food technology, nutrition science, food processing, and quality control.', 
    careerPaths: ['Food Technologist', 'Nutritionist', 'Quality Control Manager', 'Food Safety Officer'],
    difficulty: 'Medium',
    demand: 'Medium',
    salaryPotential: 'Medium'
  },
  { 
    id: 'DATA', 
    name: 'B.Sc / B.Tech Data Science & AI', 
    tags: ['data','ai','cs','maths','analytics'], 
    suitableGroups: ['pcm','pcm_cs','commerce_stats'], 
    topColleges: ['IITs','IIITs','Amrita','VIT','SRM'], 
    recommendedAvg: 75, 
    description: 'Data science, statistics, machine learning, artificial intelligence, and analytics.', 
    careerPaths: ['Data Scientist', 'AI Engineer', 'Business Analyst', 'Machine Learning Engineer'],
    difficulty: 'High',
    demand: 'Very High',
    salaryPotential: 'High'
  },
  { 
    id: 'PSYCH', 
    name: 'B.Sc / B.A Psychology', 
    tags: ['psychology','human-behavior','counseling','research'], 
    suitableGroups: ['arts','pcb','pcmb'], 
    topColleges: ['Lady Shri Ram','Christ University','St. Xavier\'s','Fergusson','Amity'], 
    recommendedAvg: 60, 
    description: 'Human behavior, cognitive processes, psychological assessment, and counseling techniques.', 
    careerPaths: ['Psychologist', 'Counselor', 'HR Specialist', 'Clinical Researcher'],
    difficulty: 'Medium',
    demand: 'High',
    salaryPotential: 'Medium'
  },
  { 
    id: 'ECO', 
    name: 'B.A / B.Sc Economics', 
    tags: ['economics','finance','analysis','policy'], 
    suitableGroups: ['commerce_general','commerce_bm','commerce_stats','arts'], 
    topColleges: ['SRCC','Loyola','St. Stephen\'s','Christ University','St. Xavier\'s'], 
    recommendedAvg: 70, 
    description: 'Economic theories, statistical analysis, policy evaluation, and financial markets.', 
    careerPaths: ['Economist', 'Financial Analyst', 'Policy Analyst', 'Researcher'],
    difficulty: 'High',
    demand: 'High',
    salaryPotential: 'High'
  }
];

// Group list for dropdown (consistent keys)
const groupsList = [
  { key: 'pcb', label: 'Science – Biology (PCB)', subjects: ['Botany / Biology', 'Chemistry', 'Physics', 'English/Language'] },
  { key: 'pcm', label: 'Science – Maths (PCM)', subjects: ['Mathematics', 'Physics', 'Chemistry', 'English/Language'] },
  { key: 'pcmb', label: 'Science – Bio-Maths (PCMB)', subjects: ['Mathematics', 'Biology', 'Physics', 'Chemistry'] },
  { key: 'pcm_cs', label: 'Science – Maths + Computer Science (PCM + CS)', subjects: ['Mathematics', 'Physics', 'Chemistry', 'Computer Science'] },
  { key: 'bio_cs', label: 'Science – Biology + Computer Science', subjects: ['Biology', 'Chemistry', 'Computer Science', 'English/Language'] },
  { key: 'commerce_general', label: 'Commerce – General', subjects: ['Accountancy', 'Economics', 'Business Studies', 'English/Language'] },
  { key: 'commerce_cs', label: 'Commerce – Computer Science', subjects: ['Accountancy', 'Economics', 'Business Studies', 'Computer Science'] },
  { key: 'commerce_bm', label: 'Commerce – Business Maths', subjects: ['Accountancy', 'Economics', 'Business Maths', 'English/Language'] },
  { key: 'commerce_stats', label: 'Commerce – Statistics', subjects: ['Accountancy', 'Economics', 'Statistics', 'English/Language'] },
  { key: 'arts', label: 'Arts / Humanities', subjects: ['History', 'Political Science', 'Sociology', 'English/Language'] },
  { key: 'voc_agri', label: 'Vocational – Agriculture', subjects: ['Agriculture', 'Biology', 'Chemistry', 'English/Language'] },
  { key: 'voc_nursing', label: 'Vocational – Nursing', subjects: ['Biology', 'Health Science', 'English/Language', 'Home Science'] },
  { key: 'voc_ct', label: 'Vocational – Computer Technology', subjects: ['Computer Science', 'Maths', 'English/Language', 'Elective'] },
  { key: 'voc_electrical', label: 'Vocational – Electrical', subjects: ['Physics', 'Maths', 'Electrical Technology', 'English/Language'] },
  { key: 'voc_mech', label: 'Vocational – Mechanical', subjects: ['Physics', 'Maths', 'Workshop', 'English/Language'] },
  { key: 'voc_auto', label: 'Vocational – Automobile', subjects: ['Physics', 'Maths', 'Auto Tech', 'English/Language'] },
  { key: 'voc_fashion', label: 'Vocational – Fashion & Textile', subjects: ['Fashion', 'Home Science', 'Art/Design', 'English/Language'] },
  { key: 'voc_media', label: 'Vocational – Multimedia & Photography', subjects: ['Multimedia', 'Art', 'English/Language', 'Elective'] },
  { key: 'voc_tourism', label: 'Vocational – Tourism', subjects: ['Tourism', 'English/Language', 'Geography', 'Elective'] },
  { key: 'voc_office', label: 'Vocational – Office Management', subjects: ['Business Studies', 'Computer Science', 'English/Language', 'Elective'] }
];
</script>

<!-- App logic -->
<script>
/* Helper utilities */
function $(sel) { return document.querySelector(sel); }
function create(tag, attrs = {}, text = '') { 
  const el = document.createElement(tag); 
  for (const k in attrs) el.setAttribute(k, attrs[k]); 
  if (text) el.textContent = text; 
  return el; 
}
function clamp(v, min, max) { return Math.max(min, Math.min(max, v)); }

/* Populate group dropdown */
const groupSelect = document.getElementById('groupSelect');
groupsList.forEach(g => {
  const opt = document.createElement('option');
  opt.value = g.key;
  opt.textContent = g.label;
  groupSelect.appendChild(opt);
});

/* Interest cloud */
const interests = [
  'Programming', 'Design', 'Medicine & Health', 'Business/Finance', 'Law', 
  'Research', 'Agriculture', 'Hospitality', 'Media & Journalism', 'Animation', 
  'AI & Data Science', 'Automobile', 'Electronics', 'Management', 'Teaching',
  'Art & Creativity', 'Psychology', 'Environment', 'Sports', 'Music'
];
const interestCloud = document.getElementById('interestCloud');
const selectedInterests = new Set();

// Create interest cloud with weighted sizes
interests.forEach(i => {
  const interestItem = create('div', { class: 'interest-item' }, i);
  interestItem.addEventListener('click', () => {
    if (selectedInterests.has(i)) {
      selectedInterests.delete(i);
      interestItem.classList.remove('selected');
    } else {
      selectedInterests.add(i);
      interestItem.classList.add('selected');
    }
    updateStats();
  });
  interestCloud.appendChild(interestItem);
});

/* Subjects inputs update when group changes */
const subjectsContainer = document.getElementById('subjectsContainer');
let currentSubjects = []; // array of subject keys

groupSelect.addEventListener('change', () => {
  subjectsContainer.innerHTML = '';
  const groupKey = groupSelect.value;
  if (!groupKey) return;
  
  const group = groupsList.find(g => g.key === groupKey);
  currentSubjects = group.subjects.slice(0, 4); // take up to 4
  
  currentSubjects.forEach((sub, idx) => {
    const div = create('div', { class: 'subject-input-group mb-2' });
    const label = create('label', { class: 'form-label small mb-1' }, sub);
    const input = create('input', { 
      type: 'number', 
      class: 'form-control', 
      id: `sub_${idx}`, 
      placeholder: `${sub} marks (0-100)`
    });
    input.min = 0; 
    input.max = 100; 
    input.step = 0.01;
    
    // Add score indicator
    const scoreSpan = create('span', { class: 'subject-score', id: `score_${idx}` }, '');
    
    input.addEventListener('input', updateStats);
    
    div.appendChild(label); 
    div.appendChild(input);
    div.appendChild(scoreSpan);
    subjectsContainer.appendChild(div);
  });
  
  updateStats();
});

/* Update stats (average, total, percentage) */
function updateStats() {
  const marks = [];
  for (let i = 0; i < 4; i++) {
    const el = document.getElementById(`sub_${i}`);
    if (el) {
      const v = parseFloat(el.value);
      marks.push(isNaN(v) ? null : clamp(v, 0, 100));
      
      // Update subject score indicator
      const scoreEl = document.getElementById(`score_${i}`);
      if (scoreEl && !isNaN(v)) {
        scoreEl.textContent = `${v}%`;
        if (v >= 90) scoreEl.style.color = 'var(--success)';
        else if (v >= 75) scoreEl.style.color = 'var(--accent)';
        else if (v >= 60) scoreEl.style.color = 'var(--warning)';
        else scoreEl.style.color = 'var(--danger)';
      } else if (scoreEl) {
        scoreEl.textContent = '';
      }
    } else {
      marks.push(null);
    }
  }
  
  const validMarks = marks.filter(m => typeof m === 'number' && !isNaN(m));
  const total = validMarks.length ? validMarks.reduce((a, b) => a + b, 0) : 0;
  const avg = validMarks.length ? total / validMarks.length : 0;
  const percentage = (total / (validMarks.length * 100)) * 100;
  
  document.getElementById('avgMarks').textContent = avg.toFixed(1);
  document.getElementById('totalMarks').textContent = total.toFixed(0);
  document.getElementById('percentage').textContent = `${percentage.toFixed(1)}%`;
  
  // Update percentage color
  const percentageEl = document.getElementById('percentage');
  if (percentage >= 90) percentageEl.style.color = 'var(--success)';
  else if (percentage >= 75) percentageEl.style.color = 'var(--accent)';
  else if (percentage >= 60) percentageEl.style.color = 'var(--warning)';
  else percentageEl.style.color = 'var(--danger)';
}

/* Preview DB JSON */
const dbPreview = document.getElementById('dbPreview');
function updateDbPreview() { 
  dbPreview.textContent = JSON.stringify({ groups: groupsList, courses: courseDB }, null, 2); 
}
updateDbPreview();

/* Enhanced Recommendation engine (AI-like local) */
/* Scoring strategy:
   - base suitability: course suitableGroups contains the selected group => +weight
   - marks factor: average marks normalized to 0-1 => multiplied by (1 - course.recommendedAvgFactor)
   - interest factor: if any interest tag matches course.tags => +weight per match
   - tag match for subjects: if course tags include subject-related keywords (maths, bio, cs, etc.)
   - career preference match
   - penalty if avg << recommendedAvg
   Final score 0..100; rank descending.
*/
function recommendCourses({ groupKey, marksArr, interestsArr, careerPref, notes }) {
  // compute average marks
  const validMarks = marksArr.filter(m => typeof m === 'number' && !isNaN(m));
  const avg = validMarks.length ? (validMarks.reduce((a, b) => a + b, 0) / validMarks.length) : 0;
  const avgNorm = clamp(avg / 100, 0, 1); // 0-1

  const results = courseDB.map(course => {
    let score = 0;
    let reasons = [];
    let matchDetails = {
      group: 0,
      marks: 0,
      interests: 0,
      career: 0,
      subjects: 0
    };

    // base group suitability
    const groupSuitable = course.suitableGroups.includes(groupKey);
    if (groupSuitable) { 
      score += 30; 
      matchDetails.group = 30;
      reasons.push('Course fits your selected stream'); 
    } else { 
      score += 5; 
      matchDetails.group = 5;
      reasons.push('Course not typical for your stream but still possible'); 
    }

    // marks vs recommendedAvg
    const rec = clamp(course.recommendedAvg / 100, 0, 1);
    // if avg >= recommendedAvg -> positive boost; else penalize
    const diff = avgNorm - rec;
    const marksContribution = avgNorm * 30;
    score += marksContribution;
    matchDetails.marks = marksContribution;
    
    if (diff >= 0) {
      score += Math.min(15, diff * 100 * 0.5); // small boost if well above recommended
      matchDetails.marks += Math.min(15, diff * 100 * 0.5);
      reasons.push(`Your average (${avg.toFixed(1)}%) meets or exceeds expected (${course.recommendedAvg}%)`);
    } else {
      // penalty grows if much lower
      const pen = Math.abs(diff) * 100 * 0.6;
      score -= pen;
      matchDetails.marks -= pen;
      reasons.push(`Your average (${avg.toFixed(1)}%) is below recommended (${course.recommendedAvg}%)`);
    }

    // interest matching
    let interestMatches = 0;
    interestsArr.forEach(it => {
      const itLow = it.toLowerCase();
      course.tags.forEach(t => {
        if (t.toLowerCase().includes(itLow) || itLow.includes(t.toLowerCase())) interestMatches++;
      });
      // also check common synonyms
      if (itLow.includes('program') && course.tags.includes('cs')) interestMatches++;
      if (itLow.includes('data') && course.tags.includes('data')) interestMatches++;
      if (itLow.includes('design') && course.tags.includes('design')) interestMatches++;
      if (itLow.includes('medicine') && course.tags.includes('medical')) interestMatches++;
      if (itLow.includes('business') && course.tags.includes('business')) interestMatches++;
      if (itLow.includes('psychology') && course.tags.includes('psychology')) interestMatches++;
    });
    
    if (interestMatches > 0) {
      const interestBoost = Math.min(20, interestMatches * 8);
      score += interestBoost;
      matchDetails.interests = interestBoost;
      reasons.push(`Matches your interests (${interestMatches} match${interestMatches > 1 ? 'es' : ''})`);
    }

    // career preference matching
    if (careerPref) {
      let careerMatch = false;
      switch (careerPref) {
        case 'corporate':
          if (course.tags.includes('business') || course.tags.includes('management') || 
              course.tags.includes('finance') || course.tags.includes('cs')) {
            score += 10;
            matchDetails.career = 10;
            careerMatch = true;
          }
          break;
        case 'entrepreneur':
          if (course.tags.includes('business') || course.tags.includes('management')) {
            score += 12;
            matchDetails.career = 12;
            careerMatch = true;
          }
          break;
        case 'research':
          if (course.tags.includes('research') || course.tags.includes('science')) {
            score += 10;
            matchDetails.career = 10;
            careerMatch = true;
          }
          break;
        case 'government':
          // Many courses can lead to government jobs
          score += 5;
          matchDetails.career = 5;
          careerMatch = true;
          break;
        case 'creative':
          if (course.tags.includes('creative') || course.tags.includes('design') || 
              course.tags.includes('art') || course.tags.includes('media')) {
            score += 12;
            matchDetails.career = 12;
            careerMatch = true;
          }
          break;
        case 'social':
          if (course.tags.includes('social') || course.tags.includes('psychology') || 
              course.tags.includes('healthcare') || course.tags.includes('education')) {
            score += 10;
            matchDetails.career = 10;
            careerMatch = true;
          }
          break;
      }
      if (careerMatch) {
        reasons.push(`Aligns with your career preference (${careerPref})`);
      }
    }

    // subject-specific boost: if user scored high in relevant subjects (maths/biology/cs)
    // approximate: find keywords in course.tags and inspect subject inputs
    let subjectBoost = 0;
    course.tags.forEach(tag => {
      const tagLow = tag.toLowerCase();
      if (tagLow.includes('math')) {
        // find maths input value if exists
        const mathsInput = findSubjectValue(['Mathematics', 'Maths', 'Mathematics (optional)', 'Business Maths']);
        if (mathsInput !== null) subjectBoost += mathsInput / 100 * 6;
      }
      if (tagLow.includes('bio')) {
        const bioInput = findSubjectValue(['Biology', 'Botany / Biology']);
        if (bioInput !== null) subjectBoost += bioInput / 100 * 6;
      }
      if (tagLow.includes('cs') || tagLow.includes('program') || tagLow.includes('data') || tagLow.includes('ai')) {
        const csInput = findSubjectValue(['Computer Science', 'Multimedia', 'Informatics', 'Computer Technology']);
        if (csInput !== null) subjectBoost += csInput / 100 * 6;
      }
      if (tagLow.includes('elect') || tagLow.includes('physics')) {
        const phyInput = findSubjectValue(['Physics', 'Physical Science']);
        if (phyInput !== null) subjectBoost += phyInput / 100 * 4;
      }
      if (tagLow.includes('chem')) {
        const chemInput = findSubjectValue(['Chemistry']);
        if (chemInput !== null) subjectBoost += chemInput / 100 * 4;
      }
    });
    score += subjectBoost;
    matchDetails.subjects = subjectBoost;
    if (subjectBoost > 0) reasons.push(`Subject strengths contributed (+${subjectBoost.toFixed(1)})`);

    // note-based tweaks: check for keywords in notes
    const note = (notes || '').toLowerCase();
    if (note.includes('abroad')) { 
      score += 5; 
      reasons.push('You mentioned "abroad" — some courses (engineering, data, design) are suitable for overseas study'); 
    }
    if (note.includes('design')) { 
      if (course.tags.includes('design')) { 
        score += 6; 
        reasons.push('Note preference for design matched'); 
      } 
    }
    if (note.includes('engineering')) { 
      if (course.tags.includes('engineering')) { 
        score += 5; 
        reasons.push('Note preference for engineering matched'); 
      } 
    }
    if (note.includes('medical') || note.includes('doctor')) { 
      if (course.tags.includes('medical')) { 
        score += 5; 
        reasons.push('Note preference for medical field matched'); 
      } 
    }

    // clamp & final formatting
    const finalScore = clamp(Math.round(score), 0, 100);
    return {
      courseId: course.id,
      courseName: course.name,
      score: finalScore,
      reasons,
      matchDetails,
      topColleges: course.topColleges,
      recommendedAvg: course.recommendedAvg,
      description: course.description,
      tags: course.tags,
      careerPaths: course.careerPaths,
      difficulty: course.difficulty,
      demand: course.demand,
      salaryPotential: course.salaryPotential
    };
  });

  // sort by score desc, tiebreaker by recommendedAvg closeness
  results.sort((a, b) => {
    if (b.score !== a.score) return b.score - a.score;
    return Math.abs(a.recommendedAvg - avg) - Math.abs(b.recommendedAvg - avg);
  });

  return { avg, results };
}

/* Helper to read subjects inputs by name variants */
function findSubjectValue(names) {
  // check currentSubjects inputs
  for (let i = 0; i < 4; i++) {
    const el = document.getElementById(`sub_${i}`);
    if (!el) continue;
    const label = el.previousSibling ? el.previousSibling.textContent : '';
    for (const name of Array.isArray(names) ? names : [names]) {
      if (label.toLowerCase().includes(name.toLowerCase())) {
        const v = parseFloat(el.value);
        if (!isNaN(v)) return clamp(v, 0, 100);
      }
    }
  }
  return null;
}

/* UI: recommend button */
const recommendBtn = document.getElementById('recommendBtn');
const resultsContainer = document.getElementById('resultsContainer');
const searchInput = document.getElementById('searchInput');
const historySaved = document.getElementById('historySaved');
const saveResultBtn = document.getElementById('saveResultBtn');
const downloadReportBtn = document.getElementById('downloadReportBtn');
const showDetails = document.getElementById('showDetails');
const aiInsightText = document.getElementById('aiInsightText');
let lastRecommendation = null;

recommendBtn.addEventListener('click', () => {
  const groupKey = groupSelect.value;
  if (!groupKey) { alert('Please select your 12th group'); return; }
  const marks = [];
  for (let i = 0; i < 4; i++) {
    const el = document.getElementById(`sub_${i}`);
    if (el) {
      const v = parseFloat(el.value);
      marks.push(isNaN(v) ? null : clamp(v, 0, 100));
    } else marks.push(null);
  }
  // interests arr
  const interestsArr = Array.from(selectedInterests);
  const careerPref = document.getElementById('careerPref').value;
  const notes = document.getElementById('notes').value || '';

  const out = recommendCourses({ groupKey, marksArr: marks, interestsArr, careerPref, notes });
  lastRecommendation = { 
    groupKey, 
    marks, 
    interests: interestsArr, 
    careerPref,
    notes, 
    avg: out.avg, 
    time: Date.now(), 
    results: out.results 
  };

  renderResults(out.results, out.avg);
  updateAIInsight(out.results, out.avg, groupKey, interestsArr, careerPref);
  
  // scroll
  window.scrollTo({ top: 0, behavior: 'smooth' });
  // show db preview updated
  updateDbPreview();
});

/* Update AI Insight based on results */
function updateAIInsight(results, avg, groupKey, interests, careerPref) {
  let insight = '';
  
  if (results.length === 0) {
    insight = 'No courses match your criteria. Try adjusting your marks or interests.';
  } else {
    const topCourse = results[0];
    const groupLabel = groupsList.find(g => g.key === groupKey).label;
    
    insight = `Based on your ${groupLabel} background with ${avg.toFixed(1)}% average`;
    
    if (interests.length > 0) {
      insight += ` and interests in ${interests.slice(0, 3).join(', ')}`;
    }
    
    if (careerPref) {
      insight += `, pursuing a career in ${careerPref}`;
    }
    
    insight += `, we recommend <strong>${topCourse.courseName}</strong> as your top match (${topCourse.score}% fit). `;
    
    if (topCourse.score >= 80) {
      insight += 'This is an excellent match for your profile!';
    } else if (topCourse.score >= 60) {
      insight += 'This is a good match for your skills and interests.';
    } else {
      insight += 'Consider improving relevant subject scores for better alignment.';
    }
    
    // Add trend indicator if available
    if (avg < 60) {
      insight += ' <span class="trend-indicator trend-down">Consider foundation courses to strengthen basics.</span>';
    } else if (avg >= 85) {
      insight += ' <span class="trend-indicator trend-up">You have competitive scores for top colleges!</span>';
    }
  }
  
  aiInsightText.innerHTML = insight;
}

/* Render results */
function renderResults(results, avg) {
  resultsContainer.innerHTML = '';
  const header = create('div', { class: 'col-12 mb-2' }, '');
  header.innerHTML = `<div class="small-muted">Average Marks: <strong>${avg.toFixed(2)}%</strong> | Showing ${Math.min(results.length, 10)} of ${results.length} courses</div>`;
  resultsContainer.appendChild(header);

  results.slice(0, 10).forEach((r, idx) => {
    const col = create('div', { class: 'col-12' });
    const item = create('div', { class: 'result-item position-relative' });
    
    // Add match badge for top 3
    if (idx < 3) {
      const badge = create('span', { class: `course-badge badge ${idx === 0 ? 'bg-success' : idx === 1 ? 'bg-primary' : 'bg-warning'}` }, 
                         idx === 0 ? 'Best Match' : idx === 1 ? 'Great Match' : 'Good Match');
      item.appendChild(badge);
    }
    
    const titleRow = create('div', { class: 'd-flex justify-content-between align-items-start mb-1' });
    const left = create('div', {}, '');
    left.innerHTML = `<div class="fw-semibold">${idx + 1}. ${r.courseName}</div>
                      <div class="small muted">${r.tags.join(' • ')}</div>`;
    const right = create('div', {}, '');
    right.innerHTML = `<div class="fs-4 fw-bold text-primary">${r.score}</div><div class="small-muted text-end">Match %</div>`;

    titleRow.appendChild(left);
    titleRow.appendChild(right);
    item.appendChild(titleRow);

    // Progress bar for match breakdown (if show details is checked)
    if (showDetails.checked) {
      const progressContainer = create('div', { class: 'mt-2' });
      
      const matchLabels = ['Stream', 'Marks', 'Interests', 'Career', 'Subjects'];
      const matchValues = [
        r.matchDetails.group,
        r.matchDetails.marks,
        r.matchDetails.interests,
        r.matchDetails.career,
        r.matchDetails.subjects
      ];
      
      matchLabels.forEach((label, i) => {
        if (matchValues[i] > 0) {
          const progressWrapper = create('div', { class: 'd-flex align-items-center mb-1' });
          const labelSpan = create('span', { class: 'small me-2', style: 'width: 80px;' }, label);
          const progress = create('div', { class: 'progress flex-grow-1' });
          const progressBar = create('div', { 
            class: 'progress-bar', 
            role: 'progressbar', 
            style: `width: ${matchValues[i]}%`,
            'aria-valuenow': matchValues[i],
            'aria-valuemin': 0,
            'aria-valuemax': 100
          });
          
          progress.appendChild(progressBar);
          progressWrapper.appendChild(labelSpan);
          progressWrapper.appendChild(progress);
          progressContainer.appendChild(progressWrapper);
        }
      });
      
      item.appendChild(progressContainer);
    }

    const desc = create('div', { class: 'explain mb-2' }, r.description);
    item.appendChild(desc);

    // Course metadata
    const metaRow = create('div', { class: 'd-flex justify-content-between small mb-2' });
    metaRow.innerHTML = `
      <div><strong>Difficulty:</strong> ${r.difficulty}</div>
      <div><strong>Demand:</strong> ${r.demand}</div>
      <div><strong>Salary Potential:</strong> ${r.salaryPotential}</div>
    `;
    item.appendChild(metaRow);

    // Career paths
    if (r.careerPaths && r.careerPaths.length > 0) {
      const careerDiv = create('div', { class: 'mb-2' });
      careerDiv.innerHTML = `<div class="small fw-semibold">Career Paths:</div>`;
      const careerChips = create('div', {}, '');
      r.careerPaths.slice(0, 4).forEach(path => {
        const chip = create('span', { class: 'chip' }, path);
        careerChips.appendChild(chip);
      });
      careerDiv.appendChild(careerChips);
      item.appendChild(careerDiv);
    }

    const chips = create('div', {}, '');
    r.topColleges.slice(0, 3).forEach(c => {
      const ch = create('span', { class: 'chip' }, c);
      chips.appendChild(ch);
    });
    item.appendChild(chips);

    // reasons and action
    if (showDetails.checked) {
      const reasonsList = create('ul', { class: 'mt-2 small' }, '');
      r.reasons.slice(0, 3).forEach(reason => {
        const li = create('li', {}, reason);
        reasonsList.appendChild(li);
      });
      item.appendChild(reasonsList);
    }

    const actionRow = create('div', { class: 'mt-2 d-flex gap-2' });
    const viewBtn = create('button', { class: 'btn btn-sm btn-outline-primary' }, 'View Details');
    viewBtn.addEventListener('click', () => openCourseModal(r));
    const applyBtn = create('button', { class: 'btn btn-sm btn-primary' }, 'See Colleges & Cutoffs');
    applyBtn.addEventListener('click', () => alert(`Top colleges for ${r.courseName}:\n\n${r.topColleges.join('\n')}`));
    actionRow.appendChild(viewBtn);
    actionRow.appendChild(applyBtn);
    item.appendChild(actionRow);

    col.appendChild(item);
    resultsContainer.appendChild(col);
  });
}

/* Toggle details view */
showDetails.addEventListener('change', () => {
  if (lastRecommendation) {
    renderResults(lastRecommendation.results, lastRecommendation.avg);
  }
});

/* openCourseModal - enhanced details view */
function openCourseModal(r) {
  const modalHtml = `
    <div class="modal fade" id="courseModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">${r.courseName}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <p><strong>Description:</strong> ${r.description}</p>
            <p><strong>Recommended Average Marks:</strong> ${r.recommendedAvg}%</p>
            <p><strong>Difficulty:</strong> ${r.difficulty}</p>
            <p><strong>Job Demand:</strong> ${r.demand}</p>
            <p><strong>Salary Potential:</strong> ${r.salaryPotential}</p>
            
            <h6>Career Paths:</h6>
            <div class="mb-3">
              ${r.careerPaths ? r.careerPaths.map(path => `<span class="badge bg-primary me-1 mb-1">${path}</span>`).join('') : 'Not specified'}
            </div>
            
            <h6>Top Colleges:</h6>
            <ul>
              ${r.topColleges.map(college => `<li>${college}</li>`).join('')}
            </ul>
            
            <h6>Match Reasons:</h6>
            <ul>
              ${r.reasons.map(reason => `<li>${reason}</li>`).join('')}
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  `;
  
  // Remove existing modal if any
  const existingModal = document.getElementById('courseModal');
  if (existingModal) {
    existingModal.remove();
  }
  
  // Add new modal to body
  document.body.insertAdjacentHTML('beforeend', modalHtml);
  
  // Show the modal
  const courseModal = new bootstrap.Modal(document.getElementById('courseModal'));
  courseModal.show();
}

/* Save & History logic */
const STORAGE_KEY = 'course_finder_history_v2';
function loadHistory() {
  const raw = localStorage.getItem(STORAGE_KEY);
  let arr = [];
  try { 
    arr = raw ? JSON.parse(raw) : []; 
  } catch (e) { 
    arr = []; 
    localStorage.removeItem(STORAGE_KEY); 
  }
  historySaved.innerHTML = '';
  if (arr.length === 0) { 
    historySaved.innerHTML = '<div class="p-2 small-muted">No saved searches.</div>'; 
    return; 
  }
  arr.forEach((h, i) => {
    const d = create('div', { class: 'mb-2 small' });
    d.innerHTML = `<div><strong>${h.groupLabel}</strong> • Avg: ${h.avg.toFixed(1)}% • ${new Date(h.ts).toLocaleString()}</div>
                   <div class="mt-1">
                     <button class="btn btn-sm btn-outline-secondary loadBtn" data-idx="${i}">Load</button> 
                     <button class="btn btn-sm btn-outline-danger delBtn" data-idx="${i}">Delete</button>
                   </div>`;
    historySaved.appendChild(d);
  });

  // attach handlers
  historySaved.querySelectorAll('.loadBtn').forEach(btn => btn.addEventListener('click', e => {
    const idx = parseInt(e.target.dataset.idx);
    const arr = JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
    const h = arr[idx];
    if (!h) return;
    // load into UI
    groupSelect.value = h.groupKey;
    groupSelect.dispatchEvent(new Event('change'));
    // wait small delay to ensure inputs created
    setTimeout(() => {
      for (let i = 0; i < 4; i++) {
        const el = document.getElementById(`sub_${i}`);
        if (el) el.value = h.marks[i] || '';
      }
    }, 100);
    // set interests
    selectedInterests.clear();
    // reset interest buttons
    document.querySelectorAll('#interestCloud .interest-item').forEach(item => {
      item.classList.remove('selected');
      if (h.interests.includes(item.textContent)) {
        item.classList.add('selected');
        selectedInterests.add(item.textContent);
      }
    });
    // set career preference
    document.getElementById('careerPref').value = h.careerPref || '';
    document.getElementById('notes').value = h.notes || '';
    // run recommendation
    recommendBtn.click();
  }));
  
  historySaved.querySelectorAll('.delBtn').forEach(btn => btn.addEventListener('click', e => {
    const idx = parseInt(e.target.dataset.idx);
    const arr = JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
    arr.splice(idx, 1);
    localStorage.setItem(STORAGE_KEY, JSON.stringify(arr));
    loadHistory();
  }));
}
loadHistory();

document.getElementById('saveResultBtn').addEventListener('click', () => {
  if (!lastRecommendation) { alert('Run a recommendation first'); return; }
  const raw = localStorage.getItem(STORAGE_KEY);
  const arr = raw ? JSON.parse(raw) : [];
  const label = (groupsList.find(g => g.key === lastRecommendation.groupKey) || { label: 'Group' }).label;
  const item = {
    ts: Date.now(),
    groupKey: lastRecommendation.groupKey,
    groupLabel: label,
    marks: lastRecommendation.marks,
    interests: lastRecommendation.interests,
    careerPref: lastRecommendation.careerPref,
    notes: lastRecommendation.notes,
    avg: lastRecommendation.avg,
    results: lastRecommendation.results.map(r => ({ id: r.courseId, name: r.courseName, score: r.score }))
  };
  arr.unshift(item);
  if (arr.length > 50) arr.splice(50);
  localStorage.setItem(STORAGE_KEY, JSON.stringify(arr));
  loadHistory();
  alert('Result saved locally');
});

/* Download report */
document.getElementById('downloadReportBtn').addEventListener('click', () => {
  if (!lastRecommendation) { alert('Run recommendation first'); return; }
  const data = {
    timestamp: new Date(lastRecommendation.time).toISOString(),
    group: groupsList.find(g => g.key === lastRecommendation.groupKey).label,
    marks: lastRecommendation.marks,
    interests: lastRecommendation.interests,
    careerPreference: lastRecommendation.careerPref,
    avg: lastRecommendation.avg,
    results: lastRecommendation.results.slice(0, 10)
  };
  const text = JSON.stringify(data, null, 2);
  const blob = new Blob([text], { type: 'application/json' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = 'course_recommendation_report.json';
  document.body.appendChild(a);
  a.click();
  a.remove();
  URL.revokeObjectURL(url);
});

/* Clear button */
document.getElementById('clearBtn').addEventListener('click', () => {
  groupSelect.value = '';
  subjectsContainer.innerHTML = '';
  selectedInterests.clear();
  document.querySelectorAll('#interestCloud .interest-item').forEach(item => {
    item.classList.remove('selected');
  });
  document.getElementById('careerPref').value = '';
  document.getElementById('notes').value = '';
  resultsContainer.innerHTML = '';
  lastRecommendation = null;
  aiInsightText.textContent = 'Enter your details to get personalized course recommendations.';
  updateStats();
});

/* search filter */
searchInput.addEventListener('input', () => {
  const q = searchInput.value.trim().toLowerCase();
  // filter courseDB and re-render a mini list in resultsContainer if empty
  if (!q) {
    // re-render last results if exist
    if (lastRecommendation) renderResults(lastRecommendation.results, lastRecommendation.avg);
    return;
  }
  const matched = courseDB.filter(c => 
    c.name.toLowerCase().includes(q) || 
    c.tags.join(' ').toLowerCase().includes(q) ||
    (c.careerPaths && c.careerPaths.some(path => path.toLowerCase().includes(q)))
  );
  // show matched list
  const fakeResults = matched.map(c => ({ 
    courseId: c.id, 
    courseName: c.name, 
    score: 60, 
    reasons: [`Matched search "${q}"`], 
    topColleges: c.topColleges, 
    description: c.description, 
    recommendedAvg: c.recommendedAvg, 
    tags: c.tags,
    careerPaths: c.careerPaths,
    difficulty: c.difficulty,
    demand: c.demand,
    salaryPotential: c.salaryPotential,
    matchDetails: {
      group: 20,
      marks: 20,
      interests: 10,
      career: 5,
      subjects: 5
    }
  }));
  renderResults(fakeResults, 0);
  aiInsightText.textContent = `Showing ${matched.length} courses matching "${q}"`;
});

/* Export DB button */
document.getElementById('exportDbBtn').addEventListener('click', () => {
  const json = { groups: groupsList, courses: courseDB };
  const blob = new Blob([JSON.stringify(json, null, 2)], { type: 'application/json' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = 'course_db.json';
  document.body.appendChild(a);
  a.click();
  a.remove();
  URL.revokeObjectURL(url);
});

/* Dark mode toggle */
document.getElementById('toggleDark').addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
  const toggleBtn = document.getElementById('toggleDark');
  if (document.body.classList.contains('dark-mode')) {
    toggleBtn.innerHTML = '<i class="bi bi-sun"></i> Light Mode';
  } else {
    toggleBtn.innerHTML = '<i class="bi bi-moon"></i> Dark Mode';
  }
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>