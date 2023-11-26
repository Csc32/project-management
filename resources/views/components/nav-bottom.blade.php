<nav class="flex-1">
    <ul class="py-4">
        <li><a href="#" class="block text-white py-2 px-4">Configuracion</a>
        </li>
        <li>
            <form method="POST" action="/logout" class="inline">
                @csrf
                <button type="submit" class="hover:text-error-900">
                    Salir
                </button>
        </li>
    </ul>
</nav>
