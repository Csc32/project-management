<div id="alert-1"
    class="flex items-center p-4 mb-4 mr- rounded-lg top-2 left-3 w-[98%] {{ $isError ? 'text-error-900 bg-error-100 dark:bg-error-900 dark:text-error-200' : 'text-green-text bg-green-200 dark:bg-green-700 dark:text-green-100' }} {{ $show }}"
    role="alert">
    <x-fas-info-circle class="h-5" />
    <div class="ms-3 text-sm font-medium">
        {{ $message }}
    </div>
    <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2  inline-flex items-center justify-center h-8 w-8 {{ $isError ? 'bg-error-900 text-error-100 focus:ring-error-900 hover:bg-error-600 ' : 'bg-green-200 text-green-text focus:ring-2 focus:ring-green-500 hover:bg-green-500 dark:bg-title-200 dark:text-green-700 dark:hover:bg-gray-700' }}"
        data-dismiss-target="#alert-1" aria-label="Close" wire:click='close'>
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
