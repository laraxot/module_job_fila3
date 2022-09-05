<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Job;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Contracts\Support\Renderable;

// use Illuminate\Support\Carbon;

/**
 * Class RolePermission.
 */
class Status extends Component {

    public string $out='';
   
    public function mount(){
        Artisan::call('queue:monitor',['queues'=>'default,queue01,emails']);
        $this->out.=Artisan::output();
        Artisan::call('worker:check');
        $this->out.=Artisan::output();
    }

    public function render(): Renderable {
        $view = 'job::livewire.job.status';
        $view_params = [
            'view' => $view,
        ];

        return view()->make($view, $view_params);
    }

}
