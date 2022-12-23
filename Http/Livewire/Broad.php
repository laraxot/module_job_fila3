<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire;

use Livewire\Component;
use Modules\Job\Events\PublicEvent;
use Illuminate\Contracts\Support\Renderable;

class Broad extends Component {
    /**
     * @var array<string, string> 
     */
    protected $listeners = ['echo:public,PublicEvent' => 'notifyEvent'];

    public function render():Renderable {
        return view('job::livewire.broad');
    }

    public function try():void {
        session()->flash('message', 'try ['.now().']');
        // OrderShipped::dispatch();
        // event(new PublicEvent('test'));
        PublicEvent::dispatch();
    }

    public function notifyEvent():void {
        session()->flash('message', 'notifyEvent ['.now().']');
        dd('fine');
        // $this->showNewOrderNotification = true;
    }
}
