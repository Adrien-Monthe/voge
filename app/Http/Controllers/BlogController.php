<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Bcategory;
use App\Models\Bcatergory;
use App\Models\Blog;
use App\Models\Btag;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['blogs'] = Blog::orderBy('id', 'desc')->get();
        return view('backend.pages.posts.show-posts', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Bcategory::orderBy('id', 'desc')->get();
        $data['tags'] = Btag::orderBy('id', 'desc')->get();
        return view('backend.pages.posts.create-post', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $blog_id = $request->blog_id;

        $codename = $this->clean($request->title_fr);

        $blog = Blog::updateOrCreate(['id' => $blog_id],
            [
                'codename' => $codename,

                'type' => $request->type,

                'youtube_code' => $request->youtube_code,

                'read_time' => $request->read_time,

                'status' => false,

                'comment_status' => false,

                'meta_keywords' => $request->meta_keywords,

                'visibility' => $request->visibility,

                'meta_description' => $request->meta_description,

                'views' => '0',

                'bcatergory_id' => $request->category_id,

                'author' => $request->author,


                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr
                ],
                'title' => [
                    'en' => $request->title_en,
                    'fr' => $request->title_fr
                ],
                'short_description' => [
                    'en' => $request->short_description_en,
                    'fr' => $request->short_description_fr
                ],
                'reactions' => [
                    'like' => 0,
                    'fire' => 0,
                    'love' => 0,
                    'hate' => 0,
                    'laugh' => 0,
                ],


            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/posts/blogs/' . $blog->id . '/blog-images/'), $fileName);
            $blog->image_path = 'storage/posts/blogs/' . $blog->id . '/blog-images/' . $fileName;
            $blog->save();
        }

        if ($request->video_path) {
            $fileName = time() . '_img.' . $request->video_path->extension();
            $request->video_path->move(public_path('storage/posts/blogs/' . $blog->id . '/blog-videos/'), $fileName);
            $blog->video_path = 'storage/posts/blogs/' . $blog->id . '/blog-videos/' . $fileName;
            $blog->save();
        }

        if ($request->tags) {
            foreach ($request->tags as $tag_id) {
                $blog->tags()->attach($tag_id);
                $blog->save();
            }
        }
        Session::flash('message', 'Votre article a été enregistré!');
        Session::flash('title', "Merci d'utiliser LNFOOT");
        Session::flash('alert-type', 'success');


        // dd(\session());


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($lang, Blog $blog)
    {
        $data['categories'] = Bcategory::orderBy('id', 'desc')->get();
        $data['tags'] = Btag::orderBy('id', 'desc')->get();
        $data['blog'] = $blog;
        return view('backend.pages.posts.show-post', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lang, Blog $blog)
    {
        $data['categories'] = Bcatergory::orderBy('id', 'desc')->get();
        $data['tags'] = Btag::orderBy('id', 'desc')->get();
        $data['blog'] = $blog;
        return view('backend.pages.posts.edit-post', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, $lang, Blog $blog)
    {
        $blog_id = $blog->id;

        $blog = Blog::updateOrCreate(['id' => $blog_id],
            [
                'type' => $request->type,

                'status' => false,

                'comment_status' => false,

                'youtube_code' => $request->youtube_code,

                'read_time' => $request->read_time,

                'visibility' => $request->visibility,

                'bcatergory_id' => $request->category_id,

                'author' => $request->author,

                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr
                ],
                'title' => [
                    'en' => $request->title_en,
                    'fr' => $request->title_fr
                ],
                'short_description' => [
                    'en' => $request->short_description_en,
                    'fr' => $request->short_description_fr
                ],


            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/posts/blogs/' . $blog->id . '/blog-images/'), $fileName);
            $blog->image_path = 'storage/posts/blogs/' . $blog->id . '/blog-images/' . $fileName;
            $blog->save();
        }

        if ($request->video_path) {
            $fileName = time() . '_img.' . $request->video_path->extension();
            $request->video_path->move(public_path('storage/posts/blogs/' . $blog->id . '/blog-videos/'), $fileName);
            $blog->video_path = 'storage/posts/blogs/' . $blog->id . '/blog-videos/' . $fileName;
            $blog->save();
        }

        return redirect()->route('blogs.index', app()->getLocale())->with('success', 'Blog has been added successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
