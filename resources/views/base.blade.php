<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-3">

    <div class="row">
        <div class="col-7 border p-2 text-center">LEFT HEADER</div>
        <div class="col-5 border p-2 text-center">RIGHT HEADER</div>
    </div>

    <div class="row">
        <div class="col-3 border p-2">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="/courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="/students">Students</a></li>
                <li class="nav-item"><a class="nav-link" href="/grades">Grades</a></li>
                <li class="nav-item"><a class="nav-link" href="/assignments">Assignments</a></li>
            </ul>
        </div>
        <div class="col-6 border p-2">
            @yield('content')
        </div>
        <div class="col-3 border p-2 text-center">RIGHT NAVIGATION</div>
    </div>

    <div class="row">
        <div class="col-12 border p-2 text-center">FOOTER</div>
    </div>

</body>
</html>

