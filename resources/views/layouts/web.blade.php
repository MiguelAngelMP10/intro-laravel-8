<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cursos de Programación Web</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}"
</head>
<body>
  <main class="py-10">
    <div class="container mx-auto px-4">
      @yield('content')
    </div>
  </main>
</body>
</html>
