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

class GetTaskFrequenciesAction {
    use QueueableAction;

    public function execute(): array{
        return config('totem.frequencies');
    }
}