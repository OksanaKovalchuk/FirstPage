<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD
//use DCN\RBAC\Traits\HasRoleAndPermission;
//use DCN\RBAC\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
=======
use DCN\RBAC\Traits\HasRoleAndPermission;
use DCN\RBAC\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3

/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
<<<<<<< HEAD
=======

    
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
=======
    
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
