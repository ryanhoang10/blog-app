<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategories;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('likes', 'DESC')->get();
        $blogCategories = BlogCategories::orderBy('category')->get();

        return view('welcome', compact('blogs', 'blogCategories'));
    }

    public function create()
    {
        $blogCategories = BlogCategories::orderBy('category')->get();

        return view('create', compact('blogCategories'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title'     => 'required',
            'body'      => 'required',
            'category'  => 'required',
            'author'    => 'required',
        ]);

        $newBlog = new Blog();
        $newBlog->title = $request->title;
        $newBlog->category = $request->category;
        $newBlog->body = $request->body;
        $newBlog->author = $request->author;
        $newBlog->likes = 0;
        $newBlog->created_at = Carbon::now();
        $newBlog->save();

        return ['message' => 'Blog created.'];
    }

    public function delete(Request $request)
    {
    
    }

    public function editPage(Request $request)
    {
        $blog = Blog::where('id', $request->id)->get();
        $blogCategories = BlogCategories::orderBy('category')->get();

        return view('edit', compact('blog', 'blogCategories'));
    }
    
    public function edit(Request $request)
    {
    
    }
}
