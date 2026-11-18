<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="#1877f2">
    <title>CollegeAll · Find Your Programme</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="https://api.collegeall.com/Logo/fav.png" />
    <style>
        /* =========================================================
           RESET & BASE
           ========================================================= */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        html {
            -webkit-text-size-adjust: 100%;
            text-size-adjust: 100%;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            min-height: 100dvh;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            overflow-x: hidden;
            padding:
                max(12px, env(safe-area-inset-top))
                max(12px, env(safe-area-inset-right))
                max(72px, calc(24px + env(safe-area-inset-bottom)))
                max(12px, env(safe-area-inset-left));
        }

        body.locked { overflow: hidden; }

        button, input {
            font-family: inherit;
            font-size: inherit;
            color: inherit;
            border: none;
            background: none;
            outline: none;
        }

        button {
            cursor: pointer;
            -webkit-appearance: none;
            appearance: none;
        }

        img { max-width: 100%; display: block; }

        /* =========================================================
           LAYOUT CONTAINER
           ========================================================= */
        .container {
            width: 100%;
            max-width: 560px;
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }

        .content {
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 20px 40px -12px rgba(0, 20, 40, 0.16);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .content-inner {
            padding: 24px 22px 20px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        /* =========================================================
           PROGRESS
           ========================================================= */
        .progress {
            display: flex;
            justify-content: center;
            gap: 6px;
            margin-bottom: 20px;
            flex-shrink: 0;
        }

        .progress-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #d6e2ee;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .progress-dot.active {
            background: #1877f2;
            width: 26px;
            border-radius: 8px;
        }

        .progress-dot.completed { background: #1877f2; }

        /* =========================================================
           STEPS
           ========================================================= */
        .step { display: none; animation: fadeIn 0.3s ease; }
        .step.active { display: flex; flex-direction: column; flex: 1; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* =========================================================
           TYPOGRAPHY
           ========================================================= */
        .headline {
            font-size: clamp(1.2rem, 5.2vw, 1.5rem);
            font-weight: 800;
            color: #0a1c2c;
            line-height: 1.25;
            margin-bottom: 6px;
            letter-spacing: -0.03em;
        }

        .subtext {
            font-size: clamp(0.82rem, 3.4vw, 0.9rem);
            color: #64748b;
            line-height: 1.5;
            margin-bottom: 18px;
            font-weight: 400;
        }

        /* =========================================================
           SCROLLABLE LIST
           ========================================================= */
        .question-box {
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            overscroll-behavior: contain;
            margin-bottom: 16px;
            padding-right: 2px;
            max-height: 52vh;
        }

        .question-box::-webkit-scrollbar { width: 3px; }
        .question-box::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        .question-box::-webkit-scrollbar-track { background: transparent; }

        /* =========================================================
           UNIVERSITY CARD
           ========================================================= */
        .univ-card {
            display: flex;
            align-items: center;
            width: 100%;
            background: #ffffff;
            border: 1.5px solid #eef2f6;
            border-radius: 16px;
            padding: 12px 14px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            gap: 12px;
            box-shadow: 0 1px 4px rgba(0, 20, 40, 0.03);
            text-align: left;
        }

        .univ-card:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 20, 40, 0.06);
        }

        .univ-card:active { transform: scale(0.985); }

        .univ-card.selected {
            background: #f0f7ff;
            border-color: #1877f2;
            box-shadow: 0 0 0 3px rgba(24, 119, 242, 0.1), 0 3px 10px rgba(24, 119, 242, 0.1);
        }

        .univ-logo-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .univ-logo-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 5px;
        }

        .univ-logo-box .fallback {
            font-weight: 800;
            font-size: 0.68rem;
            color: #475569;
            letter-spacing: -0.02em;
            text-transform: uppercase;
            text-align: center;
            line-height: 1.1;
            padding: 4px;
        }

        .univ-card .text-content {
            flex: 1;
            min-width: 0;
        }

        .univ-card .title {
            font-weight: 700;
            font-size: 0.9rem;
            color: #0a1c2c;
            letter-spacing: -0.015em;
            line-height: 1.3;
            margin-bottom: 3px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .univ-card .meta {
            font-size: 0.72rem;
            color: #64748b;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
            flex-wrap: wrap;
        }

        .univ-card .meta .dot { font-size: 0.4rem; color: #94a3b8; }

        /* =========================================================
           RADIO INDICATOR (shared)
           ========================================================= */
        .radio-indicator {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #cbd5e1;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            transition: all 0.2s ease;
        }

        .selected .radio-indicator {
            border-color: #1877f2;
            background: #1877f2;
            box-shadow: 0 0 0 3px rgba(24, 119, 242, 0.15);
        }

        .selected .radio-indicator::after {
            content: '';
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #ffffff;
            animation: radioPop 0.22s ease;
        }

        @keyframes radioPop {
            0% { transform: scale(0); }
            70% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        /* =========================================================
           COURSE CARD
           ========================================================= */
        .course-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .course-card {
            display: flex;
            align-items: center;
            width: 100%;
            background: #ffffff;
            border: 1.5px solid #eef2f6;
            border-radius: 16px;
            padding: 12px 14px;
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            gap: 12px;
            box-shadow: 0 1px 4px rgba(0, 20, 40, 0.03);
            text-align: left;
        }

        .course-card:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 20, 40, 0.06);
        }

        .course-card:active { transform: scale(0.985); }

        .course-card.selected {
            background: #f0f7ff;
            border-color: #1877f2;
            box-shadow: 0 0 0 3px rgba(24, 119, 242, 0.1), 0 3px 10px rgba(24, 119, 242, 0.1);
        }

        .course-card .degree-badge {
            min-width: 52px;
            height: 48px;
            padding: 0 8px;
            background: #f1f5f9;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-weight: 800;
            font-size: 0.65rem;
            color: #475569;
            letter-spacing: -0.02em;
            text-align: center;
            text-transform: uppercase;
            transition: all 0.2s ease;
        }

        .course-card.selected .degree-badge {
            background: #dbeafe;
            color: #1877f2;
        }

        .course-card .text-content {
            flex: 1;
            min-width: 0;
        }

        .course-card .title {
            font-weight: 700;
            font-size: 0.9rem;
            color: #0a1c2c;
            letter-spacing: -0.015em;
            line-height: 1.3;
            margin-bottom: 3px;
        }

        .course-card .meta {
            font-size: 0.72rem;
            color: #64748b;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
            flex-wrap: wrap;
        }

        .course-card .meta .dot { font-size: 0.4rem; color: #94a3b8; }

        /* =========================================================
           OPTION BUTTON (Experience & Start Plan)
           ========================================================= */
        .option-btn {
            display: flex;
            align-items: center;
            width: 100%;
            background: #ffffff;
            border: 1.5px solid #eef2f6;
            border-radius: 16px;
            padding: 15px 16px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #1e2f3e;
            text-align: left;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            gap: 14px;
            box-shadow: 0 1px 4px rgba(0, 20, 40, 0.03);
        }

        .option-btn:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 20, 40, 0.06);
        }

        .option-btn:active { transform: scale(0.985); }

        .option-btn.selected {
            background: #f0f7ff;
            border-color: #1877f2;
            box-shadow: 0 0 0 3px rgba(24, 119, 242, 0.1), 0 3px 10px rgba(24, 119, 242, 0.1);
        }

        .option-btn:last-child { margin-bottom: 0; }

        /* =========================================================
           INPUTS
           ========================================================= */
        .input-group { margin-bottom: 16px; }

        .input-group label {
            display: block;
            font-size: 0.78rem;
            font-weight: 600;
            color: #2d4b63;
            margin-bottom: 6px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 16px;
            border-radius: 12px;
            border: 1.5px solid #eef2f6;
            background: #ffffff;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            transition: all 0.2s ease;
            color: #10344b;
            box-shadow: 0 1px 4px rgba(0, 20, 40, 0.03);
            -webkit-appearance: none;
        }

        .input-group input::placeholder { color: #94a3b8; font-weight: 400; }

        .input-group input:focus {
            border-color: #1877f2;
            box-shadow: 0 0 0 4px rgba(24, 119, 242, 0.08);
        }

        .input-group input.error { border-color: #ef4444; }
        .input-group input.error:focus { box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.08); }

        .error-msg {
            font-size: 0.7rem;
            color: #ef4444;
            margin-top: 5px;
            padding-left: 2px;
            display: none;
            font-weight: 500;
        }

        .error-msg.show { display: block; animation: fadeIn 0.2s ease; }

        /* =========================================================
           BUTTONS
           ========================================================= */
        .next-btn {
            width: 100%;
            background: linear-gradient(135deg, #1877f2 0%, #0c63d4 100%);
            color: white;
            border-radius: 14px;
            padding: 16px;
            font-size: 0.95rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.22s ease;
            letter-spacing: 0.2px;
            box-shadow: 0 6px 18px rgba(24, 119, 242, 0.28);
            min-height: 52px;
            touch-action: manipulation;
        }

        .next-btn:hover:not(:disabled) {
            box-shadow: 0 10px 24px rgba(24, 119, 242, 0.36);
            transform: translateY(-1px);
        }

        .next-btn:active:not(:disabled) { transform: scale(0.985); }

        .next-btn:disabled {
            background: #cbd5e1;
            box-shadow: none;
            cursor: not-allowed;
            opacity: 0.85;
        }

        .back-btn {
            background: transparent;
            color: #64748b;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            padding: 10px 0;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s ease;
            min-height: 40px;
            touch-action: manipulation;
        }

        .back-btn:hover { color: #0b2f4e; gap: 10px; }
        .back-btn.hidden { display: none; }

        .action-bar {
            position: sticky;
            bottom: 0;
            background: #ffffff;
            padding-top: 10px;
            padding-bottom: 4px;
            margin-top: auto;
            border-top: 1px solid #f0f4f8;
            flex-shrink: 0;
        }

        .cookie-note {
            font-size: 0.66rem;
            color: #94a3b8;
            text-align: center;
            margin-top: 14px;
            line-height: 1.5;
            padding-top: 12px;
            border-top: 1px dashed #e2ebf3;
        }

        /* =========================================================
           LOADING / SKELETON
           ========================================================= */
        .loading-state {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 36px 16px;
            gap: 12px;
            color: #64748b;
            font-size: 0.85rem;
        }

        .spinner {
            width: 32px;
            height: 32px;
            border: 3px solid #e2e8f0;
            border-top-color: #1877f2;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin { to { transform: rotate(360deg); } }

        .error-state {
            text-align: center;
            padding: 32px 16px;
            color: #64748b;
        }

        .error-state .err-title {
            font-weight: 700;
            color: #0a1c2c;
            margin-bottom: 6px;
            font-size: 0.92rem;
        }

        .error-state .err-msg {
            font-size: 0.8rem;
            margin-bottom: 14px;
        }

        .retry-btn {
            background: #f0f7ff;
            color: #1877f2;
            border: 1.5px solid #dbeafe;
            padding: 10px 20px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.83rem;
            transition: all 0.2s ease;
            min-height: 44px;
            touch-action: manipulation;
        }

        .retry-btn:hover { background: #dbeafe; border-color: #1877f2; }
        .retry-btn:active { transform: scale(0.97); }

        /* =========================================================
           SEARCH INPUT
           ========================================================= */
        .search-wrap {
            position: relative;
            margin-bottom: 14px;
        }

        .search-wrap input {
            width: 100%;
            padding: 12px 16px 12px 40px;
            border-radius: 12px;
            border: 1.5px solid #eef2f6;
            background: #f8fafc;
            font-family: inherit;
            font-size: 16px;
            transition: all 0.2s ease;
            color: #10344b;
            -webkit-appearance: none;
        }

        .search-wrap input:focus {
            border-color: #1877f2;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(24, 119, 242, 0.08);
        }

        .search-wrap svg {
            position: absolute;
            left: 13px;
            top: 50%;
            transform: translateY(-50%);
            width: 17px;
            height: 17px;
            fill: #94a3b8;
            pointer-events: none;
        }

        .no-results {
            text-align: center;
            padding: 26px 16px;
            color: #94a3b8;
            font-size: 0.85rem;
        }

        /* =========================================================
           SUCCESS PAGE
           ========================================================= */
        .success-page {
            display: none;
            text-align: center;
            padding: 30px 22px 22px;
        }

        .success-page.active { display: block; animation: fadeIn 0.45s ease; }

        .success-icon {
            width: 76px;
            height: 76px;
            border-radius: 50%;
            background: #e8f5e9;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            border: 3px solid #2e7d32;
            animation: successPop 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        @keyframes successPop {
            0% { transform: scale(0); }
            70% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .success-icon svg { width: 38px; height: 38px; fill: #2e7d32; }

        .success-title {
            font-size: clamp(1.3rem, 6vw, 1.6rem);
            font-weight: 800;
            color: #0a1c2c;
            margin-bottom: 8px;
            letter-spacing: -0.03em;
        }

        .success-message {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.55;
            margin-bottom: 8px;
        }

        .success-detail {
            font-size: 0.83rem;
            color: #1877f2;
            background: #f0f7ff;
            border-radius: 14px;
            padding: 14px 16px;
            margin: 18px 0 20px;
            line-height: 1.75;
            text-align: left;
            border: 1px solid #dbeafe;
            word-break: break-word;
        }

        .success-detail strong { color: #0b2f4e; font-weight: 600; }

        .done-btn {
            width: 100%;
            background: linear-gradient(135deg, #1877f2 0%, #0c63d4 100%);
            color: white;
            border-radius: 14px;
            padding: 16px;
            font-size: 0.95rem;
            font-weight: 700;
            transition: all 0.22s ease;
            box-shadow: 0 6px 18px rgba(24, 119, 242, 0.28);
            min-height: 52px;
            touch-action: manipulation;
        }

        .done-btn:hover {
            box-shadow: 0 10px 24px rgba(24, 119, 242, 0.36);
            transform: translateY(-1px);
        }

        .done-btn:active { transform: scale(0.985); }

        /* =========================================================
           FIXED BOTTOM ACCREDITATION BAR
           ========================================================= */
        .accred-bar {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
            box-shadow: 0 -4px 12px rgba(0, 20, 40, 0.06);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 28px;
            padding: 8px 16px calc(8px + env(safe-area-inset-bottom));
            z-index: 1000;
            flex-wrap: wrap;
        }

        .accred-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 700;
            font-size: 0.7rem;
            color: #1e3a5f;
            letter-spacing: -0.02em;
            white-space: nowrap;
        }

        .accred-logo {
            height: 32px;
            width: auto;
            display: block;
        }

        .accred-item .logo-fallback {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f5f9;
            border-radius: 6px;
            padding: 2px 8px;
            height: 26px;
            border: 1px solid #cbd5e1;
            font-size: 0.62rem;
            font-weight: 800;
            color: #0a1c2c;
            letter-spacing: -0.02em;
        }

        /* =========================================================
           RESPONSIVE
           ========================================================= */
        @media (min-width: 640px) {
            body { padding: 40px 20px 80px; }

            .content { border-radius: 28px; }
            .content-inner { padding: 30px 28px 24px; }

            .headline { font-size: 1.5rem; }
            .subtext { font-size: 0.9rem; margin-bottom: 22px; }

            .question-box { max-height: 460px; padding-right: 6px; }

            .univ-card, .course-card { padding: 14px 16px; gap: 14px; }
            .univ-logo-box { width: 54px; height: 54px; border-radius: 14px; }
            .course-card .degree-badge { min-width: 60px; height: 54px; font-size: 0.72rem; }

            .univ-card .title, .course-card .title { font-size: 0.95rem; }
            .univ-card .meta, .course-card .meta { font-size: 0.76rem; }

            .radio-indicator { width: 22px; height: 22px; }

            .option-btn { padding: 16px 18px; font-size: 0.93rem; }

            .input-group input { padding: 15px 18px; }

            .next-btn, .done-btn { padding: 17px; font-size: 1rem; min-height: 56px; }

            .success-icon { width: 88px; height: 88px; margin-bottom: 22px; }
            .success-icon svg { width: 44px; height: 44px; }
            .success-title { font-size: 1.7rem; }
            .success-detail { padding: 16px 20px; font-size: 0.85rem; }

            .action-bar { border-top: none; padding-top: 4px; }

            .accred-bar { gap: 40px; padding: 10px 24px calc(10px + env(safe-area-inset-bottom)); }
            .accred-logo { height: 32px; }
            .accred-item { font-size: 0.75rem; gap: 8px; }
            .accred-item .logo-fallback { height: 30px; font-size: 0.68rem; }
        }

        @media (max-width: 360px) {
            body { padding: 8px 8px 64px; }

            .content { border-radius: 20px; }
            .content-inner { padding: 18px 16px 14px; }

            .headline { font-size: 1.15rem; }
            .subtext { font-size: 0.78rem; margin-bottom: 14px; }

            .progress { margin-bottom: 16px; }
            .progress-dot { width: 6px; height: 6px; }
            .progress-dot.active { width: 22px; }

            .univ-card, .course-card {
                padding: 10px 12px;
                gap: 10px;
                border-radius: 14px;
                margin-bottom: 8px;
            }

            .univ-logo-box { width: 42px; height: 42px; border-radius: 10px; }
            .course-card .degree-badge { min-width: 46px; height: 42px; font-size: 0.58rem; }

            .univ-card .title, .course-card .title { font-size: 0.82rem; }
            .univ-card .meta, .course-card .meta { font-size: 0.66rem; gap: 4px; }

            .radio-indicator { width: 18px; height: 18px; }
            .radio-indicator::after { width: 6px; height: 6px; }

            .option-btn {
                padding: 13px 14px;
                font-size: 0.85rem;
                gap: 12px;
                border-radius: 14px;
                margin-bottom: 8px;
            }

            .input-group input {
                padding: 12px 14px;
                border-radius: 11px;
                font-size: 16px;
            }

            .next-btn, .done-btn {
                padding: 14px;
                font-size: 0.9rem;
                min-height: 48px;
                border-radius: 12px;
            }

            .search-wrap input { padding: 11px 14px 11px 38px; font-size: 16px; }
            .search-wrap svg { width: 15px; height: 15px; left: 12px; }

            .question-box { max-height: 54vh; }

            .success-icon { width: 68px; height: 68px; }
            .success-icon svg { width: 32px; height: 32px; }
            .success-detail { padding: 12px 14px; font-size: 0.78rem; }

            .accred-bar { gap: 14px; padding: 6px 10px calc(6px + env(safe-area-inset-bottom)); }
            .accred-logo { height: 20px; }
            .accred-item { font-size: 0.58rem; gap: 4px; }
            .accred-item .logo-fallback { height: 20px; font-size: 0.52rem; padding: 2px 5px; }
        }

        @media (max-height: 500px) and (orientation: landscape) {
            body { padding: 8px 12px 60px; }

            .content-inner { padding: 14px 18px 12px; }
            .headline { font-size: 1.1rem; margin-bottom: 4px; }
            .subtext { font-size: 0.78rem; margin-bottom: 10px; }
            .progress { margin-bottom: 12px; }
            .question-box { max-height: 48vh; }

            .success-icon { width: 60px; height: 60px; margin-bottom: 12px; }
            .success-icon svg { width: 28px; height: 28px; }

            .accred-bar { padding: 4px 16px calc(4px + env(safe-area-inset-bottom)); gap: 20px; }
            .accred-logo { height: 18px; }
            .accred-item { font-size: 0.58rem; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        @media (min-width: 1024px) {
            body { padding: 60px 20px 90px; }
            .container { max-width: 560px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <!-- FORM FLOW -->
            <div id="formFlow" class="content-inner">
                <div class="progress" id="progressContainer"></div>
                <div id="stepContainer" style="display:flex;flex-direction:column;flex:1;min-height:0;"></div>

                <div class="action-bar" id="actionBar">
                    <button class="back-btn hidden" id="backBtn" type="button">← Back</button>
                    <button class="next-btn" id="nextBtn" type="button" disabled>Next</button>
                    <div class="cookie-note">
                        🔒 Your answers are saved locally for this session.
                    </div>
                </div>
            </div>

            <!-- SUCCESS PAGE -->
            <div class="success-page" id="successPage">
                <div class="success-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                    </svg>
                </div>
                <h2 class="success-title">Thank You!</h2>
                <p class="success-message">Your inquiry has been submitted successfully.</p>
                <div class="success-detail" id="successDetail"></div>
                <p class="success-message" style="font-size:0.85rem; color:#94a3b8; margin-bottom:18px;">
                    Our team will reach out to you shortly with programme details.
                </p>
                <button class="done-btn" id="doneBtn" type="button">Done</button>
            </div>
        </div>
    </div>

    <!-- FIXED BOTTOM ACCREDITATION BAR -->
    <div class="accred-bar">
        <div class="accred-item">
            <img class="accred-logo" src="./img/aicte.jpg" alt="AICTE" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        </div>
        <div class="accred-item">
            <img class="accred-logo" src="./img/aiu.png" alt="AIU" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        </div>
        <div class="accred-item">
            <img class="accred-logo" src="./img/saqs.png" alt="SAQS" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        </div>
        <div class="accred-item">
            <img class="accred-logo" src="./img/nabl.jpg" alt="nabl" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        </div>
    </div>

    <script>
        (function () {
            // ==========================================================
            // CONFIG
            // ==========================================================
            const API_BASE = 'https://api.collegeall.com/api/v1';
            const COOKIE_NAME = 'collegeall_inquiry';
            const UNIV_CACHE_KEY = 'collegeall_universities_cache';
            const COURSE_CACHE_PREFIX = 'collegeall_courses_';
            const CACHE_TTL = 24 * 60 * 60 * 1000; // 24 hours in ms

            const BITRIX_LEAD_WEBHOOK = 'https://leadsense.bitrix24.in/rest/31/j87gms00216fmp2o';
            const BITRIX_SOURCE_ID = 'UC_AV2J20';

            const EXPERIENCE_OPTIONS = [
                'Less than 1 year',
                '1 – 3 years',
                '3 – 5 years',
                '5 – 8 years',
                '8+ years'
            ];

            const START_PLAN_OPTIONS = [
                'Today',
                'This week',
                'Next Month'
            ];

            const STEP_UNIVERSITY = 0;
            const STEP_COURSE = 1;
            const STEP_EXPERIENCE = 2;
            const STEP_START_PLAN = 3;
            const STEP_CONTACT = 4;
            const TOTAL_STEPS = 5;

            // ==========================================================
            // STATE
            // ==========================================================
            const state = {
                universities: [],
                courses: [],
                universityLoadState: 'idle',
                courseLoadState: 'idle',
                universityError: '',
                courseError: '',
                currentStep: STEP_UNIVERSITY,
                answers: {
                    university: null,
                    course: null,
                    experience: null,
                    startPlan: null,
                    fullName: '',
                    phone: '',
                    email: ''
                },
                filters: {
                    universitySearch: '',
                    courseSearch: ''
                },
                isTransitioning: false
            };

            // ==========================================================
            // DOM
            // ==========================================================
            const nextBtn = document.getElementById('nextBtn');
            const backBtn = document.getElementById('backBtn');
            const progressContainer = document.getElementById('progressContainer');
            const stepContainer = document.getElementById('stepContainer');
            const formFlow = document.getElementById('formFlow');
            const successPage = document.getElementById('successPage');
            const successDetail = document.getElementById('successDetail');
            const doneBtn = document.getElementById('doneBtn');

            // ==========================================================
            // HELPERS
            // ==========================================================
            function esc(str) {
                if (str === null || str === undefined) return '';
                return String(str)
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;')
                    .replace(/'/g, '&#39;');
            }

            function initialsFromName(name) {
                if (!name) return '?';
                const parts = name.trim().split(/\s+/).filter(Boolean);
                if (parts.length >= 2) return (parts[0][0] + parts[1][0]).toUpperCase();
                return name.substring(0, 3).toUpperCase();
            }

            function setCookie(name, value, days = 7) {
                const expires = new Date(Date.now() + days * 864e5).toUTCString();
                document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/; SameSite=Lax`;
            }

            function getCookie(name) {
                const m = document.cookie.match(new RegExp('(^|;\\s*)' + name + '=([^;]*)'));
                return m ? decodeURIComponent(m[2]) : null;
            }

            function clearCookie(name) {
                document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; SameSite=Lax`;
            }

            // ==========================================================
            // COOKIE-BASED CACHE FOR UNIVERSITIES & COURSES
            // ==========================================================
            function cacheUniversities(data) {
                try {
                    const payload = {
                        data: data,
                        timestamp: Date.now(),
                        count: Array.isArray(data) ? data.length : 0
                    };
                    setCookie(UNIV_CACHE_KEY, JSON.stringify(payload), 1); // cookie itself expires in 1 day
                } catch (e) {
                    console.warn('Failed to cache universities', e);
                }
            }

            function getCachedUniversities() {
                const raw = getCookie(UNIV_CACHE_KEY);
                if (!raw) return null;
                try {
                    const payload = JSON.parse(raw);
                    if (!payload || !payload.timestamp) return null;
                    if (Date.now() - payload.timestamp > CACHE_TTL) return null;
                    return payload.data;
                } catch {
                    return null;
                }
            }

            function cacheCourses(universityId, data) {
                try {
                    const key = COURSE_CACHE_PREFIX + universityId;
                    const payload = {
                        data: data,
                        timestamp: Date.now()
                    };
                    setCookie(key, JSON.stringify(payload), 1);
                } catch (e) {
                    console.warn('Failed to cache courses', e);
                }
            }

            function getCachedCourses(universityId) {
                const key = COURSE_CACHE_PREFIX + universityId;
                const raw = getCookie(key);
                if (!raw) return null;
                try {
                    const payload = JSON.parse(raw);
                    if (!payload || !payload.timestamp) return null;
                    if (Date.now() - payload.timestamp > CACHE_TTL) return null;
                    return payload.data;
                } catch {
                    return null;
                }
            }

            function saveProgress() {
                setCookie(COOKIE_NAME, JSON.stringify({
                    university: state.answers.university,
                    course: state.answers.course,
                    experience: state.answers.experience,
                    startPlan: state.answers.startPlan,
                    fullName: state.answers.fullName,
                    phone: state.answers.phone,
                    email: state.answers.email,
                    currentStep: state.currentStep,
                    timestamp: new Date().toISOString()
                }), 7);
            }

            function loadProgress() {
                const raw = getCookie(COOKIE_NAME);
                if (!raw) return null;
                try { return JSON.parse(raw); } catch { return null; }
            }

            // ==========================================================
            // API (with cookie caching)
            // ==========================================================
            /**
             * Fetch universities.
             * - On success, stores the FULL university array in a cookie.
             * - On subsequent calls, loads from cookie if fresh (<24h).
             * - Pass forceRefresh=true to bypass cookie and re-hit the API.
             */
            async function fetchUniversities(forceRefresh = false) {
                // 1) Try cache first
                if (!forceRefresh) {
                    const cached = getCachedUniversities();
                    if (cached) {
                        state.universities = cached;
                        state.universityLoadState = 'success';
                        state.universityError = '';
                        renderStep(STEP_UNIVERSITY);
                        console.log(`[CollegeAll] Loaded ${cached.length} universities from cookie cache.`);
                        return;
                    }
                }

                // 2) Fetch from API
                state.universityLoadState = 'loading';
                state.universityError = '';
                renderStep(STEP_UNIVERSITY);

                try {
                    const res = await fetch(`${API_BASE}/all-universities`);
                    if (!res.ok) throw new Error(`HTTP ${res.status}`);
                    const json = await res.json();
                    if (json.error || !json.data) throw new Error(json.message || 'Failed to load');

                    state.universities = json.data.universities || [];
                    state.universityLoadState = 'success';

                    // 3) Store in cookie for future visits
                    cacheUniversities(state.universities);
                    console.log(`[CollegeAll] Fetched & cached ${state.universities.length} universities.`);
                } catch (err) {
                    console.error('University fetch error:', err);
                    state.universityError = err.message || 'Could not load universities.';
                    state.universityLoadState = 'error';
                }
                renderStep(STEP_UNIVERSITY);
            }

            /**
             * Fetch courses for a university.
             * - On success, stores the course array in a cookie keyed by university ID.
             * - On subsequent calls for the same university, loads from cookie if fresh.
             */
            async function fetchCourses(universityId, forceRefresh = false) {
                // 1) Try cache first
                if (!forceRefresh) {
                    const cached = getCachedCourses(universityId);
                    if (cached) {
                        state.courses = cached;
                        state.courseLoadState = 'success';
                        state.courseError = '';
                        renderStep(STEP_COURSE);
                        console.log(`[CollegeAll] Loaded ${cached.length} courses from cookie cache for university ${universityId}.`);
                        return;
                    }
                }

                // 2) Fetch from API
                state.courseLoadState = 'loading';
                state.courseError = '';
                state.courses = [];
                renderStep(STEP_COURSE);

                try {
                    const res = await fetch(`${API_BASE}/filtercourse-university?university_id=${universityId}`);
                    if (!res.ok) throw new Error(`HTTP ${res.status}`);
                    const json = await res.json();
                    if (json.error || !json.data) throw new Error(json.message || 'Failed to load');

                    state.courses = json.data.courses || [];
                    state.courseLoadState = 'success';

                    // 3) Store in cookie keyed by university ID
                    cacheCourses(universityId, state.courses);
                    console.log(`[CollegeAll] Fetched & cached ${state.courses.length} courses for university ${universityId}.`);
                } catch (err) {
                    console.error('Course fetch error:', err);
                    state.courseError = err.message || 'Could not load courses.';
                    state.courseLoadState = 'error';
                }
                renderStep(STEP_COURSE);
            }

            // ==========================================================
            // CARD BUILDERS
            // ==========================================================
            function buildUniversityCard(u) {
                const selected = state.answers.university && state.answers.university.id === u.id;
                const logo = u.universities_logo
                    ? `<img src="${esc(u.universities_logo)}" alt="${esc(u.University_name)}" loading="lazy"
                        onerror="this.style.display='none';this.parentNode.innerHTML='<span class=\\'fallback\\'>${esc(initialsFromName(u.University_name))}</span>'">`
                    : `<span class="fallback">${esc(initialsFromName(u.University_name))}</span>`;

                return `
                    <button type="button" class="univ-card ${selected ? 'selected' : ''}" data-univ-id="${u.id}">
                        <div class="univ-logo-box">${logo}</div>
                        <div class="text-content">
                            <div class="title">${esc(u.University_name)}</div>
                            <div class="meta">
                                <span>${esc(u.average_fee || '—')}</span>
                                ${u.course_count ? `<span class="dot">●</span><span>${u.course_count} courses</span>` : ''}
                            </div>
                        </div>
                        <div class="radio-indicator"></div>
                    </button>
                `;
            }

            function buildCourseCard(c) {
                const selected = state.answers.course && state.answers.course.id === c.id;
                const title = c.course_name
                    ? `${c.degree || ''}${c.degree && c.course_name ? ' · ' : ''}${c.course_name}`
                    : (c.degree || 'Course');
                const metaParts = [];
                if (c.years) metaParts.push(`${c.years} yr${String(c.years) === '1' ? '' : 's'}`);
                if (c.fee) metaParts.push(esc(c.fee));
                if (c.course_level) metaParts.push(esc(c.course_level));

                return `
                    <button type="button" class="course-card ${selected ? 'selected' : ''}" data-course-id="${c.id}">
                        <div class="degree-badge">${esc(c.degree || 'N/A')}</div>
                        <div class="text-content">
                            <div class="title">${esc(title)}</div>
                            <div class="meta">
                                ${metaParts.map((m, i) => `${i > 0 ? '<span class="dot">●</span>' : ''}<span>${m}</span>`).join('')}
                            </div>
                        </div>
                        <div class="radio-indicator"></div>
                    </button>
                `;
            }

            function buildExperienceOption(text) {
                const selected = state.answers.experience === text;
                return `
                    <button type="button" class="option-btn ${selected ? 'selected' : ''}" data-exp="${esc(text)}">
                        <div class="radio-indicator"></div>
                        <span>${esc(text)}</span>
                    </button>
                `;
            }

            function buildStartPlanOption(text) {
                const selected = state.answers.startPlan === text;
                return `
                    <button type="button" class="option-btn ${selected ? 'selected' : ''}" data-plan="${esc(text)}">
                        <div class="radio-indicator"></div>
                        <span>${esc(text)}</span>
                    </button>
                `;
            }

            // ==========================================================
            // RENDER STEP
            // ==========================================================
            function renderStep(step) {
                stepContainer.innerHTML = '';

                if (step === STEP_UNIVERSITY) stepContainer.appendChild(buildUniversityStep());
                else if (step === STEP_COURSE) stepContainer.appendChild(buildCourseStep());
                else if (step === STEP_EXPERIENCE) stepContainer.appendChild(buildExperienceStep());
                else if (step === STEP_START_PLAN) stepContainer.appendChild(buildStartPlanStep());
                else if (step === STEP_CONTACT) stepContainer.appendChild(buildContactStep());

                attachStepListeners(step);
                buildProgress();
                updateNextButtonState();
                backBtn.classList.toggle('hidden', step === STEP_UNIVERSITY);
                nextBtn.textContent = step === STEP_CONTACT ? 'Submit Inquiry' : 'Next';
            }

            function buildUniversityStep() {
                const el = document.createElement('div');
                el.className = 'step active';

                let body = '';

                if (state.universityLoadState === 'loading') {
                    body = `<div class="loading-state"><div class="spinner"></div><span>Loading universities…</span></div>`;
                } else if (state.universityLoadState === 'error') {
                    body = `
                        <div class="error-state">
                            <div class="err-title">Couldn't load universities</div>
                            <div class="err-msg">${esc(state.universityError)}</div>
                            <button class="retry-btn" type="button" data-retry="univ">Try Again</button>
                        </div>
                    `;
                } else {
                    const q = state.filters.universitySearch.toLowerCase();
                    const filtered = state.universities.filter(u =>
                        !q || u.University_name.toLowerCase().includes(q)
                    );

                    body = `
                        <div class="search-wrap">
                            <svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 1 0-.7.7l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0A4.5 4.5 0 1 1 14 9.5 4.5 4.5 0 0 1 9.5 14z"/></svg>
                            <input type="text" id="univSearch" placeholder="Search universities…" value="${esc(state.filters.universitySearch)}" autocapitalize="off" autocomplete="off" spellcheck="false">
                        </div>
                        ${filtered.length
                            ? filtered.map(buildUniversityCard).join('')
                            : `<div class="no-results">No universities match "${esc(state.filters.universitySearch)}"</div>`}
                    `;
                }

                el.innerHTML = `
                    <h1 class="headline">Select Your University</h1>
                    <p class="subtext">Choose the university you'd like to explore.</p>
                    <div class="question-box">${body}</div>
                `;
                return el;
            }

            function buildCourseStep() {
                const el = document.createElement('div');
                el.className = 'step active';

                let body = '';

                if (state.courseLoadState === 'loading') {
                    body = `<div class="loading-state"><div class="spinner"></div><span>Loading programs…</span></div>`;
                } else if (state.courseLoadState === 'error') {
                    body = `
                        <div class="error-state">
                            <div class="err-title">Couldn't load programs</div>
                            <div class="err-msg">${esc(state.courseError)}</div>
                            <button class="retry-btn" type="button" data-retry="course">Try Again</button>
                        </div>
                    `;
                } else if (state.courses.length === 0) {
                    body = `<div class="no-results">No programs available for this university.</div>`;
                } else {
                    const q = state.filters.courseSearch.toLowerCase();
                    const filtered = state.courses.filter(c => {
                        if (!q) return true;
                        const haystack = `${c.degree || ''} ${c.course_name || ''}`.toLowerCase();
                        return haystack.includes(q);
                    });

                    body = `
                        <div class="search-wrap">
                            <svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 1 0-.7.7l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0A4.5 4.5 0 1 1 14 9.5 4.5 4.5 0 0 1 9.5 14z"/></svg>
                            <input type="text" id="courseSearch" placeholder="Search programs…" value="${esc(state.filters.courseSearch)}" autocapitalize="off" autocomplete="off" spellcheck="false">
                        </div>
                        <div class="course-list">
                            ${filtered.length
                                ? filtered.map(buildCourseCard).join('')
                                : `<div class="no-results">No programs match "${esc(state.filters.courseSearch)}"</div>`}
                        </div>
                    `;
                }

                el.innerHTML = `
                    <h1 class="headline">Choose Your Program</h1>
                    <p class="subtext">Pick the program at ${esc(state.answers.university?.name || 'this university')}.</p>
                    <div class="question-box">${body}</div>
                `;
                return el;
            }

            function buildExperienceStep() {
                const el = document.createElement('div');
                el.className = 'step active';
                el.innerHTML = `
                    <h1 class="headline">Years of Work Experience</h1>
                    <p class="subtext">This helps us tailor the program for you.</p>
                    <div class="question-box">
                        ${EXPERIENCE_OPTIONS.map(buildExperienceOption).join('')}
                    </div>
                `;
                return el;
            }

            function buildStartPlanStep() {
                const el = document.createElement('div');
                el.className = 'step active';
                el.innerHTML = `
                    <h1 class="headline">When Do You Plan to Start?</h1>
                    <p class="subtext">Let us know your preferred timeline.</p>
                    <div class="question-box">
                        ${START_PLAN_OPTIONS.map(buildStartPlanOption).join('')}
                    </div>
                `;
                return el;
            }

            function buildContactStep() {
                const el = document.createElement('div');
                el.className = 'step active';
                el.innerHTML = `
                    <h1 class="headline">Almost there!</h1>
                    <p class="subtext">We'll use this to send you program information.</p>
                    <div class="question-box">
                        <div class="input-group">
                            <label>Full name <span style="color:#ef4444;">*</span></label>
                            <input type="text" id="fullName" placeholder="e.g. Arjun Mehta" autocomplete="name" value="${esc(state.answers.fullName)}">
                            <div class="error-msg" id="nameError">Please enter your full name.</div>
                        </div>
                        <div class="input-group">
                            <label>Phone number <span style="color:#ef4444;">*</span></label>
                            <input type="tel" id="phone" placeholder="+91 98765 43210" autocomplete="tel" inputmode="tel" value="${esc(state.answers.phone)}">
                            <div class="error-msg" id="phoneError">Please enter a valid phone number.</div>
                        </div>
                        <div class="input-group">
                            <label>Email address <span style="color:#ef4444;">*</span></label>
                            <input type="email" id="email" placeholder="you@example.com" autocomplete="email" inputmode="email" value="${esc(state.answers.email)}">
                            <div class="error-msg" id="emailError">Please enter a valid email address.</div>
                        </div>
                    </div>
                `;
                return el;
            }

            // ==========================================================
            // LISTENERS
            // ==========================================================
            function attachStepListeners(step) {
                if (step === STEP_UNIVERSITY) {
                    document.querySelectorAll('[data-retry="univ"]').forEach(btn => {
                        btn.addEventListener('click', () => fetchUniversities(true));
                    });

                    const searchInput = document.getElementById('univSearch');
                    if (searchInput) {
                        searchInput.addEventListener('input', (e) => {
                            state.filters.universitySearch = e.target.value;
                            const cursorPos = e.target.selectionStart;
                            const box = document.querySelector('.question-box');
                            const scrollTop = box.scrollTop;
                            renderStep(STEP_UNIVERSITY);
                            const newInput = document.getElementById('univSearch');
                            if (newInput) {
                                newInput.focus();
                                newInput.setSelectionRange(cursorPos, cursorPos);
                            }
                            document.querySelector('.question-box').scrollTop = scrollTop;
                        });
                    }

                    document.querySelectorAll('.univ-card').forEach(card => {
                        card.addEventListener('click', () => selectUniversity(card));
                    });
                }

                if (step === STEP_COURSE) {
                    document.querySelectorAll('[data-retry="course"]').forEach(btn => {
                        btn.addEventListener('click', () => {
                            if (state.answers.university) fetchCourses(state.answers.university.id, true);
                        });
                    });

                    const searchInput = document.getElementById('courseSearch');
                    if (searchInput) {
                        searchInput.addEventListener('input', (e) => {
                            state.filters.courseSearch = e.target.value;
                            const cursorPos = e.target.selectionStart;
                            const box = document.querySelector('.question-box');
                            const scrollTop = box.scrollTop;
                            renderStep(STEP_COURSE);
                            const newInput = document.getElementById('courseSearch');
                            if (newInput) {
                                newInput.focus();
                                newInput.setSelectionRange(cursorPos, cursorPos);
                            }
                            document.querySelector('.question-box').scrollTop = scrollTop;
                        });
                    }

                    document.querySelectorAll('.course-card').forEach(card => {
                        card.addEventListener('click', () => selectCourse(card));
                    });
                }

                if (step === STEP_EXPERIENCE) {
                    document.querySelectorAll('.option-btn[data-exp]').forEach(btn => {
                        btn.addEventListener('click', () => selectExperience(btn));
                    });
                }

                if (step === STEP_START_PLAN) {
                    document.querySelectorAll('.option-btn[data-plan]').forEach(btn => {
                        btn.addEventListener('click', () => selectStartPlan(btn));
                    });
                }

                if (step === STEP_CONTACT) {
                    ['fullName', 'phone', 'email'].forEach(id => {
                        const el = document.getElementById(id);
                        if (el) el.addEventListener('input', updateNextButtonState);
                    });
                }
            }

            // ==========================================================
            // SELECTION HANDLERS
            // ==========================================================
            function selectUniversity(card) {
                if (state.isTransitioning) return;
                const id = Number(card.dataset.univId);
                const u = state.universities.find(x => x.id === id);
                if (!u) return;

                state.answers.university = {
                    id: u.id,
                    name: u.University_name,
                    logo: u.universities_logo,
                    fee: u.average_fee
                };

                state.answers.course = null;
                state.courses = [];
                state.filters.courseSearch = '';

                document.querySelectorAll('.univ-card').forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
                saveProgress();
                updateNextButtonState();

                state.isTransitioning = true;
                fetchCourses(u.id).then(() => {
                    setTimeout(() => {
                        state.currentStep = STEP_COURSE;
                        renderStep(STEP_COURSE);
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                        state.isTransitioning = false;
                    }, 200);
                });
            }

            function selectCourse(card) {
                if (state.isTransitioning) return;
                const id = Number(card.dataset.courseId);
                const c = state.courses.find(x => x.id === id);
                if (!c) return;

                state.answers.course = {
                    id: c.id,
                    degree: c.degree,
                    course_name: c.course_name,
                    years: c.years,
                    fee: c.fee,
                    course_level: c.course_level,
                    url: c.coursedeatils_url
                };

                document.querySelectorAll('.course-card').forEach(x => x.classList.remove('selected'));
                card.classList.add('selected');
                saveProgress();
                updateNextButtonState();

                state.isTransitioning = true;
                setTimeout(() => {
                    state.currentStep = STEP_EXPERIENCE;
                    renderStep(STEP_EXPERIENCE);
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    state.isTransitioning = false;
                }, 250);
            }

            function selectExperience(btn) {
                if (state.isTransitioning) return;
                const value = btn.dataset.exp;
                state.answers.experience = value;

                document.querySelectorAll('.option-btn[data-exp]').forEach(x => x.classList.remove('selected'));
                btn.classList.add('selected');
                saveProgress();
                updateNextButtonState();

                state.isTransitioning = true;
                setTimeout(() => {
                    state.currentStep = STEP_START_PLAN;
                    renderStep(STEP_START_PLAN);
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    state.isTransitioning = false;
                }, 300);
            }

            function selectStartPlan(btn) {
                if (state.isTransitioning) return;
                const value = btn.dataset.plan;
                state.answers.startPlan = value;

                document.querySelectorAll('.option-btn[data-plan]').forEach(x => x.classList.remove('selected'));
                btn.classList.add('selected');
                saveProgress();
                updateNextButtonState();

                state.isTransitioning = true;
                setTimeout(() => {
                    state.currentStep = STEP_CONTACT;
                    renderStep(STEP_CONTACT);
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    state.isTransitioning = false;
                }, 300);
            }

            // ==========================================================
            // PROGRESS + NEXT STATE
            // ==========================================================
            function buildProgress() {
                progressContainer.innerHTML = '';
                for (let i = 0; i < TOTAL_STEPS; i++) {
                    const dot = document.createElement('div');
                    dot.className = 'progress-dot';
                    if (i < state.currentStep) dot.classList.add('completed');
                    if (i === state.currentStep) dot.classList.add('active');
                    progressContainer.appendChild(dot);
                }
            }

            function updateNextButtonState() {
                if (state.currentStep === STEP_UNIVERSITY) {
                    nextBtn.disabled = !state.answers.university;
                } else if (state.currentStep === STEP_COURSE) {
                    nextBtn.disabled = !state.answers.course;
                } else if (state.currentStep === STEP_EXPERIENCE) {
                    nextBtn.disabled = !state.answers.experience;
                } else if (state.currentStep === STEP_START_PLAN) {
                    nextBtn.disabled = !state.answers.startPlan;
                } else if (state.currentStep === STEP_CONTACT) {
                    const name = document.getElementById('fullName')?.value.trim() || '';
                    const phone = document.getElementById('phone')?.value.trim() || '';
                    const email = document.getElementById('email')?.value.trim() || '';
                    nextBtn.disabled = !(name.length >= 2 && phone.length >= 6 && email.includes('@') && email.includes('.'));
                }
            }

            // ==========================================================
            // NEXT / BACK
            // ==========================================================
            nextBtn.addEventListener('click', async () => {
                if (state.currentStep === STEP_UNIVERSITY) {
                    if (!state.answers.university) return;
                    state.currentStep = STEP_COURSE;
                    if (state.courseLoadState !== 'success') {
                        await fetchCourses(state.answers.university.id);
                    } else {
                        renderStep(STEP_COURSE);
                    }
                } else if (state.currentStep === STEP_COURSE) {
                    if (!state.answers.course) return;
                    state.currentStep = STEP_EXPERIENCE;
                    renderStep(STEP_EXPERIENCE);
                } else if (state.currentStep === STEP_EXPERIENCE) {
                    if (!state.answers.experience) return;
                    state.currentStep = STEP_START_PLAN;
                    renderStep(STEP_START_PLAN);
                } else if (state.currentStep === STEP_START_PLAN) {
                    if (!state.answers.startPlan) return;
                    state.currentStep = STEP_CONTACT;
                    renderStep(STEP_CONTACT);
                } else if (state.currentStep === STEP_CONTACT) {
                    await handleSubmit();
                }
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            backBtn.addEventListener('click', () => {
                if (state.currentStep > 0) {
                    state.currentStep -= 1;
                    renderStep(state.currentStep);
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            });

            // ==========================================================
            // VALIDATION + SUBMIT
            // ==========================================================
            function validateContact() {
                const name = document.getElementById('fullName').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const email = document.getElementById('email').value.trim();

                let valid = true;
                const nameErr = document.getElementById('nameError');
                const phoneErr = document.getElementById('phoneError');
                const emailErr = document.getElementById('emailError');

                if (name.length < 2) {
                    nameErr.classList.add('show');
                    document.getElementById('fullName').classList.add('error');
                    valid = false;
                } else {
                    nameErr.classList.remove('show');
                    document.getElementById('fullName').classList.remove('error');
                }

                if (phone.replace(/\D/g, '').length < 6) {
                    phoneErr.classList.add('show');
                    document.getElementById('phone').classList.add('error');
                    valid = false;
                } else {
                    phoneErr.classList.remove('show');
                    document.getElementById('phone').classList.remove('error');
                }

                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    emailErr.classList.add('show');
                    document.getElementById('email').classList.add('error');
                    valid = false;
                } else {
                    emailErr.classList.remove('show');
                    document.getElementById('email').classList.remove('error');
                }

                if (!valid) return null;
                return { name, phone, email };
            }

            function getUtmParams() {
                const params = new URLSearchParams(window.location.search);
                const utm = {};
                ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid', 'fbclid'].forEach(k => {
                    const v = params.get(k);
                    if (v) utm[k] = v;
                });
                return utm;
            }

            function buildTimelineComment() {
                const pageUrl = window.location.href;
                const referrer = document.referrer || '—';
                const utm = getUtmParams();
                const utmLines = Object.keys(utm).length
                    ? ['', '📊 UTM PARAMS', '─────────────────────',
                        ...Object.entries(utm).map(([k, v]) => `${k}: ${v}`)]
                    : [];

                return [
                    '🎓 New CollegeAll Inquiry',
                    '═════════════════════════',
                    '🌐 SOURCE',
                    `URL: ${pageUrl}`,
                    `Referrer: ${referrer}`,
                    `Submitted: ${new Date().toLocaleString()}`,
                    ...utmLines,
                    '',
                    '🔄 STEP-BY-STEP FLOW',
                    '─────────────────────',
                    `Step 1 → University: ${state.answers.university?.name || '—'} (ID: ${state.answers.university?.id || '—'})`,
                    `Step 2 → Program: ${state.answers.course ? `${state.answers.course.degree} · ${state.answers.course.course_name} (ID: ${state.answers.course.id})` : '—'}`,
                    `         Duration: ${state.answers.course?.years || '—'} years`,
                    `         Fee: ${state.answers.course?.fee || '—'}`,
                    `Step 3 → Work Experience: ${state.answers.experience || '—'}`,
                    `Step 4 → Start Plan: ${state.answers.startPlan || '—'}`,
                    `Step 5 → Contact (below)`,
                    '',
                    '👤 CONTACT',
                    '─────────────────────',
                    `Name: ${state.answers.fullName}`,
                    `Phone: ${state.answers.phone}`,
                    `Email: ${state.answers.email}`,
                    '',
                    '🖥️ DEVICE',
                    '─────────────────────',
                    `User Agent: ${navigator.userAgent}`
                ].join('\n');
            }

            async function submitToBitrix() {
                const comment = buildTimelineComment();
                const payload = {
                    fields: {
                        TITLE: `CollegeAll Inquiry – ${state.answers.fullName}`,
                        NAME: state.answers.fullName,
                        PHONE: [{ VALUE: state.answers.phone, VALUE_TYPE: 'WORK' }],
                        EMAIL: [{ VALUE: state.answers.email, VALUE_TYPE: 'WORK' }],
                        SOURCE_ID: BITRIX_SOURCE_ID,
                        SOURCE_DESCRIPTION: window.location.href,
                        COMMENTS: comment,
                        STATUS_ID: 'NEW'
                    },
                    params: { REGISTER_SONET_EVENT: 'Y' }
                };

                try {
                    const res = await fetch(`${BITRIX_LEAD_WEBHOOK}/crm.lead.add.json`, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(payload)
                    });
                    const data = await res.json();

                    if (data.result) {
                        await fetch(`${BITRIX_LEAD_WEBHOOK}/crm.timeline.comment.add.json`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({
                                fields: {
                                    ENTITY_ID: data.result,
                                    ENTITY_TYPE: 'lead',
                                    COMMENT: comment
                                }
                            })
                        });
                        return { success: true, leadId: data.result };
                    }
                    return { success: false, error: data };
                } catch (err) {
                    return { success: false, error: err };
                }
            }

            async function handleSubmit() {
                const v = validateContact();
                if (!v) return;

                state.answers.fullName = v.name;
                state.answers.phone = v.phone;
                state.answers.email = v.email;
                saveProgress();

                nextBtn.disabled = true;
                nextBtn.textContent = 'Submitting…';

                const result = await submitToBitrix();

                if (!result.success) {
                    console.warn('Lead submission failed:', result.error);
                    nextBtn.disabled = false;
                    nextBtn.textContent = 'Retry Submission';
                    alert('We could not submit right now. Please check your connection and try again.');
                    return;
                }

                showSuccessPage();
            }

            // ==========================================================
            // SUCCESS PAGE
            // ==========================================================
            function showSuccessPage() {
                formFlow.style.display = 'none';
                successPage.classList.add('active');

                const u = state.answers.university;
                const c = state.answers.course;
                const courseLabel = c ? `${c.degree}${c.course_name ? ' · ' + c.course_name : ''}` : '—';

                successDetail.innerHTML = `
                    <strong>Name:</strong> ${esc(state.answers.fullName)}<br>
                    <strong>Email:</strong> ${esc(state.answers.email)}<br>
                    <strong>Phone:</strong> ${esc(state.answers.phone)}<br>
                    <strong>University:</strong> ${esc(u?.name || '—')}<br>
                    <strong>Program:</strong> ${esc(courseLabel)}<br>
                    <strong>Experience:</strong> ${esc(state.answers.experience || '—')}<br>
                    <strong>Start Plan:</strong> ${esc(state.answers.startPlan || '—')}
                `;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            doneBtn.addEventListener('click', () => {
                formFlow.style.display = 'block';
                successPage.classList.remove('active');
                clearCookie(COOKIE_NAME);

                state.answers = {
                    university: null, course: null, experience: null, startPlan: null,
                    fullName: '', phone: '', email: ''
                };
                state.filters = { universitySearch: '', courseSearch: '' };
                state.courses = [];
                state.courseLoadState = 'idle';
                state.currentStep = STEP_UNIVERSITY;

                // Re-fetch universities — will load from cache if available
                fetchUniversities();
            });

            // ==========================================================
            // INIT
            // ==========================================================
            async function init() {
                const saved = loadProgress();
                // Fetch universities — uses cookie cache if available
                await fetchUniversities();

                if (saved && saved.university) {
                    state.answers.university = saved.university;
                    state.answers.course = saved.course || null;
                    state.answers.experience = saved.experience || null;
                    state.answers.startPlan = saved.startPlan || null;
                    state.answers.fullName = saved.fullName || '';
                    state.answers.phone = saved.phone || '';
                    state.answers.email = saved.email || '';

                    renderStep(STEP_UNIVERSITY);

                    if (saved.course || saved.currentStep > STEP_UNIVERSITY) {
                        // Fetch courses — uses cookie cache if available
                        await fetchCourses(saved.university.id);
                        if (saved.course) state.answers.course = saved.course;

                        const resumeStep = Math.min(saved.currentStep ?? STEP_UNIVERSITY, TOTAL_STEPS - 1);
                        state.currentStep = resumeStep;
                        renderStep(resumeStep);
                    }
                } else {
                    renderStep(STEP_UNIVERSITY);
                }
            }

            init();
        })();
    </script>
</body>
</html>