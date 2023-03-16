<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Schedule;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;

/**
 * Class Schedule\Crud.
 */
class Crud extends Component {

    public function render(): Renderable {
        $view = app(GetViewAction::class)->execute();
        $view_params=[];
        return view($view,$view_params);

    }

    public function taskCreate(){
        //$this->emit('modal.open', 'edit-user', ['user' => 1]);
        dddx('aaa');
        $this->emit('modal.open', 'modal.schedule.create');
    }
}