<?php

namespace App\Repositories\Eloquent\User;

use App\Models\User\User;
use Illuminate\Support\Collection;

/**
 * Interface UserRepositoryContract
 */
interface UserRepositoryContract
{
    /**
     * @return Collection<User>
     */
    public function all(): Collection;
}
