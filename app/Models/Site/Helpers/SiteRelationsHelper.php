<?php

namespace App\Models\Site\Helpers;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Trait SiteRelationsHelper
 */
trait SiteRelationsHelper
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
