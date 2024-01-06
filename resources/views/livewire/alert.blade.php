<div id="alert-1"
    class="flex items-center p-4 mb-4 mr- text-green-text rounded-lg bg-green-200 dark:bg-gray-800 dark:text-blue-400 fixed top-2 left-3 w-[98%]  {{ $show }}"
    role="alert">
    <x-fas-info-circle class="h-5" />
    <div class="ms-3 text-sm font-medium">
        {{ $message }}
    </div>
    <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-green-200 text-green-text rounded-lg focus:ring-2 focus:ring-green-text p-1.5 hover:bg-green-500 inline-flex items-center justify-center h-8 w-8 dark:bg-title-200 dark:text-green-700 dark:hover:bg-gray-700"
        data-dismiss-target="#alert-1" aria-label="Close" wire:click='close'>
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
