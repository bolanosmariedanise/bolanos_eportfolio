{{-- Reusable Section Header --}}
{{-- Usage: @include('components.section-header', ['title' => 'About', 'subtitle' => '...']) --}}

<div class="text-center max-w-2xl mx-auto mb-16">
    <h2 class="text-3xl sm:text-4xl font-bold mb-4" style="font-family: 'Abril Fatface', var(--font-heading); color: var(--text-primary);">
        {{ $title }}
    </h2>
    <div class="w-16 h-1 rounded-full mx-auto mb-6" style="background-color: var(--accent-500);"></div>
    @if(!empty($subtitle))
        <p class="text-lg" style="color: var(--text-secondary);">{{ $subtitle }}</p>
    @endif
</div>
