<?php

declare(strict_types=1);

namespace Modules\Job\Actions;

use Livewire\Component;
use Modules\Job\Models\Task;
use Modules\Job\Events\Executed;
use Illuminate\Support\Collection;
use Modules\Cms\Actions\GetViewAction;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Spatie\QueueableAction\QueueableAction;

use Illuminate\Contracts\Support\Renderable;
use Symfony\Component\Console\Command\Command;

class ExecuteTaskAction
{
    use QueueableAction;

    public function execute(string $task_id): string
    {
        $task = Task::find($task_id);
        $start = microtime(true);
        try {
            Artisan::call($task->command, $task->compileParameters());
            $output = Artisan::output();
        } catch (\Exception $e) {
            $output = $e->getMessage();
        }
        Executed::dispatch($task, $start, $output);

        return $output;
    }
}
