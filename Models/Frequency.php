<?php

namespace Modules\Job\Models;

use Modules\Job\Models\Task;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Job\Models\Traits\HasParameters;

class Frequency extends BaseModel
{
    use HasParameters;

    protected $table = 'task_frequencies';

    protected $fillable = [
        'id',
        'label',
        'interval',
    ];

    /**
     * @return BelongsTo
     */
    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
}