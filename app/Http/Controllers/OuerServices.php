<?php

namespace App\Http\Controllers;

use App\Models\Awesome;
use Illuminate\Http\Request;

class OuerServices extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('ourservices.index',[
        'ourservices'=>Awesome::all(),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('ourservices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'awesome_title'=>'required',
            'awesome_description' => 'required',
            'photo' => 'required',
        ]);
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = "uploads/ourservices_photos";
        $request->photo->move($path, $filename); // Corrected move() method

        Awesome::insert([
            'awesome_title' => $request['awesome_title'],
            'awesome_description' => $request['awesome_description'],
            'photo' => $filename,
        ]);

      return back()->with('awesome','Data insert successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show_data=Awesome::find($id)->get();
       return view('ourservices.show',compact('show_data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $awesome =Awesome::find($id);
     return view('ourservices.edit',compact('awesome'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         if($request->hasFile('new_photo')){
            unlink('uploads/ourservices_photos/'.Awesome::find($id)->photo);
            $file = $request->file('new_photo');
            $path = "uploads/ourservices_photos/";
            $new_photo = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $new_photo); // Corrected move() method

            $awesome = Awesome::find($id);
            $awesome->update([
                'photo' => $new_photo,
            ]);
           }
        Awesome::find($id)->update([
            'awesome_title'=>$request->awesome_title,
            'awesome_description' => $request->awesome_description,
            'status' => $request->status,
        ]);
       return back()->with('edit','data edit successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $delete=Awesome::find($id);
         unlink('uploads/ourservices_photos/'.$delete->photo);
        $delete->delete();
        return back()->with('delete','data deleted successfully');

    }
}
