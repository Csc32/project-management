<x-layout>
    <main class="flex flex-row w-full">
        <x-aside>
            <x-logo />

            <x-navbar />
            <x-nav-bottom />
        </x-aside>
        <section class="w-full flex flex-col px-9 py-9">
            <x-title-component />
            <livewire:roles.role-modal />
            <header class="w-full flex row items-center flex-shrink">
                {{--                     <x-search /> --}}
                <livewire:search />
                <livewire:btn-add :attrs="[
                    'class' =>
                        'flex row justify-evenly items-center w-44 h-10 px-2 py-2.5  bg-green-500 rounded-md gap-3.5  text-title font-semibold text-xl',
                    'type' => 'button',
                    'wire:click' => 'show',
                ]" />
            </header>
            <section class="w-full flex flex-col justify-evenly items-center gap-05">
                <livewire:roles.rol-table />
                <livewire:roles.charts.role-chart />
            </section>
        </section>
    </main>
</x-layout>
