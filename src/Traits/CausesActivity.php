<?php

namespace CrixuAMG\ActivityLog\Traits;

use CrixuAMG\ActivityLog\ActivityLogServiceProvider;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait CausesActivity
{
    public function actions(): MorphMany
    {
        return $this->morphMany(
            ActivityLogServiceProvider::determineActivityModel(),
            'causer'
        );
    }
}
