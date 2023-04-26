<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function createblog()
    {
        return view('admin.createblogpost');
    }

    public function storeblog(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'paragraph1' => 'required',
            'paragraph2' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            'image4' => 'required',
            'image5' => 'required',
        ]);
    }
}
