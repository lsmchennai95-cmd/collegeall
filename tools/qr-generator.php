<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <title>QR Code Generator - Create, Download & Copy QR Codes Instantly (Free Online Tool)</title>
    <meta name="description" content="Generate high-quality QR codes instantly using this free online QR Code Generator. Enter any text or URL, customize size and correction level, preview live, download PNG, or copy the QR image directly. Fast, responsive, and easy to use.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/qr-generator.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="QR Code Generator - Create, Download & Copy QR Codes Instantly (Free Online Tool)">
    <meta property="og:description" content="Generate high-quality QR codes instantly using this free online QR Code Generator. Enter any text or URL, customize size and correction level, preview live, download PNG, or copy the QR image directly. Fast, responsive, and easy to use.">
    <meta property="og:url" content="https://collegeall.com/tools/qr-generator.php">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="QR Code Generator - Create, Download & Copy QR Codes Instantly (Free Online Tool)">
    <meta name="twitter:description" content="Generate high-quality QR codes instantly using this free online QR Code Generator. Enter any text or URL, customize size and correction level, preview live, download PNG, or copy the QR image directly. Fast, responsive, and easy to use.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "QR Code Generator - Create, Download & Copy QR Codes Instantly (Free Online Tool)",
      "description": "Generate high-quality QR codes instantly using this free online QR Code Generator. Enter any text or URL, customize size and correction level, preview live, download PNG, or copy the QR image directly. Fast, responsive, and easy to use.",
      "url": "https://collegeall.com/tools/qr-generator.php",
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
    <meta charset="utf-8" />    <meta name="viewport" content="width=device-width,initial-scale=1" />    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <meta name="keywords" content="qr code generator, create qr code, free qr code generator, qr code maker, qr code creator, qr code png download, online qr code tool, qr code generator free, qr code generator online, generate qr code url, qr code generator text, instant qr code">    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>    <link rel="stylesheet" href="../index.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">    <style>        :root {            --bg: #f7fafc;            --card: #ffffff;            --accent: #0b6efd;            --muted: #6b7280;            --shadow: 0 6px 18px rgba(11, 37, 92, 0.08);            --radius: 12px;            --gap: 16px;        }        * {            box-sizing: border-box        }        .qr-container {            width: 100%;            max-width: 980px;            background: var(--card);            border-radius: var(--radius);            box-shadow: var(--shadow);            padding: 24px;            display: grid;            gap: var(--gap);            grid-template-columns: 1fr 360px;        }        .qr-container header {            grid-column: 1 / -1;            display: flex;            gap: 12px;            align-items: center;        }        .qr-container header h1 {            margin: 0;            font-size: 20px;            line-height: 1;        }        .qr-container header p {            margin: 0;            color: var(--muted);            font-size: 13px;        }        .qr-container form {            display: flex;            flex-direction: column;            gap: 12px;        }        .qr-container label {            font-weight: 600;            font-size: 13px;            margin-bottom: 6px;        }        .qr-container input[type="text"],        textarea,        select {            width: 100%;            padding: 12px 14px;            border-radius: 10px;            border: 1px solid #e6edf8;            background: #fbfdff;            font-size: 15px;            outline-offset: 2px;        }        .qr-container textarea {            min-height: 120px;            resize: vertical;        }        .qr-container .controls {            display: flex;            gap: 8px;            flex-wrap: wrap;            align-items: center;        }        .qr-container .btn {            display: inline-flex;            align-items: center;            gap: 8px;            padding: 10px 14px;            border-radius: 10px;            font-weight: 600;            cursor: pointer;            border: 0;            background: var(--accent);            color: white;            box-shadow: 0 6px 12px rgba(11, 110, 253, 0.12);            transition: transform .08s ease, box-shadow .08s ease, opacity .08s;        }        .qr-container .btn:active {            transform: translateY(1px)        }        .qr-container .btn.secondary {            background: #f3f4f6;            color: #0f172a;            box-shadow: none;            border: 1px solid #e6e9ee;        }        .qr-container .small {            font-size: 13px;            color: var(--muted);        }        .qr-container .right-column {            display: flex;            flex-direction: column;            gap: 12px;            align-items: center;            justify-content: center;            padding: 12px;            border-radius: 10px;            background: linear-gradient(180deg, #ffffff, #fbfdff);            border: 1px solid #eef2ff;            min-height: 260px;        }        .qr-container .qrcode-wrap {            display: flex;            align-items: center;            justify-content: center;            padding: 12px;            background: linear-gradient(180deg, #f8fafc, #ffffff);            border-radius: 8px;            min-width: 200px;            min-height: 200px;            max-width: 320px;        }        #qrcode {            /* element where QR lib renders; keep it centered & responsive */            display: flex;            align-items: center;            justify-content: center;        }        .qr-container .meta {            width: 100%;            display: flex;            gap: 8px;            align-items: center;            justify-content: space-between;        }        .qr-container .meta .muted {            color: var(--muted);            font-size: 13px        }        .qr-container .footer {            grid-column: 1 / -1;            display: flex;            gap: 12px;            align-items: center;            justify-content: space-between;            color: var(--muted);            font-size: 13px;        }        /* Responsive */        @media (max-width:920px) {            .container {                grid-template-columns: 1fr;                padding: 18px;            }            .qr-container .right-column {                order: -1;            }        }        /* Focus visible for accessibility */        :focus {            outline: none;        }        :focus-visible {            outline: 3px solid rgba(11, 110, 253, 0.18);            outline-offset: 3px;            border-radius: 8px;        }    </style></head>

<body>
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>
    <main class="container qr-container mt-3" id="main" role="main">
        <header>
            <div>
                <h1 id="title">QR Code Generator</h1>
                <p id="description">Type any text or URL below — preview updates live. Download a PNG copy of the QR
                    code.</p>
            </div>
        </header>

        <section aria-labelledby="form-heading">
            <form id="qrForm" onsubmit="return false;">
                <div>
                    <label for="text" id="form-heading">Text or URL</label>
                    <input type="text" id="text" name="text" inputmode="text" autocomplete="off"
                        placeholder="https://example.com or any text" aria-describedby="text-help" />
                    <div id="text-help" class="small">Enter a URL or any text. The QR updates while typing.</div>
                </div>

                <div style="display:flex;gap:12px;align-items:center;">
                    <div style="flex:1">
                        <label for="size">Size (px)</label>
                        <select id="size" aria-label="Select size in pixels">
                            <option value="160">160</option>
                            <option value="200" selected>200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                        </select>
                    </div>

                    <div style="width:140px;">
                        <label for="ecc">Error correction</label>
                        <select id="ecc" aria-label="Select error correction level">
                            <option value="L">L — ~7% correction</option>
                            <option value="M" selected>M — ~15% correction</option>
                            <option value="Q">Q — ~25% correction</option>
                            <option value="H">H — ~30% correction</option>
                        </select>
                    </div>
                </div>

                <div style="display:flex;gap:8px;align-items:center;margin-top:6px;">
                    <button class="btn" id="generateBtn" type="button">Generate</button>
                    <button class="btn secondary" id="clearBtn" type="button">Clear</button>
                    <div style="flex:1"></div>
                </div>

                <div class="small" aria-live="polite" id="status" style="margin-top:8px;color:var(--muted)">
                    Ready.
                </div>
            </form>
        </section>

        <aside class="right-column" aria-labelledby="preview-label">
            <div style="width:100%;display:flex;align-items:center;justify-content:space-between;">
                <div id="preview-label" style="font-weight:700">Preview</div>
                <div class="small muted" id="qrSizeLabel">200 × 200</div>
            </div>

            <div class="qrcode-wrap" aria-hidden="false">
                <div id="qrcode" role="img" aria-label="QR code preview"></div>
            </div>

            <div style="width:100%;display:flex;gap:8px;justify-content:center;">
                <button class="btn" id="downloadBtn" type="button" aria-live="polite">Download PNG</button>
                <button class="btn secondary" id="copyBtn" type="button">Copy PNG to clipboard</button>
            </div>
            <div class="small" id="downloadHint" aria-hidden="true" style="text-align:center;color:var(--muted)">
                Tip: Use the Download button to save a PNG. Copy to clipboard works in secure contexts (HTTPS).
            </div>
        </aside>

        <div class="footer" aria-hidden="false">
            <div>Made with <strong>qrcodejs</strong></div>
            <div>Accessible · Responsive</div>
        </div>
    </main>
    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Elements
        const textInput = document.getElementById('text');
        const sizeSelect = document.getElementById('size');
        const eccSelect = document.getElementById('ecc');
        const qrcodeContainer = document.getElementById('qrcode');
        const generateBtn = document.getElementById('generateBtn');
        const clearBtn = document.getElementById('clearBtn');
        const downloadBtn = document.getElementById('downloadBtn');
        const copyBtn = document.getElementById('copyBtn');
        const status = document.getElementById('status');
        const qrSizeLabel = document.getElementById('qrSizeLabel');

        // Debounce helper
        function debounce(fn, wait = 200) {
            let t;
            return function (...args) {
                clearTimeout(t);
                t = setTimeout(() => fn.apply(this, args), wait);
            }
        }

        // Keep reference to QRCode instance created by qrcodejs
        let qr = null;

        // Initialize with a default sample
        const defaultValue = 'https://example.com';
        textInput.value = defaultValue;

        function clearQRCodeElement() {
            // Remove all children under qrcode container
            while (qrcodeContainer.firstChild) qrcodeContainer.removeChild(qrcodeContainer.firstChild);
        }

        function generateQRCode(value, size, ecc) {
            value = (value || '').toString();

            if (!value.trim()) {
                status.textContent = 'Enter text or URL to generate a QR code.';
                clearQRCodeElement();
                return;
            }

            status.textContent = 'Generating…';

            // Clear any existing instance and HTML
            clearQRCodeElement();
            qr = null;

            // qrcodejs creates an <img> or <canvas> inside the container
            // We create a new div to pass to the library
            const holder = document.createElement('div');
            qrcodeContainer.appendChild(holder);

            try {
                qr = new QRCode(holder, {
                    text: value,
                    width: Number(size),
                    height: Number(size),
                    colorDark: "#000000",
                    colorLight: "#ffffff",
                    correctLevel: QRCode.CorrectLevel ? QRCode.CorrectLevel[ecc] : QRCode.CorrectLevel.M
                });

                // Some qrcodejs variants don't expose size; we still update label
                qrSizeLabel.textContent = size + ' × ' + size;

                // When library finishes, the element will contain an <img> or <canvas>.
                // Update status after a small delay to ensure DOM updated.
                setTimeout(() => {
                    status.textContent = 'QR code ready.';
                }, 120);

            } catch (err) {
                console.error(err);
                status.textContent = 'Failed to generate QR code: ' + (err.message || err);
            }
        }

        // Generate when user clicks
        generateBtn.addEventListener('click', () => {
            generateQRCode(textInput.value, sizeSelect.value, eccSelect.value);
            textInput.focus();
        });

        // Clear input and preview
        clearBtn.addEventListener('click', () => {
            textInput.value = '';
            clearQRCodeElement();
            status.textContent = 'Cleared.';
            textInput.focus();
            qrSizeLabel.textContent = sizeSelect.value + ' × ' + sizeSelect.value;
        });

        // Auto-generate on input with debounce
        const autoGenerate = debounce(() => {
            generateQRCode(textInput.value, sizeSelect.value, eccSelect.value);
        }, 350);

        textInput.addEventListener('input', autoGenerate);
        sizeSelect.addEventListener('change', () => {
            qrSizeLabel.textContent = sizeSelect.value + ' × ' + sizeSelect.value;
            // regenerate with new size
            generateQRCode(textInput.value, sizeSelect.value, eccSelect.value);
        });
        eccSelect.addEventListener('change', () => generateQRCode(textInput.value, sizeSelect.value, eccSelect.value));

        // Download logic
        async function downloadPNG(filename = 'qrcode.png') {
            // find canvas or img inside qrcodeContainer
            const canvas = qrcodeContainer.querySelector('canvas');
            const img = qrcodeContainer.querySelector('img');

            try {
                if (canvas) {
                    const dataUrl = canvas.toDataURL('image/png');
                    triggerDownload(dataUrl, filename);
                } else if (img && img.src) {
                    // img.src could be data URL already
                    if (img.src.startsWith('data:')) {
                        triggerDownload(img.src, filename);
                    } else {
                        // fetch the image as blob then download
                        const resp = await fetch(img.src);
                        if (!resp.ok) throw new Error('Failed to fetch QR image for download');
                        const blob = await resp.blob();
                        const url = URL.createObjectURL(blob);
                        triggerDownload(url, filename);
                        // revoke after a short timeout
                        setTimeout(() => URL.revokeObjectURL(url), 15000);
                    }
                } else {
                    status.textContent = 'No QR code to download. Generate one first.';
                }
            } catch (err) {
                console.error(err);
                status.textContent = 'Download failed: ' + (err.message || err);
            }
        }

        function triggerDownload(dataUrlOrBlobUrl, filename) {
            const a = document.createElement('a');
            a.href = dataUrlOrBlobUrl;
            a.download = filename;
            document.body.appendChild(a);
            a.click();
            a.remove();
            status.textContent = 'Download started.';
        }

        // Copy PNG to clipboard (if supported)
        async function copyPNGToClipboard() {
            const canvas = qrcodeContainer.querySelector('canvas');
            const img = qrcodeContainer.querySelector('img');

            try {
                if (navigator.clipboard && navigator.clipboard.write) {
                    if (canvas) {
                        const blob = await new Promise(res => canvas.toBlob(res, 'image/png'));
                        const item = new ClipboardItem({ 'image/png': blob });
                        await navigator.clipboard.write([item]);
                        status.textContent = 'PNG copied to clipboard.';
                        return;
                    } else if (img && img.src && img.src.startsWith('data:')) {
                        // convert data URL to blob
                        const blob = dataURLToBlob(img.src);
                        const item = new ClipboardItem({ 'image/png': blob });
                        await navigator.clipboard.write([item]);
                        status.textContent = 'PNG copied to clipboard.';
                        return;
                    } else {
                        status.textContent = 'Clipboard copy unavailable for this QR output.';
                        return;
                    }
                } else {
                    status.textContent = 'Clipboard image API not supported in this browser.';
                }
            } catch (err) {
                console.error(err);
                status.textContent = 'Copy failed: ' + (err.message || err);
            }
        }

        function dataURLToBlob(dataurl) {
            const arr = dataurl.split(',');
            const mime = arr[0].match(/:(.*?);/)[1];
            const bstr = atob(arr[1]);
            let n = bstr.length;
            const u8arr = new Uint8Array(n);
            while (n--) u8arr[n] = bstr.charCodeAt(n);
            return new Blob([u8arr], { type: mime });
        }

        downloadBtn.addEventListener('click', () => {
            downloadPNG('qrcode.png');
        });

        copyBtn.addEventListener('click', () => {
            copyPNGToClipboard();
        });

        // Keyboard accessibility: enter in input triggers generate
        textInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                generateQRCode(textInput.value, sizeSelect.value, eccSelect.value);
            }
        });

        // Initial generation
        window.addEventListener('load', () => {
            // Wait for qrcodejs to load if needed
            const tryInit = () => {
                if (window.QRCode) {
                    generateQRCode(textInput.value, sizeSelect.value, eccSelect.value);
                } else {
                    // if library not loaded yet, wait
                    setTimeout(tryInit, 80);
                }
            };
            tryInit();
        });

        // Improve accessibility: announce status updates for screen readers
        // status element has aria-live="polite" already via markup.
    </script>
</body>

</html>