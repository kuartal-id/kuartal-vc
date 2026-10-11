@props(['eyebrow' => null, 'title', 'subtitle' => null])

{{-- Inner-page hero: the same animated navy gradient as the homepage,
     shorter. `isolate` keeps the negative-z background inside this
     section's own stacking context. --}}
<section class="relative isolate overflow-hidden">
    <div class="k-hero-bg"></div>
    <div class="k-hero-overlay"></div>
    <div class="k-container relative py-20 md:py-28">
        @if($eyebrow)
            <p class="font-subhead text-sm font-semibold text-green-400 mb-4">{{ $eyebrow }}</p>
        @endif
        <h1 class="max-w-3xl text-4xl md:text-5xl leading-tight font-display font-semibold !text-white">{{ $title }}</h1>
        @if($subtitle)
            <p class="mt-6 max-w-2xl text-lg text-white/80">{{ $subtitle }}</p>
        @endif
        {{ $slot }}
    </div>
</section>
