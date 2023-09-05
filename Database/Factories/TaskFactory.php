<?php

declare(strict_types=1);

namespace Modules\Job\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Job\Models\Task;

final class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence,
            'command' => 'Modules\Job\Console\Commands\ListSchedule',
            'expression' => '* * * * *',
        ];
    }
}
