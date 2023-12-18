<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\User\Models\Policies\UserBasePolicy;
use Modules\User\Models\Team;
use Modules\User\Models\User;

class FailedJobPolicy extends UserBasePolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @return false
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Team $team): bool
    {
        return $user->belongsToTeam($team);
    }

    /**
     * Determine whether the user can create models.
     *
     * @return true
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    // public function update(User $user, Team $team): bool
    public function update(User $user): bool
    {
        // return $user->ownsTeam($team);
        return false;
    }

    /**
     * Determine whether the user can add team members.
     */
    public function addTeamMember(User $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * Determine whether the user can update team member permissions.
     */
    public function updateTeamMember(User $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * Determine whether the user can remove team members.
     */
    public function removeTeamMember(User $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }
}
