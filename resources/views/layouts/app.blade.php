{{-- Main Layout: wraps every page with head, nav, footer, and scripts --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portfolio' }} — Personal Portfolio</title>
    <meta name="description" content="{{ $description ?? 'Personal portfolio website showcasing projects, education, and experience.' }}">

    {{-- Google Fonts: Inter + Poppins + Merriweather --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Poppins:wght@600;700;800&family=Dancing+Script:wght@600;700&family=Abril+Fatface&display=swap" rel="stylesheet">

    {{-- Vite CSS/JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

    {{-- Navigation --}}
    @include('components.navbar')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>
