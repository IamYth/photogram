<?php
namespace App\Model\Photo;

use App\Model\Base\Photo\Photo as BasePhoto;

class Photo extends BasePhoto
{
    static $listFields = [];

    static $rules = [];

    public function scopeNoFilter($query)
    {
        return $query;
    }

    public function addPhotoFilter($query, $params)
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
        $query = Photo::noFilter($query);
        $query = Photo::addPhotoFilter($query, $params);

        return $query;
    }

    public function src($dir, $absolute = false)
    {
        $src = [];
        $src[] = $this->album_id;
        $src[] = $dir;
        $src[] = $this->name;
        return (($absolute) ? public_path(): '') . '/photo/album/' . implode('/', $src);
    }
}