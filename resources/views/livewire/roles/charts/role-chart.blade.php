<div class="bg-borderLight w-full flex flex-col">
    <div class="w-full flex row justify-center">
        <div id="rol-data" class="flex-1 p-5 mt-5">
            {!! $rolChart->container() !!}
        </div>
    </div>
</div>
<script src="{{ $rolChart->cdn() }}"></script>

{{ $rolChart->script() }}
