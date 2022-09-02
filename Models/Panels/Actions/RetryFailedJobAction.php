<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Illuminate\Support\Str;
use Illuminate\Queue\Jobs\Job;
use Modules\Job\Models\Job as JobModel;
use Modules\Xot\Services\ArtisanService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class RetryFailedJobAction.
 */
class RetryFailedJobAction extends XotBasePanelAction {
    public bool $onItem = true;

    public string $icon = '<i class="fas fa-reply"></i>Retry';

    /**
     * ArtisanAction constructor.
     */
    public function __construct() {
    }


    public function handle() {
        $job=$this->row;
        $command=$job->payload['data']['command'];
        $command=unserialize($command);
        
        $action=app($command->displayName());
        
        $params=$command->parameters()[0];
        
        $res=$action->execute($params);


        dddx($res);
        echo '<h3>DONE?? </h3>';
        

    }
    
    
}