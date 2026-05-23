<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milo Marathon System</title>
    <link href = "{{ asset('css/bootstrap.min.css') }}" rel = "stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">   
    <style>
        .milo-bg-green { background-color: #0F9E4A; }
        .milo-text-green { color: #0F9E4A; }
        .btn-milo { background-color: #0F9E4A; color: white; }
        .btn-milo:hover { background-color: #0B7D3A; color: white; }
        .milo-text-gold { color: #FFCC00; }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('image/logo.jpg') }}" alt="Milo Logo" height="40" class="d-inline-block align-top me-2 rounded">
                <span class="fw-bold tracking-tight milo-text-green">MARATHON 2026</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto align-items-center">
                    <a class="nav-link {{$title == "register" ? "btn btn-milo" : "text-dark"}} fw-semibold me-3" href="{{ url("/register") }}">Register</a>
                    <a class="nav-link {{$title == "Registrations" ? "btn btn-milo" : "text-dark"}} fw-semibold me-3" href="{{ url("/registrations") }}">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>