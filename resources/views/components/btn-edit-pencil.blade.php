<button
    {{ $attributes->merge(['class' => 'flex row justify-evenly items-center w-44 h-10 px-2 py-2.5  bg-green-500 rounded-md gap-1  text-title-900 font-semibold text-xl', 'type' => 'button']) }}>
    <span>
        {{ $slot }}
    </span>
    <span>
        <x-heroicon-o-pencil style="height: 21px" />
    </span>
</button>
