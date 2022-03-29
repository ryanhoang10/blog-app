<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategories;
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
    
    }

    public function delete(Request $request)
    {
    
    }
    
    public function edit(Request $request)
    {
    
    }
}
