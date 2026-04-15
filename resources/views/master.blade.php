<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel App</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #0f172a;
            color: white;
        }

        /* HERO BACKGROUND */
        .hero-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center center/cover;
            z-index: -2;
        }

        /* DARK OVERLAY */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 23, 42, 0.75);
            z-index: -1;
        }

        /* Navbar */
        .navbar {
            backdrop-filter: blur(12px);
            background: rgba(15, 23, 42, 0.7) !important;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Logo */
        .logo {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Content */
        .main-content {
            min-height: 80vh;
            margin-top: 30px;
        }

        /* Glass Card */
        .card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 20px;
            color: white;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
        }

        /* Footer */
        footer {
            background: rgba(15, 23, 42, 0.9);
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            padding: 15px 0;
            margin-top: 50px;
        }

    </style>
</head>

<body>

    <!-- Background -->
    <div class="hero-bg"></div>
    <div class="overlay"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top px-4">
        <a class="navbar-brand" href="#">
            <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" class="logo">
            Travel App
        </a>
    </nav>

    <!-- Content -->
    <div class="container main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p class="mb-0">
            © 2026 Travel App ✈️ | Explore the world
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>