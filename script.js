// document.addEventListener("DOMContentLoaded", function () {
//   const grid = document.getElementById("universities-logos-grid");

//   fetch("https://api.collegeall.com/api/v1/all-universities") 
//     .then(response => response.json())
//     .then(res => {
//       if (res.status === 200 && res.data && res.data.universities) {
//         res.data.universities.forEach(uni => {
//           const logo = document.createElement("a");
//           logo.href = uni.univeristy_url; 
//           logo.target = "_blank";
//           logo.innerHTML = `<img src="${uni.universities_logo}" alt="${uni.University_name} Logo">`;
//           grid.appendChild(logo);
//         });
//       }
//     })
//     .catch(error => console.error("Error fetching logos:", error));
// });
(async () => {
  let ip = sessionStorage.getItem('ip_address');

  if (!ip) {
    const res = await fetch('https://api.ipify.org?format=json');
    const data = await res.json();
    ip = data.ip;
    sessionStorage.setItem('ip_address', ip);
  }

  let locationData = sessionStorage.getItem('location_data');

  if (!locationData) {
    const locRes = await fetch(`https://ipapi.co/${ip}/json/`);
    const locJson = await locRes.json();

    sessionStorage.setItem('location_data', JSON.stringify(locJson));
    locationData = JSON.stringify(locJson);
  }

  const loc = JSON.parse(locationData);

  // Convert object → readable string
  const locationString = `${loc.city || ""}, ${loc.region || ""}, ${loc.country_name || loc.country || ""}`;

  const campaign_name =
    new URLSearchParams(location.search).get('campaign_name') ||
    location.hostname;

  const page_id = '1';
  const by_id = '1';

  fetch('https://api.collegeall.com/api/v1/click-log', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      ip_address: ip,
      campaign_name,
      by_id,
      page_id,
      location: locationString   // ✔ send as string
    })
  });
})();






document.addEventListener('DOMContentLoaded', () => {
  const section = document.querySelector('.faq-section');
  if (!section) return;

  const items = section.querySelectorAll('.faq-item');
  items.forEach((item, i) => {
    const btn = item.querySelector('.faq-question');
    const ans = item.querySelector('.faq-answer');
    if (!btn || !ans) return;

    // Ensure unique IDs & ARIA wiring
    if (!btn.id) btn.id = `faq-question-${i}`;
    ans.id = ans.id || `faq-answer-${i}`;
    btn.setAttribute('aria-controls', ans.id);
    btn.setAttribute('aria-expanded', 'false');
    ans.setAttribute('role', 'region');
    ans.setAttribute('aria-labelledby', btn.id);

    // Start collapsed
    ans.style.maxHeight = '0px';
  });

  const accordionMode = true; // set to false to allow multiple open

  // Event delegation for reliability
  section.addEventListener('click', (e) => {
    const btn = e.target.closest('.faq-question');
    if (!btn || !section.contains(btn)) return;

    const item = btn.closest('.faq-item');
    const ans = item.querySelector('.faq-answer');
    const isOpen = item.classList.contains('active');

    // Close others if accordion mode
    if (accordionMode) {
      section.querySelectorAll('.faq-item.active').forEach((openItem) => {
        if (openItem !== item) {
          openItem.classList.remove('active');
          const a = openItem.querySelector('.faq-answer');
          const q = openItem.querySelector('.faq-question');
          if (a) a.style.maxHeight = '0px';
          if (q) q.setAttribute('aria-expanded', 'false');
        }
      });
    }

    // Toggle current
    item.classList.toggle('active');
    if (!isOpen) {
      ans.style.maxHeight = ans.scrollHeight + 'px';
      btn.setAttribute('aria-expanded', 'true');
    } else {
      ans.style.maxHeight = '0px';
      btn.setAttribute('aria-expanded', 'false');
    }
  });

  window.addEventListener('resize', () => {
    section.querySelectorAll('.faq-item.active .faq-answer').forEach((ans) => {
      ans.style.maxHeight = ans.scrollHeight + 'px';
    });
  });
});


function toggleMenu() {
  const menu = document.getElementById("authMenu");
  menu.classList.toggle("show");
}
let allCourses = [];
let visibleCourses = 10;

function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
  return array;
}

async function loadCourses() {
  try {
    const response = await fetch("https://api.collegeall.com/api/v1/topcourse", {
      method: "POST",
      headers: { "Content-Type": "application/json" }
    });

    const result = await response.json();

    allCourses = shuffle(result.data.universities);

    const universities = [...new Set(
      allCourses
        .map(c => c.University_name?.trim())
        .filter(Boolean)
    )];

    const uniSelect = document.getElementById("filter-university");

    uniSelect.innerHTML = `<option value="">All Universities</option>`;

    // ✅ Sort alphabetically for neatness
    universities.sort((a, b) => a.localeCompare(b)).forEach(u => {
      const opt = document.createElement("option");
      opt.value = u.trim();
      opt.textContent = u;
      uniSelect.appendChild(opt);
    });


    renderCourses();
  } catch (error) {
    console.error("Error fetching courses:", error);
    document.getElementById("courses-grid").innerHTML = "<p>⚠️ Failed to load courses.</p>";
  }
}

function renderCourses() {
  const degreeFilter = document.getElementById("filter-degree").value.trim().toLowerCase();
  const levelFilter = document.getElementById("filter-level").value.trim().toLowerCase();
  const uniFilter = document.getElementById("filter-university").value.trim().toLowerCase();

  // Show loading state
  document.getElementById("courses-grid").innerHTML = `
        <div class="courses-loading">
            <i class="fas fa-spinner"></i> Loading courses...
        </div>
    `;

  // Simulate API delay for better UX
  setTimeout(() => {
    let filtered = allCourses.filter(course => {
      return (!degreeFilter || course.degree?.toLowerCase().includes(degreeFilter)) &&
        (!levelFilter || course.course_level?.toLowerCase().includes(levelFilter)) &&
        (!uniFilter || course.University_name?.toLowerCase().includes(uniFilter));
    });

    let coursesHTML = "";

    if (filtered.length === 0) {
      coursesHTML = `
                <div class="courses-empty">
                    <i class="fas fa-search"></i>
                    <h3>No courses found</h3>
                    <p>Try adjusting your filters to see more results</p>
                </div>
            `;
    } else {
      filtered.slice(0, visibleCourses).forEach(course => {
        const levelBadge = course.course_level === 'UG' ? 'Undergraduate' :
          course.course_level === 'PG' ? 'Postgraduate' : course.course_level;

        coursesHTML += `
                         <div class="course-card">
                            <img src="${course.universities_logo}" alt="${course.University_name}" class="logo">
                            <h3>${course.degree} in ${course.course_name}</h3>
                            <p><strong>${course.University_name}</strong></p>
                            <p class="course-meta">Level: ${course.course_level} | Duration: ${course.years} years</p>
                            <p class="course-meta">Fee: ${course.fee.toLocaleString()}</p>
                            <a href="./${course.url}">View Course →</a>
                        </div>
                `;
      });
    }

    document.getElementById("courses-grid").innerHTML = coursesHTML;

    // Update load more button
    const loadMoreBtn = document.getElementById("load-more");
    if (filtered.length > visibleCourses) {
      loadMoreBtn.style.display = "inline-block";
      loadMoreBtn.innerHTML = `<i class="fas fa-plus"></i> Load More (${filtered.length - visibleCourses} remaining)`;
    } else {
      loadMoreBtn.style.display = "none";
    }

  }, 500);
}

// Add event listeners for real-time filtering
document.getElementById("filter-degree").addEventListener("change", renderCourses);
document.getElementById("filter-level").addEventListener("change", renderCourses);
document.getElementById("filter-university").addEventListener("change", renderCourses);

// Load more functionality
document.getElementById("load-more").addEventListener("click", function () {
  visibleCourses += 6;
  renderCourses();
});


document.getElementById("filter-degree").addEventListener("change", () => {
  visibleCourses = 10;
  renderCourses();
});
document.getElementById("filter-level").addEventListener("change", () => {
  visibleCourses = 10;
  renderCourses();
});
document.getElementById("filter-university").addEventListener("change", () => {
  visibleCourses = 10;
  renderCourses();
});
document.getElementById("load-more").addEventListener("click", () => {
  visibleCourses += 10;
  renderCourses();
});

// Initial load
loadCourses();


//University

async function fetchUniversities() {
  const grid = document.getElementById("universities-grid");
  const dropdown = document.getElementById("filter-university");

  grid.innerHTML = `<div class="universities-loading">Loading universities...</div>`;

  try {
    const response = await fetch("https://api.collegeall.com/api/v1/all-universities");
    const data = await response.json();

    if (data.status === 200 && data.data?.universities) {
      const universities = data.data.universities;

      // Populate dropdown
      universities.forEach(univ => {
        const option = document.createElement("option");
        option.value = univ.id;
        option.textContent = univ.University_name;
        dropdown.appendChild(option);
      });

      // Build grid
      grid.innerHTML = universities
        .map(
          univ => `
        <div class="university-card">
          <div class="card-img">
            <img src="${univ.banner_compressed}" alt="${univ.University_name}">
          </div>
          <div class="card-body">
            <h3>${univ.University_name}</h3>
            <p><strong>Average Fee:</strong> ${univ.average_fee || "N/A"}</p>
            <p><strong>Courses:</strong> ${univ.sample_courses || "N/A"}</p>
            <a href="${univ.univeristy_url}" class="btn text-white">View Courses →</a>
          </div>
        </div>`
        )
        .join("");
    } else {
      grid.innerHTML = `<div class="universities-empty"><i>🏫</i><h3>No universities found</h3></div>`;
    }
  } catch (err) {
    console.error("Error fetching universities:", err);
    grid.innerHTML = `<div class="universities-empty"><i>⚠️</i><h3>Failed to load universities</h3></div>`;
  }
}

fetchUniversities();



const oneWeekCourses = [
  // Old courses (IDs 1-3)
  {
    id: 1,
    category: "Web Development",
    title: "The Complete Web Development Bootcamp",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 5,
    reviews: "2,354",
    url: "https://collegeall.com/one-week-online-courses/courses/web-development/web-development-bootcamp/",
    price: 499,
    oldPrice: 2499,
    tag: "Bestseller",
    img: "https://collegeall.com/one-week-online-courses/img/web-development.webp"
  },
  {
    id: 2,
    category: "Digital Marketing",
    title: "Master Digital Marketing in 7 Days",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.3,
    reviews: "1,892",
    url: "https://collegeall.com/one-week-online-courses/courses/digital-marketing/master-digital-marketing/",
    price: 499,
    oldPrice: 1999,
    tag: "Popular",
    img: "https://collegeall.com/one-week-online-courses/img/digital-marketing.jpg"
  },
  {
    id: 3,
    category: "Data Analysis",
    title: "Data Analysis with Excel & Python",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.6,
    reviews: "1,940",
    url: "https://collegeall.com/one-week-online-courses/courses/data-analysis/data-analysis-with-excel-python/",
    price: 499,
    oldPrice: 2099,
    tag: "Trending",
    img: "https://collegeall.com/one-week-online-courses/img/excel.webp"
  },
  {
    id: 4,
    category: "Web Development",
    title: "HTML Crash Course: Build the Structure of the Web",
    price: 499,
    oldPrice: 1999,
    description: "Learn how to craft the backbone of every website using HTML5.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "2,373",
    url: "https://collegeall.com/one-week-online-courses/courses/web-development/html-crash-course/",
    img: "https://collegeall.com/one-week-online-courses/img/html.webp",
    tag: "New",
    learn: [
      "Page structure & elements",
      "Semantic HTML",
      "Forms & inputs",
      "SEO-friendly markup"
    ]
  },
  {
    id: 5,
    category: "Web Development",
    title: "CSS Mastery: Design Beautiful, Responsive Websites",
    price: 499,
    oldPrice: 1999,
    description: "Create modern, responsive, and visually stunning web pages using CSS3.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "1,750",
    url: "https://collegeall.com/one-week-online-courses/courses/web-development/css-mastery-responsive-websites/",
    img: "https://collegeall.com/one-week-online-courses/img/CSS-mastery.webp",
    tag: "New",
    learn: [
      "Flexbox & Grid systems",
      "Responsive layouts",
      "Animations & transitions",
      "UI/UX design principles"
    ]
  },
  {
    id: 6,
    category: "Web Development",
    title: "JavaScript for Beginners: Make Your Websites Come Alive",
    price: 499,
    oldPrice: 1999,
    description: "Bring your websites to life with JavaScript — the language of interactivity.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 5,
    reviews: "2,230",
    url: "https://collegeall.com/one-week-online-courses/courses/web-development/javascript-for-beginners/",
    img: "https://collegeall.com/one-week-online-courses/img/js.webp",
    tag: "New",
    learn: [
      "Core syntax & logic",
      "DOM manipulation",
      "Events & API integration",
      "Building mini projects"
    ]
  },
  {
    id: 7,
    category: "Web Development",
    title: "React JS Bootcamp: Create Dynamic Frontend Applications",
    price: 499,
    oldPrice: 2499,
    description: "Build fast, component-based applications using React — the industry standard.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "2.023",
    url: "https://collegeall.com/one-week-online-courses/courses/web-development/react-js-bootcamp/",
    img: "https://collegeall.com/one-week-online-courses/img/react-bootcamp.webp",
    tag: "New",
    learn: [
      "Components & props",
      "Hooks & state management",
      "Routing & APIs",
      "Complete React projects"
    ]
  },
  {
    id: 8,
    category: "Backend Development",
    title: "Express JS Fundamentals: Build Fast & Scalable APIs",
    price: 499,
    oldPrice: 1999,
    description: "Master backend development with Express.js — the framework powering modern web servers.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "1,621",
    url: "https://collegeall.com/one-week-online-courses/courses/backend-development/express-js-fundamentals/",
    img: "https://collegeall.com/one-week-online-courses/img/rest-api-in-nodejs.webp",
    tag: "New",
    learn: [
      "Setting up Express servers",
      "RESTful API development",
      "Middleware & routing",
      "Connecting with databases"
    ]
  },
  {
    id: 9,
    category: "Backend Development",
    title: "MySQL Fundamentals: Master Databases and SQL Queries",
    price: 499,
    oldPrice: 1999,
    description: "Understand database logic and manage data efficiently using SQL.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "1,803",
    url: "https://collegeall.com/one-week-online-courses/courses/backend-development/mysql-fundamentals/",
    img: "https://collegeall.com/one-week-online-courses/img/MySQL-fundamentals.webp",
    tag: "New",
    learn: [
      "Database design & relationships",
      "CRUD operations",
      "Joins & indexing",
      "Data security basics"
    ]
  },
  {
    id: 10,
    category: "Backend & Hosting",
    title: "AWS Hosting Masterclass: Deploy and Manage Cloud Applications",
    price: 499,
    oldPrice: 1999,
    description: "Deploy and scale web apps using AWS like a professional.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "1,203",
    url: "https://collegeall.com/one-week-online-courses/courses/backend-and-hosting/aws-hosting-masterclass/",
    img: "https://collegeall.com/one-week-online-courses/img/hosting.webp",
    tag: "New",
    learn: [
      "EC2 setup",
      "S3 & Route 53",
      "SSL certificates",
      "Cloud deployment workflow"
    ]
  },
  {
    id: 11,
    category: "Backend & Hosting",
    title: "Domain & Server Setup Made Easy: Go Live Like a Pro",
    price: 499,
    oldPrice: 1999,
    description: "From domain purchase to live website launch — learn the complete process.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "1,302",
    url: "https://collegeall.com/one-week-online-courses/courses/backend-and-hosting/domain-server-setup-made-easy/",
    img: "https://collegeall.com/one-week-online-courses/img/dns.webp",
    tag: "New",
    learn: [
      "DNS & record types",
      "Hosting setup",
      "SSL & HTTPS",
      "Troubleshooting live servers"
    ]
  },
  {
    id: 12,
    category: "Digital Marketing",
    title: "Digital Marketing Mastery: Build Brands and Drive Sales Online",
    price: 499,
    oldPrice: 1999,
    description: "Become a digital strategist — attract, engage, and convert customers online.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.3,
    reviews: "1,287",
    url: "https://collegeall.com/one-week-online-courses/courses/digital-marketing/digital-marketing-mastery/",
    img: "https://collegeall.com/one-week-online-courses/img/digital-marketing-sales.webp",
    tag: "New",
    learn: [
      "Marketing funnels",
      "Social media strategy",
      "Email & content marketing",
      "Conversion optimization"
    ]
  },
  {
    id: 13,
    category: "Digital Marketing",
    title: "SEO Growth Formula: Rank #1 on Google Organically",
    price: 499,
    oldPrice: 1999,
    description: "Get found online — master SEO techniques to drive consistent traffic.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "1,331",
    url: "https://collegeall.com/one-week-online-courses/courses/digital-marketing/seo-growth-formula/",
    img: "https://collegeall.com/one-week-online-courses/img/seo.webp",
    tag: "New",
    learn: [
      "Keyword research",
      "On-page & off-page SEO",
      "Technical SEO setup",
      "Backlink strategies"
    ]
  },
  {
    id: 14,
    category: "Digital Marketing",
    title: "Google Tools Power Pack: Analytics & Search Console Explained",
    price: 499,
    oldPrice: 1999,
    description: "Understand your audience and improve performance using Google’s core tools.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "1,305",
    url: "https://collegeall.com/one-week-online-courses/courses/digital-marketing/google-tools-power-pack/",
    img: "https://collegeall.com/one-week-online-courses/img/google-analysis.webp",
    tag: "New",
    learn: [
      "Analytics setup",
      "User behavior tracking",
      "Search Console insights",
      "Data-driven SEO"
    ]
  },
  {
    id: 15,
    category: "Digital Marketing",
    title: "Google Ads Blueprint: Create High-Converting Ad Campaigns",
    price: 499,
    oldPrice: 1999,
    description: "Plan, build, and optimize paid search campaigns that actually convert.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.8,
    reviews: "2,012",
    url: "https://collegeall.com/one-week-online-courses/courses/digital-marketing/google-ads-blueprint/",
    img: "https://collegeall.com/one-week-online-courses/img/google-ads.webp",
    tag: "New",
    learn: [
      "Keyword targeting",
      "Campaign management",
      "Bidding & budgeting",
      "Performance optimization"
    ]
  },
  {
    id: 16,
    category: "Digital Marketing",
    title: "Meta Ads Mastery: Run Profitable Facebook & Instagram Campaigns",
    price: 499,
    oldPrice: 1999,
    description: "Dominate social media ads with laser-targeted Facebook and Instagram campaigns.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.3,
    reviews: "1,464",
    url: "https://collegeall.com/one-week-online-courses/courses/digital-marketing/meta-ads-mastery/",
    img: "https://collegeall.com/one-week-online-courses/img/meta-ads.webp",
    tag: "New",
    learn: [
      "Business Manager setup",
      "Targeting strategies",
      "Creative optimization",
      "Analytics & retargeting"
    ]
  },
  {
    id: 17,
    category: "Business Tools",
    title: "CRM Integration Simplified: Automate Your Lead Management",
    price: 499,
    oldPrice: 1999,
    description: "Streamline sales and marketing through smart CRM integrations.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "1,070",
    url: "https://collegeall.com/one-week-online-courses/courses/business-tools/crm-integration-simplified/",
    img: "https://collegeall.com/one-week-online-courses/img/crm-automation.webp",
    tag: "New",
    learn: [
      "CRM workflow setup",
      "Lead automation",
      "Website integrations",
      "Sales pipeline management"
    ]
  },
  {
    id: 18,
    category: "Data Management",
    title: "Data Management Pro: Organize, Track & Automate Business Data",
    price: 499,
    oldPrice: 1999,
    description: "Manage and organize your business data like a professional analyst.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.3,
    reviews: "1,360",
    url: "https://collegeall.com/one-week-online-courses/courses/data-management/data-management-pro/",
    img: "https://collegeall.com/one-week-online-courses/img/data-management.webp",
    tag: "New",
    learn: [
      "Data structuring",
      "Workflow automation",
      "Integration with tools",
      "Data visualization basics"
    ]
  },
  {
    id: 19,
    category: "Data Management",
    title: "Excel Power Skills: From Basics to Business Dashboards",
    price: 499,
    oldPrice: 1999,
    description: "Analyze, visualize, and automate data using Excel — from beginner to pro level.",
    instructor: "CollegeAll Certified | 1 Week Program",
    rating: 4.5,
    reviews: "1,254",
    url: "https://collegeall.com/one-week-online-courses/courses/data-management/excel-power-skills/",
    img: "https://collegeall.com/one-week-online-courses/img/excel-business-dashboard.webp",
    tag: "New",
    learn: [
      "Advanced formulas",
      "Pivot tables & charts",
      "Dashboard creation",
      "Data automation tricks"
    ]
  }
];

function getRandomCourses(arr, count = 4) {
  const shuffled = arr.sort(() => 0.5 - Math.random());
  return shuffled.slice(0, count);
}

function generateStars(rating) {
  let full = Math.floor(rating);
  let half = rating % 1 >= 0.5 ? 1 : 0;
  let html = '';
  for (let i = 0; i < full; i++) html += '<i class="bi bi-star-fill text-warning"></i>';
  if (half) html += '<i class="bi bi-star-half text-warning"></i>';
  for (let i = full + half; i < 5; i++) html += '<i class="bi bi-star text-warning"></i>';
  return html;
}

async function fetchOneWeekCorses() {
  const courseGrid = document.getElementById("oneWeekCourses-grid");

  courseGrid.innerHTML = `<div class="universities-loading">Loading Courses...</div>`;
  if (!courseGrid) return console.error("Element #oneWeekCourses-grid not found");

  courseGrid.innerHTML = `<div class="universities-loading">Loading Courses...</div>`;

  try {
    const randomCourses = getRandomCourses(oneWeekCourses, 4);

    courseGrid.innerHTML = randomCourses
      .map(
        course => `
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3 main-card">
              <div class="course-card">
                <img src="${course.img || 'https://via.placeholder.com/400x200'}" alt="${course.title}">
                  <div class="course-body">
                    <div class="course-title">${course.title}</div>
                    <div class="course-instructor">${course.instructor}</div>
                    <div class="rating">${generateStars(course.rating)} <span>${course.rating} (${course.reviews})</span></div>
                    <div class="price">₹${course.price} <del>₹${course.oldPrice}</del></div>
                    <div class="card-footer d-flex justify-content-between align-items-center mt-2">
                      <a class="tag btn" href=${course.url} target="_blank">Pay Now</a>
                      <a href=${course.url} target="_blank" class="know-more">Know More</a>
                    </div>
                  </div>
                </div>
            </div>
          `).join("");
  } catch (err) {
    console.error("Error fetching one week courses:", err);
    courseGrid.innerHTML = `<div class="universities-empty"><i>⚠️</i><h3>Failed to load one week courses</h3></div>`;
  }

}

fetchOneWeekCorses();

async function otpVerify() {
  const otpInput = document.getElementById("otpCode");
  const otpError = document.getElementById("otpError");
  const verifyBtn = document.getElementById("verifyOtpBtn");

  // Reset error display
  otpError.textContent = "";
  otpInput.classList.remove("is-invalid");

  const otpValue = otpInput.value.trim();
  const userId = sessionStorage.getItem("userId");

  // --- Validation ---
  if (!otpValue) {
    otpError.textContent = "❌ OTP is required.";
    otpInput.classList.add("is-invalid");
    return;
  }

  if (otpValue.length !== 4) {
    otpError.textContent = "⚠ Please enter 4 digits.";
    otpInput.classList.add("is-invalid");
    return;
  }

  if (!userId) {
    alert("User ID not found. Please restart the process.");
    return;
  }

  // --- Disable button temporarily ---
  verifyBtn.disabled = true;
  verifyBtn.textContent = "Verifying...";

  const payload = {
    user_id: userId,
    otp: otpValue
  };

  console.log("Verifying OTP with payload:", payload);

  try {
    const response = await fetch("https://api.collegeall.com/api/v1/verify-otp", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(payload)
    });

    const result = await response.json();
    console.log("OTP Verification Response:", result);

    // --- Handle API response ---
    // Example response: { "status":200, "error":false, "message":"Oops something went wrong" }
    const status = Number(result.status);
    const isError = result.error === true;
    const message = result.message ? result.message.trim() : "";

    if (status === 200) {
      // ✅ OTP verified successfully
      alert("✅ OTP Verified Successfully!");
      window.location.href = "https://collegeall.com/thank-you/";
    } else {
      // ❌ OTP failed or backend returned generic error
      otpError.textContent = message || "Invalid OTP. Please try again.";
      otpInput.classList.add("is-invalid");
    }
  } catch (error) {
    console.error("Error verifying OTP:", error);
    otpError.textContent = "⚠ Something went wrong while verifying OTP. Please try again.";
    otpInput.classList.add("is-invalid");
  } finally {
    // Always re-enable button
    verifyBtn.disabled = false;
    verifyBtn.textContent = "Verify OTP";
  }
}

