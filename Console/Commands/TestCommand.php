<?php

namespace Modules\Job\Console\Commands;

use Carbon\Carbon;
use Cron\CronExpression;
use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Str;

class TestCommand extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'a dummy test';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){
        
        $this->info('HELLO !');
        
    }

    
}
