<x-layout>
    <main class="flex row flex-1 w-full">
        <x-aside>
            <x-logo />
            <x-navbar />
            <x-nav-bottom />
        </x-aside>
        <section class="w-full flex flex-col px-9 py-9">
            <livewire:alert />
            <x-title-component />
            <section class="flex flex-row justify-center items-start py-5 h-full">
                {{--                     <x-search /> --}}
                <section class="w-1/2 flex flex-col gap-5 py-5">
                    <article class="w-100">
                        <div class="bg-borderLight w-full h-auto flex flex-col rounded-xl">
                            <div class="w-full flex-1 py-4 px-2">
                                <div id="studentChart">
                                    {!! $teacherChart->container() !!}
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="w-100">
                        <div class="bg-borderLight w-full h-auto flex flex-col rounded-xl">
                            <div class="w-full flex-1 py-4 px-2">
                                <div id="teacherChart">
                                    {!! $studentChart->container() !!}
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="flex flex-col">
                    <section class="w-full flex row items-center flex-1">
                        <livewire:search />
                        <livewire:pfg-btn-add :attrs="[
                            'class' =>
                                'flex row justify-evenly items-center w-44 h-10 px-2 py-2.5  bg-green-500 rounded-md gap-3.5  text-title font-semibold text-xl',
                            'type' => 'button',
                            'wire:click' => 'show',
                        ]" />
                    </section>
                </section>
            </section>
        </section>
        <script src="{{ $teacherChart->cdn() }}"></script>

        {{ $teacherChart->script() }}

        <script src="{{ $studentChart->cdn() }}"></script>

        {{ $studentChart->script() }}
    </main>
</x-layout>
