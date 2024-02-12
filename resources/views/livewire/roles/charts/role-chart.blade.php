<div class="bg-borderLight w-1/2 rounded-lg mt-5">
    <div class="w-full flex row justify-center flex-1">
        <div id="rol-data" class="flex-1 p-2 mt-2">
            {!! $rolChart->container() !!}
        </div>
    </div>
</div>
<script src="{{ $rolChart->cdn() }}"></script>

{{ $rolChart->script() }}
