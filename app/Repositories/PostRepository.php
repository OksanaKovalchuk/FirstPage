<?php

/**
 * Created by PhpStorm.
 * User: ksiuha
 * Date: 19.07.16
 * Time: 14:05
 */
namespace App\Repositories;

use App\Entities\Post;

class PostRepository
{
    private $model;

    public function __construct(Post $model){
        $this->model = $model;
    }
    public function getAllPosts(){
        $posts = $this->model->all();
        foreach($posts as $post){
            echo $post->id . "<br>";
        }
        return $post;
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