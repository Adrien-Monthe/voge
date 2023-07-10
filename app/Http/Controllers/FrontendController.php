<?php

namespace App\Http\Controllers;

use App\Models\Bcategory;
use App\Models\Bcatergory;
use App\Models\Bcomment;
use App\Models\Blog;
use App\Models\Btag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $data['recent_blogs'] = Blog::orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.pages.home', $data);
    }

    public function blog()
    {
        $data['categories'] = Bcategory::orderBy('id', 'desc')->limit(6)->get();
        $data['tags'] = Btag::orderBy('id', 'desc')->limit(6)->get();
        $data['blogs'] = Blog::orderBy('id', 'desc')->paginate(15);
        $data['recent_blogs'] = Blog::orderBy('id', 'desc')->limit(3)->get();
        $data['popular_blogs'] = Blog::orderBy('views', 'desc')->limit(3)->get();
        return view('frontend.pages.blog.blog',$data);
    }

    public function single_blog_page($lang, $blog)
    {
        $data['blog'] = Blog::where('codename', $blog)->first();
        if (!$data['blog']) {
            $data['blog'] = Blog::find($blog);
        }
        if (!$data['blog']) {
            return redirect()->route('home', app()->getLocale());
        }
        $data['blog']->views = $data['blog']->views + 1;
        $data['blog']->save();

        $data['categories'] = Bcategory::orderBy('id', 'desc')->get();
        $data['tags'] = Btag::orderBy('id', 'desc')->get();
        $data['next_blog'] = Blog::orderBy('id', 'desc')->where('id', '!=', $data['blog']->id)->first();
        $data['prec_blog'] = Blog::orderBy('id', 'desc')->where('id', '!=', $data['blog']->id)->where('id', '!=', $data['next_blog']->id)->first();


        $data['recent_blogs'] = Blog::orderBy('id', 'desc')->limit(3)->get();
        $data['popular_blogs'] = Blog::orderBy('views', 'desc')->limit(3)->get();
        $data['recent_comments'] = Bcomment::orderBy('id', 'desc')->where('blog_id', $data['blog']->id)->paginate(3);


        return view('frontend.pages.blog.single-blog', $data);
    }

    public function about()
    {
        $data['recent_blogs'] = Blog::orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.pages.about',$data);
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function managing_team()
    {
        $data['recent_blogs'] = Blog::orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.pages.team.managing-team',$data);
    }

    public function playing_team()
    {
        $data['recent_blogs'] = Blog::orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.pages.team.players',$data);
    }
}
