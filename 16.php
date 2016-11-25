+--------+--------------------------------+--------------------------------------------------+-------------------------------------+---------------------------------------------------------------+--------------+
| Domain | Method                         | URI                                              | Name                                | Action                                                        | Middleware   |
+--------+--------------------------------+--------------------------------------------------+-------------------------------------+---------------------------------------------------------------+--------------+
|        | GET|HEAD                       | /                                                | user                                | App\Http\Controllers\UserController@index                     | web          |

|        | GET|HEAD                       | profile/album/create                             | profile.album.create                | App\Http\Controllers\User\AlbumController@create              | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/album/delete/{album_id}                  | profile.album.delete                | App\Http\Controllers\User\AlbumController@delete              | web          |
|        | GET|HEAD                       | profile/album/edit/{album_id}                    | profile.album.edit                  | App\Http\Controllers\User\AlbumController@edit                | web          |
|        | GET|HEAD                       | profile/album                                    | profile.album.index                 | App\Http\Controllers\User\AlbumController@index               | web          |
|        | POST                           | profile/album/save                               | profile.album.save                  | App\Http\Controllers\User\AlbumController@save                | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/album/update/{album_id}                  | profile.album.update                | App\Http\Controllers\User\AlbumController@update              | web          |

|        | GET|HEAD                       | profile/album/{album_id}/photo/create            | profile.album.album_id.photo.create | App\Http\Controllers\User\Photo\PhotoController@create        | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/album/{album_id}/photo/delete/{id_photo} | profile.album.album_id.photo.delete | App\Http\Controllers\User\Photo\PhotoController@delete        | web          |
|        | GET|HEAD                       | profile/album/{album_id}/photo/edit/{id_photo}   | profile.album.album_id.photo.edit   | App\Http\Controllers\User\Photo\PhotoController@edit          | web          |
|        | GET|HEAD                       | profile/album/{album_id}/photo                   | profile.album.album_id.photo.index  | App\Http\Controllers\User\Photo\PhotoController@index         | web          |
|        | POST                           | profile/album/{album_id}/photo/save              | profile.album.album_id.photo.save   | App\Http\Controllers\User\Photo\PhotoController@save          | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/album/{album_id}/photo/update/{id_photo} | profile.album.album_id.photo.update | App\Http\Controllers\User\Photo\PhotoController@update        | web          |

|        | GET|HEAD                       | profile/edit/{id}                                | profile.edit                        | App\Http\Controllers\User\UserController@edit                 | web          |
|        | GET|HEAD                       | {id}                                             | index                               | App\Http\Controllers\User\UserController@index                | web          |
+--------+--------------------------------+--------------------------------------------------+-------------------------------------+---------------------------------------------------------------+--------------+
