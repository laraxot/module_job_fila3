<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Str;
use Modules\Job\Models\Job as JobModel;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class ShowFailedJobAction.
 */
class FixQueueNameAction extends XotBasePanelAction {
    public bool $onContainer = true;

    public string $icon = '<i class="fas fa-wrench"></i>Fix Queue Name';

    /**
     * ArtisanAction constructor.
     */
    public function __construct() {
    }

    public function handleTEST() {
        // $command='O:32:"Spatie\QueueableAction\ActionJob":4:{s:14:"*actionClass";s:48:"Modules\Mediamonitor\Actions\CreatePressFromData";s:13:"*parameters";a:1:{i:0;a:2:{s:8:"file_xml";s:99:"/mediamonitor/data/xml/NazionaliRadio/Radio24/2022/07/27/NazionaliRadio-Radio24-20220727-093000.xml";s:8:"file_mp4";s:108:"/mediamonitor/data/media/NazionaliRadio/Radio24/2022/07/27/NazionaliRadio-Radio24-20220727-093000-100000.mp4";}}s:10:"*backoff";i:3;s:5:"queue";s:60:"Modules\Mediamonitor\Http\Controllers\ApiController/addPress";}';
        // dddx(unserialize($command));
        $job = JobModel::first();
        $command = $job->payload['data']['command'];
        $command = unserialize($command);
        // Spatie\QueueableAction\ActionJob
        $action = app(\Modules\Mediamonitor\Actions\CreatePressFromData::class);
        /*
        dddx([
            'comand'=>$command,
            'methods'=>get_class_methods($command),
            'parameters'=>$command->parameters(),
            'parameters'=>$command->parameters(),
            'action'=>$action,
        ]);
        */
        $params = $command->parameters()[0];

        $action->execute($params);

        echo '<h3>DONE?? </h3>';
    }

    /**
     * @return mixed
     */
    public function handle() {
        $jobs = JobModel::inRandomOrder()
             ->limit(10000)
             ->get();
        echo '<h3>'.$jobs->count().' Jobs to check</h3>';

        // $job=app(Job::class);
        // dddx([
        // '$job'=>$job,
        // 'job_methods'=>class_methods($job),
        // 'jobs'=>$jobs,
        // ]);
        echo '<table border="1">';
        foreach ($jobs as $job) {
            /*
            $queue_up=$job->queue;
            $queue_up=Str::replace('Modules\Mediamonitor\Http\Controllers','',$queue_up);
            $queue_up=Str::replace(['\\','/','controller'],[' ',' ',' '],$queue_up);
            $queue_up=Str::replace(['modulesmediamonitorhttp-s'],[''],$queue_up);
            $queue_up=Str::slug($queue_up);
            echo '<tr>
                <td>'.$job->getKey().'</td>
                <td>'.$job->queue.'</td>
                <td>'.$queue_up.'</td>
                <td><pre>'.print_r($job->payload,true).'</pre></td>
            </tr>';
            $job->update(['queue'=>$queue_up]);
            */
            $job->update(['queue' => 'queue01']);
        }
        echo '</table>';
    }

    // end handle
}
