<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Schedule;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;
use Modules\Job\Models\Task;
use Symfony\Component\Console\Command\Command;

/**
 * Class Schedule\Crud.
 */
class Crud extends Component {
    public bool $create = false;

    public function render(): Renderable {
        $view = app(GetViewAction::class)->execute();
        $view_params = [
            'task' => new Task(),
            'commands' => $this->getCommands(),
            'timezones' => timezone_identifiers_list(),
            'frequencies' => $this->getFrequencies(),
        ];

        return view($view, $view_params);
    }

    public function taskCreate() {
        // $this->emit('modal.open', 'edit-user', ['user' => 1]);
        // dddx('aaa');
        // $this->emit('modal.open', 'modal.schedule.create');
        $this->create = true;
    }

    /**
     * Return available frequencies.
     */
    public static function getFrequencies(): array {
        return config('totem.frequencies');
    }

    /**
     * Return collection of Artisan commands filtered if needed.
     */
    public function getCommands(): Collection {
        $command_filter = config('totem.artisan.command_filter');
        $whitelist = config('totem.artisan.whitelist', true);
        $all_commands = collect(Artisan::all());

        if (! empty($command_filter)) {
            $all_commands = $all_commands->filter(function (Command $command) use ($command_filter, $whitelist) {
                foreach ($command_filter as $filter) {
                    if (fnmatch($filter, $command->getName())) {
                        return $whitelist;
                    }
                }

                return ! $whitelist;
            });
        }

        return $all_commands->sortBy(function (Command $command) {
            $name = $command->getName();
            if (false === mb_strpos($name, ':')) {
                $name = ':'.$name;
            }

            return $name;
        });
    }
}
