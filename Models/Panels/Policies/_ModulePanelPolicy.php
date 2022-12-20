<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

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

    /**
     * Undocumented function.
     */
    public function tryJob(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * Undocumented function.
     */
    public function scheduleManager(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * Undocumented function.
     */
    public function scheduleStatus(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
