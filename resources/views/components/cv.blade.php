<style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .container {
            max-width: 900px;
            margin: 2rem auto;
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1),
                0 4px 6px -2px rgba(0,0,0,0.05);
            padding: 2rem;
        }
        .header {
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .section-title {
            color: #1f2937;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            padding-left: 1.5rem;
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
            border-radius: 0.25rem;
        }
        .contact-info a {
            color: #3b82f6;
            text-decoration: none;
            transition: color 0.2s ease-in-out;
        }
        .contact-info a:hover {
            color: #2563eb;
        }
        .project-item,
        .certificate-item {
            background-color: #f9fafb;
            border-left: 4px solid #93c5fd;
            border-radius: 0.75rem;
            padding: 1rem 1.5rem;
            margin-bottom: 1rem;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .project-item:hover,
        .certificate-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1),
                0 2px 4px -1px rgba(0,0,0,0.06);
        }
        .skill-badge {
            background-color: #e0f2fe;
            color: #0b78d2;
            padding: 0.3rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            display: inline-block;
        }
    </style>
</head>

<body class="antialiased text-gray-700">
    <div class="container mx-auto bg-white shadow-lg rounded-xl p-10">
        <header class="header">
            <h1 class="text-4xl font-bold">{{ $data['name'] ?? 'Your Name' }}</h1>
            <div class="flex flex-wrap gap-4 text-lg mt-2 contact-info">
                @if(!empty($data['phone_number']))
                    <span>{{ $data['phone_number'] }}</span>
                @endif
                @if(!empty($data['email']))
                    <span>|</span>
                    <a href="mailto:{{ $data['email'] }}" class="hover:underline">{{ $data['email'] }}</a>
                @endif

                @if(!empty($data['social_platform']) && !empty($data['social_url']))
                    @foreach($data['social_platform'] as $index => $platform)
                        @php
                            $url = $data['social_url'][$index] ?? null;
                        @endphp
                        @if($platform && $url)
                            <span>|</span>
                            <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" class="hover:underline">{{ $platform }}</a>
                        @endif
                    @endforeach
                @endif
            </div>
            @if(!empty($data['objective']))
                <p class="mt-4 text-gray-600">{{ $data['objective'] }}</p>
            @endif
        </header>

        <!-- Education Section -->
        @if(!empty($data['education']))
            <section class="mb-6">
                <h2 class="section-title">EDUCATION</h2>
                @foreach($data['education'] as $index => $education)
                    <div class="mb-2">
                        <p class="font-semibold text-gray-800">{{ $education }}</p>
                        <p class="text-sm text-gray-600">{{ $data['qualification'][$index] ?? '' }}</p>
                    </div>
                @endforeach
            </section>
        @endif

        <!-- Skills Section -->
        @if(!empty($data['skill']))
            <section class="mb-6">
                <h2 class="section-title">SKILLS</h2>
                <div class="flex flex-wrap gap-2">
                    @foreach($data['skill'] as $index => $skill)
                        <span class="skill-badge">
                            {{ $skill }}{{ !empty($data['proficiency'][$index]) ? " ({$data['proficiency'][$index]})" : '' }}
                        </span>
                    @endforeach
                </div>
            </section>
        @endif

        <!-- Projects Section -->
        @if(!empty($data['project_title']))
            <section class="mb-6">
                <h2 class="section-title">PROJECTS</h2>
                @foreach($data['project_title'] as $index => $title)
                    <div class="project-item">
                        <h3 class="font-semibold text-lg">{{ $title }}</h3>
                        @if(!empty($data['project_link'][$index]))
                            <a href="{{ $data['project_link'][$index] }}" class="text-blue-500 text-sm hover:underline" target="_blank" rel="noopener noreferrer">Link</a>
                        @endif
                        <p class="text-sm text-gray-700 mt-2">{{ $data['project_description'][$index] ?? '' }}</p>
                    </div>
                @endforeach
            </section>
        @endif

        <!-- Certificates Section -->
        @if(!empty($data['certificate_institute']))
            <section>
                <h2 class="section-title">CERTIFICATES</h2>
                @foreach($data['certificate_institute'] as $index => $institute)
                    <div class="certificate-item">
                        <h3 class="font-semibold text-lg">{{ $institute }}</h3>
                        <p class="text-sm text-gray-600">
                            {{ $data['certificate_start'][$index] ?? '' }} - {{ $data['certificate_end'][$index] ?? '' }}
                        </p>
                        @if(!empty($data['certificate_link'][$index]))
                            <a href="{{ $data['certificate_link'][$index] }}" class="text-blue-500 text-sm hover:underline" target="_blank" rel="noopener noreferrer">Certificate Link</a>
                        @endif
                        <p class="text-sm text-gray-700 mt-2">{{ $data['certificate_description'][$index] ?? '' }}</p>
                    </div>
                @endforeach
            </section>
        @endif
    </div>
</body>

</html>