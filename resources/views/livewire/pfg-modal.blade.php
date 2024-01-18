<div class="fixed w-full h-auto inset-0 z-50 overflow-hidden flex justify-center items-center p-8 {{ $attribute }} transition-all ease delay-700"
    style="background: rgba(0,0,0,.7);">
    <div class="flex-col p-8 bg-borderLight shadow w-1/2 rounded-2xl relative">
        <h3 class="mb-6 font-semibold text-lg">Complete el siguiente formulario para agregar un PFG</h3>
        <button type="button" wire:click="close" id='btnClose'
            class="absolute text-bgLight w-10 h-10 rounded-lg bg-error-900 flex items-center justify-center font-semibold right-1 top-1">
            <x-heroicon-o-x-mark style="height: 40px" />
        </button>
        <form {{ $btnTitle == 'Agregar' ? 'wire:submit=save' : 'wire:submit=update' }}>
            <div class="flex flex-1 w-full">
                <div class="w-full m-4">
                    <label for="name" class="block mb-2 text-md font-medium text-title-900 dark:text-white">Nombre
                        <span class="text-delete">*</span></label>
                    <input type="text" id="name"
                        class="bg-borderLight border-[3px] border-logo-900 rounded-md text-sm  block w-full pl-5 p-2.5 placeholder:text-desactivate text-title-900 focus:border-title-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Informatica" required wire:model='name' name="name">
                    @if (isset($errorsPfg[0]))
                        <p class="text-sm font-medium text-error-900 mt-1">{{ $errorsPfg[0] }}</p>
                    @endif
                </div>
            </div>
            <div class="mb-6 w-full flex justify-center border-t-[3px] border-t-logo-900 pt-5 ">
                @if ($btnTitle == 'Agregar')
                    <x-btn-add-plus type='submit'>
                        {{ $btnTitle }}
                    </x-btn-add-plus>
                @else
                    <x-btn-edit-pencil type='submit'>
                        {{ $btnTitle }}
                    </x-btn-edit-pencil>
                @endif
            </div>
        </form>
    </div>
</div>
