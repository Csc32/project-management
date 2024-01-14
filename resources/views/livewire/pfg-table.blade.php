<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-title-900 dark:text-title-900">
        <thead class="text-xs text-white uppercase bg-desactivate bg dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NOMBRES </th>
                <th scope="col" class="px-6 py-3" colspan="2" rowspan="2">
                    ACCIÓN </th>
            </tr>
        </thead>
        <tbody>
            @if (empty($pfgs) || count($pfgs) <= 0)
                <tr class="bg-bgLight border-b border-b-logo-500">
                    <td>
                        No hay profesores registrados
                    </td>
                </tr>
            @else
                @foreach ($pfgs as $pfg)
                    <tr class="bg-bgLight border-b border-b-logo-500">
                        <td class="px-6 py-4">
                            {{ $pfg->name }}
                        </td>
                        <td class="px-6 py-4 flex row gap-5">
                            <a href="{{ route('admin.pfgs') }}/{{ $pfg->id }}"
                                class="flex items-center gap-3  text-route-900 font-semibold"
                                wire:key='{{ $pfg->id }}' wire:click.prevent='edit({{ $pfg->id }})'>
                                <span>
                                    Editar
                                </span>
                                <span>
                                    <x-heroicon-s-pencil-square style="height: 20px" />
                                </span>
                            </a>
                            <a href="{{ route('admin.pfgs') }}/{{ $pfg->id }}"
                                class="flex items-center gap-3  text-delete font-semibold"
                                wire:key='{{ $pfg->id }}' wire:click.prevent='delete({{ $pfg->id }})'>
                                <span class="">
                                    Eliminar
                                </span>
                                <span>
                                    <x-fas-delete-left style="height: 20px" />
                                </span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tr>
        </tbody>
    </table>
    {{ $pfgs->links() }}
</div>
