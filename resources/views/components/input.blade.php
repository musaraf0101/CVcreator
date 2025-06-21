<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Create Your CV Here...</h4>

                    <form action="{{ route('PDF.generatePDF') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control rounded-3" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control rounded-3" id="email" name="email" placeholder="you@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control rounded-3" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                            </div>
                        </div>

                        <div id="social-section">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Platform</label>
                                    <input type="text" class="form-control rounded-3" name="social_platform[]" placeholder="e.g. LinkedIn, GitHub" required>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">URL</label>
                                    <input type="url" class="form-control rounded-3" name="social_url[]" placeholder="https://yourprofile.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 text-end">
                            <button type="button" id="add-social" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Social Media
                            </button>
                        </div>


                        <div class="mb-3">
                            <label for="objective" class="form-label">Objective</label>
                            <textarea class="form-control rounded-3" id="objective" name="objective" rows="4" placeholder="Your Objective" required></textarea>
                        </div>
                        <div id="education-section">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Education</label>
                                    <input type="text" class="form-control rounded-3" name="education[]" placeholder="Education" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Qualification</label>
                                    <input type="text" class="form-control rounded-3" name="qualification[]" placeholder="Qualification" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="button" id="add-education" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Education
                            </button>
                        </div>
                        <div id="project-section">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Project Title</label>
                                    <input type="text" class="form-control rounded-3" name="project_title[]" placeholder="Project Title" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Project Link</label>
                                    <input type="text" class="form-control rounded-3" name="project_link[]" placeholder="Project Link" required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label class="form-label">Project Description</label>
                                    <textarea class="form-control rounded-3" name="project_description[]" rows="3" placeholder="Describe your project briefly..."></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="mb-4 text-end">
                            <button type="button" id="add-project" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Project
                            </button>
                        </div>


                        <div id="skill-section">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Skill</label>
                                    <input type="text" class="form-control rounded-3" name="skill[]" placeholder="e.g. Laravel, React" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Proficiency</label>
                                    <input type="text" class="form-control rounded-3" name="proficiency[]" placeholder="e.g. Beginner, Intermediate, Expert" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 text-end">
                            <button type="button" id="add-skill" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Skill
                            </button>
                        </div>


                        <div id="certificate-section">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Institute Name</label>
                                    <input type="text" class="form-control rounded-3" name="certificate_institute[]" placeholder="Institute Name" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Start Date</label>
                                    <input type="date" class="form-control rounded-3" name="certificate_start[]" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">End Date</label>
                                    <input type="date" class="form-control rounded-3" name="certificate_end[]" required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label class="form-label">Certificate Link</label>
                                    <input type="url" class="form-control rounded-3" name="certificate_link[]" placeholder="https://example.com/certificate" required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control rounded-3" name="certificate_description[]" rows="3" placeholder="Brief description of the certificate..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 text-end">
                            <button type="button" id="add-certificate" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Certificate
                            </button>
                        </div>


                        <div class="d-grid">
                            <a href="/generate-pdf" class="btn btn-primary">View CV</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('add-education').addEventListener('click', function() {
        const container = document.getElementById('education-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3');

        newRow.innerHTML = `
            <div class="col-md-6">
                <label class="form-label">Education</label>
                <input type="text" class="form-control rounded-3" name="education[]" placeholder="Education" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Qualification</label>
                <input type="text" class="form-control rounded-3" name="qualification[]" placeholder="Qualification" required>
            </div>
        `;
        container.appendChild(newRow);
    });

    document.getElementById('add-project').addEventListener('click', function() {
        const container = document.getElementById('project-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3');

        newRow.innerHTML = `
        <div class="col-md-6">
            <label class="form-label">Project Title</label>
            <input type="text" class="form-control rounded-3" name="project_title[]" placeholder="Project Title" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Project Link</label>
            <input type="text" class="form-control rounded-3" name="project_link[]" placeholder="Project Link" required>
        </div>
        <div class="col-12 mt-2">
            <label class="form-label">Project Description</label>
            <textarea class="form-control rounded-3" name="project_description[]" rows="3" placeholder="Describe your project briefly..."></textarea>
        </div>
    `;

        container.appendChild(newRow);
    });


    document.getElementById('add-skill').addEventListener('click', function() {
        const container = document.getElementById('skill-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3');

        newRow.innerHTML = `
            <div class="col-md-6">
                <label class="form-label">Skill</label>
                <input type="text" class="form-control rounded-3" name="skill[]" placeholder="e.g. Laravel, React" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Proficiency</label>
                <input type="text" class="form-control rounded-3" name="proficiency[]" placeholder="e.g. Beginner, Intermediate, Expert" required>
            </div>
        `;
        container.appendChild(newRow);
    });

    document.getElementById('add-certificate').addEventListener('click', function() {
        const container = document.getElementById('certificate-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3');

        newRow.innerHTML = `
        <div class="col-md-6">
            <label class="form-label">Institute Name</label>
            <input type="text" class="form-control rounded-3" name="certificate_institute[]" placeholder="Institute Name" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Start Date</label>
            <input type="date" class="form-control rounded-3" name="certificate_start[]" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">End Date</label>
            <input type="date" class="form-control rounded-3" name="certificate_end[]" required>
        </div>
        <div class="col-12 mt-2">
            <label class="form-label">Certificate Link</label>
            <input type="url" class="form-control rounded-3" name="certificate_link[]" placeholder="https://example.com/certificate" required>
        </div>
        <div class="col-12 mt-2">
            <label class="form-label">Description</label>
            <textarea class="form-control rounded-3" name="certificate_description[]" rows="3" placeholder="Brief description of the certificate..."></textarea>
        </div>
    `;

        container.appendChild(newRow);
    });

    document.getElementById('add-social').addEventListener('click', function() {
        const container = document.getElementById('social-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3');

        newRow.innerHTML = `
        <div class="col-md-4">
            <label class="form-label">Platform</label>
            <input type="text" class="form-control rounded-3" name="social_platform[]" placeholder="e.g. LinkedIn, GitHub" required>
        </div>
        <div class="col-md-8">
            <label class="form-label">URL</label>
            <input type="url" class="form-control rounded-3" name="social_url[]" placeholder="https://yourprofile.com" required>
        </div>
    `;

        container.appendChild(newRow);
    });
</script>