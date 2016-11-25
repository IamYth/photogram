<?php
namespace App\Http\Controllers\User\Photo;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Photo\Photo;
use Illuminate\Http\Request;

use Intervention\Image\ImageManager as Image;

class PhotoController extends Controller {

    public function index()
    {
        $photo = Photo::orderBy('id', 'desc')->paginate(10);

        return view('profile.album.photo.index', [
            'photo' => $photo
        ]);
    }

    public function create()
    {
        return view('profile.album.photo.create');
    }

    public function save(Request $request)
    {   
        $manager = new \Intervention\Image\ImageManager(array('driver' => 'gd'));

        foreach ($request->file('image') as $file) {

            $photo = new Photo();

            

            $photo->album_id = $request->albumId;

            $photo->phname = $file->hashName();

             

            $originalSrc = $photo->src('original', true);


            $file->move(dirname($originalSrc), basename($originalSrc));


            foreach (config('thumbnail') as $dir => $size)
            {
                $thumbnailSrc = $photo->src($dir, true);

                if (!is_dir(dirname($thumbnailSrc))) 
                {
                    mkdir(dirname($thumbnailSrc));
                }

                $photo->save();
            

                $imgSrc = $manager->make($originalSrc)

                    ->resize($size['height'], $size['widht'])

                ->save($thumbnailSrc);


                

            }


        }

        return redirect()->route('profile.album.edit.');
    }

    public function edit($id)
    {
        $photo = Photo::find($id);

        return view('profile.album.photo.edit', [
            'photo' => $photo
        ]);
    }

    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);

        $photo->update($request->all());

        return redirect()->route('profile.album.photo.index');
    }

    public function delete($id)
    {
        $photo = Photo::where('id', '=', $id);
        $photo->delete();

        return redirect()->back();
    }
}