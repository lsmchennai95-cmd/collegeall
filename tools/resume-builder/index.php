<?php require_once __DIR__ . '/../../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
    <title>Resume Builder – Create & Download Modern PDF Resumes Online</title>
    <meta name="description" content="Create a professional resume in minutes with our free online Resume Builder. Fill your details, preview live templates, and download your resume as a high-quality PDF. Simple, fast, and customizable.">
    <meta name="keywords" content="resume builder, online resume maker, free resume generator, pdf resume creator, professional resume template, CV builder, modern resume templates, resume maker India, download resume PDF, create resume online">
    <meta name="author" content="Resume Builder App">
    <meta name="robots" content="index, follow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="./resume.css">
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>
    
    <div class="app-container">
        <!-- Header -->
        <div class="header">
            <h1>Professional Resume Builder</h1>
            <p>Create a polished resume in minutes - Download as PDF</p>
        </div>

        <!-- Form Page -->
        <div id="form-page">
            <div class="resume-form-container">
                <ul class="nav nav-tabs mb-4" id="resumeTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab">Basic Info</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="work-tab" data-bs-toggle="tab" data-bs-target="#work" type="button" role="tab">Work Experience</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab">Education</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab">Skills</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab">Projects</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab">Other</button>
                    </li>
                </ul>

                <div class="tab-content" id="resumeTabsContent">
                    <!-- Basic Information Tab -->
                    <div class="tab-pane fade show active" id="basic" role="tabpanel">
                        <h3 class="section-title">Basic Information</h3>
                        <div class="resume-form-section">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" required>
                                    <div class="alert-error" id="name-error"></div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" required>
                                    <div class="alert-error" id="email-error"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone *</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                    <div class="alert-error" id="phone-error"></div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="linkedin" class="form-label">LinkedIn</label>
                                    <input type="url" class="form-control" id="linkedin">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="github" class="form-label">GitHub</label>
                                    <input type="url" class="form-control" id="github">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="summary" class="form-label">Professional Summary</label>
                                <textarea class="form-control" id="summary" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Work Experience Tab -->
                    <div class="tab-pane fade" id="work" role="tabpanel">
                        <h3 class="section-title">Work Experience</h3>
                        <div class="resume-form-section">
                            <div id="work-experience-container">
                                <!-- Dynamic work experience items will be added here -->
                            </div>
                            <button type="button" class="btn btn-add" id="add-work-experience">
                                <i class="fas fa-plus"></i> Add Work Experience
                            </button>
                        </div>
                    </div>

                    <!-- Education Tab -->
                    <div class="tab-pane fade" id="education" role="tabpanel">
                        <h3 class="section-title">Education</h3>
                        <div class="resume-form-section">
                            <div id="education-container">
                                <!-- Dynamic education items will be added here -->
                            </div>
                            <button type="button" class="btn btn-add" id="add-education">
                                <i class="fas fa-plus"></i> Add Education
                            </button>
                        </div>
                    </div>

                    <!-- Skills Tab -->
                    <div class="tab-pane fade" id="skills" role="tabpanel">
                        <h3 class="section-title">Skills</h3>
                        <div class="resume-form-section">
                            <div class="mb-3">
                                <label for="skill-input" class="form-label">Add Skill</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="skill-input" placeholder="Enter a skill">
                                    <select class="form-select" id="skill-category" style="max-width: 180px;">
                                        <option value="Technical">Technical</option>
                                        <option value="Soft">Soft Skills</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <button class="btn btn-primary" type="button" id="add-skill">
                                        <i class="fas fa-plus"></i> Add
                                    </button>
                                </div>
                            </div>
                            <div id="skills-container">
                                <!-- Dynamic skills will be added here -->
                            </div>
                        </div>
                    </div>

                    <!-- Projects Tab -->
                    <div class="tab-pane fade" id="projects" role="tabpanel">
                        <h3 class="section-title">Projects</h3>
                        <div class="resume-form-section">
                            <div id="projects-container">
                                <!-- Dynamic project items will be added here -->
                            </div>
                            <button type="button" class="btn btn-add" id="add-project">
                                <i class="fas fa-plus"></i> Add Project
                            </button>
                        </div>
                    </div>

                    <!-- Other Details Tab -->
                    <div class="tab-pane fade" id="other" role="tabpanel">
                        <h3 class="section-title">Other Details</h3>
                        <div class="resume-form-section">
                            <div class="mb-3">
                                <label for="certifications" class="form-label">Certifications</label>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" id="certification-input" placeholder="I completed the Fullstack Development course at institute from Jan to December - 2025.">
                                    <button class="btn btn-primary" type="button" id="add-certification">
                                        <i class="fas fa-plus"></i> Add
                                    </button>
                                </div>
                                <div id="certifications-container">
                                    <!-- Dynamic certifications will be added here -->
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="languages" class="form-label">Languages (Optional)</label>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" id="language-input" placeholder="Enter language">
                                    <button class="btn btn-primary" type="button" id="add-language">
                                        <i class="fas fa-plus"></i> Add
                                    </button>
                                </div>
                                <div id="languages-container">
                                    <!-- Dynamic languages will be added here -->
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="interests" class="form-label">Interests & Hobbies (Optional)</label>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" id="interest-input" placeholder="Enter interest or hobby">
                                    <button class="btn btn-primary" type="button" id="add-interest">
                                        <i class="fas fa-plus"></i> Add
                                    </button>
                                </div>
                                <div id="interests-container">
                                    <!-- Dynamic interests will be added here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <button type="button" class="btn btn-secondary" id="clear-all">Clear All Data</button>
                    <button type="button" class="btn btn-primary-custom" id="preview-resume">
                        <i class="fas fa-eye"></i> Preview Resume
                    </button>
                </div>
            </div>
        </div>

        <!-- Preview Page -->
        <div id="preview-page" class="hidden">
            <div class="preview-container">
                <h2 class="section-title">Resume Preview</h2>
                
                <div class="template-selector">
                    <div class="template-option active" data-template="simple">
                        <div class="template-preview" style="height: 80px; background: linear-gradient(to right, #f8f9fa 50%, #3498db 50%); border-radius: 4px;"></div>
                        <div class="template-name">Simple</div>
                    </div>
                    <div class="template-option" data-template="modern">
                        <div class="template-preview" style="height: 80px; background: linear-gradient(to bottom, #3498db 40%, #f8f9fa 40%); border-radius: 4px;"></div>
                        <div class="template-name">Modern</div>
                    </div>
                    <div class="template-option" data-template="classic">
                        <div class="template-preview" style="height: 80px; background: linear-gradient(to right, #2c3e50 30%, #f8f9fa 30%); border-radius: 4px;"></div>
                        <div class="template-name">Classic</div>
                    </div>
                    <div class="template-option" data-template="professional">
                        <div class="template-preview" style="height: 80px; background: linear-gradient(to bottom, #2c3e50 20%, #f8f9fa 20%); border-radius: 4px;"></div>
                        <div class="template-name">Professional</div>
                    </div>
                </div>

                <div class="resume-container">
                    <div class="resume-preview template-simple" id="resume-preview">
                        <!-- Resume content will be dynamically generated here -->
                    </div>
                </div>

                <div class="action-buttons d-flex justify-content-between align-items-center">
                    <button class="btn btn-back" id="back-to-form">
                        <i class="fas fa-arrow-left"></i> Back to Form
                    </button>
                    <button class="btn btn-download" id="download-pdf">
                        <i class="fas fa-download"></i> Download PDF
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./resume-builder.js"></script>
</body>
</html>