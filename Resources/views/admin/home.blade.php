@extends('adm_theme::layouts.app')
@section('content')
    <br/><br/>
    <livewire:job.status ></livewire:job.status>
    
    <x-card-simple>
        <x-slot name="txt">
            {{--
         {{ Illuminate\Support\Facades\Artisan::call('queue:listen') }} 
         --}}
         {{--
         {{ Illuminate\Support\Facades\Artisan::call('worker:check') }} 
         --}}
        {!! Illuminate\Support\Facades\Artisan::call('queue:monitor default') !!} 
         
        </x-slot>
    </x-card-simple>
@endsection