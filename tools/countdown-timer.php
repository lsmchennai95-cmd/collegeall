<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
    <title>Countdown Timer</title>

    <meta name="description" content="Create a custom countdown timer online. Set days, hours, minutes, and seconds for events, launches, meetings, or reminders. Simple, fast, and shareable.">

  <meta name="keywords" content="countdown timer, online countdown, event timer, timer online, countdown to date, launch countdown, countdown widget, countdown clock, meeting timer, reminder timer, free countdown">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">
    <style>
        :root {
            --bg: #0f1724;
            --card: #0b1220;
            --accent: #7c3aed;
            --muted: #94a3b8;
            --glass: rgba(255, 255, 255, 0.03);
        }

        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: radial-gradient(1200px 600px at 10% 10%, rgba(124, 58, 237, 0.12), transparent),
                linear-gradient(180deg, #020617 0%, #071029 100%);
            color: #e6eef8;
        }

        .countdown-timer{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px;
        }

        .card {
            width: min(880px, 96%);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(2, 6, 23, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.03);
        }

        .card .header {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px
        }

        .card h1 {
            font-size: 20px;
            margin: 0
        }

        .card .controls {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .card input[type=datetime-local] {
            background: var(--glass);
            border: 1px solid rgba(255, 255, 255, 0.04);
            color: inherit;
            padding: 8px 10px;
            border-radius: 8px
        }

        .card .btn {
            background: linear-gradient(180deg, var(--accent), #5b21b6);
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600
        }

        .card .btn.secondary {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .card .btn.ghost {
            background: transparent;
            border: 1px dashed rgba(255, 255, 255, 0.03);
            color: var(--muted)
        }

        .card .presets {
            display: flex;
            gap: 8px
        }

        .card .display {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin: 18px 0 10px
        }

        .card .segment {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
            padding: 14px 18px;
            border-radius: 12px;
            min-width: 92px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.02)
        }

        .card .num {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1px;
            color: white;
        }

        .card .label {
            font-size: 12px;
            color: var(--muted);
            margin-top: 6px
        }

        .card .row {
            display: flex;
            gap: 12px;
            align-items: center
        }

        .card .small {
            font-size: 13px;
            color: var(--muted)
        }

        .card .footer {
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: space-between
        }

        .card .flash {
            animation: flash 0.6s ease-in-out alternate infinite
        }

        @keyframes flash {
            from {
                box-shadow: 0 0 0 rgba(124, 58, 237, 0);
            }

            to {
                box-shadow: 0 0 40px rgba(124, 58, 237, 0.25)
            }
        }

        .card .finished-banner {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 8px;
            background: rgba(124, 58, 237, 0.12);
            color: var(--accent);
            font-weight: 700
        }

        .card .muted-note {
            color: var(--muted);
            font-size: 13px
        }

        .card .big-center {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .card .hidden {
            display: none
        }

        /* responsive */
        @media (max-width:520px) {
            .display {
                flex-wrap: wrap
            }

            .segment {
                min-width: 42%
            }
        }
    </style>
</head>

<body>
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>
    <div class="countdown-timer">
        <div class="card" id="card">
            <div class="header">
                <div>
                    <h1>Countdown Timer</h1>
                    <div class="small muted-note">Set a future date & time, then Start. Use presets or pause/resume.</div>
                </div>
                <div class="controls">
                    <input class="text-white" id="datetime" type="datetime-local" />
                    <button class="btn" id="startBtn">Start</button>
                </div>
            </div>

            <div class="presets" style="margin-bottom:12px">
                <button class="btn secondary" id="preset1h">+1 hour</button>
                <button class="btn secondary" id="preset24h">+24 hours</button>
                <button class="btn ghost" id="nowBtn" title="Set to now + 1 minute for quick testing">Set quick (now
                    +1m)</button>
            </div>

            <div class="display" id="display">
                <div class="segment">
                    <div class="num" id="days">0</div>
                    <div class="label">Days</div>
                </div>
                <div class="segment">
                    <div class="num" id="hours">00</div>
                    <div class="label">Hours</div>
                </div>
                <div class="segment">
                    <div class="num" id="minutes">00</div>
                    <div class="label">Minutes</div>
                </div>
                <div class="segment">
                    <div class="num" id="seconds">00</div>
                    <div class="label">Seconds</div>
                </div>
            </div>

            <div class="footer">
                <div class="row">
                    <button class="btn secondary" id="pauseBtn" disabled>Pause</button>
                    <button class="btn secondary" id="resumeBtn" disabled>Resume</button>
                    <button class="btn secondary" id="resetBtn" disabled>Reset</button>
                </div>
                <div class="row">
                    <div id="status" class="muted-note">Idle</div>
                </div>
            </div>

            <div class="big-center" style="margin-top:14px">
                <div id="finishedBanner" class="finished-banner hidden">Finished!</div>
            </div>
        </div>
    </div>

        <?php include COLLEGEALL_ROOT . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Elements
        const datetimeInput = document.getElementById('datetime');
        const startBtn = document.getElementById('startBtn');
        const preset1h = document.getElementById('preset1h');
        const preset24h = document.getElementById('preset24h');
        const nowBtn = document.getElementById('nowBtn');
        const pauseBtn = document.getElementById('pauseBtn');
        const resumeBtn = document.getElementById('resumeBtn');
        const resetBtn = document.getElementById('resetBtn');
        const daysEl = document.getElementById('days');
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');
        const statusEl = document.getElementById('status');
        const finishedBanner = document.getElementById('finishedBanner');
        const card = document.getElementById('card');

        // State
        let timerInterval = null;
        let endTime = null;    // timestamp in ms
        let remainingMs = 0;   // used when paused
        let running = false;
        let paused = false;

        // Audio
        let audioCtx = null;
        function ensureAudio() {
            if (!audioCtx) {
                audioCtx = new (window.AudioContext || window.webkitAudioContext)();
            }
            return audioCtx;
        }
        function playBeep(frequency = 880, duration = 0.2) {
            const ctx = ensureAudio();
            const o = ctx.createOscillator();
            const g = ctx.createGain();
            o.type = 'sine'; o.frequency.value = frequency;
            g.gain.value = 0.0001;
            o.connect(g); g.connect(ctx.destination);
            const now = ctx.currentTime;
            g.gain.exponentialRampToValueAtTime(0.12, now + 0.01);
            o.start(now);
            g.gain.exponentialRampToValueAtTime(0.0001, now + duration);
            o.stop(now + duration + 0.02);
        }
        function playFinishTone() {
            // three short beeps
            const delays = [0, 0.28, 0.56];
            delays.forEach((d, i) => setTimeout(() => playBeep(880 - i * 120, 0.18), Math.round(d * 1000)));
        }

        // Helpers
        function msToParts(ms) {
            if (ms < 0) ms = 0;
            const totalSeconds = Math.floor(ms / 1000);
            const days = Math.floor(totalSeconds / 86400);
            const hours = Math.floor((totalSeconds % 86400) / 3600);
            const minutes = Math.floor((totalSeconds % 3600) / 60);
            const seconds = totalSeconds % 60;
            return { days, hours, minutes, seconds };
        }
        function pad(n) { return String(n).padStart(2, '0'); }
        function updateDisplay(ms) {
            const p = msToParts(ms);
            daysEl.textContent = p.days;
            hoursEl.textContent = pad(p.hours);
            minutesEl.textContent = pad(p.minutes);
            secondsEl.textContent = pad(p.seconds);
        }

        function startTimerWithEnd(t) {
            endTime = t;
            running = true; paused = false; finishedBanner.classList.add('hidden');
            pauseBtn.disabled = false; resumeBtn.disabled = true; resetBtn.disabled = false; startBtn.disabled = true;
            statusEl.textContent = 'Running';
            // tick every 200ms to keep it snappy and accurate
            clearInterval(timerInterval);
            timerInterval = setInterval(() => {
                const rem = endTime - Date.now();
                if (rem <= 0) {
                    updateDisplay(0);
                    finished();
                } else {
                    updateDisplay(rem);
                }
            }, 200);
            // do an immediate sync update
            const rem0 = endTime - Date.now();
            if (rem0 <= 0) { updateDisplay(0); finished(); } else updateDisplay(rem0);
        }

        function startFromInput() {
            const val = datetimeInput.value;
            if (!val) { alert('Please choose a date & time.'); return; }
            const t = new Date(val);
            if (isNaN(t)) { alert('Invalid date/time.'); return; }
            const now = Date.now();
            if (t.getTime() <= now) { alert('Please choose a future date/time.'); return; }
            startTimerWithEnd(t.getTime());
        }

        function pauseTimer() {
            if (!running || paused) return;
            const rem = endTime - Date.now();
            remainingMs = Math.max(0, rem);
            clearInterval(timerInterval); timerInterval = null;
            paused = true; running = false;
            pauseBtn.disabled = true; resumeBtn.disabled = false; statusEl.textContent = 'Paused';
        }
        function resumeTimer() {
            if (!paused) return;
            endTime = Date.now() + remainingMs;
            paused = false; running = true;
            pauseBtn.disabled = false; resumeBtn.disabled = true; statusEl.textContent = 'Running';
            timerInterval = setInterval(() => {
                const rem = endTime - Date.now();
                if (rem <= 0) { updateDisplay(0); finished(); } else updateDisplay(rem);
            }, 200);
        }
        function resetTimer() {
            clearInterval(timerInterval); timerInterval = null;
            running = false; paused = false; endTime = null; remainingMs = 0;
            updateDisplay(0);
            pauseBtn.disabled = true; resumeBtn.disabled = true; resetBtn.disabled = true; startBtn.disabled = false;
            statusEl.textContent = 'Idle'; finishedBanner.classList.add('hidden'); card.classList.remove('flash');
            // suspend audio context to avoid continued sound on some browsers
            if (audioCtx && audioCtx.state !== 'closed') try { audioCtx.suspend(); } catch (e) {/*ignore*/ }
        }

        function finished() {
            clearInterval(timerInterval); timerInterval = null;
            running = false; paused = false; endTime = null; remainingMs = 0;
            pauseBtn.disabled = true; resumeBtn.disabled = true; resetBtn.disabled = false; startBtn.disabled = false;
            statusEl.textContent = 'Finished';
            finishedBanner.classList.remove('hidden');
            // visual
            card.classList.add('flash');
            // play tone
            try { playFinishTone(); } catch (e) { /* audio may be blocked until user interacts */ }
            // stop flash after 8s
            setTimeout(() => { card.classList.remove('flash'); }, 8000);
        }

        // Presets
        function setPresetAndStart(msFromNow) {
            const t = Date.now() + msFromNow;
            startTimerWithEnd(t);
            // also populate input for clarity
            const dt = new Date(t - 0);
            const local = new Date(dt.getTime() - dt.getTimezoneOffset() * 60000).toISOString().slice(0, 16);
            datetimeInput.value = local;
        }

        // Quick helper to format local datetime for input
        function setInputToFuture(minutes) {
            const t = new Date(Date.now() + minutes * 60000);
            const local = new Date(t.getTime() - t.getTimezoneOffset() * 60000).toISOString().slice(0, 16);
            datetimeInput.value = local;
        }

        // Event listeners
        startBtn.addEventListener('click', startFromInput);
        preset1h.addEventListener('click', () => setPresetAndStart(60 * 60 * 1000));
        preset24h.addEventListener('click', () => setPresetAndStart(24 * 60 * 60 * 1000));
        nowBtn.addEventListener('click', () => { setInputToFuture(1); });
        pauseBtn.addEventListener('click', pauseTimer);
        resumeBtn.addEventListener('click', resumeTimer);
        resetBtn.addEventListener('click', resetTimer);

        // Keyboard accessibility: Enter in input starts
        datetimeInput.addEventListener('keydown', (e) => { if (e.key === 'Enter') startFromInput(); });

        // initialize display
        updateDisplay(0);

        // For browsers that block audio until interaction, resume on first user gesture
        function resumeAudioOnGesture() {
            if (!audioCtx) return;
            if (audioCtx.state === 'suspended') audioCtx.resume();
            window.removeEventListener('pointerdown', resumeAudioOnGesture);
            window.removeEventListener('keydown', resumeAudioOnGesture);
        }
        window.addEventListener('pointerdown', resumeAudioOnGesture);
        window.addEventListener('keydown', resumeAudioOnGesture);

        // Optional: restore last set time from session storage (not required). Kept off to remain simple.

        // Friendly tip in console
        console.log('Countdown Timer ready — set a future date/time and press Start. Presets: +1h, +24h.');
    </script>
</body>

</html>