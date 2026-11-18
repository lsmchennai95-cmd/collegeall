<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4 counter-box">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-info-circle me-2"></i>Course Details
        </h2>
        <div class="d-flex align-items-center gap-2">
            <button id="prevCourseBtn" class="btn btn-sm btn-outline-primary" title="Previous course">
                <i class="fas fa-angle-left"></i>
            </button>
            <div id="course-counters" class="px-2 text-muted">0 / 0</div>
            <button id="nextCourseBtn" class="btn btn-sm btn-outline-primary" title="Next course">
                <i class="fas fa-angle-right"></i>
            </button>
        </div>
    </div>

    <div id="course-details-container">
        <div class="card">
            <div class="card-body text-center py-5">
                <div class="text-muted">
                    <i class="fas fa-book-open fa-3x mb-3"></i>
                    <h4>No Courses Enrolled</h4>
                    <p class="mb-4">Please enroll in a course to view details</p>
                    <button class="btn btn-primary" onclick="window.dashboard.openCourseModal()">
                        <i class="fas fa-plus me-2"></i>Enroll in a Course
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateToken() {
        const token = localStorage.getItem('authToken');
        if (!token) {
            window.location.href = "https://collegeall.com/signin/";
            return false;
        }
        return true;
    }
    class CourseDetailsManager {
        constructor() {
            this.init();
        }

        init() {
            this.setupEventListeners();
            this.setupGlobalListener();
        }

        setupEventListeners() {
            document.getElementById('nextCourseBtn')?.addEventListener('click', () => {
                if (window.globalCourseManager) {
                    window.globalCourseManager.nextCourse();
                }
            });
            
            document.getElementById('prevCourseBtn')?.addEventListener('click', () => {
                if (window.globalCourseManager) {
                    window.globalCourseManager.prevCourse();
                }
            });
            
            document.getElementById('syllabusBtn')?.addEventListener('click', () => this.downloadSyllabus());
            document.getElementById('continueBtn')?.addEventListener('click', () => this.continueLearning());
        }

        setupGlobalListener() {
            if (window.globalCourseManager) {
                window.globalCourseManager.addListener((course, index, allCourses) => {
                    this.updateCourseDetailsUI(course, index, allCourses);
                });
                
                // Initial update
                const currentCourse = window.globalCourseManager.getCurrentCourse();
                if (currentCourse) {
                    this.updateCourseDetailsUI(currentCourse, window.globalCourseManager.currentIndex, window.globalCourseManager.courses);
                }
            }
        }

        updateCourseDetailsUI(course, index, allCourses) {
            const container = document.getElementById('course-details-container');
            
            if (!course) {
                this.showNoCourses();
                return;
            }

            container.innerHTML = this.getCourseDetailsHTML(course);
            this.updateCounter(index, allCourses);
        }

        getCourseDetailsHTML(course) {
            const courseProgress = this.calculateCourseProgress(course.course_start_on, course.course_end_on);
            const totalFee = parseInt(course.total_fee || course.course_fee || 1);
            const paidAmount = parseInt(course.paid_payment || 0);
            const paymentProgress = totalFee ? Math.round((paidAmount / totalFee) * 100) : 0;

            return `
                <div class="course-details bg-white rounded-3 shadow-sm p-4">
                    <div class="mb-5">
                        <div class="d-flex align-items-center mb-3">
                            <img src="${course.universities_logo || ''}" alt="University Logo" 
                                style="width:72px;height:72px;object-fit:contain" class="rounded me-3">
                            <div>
                                <h3 class="fw-bold text-dark mb-1">${course.course_name || 'Unnamed Course'}</h3>
                                <small class="text-muted">${course.university_name || 'Unknown University'}</small>
                            </div>
                        </div>

                        <h4 class="fw-bold text-dark mb-3">About the Course</h4>
                        <p class="text-muted lead">${this.getCourseDescription(course.course_name)}</p>
                    </div>

                    <div class="row g-4 mb-5">
                        <div class="col-md-3">
                            <div class="bg-light rounded p-3 border h-100 text-center">
                                <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                                <h6 class="text-primary">Duration</h6>
                                <p class="fw-semibold mb-0">${course.years || 'N/A'} Years</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bg-light rounded p-3 border h-100 text-center">
                                <i class="fas fa-money-bill-wave fa-2x text-success mb-2"></i>
                                <h6 class="text-primary">Total Fee</h6>
                                <p class="fw-semibold mb-0">₹${this.formatNumber(course.course_fee || course.total_fee || 0)}</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bg-light rounded p-3 border h-100 text-center">
                                <i class="fas fa-graduation-cap fa-2x text-info mb-2"></i>
                                <h6 class="text-primary">Level</h6>
                                <p class="fw-semibold mb-0">${course.course_level || 'N/A'}</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bg-light rounded p-3 border h-100 text-center">
                                <i class="fas fa-calendar fa-2x text-warning mb-2"></i>
                                <h6 class="text-primary">Start Date</h6>
                                <p class="fw-semibold mb-0">${this.formatDate(course.course_start_on)}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0"><i class="fas fa-chart-line me-2"></i>Course Progress</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span class="text-muted">Completion</span>
                                            <span class="text-muted">${courseProgress}%</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-info" style="width: ${courseProgress}%"></div>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <small class="text-muted">Start Date</small>
                                            <div class="fw-bold">${this.formatDate(course.course_start_on)}</div>
                                        </div>
                                        <div class="col-6">
                                            <small class="text-muted">End Date</small>
                                            <div class="fw-bold">${this.formatDate(course.course_ent_on)}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0"><i class="fas fa-credit-card me-2"></i>Payment Status</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span class="text-muted">Payment Progress</span>
                                            <span class="text-muted">${paymentProgress}%</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-success" style="width: ${paymentProgress}%"></div>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <small class="text-muted">Paid</small>
                                            <div class="fw-bold text-success">₹${this.formatNumber(paidAmount)}</div>
                                        </div>
                                        <div class="col-6">
                                            <small class="text-muted">Pending</small>
                                            <div class="fw-bold text-warning">₹${this.formatNumber(parseInt(course.pending_payment || 0))}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-university me-2"></i>University Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>University:</strong> ${course.university_name || 'N/A'}</p>
                                    <p><strong>Course Level:</strong> ${course.course_level || 'N/A'}</p>
                                    <p><strong>Registration Fee:</strong> 
                                        <span class="badge ${course.regisation_fee_status === '1' ? 'bg-success' : 'bg-warning'}">
                                            ${course.regisation_fee_status === '1' ? 'Paid' : 'Pending'}
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Enrollment Date:</strong> ${course.cdate}</p>
                                    <p><strong>Course ID:</strong> ${course.id || 'N/A'}</p>
                                    <p><strong>User ID:</strong> ${course.user_id || 'N/A'}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }

        calculateCourseProgress(startDate, endDate) {
            try {
                const start = new Date(startDate);
                const end = new Date(endDate);
                const today = new Date();

                if (isNaN(start) || isNaN(end)) return 0;

                const totalDuration = end - start;
                const elapsed = today - start;

                if (totalDuration <= 0) return 0;

                const progress = (elapsed / totalDuration) * 100;
                return Math.min(Math.max(Math.round(progress), 0), 100);
            } catch (e) {
                return 0;
            }
        }

        getCourseDescription(courseName) {
            if (!courseName) return 'Comprehensive program designed to provide industry-relevant skills and knowledge.';
            
            const descriptions = {
                'PGDM': 'Post Graduate Diploma in Management focusing on advanced business administration and leadership skills.',
                'MBA': 'Master of Business Administration providing comprehensive business management education.',
                'DBA': 'Doctor of Business Administration for advanced research and strategic business leadership.',
                'MA': 'Master of Arts offering specialized knowledge in humanities and social sciences.',
                'Marketing': 'Marketing management program focusing on modern marketing strategies and consumer behavior.',
                'Sociology': 'Sociology program exploring social behavior, structures, and cultural dynamics.',
                'Business Administration': 'Business administration program covering essential management and leadership skills.'
            };

            for (const [key, desc] of Object.entries(descriptions)) {
                if (courseName.includes(key)) {
                    return desc;
                }
            }
            
            return 'Comprehensive program designed to provide industry-relevant skills and knowledge.';
        }

        updateCounter(index, allCourses) {
            const counter = document.getElementById('course-counters');
            if (counter) {
                counter.textContent = `${allCourses.length ? index + 1 : 0} / ${allCourses.length}`;
            }

            document.getElementById('prevCourseBtn').disabled = index <= 0;
            document.getElementById('nextCourseBtn').disabled = index >= allCourses.length - 1;
        }

        downloadSyllabus() {
            const course = window.globalCourseManager?.getCurrentCourse();
            if (!course) {
                alert('Please enroll in a course to download syllabus.');
                return;
            }
            alert(`Syllabus download for: ${course.course_name}\nThis feature will be available soon.`);
        }

        continueLearning() {
            const course = window.globalCourseManager?.getCurrentCourse();
            if (!course) {
                alert('Please enroll in a course to continue learning.');
                return;
            }
            alert(`Continuing learning for: ${course.course_name}\nRedirecting to learning portal...`);
        }

        showNoCourses() {
            const container = document.getElementById('course-details-container');
            container.innerHTML = `
                <div class="card">
                    <div class="card-body text-center py-5">
                        <div class="text-muted">
                            <i class="fas fa-book-open fa-3x mb-3"></i>
                            <h4>No Courses Enrolled</h4>
                            <p class="mb-4">Please enroll in a course to view details</p>
                            <button class="btn btn-primary" onclick="window.dashboard.openCourseModal()">
                                <i class="fas fa-plus me-2"></i>Enroll in a Course
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            this.updateCounter(0, []);
        }

        formatNumber(num) {
            return parseInt(num || 0).toLocaleString('en-IN');
        }

        formatDate(dateString) {
            if (!dateString) return 'N/A';

            try {
                // Split the DD-MM-YYYY format
                const [day, month, year] = dateString.split('-').map(Number);
                if (!day || !month || !year) return dateString;

                // Create a Date object
                const date = new Date(year, month - 1, day);

                // Format as 06 July 2027
                return date.toLocaleDateString('en-IN', {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric'
                });
            } catch (e) {
                return dateString;
            }
        }

    }

    document.addEventListener('DOMContentLoaded', function() {
        if (!validateToken()) {
                return;
            }
        window.courseDetailsManager = new CourseDetailsManager();
    });
</script>