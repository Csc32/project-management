<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-title-900 dark:text-title-900">
        <thead class="text-xs text-white uppercase bg-desactivate bg dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NOMBRES </th>
                <th scope="col" class="px-6 py-3">
                    PFG
                </th>
                <th scope="col" class="px-6 py-3">
                    CORREO
                </th>
                <th scope="col" class="px-6 py-3">
                    Accíon
                </th>
            </tr>
        </thead>
        <tbody>
            @if (empty($teachers) || count($teachers) <= 0)
                <tr class="bg-bgLight border-b border-b-logo-500 text-md-center uppercase text-center" scope='row'>
                    <td class="px-6 py-4" colspan="2"> No existe el profesor con ese nombre                    </td>
                </tr>
            @else
                @foreach ($teachers as $teacher)
                    <tr class="bg-bgLight border-b border-b-logo-500">
                        <td class="px-6 py-4">
                            {{ $teacher->names }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $teacher->pfg->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $teacher->email }}
                        </td>
                        <td class="px-6 py-4 flex row gap-5">
                            {{--  <a href="{{ route('admin.teachers') }}/{{ $teacher->id }}"
                                class="flex items-center gap-3  text-route-900 font-semibold"
                                wire:key='{{ $teacher->id }}' wire:click.prevent='edit({{ $teacher->id }})'>
                                <span>
                                    Editar
                                </span>
                                <span>
                                    <x-heroicon-s-pencil-square style="height: 20px" />
                                </span>
                            </a> --}}
                            <a href="{{ route('admin.teachers') }}/{{ $teacher->id }}"
                                class="flex items-center gap-3  text-delete font-semibold"
                                wire:key='{{ $teacher->id }}' wire:click.prevent='delete({{ $teacher->id }})'>
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
    {{ $teachers->links() }}
</div>
