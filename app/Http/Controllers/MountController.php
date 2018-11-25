<?php

namespace App\Http\Controllers;

use App\Location;
use App\Mount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mounts = Mount::paginate(6);
        return view('mount.index', compact('mounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mount.create');
    }

    public function nampilinGambar()
    {
        $locations = Location::all();
        $mounts = Mount::all();
        return view('index', compact('locations', 'mounts'));
    }

    public function showGambar($id)
    {
        $mounts = Mount::findOrFail($id);
        return view('item', compact('mounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = $request->all();
        if ($request->file('imageCover')) {
            $file = Storage::disk('public')->put('cover', $request->imageCover);
            $datas['imageCover'] = $file;
        }
        if ($request->file('image_1')) {
            $file = Storage::disk('public')->put('image1', $request->image_1);
            $datas['image_1'] = $file;
        }
        if ($request->file('image_2')) {
            $file = Storage::disk('public')->put('image2', $request->image_2);
            $datas['image_2'] = $file;
        }
        if ($request->file('image_3')) {
            $file = Storage::disk('public')->put('image3', $request->image_3);
            $datas['image_3'] = $file;
        }
        Mount::create($datas);
        return redirect(route('location.create'))->with('status', 'mantap');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mount $mount
     * @return \Illuminate\Http\Response
     */
    public function show(Mount $mount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mount $mount
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mount = Mount::findOrFail($id);
        return view('mount.edit', compact('mount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Mount $mount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mount = Mount::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('imageCover')) {
            $file = $request->file('imageCover')->store('cover', 'public');
            $data['imageCover'] = $file;
            Storage::delete('public' . $mount->imageCover);
        }
        if ($request->hasFile('image_1')) {
            $file = $request->file('image_1')->store('image1', 'public');
            $data['image_1'] = $file;
            Storage::delete('public' . $mount->image_1);
        }
        if ($request->hasFile('image_2')) {
            $file = $request->file('image_2')->store('image2', 'public');
            $data['image_2'] = $file;
            Storage::delete('public' . $mount->image_2);
        }
        if ($request->hasFile('image_3')) {
            $file = $request->file('image_3')->store('image3', 'public');
            $data['image_3'] = $file;
            Storage::delete('public' . $mount->image_3);
        }
        $mount->update($data);
        return redirect(route('mounts.edit', ['id' => $mount->id]))->with('status', 'mantul update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mount $mount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mount $mount)
    {
        //
    }

    public function shopNow($id)
    {
        $mount = Mount::findOrFail($id);
        return view('order',compact('mount'));
    }
}
