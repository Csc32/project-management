<div class="bg-borderLight w-full h-auto flex flex-col">
    <div class="w-full h-60">
        <div id="teacher-data">
            {!! $rolChart->container() !!}
        </div>
    </div>
</div>
<script src="{{ $rolChart->cdn() }}"></script>

{{ $rolChart->script() }}
