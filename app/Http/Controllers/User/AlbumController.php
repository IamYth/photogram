<?php
namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Album\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller {

    public function index()
    {
        $album = Album::orderBy('id', 'desc')->paginate(10);

        return view('album.album.index', [
            'album' => $album
        ]);
    }

    public function create()
    {
        return view('album.album.create');
    }

    public function save(Request $request)
    {
        $album = new Album($request->all());

        $album->save();

        return redirect()->route('album.index');
    }

    public function edit($id)
    {
        $album = Album::find($id);

        return view('album.album.edit', [
            'album' => $album
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