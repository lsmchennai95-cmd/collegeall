
// Data structure to hold resume information
let resumeData = {
    basicInfo: {
        name: '',
        email: '',
        phone: '',
        location: '',
        linkedin: '',
        github: '',
        website: '',
        summary: ''
    },
    workExperience: [],
    education: [],
    skills: [],
    projects: [],
    certifications: [],
    languages: [],
    interests: []
};

// Template for dynamic items
const workExperienceTemplate = `
            <div class="dynamic-item" data-id="{id}">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Job Title *</label>
                        <input type="text" class="form-control work-title" required>
                        <div class="alert-error work-title-error"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Company *</label>
                        <input type="text" class="form-control work-company" required>
                        <div class="alert-error work-company-error"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Start Date *</label>
                        <input type="month" class="form-control work-start" required>
                        <div class="alert-error work-start-error"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">End Date</label>
                        <input type="month" class="form-control work-end">
                        <div class="form-check mt-2">
                            <input class="form-check-input work-current" type="checkbox">
                            <label class="form-check-label">I currently work here</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Achievements & Responsibilities</label>
                    <textarea class="form-control work-achievements" rows="3"></textarea>
                </div>
                <button type="button" class="btn btn-remove remove-work">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;

const educationTemplate = `
            <div class="dynamic-item" data-id="{id}">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Degree *</label>
                        <input type="text" class="form-control education-degree" required>
                        <div class="alert-error education-degree-error"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Institution *</label>
                        <input type="text" class="form-control education-institution" required>
                        <div class="alert-error education-institution-error"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Year *</label>
                        <input type="number" class="form-control education-year" min="1900" max="2030" required>
                        <div class="alert-error education-year-error"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Grade/Percentage</label>
                        <input type="text" class="form-control education-grade">
                    </div>
                </div>
                <button type="button" class="btn btn-remove remove-education">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;

const projectTemplate = `
            <div class="dynamic-item" data-id="{id}">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Title *</label>
                        <input type="text" class="form-control project-title" required>
                        <div class="alert-error project-title-error"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Technologies Used</label>
                        <input type="text" class="form-control project-technologies">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control project-description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Project Link</label>
                    <input type="url" class="form-control project-link">
                </div>
                <button type="button" class="btn btn-remove remove-project">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;

// Initialize the application
document.addEventListener('DOMContentLoaded', function () {
    // Load data from localStorage if available
    loadFromLocalStorage();

    // Set up event listeners
    setupEventListeners();

    // Render initial dynamic items
    renderDynamicItems();

    // Auto-save functionality
    setupAutoSave();
});

// Set up all event listeners
function setupEventListeners() {
    // Form navigation
    document.getElementById('preview-resume').addEventListener('click', previewResume);
    document.getElementById('back-to-form').addEventListener('click', backToForm);

    // Dynamic item addition
    document.getElementById('add-work-experience').addEventListener('click', addWorkExperience);
    document.getElementById('add-education').addEventListener('click', addEducation);
    document.getElementById('add-project').addEventListener('click', addProject);
    document.getElementById('add-skill').addEventListener('click', addSkill);
    document.getElementById('add-certification').addEventListener('click', addCertification);
    document.getElementById('add-language').addEventListener('click', addLanguage);
    document.getElementById('add-interest').addEventListener('click', addInterest);

    // Template selection
    document.querySelectorAll('.template-option').forEach(option => {
        option.addEventListener('click', function () {
            document.querySelectorAll('.template-option').forEach(opt => opt.classList.remove('active'));
            this.classList.add('active');
            changeTemplate(this.dataset.template);
        });
    });

    // PDF download
    document.getElementById('download-pdf').addEventListener('click', downloadPDF);

    // Clear all data
    document.getElementById('clear-all').addEventListener('click', clearAllData);
}

// Auto-save functionality
function setupAutoSave() {
    // Basic info auto-save
    document.querySelectorAll('#basic input, #basic textarea').forEach(element => {
        element.addEventListener('input', function () {
            const field = this.id;
            resumeData.basicInfo[field] = this.value;
            saveToLocalStorage();
        });
    });

    // Skills auto-save
    document.getElementById('skill-input').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            addSkill();
        }
    });

    // Certifications auto-save
    document.getElementById('certification-input').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            addCertification();
        }
    });

    // Languages auto-save
    document.getElementById('language-input').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            addLanguage();
        }
    });

    // Interests auto-save
    document.getElementById('interest-input').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            addInterest();
        }
    });
}

// Load data from localStorage
function loadFromLocalStorage() {
    const savedData = localStorage.getItem('resumeData');
    if (savedData) {
        resumeData = JSON.parse(savedData);

        // Populate basic info fields
        for (const key in resumeData.basicInfo) {
            const element = document.getElementById(key);
            if (element) {
                element.value = resumeData.basicInfo[key];
            }
        }
    }
}

// Save data to localStorage
function saveToLocalStorage() {
    localStorage.setItem('resumeData', JSON.stringify(resumeData));
}

// Render dynamic items from saved data
function renderDynamicItems() {
    // Work Experience
    resumeData.workExperience.forEach((work, index) => {
        addWorkExperience(false);
        const container = document.getElementById('work-experience-container');
        const item = container.lastElementChild;

        item.querySelector('.work-title').value = work.title || '';
        item.querySelector('.work-company').value = work.company || '';
        item.querySelector('.work-start').value = work.start || '';
        item.querySelector('.work-end').value = work.end || '';
        item.querySelector('.work-current').checked = work.current || false;
        item.querySelector('.work-achievements').value = work.achievements || '';

        if (work.current) {
            item.querySelector('.work-end').disabled = true;
        }
    });

    // Education
    resumeData.education.forEach((edu, index) => {
        addEducation(false);
        const container = document.getElementById('education-container');
        const item = container.lastElementChild;

        item.querySelector('.education-degree').value = edu.degree || '';
        item.querySelector('.education-institution').value = edu.institution || '';
        item.querySelector('.education-year').value = edu.year || '';
        item.querySelector('.education-grade').value = edu.grade || '';
    });

    // Projects
    resumeData.projects.forEach((project, index) => {
        addProject(false);
        const container = document.getElementById('projects-container');
        const item = container.lastElementChild;

        item.querySelector('.project-title').value = project.title || '';
        item.querySelector('.project-technologies').value = project.technologies || '';
        item.querySelector('.project-description').value = project.description || '';
        item.querySelector('.project-link').value = project.link || '';
    });

    // Skills
    resumeData.skills.forEach(skill => {
        addSkillToDOM(skill.name, skill.category);
    });

    // Certifications
    resumeData.certifications.forEach(cert => {
        addCertificationToDOM(cert);
    });

    // Languages
    resumeData.languages.forEach(lang => {
        addLanguageToDOM(lang);
    });

    // Interests
    resumeData.interests.forEach(interest => {
        addInterestToDOM(interest);
    });
}

// Add work experience
function addWorkExperience(save = true) {
    const container = document.getElementById('work-experience-container');
    const id = Date.now();
    const template = workExperienceTemplate.replace(/{id}/g, id);
    container.insertAdjacentHTML('beforeend', template);

    const newItem = container.lastElementChild;

    // Set up event listeners for the new item
    newItem.querySelector('.remove-work').addEventListener('click', function () {
        removeWorkExperience(id);
    });

    newItem.querySelector('.work-current').addEventListener('change', function () {
        const endDate = newItem.querySelector('.work-end');
        endDate.disabled = this.checked;
        if (this.checked) {
            endDate.value = '';
        }
    });

    // Auto-save for work experience fields
    newItem.querySelectorAll('input, textarea').forEach(element => {
        element.addEventListener('input', function () {
            updateWorkExperience(id);
        });
    });

    if (save) {
        resumeData.workExperience.push({
            id: id,
            title: '',
            company: '',
            start: '',
            end: '',
            current: false,
            achievements: ''
        });
        saveToLocalStorage();
    }
}

// Update work experience in data model
function updateWorkExperience(id) {
    const item = document.querySelector(`.dynamic-item[data-id="${id}"]`);
    const index = resumeData.workExperience.findIndex(work => work.id === id);

    if (index !== -1) {
        resumeData.workExperience[index] = {
            id: id,
            title: item.querySelector('.work-title').value,
            company: item.querySelector('.work-company').value,
            start: item.querySelector('.work-start').value,
            end: item.querySelector('.work-end').value,
            current: item.querySelector('.work-current').checked,
            achievements: item.querySelector('.work-achievements').value
        };
        saveToLocalStorage();
    }
}

// Remove work experience
function removeWorkExperience(id) {
    resumeData.workExperience = resumeData.workExperience.filter(work => work.id !== id);
    document.querySelector(`.dynamic-item[data-id="${id}"]`).remove();
    saveToLocalStorage();
}

// Add education
function addEducation(save = true) {
    const container = document.getElementById('education-container');
    const id = Date.now();
    const template = educationTemplate.replace(/{id}/g, id);
    container.insertAdjacentHTML('beforeend', template);

    const newItem = container.lastElementChild;

    // Set up event listeners for the new item
    newItem.querySelector('.remove-education').addEventListener('click', function () {
        removeEducation(id);
    });

    // Auto-save for education fields
    newItem.querySelectorAll('input').forEach(element => {
        element.addEventListener('input', function () {
            updateEducation(id);
        });
    });

    if (save) {
        resumeData.education.push({
            id: id,
            degree: '',
            institution: '',
            year: '',
            grade: ''
        });
        saveToLocalStorage();
    }
}

// Update education in data model
function updateEducation(id) {
    const item = document.querySelector(`.dynamic-item[data-id="${id}"]`);
    const index = resumeData.education.findIndex(edu => edu.id === id);

    if (index !== -1) {
        resumeData.education[index] = {
            id: id,
            degree: item.querySelector('.education-degree').value,
            institution: item.querySelector('.education-institution').value,
            year: item.querySelector('.education-year').value,
            grade: item.querySelector('.education-grade').value
        };
        saveToLocalStorage();
    }
}

// Remove education
function removeEducation(id) {
    resumeData.education = resumeData.education.filter(edu => edu.id !== id);
    document.querySelector(`.dynamic-item[data-id="${id}"]`).remove();
    saveToLocalStorage();
}

// Add project
function addProject(save = true) {
    const container = document.getElementById('projects-container');
    const id = Date.now();
    const template = projectTemplate.replace(/{id}/g, id);
    container.insertAdjacentHTML('beforeend', template);

    const newItem = container.lastElementChild;

    // Set up event listeners for the new item
    newItem.querySelector('.remove-project').addEventListener('click', function () {
        removeProject(id);
    });

    // Auto-save for project fields
    newItem.querySelectorAll('input, textarea').forEach(element => {
        element.addEventListener('input', function () {
            updateProject(id);
        });
    });

    if (save) {
        resumeData.projects.push({
            id: id,
            title: '',
            technologies: '',
            description: '',
            link: ''
        });
        saveToLocalStorage();
    }
}

// Update project in data model
function updateProject(id) {
    const item = document.querySelector(`.dynamic-item[data-id="${id}"]`);
    const index = resumeData.projects.findIndex(project => project.id === id);

    if (index !== -1) {
        resumeData.projects[index] = {
            id: id,
            title: item.querySelector('.project-title').value,
            technologies: item.querySelector('.project-technologies').value,
            description: item.querySelector('.project-description').value,
            link: item.querySelector('.project-link').value
        };
        saveToLocalStorage();
    }
}

// Remove project
function removeProject(id) {
    resumeData.projects = resumeData.projects.filter(project => project.id !== id);
    document.querySelector(`.dynamic-item[data-id="${id}"]`).remove();
    saveToLocalStorage();
}

// Add skill
function addSkill() {
    const skillInput = document.getElementById('skill-input');
    const skillCategory = document.getElementById('skill-category');
    const skill = skillInput.value.trim();
    const category = skillCategory.value;

    if (skill) {
        // Check if skill already exists
        if (!resumeData.skills.some(s => s.name === skill && s.category === category)) {
            resumeData.skills.push({
                name: skill,
                category: category
            });

            addSkillToDOM(skill, category);
            saveToLocalStorage();
        }

        skillInput.value = '';
    }
}

// Add skill to DOM
function addSkillToDOM(skill, category) {
    const container = document.getElementById('skills-container');
    const id = Date.now();

    const skillElement = document.createElement('div');
    skillElement.className = 'dynamic-item';
    skillElement.innerHTML = `
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="fw-bold">${skill}</span>
                        <span class="badge bg-secondary ms-2">${category}</span>
                    </div>
                    <button type="button" class="btn btn-remove remove-skill" data-skill="${skill}" data-category="${category}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;

    container.appendChild(skillElement);

    // Add event listener for remove button
    skillElement.querySelector('.remove-skill').addEventListener('click', function () {
        removeSkill(skill, category);
    });
}

// Remove skill
function removeSkill(skill, category) {
    resumeData.skills = resumeData.skills.filter(s => !(s.name === skill && s.category === category));

    // Remove from DOM
    document.querySelectorAll('.remove-skill').forEach(button => {
        if (button.dataset.skill === skill && button.dataset.category === category) {
            button.closest('.dynamic-item').remove();
        }
    });

    saveToLocalStorage();
}

// Add certification
function addCertification() {
    const input = document.getElementById('certification-input');
    const cert = input.value.trim();

    if (cert) {
        if (!resumeData.certifications.includes(cert)) {
            resumeData.certifications.push(cert);
            addCertificationToDOM(cert);
            saveToLocalStorage();
        }

        input.value = '';
    }
}

// Add certification to DOM
function addCertificationToDOM(cert) {
    const container = document.getElementById('certifications-container');
    const certElement = document.createElement('div');
    certElement.className = 'dynamic-item';
    certElement.innerHTML = `
                <div class="d-flex justify-content-between align-items-center">
                    <span>${cert}</span>
                    <button type="button" class="btn btn-remove remove-certification" data-cert="${cert}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;

    container.appendChild(certElement);

    // Add event listener for remove button
    certElement.querySelector('.remove-certification').addEventListener('click', function () {
        removeCertification(cert);
    });
}

// Remove certification
function removeCertification(cert) {
    resumeData.certifications = resumeData.certifications.filter(c => c !== cert);

    // Remove from DOM
    document.querySelectorAll('.remove-certification').forEach(button => {
        if (button.dataset.cert === cert) {
            button.closest('.dynamic-item').remove();
        }
    });

    saveToLocalStorage();
}

// Add language
function addLanguage() {
    const input = document.getElementById('language-input');
    const lang = input.value.trim();

    if (lang) {
        if (!resumeData.languages.includes(lang)) {
            resumeData.languages.push(lang);
            addLanguageToDOM(lang);
            saveToLocalStorage();
        }

        input.value = '';
    }
}

// Add language to DOM
function addLanguageToDOM(lang) {
    const container = document.getElementById('languages-container');
    const langElement = document.createElement('div');
    langElement.className = 'dynamic-item';
    langElement.innerHTML = `
                <div class="d-flex justify-content-between align-items-center">
                    <span>${lang}</span>
                    <button type="button" class="btn btn-remove remove-language" data-lang="${lang}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;

    container.appendChild(langElement);

    // Add event listener for remove button
    langElement.querySelector('.remove-language').addEventListener('click', function () {
        removeLanguage(lang);
    });
}

// Remove language
function removeLanguage(lang) {
    resumeData.languages = resumeData.languages.filter(l => l !== lang);

    // Remove from DOM
    document.querySelectorAll('.remove-language').forEach(button => {
        if (button.dataset.lang === lang) {
            button.closest('.dynamic-item').remove();
        }
    });

    saveToLocalStorage();
}

// Add interest
function addInterest() {
    const input = document.getElementById('interest-input');
    const interest = input.value.trim();

    if (interest) {
        if (!resumeData.interests.includes(interest)) {
            resumeData.interests.push(interest);
            addInterestToDOM(interest);
            saveToLocalStorage();
        }

        input.value = '';
    }
}

// Add interest to DOM
function addInterestToDOM(interest) {
    const container = document.getElementById('interests-container');
    const interestElement = document.createElement('div');
    interestElement.className = 'dynamic-item';
    interestElement.innerHTML = `
                <div class="d-flex justify-content-between align-items-center">
                    <span>${interest}</span>
                    <button type="button" class="btn btn-remove remove-interest" data-interest="${interest}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;

    container.appendChild(interestElement);

    // Add event listener for remove button
    interestElement.querySelector('.remove-interest').addEventListener('click', function () {
        removeInterest(interest);
    });
}

// Remove interest
function removeInterest(interest) {
    resumeData.interests = resumeData.interests.filter(i => i !== interest);

    // Remove from DOM
    document.querySelectorAll('.remove-interest').forEach(button => {
        if (button.dataset.interest === interest) {
            button.closest('.dynamic-item').remove();
        }
    });

    saveToLocalStorage();
}

// Validate form before preview
function validateForm() {
    let isValid = true;

    // Clear previous errors
    document.querySelectorAll('.alert-error').forEach(error => {
        error.textContent = '';
    });

    // Validate basic info
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();

    if (!name) {
        document.getElementById('name-error').textContent = 'Name is required';
        isValid = false;
    }

    if (!email) {
        document.getElementById('email-error').textContent = 'Email is required';
        isValid = false;
    } else if (!isValidEmail(email)) {
        document.getElementById('email-error').textContent = 'Please enter a valid email address';
        isValid = false;
    }

    if (!phone) {
        document.getElementById('phone-error').textContent = 'Phone is required';
        isValid = false;
    } else if (!isValidPhone(phone)) {
        document.getElementById('phone-error').textContent = 'Please enter a valid phone number';
        isValid = false;
    }

    // Validate work experience
    document.querySelectorAll('.work-title').forEach((title, index) => {
        if (!title.value.trim()) {
            title.closest('.dynamic-item').querySelector('.work-title-error').textContent = 'Job title is required';
            isValid = false;
        }
    });

    document.querySelectorAll('.work-company').forEach((company, index) => {
        if (!company.value.trim()) {
            company.closest('.dynamic-item').querySelector('.work-company-error').textContent = 'Company is required';
            isValid = false;
        }
    });

    document.querySelectorAll('.work-start').forEach((start, index) => {
        if (!start.value) {
            start.closest('.dynamic-item').querySelector('.work-start-error').textContent = 'Start date is required';
            isValid = false;
        }
    });

    // Validate education
    document.querySelectorAll('.education-degree').forEach((degree, index) => {
        if (!degree.value.trim()) {
            degree.closest('.dynamic-item').querySelector('.education-degree-error').textContent = 'Degree is required';
            isValid = false;
        }
    });

    document.querySelectorAll('.education-institution').forEach((institution, index) => {
        if (!institution.value.trim()) {
            institution.closest('.dynamic-item').querySelector('.education-institution-error').textContent = 'Institution is required';
            isValid = false;
        }
    });

    document.querySelectorAll('.education-year').forEach((year, index) => {
        if (!year.value) {
            year.closest('.dynamic-item').querySelector('.education-year-error').textContent = 'Year is required';
            isValid = false;
        }
    });

    // Validate projects
    document.querySelectorAll('.project-title').forEach((title, index) => {
        if (!title.value.trim()) {
            title.closest('.dynamic-item').querySelector('.project-title-error').textContent = 'Project title is required';
            isValid = false;
        }
    });

    return isValid;
}

// Email validation
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Phone validation (basic)
function isValidPhone(phone) {
    const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
    return phoneRegex.test(phone);
}

// Preview resume
function previewResume() {
    if (!validateForm()) {
        alert('Please fix the errors in the form before previewing your resume.');
        return;
    }

    // Update resume data with latest form values
    updateBasicInfo();

    // Generate preview
    generateResumePreview();

    // Switch to preview page
    document.getElementById('form-page').classList.add('hidden');
    document.getElementById('preview-page').classList.remove('hidden');
}

// Update basic info in data model
function updateBasicInfo() {
    for (const key in resumeData.basicInfo) {
        const element = document.getElementById(key);
        if (element) {
            resumeData.basicInfo[key] = element.value;
        }
    }
    saveToLocalStorage();
}

// Generate resume preview
function generateResumePreview() {
    const preview = document.getElementById('resume-preview');
    preview.innerHTML = '';

    // Header section
    const header = document.createElement('div');
    header.className = 'resume-header';

    const name = document.createElement('h1');
    name.className = 'resume-name';
    name.textContent = resumeData.basicInfo.name || 'Your Name';
    header.appendChild(name);

    const contact = document.createElement('div');
    contact.className = 'resume-contact';

    if (resumeData.basicInfo.email) {
        contact.appendChild(createContactItem('fas fa-envelope', resumeData.basicInfo.email));
    }

    if (resumeData.basicInfo.phone) {
        contact.appendChild(createContactItem('fas fa-phone', resumeData.basicInfo.phone));
    }

    if (resumeData.basicInfo.location) {
        contact.appendChild(createContactItem('fas fa-map-marker-alt', resumeData.basicInfo.location));
    }

    if (resumeData.basicInfo.linkedin) {
        contact.appendChild(createContactItem('fab fa-linkedin', 'LinkedIn', resumeData.basicInfo.linkedin));
    }

    if (resumeData.basicInfo.github) {
        contact.appendChild(createContactItem('fab fa-github', 'GitHub', resumeData.basicInfo.github));
    }

    if (resumeData.basicInfo.website) {
        contact.appendChild(createContactItem('fas fa-globe', 'Website', resumeData.basicInfo.website));
    }

    header.appendChild(contact);
    preview.appendChild(header);

    // Summary section
    if (resumeData.basicInfo.summary) {
        const summarySection = createSection('Professional Summary');
        const summaryContent = document.createElement('p');
        summaryContent.textContent = resumeData.basicInfo.summary;
        summarySection.appendChild(summaryContent);
        preview.appendChild(summarySection);
    }

    // Work Experience section
    if (resumeData.workExperience.length > 0) {
        const workSection = createSection('Work Experience');

        resumeData.workExperience.forEach(work => {
            const workItem = document.createElement('div');
            workItem.className = 'resume-item';

            const workHeader = document.createElement('div');
            workHeader.className = 'd-flex justify-content-between align-items-start mb-2';

            const workTitleCompany = document.createElement('div');
            const workTitle = document.createElement('div');
            workTitle.className = 'resume-item-title';
            workTitle.textContent = work.title;

            const workCompany = document.createElement('div');
            workCompany.className = 'resume-item-subtitle';
            workCompany.textContent = work.company;

            workTitleCompany.appendChild(workTitle);
            workTitleCompany.appendChild(workCompany);

            const workDuration = document.createElement('div');
            workDuration.className = 'resume-item-duration';

            if (work.start) {
                const startDate = new Date(work.start);
                const startText = startDate.toLocaleDateString('en-US', { year: 'numeric', month: 'short' });

                if (work.current) {
                    workDuration.textContent = `${startText} - Present`;
                } else if (work.end) {
                    const endDate = new Date(work.end);
                    const endText = endDate.toLocaleDateString('en-US', { year: 'numeric', month: 'short' });
                    workDuration.textContent = `${startText} - ${endText}`;
                } else {
                    workDuration.textContent = startText;
                }
            }

            workHeader.appendChild(workTitleCompany);
            workHeader.appendChild(workDuration);
            workItem.appendChild(workHeader);

            if (work.achievements) {
                const achievements = document.createElement('ul');
                achievements.className = 'mb-0';

                work.achievements.split('\n').forEach(achievement => {
                    if (achievement.trim()) {
                        const li = document.createElement('li');
                        li.textContent = achievement;
                        achievements.appendChild(li);
                    }
                });

                workItem.appendChild(achievements);
            }

            workSection.appendChild(workItem);
        });

        preview.appendChild(workSection);
    }

    // Education section
    if (resumeData.education.length > 0) {
        const educationSection = createSection('Education');

        resumeData.education.forEach(edu => {
            const eduItem = document.createElement('div');
            eduItem.className = 'resume-item';

            const eduHeader = document.createElement('div');
            eduHeader.className = 'd-flex justify-content-between align-items-start mb-2';

            const eduDegreeInstitution = document.createElement('div');
            const eduDegree = document.createElement('div');
            eduDegree.className = 'resume-item-title';
            eduDegree.textContent = edu.degree;

            const eduInstitution = document.createElement('div');
            eduInstitution.className = 'resume-item-subtitle';
            eduInstitution.textContent = edu.institution;

            eduDegreeInstitution.appendChild(eduDegree);
            eduDegreeInstitution.appendChild(eduInstitution);

            const eduYear = document.createElement('div');
            eduYear.className = 'resume-item-duration';
            eduYear.textContent = edu.year;

            eduHeader.appendChild(eduDegreeInstitution);
            eduHeader.appendChild(eduYear);
            eduItem.appendChild(eduHeader);

            if (edu.grade) {
                const grade = document.createElement('div');
                grade.textContent = `Grade: ${edu.grade}`;
                eduItem.appendChild(grade);
            }

            educationSection.appendChild(eduItem);
        });

        preview.appendChild(educationSection);
    }

    // Skills section
    if (resumeData.skills.length > 0) {
        const skillsSection = createSection('Skills');
        const skillsContainer = document.createElement('div');
        skillsContainer.className = 'resume-skills';

        // Group skills by category
        const skillsByCategory = {};
        resumeData.skills.forEach(skill => {
            if (!skillsByCategory[skill.category]) {
                skillsByCategory[skill.category] = [];
            }
            skillsByCategory[skill.category].push(skill.name);
        });

        for (const category in skillsByCategory) {
            const categoryDiv = document.createElement('div');
            categoryDiv.className = 'mb-2';

            const categoryTitle = document.createElement('div');
            categoryTitle.className = 'fw-bold mb-1';
            categoryTitle.textContent = `${category}:`;
            categoryDiv.appendChild(categoryTitle);

            const skillsList = document.createElement('div');
            skillsList.className = 'resume-skills';

            skillsByCategory[category].forEach(skill => {
                const skillTag = document.createElement('span');
                skillTag.className = 'skill-tag';
                skillTag.textContent = skill;
                skillsList.appendChild(skillTag);
            });

            categoryDiv.appendChild(skillsList);
            skillsContainer.appendChild(categoryDiv);
        }

        skillsSection.appendChild(skillsContainer);
        preview.appendChild(skillsSection);
    }

    // Projects section
    if (resumeData.projects.length > 0) {
        const projectsSection = createSection('Projects');

        resumeData.projects.forEach(project => {
            const projectItem = document.createElement('div');
            projectItem.className = 'resume-item';

            const projectHeader = document.createElement('div');
            projectHeader.className = 'd-flex justify-content-between align-items-start mb-2';

            const projectTitle = document.createElement('div');
            projectTitle.className = 'resume-item-title';
            projectTitle.textContent = project.title;

            projectHeader.appendChild(projectTitle);

            if (project.link) {
                const projectLink = document.createElement('a');
                projectLink.href = project.link;
                projectLink.target = '_blank';
                projectLink.innerHTML = '<i class="fas fa-external-link-alt"></i> View Project';
                projectLink.className = 'btn btn-sm btn-outline-primary';
                projectHeader.appendChild(projectLink);
            }

            projectItem.appendChild(projectHeader);

            if (project.technologies) {
                const technologies = document.createElement('div');
                technologies.className = 'mb-2';
                technologies.innerHTML = `<strong>Technologies:</strong> ${project.technologies}`;
                projectItem.appendChild(technologies);
            }

            if (project.description) {
                const description = document.createElement('div');
                description.textContent = project.description;
                projectItem.appendChild(description);
            }

            projectsSection.appendChild(projectItem);
        });

        preview.appendChild(projectsSection);
    }

    // Certifications section
    if (resumeData.certifications.length > 0) {
        const certificationsSection = createSection('Certifications & Awards');

        const certList = document.createElement('ul');
        resumeData.certifications.forEach(cert => {
            const certItem = document.createElement('li');
            certItem.textContent = cert;
            certList.appendChild(certItem);
        });

        certificationsSection.appendChild(certList);
        preview.appendChild(certificationsSection);
    }

    // Languages section
    if (resumeData.languages.length > 0) {
        const languagesSection = createSection('Languages');

        const languagesList = document.createElement('div');
        languagesList.className = 'resume-skills';

        resumeData.languages.forEach(lang => {
            const langTag = document.createElement('span');
            langTag.className = 'skill-tag';
            langTag.textContent = lang;
            languagesList.appendChild(langTag);
        });

        languagesSection.appendChild(languagesList);
        preview.appendChild(languagesSection);
    }

    // Interests section
    if (resumeData.interests.length > 0) {
        const interestsSection = createSection('Interests & Hobbies');

        const interestsList = document.createElement('div');
        interestsList.className = 'resume-skills';

        resumeData.interests.forEach(interest => {
            const interestTag = document.createElement('span');
            interestTag.className = 'skill-tag';
            interestTag.textContent = interest;
            interestsList.appendChild(interestTag);
        });

        interestsSection.appendChild(interestsList);
        preview.appendChild(interestsSection);
    }
}

// Create a contact item for the header
function createContactItem(iconClass, text, link = null) {
    const item = document.createElement('div');
    item.className = 'resume-contact-item';

    const icon = document.createElement('i');
    icon.className = iconClass;
    icon.style.marginRight = '5px';

    item.appendChild(icon);

    if (link) {
        const linkElement = document.createElement('a');
        linkElement.href = link;
        linkElement.target = '_blank';
        linkElement.textContent = text;
        item.appendChild(linkElement);
    } else {
        item.appendChild(document.createTextNode(text));
    }

    return item;
}

// Create a section with title
function createSection(title) {
    const section = document.createElement('div');
    section.className = 'resume-section';

    const sectionTitle = document.createElement('h2');
    sectionTitle.className = 'resume-section-title';
    sectionTitle.textContent = title;

    section.appendChild(sectionTitle);
    return section;
}

// Change template
function changeTemplate(template) {
    const preview = document.getElementById('resume-preview');
    preview.className = 'resume-preview';
    preview.classList.add(`template-${template}`);
}

// Back to form
function backToForm() {
    document.getElementById('preview-page').classList.add('hidden');
    document.getElementById('form-page').classList.remove('hidden');
}

// Download PDF
function downloadPDF() {
    const element = document.getElementById('resume-preview');
    
    // Clone the element to avoid affecting the display
    const elementClone = element.cloneNode(true);
    
    // Add section-block classes to all resume sections for proper page breaks
    const sections = elementClone.querySelectorAll('.resume-section');
    sections.forEach(section => {
        const sectionBlock = document.createElement('div');
        sectionBlock.className = 'section-block';
        section.parentNode.insertBefore(sectionBlock, section);
        sectionBlock.appendChild(section);
    });

    const opt = {
        margin: [10, 10, 10, 10],
        filename: 'resume.pdf',
        image: { 
            type: 'jpeg', 
            quality: 1 
        },
        html2canvas: {
            scale: 2,
            useCORS: true,
            scrollY: 0,
            windowHeight: document.documentElement.offsetHeight
        },
        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'portrait'
        },
        pagebreak: { 
            mode: ['avoid-all', 'css', 'legacy'] 
        }
    };

    html2pdf().set(opt).from(elementClone).save();
}


// Clear all data
function clearAllData() {
    if (confirm('Are you sure you want to clear all data? This action cannot be undone.')) {
        localStorage.removeItem('resumeData');
        location.reload();
    }
}
