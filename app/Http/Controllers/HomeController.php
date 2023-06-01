<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Project;
use Illuminate\Support\Carbon;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Staff;

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
        $blogs = Blog::orderBy('created_at', 'desc')->get();

        $blogsFormatted = $blogs->map(function ($blog) {
            $formattedDate = date('d/m/Y', strtotime($blog->created_at));
            $blog->formattedDate = $formattedDate;
            return $blog;
        });

        return view('admin.blog', ['blog' => $blogsFormatted]);
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

        return redirect()->route('Adminblog')->with(['status' => 'Blog Updated Successfully']);
    }

    public function Adminproject()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();

        $projectFormatted = $projects->map(function ($project) {
            $formattedDate = date('d/m/Y', strtotime($project->created_at));
            $project->formattedDate = $formattedDate;
            return $project;
        });

        return view('admin.project', ['project' => $projectFormatted]);
    }

    public function CreateProject()
    {
        return view('admin.createproject');
    }

    public function SaveCreateProject(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'half1' => 'required',
            'half2' => 'required',
            'half3' => 'required',
            'image1' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image2' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image3' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image4' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image5' => 'nullable|file|mimes:jpeg,jpg,png,gif',
        ]);

        $destinationFolder = public_path('images/projects');

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

        $project = new Project();
        $project->title = $title;
        $project->paragraph1 = $request->input('half1');
        $project->paragraph2 = $request->input('half2');
        $project->paragraph3 = $request->input('half3');
        $project->image1 = $imageNames['image1'] ?? null;
        $project->image2 = $imageNames['image2'] ?? null;
        $project->image3 = $imageNames['image3'] ?? null;
        $project->image4 = $imageNames['image4'] ?? null;
        $project->image5 = $imageNames['image5'] ?? null;
        $project->save();



        return redirect()->route('Adminproject')->with(['status' => 'Project Published Successfully']);
    }

    public function viewprojectAdmin($id)
    {
        $project = Project::where('id', $id)->first();
        return view('admin.viewproject', ['project' => $project]);
    }

    public function EditProject($id)
    {
        $project = Project::where('id', $id)->first();
        return view('admin.editproject', ['project' => $project]);
    }

    public function saveEditedProject(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'half1' => 'required',
            'half2' => 'required',
            'half3' => 'required',
            'image1' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image2' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image3' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image4' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'image5' => 'nullable|file|mimes:jpeg,jpg,png,gif',
        ]);

        $destinationFolder = public_path('images/projects');

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
        $project = Project::where('id', $request->input('id'))->first();

        if ($project) {
            $project->title = $title;
            $project->paragraph1 = $request->input('half1');
            $project->paragraph2 = $request->input('half2');
            $project->paragraph3 = $request->input('half3');
            $project->image1 = $imageNames['image1'] ?? $project->image1;
            $project->image2 = $imageNames['image2'] ?? $project->image2;
            $project->image3 = $imageNames['image3'] ?? $project->image3;
            $project->image4 = $imageNames['image4'] ?? $project->image4;
            $project->image5 = $imageNames['image5'] ?? $project->image5;
            $project->save();
        }

        return redirect()->route('Adminproject')->with(['status' => 'Project Updated Successfully']);
    }

    public function management()
    {
        $staff = Staff::orderby('name', 'asc')->get();
        $partner = Partner::orderby('name', 'asc')->get();
        $contact = Contact::get();

        return view('admin.management', ['staff' => $staff, 'partner' => $partner, 'contact' => $contact]);
    }



    public function saveStaff(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'image' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
        ]);

        $staff = new Staff();
        $staff->name = $request->input('name');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->position = $request->input('position');
        $staff->twitter = $request->input('twitter');
        $staff->linkedin = $request->input('linkedin');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $destinationPath = public_path('images/profiles');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $imageName = preg_replace('/\s+/', '_', $staff->name) . '_' . time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);

            $staff->picture = $imageName;
        }

        $staff->save();

        return redirect()->back()->with(['status' => 'Staff Registered Successfully']);
    }

    public function updatestaff(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'image' => 'nullable|file|mimes:jpeg,jpg,png,gif',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
        ]);

        $staff = Staff::findOrFail($id); // Use findOrFail to throw an exception if the staff record doesn't exist

        $staff->name = $request->input('name');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->position = $request->input('position');
        $staff->twitter = $request->input('twitter');
        $staff->linkedin = $request->input('linkedin');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $destinationPath = public_path('images/profiles');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $imageName = preg_replace('/\s+/', '_', $staff->name) . '_' . time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);

            $staff->picture = $imageName;
        }

        $staff->save();

        return redirect()->back()->with(['status' => 'Staff Updated Successfully']);
    }
    public function updatePartner(Request $request)
    {
    }

    public function changeContact(Request $request)
    {
    }

    public function deleteblog($id)
    {
    }

    public function deleteproject($id)
    {
    }

    public function deletepartner($id)
    {
    }

    public function deletestaff($id)
    {
    }
}
