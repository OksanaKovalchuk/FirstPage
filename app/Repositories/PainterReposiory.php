<?php

namespace App\Repositories;

use App\Entities\Painter;

class PainterReposiory
{
    private $model;
    public function __construct(Painter $model)
    {
        $this->model=$model;
    }

    public function getAll()
    {
        return $this->model->all();

    }
    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }
    public function update(array $attributes = [])
    {
        return $this->model->update($attributes);

    }

    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);

    }

    public function delete($id)
    {
        return $this->model->destroy($id);

    }
}