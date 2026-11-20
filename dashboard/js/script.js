const appConfig = window.APP_CONFIG || { appUrl: 'https://collegeall.com', apiBaseUrl: 'https://api.collegeall.com' };
// Global Course Manager for synchronization between sections
class GlobalCourseManager {
    constructor() {
        this.courses = [];
        this.currentIndex = 0;
        this.listeners = new Set();
    }

    setCourses(courses) {
        this.courses = courses || [];
        this.currentIndex = 0;
        this.notifyListeners();
    }

    setCurrentIndex(index) {
        if (index >= 0 && index < this.courses.length) {
            this.currentIndex = index;
            this.notifyListeners();
        }
    }

    getCurrentCourse() {
        return this.courses[this.currentIndex] || null;
    }

    addListener(callback) {
        this.listeners.add(callback);
    }

    removeListener(callback) {
        this.listeners.delete(callback);
    }

    notifyListeners() {
        this.listeners.forEach(callback => {
            callback(this.getCurrentCourse(), this.currentIndex, this.courses);
        });
    }

    nextCourse() {
        if (this.currentIndex < this.courses.length - 1) {
            this.currentIndex++;
            this.notifyListeners();
            return true;
        }
        return false;
    }

    prevCourse() {
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.notifyListeners();
            return true;
        }
        return false;
    }
}

// Initialize global course manager
window.globalCourseManager = new GlobalCourseManager();

// Token validation function
function validateToken() {
    const token = localStorage.getItem('authToken');
    if (!token) {
        window.location.href = (appConfig.appUrl || "https://collegeall.com").replace(/\/+$/, "") + "/signin/";
        return false;
    }
    return true;
}

// Dashboard Main JavaScript File
class Dashboard {
    constructor() {
        // Validate token before initializing
        if (!validateToken()) {
            return;
        }

        this.currentSection = 'courses-selected';
        this.courseData = null;
        this.userData = null;
        this.selectedCourse = null;
        this.universityMap = new Map();
        this.courseMap = new Map();

        this.init();
    }

    init() {
        this.setupEventListeners();
        this.loadInitialData();
        this.showSection(this.currentSection);
    }

    setupEventListeners() {
        // Navigation links
        document.querySelectorAll('.nav-link[data-section]').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const sectionId = link.getAttribute('data-section');
                if (!sectionId) return;
                this.showSection(sectionId);
                this.updateActiveNav(link);
            });
        });

        // Course Modal opener
        const openModalBtn = document.getElementById('openModalBtn');
        if (openModalBtn) {
            openModalBtn.addEventListener('click', () => {
                this.openCourseModal();
            });
        }

        // University selection
        const universityList = document.getElementById('universityList');
        if (universityList) {
            universityList.addEventListener('click', (e) => {
                const anchor = e.target.closest('a[data-id]');
                if (!anchor) return;
                e.preventDefault();
                const universityId = anchor.getAttribute('data-id');
                const uniName = anchor.getAttribute('data-name') || anchor.textContent.trim();
                this.selectUniversity(universityId, uniName);
            });
        }

        // Course selection
        const courseSelect = document.getElementById('courseSelect');
        if (courseSelect) {
            courseSelect.addEventListener('change', (e) => {
                this.showCourseDetails();
            });
        }

        // Save Course
        const saveCourseBtn = document.getElementById('saveCourse');
        if (saveCourseBtn) {
            saveCourseBtn.addEventListener('click', () => this.saveCourseSelection());
        }

        // View details buttons
        document.getElementById('course-cards')?.addEventListener('click', (e) => {
            const btn = e.target.closest('button[data-course-id]');
            if (!btn) return;
            const id = btn.getAttribute('data-course-id');
            if (id) this.viewCourseDetails(id);
        });
    }

    showSection(sectionId) {
        document.querySelectorAll('.content-section').forEach(section => {
            section.classList.add('d-none');
        });

        const targetSection = document.getElementById(sectionId);
        if (targetSection) {
            targetSection.classList.remove('d-none');
            this.currentSection = sectionId;
            
            window.dispatchEvent(new CustomEvent('sectionChanged', {
                detail: { section: sectionId }
            }));

            this.loadSectionData(sectionId);
        }
    }

    updateActiveNav(activeLink) {
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
        });
        if (activeLink) activeLink.classList.add('active');
    }

    async loadInitialData() {
        try {
            await this.loadUserData();
            await this.loadCourseData();
            this.updateUI();
        } catch (error) {
            console.error('Error loading initial data:', error);
            this.showError('Failed to load dashboard data');
        }
    }

    async loadUserData() {
        if (!validateToken()) return;

        const token = localStorage.getItem('authToken');
        if (!token) {
            this.userData = null;
            return;
        }

        try {
            const myHeaders = new Headers();
            myHeaders.append("authtoken", token);

            const response = await fetch((appConfig.apiBaseUrl || "https://api.collegeall.com") + "/api/v1/getuser-details/", {
                method: "GET",
                headers: myHeaders,
                redirect: "follow"
            });

            if (!response.ok) {
                if (response.status === 401 || response.status === 403) {
                    this.handleUnauthorized();
                    return;
                }
                console.warn('getuser-details responded with', response.status);
                this.userData = null;
                return;
            }

            const result = await response.json();
            const datain = result?.data?.userdetails?.[0] || null;
            if (datain) {
                this.userData = datain;
                try { sessionStorage.setItem('user_details', JSON.stringify(datain)); } catch (e) { }
            } else {
                this.userData = null;
            }
        } catch (err) {
            console.error('Error in loadUserData:', err);
            this.userData = null;
        }
    }

    async loadCourseData() {
        if (!validateToken()) return;

        const token = localStorage.getItem('authToken');
        if (!token) {
            this.courseData = [];
            window.globalCourseManager.setCourses([]);
            return;
        }

        try {
            const response = await fetch((appConfig.apiBaseUrl || "https://api.collegeall.com") + "/api/v1/getcourse-details", {
                method: "GET",
                headers: { "authtoken": token }
            });

            if (!response.ok) {
                if (response.status === 401 || response.status === 403) {
                    this.handleUnauthorized();
                    return;
                }
                console.warn('getcourse-details responded with', response.status);
                this.courseData = [];
                window.globalCourseManager.setCourses([]);
                return;
            }

            const data = await response.json();
            let courseDetails = [];
            
            if (Array.isArray(data?.data?.courseDetails)) {
                courseDetails = data.data.courseDetails;
            }

            this.courseData = courseDetails || [];
            window.globalCourseManager.setCourses(this.courseData);

            this.courseMap.clear();
            this.courseData.forEach(c => {
                const id = c?.id ?? c?.course_id ?? c?.uni_id ?? Math.random().toString(36).slice(2, 9);
                this.courseMap.set(String(id), c);
            });

        } catch (err) {
            console.error('Error loading course data:', err);
            this.courseData = [];
            window.globalCourseManager.setCourses([]);
            this.courseMap.clear();
        }
    }

    handleUnauthorized() {
        localStorage.removeItem('authToken');
        sessionStorage.removeItem('user_details');
        window.location.href = (appConfig.appUrl || "https://collegeall.com").replace(/\/+$/, "") + "/signin/";
    }

    updateUI() {
        this.updateCourseCards();
        this.updateUserDetails();
    }

    updateCourseCards() {
        const container = document.getElementById('course-cards');
        if (!container) return;

        if (!this.courseData || this.courseData.length === 0) {
            container.innerHTML = this.getNoCourseHTML();
            return;
        }

        container.innerHTML = this.courseData.map(course => this.getCourseCardHTML(course)).join('');
    }

    getCourseCardHTML(course) {
        const startOn = course.course_start_on || course.start_date || course.start || '';
        const endOn = course.course_end_on || course.end_date || course.end || '';
        const progressPercent = Math.round(this.calculateProgress(startOn, endOn));
        const paymentPercent = course.total_fee ? Math.round((parseInt(course.paid_payment || 0) / parseInt(course.total_fee || course.fee || 1)) * 100) : 0;
        const id = course.id ?? course.course_id ?? '';

        return `
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="card course-card h-100">
                    <div class="d-flex justify-content-center align-items-center mb-2 p-2 gap-2">
                        <img src="${course.universities_logo || ''}" class="card-img-top course-image" alt="${course.university_name || ''}">
                        <h5 class="card-title text-primary">${course.course_name || ''}</h5>
                        <span class="badge bg-primary">${course.course_level || ''}</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle text-muted mb-3">${course.university_name || ''}</h6>
                        
                        <div class="course-info mb-3">
                            <div class="row text-center">
                                <div class="col-4">
                                    <small class="text-muted">Duration</small>
                                    <div class="fw-bold">${course.years || 'N/A'} Years</div>
                                </div>
                                <div class="col-4">
                                    <small class="text-muted">Fee</small>
                                    <div class="fw-bold">₹${this.formatNumber(course.fee || course.total_fee || 0)}</div>
                                </div>
                                <div class="col-4">
                                    <small class="text-muted">Rating</small>
                                    <div class="fw-bold">${course.rating ?? 'N/A'} ★</div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-muted">Course Progress</small>
                                <small class="text-muted">${progressPercent}%</small>
                            </div>
                            <div class="progress course-progress">
                                <div class="progress-bar bg-info" style="width: ${progressPercent}%"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-muted">Payment Progress</small>
                                <small class="text-muted">${paymentPercent}%</small>
                            </div>
                            <div class="progress course-progress">
                                <div class="progress-bar bg-success" style="width: ${paymentPercent}%"></div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-success fw-bold">₹${this.formatNumber(course.paid_payment || 0)} Paid</span>
                            <button class="btn btn-outline-primary btn-sm" data-course-id="${id}">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    getNoCourseHTML() {
        return `
            <div class="col-12">
                <div class="card border-dashed">
                    <div class="card-body text-center py-5">
                        <div class="add-icon mb-3">
                            <i class="fas fa-book-open fa-2x"></i>
                        </div>
                        <h4 class="text-primary mb-3">No Courses Enrolled</h4>
                        <p class="text-muted mb-4">You haven't enrolled in any courses yet. Start your learning journey today!</p>
                        <button class="btn btn-primary btn-lg" id="openModalBtn">
                            <i class="fas fa-plus me-2"></i>Enroll in a Course
                        </button>
                    </div>
                </div>
            </div>
        `;
    }

    updateUserDetails() {
        if (!this.userData) return;

        const nameEl = document.getElementById('name');
        const fullNameEl = document.getElementById('fullName');
        const dobEl = document.getElementById('dob');
        const emailEl = document.getElementById('email');
        const phoneEl = document.getElementById('phone');
        const addressEl = document.getElementById('address');

        if (nameEl) nameEl.textContent = this.userData.user_name || '';
        if (fullNameEl) fullNameEl.textContent = this.userData.user_name || '';
        if (dobEl) dobEl.textContent = this.formatDate(this.userData.dob);
        if (emailEl) emailEl.textContent = this.userData.email || '';
        if (phoneEl) phoneEl.textContent = `+${this.userData.phone_code || ''} ${this.userData.phone || ''}`;
        if (addressEl) addressEl.textContent = `${this.userData.city || ''}${this.userData.city ? ', ' : ''}${this.userData.state || ''}${this.userData.state ? ', ' : ''}${this.userData.country || ''}`;
    }

    calculateProgress(startDate, endDate) {
        try {
            const start = new Date(startDate);
            const end = new Date(endDate);
            const today = new Date();

            const totalDuration = end - start;
            const elapsed = today - start;

            if (!isFinite(totalDuration) || totalDuration <= 0) return 0;

            const percent = (elapsed / totalDuration) * 100;
            return Math.min(Math.max(percent, 0), 100);
        } catch (e) {
            return 0;
        }
    }

    formatNumber(num) {
        const val = parseInt(num || 0, 10) || 0;
        return val.toLocaleString('en-IN');
    }

    formatDate(dateString) {
        if (!dateString) return 'N/A';
        try {
            return new Date(dateString).toLocaleDateString('en-IN', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        } catch (e) {
            return dateString;
        }
    }

    openCourseModal() {
        if (!validateToken()) return;

        this.loadUniversities().then(() => {
            try {
                const modal = new bootstrap.Modal(document.getElementById('courseModal'));
                modal.show();
            } catch (e) {
                const modalEl = document.getElementById('courseModal');
                if (modalEl) modalEl.style.display = 'flex';
            }
        });
    }

    async loadUniversities() {
        try {
            const response = await fetch((appConfig.apiBaseUrl || "https://api.collegeall.com") + "/api/v1/all-universities");
            const result = await response.json();
            const universities = result?.data?.universities || [];

            this.universityMap.clear();
            universities.forEach(u => this.universityMap.set(String(u.id), u.University_name));

            const universityList = document.getElementById('universityList');
            if (!universityList) return;

            universityList.innerHTML = universities.map(uni => `
                <li>
                    <a class="dropdown-item university-select" href="#" data-id="${uni.id}" data-name="${uni.University_name}">
                        <img src="${uni.universities_logo || ''}" alt="${uni.University_name}" class="me-2" style="width: 22px;">
                        ${uni.University_name}
                    </a>
                </li>
            `).join('');
        } catch (error) {
            console.error("Error loading universities:", error);
            this.showError('Failed to load universities');
        }
    }

    selectUniversity(universityId, universityName) {
        if (!universityId) return;
        const toggle = document.getElementById('universityDropdown');
        if (toggle) {
            toggle.textContent = universityName || this.universityMap.get(String(universityId)) || 'Selected University';
            toggle.dataset.id = universityId;
        }
        this.loadCourses(universityId);
    }

    async loadCourses(universityId) {
        try {
            const courseSelect = document.getElementById('courseSelect');
            if (!courseSelect) return;

            courseSelect.innerHTML = '<option value="">-- Select Course --</option>';
            courseSelect.disabled = true;
            this.courseMap.clear();

            const response = await fetch((appConfig.apiBaseUrl || "https://api.collegeall.com") + "/api/v1/get-courses", {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ uni_id: universityId })
            });

            const result = await response.json();
            const courses = result?.data?.universities || result?.data || [];

            if (Array.isArray(courses) && courses.length) {
                courses.forEach(course => {
                    const option = document.createElement('option');
                    option.value = course.id;
                    option.textContent = (course.degree ? course.degree + ' - ' : '') + (course.course_name || 'Unnamed Course');
                    option.dataset.fee = course.fee || 0;
                    option.dataset.duration = course.years || '';
                    option.dataset.course_level = course.course_level || '';
                    courseSelect.appendChild(option);
                    this.courseMap.set(String(course.id), course);
                });
                courseSelect.disabled = false;
            } else {
                courseSelect.disabled = true;
            }
        } catch (error) {
            console.error("Error loading courses:", error);
            this.showError('Failed to load courses');
        }
    }

    showCourseDetails() {
        const courseSelect = document.getElementById('courseSelect');
        const selectedOption = courseSelect?.selectedOptions?.[0];
        const courseDetails = document.getElementById('courseDetails');

        if (!selectedOption) {
            if (courseDetails) courseDetails.style.display = 'none';
            return;
        }

        const fee = selectedOption.dataset.fee || 0;
        const duration = selectedOption.dataset.duration || "N/A";
        const course_level = selectedOption.dataset.course_level || "N/A";
        const feeEl = document.getElementById('fee');
        const durationEl = document.getElementById('duration');
        const course_levelEl = document.getElementById('course_level');

        if (feeEl) feeEl.textContent = `₹${Number(fee).toLocaleString('en-IN')}`;
        if (durationEl) durationEl.textContent = duration;
        if (course_levelEl) course_levelEl.textContent = course_level;

        if (courseDetails) courseDetails.style.display = 'block';
        courseDetails?.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    async saveCourseSelection() {
        if (!validateToken()) return;

        const universityDropdown = document.getElementById('universityDropdown');
        const universityId = universityDropdown?.dataset?.id;
        const universityName = universityDropdown?.textContent?.trim() || '';

        const courseSelect = document.getElementById('courseSelect');
        const courseId = courseSelect?.value;
        const courseName = courseSelect?.selectedOptions?.[0]?.text || '';

        if (!universityId || !courseId) {
            this.showError('Please select both a university and a course.');
            return;
        }

        try {
            const token = localStorage.getItem('authToken') || '';
            const myHeaders = new Headers();
            if (token) myHeaders.append("authtoken", token);
            myHeaders.append("Content-Type", "application/json");

            const raw = JSON.stringify({ course_id: courseId });

            const response = await fetch((appConfig.apiBaseUrl || "https://api.collegeall.com") + "/api/v1/course-selected", {
                method: "POST",
                headers: myHeaders,
                body: raw,
            });

            if (response.status === 401 || response.status === 403) {
                this.handleUnauthorized();
                return;
            }

            const result = await response.json();
            const msg = result?.message || `Successfully enrolled in: ${courseName} at ${universityName}`;
            this.showSuccess(msg);

        } catch (err) {
            console.error(err);
            this.showError('Failed to save course selection');
        }

        try {
            const modal = bootstrap.Modal.getInstance(document.getElementById('courseModal'));
            modal?.hide();
        } catch (e) { }

        await this.loadCourseData();
        this.updateCourseCards();
    }

    viewCourseDetails(courseId) {
        if (!courseId) {
            this.showSection('course-details');
            return;
        }
        const found = this.courseMap.get(String(courseId)) || (this.courseData || []).find(c => String(c.id) === String(courseId));
        if (found) {
            window.globalCourseManager.setCurrentIndex(this.courseData.findIndex(c => c.id == courseId));
        }
        this.showSection('course-details');
    }

    loadSectionData(sectionId) {
        switch (sectionId) {
            case 'user-details':
                this.updateUserDetails();
                break;
            case 'courses-selected':
                this.updateCourseCards();
                break;
        }
    }

    showError(message) {
        this.showNotification(message, 'danger');
    }

    showSuccess(message) {
        this.showNotification(message, 'success');
    }

    showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
        notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
        notification.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;

        document.body.appendChild(notification);

        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 5000);
    }
}

// Initialize dashboard when DOM is loaded
document.addEventListener('DOMContentLoaded', function () {
    // Check token before initializing dashboard
    if (!validateToken()) {
        return;
    }
    window.dashboard = new Dashboard();
});

// Global utility functions
function formatCurrency(amount) {
    return '₹' + parseInt(amount || 0, 10).toLocaleString('en-IN');
}

function formatPercentage(value) {
    return (Number(value) || 0).toFixed(1) + '%';
}

function logoutUser() {
    localStorage.removeItem("authToken");
    sessionStorage.removeItem("user_details");
    window.location.href = (appConfig.appUrl || "https://collegeall.com").replace(/\/+$/, "") + "/signin/";
}

// Add token validation to page-specific scripts
document.addEventListener('DOMContentLoaded', function() {
    if (!validateToken()) {
        return;
    }
});
