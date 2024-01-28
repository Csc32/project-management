@php
    $routeName = \Request::route()->getName();

    $title = '';

    if ($routeName == 'admin') {
        $title = 'Panel';
    }
    if ($routeName == 'admin.teachers') {
        $title = 'Gestion de profesores';
    }
    if ($routeName == 'admin.students') {
        $title = 'Tabla de estudiantes registrados';
    }
    if ($routeName == 'admin.pfgs') {
        $title = 'Gestion de Programas de Formación de grado';
    }
    if ($routeName == 'admin.roles') {
        $title = 'Gestionar Roles';
    }

    if ($routeName == 'admin.permission') {
        $title = 'Gestionar Permisos';
    }

    if ($routeName == 'admin.config') {
        $title = 'Configuracion';
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
