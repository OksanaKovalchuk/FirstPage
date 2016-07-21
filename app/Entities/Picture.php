<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['reference', 'name', 'napping_story'];
}
