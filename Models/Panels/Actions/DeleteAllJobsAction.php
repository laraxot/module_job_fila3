<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;
use Modules\Xot\Services\ArtisanService;

/**
 * Class ShowFailedJobAction.
 */
class DeleteAllJobsAction extends XotBasePanelAction {
    public bool $onContainer = true;

    public string $icon = '<i class="fas fa-dumpster-fire"></i>';

    /**
     * ArtisanAction constructor.
     */
    public function __construct() {
    }

    /**
     * @return mixed
     */
    public function handle() {
        $cmd = 'queue:clear';
        $out = ArtisanService::act($cmd);
        $res = $this->rows->delete();

        return $out.'<h3>+Done ['.$res.'] deleted '.class_basename(__CLASS__).'</h3>';
    }

    // end handle
}
