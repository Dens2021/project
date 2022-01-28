<?php


namespace App\Models\Entities;


use Illuminate\Database\Eloquent\Model;


/**
 * Class UserEntity
 * @package App\Models\Entities
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property int $is_admin
 */

class UserEntity extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
