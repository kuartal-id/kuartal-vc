{{--
    Avatar for a leadership card. Shows a real photo when one has been
    supplied for that person; otherwise falls back to initials on a
    brand-colored circle rather than a stock photo or a generated
    likeness — a picture next to a named real person implies it's them,
    so we only ever show one once we actually have it. Open (unfilled)
    roles get a dashed outline and a plus glyph instead, so a still-vacant
    seat reads differently from a named one at a glance.
--}}
@props(['name' => null, 'open' => false, 'photo' => null, 'rounded' => 'rounded-full'])

@php
    $initials = $name
        ? collect(explode(' ', trim(preg_replace('/\s+/', ' ', $name))))
            ->filter()
            ->map(fn ($word) => mb_strtoupper(mb_substr($word, 0, 1)))
            ->take(3)
            ->implode('')
        : null;
@endphp

@if($open)
    <div {{ $attributes->merge(['class' => "flex items-center justify-center $rounded border-2 border-dashed border-gray-border text-gray-muted dark:border-white/20 dark:text-white/40"]) }}>
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M12 5v14M5 12h14"/>
        </svg>
    </div>
@elseif($photo)
    <img src="{{ asset($photo) }}" alt="{{ $name }}"
         {{ $attributes->merge(['class' => "$rounded object-cover object-top"]) }}>
@else
    <div {{ $attributes->merge(['class' => "flex items-center justify-center $rounded bg-navy text-white font-display font-semibold dark:bg-green-400 dark:text-navy-900"]) }}>
        {{ $initials }}
    </div>
@endif
