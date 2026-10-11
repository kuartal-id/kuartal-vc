@props(['icon'])

@switch($icon)
    @case('briefcase')
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" {{ $attributes }}>
            <rect x="3" y="7.5" width="18" height="12" rx="2"/>
            <path d="M8.5 7.5V6a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v1.5"/>
            <path d="M3 12.5h18"/>
        </svg>
        @break

    @case('megaphone')
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" {{ $attributes }}>
            <path d="M3 10v4a1 1 0 0 0 1 1h2l4.5 4V5L6 9H4a1 1 0 0 0-1 1Z"/>
            <path d="M16 8.5c1 1 1 6 0 7"/>
            <path d="M19.5 6.5c2 2.5 2 8.5 0 11"/>
        </svg>
        @break

    @case('rocket')
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" {{ $attributes }}>
            <path d="M12 2.5c3 1.8 5 5.4 5 9.3 0 2-1.8 5.4-2.7 6.9l-.6 1-1.7-3-3-1.7-1-.6c1.5-.9 4.9-2.7 6.9-2.7 3.9 0 7.5 2 9.3 5"/>
            <path d="M12 2.5c-3 1.8-5 5.4-5 9.3 0 2 1.8 5.4 2.7 6.9"/>
            <circle cx="12" cy="10" r="1.6"/>
            <path d="M6.5 15.5 4 18m3.5-1L5 19.5m5-2.5-2 4"/>
        </svg>
        @break

    @case('chart')
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" {{ $attributes }}>
            <path d="M4 19h16"/>
            <rect x="6" y="11" width="3" height="8" rx="0.5"/>
            <rect x="11" y="7" width="3" height="12" rx="0.5"/>
            <rect x="16" y="4" width="3" height="15" rx="0.5"/>
        </svg>
        @break
    @case('leaf')
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" {{ $attributes }}>
            <path d="M5 19c0-8 5-14 15-15-1 10-7 15-15 15Z"/>
            <path d="M5 19 13 11"/>
        </svg>
        @break
@endswitch
