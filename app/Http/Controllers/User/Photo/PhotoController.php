<?php
namespace App\Http\Controllers\User\Photo;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Photo\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller {

    public function index()
    {
        $photo = Photo::orderBy('id', 'desc')->paginate(10);

        return view('photo.photo.index', [
            'photo' => $photo
        ]);
    }

    public function create()
    {
        return view('photo.photo.create');
    }

    public function save(Request $request)
    {
        $photo = new Photo($request->all());

        $photo->save();

        return redirect()->route('photo.index');
    }

    public function edit($id)
    {
        $photo = Photo::find($id);

        return view('photo.photo.edit', [
            'photo' => $photo
        ]);
    }

    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);

        $photo->update($request->all());

        return redirect()->route('photo.index');
    }

    public function delete($id)
    {
        $photo = Photo::where('id', '=', $id);
        $photo->delete();

        return redirect()->back();
    }
}