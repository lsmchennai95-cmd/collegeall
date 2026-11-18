<div class="row">
    <div class="col-lg-8">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary">
                <i class="fas fa-user me-2"></i>My Profile
            </h2>
            <button class="btn btn-primary">
                <i class="fas fa-edit me-2"></i>Edit Profile
            </button>
        </div>

        <div class="card">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-3 text-center mb-4">
                        <div class="position-relative d-inline-block">
                            <img src="../img/student-profile.png" 
                                 class="rounded-circle" width="120" height="120" alt="Profile Picture">
                            <!-- <button class="btn btn-sm btn-primary rounded-circle position-absolute bottom-0 end-0">
                                <i class="fas fa-camera"></i>
                            </button> -->
                        </div>
                        <h5 class="mt-3 mb-1" id="name">John Doe</h5>
                        <p class="text-muted">Student</p>
                        <div class="badge bg-success">
                            <i class="fas fa-check me-1"></i>Verified
                        </div>
                    </div>
                    
                    <div class="col-md-9">
                        <h5 class="text-primary mb-4">Personal Information</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-muted">Full Name</label>
                                <p class="fw-semibold" id="fullName">John Doe</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted">Date of Birth</label>
                                <p class="fw-semibold" id="dob">May 15, 1995</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted">Email Address</label>
                                <p class="fw-semibold" id="email">john.doe@example.com</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted">Phone Number</label>
                                <p class="fw-semibold" id="phone">+91 9876543210</p>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted">Address</label>
                                <p class="fw-semibold" id="address">Mumbai, Maharashtra, India</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Information -->
        <div class="card mt-4">
            <div class="card-header bg-light">
                <h5 class="mb-0"><i class="fas fa-graduation-cap me-2"></i>Academic Information</h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label text-muted">Student ID</label>
                        <p class="fw-semibold">STU2024001</p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Enrollment Date</label>
                        <p class="fw-semibold">September 1, 2023</p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Current Semester</label>
                        <p class="fw-semibold">Semester 3</p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">CGPA</label>
                        <p class="fw-semibold">8.5/10.0</p>
                    </div>
                    <div class="col-12">
                        <label class="form-label text-muted">Program</label>
                        <p class="fw-semibold">Master of Data Science</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <!-- Quick Actions -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="fas fa-bolt me-2"></i>Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary text-start" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                        <i class="fas fa-lock me-2"></i>Change Password
                    </button>

                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-bell me-2"></i>Notification Settings
                    </button>
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-download me-2"></i>Download Documents
                    </button>
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-question-circle me-2"></i>Get Help
                    </button>
                </div>
            </div>
        </div>

        <!-- Account Status -->
        <div class="card mt-4">
            <div class="card-header bg-light">
                <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Account Status</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Profile Completion</span>
                        <span class="text-muted">85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 85%"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Verification Status</span>
                        <span class="badge bg-success">Verified</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Account Active Since</span>
                        <span class="fw-semibold">Sep 2023</span>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-warning w-100">
                        <i class="fas fa-shield-alt me-2"></i>Security Settings
                    </button>
                </div>
            </div>
        </div>

        <!-- Support Card -->
        <div class="card mt-4">
            <div class="card-body text-center">
                <i class="fas fa-headset text-primary fa-3x mb-3"></i>
                <h5 class="text-primary">Need Help?</h5>
                <p class="text-muted mb-3">Our support team is here to help you</p>
                <button class="btn btn-primary w-100 mb-2">
                    <i class="fas fa-envelope me-2"></i>Contact Support
                </button>
                <button class="btn btn-outline-primary w-100">
                    <i class="fas fa-file-alt me-2"></i>Help Center
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header text-white">
        <h5 class="modal-title">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <div class="modal-body px-4 py-3">
            <form id="changePassForm">

                <div class="mb-3">
                    <label class="form-label fw-semibold small text-secondary mb-1">Registered Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-envelope"></i></span>
                        <input type="email" id="email" class="form-control" placeholder="Enter registered email" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold small text-secondary mb-1">New Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-lock"></i></span>
                        <input type="password" id="newPassword" class="form-control" placeholder="Enter new password" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold small text-secondary mb-1">Confirm Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-check-circle"></i></span>
                        <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required>
                    </div>
                </div>

            </form>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="changePassword()">
          Update Password
        </button>
      </div>

    </div>
  </div>
</div>


<script>
    // Password change
    async function changePassword(){

        const email = document.getElementById('email').value;
        const newPassword = document.getElementById('newPassword').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        if(newPassword !== confirmPassword){
            alert("Password mismatch");
            return;
        }

        // if success close modal
        var modal = bootstrap.Modal.getInstance(document.getElementById('changePasswordModal'));
        modal.hide();
    }
</script>