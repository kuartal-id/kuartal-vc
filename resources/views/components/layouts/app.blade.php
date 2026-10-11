<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kuartal Ventures' }}</title>
    <meta name="description" content="{{ $description ?? 'Kuartal Ventures backs founders fixing the big problems of our time, from idea to IPO, with Indonesia and Southeast Asia first.' }}">

    {{-- ?v=2 cache-busts the icon files -- same bytes under an unchanged
         filename doesn't reliably invalidate what a browser or Hostinger's
         CDN already cached. Bump this again any time the icon changes. --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}?v=2" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon-192.png') }}?v=2">
    <link rel="apple-touch-icon" href="{{ asset('favicon-180.png') }}?v=2">

    {{--
        Inline, render-blocking theme script: MUST run before first paint
        to avoid a flash of light theme on a dark-mode visitor. Reads the
        same localStorage key as every other Kuartal property, so a
        shared device stays in sync across all of them.
    --}}
    <script>
        (function () {
            try {
                var stored = localStorage.getItem('kuartal-theme');
                var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
                var theme = stored || (prefersDark ? 'dark' : 'light');
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark');
                }
                document.documentElement.setAttribute('data-theme', theme);
            } catch (e) {}
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta property="og:title" content="{{ $title ?? 'Kuartal Ventures' }}">
    <meta property="og:site_name" content="Kuartal Ventures">
    {{ $head ?? '' }}
</head>
<body class="min-h-screen flex flex-col">

    @include('partials.nav')

    <main class="flex-1">
        {{ $slot }}
    </main>

    @include('partials.footer')

</body>
</html>
