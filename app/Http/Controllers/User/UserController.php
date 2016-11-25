<?php
namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\User\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }    



    public function index()
    {
        $user = User::orderBy('id', 'desc')->paginate(10);

        return view('user.user.index', [
            'user' => $user
        ]);
    }

    // public function create()
    // {
    //     return view('user.user.create');
    // }

    // public function save(Request $request)
    // {
    //     $user = new User($request->all());

    //     $user->save();

    //     return redirect()->route('user.index');
    // }

    public function edit($id)
    {
        $user = User::find($id);

        return view('user.user.edit', [
            'user' => $user
        ]);
    }

    // public function update(Request $request, $id)
    // {
    //     $user = User::find($id);

    //     $user->update($request->all());

    //     return redirect()->route('user.index');
    // }


}