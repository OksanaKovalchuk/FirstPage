<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['reference', 'name', 'napping_story'];

    public function painter()
    {
        return $this->belongsToMany(Painter::class, 'pictures_painters', 'picture_id', 'painter_id')
                ->orderBy('painter_id')
                ;
    }
}
