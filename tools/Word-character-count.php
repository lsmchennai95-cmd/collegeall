<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
    <title>Word & Character Counter</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="../index.css">
    <style>
        :root {
            --bg: #0f1724;
            /* deep blue */
            --card: #0b1220;
            --muted: #9aa4b2;
            --accent: #06b6d4;
            --glass: rgba(255, 255, 255, 0.03);
        }

        .word-counter {
            margin: 0;
            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: linear-gradient(180deg, #071327 0%, #071b2a 100%);
            color: #e6eef6;
            -webkit-font-smoothing: antialiased;
            padding: 32px;
            min-height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .word-counter .wrap {
            width: 100%;
            max-width: 980px
        }

        .word-counter header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 18px
        }

        .word-counter header h1 {
            font-size: 20px;
            margin: 0
        }

        .word-counter .card {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
            border-radius: 12px;
            padding: 18px;
            box-shadow: 0 6px 20px rgba(2, 6, 23, 0.6);
        }

        .word-counter .layout {
            display: grid;
            grid-template-columns: 1fr 320px;
            gap: 16px
        }

        .word-counter textarea {
            width: 100%;
            min-height: 360px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.04);
            background: var(--glass);
            color: inherit;
            padding: 14px;
            font-size: 15px;
            resize: vertical
        }

        .word-counter .controls {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 10px
        }

        .word-counter button {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.06);
            padding: 8px 10px;
            border-radius: 8px;
            color: var(--muted);
            cursor: pointer
        }

        .word-counter button.primary {
            background: linear-gradient(90deg, var(--accent), #7dd3fc);
            color: #042a2d;
            border: 0
        }

        .word-counter .stats {
            display: flex;
            flex-direction: column;
            gap: 10px
        }

        .word-counter .stat-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-radius: 8px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.01), rgba(255, 255, 255, 0.005));
        }

        .word-counter .stat-title {
            font-size: 13px;
            color: var(--muted)
        }

        .word-counter .stat-value {
            font-weight: 600
        }

        .word-counter .small {
            font-size: 12px;
            color: var(--muted)
        }

        .word-counter .progress {
            height: 8px;
            background: rgba(255, 255, 255, 0.04);
            border-radius: 999px;
            overflow: hidden
        }

        .word-counter .progress>i {
            display: block;
            height: 100%;
            background: linear-gradient(90deg, var(--accent), #60a5fa);
            width: 0%
        }

        .word-counter .footer-actions {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: 10px
        }

        .word-counter .input-row {
            display: flex;
            gap: 8px;
            align-items: center
        }

        .word-counter label {
            font-size: 12px;
            color: var(--muted)
        }

        .word-counter input[type=number] {
            width: 84px;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.04);
            background: transparent;
            color: inherit
        }

        .word-counter .meta {
            font-size: 12px;
            color: var(--muted);
            margin-top: 8px
        }

        @media (max-width:880px) {
            .word-counter .layout {
                grid-template-columns: 1fr;
            }

            .word-counter .card {
                padding: 12px
            }

            .word-counter .wrap {
                padding: 12px
            }
        }
    </style>
</head>

<body>
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>
    
    <div class="word-counter">
        <main class="wrap">
            <header>
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" aria-hidden>
                    <rect x="2" y="3" width="20" height="18" rx="3" fill="#07202a" />
                    <path d="M7 8h10M7 12h6" stroke="#06b6d4" stroke-width="1.4" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <div>
                    <h1>Word & Character Counter</h1>
                    <div class="small">Live counts, reading time, copy/export and more — keyboard friendly & accessible.
                    </div>
                </div>
            </header>

            <section class="card layout" aria-labelledby="counter-title">
                <div>
                    <label for="text" style="display:block;margin-bottom:8px;color:var(--muted);font-size:13px">Enter
                        text</label>
                    <textarea id="text" placeholder="Paste or type your text here..." spellcheck="true"
                        aria-describedby="help"></textarea>

                    <div class="controls" role="toolbar" aria-label="text actions">
                        <button id="btn-copy">Copy</button>
                        <button id="btn-select">Select all</button>
                        <button id="btn-clear">Clear</button>
                        <button id="btn-download">Download .txt</button>
                        <button id="btn-uppercase">UPPERCASE</button>
                        <button id="btn-lowercase">lowercase</button>
                        <button id="btn-titlecase">Title Case</button>
                    </div>

                    <div id="help" class="meta">Tip: Use keyboard shortcuts — Ctrl/Cmd + A to select, Ctrl/Cmd + C to copy.
                        Reading speed used: 200 wpm.</div>
                </div>

                <aside class="stats" aria-label="statistics panel">
                    <div class="stat-row" title="Words">
                        <div>
                            <div class="stat-title">Words</div>
                            <div class="stat-value" id="words">0</div>
                        </div>
                        <div class="small" id="longest-word">—</div>
                    </div>

                    <div class="stat-row" title="Characters (including spaces)">
                        <div>
                            <div class="stat-title">Characters (with spaces)</div>
                            <div class="stat-value" id="chars">0</div>
                        </div>
                        <div class="small" id="chars-with-spaces">—</div>
                    </div>

                    <div class="stat-row" title="Characters (excluding spaces)">
                        <div>
                            <div class="stat-title">Characters (no spaces)</div>
                            <div class="stat-value" id="chars-nospace">0</div>
                        </div>
                        <div class="small" id="avg-word-length">—</div>
                    </div>

                    <div class="stat-row" title="Estimated reading time">
                        <div>
                            <div class="stat-title">Reading time</div>
                            <div class="stat-value" id="read-time">0 min</div>
                        </div>
                        <div class="small" id="wpm-indicator">200 wpm</div>
                    </div>

                    <div style="padding-top:6px">
                        <div class="stat-title" style="margin-bottom:6px">Progress to goal</div>
                        <div class="input-row">
                            <input id="goal" type="number" min="1" value="300" aria-label="word goal">
                            <div class="small">word goal</div>
                        </div>
                        <div style="margin-top:8px" class="progress" aria-hidden><i id="progress-bar"></i></div>
                    </div>

                    <div class="footer-actions">
                        <div style="display:flex;gap:8px">
                            <button class="primary" id="btn-analyze">Analyze</button>
                            <button id="btn-clear-stats">Reset</button>
                        </div>

                        <div class="small">Selection: <span id="selection-stats">0 chars</span></div>
                    </div>
                </aside>

            </section>
        </main>
    </div>

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Utility: robust unicode-aware word matcher with graceful fallback
        function extractWords(text) {
            if (!text) return [];
            try {
                // match words with Unicode letters/numbers, include apostrophes
                const words = text.match(/[\p{L}\p{N}']+/gu);
                return words || [];
            } catch (e) {
                // fallback for older browsers
                const words = text.match(/[A-Za-z0-9']+/g);
                return words || [];
            }
        }

        function formatMinutes(mins) {
            if (mins < 1) return Math.ceil(mins * 60) + ' sec';
            if (mins < 2) return '1 min';
            return Math.round(mins) + ' min';
        }

        const el = {
            text: document.getElementById('text'),
            words: document.getElementById('words'),
            chars: document.getElementById('chars'),
            charsNo: document.getElementById('chars-nospace'),
            readTime: document.getElementById('read-time'),
            wpmInd: document.getElementById('wpm-indicator'),
            longestWord: document.getElementById('longest-word'),
            avgWordLen: document.getElementById('avg-word-length'),
            selectionStats: document.getElementById('selection-stats'),
            goal: document.getElementById('goal'),
            progressBar: document.getElementById('progress-bar'),
            btnCopy: document.getElementById('btn-copy'),
            btnClear: document.getElementById('btn-clear'),
            btnSelect: document.getElementById('btn-select'),
            btnDownload: document.getElementById('btn-download'),
            btnUpper: document.getElementById('btn-uppercase'),
            btnLower: document.getElementById('btn-lowercase'),
            btnTitle: document.getElementById('btn-titlecase'),
            btnAnalyze: document.getElementById('btn-analyze'),
            btnClearStats: document.getElementById('btn-clear-stats')
        };

        function analyze() {
            const text = el.text.value;
            const chars = text.length;
            const charsNoSpaces = text.replace(/\s+/g, '').length;
            const words = extractWords(text);
            const wordCount = words.length;
            const avgWordLength = wordCount ? (charsNoSpaces / wordCount).toFixed(2) : '—';
            const longest = words.reduce((a, b) => b.length > a.length ? b : a, '');

            // reading time at 200 wpm default
            const wpm = 200;
            const minutes = wordCount / wpm;

            el.words.textContent = wordCount.toLocaleString();
            el.chars.textContent = chars.toLocaleString();
            el.charsNo.textContent = charsNoSpaces.toLocaleString();
            el.readTime.textContent = formatMinutes(minutes);
            el.wpmInd.textContent = wpm + ' wpm';
            el.longestWord.textContent = longest || '—';
            el.avgWordLen.textContent = avgWordLength === '—' ? '—' : avgWordLength + ' avg len';

            // progress
            const goal = Math.max(1, Number(el.goal.value) || 300);
            const pct = Math.min(100, Math.round((wordCount / goal) * 100));
            el.progressBar.style.width = pct + '%';
            el.progressBar.setAttribute('aria-valuenow', pct);

            // selection stats
            const sel = window.getSelection().toString();
            if (sel) {
                const selWords = extractWords(sel).length;
                el.selectionStats.textContent = `${sel.length} chars, ${selWords} words`;
            } else {
                el.selectionStats.textContent = '0 chars';
            }
        }

        // events
        el.text.addEventListener('input', analyze);
        el.text.addEventListener('select', analyze);
        document.addEventListener('selectionchange', analyze);

        // buttons
        el.btnCopy.addEventListener('click', async () => {
            try {
                await navigator.clipboard.writeText(el.text.value);
                el.btnCopy.textContent = 'Copied!';
                setTimeout(() => el.btnCopy.textContent = 'Copy', 1200);
            } catch (e) {
                // fallback
                el.text.select();
                document.execCommand('copy');
                el.btnCopy.textContent = 'Copied!';
                setTimeout(() => el.btnCopy.textContent = 'Copy', 1200);
            }
        });

        el.btnSelect.addEventListener('click', () => {
            el.text.focus(); el.text.select(); analyze();
        });

        el.btnClear.addEventListener('click', () => {
            el.text.value = '';
            analyze();
            el.text.focus();
        });

        el.btnDownload.addEventListener('click', () => {
            const blob = new Blob([el.text.value], { type: 'text/plain;charset=utf-8' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url; a.download = 'text.txt'; document.body.appendChild(a); a.click(); a.remove();
            URL.revokeObjectURL(url);
        });

        function toTitleCase(s) {
            return s.replace(/(\w)([^\s\-]*)/g, (m, p1, p2) => p1.toUpperCase() + p2.toLowerCase());
        }

        el.btnUpper.addEventListener('click', () => { el.text.value = el.text.value.toUpperCase(); analyze(); });
        el.btnLower.addEventListener('click', () => { el.text.value = el.text.value.toLowerCase(); analyze(); });
        el.btnTitle.addEventListener('click', () => { el.text.value = toTitleCase(el.text.value); analyze(); });

        el.btnAnalyze.addEventListener('click', analyze);
        el.btnClearStats.addEventListener('click', () => {
            el.text.value = '';
            el.goal.value = 300;
            analyze();
        });

        // keyboard shortcut: Ctrl/Cmd+K to focus textarea
        document.addEventListener('keydown', (e) => {
            if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
                e.preventDefault(); el.text.focus();
            }
        });

        // initial analyze
        analyze();
    </script>
</body>

</html>