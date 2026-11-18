<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
  <!-- Meta Title -->
  <title>Age Calculator Online – Calculate Your Age Accurately in Seconds</title>

  <!-- Meta Description -->
  <meta name="description" content="Calculate your exact age in years, months, days, hours, and minutes using our free online Age Calculator. Fast, accurate, and easy to use—just enter your date of birth and get instant results.">

  <!-- Meta Keywords -->
  <meta name="keywords" content="age calculator, age calculator online, calculate age, date of birth calculator, DOB calculator, age finder, birthday calculator, exact age calculator, online age tool, age in years months days, age counter, how old am I calculator, digital age calculator, free age calculator">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>
  <link rel="stylesheet" href="https://collegeall.com/assets/css/all.min.css">
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --bg: #0f1724;
      --card: #0b1220;
      --muted: #9aa6bf;
      --accent: #60a5fa;
      --glass: rgba(255, 255, 255, 0.03)
    }

    /* Navbar start */
  .navbar {
      background: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .05);
  }

  .search-input {
      border: none;
      outline: none;
      background: transparent;
      width: 100%;
      padding: .6rem 1rem;
  }

  .search-container {
      border: 1px solid #e5e7eb;
      border-radius: 24px;
      display: flex;
      align-items: center;
      overflow: hidden;
  }

  .navbar .search-btn {
      background: none;
  }

  .btn-ai {
      background: linear-gradient(135deg, #f03535, #d03e24);
      color: #fff;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: .5rem;
      border-radius: 0 !important;
      padding: 10px 20px !important;
  }

  .btn-ai:hover {
      background: linear-gradient(135deg, #d03e24, #951d1d);
      color: #fff;
  }

  .signup-btn {
      background: var(--primary);
      color: #fff;
      border-radius: 0 !important;
      padding: 10px 20px !important;
  }

  .signin-btn {
      border: 1px solid var(--primary) !important;
      color: var(--primary);
      border-radius: 0 !important;
      padding: 10px 20px !important;
  }

  .signin-btn:hover {
      background: var(--primary);
      color: #fff;
  }

  .signup-btn:hover {
      background-color: #003c8b;
      color: #fff;
  }

  .navbar-toggler:focus {
      box-shadow: none;
  }

  .offcanvas .close-btn{
      background: none;
      position: absolute;
      right: 20px;
      top: 10px;
  }

  @media(max-width:991px) {
      .navbar-collapse {
          display: none !important;
      }
  }

  .mobile-action-btns {
      border-bottom: 1px solid #86888a;
  }

  .mobile-action-btns .mobile-action-btn {
      display: flex;
      align-items: center;
      gap: .55rem;
      padding: .65rem 1rem;
      font-weight: 600;
      text-decoration: none;
      width: 100%;
  }

  .mobile-action-btns .mobile-action-ai {
      color: #000000 !important;
  }

  .mobile-action-btns .mobile-action-normal {
      color: #111 !important;
  }

  .mobile-action-btns .mobile-action-normal:hover {
      background: #eceff1;
  }

  .tools-menu {
      background: none;
      border: none;
  }

  .tools-menu .tools-list{
      display: flex;
      flex-direction: column;
      gap: 10px;
      width: 100%;
  }

  .tools-menu .tool-icon {
      padding: 5px;
      transition:.2s;
  }

  .tool-icon:hover{
      background:#e9ecef;
  }

  .tools-dropdown {
      padding: 10px;
      font-weight: bold;
  }

  /* Navbar End */

  body {
    font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      margin: 0;
      background: linear-gradient(180deg, #071025 0%, #081227 40%, #041018 100%);
      color: #e6eef8;
  }
    .age-calculator {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .wrap {
      max-width: 920px;
      width: 100%;
      height: 100%;
    }

    .wrap header {
      display: flex;
      gap: 16px;
      align-items: center;
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

    .wrap .card {
      background: var(--card);
      border-radius: 14px;
      padding: 18px;
      box-shadow: 0 8px 30px rgba(2, 6, 23, 0.6);
    }

    .wrap .grid {
      display: grid;
      grid-template-columns: 320px 1fr;
      gap: 16px
    }

    .wrap label {
      display: block;
      font-size: 13px;
      color: var(--muted);
      margin-bottom: 6px
    }

    .wrap input[type=date] {
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: 1px solid rgba(255, 255, 255, 0.04);
      color: var(--muted);
    }

    .wrap .meta {
      font-size: 13px;
      color: var(--muted);
      margin-top: 8px
    }

    .wrap .results {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 12px
    }

    .wrap .result {
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
      padding: 12px;
      border-radius: 10px;
      text-align: center;
      color: var(--muted);
    }

    .wrap .result .big {
      font-size: 22px;
      font-weight: 600
    }

    .wrap .muted {
      color: var(--muted);
      font-size: 13px
    }

    .wrap .countdown {
      font-variant-numeric: tabular-nums;
      font-size: 18px;
      font-weight: 600
    }

    .wrap .controls {
      display: flex;
      gap: 8px;
      margin-top: 12px
    }

    .wrap button {
      background: transparent;
      border: 1px solid var(--accent);
      color: var(--muted);
      padding: 8px 12px;
      border-radius: 10px;
      cursor: pointer; 
    }

    .wrap .btn-accent {
      border-color: transparent;
      background: linear-gradient(90deg, #2563eb, #06b6d4);
      color: white
    };

    .wrap .footer {
      margin-top: 12px;
      color: var(--muted);
      font-size: 13px
    }

    .wrap .tz {
      font-size: 12px;
      color: var(--muted)
    }

    .wrap pre {
      white-space: pre-wrap
    }

    @media (max-width:720px) {
      .wrap .grid {
        grid-template-columns: 1fr
      }
    }
  </style>
</head>

<body>
  <?php echo file_get_contents('https://collegeall.com/header.php'); ?>
  <div class="age-calculator mt-5 mb-5">
    <div class="wrap">
    <header>
      <div>
        <h1>Age Calculator</h1>
        <p class="lead">Exact age in years, months, days, total days and next-birthday countdown (timezone-aware).</p>
      </div>
      <div style="margin-left:auto; text-align:right">
        <div class="tz" id="tzInfo"></div>
      </div>
    </header>

    <div class="card">
      <div class="grid">
        <div>
          <label for="birth">Pick your birth date</label>
          <input id="birth" type="date" aria-label="Birth date" />
          <div class="meta">Tip: the calculator treats the selected date as a local date (midnight in your timezone) for correct age &amp; day counts.</div>

          <div class="controls">
            <button id="copyBtn" title="Copy results">Copy</button>
            <button id="shareBtn" title="Share results">Share</button>
            <button id="setToday">Set today</button>
            <button id="clear">Clear</button>
          </div>

          <div class="footer" style="margin-top:12px">
            <div id="error" style="color:#ffb4b4"></div>
          </div>
        </div>

        <div>
          <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px">
            <div>
              <div class="muted">Now</div>
              <div class="text-light" id="nowClock" style="font-weight:600; font-variant-numeric:tabular-nums"></div>
            </div>
            <div style="text-align:right">
              <div class="muted">Next birthday</div>
              <div id="nextBdayLabel" class="muted">—</div>
            </div>
          </div>

          <div class="results" id="ageResults">
            <div class="result">
              <div class="muted">Years</div>
              <div id="years" class="big">—</div>
            </div>
            <div class="result">
              <div class="muted">Months</div>
              <div id="months" class="big">—</div>
            </div>
            <div class="result">
              <div class="muted">Days</div>
              <div id="days" class="big">—</div>
            </div>
            <div class="result">
              <div class="muted">Total days</div>
              <div id="totalDays" class="big">—</div>
            </div>
          </div>

          <div style="margin-top:14px; display:flex; gap:12px; align-items:center;">
            <div style="flex:1; background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent); padding:12px; border-radius:10px">
              <div class="muted">Next birthday countdown</div>
              <div id="countdown" class="countdown text-light">—</div>
            </div>
            <div style="width:120px; text-align:center">
              <div class="muted">Age on next birthday</div>
              <div id="ageOnNext" class="big text-light">—</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="margin-top:12px; color:var(--muted); font-size:13px">Built for accessibility — keyboard friendly, responsive, and timezone-aware.</div>
  </div>
  </div>

  <?php echo file_get_contents('https://collegeall.com/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Utility: parse date input value (YYYY-MM-DD) into a local Date at midnight
    function parseLocalDate(value) {
      if (!value) return null;
      const [y, m, d] = value.split('-').map(Number);
      if (!y || !m || !d) return null;
      return new Date(y, m - 1, d);
    }

    function daysBetweenLocal(a, b) {
      // a and b are Date objects representing local midnights (could be any time) -> compute full days difference
      const msPerDay = 24 * 60 * 60 * 1000;
      // Normalize to local midnight by creating new Date(year,month,day)
      const aMid = new Date(a.getFullYear(), a.getMonth(), a.getDate());
      const bMid = new Date(b.getFullYear(), b.getMonth(), b.getDate());
      return Math.floor((bMid - aMid) / msPerDay);
    }

    function isLeapYear(y) {
      return (y % 4 === 0 && y % 100 !== 0) || (y % 400 === 0);
    }

    function formatTZ() {
      try {
        const tz = Intl.DateTimeFormat().resolvedOptions().timeZone || 'Local';
        const now = new Date();
        const offsetMin = -now.getTimezoneOffset(); // minutes east of UTC
        const sign = offsetMin >= 0 ? '+' : '-';
        const hh = Math.floor(Math.abs(offsetMin) / 60).toString().padStart(2, '0');
        const mm = (Math.abs(offsetMin) % 60).toString().padStart(2, '0');
        return `${tz} (UTC${sign}${hh}:${mm})`;
      } catch (e) {
        return 'Local timezone'
      }
    }

    const birthEl = document.getElementById('birth');
    const yearsEl = document.getElementById('years');
    const monthsEl = document.getElementById('months');
    const daysEl = document.getElementById('days');
    const totalDaysEl = document.getElementById('totalDays');
    const countdownEl = document.getElementById('countdown');
    const ageOnNextEl = document.getElementById('ageOnNext');
    const nowClock = document.getElementById('nowClock');
    const tzInfo = document.getElementById('tzInfo');
    const nextBdayLabel = document.getElementById('nextBdayLabel');
    const errorEl = document.getElementById('error');

    tzInfo.textContent = formatTZ();

    function pad(n) {
      return n.toString().padStart(2, '0');
    }

    function calcAgeParts(birthLocal, now) {
      // birthLocal: local Date at midnight
      if (!(birthLocal instanceof Date) || isNaN(birthLocal)) return null;
      // extract components
      let y = now.getFullYear() - birthLocal.getFullYear();
      let m = now.getMonth() - birthLocal.getMonth();
      let d = now.getDate() - birthLocal.getDate();

      if (d < 0) {
        // borrow days from previous month
        const prev = new Date(now.getFullYear(), now.getMonth(), 0); // last day of previous month
        d += prev.getDate();
        m -= 1;
      }
      if (m < 0) {
        m += 12;
        y -= 1;
      }
      return {
        years: y,
        months: m,
        days: d
      };
    }

    function computeAll() {
      errorEl.textContent = '';
      const val = birthEl.value;
      const birthLocal = parseLocalDate(val);
      const now = new Date();
      // update clock display
      nowClock.textContent = new Intl.DateTimeFormat(undefined, {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
      }).format(now);

      if (!birthLocal) {
        yearsEl.textContent = monthsEl.textContent = daysEl.textContent = totalDaysEl.textContent = '—';
        countdownEl.textContent = '—';
        ageOnNextEl.textContent = '—';
        nextBdayLabel.textContent = '—';
        return;
      }

      // ensure birthLocal is not in future
      const birthMid = new Date(birthLocal.getFullYear(), birthLocal.getMonth(), birthLocal.getDate());
      const nowMid = new Date(now.getFullYear(), now.getMonth(), now.getDate());
      if (birthMid > nowMid) {
        errorEl.textContent = 'Birth date is in the future — please pick a past date.';
        return;
      }

      const parts = calcAgeParts(birthLocal, now);
      yearsEl.textContent = parts.years;
      monthsEl.textContent = parts.months;
      daysEl.textContent = parts.days;

      // Total days = difference in local days
      const totalDays = daysBetweenLocal(birthLocal, now);
      totalDaysEl.textContent = totalDays.toLocaleString();

      // Next birthday (handle Feb 29 -> use Feb 28 on non-leap years to avoid nonexistent date)
      const bMonth = birthLocal.getMonth();
      const bDate = birthLocal.getDate();
      let nextYear = now.getFullYear();
      let nextBday = new Date(nextYear, bMonth, bDate);
      // Fix for Feb 29
      if (bMonth === 1 && bDate === 29 && !isLeapYear(nextYear)) {
        // choose Feb 28 for non-leap years
        nextBday = new Date(nextYear, 1, 28);
      }
      if (nextBday <= nowMid) {
        nextYear += 1;
        nextBday = new Date(nextYear, bMonth, bDate);
        if (bMonth === 1 && bDate === 29 && !isLeapYear(nextYear)) {
          nextBday = new Date(nextYear, 1, 28);
        }
      }

      // label for next birthday
      nextBdayLabel.textContent = new Intl.DateTimeFormat(undefined, {
        month: 'short',
        day: 'numeric',
        year: 'numeric'
      }).format(nextBday);

      // duration to nextBday (exact time — use now as precise instant, and nextBday at local midnight)
      const target = new Date(nextBday.getFullYear(), nextBday.getMonth(), nextBday.getDate(), 0, 0, 0);
      const diffMs = target - now;
      // if negative (shouldn't be), set zero
      const totalSeconds = Math.max(0, Math.floor(diffMs / 1000));
      const days = Math.floor(totalSeconds / 86400);
      const hours = Math.floor((totalSeconds % 86400) / 3600);
      const minutes = Math.floor((totalSeconds % 3600) / 60);
      const seconds = totalSeconds % 60;
      countdownEl.textContent = `${days}d ${pad(hours)}h ${pad(minutes)}m ${pad(seconds)}s`;

      // age on next birthday
      const ageOnNextY = parts.years + 1;
      ageOnNextEl.textContent = ageOnNextY + ' yrs';
    }

    // live ticking for clock and countdown
    let ticker = null;

    function startTicker() {
      if (ticker) clearInterval(ticker);
      ticker = setInterval(computeAll, 1000);
      computeAll();
    }

    // Copy & Share
    function resultsText() {
      if (!birthEl.value) return 'No birth date selected.';
      return `Birth date: ${birthEl.value}\n` +
        `Now: ${new Date().toLocaleString()} (${formatTZ()})\n` +
        `Age: ${yearsEl.textContent} years, ${monthsEl.textContent} months, ${daysEl.textContent} days\n` +
        `Total days: ${totalDaysEl.textContent}\n` +
        `Next birthday: ${nextBdayLabel.textContent} — countdown: ${countdownEl.textContent} — age then: ${ageOnNextEl.textContent}`;
    }

    document.getElementById('copyBtn').addEventListener('click', async () => {
      try {
        await navigator.clipboard.writeText(resultsText());
        alert('Results copied to clipboard');
      } catch (e) {
        // fallback
        const ta = document.createElement('textarea');
        ta.value = resultsText();
        document.body.appendChild(ta);
        ta.select();
        try {
          document.execCommand('copy');
          alert('Results copied');
        } catch (err) {
          alert('Copy failed');
        }
        ta.remove();
      }
    });

    document.getElementById('shareBtn').addEventListener('click', async () => {
      const text = resultsText();
      if (navigator.share) {
        try {
          await navigator.share({
            title: 'My age',
            text
          });
        } catch (e) {
          // user cancelled or failed
        }
      } else {
        try {
          await navigator.clipboard.writeText(text);
          alert('Share text copied to clipboard (fallback)');
        } catch (e) {
          alert('Sharing is not supported here.');
        }
      }
    });

    document.getElementById('setToday').addEventListener('click', () => {
      const d = new Date();
      const iso = d.getFullYear().toString().padStart(4, '0') + '-' + (d.getMonth() + 1).toString().padStart(2, '0') + '-' + d.getDate().toString().padStart(2, '0');
      birthEl.value = iso;
      computeAll();
    });
    document.getElementById('clear').addEventListener('click', () => {
      birthEl.value = '';
      computeAll();
    });

    birthEl.addEventListener('change', () => {
      computeAll();
    });

    // initialize with an accessible placeholder
    (function init() {
      // optionally set to an example date far enough in past for demo (not set automatically)
      computeAll();
      startTicker();
    })();

    // keyboard accessibility: allow Enter on date to focus copy
    birthEl.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') document.getElementById('copyBtn').focus();
    });
  </script>
</body>

</html>