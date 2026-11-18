<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
    <title>Gradient Generator - Create Linear, Radial & Conic CSS Gradients Online</title>
    <meta name="description" content="Design beautiful gradients instantly with this online Gradient Generator. Create linear, radial and conic gradients, adjust color stops, preview live, copy CSS, and download gradient styles effortlessly.">
    <meta name="keywords" content="gradient generator, css gradient generator, linear gradient creator, radial gradient tool, conic gradient generator, online gradient editor, gradient css maker, color stops editor, gradient preview tool, css background generator">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">
    <style>
        :root {
            --bg: #0f1724;
            --card: #0b1220;
            --muted: #94a3b8;
            --accent: #60a5fa
        }

        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, 'Helvetica Neue', Arial;
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(180deg, #071029 0%, #07162a 60%);
            color: #e6eef8;
        }

        .gradient-generator {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 28px;
        }

        .gradient-generator .wrap {
            width: 100%;
            max-width: 1100px
        }

        .gradient-generator .grid {
            display: grid;
            gap: 20px;
            grid-template-columns: 420px 1fr
        }

        .gradient-generator .card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            padding: 18px;
            box-shadow: 0 6px 18px rgba(2, 6, 23, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.03)
        }

        .gradient-generator h1 {
            font-size: 20px;
            margin: 6px 0 12px
        }

        .gradient-generator label {
            display: block;
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 6px
        }

        .gradient-generator .controls {
            display: flex;
            flex-direction: column;
            gap: 12px
        }

        .gradient-generator .row {
            display: flex;
            gap: 10px;
            align-items: center
        }

        .gradient-generator .color-pair {
            display: flex;
            gap: 10px
        }

        .gradient-generator input[type=color] {
            width: 56px;
            height: 40px;
            padding: 0;
            border: 0;
            border-radius: 8px;
            cursor: pointer
        }

        .gradient-generator input[type=range] {
            width: 100%
        }

        .gradient-generator select,
        button,
        textarea,
        input[type=number] {
            background: rgba(255, 255, 255, 0.03);
            color: inherit;
            border: 1px solid rgba(255, 255, 255, 0.04);
            padding: 8px 10px;
            border-radius: 8px;
            color: white;
        }

        .gradient-generator .preview {
            height: 320px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600
        }

        .gradient-generator .controls .preset-list {
            display: flex;
            gap: 8px;
            flex-wrap: wrap
        }

        .gradient-generator .preset {
            padding: 8px 10px;
            cursor: pointer;
            border-radius: 8px;
            font-size: 13px
        }

        .gradient-generator .preset:hover {
            filter: brightness(1.15)
        }

        .gradient-generator .stops {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: 6px
        }

        .gradient-generator .stop {
            display: flex;
            gap: 8px;
            align-items: center
        }

        .gradient-generator .stop input[type=number] {
            width: 72px;
            color: white;
        }

        .gradient-generator .stop .remove {
            background: transparent;
            border: 0;
            color: #ff7a7a;
            cursor: pointer;
            font-weight: 700
        }

        .gradient-generator .actions {
            display: flex;
            gap: 8px
        }

        .gradient-generator .copy-btn {
            padding: 10px 12px;
            border-radius: 8px;
            cursor: pointer
        }

        .gradient-generator textarea {
            width: 100%;
            min-height: 80px;
            resize: vertical;
            padding: 10px;
            font-family: Menlo, monospace;
            font-size: 13px
        }

        .gradient-generator .small {
            font-size: 12px;
            color: var(--muted)
        }

        .gradient-generator footer {
            margin-top: 10px;
            color: var(--muted);
            font-size: 12px
        }

        @media (max-width:900px) {
            .gradient-generator .grid {
                grid-template-columns: 1fr
            }

            .gradient-generator .card {
                padding: 14px
            }
        }
    </style>
</head>

<body>
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>
    <div class="gradient-generator">
        <div class="wrap">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:10px">
                <h1>Gradient Generator</h1>
                <div class="small">Live preview • copy CSS • add/remove stops</div>
            </div>

            <div class="grid">
                <div class="card">
                    <div class="controls">

                        <div class="text-white">
                            <label for="type">Gradient type</label>
                            <select class="bg-dark" id="type" aria-label="Gradient type">
                                <option value="linear">Linear</option>
                                <option value="radial">Radial</option>
                                <option value="conic">Conic</option>
                            </select>
                        </div>

                        <div id="angleRow">
                            <label for="angle">Angle: <span id="angleVal">90</span>°</label>
                            <input id="angle" type="range" min="0" max="360" value="90" />
                        </div>

                        <div>
                            <label>Color stops</label>
                            <div class="stops" id="stops"></div>
                            <div style="display:flex; gap:8px; margin-top:8px;">
                                <button id="addStop">+ Add color stop</button>
                                <button id="sortStops">Sort by position</button>
                            </div>
                        </div>

                        <div>
                            <label>Presets</label>
                            <div class="preset-list" id="presets">
                                <!-- presets injected -->
                            </div>
                        </div>

                        <div>
                            <label>Output CSS</label>
                            <textarea id="cssOut" readonly aria-label="CSS output"></textarea>
                            <div style="display:flex;gap:8px;margin-top:8px">
                                <button class="copy-btn" id="copyBtn">Copy to clipboard</button>
                                <button id="exportBtn">Download .css</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div style="display:flex; flex-wrap: wrap; gap:12px;align-items:center;margin-bottom:12px">
                        <div style="flex:1">
                            <label>Preview</label>
                            <div id="preview" class="preview"></div>
                        </div>
                        <div style="width:220px">
                            <label>Controls quick</label>
                            <div style="display:flex;flex-direction:column;gap:8px">
                                <div class="row">
                                    <input id="quickA" type="color" title="quick color 1">
                                    <input id="quickB" type="color" title="quick color 2">
                                </div>
                                <div class="row">
                                    <label class="small">Angle</label>
                                </div>
                                <div class="row">
                                    <input id="quickAngle" type="range" min="0" max="360" value="90">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small">Tip: use the Add button to insert more color stops. Drag the position numbers to
                        adjust stops precisely.</div>
                </div>
            </div>

            <footer class="small">Built with vanilla JS — exportable CSS and download.</footer>
        </div>
    </div>

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // State
        const state = {
            type: 'linear',
            angle: 90,
            stops: [
                { color: '#ff7a18', pos: 0 },
                { color: '#af002d', pos: 100 }
            ]
        };

        // Presets
        const PRESETS = [
            { name: 'Sunset', type: 'linear', angle: 110, stops: [{ color: '#ff7a18', pos: 0 }, { color: '#af002d', pos: 100 }] },
            { name: 'Ocean', type: 'linear', angle: 90, stops: [{ color: '#2b5876', pos: 0 }, { color: '#4e4376', pos: 100 }] },
            { name: 'Purple Bliss', type: 'radial', angle: 0, stops: [{ color: '#e0c3fc', pos: 0 }, { color: '#8ec5fc', pos: 100 }] },
            { name: 'Mojito', type: 'linear', angle: 45, stops: [{ color: '#ffe259', pos: 0 }, { color: '#ffa751', pos: 50 }, { color: '#ff5f6d', pos: 100 }] },
            { name: 'Forest', type: 'conic', angle: 120, stops: [{ color: '#5ee7df', pos: 0 }, { color: '#b490ca', pos: 100 }] }
        ];

        // Elements
        const typeEl = document.getElementById('type');
        const angleEl = document.getElementById('angle');
        const angleVal = document.getElementById('angleVal');
        const stopsContainer = document.getElementById('stops');
        const preview = document.getElementById('preview');
        const cssOut = document.getElementById('cssOut');
        const addStopBtn = document.getElementById('addStop');
        const copyBtn = document.getElementById('copyBtn');
        const exportBtn = document.getElementById('exportBtn');
        const presetsEl = document.getElementById('presets');
        const angleRow = document.getElementById('angleRow');

        // Quick controls
        const quickA = document.getElementById('quickA');
        const quickB = document.getElementById('quickB');
        const quickAngle = document.getElementById('quickAngle');

        function init() {
            // Populate presets
            PRESETS.forEach(p => {
                const btn = document.createElement('button');
                btn.className = 'preset';
                btn.textContent = p.name;
                btn.title = p.name;
                btn.addEventListener('click', () => {
                    state.type = p.type;
                    state.angle = p.angle || 0;
                    state.stops = JSON.parse(JSON.stringify(p.stops));
                    typeEl.value = state.type;
                    angleEl.value = state.angle;
                    angleVal.textContent = state.angle;
                    quickAngle.value = state.angle;
                    renderStops();
                    renderPreview();
                });
                presetsEl.appendChild(btn);
            });

            // wire events
            typeEl.addEventListener('change', e => { state.type = e.target.value; renderPreview(); toggleAngle(); });
            angleEl.addEventListener('input', e => { state.angle = +e.target.value; angleVal.textContent = state.angle; quickAngle.value = state.angle; renderPreview(); });
            quickAngle.addEventListener('input', e => { angleEl.value = e.target.value; angleVal.textContent = e.target.value; state.angle = +e.target.value; renderPreview(); });
            quickA.addEventListener('input', e => { if (state.stops[0]) { state.stops[0].color = e.target.value; renderStops(); renderPreview(); } });
            quickB.addEventListener('input', e => { if (state.stops[state.stops.length - 1]) { state.stops[state.stops.length - 1].color = e.target.value; renderStops(); renderPreview(); } });

            addStopBtn.addEventListener('click', () => addColorStop('#ffffff', 50));
            document.getElementById('sortStops').addEventListener('click', () => { state.stops.sort((a, b) => a.pos - b.pos); renderStops(); renderPreview(); });
            copyBtn.addEventListener('click', copyCSS);
            exportBtn.addEventListener('click', downloadCSS);

            renderStops();
            renderPreview();
            toggleAngle();
        }

        function toggleAngle() {
            if (state.type === 'linear' || state.type === 'conic') {
                angleRow.style.display = '';
            } else {
                angleRow.style.display = 'none';
            }
        }

        function renderStops() {
            stopsContainer.innerHTML = '';
            state.stops.forEach((s, idx) => {
                const div = document.createElement('div');
                div.className = 'stop';

                const color = document.createElement('input');
                color.type = 'color'; color.value = s.color;
                color.addEventListener('input', e => { s.color = e.target.value; renderPreview(); updateQuickColors(); });

                const pos = document.createElement('input');
                pos.type = 'number'; pos.min = 0; pos.max = 100; pos.value = s.pos; pos.title = 'position %';
                pos.addEventListener('input', e => { let v = Number(e.target.value); if (isNaN(v)) v = 0; v = Math.max(0, Math.min(100, v)); s.pos = v; renderPreview(); });

                const posRange = document.createElement('input');
                posRange.type = 'range'; posRange.min = 0; posRange.max = 100; posRange.value = s.pos;
                posRange.addEventListener('input', e => { s.pos = +e.target.value; pos.value = s.pos; renderPreview(); });

                const remove = document.createElement('button');
                remove.className = 'remove'; remove.textContent = '✕';
                remove.title = 'Remove stop';
                remove.addEventListener('click', () => { if (state.stops.length > 2) { state.stops.splice(idx, 1); renderStops(); renderPreview(); updateQuickColors(); } else { alert('At least two stops are required.'); } });

                div.appendChild(color);
                const meta = document.createElement('div'); meta.style.flex = '1';
                const label = document.createElement('div'); label.style.display = 'flex'; label.style.justifyContent = 'space-between'; label.style.alignItems = 'center';
                const name = document.createElement('div'); name.textContent = `Stop ${idx + 1}`; name.style.fontSize = '13px'; name.style.color = 'var(--muted)';
                const posLabel = document.createElement('div'); posLabel.textContent = s.pos + '%'; posLabel.style.fontSize = '12px'; posLabel.style.color = 'var(--muted)';
                pos.addEventListener('input', () => posLabel.textContent = pos.value + '%');
                posRange.addEventListener('input', () => posLabel.textContent = posRange.value + '%');
                label.appendChild(name); label.appendChild(posLabel);
                meta.appendChild(label);
                meta.appendChild(posRange);

                const fine = document.createElement('div'); fine.style.display = 'flex'; fine.style.gap = '8px'; fine.style.marginTop = '8px';
                fine.appendChild(pos);
                fine.appendChild(remove);
                meta.appendChild(fine);

                div.appendChild(meta);
                stopsContainer.appendChild(div);
            });
            updateQuickColors();
            updateCSS();
        }

        function addColorStop(color = '#ffffff', pos = 50) {
            if (state.stops.length >= 12) return alert('Maximum 12 stops.');
            state.stops.push({ color, pos });
            renderStops(); renderPreview();
        }

        function updateQuickColors() {
            if (state.stops[0]) quickA.value = state.stops[0].color;
            if (state.stops[state.stops.length - 1]) quickB.value = state.stops[state.stops.length - 1].color;
        }

        function buildGradientCSS() {
            // Sort by position for consistent CSS
            const stops = [...state.stops].sort((a, b) => a.pos - b.pos);
            const stopsStr = stops.map(s => `${s.color} ${s.pos}%`).join(', ');
            if (state.type === 'linear') {
                return `linear-gradient(${state.angle}deg, ${stopsStr})`;
            } else if (state.type === 'radial') {
                return `radial-gradient(circle, ${stopsStr})`;
            } else if (state.type === 'conic') {
                return `conic-gradient(from ${state.angle}deg, ${stopsStr})`;
            }
            return '';
        }

        function renderPreview() {
            const css = buildGradientCSS();
            preview.style.background = css;
            preview.textContent = css.replace(/,\s*/g, ', ');
            updateCSS();
        }

        function updateCSS() {
            const css = buildGradientCSS();
            const rule = `background: ${css};`;
            cssOut.value = rule + "\n/* Add -webkit- prefix for older browsers: background: -webkit-" + css.replace(/linear-gradient|radial-gradient|conic-gradient/, '$&') + "; */";
        }

        async function copyCSS() {
            try {
                await navigator.clipboard.writeText(cssOut.value);
                copyBtn.textContent = 'Copied!';
                setTimeout(() => copyBtn.textContent = 'Copy to clipboard', 1200);
            } catch (e) {
                // Fallback
                cssOut.select();
                document.execCommand('copy');
                copyBtn.textContent = 'Copied!';
                setTimeout(() => copyBtn.textContent = 'Copy to clipboard', 1200);
            }
        }

        function downloadCSS() {
            const content = cssOut.value;
            const blob = new Blob([content], { type: 'text/css' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url; a.download = 'gradient.css'; document.body.appendChild(a); a.click(); a.remove(); URL.revokeObjectURL(url);
        }

        // init
        init();
    </script>
</body>

</html>