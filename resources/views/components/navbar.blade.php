{{-- Navbar: sticky top nav with anchor links, theme toggle, mobile menu --}}

<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     style="background-color: var(--navbar-bg); border-bottom: 1px solid transparent; backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo / Name --}}
            <a href="#home" class="flex items-center gap-2 group">
                <span class="w-9 h-9 rounded-lg flex items-center justify-center text-white font-bold text-sm transition-transform duration-300 group-hover:scale-110"
                      style="background-color: var(--accent-500);">P</span>
                <span class="text-lg font-bold hidden sm:block" style="color: var(--text-primary);">MY PORTFOLIO</span>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center gap-1">
                @foreach(['Home' => '#home', 'About' => '#about', 'Education' => '#education', 'Projects' => '#projects', 'Contact' => '#contact'] as $label => $href)
                    <a href="{{ $href }}"
                       class="nav-link-item px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200 hover:scale-105"
                       style="color: var(--text-secondary);"
                       onmouseover="this.style.color='var(--accent-500)'"
                       onmouseout="this.style.color='var(--text-secondary)'">
                        {{ $label }}
                    </a>
                @endforeach
            </div>

            {{-- Right-side controls --}}
            <div class="flex items-center gap-2">

                {{-- Dark / Light Toggle --}}
                <button id="theme-toggle"
                        class="w-9 h-9 rounded-lg flex items-center justify-center transition-all duration-200 hover:scale-110"
                        style="background-color: var(--bg-secondary); border: 1px solid var(--border-color);"
                        title="Toggle Theme">
                    {{-- Sun icon (shown in dark mode) --}}
                    <svg id="icon-sun" class="w-4 h-4 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    {{-- Moon icon (shown in light mode) --}}
                    <svg id="icon-moon" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                </button>

                {{-- Mobile Hamburger --}}
                <button id="mobile-menu-toggle"
                        class="md:hidden w-9 h-9 rounded-lg flex items-center justify-center transition-all duration-200 hover:scale-110"
                        style="background-color: var(--bg-secondary); border: 1px solid var(--border-color);">
                    <svg id="hamburger-icon" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="close-icon" class="w-4 h-4 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden border-t" style="border-color: var(--border-color); background-color: var(--bg-primary);">
        <div class="px-4 py-3 space-y-1">
            @foreach(['Home' => '#home', 'About' => '#about', 'Education' => '#education', 'Projects' => '#projects', 'Contact' => '#contact'] as $label => $href)
                <a href="{{ $href }}"
                   class="block px-4 py-2.5 text-sm font-medium rounded-lg transition-colors duration-200"
                   style="color: var(--text-secondary);"
                   onmouseover="this.style.backgroundColor='var(--bg-secondary)'; this.style.color='var(--accent-500)'"
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-secondary)'">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</nav>
