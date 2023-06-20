<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
       $resep = Resep::all();
       return view('home', compact('resep'));
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resep.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Resep;
        $data->id_user = $request->id_user;
        $data->title = $request->title;
        $data->resep = $request->resep;
        $data->id_category = $request->id_category;

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $name = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/resep_images', $name);
            $images = $name;
        } else {
            $images = $request->images;
        }

        $data->images = $images;
        $data->save();
        return redirect()->route('resep')->with('success', 'Resep has been created successfully.');
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
        $resep = Resep::findOrFail($id);
        return view('resep.edit', compact('resep'));
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
        $data = Resep::findOrFail($id);
        $data->id_user = $request->id_user;
        $data->title = $request->title;
        $data->resep = $request->resep;
        $data->id_category = $request->id_category;

        $images = null;

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $name = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/resep_images', $name);
            $images = $name;
        } else {
            $images = $data->images;
        }

        $data->images = $images;
        $data->save();
        return redirect()->route('resep')->with('success', 'Resep has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Resep::find($id);
        $data->delete();
        return redirect()->route('resep')->with('success', 'Resep has been updated successfully');
    }
}
