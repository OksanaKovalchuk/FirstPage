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
<<<<<<< HEAD
        Cache::remember('find_'.$id.'_'.implode('_',$columns), 15, function() use ($id,$columns){
            return $this->model->find($id, $columns);
=======
        Cache::remember('find', 15, function() use ($id,$columns){
            return $this->model->find($id, $columns);;
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
        });

    }
    public function update(array $attributes = [])
    {
<<<<<<< HEAD
=======
        Cache::forget('create');
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
            return $this->model->update($attributes);

    }
    public function findBy($attribute, $value, $columns = array('*')) {

       Cache::remember('findBy', 15, function() use($attribute, $value, $columns){
            return $this->model->where($attribute, '=', $value)->first($columns);
       });
    }


    public function create(array $attributes = [])
    {
<<<<<<< HEAD
            return $this->model->create($attributes);
=======
        Cache::remember('create', 15, function() use ($attributes){
            return $this->model->create($attributes);
        });
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
    }

    public function delete($id)
    {
       Cache::forget('create');
           return $this->model->destroy($id);


    }
}