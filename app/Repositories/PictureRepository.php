<?php

namespace App\Repositories;


use App\Entities\Picture;

class PictureRepository
{
    private $model;
    public function __construct(Picture $model)
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

    public function update($id,array $attributes = [])
    {
        return $this->model->find($id)->update($attributes);

    }

    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);

    }

    public function delete($id)
    {
        return $this->model->destroy($id);

    }
    public function roles(){
        $createUser = new Permission;
        $createUser->name = 'Create user';
        $createUser->slug = 'user.create';
        $createUser->description = 'Permission to create user';
        $createUser->save();

        $updateUser = new Permission;
        $updateUser->name = 'Update user';
        $updateUser->slug = 'user.update';
        $updateUser->description = 'Permission to update user';
        $updateUser->save();
    }
}