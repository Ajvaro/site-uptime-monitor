<?php

namespace App\Repositories\Eloquent;

use App\Models\BaseModel;
use App\Repositories\Contracts\EloquentRepositoryContract;

/**
 * Class BaseRepository
 * @package App\Repositories\Eloquent
 */
abstract class BaseRepository implements EloquentRepositoryContract
{
    /**
     * Model namespace
     * @var string
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

    abstract public function setModel();

    /**
     * @param array $data
     * @return BaseModel
     */
    public function create(array $data): BaseModel
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
     * @return BaseModel|null
     */
    public function find(int $id): ?BaseModel
    {
        return $this->model::find($id);
    }
}
