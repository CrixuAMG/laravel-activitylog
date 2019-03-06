<?php

namespace CrixuAMG\ActivityLog\Traits;

use CrixuAMG\ActivityLog\ActivityLogServiceProvider;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * Trait HasParentedActivities
 *
 * @package CrixuAMG\ActivityLog\Traits
 */
trait HasParentedActivities
{
    /**
     * @return MorphMany
     */
    public function activities(): MorphMany
    {
        return $this->morphMany(
            ActivityLogServiceProvider::determineActivityModel(),
            'parent'
        );
    }
}
