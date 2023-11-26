@php
    $routeName = \Request::route()->getName();
@endphp
<section class="flex flex-col w-full justify-center items-center gap-1">
    <ul class="py-4 font-normal text-sm">
        <li><a href="{{ route('admin.config') }}"
                class="flex justify-center items-center text-white py-2 px-4 w-full h-16 gap-4 @if ($routeName === 'admin.config') text-titleLight-900 @else text-desactivate @endif">
                <span><x-heroicon-m-cog-8-tooth style="height: 20px;" /></span> Configuracion</a>
        </li>
        <li class="text-desactivate font-normal text-sm">
            <form method="POST" action="/logout" class="inline">
                @csrf
                <button type="submit"
                    class="flex justify-center items-center text-white py-2 px-4 w-full h-16 gap-4 hover:text-titleLight-900 ease-in-out transition-all duration-[0.5s]">
                    <span><x-heroicon-o-chevron-down style="height: 20px" /> </span>
                    Salir
                </button>
        </li>
    </ul>
</section>
