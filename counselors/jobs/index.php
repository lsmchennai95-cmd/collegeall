<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LeadSense Media - Candidate Application</title>
  <link rel="icon" type="image/png" href="./img/logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>    
    body {
      background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
      min-height: 100vh;
      padding: 20px 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #475569;
    }
    
    .header-logo {
      transition: all 0.3s ease;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
    }
    
    .header-logo:hover {
      transform: scale(1.02);
    }
    
    .app-container {
      max-width: 900px;
      margin: 0 auto;
    }
    
    .form-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      border: none;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      margin: 20px;
    }
    
    .form-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
    }
    
    .section-header {
      background: linear-gradient(to right, #2563eb, #3b82f6);
      color: white;
      padding: 14px 20px;
      margin: 0;
      border-radius: 8px 8px 0 0;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
    }
    
    .section-header i {
      margin-right: 10px;
      font-size: 1.2rem;
    }
    
    .card-body {
      padding: 25px;
    }
    
    .form-label {
      font-weight: 500;
      color: #475569;
      margin-bottom: 8px;
      font-size: 0.95rem;
    }
    
    .form-control, .form-select {
      padding: 12px 15px;
      border-radius: 8px;
      border: 1px solid #e2e8f0;
      transition: all 0.2s ease;
    }
    
    .form-control:focus, .form-select:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.15);
    }
    
    .file-upload-area {
      border: 2px dashed #cbd5e1;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      background-color: #f8fafc;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-bottom: 15px;
      position: relative;
    }
    
    .file-upload-area:hover {
      border-color: #3b82f6;
      background-color: #f1f5f9;
    }
    
    .file-upload-area i {
      font-size: 2.5rem;
      color: #2563eb;
      margin-bottom: 15px;
    }
    
    .file-upload-text {
      margin-bottom: 10px;
      color: #475569;
    }
    
    .file-input {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      opacity: 0;
      cursor: pointer;
    }
    
    .file-name {
      font-size: 0.85rem;
      color: #2563eb;
      margin-top: 10px;
      font-weight: 500;
      word-break: break-all;
    }
    
    .submit-btn {
      background: linear-gradient(to right, #2563eb, #3b82f6);
      border: none;
      padding: 14px;
      font-weight: 600;
      font-size: 1.1rem;
      letter-spacing: 0.5px;
      border-radius: 10px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(37, 99, 235, 0.25);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .submit-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(37, 99, 235, 0.35);
    }
    
    .submit-btn:active {
      transform: translateY(0);
    }
    
    .footer {
      color: #64748b;
      font-size: 0.9rem;
      margin-top: 25px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-section {
      margin-bottom: 30px;
    }
    
    hr.section-divider {
      border-top: 2px solid #e2e8f0;
      opacity: 1;
      margin: 25px 0;
    }
    
    .input-group-icon {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #94a3b8;
      z-index: 10;
    }
    
    .input-icon-wrap {
      position: relative;
    }
    
    .input-icon-wrap .form-control {
      padding-left: 45px;
    }
    
    .modal-header {
      background: linear-gradient(to right, #2563eb, #3b82f6);
      color: white;
    }
    
    .error-message {
      color: #e53e3e;
      font-size: 0.85rem;
      margin-top: 5px;
      display: none;
    }
    
    .has-error .form-control,
    .has-error .file-upload-area {
      border-color: #e53e3e;
    }
    
    @media (max-width: 768px) {
      .card-body {
        padding: 20px 15px;
      }
      
      .section-header {
        padding: 12px 15px;
        font-size: 1rem;
      }
      
      .submit-btn {
        font-size: 1rem;
        padding: 12px;
      }
    }
  </style>

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '25443278008607273');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=25443278008607273&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>
<body>
  <div class="app-container">
    <div class="text-center mb-5">
      <img src="https://collegeall.com/img/Logo/collegeallLogo.png" alt="leadsense" class="header-logo" height="70" width="300px"/>
      <h2 class="mt-4 mb-3 fw-bold text-gradient">Candidate Application Form</h2>
    </div>

    <form id="applicationForm" enctype="multipart/form-data">
      
      <!-- Personal Information Section -->
      <div class="form-card mb-4">
        <div class="section-header">
          <i class="fas fa-user"></i>
          Personal Information
        </div>
        <div class="card-body">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Full Name</label>
                <div class="input-icon-wrap">
                  <i class="fas fa-user input-group-icon"></i>
                  <input type="text" name="name" id="name" placeholder="Full Name" class="form-control"/>
                </div>
                <div id="nameError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Phone Number</label>
                <div class="input-icon-wrap">
                  <i class="fas fa-phone input-group-icon"></i>
                  <input type="number" name="phone" id="phone" min="10" placeholder="0987654321" class="form-control"/>
                </div>
                <div id="phoneError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Email Address</label>
                <div class="input-icon-wrap">
                  <i class="fas fa-envelope input-group-icon"></i>
                  <input type="email" name="email" id="emailField" placeholder="example@example.com" class="form-control"/>
                </div>
                <div id="emailError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Location</label>
                <div class="input-icon-wrap">
                  <i class="fas fa-map-marker-alt input-group-icon"></i>
                  <input type="text" name="location" id="location" placeholder="City, State" class="form-control"/>
                </div>
                <div id="locationError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="jobPosition" class="form-label">Job Position</label>
                <div class="input-icon-wrap">
                  <i class="fas fa-briefcase input-group-icon"></i>
                  <select id="jobPosition" name="job_title" class="form-control">
                    <option value="">Select Job Position</option>
                    <option value="Developer">Web Developer</option>
                    <option value="Voice Process">Voice Process</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Mis Executive">Mis Executive</option>
                    <option value="HR Internship">HR Internship</option>
                    <option value="Junior Accountant">Junior Accountant</option>
                  </select>
                </div>
              <div id="jobPositionError" class="error-message"></div>
            </div>
          </div>
          </div>
        </div>
      </div>

      <!-- Documents Section -->
      <div class="form-card mb-4">
        <div class="section-header">
          <i class="fas fa-file-alt"></i>
          Documents
        </div>
        <div class="card-body">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Aadhar Card (PDF)</label>
                <div class="file-upload-area" id="aadharArea">
                  <i class="fas fa-id-card"></i>
                  <div class="file-upload-text">Click to upload file</div>
                  <div class="file-name" id="aadharName">No file selected</div>
                  <input type="file" name="aadhar" accept="application/pdf" class="file-input" id="aadharInput"/>
                </div>
                <div id="aadharError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">CV (PDF)</label>
                <div class="file-upload-area" id="cvArea">
                  <i class="fas fa-file-alt"></i>
                  <div class="file-upload-text">Click to upload file</div>
                  <div class="file-name" id="cvName">No file selected</div>
                  <input type="file" name="cv" accept="application/pdf" class="file-input" id="cvInput"/>
                </div>
                <div id="cvError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Passport Photo (JPG/PNG)</label>
                <div class="file-upload-area" id="photoArea">
                  <i class="fas fa-camera"></i>
                  <div class="file-upload-text">Click to upload photo</div>
                  <div class="file-name" id="photoName">No file selected</div>
                  <input type="file" name="photo" accept="image/*" class="file-input" id="photoInput"/>
                </div>
                <div id="photoError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Self Intro Video (min 30sec)</label>
                <div class="file-upload-area" id="videoArea">
                  <i class="fas fa-video"></i>
                  <div class="file-upload-text">Click to upload Video</div>
                  <div class="file-name" id="videoName">No file selected</div>
                  <input type="file" name="video" accept="video/*" class="file-input" id="videoInput"/>
                </div>
                <div id="videoError" class="error-message"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Experience Section -->
      <div class="form-card mb-4">
        <div class="section-header">
          <i class="fas fa-briefcase"></i>
          Experience (fresher can skip)
        </div>
        <div class="card-body">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Position</label>
                <div class="input-icon-wrap">
                  <i class="fas fa-user-tie input-group-icon"></i>
                  <input type="text" name="position" id="position" placeholder="e.g., Software Engineer" class="form-control"/>
                </div>
                <div id="positionError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Company</label>
                <div class="input-icon-wrap">
                  <i class="fas fa-building input-group-icon"></i>
                  <input type="text" name="company" id="company" placeholder="Company Name" class="form-control"/>
                </div>
                <div id="companyError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Years of Experience</label>
                <div class="input-icon-wrap">
                  <i class="fas fa-clock input-group-icon"></i>
                  <input type="number" name="experience" id="experience" placeholder="Number of years" class="form-control"/>
                </div>
                <div id="experienceError" class="error-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Work Location</label>
                <div class="input-icon-wrap">
                  <i class="fas fa-map-marker-alt input-group-icon"></i>
                  <input type="text" name="work_location" id="work_location" placeholder="City, Country" class="form-control"/>
                </div>
                <div id="workLocationError" class="error-message"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="submit-btn w-100 mt-3">
        <i class="fas fa-paper-plane me-2"></i> Submit Application
      </button>
    </form>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
          <div class="modal-header">
            <h5 class="modal-title" id="successModalLabel"><i class="fas fa-check-circle me-2"></i>Application Submitted</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center py-4">
            <div class="mb-3">
              <i class="fas fa-check-circle text-success" style="font-size: 3rem;"></i>
            </div>
            <h5 class="mb-3">Thank you for your application!</h5>
            <p class="mb-0">We've received your application successfully. Our team will review it and contact you soon.</p>
          </div>
          <div class="modal-footer justify-content-center border-0">
            <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="footer text-center mt-4">© 2025 LeadSense Media. All rights reserved.</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Add file name display for uploads
    const fileInputs = [
      { input: 'aadharInput', display: 'aadharName' },
      { input: 'cvInput', display: 'cvName' },
      { input: 'photoInput', display: 'photoName' },
      { input: 'videoInput', display: 'videoName' }
    ];
    
    fileInputs.forEach(item => {
      const input = document.getElementById(item.input);
      const display = document.getElementById(item.display);
      
      input.addEventListener('change', function() {
        if (this.files.length > 0) {
          display.textContent = this.files[0].name;
          display.parentElement.classList.add('has-file');
        } else {
          display.textContent = 'No file selected';
          display.parentElement.classList.remove('has-file');
        }
      });
    });
    
    const params = new URLSearchParams(window.location.search);
    const email = params.get('email');
    if (email) {
      document.getElementById("emailField").value = email;
    }

    // Form validation and submission handler
    document.getElementById('applicationForm').addEventListener('submit', async function (e) {
      e.preventDefault();
      
      document.querySelectorAll('.error-message').forEach(el => {
        el.style.display = 'none';
        el.textContent = '';
      });
      
      document.querySelectorAll('.form-control, .file-upload-area').forEach(el => {
        el.closest('.form-group').classList.remove('has-error');
      });
      
      let isValid = true;
      const form = e.target;
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn.innerHTML;

      // Validate Personal Information
      const name = document.getElementById("name").value.trim();
      if (!name) {
        showError('nameError', 'Name is required');
        markError('name');
        isValid = false;
      } else if (!/^[a-zA-Z\s]{2,}$/.test(name)) {
        showError('nameError', 'Enter a valid name (letters only)');
        markError('name');
        isValid = false;
      }

      const phone = document.getElementById("phone").value.trim();
      if (!phone) {
        showError('phoneError', 'Phone number is required');
        markError('phone');
        isValid = false;
      } else if (!/^\d{10}$/.test(phone)) {
        showError('phoneError', 'Enter a valid 10-digit phone number');
        markError('phone');
        isValid = false;
      }

      const emailValue = document.getElementById("emailField").value.trim();
      if (!emailValue) {
        showError('emailError', 'Email is required');
        markError('emailField');
        isValid = false;
      } else if (!/^\S+@\S+\.\S+$/.test(emailValue)) {
        showError('emailError', 'Enter a valid email address');
        markError('emailField');
        isValid = false;
      }

      const location = document.getElementById("location").value.trim();
      if (!location) {
        showError('locationError', 'Location is required');
        markError('location');
        isValid = false;
      }

      const jobPosition = document.getElementById("jobPosition").value.trim();
      if (!jobPosition) {
        showError('jobPositionError', 'Job Position is required');
        markError('jobPosition');
        isValid = false;
      }

      // Validate Documents
      const fileTypes = {
        aadharInput: 'application/pdf',
        cvInput: 'application/pdf',
        photoInput: 'image',
        videoInput: 'video'
      };

      for (const [id, type] of Object.entries(fileTypes)) {
        const fileInput = document.getElementById(id);
        if (fileInput.files.length === 0) {
          showError(`${id}Error`, 'File is required');
          markError(id);
          isValid = false;
        } else if (type === 'image') {
          if (!fileInput.files[0].type.startsWith('image')) {
            showError(`${id}Error`, 'Only image files are allowed');
            markError(id);
            isValid = false;
          }
        } else if (type === 'video') {
          if (!fileInput.files[0].type.startsWith('video')) {
            showError(`${id}Error`, 'Only video files are allowed');
            markError(id);
            isValid = false;
          }
        } else if (fileInput.files[0].type !== type) {
          showError(`${id}Error`, 'Only PDF files are allowed');
          markError(id);
          isValid = false;
        }
      }

      // Validate Education

      if (!isValid) {
        // Scroll to error
        const firstError = document.querySelector('.error-message[style*="display: block"]');
        if (firstError) {
          firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        return;
      }

      if (isValid) {
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Processing...';
        submitBtn.disabled = true;

        try {
          const formData = new FormData(form);
          const response = await fetch('https://apihr.123admissions.com/submit-application', {
            method: 'POST',
            body: formData
          });

          const result = await response.json();

          if (result.success) {
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();

            form.reset();

            // Reset file names
            fileInputs.forEach(item => {
              document.getElementById(item.display).textContent = 'No file selected';
            });
          } else {
            alert(result.message || 'Something went wrong. Please try again.');
          }
        } catch (err) {
          console.error(err);
          alert('Server error. Please try again later.');
        } finally {
          submitBtn.innerHTML = originalBtnText;
          submitBtn.disabled = false;
        }
      }
      
    });

    // Helper function to show errors
    function showError(elementId, message) {
      const errorElement = document.getElementById(elementId);
      if (errorElement) {
        errorElement.textContent = message;
        errorElement.style.display = 'block';
      }
    }
    
    // Helper function to mark fields with errors
    function markError(fieldId) {
      const field = document.getElementById(fieldId);
      if (field) {
        const formGroup = field.closest('.form-group');
        if (formGroup) {
          formGroup.classList.add('has-error');
        }
      }
    }
  </script>
</body>
</html>