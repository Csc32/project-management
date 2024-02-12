<div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg mt-2">
    <table class="w-full text-sm rtl:text-right text-title-900 dark:text-title-900 text-center">
        <thead class="text-xs text-white uppercase bg-desactivate bg dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NOMBRES </th>
                <th scope="col" class="px-6 py-3" colspan="2">
                    ACCIÓN </th>
            </tr>
        </thead>
        <tbody>
            @if (empty($roles) || count($roles) <= 0)
                <tr class="bg-bgLight border-b border-b-logo-500 text-md-center">
                    <td class="px-6 py-4" colspan="2"> No se ha registrado algun Programa de Formación de Grado
                    </td>
                </tr>
            @else
                @foreach ($roles as $rol)
                    <tr class="bg-bgLight border-b border-b-logo-500">
                        <td class="px-6 py-4">
                            {{ $rol->name }}
                        </td>
                        <td class="px-6 py-4 flex row justify-center gap-5" colspan='2'>
                            <a href="{{ route('admin.roles') }}/{{ $rol->id }}"
                                class="flex items-center gap-3  text-route-900 font-semibold"
                                wire:key='{{ $rol->id }}' wire:click.prevent='edit({{ $rol->id }})'>
                                <span>
                                    Editar
                                </span>
                                <span>
                                    <x-heroicon-s-pencil-square style="height: 20px" />
                                </span>
                            </a>
                            <a href="{{ route('admin.roles') }}/{{ $rol->id }}"
                                class="flex items-center gap-3  text-delete font-semibold"
                                wire:key='{{ $rol->id }}' wire:click.prevent='delete({{ $rol->id }})'>
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
    {{ $roles->links() }}
</div>
