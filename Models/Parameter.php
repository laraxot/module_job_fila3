<?php

namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Parameter extends BaseModel
{
    protected $table = 'frequency_parameters';

    protected $fillable = [
        'id',
        'name',
        'value',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Frequency::class);
    }
}