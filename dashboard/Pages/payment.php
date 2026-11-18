<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4 counter-box">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-credit-card me-2"></i>Payment & Fees
        </h2>
        <div class="d-flex align-items-center gap-2">
            <button id="prevCourse" class="btn btn-sm btn-outline-primary" title="Previous course">
                <i class="fas fa-angle-left"></i>
            </button>
            <div id="course-counter" class="px-2 text-muted">0 / 0</div>
            <button id="nextCourse" class="btn btn-sm btn-outline-primary" title="Next course">
                <i class="fas fa-angle-right"></i>
            </button>
        </div>
    </div>

    <!-- Current Course Payment Card -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">
                <i class="fas fa-university me-2"></i>
                <span id="payment-university-name">Select a course</span>
            </h5>
        </div>
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <img id="payment-university-logo" src="" alt="University Logo" 
                         class="img-fluid rounded" style="max-height: 80px;">
                </div>
                <div class="col-md-6">
                    <h5 id="payment-course-name" class="text-primary">No course selected</h5>
                    <div class="row mt-3">
                        <div class="col-6">
                            <small class="text-muted">Total Fee</small>
                            <div class="fw-bold fs-5" id="payment-total-fee">₹0</div>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Due Date</small>
                            <div class="fw-bold" id="payment-due-date">N/A</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <button class="btn btn-success btn-lg" id="payNowBtn" disabled>
                        <i class="fas fa-lock me-2"></i>Pay Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Progress -->
    <div class="card mb-4">
        <div class="card-header bg-light">
            <h5 class="mb-0">Payment Progress</h5>
        </div>
        <div class="card-body">
            <div class="row text-center mb-3">
                <div class="col-md-3">
                    <div class="border rounded p-3">
                        <div class="text-success fw-bold fs-4" id="paid-amount">₹0</div>
                        <small class="text-muted">Paid Amount</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded p-3">
                        <div class="text-warning fw-bold fs-4" id="pending-amount">₹0</div>
                        <small class="text-muted">Pending Amount</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded p-3">
                        <div class="text-primary fw-bold fs-4" id="payment-percentage">0%</div>
                        <small class="text-muted">Payment Completed</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded p-3">
                        <div class="text-info fw-bold fs-4" id="payment-installments">0/0</div>
                        <small class="text-muted">Installments Paid</small>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                    <span class="text-muted">Overall Payment Progress</span>
                    <span class="text-muted" id="progress-percentage">0%</span>
                </div>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-success" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment History -->
    <div class="card">
        <div class="card-header bg-light">
            <h5 class="mb-0">
                <i class="fas fa-history me-2"></i>Payment History
            </h5>
        </div>
        <div class="card-body">
            <div id="payment-history" class="text-center py-4">
                <div class="text-muted">
                    <i class="fas fa-receipt fa-2x mb-3"></i>
                    <p>No payment history available</p>
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

document.addEventListener('DOMContentLoaded', function() {
    // Check token before loading payment section
    if (!validateToken()) {
        return;
    }

    function updatePaymentUI(course, index, allCourses) {
        if (!course) {
            showNoPaymentData();
            return;
        }

        updatePaymentCourseInfo(course);
        updatePaymentProgress(course);
        updatePaymentCounter(index, allCourses);
    }

    function updatePaymentCourseInfo(course) {
        document.getElementById('payment-university-logo').src = course.universities_logo || '';
        document.getElementById('payment-university-name').textContent = course.university_name || 'Unknown University';
        document.getElementById('payment-course-name').textContent = course.course_name || 'Unknown Course';
        
        const totalFee = parseInt(course.total_fee || course.course_fee || 0);
        document.getElementById('payment-total-fee').textContent = '₹' + formatNumber(totalFee);

        const dueDate = course.due_date || "N/A";
        document.getElementById('payment-due-date').textContent = dueDate;
        
        document.getElementById('payNowBtn').disabled = false;
    }

    function updatePaymentProgress(course) {
        const paid = parseInt(course.paid_payment || 0);
        const pending = parseInt(course.pending_payment || 0);
        const total = parseInt(course.total_fee || 1);
        const percentPaid = total ? Math.round((paid / total) * 100) : 0;

        document.getElementById('paid-amount').textContent = '₹' + formatNumber(paid);
        document.getElementById('pending-amount').textContent = '₹' + formatNumber(pending);
        document.getElementById('payment-percentage').textContent = percentPaid + '%';
        document.getElementById('progress-percentage').textContent = percentPaid + '%';
        document.getElementById('progress-bar').style.width = percentPaid + '%';
    }

    function updatePaymentCounter(index, allCourses) {
        document.getElementById('course-counter').textContent = 
            `${allCourses.length ? index + 1 : 0} / ${allCourses.length}`;
        
        document.getElementById('prevCourse').disabled = index <= 0;
        document.getElementById('nextCourse').disabled = index >= allCourses.length - 1;
    }

    function showNoPaymentData() {
        document.getElementById('payment-university-name').textContent = 'No courses enrolled';
        document.getElementById('payment-course-name').textContent = 'Please enroll in a course to see payment details';
        document.getElementById('payment-total-fee').textContent = '₹0';
        document.getElementById('payNowBtn').disabled = true;
        
        document.getElementById('paid-amount').textContent = '₹0';
        document.getElementById('pending-amount').textContent = '₹0';
        document.getElementById('payment-percentage').textContent = '0%';
        document.getElementById('progress-bar').style.width = '0%';
    }

    function formatNumber(num) {
        return parseInt(num || 0).toLocaleString('en-IN');
    }

    // Register with global course manager
    if (window.globalCourseManager) {
        window.globalCourseManager.addListener(updatePaymentUI);
        
        // Initial update
        const currentCourse = window.globalCourseManager.getCurrentCourse();
        if (currentCourse) {
            updatePaymentUI(currentCourse, window.globalCourseManager.currentIndex, window.globalCourseManager.courses);
        } else {
            showNoPaymentData();
        }
    }

    // Event listeners for navigation
    document.getElementById('nextCourse')?.addEventListener('click', function() {
        if (window.globalCourseManager) {
            window.globalCourseManager.nextCourse();
        }
    });

    document.getElementById('prevCourse')?.addEventListener('click', function() {
        if (window.globalCourseManager) {
            window.globalCourseManager.prevCourse();
        }
    });

    // Pay Now button
    document.getElementById('payNowBtn')?.addEventListener('click', function() {
        const course = window.globalCourseManager?.getCurrentCourse();
        if (course) {
            alert(`Payment functionality for: ${course.course_name}\nThis would integrate with payment gateway.`);
        }
    });
});
</script>