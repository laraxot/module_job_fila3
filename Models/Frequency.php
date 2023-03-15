<?php

declare(strict_types=1);

namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Job\Models\Traits\HasParameters;

class Frequency extends BaseModel {
    use HasParameters;

    // protected $table = 'task_frequencies';

    protected $fillable = [
        'id',
        'label',
        'interval',
    ];

    public function task(): BelongsTo {
        return $this->belongsTo(Task::class);
    }
}
