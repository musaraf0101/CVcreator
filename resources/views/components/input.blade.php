<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Create Your CV Here...</h4>

                    <form>
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
                                    <label for="title" class="form-label">Project Title</label>
                                    <input type="text" class="form-control rounded-3" name="project_title[]" placeholder="Project Title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="link" class="form-label">Project Link</label>
                                    <input type="text" class="form-control rounded-3" name="project_link[]" placeholder="Project Link" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 text-end">
                            <button type="button" id="add-project" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-plus-circle me-1"></i> Add More Project
                            </button>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary rounded-pill">
                                <i class="bi bi-send-fill me-2"></i> Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Scripts for Adding More Fields --}}
<script>
    // Add More Education
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

    // Add More Project
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
        `;
        container.appendChild(newRow);
    });
</script>