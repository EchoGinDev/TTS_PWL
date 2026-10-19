<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TTS PWL')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .box { border: 1px solid #000; padding: 12px; }
    </style>
</head>
<body>
    <div class="container my-3">
        {{-- HEADER --}}
        <div class="row g-0">
            <div class="col-md-7 box text-center">LEFT HEADER</div>
            <div class="col-md-5 box text-center">RIGHT HEADER</div>
        </div>

        {{-- NAVIGATION + CONTENT --}}
        <div class="row g-0" style="min-height: 300px;">
            <div class="col-md-3 box">
                <h6 class="text-center">LEFT NAVIGATION</h6>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="/">Form Mahasiswa</a></li>
                </ul>
            </div>
            <div class="col-md-6 box">
                <h6 class="text-center">CONTENT</h6>
                @yield('content')
            </div>
            <div class="col-md-3 box">
                <h6 class="text-center">RIGHT NAVIGATION</h6>
            </div>
        </div>

        {{-- FOOTER --}}
        <div class="row g-0">
            <div class="col-12 box text-center">FOOTER</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

