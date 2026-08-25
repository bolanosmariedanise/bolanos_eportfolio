{{-- Reusable Stat Card --}}
{{-- Usage: @include('components.stat-card', ['number' => '5+', 'label' => 'Years Experience', 'icon' => '...svg path...']) --}}

<div class="relative p-6 rounded-2xl text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl group"
     style="background-color: var(--bg-card); border: 1px solid var(--border-color); box-shadow: var(--shadow-card);">

    {{-- Icon circle --}}
    <div class="w-14 h-14 rounded-2xl mx-auto mb-4 flex items-center justify-center transition-transform duration-300 group-hover:scale-110"
         style="background-color: var(--accent-50);">
        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
             style="color: var(--accent-500);">
            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/>
        </svg>
    </div>

    {{-- Number --}}
    <div class="text-3xl font-bold mb-1" style="color: var(--accent-500); font-family: var(--font-heading);">
        {{ $number }}
    </div>

    {{-- Label --}}
    <div class="text-sm font-medium" style="color: var(--text-secondary);">{{ $label }}</div>
</div>
