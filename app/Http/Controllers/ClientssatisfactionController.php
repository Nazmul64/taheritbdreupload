<?php

namespace App\Http\Controllers;
use App\Models\Projectclient;
use Illuminate\Http\Request;

class ClientssatisfactionController extends Controller
{
    function clientsatifactions(){
        return view("Clientssatisfaction.create");
    }
    function store(Request $request){
        $request->validate([
            "watchus_title"=>"required",
            "see_how_title"=>"required",
            "photo"=>"required",
            "video_id"=>"required",
            "happy_client1"=>"required",
            "happy_count1"=>"required",
            "happy_client2"=>"required",
            "happy_count2"=>"required",
            "happy_client3"=>"required",
            "happy_count3"=>"required",
            "happy_client4"=>"required",
            "happy_count4"=>"required",
        ]);
         // Handle the file upload
         $file = $request->file('photo');
         $filename = time() . '.' . $file->getClientOriginalExtension();
         $path = "uploads/happy_clients";
         $file->move($path, $filename);
         $variation_data = [
            "watchus_title"=> $request->watchus_title,
            "see_how_title"=> $request->see_how_title,
            "video_id"=> $request->video_id,
            "happy_client1"=> $request->happy_client1,
            "happy_count1"=> $request->happy_count1,
            "happy_client2"=> $request->happy_client2,
            "happy_count2"=> $request->happy_count2,
            "happy_client3"=> $request->happy_client3,
            "happy_count3"=> $request->happy_count3,
            "happy_client4"=> $request->happy_client4,
            "happy_count4"=> $request->happy_count4,
            'photo'=> $filename,
        ];
        Projectclient::insert($variation_data);
         return back()->with('success', 'Data Inserted Successfully!');
    }
    public function show(){
        $project = Projectclient::get();
        return view('Clientssatisfaction.index',compact('project'));
    }
    public function projectedit($id) {
        $data_show = Projectclient::find($id);
        return view('Clientssatisfaction.projectedit', compact('data_show'));
    }
    public function update(Request $request, $id) {
        $clientphotoupdate = Projectclient::find($id);

        if ($request->hasFile('new_photo')) {
            // Check if the old photo exists before trying to delete it
            $oldPhotoPath = 'uploads/happy_clients/' . $clientphotoupdate->photo;
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);  // Delete old photo
            }

            // Handle the new photo upload
            $file = $request->file('new_photo');
            $path = "uploads/happy_clients";
            $new_photo = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $new_photo);

            // Update the 'photo' field in the database with the new photo name
            $clientphotoupdate->photo = $new_photo;
        }

        // Update the other fields regardless of the photo
        $clientphotoupdate->update([
            "watchus_title"   => $request->watchus_title,
            "see_how_title"   => $request->see_how_title,
            "video_id"        => $request->video_id,
            "happy_client1"   => $request->happy_client1,
            "happy_count1"    => $request->happy_count1,
            "happy_client2"   => $request->happy_client2,
            "happy_count2"    => $request->happy_count2,
            "happy_client3"   => $request->happy_client3,
            "happy_count3"    => $request->happy_count3,
            "happy_client4"   => $request->happy_client4,
            "happy_count4"    => $request->happy_count4,
            'photo'           => $clientphotoupdate->photo,  // Retain the photo, new or old
        ]);

        return back()->with("success", "Data Updated Successfully!");
    }

 public function delete($id){
    $client = Projectclient::find($id);
    $client->delete();
    return back()->with("success","Data Delete Successfully!");
}
 }


