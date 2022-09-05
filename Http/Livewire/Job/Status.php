<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Job;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Artisan;
// use Illuminate\Support\Carbon;

/**
 * Class RolePermission.
 */
class Status extends Component {
   
    public function mount(){
        dddx(Artisan::call('passport:install'));
       // dddx(\Artisan::call('route:list'));
    }

    public function render(): Renderable {
        $view = 'job::livewire.job.status';
        $view_params = [
            'view' => $view,
        ];

        return view()->make($view, $view_params);
    }

}
