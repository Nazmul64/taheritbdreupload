<?php declare(strict_types=1); 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmaillOffer;
class UserController extends Controller
{
    

public function profile(){
  return view('profilephoto');
}
public function profilechange(Request $request){
        $request->validate([
            'name'=>'required',
            'profile_photo' => 'required',
        ]);
if($request->hasFile('profile_photo')){
   if(Auth::user()->profile_photo !=='avator.jpeg'){
     unlink('uploads/profile_photos/'.Auth::user()->profile_photo);
   }
            $file = $request->file('profile_photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/profile_photos';
            $request->profile_photo->move($path, $fileName);

  User::find(Auth::id())->update([
    'profile_photo'=> $fileName,
  ]);
  return back()->with('photo', 'name and profile photo updated successfully');
}

}
    public function passwordchange(Request $request){
        $request->validate([
            'old_password'=>'required',
            'password' => 'required',
            'Confirmation' => 'required',
        ]);
        if(Hash::check($request->old_password,Auth::user()->password)){
            if($request->password==$request->Confirmation){
               User::find(Auth::id())->update([
                'password'=>Hash::make($request->password),
               ]);
               return back()->with('passwrd','password updated successfully');
            }else{
                return back()->withErrors('New Password Confirm password  Does Not Match In Our Records');
            }
        }else{
            return back()->withErrors("Old Password Does Not Match In Our Records");
        }
    }
    public function emailoffer(){
       return view('emailoffer',[
        'customers'=>User::where('role',1)->get(),
       ]);
    }
    public  function singleoffer($id){
        Mail::to(User::find($id)->email)->send(new EmaillOffer);
        return back();
    }
}
