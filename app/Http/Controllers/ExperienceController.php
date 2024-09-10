<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    
    function experience(){
    return view('experience.create');
    }
    function experienceinsert(Request $request){
         $request->validate([
        'title' => 'required|string',
        'description' => 'required|string',
        'designing' => 'required|string',
        'progress_1' => 'required|string',
        'development' => 'required|string',
        'progress_2' => 'required|string',
        'optimization' => 'required|string',
        'progress_3' => 'required|string',
        'photo' =>'required',
    ], [
        'title.required' => 'The title field is required.',
        'description.required' => 'The description field is required.',
        'designing.required' => 'The designing field is required.',
        'progress_1.required' => 'The progress 1 field is required.',
        'development.required' => 'The development field is required.',
        'progress_2.required' => 'The progress 2 field is required.',
        'optimization.required' => 'The optimization field is required.',
        'progress_3.required' => 'The progress 3 field is required.',
        ]);
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = "uploads/experience";
        $request->photo->move($path, $filename); // Corrected move() method
       Experience::insert([
          'title'=>$request->title,
          'description'=>$request->description,
          'designing'=>$request->designing,
          'progress_1'=>$request->progress_1,
          'development'=>$request->development,
          'progress_2'=>$request->progress_2,
          'optimization'=>$request->optimization,
          'progress_3'=>$request->progress_3,
          'photo'=>$filename,
       ]);

       return back()->with('experience','Data insert successfully');
    }
    function experiencedatashow(){
        $experiencedatashow=Experience::all();
        return view('experience.index',compact('experiencedatashow'));
    }
function experiencedatadelete($id){
    $delete=Experience::find($id);
    $delete->delete();
     return back()->with('deleteexperience','Data delete successfully');
}
function experienceedit($id){
    $edit =Experience::find($id);
  return view('experience.edit',compact('edit'));
}
function experienceupdate(Request $request,$id){
    if($request->hasFile('new_photo')){
    $experience = Experience::find($id);
    $oldPhotoPath = 'uploads/experience/' . $experience->photo;

    // Check if the old photo exists before trying to delete it
    if (file_exists($oldPhotoPath)) {
        unlink($oldPhotoPath);
    }

    $file = $request->file('new_photo');
    $path = "uploads/experience/";
    $new_photo = time() . '.' . $file->getClientOriginalExtension();
    $file->move($path, $new_photo);

    $experience->update([
        'photo' => $new_photo,
    ]);
}

   Experience::find($id)->update([
          'title'=>$request->title,
          'description'=>$request->description,
          'designing'=>$request->designing,
          'progress_1'=>$request->progress_1,
          'development'=>$request->development,
          'progress_2'=>$request->progress_2,
          'optimization'=>$request->optimization,
          'progress_3'=>$request->progress_3,
        
   ]);
   return back()->with('updated','Data Updated successfully');
}
}
