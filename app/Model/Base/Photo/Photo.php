<?php
namespace App\Model\Base\Photo;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $timestamps = true;

    protected $table = 'photo';

    protected $fillable = [
        'user_id',
        'album_id',
        'phname',
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id', 'id');
    }

    public function album()
    {
        return $this->belongsTo('App\Model\Album\Album', 'album_id', 'id');
    }
}