// Search
document.getElementById("searchInput")?.addEventListener("focus", function () {
    const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "";
    window.location.href = appUrl ? `${appUrl}/search/` : "/search/";
});

document.getElementById("mobileSearchBtn")?.addEventListener("click", function () {
    const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "https://collegeall.com";
    window.location.href = `${appUrl}/search/`; 
});
// 🧭 Get current page URL (without trailing slash fix)
const currentURLs = window.location.href.replace(/\/$/, '');
const appConfig = window.APP_CONFIG || {
    appUrl: "https://collegeall.com",
    apiBaseUrl: "https://api.collegeall.com",
    dataJsonUrl: "https://collegeall.com/data.json"
};
const dataJsonUrl = appConfig.dataJsonUrl || (appConfig.assetBaseUrl ? `${appConfig.assetBaseUrl}/data.json` : "https://collegeall.com/data.json");

fetch(dataJsonUrl)
    .then(response => response.json())
    .then(data => {

        console.log("DATA: ", data);
        
    
        // 🔍 Find the key matching the current URL or path
        const currentPath = window.location.pathname.replace(/\/$/, '');
        const matchedKey = Object.keys(data).find(key => {
            try {
                const keyPath = new URL(key).pathname.replace(/\/$/, '');
                if (keyPath === currentPath) return true;
            } catch (e) {}
            return key.replace(/\/$/, '') === currentURLs;
        });

        if (!matchedKey) {
            document.getElementById('curriculumAccordion').innerHTML =
                '<p class="text-danger">No curriculum data found for this page.</p>';
            return;
        }

        // 🎓 Extract semester data (array of arrays)
        const semesters = data[matchedKey];
        const accordion = document.getElementById("curriculumAccordion");

        // 🛠️ Build accordion items dynamically
        semesters.forEach((subjects, index) => {
            const semesterId = `collapse${index + 1}`;
            const headingId = `heading${index + 1}`;

            const subjectsList = subjects.map(sub => `<li>${sub}</li>`).join("");

            const accordionItem = `
            <div class="accordion-item">
              <h2 class="accordion-header" id="${headingId}">
                <button class="accordion-button ${index !== 0 ? 'collapsed' : ''}" 
                        type="button" data-bs-toggle="collapse" 
                        data-bs-target="#${semesterId}" 
                        aria-expanded="${index === 0 ? 'true' : 'false'}" 
                        aria-controls="${semesterId}">
                  <i class="bi bi-journal-text me-2"></i>Semester ${index + 1}
                </button>
              </h2>
              <div id="${semesterId}" class="accordion-collapse collapse ${index === 0 ? 'show' : ''}" 
                   data-bs-parent="#curriculumAccordion">
                <div class="accordion-body">
                  <ul>${subjectsList}</ul>
                </div>
              </div>
            </div>
          `;

            accordion.insertAdjacentHTML("beforeend", accordionItem);
        });
    })
    .catch(error => {
        console.error('Error loading curriculum.json:', error);
        document.getElementById('curriculumAccordion').innerHTML =
            '<p class="text-danger">Error loading curriculum data.</p>';
    });

   // Render Modal Form 

window.addEventListener("DOMContentLoaded", () => {
//   fetch("/collegeall.com/universities/modal-form/index.php")
  fetch("/universities/modal-form/index.php")
    .then(res => res.text())
    .then(html => {
      document.getElementById("modalContainer").innerHTML = html;
    });
});

const countdownEl = document.getElementById("countdown");

function updateCountdown() {
    const now = new Date();

    // Set target as the end of today (23:59:59)
    const endOfDay = new Date();
    endOfDay.setHours(23, 59, 59, 999);

    const distance = endOfDay - now;

    const hours = Math.floor((distance / (1000 * 60 * 60)));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    countdownEl.innerHTML = `${hours}h ${minutes}m ${seconds}s left today!`;
}

setInterval(updateCountdown, 1000);
updateCountdown();

function Login() {
    window.location.href = '../../signin'
}
function Signup() {
    window.location.href = '../../signup'
}
function Navigate() {
    window.location.href = '../../'
}
document.getElementById("searchInput")?.addEventListener("focus", function () {
    const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "";
    window.location.href = appUrl ? `${appUrl}/search/` : "/search/";
});
        
document.getElementById("mobileSearchBtn")?.addEventListener("click", function () {
    const appUrl = (window.APP_CONFIG && window.APP_CONFIG.appUrl) ? window.APP_CONFIG.appUrl : "https://collegeall.com";
    window.location.href = `${appUrl}/search/`; 
});

const array = [
    { name: "amity", img_url: "../../img/all_logo/amity.webp" },
    { name: "AU", img_url: "../../img/all_logo/AU.webp" },
    { name: "bdu", img_url: "../../img/all_logo/bdu.webp" },
    { name: "Chandigarh university", img_url: "../../img/all_logo/Chandigarh university.webp" },
    { name: "GGU", img_url: "../../img/all_logo/GGU.webp" },
    { name: "JAIN", img_url: "../../img/all_logo/JAIN.webp" },
    { name: "Manipal", img_url: "../../img/all_logo/Manipal.webp" },
    { name: "MGR", img_url: "../../img/all_logo/MGR.webp" },
    { name: "NOIDA INTERNATIONAL UNIVERSITY", img_url: "../../img/all_logo/NOIDA INTERNATIONAL UNIVERSITY.webp" },
    { name: "OP Jindal", img_url: "../../img/all_logo/OP Jindal.webp" },
    { name: "vgu logo (1)", img_url: "../../img/all_logo/vgu logo (1).webp" },
    { name: "vignan", img_url: "../../img/all_logo/vignan.webp" }
];

// Select the track container
const logoTrack = document.getElementById("logoTrack");

// Function to append images and duplicate for seamless scrolling
function populateLogos() {
    array.forEach(logo => {
        const img = document.createElement("img");
        img.src = logo.img_url;
        img.alt = logo.name;
        logoTrack.appendChild(img);
    });

    // Duplicate logos for seamless scrolling
    array.forEach(logo => {
        const img = document.createElement("img");
        img.src = logo.img_url;
        img.alt = logo.name;
        logoTrack.appendChild(img);
    });
}

// Call the function to populate logos
populateLogos();
function loadUniversityAndCourseData(University_id = null) {
    const apiBase = (window.APP_CONFIG && window.APP_CONFIG.apiBaseUrl) ? window.APP_CONFIG.apiBaseUrl : "https://api.collegeall.com";
    let baseURL = `${apiBase}/api/v1/filtercourse-university`;

    // Add parameters only if they exist
    if (University_id) {
        const params = new URLSearchParams();
        if (University_id) params.append("university_id", University_id);
        baseURL += `?${params.toString()}`;
    }

    fetch(baseURL, {
        method: "GET",
        redirect: "follow"
    })
        .then((response) => response.json())
        .then((data) => {
            const courses = data?.data?.courses || [];
            console.log('courses', courses)

            const coursesList = document.getElementById("coursesList");
            courses.forEach(course => {
                const card = document.createElement("div");
                card.className = "card-containe";
                card.innerHTML = `
              <div style="width: 220px; height: 310px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); overflow: hidden; font-family: 'Segoe UI', sans-serif; background-color: #fff; margin: 10px;">
              <!-- Card Top -->
              <div style="background-color: #004AAD; color: white; padding: 15px 10px; height:120px; text-align: center;">
              <h4 style="margin: 0; font-size: 14px; font-weight: 500;">${course.degree || "PGDM"}</h4>
              <h3 style="margin: 5px 0 10px; font-size: 17px; font-weight: 600;">${course?.course_name || "Course Name"}</h3>
              <p style="margin: 0; font-size: 13px;">Rating: <span style="color: #FFDD0B;">⭐</span> 4.6</p>
              </div>

              <!-- Card Bottom -->
              <div style="padding: 12px; background-color: #f9f9f9; text-align: center; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
              <!-- Institute Info -->
              <div style="display: flex; justify-content: center; align-items: center; margin-top: 5px; margin-bottom: 10px;">
              <img src="${course?.universities_logo || 'https://via.placeholder.com/20'}" alt="logo" style="width: 20px; height: 20px; object-fit: contain; margin-right: 6px;">
              <span style="font-size: 12px; color: #004AAD;">${course?.University_name || "LIBA (Loyola Institute of Business Administration)"}</span>
              </div>

              <!-- Fee -->
              <p style="margin: 6px 0; font-size: 13px;"><strong>Fee:</strong> ${course?.fee || "3.5 Lakh"}</p>

              <!-- Duration -->
              <p style="margin: 6px 0; font-size: 13px;"><strong>Duration:</strong> ${course?.duration || "2 Years"}</p>

              <!-- Level -->
              <p style="margin: 6px 0; font-size: 13px;"><strong>Level:</strong> ${course?.level || "Postgraduate"}</p>
              </div>

              <!-- View More Button -->
              <a href='../../${course?.coursedeatils_url}' style="margin-top: 10px; padding: 6px 12px; font-size: 13px; background-color: #004AAD; color: white; border: none; border-radius: 6px; cursor: pointer;">
              View More
              </a>
              </div>
              </div>
              `;
                coursesList.appendChild(card);
            });


        })
        .catch((error) => {
            console.error("Fetch error:", error);
        });
}


const tabNames = ['About', 'Courses', 'Sample Certificate', 'EMI Details', 'Admission Process', 'Enroll Now'];
const tabContainer = document.getElementById('tabContainer');

tabNames.forEach((name, index) => {
    const tab = document.createElement('div');
    tab.classList.add('nav-item-custom');
    if (index === 0) tab.classList.add('active');
    tab.textContent = name;

    tab.addEventListener('click', () => {
        // Remove active class from all tabs
        document.querySelectorAll('.nav-item-custom').forEach(el => el.classList.remove('active'));
        // Add active class to the clicked tab
        tab.classList.add('active');

        // Scroll to the section with the corresponding ID
        const section = document.getElementById(name.replace(/\s+/g, ''));
        if (section) {
            section.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });

    tabContainer.appendChild(tab);
});


