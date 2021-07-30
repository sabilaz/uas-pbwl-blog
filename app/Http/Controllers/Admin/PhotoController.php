<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Post, Photos};

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Photos::orderBy('id', 'desc');
        $photo = $photo->paginate(10);

        $skipped = ($photo->perPage() * $photo->currentPage()) - $photo->perPage();

        return view('apps.photo.index')->with('photo', $photo)
                                       ->with('skipped', $skipped);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = Post::orderBy('id', 'asc')->get();
        return view('apps.photo.create')
                            ->with('post', $post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Photos::create($request->all());
        return redirect()->route('admin.photo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Photos $photos)
    {
        $post = Post::orderBy('id', 'asc')->get();
        return view('apps.photo.edit')
                            ->with('post', $post)
                            ->with('photos', $photos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $photo = Photos::findOrFail($request->id);
        $photo->update($request->all());

        return redirect()->route('admin.photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $photo = Photos::findOrFail($request->id);
        $photo->delete();

        return redirect()->route('admin.photo');
    }
}
