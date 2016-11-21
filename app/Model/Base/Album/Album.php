<?php
namespace App\Model\Base\Album;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public $timestamps = true;

    protected $table = 'album';

    protected $fillable = [
        'alname',
    ];
}