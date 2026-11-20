<nav class="navbar navbar-expand-lg fixed-top shadow-lg py-2"
        style="backdrop-filter: blur(12px); background: rgba(255,255,255,0.8); border-bottom: 1px solid rgba(0,0,0,0.05);">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo function_exists('app_url') ? app_url('/') : 'https://collegeall.com/'; ?>">
                <img src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="CollegeAll Logo" height="42"
                    class="me-2">
            </a>

            <div class="d-flex">
                <div class="mx-auto my-3 search-box mobile-search" style="display: none;">
                <!-- Mobile Search Icon -->
                 <button class="d-lg-none border-0" id="mobileSearchBtn" aria-label="Search">
                    <i class="bi bi-search fs-5 text-dark"></i>
                </button>
                </div>
    
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse" id="navbarContent">
                <form class="d-flex mx-auto my-3 my-lg-0 w-50 w-lg-50 search-box system-search-box">
                    <div class="input-group shadow-sm rounded-pill overflow-hidden">
                        <input class="form-control border-0 py-2 px-3 search" type="search" id="searchInput" placeholder="Search Colleges, Courses, or Exams..." aria-label="Search">
                        <button class="btn btn-gradient fw-semibold px-4" type="submit">Search</button>
                    </div>
                </form>
 
                <div class="d-flex align-items-center ms-auto flex-wrap gap-2">
                    <h4 id="usernameDiv">User</h4>
                    <button class="logout-btn btn btn-gradient px-4 py-2 fw-semibold rounded-pill me-2 mb-2" onclick="logoutUser()"> <i class="fas fa-right-from-bracket"></i> Logout</button>
                </div>
            </div>
        </div>
    </nav>
<style>
    .navbar .container-fluid .btn-gradient {
        background: linear-gradient(80deg, #004aad, #67a1ec);
        /* Adjust colors as needed */
        color: white !important;
        border: none;
        transition: all 0.3s ease;
    }

    .navbar .container-fluid .btn-gradient:hover {
        background: linear-gradient(80deg, #004aad, #67a1ec);
        color: white !important;
    }

    .search-container button {
        max-width: 100px;
    }

    @media (max-width: 768px) {
        .navbar .container-fluid .search-box {
            width: 100% !important;
        }

        .mobile-search {
            display: block !important;
            width: 24px !important;
        }

        .system-search-box{
            display: none !important;
        }

        .navbar .container-fluid .mobile-search{
            width: 24px !important;
        }
        .navbar .container-fluid .mobile-search button{
            background: none;
        }
    }
</style>
<script>
    function Navigate() {
        const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : '../';
        window.location.href = appUrl.replace(/\/+$/, '') + '/';
    }

    const searchInput = document.getElementById("searchInput");
    if (searchInput) {
        searchInput.addEventListener("focus", function () {
            const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "..";
            window.location.href = appUrl.replace(/\/+$/, '') + "/search/";
        });
    }

    const mobileSearchBtn = document.getElementById("mobileSearchBtn");
    if (mobileSearchBtn) {
        mobileSearchBtn.addEventListener("click", function () {
            const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "..";
            window.location.href = appUrl.replace(/\/+$/, '') + "/search/";
        });
    }

    function userDetails() {
        const token = localStorage.getItem('authToken');

        if (token) {
            const myHeaders = new Headers();
            myHeaders.append("authtoken", token);

            const requestOptions = {
                method: "GET",
                headers: myHeaders,
                redirect: "follow"
            };

            const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
            fetch(`${apiBase}/api/v1/getuser-details/`, requestOptions)
                .then(response => {
                    if (!response.ok) {
                        if (response.status === 401 || response.status === 403) {
                            localStorage.removeItem('authToken');
                            sessionStorage.removeItem('user_details');
                            const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "..";
                            window.location.href = appUrl.replace(/\/+$/, '') + "/signin/";
                            return null;
                        }
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(result => {
                    if (!result) return;
                    console.log("API Result:", result);
                    const username = result.data?.userdetails?.[0]?.user_name;
                    const datain = result.data?.userdetails?.[0];

                    if (datain) {
                        try {
                            sessionStorage.setItem('user_details', JSON.stringify(datain));
                        } catch (e) {}
                    }
                    if (username) {
                        const userDiv = document.getElementById('usernameDiv');
                        if (userDiv) {
                            userDiv.textContent = username;
                        }
                    }
                })
                .catch(error => {
                    console.error("API Error:", error);
                    const userDiv = document.getElementById('usernameDiv');
                    if (userDiv) {
                        userDiv.textContent = "Guest";
                    }
                });
        } else {
            const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "..";
            window.location.href = appUrl.replace(/\/+$/, '') + "/signin/";
        }
    }

    userDetails();
</script>