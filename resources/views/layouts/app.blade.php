<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $event['description'] }}">
    <meta name="theme-color" content="#171717">
    <title>{{ $event['name'] }} — {{ $event['brand'] }}</title>
    <meta property="og:title" content="{{ $event['name'] }}">
    <meta property="og:description" content="{{ $event['description'] }}">
    <meta property="og:image" content="{{ site_url($event['hero_image']) }}">
    <link rel="icon" type="image/png" href="{{ site_url('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @if (config('site.exporting'))
        @php($manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true, flags: JSON_THROW_ON_ERROR))
        <link rel="stylesheet" href="{{ site_url('build/'.$manifest['resources/css/app.css']['file']) }}">
        <script type="module" src="{{ site_url('build/'.$manifest['resources/js/app.js']['file']) }}"></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    <header class="site-header" id="top">
        <div class="header-top shell">
            <a class="wordmark" href="{{ site_url() }}" aria-label="{{ $event['brand'] }} home"><img src="{{ site_url('images/trackmeats.svg') }}" alt="" aria-hidden="true">VELOMEATS</a>
            <nav class="desktop-nav" aria-label="Primary navigation"><a href="#lineup">Flyers</a><a href="#program">Advertisement</a><a href="#stories">About</a></nav>
            <div class="header-actions">
                <a class="button button-outline" data-header-registration aria-disabled="true">Registration</a>
                <a class="button" href="https://ellipsisetc.xyz/pages/contact">Contact</a>
            </div>
            <button class="menu-toggle" type="button" data-menu-button aria-controls="mobile-navigation" aria-expanded="false"><span data-menu-label>Menu</span><span class="menu-lines" aria-hidden="true"></span></button>
        </div>
        <nav id="mobile-navigation" class="mobile-nav" aria-label="Mobile navigation" hidden>
            <a href="#lineup">Flyers</a><a href="#program">Advertisement</a><a href="#stories">About</a>
        </nav>
    </header>
    <main id="main-content">@yield('content')</main>
    <footer class="site-footer" id="contact">
        <div class="shell footer-top"><p>VELOMEATS / SEASON 01</p><p>Independent cycling event concept</p><a href="#top">Back to top ↑</a></div>
    </footer>
</body>
</html>
