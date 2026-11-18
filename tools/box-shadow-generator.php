<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">

    <title>Box Shadow Generator</title>

    <!-- Meta Description -->
    <meta name="description" content="Generate beautiful CSS box-shadow effects instantly with our free Box Shadow Generator. Customize blur, spread, color, and offset, then copy the CSS code with one click. Fast, easy, and beginner-friendly.">

    <!-- Meta Keywords -->
    <meta name="keywords" content="box shadow generator, free box shadow generator, css shadow generator, css box shadow tool, shadow creator, ui shadow tool, online box shadow generator, css effect generator, shadow maker, css design tool, web design tools, box shadow editor, box shadow builder">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://collegeall.com/assets/css/all.min.css">
    <style>
        :root {
            --bg: #0f172a;
            --card: #0b1220;
            --muted: #9aa4b2;
            --accent: #7c5cff;
            --ui-bg: #f7f9fc;
            --text: #0f172a;
        }

        * {
            box-sizing: border-box
        }

        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(180deg, #eef2ff 0%, #f8fafc 100%);
            color: var(--text);
        }

        .wrap {
            max-width: 1100px;
            margin: 36px auto;
            padding: 24px;
        }

        .wrap header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 18px
        }

        .wrap h1 {
            font-size: 20px;
            margin: 0
        }

        .wrap p.lead {
            margin: 0;
            color: var(--muted);
            font-size: 13px
        }

        .wrap .grid {
            display: grid;
            grid-template-columns: 360px 1fr;
            gap: 20px
        }

        .wrap .panel {
            background: white;
            border-radius: 12px;
            padding: 18px;
            box-shadow: 0 6px 30px rgba(16, 24, 40, 0.06)
        }

        .wrap .controls {
            display: flex;
            flex-direction: column;
            gap: 12px
        }

        .wrap .control {
            display: flex;
            flex-direction: column;
            gap: 8px
        }

        .wrap label {
            font-size: 13px;
            color: var(--muted)
        }

        .wrap .row {
            display: flex;
            gap: 8px;
            align-items: center
        }

        .wrap input[type=range] {
            width: 100%;
        }

        .wrap .value {
            min-width: 56px;
            text-align: right;
            font-weight: 600
        }

        .wrap .presets {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px
        }

        .wrap .preset {
            padding: 6px 8px;
            font-size: 13px;
            border-radius: 8px;
            border: 1px solid #e6eef8;
            background: #fff;
            color: black;
            cursor: pointer
        }

        .wrap .preview-area {
            display: flex;
            flex-direction: column;
            gap: 16px;
            align-items: center;
            justify-content: center;
            padding: 28px
        }

        .wrap .box-wrap {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px
        }

        .wrap .box {
            width: 220px;
            height: 160px;
            border-radius: 12px;
            background: linear-gradient(180deg, #fff, #f3f6ff);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #233;
        }

        .wrap .generated {
            display: flex;
            flex-direction: column;
            gap: 8px
        }

        .wrap textarea {
            width: 100%;
            min-height: 72px;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #e6eef8;
            font-family: monospace;
            font-size: 13px;
            resize: vertical
        }

        .wrap .copy-row {
            display: flex;
            gap: 8px
        }

        .wrap button {
            cursor: pointer;
            border: 0;
            padding: 8px 12px;
            border-radius: 8px;
            background: var(--accent);
            color: white;
            font-weight: 600
        }

        .wrap .muted {
            color: var(--muted);
            font-size: 13px
        }

        .wrap .top-controls {
            display: flex;
            gap: 12px;
            align-items: center
        }

        .wrap .color-group {
            display: flex;
            gap: 8px;
            align-items: center
        }

        .wrap .color-sample {
            width: 28px;
            height: 28px;
            border-radius: 6px;
            border: 1px solid rgba(0, 0, 0, 0.08)
        }

        .wrap footer {
            margin-top: 18px;
            color: var(--muted);
            font-size: 12px
        }

        @media (max-width:900px) {
            .wrap .grid {
                grid-template-columns: 1fr;
            }

            .wrap .panel {
                padding: 12px
            }
        }
    </style>
</head>

<body>
    <?php echo file_get_contents('https://collegeall.com/header.php'); ?>
    <div class="wrap">
        <header>
            <div>
                <h1>Box Shadow Generator</h1>
                <p class="lead">Interactive controls, presets, inset toggle and a live preview. Copy the generated CSS
                    quickly.</p>
            </div>
        </header>

        <div class="grid">
            <section class="panel">
                <div class="controls">
                    <div class="top-controls">
                        <div class="color-group">
                            <label for="color">Color</label>
                            <input id="color" type="color" value="#111827" aria-label="shadow color" />
                            <div id="colorSample" class="color-sample" title="color sample"></div>
                        </div>
                        <div style="margin-left:auto;display:flex; flex-wrap: wrap; align-items:center;gap:10px">
                            <label class="muted">Opacity</label>
                            <input id="opacity" type="range" min="0" max="1" step="0.01" value="0.25"
                                style="width:130px" />
                            <div class="value" id="opacityVal">0.25</div>
                        </div>
                    </div>

                    <div class="control">
                        <label for="h">Horizontal offset (px)</label>
                        <div class="row">
                            <input id="h" type="range" min="-100" max="100" value="0" />
                            <div class="value" id="hVal">0px</div>
                        </div>
                    </div>

                    <div class="control">
                        <label for="v">Vertical offset (px)</label>
                        <div class="row">
                            <input id="v" type="range" min="-100" max="100" value="10" />
                            <div class="value" id="vVal">10px</div>
                        </div>
                    </div>

                    <div class="control">
                        <label for="blur">Blur radius (px)</label>
                        <div class="row">
                            <input id="blur" type="range" min="0" max="200" value="20" />
                            <div class="value" id="blurVal">20px</div>
                        </div>
                    </div>

                    <div class="control">
                        <label for="spread">Spread radius (px)</label>
                        <div class="row">
                            <input id="spread" type="range" min="-100" max="100" value="0" />
                            <div class="value" id="spreadVal">0px</div>
                        </div>
                    </div>

                    <div class="control">
                        <label for="inset"><input id="inset" type="checkbox" /> Inset</label>
                    </div>

                    <div class="control">
                        <label for="presets">Presets</label>
                        <div id="presets" class="presets"></div>
                    </div>

                </div>
            </section>

            <section class="panel">
                <div class="preview-area">
                    <div class="box-wrap">
                        <div id="box" class="box">Preview</div>
                    </div>

                    <div class="generated" style="width:100%">
                        <label class="muted">Generated CSS (use in your stylesheet)</label>
                        <textarea id="cssOut" readonly></textarea>
                        <div class="copy-row">
                            <button id="copyBtn">Copy CSS</button>
                            <button id="copyInline">Copy inline style</button>
                            <div style="margin-left:auto" class="muted">Tip: try presets or drag sliders</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer>Made with ❤️ — adjust values, toggle inset, or choose a preset to quickly style your element.</footer>
    </div>

    <?php echo file_get_contents('https://collegeall.com/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Elements
        const color = document.getElementById('color');
        const opacity = document.getElementById('opacity');
        const opacityVal = document.getElementById('opacityVal');
        const colorSample = document.getElementById('colorSample');
        const h = document.getElementById('h');
        const v = document.getElementById('v');
        const blur = document.getElementById('blur');
        const spread = document.getElementById('spread');
        const inset = document.getElementById('inset');
        const box = document.getElementById('box');
        const cssOut = document.getElementById('cssOut');
        const copyBtn = document.getElementById('copyBtn');
        const copyInline = document.getElementById('copyInline');

        const hVal = document.getElementById('hVal');
        const vVal = document.getElementById('vVal');
        const blurVal = document.getElementById('blurVal');
        const spreadVal = document.getElementById('spreadVal');

        // Presets
        const presetsEl = document.getElementById('presets');
        const PRESETS = [
            { name: 'Soft (UI)', h: 0, v: 6, blur: 18, spread: 0, color: '#111827', opacity: 0.12, inset: false },
            { name: 'Floating', h: 0, v: 18, blur: 40, spread: -6, color: '#0b1724', opacity: 0.12, inset: false },
            { name: 'Heavy', h: 0, v: 18, blur: 28, spread: 0, color: '#000000', opacity: 0.35, inset: false },
            { name: 'Lifted (colored)', h: 0, v: 12, blur: 20, spread: 0, color: '#7c5cff', opacity: 0.16, inset: false },
            { name: 'Inner light', h: 0, v: 6, blur: 10, spread: 0, color: '#0b1724', opacity: 0.14, inset: true },
            { name: 'Sharp', h: 6, v: 6, blur: 0, spread: 0, color: '#000000', opacity: 0.18, inset: false }
        ];

        function createPresetButtons() {
            PRESETS.forEach((p, i) => {
                const btn = document.createElement('button');
                btn.className = 'preset';
                btn.innerText = p.name;
                btn.addEventListener('click', () => applyPreset(p));
                presetsEl.appendChild(btn);
            });
        }

        function hexToRgb(hex) {
            const h = hex.replace('#', '');
            const bigint = parseInt(h.length === 3 ? h.split('').map(c => c + c).join('') : h, 16);
            const r = (bigint >> 16) & 255;
            const g = (bigint >> 8) & 255;
            const b = bigint & 255;
            return { r, g, b };
        }

        function rgbaString(hex, a) {
            const { r, g, b } = hexToRgb(hex);
            return `rgba(${r}, ${g}, ${b}, ${a})`;
        }

        function updateValues() {
            hVal.textContent = h.value + 'px';
            vVal.textContent = v.value + 'px';
            blurVal.textContent = blur.value + 'px';
            spreadVal.textContent = spread.value + 'px';
            opacityVal.textContent = parseFloat(opacity.value).toFixed(2);
            colorSample.style.background = color.value;

            const rgba = rgbaString(color.value, opacity.value);
            const insetStr = inset.checked ? ' inset' : '';
            const css = `box-shadow: ${h.value}px ${v.value}px ${blur.value}px ${spread.value}px ${rgba}${insetStr};`;

            // apply to preview
            box.style.boxShadow = `${h.value}px ${v.value}px ${blur.value}px ${spread.value}px ${rgba}${inset.checked ? ' inset' : ''}`;

            // Show full CSS block for a selector
            const full = `.your-element {\n  ${css}\n}`;
            cssOut.value = full;
        }

        function applyPreset(p) {
            h.value = p.h; v.value = p.v; blur.value = p.blur; spread.value = p.spread; color.value = p.color; opacity.value = p.opacity; inset.checked = p.inset;
            updateValues();
        }

        // copy handlers
        copyBtn.addEventListener('click', async () => {
            try {
                await navigator.clipboard.writeText(cssOut.value);
                copyBtn.innerText = 'Copied!';
                setTimeout(() => copyBtn.innerText = 'Copy CSS', 900);
            } catch (e) {
                alert('Copy failed — select and copy manually.');
            }
        });

        copyInline.addEventListener('click', async () => {
            const style = `style="box-shadow: ${h.value}px ${v.value}px ${blur.value}px ${spread.value}px ${rgbaString(color.value, opacity.value)}${inset.checked ? ' inset' : ''};"`;
            try {
                await navigator.clipboard.writeText(style);
                copyInline.innerText = 'Copied!';
                setTimeout(() => copyInline.innerText = 'Copy inline style', 900);
            } catch (e) {
                alert('Copy failed — select and copy manually.');
            }
        });

        // wire events
        [h, v, blur, spread, opacity, color, inset].forEach(el => el.addEventListener('input', updateValues));

        // init
        createPresetButtons();
        updateValues();

        // keyboard accessibility: arrow keys for preset list
        presetsEl.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
                e.preventDefault();
                const focusable = Array.from(presetsEl.querySelectorAll('button'));
                const idx = focusable.indexOf(document.activeElement);
                let next = 0;
                if (e.key === 'ArrowRight') next = Math.min(focusable.length - 1, idx + 1);
                if (e.key === 'ArrowLeft') next = Math.max(0, idx - 1);
                focusable[next].focus();
            }
        });
    </script>
</body>

</html>