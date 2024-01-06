<div class="fixed w-full h-auto inset-0 z-50 overflow-hidden flex justify-center items-center p-8 {{ $attribute }} transition-all ease delay-700"
    style="background: rgba(0,0,0,.7);">
    <div class="flex-col p-8 bg-borderLight shadow w-full rounded-2xl relative">
        <h3 class="mb-6 font-semibold text-lg">Complete el siguiente formulario para añadir a un profesor</h3>
        <button type="button" wire:click="close" id='btnClose'
            class="absolute text-bgLight w-10 h-10 rounded-lg bg-error-900 flex items-center justify-center font-semibold right-1 top-1">
            <x-heroicon-o-x-mark style="height: 40px" />
        </button>
        <form wire:submit='save'>
            <div class="grid gap-7 mb-6 md:grid-cols-3 relative p-5">
                <div>
                    <label for="user_id" class="block mb-2 text-md font-medium text-title-900 dark:text-white">Cédula
                        <span class="text-delete">*</span></label>
                    <input type="text" id="first_name"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="12345" required wire:model='user_id'>
                </div>
                <div>
                    <label for="names" class="block mb-2 text-md font-medium text-title-900 dark:text-white">Nombres
                        <span class="text-delete">*</span></label>
                    <input type="text" id="first_name"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John" required wire:model='names'>
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-md font-medium text-title-900 dark:text-white">
                        Apellidos <span class="text-delete">*</span> </label>
                    <input type="text" id="last_name"
                        class="bg-borderlight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Doe" required wire:model='lastnames'>
                </div>
                <div class="mb-6">
                    <div class="flex flex-col justify-center items-center">
                        <div class="flex items-center me-4">
                            <p class="block mb-2 text-md font-medium text-title-900 dark:text-white">Sexo <span
                                    class="text-delete">*</span></p>
                        </div>
                        <div class="flex row">
                            <div class="flex items-center me-4">
                                <input id="inline-radio" type="radio" value="M" name="inline-radio-group"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    wire:model='sex'>
                                <label for="inline-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Masculino</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-2-radio" type="radio" value="F" name="inline-radio-group"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    wire:model='sex'>
                                <label for="inline-2-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Femenino</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-md font-medium text-title-900 dark:text-white">Email
                        <span class="text-delete">*</span></label>
                    <input type="email" id="email"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="john.doe@company.com" required wire:model='email'>
                </div>
                <div class="mb-6">
                    <label for="tel"
                        class="block mb-2 text-md font-medium text-title-900 dark:text-white">Télefono</label>
                    <input type="tel" id="tel"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="042600000" required wire:model='tel'>
                </div>
                <div class="mb-6">
                    <label for="pfg"
                        class="block mb-2 text-md font-medium text-title-900 dark:text-white">Programas de
                        formación de Grado <span class="text-delete">*</span></label>
                    <select id="pfg"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-md  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model="pfg">
                        <option selected>PFG</option>
                        @foreach (\App\Models\Pfgs::all() as $pfg)
                            <option value="{{ $pfg->id }}">{{ $pfg->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="date" class="block mb-2 text-md font-medium text-title-900 dark:text-white">Fecha de
                        nacimiento <span class="text-delete">*</span></label>
                    <input type="date"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-md  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model='date' />
                </div>
            </div>
            <div class="mb-6 w-full flex justify-center border-t-[3px] border-t-logo-900 pt-5 ">
                <x-btn-add type='submit'>
                    {{ $btnTitle }}
                </x-btn-add>
            </div>
        </form>
    </div>
</div>
