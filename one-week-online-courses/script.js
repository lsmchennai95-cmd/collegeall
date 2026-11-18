

const courseTabs = document.getElementById("courseTabs");
const courseContainer = document.getElementById("courseContainer");
let courses = []; // Global variable to store API data

function generateStars(rating) {
  let full = Math.floor(rating);
  let half = rating % 1 >= 0.5 ? 1 : 0;
  let html = '';
  for (let i = 0; i < full; i++) html += '<i class="bi bi-star-fill text-warning"></i>';
  if (half) html += '<i class="bi bi-star-half text-warning"></i>';
  for (let i = full + half; i < 5; i++) html += '<i class="bi bi-star text-warning"></i>';
  return html;
}

// Fetch Courses from API
async function loadCourses() {
  try {
    const res = await fetch("https://api.collegeall.com/api/v1/get-one-week-course");
    const json = await res.json();
    courses = json.data.courses;

    renderLayout();
  } catch (error) {
    console.error("Error loading courses:", error);
    courseContainer.innerHTML = `<p class="text-danger text-center">Failed to load courses. Please try again later.</p>`;
  }
}

// ===== Desktop Layout =====
function renderDesktop() {
  const categories = ["All", ...new Set(courses.map(c => c.category))];
  courseTabs.innerHTML = "";
  courseTabs.style.display = "flex";
  courseContainer.innerHTML = "";

  categories.forEach(cat => {
    const btn = document.createElement("button");
    btn.innerText = cat;
    btn.className = "btn btn-outline-primary tab-btn me-2 mb-2";
    if (cat === "All") btn.classList.add("active");
    btn.addEventListener("click", () => {
      document.querySelectorAll("#courseTabs button").forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      renderCourses(cat);
    });
    courseTabs.appendChild(btn);
  });

  renderCourses("All");
}

function renderCourses(category = "All") {
  courseContainer.innerHTML = "";
  const filtered = category === "All" ? courses : courses.filter(c => c.category === category);
  
  filtered.forEach(course => {
    const card = document.createElement("div");
    card.className = "col-lg-3 col-md-4 col-sm-6 main-card";
    card.innerHTML = `
      <div class="course-card">
        <img src="${course.img || 'https://via.placeholder.com/400x200'}" alt="${course.title}">
        <div class="course-body">
          <div class="course-title">${course.title}</div>
          <div class="course-instructor">${course.instructor}</div>
          <div class="rating">${generateStars(course.rating)} <span>${course.rating} (${course.reviews})</span></div>
          <div class="price">₹${course.price} <del>₹${course.oldPrice}</del></div>
          <div class="card-footer d-flex justify-content-between align-items-center mt-2">
            <button class="tag" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id=${course.id}>Pay Now</button>
            <a href="${course.url}" class="know-more">Know More</a>
          </div>
        </div>
      </div>`;
    courseContainer.appendChild(card);
  });
}

// ===== Mobile Layout =====
function renderMobile() {
  const categories = [...new Set(courses.map(c => c.category))];
  courseTabs.style.display = "none";
  courseContainer.innerHTML = "";

  categories.forEach(cat => {
    const section = document.createElement("div");
    section.className = "category-section mb-4";
    section.innerHTML = `<h5 class="fw-bold mb-3">${cat}</h5><div class="category-courses d-flex flex-nowrap gap-3"></div>`;
    const scrollDiv = section.querySelector(".category-courses");

    courses.filter(c => c.category === cat).forEach(course => {
      const card = document.createElement("div");
      card.className = "main-card flex-shrink-0";
      card.style.width = "80%";
      card.innerHTML = `
        <div class="course-card">
          <img src="${course.img || 'https://via.placeholder.com/400x200'}" alt="${course.title}">
          <div class="course-body">
            <div class="course-title">${course.title}</div>
            <div class="course-instructor">${course.instructor}</div>
            <div class="rating">${generateStars(course.rating)} <span>${course.rating} (${course.reviews})</span></div>
            <div class="price">₹${course.price} <del>₹${course.oldPrice}</del></div>
            <div class="card-footer mt-2">
              <button class="tag" data-title="${course.title}" data-price="${course.price}" data-bs-toggle="modal" data-bs-target="#paymentModal" data-id=${course.id}>Pay Now</button>
              <a href="${course.url}" class="know-more">Know More</a>
            </div>
          </div>
        </div>`;
      scrollDiv.appendChild(card);
    });

    courseContainer.appendChild(section);
  });
}

// ===== Render Responsive Layout =====
function renderLayout() {
  if (window.innerWidth <= 768) renderMobile();
  else renderDesktop();
}

// Auto resize
window.addEventListener("resize", renderLayout);

// Initialize
loadCourses();

// Daily countdown timer
document.addEventListener('DOMContentLoaded', () => {
  function updateDailyCountdown() {
    const now = new Date();
    const endOfDay = new Date();
    endOfDay.setHours(23, 59, 59, 999);

    const distance = endOfDay - now;

    const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((distance / (1000 * 60)) % 60);
    const seconds = Math.floor((distance / 1000) % 60);

    const hoursEl = document.getElementById("hours");
    const minutesEl = document.getElementById("minutes");
    const secondsEl = document.getElementById("seconds");

    if (hoursEl && minutesEl && secondsEl) {
      hoursEl.textContent = String(hours).padStart(2, '0');
      minutesEl.textContent = String(minutes).padStart(2, '0');
      secondsEl.textContent = String(seconds).padStart(2, '0');
    }
  }

  updateDailyCountdown();
  setInterval(updateDailyCountdown, 1000);
});

document.addEventListener("DOMContentLoaded", function () {
  const grid = document.getElementById("universities-logos-grid");

  fetch("https://api.collegeall.com/api/v1/all-universities")
    .then(response => response.json())
    .then(res => {
      if (res.status === 200 && res.data && res.data.universities) {
        res.data.universities.forEach(uni => {
          const logo = document.createElement("a");
          logo.href = uni.univeristy_url;
          logo.target = "_blank";
          logo.innerHTML = `<img src="${uni.universities_logo}" alt="${uni.University_name} Logo">`;
          grid.appendChild(logo);
        });

        startAutoScroll(grid);
      }
    })
    .catch(error => console.error("Error fetching logos:", error));

  function startAutoScroll(container) {
    let scrollSpeed = 0.5;
    let scrollInterval;

    function scroll() {
      container.scrollLeft += scrollSpeed;
      if (container.scrollLeft >= container.scrollWidth - container.clientWidth) {
        container.scrollLeft = 0;
      }
      scrollInterval = requestAnimationFrame(scroll);
    }

    scroll(); 

    container.addEventListener("mouseenter", () => cancelAnimationFrame(scrollInterval));
    container.addEventListener("mouseleave", () => scroll());
  }
});

