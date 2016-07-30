<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Painter extends Model
{
    protected $fillable = ['name','description'];
    public function picture()
    {
        return $this->belongsToMany(Picture::class, 'pictures_painters',  'painter_id', 'picture_id');
    }
}
