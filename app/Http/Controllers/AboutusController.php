<?php declare(strict_types=1); 

namespace App\Http\Controllers;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AboutusController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       return view('about.index',[
         'about'=>About::all(),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'about_title' => 'required',
            'about_description' => 'required',
            'about_photo' => 'required|image', // Ensure that about_photo is an image file
        ]);

        $about_photo = null; // Initialize $about_photo

        // Handle file upload
        if ($request->hasFile('about_photo')) {
            $file = $request->file('about_photo');
            $about_photo = time() . '.' . $file->getClientOriginalExtension();
            $path = "uploads/about_photos";
            $file->move($path, $about_photo);
        }

        // Insert data into the database
        About::insert([
            'about_title' => $request->about_title,
            'about_description' => $request->about_description,
            'about_photo' => $about_photo,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('insert', 'Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $about =About::find($id);
      return view('about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('new_about_photo')) {
          if($request->file('new_about_photo')){
                if(file_exists(public_path('uploads/about_photos/' . about::find($id)->about_photo))){
                    unlink(public_path('uploads/about_photos/' . about::find($id)->about_photo));
                $file = $request->file('new_about_photo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = "uploads/about_photos";
                $file->move($path, $filename);
                About::find($id)->update([
                    'about_photo' => $filename,
                ]);
          }
        }

         About::find($id)->update([
           'about_title'=>$request->about_title,
           'about_description' => $request->about_description,
       ]);
       return back()->with('success','Data update Successfully');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $deteled =About::find($id);
      unlink('uploads/about_photos/' . $deteled->about_photo);
       $deteled->delete();
    }

}
