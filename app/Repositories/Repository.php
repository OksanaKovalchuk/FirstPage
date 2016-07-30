<?php
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
abstract class Repository
{
    /**
     * Model
     *
     * @var Model
     */
    protected $model;
    /**
     * Repository constructor.
     */
    public function __construct()
    {
        $this->model = app()->make($this->model());
    }
    /**
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);
    }
    /**
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all($columns = ['*'])
    {
        return $this->model->all($columns);
    }
    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = ['*'])
    {
        return $this->model->paginate($perPage, $columns);
    }
    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }
    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = ['*'])
    {
        return $this->model->where($attribute, $value)->first($columns);
    }
    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = 'id')
    {
        return $this->model->where($attribute, $id)->update($data);
    }
    /**
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    abstract protected function model();
}