<x-layout>
    <main class="flex row">
        <x-aside>
            <x-logo />
            <x-navbar />
            <x-nav-bottom />
        </x-aside>
        <livewire:teacherModal />
        <section class="w-full flex flex-col px-9 py-9">
            <x-title-component />
            <section class="flex flex-col justify-center items-center">
                <header class="w-full flex row items-center flex-1">
                    <x-search />
                    <livewire:btn-add :attrs="[
                        'class' =>
                            'flex row justify-evenly items-center w-44 h-10 px-2 py-2.5  bg-green-500 rounded-md gap-3.5  text-title font-semibold text-xl',
                        'type' => 'button',
                        'wire:click' => 'show',
                    ]" />
                </header>
                <section class="my-6 w-full">
                    <livewire:teachers-table />
                </section>
            </section>
        </section>
    </main>
</x-layout>
