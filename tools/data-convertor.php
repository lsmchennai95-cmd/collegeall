<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
  <title>Universal Data Converter — JSON, CSV & Excel to JSON / PHP / SQL (Client-Side Tool)</title>
  <meta name="description" content="Convert JSON, CSV, and Excel files directly in your browser with this fast client-side data converter. Generate JSON, PHP arrays, MySQL INSERT queries, Python lists, and CSV exports — no server required. Upload or paste your data and download all formats instantly." />
  <meta name="keywords" content="json to php converter, json to sql converter, excel to json converter, csv to json converter, csv to sql converter, excel to sql converter, json to python list, data converter tool, client-side data converter, online data format converter, json converter, csv converter, excel converter, mysql insert generator, php array generator">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">
  <style>
    :root {
      --primary-color: #004aad;
      --secondary-color: #2074ff;
      --accent-color: #ff3131;
      --light-color: #f8f9fa;
      --dark-color: #343a40;
      --success-color: #51cf66;
      --warning-color: #ffc107;
      --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
      --border-radius: 12px;
      --transition: all 0.18s ease;
      --mono: "Courier New", monospace;
    }

    * {
      box-sizing: border-box;
    }

    html,
    body {
      height: 100%;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
      color: var(--dark-color);
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .data-converter .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .data-converter header {
      background: #fff;
      padding: 24px;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow);
      text-align: center;
      margin-bottom: 20px;
      position: relative;
      overflow: hidden;
    }

    .data-converter header::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--accent-color));
    }

    .data-converter header h1 {
      color: var(--primary-color);
      margin-bottom: 6px;
      font-size: clamp(1.6rem, 3vw, 2.2rem);
    }

    .data-converter .description {
      color: #6c757d;
      margin: 0 auto;
      max-width: 900px;
      font-size: 1rem;
    }

    .data-converter .panel {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      margin-top: 18px;
    }

    .data-converter .card {
      background: #fff;
      padding: 18px;
      border-radius: 12px;
      box-shadow: var(--shadow);
      flex: 1 1 360px;
      min-width: 300px;
    }

    .data-converter h2 {
      color: var(--secondary-color);
      margin: 0 0 12px 0;
      font-size: 1.2rem;
      display: flex;
      gap: 10px;
      align-items: center;
    }

    .data-converter label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #333;
    }

    .data-converter input[type="text"],
    textarea,
    select {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #e6e9ef;
      font-size: 14px;
      background: linear-gradient(180deg, #fff, #fbfdff);
    }

    .data-converter textarea {
      min-height: 140px;
      font-family: var(--mono);
      resize: vertical;
    }

    .data-converter .file-input-wrapper {
      position: relative;
      overflow: hidden;
      display: block;
    }

    .data-converter .file-input-button {
      border: 2px dashed #adb5bd;
      padding: 12px;
      border-radius: 10px;
      display: flex;
      gap: 8px;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      color: var(--dark-color);
      background: #f8f9fa;
      font-weight: 700;
    }

    .data-converter .file-input-wrapper input[type=file] {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      cursor: pointer;
    }

    .data-converter .file-name {
      margin-top: 10px;
      color: #6c757d;
      font-size: 14px;
      display: flex;
      gap: 8px;
      align-items: center;
    }

    .data-converter .checkbox-group {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 8px;
    }

    .data-converter .checkbox-item {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .data-converter .actions {
      display: flex;
      gap: 10px;
      margin-top: 14px;
      flex-wrap: wrap;
    }

    .data-converter button {
      border: none;
      padding: 12px 16px;
      border-radius: 10px;
      cursor: pointer;
      font-weight: 700;
      font-size: 14px;
      background: var(--primary-color);
      color: #fff;
    }

    .data-converter button.ghost {
      background: transparent;
      color: var(--primary-color);
      border: 1px solid rgba(74, 111, 165, 0.12);
      box-shadow: none;
    }

    .data-converter button.secondary {
      background: #6c757d;
    }

    .data-converter button.success {
      background: var(--success-color);
      color: #000;
    }

    .data-converter button.warning {
      background: var(--warning-color);
      color: #000;
    }

    .data-converter .result {
      margin-top: 16px;
      display: none;
    }

    .data-converter .output-section {
      margin-top: 12px;
      border-radius: 8px;
      border: 1px solid #eee;
      padding: 12px;
      background: #fbfdff;
    }

    .data-converter .output-section h4 {
      margin: 0 0 8px 0;
      color: var(--secondary-color);
      display: flex;
      gap: 8px;
      align-items: center;
    }

    .data-converter .preview {
      margin-top: 14px;
      max-height: 300px;
      overflow: auto;
      border-radius: 8px;
      border: 1px solid #eee;
      padding: 12px;
      background: #fff;
    }

    .data-converter table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13px;
    }

    .data-converter th,
    td {
      border: 1px solid #eee;
      padding: 8px;
      text-align: left;
    }

    .data-converter th {
      background: #f6f8fb;
      position: sticky;
      top: 0;
    }

    .data-converter .instructions {
      background: #e7f3ff;
      padding: 14px;
      margin-top: 18px;
      border-radius: 8px;
      border-left: 4px solid var(--primary-color);
    }

    .data-converter .status-indicator {
      display: inline-flex;
      gap: 6px;
      align-items: center;
      padding: 6px 10px;
      border-radius: 18px;
      font-weight: 700;
      font-size: 13px;
    }

    .data-converter .status-ready {
      background: #d4edda;
      color: #155724;
    }

    .data-converter .status-waiting {
      background: #fff3cd;
      color: #856404;
    }

    .toast {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: var(--success-color);
      color: #fff;
      padding: 12px 16px;
      border-radius: 8px;
      box-shadow: var(--shadow-lg);
      display: flex;
      gap: 10px;
      align-items: center;
      transform: translateY(100px);
      opacity: 0;
      transition: var(--transition);
      z-index: 9999;
    }

    .toast.show {
      transform: translateY(0);
      opacity: 1;
    }

    .toast.error {
      background: var(--accent-color);
    }

    @media (max-width:760px) {
      .panel {
        flex-direction: column;
      }

      .card {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <?php include COLLEGEALL_ROOT . '/header.php'; ?>
  <div class="data-converter mt-5 mb-5">
    <div class="container">
      <header>
        <h1><i class="fas fa-exchange-alt"></i> Universal Data Converter</h1>
        <p class="description">Convert JSON / CSV / Excel client-side into JSON, PHP Array, MySQL INSERT, Python list, or
          CSV export — all in-browser (no server).</p>
      </header>

      <div class="panel">
        <!-- Input card -->
        <div class="card" id="inputCard">
          <h2><i class="fas fa-upload"></i> Input</h2>

          <div class="input-group">
            <label for="fileInput">Upload File (JSON, CSV, XLSX / XLS):</label>
            <div class="file-input-wrapper">
              <div class="file-input-button"><i class="fas fa-cloud-upload-alt"></i> Choose file</div>
              <input type="file" id="fileInput" accept=".json,.csv,.xlsx,.xls" />
            </div>
            <div class="file-name" id="fileName"><i class="fas fa-file"></i> No file chosen</div>
          </div>

          <div class="input-group">
            <label for="pasteText">Or paste JSON / CSV text here:</label>
            <textarea id="pasteText" placeholder='Paste JSON array or CSV rows here...'></textarea>
          </div>

          <div class="input-group">
            <label>Choose Output Formats:</label>
            <div class="checkbox-group">
              <div class="checkbox-item">
                <input type="checkbox" id="outJsonChk" checked />
                <label for="outJsonChk">JSON</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="outPhpChk" checked />
                <label for="outPhpChk">PHP Array</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="outSqlChk" checked />
                <label for="outSqlChk">MySQL INSERT</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="outPyChk" checked />
                <label for="outPyChk">Python List</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="outCsvChk" checked />
                <label for="outCsvChk">CSV Export</label>
              </div>
            </div>
          </div>

          <div class="input-group">
            <label for="tableName">MySQL Table Name:</label>
            <input type="text" id="tableName" placeholder="my_table" value="my_table" />
            <div style="font-size:13px;color:#6c757d;margin-top:6px;">Table name used for generated INSERT statements
            </div>
          </div>

          <div class="actions">
            <button id="convertBtn" class="primaryBtn"><i class="fas fa-sync-alt"></i> Convert</button>
            <button id="clearBtn" class="ghost"><i class="fas fa-eraser"></i> Clear</button>
          </div>

          <div style="margin-top:12px;">
            <span class="status-indicator status-waiting" id="statusIndicator">Waiting for input</span>
          </div>
        </div>

        <!-- Output card -->
        <div class="card" id="outputCard">
          <h2><i class="fas fa-file-export"></i> Output & Preview</h2>

          <div id="result" class="result">
            <!-- JSON -->
            <div class="output-section" id="jsonSection">
              <h4><i class="fab fa-js-square"></i> JSON</h4>
              <textarea id="outJsonTxt" readonly style="min-height:120px"></textarea>
              <div class="actions" style="margin-top:8px">
                <button class="secondary" onclick="copyToClipboard('outJsonTxt')"><i class="fas fa-copy"></i> Copy
                  JSON</button>
                <button class="success" onclick="downloadText('outJsonTxt','data.json')"><i class="fas fa-download"></i>
                  Download JSON</button>
              </div>
            </div>

            <!-- PHP -->
            <div class="output-section" id="phpSection">
              <h4><i class="fab fa-php"></i> PHP Array</h4>
              <textarea id="outPhpTxt" readonly style="min-height:120px"></textarea>
              <div class="actions" style="margin-top:8px">
                <button class="secondary" onclick="copyToClipboard('outPhpTxt')"><i class="fas fa-copy"></i> Copy
                  PHP</button>
                <button class="success" onclick="downloadText('outPhpTxt','data.php')"><i class="fas fa-download"></i>
                  Download PHP</button>
              </div>
            </div>

            <!-- SQL -->
            <div class="output-section" id="sqlSection">
              <h4><i class="fas fa-database"></i> MySQL INSERT</h4>
              <textarea id="outSqlTxt" readonly style="min-height:120px"></textarea>
              <div class="actions" style="margin-top:8px">
                <button class="secondary" onclick="copyToClipboard('outSqlTxt')"><i class="fas fa-copy"></i> Copy
                  SQL</button>
                <button class="success" onclick="downloadText('outSqlTxt','insert.sql')"><i class="fas fa-download"></i>
                  Download SQL</button>
              </div>
            </div>

            <!-- Python -->
            <div class="output-section" id="pySection">
              <h4><i class="fab fa-python"></i> Python List</h4>
              <textarea id="outPyTxt" readonly style="min-height:120px"></textarea>
              <div class="actions" style="margin-top:8px">
                <button class="secondary" onclick="copyToClipboard('outPyTxt')"><i class="fas fa-copy"></i> Copy
                  Python</button>
                <button class="success" onclick="downloadText('outPyTxt','data.py')"><i class="fas fa-download"></i> Download
                  Python</button>
              </div>
            </div>

            <!-- CSV -->
            <div class="output-section" id="csvSection">
              <h4><i class="fas fa-file-csv"></i> CSV Export</h4>
              <textarea id="outCsvTxt" readonly style="min-height:120px"></textarea>
              <div class="actions" style="margin-top:8px">
                <button class="secondary" onclick="copyToClipboard('outCsvTxt')"><i class="fas fa-copy"></i> Copy
                  CSV</button>
                <button class="success" onclick="downloadText('outCsvTxt','data.csv')"><i class="fas fa-download"></i>
                  Download CSV</button>
              </div>
            </div>

            <div class="preview" id="previewArea">
              <h4><i class="fas fa-table"></i> Data Preview</h4>
              <div id="previewTable"></div>
            </div>
          </div>

        </div>
      </div>

      <div class="instructions">
        <h3><i class="fas fa-info-circle"></i> How it works</h3>
        <ul>
          <li>Upload JSON array, CSV, or Excel (.xlsx/.xls) OR paste JSON/CSV text.</li>
          <li>Choose one or more output formats (JSON, PHP array, MySQL INSERT, Python list, CSV).</li>
          <li>Click Convert — outputs are generated client-side and available to copy or download.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Toast -->
  <div class="toast" id="toast"><i class="fas fa-check-circle"></i><span id="toastText">Done</span></div>

  <?php include COLLEGEALL_ROOT . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SheetJS for Excel parsing -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

  <script>
    // ---------- Elements ----------
    const fileInput = document.getElementById('fileInput');
    const fileName = document.getElementById('fileName');
    const pasteText = document.getElementById('pasteText');
    const convertBtn = document.getElementById('convertBtn');
    const clearBtn = document.getElementById('clearBtn');
    const statusIndicator = document.getElementById('statusIndicator');
    const resultCard = document.getElementById('result');
    const previewTable = document.getElementById('previewTable');
    const toast = document.getElementById('toast');
    const toastText = document.getElementById('toastText');

    // Output areas
    const outJsonTxt = document.getElementById('outJsonTxt');
    const outPhpTxt = document.getElementById('outPhpTxt');
    const outSqlTxt = document.getElementById('outSqlTxt');
    const outPyTxt = document.getElementById('outPyTxt');
    const outCsvTxt = document.getElementById('outCsvTxt');

    // Options
    const outJsonChk = document.getElementById('outJsonChk');
    const outPhpChk = document.getElementById('outPhpChk');
    const outSqlChk = document.getElementById('outSqlChk');
    const outPyChk = document.getElementById('outPyChk');
    const outCsvChk = document.getElementById('outCsvChk');
    const tableNameInput = document.getElementById('tableName');

    // Init state
    let parsedData = null; 
    fileInput.value = '';
    pasteText.value = '';
    updateStatus('Waiting for input', 'waiting');

    // ---------- Helpers ----------
    function updateStatus(text, kind = 'waiting') {
      statusIndicator.textContent = text;
      statusIndicator.className = 'status-indicator ' + (kind === 'ready' ? 'status-ready' : 'status-waiting');
    }

    function showToast(msg, isError = false) {
      toastText.textContent = msg;
      toast.className = 'toast' + (isError ? ' error' : '');
      toast.classList.add('show');
      setTimeout(() => toast.classList.remove('show'), 2600);
    }

    function formatFileSize(bytes) {
      if (bytes === 0) return '0 B';
      const k = 1024;
      const sizes = ['B', 'KB', 'MB', 'GB', 'TB'];
      const i = Math.floor(Math.log(bytes) / Math.log(k));
      return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    function escapeCsvCell(cell) {
      if (cell === null || cell === undefined) return '';
      const s = String(cell);
      if (/[",\n\r]/.test(s)) {
        return '"' + s.replace(/"/g, '""') + '"';
      }
      return s;
    }

    // ---------- Parsing ----------
    fileInput.addEventListener('change', async (e) => {
      const f = e.target.files[0];
      if (!f) {
        fileName.innerHTML = '<i class="fas fa-file"></i> No file chosen';
        return;
      }
      fileName.innerHTML = `<i class="fas fa-file"></i> ${f.name} (${formatFileSize(f.size)})`;
      pasteText.value = ''; 
      updateStatus('File ready', 'ready');
    });

    pasteText.addEventListener('input', () => {
      if (pasteText.value.trim().length) {
        updateStatus('Text pasted', 'ready');
      } else {
        updateStatus('Waiting for input', 'waiting');
      }
    });

    clearBtn.addEventListener('click', () => {
      fileInput.value = '';
      pasteText.value = '';
      fileName.innerHTML = '<i class="fas fa-file"></i> No file chosen';
      parsedData = null;
      hideResults();
      updateStatus('Waiting for input', 'waiting');
    });

    convertBtn.addEventListener('click', async () => {
      convertBtn.disabled = true;
      convertBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
      try {
        parsedData = await getInputData();
      } catch (err) {
        showToast('Error parsing input: ' + (err.message || err), true);
        convertBtn.disabled = false;
        convertBtn.innerHTML = '<i class="fas fa-sync-alt"></i> Convert';
        return;
      }

      if (Array.isArray(parsedData) && parsedData.length > 0 && Array.isArray(parsedData[0])) {
        const aoa = parsedData;
        const headers = aoa[0].map(h => (h === null || h === undefined) ? '' : String(h));
        const rows = [];
        for (let r = 1; r < aoa.length; r++) {
          const row = {};
          for (let c = 0; c < headers.length; c++) {
            row[headers[c] || `col_${c}`] = aoa[r][c] !== undefined ? aoa[r][c] : null;
          }
          rows.push(row);
        }
        parsedData = rows;
      }

      if (!Array.isArray(parsedData) && typeof parsedData === 'object') {
        let found = null;
        for (const k in parsedData) {
          if (Array.isArray(parsedData[k])) {
            found = parsedData[k];
            break;
          }
        }
        if (found) parsedData = found;
      }

      if (!Array.isArray(parsedData) || parsedData.length === 0) {
        showToast('No tabular data found. Ensure input is JSON array or CSV/Excel table.', true);
        convertBtn.disabled = false;
        convertBtn.innerHTML = '<i class="fas fa-sync-alt"></i> Convert';
        return;
      }

      // Generate outputs per selected formats
      try {
        const showJson = outJsonChk.checked;
        const showPhp = outPhpChk.checked;
        const showSql = outSqlChk.checked;
        const showPy = outPyChk.checked;
        const showCsv = outCsvChk.checked;

        // JSON
        if (showJson) {
          outJsonTxt.value = JSON.stringify(parsedData, null, 2);
          document.getElementById('jsonSection').style.display = 'block';
        } else document.getElementById('jsonSection').style.display = 'none';

        // PHP
        if (showPhp) {
          outPhpTxt.value = convertToPhp(parsedData);
          document.getElementById('phpSection').style.display = 'block';
        } else document.getElementById('phpSection').style.display = 'none';

        // SQL
        if (showSql) {
          outSqlTxt.value = convertToMySqlInsert(parsedData, tableNameInput.value || 'my_table');
          document.getElementById('sqlSection').style.display = 'block';
        } else document.getElementById('sqlSection').style.display = 'none';

        // Python
        if (showPy) {
          outPyTxt.value = convertToPython(parsedData);
          document.getElementById('pySection').style.display = 'block';
        } else document.getElementById('pySection').style.display = 'none';

        // CSV
        if (showCsv) {
          outCsvTxt.value = convertToCsv(parsedData);
          document.getElementById('csvSection').style.display = 'block';
        } else document.getElementById('csvSection').style.display = 'none';

        // Render preview (first 8 rows)
        renderPreview(parsedData);
        resultCard.style.display = 'block';
        updateStatus('Conversion completed', 'ready');
        showToast('Conversion successful');
      } catch (err) {
        console.error(err);
        showToast('Error generating outputs: ' + (err.message || err), true);
      } finally {
        convertBtn.disabled = false;
        convertBtn.innerHTML = '<i class="fas fa-sync-alt"></i> Convert';
      }
    });

    // Get input data: file or pasted text
    async function getInputData() {
      if (fileInput.files && fileInput.files.length) {
        return await parseFile(fileInput.files[0]);
      }
      const text = pasteText.value.trim();
      if (text.length) {
        return parseText(text);
      }
      throw new Error('No input provided');
    }

    // parse file (uses SheetJS for excel & CSV)
    function parseFile(file) {
      return new Promise((resolve, reject) => {
        const name = file.name.toLowerCase();
        const reader = new FileReader();

        reader.onerror = () => reject(new Error('File read error'));
        reader.onload = function (ev) {
          const buf = ev.target.result;
          // For JSON files, try parse as text
          if (name.endsWith('.json')) {
            try {
              const txt = new TextDecoder('utf-8').decode(buf);
              const parsed = JSON.parse(txt);
              resolve(parsed);
              return;
            } catch (err) {
              // fall through to excel parse
            }
          }
          try {
            const data = new Uint8Array(buf);
            const wb = XLSX.read(data, { type: 'array' });
            const first = wb.SheetNames[0];
            const ws = wb.Sheets[first];

            // Try sheet_to_json (array of objects)
            const json = XLSX.utils.sheet_to_json(ws, { defval: null });
            if (json && json.length > 0) {
              resolve(json);
              return;
            }

            // Try as array-of-arrays
            const aoa = XLSX.utils.sheet_to_json(ws, { header: 1, defval: null });
            resolve(aoa);
          } catch (err) {
            // try reading as text fallback
            try {
              const txt = new TextDecoder('utf-8').decode(buf);
              const parsed = JSON.parse(txt);
              resolve(parsed);
            } catch (e2) {
              reject(new Error('Unable to parse file (not valid JSON/CSV/Excel)'));
            }
          }
        };
        reader.readAsArrayBuffer(file);
      });
    }

    // parse pasted text
    function parseText(text) {
      try {
        const parsed = JSON.parse(text);
        return parsed;
      } catch (e) {
        // not JSON -> try CSV parsing with SheetJS
      }
      try {
        const wb = XLSX.read(text, { type: 'string' });
        const first = wb.SheetNames[0];
        const ws = wb.Sheets[first];

        const aoa = XLSX.utils.sheet_to_json(ws, { header: 1, defval: null });
        return aoa;
      } catch (err) {
        const lines = text.split(/\r?\n/).filter(Boolean);
        if (lines.length === 0) throw new Error('No parsable content');
        const rows = lines.map(line => parseCsvLine(line));
        return rows;
      }
    }

    function parseCsvLine(line) {
      const result = [];
      let cur = '';
      let inQuotes = false;
      for (let i = 0; i < line.length; i++) {
        const ch = line[i];
        if (ch === '"') {
          if (inQuotes && line[i + 1] === '"') { cur += '"'; i++; continue; }
          inQuotes = !inQuotes;
          continue;
        }
        if (ch === ',' && !inQuotes) {
          result.push(cur);
          cur = '';
          continue;
        }
        cur += ch;
      }
      result.push(cur);
      return result;
    }

    // ---------- Converters ----------
    function convertToPhp(obj) {
      function encode(v, indent = 1) {
        const pad = n => '    '.repeat(n);
        if (v === null) return 'null';
        if (Array.isArray(v)) {
          if (v.length === 0) return '[]';
          return "[\n" + v.map(it => pad(indent) + encode(it, indent + 1)).join(',\n') + '\n' + pad(indent - 1) + ']';
        }
        if (typeof v === 'object') {
          const keys = Object.keys(v);
          if (keys.length === 0) return '[]';
          return "[\n" + keys.map(k => pad(indent) + `'${escapePhp(k)}' => ${encode(v[k], indent + 1)}`).join(',\n') + '\n' + pad(indent - 1) + ']';
        }
        if (typeof v === 'string') return `'${escapePhp(v)}'`;
        if (typeof v === 'number') return Number.isFinite(v) ? v : `'${v}'`;
        if (typeof v === 'boolean') return v ? 'true' : 'false';
        return `'${String(v)}'`;
      }
      return `<?php\n$items = ${encode(obj, 1)};\n?>`;
    }
    function escapePhp(s) { return String(s).replace(/\\/g, '\\\\').replace(/'/g, "\\'"); }

    function convertToMySqlInsert(arr, tableName = 'my_table') {
      if (!Array.isArray(arr) || arr.length === 0) return '-- No data to insert';

      let data = arr;
      if (Array.isArray(arr[0])) {
        const headers = arr[0].map(h => String(h || '').trim() || null);
        data = [];
        for (let i = 1; i < arr.length; i++) {
          const rowObj = {};
          for (let j = 0; j < headers.length; j++) {
            rowObj[headers[j] || `col_${j}`] = arr[i][j] !== undefined ? arr[i][j] : null;
          }
          data.push(rowObj);
        }
      }
      const keys = Object.keys(data[0]);
      const colList = keys.map(k => `\`${k}\``).join(', ');
      const rows = data.map(row => {
        const vals = keys.map(k => {
          const v = row[k];
          if (v === null || v === undefined) return 'NULL';
          if (typeof v === 'number') return Number.isFinite(v) ? v : `'${String(v)}'`;
          return `'${String(v).replace(/'/g, "''")}'`;
        });
        return `(${vals.join(', ')})`;
      });
      return `INSERT INTO \`${tableName}\` (${colList}) VALUES\n${rows.join(',\n')};`;
    }

    function convertToPython(arr) {
      function jsToPy(v) {
        if (v === null || v === undefined) return 'None';
        if (Array.isArray(v)) return '[' + v.map(jsToPy).join(', ') + ']';
        if (typeof v === 'object') {
          const items = Object.entries(v).map(([k, val]) => `'${escapePy(k)}': ${jsToPy(val)}`);
          return '{' + items.join(', ') + '}';
        }
        if (typeof v === 'string') return `'${escapePy(v)}'`;
        if (typeof v === 'number') return Number.isFinite(v) ? String(v) : `'${String(v)}'`;
        if (typeof v === 'boolean') return v ? 'True' : 'False';
        return `'${String(v)}'`;
      }
      return '[' + arr.map(jsToPy).join(',\n ') + ']';
    }
    function escapePy(s) { return String(s).replace(/\\/g, '\\\\').replace(/'/g, "\\'"); }

    function convertToCsv(arr) {
      let data = arr;
      if (Array.isArray(arr) && arr.length > 0 && Array.isArray(arr[0])) {
        // first row headers
        const headers = arr[0].map(h => String(h || '').trim() || '');
        data = [];
        for (let i = 1; i < arr.length; i++) {
          const row = {};
          for (let j = 0; j < headers.length; j++) {
            row[headers[j] || `col_${j}`] = arr[i][j] !== undefined ? arr[i][j] : '';
          }
          data.push(row);
        }
      } else if (!Array.isArray(arr) || arr.length === 0) {
        return '';
      }
      const cols = Array.from(new Set([].concat(...data.map(o => Object.keys(o)))));
      // Build CSV text
      const lines = [];
      lines.push(cols.map(escapeCsvCell).join(','));
      for (const row of data) {
        const cells = cols.map(c => escapeCsvCell(row[c]));
        lines.push(cells.join(','));
      }
      return lines.join('\r\n');
    }

    // ---------- UI: preview ----------
    function renderPreview(data) {
      previewTable.innerHTML = '';
      if (!Array.isArray(data) || data.length === 0) {
        previewTable.innerHTML = '<p>No data</p>';
        return;
      }
      if (!Array.isArray(data[0])) {
        const cols = Object.keys(data[0]);
        let html = '<table><thead><tr>' + cols.map(c => `<th>${escapeHtml(c)}</th>`).join('') + '</tr></thead><tbody>';
        const rows = Math.min(8, data.length);
        for (let i = 0; i < rows; i++) {
          html += '<tr>' + cols.map(c => `<td>${escapeHtml(String(data[i][c] ?? ''))}</td>`).join('') + '</tr>';
        }
        html += '</tbody></table>';
        if (data.length > 8) html += `<div style="margin-top:8px;color:#6c757d">... and ${data.length - 8} more rows</div>`;
        previewTable.innerHTML = html;
      } else {
        let html = '<table>';
        for (let i = 0; i < Math.min(8, data.length); i++) {
          html += '<tr>' + data[i].map(cell => `<td>${escapeHtml(String(cell ?? ''))}</td>`).join('') + '</tr>';
        }
        html += '</table>';
        if (data.length > 8) html += `<div style="margin-top:8px;color:#6c757d">... and ${data.length - 8} more rows</div>`;
        previewTable.innerHTML = html;
      }
    }

    function escapeHtml(s) {
      return String(s).replace(/[&<>"']/g, c => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]));
    }

    function copyToClipboard(id) {
      const el = document.getElementById(id);
      el.select();
      el.setSelectionRange(0, 999999);
      try {
        document.execCommand('copy');
        showToast('Copied to clipboard');
      } catch (err) {
        showToast('Copy failed', true);
      }
    }

    function downloadText(id, filename) {
      const text = document.getElementById(id).value || '';
      const blob = new Blob([text], { type: 'text/plain;charset=utf-8' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = filename;
      document.body.appendChild(a);
      a.click();
      setTimeout(() => {
        URL.revokeObjectURL(url);
        a.remove();
      }, 200);
      showToast('Download started');
    }

    const sectionMap = {
      outJsonChk: 'jsonSection',
      outPhpChk: 'phpSection',
      outSqlChk: 'sqlSection',
      outPyChk: 'pySection',
      outCsvChk: 'csvSection',
    };
    for (const key in sectionMap) {
      const chk = document.getElementById(key);
      chk.addEventListener('change', () => {
        const sec = document.getElementById(sectionMap[key]);
        if (chk.checked) sec.style.display = 'block'; else sec.style.display = 'none';
      });
    }

    function hideResults() {
      resultCard.style.display = 'none';
      outJsonTxt.value = outPhpTxt.value = outSqlTxt.value = outPyTxt.value = outCsvTxt.value = '';
      previewTable.innerHTML = '';
    }

    for (const key in sectionMap) {
      const sec = document.getElementById(sectionMap[key]);
      const chk = document.getElementById(key);
      sec.style.display = chk.checked ? 'block' : 'none';
    }

    function hasInput() {
      return (fileInput.files && fileInput.files.length) || pasteText.value.trim().length;
    }
    setInterval(() => {
      if (hasInput()) {
        convertBtn.disabled = false;
        updateStatus('Ready', 'ready');
      } else {
        convertBtn.disabled = false; 
        updateStatus('Waiting for input', 'waiting');
      }
    }, 700);

  </script>
</body>

</html>