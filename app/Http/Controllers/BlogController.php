<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function createblog()
    {
        $blog = Blog::orderby('created_at','desc')->get();
        return view('admin.createblogpost', ['blog' => $blog]);
    }

    public function storeblog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'half1' => 'required',
            'half2' => 'required',
            'image1' => 'required|file|mimes:jpeg,jpg,png,gif',
            'image2' => 'required|file|mimes:jpeg,jpg,png,gif',
            'image3' => 'required|file|mimes:jpeg,jpg,png,gif',
            'image4' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image5' => 'nullable|file|mimes:jpeg,jpg,png,gif',
        ]);
    }
}
