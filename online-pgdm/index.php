<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />

    <!-- Primary Meta Tags -->
    <title>LIBA Online PGDM | Leadership & Excellence</title>
    <meta name="title" content="LIBA Online PGDM | Leadership & Excellence" />
    <meta name="description"
        content="AICTE approved Online PGDM from LIBA, ranked among top 10 B-schools. 108 credits, 3 capstones, 6 specialisations. Jesuit legacy of leadership with ethics. Admissions open for June 2026." />
    <meta name="keywords"
        content="LIBA, Online PGDM, MBA, Management, Leadership, AICTE, Top B-school, Chennai, Jesuit, PGDM Online" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="English" />
    <meta name="author" content="LIBA & CollegeAll" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://iop.liba.edu/" />
    <meta property="og:title" content="LIBA Online PGDM | Leadership & Excellence" />
    <meta property="og:description"
        content="AICTE approved Online PGDM from LIBA, ranked among top 10 B-schools. Jesuit legacy of leadership with ethics. Admissions open for June 2026." />
    <meta property="og:image" content="https://iop.liba.edu/landing/images/og-image.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://iop.liba.edu/" />
    <meta property="twitter:title" content="LIBA Online PGDM | Leadership & Excellence" />
    <meta property="twitter:description"
        content="AICTE approved Online PGDM from LIBA, ranked among top 10 B-schools. Jesuit legacy of leadership with ethics. Admissions open for June 2026." />
    <meta property="twitter:image" content="https://iop.liba.edu/landing/images/og-image.jpg" />

    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#003366" />
    <link rel="canonical" href="https://iop.liba.edu/" />

    <!-- Google Font: Inter -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap"
        rel="stylesheet" />
    <style>
        /* ----- RESET & BASE ----- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: #f4f8fc;
            color: #1a2a3a;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Primary color: #0066cc */
        :root {
            --primary-deep: #003366;
            --primary-mid: #004c99;
            --accent: #0066cc;
            --accent-light: #3399ff;
            --accent-pale: #e6f0ff;
            --accent-bg: #cce0ff;
            --white: #ffffff;
            --gray-light: #f0f5fa;
            --shadow-sm: 0 4px 16px rgba(0, 51, 102, 0.06);
            --shadow-md: 0 12px 28px rgba(0, 102, 204, 0.08);
            --shadow-lg: 0 20px 40px rgba(0, 51, 102, 0.12);
        }

        /* ----- HEADER (sticky) ----- */
        .top-bar {
            background: white;
            padding: 14px 0;
            position: sticky;
            border-bottom: 1px solid rgba(0, 102, 204, 0.15);
            top: 0;
            z-index: 100;
            width: 100%;
            backdrop-filter: blur(2px);
        }

        .top-bar .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px 8px;
        }

        .logo-wrapper {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .logo-wrapper img {
            height: 42px;
            width: auto;
            object-fit: contain;
        }

        .logo-wrapper .liba-logo {
            height: 36px;
            filter: brightness(0) invert(1);
        }

        .cta-top {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .cta-top .phone {
            color: var(--accent-light);
            font-weight: 500;
            font-size: 0.9rem;
            white-space: nowrap;
        }

        .cta-top a {
            color: #fff;
            background: var(--accent);
            padding: 10px 24px;
            border-radius: 60px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            transition: 0.2s;
            white-space: nowrap;
            letter-spacing: 0.3px;
            border: 2px solid transparent;
        }

        .cta-top a:hover {
            background: var(--accent-light);
            transform: scale(1.03);
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.3);
            color: #fff;
        }

        /* ----- HERO (Enhanced) ----- */
        .hero {
            position: relative;
            background: linear-gradient(135deg, #e6f0ff 0%, #cce0ff 100%);
            padding: 70px 0 56px;
            border-bottom: 6px solid var(--accent);
            overflow: hidden;
            min-height: 520px;
            display: flex;
            align-items: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -15%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(0, 102, 204, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(0, 51, 102, 0.04) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .hero .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            flex: 1 1 340px;
        }

        .hero-content .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--accent);
            color: #fff;
            font-weight: 700;
            padding: 6px 20px 6px 16px;
            border-radius: 60px;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 18px;
            box-shadow: 0 2px 12px rgba(0, 102, 204, 0.25);
        }

        .hero-content .badge span {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #fff;
            border-radius: 50%;
            animation: pulse-dot 1.8s ease-in-out infinite;
        }

        @keyframes pulse-dot {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.3;
                transform: scale(0.6);
            }
        }

        .hero-content h1 {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.08;
            color: var(--primary-deep);
            margin-bottom: 14px;
            letter-spacing: -1px;
        }

        .hero-content h1 .highlight {
            color: #fff;
            background: var(--accent);
            padding: 0 14px 4px 14px;
            display: inline-block;
            border-radius: 12px;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.2);
        }

        .hero-content .subtitle {
            font-size: 1.1rem;
            color: #003366;
            max-width: 520px;
            margin: 16px 0 28px;
            font-weight: 500;
            line-height: 1.7;
            opacity: 0.9;
        }

        .hero-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 14px 22px;
            margin-bottom: 30px;
        }

        .hero-stats div {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(4px);
            padding: 8px 22px 8px 18px;
            border-radius: 60px;
            border-left: 5px solid var(--accent);
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--primary-deep);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 16px 20px;
        }

        .btn-primary {
            background: var(--accent);
            border: none;
            color: #fff;
            font-weight: 700;
            padding: 14px 40px;
            border-radius: 60px;
            font-size: 1rem;
            text-decoration: none;
            transition: 0.25s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: 2px solid transparent;
            box-shadow: 0 4px 16px rgba(0, 102, 204, 0.3);
            cursor: pointer;
        }

        .btn-primary:hover {
            background: var(--accent-light);
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(0, 102, 204, 0.35);
            color: #fff;
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid var(--primary-deep);
            color: var(--primary-deep);
            font-weight: 600;
            padding: 12px 32px;
            border-radius: 60px;
            font-size: 0.95rem;
            text-decoration: none;
            transition: 0.25s;
            cursor: pointer;
        }

        .btn-secondary:hover {
            background: var(--primary-deep);
            color: white;
            transform: translateY(-2px);
        }

        .hero-image {
            flex: 1 1 280px;
            background: var(--primary-deep);
            padding: 10px;
            border-radius: 28px;
            box-shadow: var(--shadow-lg);
            text-align: center;
            min-width: 240px;
            transition: 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            animation: float-hero 6s ease-in-out infinite;
        }

        @keyframes float-hero {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .hero-image:hover {
            transform: translateY(-8px) scale(1.01);
            box-shadow: 0 28px 50px rgba(0, 51, 102, 0.18);
        }

        .hero-image img {
            width: 100%;
            height: auto;
            border-radius: 16px;
            display: block;
            object-fit: cover;
            max-height: 360px;
        }

        .hero-image .caption {
            background: var(--accent);
            color: #fff;
            font-weight: 700;
            padding: 10px;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        /* ----- SECTION TITLES (clean, no underline) ----- */
        .section-title {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--primary-deep);
            margin-bottom: 12px;
            letter-spacing: -0.5px;
            text-align: center;
        }

        .section-title span {
            color: var(--accent);
        }

        .section-desc {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 32px;
            color: #1a4a7a;
            font-size: 1.05rem;
            line-height: 1.7;
        }

        /* ----- ABOUT (clean, no boxes) ----- */
        .about-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
            margin: 20px 0 40px;
        }

        .about-text {
            flex: 2 1 300px;
        }

        .about-text p {
            color: #1a3a5a;
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        .about-text .quote {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-deep);
            padding-left: 20px;
            border-left: 4px solid var(--accent);
            margin-top: 8px;
        }

        .about-stats {
            flex: 1 1 200px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .about-stats .stat-item {
            background: var(--white);
            padding: 20px 24px;
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--accent-pale);
            transition: 0.2s;
        }

        .about-stats .stat-item:hover {
            border-color: var(--accent);
            box-shadow: var(--shadow-md);
        }

        .about-stats .stat-item strong {
            display: block;
            font-size: 1.3rem;
            color: var(--primary-deep);
        }

        .about-stats .stat-item span {
            font-size: 0.9rem;
            color: #1a5a8a;
        }

        /* ----- COURSE CARDS ----- */
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin: 24px 0 20px;
        }

        .course-card {
            background: var(--white);
            border-radius: 20px;
            padding: 28px 20px;
            border: 1px solid var(--accent-pale);
            transition: 0.25s;
            box-shadow: var(--shadow-sm);
            text-align: center;
        }

        .course-card:hover {
            border-color: var(--accent);
            box-shadow: var(--shadow-md);
            transform: translateY(-4px);
        }

        .course-card h4 {
            font-weight: 700;
            color: var(--primary-deep);
            font-size: 1.1rem;
            margin-bottom: 6px;
        }

        .course-card p {
            font-size: 0.9rem;
            color: #1a5a8a;
        }

        /* ----- CURRICULUM (clean badges) ----- */
        .curriculum-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin: 20px 0 28px;
        }

        .curriculum-item {
            background: var(--white);
            border-radius: 16px;
            padding: 16px 22px;
            border: 1px solid var(--accent-pale);
            font-weight: 600;
            font-size: 0.95rem;
            box-shadow: var(--shadow-sm);
            transition: 0.2s;
            color: var(--primary-deep);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .curriculum-item::before {
            content: '▹';
            color: var(--accent);
            font-size: 1.3rem;
        }

        .curriculum-item:hover {
            border-color: var(--accent);
            background: var(--accent-pale);
            transform: translateX(4px);
        }

        /* ----- VIDEO SECTION (Two videos side by side) ----- */
        .video-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin: 40px 0 20px;
        }

        .video-wrapper {
            background: var(--primary-deep);
            border-radius: 28px;
            padding: 30px 24px 24px;
            box-shadow: var(--shadow-lg);
            transition: transform 0.25s;
        }

        .video-wrapper:hover {
            transform: translateY(-4px);
        }

        .video-wrapper h3 {
            color: var(--accent-light);
            text-align: center;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 16px;
            letter-spacing: -0.2px;
        }

        .video-wrapper iframe {
            width: 100%;
            height: auto;
            aspect-ratio: 16 / 9;
            border-radius: 16px;
            display: block;
            margin: 0 auto;
            border: 3px solid var(--accent);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
        }

        .video-wrapper .video-caption {
            color: #b0cfe0;
            text-align: center;
            margin-top: 14px;
            font-size: 0.9rem;
            font-weight: 400;
        }

        @media (max-width: 768px) {
            .video-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .video-wrapper {
                padding: 20px 16px 18px;
            }

            .video-wrapper h3 {
                font-size: 1rem;
            }
        }

        /* ----- FACULTY SECTION ----- */
        .faculty-section {
            padding: 40px 0 32px;
            background: #f4f8fc;
        }

        .faculty-header {
            text-align: center;
            margin-bottom: 28px;
        }

        .faculty-label {
            display: inline-block;
            background: var(--accent-pale);
            color: var(--primary-deep);
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 4px 18px;
            border-radius: 40px;
            border: 1px solid var(--accent);
            margin-bottom: 10px;
        }

        .faculty-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary-deep);
        }

        .faculty-title span {
            color: var(--accent);
        }

        .faculty-subtitle {
            color: #1a5a8a;
            max-width: 600px;
            margin: 8px auto 0;
            font-size: 0.95rem;
        }

        .faculty-slider-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            position: relative;
        }

        .faculty-nav {
            background: var(--white);
            border: 1px solid var(--accent-pale);
            border-radius: 60px;
            width: 44px;
            height: 44px;
            font-size: 1.2rem;
            color: var(--primary-deep);
            cursor: pointer;
            transition: 0.2s;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-sm);
        }

        .faculty-nav:hover {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
        }

        .faculty-slider {
            display: flex;
            gap: 24px;
            overflow-x: auto;
            padding: 8px 4px 16px 4px;
            scroll-behavior: smooth;
            flex: 1;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }

        .faculty-slider::-webkit-scrollbar {
            display: none;
        }

        .faculty-card {
            min-width: 220px;
            max-width: 240px;
            background: var(--white);
            border-radius: 24px;
            border: 1px solid var(--accent-pale);
            box-shadow: var(--shadow-sm);
            transition: 0.25s;
            cursor: pointer;
            flex-shrink: 0;
            overflow: hidden;
        }

        .faculty-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
            border-color: var(--accent);
        }

        .faculty-image-wrap {
            position: relative;
            overflow: hidden;
            aspect-ratio: 1 / 1;
            background: var(--gray-light);
        }

        .faculty-image-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: 0.3s;
        }

        .faculty-card:hover .faculty-image-wrap img {
            transform: scale(1.03);
        }

        .faculty-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 51, 102, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: 0.3s;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        .faculty-card:hover .faculty-overlay {
            opacity: 1;
        }

        .faculty-overlay span {
            background: var(--accent);
            color: #fff;
            padding: 6px 18px;
            border-radius: 40px;
        }

        .faculty-card-body {
            padding: 16px 16px 20px;
            text-align: center;
        }

        .faculty-card-body h3 {
            font-size: 1rem;
            font-weight: 700;
            color: var(--primary-deep);
            margin-bottom: 2px;
        }

        .faculty-card-body p {
            font-size: 0.85rem;
            color: #1a6a9a;
            font-weight: 500;
        }

        .faculty-scrollbar {
            margin-top: 12px;
            display: flex;
            justify-content: center;
        }

        .faculty-scrollbar-track {
            width: 200px;
            height: 4px;
            background: var(--accent-pale);
            border-radius: 10px;
            position: relative;
        }

        .faculty-scrollbar-thumb {
            height: 100%;
            background: var(--accent);
            border-radius: 10px;
            width: 30%;
            transition: transform 0.15s;
        }

        /* ----- REVIEWS ----- */
        .review-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin: 24px 0 20px;
        }

        .review-card {
            background: var(--white);
            padding: 28px 24px;
            border-radius: 24px;
            border: 1px solid var(--accent-pale);
            box-shadow: var(--shadow-sm);
            transition: 0.25s;
        }

        .review-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-4px);
            border-color: var(--accent);
        }

        .review-card .stars {
            color: var(--accent);
            margin-bottom: 10px;
            font-weight: 600;
            letter-spacing: 3px;
            font-size: 1.1rem;
        }

        .review-card p {
            font-style: italic;
            color: #1a3a5a;
            font-size: 0.95rem;
            line-height: 1.7;
        }

        .review-card .author {
            margin-top: 16px;
            font-weight: 700;
            color: var(--primary-deep);
            border-top: 2px solid var(--accent-pale);
            padding-top: 14px;
        }

        .review-card .author span {
            font-weight: 400;
            color: #1a6a9a;
            font-size: 0.85rem;
            display: block;
            margin-top: 2px;
        }

        /* ----- FAQ SECTION (Accordion) ----- */
        .faq-section {
            margin: 48px 0 40px;
        }

        .faq-list {
            max-width: 820px;
            margin: 28px auto 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .faq-item {
            background: var(--white);
            border-radius: 20px;
            border: 1px solid var(--accent-pale);
            box-shadow: var(--shadow-sm);
            overflow: hidden;
            transition: 0.25s;
        }

        .faq-item:hover {
            border-color: var(--accent);
            box-shadow: var(--shadow-md);
        }

        .faq-question {
            width: 100%;
            padding: 20px 28px;
            background: none;
            border: none;
            font-family: inherit;
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--primary-deep);
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            text-align: left;
            gap: 16px;
            transition: 0.2s;
        }

        .faq-question:hover {
            color: var(--accent);
        }

        .faq-question .icon {
            font-size: 1.5rem;
            transition: transform 0.3s ease;
            color: var(--accent);
            flex-shrink: 0;
        }

        .faq-item.open .faq-question .icon {
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 0 28px;
        }

        .faq-item.open .faq-answer {
            max-height: 300px;
            padding: 0 28px 24px;
        }

        .faq-answer p {
            color: #1a4a7a;
            line-height: 1.8;
            font-size: 0.98rem;
        }

        .faq-answer ul {
            margin: 10px 0 0 20px;
            color: #1a4a7a;
            line-height: 1.8;
        }

        /* ----- CTA BANNER ----- */
        .cta-banner {
            background: var(--accent-pale);
            border-radius: 40px;
            padding: 36px 32px;
            margin: 40px 0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            border: 2px solid var(--accent);
            gap: 20px;
            box-shadow: var(--shadow-sm);
        }

        .cta-banner h3 {
            color: var(--primary-deep);
            font-weight: 800;
            font-size: 1.6rem;
            letter-spacing: -0.5px;
        }

        .cta-banner p {
            font-weight: 500;
            font-size: 1.05rem;
            color: #003366;
        }

        .btn-gold {
            background: var(--accent);
            border: none;
            color: #fff;
            font-weight: 700;
            padding: 14px 44px;
            border-radius: 60px;
            font-size: 1.05rem;
            transition: 0.25s;
            text-decoration: none;
            display: inline-block;
            border: 2px solid transparent;
            white-space: nowrap;
            letter-spacing: 0.3px;
            cursor: pointer;
        }

        .btn-gold:hover {
            background: var(--accent-light);
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 102, 204, 0.3);
            color: #fff;
        }

        .btn-dark {
            background: var(--primary-deep);
            color: white;
            border: 2px solid var(--accent);
        }

        .btn-dark:hover {
            background: #004080;
            border-color: var(--accent-light);
        }

        /* ----- BOTTOM BAR ----- */
        .bottom-bar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 16px 28px;
            font-size: 0.85rem;
            color: #1a5a8a;
            padding: 16px 0 24px;
            border-top: 1px solid var(--accent-pale);
            margin-top: 8px;
        }

        .billing-partner {
            background: var(--accent-pale);
            padding: 6px 20px;
            border-radius: 60px;
            font-weight: 700;
            color: var(--primary-deep);
            border: 1px solid var(--accent);
            font-size: 0.85rem;
            white-space: nowrap;
        }

        /* ----- FOOTER ----- */
        .footer {
            background: var(--primary-deep);
            color: #b0cfe0;
            padding: 40px 0 24px;
            margin-top: 40px;
            border-top: 8px solid var(--accent);
        }

        .footer .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 28px 20px;
        }

        .footer .footer-col {
            flex: 1 1 160px;
        }

        .footer .footer-col h4 {
            color: white;
            font-weight: 700;
            font-size: 1.05rem;
            margin-bottom: 10px;
            letter-spacing: 0.3px;
        }

        .footer a {
            color: var(--accent-light);
            text-decoration: none;
            font-size: 0.9rem;
            transition: 0.15s;
        }

        .footer a:hover {
            text-decoration: underline;
            color: var(--accent);
        }

        .footer .copy {
            font-size: 0.85rem;
            opacity: 0.7;
            margin-top: 20px;
            width: 100%;
            text-align: center;
            border-top: 1px solid #2a5a7a;
            padding-top: 18px;
        }

        /* ----- MODAL (Popup Form) ----- */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 51, 102, 0.7);
            backdrop-filter: blur(4px);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 20px;
            animation: fadeIn 0.3s ease;
        }

        .modal-overlay.active {
            display: flex;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .modal {
            background: var(--white);
            border-radius: 32px;
            max-width: 520px;
            width: 100%;
            padding: 40px 36px;
            box-shadow: var(--shadow-lg);
            position: relative;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-close {
            position: absolute;
            top: 16px;
            right: 20px;
            font-size: 1.8rem;
            line-height: 1;
            color: #1a6a9a;
            cursor: pointer;
            transition: 0.2s;
            background: none;
            border: none;
            padding: 4px 8px;
        }

        .modal-close:hover {
            color: var(--primary-deep);
            transform: rotate(90deg);
        }

        .modal h2 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary-deep);
            margin-bottom: 6px;
        }

        .modal h2 span {
            color: var(--accent);
        }

        .modal .modal-sub {
            color: #1a6a9a;
            font-size: 0.95rem;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--primary-deep);
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid var(--accent-pale);
            border-radius: 12px;
            font-size: 0.95rem;
            font-family: inherit;
            transition: 0.2s;
            background: #f4f8fc;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.15);
        }

        .form-group input::placeholder {
            color: #8aacbf;
        }

        .form-row {
            display: flex;
            gap: 16px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background: var(--accent);
            border: none;
            border-radius: 60px;
            font-weight: 700;
            font-size: 1.05rem;
            color: #fff;
            cursor: pointer;
            transition: 0.25s;
            margin-top: 8px;
        }

        .btn-submit:hover {
            background: var(--accent-light);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 102, 204, 0.3);
        }

        .modal .terms {
            font-size: 0.8rem;
            color: #5a8aaa;
            text-align: center;
            margin-top: 16px;
        }

        .modal .terms a {
            color: var(--accent);
            text-decoration: none;
        }

        /* ----- FLOATING ICONS (WhatsApp & Call) ----- */
        .float-icons {
            position: fixed;
            bottom: 24px;
            right: 24px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            z-index: 999;
        }

        .float-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #25d366;
            color: white;
            font-size: 32px;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;
            border: none;
        }

        .float-icons a.call-icon {
            background: #0066cc;
        }

        .float-icons a:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.3);
        }

        .float-icons a svg {
            width: 32px;
            height: 32px;
            fill: currentColor;
        }

        /* ----- RESPONSIVE ----- */
        @media (max-width: 768px) {
            .hero {
                padding: 40px 0 32px;
                min-height: auto;
            }

            .hero-content h1 {
                font-size: 2.2rem;
            }

            .hero-content .subtitle {
                font-size: 1rem;
            }

            .hero-stats div {
                font-size: 0.8rem;
                padding: 6px 14px;
            }

            .hero-image {
                min-width: unset;
                padding: 10px 10px 0 10px;
                animation: none;
            }

            .hero-image:hover {
                transform: none;
            }

            .hero-image img {
                max-height: 220px;
            }

            .hero-actions .btn-primary,
            .hero-actions .btn-secondary {
                padding: 12px 28px;
                font-size: 0.9rem;
            }

            .section-title {
                font-size: 1.7rem;
            }

            .section-desc {
                font-size: 0.95rem;
            }

            .course-grid {
                grid-template-columns: 1fr 1fr;
            }

            .curriculum-list {
                grid-template-columns: 1fr 1fr;
            }

            .cta-banner {
                flex-direction: column;
                text-align: center;
                padding: 24px 20px;
            }

            .btn-gold {
                padding: 12px 32px;
                font-size: 1rem;
                white-space: normal;
            }

            .bottom-bar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .footer .container {
                flex-direction: column;
                gap: 20px;
            }

            /* Mobile header: only logo + Apply Now */
            .top-bar .container {
                flex-direction: row;
                justify-content: space-between;
            }

            .logo-wrapper img {
                height: 32px;
            }

            .logo-wrapper .liba-logo {
                height: 28px;
            }

            .cta-top .phone {
                display: none;
                /* hide phone on mobile */
            }

            .cta-top a {
                font-size: 0.8rem;
                padding: 8px 16px;
            }

            .faculty-slider {
                gap: 16px;
            }

            .faculty-card {
                min-width: 180px;
                max-width: 200px;
            }

            .faculty-nav {
                width: 36px;
                height: 36px;
                font-size: 1rem;
            }

            .modal {
                padding: 32px 24px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .faq-question {
                font-size: 0.95rem;
                padding: 16px 20px;
            }

            .faq-answer {
                padding: 0 20px;
            }

            .faq-item.open .faq-answer {
                padding: 0 20px 18px;
            }

            /* floating icons smaller on mobile */
            .float-icons a {
                width: 50px;
                height: 50px;
                font-size: 26px;
            }

            .float-icons a svg {
                width: 26px;
                height: 26px;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 1.8rem;
            }

            .hero-actions {
                flex-direction: column;
                align-items: stretch;
                width: 100%;
            }

            .hero-actions .btn-primary,
            .hero-actions .btn-secondary {
                text-align: center;
                justify-content: center;
            }

            .course-grid {
                grid-template-columns: 1fr;
            }

            .curriculum-list {
                grid-template-columns: 1fr;
            }

            .review-grid {
                grid-template-columns: 1fr;
            }

            .faculty-card {
                min-width: 160px;
                max-width: 180px;
            }

            .faculty-slider {
                gap: 12px;
            }

            .about-grid {
                gap: 24px;
            }

            .float-icons {
                bottom: 16px;
                right: 16px;
                gap: 12px;
            }

            .float-icons a {
                width: 44px;
                height: 44px;
                font-size: 22px;
            }

            .float-icons a svg {
                width: 22px;
                height: 22px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="top-bar">
        <div class="container">
            <div class="logo-wrapper">
                <img src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="collegeall logo" />
            </div>
            <div class="cta-top">
                <span class="phone">+91 82205 88088</span>
                <a href="#" id="openModalBtn">Apply Now</a>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="badge">
                    <span></span> Admissions close June 30, 2026
                </div>
                <h1>
                    Online <span class="highlight">PGDM</span><br />
                    Leadership with ethics
                </h1>
                <p class="subtitle">
                    Post Graduate Diploma in Management • AICTE approved • ranked among top 10 B-schools
                </p>
                <div class="hero-stats">
                    <div>108 Credits</div>
                    <div>40%+ international</div>
                    <div>3 Capstones</div>
                </div>
                <div class="hero-actions">
                    <button class="btn-primary" id="openModalBtn2">Apply Now →</button>
                    <a href="#" class="btn-secondary">Download Brochure</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="./pgdm.jpg" alt="LIBA campus" />
            </div>
        </div>
    </section>

    <div class="container">

        <!-- ABOUT LIBA -->
        <h2 class="section-title">About <span>LIBA</span></h2>
        <p class="section-desc">A legacy of excellence in management education, rooted in the Jesuit tradition of
            forming leaders for others.</p>
        <div class="about-grid">
            <div class="about-text">
                <p>Established in 1979 by the Society of Jesus (Jesuits), LIBA has become a hallmark of excellence in
                    business education in India. Nestled in the culturally rich city of Chennai, LIBA epitomises the
                    Jesuit spirit of 'Magis' – Latin for 'more' – striving towards improvement and growth in every
                    endeavour.</p>
                <p>We are proud to hold the recognition of being AICTE-approved and consistently ranked among the top 10
                    business schools in the country. Over the years, LIBA has grown to create leaders who excel in their
                    professions while upholding strong ethical standards and social responsibility.</p>
                <p>At LIBA, we believe in offering a holistic education experience, blending theoretical knowledge with
                    practical insights, to prepare our students for the ever-evolving global business landscape. Our
                    state-of-the-art infrastructure, experienced faculty, and strong ties with the industry set the
                    perfect stage for aspiring business leaders.</p>
                <div class="quote">“Men and women for others” – the core of Jesuit education</div>
            </div>
            <div class="about-stats">
                <div class="stat-item"><strong>Est. 1979</strong><span>46+ years of legacy</span></div>
                <div class="stat-item"><strong>Top 10</strong><span>Outlook B-school ranking</span></div>
                <div class="stat-item"><strong>Triple Crown</strong><span>AACSB, EFMD, BGA member</span></div>
                <div class="stat-item"><strong>1000+</strong><span>Alumni network worldwide</span></div>
            </div>
        </div>

        <!-- PGDM COURSE DETAILS -->
        <h2 class="section-title">PGDM <span>Course Details</span></h2>
        <p class="section-desc">Designed for working professionals and ambitious graduates, our online PGDM offers the
            same rigour as our full-time program.</p>
        <div class="course-grid">
            <div class="course-card">
                <h4>Duration</h4>
                <p>2 years (6 trimesters) • 108 credits</p>
            </div>
            <div class="course-card">
                <h4>Delivery</h4>
                <p>Live weekend sessions • faculty-led</p>
            </div>
            <div class="course-card">
                <h4>Capstones</h4>
                <p>3 integrated projects + campus immersions</p>
            </div>
            <div class="course-card">
                <h4>Certification</h4>
                <p>AICTE approved • globally recognised</p>
            </div>
            <div class="course-card">
                <h4>Learning</h4>
                <p>Outcome-based • V-LIBA AI assessment</p>
            </div>
            <div class="course-card">
                <h4>Global Exposure</h4>
                <p>Coursera certifications • International faculty</p>
            </div>
            <!-- fee cards added here -->
            <div class="course-card">
                <h4>Program Fee</h4>
                <p>₹ 3,50,000 (all inclusive)</p>
            </div>
            <div class="course-card">
                <h4>Registration Fee</h4>
                <p>₹ 3,100 (one-time)</p>
            </div>
        </div>

        <!-- CURRICULUM -->
        <h2 class="section-title">Curriculum <span>Highlights</span></h2>
        <p class="section-desc">Choose from six specialisations and gain deep expertise in your chosen field, with a
            curriculum aligned to global standards.</p>
        <div class="curriculum-list">
            <div class="curriculum-item">Marketing Management</div>
            <div class="curriculum-item">Financial Management</div>
            <div class="curriculum-item">Human Resource Management</div>
            <div class="curriculum-item">Business Analytics</div>
            <div class="curriculum-item">Healthcare Management</div>
            <div class="curriculum-item">Logistics & SCM</div>
            <div class="curriculum-item">Global Exposure • Coursera</div>
            <div class="curriculum-item">AI & Digital Transformation</div>
            <div class="curriculum-item">Leadership & Ethics</div>
            <div class="curriculum-item">Strategic Management</div>
        </div>

        <!-- VIDEO SECTION: Two videos side by side -->
        <div class="video-grid">
            <!-- Existing Video -->
            <div class="video-wrapper">
                <h3>🎓 LIBA Online PGDM Experience</h3>
                <iframe src="https://www.youtube.com/embed/LwGmlmgHvlQ"
                    title="Online PGDM - Admissions open @ iop.liba.edu" allowfullscreen loading="lazy"></iframe>
                <p class="video-caption">Discover how LIBA blends Jesuit values with cutting-edge online learning.</p>
            </div>

            <!-- New Video: Upgrade Your Career -->
            <div class="video-wrapper">
                <h3>🚀 Upgrade Your Career with LIBA</h3>
                <iframe src="https://www.youtube.com/embed/7B-PXtyyULE"
                    title="Upgrade Your Career with LIBA Online Programmes | MBA, PGDM & Executive Courses | Admissions Open"
                    allowfullscreen loading="lazy"></iframe>
                <p class="video-caption">Explore MBA, PGDM & Executive courses. Admissions open for 2026.</p>
            </div>
        </div>

        <!-- FACULTY SECTION -->
        <section id="faculty" class="faculty-section">
            <div class="container" style="padding:0;">
                <div class="faculty-header">
                    <span class="faculty-label">Academic Leadership</span>
                    <h2 class="faculty-title">Meet Our <span>Esteemed Faculty</span></h2>
                    <p class="faculty-subtitle">
                        LIBA’s Online PGDM is guided by highly experienced academic minds and industry veterans who
                        bring real-world insights to the classroom.
                    </p>
                </div>

                <div class="faculty-slider-wrap">
                    <button class="faculty-nav faculty-nav-prev" id="facultyPrevBtn"
                        aria-label="Previous Faculty">❮</button>

                    <div class="faculty-slider" id="facultySlider">
                        <div class="faculty-card" onclick="showFacultyBio(0)">
                            <div class="faculty-image-wrap">
                                <img src="https://iop.liba.edu/landing/images/Dr%20Kishore%20Kunal.jpg"
                                    alt="Dr. Kishore Kunal">
                                <div class="faculty-overlay"><span>View Bio</span></div>
                            </div>
                            <div class="faculty-card-body">
                                <h3>Dr. Kishore Kunal</h3>
                                <p>Associate Dean</p>
                            </div>
                        </div>

                        <div class="faculty-card" onclick="showFacultyBio(1)">
                            <div class="faculty-image-wrap">
                                <img src="https://iop.liba.edu/landing/images/Dr.%20K.%20R.%20Ramprakash.jpg"
                                    alt="Prof. Ramprakash K.R">
                                <div class="faculty-overlay"><span>View Bio</span></div>
                            </div>
                            <div class="faculty-card-body">
                                <h3>Prof. Ramprakash K.R</h3>
                                <p>Assistant Professor</p>
                            </div>
                        </div>

                        <div class="faculty-card" onclick="showFacultyBio(2)">
                            <div class="faculty-image-wrap">
                                <img src="https://iop.liba.edu/landing/images/R.-ARUN-PRASAD.jpg"
                                    alt="Dr. R. Arun Prasad">
                                <div class="faculty-overlay"><span>View Bio</span></div>
                            </div>
                            <div class="faculty-card-body">
                                <h3>Dr. R. Arun Prasad</h3>
                                <p>Assistant Professor</p>
                            </div>
                        </div>

                        <div class="faculty-card" onclick="showFacultyBio(3)">
                            <div class="faculty-image-wrap">
                                <img src="https://iop.liba.edu/landing/images/Mr.%20Vikash%20Kumar.jpeg"
                                    alt="Dr. Vikash Kumar">
                                <div class="faculty-overlay"><span>View Bio</span></div>
                            </div>
                            <div class="faculty-card-body">
                                <h3>Dr. Vikash Kumar</h3>
                                <p>Associate Professor</p>
                            </div>
                        </div>
                    </div>

                    <button class="faculty-nav faculty-nav-next" id="facultyNextBtn"
                        aria-label="Next Faculty">❯</button>
                </div>

                <div class="faculty-scrollbar">
                    <div class="faculty-scrollbar-track">
                        <div class="faculty-scrollbar-thumb" id="facultyScrollThumb"
                            style="width: 31.0786%; transform: translateX(0.219378%);"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STUDENT REVIEWS -->
        <h2 class="section-title">Student <span>Reviews</span></h2>
        <p class="section-desc">Hear from our learners who have transformed their careers through LIBA's online PGDM
            program.</p>
        <div class="review-grid">
            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p>“LIBA’s online PGDM transformed my career. The faculty guidance and flexible structure helped me
                    become a Digital Marketing Manager while running my business. The live sessions and peer
                    interactions made the learning experience truly enriching.”</p>
                <div class="author">Ramalan Harifa <span>Digital Marketing Manager</span></div>
            </div>
            <div class="review-card">
                <div class="stars">★★★★☆</div>
                <p>“Managing family business, I wanted to sharpen my skills. LIBA’s thoughtfully designed course made it
                    possible to balance learning with responsibilities. The practical case studies and industry insights
                    were invaluable.”</p>
                <div class="author">Sellamani Siva <span>Proprietrix, Vijayalakshmi Group</span></div>
            </div>
            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p>“As an entrepreneur, I chose Finance to scale my business. LIBA isn’t just an institute – it feels
                    like family. The mentorship and support from the faculty helped me apply financial strategies
                    directly to my business.”</p>
                <div class="author">Sellamani Siva <span>Entrepreneur</span></div>
            </div>
        </div>

        <!-- FAQ SECTION -->
        <section class="faq-section">
            <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
            <p class="section-desc">Find answers to the most common questions about LIBA's Online PGDM program.</p>

            <div class="faq-list" id="faqList">
                <div class="faq-item">
                    <button class="faq-question">
                        What is the duration of the Online PGDM program?
                        <span class="icon">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>The Online PGDM is a 2-year program divided into 6 trimesters, comprising 108 credits. The
                            course is designed for working professionals with weekend live sessions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Is the Online PGDM degree recognized by AICTE?
                        <span class="icon">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, the Online PGDM is fully approved by AICTE (All India Council for Technical Education)
                            and is globally recognised. LIBA is also a member of AACSB, EFMD, and BGA.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What are the specializations offered?
                        <span class="icon">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>Students can choose from six specialisations:</p>
                        <ul>
                            <li>Marketing Management</li>
                            <li>Financial Management</li>
                            <li>Human Resource Management</li>
                            <li>Business Analytics</li>
                            <li>Healthcare Management</li>
                            <li>Logistics & SCM</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What is the total fee for the program?
                        <span class="icon">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>The total program fee is ₹3,50,000 (all inclusive). A one-time registration fee of ₹3,100 is
                            applicable at the time of admission.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        How are the classes conducted?
                        <span class="icon">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>Classes are conducted via live weekend sessions led by experienced faculty. The program also
                            includes recorded lectures, case studies, capstone projects, and campus immersions for a
                            blended learning experience.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA BANNER -->
        <div class="cta-banner">
            <div>
                <h3>Admissions closing soon</h3>
                <p>Join the June 2026 cohort • AICTE approved • Limited seats available</p>
                <p style="font-weight:600; margin-top:6px;">Program Fee: ₹3,50,000 | Registration: ₹3,100</p>
            </div>
            <button class="btn-gold btn-dark" id="openModalBtn3">Register now</button>
        </div>

        <!-- BOTTOM BAR -->
        <div class="bottom-bar">
            <span>Career acceleration track</span>
            <span>Global Executive Acceleration</span>
            <span>Triple Crown – AACSB, EFMD, BGA</span>
            <span class="billing-partner">Billing Partner: Leadsense Media</span>
        </div>
    </div>

    <!-- FLOATING ICONS: WhatsApp & Call -->
    <div class="float-icons">
        <!-- WhatsApp -->
        <a href="https://wa.me/918220588088?text=Hi%20LIBA%2C%20I%20want%20to%20know%20more%20about%20Online%20PGDM"
            target="_blank" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
        </a>
        <!-- Call -->
        <a href="tel:+918220588088" class="call-icon" aria-label="Call us" title="Call us">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
            </svg>
        </a>
    </div>

    <!-- MODAL POPUP (Application Form) -->
    <div class="modal-overlay" id="applicationModal">
        <div class="modal">
            <button class="modal-close" id="closeModalBtn" aria-label="Close modal">✕</button>
            <h2>Apply Now <span>PGDM</span></h2>
            <p class="modal-sub">Fill in your details and our admission team will reach out to you shortly.</p>
            <form id="applicationForm" onsubmit="handleSubmit(event)">
                <div class="form-group">
                    <label for="fullName">Full Name *</label>
                    <input type="text" id="fullName" placeholder="Enter your full name" required />
                </div>
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" placeholder="you@example.com" required />
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" placeholder="+91 98765 43210" required />
                </div>

                <div class="form-group">
                    <label for="interest">Area of Interest</label>
                    <select id="interest">
                        <option value="">Select your preferred specialisation</option>
                        <option value="marketing">Marketing Management</option>
                        <option value="finance">Financial Management</option>
                        <option value="hr">Human Resource Management</option>
                        <option value="analytics">Business Analytics</option>
                        <option value="healthcare">Healthcare Management</option>
                        <option value="logistics">Logistics & SCM</option>
                    </select>
                </div>
                <button type="submit" class="btn-submit">Submit Application →</button>
                <p class="terms">By submitting, you agree to our <a href="#">Terms of Service</a> and <a
                        href="#">Privacy Policy</a>.</p>
            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-col">

                <p style="margin-top:10px; opacity:0.7; font-size:0.85rem;">Loyola Institute of Business
                    Administration<br />Chennai • Est. 1979</p>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <p style="font-size:0.9rem;">+91 82205 88088</p>
                <p style="font-size:0.9rem;">iop.admissions@liba.edu</p>
            </div>
            <div class="footer-col">
                <h4>Quick links</h4>
                <p><a href="#">Apply</a> • <a href="#">Scholarship</a> • <a href="#">Brochure</a></p>
                <p style="margin-top:6px;"><a href="https://iop.liba.edu/student/register/" target="_blank">Register</a>
                </p>
            </div>
            <div class="footer-col">
                <h4>Program</h4>
                <p>Online PGDM</p>
                <p>AICTE Approved</p>
                <p>2 Years • 108 Credits</p>
            </div>
            <div class="copy">
                <hr style="border-color:#2a5a7a; margin:14px 0;" />All rights reserved by collegeall
                <div style="margin-top:4px;">Billing Partner: Leadsense Media</div>
            </div>
        </div>
    </footer>

    <!-- JS for Modal, Faculty Slider & FAQ Accordion -->
    <script>
        (function () {
            // ----- Modal Logic -----
            const modal = document.getElementById('applicationModal');
            const openBtns = document.querySelectorAll('#openModalBtn, #openModalBtn2, #openModalBtn3');
            const closeBtn = document.getElementById('closeModalBtn');

            function openModal() {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }

            openBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    openModal();
                });
            });

            closeBtn.addEventListener('click', closeModal);

            modal.addEventListener('click', function (e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && modal.classList.contains('active')) {
                    closeModal();
                }
            });

            // ----- Form Submit Handler -----
            window.handleSubmit = function (e) {
                e.preventDefault();
                const name = document.getElementById('fullName').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();

                if (!name || !email || !phone) {
                    alert('Please fill in all required fields.');
                    return;
                }

                alert('✅ Application submitted successfully!\n\nWe will contact you shortly at ' + email);
                closeModal();
                document.getElementById('applicationForm').reset();
            };

            // ----- Faculty Slider -----
            const slider = document.getElementById('facultySlider');
            const prevBtn = document.getElementById('facultyPrevBtn');
            const nextBtn = document.getElementById('facultyNextBtn');
            const thumb = document.getElementById('facultyScrollThumb');

            function updateScrollbar() {
                if (!slider || !thumb) return;
                const scrollLeft = slider.scrollLeft;
                const maxScroll = slider.scrollWidth - slider.clientWidth;
                const ratio = maxScroll > 0 ? scrollLeft / maxScroll : 0;
                const trackWidth = thumb.parentElement?.offsetWidth || 200;
                const thumbWidth = parseFloat(thumb.style.width) || 30;
                const maxTranslate = trackWidth - thumbWidth;
                thumb.style.transform = `translateX(${ratio * maxTranslate}px)`;
            }

            if (prevBtn && slider) {
                prevBtn.addEventListener('click', function () {
                    slider.scrollBy({ left: -260, behavior: 'smooth' });
                    setTimeout(updateScrollbar, 100);
                });
            }

            if (nextBtn && slider) {
                nextBtn.addEventListener('click', function () {
                    slider.scrollBy({ left: 260, behavior: 'smooth' });
                    setTimeout(updateScrollbar, 100);
                });
            }

            if (slider) {
                slider.addEventListener('scroll', updateScrollbar);
                setTimeout(updateScrollbar, 200);
            }

            window.showFacultyBio = function (index) {
                const names = ['Dr. Kishore Kunal', 'Prof. Ramprakash K.R', 'Dr. R. Arun Prasad', 'Dr. Vikash Kumar'];
                alert(`Faculty: ${names[index]}\nBio details would appear here.`);
            };

            // ----- FAQ Accordion -----
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const questionBtn = item.querySelector('.faq-question');
                questionBtn.addEventListener('click', function () {
                    const isOpen = item.classList.contains('open');

                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('open')) {
                            otherItem.classList.remove('open');
                        }
                    });

                    // Toggle current item
                    if (isOpen) {
                        item.classList.remove('open');
                    } else {
                        item.classList.add('open');
                    }
                });
            });

            // Open the first FAQ by default (optional)
            if (faqItems.length > 0) {
                faqItems[0].classList.add('open');
            }
        })();
    </script>

</body>

</html>