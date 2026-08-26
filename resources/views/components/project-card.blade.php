@php
    $primaryImage = !empty($images) ? $images[0] : ($image ?? '');
@endphp

<div class="group rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
     style="background-color: var(--bg-card); border: 1px solid var(--border-color); box-shadow: var(--shadow-card);"
     data-project-index="{{ $loop->index }}">

    {{-- Thumbnail — clickable --}}
    <div class="relative h-48 overflow-hidden cursor-pointer" style="background-color: var(--bg-secondary);"
         onclick="openProjectModal({{ $loop->index }})"
         role="button" tabindex="0"
         aria-label="Open details for {{ $title }}"
         onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openProjectModal({{ $loop->index }})}">
        @if(!empty($primaryImage))
            <img src="{{ $primaryImage }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        @else
            <div class="w-full h-full flex items-center justify-center">
                <svg class="w-16 h-16 opacity-20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1"
                     style="color: var(--text-muted);">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
        @endif

        {{-- Gradient overlay --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    </div>

    {{-- Content — description clickable to open modal --}}
    <div class="p-6">
        <h3 class="text-lg font-bold mb-2 transition-colors duration-200 cursor-pointer"
            style="color: var(--text-primary);"
            onclick="openProjectModal({{ $loop->index }})"
            onmouseover="this.style.color='var(--accent-500)'" onmouseout="this.style.color='var(--text-primary)'">
            {{ $title }}
        </h3>
        <p class="text-sm mb-4 leading-relaxed cursor-pointer" style="color: var(--text-secondary);"
           onclick="openProjectModal({{ $loop->index }})">{{ $description }}</p>

        {{-- Tech tags --}}
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach($tags as $tag)
                <span class="px-2.5 py-1 text-xs font-medium rounded-full transition-colors duration-200"
                      style="background-color: var(--accent-50); color: var(--accent-600);">
                    {{ $tag }}
                </span>
            @endforeach
        </div>

        {{-- Links --}}
        <div class="flex items-center gap-3">
            @if(!empty($demo))
                <a href="{{ $demo }}" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-1.5 text-sm font-medium transition-all duration-200 hover:gap-2.5"
                   style="color: var(--accent-500);">
                    Live Demo
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            @endif
            @if(!empty($repo))
                <a href="{{ $repo }}" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-1.5 text-sm font-medium transition-all duration-200 hover:gap-2.5"
                   style="color: var(--text-secondary);">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    Code
                </a>
            @endif
        </div>
    </div>
</div>
