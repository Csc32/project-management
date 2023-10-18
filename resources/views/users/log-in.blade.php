<x-layout>
    <main class="w-sreen h-screen flex justify-center relative">
        <div class="absolute w-[238px] h-[210.993px] left-[-2em] top-[-9em] z-[-1]"
            style="background-image: url('{{ asset('images/line.svg') }}')">
        </div>
        <div class="absolute w-[231px] h-[210.993px] top-[-3em] left-[-4.2em] z-[-1]"
            style="background-image: url('{{ asset('images/line.svg') }}')">
        </div>
        <div class="absolute w-[231px] h-[210.993px] left-[-10em] top-[-1em] z-[-1] my-2"
            style="background-image: url('{{ asset('images/line.svg') }}')">
        </div>
        <section class="w-full flex flex-row flex-1 justify-evenly">
            <section class="flex flex-col py-10 justify-center items-center gap-10 w-full">
                <header class="flex flex-col gap-10 justify-center items-center">
                    <div class="flex-1">
                        <img src="{{ asset('images/logo_ubv.png') }}" alt="logo UBV" class="">
                    </div>
                    <div class="text-title-900 text-center">
                        <h1 class="text-3xl">Inicia sesión en tu cuenta para continuar</h1>
                    </div>
                </header>
                <x-log-in-card />
                <x-footer-author class="w-full h-full text-center"></x-footer-author>
            </section>
            <div class="w-full h-full">
                <img class="h-full object-cover" src="{{ asset('images/gestion_proyecto_image.jpg') }}" alt="">
                {{--                 <div class="bg-no-repeat w-full h-full translate-x-[-20%]"
                    style="background-image: url('{{ asset('images/gestion_proyecto_image.jpg') }}');">
                </div> --}}
            </div>
        </section>
    </main>
</x-layout>
