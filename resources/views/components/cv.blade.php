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
<div class="container mx-auto bg-white shadow-lg rounded-xl p-10">
    <header class="mb-6 border-b pb-4">
        <h1 class="text-4xl font-bold">{{ $data['name'] }}</h1>
        <div class="flex flex-wrap gap-4 text-lg mt-2">
            <span>{{ $data['phone_number'] }}</span>
            <span>|</span>
            <a href="mailto:{{ $data['email'] }}" class="text-blue-500 hover:underline">{{ $data['email'] }}</a>
            @if(isset($data['social_platform']))
                @foreach($data['social_platform'] as $index => $platform)
                    @if(!empty($data['social_url'][$index]))
                        <span>|</span>
                        <a href="{{ $data['social_url'][$index] }}" class="text-blue-500 hover:underline">{{ $platform }}</a>
                    @endif
                @endforeach
            @endif
        </div>
        <p class="mt-4 text-gray-600">{{ $data['objective'] }}</p>
    </header>

    <!-- Education -->
    <section class="mb-6">
        <h2 class="text-xl font-bold mb-2">EDUCATION</h2>
        @foreach($data['education'] as $index => $edu)
            <div>
                <p class="font-semibold text-gray-800">{{ $edu }}</p>
                <p class="text-sm text-gray-600">{{ $data['qualification'][$index] ?? '' }}</p>
            </div>
        @endforeach
    </section>

    <!-- Skills -->
    <section class="mb-6">
        <h2 class="text-xl font-bold mb-2">SKILLS</h2>
        <div class="flex flex-wrap gap-2">
            @foreach($data['skill'] as $index => $skill)
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">{{ $skill }} ({{ $data['proficiency'][$index] ?? '' }})</span>
            @endforeach
        </div>
    </section>

    <!-- Projects -->
    <section class="mb-6">
        <h2 class="text-xl font-bold mb-2">PROJECTS</h2>
        @foreach($data['project_title'] as $index => $title)
            <div class="mb-4 p-4 bg-gray-100 rounded">
                <h3 class="font-semibold text-lg">{{ $title }}</h3>
                <a href="{{ $data['project_link'][$index] ?? '#' }}" class="text-blue-500 text-sm hover:underline">Link</a>
                <p class="text-sm text-gray-700 mt-2">{{ $data['project_description'][$index] ?? '' }}</p>
            </div>
        @endforeach
    </section>

    <!-- Certificates -->
    <section>
        <h2 class="text-xl font-bold mb-2">CERTIFICATES</h2>
        @foreach($data['certificate_institute'] as $index => $institute)
            <div class="mb-4 p-4 bg-gray-100 rounded">
                <h3 class="font-semibold text-lg">{{ $institute }}</h3>
                <p class="text-sm text-gray-600">{{ $data['certificate_start'][$index] }} - {{ $data['certificate_end'][$index] }}</p>
                <a href="{{ $data['certificate_link'][$index] ?? '#' }}" class="text-blue-500 text-sm hover:underline">Certificate Link</a>
                <p class="text-sm text-gray-700 mt-2">{{ $data['certificate_description'][$index] ?? '' }}</p>
            </div>
        @endforeach
    </section>
</div>
</body>

</html>