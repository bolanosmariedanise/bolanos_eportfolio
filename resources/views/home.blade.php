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
                        <div class="profile-shadow w-72 h-72 sm:w-80 sm:h-80 rounded-3xl overflow-hidden transition-transform duration-500 hover:scale-105">
                            <img src="/images/profile.jpg" alt="Marie Danise Bola&ntilde;os" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 rounded-2xl -z-10 transition-transform duration-500"
                             style="background-color: rgba(210, 180, 140, 0.25); transform: rotate(6deg);"></div>
                    </div>
                </div>

                {{-- Bio text --}}
                <div>
                    <h3 class="text-2xl font-bold mb-4" style="color: var(--text-primary); font-family: var(--font-heading);">
                        A bit about my journey
                    </h3>
                    <div class="space-y-4" style="color: var(--text-secondary);">
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
                    <div class="flex flex-wrap gap-3 mt-6">
                        @foreach(['Web Development', 'Data Analytics', 'IT Support', 'Data Visualization', 'Computer Systems', 'ICT'] as $skill)
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
                    'number' => '2',
                    'label' => 'Certifications',
                    'icon' => 'M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5',
                ])
                @include('components.stat-card', [
                    'number' => '1',
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
                                <h3 class="text-lg font-bold" style="color: var(--text-primary);">{!! $edu['degree'] !!}</h3>
                                <span class="text-xs font-semibold px-3 py-1 rounded-full whitespace-nowrap"
                                      style="background-color: var(--accent-50); color: var(--accent-600);">
                                    {!! $edu['period'] !!}
                                </span>
                            </div>
                            <p class="text-sm font-medium mb-2" style="color: var(--accent-500);">{!! $edu['institution'] !!}</p>
                            <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">{{ $edu['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Certifications --}}
            <div class="max-w-3xl mx-auto">
                <h3 class="text-2xl font-bold mb-8 text-center" style="font-family: var(--font-heading); color: var(--text-primary);">
                    Certifications
                </h3>

                @php
                    $certifications = [
                        [
                            'title' => 'Data Analytics and Visualization Essentials',
                            'issuer' => 'DICT',
                            'date' => 'December 11, 2025',
                        ],
                        [
                            'title' => 'Computer System Servicing (CSS) NCII',
                            'issuer' => 'TESDA',
                            'date' => 'September 6, 2025',
                        ],
                    ];
                @endphp

                <div class="grid sm:grid-cols-2 gap-6">
                    @foreach($certifications as $cert)
                        <div class="flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg group"
                             style="background-color: var(--bg-card); border: 1px solid var(--border-color); box-shadow: var(--shadow-card);">
                            <div class="w-12 h-12 rounded-xl flex-shrink-0 flex items-center justify-center transition-transform duration-300 group-hover:scale-110"
                                 style="background-color: var(--accent-50);">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                     style="color: var(--accent-500);">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold mb-1" style="color: var(--text-primary);">{{ $cert['title'] }}</h4>
                                <p class="text-xs font-medium" style="color: var(--accent-500);">{{ $cert['issuer'] }}</p>
                                <p class="text-xs mt-1" style="color: var(--text-muted);">{{ $cert['date'] }}</p>
                            </div>
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
                $projects = [
                    [
                        'title' => 'Online Selling Management System for Streetwear Apparel',
                        'description' => 'A desktop-based online selling management system built for a streetwear apparel business. Features a clean user dashboard with product browsing, shopping cart, and a Buy Now purchase flow for items like t-shirts, hoodies, and shorts. Supports user profile and cart management for small apparel sellers.',
                        'image' => '/images/projects/streetwear-pos.png',
                        'tags' => ['C#', 'Windows Forms', '.NET', 'Desktop Application', 'E-Commerce'],
                        'demo' => '',
                        'repo' => '',
                    ],
                    [
                        'title' => 'Diocese of Bangued — St. James the Elder Cathedral Parish Viewer Portal',
                        'description' => 'A web-based viewer portal for the Diocese of Bangued and St. James the Elder Cathedral Parish. Allows the public to view the parish calendar of masses, religious events, and activities, learn about its history and leadership, and reach the parish through a Contact Us page. Includes a login system for staff/admin access.',
                        'image' => '/images/projects/diocese-portal.png',
                        'tags' => ['PHP', 'Web Development', 'Visual Studio', 'Church Management System'],
                        'demo' => '',
                        'repo' => '',
                    ],
                    [
                        'title' => "Alegria's School PE Dept. Equipment Monitoring & Inventory System",
                        'description' => "A desktop inventory and monitoring system built for a school's PE Department to track sports equipment. Features a dashboard, equipment list management, a borrowing/return tracking module, inventory oversight, and a reports/print function for generating equipment records.",
                        'image' => '/images/projects/pe-inventory.png',
                        'tags' => ['C#', 'Windows Forms', '.NET', 'Inventory Management', 'School System'],
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
         SECTION 5: CONTACT
         ═══════════════════════════════════════ --}}
    <section id="contact" class="py-24 sm:py-32" style="background-color: var(--bg-primary);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @include('components.section-header', [
                'title' => 'Get In Touch',
                'subtitle' => 'Have a project in mind or just want to say hello? I\'d love to hear from you.',
            ])

            <div class="grid md:grid-cols-2 gap-12 lg:gap-16 max-w-5xl mx-auto">

                {{-- Contact Info --}}
                <div class="space-y-8">
                    <h3 class="text-xl font-bold" style="color: var(--text-primary); font-family: var(--font-heading);">
                        Let's work together
                    </h3>
                    <p class="leading-relaxed" style="color: var(--text-secondary);">
                        I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
                        Feel free to reach out through any of the channels below.
                    </p>

                    <div class="space-y-5">
                        {{-- Email --}}
                        <div class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-transform duration-300 group-hover:scale-110"
                                 style="background-color: var(--accent-50);">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                     style="color: var(--accent-500);">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider mb-0.5" style="color: var(--text-muted);">Email</p>
                                <a href="mailto:bolanosmariedanise@gmail.com" class="text-sm font-medium transition-colors duration-200"
                                   style="color: var(--text-primary);"
                                   onmouseover="this.style.color='var(--accent-500)'" onmouseout="this.style.color='var(--text-primary)'">
                                    bolanosmariedanise@gmail.com
                                </a>
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-transform duration-300 group-hover:scale-110"
                                 style="background-color: var(--accent-50);">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                     style="color: var(--accent-500);">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider mb-0.5" style="color: var(--text-muted);">Phone</p>
                                <p class="text-sm font-medium" style="color: var(--text-primary);">+63 975 618 8324</p>
                            </div>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-transform duration-300 group-hover:scale-110"
                                 style="background-color: var(--accent-50);">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                     style="color: var(--accent-500);">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider mb-0.5" style="color: var(--text-muted);">Location</p>
                                <p class="text-sm font-medium" style="color: var(--text-primary);">Brgy. Pias Sur, Tayum, Abra</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="p-8 rounded-2xl transition-shadow duration-300 hover:shadow-lg"
                     style="background-color: var(--bg-card); border: 1px solid var(--border-color); box-shadow: var(--shadow-card);">
                    <form action="#" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2" style="color: var(--text-primary);">Name</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 rounded-xl text-sm outline-none transition-all duration-200"
                                   style="background-color: var(--input-bg); border: 1px solid var(--border-color); color: var(--text-primary);"
                                   onfocus="this.style.borderColor='var(--accent-500)'; this.style.boxShadow='0 0 0 3px var(--accent-100)'"
                                   onblur="this.style.borderColor='var(--border-color)'; this.style.boxShadow='none'"
                                   placeholder="Your name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium mb-2" style="color: var(--text-primary);">Email</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 rounded-xl text-sm outline-none transition-all duration-200"
                                   style="background-color: var(--input-bg); border: 1px solid var(--border-color); color: var(--text-primary);"
                                   onfocus="this.style.borderColor='var(--accent-500)'; this.style.boxShadow='0 0 0 3px var(--accent-100)'"
                                   onblur="this.style.borderColor='var(--border-color)'; this.style.boxShadow='none'"
                                   placeholder="your@email.com">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium mb-2" style="color: var(--text-primary);">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full px-4 py-3 rounded-xl text-sm outline-none transition-all duration-200 resize-none"
                                      style="background-color: var(--input-bg); border: 1px solid var(--border-color); color: var(--text-primary);"
                                      onfocus="this.style.borderColor='var(--accent-500)'; this.style.boxShadow='0 0 0 3px var(--accent-100)'"
                                      onblur="this.style.borderColor='var(--border-color)'; this.style.boxShadow='none'"
                                      placeholder="Tell me about your project..."></textarea>
                        </div>
                        <button type="submit"
                                class="w-full py-3.5 rounded-xl text-white font-semibold text-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg"
                                style="background-color: var(--accent-500);"
                                onmouseover="this.style.backgroundColor='var(--accent-600)'" onmouseout="this.style.backgroundColor='var(--accent-500)'">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
