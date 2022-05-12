<?php
/**
 * ---.
 *
 * @see https://philo.dev/laravel-batches-and-real-time-progress-with-livewire/
 */

declare(strict_types=1);

namespace Modules\Job\Models;

/**
 * Undocumented class.
 *
 * @property int                                                                  $id
 * @property string                                                               $name
 * @property int                                                                  $total_jobs
 * @property int                                                                  $pending_jobs
 * @property int                                                                  $failed_jobs
 * @property string                                                               $failed_job_ids
 * @property string|null                                                          $options
 * @property int|null                                                             $cancelled_at
 * @property \Illuminate\Support\Carbon                                           $created_at
 * @property int|null                                                             $finished_at
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[] $images
 * @property int|null                                                             $images_count
 *
 * @method static \Modules\Xot\Database\Factories\JobBatchFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch whereCancelledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch whereFailedJobIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch whereFailedJobs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch whereFinishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch wherePendingJobs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch whereTotalJobs($value)
 * @mixin \Eloquent
 * @mixin IdeHelperJobBatch
 */
class JobBatch extends BaseModel {

     /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'total_jobs',
        'pending_jobs',
        'failed_jobs',
        'failed_job_ids',
        'options',
        'cancelled_at',
        'created_at',
        'finished_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     * @link https://philo.dev/laravel-batches-and-real-time-progress-with-livewire/
     */
    protected $casts = [
        'options'      => 'collection',
        'failed_jobs'  => 'integer',
        'created_at'   => 'datetime',
        'cancelled_at' => 'datetime',
        'finished_at'  => 'datetime',
    ];

    /**
     * Get the total number of jobs that have been processed by the batch thus far.
     *
     * @return int
     */
    public function processedJobs()
    {
        return $this->total_jobs - $this->pending_jobs;
    }

    /**
     * Get the percentage of jobs that have been processed (between 0-100).
     *
     * @return int
     */
    public function progress(): int
    {
        return $this->total_jobs > 0 ? round(($this->processedJobs() / $this->total_jobs) * 100) : 0;
    }

    /**
     * Determine if the batch has pending jobs
     *
     * @return bool
     */
    public function hasPendingJobs(): bool
    {
        return $this->pending_jobs > 0;
    }

    /**
     * Determine if the batch has finished executing.
     *
     * @return bool
     */
    public function finished(): bool
    {
        return !is_null($this->finished_at);
    }

    /**
     * Determine if the batch has job failures.
     *
     * @return bool
     */
    public function hasFailures(): bool
    {
        return $this->failed_jobs > 0;
    }

    /**
     * Determine if all jobs failed.
     *
     * @return bool
     */
    public function failed(): bool
    {
        return $this->failed_jobs === $this->total_jobs;
    }

    /**
     * Determine if the batch has been canceled.
     *
     * @return bool
     */
    public function cancelled(): bool
    {
        return !is_null($this->cancelled_at);
    }
}