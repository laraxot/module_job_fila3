<?php

namespace Modules\Job\Http\Livewire\Modal\Schedule;

use Modules\Job\Models\Task;
use Modules\Cms\Actions\GetViewAction;
use WireElements\Pro\Components\Modal\Modal;
use Modules\Job\Actions\GetTaskCommandsAction;
use Modules\Job\Actions\GetTaskFrequenciesAction;


class Create extends Modal{
    public array $form_data;
    public function render(){
        $view=app(GetViewAction::class)->execute();
        $view_params=[
            'view'=>$view,
            'task' => new Task(),
            'commands' => app(GetTaskCommandsAction::class)->execute(),
            'timezones' => timezone_identifiers_list(),
            'frequencies' => app(GetTaskFrequenciesAction::class)->execute(),
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


    public function store(){
        dddx('store');
    }
}
