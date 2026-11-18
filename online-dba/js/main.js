(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('bg-primary shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('bg-primary shadow-sm').css('top', '-150px');
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 1000,
        dots: true,
        loop: true,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });
    
})(jQuery);

document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('#portfolio-flters button');
    const items = document.querySelectorAll('.portfolio-item');

    const defaultFilter = '.first';

    items.forEach(item => {
        if (item.classList.contains(defaultFilter.substring(1))) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            items.forEach(item => {
                if (filter === '*' || item.classList.contains(filter.substring(1))) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});


// Course List
const courses = [
  {
    img: "./img/ssbm.svg",
    alt: "SSBM",
    badge: "Popular",
    subtitle: "Swiss School of Business and Management",
    title: "Executive Doctor of Business Administration from SSBM",
    details: {
      degree: "Doctorate",
      duration: "36 Months",
      accreditation: "1:1 Thesis Supervision"
    },
    //buttonLink: "#"
  },
  {
    img: "./img/ESGCI.svg",
    alt: "ESGCI",
    badge: "",
    subtitle: "ESGCI, Paris",
    title: "Doctor of Business Administration (DBA)",
    details: {
      degree: "Doctorate",
      duration: "36 Months",
      accreditation: "1:1 Thesis Supervision"
    },
    //buttonLink: "#"
  },
  {
    img: "./img/GGU.svg",
    alt: "GGU",
    badge: "",
    subtitle: "Golden Gate University",
    title: "DBA in Emerging Technologies with Concentration in Generative AI",
    details: {
      degree: "Doctorate",
      duration: "36 Months",
      accreditation: "Specialization in Generative AI"
    },
    //buttonLink: "#"
  },
  {
    img: "./img/GGU.svg",
    alt: "GGU",
    badge: "",
    subtitle: "Golden Gate University",
    title: "Doctor of Business Administration (DBA)",
    details: {
      degree: "Doctorate",
      duration: "36 Months",
      accreditation: "1:1 Thesis Supervision"
    },
    //buttonLink: "#"
  },
  {
    img: "./img/Edgewood.svg",
    alt: "Edgewood University",
    badge: "",
    subtitle: "Edgewood University",
    title: "Edgewood DBA & MBA",
    details: {
      degree: "Doctorate",
      duration: "36 Months",
      accreditation: "100% Flexible Learning"
    },
    //buttonLink: "#"
  },
  {
    img: "./img/GGU.svg",
    alt: "GGU",
    badge: "",
    subtitle: "Golden Gate University",
    title: "Doctor of Business Administration (DBA) in Digital Leadership",
    details: {
      degree: "Doctorate",
      duration: "36 Months",
      accreditation: "For Leaders, By Leaders"
    },
    buttonText: "Get Details",
    //buttonLink: "#"
  },
];

const container = document.getElementById('courses-container');

courses.forEach(course => {
    const cardHTML = `
        <div class="col-md-4">
            <div class="card border rounded-3 shadow-sm h-100 specialization-card wow fadeIn">
                <div class="h-100">
                    <img src="${course.img}" class="card-img-top p-3" alt="${course.alt}">
                </div>
                <div class="position-absolute top-0 end-0 m-2 badge ${course.badge !== "" ? 'bg-primary' : 'bg-white'}">
                    ${course.badge}
                </div>
                <div class="card-body">
                    <small class="text-muted">${course.subtitle}</small>
                    <h6 class="fw-bold mt-1">${course.title}</h6>
                    <div class="badge bg-primary">
                        ${course.details.accreditation}
                    </div>
                    <p class="mb-2">
                        <i class="fas fa-graduation-cap me-1"></i> ${course.details.degree}<br>
                        <i class="fas fa-calendar-alt me-1"></i> ${course.details.duration}<br>
                    </p>
                    <button class="btn btn-primary w-100 fw-semibold" data-bs-toggle="modal" data-bs-target="#applyModal">Get Details</button>
                </div>
            </div>
        </div>
    `;
    container.insertAdjacentHTML('beforeend', cardHTML);
});

document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        loop: true,
        slidesPerView: "auto", 
        spaceBetween: 30,
        grabCursor: true,
        freeMode: true,
        freeModeMomentum: false,
        speed: 5000,
        autoplay: {
            delay: 0, 
            disableOnInteraction: false,
        },
        breakpoints: {
            320: { slidesPerView: 2 },
            640: { slidesPerView: 3 },
            992: { slidesPerView: 4 },
        },
    });

    new Swiper(".profile-swiper", {
        slidesPerView: 4,
        spaceBetween: 25,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: { slidesPerView: 1, spaceBetween: 15 },
            576: { slidesPerView: 2, spaceBetween: 20 },
            768: { slidesPerView: 3, spaceBetween: 20 },
            992: { slidesPerView: 4, spaceBetween: 25 },
        },
    });

    new Swiper(".companySwiper", {
        loop: true,
        slidesPerView: "auto", 
        spaceBetween: 50,
        grabCursor: true,
        freeMode: true,
        freeModeMomentum: true,
        speed: 10000,
        autoplay: {
            delay: 0, 
            disableOnInteraction: false,
        },
        breakpoints: {
            320: { slidesPerView: 2 },
            640: { slidesPerView: 3 },
            992: { slidesPerView: 4 },
        },
    });
});