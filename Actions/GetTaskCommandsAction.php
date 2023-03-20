<?php

declare(strict_types=1);

namespace Modules\Job\Actions;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;
use Modules\Job\Models\Task;
use Symfony\Component\Console\Command\Command;

use Spatie\QueueableAction\QueueableAction;

class GetTaskCommandsAction {
    use QueueableAction;

    public function execute(): Collection{
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