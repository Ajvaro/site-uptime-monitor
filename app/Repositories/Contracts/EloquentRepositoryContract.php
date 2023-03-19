<?php

namespace App\Repositories\Contracts;

use App\Models\BaseModel;

/**
 * Interface EloquentRepositoryContract
 *
 * @template TEntity as object
 */
interface EloquentRepositoryContract
{
    /**
     * @return TEntity
     */
    public function create(array $data): object;

    public function update(BaseModel $model, array $data): bool;

    public function delete(BaseModel $model): bool;

    /**
     * @return TEntity|null
     */
    public function find(int $id): ?object;
}
