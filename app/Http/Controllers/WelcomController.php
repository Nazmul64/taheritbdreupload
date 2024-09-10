<?php declare(strict_types=1); 

namespace App\Http\Controllers;

use App\Models\CategoryWelcom;
use App\Models\WelcomeCategoy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class WelcomController extends Controller
{
  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('category.index',[
         'categories'=>CategoryWelcom::all(),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
            'title'=>'required',
            'description' => 'required',
            'photo' => 'required | image |mimes:jpg,png,jpeg,gif,svg',
      ]);
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = "uploads/category_photos";
        $file->move($path, $filename);

       CategoryWelcom::Insert([
            'title' => $request['title'],
            'description' => $request['description'],
            'photo' => $filename,
       ]);
        return back()->with('add', ' Add Category  insert updated successfully ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = CategoryWelcom::find($id);
      return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = CategoryWelcom::find($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('new_photo')) {
            $category = CategoryWelcom::find($id);

            // Delete old photo
            unlink('uploads/category_photos/' . $category->photo);

            // Upload new photo
            $file = $request->file('new_photo');
            $new_photo = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/category_photos';
            $file->move($path, $new_photo);

            // Update category with new photo
            $category->update([
                'photo' => $new_photo,
            ]);
        }

       CategoryWelcom::find($id)->update([
            'title'=>$request['title'],
            'description' => $request['description'],
            'status' => $request['status'],
       ]);
       return back()->with('edit', 'Category updated successfully ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $category= CategoryWelcom::find($id);
      unlink('uploads/category_photos/'. $category->photo);
        $category->delete();
        return back();
    }
}
