<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Policies;

use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class FailedJobPanelPolicy extends XotBasePanelPolicy {
    public function artisanContainer(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function showFailedJob(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function deleteFailedJobs(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
}