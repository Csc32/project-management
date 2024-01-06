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
            @if (empty($teachers))
                <tr class="bg-bgLight border-b border-b-logo-500">
                    No hay profesores registrados
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
                        <td class="px-6 py-4">
                            {{ $teacher->names }}
                        </td>
                    </tr>
                @endforeach
            @endif
            </tr>
        </tbody>
    </table>
    {{ $teachers->links() }}
</div>
