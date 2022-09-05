<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class JobBatchPanelPolicy extends XotBasePanelPolicy {
    /**
     * Undocumented function
     *
     */
    public function pruneBatches(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
