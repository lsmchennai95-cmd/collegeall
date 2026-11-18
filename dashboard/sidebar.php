<div class="d-flex flex-column flex-shrink-0 p-3 h-100 side-bar mt-3">
    <!-- Navigation Menu -->
    <ul class="nav nav-pills flex-column mb-auto mt-5">
        <li class="nav-item">
            <a href="#" class="nav-link active" data-section="courses-selected">
                <i class="fas fa-book me-2"></i> My Courses
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" data-section="payment">
                <i class="fas fa-credit-card me-2"></i> Payments
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" data-section="course-details">
                <i class="fas fa-info-circle me-2"></i> Course Details
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" data-section="certificate-process">
                <i class="fas fa-certificate me-2"></i> Certificate
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" data-section="user-details">
                <i class="fas fa-user me-2"></i> My Profile
            </a>
        </li>
    </ul>
</div>

<script>
// Update sidebar user name when user data is loaded
function updateSidebarUser(userData) {
    if (userData && userData.user_name) {
        document.getElementById('sidebar-user-name').textContent = userData.user_name;
    }
}
</script>