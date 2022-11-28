<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Mediamonitor\Events\ClipStatusUpdated;

class TryBroadcast extends Component {
    protected $listeners = ['echo:public,ClipStatusUpdated' => 'notifyNewClip'];

    public function render(): Renderable {
        $view = 'job::livewire.try_broadcast';
        $view_params = [];

        return view($view, $view_params);
    }

    public function try() {
        event(new ClipStatusUpdated(6));
        session()->flash('message', 'send event!');
    }

    public function notifyNewClip() {
        dddx('uu');
    }
}
