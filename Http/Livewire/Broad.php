<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire;

use App\Events\PublicEvent;
use Livewire\Component;

class Broad extends Component {
    protected $listeners = ['echo:public,PublicEvent' => 'notifyEvent'];

    public function render() {
        return view('job::livewire.broad');
    }

    public function try() {
        session()->flash('message', 'try ['.now().']');
        // OrderShipped::dispatch();
        // event(new PublicEvent('test'));
        PublicEvent::dispatch();
    }

    public function notifyEvent() {
        session()->flash('message', 'notifyEvent ['.now().']');
        dd('fine');
        // $this->showNewOrderNotification = true;
    }
}
