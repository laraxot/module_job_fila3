<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Job\Models\FailedJob;

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
        $job = $this->row;
        if (! $job instanceof FailedJob) {
            throw new \Exception('['.__LINE__.']['.__FILE__.']');
        }
        $command = $job->payload['data']['command'];
        $command = unserialize($command);

        $action = app($command->displayName());

        $params = $command->parameters()[0];

        $res = $action->execute($params);

        dddx($res);
        echo '<h3>DONE?? </h3>';
    }
}
