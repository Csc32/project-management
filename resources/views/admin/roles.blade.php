<x-layout>
    <main class="flex flex-row w-full">
        <x-aside>
            <x-logo />

            <x-navbar />
            <x-nav-bottom />
        </x-aside>
        <section class="w-full flex flex-col px-9 py-9">
            <x-title-component />
            <section class="w-full flex flex-col justify-evenly items-center gap-5">
                <livewire:roles.rol-table />
                <livewire:roles.charts.role-chart />
            </section>
        </section>
    </main>
</x-layout>
