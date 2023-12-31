@php
    $routeName = \Request::route()->getName();
@endphp
<nav class="flex flex-col w-full justify-center items-center gap-1 sticky">
    <ul class="w-full font-normal text-sm">
        <li><a href="{{ route('admin') }}"
                class="flex justify-center items-center text-white py-2 px-4 w-full h-16 gap-4 @if ($routeName === 'admin') text-titleLight-900 @else text-desactivate @endif"><span>
                    <x-zondicon-home style="height: 20px" />
                </span>
                Panel</a>
        </li>
        <li>
            <a href="{{ route('admin.teachers') }}"
                class="flex justify-center items-center text-white py-2 px-4 w-full h-16 gap-4 @if ($routeName === 'admin.teachers') text-titleLight-900 @else text-desactivate @endif">
                <span><x-heroicon-s-users style="height: 20px" /></span>Profesores</a>
        </li>
        <li><a href="{{ route('admin.pfgs') }}"
                class="flex justify-center items-center text-white py-2 px-4 w-full h-16 gap-4 @if ($routeName === 'admin.pfgs') text-titleLight-900 @else text-desactivate @endif">
                <span> <x-zondicon-folder style="height: 20px" /></span> PFG</a></li>
        <li><a href="{{ route('admin.roles') }}"
                class="flex justify-center items-center text-white py-2 px-4 w-full h-16 gap-4 @if ($routeName === 'admin.roles') text-titleLight-900 @else text-desactivate @endif">
                <span><x-heroicon-s-users style="height: 20px" /></span>
                Roles</a></li>
        <li><a href="{{ route('admin.projects') }}"
                class="flex justify-center items-center text-white py-2 px-4 w-full h-16 gap-4 @if ($routeName === 'admin.projects') text-titleLight-900 @else text-desactivate @endif">
                <span> <x-heroicon-s-document-duplicate style="height: 20px" /></span>
                Proyectos</a>
        <li>
    </ul>
</nav>
