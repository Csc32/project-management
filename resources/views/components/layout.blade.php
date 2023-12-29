<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de gestion de proyectos</title>
    {{--     <script type='module' defer src="{{ mix('resources/js/app.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script> --}}
    @vite('resources/css/app.css')
    @livewireStyles
    @vite(['resources/js/app.js'])
</head>

<body class="bg-bgLight dark:bg-title-900 w-screen  overflow-hidden">

    {{ $slot }}
    @livewireScriptConfig
</body>

</html>
