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

    <!-- Custom Style -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #eef2f3, #f8f9fa);
        }

        /* Navbar */
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.8) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        /* Main Content */
        .main-content {
            min-height: 80vh;
        }

        /* Card effect global */
        .card {
            border-radius: 15px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        /* Footer */
        footer {
            background: #0dcaf0;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="sticky-top">
        @include('partial.navbar')
    </div>

    <!-- Content -->
    <div class="container main-content mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p class="mb-0">
            © 2026 Travel App | Dibuat dengan ❤️
        </p>
    </footer>

    @stack('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>