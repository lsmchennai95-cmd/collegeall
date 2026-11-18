<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>College All – AI Match</title>
  <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Import Map for Google GenAI SDK -->
  <script type="importmap">
{
  "imports": {
    "@google/genai": "https://esm.run/@google/genai",
    "react": "https://aistudiocdn.com/react@^19.2.1",
    "react-dom/": "https://aistudiocdn.com/react-dom@^19.2.1/",
    "react/": "https://aistudiocdn.com/react@^19.2.1/"
  }
}
</script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
          },
          colors: {
            brand: {
              50: '#eff6ff',
              100: '#dbeafe',
              500: '#3b82f6',
              600: '#2563eb',
              700: '#1d4ed8',
              900: '#1e3a8a',
            }
          },
          animation: {
            'fade-in-up': 'fadeInUp 0.5s ease-out',
            'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
          },
          keyframes: {
            fadeInUp: {
              '0%': { opacity: '0', transform: 'translateY(10px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            }
          }
        }
      }
    }
  </script>

  <style>
    body {
      background-color: #f8fafc;
      background-image:
        radial-gradient(at 0% 0%, hsla(253, 16%, 7%, 0) 0, transparent 50%),
        radial-gradient(at 50% 0%, hsla(225, 39%, 30%, 0.05) 0, transparent 50%),
        radial-gradient(at 100% 0%, hsla(339, 49%, 30%, 0) 0, transparent 50%);
    }

    /* Glass effect utilities */
    .glass-panel {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .glass-nav {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 6px;
    }

    ::-webkit-scrollbar-track {
      background: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #cbd5e1;
      border-radius: 20px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: #94a3b8;
    }
  </style>
</head>

<body class="text-slate-800 flex flex-col min-h-screen">

  <!-- Navbar -->
  <nav class="glass-nav border-b border-slate-200/60 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <!-- Brand -->
        <div class="flex-shrink-0 flex items-center gap-3">
          <a href="https://collegeall.com/" class="transition-opacity hover:opacity-80">
            <img class="h-9 w-auto" src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="CollegeAll">
          </a>
        </div>

        <!-- Desktop Nav -->
        <div class="hidden md:flex items-center space-x-1">
          <a href="#"
            class="text-slate-600 hover:text-brand-600 font-medium px-4 py-2 rounded-full hover:bg-slate-50 transition-colors text-sm">Free
            Tools</a>
          <a href="#"
            class="text-slate-600 hover:text-brand-600 font-medium px-4 py-2 rounded-full hover:bg-slate-50 transition-colors text-sm">Blogs</a>

          <div class="h-6 w-px bg-slate-200 mx-2"></div>

          <a href="https://collegeall.com/university-suggestions/"
            class="group relative inline-flex items-center gap-2 px-5 py-2 bg-slate-900 text-white text-sm font-semibold rounded-full shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 overflow-hidden">
            <div
              class="absolute inset-0 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <span class="relative z-10 flex items-center gap-2">
              <svg class="w-4 h-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                <path fillRule="evenodd"
                  d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                  clipRule="evenodd" />
              </svg>
              AI Match
            </span>
          </a>

          <a href="/signin" class="ml-3 text-slate-600 hover:text-brand-600 font-medium px-4 py-2 text-sm">Log in</a>
          <a href="/signup"
            class="bg-brand-600 hover:bg-brand-700 text-white px-5 py-2 rounded-full text-sm font-medium shadow-sm hover:shadow transition-all">Sign
            up</a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="flex items-center md:hidden">
          <button class="text-slate-500 hover:text-slate-700 p-2">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Layout -->
  <main class="flex-grow container mx-auto px-4 py-8 lg:py-12 flex flex-col lg:flex-row gap-8 lg:gap-12">

    <!-- Sidebar / Timeline -->
    <aside class="w-full lg:w-80 flex-shrink-0">
      <div class="sticky top-24">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6">
          <h2 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
            <span class="bg-brand-50 text-brand-600 p-1.5 rounded-lg">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </span>
            Your Journey
          </h2>

          <div id="history-container" class="relative pl-2 space-y-0">
            <!-- Timeline Line -->
            <div class="absolute left-[15px] top-2 bottom-4 w-0.5 bg-slate-100 -z-10"></div>

            <!-- Empty State -->
            <div id="empty-history-msg" class="text-slate-400 text-sm italic pl-8 py-2">
              Select an option to start...
            </div>
          </div>

          <button id="reset-btn"
            class="hidden mt-6 w-full group flex items-center justify-center gap-2 py-2.5 px-4 bg-slate-50 hover:bg-slate-100 text-slate-600 text-sm font-medium rounded-xl border border-slate-200 transition-all">
            <svg class="w-4 h-4 text-slate-400 group-hover:text-slate-600 transition-colors" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
            Start Over
          </button>
        </div>

        <!-- Trust Badge / Helper -->
        <div
          class="mt-6 bg-gradient-to-br from-indigo-600 to-purple-700 rounded-2xl p-6 text-white shadow-lg shadow-indigo-500/20 relative overflow-hidden">
          <div class="absolute -top-10 -right-10 w-32 h-32 bg-white opacity-10 rounded-full blur-3xl"></div>
          <div class="relative z-10">
            <h3 class="font-bold text-lg mb-2">Need guidance?</h3>
            <p class="text-indigo-100 text-sm mb-4">Our AI analyzes thousands of data points to find your perfect fit.
            </p>
            <div
              class="flex items-center gap-2 text-xs font-medium bg-white/10 w-fit px-3 py-1.5 rounded-lg backdrop-blur-sm">
              <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
              AI Active
            </div>
          </div>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <section class="flex-grow min-w-0">
      <div
        class="glass-panel rounded-3xl shadow-xl shadow-slate-200/50 overflow-hidden min-h-[600px] flex flex-col relative transition-all duration-500">

        <!-- Header -->
        <div
          class="pt-10 pb-6 px-8 lg:px-12 text-center border-b border-slate-100 bg-gradient-to-b from-white to-slate-50/50">
          <span
            class="inline-block py-1 px-3 rounded-full bg-brand-50 text-brand-600 text-xs font-bold uppercase tracking-wider mb-4 border border-brand-100">
            Step-by-Step Match
          </span>
          <h1 id="page-title" class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
            Which degree are you interested in?
          </h1>
        </div>

        <!-- Body -->
        <div class="p-6 lg:p-10 flex-grow flex flex-col relative bg-white">

          <!-- Error Box -->
          <div id="error-box"
            class="hidden mx-auto max-w-2xl w-full mb-8 bg-red-50 border border-red-100 rounded-xl p-4 flex items-start gap-4 animate-fade-in-up">
            <div class="bg-red-100 p-2 rounded-full flex-shrink-0 text-red-600">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                  d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-red-900 text-sm">Action Required</h3>
              <p id="error-text" class="text-red-700 text-sm mt-0.5">Please select an option.</p>
            </div>
          </div>

          <!-- Loading State -->
          <div id="loading-indicator"
            class="hidden absolute inset-0 bg-white/90 backdrop-blur-sm z-20 flex flex-col items-center justify-center">
            <div class="relative w-20 h-20">
              <div class="absolute inset-0 border-4 border-indigo-100 rounded-full"></div>
              <div class="absolute inset-0 border-4 border-indigo-600 rounded-full border-t-transparent animate-spin">
              </div>
              <div class="absolute inset-0 flex items-center justify-center">
                <svg class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
            </div>
            <p class="mt-6 text-slate-500 font-medium animate-pulse">Consulting Knowledge Base...</p>
          </div>

          <!-- Content Grid -->
          <div id="content-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- Dynamic Content Injected Here -->
          </div>

          <!-- Bottom Nav -->
          <div class="mt-auto pt-10 flex justify-between items-center">
            <button id="back-btn"
              class="group flex items-center gap-2 px-5 py-2.5 rounded-xl font-medium text-slate-500 hover:text-slate-800 hover:bg-slate-100 transition-all disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-transparent"
              disabled>
              <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 19l-7-7 7-7" />
              </svg>
              Back
            </button>

            <div class="flex items-center gap-1.5 text-xs font-medium text-slate-400">
              <span>Powered by</span>
              <span class="text-slate-600">CollegeAll</span>
              <span>&</span>
              <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-600">Gemini AI</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script type="module">
    import { GoogleGenAI } from "@google/genai";

    // --- Config ---
    const API_KEY = (typeof process !== 'undefined' && process.env) ? process.env.API_KEY : 'AIzaSyAMUDStsgLsoBwyzYh_3MmcGO7cuWR4Zvc';
    const BASE_URL = "https://api.collegeall.com/api/v1";

    // --- State ---
    const INITIAL_OPTIONS = [
      { value: "1", type: "2", name: "PG Courses", img: "https://api.collegeall.com/Logo/fav.png" },
      { value: "2", type: "2", name: "UG Courses", img: "https://api.collegeall.com/Logo/fav.png" },
      { value: "3", type: "2", name: "Study Abroad", img: "https://api.collegeall.com/Logo/fav.png" }
    ];

    let state = {
      history: [],
      currentOptions: [...INITIAL_OPTIONS],
      currentTitle: "Which degree are you interested in?",
      isResultMode: false,
      courses: []
    };

    let aiClient = API_KEY ? new GoogleGenAI({ apiKey: API_KEY }) : null;

    // --- DOM ---
    const els = {
      grid: document.getElementById('content-grid'),
      title: document.getElementById('page-title'),
      history: document.getElementById('history-container'),
      emptyHistory: document.getElementById('empty-history-msg'),
      resetBtn: document.getElementById('reset-btn'),
      backBtn: document.getElementById('back-btn'),
      loading: document.getElementById('loading-indicator'),
      errorBox: document.getElementById('error-box'),
      errorText: document.getElementById('error-text')
    };

    // --- Logic ---

    function init() {
      render();
      els.backBtn.addEventListener('click', handleBack);
      els.resetBtn.addEventListener('click', handleReset);
    }

    function setLoading(isLoading) {
      els.loading.classList.toggle('hidden', !isLoading);
    }

    function setError(msg) {
      if (msg) {
        els.errorText.textContent = msg;
        els.errorBox.classList.remove('hidden');
        // Scroll to top of panel to see error
        els.title.scrollIntoView({ behavior: 'smooth' });
      } else {
        els.errorBox.classList.add('hidden');
      }
    }

    async function handleSelection(option) {
      setLoading(true);
      setError(null);

      state.history.push({
        title: state.currentTitle,
        selectedOption: option
      });

      try {
        // 1. Fetch Sub-options
        const uniUrl = `${BASE_URL}/getUniversity?type=${option.type}&su=${option.value}`;
        const response = await fetch(uniUrl);

        if (!response.ok) throw new Error(`Server error: ${response.status}`);

        const responseJson = await response.json();
        const universityData = responseJson.data?.university || [];

        if (universityData.length > 0) {
          state.currentOptions = universityData.map(u => ({
            value: u.name,
            type: responseJson.data?.ty || "0",
            name: u.name,
            img: u.img
          }));
          state.currentTitle = responseJson.data?.title || "Select your preference";
        } else {
          // 2. Fetch Courses
          const degreeObj = state.history.find(h => h.selectedOption.type === "3")
          const courseObj = state.history.find(h => h.selectedOption.type === "4")
          console.log(degreeObj)
          console.log(courseObj)
          // Fallback logic for degree if strict type check fails
          const degreeName = degreeObj.selectedOption.name;
          const courseName = courseObj.selectedOption.name;

          const courseUrl = `${BASE_URL}/university-courses?course=${encodeURIComponent(courseName)}&degree=${encodeURIComponent(degreeName)}`;

          const courseRes = await fetch(courseUrl, { headers: { "Content-Type": "application/json" } });
          if (!courseRes.ok) throw new Error(`Server error: ${courseRes.status}`);

          const courseJson = await courseRes.json();
          const fetchedCourses = courseJson.data?.courses || [];

          if (fetchedCourses.length === 0) {
            setError(`We couldn't find any specific courses matching "${courseName}" under "${degreeName}". Please try a different category.`);
            state.history.pop();
          } else {
            state.courses = fetchedCourses;
            state.isResultMode = true;
            state.currentTitle = "Best Matches For You";
          }
        }
      } catch (err) {
        console.error(err);
        let msg = "An unexpected error occurred. Please try again.";
        if (!navigator.onLine) msg = "It looks like you are offline. Please check your internet connection.";
        else if (err.message?.includes("Server error")) msg = "Our college database is currently experiencing issues. Please try again later.";
        else if (err.name === 'TypeError' && err.message?.includes('fetch')) msg = "Unable to reach the server. Please check your network connection.";

        setError(msg);
        state.history.pop();
      } finally {
        setLoading(false);
        render();
      }
    }

    function handleBack() {
      if (state.history.length === 0) return;
      // For simplicity and data integrity, we reset or warn.
      // A true 'back' without state machine cache is risky in this API structure.
      if (state.isResultMode) {
        // Just stepping back from results is easy to undo locally
        state.isResultMode = false;
        state.courses = [];
        state.history.pop();

        // We need to restore the previous Options. 
        // Since we don't cache API calls in this simple script, a Reset is safer for user UX than a broken state.
        // However, we can try to offer a Restart.
      }

      if (confirm("To ensure accurate results, going back requires restarting the selection. Restart now?")) {
        handleReset();
      }
    }

    function handleReset() {
      state = {
        history: [],
        currentOptions: [...INITIAL_OPTIONS],
        currentTitle: "Which degree are you interested in?",
        isResultMode: false,
        courses: []
      };
      setError(null);
      render();
    }

    async function analyzeWithAI(course, btnElement, resultElement) {
      if (!aiClient) {
        alert("Please add a valid API Key to use AI features.");
        return;
      }

      // Loading UI
      btnElement.disabled = true;
      btnElement.className = "flex-1 mt-3 py-2.5 rounded-xl border border-indigo-100 bg-indigo-50 text-indigo-400 text-sm font-medium flex items-center justify-center cursor-wait";
      btnElement.innerHTML = `
                <svg class="animate-spin h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" strokeWidth="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Thinking...
            `;

      try {
        const pathSummary = state.history.map(h => h.selectedOption.name).join(" > ");
        const prompt = `
                    You are an expert academic counselor.
                    The user has selected: ${pathSummary}.
                    They are considering:
                    Course: ${course.course_name}
                    Degree: ${course.degree}
                    University: ${course.university_name}
                    Duration: ${course.years} Years

                    Provide a very brief (max 40 words), encouraging reason why this specific course fits their path.
                    Focus on the career outcome.
                `;

        const response = await aiClient.models.generateContent({
          model: 'gemini-2.5-flash',
          contents: prompt
        });

        const text = response.text;

        // Render result
        resultElement.innerHTML = `
                    <div class="mt-4 p-4 bg-gradient-to-br from-indigo-50 to-purple-50 border border-indigo-100 rounded-xl relative overflow-hidden animate-fade-in-up">
                        <div class="absolute top-0 right-0 p-2 opacity-10">
                            <svg class="w-16 h-16 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path fillRule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clipRule="evenodd" /></svg>
                        </div>
                        <div class="relative z-10">
                            <h4 class="text-xs font-bold text-indigo-600 uppercase tracking-wide mb-1 flex items-center gap-1">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm1-13h-2v6h6v-2h-4z"/></svg>
                                AI Insight
                            </h4>
                            <p class="text-sm text-slate-700 leading-relaxed">${text}</p>
                        </div>
                    </div>
                `;

        // Done state for button
        btnElement.className = "hidden"; // Hide button after success

      } catch (e) {
        console.error(e);
        alert("AI Analysis failed. Please try again.");
        btnElement.disabled = false;
        btnElement.textContent = "Try AI Analysis Again";
        btnElement.className = "flex-1 mt-3 py-2.5 rounded-xl border border-red-200 bg-red-50 text-red-600 text-sm font-medium hover:bg-red-100 transition-colors";
      }
    }

    // --- Render Helpers ---

    function render() {
      els.title.textContent = state.currentTitle;
      renderHistory();
      renderContent();
      renderControls();
    }

    function renderHistory() {
      els.history.innerHTML = '<div class="absolute left-[15px] top-2 bottom-4 w-0.5 bg-slate-100 -z-10"></div>';

      if (state.history.length === 0) {
        els.emptyHistory.classList.remove('hidden');
        els.resetBtn.classList.add('hidden');
      } else {
        els.emptyHistory.classList.add('hidden');
        els.resetBtn.classList.remove('hidden');

        state.history.forEach((step, idx) => {
          const div = document.createElement('div');
          div.className = "relative pl-10 py-3 group animate-fade-in-up";
          div.style.animationDelay = `${idx * 100}ms`;

          div.innerHTML = `
                        <div class="absolute left-0 top-4 w-8 h-8 rounded-full bg-indigo-50 border-2 border-indigo-100 flex items-center justify-center text-indigo-600 text-xs font-bold group-hover:bg-indigo-600 group-hover:border-indigo-600 group-hover:text-white transition-all shadow-sm">
                            ${idx + 1}
                        </div>
                        <div class="bg-white p-3 rounded-xl border border-slate-100 shadow-sm group-hover:border-indigo-200 transition-colors">
                            <p class="text-xs text-slate-400 font-medium uppercase tracking-wide mb-0.5">Selected</p>
                            <p class="text-sm font-bold text-slate-800">${step.selectedOption.name}</p>
                        </div>
                    `;
          els.history.appendChild(div);
        });
      }
    }

    function renderContent() {
      els.grid.innerHTML = '';

      // --- RESULT MODE (COURSES) ---
      if (state.isResultMode) {
        els.grid.classList.remove('lg:grid-cols-3');
        els.grid.classList.add('lg:grid-cols-2');

        state.courses.forEach((course, idx) => {
          const card = document.createElement('div');
          card.className = "bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl hover:shadow-indigo-500/10 hover:-translate-y-1 transition-all duration-500 group flex flex-col h-full animate-fade-in-up";
          card.style.animationDelay = `${idx * 100}ms`;

          const bgImg = course.university_img || course.University_backgound || "https://api.collegeall.com/Logo/fav.png";

          card.innerHTML = `
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="${bgImg}" alt="${course.university_name}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='https://placehold.co/600x400/f1f5f9/94a3b8?text=University'">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="inline-block px-2 py-1 bg-white/20 backdrop-blur-md rounded-md text-white text-[10px] font-bold uppercase tracking-wider border border-white/30 mb-2">
                                    ${course.degree}
                                </span>
                                <h3 class="text-white font-bold text-lg leading-tight text-shadow-sm">${course.university_name}</h3>
                            </div>
                        </div>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <h4 class="font-bold text-slate-900 text-lg mb-3 line-clamp-2" title="${course.course_name}">${course.course_name}</h4>
                            
                            <div class="flex items-center gap-4 text-sm text-slate-500 mb-6">
                                <div class="flex items-center gap-1.5 bg-slate-50 px-3 py-1.5 rounded-lg">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <span class="font-medium">${course.years} Years</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span>Admissions Open</span>
                                </div>
                            </div>

                            <div class="ai-result-container"></div>

                            <div class="mt-auto pt-4 border-t border-slate-100">
                                <div class="flex flex-col gap-2">
                                    <button class="ai-analyze-btn w-full group/btn relative flex items-center justify-center gap-2 py-2.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-semibold shadow-md shadow-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/30 transition-all overflow-hidden">
                                        <div class="absolute inset-0 bg-white/20 translate-y-full group-hover/btn:translate-y-0 transition-transform duration-300"></div>
                                        <svg class="w-4 h-4 text-indigo-100" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                        <span class="relative">Analyze Match with AI</span>
                                    </button>
                                    
                                    <a href="https://collegeall.com/${course.coursedeatils_url}" target="_blank" class="w-full flex items-center justify-center gap-2 py-2.5 rounded-xl border border-slate-200 text-slate-600 text-sm font-semibold hover:bg-slate-50 hover:text-slate-900 transition-colors">
                                        View Full Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;

          // Events
          const aiBtn = card.querySelector('.ai-analyze-btn');
          const resContainer = card.querySelector('.ai-result-container');
          aiBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            analyzeWithAI(course, aiBtn, resContainer);
          });

          els.grid.appendChild(card);
        });
      }
      // --- SELECTION MODE ---
      else {
        els.grid.classList.add('lg:grid-cols-3');
        els.grid.classList.remove('lg:grid-cols-2');

        state.currentOptions.forEach((opt, idx) => {
          const btn = document.createElement('button');
          btn.className = "group relative flex flex-col items-center p-8 bg-white border border-slate-100 rounded-3xl shadow-sm hover:shadow-2xl hover:shadow-indigo-500/10 hover:-translate-y-1.5 transition-all duration-300 text-center animate-fade-in-up";
          btn.style.animationDelay = `${idx * 100}ms`;

          const hasImg = opt.img && opt.img !== "https://api.collegeall.com/Logo/fav.png";
          const imgContent = hasImg
            ? `<img src="${opt.img}" alt="${opt.name}" class="w-12 h-12 object-contain filter drop-shadow-sm group-hover:scale-110 transition-transform duration-300">`
            : `<svg class="w-10 h-10 text-indigo-600 group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>`;

          btn.innerHTML = `
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <div class="relative z-10 w-20 h-20 mb-5 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center group-hover:bg-white group-hover:shadow-md transition-all duration-300">
                            ${imgContent}
                        </div>
                        
                        <div class="relative z-10">
                            <h3 class="font-bold text-slate-800 text-xl group-hover:text-indigo-700 transition-colors mb-2">${opt.name}</h3>
                            <div class="h-1 w-12 bg-indigo-500 rounded-full mx-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform scale-x-0 group-hover:scale-x-100"></div>
                            <p class="text-sm text-slate-400 mt-2 opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-75">Click to select</p>
                        </div>
                    `;

          btn.addEventListener('click', () => handleSelection(opt));
          els.grid.appendChild(btn);
        });
      }
    }

    function renderControls() {
      if (state.history.length === 0) {
        els.backBtn.disabled = true;
      } else {
        els.backBtn.disabled = false;
      }
    }

    // Start
    init();

  </script>
</body>

</html>