<?php

namespace App\Repositories\Contracts;

use App\Models\BaseModel;

/**
 * Interface EloquentRepositoryContract
 */
interface EloquentRepositoryContract
{
    public function create(array $data): BaseModel;

    public function update(BaseModel $model, array $data): bool;

    public function delete(BaseModel $model): bool;

    public function find(int $id): ?BaseModel;
}
