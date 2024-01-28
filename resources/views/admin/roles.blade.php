<x-layout>
    <main class="flex flex-row w-full">
        <x-aside>
            <x-logo />

            <x-navbar />
            <x-nav-bottom />
        </x-aside>
        <section class="w-full flex flex-col px-9 py-9">
            <x-title-component />
            <section class="w-full d-flex flex-1 justify-center">
                <h3 class="text-2xl font-semibold">Roles</h3>
                <livewire:roles.rol-table />
            </section>
        </section>
    </main>
</x-layout>
