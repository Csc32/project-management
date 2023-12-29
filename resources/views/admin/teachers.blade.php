<x-layout>
    <main class="flex row">
        <x-aside>
            <x-logo />
            <x-navbar />
            <x-nav-bottom />
        </x-aside>
        @livewire('teacher-modal')
        <section class="w-screen flex flex-col px-9 py-9">
            <x-title-component />
            <section class="flex justify-center items-center">
                <header class="w-full flex row items-center">
                    <x-search />
                    <livewire:btn-add :attrs="[
                        'class' =>
                            'flex row justify-evenly items-center w-44 h-10 px-2 py-2.5  bg-green-500 rounded-md gap-3.5  text-title font-semibold text-xl',
                        'type' => 'button',
                        'wire:click' => 'show',
                    ]" />
                </header>
            </section>
            <section class="my-6">
                <livewire:teachers-table />
            </section>
        </section>

    </main>

</x-layout>
