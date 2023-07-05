<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Blog;
use App\Models\Image;
use App\Models\Portfolio;
use App\Models\Product;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageRequest $request)
    {
        $image_id = $request->image_id;

        $image = Image::updateOrCreate(['id' => $image_id],
            [

                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr,
                ],

            ]);


        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/images/' . $image->id . '/image-images/'), $fileName);
            $image->image_path = 'storage/images/' . $image->id . '/image-images/' . $fileName;
            $image->save();
        }

        if ($request->blog_id) {
            $blog = Blog::find($request->blog_id);
            $blog->images()->save($image);
        }






        return redirect()->back()->with('success', 'Image Added.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
