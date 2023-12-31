<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        return view('user.index', compact('user'));
    }
    public function isAdmin()
    {
        $user = Auth::user();
        return $user->role === 'admin';
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function setting($id)
    {
        $user = User::findOrFail($id);
        return view('user.setting', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = User::find($id);

        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;

        $data->save();

        return redirect()->route('user')->with('success', 'User has been updated successfully');
    }

    public function updatesetting(Request $request, $id)
    {
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;

        $data->save();

        return redirect()->route('resep')->with('success', 'User has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$this->isAdmin()) {
            return redirect()->route('user')->with('error', 'You do not have permission to delete users.');
        }

        $user = User::findOrFail($id);

    // Lakukan pemeriksaan tambahan jika diperlukan sebelum menghapus pengguna
    // Misalnya, jika Anda ingin melarang pengguna menghapus akun mereka sendiri
    // Anda dapat menambahkan kondisi berikut sebelum menghapus pengguna:
    /*
    if ($user->id == Auth::user()->id) {
        return redirect()->route('user')->with('error', 'You do not have permission to delete your own account.');
    }
    */

    $user->delete();

    return redirect()->route('user')->with('success', 'User has been deleted successfully');
}

}
