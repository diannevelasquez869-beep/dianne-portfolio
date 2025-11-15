<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Neon Portfolio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Custom Pink Neon Theme -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #0d001a;
            color: #fce7ff;
        }

        nav {
            background: #ff5ccc;
            box-shadow: 0 0 15px #ff5ccc;
        }

        nav a {
            color: white !important;
            font-weight: 600;
            margin-right: 15px;
        }

        nav a:hover {
            text-shadow: 0 0 10px #fff, 0 0 20px #ff80df;
        }

        .neon-title {
            font-size: 3rem;
            color: #ff9ae6;
            text-shadow: 0 0 10px #ff5ccc, 0 0 25px #ff5ccc;
            font-weight: 700;
        }

        .typewriter {
            border-right: 3px solid #ffb3f1;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 4s steps(30), blink .7s infinite;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink {
            50% { border-color: transparent; }
        }

        .neon-card {
            background: rgba(255, 182, 255, 0.08);
            border: 1px solid #ff9ae6;
            border-radius: 15px;
            transition: 0.3s;
        }

        .neon-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 0 20px #ff69d4;
        }

        footer {
            background: #1a001f;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #ff9ae6;
            margin-top: 40px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark px-3">
    <a class="navbar-brand fw-bold" href="{{ route('landing') }}">PinkNeon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="{{ route('landing') }}">Home</a>
            <a class="nav-link" href="{{ route('about') }}">About</a>
            <a class="nav-link" href="{{ route('work') }}">Work</a>
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </div>
    </div>
</nav>

<main class="container py-5">
    @yield('content')
</main>

<footer>
    &copy; {{ date('Y') }} Pink Neon Portfolio ✨
</footer>

<!-- Bootstrap + ScrollReveal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>

<script>
    ScrollReveal().reveal('.reveal', {
        distance: '50px',
        duration: 1200,
        origin: 'bottom',
        interval: 150
    });
</script>

</body>
</html>
