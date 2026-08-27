{{-- Main single-page portfolio view for Marie Danise Bolaños --}}

@extends('layouts.app')

@section('content')

    {{-- ═══════════════════════════════════════
         SECTION 1: HOME / HERO
         ═══════════════════════════════════════ --}}
    <section id="home" class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden">

        {{-- Dark overlay for text readability --}}
        <div class="hero-overlay"></div>

        {{-- Animated atmospheric blobs --}}
        <div class="hero-blobs absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="hero-blob hero-blob-1"></div>
            <div class="hero-blob hero-blob-2"></div>
            <div class="hero-blob hero-blob-3"></div>
        </div>

        {{-- Noise texture overlay for smoky feel --}}
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
             style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 256 256%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22n%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.85%22 numOctaves=%224%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22/%3E%3C/svg%3E'); background-repeat: repeat; background-size: 256px 256px;"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center z-10">

            {{-- Greeting badge --}}
            <div class="hero-badge inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-medium mb-8 transition-all duration-300 hover:scale-105">
                <span class="hero-badge-dot w-2 h-2 rounded-full animate-pulse"></span>
                Open to opportunities
            </div>

            {{-- Name --}}
            <h1 class="hero-title text-4xl sm:text-5xl md:text-7xl font-extrabold mb-6 leading-tight"
                style="font-family: var(--font-heading);">
                Hi, I'm
                <span class="hero-title-accent" style="font-family: 'Dancing Script', cursive; font-weight: 700;">Marie Danise Bola&ntilde;os</span>
            </h1>

            {{-- Role --}}
            <p class="hero-subtitle text-xl sm:text-2xl md:text-3xl font-semibold mb-4"
               style="font-family: var(--font-heading);">
                Bachelor of Science in Information Technology &mdash; 4th Year
            </p>

            {{-- Tagline --}}
            <p class="hero-tagline text-base sm:text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                I enjoy solving problems through technology, with growing skills in web development,
                data visualization, and IT support.
            </p>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#projects"
                   class="hero-cta-primary inline-flex items-center gap-2 px-8 py-3.5 rounded-xl font-semibold text-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg">
                    View My Work
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
                <a href="#contact"
                   class="hero-cta-secondary inline-flex items-center gap-2 px-8 py-3.5 rounded-xl font-semibold text-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg backdrop-blur-sm">
                    Get In Touch
                </a>
            </div>

            {{-- Scroll indicator --}}
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
                <svg class="hero-scroll w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════
         SECTION 2: ABOUT
         ═══════════════════════════════════════ --}}
    <section id="about" class="py-24 sm:py-32" style="background-color: var(--bg-secondary);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @include('components.section-header', [
                'title' => 'About Me',
                'subtitle' => 'Building a strong foundation in IT through academics and hands-on certifications.',
            ])

            {{-- Bio + Image --}}
            <div class="grid md:grid-cols-2 gap-12 lg:gap-16 items-center mb-20">

                {{-- Profile image --}}
                <div class="relative flex justify-center">
                    <div class="relative">
                        <div class="relative z-20 w-30 h-30 sm:w-80 sm:h-80 transition-transform duration-500 hover:scale-105">
                            <img src="/images/profile.jpg" alt="Marie Danise Bola&ntilde;os" class="profile-photo-img w-full h-full object-cover">
                        </div>

{{-- Double rectangle frame (SVG, crisp at any size) --}}
                        <div class="profile-frame-double" aria-hidden="true">
                            <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                {{-- Thin outer outline at the photo edge (photo = frame size), sharp corners --}}
                                <path d="M 0 0 H 1000 V 1000 H 0 Z"
                                      stroke="#000000" stroke-width="4" stroke-linejoin="miter" fill="none"/>
                                {{-- Thick bold outline, offset inward/down-right --}}
                                <path d="M 30 29 H 986 V 998 H 30 Z"
                                      stroke="#000000" stroke-width="13" stroke-linejoin="miter" fill="none"/>
                            </svg>
                        </div>

                        <div class="absolute -bottom-4 -right-4 w-24 h-24 rounded-2xl -z-10 transition-transform duration-500"
                             style="background-color: rgba(210, 180, 140, 0.25); transform: rotate(6deg);"></div>
                    </div>
                </div>

                {{-- Bio text --}}
                <div>
                    <h3 class="text-2xl font-bold mb-4" style="color: var(--text-primary); font-family: var(--font-serif);">
                        A bit about my journey
                    </h3>
                    <div class="space-y-4 font-merriweather" style="color: var(--text-secondary);">
                        <p>
                            I'm Marie Danise Bola&ntilde;os, a 4th year Bachelor of Science in Information Technology
                            student at Data Center College of the Philippines &mdash; Bangued. I have a strong foundation
                            in computer systems, data analytics, and information and communications technology, built
                            through both my academic training and hands-on certifications.
                        </p>
                        <p>
                            I enjoy solving problems through technology and I'm continuously growing my skills in web
                            development, data visualization, and IT support &mdash; always eager to apply what I learn
                            to real-world projects.
                        </p>
                    </div>

                    {{-- Skill pills --}}
                    <div class="flex flex-wrap gap-3 mt-6 font-merriweather">
                        @foreach(['Web Development', 'ICT'] as $skill)
                            <span class="px-3 py-1.5 text-xs font-medium rounded-lg transition-all duration-200 hover:scale-105"
                                  style="background-color: var(--accent-50); color: var(--accent-600); border: 1px solid var(--accent-200);">
                                {{ $skill }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Quick Stats --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto">
                @include('components.stat-card', [
                    'number' => '4',
                    'label' => 'Years in IT',
                    'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                ])
                @include('components.stat-card', [
                    'number' => '3',
                    'label' => 'Certifications',
                    'icon' => 'M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5',
                ])
                @include('components.stat-card', [
                    'number' => '4',
                    'label' => 'Year in College',
                    'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
                ])
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════
         SECTION 3: EDUCATION & CERTIFICATIONS
         ═══════════════════════════════════════ --}}
    <section id="education" class="py-24 sm:py-32" style="background-color: var(--bg-primary);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @include('components.section-header', [
                'title' => 'Education',
                'subtitle' => 'My academic background and professional certifications.',
            ])

            {{-- Education Timeline --}}
            <div class="max-w-3xl mx-auto space-y-8 mb-20">

                @php
                    $education = [
                        [
                            'degree' => 'Bachelor of Science in Information Technology',
                            'institution' => 'Data Center College of the Philippines &mdash; Bangued',
                            'period' => '2023 &mdash; Present',
                            'description' => 'Currently in my 4th year. Building a strong foundation in computer systems, data analytics, web development, and information and communications technology.',
                        ],
                        [
                            'degree' => 'Technical-Vocational-Livelihood (TVL) &mdash; ICT, General Academic Strand',
                            'institution' => 'An-anaao Integrated School',
                            'period' => '2021 &mdash; 2023',
                            'description' => 'Completed the TVL track with a specialization in Information and Communications Technology. Graduated With Honors.',
                        ],
                    ];
                @endphp

                @foreach($education as $index => $edu)
                    <div class="relative pl-10 sm:pl-14 group">
                        @if(!$loop->last)
                            <div class="absolute left-[8px] sm:left-[12px] top-10 bottom-0 w-0.5"
                                 style="background-color: var(--border-color);"></div>
                        @endif

                        <div class="absolute left-0 sm:left-0 top-1.5 w-4 h-4 rounded-full border-2 transition-all duration-300 group-hover:scale-125 z-10"
                             style="background-color: var(--accent-500); border-color: var(--accent-200);"></div>

                        <div class="p-6 rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                             style="background-color: var(--bg-card); border: 1px solid var(--border-color); box-shadow: var(--shadow-card);">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-3">
                                <h3 class="text-lg font-bold" style="color: var(--text-primary); font-family: var(--font-serif);">{!! $edu['degree'] !!}</h3>
                                <span class="text-xs font-semibold px-3 py-1 rounded-full whitespace-nowrap"
                                      style="background-color: var(--accent-50); color: var(--accent-600);">
                                    {!! $edu['period'] !!}
                                </span>
                            </div>
                            <p class="text-sm font-medium mb-2" style="color: var(--accent-500);">{!! $edu['institution'] !!}</p>
                            <p class="text-sm leading-relaxed font-merriweather" style="color: var(--text-secondary);">{{ $edu['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Certifications --}}
            <div id="certifications" class="max-w-3xl mx-auto">
                <h3 class="text-3xl sm:text-4xl font-bold mb-4 text-center" style="font-family: 'Abril Fatface', var(--font-heading); color: var(--text-primary);">
                    Certifications
                </h3>
                <div class="w-16 h-1 rounded-full mx-auto mb-6" style="background-color: var(--accent-500);"></div>

                @php
                    $certifications = [
                        [
                            'title' => 'Online Safety Through Netiquette',
                            'issuer' => 'DICT — Region II',
                            'date' => 'July 23, 2026',
                            'image' => '/certificates/onlinesafety.png',
                        ],
                        [
                            'title' => 'Computer System Servicing (CSS) NCII',
                            'issuer' => 'TESDA',
                            'date' => 'September 6, 2025',
                            'image' => '/certificates/NCII.png',
                        ],
                        [
                            'title' => 'Data Analytics and Visualization Essentials',
                            'issuer' => 'DICT — ILCDB, Cordillera Administrative Region',
                            'date' => 'December 11, 2025',
                            'image' => '/certificates/Dataanalytics.png',
                        ],
                    ];
                @endphp

                <div class="grid sm:grid-cols-2 gap-6">
                    @foreach($certifications as $cert)
                        <div class="cert-card flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg group"
                             @if(!empty($cert['image']))
                             style="background-color: var(--bg-card); border: 1px solid var(--border-color); box-shadow: var(--shadow-card); cursor: pointer;"
                             onclick="openCertModal('{{ addslashes($cert['title']) }}', '{{ addslashes($cert['image']) }}')"
                             role="button" tabindex="0"
                             aria-label="View certificate: {{ $cert['title'] }}"
                             onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openCertModal('{{ addslashes($cert['title']) }}', '{{ addslashes($cert['image']) }}')}"
                             @else
                             style="background-color: var(--bg-card); border: 1px solid var(--border-color); box-shadow: var(--shadow-card);"
                             @endif
                             >
                            <div class="w-12 h-12 rounded-xl flex-shrink-0 flex items-center justify-center transition-transform duration-300 group-hover:scale-110"
                                 style="background-color: var(--accent-50);">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                     style="color: var(--accent-500);">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-sm font-bold mb-1 font-merriweather" style="color: var(--text-primary);">{{ $cert['title'] }}</h4>
                                <p class="text-xs font-medium font-merriweather" style="color: var(--accent-500);">{{ $cert['issuer'] }}</p>
                                <p class="text-xs mt-1 font-merriweather" style="color: var(--text-muted);">{{ $cert['date'] }}</p>
                            </div>
                            @if(!empty($cert['image']))
                            <div class="flex-shrink-0 self-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                     style="color: var(--accent-500);">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
                                </svg>
                            </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════
         SECTION 4: PROJECTS
         ═══════════════════════════════════════ --}}
    <section id="projects" class="py-24 sm:py-32" style="background-color: var(--bg-secondary);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @include('components.section-header', [
                'title' => 'Projects',
                'subtitle' => 'A selection of my recent work. Each project is a unique piece of development.',
            ])

            @php
                $sadImages = [];
                for ($i = 1; $i <= 53; $i++) {
                    foreach (['jpg', 'png'] as $ext) {
                        $path = "/images/projects/SAD/SAD_{$i}.{$ext}";
                        if (file_exists(public_path($path))) {
                            $sadImages[] = $path;
                            break;
                        }
                    }
                }

                $projects = [
                    [
                        'title' => 'Online Selling Management System for Streetwear Apparel',
                        'description' => 'A desktop-based online selling management system built for a streetwear apparel business. Features a clean user dashboard with product browsing, shopping cart, and a Buy Now purchase flow for items like t-shirts, hoodies, and shorts. Supports user profile and cart management for small apparel sellers.',
                        'images' => [
                            '/images/projects/MIS/MIS_1.png',
                            '/images/projects/MIS/MIS_6.png',
                        ],
                        'tags' => ['C#', 'Windows Forms', '.NET', 'Desktop Application', 'E-Commerce'],
                        'demo' => '',
                        'repo' => '',
                    ],
                    [
                        'title' => 'Diocese of Bangued — St. James the Elder Cathedral Parish Viewer Portal',
                        'description' => 'A web-based viewer portal for the Diocese of Bangued and St. James the Elder Cathedral Parish. Allows the public to view the parish calendar of masses, religious events, and activities, learn about its history and leadership, and reach the parish through a Contact Us page. Includes a login system for staff/admin access.',
                        'images' => $sadImages,
                        'tags' => ['PHP', 'Web Development', 'Visual Studio', 'Church Management System'],
                        'demo' => '',
                        'repo' => '',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    @include('components.project-card', $project)
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════
         PROJECT MODAL / LIGHTBOX
         ═══════════════════════════════════════ --}}
    <div id="project-modal" class="project-modal" role="dialog" aria-modal="true" aria-label="Project details" aria-hidden="true">
        <div class="project-modal-backdrop" onclick="closeProjectModal()"></div>

        <div class="project-modal-content" role="document">
            {{-- Close button --}}
            <button class="project-modal-close" onclick="closeProjectModal()" aria-label="Close modal">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6L6 18M6 6l12 12"/>
                </svg>
            </button>

            {{-- Gallery --}}
            <div class="project-modal-gallery">
                <div class="project-modal-image-wrapper">
                    <img id="modal-gallery-image" src="" alt="" class="project-modal-image">
                </div>

                @if(count($projects) > 0)
                {{-- Navigation arrows (only shown if >1 image) --}}
                <button id="modal-prev-btn" class="project-modal-nav project-modal-nav-prev" onclick="prevGalleryImage()" aria-label="Previous image">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>
                <button id="modal-next-btn" class="project-modal-nav project-modal-nav-next" onclick="nextGalleryImage()" aria-label="Next image">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </button>
                @endif

                {{-- Image counter --}}
                <div id="modal-counter" class="project-modal-counter"></div>

                {{-- Dot indicators --}}
                <div id="modal-dots" class="project-modal-dots"></div>
            </div>

            {{-- Details --}}
            <div class="project-modal-details">
                <h2 id="modal-title" class="project-modal-title"></h2>
                <p id="modal-description" class="project-modal-description"></p>
                <div id="modal-tags" class="project-modal-tags"></div>
                <div id="modal-links" class="project-modal-links"></div>
            </div>
        </div>
    </div>

    {{-- Pass project data to JavaScript --}}
    <script>
        window.__projectsData = @json($projects);
    </script>

    {{-- ═══════════════════════════════════════
         CERTIFICATE VIEWER MODAL
         ═══════════════════════════════════════ --}}
    <div id="cert-modal" class="cert-modal" role="dialog" aria-modal="true" aria-label="Certificate viewer" aria-hidden="true">
        <div class="cert-modal-backdrop" onclick="closeCertModal()"></div>

        <div class="cert-modal-content" role="document">
            {{-- Header --}}
            <div class="cert-modal-header">
                <h3 id="cert-modal-title" class="cert-modal-title"></h3>
                <div class="cert-modal-actions">
                    <button id="cert-zoom-in" class="cert-modal-action-btn" onclick="certZoomIn()" aria-label="Zoom in" title="Zoom in" disabled>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 5v14M5 12h14"/>
                        </svg>
                    </button>
                    <button id="cert-zoom-out" class="cert-modal-action-btn" onclick="certZoomOut()" aria-label="Zoom out" title="Zoom out" disabled>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/>
                        </svg>
                    </button>
                    <button id="cert-zoom-reset" class="cert-modal-action-btn" onclick="resetCertZoom()" aria-label="Reset zoom" title="Reset zoom">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 8V4m0 0h4M4 4l5 5M20 8V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5M20 16v4m0 0h-4m4 0l-5-5"/>
                        </svg>
                    </button>
                    <button class="cert-modal-close" onclick="closeCertModal()" aria-label="Close certificate viewer">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6L6 18M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Certificate Image --}}
            <div class="cert-modal-body" id="cert-modal-body">
                <div id="cert-zoom-wrap" class="cert-zoom-wrap">
                    <img id="cert-modal-image" src="" alt="" class="cert-modal-image">
                </div>
            </div>
        </div>
    </div>

@endsection
