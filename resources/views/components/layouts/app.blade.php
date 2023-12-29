<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Sistema de gestion de proyectos' }}</title>
</head>

<body class="bg-bgLight dark:bg-title-900 w-screen h-screen overflow-hidden"> {{ $slot }}
</body>

</html>
