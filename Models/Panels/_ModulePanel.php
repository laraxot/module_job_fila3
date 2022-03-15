<?php

declare(strict_types=1);

namespace Modules\Job\Models\Panels;

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class _ModulePanel.
 */
class _ModulePanel extends XotBasePanel {
    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [
            //new Actions\XlsImportAction(),
        ];
    }
}