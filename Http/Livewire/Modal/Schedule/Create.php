<?php

namespace Modules\Job\Http\Livewire\Modal\Schedule;

use Illuminate\Http\Request;
use Modules\Job\Models\Task;

use Modules\Cms\Actions\GetViewAction;
use WireElements\Pro\Components\Modal\Modal;
use Modules\Job\Actions\GetTaskCommandsAction;
use Modules\Job\Actions\GetTaskFrequenciesAction;


class Create extends Modal{
    public array $form_data=[];


    public function mount(Request $request){
        $this->form_data['type']='';
        $this->form_data['timezone']=config('app.timezone');
        $this->form_data=array_merge($this->form_data,$request->all());

    }
    public function render(){

        $view=app(GetViewAction::class)->execute();
        $commands=app(GetTaskCommandsAction::class)->execute();
        $command_opts=$commands->map(
            function($item){
                return [
                    'id'=>$item->getName(),
                    'label'=>$item->getName(),
                ];
            }
        )->pluck('label','id')
        ->all();
        $frequencies=app(GetTaskFrequenciesAction::class)->execute();
        $frequency_opts=collect($frequencies)->pluck('interval','interval')->all();

        $view_params=[
            'view'=>$view,
            'task' => new Task(),
            'commands' => $commands,
            'command_opts' => $command_opts,
            'timezones' => timezone_identifiers_list(),
            'frequencies' => $frequencies,
            'frequency_opts' => $frequency_opts,
        ];
        return view($view,$view_params);
    }

    public static function behavior(): array {
        return [
            // Close the modal if the escape key is pressed
            'close-on-escape' => false,
            // Close the modal if someone clicks outside the modal
            'close-on-backdrop-click' => false,
            // Trap the users focus inside the modal (e.g. input autofocus and going back and forth between input fields)
            'trap-focus' => true,
            // Remove all unsaved changes once someone closes the modal
            'remove-state-on-close' => false,
        ];
    }

    public static function attributes(): array
    {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => '2xl',
        ];
    }


    public function save(){
        Task::create($this->form_data);
        session()->flash('message', 'Task successfully created. at '.now());
    }
}