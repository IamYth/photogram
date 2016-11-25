<?php
namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Album\Album;
use Illuminate\Http\Request;

use Intervention\Image\ImageManager as Image;

class AlbumController extends Controller {

    public function index()
    {
       $album = Album::orderBy('id', 'desc')->paginate(10);

        return view('profile.album.index');
    }

    public function create()
    {
       return view('profile.album.edit'); 
    }

    public function save(Request $request)
    {
        $album = new Album;

        $album->alname = $request->name;

        $album->save();

        return view('profile.album.edit', [
            'album' => $album
            ]);
    }

    public function edit($id)
    {
        $album = Album::find($id);

        $photo = $album->photo()->get();

        return view('profile.album.edit', [
            'album' => $album,
            'photo' => $album
        ]);
    }

    public function update(Request $request, $id)
    {
        $album = Album::find($id);

        $album->update($request->all());

        return redirect()->route('album.index');
    }

    public function delete($id)
    {
        $album = Album::where('id', '=', $id);
        $album->delete();

        return redirect()->back();
    }
}