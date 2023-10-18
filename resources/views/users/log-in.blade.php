<x-layout>
    <main class="w-full flex flex-row  h-screen overflow-hidden">
        <section class="flex flex-row items-stretch flex-1 justify-center align-items-center relative">
            <section
                class="md:w-1/2 md:h-full flex flex-col justify-center items-center bg-borderLight absolute top-0 left-0">
                <header class="flex w-full flex-col md:gap-6">
                    <div class="w-100 h-[9.5em] px-[7.35em] py-0.5em">
                        <img src="{{ asset('images/logo_ubv.png') }}" alt="logo UBV" class="w-8.25 h-[7.8em]">
                    </div>
                    <div class="text-title-900">
                        <h1 class="font-bold xl:text-3xl">Inicia sesión en tu cuenta para continuar</h1>
                    </div>
                </header>
                <x-log-in-card />
            </section>
            <div class="flex w-full">
                <div class="w-screen h-50 bg-cover translate-x-[30%] z-[-1] bg-logo-900 bg-opacity-40"
                    style="background-image: url('{{ asset('images/gestion_proyecto_image.jpg') }}')">
                </div>
                {{--                 <img src="{{ asset('images/gestion_proyecto_image.jpg') }}" alt="gestion de proyectos"
                    class="w-screen h-screen z-[-1] absolute top-0 left-0 translate-x-[-20%]"> --}}
            </div>
        </section>
    </main>
</x-layout>
