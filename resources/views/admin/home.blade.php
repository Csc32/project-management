<x-layout>
    <main class="flex flex-row">
        <x-aside>
            <x-logo />
            <x-navbar />
            <x-nav-bottom />
        </x-aside>
        <section class="w-auto flex flex-col px-9 py-9">
            <x-title-component />
            <section class="w-full flex flex-row justify-evenly items-center">
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
                <article class="flex flex-col gap-5 w-[80%] ">
                    <header class="w-full bg-desactivate p-6 text-center font-bold text-xl rounded-lg">
                        <h3>Ultimo proyectos registrados</h3>
                    </header>
                    @if (isset($lastProjects) && count($lastProjects) > 0)
                        <p>Ultimos 3 projectos registrados</p>
                        <a href="{{ route('admin.projects') }}">Ver más</a>
                    @else
                        <p class="w-full bg-borderLight p-3 text-center font-bold text-mediun rounded-lg">Aun no se han
                            registrado
                            proyectos</p>
                    @endif
                </article>
            </section>
        </section>
        <script src="{{ $chart->cdn() }}"></script>

        {{ $chart->script() }}

        <script src="{{ $projects->cdn() }}"></script>

        {{ $projects->script() }}
        </body>
    </main>
</x-layout>
