<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Modules\Job\Models\FailedJob;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class RetryFailedJobAction.
 */
class RetryAllFailedJobAction extends XotBasePanelAction {
    public bool $onContainer = true;

    public string $icon = '<i class="fas fa-reply"></i>Retry All';

    /**
     * ArtisanAction constructor.
     */
    public function __construct() {
    }

    public function handle() {
        $rows = $this->rows->inRandomOrder()->limit(50)->get();
        $rows_count = FailedJob::count();
        echo '<h3>'.$rows_count.' Failed Jobs</h3>';
        foreach ($rows as $job) {
            $command = $job->payload['data']['command'];
            $command = unserialize($command);

            $action = app($command->displayName());

            $params = $command->parameters()[0];

            $res = $action->execute($params);

            if (200 === $res['status'] && true === $res['res']) {
                $job->delete();
            } else {
                dddx($job);
            }
        }
        echo '<h3>DONE?? </h3>';

        dddx('qui');
    }
}
=======
=======
>>>>>>> 7563b33 (rebase)
<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Modules\Job\Models\FailedJob;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class RetryFailedJobAction.
 */
class RetryAllFailedJobAction extends XotBasePanelAction {
    public bool $onContainer = true;

    public string $icon = '<i class="fas fa-reply"></i>Retry All';

    /**
     * ArtisanAction constructor.
     */
    public function __construct() {
    }

    public function handle() {
        $rows = $this->rows->inRandomOrder()->limit(50)->get();
        $rows_count = FailedJob::count();
        echo '<h3>'.$rows_count.' Failed Jobs</h3>';
        foreach ($rows as $job) {
            $command = $job->payload['data']['command'];
            $command = unserialize($command);

            $action = app($command->displayName());

            $params = $command->parameters()[0];

            $res = $action->execute($params);

            if (200 == $res['status'] && true == $res['res']) {
                $job->delete();
            } else {
                dddx($job);
            }
        }
        echo '<h3>DONE?? </h3>';

        dddx('qui');
    }
}
<<<<<<< HEAD
>>>>>>> 26a6287 (rebase)
=======
>>>>>>> 7563b33 (rebase)
=======
<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Modules\Job\Models\FailedJob;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class RetryFailedJobAction.
 */
class RetryAllFailedJobAction extends XotBasePanelAction {
    public bool $onContainer = true;

    public string $icon = '<i class="fas fa-reply"></i>Retry All';

    /**
     * ArtisanAction constructor.
     */
    public function __construct() {
    }

    public function handle() {
        $rows = $this->rows->inRandomOrder()->limit(50)->get();
        $rows_count = FailedJob::count();
        echo '<h3>'.$rows_count.' Failed Jobs</h3>';
        foreach ($rows as $job) {
            $command = $job->payload['data']['command'];
            $command = unserialize($command);

            $action = app($command->displayName());

            $params = $command->parameters()[0];

            $res = $action->execute($params);

            if (200 == $res['status'] && true == $res['res']) {
                $job->delete();
            } else {
                dddx($job);
            }
        }
        echo '<h3>DONE?? </h3>';

        dddx('qui');
    }
}
>>>>>>> 1f3dc29 (rebase)
