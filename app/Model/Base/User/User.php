<?php
namespace App\Model\Base\User;

use Illuminate\Foundation\Auth\User as Model;

class User extends Model
{
    public $timestamps = true;

    protected $table = 'user';

    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
    ];
}