<x-layout>
    <main class="flex row flex-1 w-full">
        <x-aside>
            <x-logo />
            <x-navbar />
            <x-nav-bottom />
        </x-aside>
        <section class="w-full flex flex-col px-9 py-9">
            <x-title-component />
            <section class="w-full flex flex-row px-9 py-9">
                <articles class="w-96 h-[27rem] flex flex-col p-4">
                    <h3 class="font-bold">Personas Registradas</h3>
                    <div class="bg-borderLight w-full h-auto flex flex-col">
                        <div class="w-full h-60">
                            <div id="teacher-data">
                                {!! $chart->container() !!}
                            </div>
                        </div>
                    </div>
                    </div>
                </articles>
                <articles class="w-96 h-[27rem] flex flex-col p-4">
                    <h3 class="font-bold">Estudiantes</h3>
                    <div class="bg-borderLight w-full h-auto flex flex-col">
                        <div class="w-full h-60">
                            <div id="teacher-data">
                                {!! $projects->container() !!}
                            </div>
                        </div>
                    </div>
                    </div>
                </articles>
            </section>
            <section>
                <x-project-card>
                    <x-projects :lastProjects="$lastProjects" />
                </x-project-card>
                {{--                 <article class="flex flex-col gap-5 w-[80%] ">
                    <header class="w-full bg-desactivate p-6 text-center font-bold text-xl rounded-lg">
                        <h3>Ultimo proyectos registrados</h3>
                    </header>
                    <section class="w-100 row gap-8 flex-1">
                        @if (isset($lastProjects))
                            <x-projects :lastProjects="$lastProjects" />
                        @else
                            <p class="w-full bg-borderLight p-3 text-center font-bold text-mediun rounded-lg">Aun no se
                                han
                                registrado
                                proyectos</p>
                        @endif
                    </section>
                </article> --}}
            </section>
        </section>
        <script src="{{ $chart->cdn() }}"></script>

        {{ $chart->script() }}

        <script src="{{ $projects->cdn() }}"></script>

        {{ $projects->script() }}
    </main>
</x-layout>
