<?php

declare(strict_types=1);

namespace Modules\Job\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class JobServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'job';

    public function bootCallback(): void {
        
        $this->commands(
            [
                \Modules\Job\Console\Commands\WorkerCheck::class,
            ]
        );

    }
}