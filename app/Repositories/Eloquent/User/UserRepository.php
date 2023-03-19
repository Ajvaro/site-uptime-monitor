<?php

namespace App\Repositories\Eloquent\User;

use App\Models\User\User;
use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Support\Collection;

/**
 * Class UserRepository
 */
class UserRepository extends BaseRepository implements UserRepositoryContract
{
    public function setModel(): void
    {
        $this->model = User::class;
    }

    public function all(): Collection
    {
        return $this->model::all();
    }
}
