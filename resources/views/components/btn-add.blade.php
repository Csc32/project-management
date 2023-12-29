<button
    {{ $attributes->merge(['class' => 'flex row justify-evenly items-center w-44 h-10 px-2 py-2.5  bg-green-500 rounded-md gap-3.5  text-bgLight font-semibold text-xl']) }}
    type="button"> <span>
        Agregar
    </span>
    <span>
        <x-heroicon-s-user-plus style="height: 21px" />
    </span>
</button>
