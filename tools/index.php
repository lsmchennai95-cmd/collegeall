<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Free Online Student & Developer Tools | CollegeAll</title>
    <meta name="description" content="Access a collection of free online tools including age calculator, password generator, word and character counter, API tester, BMI calculator, box-shadow generator, color palette creator, countdown timer, data converter, EMI calculator, gradient generator, image compressor, pixel art maker, QR generator, resume builder, sticker maker, and stopwatch.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Free Online Student & Developer Tools | CollegeAll">
    <meta property="og:description" content="Access a collection of free online tools including age calculator, password generator, word and character counter, API tester, BMI calculator, box-shadow generator, color palette creator, countdown timer, data converter, EMI calculator, gradient generator, image compressor, pixel art maker, QR generator, resume builder, sticker maker, and stopwatch.">
    <meta property="og:url" content="https://collegeall.com/tools/">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Free Online Student & Developer Tools | CollegeAll">
    <meta name="twitter:description" content="Access a collection of free online tools including age calculator, password generator, word and character counter, API tester, BMI calculator, box-shadow generator, color palette creator, countdown timer, data converter, EMI calculator, gradient generator, image compressor, pixel art maker, QR generator, resume builder, sticker maker, and stopwatch.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Free Online Student & Developer Tools",
      "description": "Access a collection of free online tools including age calculator, password generator, word and character counter, API tester, BMI calculator, box-shadow generator, color palette creator, countdown timer, data converter, EMI calculator, gradient generator, image compressor, pixel art maker, QR generator, resume builder, sticker maker, and stopwatch.",
      "url": "https://collegeall.com/tools/",
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
    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <meta name="keywords" content="free online tools, age calculator, password generator, word counter, character counter, API tester, BMI calculator, box shadow generator, color palette tool, countdown timer, data converter, json to excel convertor, EMI calculator, gradient generator, image compressor, pixel art maker, QR code generator, resume builder, sticker maker, stopwatch" />    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">    <link rel="stylesheet" href="../index.css">    <style>        :root {            --primary: #004aad;            --secondary: #8b5cf6;            --success: #10b981;            --danger: #ef4444;            --warning: #f59e0b;            --info: #06b6d4;            --dark: #1f2937;            --light: #f8fafc;        }        body {            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;            min-height: 100vh;            overflow-x: hidden;        }        /* Mobile Container */        .mobile-container {            max-width: 100%;            margin: 0 auto;            min-height: 100vh;            position: relative;        }        /* Categories */        .overall-container .categories {            padding: 15px 20px;            display: flex;            gap: 10px;            overflow-x: auto;            background: white;            border-bottom: 1px solid #e5e7eb;            -webkit-overflow-scrolling: touch;        }        .overall-container .category-btn {            padding: 10px 20px;            border: 2px solid #e5e7eb;            border-radius: 25px;            background: white;            font-size: 0.9rem;            white-space: nowrap;            transition: all 0.3s ease;        }        .overall-container .category-btn.active {            background: var(--primary);            color: white;            border-color: var(--primary);        }        /* Apps Grid - Updated for Card Layout */        .overall-container .apps-grid {            padding: 20px;            display: grid;            grid-template-columns: repeat(4, 1fr);            gap: 20px;            background: #f8fafc;            min-height: calc(100vh - 400px);        }        .overall-container .app-card {            background: white;            border-radius: 16px;            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);            overflow: hidden;            transition: all 0.3s ease;            text-decoration: none;            color: inherit;            display: block;            height: fit-content;        }        .overall-container .app-card:active {            transform: scale(0.98);        }        .overall-container .app-card-header {            padding: 20px;            display: flex;            align-items: center;            gap: 15px;            border-bottom: 1px solid #f1f5f9;        }        .overall-container .app-icon-wrapper {            width: 60px;            height: 60px;            border-radius: 16px;            display: flex;            align-items: center;            justify-content: center;            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);            flex-shrink: 0;        }        .overall-container .app-icon-wrapper i {            font-size: 1.6rem;            color: white;        }        .overall-container .app-info {            flex: 1;        }        .overall-container .app-name {            font-size: 1.1rem;            font-weight: 700;            margin-bottom: 5px;            color: var(--dark);        }        .overall-container .app-description {            font-size: 0.85rem;            color: #6b7280;            line-height: 1.4;        }        .overall-container .app-stats {            display: flex;            gap: 15px;            margin-top: 10px;        }        .overall-container .stat {            display: flex;            align-items: center;            gap: 5px;            font-size: 0.8rem;            color: #6b7280;        }        .overall-container .stat i {            font-size: 0.9rem;        }        .overall-container .app-card-body {            padding: 15px 20px;            background: #f8fafc;        }        .overall-container .result-preview {            font-size: 0.85rem;            color: #4b5563;            line-height: 1.5;        }        /* Color Variants */        .bg-primary { background: var(--primary); }        .bg-success { background: var(--success); }        .bg-danger { background: var(--danger); }        .bg-warning { background: var(--warning); }        .bg-info { background: var(--info); }        .bg-purple { background: #8b5cf6; box-shadow: 2px 2px 1px black !important;}        .bg-pink { background: #ec4899; }        .bg-indigo { background: #4f46e5; }        .bg-teal { background: #14b8a6; }        .bg-orange { background: #f97316; }        .bg-cyan { background: linear-gradient(45deg, #ff00d4, #beff00, #653ff0ff) }        .bg-emerald { background: #059669; }        .bg-rose { background: #e11d48; }        .bg-amber { background: #d97706; }        .bg-lime { background: #65a30d; }        .bg-violet { background: #7c3aed; }        /* Safe area for notch phones */        @supports(padding: max(0px)) {            .overall-container .bottom-nav {                padding-bottom: max(15px, env(safe-area-inset-bottom));            }        }        /* Responsive adjustments */        @media (max-width: 480px) {            .overall-container .apps-grid {                grid-template-columns: 1fr;            }        }        @media (min-width: 496px) and (max-width: 768px) {            .mobile-container {                margin: 20px auto;                border-radius: 24px;                overflow: hidden;                min-height: calc(100vh - 40px);            }            .overall-container .apps-grid {                grid-template-columns: repeat(3, 1fr);            }        }        /* Mobile layout visible only on mobile */        @media (min-width: 768px) {            .mobile-container {                display: none !important;            }        }        /* Desktop layout hidden on mobile */        @media (max-width: 767px) {            .desktop-view {                display: none !important;            }        }        .desktop-category-title {            font-size: 1.6rem;            font-weight: 800;            margin: 20px 10px 20px 10px;            color: var(--dark);        }        .desktop-grid {            display: grid;            grid-template-columns: repeat(auto-fill, minmax(330px, 1fr));            gap: 25px;            padding: 0 10px 20px 10px;        }    </style></head>
<body>
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <div class="overall-container">
        <div class="mobile-container">

            <!-- Categories -->
            <div class="categories">
                <button class="category-btn active" data-category="all">All</button>
                <button class="category-btn" data-category="tools">Tools</button>
                <button class="category-btn" data-category="design">Design</button>
                <button class="category-btn" data-category="health">Health</button>
                <button class="category-btn" data-category="dev">Development</button>
                <button class="category-btn" data-category="creative">Creative</button>
            </div>

            <!-- Apps Grid -->
            <div class="apps-grid" id="appsGrid">
                <!-- Apps will be loaded here dynamically -->
            </div>
        </div>

        <div class="desktop-view d-none d-md-block">
            <div class="container py-4" id="desktopTools"></div>
        </div>
    </div>

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Apps data with additional details
        const apps = [
            {
                name: "Age Calculator",
                file: "Age-calculator.php",
                description: "Calculate exact age from birth date",
                icon: "bi-calendar3",
                color: "bg-primary",
                category: "tools",
                views: 1250,
                rating: 4.7,
                resultPreview: "Your age is 28 years, 5 months, and 12 days"
            },
            {
                name: "Password Generator",
                file: "Password-Generator.php",
                description: "Generate strong secure passwords",
                icon: "bi-shield-lock",
                color: "bg-success",
                category: "tools",
                views: 1980,
                rating: 4.5,
                resultPreview: "Generated: 8x!Lm#2$qP"
            },
            {
                name: "Word Counter",
                file: "Word-character-count.php",
                description: "Count words & characters",
                icon: "bi-text-paragraph",
                color: "bg-info",
                category: "tools",
                views: 2100,
                rating: 4.8,
                resultPreview: "Words: 245, Characters: 1,567"
            },
            {
                name: "API Tester",
                file: "api-tester.php",
                description: "Test API endpoints",
                icon: "bi-plug",
                color: "bg-warning",
                category: "dev",
                views: 1750,
                rating: 4.3,
                resultPreview: "Status: 200 OK, Response time: 245ms"
            },
            {
                name: "BMI Calculator",
                file: "bmi-calculator.php",
                description: "Calculate Body Mass Index",
                icon: "bi-heart-pulse",
                color: "bg-danger",
                category: "health",
                views: 1547,
                rating: 4.6,
                resultPreview: "BMI: 22.3 (Normal weight)"
            },
            {
                name: "Box Shadow Generator",
                file: "box-shadow-generator.php",
                description: "Create CSS box shadows",
                icon: "bi-border-width",
                color: "bg-purple",
                category: "design",
                views: 1893,
                rating: 4.4,
                resultPreview: "box-shadow: 0 4px 12px rgba(0,0,0,0.1)"
            },
            {
                name: "Colors Palette",
                file: "color-palette.php",
                description: "Generate color schemes",
                icon: "bi-palette",
                color: "bg-pink",
                category: "design",
                views: 1137,
                rating: 4.7,
                resultPreview: "Palette: #FF6B6B, #4ECDC4, #FFE66D, #1A535C"
            },
            {
                name: "Countdown Clock",
                file: "countdown-timer.php",
                description: "Create countdown timers",
                icon: "bi-clock",
                color: "bg-indigo",
                category: "tools",
                views: 1671,
                rating: 4.2,
                resultPreview: "Time remaining: 12 days, 5 hours, 23 minutes"
            },
            {
                name: "Json to Excel Convert",
                file: "data-convertor.php",
                description: "Convert data formats",
                icon: "bi-arrow-left-right",
                color: "bg-teal",
                category: "dev",
                views: 2543,
                rating: 4.1,
                resultPreview: "JSON to XML conversion complete"
            },
            {
                name: "EMI Calculator",
                file: "emi-calculator.php",
                description: "Calculate loan installments",
                icon: "bi-calculator",
                color: "bg-orange",
                category: "tools",
                views: 1250,
                rating: 4.6,
                resultPreview: "Monthly EMI: $325.50"
            },
            {
                name: "Gradient Selector",
                file: "gradient-generator.php",
                description: "Create CSS gradients",
                icon: "bi-gradient",
                color: "bg-cyan",
                category: "design",
                views: 1052,
                rating: 4.5,
                resultPreview: "background: linear-gradient(45deg, #667eea, #764ba2)"
            },
            {
                name: "Image Compressor",
                file: "image-compressor.php",
                description: "Compress images",
                icon: "bi-image",
                color: "bg-emerald",
                category: "tools",
                views: 2304,
                rating: 4.8,
                resultPreview: "Size reduced by 65% (2.1MB → 735KB)"
            },
            {
                name: "QR Generator",
                file: "qr-generator.php",
                description: "Generate QR codes",
                icon: "bi-qr-code",
                color: "bg-amber",
                category: "tools",
                views: 1689,
                rating: 4.7,
                resultPreview: "QR code generated for: https://collegeall.com"
            },
            {
                name: "Resume Builder",
                file: "resume-builder/",
                description: "Build professional resumes",
                icon: "bi-file-earmark-person",
                color: "bg-lime",
                category: "tools",
                views: 2153,
                rating: 4.9,
                resultPreview: "Resume template applied successfully"
            },
            {
                name: "Stopwatch",
                file: "stopwatch.php",
                description: "Precision stopwatch",
                icon: "bi-stopwatch",
                color: "bg-primary",
                category: "tools",
                views: 1422,
                rating: 4.3,
                resultPreview: "Lap 3: 1:23.45"
            },
            {
                name: "Attendance Calculator",
                file: "attendance-calculator.php",
                description: "Attendance Calculator",
                icon: "bi-calendar3",
                color: "bg-primary",
                category: "tools",
                views: 1422,
                rating: 4.3,
                resultPreview: "latest 10+ students visits"
            },
            {
                name: "CGPA to Percentage Converter",
                file: "cgpa-percentage-converter.php",
                description: "CGPA to Percentage Converter",
                icon: "bi-calculator",
                color: "bg-primary",
                category: "tools",
                views: 1759,
                rating: 4.3,
                resultPreview: "latest 10+ students visits"
            },
            {
                name: "Percentage to CGPA Converter",
                file: "percentage-cgpa-calculator.php",
                description: "Percentage to CGPA Converter",
                icon: "bi-calculator",
                color: "bg-primary",
                category: "tools",
                views: 1392,
                rating: 4.3,
                resultPreview: "latest 10+ students visits"
            },
            {
                name: "Career Quiz",
                file: "career-quizz.php",
                description: "Career Quiz",
                icon: "bi-patch-question",
                color: "bg-primary",
                category: "tools",
                views: 2792,
                rating: 4.3,
                resultPreview: "Selected developing..."
            },
            {
                name: "Rank Predictor",
                file: "rank-predictor.php",
                description: "Rank Predictor",
                icon: "bi-patch-question",
                color: "bg-primary",
                category: "tools",
                views: 2135,
                rating: 4.3,
                resultPreview: "To achieve 85%, you need to score at least 310 marks..."
            },
        ];

        // Function to render apps in card layout
        function renderApps(appsToRender) {
            const grid = document.getElementById('appsGrid');
            grid.innerHTML = '';
            
            appsToRender.forEach((app, index) => {
                const appElement = `
                    <a href="${app.file}" class="app-card">
                        <div class="app-card-header">
                            <div class="app-icon-wrapper ${app.color}">
                                <i class="${app.icon}"></i>
                            </div>
                            <div class="app-info">
                                <div class="app-name">${app.name}</div>
                                <div class="app-description">${app.description}</div>
                                <div class="app-stats">
                                    <div class="stat">
                                        <i class="bi bi-eye"></i>
                                        <span>${app.views}</span>
                                    </div>
                                    <div class="stat">
                                        <i class="bi bi-star-fill" style="color: #fbbf24;"></i>
                                        <span>${app.rating}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-card-body">
                            <div class="result-preview">${app.resultPreview}</div>
                        </div>
                    </a>
                `;
                grid.innerHTML += appElement;
            });
        }

        // Initial render
        renderApps(apps);

        // Desktop View – Group apps by category
        function renderDesktopView() {
    const container = document.getElementById("desktopTools");
    container.innerHTML = "";

    const categories = {
        tools: "General Tools",
        design: "Design Tools",
        health: "Health Tools",
        dev: "Developer Tools",
        creative: "Creative Tools"
    };

    const grouped = {};

    apps.forEach(app => {
        if (!grouped[app.category]) grouped[app.category] = [];
        grouped[app.category].push(app);
    });

    for (const cat in grouped) {
        const title = categories[cat] || cat;

        container.innerHTML += `
            <div class="desktop-category-title">${title}</div>
            <div class="desktop-grid" id="group-${cat}"></div>
        `;

        const targetGrid = document.getElementById(`group-${cat}`);

        grouped[cat].forEach(app => {
            const card = `
                <a href="${app.file}" class="app-card">
                    <div class="app-card-header">
                        <div class="app-icon-wrapper ${app.color}">
                            <i class="${app.icon}"></i>
                        </div>
                        <div class="app-info">
                            <div class="app-name">${app.name}</div>
                            <div class="app-description">${app.description}</div>
                            <div class="app-stats">
                                <div class="stat">
                                    <i class="bi bi-eye"></i>
                                    <span>${app.views}</span>
                                </div>
                                <div class="stat">
                                    <i class="bi bi-star-fill" style="color: #fbbf24;"></i>
                                    <span>${app.rating}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-card-body">
                        <div class="result-preview">${app.resultPreview}</div>
                    </div>
                </a>
            `;
            targetGrid.innerHTML += card;
        });
    }
}
renderDesktopView();

        // Category filter functionality
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const category = this.getAttribute('data-category');
                const filteredApps = category === 'all' ? apps : apps.filter(app => app.category === category);
                renderApps(filteredApps);
            });
        });

        // Update time
        function updateTime() {
            const now = new Date();
            const timeString = now.getHours() + ':' + now.getMinutes().toString().padStart(2, '0');
            document.getElementById('currentTime').textContent = timeString;
        }

        setInterval(updateTime, 60000);
        updateTime();

        // Add loading animation
        document.addEventListener('DOMContentLoaded', function() {
            const appCards = document.querySelectorAll('.app-card');
            appCards.forEach((card, index) => {
                card.style.animationDelay = (index * 0.1) + 's';
            });
        });
        
    </script>
</body>
</html>