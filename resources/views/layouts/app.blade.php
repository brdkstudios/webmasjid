<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Masjid</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Konten Utama -->
    <div class="" style="height: min-content; min-height: 100vh;">
        @yield('content')
    </div>

    <!-- Footer -->
     <div class="h-full">
    @include('partials.footer')
    </div>
    <!-- Scripts -->
    <!-- Tambahkan script JS di sini -->
</body>
</html>
