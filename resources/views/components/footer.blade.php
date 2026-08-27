{{-- Footer: contact info, social links, copyright --}}

<footer style="background-color: var(--bg-secondary); border-top: 1px solid var(--border-color);">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">

            {{-- Left: Brand + tagline --}}
            <div class="text-center md:text-left">
                <a href="#home" class="flex items-center gap-2 justify-center md:justify-start mb-3 group">
                    <img src="/images/profile.jpg" alt="Marie Danise Bola&ntilde;os"
                         class="w-9 h-9 rounded-lg object-cover transition-transform duration-300 group-hover:scale-110">
                    <span class="text-lg font-bold" style="color: var(--text-primary);">Marie Danise</span>
                </a>
                <p class="text-sm max-w-xs" style="color: var(--text-muted);">
                    Solving problems through technology with a passion for web development and data visualization.
                </p>
                <a href="tel:+639756188324"
                   class="mt-2 inline-flex items-center gap-2 text-sm font-medium transition-colors duration-200"
                   style="color: var(--text-secondary);"
                   onmouseover="this.style.color='var(--accent-500)'" onmouseout="this.style.color='var(--text-secondary)'">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    +63 975 618 8324
                </a>
            </div>

            {{-- Center: Quick links --}}
            <div class="flex flex-wrap items-center justify-center gap-6">
                @foreach(['Home' => '#home', 'About' => '#about', 'Education' => '#education', 'Certifications' => '#certifications', 'Projects' => '#projects'] as $label => $href)
                    <a href="{{ $href }}" class="text-sm font-medium font-nav transition-colors duration-200"
                       style="color: var(--text-secondary);"
                       onmouseover="this.style.color='var(--accent-500)'" onmouseout="this.style.color='var(--text-secondary)'">
                        {{ $label }}
                    </a>
                @endforeach
            </div>

            {{-- Right: Social icons --}}
            <div class="flex items-center gap-3">
                {{-- Facebook --}}
                <a href="https://www.facebook.com/mariedanise.bolanos.1" target="_blank" rel="noopener"
                   class="w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-110"
                   style="background-color: var(--bg-card); border: 1px solid var(--border-color); color: var(--text-secondary);"
                   onmouseover="this.style.color='var(--accent-500)'; this.style.borderColor='var(--accent-300)'"
                   onmouseout="this.style.color='var(--text-secondary)'; this.style.borderColor='var(--border-color)'"
                   title="Facebook">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                {{-- GitHub --}}
                <a href="https://github.com/bolanosmariedanise" target="_blank" rel="noopener"
                   class="w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-110"
                   style="background-color: var(--bg-card); border: 1px solid var(--border-color); color: var(--text-secondary);"
                   onmouseover="this.style.color='var(--accent-500)'; this.style.borderColor='var(--accent-300)'"
                   onmouseout="this.style.color='var(--text-secondary)'; this.style.borderColor='var(--border-color)'"
                   title="GitHub">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
                {{-- Email --}}
                <a href="mailto:bolanosmariedanise@gmail.com"
                   class="w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-110"
                   style="background-color: var(--bg-card); border: 1px solid var(--border-color); color: var(--text-secondary);"
                   onmouseover="this.style.color='var(--accent-500)'; this.style.borderColor='var(--accent-300)'"
                   onmouseout="this.style.color='var(--text-secondary)'; this.style.borderColor='var(--border-color)'"
                   title="Email">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t py-6" style="border-color: var(--border-color);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-2">
            <p class="text-sm" style="color: var(--text-muted);">
                &copy; {{ date('Y') }} Marie Danise Bola&ntilde;os. All rights reserved.
            </p>
            <p class="text-sm" style="color: var(--text-muted);">
                Built with Laravel &amp; Tailwind CSS
            </p>
        </div>
    </div>
</footer>
