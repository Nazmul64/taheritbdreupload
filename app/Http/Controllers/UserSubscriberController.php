<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSubscriber;

class UserSubscriberController extends Controller
{
    
    function UserSubscriber(Request $request){
        $request->validate([
            'email' => 'required|email|unique:user_subscribers,email',
        ]);
        
        UserSubscriber::create([
            'email' =>$request->email,
        ]);

        return response()->json([
            'status' => 1,
            'msg' => 'You have successfully subscribed.',
        ], 200);
    }
    function subscribershow(){
         $usersubscriber=UserSubscriber::all();
        return view('subscriber.show_subscriber',compact('usersubscriber'));
    }
    function subscriberdeleted($id){
        UserSubscriber::find($id)->delete();
        return back()->with('success','Subscriber deleted successfully');
    }
}
