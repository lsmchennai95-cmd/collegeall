<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Color Palette Builder</title>
    <meta name="description" content="Generate stunning color palettes instantly. Pick colors, copy hex codes, export schemes, and create aesthetic palettes for UI design, branding, and web projects.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/color-palette.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Color Palette Builder">
    <meta property="og:description" content="Generate stunning color palettes instantly. Pick colors, copy hex codes, export schemes, and create aesthetic palettes for UI design, branding, and web projects.">
    <meta property="og:url" content="https://collegeall.com/tools/color-palette.php">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Color Palette Builder">
    <meta name="twitter:description" content="Generate stunning color palettes instantly. Pick colors, copy hex codes, export schemes, and create aesthetic palettes for UI design, branding, and web projects.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Color Palette Builder",
      "description": "Generate stunning color palettes instantly. Pick colors, copy hex codes, export schemes, and create aesthetic palettes for UI design, branding, and web projects.",
      "url": "https://collegeall.com/tools/color-palette.php",
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
    <meta charset="utf-8" />    <meta name="viewport" content="width=device-width,initial-scale=1" />    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <meta name="keywords" content="color palette generator, color picker, color scheme tool, hex color palette, ui color tool, rgb hsl converter, color combinations, web design colors, gradient generator, color palette maker">    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>    <link rel="stylesheet" href="../index.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">    <style>        :root {            --bg: #0f1724;            --card: #0b1220;            --muted: #9aa4b2;            --glass: rgba(255, 255, 255, 0.04)        }        html,        body {            height: 100%;            margin: 0;            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial        }        body {            background: linear-gradient(180deg, #071028 0%, var(--bg) 100%);            color: #e6eef6;        }        .color-palette{            padding: 10px;        }        .color-palette .app {            max-width: 1100px;            margin: 0 auto        }        .color-palette header {            display: flex;            align-items: center;            gap: 16px;            margin-bottom: 18px        }        .color-palette h1 {            font-size: 20px;            margin: 0        }        .color-palette p.lead {            margin: 0;            color: var(--muted);            font-size: 13px        }        .color-palette .controls {            display: flex;            gap: 10px;            flex-wrap: wrap;            margin: 18px 0        }        .color-palette button {            background: transparent;            border: 1px solid var(--glass);            color: inherit;            padding: 8px 12px;            border-radius: 8px;            cursor: pointer        }        .color-palette button.primary {            background: linear-gradient(90deg, #3b82f6, #8b5cf6);            border: 0;            color: white        }        .color-palette .palette {            display: grid;            grid-template-columns: repeat(6, 1fr);            gap: 12px        }        .color-palette .swatch {            height: 250px;            border-radius: 12px;            position: relative;            overflow: hidden;            box-shadow: 0 6px 18px rgba(2, 6, 23, 0.6)        }        .color-palette .swatch .top {            position: absolute;            inset: 0;            display: flex;            flex-direction: column;            justify-content: flex-end;            padding: 12px;            backdrop-filter: blur(6px)        }        .color-palette .meta {            background: rgba(0, 0, 0, 0.18);            padding: 8px;            border-radius: 8px;            color: var(--muted);            display: flex;            flex-direction: column;            gap: 6px        }        .color-palette .codes {            display: flex;            flex-wrap: wrap;            gap: 8px;            align-items: center        }        .color-palette .code {            font-family: monospace;            background: rgba(255, 255, 255, 0.06);            padding: 6px 8px;            border-radius: 6px;            cursor: pointer        }        .color-palette .btns {            display: flex;            gap: 6px        }        .color-palette .small {            font-size: 12px;            padding: 6px 8px        }        .color-palette .lock {            display: flex;            align-items: center;            gap: 6px        }        .color-palette .color-input {            position: absolute;            right: 8px;            top: 8px;            border-radius: 6px;            width: 36px;            height: 36px;            border: 0;            padding: 0;            background: transparent        }        .color-palette .controls .label {            color: var(--muted);            font-size: 13px        }        .color-palette footer {            margin-top: 18px;            color: var(--muted);            font-size: 13px        }        /* modal */        .color-palette .modal-backdrop {            position: fixed;            inset: 0;            background: rgba(2, 6, 23, 0.6);            display: none;            align-items: center;            justify-content: center;            padding: 20px        }        .color-palette .modal {            background: #0a1220;            border-radius: 12px;            padding: 18px;            max-width: 820px;            width: 100%;            box-shadow: 0 10px 40px rgba(2, 6, 23, 0.7)        }        .color-palette textarea {            width: 100%;            height: 220px;            background: transparent;            color: #e6eef6;            border: 1px solid rgba(255, 255, 255, 0.06);            padding: 12px;            border-radius: 8px;            font-family: monospace        }        .modal-content{            background: none;        }        @media (max-width:880px) {            .color-palette .palette {                grid-template-columns: repeat(3, 1fr)            }            .color-palette .swatch {                height: 180px            }        }        @media (max-width:480px) {            .color-palette .palette {                grid-template-columns: repeat(2, 1fr)            }        }    </style></head>

<body>
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>
    <div class="color-palette mt-5 mb-5">
        <div class="app">
            <header>
                <div>
                    <h1>Color Palette Builder</h1>
                    <p class="lead">Pick colors, lock favorites, randomize the rest, copy values, and export CSS variables.
                    </p>
                </div>
            </header>

            <div class="controls">
                <button id="randomize" class="primary">Randomize (Space)</button>
                <button id="exportCss" data-bs-toggle="modal" data-bs-target="#exportCssModal">Export CSS Palette</button>
                <label class="label">Swatches:
                    <select id="count"
                        style="margin-left:8px;padding:6px;border-radius:6px;background:transparent;border:1px solid rgba(255,255,255,0.04);color:inherit">
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6" selected>6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </label>
                <div style="margin-left:auto;display:flex;gap:8px;align-items:center">
                    <span style="color:var(--muted);font-size:13px">Click a color code to copy</span>
                </div>
            </div>

            <main>
                <div id="palette" class="palette" aria-live="polite"></div>
            </main>

            <footer>
                Tip: Lock colors you want to keep and press Randomize to generate matching palettes.
            </footer>
        </div>

        <!-- Export CSS Modal -->
        <div class="modal fade" id="exportCssModal" tabindex="-1" aria-labelledby="exportCssModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exportCssModalLabel">Export CSS Variables</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p class="text-white mb-2">Copy the CSS variables below into your stylesheet.</p>
                    <textarea id="cssOutput" class="form-control" rows="7" readonly></textarea>
                </div>

                <div class="modal-footer">
                    <button id="downloadCss" class="btn btn-secondary">Download .css</button>
                    <button id="copyCss" class="btn btn-primary">Copy to clipboard</button>
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>

    </div>

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Utility functions
        function randHex() {
            return '#' + Math.floor(Math.random() * 16777215).toString(16).padStart(6, '0');
        }
        function hexToRgb(hex) {
            const r = parseInt(hex.slice(1, 3), 16), g = parseInt(hex.slice(3, 5), 16), b = parseInt(hex.slice(5, 7), 16);
            return { r, g, b };
        }
        function rgbToHsl(r, g, b) {
            r /= 255; g /= 255; b /= 255; const max = Math.max(r, g, b), min = Math.min(r, g, b);
            let h = 0, s = 0, l = (max + min) / 2;
            if (max === min) { h = s = 0; } else {
                const d = max - min; s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
                switch (max) { case r: h = (g - b) / d + (g < b ? 6 : 0); break; case g: h = (b - r) / d + 2; break; case b: h = (r - g) / d + 4; break }
                h /= 6; h = Math.round(h * 360);
            }
            return { h, s: Math.round(s * 100), l: Math.round(l * 100) };
        }
        function toHex(v) { return '#' + v.toString(16).padStart(2, '0'); }
        function formatRgb(obj) { return `rgb(${obj.r}, ${obj.g}, ${obj.b})` }
        function formatHsl(hsl) { return `hsl(${hsl.h} ${hsl.s}% ${hsl.l}%)` }

        const paletteEl = document.getElementById('palette');
        const randomizeBtn = document.getElementById('randomize');
        const exportBtn = document.getElementById('exportCss');
        const cssOutput = document.getElementById('cssOutput');
        const downloadCss = document.getElementById('downloadCss');
        const copyCss = document.getElementById('copyCss');
        const countEl = document.getElementById('count');

        let state = {
            colors: [], // {hex, locked}
            count: parseInt(countEl.value, 10)
        };

        function createSwatch(index, color) {
            const wrapper = document.createElement('div'); wrapper.className = 'swatch';
            const input = document.createElement('input'); input.type = 'color'; input.className = 'color-input'; input.value = color.hex;
            input.title = 'Pick color';

            const top = document.createElement('div'); top.className = 'top';
            const meta = document.createElement('div'); meta.className = 'meta';

            const codes = document.createElement('div'); codes.className = 'codes';
            const hexEl = document.createElement('div'); hexEl.className = 'code'; hexEl.textContent = color.hex; hexEl.title = 'Copy HEX';
            const rgbObj = hexToRgb(color.hex);
            const rgbEl = document.createElement('div'); rgbEl.className = 'code'; rgbEl.textContent = formatRgb(rgbObj); rgbEl.title = 'Copy RGB';
            const hslObj = rgbToHsl(rgbObj.r, rgbObj.g, rgbObj.b);
            const hslEl = document.createElement('div'); hslEl.className = 'code'; hslEl.textContent = formatHsl(hslObj); hslEl.title = 'Copy HSL';

            const btns = document.createElement('div'); btns.className = 'btns';
            const lockBtn = document.createElement('button'); lockBtn.className = 'small'; lockBtn.textContent = color.locked ? 'Unlock' : 'Lock';
            lockBtn.setAttribute('aria-pressed', String(color.locked));

            // copy handlers
            [hexEl, rgbEl, hslEl].forEach(el => {
                el.addEventListener('click', async () => {
                    try { await navigator.clipboard.writeText(el.textContent); flash(el, 'Copied!'); }
                    catch (e) { flash(el, 'Copy failed'); }
                });
            });

            // lock handler
            lockBtn.addEventListener('click', () => {
                state.colors[index].locked = !state.colors[index].locked;
                lockBtn.textContent = state.colors[index].locked ? 'Unlock' : 'Lock';
                lockBtn.setAttribute('aria-pressed', String(state.colors[index].locked));
                render();
            });

            // color input change
            input.addEventListener('input', () => {
                state.colors[index].hex = input.value.toUpperCase();
                render();
            });

            // swatch background update
            wrapper.style.background = color.hex;

            codes.appendChild(hexEl); codes.appendChild(rgbEl); codes.appendChild(hslEl);
            meta.appendChild(codes);
            meta.appendChild(btns);
            btns.appendChild(lockBtn);

            top.appendChild(meta);
            wrapper.appendChild(input);
            wrapper.appendChild(top);

            // double-click to lock/unlock
            wrapper.addEventListener('dblclick', () => { lockBtn.click(); });

            return wrapper;
        }

        function flash(el, text) {
            const old = el.textContent; const origBg = el.style.background;
            el.textContent = text; el.style.background = 'rgba(255,255,255,0.12)';
            setTimeout(() => { el.textContent = old; el.style.background = origBg; }, 800);
        }

        function ensureStateCount() {
            const n = state.count;
            while (state.colors.length < n) state.colors.push({ hex: randHex().toUpperCase(), locked: false });
            while (state.colors.length > n) state.colors.pop();
        }

        function render() {
            ensureStateCount();
            paletteEl.innerHTML = '';
            state.colors.forEach((c, i) => {
                const sw = createSwatch(i, c);
                paletteEl.appendChild(sw);
            });
        }

        function randomize() {
            state.colors = state.colors.map(c => c.locked ? c : { hex: randHex().toUpperCase(), locked: false });
            render();
        }

        randomizeBtn.addEventListener('click', () => randomize());
        document.addEventListener('keydown', (e) => { if (e.code === 'Space') { e.preventDefault(); randomize(); } });

        exportBtn.addEventListener('click', () => {
            // build CSS variables
            const vars = state.colors.map((c, i) => `  --color-${i + 1}: ${c.hex};`).join('\n');
            const css = `:root {\n${vars}\n}`;
            cssOutput.value = css;
        });

        copyCss.addEventListener('click', async () => { try { await navigator.clipboard.writeText(cssOutput.value); copyCss.textContent = 'Copied'; setTimeout(() => copyCss.textContent = 'Copy to clipboard', 900); } catch (e) { copyCss.textContent = 'Failed'; setTimeout(() => copyCss.textContent = 'Copy to clipboard', 900); } });
        downloadCss.addEventListener('click', () => {
            const blob = new Blob([cssOutput.value], { type: 'text/css' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a'); a.href = url; a.download = 'palette.css'; document.body.appendChild(a); a.click(); a.remove(); URL.revokeObjectURL(url);
        });

        countEl.addEventListener('change', () => {
            state.count = parseInt(countEl.value, 10);
            ensureStateCount();
            render();
        });

        // initialize
        (function init() {
            state.count = parseInt(countEl.value, 10);
            ensureStateCount();
            randomize();
        })();
    </script>
</body>

</html>