<?php declare(strict_types=1); 

namespace App\Http\Controllers;

use App\Models\Getintouc;
use Illuminate\Http\Request;

class GetintouchController extends Controller
{
    function getintouch(Request $request){
        
 $request->validate([
           'first_name' =>'required |string',
           'last_name' =>'required |string',
           'email' =>'required | email',
           'phone_number' =>'required ',
           'message' =>'required',
       ]);
       Getintouc::create([
           'first_name'=> $request->first_name,
           'last_name'=> $request->last_name,
           'email'=> $request->email,
           'message'=> $request->message,
           'phone_number' => $request->phone_number,
       ]);
       return  back()->with('success','Data inserted successfully');
    }
    function getintouchshow(){
        $getintouch=Getintouc::all();
        return view('getintouch.show',compact('getintouch'));
    }
    function getintoucdelete($id){
        $delete =Getintouc::find($id);
        $delete->delete();
         return back()->with('success','Data deleted successfully');
    }
}
