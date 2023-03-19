<?php

namespace App\Models\Site;

use App\Models\BaseModel;
use App\Models\Site\Helpers\SiteRelationsHelper;

class Site extends BaseModel
{
    use SiteRelationsHelper;

    protected $fillable = [
        'name',
        'domain',
        'is_active',
        'is_default',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_default' => 'boolean',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


}
