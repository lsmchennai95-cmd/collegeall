<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Colleges, Courses & Degrees | CollegeAll</title>
    <meta name="description" content="Search and compare accredited online MBA, MCA, BBA, and degree programs from premier Indian universities on CollegeAll.">
    <meta name="robots" content="noindex, follow">
    <link rel="canonical" href="https://collegeall.com/search/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Search Colleges, Courses & Degrees | CollegeAll">
    <meta property="og:description" content="Search and compare accredited online MBA, MCA, BBA, and degree programs from premier Indian universities on CollegeAll.">
    <meta property="og:url" content="https://collegeall.com/search/">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Search Colleges, Courses & Degrees | CollegeAll">
    <meta name="twitter:description" content="Search and compare accredited online MBA, MCA, BBA, and degree programs from premier Indian universities on CollegeAll.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
  <meta charset="UTF-8" />  <meta name="viewport" content="width=device-width, initial-scale=1.0" />  <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png" />  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />  <style>    body {      margin: 0;      font-family: Arial, sans-serif;      background-color: #fff;      display: flex;      flex-direction: column;      align-items: center;      padding-top: 80px;    }    header {      display: flex;      flex-direction: column;      gap: 20px;      align-items: center;      padding: 20px 40px;      position: relative;    }    header img {      height: 50px;      cursor: pointer;    }    .search-bar {      flex: 1;      margin-left: 40px;      display: flex;      align-items: center;      border: 1px solid #dfe1e5;      border-radius: 24px;      padding: 15px;      box-shadow: 0 1px 6px rgba(32, 33, 36, 0.28);      min-width: 500px;      width: 100%;    }    .search-bar i {      color: #9aa0a6;      font-size: 18px;      margin-right: 10px;    }    .search-bar input {      border: none;      outline: none;      flex: 1;      font-size: 16px;    }    #suggestionBox {      position: absolute;      top: 125px;      width: 90%;      background: #fff;      border-radius: 12px;      max-height: 300px;      overflow-y: auto;      display: none;      z-index: 9999;      box-shadow: 0 8px 24px rgba(0, 0, 0, .12);      border: 1px solid #e3e7ef;      backdrop-filter: blur(8px);      transition: all .18s ease;    }    #suggestionBox li {      list-style: none;      padding: 12px 18px;      font-size: 14px;      color: #222;      cursor: pointer;      display: flex;      align-items: center;      gap: 10px;    }    #suggestionBox li:hover {      background: #f5f7fb;    }    #suggestionBox li i {      font-size: 14px;      opacity: .6;    }    #suggestionBox::-webkit-scrollbar {      width: 6px;    }    #suggestionBox::-webkit-scrollbar-thumb {      border-radius: 20px;      background: rgba(0, 0, 0, 0.14);    }    #suggestionBox::-webkit-scrollbar-thumb:hover {      background: rgba(0, 0, 0, 0.22);    }    .results {      max-width: 700px;      margin: 30px auto;      padding: 0 20px;    }    .result-item {      margin-bottom: 30px;    }    .result-item a.title {      color: #1a0dab;      font-size: 18px;      text-decoration: none;    }    .result-item a.title:hover {      text-decoration: underline;    }    .result-item .url {      color: #006621;      font-size: 14px;      margin-bottom: 3px;    }    .result-item p {      color: #4d5156;      font-size: 14px;      margin-top: 5px;      line-height: 1.5;    }    .empty {      text-align: center;      margin-top: 40px;      color: #70757a;    }    .pagination {      display: flex;      justify-content: center;      margin: 40px 0 60px;      align-items: center;      gap: 6px;      flex-wrap: wrap;    }    .pagination button {      background: none;      border: none;      color: #1a0dab;      font-size: 14px;      cursor: pointer;      padding: 5px 8px;    }    .pagination button.active {      color: #000;      font-weight: bold;      text-decoration: underline;    }    .pagination button:hover {      text-decoration: underline;    }    .pagination button:disabled {      color: #999;      cursor: not-allowed;    }    footer {      text-align: center;      padding: 20px 0;      color: #70757a;      font-size: 13px;      border-top: 1px solid #ebebeb;    }    @media (max-width: 600px) {      header {        flex-direction: column;        align-items: center;        gap: 10px;        padding: 15px 20px;      }      .search-bar {        margin-left: 0 !important;        min-width: auto;      }      .search-bar i {        font-size: 14px;      }      .results {        padding: 0 10px;      }    }  </style>    <!-- Global site tag (gtag.js) - Google Analytics & Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BED9GZX87Z"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-BED9GZX87Z');
      gtag('config', 'AW-17357684990');
    </script>
</head>

<body>

  <header>
    <img src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="CollegeAll" onclick="Navigate()" />
    <div class="search-bar">
      <i class="fas fa-search"></i>

      <!-- ❗ FIX: searchCollege() removed -->
      <input type="text" id="search" placeholder="Search for universities or courses..." />
    </div>
    <ul id="suggestionBox"></ul>
  </header>

  <div class="results" id="results"></div>
  <div class="pagination" id="pagination"></div>

  <script>
    let allResults = [];
    let currentPage = 1;
    const resultsPerPage = 10;

    function Navigate() {
      window.location.href = '../';
    }

    async function searchCollege() {
      const searchTerm = document.getElementById('search').value.trim();
      const resultsContainer = document.getElementById('results');
      const paginationContainer = document.getElementById('pagination');
      resultsContainer.innerHTML = '';
      paginationContainer.innerHTML = '';

      if (!searchTerm) return;

      const url = `https://api.collegeall.com/api/v1/seachvalue?search_term=${encodeURIComponent(searchTerm)}`;

      try {
        const response = await fetch(url);
        const data = await response.json();
        allResults = data?.data?.userdetails || [];
        currentPage = 1;
        displayPaginatedResults();
      } catch (error) {
        resultsContainer.innerHTML = '<p class="empty">⚠️ Failed to load results. Please try again.</p>';
      }
    }

    function displayPaginatedResults() {
      const resultsContainer = document.getElementById('results');
      const paginationContainer = document.getElementById('pagination');
      resultsContainer.innerHTML = '';
      paginationContainer.innerHTML = '';

      if (!allResults.length) {
        resultsContainer.innerHTML = '<p class="empty">No results found.</p>';
        return;
      }

      const start = (currentPage - 1) * resultsPerPage;
      const end = start + resultsPerPage;
      const currentResults = allResults.slice(start, end);

      currentResults.forEach(item => {
        const div = document.createElement('div');
        div.className = 'result-item';
        div.innerHTML = `
          <div class="url">collegeall.com/${item.coursedeatils_url}</div>
          <a href="https://collegeall.com/${item.coursedeatils_url}" target="_blank" class="title">${item.University_name} - ${item.course_name}</a>
          <p>${item.meta_descritions || 'No description available.'}</p>
        `;
        resultsContainer.appendChild(div);
      });

      const totalPages = Math.ceil(allResults.length / resultsPerPage);
      createPaginationControls(totalPages);
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function createPaginationControls(totalPages) {
      const paginationContainer = document.getElementById('pagination');
      paginationContainer.innerHTML = '';

      const prevBtn = document.createElement('button');
      prevBtn.textContent = 'Previous';
      prevBtn.disabled = currentPage === 1;
      prevBtn.onclick = () => {
        currentPage--;
        displayPaginatedResults();
      };
      paginationContainer.appendChild(prevBtn);

      const maxVisible = 7;
      const startPage = Math.max(1, currentPage - 3);
      const endPage = Math.min(totalPages, startPage + maxVisible - 1);

      for (let i = startPage; i <= endPage; i++) {
        const btn = document.createElement('button');
        btn.textContent = i;
        if (i === currentPage) btn.classList.add('active');
        btn.onclick = () => {
          currentPage = i;
          displayPaginatedResults();
        };
        paginationContainer.appendChild(btn);
      }

      const nextBtn = document.createElement('button');
      nextBtn.textContent = 'Next';
      nextBtn.disabled = currentPage === totalPages;
      nextBtn.onclick = () => {
        currentPage++;
        displayPaginatedResults();
      };
      paginationContainer.appendChild(nextBtn);
    }

    /* -------------------------
       SEARCH SUGGESTIONS LOGIC
    -------------------------- */

    let debounceTimer;

    document.getElementById('search').addEventListener('input', function () {
      clearTimeout(debounceTimer);
      const val = this.value.trim();

      if (!val) {
        document.getElementById('suggestionBox').style.display = 'none';
        return;
      }

      debounceTimer = setTimeout(() => fetchSuggestions(val), 300);
    });

    // ❗ Added Enter key trigger for full search
    document.getElementById('search').addEventListener('keydown', function (e) {
      if (e.key === 'Enter') {
        document.getElementById('suggestionBox').style.display = 'none';
        searchCollege();  // Now search happens ONLY on Enter
      }
    });

    async function fetchSuggestions(term) {
      const url = `https://api.collegeall.com/api/v1/seachvalue?search_term=${encodeURIComponent(term)}`;
      const suggestionBox = document.getElementById('suggestionBox');

      try {
        const response = await fetch(url);
        const data = await response.json();

        const listRaw = data?.data?.userdetails || [];

        const list = listRaw.filter(x => {
          const t = term.toLowerCase();
          const courseMatch = x.course_name?.toLowerCase().includes(t);
          const uniMatch = x.University_name?.toLowerCase().includes(t);

          const keywordArray = x.meta_keywords?.split(",")?.map(k => k.trim().toLowerCase()) || [];
          const keywordMatch = keywordArray.some(k => k.includes(t));

          return courseMatch || keywordMatch || uniMatch;

        }).slice(0, 10);

        suggestionBox.innerHTML = '';
        if (list.length === 0) {
          suggestionBox.style.display = 'none';
          return;
        }

        list.forEach(x => {
          const li = document.createElement('li');

          const keywordArray = x.meta_keywords?.split(",")?.map(k => k.trim()) || [];
          const matchedKeyword = keywordArray.find(k => k.toLowerCase().includes(term.toLowerCase()));
          const firstKeyword = matchedKeyword || keywordArray[0] || `${x.University_name} - ${x.course_name}` || x.University_name;

          li.innerHTML = `<i class="fa-solid fa-graduation-cap"></i> ${firstKeyword}`;

          // Suggestion click triggers full search
          li.onclick = () => {
            document.getElementById('search').value = firstKeyword;
            suggestionBox.style.display = 'none';
            searchCollege();
          };

          suggestionBox.appendChild(li);
        });

        suggestionBox.style.display = 'block';

      } catch (e) {
        suggestionBox.style.display = 'none';
      }
    }

    document.addEventListener("click", function (e) {
      if (!e.target.closest('#suggestionBox') && !e.target.closest('#search')) {
        document.getElementById('suggestionBox').style.display = 'none';
      }
    });
  </script>

</body>

</html>