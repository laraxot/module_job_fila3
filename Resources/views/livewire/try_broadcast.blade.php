<div>
    <x-flash-message></x-flash-message>
    <button type="button" class="btn btn-primary" wire:click="try()">try</button>
</div>

@push('scripts')
    <script>
        /*
        window.Echo.channel('public')
            .listen('ClipStatusUpdated', (e) => {
                //console.log(e.order.name);
                alert('echooooo');
            });
        */
    </script>
@endpush
