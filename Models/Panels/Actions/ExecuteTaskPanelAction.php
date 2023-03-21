<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels\Actions;

use Modules\Cms\Actions\GetViewAction;
use Illuminate\Support\Facades\Artisan;
use Modules\Xot\Services\ArtisanService;
use Modules\Job\Actions\ExecuteTaskAction;
use Modules\Job\Models\JobBatch as JobBatchModel;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class ExecuteTaskPanelAction.
 */
class ExecuteTaskPanelAction extends XotBasePanelAction
{
    public bool $onItem = true;

    public string $icon = '<i class="fa-solid fa-play"></i>';

    /**
     * ArtisanAction constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        $task_id = $this->row->id;
        $res = app(ExecuteTaskAction::class)->execute((string)$task_id);
        $view = app(GetViewAction::class)->execute();
        $view_params = [
            'res' => $res,
        ];
        return view($view, $view_params);
    }
}
