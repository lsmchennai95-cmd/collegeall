<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Password Generator</title>
    <meta name="description" content="Generate ultra-secure passwords instantly with this advanced online password generator. Customize length, symbols, numbers, uppercase/lowercase characters, avoid ambiguous characters, and get real-time strength analysis. No data stored — everything runs locally in your browser.">
    <meta name="keywords" content="password generator, strong password generator, secure password generator, random password maker, online password tool, create strong passwords, password strength checker, crypto secure password, custom password generator, offline password generator, web crypto password generator">
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://collegeall.com/assets/css/all.min.css">
    
    <style>
        :root {
            --bg: #0f1724;
            --card: #0b1220;
            --muted: #9aa4b2;
            --accent: #6ee7b7;
            --danger: #ff7b7b;
            --glass: rgba(255, 255, 255, 0.03);
            --radius: 12px;
            --gap: 14px;
            --max-width: 920px;
            --mono: ui-monospace, SFMono-Regular, Menlo, Monaco, "Roboto Mono", monospace;
        }

        .password-generator {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .password-generator .container {
            width: 100%;
            max-width: var(--max-width);
        }

        .password-generator .card {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
            border-radius: var(--radius);
            padding: 22px;
            box-shadow: 0 6px 30px rgba(2, 6, 23, 0.6);
            backdrop-filter: blur(6px);
        }

        .password-generator header {
            display: flex;
            gap: 12px;
            align-items: center;
            margin-bottom: 18px
        }

        .password-generator .logo {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--accent), #60a5fa);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #04202a
        }

        .password-generator h1 {
            font-size: 20px;
            margin: 0
        }

        .password-generator p.lead {
            margin: 0;
            color: var(--muted);
            font-size: 13px
        }

        .password-generator .grid {
            display: grid;
            grid-template-columns: 1fr 320px;
            gap: 18px
        }

        @media (max-width:880px) {
            .password-generator .grid {
                grid-template-columns: 1fr;
            }
        }

        /* Left column: generator */
        .password-generator .panel {
            background: var(--card);
            padding: 18px;
            border-radius: 12px
        }

        .password-generator .output {
            display: flex;
            gap: 12px;
            align-items: center;
            justify-content: space-between;
            background: var(--glass);
            padding: 14px;
            border-radius: 10px;
            font-family: var(--mono);
            font-size: 16px
        }

        .password-generator .pwd-text {
            flex: 1;
            word-break: break-all
        }

        .password-generator .controls {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 12px
        }

        .password-generator .row {
            display: flex;
            gap: 12px;
            align-items: center
        }

        .password-generator .control {
            background: rgba(255, 255, 255, 0.02);
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .password-generator input[type=range] {
            width: 100%
        }

        .password-generator label.small {
            font-size: 13px;
            color: var(--muted)
        }

        .password-generator .toggles {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            color: white;
        }

        .password-generator .toggle {
            display: flex;
            align-items: center;
            gap: 10px;
            background: transparent;
            padding: 8px;
            border-radius: 9px
        }

        .password-generator .switch {
            position: relative;
            width: 44px;
            height: 26px;
            background: rgba(255, 255, 255, 0.06);
            border-radius: 999px;
            padding: 3px;
            cursor: pointer
        }

        .password-generator .knob {
            position: absolute;
            top: 3px;
            left: 3px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: white;
            transition: all .18s
        }

        .password-generator .switch.on {
            background: linear-gradient(90deg, #34d399, #60a5fa)
        }

        .password-generator .switch.on .knob {
            left: 21px;
            background: #04202a
        }

        .password-generator .btn-row {
            display: flex;
            gap: 10px
        }

        .password-generator button.btn {
            border: 0;
            padding: 10px 12px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            background: #36d399;
        }

        .password-generator .btn-primary {
            background: linear-gradient(90deg, #36d399, #60a5fa);
            color: #04202a
        }

        .password-generator .btn-ghost {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.06);
            color: var(--accent)
        }

        .password-generator .meta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
            margin-top: 12px;
            color: white;
        }

        .password-generator .meta .pill {
            background: rgba(255, 255, 255, 0.02);
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 13px
        }

        /* Strength bar */
        .password-generator .strength {
            margin-top: 12px
        }

        .password-generator .meter {
            height: 12px;
            background: rgba(255, 255, 255, 0.04);
            border-radius: 8px;
            display: flex;
            overflow: hidden
        }

        .password-generator .meter>span {
            display: block;
            height: 100%;
            width: 0%;
            transition: width .24s ease
        }

        .password-generator .strength-label {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 8px;
            font-size: 13px;
            color: var(--muted)
        }

        /* Right column: settings */
        .password-generator .settings {
            padding: 16px;
            border-radius: 12px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.01), transparent)
        }

        .password-generator .settings h3 {
            margin: 0 0 10px 0
        }

        .password-generator .help {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.4
        }

        .password-generator footer {
            margin-top: 18px;
            color: var(--muted);
            font-size: 13px;
            text-align: center
        }

        .password-generator small.kv {
            display: block;
            color: var(--muted);
            font-size: 12px
        }

        /* tiny responsive tweaks */
        @media (max-width: 768px) {
            .password-generator .output {
                flex-direction: column;
                align-items: flex-start
            }

            .password-generator .row {
                flex-direction: column;
                align-items: flex-start
            }

            .password-generator .container{
                width: auto !important;
                height: 100%;
            }

            .password-generator .card {
                padding: 0;
            }

            .password-generator .panel {
                padding: 0;
            }

            .password-generator .setting {
                padding: 0;
            }
        }
    </style>
</head>

<body>
    <?php echo file_get_contents('https://collegeall.com/header.php'); ?>
    
    <div class="password-generator">
        <div class="container mb-3">
            <div class="card" role="application" aria-label="Password generator">
                <header>
                    <div class="logo">PG</div>
                    <div>
                        <h1>Password Generator</h1>
                        <p class="lead">Quick, secure passwords with live strength feedback. Settings persist in your
                            browser.</p>
                    </div>
                </header>

                <div class="grid">
                    <div class="panel" aria-live="polite">
                        <div class="output" id="output">
                            <div class="pwd-text text-white" id="password">—</div>
                            <div style="display:flex;flex-direction:column;gap:8px;align-items:flex-end">
                                <button class="btn btn-ghost" id="copyBtn" title="Copy password">Copy</button>
                                <button class="btn" id="regenerateBtn" title="Regenerate password">Regenerate</button>
                            </div>
                        </div>

                        <div class="controls">
                            <div class="control row">
                                <div style="flex:1">
                                    <label class="small" for="length">Length <span id="lengthVal">16</span></label>
                                    <input id="length" type="range" min="4" max="128" value="16"
                                        aria-describedby="lengthVal">
                                </div>
                                <div style="width:90px;text-align:center"><span class="pill" id="entropy">— bits</span>
                                </div>
                            </div>

                            <div class="toggles">
                                <div class="toggle">
                                    <div>
                                        <div class="switch" data-key="includeUpper" id="swUpper">
                                            <div class="knob"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small">Uppercase (A–Z)</div>
                                    </div>
                                </div>

                                <div class="toggle">
                                    <div>
                                        <div class="switch" data-key="includeLower" id="swLower">
                                            <div class="knob"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small">Lowercase (a–z)</div>
                                    </div>
                                </div>

                                <div class="toggle">
                                    <div>
                                        <div class="switch" data-key="includeNumbers" id="swNumbers">
                                            <div class="knob"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small">Numbers (0–9)</div>
                                    </div>
                                </div>

                                <div class="toggle">
                                    <div>
                                        <div class="switch" data-key="includeSymbols" id="swSymbols">
                                            <div class="knob"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small">Symbols (!@#$...)</div>
                                    </div>
                                </div>

                                <div class="toggle">
                                    <div>
                                        <div class="switch" data-key="avoidAmbiguous" id="swAmbig">
                                            <div class="knob"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small">Avoid ambiguous (O/0, l/1, I)</div>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-row">
                                <button class="btn btn-primary" id="regenPrimary">Regenerate</button>
                                <button class="btn btn-ghost" id="copyPrimary">Copy</button>
                            </div>

                            <div class="strength" aria-hidden="false">
                                <div class="meter" aria-hidden="true"><span id="meterFill"></span></div>
                                <div class="strength-label">
                                    <div id="strengthText">Strength</div>
                                    <div id="scoreText">0/100</div>
                                </div>
                            </div>

                            <div class="meta">
                                <div class="pill" id="charsetPreview">Charset: —</div>
                                <div class="pill" id="calcInfo">Est. time: —</div>
                            </div>

                        </div>
                    </div>

                    <aside class="settings">
                        <h3>Settings (stored locally)</h3>
                        <p class="help">Adjust length and character sets. Your last-used choices are saved in
                            <code>localStorage</code> so the generator restores them on this browser.</p>

                        <hr style="opacity:.06;margin:12px 0">

                        <div>
                            <strong>Quick tips</strong>
                            <ul style="color:var(--muted);font-size:13px">
                                <li>Longer = stronger. Aim for 12+ for general use, 20+ for high-security needs.</li>
                                <li>Use symbols & numbers for sites that allow them. Avoid reuse across accounts.</li>
                            </ul>
                        </div>

                        <hr style="opacity:.06;margin:12px 0">

                        <small class="kv">Generated with secure random via Web Crypto API</small>
                    </aside>
                </div>

                <footer>
                    <small>Built locally — no data leaves your browser. ⛓️</small>
                </footer>
            </div>
        </div>
    </div>

    <?php echo file_get_contents('https://collegeall.com/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // --- Utilities ---
        const getEl = id => document.getElementById(id);
        const saveKey = 'pg_settings_v1';

        const defaults = {
            length: 16,
            includeUpper: true,
            includeLower: true,
            includeNumbers: true,
            includeSymbols: true,
            avoidAmbiguous: false
        };

        function loadSettings() {
            try {
                const raw = localStorage.getItem(saveKey);
                if (!raw) return { ...defaults };
                const obj = JSON.parse(raw);
                return { ...defaults, ...obj };
            } catch (e) { return { ...defaults }; }
        }
        function saveSettings(s) {
            try { localStorage.setItem(saveKey, JSON.stringify(s)); } catch (e) {/* ignore */ }
        }

        // Character sets
        const SETS = {
            upper: 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            lower: 'abcdefghijklmnopqrstuvwxyz',
            numbers: '0123456789',
            symbols: '!@#$%^&*()-_=+[]{};:,.<>/?|~' // intentionally common printable symbols
        };
        const AMBIG = new Set(['O', '0', 'I', 'l', '1']);

        // DOM
        const passwordEl = getEl('password');
        const lengthEl = getEl('length');
        const lengthVal = getEl('lengthVal');
        const meterFill = getEl('meterFill');
        const strengthText = getEl('strengthText');
        const scoreText = getEl('scoreText');
        const charsetPreview = getEl('charsetPreview');
        const calcInfo = getEl('calcInfo');
        const entropyEl = getEl('entropy');

        const swUpper = getEl('swUpper');
        const swLower = getEl('swLower');
        const swNumbers = getEl('swNumbers');
        const swSymbols = getEl('swSymbols');
        const swAmbig = getEl('swAmbig');

        const copyBtn = getEl('copyBtn');
        const regenerateBtn = getEl('regenerateBtn');
        const regenPrimary = getEl('regenPrimary');
        const copyPrimary = getEl('copyPrimary');

        let settings = loadSettings();

        // Apply settings to UI
        function applyUiFromSettings() {
            lengthEl.value = settings.length;
            lengthVal.textContent = settings.length;
            setSwitch(swUpper, settings.includeUpper);
            setSwitch(swLower, settings.includeLower);
            setSwitch(swNumbers, settings.includeNumbers);
            setSwitch(swSymbols, settings.includeSymbols);
            setSwitch(swAmbig, settings.avoidAmbiguous);
        }

        function setSwitch(el, on) {
            if (on) el.classList.add('on'); else el.classList.remove('on');
            el.setAttribute('aria-pressed', !!on);
        }

        function toggleSwitch(el) {
            const isOn = el.classList.toggle('on');
            el.setAttribute('aria-pressed', isOn);
            return isOn;
        }

        // Build charset
        function buildCharset(cfg) {
            let chars = '';
            if (cfg.includeUpper) chars += SETS.upper;
            if (cfg.includeLower) chars += SETS.lower;
            if (cfg.includeNumbers) chars += SETS.numbers;
            if (cfg.includeSymbols) chars += SETS.symbols;
            if (cfg.avoidAmbiguous) {
                chars = Array.from(chars).filter(ch => !AMBIG.has(ch)).join('');
            }
            // Deduplicate
            chars = Array.from(new Set(chars)).join('');
            return chars;
        }

        // Secure random selection
        function secureRandomInts(n) {
            const arr = new Uint32Array(n);
            crypto.getRandomValues(arr);
            return arr;
        }

        function generatePassword(cfg) {
            const charset = buildCharset(cfg);
            if (!charset.length) return '';
            const out = [];
            const rnd = secureRandomInts(cfg.length);
            for (let i = 0; i < cfg.length; i++) {
                const idx = rnd[i] % charset.length;
                out.push(charset.charAt(idx));
            }
            return out.join('');
        }

        // Strength estimation (entropy bits + heuristics)
        function estimateEntropyBits(length, charsetSize) {
            if (charsetSize <= 1) return 0;
            const bits = length * Math.log2(charsetSize);
            return bits;
        }

        function strengthFromEntropy(bits) {
            // Map bits to score 0-100
            // 0-28: very weak, 28-50 weak, 50-75 fair, 75-100 good/strong
            const max = 128; // cap for scaling
            const score = Math.min(100, Math.round((bits / max) * 100));
            return score;
        }

        function strengthLabel(score) {
            if (score < 20) return 'Very weak';
            if (score < 45) return 'Weak';
            if (score < 65) return 'Fair';
            if (score < 85) return 'Good';
            return 'Strong';
        }

        function meterColor(score) {
            if (score < 20) return ['#ff4d4f'];
            if (score < 45) return ['#ff7b7b'];
            if (score < 65) return ['#fbbf24'];
            if (score < 85) return ['#60a5fa'];
            return ['#34d399'];
        }

        // UI refresh
        function refreshDisplay(pwd) {
            const charset = buildCharset(settings);
            passwordEl.textContent = pwd || '—';
            lengthVal.textContent = settings.length;

            const bits = estimateEntropyBits(settings.length, charset.length);
            const score = strengthFromEntropy(bits);
            const label = strengthLabel(score);
            strengthText.textContent = label;
            scoreText.textContent = score + '/100';
            // fill bar
            meterFill.style.width = score + '%';
            meterFill.style.background = `linear-gradient(90deg, ${meterColor(score).join(',')})`;

            // charset preview (short)
            const preview = charset.length ? (charset.length > 40 ? (charset.slice(0, 36) + '...') : charset) : '—';
            charsetPreview.textContent = 'Charset: ' + preview + ` (${charset.length} chars)`;

            entropyEl.textContent = Math.round(bits) + ' bits';

            // estimate brute force time example (assume 1e9 guesses/sec)
            let guesses = Math.pow(charset.length, settings.length);
            let seconds = guesses / 1e9;
            let human;
            if (!isFinite(seconds) || seconds > 1e18) human = 'practically infinite';
            else if (seconds < 1) human = '<1s';
            else if (seconds < 60) human = Math.round(seconds) + 's';
            else if (seconds < 3600) human = Math.round(seconds / 60) + 'm';
            else if (seconds < 86400) human = Math.round(seconds / 3600) + 'h';
            else if (seconds < 31536000) human = Math.round(seconds / 86400) + 'd';
            else human = Math.round(seconds / 31536000) + 'y';
            calcInfo.textContent = 'Est. time (@1e9 guesses/s): ' + human;
        }

        // Initialize
        function regenerateAndShow() {
            // ensure at least one character set selected, otherwise enable lower
            if (!settings.includeUpper && !settings.includeLower && !settings.includeNumbers && !settings.includeSymbols) {
                settings.includeLower = true;
                setSwitch(swLower, true);
            }
            const pwd = generatePassword(settings);
            // set DOM
            refreshDisplay(pwd);
        }

        // Event wiring
        lengthEl.addEventListener('input', (e) => {
            settings.length = parseInt(e.target.value, 10);
            lengthVal.textContent = settings.length;
            saveSettings(settings);
            regenerateAndShow();
        });

        [swUpper, swLower, swNumbers, swSymbols, swAmbig].forEach(sw => {
            sw.addEventListener('click', () => {
                const newVal = toggleSwitch(sw);
                const key = sw.getAttribute('data-key');
                settings[key] = newVal;
                saveSettings(settings);
                regenerateAndShow();
            });
        });

        regenerateBtn.addEventListener('click', () => { regenerateAndShow(); });
        regenPrimary.addEventListener('click', () => { regenerateAndShow(); });

        function copyPassword() {
            const txt = passwordEl.textContent;
            if (!txt || txt === '—') return flashCopy(false);
            navigator.clipboard.writeText(txt).then(() => flashCopy(true), () => flashCopy(false));
        }
        function flashCopy(ok) {
            const el = copyBtn;
            const orig = el.textContent;
            el.textContent = ok ? 'Copied' : 'Copy failed';
            setTimeout(() => el.textContent = orig, 1200);
        }

        copyBtn.addEventListener('click', copyPassword);
        copyPrimary.addEventListener('click', copyPassword);

        // keyboard: press space on switches
        [swUpper, swLower, swNumbers, swSymbols, swAmbig].forEach(sw => {
            sw.tabIndex = 0;
            sw.addEventListener('keydown', (e) => { if (e.key === ' ' || e.key === 'Enter') { e.preventDefault(); sw.click(); } });
        });

        // on load
        applyUiFromSettings();
        regenerateAndShow();

        // save before unload
        window.addEventListener('beforeunload', () => saveSettings(settings));

    </script>
</body>

</html>