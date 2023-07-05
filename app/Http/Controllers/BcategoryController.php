<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBcategoryRequest;
use App\Http\Requests\UpdateBcategoryRequest;
use App\Http\Requests\UpdateBcatergoryRequest;
use App\Models\Bcategory;
use App\Models\Bcatergory;

class BcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['bcategories'] = Bcategory::orderBy('id', 'desc')->get();
        return view('backend.pages.posts.categories.show-categories', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.posts.categories.create-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBcategoryRequest $request)
    {
        $category_id = $request->category_id;

        $codename = $this->clean($request->name_fr);

        $category = Bcategory::updateOrCreate(['id' => $category_id],
            [
                'codename' => $codename,

                'meta_keywords' => $request->meta_keywords,

                'meta_description' => $request->meta_description,

                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr,
                ],
                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr,
                ],

            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/posts/categories/' . $category->id . '/category-images/'), $fileName);
            $category->image_path = 'storage/posts/categories/' . $category->id . '/category-images/' . $fileName;
            $category->save();
        }


        return redirect()->route('bcategories.index', app()->getLocale())->with('success', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($lang, Bcategory $bcategory)
    {
        $data['bcategory'] = $bcategory;
        return view('backend.pages.posts.categories.show-category', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lang, Bcategory $bcategory)
    {
        $data['bcategory'] = $bcategory;
        return view('backend.pages.posts.categories.edit-category', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBcategoryRequest $request, $lang, Bcategory $bcategory)
    {
        $category_id = $bcategory->id;

        $category = Bcategory::updateOrCreate(['id' => $category_id],
            [

                'meta_keywords' => $request->meta_keywords,

                'meta_description' => $request->meta_description,

                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr,
                ],
                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr,
                ],

            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/posts/categories/' . $category->id . '/category-images/'), $fileName);
            $category->image_path = 'storage/posts/categories/' . $category->id . '/category-images/' . $fileName;
            $category->save();
        }

        return redirect()->route('bcategories.index', app()->getLocale())->with('success', 'Category has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bcategory $bcategory)
    {
        //
    }
}
