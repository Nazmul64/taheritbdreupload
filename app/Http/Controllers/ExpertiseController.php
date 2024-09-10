<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{


   function team(){
    return view('teammumber.create');
   }
public function teaminsert(Request $request){
     $request->validate([
        'name' => 'required',
        'position' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'facebook_link' => 'nullable|url',
        'instagram_link' => 'nullable|url',
        'twitter_link' => 'nullable|url',
        'youtube_link' => 'nullable|url',
    ]);

    // Handle the file upload
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path = 'uploads/expertise/';
        $file->move(public_path($path), $fileName);
    } else {
        return redirect()->back()->withErrors(['photo' => 'Photo upload failed']);
    }

    // Create the new Expertise entry
    Expertise::insert([
        'name' => $request->name,
        'position' => $request->position,
        'facebook_link' => $request->facebook_link,
        'instagram_link' => $request->instagram_link,
        'twitter_link' => $request->twitter_link,
        'youtube_link' => $request->youtube_link,
        'photo' => $fileName,
    ]);
    return redirect()->back()->with('success', 'Expertise added successfully');
}
function teamshow (){
    $datashow=Expertise::all();
    return view('teammumber.show',compact('datashow'));
}
function teamdelete($id){
   $expertise=Expertise::find($id);
   $expertise->delete();
return redirect()->back()->with('success', 'Expertise added successfully');
}
function editshow($id){
   $edit = Expertise::find($id);
   return view('teammumber.edit',compact('edit'));
}
function teamupdate(Request $request, $id) {
      if($request->hasFile('new_photo')){
    $experience = Expertise::find($id);
    $oldPhotoPath = 'uploads/expertise/' . $experience->photo;

    // Check if the old photo exists before trying to delete it
    if (file_exists($oldPhotoPath)) {
        unlink($oldPhotoPath);
    }

    $file = $request->file('new_photo');
    $path = "uploads/expertise/";
    $new_photo = time() . '.' . $file->getClientOriginalExtension();
    $file->move($path, $new_photo);

    $experience->update([
        'photo' => $new_photo,
    ]);

    Expertise::find($id)->update([
        'name' => $request->name,
        'position' => $request->position,
        'facebook_link' => $request->facebook_link,
        'instagram_link' => $request->instagram_link,
        'twitter_link' => $request->twitter_link,
        'youtube_link' => $request->youtube_link,
    ]);

    return redirect()->back()->with('success', 'Expertise updated successfully');
}
}
}
