<style>
    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid #444;
        margin-top: 20px;
        font-size: 0.9em;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Create Your CV Here...</h4>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('PDF.generatePDF') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control rounded-3" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control rounded-3" id="email" name="email" placeholder="you@example.com" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control rounded-3" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required>
                            </div>
                        </div>

                        <div id="social-section">
                            @php
                            $socialPlatforms = old('social_platform', ['']);
                            $socialUrls = old('social_url', ['']);
                            @endphp
                            @foreach ($socialPlatforms as $i => $platform)
                            <div class="row mb-3 social-row">
                                <div class="col-md-4">
                                    <label class="form-label">Platform</label>
                                    <input type="text" class="form-control rounded-3" name="social_platform[]" placeholder="e.g. LinkedIn, GitHub" value="{{ $platform }}" required>
                                </div>
                                <div class="col-md-7">
                                    <label class="form-label">URL</label>
                                    <input type="url" class="form-control rounded-3" name="social_url[]" placeholder="https://yourprofile.com" value="{{ $socialUrls[$i] ?? '' }}" required>
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    @if($i > 0)
                                    <button type="button" class="btn btn-danger btn-sm remove-social-btn" title="Remove"><i class="bi bi-x-lg"></i></button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mb-4 text-end">
                            <button type="button" id="add-social" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Social Media
                            </button>
                        </div>

                        <div class="mb-3">
                            <label for="objective" class="form-label">Objective</label>
                            <textarea class="form-control rounded-3" id="objective" name="objective" rows="4" placeholder="Your Objective" required>{{ old('objective') }}</textarea>
                        </div>

                        <div id="education-section">
                            @php
                            $educations = old('education', ['']);
                            $qualifications = old('qualification', ['']);
                            @endphp
                            @foreach ($educations as $i => $education)
                            <div class="row mb-3 education-row">
                                <div class="col-md-6">
                                    <label class="form-label">Education</label>
                                    <input type="text" class="form-control rounded-3" name="education[]" placeholder="Education" value="{{ $education }}" required>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Qualification</label>
                                    <input type="text" class="form-control rounded-3" name="qualification[]" placeholder="Qualification" value="{{ $qualifications[$i] ?? '' }}" required>
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    @if($i > 0)
                                    <button type="button" class="btn btn-danger btn-sm remove-education-btn" title="Remove"><i class="bi bi-x-lg"></i></button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mb-3 text-end">
                            <button type="button" id="add-education" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Education
                            </button>
                        </div>

                        <div id="project-section">
                            @php
                            $projectTitles = old('project_title', ['']);
                            $projectLinks = old('project_link', ['']);
                            $projectDescriptions = old('project_description', ['']);
                            @endphp
                            @foreach ($projectTitles as $i => $title)
                            <div class="row mb-3 project-row">
                                <div class="col-md-6">
                                    <label class="form-label">Project Title</label>
                                    <input type="text" class="form-control rounded-3" name="project_title[]" placeholder="Project Title" value="{{ $title }}" required>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Project Link</label>
                                    <input type="text" class="form-control rounded-3" name="project_link[]" placeholder="Project Link" value="{{ $projectLinks[$i] ?? '' }}" required>
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    @if($i > 0)
                                    <button type="button" class="btn btn-danger btn-sm remove-project-btn" title="Remove"><i class="bi bi-x-lg"></i></button>
                                    @endif
                                </div>
                                <div class="col-12 mt-2">
                                    <label class="form-label">Project Description</label>
                                    <textarea class="form-control rounded-3" name="project_description[]" rows="3" placeholder="Describe your project briefly...">{{ $projectDescriptions[$i] ?? '' }}</textarea>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mb-4 text-end">
                            <button type="button" id="add-project" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Project
                            </button>
                        </div>

                        <div id="skill-section">
                            @php
                            $skills = old('skill', ['']);
                            @endphp
                            @foreach ($skills as $i => $skill)
                            <div class="row mb-3 skill-row">
                                <div class="col-md-11">
                                    <label class="form-label">Skill</label>
                                    <input type="text" class="form-control rounded-3" name="skill[]" placeholder="e.g. Laravel, React" value="{{ $skill }}" required>
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    @if($i > 0)
                                    <button type="button" class="btn btn-danger btn-sm remove-skill-btn" title="Remove"><i class="bi bi-x-lg"></i></button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mb-4 text-end">
                            <button type="button" id="add-skill" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Skill
                            </button>
                        </div>

                        <div id="certificate-section">
                            @php
                            $certificateInstitutes = old('certificate_institute', ['']);
                            $certificateStarts = old('certificate_start', ['']);
                            $certificateEnds = old('certificate_end', ['']);
                            $certificateLinks = old('certificate_link', ['']);
                            $certificateDescriptions = old('certificate_description', ['']);
                            @endphp
                            @foreach ($certificateInstitutes as $i => $institute)
                            <div class="row mb-3 certificate-row">
                                <div class="col-md-6">
                                    <label class="form-label">Institute Name</label>
                                    <input type="text" class="form-control rounded-3" name="certificate_institute[]" placeholder="Institute Name" value="{{ $institute }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Start Date</label>
                                    <input type="date" class="form-control rounded-3" name="certificate_start[]" value="{{ $certificateStarts[$i] ?? '' }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">End Date</label>
                                    <input type="date" class="form-control rounded-3" name="certificate_end[]" value="{{ $certificateEnds[$i] ?? '' }}" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label class="form-label">Certificate Link</label>
                                    <input type="url" class="form-control rounded-3" name="certificate_link[]" placeholder="https://example.com/certificate" value="{{ $certificateLinks[$i] ?? '' }}" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control rounded-3" name="certificate_description[]" rows="3" placeholder="Brief description of the certificate...">{{ $certificateDescriptions[$i] ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end mt-2">
                                    @if($i > 0)
                                    <button type="button" class="btn btn-danger btn-sm remove-certificate-btn" title="Remove"><i class="bi bi-x-lg"></i></button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mb-4 text-end">
                            <button type="button" id="add-certificate" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Certificate
                            </button>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Download CV</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 Musaraf. All rights reserved.</p>
    </div>
</div>

<script>
    function attachRemoveListeners(selector, containerSelector) {
        document.querySelectorAll(selector).forEach(btn => {
            btn.addEventListener('click', () => {
                btn.closest(containerSelector).remove();
            });
        });
    }

    document.getElementById('add-education').addEventListener('click', function() {
        const container = document.getElementById('education-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3', 'education-row');

        newRow.innerHTML = `
            <div class="col-md-6">
                <label class="form-label">Education</label>
                <input type="text" class="form-control rounded-3" name="education[]" placeholder="Education" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">Qualification</label>
                <input type="text" class="form-control rounded-3" name="qualification[]" placeholder="Qualification" required>
            </div>
            <div class="col-md-1 d-flex align-items-end">
                <button type="button" class="btn btn-danger btn-sm remove-education-btn" title="Remove"><i class="bi bi-trash"></i></button>
            </div>
        `;
        container.appendChild(newRow);

        attachRemoveListeners('.remove-education-btn', '.education-row');
    });

    document.getElementById('add-project').addEventListener('click', function() {
        const container = document.getElementById('project-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3', 'project-row');

        newRow.innerHTML = `
            <div class="col-md-6">
                <label class="form-label">Project Title</label>
                <input type="text" class="form-control rounded-3" name="project_title[]" placeholder="Project Title" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">Project Link</label>
                <input type="text" class="form-control rounded-3" name="project_link[]" placeholder="Project Link" required>
            </div>
            <div class="col-md-1 d-flex align-items-end">
                <button type="button" class="btn btn-danger btn-sm remove-project-btn" title="Remove"><i class="bi bi-trash"></i></button>
            </div>
            <div class="col-12 mt-2">
                <label class="form-label">Project Description</label>
                <textarea class="form-control rounded-3" name="project_description[]" rows="3" placeholder="Describe your project briefly..."></textarea>
            </div>
        `;

        container.appendChild(newRow);

        attachRemoveListeners('.remove-project-btn', '.project-row');
    });

    document.getElementById('add-skill').addEventListener('click', function() {
        const container = document.getElementById('skill-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3', 'skill-row');

        newRow.innerHTML = `
            <div class="col-md-11">
                <label class="form-label">Skill</label>
                <input type="text" class="form-control rounded-3" name="skill[]" placeholder="e.g. Laravel, React" required>
            </div>
            <div class="col-md-1 d-flex align-items-end">
                <button type="button" class="btn btn-danger btn-sm remove-skill-btn" title="Remove"><i class="bi bi-trash"></i></button>
            </div>
        `;

        container.appendChild(newRow);

        attachRemoveListeners('.remove-skill-btn', '.skill-row');
    });

    document.getElementById('add-certificate').addEventListener('click', function() {
        const container = document.getElementById('certificate-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3', 'certificate-row');

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
            <div class="col-md-12 mt-2">
                <label class="form-label">Certificate Link</label>
                <input type="url" class="form-control rounded-3" name="certificate_link[]" placeholder="https://example.com/certificate" required>
            </div>
            <div class="col-md-12 mt-2">
                <label class="form-label">Description</label>
                <textarea class="form-control rounded-3" name="certificate_description[]" rows="3" placeholder="Brief description of the certificate..."></textarea>
            </div>
            <div class="col-md-12 d-flex justify-content-end mt-2">
                <button type="button" class="btn btn-danger btn-sm remove-certificate-btn" title="Remove"><i class="bi bi-trash"></i></button>
            </div>
        `;

        container.appendChild(newRow);

        attachRemoveListeners('.remove-certificate-btn', '.certificate-row');
    });

    document.getElementById('add-social').addEventListener('click', function() {
        const container = document.getElementById('social-section');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3', 'social-row');

        newRow.innerHTML = `
            <div class="col-md-4">
                <label class="form-label">Platform</label>
                <input type="text" class="form-control rounded-3" name="social_platform[]" placeholder="e.g. LinkedIn, GitHub" required>
            </div>
            <div class="col-md-7">
                <label class="form-label">URL</label>
                <input type="url" class="form-control rounded-3" name="social_url[]" placeholder="https://yourprofile.com" required>
            </div>
            <div class="col-md-1 d-flex align-items-end">
                <button type="button" class="btn btn-danger btn-sm remove-social-btn" title="Remove"><i class="bi bi-trash"></i></button>
            </div>
        `;

        container.appendChild(newRow);

        attachRemoveListeners('.remove-social-btn', '.social-row');
    });

    // Attach initial remove button listeners for any existing remove buttons on page load
    attachRemoveListeners('.remove-education-btn', '.education-row');
    attachRemoveListeners('.remove-project-btn', '.project-row');
    attachRemoveListeners('.remove-skill-btn', '.skill-row');
    attachRemoveListeners('.remove-certificate-btn', '.certificate-row');
    attachRemoveListeners('.remove-social-btn', '.social-row');
</script>