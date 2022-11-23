<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

<<<<<<< HEAD
=======
use Modules\Theme\Services\ThemeService;
>>>>>>> 25a4dd4 (up)
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class ShowFailedJobAction.
 */
class ScheduleManagerAction extends XotBasePanelAction {
<<<<<<< HEAD
    public bool $onContainer = false; // onlyContainer

    public bool $onItem = true; // onlyContainer

    public string $icon = '<i class="fas fa-eye"></i>';

   
=======
    public bool $onContainer = true; // onlyContainer

    public bool $onItem = false; // onlyItem

    public string $icon = '<i class="fas fa-eye"></i>';

    /**
     * ArtisanAction constructor.
     */
    public function __construct() {
    }
>>>>>>> 25a4dd4 (up)

    /**
     * @return mixed
     */
    public function handle() {
<<<<<<< HEAD


        return $this->panel->view();
=======
        $view = ThemeService::getView();
        $view_params = [];

        return view($view, $view_params);
>>>>>>> 25a4dd4 (up)
    }

    // end handle
}
