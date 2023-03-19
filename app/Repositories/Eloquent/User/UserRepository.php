<?php

namespace App\Repositories\Eloquent\User;

use App\Models\User\User;
use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Support\Collection;

/**
 * Class UserRepository
 * @package App\Repositories\Eloquent\User
 */
class UserRepository extends BaseRepository implements UserRepositoryContract
{
    /**
     * @return void
     */
    public function setModel(): void
    {
        $this->model = User::class;
    }
    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model::all();
    }
}
