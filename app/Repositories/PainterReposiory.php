<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Cache;
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
        Cache::remember('getAll', 15, function(){
            return $this->model->all();
        });
    }
    public function find($id, $columns = ['*'])
    {
        Cache::remember('find', 15, function() use ($id,$columns){
            return $this->model->find($id, $columns);;
        });

    }
    public function update(array $attributes = [])
    {
        Cache::forget('create');
            return $this->model->update($attributes);

    }
    public function findBy($attribute, $value, $columns = array('*')) {

       Cache::remember('findBy', 15, function() use($attribute, $value, $columns){
            return $this->model->where($attribute, '=', $value)->first($columns);
       });
    }


    public function create(array $attributes = [])
    {
        Cache::remember('create', 15, function() use ($attributes){
            return $this->model->create($attributes);
        });
    }

    public function delete($id)
    {
       Cache::forget('create');
           return $this->model->destroy($id);


    }
}