<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Transaction Manager</title>
    <!-- CSS styles -->
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"
                style="font-size: 24px; font-weight: bold; text-decoration: none; color: black;">Transaction Manager</a>
        </div>
    </nav>

    <!-- Content Section -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        &copy; {{ date('Y') }} Your Transaction Manager
    </footer>

    <!-- JavaScript scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
