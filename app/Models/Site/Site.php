<?php

namespace App\Models\Site;

use App\Models\BaseModel;
use App\Models\Site\Helpers\SiteQueryHelper;
use App\Models\Site\Helpers\SiteRelationsHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends BaseModel
{
    use SiteQueryHelper,
        SiteRelationsHelper;

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
