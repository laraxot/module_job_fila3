<?php
namespace Modules\Job\Models\Panels\Policies;

use Modules\LU\Models\User as User;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Contracts\PanelContract;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Models\Panels\Policies\JobPanelPolicy as Panel;

/**
 * Undocumented class
 */
class JobPanelPolicy extends XotBasePanelPolicy {

    /**
     * Undocumented function
     *
     * @param UserContract|null $user
     * @param PanelContract $panel
     * @return boolean
     */
    public function deleteAllJobs(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
}