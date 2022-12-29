<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Job\Models\FailedJob;
use Modules\Xot\Contracts\ModelContract;

/**
 * Class RetryFailedJobAction.
 */
class RetryAllFailedJobAction extends XotBasePanelAction
{
    public bool $onContainer = true;
    public string $icon = '<i class="fas fa-reply"></i>Retry All';

    /**
     * ArtisanAction constructor.
     */
    public function __construct()
    {
    }

    public function handle()
    {
        $rows = $this->rows->limit(50)->get();
        $rows_count = FailedJob::count();
        echo '<h3>' . $rows_count . ' Failed Jobs</h3>';
        foreach ($rows as $job) {
            if (!$job instanceof FailedJob) {
                throw new \Exception('[' . __LINE__ . '][' . __FILE__ . ']');
            }
            $command = $job->payload['data']['command'];
            $command = unserialize($command);

            try {

                $action = app($command->displayName());

                if (!method_exists($command, 'displayName')) {
                    throw new \Exception('[' . __LINE__ . '][' . __FILE__ . ']');
                }
                $params = $command->parameters()[0];

                $res = $action->execute($params);

                if (200 === $res['status'] && true === $res['res']) {
                    $job->delete();
                } else {
                    dddx(['Error 1' => $job]);
                }
            } catch (\Exception $e) {
                dddx(['Error 2' => $job]);
            }
        }
        echo '<h3>DONE?? </h3>';

        dddx('qui');
    }
}
