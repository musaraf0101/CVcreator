<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohamed Musaraf - Resume</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            /* Light gray background */
        }

        .container {
            max-width: 900px;
            margin: 2rem auto;
            background-color: #ffffff;
            border-radius: 1rem;
            /* More rounded corners */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            /* Softer shadow */
            padding: 2rem;
        }

        .header {
            border-bottom: 2px solid #e5e7eb;
            /* Light gray border */
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .section-title {
            color: #1f2937;
            /* Darker gray for titles */
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            padding-left: 1.5rem;
            /* Space for pseudo-element */
        }

        .section-title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 24px;
            background-color: #3b82f6;
            /* Blue accent */
            border-radius: 0.25rem;
        }

        .contact-info a {
            color: #3b82f6;
            /* Blue for links */
            text-decoration: none;
            transition: color 0.2s ease-in-out;
        }

        .contact-info a:hover {
            color: #2563eb;
            /* Darker blue on hover */
        }

        .project-item,
        .certificate-item {
            background-color: #f9fafb;
            /* Lighter background for items */
            border-left: 4px solid #93c5fd;
            /* Light blue border */
            border-radius: 0.75rem;
            /* Rounded corners for items */
            padding: 1rem 1.5rem;
            margin-bottom: 1rem;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .project-item:hover,
        .certificate-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .skill-badge {
            background-color: #e0f2fe;
            /* Very light blue */
            color: #0b78d2;
            /* Darker blue text */
            padding: 0.3rem 0.75rem;
            border-radius: 9999px;
            /* Pill shape */
            font-size: 0.875rem;
            font-weight: 500;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            display: inline-block;
        }

        .list-item {
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
        }

        .list-item::before {
            content: '•';
            /* Bullet point */
            position: absolute;
            left: 0;
            color: #3b82f6;
            /* Blue bullet */
            font-weight: bold;
        }
    </style>
</head>

<body class="antialiased text-gray-700">
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Mohamed Musaraf</h1>
            <div class="contact-info text-lg flex flex-wrap gap-x-6">
                <span>+94754551994</span> |
                <a href="mailto:nowsathmusaraf037@gmail.com" target="_blank" rel="noopener noreferrer">nowsathmusaraf037@gmail.com</a> |
                <a href="https://www.linkedin.com/in/yourlinkedin" target="_blank" rel="noopener noreferrer">LinkedIn</a> |
                <a href="https://github.com/yourgithub" target="_blank" rel="noopener noreferrer">GitHub</a>
            </div>
            <p class="mt-4 text-gray-600 leading-relaxed">
                Ambitious software engineering student who has completed two years of a Higher National Diploma in IT, with a passion for learning new technologies and a keen interest in software development. Eager to leverage my academic knowledge and hands-on project experience in developing a community based service provider web application and UI design to contribute to a dynamic IT team. Looking to apply my skills in a forward-thinking company to enhance my technical expertise and contribute to innovative projects.
            </p>
        </header>

        <!-- Education Section -->
        <section class="mb-8">
            <h2 class="section-title">EDUCATION</h2>
            <div class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Higher National Diploma in Information Technology (HNDIT)</h3>
                <p class="text-gray-600">Sri Lanka Institute of Advanced Technological Education, Trincomalee, Sri Lanka</p>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="mb-8">
            <h2 class="section-title">SKILLS</h2>
            <div class="flex flex-wrap gap-2">
                <span class="skill-badge">HTML</span>
                <span class="skill-badge">CSS</span>
                <span class="skill-badge">Core Java</span>
                <span class="skill-badge">MySQL</span>
                <span class="skill-badge">Figma</span>
                <span class="skill-badge">GitHub</span>
                <span class="skill-badge">Laravel</span>
                <span class="skill-badge">Visual Studio Code</span>
                <span class="skill-badge">Responsive design</span>
                <span class="skill-badge">Front end development</span>
                <span class="skill-badge">Backend development</span>
                <span class="skill-badge">Analytical abilities</span>
                <span class="skill-badge">Troubleshooting abilities</span>
                <span class="skill-badge">Leadership</span>
                <span class="skill-badge">Team Management</span>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="mb-8">
            <h2 class="section-title">PROJECTS</h2>
            <div class="project-item">
                <h3 class="text-xl font-semibold text-gray-800 mb-1">E-Commerce Website</h3>
                <p class="text-gray-600 text-sm mb-2">Personal Project | Technology Used: HTML, CSS, Bootstrap</p>
                <p class="text-gray-700">Created an intuitive user interface using HTML, CSS and Bootstrap to ensure smooth navigation, product selection, and efficient order placement.</p>
                <a href="#" class="text-blue-500 hover:underline text-sm">Link</a> <!-- Placeholder link -->
            </div>
            <div class="project-item">
                <h3 class="text-xl font-semibold text-gray-800 mb-1">Community Based Service Provider</h3>
                <p class="text-gray-600 text-sm mb-2">Personal Project | Technology Used: HTML, CSS, Bootstrap, Laravel, MySQL</p>
                <p class="text-gray-700">Developed a web application to connect users with community services. (Details from PDF are limited, so keeping it concise)</p>
                <a href="#" class="text-blue-500 hover:underline text-sm">Link</a> <!-- Placeholder link -->
            </div>
        </section>

        <!-- Certificates Section -->
        <section>
            <h2 class="section-title">CERTIFICATES</h2>
            <div class="certificate-item">
                <h3 class="text-xl font-semibold text-gray-800 mb-1">Get Connect</h3>
                <p class="text-gray-600 text-sm mb-2">CISCO | 06/2024 - 06/2024</p>
                <ul class="text-gray-700">
                    <li class="list-item">Identify different types of computer systems, internal components and external devices.</li>
                    <li class="list-item">Understand the structure of the directories in Microsoft Windows, and how to work with files and folders using a text editor.</li>
                    <li class="list-item">Understand computer networks, as well as browse and search the Internet, and use email.</li>
                    <li class="list-item">Create and use various types of social media accounts, including Facebook, LinkedIn and YouTube.</li>
                    <li class="list-item">Identify common problems and implement simple solutions for hardware, software and networks.</li>
                </ul>
                <a href="#" class="text-blue-500 hover:underline text-sm">Link</a> <!-- Placeholder link -->
            </div>
            <div class="certificate-item">
                <h3 class="text-xl font-semibold text-gray-800 mb-1">Enterprise Software Development Kit</h3>
                <p class="text-gray-600 text-sm mb-2">Developer Stack Academy | 04/2024 - 11/2024</p>
                <p class="text-gray-700">Completed 7-month course covering core Java, fundamental of web development, version controlling, UI design, and many more content.</p>
                <a href="#" class="text-blue-500 hover:underline text-sm">Link</a> <!-- Placeholder link -->
            </div>
            <div class="certificate-item">
                <h3 class="text-xl font-semibold text-gray-800 mb-1">JavaScript Bootcamp</h3>
                <p class="text-gray-600 text-sm mb-2">Developer Stack Academy | 05/2024 - 05/2024</p>
                <p class="text-gray-700">Completed a 7-day JavaScript bootcamp covering fundamentals such as variables, data types, operators, loops, and basic input/output. Gained hands-on experience writing simple scripts and understanding core programming logic.</p>
                <a href="#" class="text-blue-500 hover:underline text-sm">Link</a> <!-- Placeholder link -->
            </div>
        </section>
        <div class="d-grid">
            <form action="/generate-pdf" method="post">
                @csrf
                <button class="btn btn-primary">
                    Download CV
                </button>
            </form>
        </div>
    </div>
</body>

</html>