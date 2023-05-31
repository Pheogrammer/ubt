<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blog()
    {
        $blog = Blog::orderby('created_at', 'desc')->get();
        return view('admin.blog', ['blog' => $blog]);
    }

    public function CreateBlog()
    {
        return view('admin.createblogpost');
    }

    public function savePublishedBlog(Request $request)
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

        $destinationFolder = public_path('images/blogs');

        if (!file_exists($destinationFolder)) {
            mkdir($destinationFolder, 0777, true);
        }

        $imageNames = [];

        $images = $request->only(['image1', 'image2', 'image3', 'image4', 'image5']);

        $title = $request->input('title');
        $titleWithoutSpaces = preg_replace('/\s+/', '_', $title);

        foreach ($images as $key => $imageFile) {
            if ($imageFile && $imageFile->isValid()) {
                $imageName = $titleWithoutSpaces . '_' . time() . '_' . $key . '.' . $imageFile->getClientOriginalExtension();
                $imageFile->move($destinationFolder, $imageName);
                $imageNames[$key] = $imageName;
            }
        }

        $blog = new Blog();
        $blog->title = $title;
        $blog->paragraph1 = $request->input('half1');
        $blog->paragraph2 = $request->input('half2');
        $blog->image1 = $imageNames['image1'] ?? null;
        $blog->image2 = $imageNames['image2'] ?? null;
        $blog->image3 = $imageNames['image3'] ?? null;
        $blog->image4 = $imageNames['image4'] ?? null;
        $blog->image5 = $imageNames['image5'] ?? null;
        $blog->save();


        return redirect()->route('Adminblog')->with(['status' => 'Blog Published Successfully']);
    }

    public function Viewblog($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('admin.viewblogpost', ['blog' => $blog]);
    }

    public function editBlog($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('admin.editblogpost', ['blog' => $blog]);
    }

    public function saveeditedBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'half1' => 'required',
            'half2' => 'required',
            'image1' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image2' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image3' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image4' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image5' => 'nullable|file|mimes:jpeg,jpg,png,gif',
        ]);

        $destinationFolder = public_path('images/blogs');

        if (!file_exists($destinationFolder)) {
            mkdir($destinationFolder, 0777, true);
        }

        $imageNames = [];

        $images = $request->only(['image1', 'image2', 'image3', 'image4', 'image5']);

        $title = $request->input('title');
        $titleWithoutSpaces = preg_replace('/\s+/', '_', $title);

        foreach ($images as $key => $imageFile) {
            if ($imageFile && $imageFile->isValid()) {
                $imageName = $titleWithoutSpaces . '_' . time() . '_' . $key . '.' . $imageFile->getClientOriginalExtension();
                $imageFile->move($destinationFolder, $imageName);
                $imageNames[$key] = $imageName;
            }
        }

        $blog = Blog::where('id', $request->input('id'))->first();

        if ($blog) {
            $blog->title = $title;
            $blog->paragraph1 = $request->input('half1');
            $blog->paragraph2 = $request->input('half2');
            $blog->image1 = $imageNames['image1'] ?? $blog->image1;
            $blog->image2 = $imageNames['image2'] ?? $blog->image2;
            $blog->image3 = $imageNames['image3'] ?? $blog->image3;
            $blog->image4 = $imageNames['image4'] ?? $blog->image4;
            $blog->image5 = $imageNames['image5'] ?? $blog->image5;
            $blog->save();
        }

        return redirect()->route('Adminblog')->with(['status'=>'Blog Updated Successfully']);
    }
}
