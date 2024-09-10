<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Testmonial;
use Illuminate\Http\Request;

class TestmonialController extends Controller
{
    function testmonials(){
        return view('testmonials.create');
    }
  public function testmonialsinsert(Request $request)
{
    // Validation rules
    $request->validate([
        'testmonial' => 'nullable',
        'clientsay' => 'nullable',
        'description_1' => 'nullable',
        'description_2' => 'required',
        'name' => 'required|string',
        'title_1' => 'required|string',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle file upload
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path = 'uploads/testimonial/';
        $file->move(public_path($path), $fileName);
    }

    // Insert data into the database
    Testmonial::create([
        'testmonial' => $request->testmonial,
        'clientsay' => $request->clientsay,
        'description_1' => $request->description_1,
        'description_2' => $request->description_2,
        'name' => $request->name,
        'title_1' => $request->title_1,
        'photo' => $fileName,
    ]);

    return back()->with('success','data inserted successfully');
}
public function index(){
    $datashow = Testmonial::all();
    return view('testmonials.index',compact('datashow'));
}
public function edit($id){
    $edit = Testmonial::find($id);
    return view('testmonials.edit',compact('edit'));
}
public function updatetestomonila(Request $request, $id){
    $testmonial = Testmonial::find($id);

    if (!$testmonial) {
        return redirect()->back()->with('error', 'Testimonial not found');
    }

    if ($request->hasFile('new_photo')) {
        $oldPhotoPath = 'uploads/testimonial/' . $testmonial->photo;
        if (file_exists($oldPhotoPath)) {
            unlink($oldPhotoPath);
        }
        $file = $request->file('new_photo');
        $path = "uploads/testimonial";
        $new_photo = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $new_photo);
        $testmonial->photo = $new_photo;
    }

    $testmonial->save();
    $testmonial->update([
        'description_2' => $request->description_2,
        'name' => $request->name,
        'title_1' => $request->title_1,
    ]);
    return back()->with('success','data Update successfully');
}
public function deletetestmonail($id){
    $testmonial=Testmonial::find($id);
    $testmonial->delete();
    return back()->with('success','data Delete successfully');
}
}
