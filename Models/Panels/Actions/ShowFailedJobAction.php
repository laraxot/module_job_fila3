<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;


/**
 * Class ShowFailedJobAction.
 */
class ShowFailedJobAction extends XotBasePanelAction {
    public bool $onContainer = false; //onlyContainer

    public bool $onItem = true; //onlyContainer

    public string $icon = '<i class="far fa-file-excel fa-1x"></i>';

    protected string $cmd;

    protected array $cmd_params;

    /**
     * ArtisanAction constructor.
     */
    public function __construct() {
    }

    /**
     * @return mixed
     */
    public function handle() {
        dddx($this->panel->row);
    }

    //end handle
}