<?php
namespace App\Model\Album;

use App\Model\Base\Album\Album as BaseAlbum;

class Album extends BaseAlbum
{
    static $listFields = [];

    static $rules = [];

    public function scopeNoFilter($query)
    {
        return $query;
    }

    public function addAlbumFilter($query, $params)
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
        $query = Album::noFilter($query);
        $query = Album::addAlbumFilter($query, $params);

        return $query;
    }
}