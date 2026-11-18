<script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom scrollbar to match 'no-scrollbar' utility */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        #mobile-menu-panel{
          height: 100vh;
        }
        .no-scrollbar {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }

        /* Define custom colors based on the React component */
        :root {
            --primary: #4f46e5; /* indigo-600 */
            --primary-dark: #4338ca; /* indigo-700 */
            --secondary: #10b981; /* emerald-500 */
            --secondary-dark: #059669; /* emerald-600 */
        }

        .bg-primary { background-color: var(--primary); }
        .hover\:bg-primary-dark:hover { background-color: var(--primary-dark); }
        .text-primary { color: var(--primary); }
        .focus\:border-primary:focus { border-color: var(--primary); }
        .focus\:ring-primary\/10:focus { --tw-ring-color: rgba(79, 70, 229, 0.1); }
        .bg-secondary { background-color: var(--secondary); }
        .hover\:bg-secondary-dark:hover { background-color: var(--secondary-dark); }
        .text-secondary { color: var(--secondary); }
    </style>
</head>
<body>

<header id="header-component" class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 font-sans transition-all duration-300">
    <div class="w-full px-4 lg:px-12">
        <div class="flex items-center justify-between h-[80px]">

            <a href="https://collegeall.com/" class="flex-shrink-0 flex items-center gap-3">
                 <img src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="CollegeAll" class="h-10 w-auto" />
            </a>

            <div class="hidden lg:flex flex-1 max-w-2xl mx-12">
                <div class="relative w-full group">
                    <input
                        type="text"
                        placeholder="Search for Colleges, Courses, or Exams..."
                        class="w-full pl-5 pr-12 py-3 rounded-full border border-gray-200 bg-gray-50 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all text-sm font-medium shadow-sm group-hover:shadow-md"
                    />
                    <button class="absolute right-3 top-2.5 bg-white p-1.5 rounded-full text-gray-400 hover:text-primary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </button>
                </div>
            </div>

            <nav class="hidden xl:flex items-center gap-8">

                <div id="find-program-dropdown" class="relative group">
                    <button class="flex items-center gap-1 font-semibold text-gray-700 hover:text-primary py-2 text-sm uppercase tracking-wide">
                        Find Program
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="absolute top-full right-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 w-[700px] z-50">
                        <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden flex h-[500px]">
                            <div id="uni-list" class="w-1/3 bg-gray-50 border-r border-gray-100 overflow-y-auto no-scrollbar p-3">
                                <div class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-3">Select University</div>
                                <div id="uni-list-content">
                                    <div class="p-4 text-center text-sm text-gray-500">Loading...</div>
                                </div>
                            </div>
                            <div id="course-list" class="w-2/3 overflow-y-auto p-6 bg-white">
                                <div class="flex justify-between items-center mb-4 pb-4 border-b border-gray-100">
                                    <span class="text-sm font-bold text-gray-800">Available Courses</span>
                                    <a href="#" class="text-xs text-primary font-medium cursor-pointer hover:underline">View All</a>
                                </div>
                                <div id="course-grid" class="grid grid-cols-2 gap-4">
                                    <div class="text-center text-sm text-gray-500 pt-10">Select a university to see courses.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <button class="flex items-center gap-1 font-semibold text-gray-700 hover:text-primary py-2 text-sm uppercase tracking-wide">
                        Free Tools
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="absolute top-full right-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 w-64 z-50">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 p-2 text-sm">
                            <a href="https://collegeall.com/tools/qr-generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">QR Code Generator</a>
                            <a href="https://collegeall.com/tools/Password-Generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Password Generator</a>
                            <a href="https://collegeall.com/tools/data-convertor.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Array to CSV Convertor</a>
                            <a href="https://collegeall.com/tools/bmi-calculator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">BMI Calculator</a>
                            <a href="https://collegeall.com/tools/color-palette.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Color Picker</a>
                            <a href="https://collegeall.com/tools/gradient-generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Gradient Generator</a>
                            <a href="https://collegeall.com/tools/image-compressor.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Image Compressor</a>
                            <a href="https://collegeall.com/tools/api-tester.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Api Tester</a>
                            <a href="https://collegeall.com/tools/emi-calculator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">EMI Calculator</a>
                            <a href="https://collegeall.com/tools/resume-builder/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Resume Builder</a>
                        
                            <div class="border-t border-gray-100 my-1"></div>
                        
                            <a href="https://collegeall.com/tools/" class="block px-4 py-2.5 text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors text-center">More Tools</a>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <button class="flex items-center gap-1 font-semibold text-gray-700 hover:text-primary py-2 text-sm uppercase tracking-wide">
                        Blogs
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="absolute top-full right-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 w-80 z-50">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 p-2 text-sm">
                            <a href="https://collegeall.com/blogs/vignan-university-online-mba/" 
                               class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                               Vignan University Online MBA
                            </a>
                        
                            <a href="https://collegeall.com/blogs/upgrade-your-skills-with-online-mba-in-project-management/" 
                               class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                               Upgrade Your Skills with Online MBA in Project Management
                            </a>
                        
                            <a href="https://collegeall.com/blogs/online-mcom-general-kurukshetra-university-ugc-approved-postgraduate-degree/" 
                               class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                               Online M.Com (Kurukshetra University)
                            </a>
                        
                            <a href="https://collegeall.com/blogs/online-mba-program/" 
                               class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                               Online MBA Program
                            </a>
                        
                            <a href="https://collegeall.com/blogs/mba-in-international-finance-accredited-by-acca-uk-jain-university-online/" 
                               class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                               MBA in International Finance (Jain University)
                            </a>
                        
                            <a href="https://collegeall.com/blogs/gen-z-online-mba/" 
                               class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                               Gen Z Online MBA
                            </a>
                        
                            <a href="https://collegeall.com/blogs/boost-your-salary/" 
                               class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                               Boost Your Salary
                            </a>
                        
                            <div class="border-t border-gray-100 my-1"></div>
                        
                            <a href="https://collegeall.com/blogs/" 
                               class="block px-4 py-2.5 text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors text-center">
                               View All Blogs
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3 pl-4 border-l border-gray-200">
                   <a href="https://collegeall.com/university-suggestions/" class="flex items-center gap-1.5 px-5 py-2.5 bg-secondary hover:bg-secondary-dark text-white rounded-full text-sm font-bold transition-all shadow-lg shadow-secondary/20 hover:-translate-y-0.5">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> AI Match
                   </a>
                   <a href="/signin" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-full text-sm font-bold transition-colors">
                      Log in
                   </a>
                   <a href="/signup" class="px-5 py-2.5 bg-primary hover:bg-primary-dark text-white rounded-full text-sm font-bold transition-colors shadow-lg shadow-primary/20 hover:-translate-y-0.5">
                      Sign up
                   </a>
                </div>
            </nav>

            <div class="flex xl:hidden items-center gap-3">
                 <button class="text-dark p-2 hover:bg-gray-100 rounded-full transition-colors">
                   <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                 </button>
                 <button id="mobile-menu-open-btn" class="text-dark p-2 hover:bg-gray-100 rounded-full transition-colors">
                   <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                 </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu-overlay" class="fixed inset-0 z-50 bg-black/50 xl:hidden backdrop-blur-sm hidden" role="dialog" aria-modal="true">
       <div id="mobile-menu-panel" class="absolute right-0 top-0 w-[320px] bg-white shadow-2xl p-6 overflow-y-auto transform translate-x-full transition-transform duration-300">
          <div class="flex justify-between items-center mb-8 border-b border-gray-100 pb-4">
             <img src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="Logo" class="h-8" />
             <button id="mobile-menu-close-btn" class="p-1 rounded-full hover:bg-gray-100">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
             </button>
          </div>

          <div class="space-y-3 mb-8">
             <a href="https://collegeall.com/university-suggestions/" class="flex items-center gap-3 p-3 rounded-xl bg-secondary/10 text-secondary font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> AI Suggestion Tool
             </a>
             <div class="grid grid-cols-2 gap-3">
                <a href="/signin" class="flex items-center justify-center gap-2 p-3 rounded-xl border border-gray-200 text-gray-700 font-bold hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg> Log in
                </a>
                <a href="/signup" class="flex items-center justify-center gap-2 p-3 rounded-xl bg-primary text-white font-bold shadow-lg shadow-primary/20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg> Sign up
                </a>
             </div>
          </div>

          <div class="space-y-6">
             <div>
                <button id="mobile-tools-toggle" class="flex items-center justify-between w-full font-bold text-gray-800 mb-3">
                   <span class="flex items-center gap-2">Free Tools</span>
                   <svg id="mobile-tools-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div id="mobile-tools-menu" class="space-y-2 pl-4 border-l-2 border-gray-100 hidden">
                   <a href="https://collegeall.com/tools/qr-generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">QR Code Generator</a>
                    <a href="https://collegeall.com/tools/Password-Generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Password Generator</a>
                    <a href="https://collegeall.com/tools/data-convertor.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Array to CSV Convertor</a>
                    <a href="https://collegeall.com/tools/bmi-calculator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">BMI Calculator</a>
                    <a href="https://collegeall.com/tools/color-palette.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Color Picker</a>
                    <a href="https://collegeall.com/tools/gradient-generator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Gradient Generator</a>
                    <a href="https://collegeall.com/tools/image-compressor.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Image Compressor</a>
                    <a href="https://collegeall.com/tools/api-tester.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Api Tester</a>
                    <a href="https://collegeall.com/tools/emi-calculator.php" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">EMI Calculator</a>
                    <a href="https://collegeall.com/tools/resume-builder/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors font-medium">Resume Builder</a>
                
                    <div class="border-t border-gray-100 my-1"></div>
                
                    <a href="https://collegeall.com/tools/" class="block px-4 py-2.5 text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors text-center">More Tools</a>
                </div>
             </div>

             <div>
                <button id="mobile-blogs-toggle" class="flex items-center justify-between w-full font-bold text-gray-800 mb-3">
                   <span class="flex items-center gap-2">Latest Blogs</span>
                   <svg id="mobile-blogs-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div id="mobile-blogs-menu" class="space-y-2 pl-4 border-l-2 border-gray-100 hidden">
                   <a href="https://collegeall.com/blogs/vignan-university-online-mba/" class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                        Vignan University Online MBA
                    </a>
                        
                    <a href="https://collegeall.com/blogs/upgrade-your-skills-with-online-mba-in-project-management/" 
                       class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Upgrade Your Skills with Online MBA in Project Management
                    </a>
                        
                    <a href="https://collegeall.com/blogs/online-mcom-general-kurukshetra-university-ugc-approved-postgraduate-degree/" 
                       class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Online M.Com (Kurukshetra University)
                    </a>
                        
                    <a href="https://collegeall.com/blogs/online-mba-program/" 
                       class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Online MBA Program
                    </a>
                        
                    <a href="https://collegeall.com/blogs/mba-in-international-finance-accredited-by-acca-uk-jain-university-online/" 
                       class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       MBA in International Finance (Jain University)
                    </a>
                        
                    <a href="https://collegeall.com/blogs/gen-z-online-mba/" 
                       class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Gen Z Online MBA
                    </a>
                        
                    <a href="https://collegeall.com/blogs/boost-your-salary/" 
                       class="block px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-primary rounded-lg transition-colors truncate font-medium">
                       Boost Your Salary
                    </a>
                        
                    <div class="border-t border-gray-100 my-1"></div>
                        
                    <a href="https://collegeall.com/blogs/" 
                       class="block px-4 py-2.5 text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors text-center">
                       View All Blogs
                    </a>
                </div>
             </div>
          </div>
       </div>
    </div>
</header>


<script>
    document.addEventListener('DOMContentLoaded', () => {
    // --- State Simulation ---
    let programs = [];
    let universities = [];
    let selectedUni = '';
    let isMobileMenuOpen = false;
    let openDropdown = null; // 'tools' or 'blogs'

    // --- DOM Elements ---
    const uniListContent = document.getElementById('uni-list-content');
    const courseGrid = document.getElementById('course-grid');
    
    // Mobile Menu Elements
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuPanel = document.getElementById('mobile-menu-panel');
    const mobileMenuOpenBtn = document.getElementById('mobile-menu-open-btn');
    const mobileMenuCloseBtn = document.getElementById('mobile-menu-close-btn');
    
    // Mobile Dropdown Elements
    const mobileToolsToggle = document.getElementById('mobile-tools-toggle');
    const mobileToolsMenu = document.getElementById('mobile-tools-menu');
    const mobileToolsIcon = document.getElementById('mobile-tools-icon');
    const mobileBlogsToggle = document.getElementById('mobile-blogs-toggle');
    const mobileBlogsMenu = document.getElementById('mobile-blogs-menu');
    const mobileBlogsIcon = document.getElementById('mobile-blogs-icon');

    // --- Data Fetching (Unchanged) ---
    const API_URL = "https://api.collegeall.com/api/v1/topcourse";

    const fetchPrograms = async () => {
        // ... (data fetching logic remains the same)
        try {
            uniListContent.innerHTML = '<div class="p-4 text-center text-sm text-gray-500">Loading...</div>';
            
            const res = await fetch(API_URL, {
                method: "POST",
                headers: { "Content-Type": "application/json" }
            });
            const result = await res.json();
            
            programs = result.data.universities || [];
            
            const uniSet = new Set(programs
                .map(p => p.University_name?.trim())
                .filter(name => name)
            );
            universities = Array.from(uniSet).sort();

            if (universities.length > 0) {
                selectedUni = universities[0];
            }

            renderUniList();
            renderCourseGrid();

        } catch (err) {
            console.error("Failed to load programs", err);
            uniListContent.innerHTML = '<div class="p-4 text-center text-sm text-red-500">Failed to load universities.</div>';
            courseGrid.innerHTML = '<div class="text-center text-sm text-red-500 pt-10">Failed to load courses.</div>';
        }
    };

    // --- Rendering Functions (Unchanged, except for setSelectedUniversity being global) ---

    const renderUniList = () => {
        if (universities.length === 0) {
            uniListContent.innerHTML = '<div class="p-4 text-center text-sm text-gray-500">No universities found.</div>';
            return;
        }

        uniListContent.innerHTML = universities.map(uni => {
            const isSelected = uni === selectedUni;
            const baseClasses = 'w-full text-left px-4 py-3 text-sm rounded-xl mb-1 transition-all duration-200 border border-transparent';
            const selectedClasses = 'bg-white shadow-md border-gray-100 text-primary font-bold translate-x-1';
            const unselectedClasses = 'text-gray-600 hover:bg-gray-100';
            
            return `
                <button
                    data-uni-name="${uni}"
                    class="${baseClasses} ${isSelected ? selectedClasses : unselectedClasses}"
                    onmouseenter="window.setSelectedUniversity('${uni}')"
                >
                    ${uni}
                </button>
            `;
        }).join('');
    };

    const renderCourseGrid = () => {
        const filteredCourses = programs.filter(p => p.University_name === selectedUni);

        if (filteredCourses.length === 0) {
            courseGrid.innerHTML = '<div class="text-center text-sm text-gray-500 pt-10">No courses available for this university.</div>';
            return;
        }

        courseGrid.innerHTML = filteredCourses.map((course, idx) => `
            <a href="/${course.url}" class="flex items-start gap-3 p-3 rounded-xl border border-gray-50 hover:border-gray-100 hover:bg-blue-50/50 transition-all group/item">
                <div class="w-10 h-10 rounded-lg bg-white shadow-sm flex items-center justify-center p-1 border border-gray-100">
                  <img src="${course.universities_logo}" alt="logo" class="w-full h-full object-contain" />
                </div>
                <div>
                  <div class="text-sm font-bold text-gray-800 group-hover/item:text-primary line-clamp-1">${course.course_name}</div>
                  <div class="text-xs text-gray-500 font-medium">${course.degree}</div>
                </div>
            </a>
        `).join('');
    };
    
    window.setSelectedUniversity = (uniName) => {
        if (selectedUni !== uniName) {
            selectedUni = uniName;
            renderUniList();
            renderCourseGrid();
        }
    };

    // ------------------------------------------------------------------
    // --- Mobile Menu Logic (FIXED) ---
    // ------------------------------------------------------------------

    const setMobileMenuOpen = (isOpen) => {
        isMobileMenuOpen = isOpen;
        if (isMobileMenuOpen) {
            // Show the overlay
            mobileMenuOverlay.classList.remove('hidden');
            // Animate the panel in
            setTimeout(() => {
                mobileMenuPanel.classList.remove('translate-x-full');
            }, 10); 
            document.body.style.overflow = 'hidden'; // Prevent body scroll
        } else {
            // Animate the panel out
            mobileMenuPanel.classList.add('translate-x-full');
            // Hide the overlay after transition
            setTimeout(() => {
                mobileMenuOverlay.classList.add('hidden');
                document.body.style.overflow = ''; // Restore body scroll
            }, 300); 
        }
    };

    mobileMenuOpenBtn.addEventListener('click', () => setMobileMenuOpen(true));
    mobileMenuCloseBtn.addEventListener('click', () => setMobileMenuOpen(false));
    
    // Close menu when clicking outside (on the overlay)
    mobileMenuOverlay.addEventListener('click', (e) => {
        if (e.target.id === 'mobile-menu-overlay') {
            setMobileMenuOpen(false);
        }
    });
    // Stop event propagation inside the panel to prevent closing
    mobileMenuPanel.addEventListener('click', (e) => e.stopPropagation());


    // ------------------------------------------------------------------
    // --- Mobile Dropdown Logic (FIXED) ---
    // ------------------------------------------------------------------
    
    const toggleMobileDropdown = (name) => {
        if (openDropdown === name) {
            openDropdown = null;
        } else {
            openDropdown = name;
        }
        renderMobileDropdowns();
    };

    const renderMobileDropdowns = () => {
        // Tools
        const isToolsOpen = openDropdown === 'tools';
        mobileToolsMenu.classList.toggle('hidden', !isToolsOpen);
        mobileToolsIcon.classList.toggle('rotate-180', isToolsOpen);

        // Blogs
        const isBlogsOpen = openDropdown === 'blogs';
        mobileBlogsMenu.classList.toggle('hidden', !isBlogsOpen);
        mobileBlogsIcon.classList.toggle('rotate-180', isBlogsOpen);
    };
    
    mobileToolsToggle.addEventListener('click', () => toggleMobileDropdown('tools'));
    mobileBlogsToggle.addEventListener('click', () => toggleMobileDropdown('blogs'));


    // --- Initialization ---
    fetchPrograms();
});
</script>