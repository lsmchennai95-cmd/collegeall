// Tab functionality
document.addEventListener('DOMContentLoaded', function () {
  const tabButtons = document.querySelectorAll('.tab-btn');

  tabButtons.forEach(button => {
    button.addEventListener('click', function () {
      tabButtons.forEach(btn => btn.classList.remove('active'));

      this.classList.add('active');

    });
  });

  // Mobile menu toggle
  const mobileMenu = document.querySelector('.mobile-menu');
  const navLinks = document.querySelector('.nav-links');

  mobileMenu.addEventListener('click', function () {
    navLinks.classList.toggle('show');
  });

  // Add smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      const targetId = this.getAttribute('href');
      if (targetId === '#') return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: 'smooth'
        });
      }
    });
  });
});

// Tab functionality
document.addEventListener('DOMContentLoaded', function () {
  const tabLinks = document.querySelectorAll('.nav-link');
  const tabPanes = document.querySelectorAll('.tab-pane');

  tabLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      tabLinks.forEach(tab => tab.classList.remove('active'));
      tabPanes.forEach(pane => pane.classList.remove('show', 'active'));

      this.classList.add('active');

      const target = this.getAttribute('href');
      const targetPane = document.querySelector(target);
      if (targetPane) {
        targetPane.classList.add('show', 'active');
      }
    });
  });
});

const featuredArticles = [
  {
    type: "main",
    category: "MBA",
    title: "Is an Online MBA Programme Worth It for Working Professionals?",
    description:
      "Explore the benefits and challenges of pursuing an online MBA while working full-time. Learn how it can advance your career without interrupting your professional journey.",
    author: "Admission Team",
    date: "Aug 1, 2025",
    readTime: "5 min read",
    link: './online-mba-program/',
    image: "./assets/img/mba-blog-banner-1.webp",
  },
  {
    type: "side",
    category: "MBA",
    title: "Why Gen Z Is Choosing Online MBAs Over Traditional Ones",
    date: "Aug 1, 2025",
    link: "./gen-z-online-mba/",
    image: "./assets/img/mba-blog-banner-2.webp",
  },
  {
    type: "side",
    category: "CAREER",
    title: "Can an Online MBA Boost Your Salary Without Quitting Your Job?",
    date: "Sept 1, 2025",
    link: "./boost-your-salary/",
    image: "./assets/img/mba3.jpg",
  },
  {
    type: "side",
    category: "CAREER",
    title: "Why Choose Vignan's University Online MBA?",
    date: "Oct 1, 2025",
    link: "./vignan-university-online-mba/",
    image: "./assets/img/group-young-students-sitting-desks-classroom-working-laptops_1165063-3275.jpg",
  },
];

// dynamically build the section
const container = document.getElementById("featuredGrid");

const mainPost = featuredArticles.find((a) => a.type === "main");
const sidePosts = featuredArticles.filter((a) => a.type === "side");

container.innerHTML = `
            <div class="main-featured" onclick="window.location.href='${mainPost.link}'" style="cursor: pointer;">
                <div class="featured-image">
                <img src="${mainPost.image}" alt="${mainPost.title}">
                </div>
                <div class="featured-content">
                <span class="category">${mainPost.category}</span>
                <h2>${mainPost.title}</h2>
                <p>${mainPost.description}</p>
                <div class="meta">
                    <span><i class="far fa-user"></i> ${mainPost.author}</span>
                    <span><i class="far fa-calendar"></i> ${mainPost.date}</span>
                    <span><i class="far fa-clock"></i> ${mainPost.readTime}</span>
                </div>
                </div>
            </div>

            <div class="side-featured">
                ${sidePosts.map((p) => `
                    <div class="side-post" onclick="window.location.href='${p.link}'" style="cursor: pointer;">
                        <div class="side-image">
                            <img src="${p.image}" alt="${p.title}">
                        </div>
                        <div class="side-content">
                            <span class="category">${p.category}</span>
                            <h3>${p.title}</h3>
                            <div class="meta">
                                <span><i class="far fa-calendar"></i> ${p.date}</span>
                            </div>
                        </div>
                    </div>
                `).join("")}
            </div>
            `;

// Add Future Blogs list

const bottomContainer = document.getElementById("featuredGridBottom");
const newArticles = [
  {
    type: "side",
    category: "M.Com",
    title: "Why should i study the online M.Com General course at Kurukshetra University?",
    date: "Oct 17, 2025",
    link: "./online-mcom-general-kurukshetra-university-ugc-approved-postgraduate-degree/",
    image:
      "./assets/img/mix-raced-trainees-working-computer-public-library_926199-1970297.jpg",
  },
  {
    type: "side",
    category: "MBA",
    title: "MBA in International Finance (Accredited by ACCA UK) Jain University",
    date: "Oct 17, 2025",
    link: "./mba-in-international-finance-accredited-by-acca-uk-jain-university-online/",
    image:
      "./assets/img/hispanic-young-woman-with-headphones-coding-software-app-computer-home_926199-2321544.jpg",
  },
  {
    type: "side",
    category: "MBA",
    title: "Why should i study the online MBA in Project Management course at Jain University?",
    date: "Oct 17, 2025",
    link: "./upgrade-your-skills-with-online-mba-in-project-management/",
    image:
      "./assets/img/group-young-students-sitting-desks-classroom-working-laptops_1165063-3275.jpg",
  },
];

// Function to render side posts dynamically into any container
function renderSidePosts(container, articles) {
  const html = articles
    .map(
      (p) => `
      <div class="bottom-feature col-md-4 mb-4" onclick="window.location.href='${p.link}'">
        <div class="side-post">
            <div class="side-image">
                <img src="${p.image}" alt="${p.title}">
            </div>
            <div class="side-content">
                <span class="category">${p.category}</span>
                <h3>${p.title}</h3>
                <div class="meta">
                <span><i class="far fa-calendar"></i> ${p.date}</span>
                </div>
            </div>
        </div>
      </div>
      `
    )
    .join("");

  container.innerHTML += html;
}

// Render new articles
renderSidePosts(bottomContainer, newArticles);


