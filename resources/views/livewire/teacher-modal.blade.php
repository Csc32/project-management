<div class="fixed w-full h-auto inset-0 z-50 overflow-hidden flex justify-center items-center p-8 {{ $attribute }} transition-all ease delay-700"
    id="modal-form" style="background: rgba(0,0,0,.7);">
    <div class="flex-col p-8 bg-borderLight shadow w-full rounded-2xl relative">
        <h3 class="mb-6 font-semibold text-lg">Complete el siguiente formulario para añadir a un profesor</h3>
        <button type="button" wire:click="close"
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
                        placeholder="12345" required>
                </div>
                <div>
                    <label for="names" class="block mb-2 text-md font-medium text-title-900 dark:text-white">Nombres
                        <span class="text-delete">*</span></label>
                    <input type="text" id="first_name"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-md font-medium text-title-900 dark:text-white">
                        Apellidos <span class="text-delete">*</span> </label>
                    <input type="text" id="last_name"
                        class="bg-borderlight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Doe" required>
                </div>
                <div class="mb-6">
                    <div class="flex flex-col justify-center items-center">
                        <div class="flex items-center me-4">
                            <p class="block mb-2 text-md font-medium text-title-900 dark:text-white">Sexo <span
                                    class="text-delete">*</span></p>
                        </div>
                        <div class="flex row">
                            <div class="flex items-center me-4">
                                <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline
                                    1</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-2-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline
                                    2</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-md font-medium text-title-900 dark:text-white">Email
                        address <span class="text-delete">*</span></label>
                    <input type="email" id="email"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="john.doe@company.com" required>
                </div>
                <div class="mb-6">
                    <label for="tel"
                        class="block mb-2 text-md font-medium text-title-900 dark:text-white">Télefono</label>
                    <input type="tel" id="tel"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="john.doe@company.com" required>
                </div>
                <div class="mb-6">
                    <label for="pfg"
                        class="block mb-2 text-md font-medium text-title-900 dark:text-white">Programas de
                        formación de Grado <span class="text-delete">*</span></label>
                    <select id="countries"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-md  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>PFG</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="date" class="block mb-2 text-md font-medium text-title-900 dark:text-white">Fecha de
                        nacimiento <span class="text-delete">*</span></label>
                    <select id="date"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-md  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>PFG</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
            </div>
            <div class="mb-6 w-full flex justify-center border-t-[3px] border-t-logo-900 pt-5 ">
                <livewire:btn-add :attrs="[
                    'class' =>
                        'flex row justify-evenly items-center w-44 h-10 px-2 py-2.5  bg-green-500 rounded-md gap-3.5 text-title font-semibold text-xl',
                    'type' => 'submit',
                ]" />
            </div>
        </form>
    </div>
</div>
