<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Attendance Calculator | Required Classes & Projection Tool</title>
    <meta name="description" content="Advanced Attendance Calculator — compute your current attendance, classes needed to reach a target percentage, allowed misses, and simulate upcoming sessions. Mobile-friendly and accurate.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/attendance-calculator.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Attendance Calculator | Required Classes & Projection Tool">
    <meta property="og:description" content="Advanced Attendance Calculator — compute your current attendance, classes needed to reach a target percentage, allowed misses, and simulate upcoming sessions. Mobile-friendly and accurate.">
    <meta property="og:url" content="https://collegeall.com/tools/attendance-calculator.php">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Attendance Calculator | Required Classes & Projection Tool">
    <meta name="twitter:description" content="Advanced Attendance Calculator — compute your current attendance, classes needed to reach a target percentage, allowed misses, and simulate upcoming sessions. Mobile-friendly and accurate.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Attendance Calculator",
      "description": "Advanced Attendance Calculator — compute your current attendance, classes needed to reach a target percentage, allowed misses, and simulate upcoming sessions. Mobile-friendly and accurate.",
      "url": "https://collegeall.com/tools/attendance-calculator.php",
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
    <meta charset="utf-8" />    <meta name="viewport" content="width=device-width,initial-scale=1" />    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <!-- SEO Meta -->    <meta name="keywords"        content="attendance calculator, classes needed, attendance percentage, attendance tracker, percentage to attend, allowed absences, attendance planner, student attendance tool">    <!-- Bootstrap -->    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">    <!-- Font -->    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">    <link rel="stylesheet" href="../index.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">    <style>        :root {            --card-radius: 18px;            --primary: #0d6efd;            --bg: #f4f7ff;        }        body {            min-height: 100vh;            transition: background .25s, color .25s;        }        .attendance-container .app-card {            border-radius: var(--card-radius);            padding: 28px;            background: #fff;            box-shadow: 0 8px 30px rgba(13, 110, 253, .06);            transition: transform .18s ease;        }        .attendance-container .app-card:hover {            transform: translateY(-4px);        }        .attendance-container .title {            font-weight: 700;            font-size: 1.35rem;        }        .attendance-container .muted {            color: #6b7280;        }        .attendance-container .history-box {            max-height: 220px;            overflow: auto;            border-left: 3px solid var(--primary);            padding-left: 14px;        }        /* small helper styles */        .attendance-container .result-badge {            font-size: 1rem;            font-weight: 600;        }        /* Dark mode */        body.dark-mode {            background: #0b1220;            color: #e6eef8;        }        .dark-mode .app-card {            background: #0f1724;            box-shadow: 0 8px 30px rgba(255, 255, 255, .03);        }        .dark-mode .input-box,        .dark-mode label,        .dark-mode select {            background: #091226;            color: #e6eef8;            border-color: #1f2937;        }        .dark-mode .history-box {            border-left-color: #60a5fa;        }        .btn-ghost {            background: transparent;            border: 1px solid rgba(13, 110, 253, .12);        }        @media (max-width:575px) {            .app-card {                padding: 20px;            }        }    </style></head>

<body>

<?php include COLLEGEALL_ROOT . '/header.php'; ?>

    <main class="container attendance-container py-5">
        <div class="d-flex justify-content-end">
            <button class="btn btn-light shadow-lg ms-auto mb-3" id="toggleDark">Dark Mode</button>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-10">

                <div class="app-card">

                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div>
                            <div class="title">Attendance Calculator</div>
                            <div class="muted small">Calculate required/allowed classes and simulate outcomes.</div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-ghost btn-outline-success btn-sm" id="saveBtn" title="Save current inputs to history">Save</button>
                            <button class="btn btn-outline-secondary btn-sm" id="clearHistory">Clear History</button>
                        </div>
                    </div>

                    <!-- Input row -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Classes Attended</label>
                            <input type="number" id="attended" class="form-control input-box" min="0" step="1" placeholder="e.g., 32">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Total Classes Conducted</label>
                            <input type="number" id="total" class="form-control input-box" min="1" step="1" placeholder="e.g., 40">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Minimum Attendance Required %</label>
                            <input type="number" id="minRequired" class="form-control input-box" min="0" max="100" step="0.1" placeholder="e.g., 75">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Target % (optional)</label>
                            <input type="number" id="targetPercent" class="form-control input-box" min="0" max="100" step="0.1" placeholder="e.g., 85">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Upcoming Classes to Simulate</label>
                            <input type="number" id="futureClasses" class="form-control input-box" min="0" step="1" placeholder="e.g., 10">
                        </div>

                        <div class="col-md-4 d-flex align-items-end">
                            <button class="btn btn-primary w-100" id="calcBtn">Calculate</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div id="errorBox" class="text-danger small" role="alert" style="display:none;"></div>
                    </div>

                    <!-- Results -->
                    <div id="results" style="display:none;">
                        <h6 class="mb-2">Results</h6>

                        <div class="row gy-2">
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 border">
                                    <div class="small text-secondary">Current Attendance</div>
                                    <div class="fs-4 fw-bold" id="currentPercent"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="p-3 rounded-3 border">
                                    <div class="small text-secondary">Allowed Misses to Stay ≥ Min</div>
                                    <div class="fs-5" id="allowedMisses"></div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="p-3 rounded-3 border">
                                    <div class="small text-secondary">Classes to Attend to Reach Target</div>
                                    <div class="fs-5" id="classesToTarget"></div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="p-3 rounded-3 border">
                                    <div class="small text-secondary">Projection after Simulation</div>
                                    <div class="fs-5" id="projectionResult"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 d-flex gap-2">
                            <button class="btn btn-outline-primary btn-sm" id="copyBtn">Copy Result</button>
                            <button class="btn btn-outline-success btn-sm" id="exportBtn">Export CSV</button>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="fw-semibold">Saved Calculations</div>
                        <div class="small muted">Saved locally in your browser</div>
                    </div>

                    <div class="history-box" id="historyList">
                        <!-- history items inserted here -->
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Utility & DOM
        const attendedEl = document.getElementById('attended');
        const totalEl = document.getElementById('total');
        const minReqEl = document.getElementById('minRequired');
        const targetEl = document.getElementById('targetPercent');
        const futureEl = document.getElementById('futureClasses');

        const calcBtn = document.getElementById('calcBtn');
        const resultsBox = document.getElementById('results');
        const errorBox = document.getElementById('errorBox');

        const currentPercentEl = document.getElementById('currentPercent');
        const allowedMissesEl = document.getElementById('allowedMisses');
        const classesToTargetEl = document.getElementById('classesToTarget');
        const projectionResultEl = document.getElementById('projectionResult');

        const historyList = document.getElementById('historyList');
        const saveBtn = document.getElementById('saveBtn');
        const clearHistoryBtn = document.getElementById('clearHistory');
        const copyBtn = document.getElementById('copyBtn');
        const exportBtn = document.getElementById('exportBtn');
        const toggleDarkBtn = document.getElementById('toggleDark');

        // Basic helpers
        function showError(msg) {
            errorBox.style.display = 'block';
            errorBox.textContent = msg;
            resultsBox.style.display = 'none';
        }

        function hideError() {
            errorBox.style.display = 'none';
            errorBox.textContent = '';
        }

        // Core calculation functions
        function computeCurrentPercentage(attended, total) {
            if (total === 0) return 0;
            return (attended / total) * 100;
        }

        // Given attended, total, and targetPercent (T), returns minimal number of consecutive attendances required
        // Solve (attended + x) / (total + x) * 100 >= T
        // => (attended + x) >= (T/100)*(total + x)
        // => x*(1 - T/100) >= (T/100)*total - attended
        // If T == 100, impossible unless attended==total==infinite; handle separately.
        function classesToReachTarget(attended, total, T) {
            if (T <= computeCurrentPercentage(attended, total)) return 0;
            if (T >= 100) {
                return Infinity;
            }
            const t = T / 100;
            const denom = 1 - t;
            if (denom <= 0) return Infinity;
            const need = (t * total - attended) / denom;
            const x = Math.ceil(Math.max(0, need));
            return x;
        }

        // How many classes you can miss and still maintain >= minPercent
        // Let m = misses allowed (integer, could be negative)
        // After missing m classes, new attended = attended, new total = total + m
        // Requirement: attended / (total + m) * 100 >= minPercent
        // => total + m <= attended / (minPercent/100)
        // => m <= attended/(minPercent/100) - total
        function allowedMisses(attended, total, minPercent) {
            if (minPercent <= 0) return Infinity;
            const capTotal = attended / (minPercent / 100);
            const maxM = Math.floor(capTotal - total);
            return maxM;
        }

        // Projection after futureClasses: ask user how many of those will be attended vs missed
        // We'll provide two projections: attendAll and missAll, and interactive breakdown prompt to user (simple)
        function projectionAfterSimulation(attended, total, future) {
            const attendAllPercent = computeCurrentPercentage(attended + future, total + future);
            const missAllPercent = computeCurrentPercentage(attended, total + future);
            return {
                attendAllPercent: attendAllPercent,
                missAllPercent: missAllPercent
            };
        }

        // Format percent
        function fmtPct(v) {
            return (isFinite(v) ? v.toFixed(2) + '%' : '—');
        }

        // Event: Calculate
        calcBtn.addEventListener('click', () => {
            hideError();
            const attended = parseInt(attendedEl.value ?? '') || 0;
            const total = parseInt(totalEl.value ?? '') || 0;
            const minReq = parseFloat(minReqEl.value ?? '');
            const target = parseFloat(targetEl.value ?? '');
            const future = parseInt(futureEl.value ?? '') || 0;

            // Validation
            if (total <= 0) {
                showError('Please enter a valid Total Classes Conducted (> 0).');
                return;
            }
            if (attended < 0 || attended > total) {
                showError('Attended classes must be between 0 and Total Classes.');
                return;
            }
            if (minReq !== undefined && !isNaN(minReq) && (minReq < 0 || minReq > 100)) {
                showError('Minimum Required % must be between 0 and 100.');
                return;
            }
            if (target !== undefined && !isNaN(target) && (target < 0 || target > 100)) {
                showError('Target % must be between 0 and 100.');
                return;
            }
            if (future < 0) {
                showError('Upcoming classes to simulate must be 0 or positive.');
                return;
            }

            // Compute
            const currentPct = computeCurrentPercentage(attended, total);
            currentPercentEl.textContent = fmtPct(currentPct) + ` ( ${attended} / ${total} )`;

            // Allowed misses to stay >= minReq
            let allowedMissText = '—';
            if (!isNaN(minReq)) {
                const allowed = allowedMisses(attended, total, minReq);
                if (!isFinite(allowed)) allowedMissText = 'No limit';
                else if (allowed < 0) allowedMissText = 'You are below required % already';
                else allowedMissText = allowed + ' class(es)';
            } else {
                allowedMissText = 'Enter Min Required %';
            }
            allowedMissesEl.textContent = allowedMissText;

            // Classes to reach target
            let classesToTargetText = '—';
            if (!isNaN(target)) {
                const needed = classesToReachTarget(attended, total, target);
                if (!isFinite(needed)) classesToTargetText = 'Impossible / target too high';
                else classesToTargetText = needed + ' class(es) (attend consecutively)';
            } else {
                classesToTargetText = 'Enter Target %';
            }
            classesToTargetEl.textContent = classesToTargetText;

            // Projection
            const proj = projectionAfterSimulation(attended, total, future);
            projectionResultEl.innerHTML = `
        If you attend all ${future} upcoming: <strong>${fmtPct(proj.attendAllPercent)}</strong><br>
        If you miss all ${future} upcoming: <strong>${fmtPct(proj.missAllPercent)}</strong>
      `;

            // Show results
            resultsBox.style.display = 'block';
            // scroll to results lightly
            resultsBox.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
        });

        // History persistence (localStorage)
        const STORAGE_KEY = 'attendance_calc_history_v1';

        function loadHistory() {
            const raw = localStorage.getItem(STORAGE_KEY);
            try {
                const arr = raw ? JSON.parse(raw) : [];
                renderHistory(arr);
            } catch (e) {
                localStorage.removeItem(STORAGE_KEY);
                renderHistory([]);
            }
        }

        function saveToHistory(item) {
            const raw = localStorage.getItem(STORAGE_KEY);
            const arr = raw ? JSON.parse(raw) : [];
            arr.unshift(item);
            // keep last 50
            if (arr.length > 50) arr.splice(50);
            localStorage.setItem(STORAGE_KEY, JSON.stringify(arr));
            renderHistory(arr);
        }

        function clearHistory() {
            localStorage.removeItem(STORAGE_KEY);
            renderHistory([]);
        }

        function renderHistory(arr) {
            historyList.innerHTML = '';
            if (!arr || arr.length === 0) {
                historyList.innerHTML = '<div class="small muted p-2">No saved calculations yet.</div>';
                return;
            }
            arr.forEach((h, idx) => {
                const el = document.createElement('div');
                el.className = 'mb-2 small';
                el.innerHTML = `
          <div><strong>${h.label}</strong></div>
          <div class="muted small">Attended: ${h.attended} / ${h.total} • Curr: ${h.currentPct} • Saved: ${new Date(h.ts).toLocaleString()}</div>
          <div class="mt-1"><button class="btn btn-sm btn-outline-secondary loadBtn" data-idx="${idx}">Load</button> <button class="btn btn-sm btn-outline-danger delBtn" data-idx="${idx}">Delete</button></div>
          <hr class="my-2">
        `;
                historyList.appendChild(el);

                // attach events after append
            });

            // attach event listeners for load & delete (delegation)
            const loadBtns = historyList.querySelectorAll('.loadBtn');
            loadBtns.forEach(btn => btn.addEventListener('click', (e) => {
                const raw = localStorage.getItem(STORAGE_KEY);
                if (!raw) return;
                const arr = JSON.parse(raw);
                const idx = parseInt(e.target.dataset.idx);
                const item = arr[idx];
                if (!item) return;
                attendedEl.value = item.attended;
                totalEl.value = item.total;
                minReqEl.value = item.minReq;
                targetEl.value = item.target;
                futureEl.value = item.future;
                // trigger calc
                calcBtn.click();
            }));

            const delBtns = historyList.querySelectorAll('.delBtn');
            delBtns.forEach(btn => btn.addEventListener('click', (e) => {
                const idx = parseInt(e.target.dataset.idx);
                const raw = localStorage.getItem(STORAGE_KEY);
                if (!raw) return;
                const arr = JSON.parse(raw);
                arr.splice(idx, 1);
                localStorage.setItem(STORAGE_KEY, JSON.stringify(arr));
                renderHistory(arr);
            }));
        }

        // Save current inputs to history
        saveBtn.addEventListener('click', () => {
            const attended = parseInt(attendedEl.value ?? '') || 0;
            const total = parseInt(totalEl.value ?? '') || 0;
            const minReq = parseFloat(minReqEl.value ?? '') || null;
            const target = parseFloat(targetEl.value ?? '') || null;
            const future = parseInt(futureEl.value ?? '') || 0;
            if (total <= 0) {
                showError('Enter valid total classes before saving.');
                return;
            }
            const currentPct = computeCurrentPercentage(attended, total);
            const item = {
                attended,
                total,
                minReq,
                target,
                future,
                currentPct: currentPct.toFixed(2) + '%',
                label: `A:${attended}/T:${total} • ${currentPct.toFixed(2)}%`,
                ts: Date.now()
            };
            saveToHistory(item);
        });

        clearHistoryBtn.addEventListener('click', () => {
            if (confirm('Clear all saved calculations?')) clearHistory();
        });

        // Copy result to clipboard
        copyBtn.addEventListener('click', async () => {
            const attended = attendedEl.value || 0;
            const total = totalEl.value || 0;
            const current = currentPercentEl.textContent || '';
            const allowed = allowedMissesEl.textContent || '';
            const classesTo = classesToTargetEl.textContent || '';
            const proj = projectionResultEl.textContent || '';
            const txt = `Attendance: ${attended}/${total}\nCurrent: ${current}\nAllowed Misses: ${allowed}\nTo Reach Target: ${classesTo}\nSimulation: ${proj}`;
            try {
                await navigator.clipboard.writeText(txt);
                alert('Result copied to clipboard');
            } catch (e) {
                alert('Copy failed — your browser may block clipboard access.');
            }
        });

        // Export CSV of history
        exportBtn.addEventListener('click', () => {
            const raw = localStorage.getItem(STORAGE_KEY);
            const arr = raw ? JSON.parse(raw) : [];
            if (!arr.length) {
                alert('No saved calculations to export.');
                return;
            }
            // CSV header
            const rows = [
                ['label', 'attended', 'total', 'currentPct', 'minReq', 'target', 'future', 'timestamp']
            ];
            arr.forEach(a => rows.push([a.label, a.attended, a.total, a.currentPct, a.minReq, a.target, a.future, new Date(a.ts).toISOString()]));
            const csv = rows.map(r => r.map(cell => `"${String(cell).replace(/"/g,'""')}"`).join(',')).join('\n');
            const blob = new Blob([csv], {
                type: 'text/csv'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'attendance_history.csv';
            document.body.appendChild(a);
            a.click();
            a.remove();
            URL.revokeObjectURL(url);
        });

        // Dark Mode Toggle
        toggleDarkBtn.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            toggleDarkBtn.textContent = document.body.classList.contains('dark-mode') ? 'Light Mode' : 'Dark Mode';
        });

        // Init
        loadHistory();

        // Pre-fill example values for faster testing (optional)
        // attendedEl.value = 32; totalEl.value = 40; minReqEl.value = 75; targetEl.value = 85; futureEl.value = 10;
    </script>
</body>

</html>