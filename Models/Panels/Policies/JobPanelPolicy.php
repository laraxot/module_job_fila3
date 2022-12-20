<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Undocumented class.
 */
class JobPanelPolicy extends XotBasePanelPolicy {
    /**
     * Undocumented function.
     */
    public function deleteAllJobs(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * Undocumented function.
     */
    public function fixQueueName(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
