<?php

namespace App\Providers;

use App\Repositories\Contracts\EloquentRepositoryContract;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\User\UserRepository;
use App\Repositories\Eloquent\User\UserRepositoryContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

/**
 * Class RepositoryServiceProvider
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(EloquentRepositoryContract::class, BaseRepository::class);
        $this->app->bind(UserRepositoryContract::class, UserRepository::class);
    }
}
