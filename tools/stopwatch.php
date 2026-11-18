<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
    <title>Stopwatch — Online Timer with Laps, CSV Export & Split Time Tracking</title>
    <meta name="description" content="Use this free online stopwatch to track time accurately with lap recording, split tracking, pause/resume, and CSV export. Fast, responsive, keyboard-friendly, and ideal for productivity, workouts, events, and timing tasks.">
    <meta name="keywords" content="stopwatch online, stopwatch timer, lap timer, online stopwatch with laps, stopwatch csv export, time tracker online, split time stopwatch, web stopwatch, free stopwatch tool, timer with laps">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://collegeall.com/assets/css/all.min.css">
    <link rel="stylesheet" href="../index.css">
    <style>
        :root {
            --bg: #0f1724;
            --card: #0b1220;
            --accent: #6ee7b7;
            --muted: #94a3b8;
            --glass: rgba(255, 255, 255, 0.04);
            --radius: 14px;
            --glass-2: rgba(255, 255, 255, 0.02);
        }

        .wrap {
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrap .card {
            width: 920px;
            max-width: 96vw;
            background: linear-gradient(180deg, var(--card), rgba(11, 18, 32, 0.9));
            border-radius: var(--radius);
            padding: 28px;
            box-shadow: 0 10px 30px rgba(2, 6, 23, 0.6);
            display: grid;
            grid-template-columns: 1fr 360px;
            gap: 20px
        }

        .wrap .header {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            gap: 12px
        }

        .wrap .title {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.2px;
            color: var(--accent);
        }

        .wrap .subtitle {
            color: var(--muted);
            font-size: 13px
        }

        .wrap .display {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            gap: 14px;
            align-items: center;
            justify-content: center;
            padding: 22px;
            border-radius: 12px;
            background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.02), transparent);
            backdrop-filter: blur(4px)
        }

        .wrap .time {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, "Roboto Mono", monospace;
            font-size: 48px;
            font-weight: 700;
            color: white;
        }

        .wrap .controls {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center
        }

        .wrap button {
            background: var(--glass);
            border: 1px solid rgba(255, 255, 255, 0.03);
            color: var(--accent);
            padding: 10px 14px;
            border-radius: 10px;
            font-weight: 700;
            cursor: pointer;
            transition: transform .12s ease, opacity .12s
        }

        .wrap button:active {
            transform: translateY(1px)
        }

        .wrap button.secondary {
            background: transparent;
            color: var(--muted);
            border: 1px dashed rgba(255, 255, 255, 0.03);
            font-weight: 600
        }

        .wrap button.positive {
            background: linear-gradient(90deg, #10b981, #34d399);
            color: #021018;
            border: 0
        }

        .wrap button.warn {
            background: linear-gradient(90deg, #f97316, #fb923c);
            color: #2b0f00;
            border: 0
        }

        .wrap .right-panel {
            display: flex;
            flex-direction: column;
            gap: 12px
        }

        .wrap .panel {
            background: var(--glass-2);
            padding: 14px;
            border-radius: 12px;
            min-height: 120px;
            overflow: auto
        }

        .wrap .laps {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 8px
        }

        .wrap .lap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px;
            border-radius: 8px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.01), transparent);
            border: 1px solid rgba(255, 255, 255, 0.01)
        }

        .wrap .lap strong {
            font-family: ui-monospace, monospace
        }

        .wrap .lap small {
            color: var(--muted);
            font-size: 12px
        }

        .wrap .actions {
            display: flex;
            gap: 8px;
            align-items: center
        }

        .wrap .meta {
            font-size: 13px;
            color: var(--muted)
        }

        .wrap .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .wrap .search {
            width: 100%;
            padding: 8px;
            border-radius: 10px;
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.02);
            color: inherit
        }

        @media (max-width:880px) {
            .wrap .card {
                grid-template-columns: 1fr
            }

            .wrap .time{
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <?php echo file_get_contents('https://collegeall.com/header.php'); ?>

    <div class="wrap py-3">
        <div class="card" role="application" aria-label="Stopwatch app">
            <div>
                <div class="header">
                    <div class="title">Stopwatch</div>
                    <div class="subtitle">Start, pause, record laps and export them as CSV.</div>
                </div>

                <div class="display" style="margin-top:18px">
                    <div class="time" id="display">00:00:00.000</div>
                    <div class="controls" id="controls">
                        <button id="startBtn" class="positive">Start</button>
                        <button id="stopBtn" class="secondary" disabled>Stop</button>
                        <button id="lapBtn" class="secondary" disabled>Lap</button>
                        <button id="resumeBtn" class="positive" style="display:none">Resume</button>
                        <button id="resetBtn" class="warn" disabled>Reset</button>
                    </div>
                </div>

                <div style="margin-top:14px;display:flex;gap:10px;align-items:center;justify-content:space-between">
                    <div class="meta" id="info">Elapsed: <span id="elapsed">00:00:00.000</span></div>
                    <div class="actions">
                        <button id="exportBtn" class="secondary" disabled>Export CSV</button>
                        <button id="clearLapsBtn" class="secondary" disabled>Clear Laps</button>
                    </div>
                </div>
            </div>

            <div class="right-panel">
                <div class="panel" style="display:flex;flex-direction:column;gap:8px">
                    <div class="toolbar">
                        <div style="font-weight:700">Laps</div>
                        <div style="font-size:12px;color:var(--muted)">Count: <span id="lapCount">0</span></div>
                    </div>

                    <ul class="laps" id="lapsList" aria-live="polite" aria-relevant="additions"></ul>
                </div>

                <div class="panel" style="display:flex;flex-direction:column;gap:8px">
                    <div style="font-weight:700">Quick Tips</div>
                    <div class="meta">Use Start → Lap to record split times. Stop pauses the clock. Resume continues.
                        Reset clears everything.</div>
                    <div class="meta">CSV export includes lap number, cumulative timestamp, and lap duration (ms).</div>
                </div>
            </div>

            <footer class="text-white">Keyboard: Space = Start/Stop, L = Lap, R = Reset</footer>
        </div>
    </div>

    <?php echo file_get_contents('https://collegeall.com/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (function () {
            // Elements
            const display = document.getElementById('display');
            const elapsedEl = document.getElementById('elapsed');
            const startBtn = document.getElementById('startBtn');
            const stopBtn = document.getElementById('stopBtn');
            const lapBtn = document.getElementById('lapBtn');
            const resumeBtn = document.getElementById('resumeBtn');
            const resetBtn = document.getElementById('resetBtn');
            const lapsList = document.getElementById('lapsList');
            const lapCount = document.getElementById('lapCount');
            const exportBtn = document.getElementById('exportBtn');
            const clearLapsBtn = document.getElementById('clearLapsBtn');

            // State
            let running = false;
            let startTime = 0; // timestamp when started (ms from performance.now)
            let elapsedBefore = 0; // ms accumulated before current run
            let rafId = null;
            let laps = [];

            function now() { return performance.now(); }

            function format(ms) {
                // ms is milliseconds (number)
                const totalMs = Math.floor(ms);
                const msPart = totalMs % 1000; // 0..999
                let s = Math.floor(totalMs / 1000);
                const seconds = s % 60; s = Math.floor(s / 60);
                const minutes = s % 60; const hours = Math.floor(s / 60);
                // hh:mm:ss.mmm
                return pad(hours, 2) + ":" + pad(minutes, 2) + ":" + pad(seconds, 2) + "." + pad(msPart, 3);
            }

            function pad(n, digits) {
                let s = String(n);
                while (s.length < digits) s = '0' + s;
                return s;
            }

            function update() {
                const current = elapsedBefore + (running ? (now() - startTime) : 0);
                display.textContent = format(current);
                elapsedEl.textContent = format(current);
                if (running) rafId = requestAnimationFrame(update);
            }

            function start() {
                if (running) return;
                startTime = now();
                running = true;
                startBtn.style.display = 'none';
                stopBtn.disabled = false; stopBtn.style.display = 'inline-block';
                lapBtn.disabled = false;
                resumeBtn.style.display = 'none';
                resetBtn.disabled = false;
                exportBtn.disabled = laps.length === 0;
                clearLapsBtn.disabled = laps.length === 0;
                update();
            }

            function stop() {
                if (!running) return;
                elapsedBefore += now() - startTime;
                running = false;
                cancelAnimationFrame(rafId);
                rafId = null;
                stopBtn.disabled = true;
                lapBtn.disabled = true;
                resumeBtn.style.display = 'inline-block';
                startBtn.style.display = 'none';
            }

            function resume() {
                if (running) return;
                startTime = now();
                running = true;
                resumeBtn.style.display = 'none';
                stopBtn.disabled = false;
                lapBtn.disabled = false;
                update();
            }

            function reset() {
                running = false;
                cancelAnimationFrame(rafId);
                rafId = null;
                startTime = 0; elapsedBefore = 0; laps = [];
                display.textContent = '00:00:00.000';
                elapsedEl.textContent = '00:00:00.000';
                startBtn.style.display = 'inline-block';
                stopBtn.disabled = true; lapBtn.disabled = true; resumeBtn.style.display = 'none';
                resetBtn.disabled = true; exportBtn.disabled = true; clearLapsBtn.disabled = true;
                renderLaps();
            }

            function recordLap() {
                const cumulative = elapsedBefore + (running ? now() - startTime : 0);
                const lastCumulative = laps.length ? laps[laps.length - 1].cumulative : 0;
                const lapDuration = cumulative - lastCumulative;
                const lap = { index: laps.length + 1, cumulative: Math.floor(cumulative), lapMs: Math.floor(lapDuration), timestamp: new Date().toISOString() };
                laps.push(lap);
                renderLaps();
                exportBtn.disabled = false; clearLapsBtn.disabled = false;
            }

            function renderLaps() {
                lapsList.innerHTML = '';
                lapCount.textContent = laps.length;
                if (laps.length === 0) {
                    const msg = document.createElement('div');
                    msg.style.color = 'var(--muted)';
                    msg.style.fontSize = '13px';
                    msg.textContent = 'No laps recorded.';
                    lapsList.appendChild(msg);
                    return;
                }
                // show latest first
                const frag = document.createDocumentFragment();
                for (let i = laps.length - 1; i >= 0; i--) {
                    const l = laps[i];
                    const li = document.createElement('li');
                    li.className = 'lap';
                    const left = document.createElement('div');
                    left.innerHTML = '<strong>Lap ' + l.index + '</strong> <small>\u2022 ' + new Date(l.timestamp).toLocaleString() + '</small>';
                    const right = document.createElement('div');
                    right.style.textAlign = 'right';
                    right.innerHTML = '<div style="font-weight:700">' + format(l.cumulative) + '</div><div style="font-size:12px;color:var(--muted)">+' + format(l.lapMs) + '</div>';
                    li.appendChild(left); li.appendChild(right);
                    frag.appendChild(li);
                }
                lapsList.appendChild(frag);
            }

            function exportCSV() {
                if (!laps.length) return;
                let rows = [['Lap', 'Cumulative (hh:mm:ss.ms)', 'Lap Duration (hh:mm:ss.ms)', 'Lap Duration (ms)', 'Recorded (ISO)']];
                for (const l of laps) {
                    rows.push([l.index, format(l.cumulative), format(l.lapMs), String(l.lapMs), l.timestamp]);
                }
                const csv = rows.map(r => r.map(cell => '"' + String(cell).replace(/"/g, '""') + '"').join(',')).join('\n');
                const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'laps-' + new Date().toISOString().replace(/[:.]/g, '-') + '.csv';
                document.body.appendChild(a);
                a.click();
                a.remove();
                setTimeout(() => URL.revokeObjectURL(url), 30000);
            }

            function clearLaps() {
                laps = [];
                renderLaps();
                exportBtn.disabled = true; clearLapsBtn.disabled = true;
            }

            // Button bindings
            startBtn.addEventListener('click', start);
            stopBtn.addEventListener('click', stop);
            resumeBtn.addEventListener('click', resume);
            resetBtn.addEventListener('click', function () { reset(); });
            lapBtn.addEventListener('click', recordLap);
            exportBtn.addEventListener('click', exportCSV);
            clearLapsBtn.addEventListener('click', function () { if (confirm('Clear all laps?')) clearLaps(); });

            // Keyboard shortcuts: Space toggles start/stop; L = lap; R = reset
            window.addEventListener('keydown', function (e) {
                if (e.target && (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA')) return;
                const key = e.key.toLowerCase();
                if (key === ' ') { e.preventDefault(); if (!running) start(); else stop(); }
                else if (key === 'l') { e.preventDefault(); if (!lapBtn.disabled) recordLap(); }
                else if (key === 'r') { e.preventDefault(); reset(); }
            });

            // initialize
            reset();

            // Accessibility focus states
            [startBtn, stopBtn, lapBtn, resumeBtn, resetBtn, exportBtn, clearLapsBtn].forEach(b => {
                b.addEventListener('focus', () => b.style.outline = '2px solid rgba(110,231,183,0.18)');
                b.addEventListener('blur', () => b.style.outline = '');
            });

        })();
    </script>
</body>

</html>