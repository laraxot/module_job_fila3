<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class _ModulePanelPolicy extends XotBasePanelPolicy {
    /**
     * Undocumented function.
     */
    public function chooseAdmTheme(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * Undocumented function.
     */
    public function xlsImport(UserContract $user, PanelContract $panel): bool {
        return true;
    }
<<<<<<< HEAD
=======

    /**
     * Undocumented function
     *
     * @param UserContract $user
     * @param PanelContract $panel
     * @return boolean
     */
    public function tryJob(UserContract $user, PanelContract $panel): bool {
        return true;
    }
>>>>>>> bb58c29a38fec6af76ff96155b466b272beb677a
}
