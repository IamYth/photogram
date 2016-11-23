+--------+--------------------------------+--------------------------------------+----------------------------+------------------------------------------------------------------------+--------------+
| Domain | Method                         | URI                                  | Name                       | Action                                                                 | Middleware   |
+--------+--------------------------------+--------------------------------------+----------------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD                       | /                                    | user                       | App\Http\Controllers\UserController@index                              | web,auth     |

|        | GET|HEAD                       | profile/album/create                 | profile.album.create       | App\Http\Controllers\User\AlbumController@create                       | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/album/delete/{id}            | profile.album.delete       | App\Http\Controllers\User\AlbumController@delete                       | web          |
|        | GET|HEAD                       | profile/album/edit/{id}              | profile.album.edit         | App\Http\Controllers\User\AlbumController@edit                         | web          |
|        | GET|HEAD                       | profile/album                        | profile.album.index        | App\Http\Controllers\User\AlbumController@index                        | web          |
|        | POST                           | profile/album/save                   | profile.album.save         | App\Http\Controllers\User\AlbumController@save                         | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/album/update/{id}            | profile.album.update       | App\Http\Controllers\User\AlbumController@update                       | web          |

|        | GET|HEAD                       | profile/album/{id}/photo/create      | profile.album.photo.create | App\Http\Controllers\User\Photo\PhotoController@create                 | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/album/{id}/photo/delete/{id} | profile.album.photo.delete | App\Http\Controllers\User\Photo\PhotoController@delete                 | web          |
|        | GET|HEAD                       | profile/album/{id}/photo/edit/{id}   | profile.album.photo.edit   | App\Http\Controllers\User\Photo\PhotoController@edit                   | web          |
|        | GET|HEAD                       | profile/album/{id}/photo             | profile.album.photo.index  | App\Http\Controllers\User\Photo\PhotoController@index                  | web          |
|        | POST                           | profile/album/{id}/photo/save        | profile.album.photo.save   | App\Http\Controllers\User\Photo\PhotoController@save                   | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/album/{id}/photo/update/{id} | profile.album.photo.update | App\Http\Controllers\User\Photo\PhotoController@update                 | web          |

|        | GET|HEAD                       | profile/create                       | profile.create             | App\Http\Controllers\User\UserController@create                        | web,auth     |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/delete/{id}                  | profile.delete             | App\Http\Controllers\User\UserController@delete                        | web,auth     |
|        | GET|HEAD                       | profile/edit/{id}                    | profile.edit               | App\Http\Controllers\User\UserController@edit                          | web,auth     |
|        | GET|HEAD                       | {id}                                 | index                      | App\Http\Controllers\User\UserController@index                         | web,auth     |
|        | POST                           | profile/save                         | profile.save               | App\Http\Controllers\User\UserController@save                          | web,auth     |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | profile/update/{id}                  | profile.update             | App\Http\Controllers\User\UserController@update                        | web,auth     |
+--------+--------------------------------+--------------------------------------+----------------------------+------------------------------------------------------------------------+--------------+
