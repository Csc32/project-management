<form action="/log-in" method="POST">
    <section class="flex flex-col items-center px-8 py-10 gap-6">
        <div class="flex flex-col items-stretch justify-start">
            <label for="user">
                Cedula
            </label>
            <input type="text" required
                class="w-80 h-10 px-3 py-2 bg-white rounded-md shadow border border-borderStrokeLight justify-start items-center inline-flex"
                id="user">
        </div>

        <div class="flex flex-col items-stretch justify-start">
            <label for="password">
                Contraseña
            </label>
            <input type="password" required
                class="w-80 h-10 px-3 py-2 bg-white rounded-md shadow border border-borderStrokeLight justify-start items-center inline-flex"
                id="password">
        </div>
        <div class="flex flex-row justify-between gap-3 w-full h-auto">
            <div class="flex flex-row items-center gap-2">
                <input type="checkbox" name="remember_me" id="check" class="border border-borderStrokeLight">
                <label for="check" class="text-sm">Recuerdame</label>
            </div>
            <div class="flex flex-row items-center gap-2">
                <a href="#" hclass="text-right text-sm font-weight-[400] text-title-900">¿Olvidaste tu
                    contraseña?</a>
            </div>
        </div>
        <div class="flex w-full">
            <button type="submit"
                class="px-[0.5em] py-[0.5em] bg-logo-900 h-auto rounded-md w-full text-borderLight shadow">Iniciar
                sesion</button>
        </div>
    </section>
</form>
