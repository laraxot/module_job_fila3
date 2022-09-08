<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class FailedJobPanelPolicy extends XotBasePanelPolicy {
    public function artisanContainer(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function showFailedJob(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
<<<<<<< HEAD
=======

>>>>>>> bb58c29a38fec6af76ff96155b466b272beb677a
    public function retryFailedJob(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

<<<<<<< HEAD
    public function deleteFailedJobs(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
=======
    public function retryAllFailedJob(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function deleteFailedJobs(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
>>>>>>> bb58c29a38fec6af76ff96155b466b272beb677a
