<?php

declare(strict_types=1);

namespace Modules\Job\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestCommand extends Command
{
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
     */
    public function handle()
    {
        // $this->info('HELLO !');

        Mail::raw('test di email', function ($msg) {
            $msg->from('survey@quaerisofficina.it');
            $msg->to('vair81@gmail.com')->subject('test di prova');
        });
    }
}
