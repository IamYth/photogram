<?php
namespace App\Model\User;

use App\Model\Base\User\User as BaseUser;

class User extends BaseUser
{
    static $listFields = [];

    static $rules = [];

    public function scopeNoFilter($query)
    {
        return $query;
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addUserFilter($query, $params)
    {
        /* EXAMPLE
        *    if (isset($params['name']) && !empty($params['name'])) {
        *       $query->where('name', 'LIKE', '%' . $params['name'] . '%');
        *    }
        */

        return $query;
    }

    public function scopeFilter($query, $params)
    {
        $query = User::noFilter($query);
        $query = User::addUserFilter($query, $params);

        return $query;
    }
}