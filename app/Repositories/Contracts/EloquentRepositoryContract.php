<?php

namespace App\Repositories\Contracts;

use App\Models\BaseModel;

/**
 * Interface EloquentRepositoryContract
 * @package App\Repositories\Contracts
 * @template TEntity as object
 *
 */
interface EloquentRepositoryContract
{
    /**
     * @param array $data
     * @return TEntity
     */
    public function create(array $data): object;

    /**
     * @param BaseModel $model
     * @param array $data
     * @return bool
     */
    public function update(BaseModel $model, array $data): bool;

    /**
     * @param BaseModel $model
     * @return bool
     */
    public function delete(BaseModel $model): bool;

    /**
     * @param int $id
     * @return TEntity|null
     */
    public function find(int $id): ?object;
}
