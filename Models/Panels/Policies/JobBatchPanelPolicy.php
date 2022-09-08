<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class JobBatchPanelPolicy extends XotBasePanelPolicy {
<<<<<<< HEAD
=======
    /**
     * Undocumented function
     *
     */
    public function pruneBatches(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
>>>>>>> bb58c29a38fec6af76ff96155b466b272beb677a
}
