<?php

namespace App\Repositories\Eloquent;

use App\Models\BaseModel;
use App\Repositories\Contracts\EloquentRepositoryContract;

/**
 * Class BaseRepository
 * @template TEntity as object
 */
abstract class BaseRepository implements EloquentRepositoryContract
{
    /**
     * Model namespace
     */
    protected string $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        if (empty($this->model)) {
            $this->setModel();
        }
    }

    abstract public function setModel(): void;

    /**
     * @return TEntity
     */
    public function create(array $data): object
    {
        return $this->model::create($data);
    }

    /**
     * @param BaseModel $model
     * @param array $data
     * @return bool
     */
    public function update(BaseModel $model, array $data): bool
    {
        return $this->model::update($data);
    }

    /**
     * @param BaseModel $model
     * @return bool
     */
    public function delete(BaseModel $model): bool
    {
        return $this->model::delete();
    }

    /**
     * @param int $id
     * @return TEntity|null
     */
    public function find(int $id): ?object
    {
        return $this->model::find($id);
    }
}
