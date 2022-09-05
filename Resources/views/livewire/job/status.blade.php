<div>
    <x-card-simple>
        <x-slot name="title">Job Status</x-slot>
        <x-slot name="txt">
            <pre>{!! $out !!}</pre>

            <select class="form-control" >
                <option value="sync">sync</option>
                <option value="database">database</option>
            </select>
        </x-slot>
    </x-card-simple>
</div>