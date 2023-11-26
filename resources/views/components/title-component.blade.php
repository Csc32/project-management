@php
    $routeName = \Request::route()->getName();

    $title = '';

    if ($routeName == 'admin') {
        $title = 'Panel';
    }
    if ($routeName == 'admin.teachers') {
        $title = 'Tabla de profesores Registrados';
    }
    if ($routeName == 'admin.students') {
        $title = 'Tabla de estudiantes registrados';
    }
    if ($routeName == 'admin.pfgs') {
        $title = 'Administrar Programas de Formacion';
    }
    if ($routeName == 'admin.roles') {
        $title = 'Gestionar roles';
    }

    if ($routeName == 'admin.config') {
        $title = 'Configurar usuario';
    }
@endphp
<section class="mt-4">
    <header class="flex flex-col justify-start items-start">
        <h1 class="text-bigTitle-900 text-left font-extrabold text-4xl flex-1">{{ $title }}</h1>
        @if (\Request::route()->getName() === 'admin')
            <h2 class="text-desactivate text-left flex-1"> Bienvenido, {{ auth()->user()->names }}</h2>
        @endif
    </header>
</section>
