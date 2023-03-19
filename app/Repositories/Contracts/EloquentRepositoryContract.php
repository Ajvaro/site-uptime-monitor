<?php

namespace App\Repositories\Contracts;

use App\Models\BaseModel;

/**
 * Interface EloquentRepositoryContract
 * @package App\Repositories\Contracts
 */
interface EloquentRepositoryContract
{
    /**
     * @param array $data
     * @return BaseModel
     */
    public function create(array $data): BaseModel;

    /**
     * @param BaseModel $model
     * @param array $data
     * @return boolean
     */
    public function update(BaseModel $model, array $data): bool;

    /**
     * @param BaseModel $model
     * @return bool
     */
    public function delete(BaseModel $model): bool;

    /**
     * @param int $id
     * @return BaseModel|null
     */
    public function find(int $id): ?BaseModel;

}
