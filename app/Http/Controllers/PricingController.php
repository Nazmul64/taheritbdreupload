<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PricingController extends Controller
{
   
    function pricing(){
        return view('pricing.created');
    }
public function pricinginsert(Request $request)
{
    $request->validate([
        'basic' => 'required',
        'price' => 'required',
        'life_time_update' => 'required',
        'month' => 'required',
        'permitted_domain' => 'required',
        'personal_project' => 'required',
        'email_support' => 'required',
        'skype_support' => 'required',
        'anydesk_support' => 'required',
        'whatsapp_support' => 'required',
        'installation_cpanel' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path = 'uploads/pricing/';
        $file->move($path, $fileName);

        Pricing::create([
            'basic' => $request->basic,
            'price' => $request->price,
            'life_time_update' => $request->life_time_update,
            'month' => $request->month,
            'permitted_domain' => $request->permitted_domain,
            'personal_project' => $request->personal_project,
            'email_support' => $request->email_support,
            'skype_support' => $request->skype_support,
            'anydesk_support' => $request->anydesk_support,
            'whatsapp_support' => $request->whatsapp_support,
            'installation_cpanel' => $request->installation_cpanel,
            'photo' => $fileName,
        ]);

        return back()->with('pricing', 'Data inserted successfully');
    } else {
        return back()->withErrors(['photo' => 'Photo upload failed']);
    }

}
 function pricingedit(){
    $datashow=Pricing::all();
        return view('pricing.show',compact('datashow'));
    }
function pricingdelete($id){
   $delete =Pricing::find($id);
   $delete->delete();
    return back()->with('deleteexperience','Data delete successfully');
}
function pricingediting($id){
   $edit = Pricing::find($id);
   return view('pricing.edit',compact('edit'));
}
function pricingupdating($id, Request $request){
    if($request->hasFile('new_photo')){
    $experience = Pricing::find($id);
    $oldPhotoPath = 'uploads/pricing/' . $experience->photo;

    // Check if the old photo exists before trying to delete it
    if (file_exists($oldPhotoPath)) {
        unlink($oldPhotoPath);
    }

    $file = $request->file('new_photo');
    $path = "uploads/pricing/";
    $new_photo = time() . '.' . $file->getClientOriginalExtension();
    $file->move($path, $new_photo);

    $experience->update([
        'photo' => $new_photo,
    ]);
    }
    Pricing::find($id)->update([
            'basic' => $request->basic,
            'price' => $request->price,
            'life_time_update' => $request->life_time_update,
            'month' => $request->month,
            'permitted_domain' => $request->permitted_domain,
            'personal_project' => $request->personal_project,
            'email_support' => $request->email_support,
            'skype_support' => $request->skype_support,
            'anydesk_support' => $request->anydesk_support,
            'whatsapp_support' => $request->whatsapp_support,
            'installation_cpanel' => $request->installation_cpanel,
    ]);
     return back()->with('edit','data edit successfully');
}
}
