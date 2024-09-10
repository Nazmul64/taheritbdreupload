<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Sitelogo;
use Illuminate\Http\Request;

class SitelogoController extends Controller
{
    function sitesetting(){
        return view('sitesetting.create');
    }
function datainsert(Request $request){
    $request->validate([
        'information'=>'required',
        'facebook_link'=>'required |url',
        'instagram_link'=>'required |url',
        'twitter_link'=>'required |url',
        'adderes'=>'required',
        'phone_1'=>'required ',
        'phone_2'=>'required ',
        'email_1'=>'required ',
        'email_2'=>'required ',
        'site_icon'=>'required ',
        'photo'=>'required ',
    ]);
   $file=$request->file('photo');
   $fileName=time().'.'.$file->getClientOriginalExtension();
   $path='uploads/setting/';
   $request->photo->move($path,$fileName);

   $file=$request->file('site_icon');
   $sitefileName=time().'.'.$file->getClientOriginalExtension();
   $path='uploads/setting/';
   $request->site_icon->move($path,$sitefileName);
 Sitelogo::insert([
    'information' => $request->information,
    'facebook_link' => $request->facebook_link,
    'instagram_link' => $request->instagram_link,
    'twitter_link' => $request->twitter_link,
    'adderes' => $request->adderes,
    'phone_1' => $request->phone_1,
    'phone_2' => $request->phone_2,
    'email_1' => $request->email_1,
    'email_2' => $request->email_2,
    'site_icon' =>$sitefileName,
    'photo' =>$fileName,
 ]);
 return back()->with('success','Data inserted successfully');
}
function sitesettingshow(){
    $datashow=Sitelogo::all();
    return view('sitesetting.show',compact('datashow'));
}
function sitesettingdelete($id){
  $delete=Sitelogo::find($id);
  $delete->delete();
  return back()->with('delete','Data delete successfully');
}
function sitesettingedit($id){
     $edit=Sitelogo::find($id);
     return view('sitesetting.edit',compact('edit'));
}
public function sitesetingupdate(Request $request, $id) {
if ($request->hasFile('new_photo')) {
    $sitelogo = Sitelogo::find($id);
    if ($sitelogo && file_exists('uploads/setting/' . $sitelogo->photo)) {
        unlink('uploads/setting/' . $sitelogo->photo);
    }

    $file = $request->file('new_photo');
    $path = "uploads/setting/";
    $new_photo = time() . '.' . $file->getClientOriginalExtension();
    $file->move($path, $new_photo);

    $sitelogo->update([
        'photo' => $new_photo
        ]);
}

// Site logo update
if ($request->hasFile('new_icon')) {
    $sitelogo = Sitelogo::find($id);
    if ($sitelogo && file_exists('uploads/setting/' . $sitelogo->site_icon)) {
        unlink('uploads/setting/' . $sitelogo->site_icon);
    }

    $file = $request->file('new_icon');
    $path = "uploads/setting/";
    $new_site_logo = time() . '.' . $file->getClientOriginalExtension();
    $file->move($path, $new_site_logo);

    $sitelogo->update([
        'site_icon' => $new_site_logo
        ]);
}

    if ($request->hasFile('site_icon')) {
        // Delete old site icon if it exists
        $oldIconPath = 'uploads/setting/' . $sitelogo->site_icon;
        if (file_exists($oldIconPath)) {
            unlink($oldIconPath);
        }

        // Save new site icon
        $file = $request->file('site_icon');
        $site_icon = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/setting/', $site_icon);

        // Update the record with new site icon
        $sitelogo->update([
        'site_icon' => $site_icon,
    ]);
    }


    Sitelogo::find($id)->update([
        'information' => $request->input('information'),
        'facebook_link' => $request->input('facebook_link'),
        'instagram_link' => $request->input('instagram_link'),
        'twitter_link' => $request->input('twitter_link'),
        'adderes' => $request->input('adderes'),
        'phone_1' => $request->input('phone_1'),
        'phone_2' => $request->input('phone_2'),
        'email_1' => $request->input('email_1'),
        'email_2' => $request->input('email_2'),
    ]);

    return redirect()->back()->with('success', 'Expertise updated successfully');
}


}
