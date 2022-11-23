<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Schedule;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;

/**
 * Class Schedule\Status
 */
class Status extends Component {
    public array $form_data = [];
    public string $out = '';
    public string $old_value = '';

    public function mount() {

        
    }

    public function render(): Renderable {
        $view = 'job::livewire.schedule.status';

        $acts = [
             (object) [
                'name' => 'clear-cache',
                'label' => 'Delete the cached mutex files created by scheduler',
            ],
             (object) [
                'name' => 'list',
                'label' => 'List the scheduled commands',
            ],
             (object) [
                'name' => 'run',
                'label' => 'Run the scheduled commands',
            ],
             (object) [
                'name' => 'test',
                'label' => 'Run a scheduled command',
            ],
             (object) [
                'name' => 'work',
                'label' => 'Start the schedule worker',
            ],
        ];

        $view_params = [
            'view' => $view,
            'acts' => $acts,
        ];

        return view()->make($view, $view_params);
    }


    public function artisan(string $cmd) {
        $this->out .= '<hr/>';
        Artisan::call('schedule:'.$cmd);
        $this->out .= Artisan::output();
        $this->out .= '<hr/>';
    }

    
}
