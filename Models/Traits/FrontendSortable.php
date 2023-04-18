<?php

declare(strict_types=1);

namespace Modules\Job\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FrontendSortable
{
    public function scopeSortableBy(Builder $builder, array $sortableColumns, array $defaultSort = ['name' => 'asc']): Builder
    {
        $request = request();
        $sorted = $request->has('sort_by') && in_array($request->input('sort_by'), $sortableColumns);

        return $builder->when($sorted, function (Builder $query) use ($request) {
            $query->orderBy(
                strval($request->input('sort_by')),
                ('desc' == strval($request->input('sort_direction', 'asc'))) ? 'desc' : 'asc'
            );
        }, function (Builder $query) use ($defaultSort) {
            foreach ($defaultSort as $key => $direction) {
                $query->orderBy($key, $direction);
            }
        });
    }
}
