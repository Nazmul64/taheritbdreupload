<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contactinformations;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactinformationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('contact.index',[
            'contact' => Contactinformations::all(),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

      return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'main_photo'=> 'required |mimes:svg',
            'icon_photo'=> 'required ',
            'information_one' =>'required',
            'information_two' => 'required',
            'Location' => 'required',
            'address_1' => 'required',
            'address_2' => 'required',
            'patner_photo'=> 'required',

        ]);

        $data = [
            'information_one' => $request->information_one,
            'information_two' => $request->information_two,
            'Location' => $request->Location,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'create_at' => Carbon::now(),
        ];

        if ($request->hasFile('main_photo')) {
            $file = $request->file('main_photo');
            $main_photo = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/contact_photos';
            $request->main_photo->move($path, $main_photo);
            $data['main_photo'] = $main_photo;
        }

        if ($request->hasFile('icon_photo')) {
            // Main_photo
            $file = $request->file('icon_photo');
            $icon_photo = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/contact_photos';
            $request->icon_photo->move($path, $icon_photo);
            $data['icon_photo'] = $icon_photo;
        }
        // icon-photo

        if ($request->hasFile('Location_photo')) {
            $file = $request->file('Location_photo');
            $Location_photo = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/contact_photos';
            $request->Location_photo->move($path, $Location_photo);
            $data['Location_photo'] = $Location_photo;
        }


        if ($request->hasFile('emailaddress_photo')) {
            $file = $request->file('emailaddress_photo');
            $emailaddress_photo = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/contact_photos';
            $request->emailaddress_photo->move($path, $emailaddress_photo);
            $data['emailaddress_photo'] = $emailaddress_photo;
        }


        if($request->hasFile('patner_photo')){
            $partners = [];
            $files = $request->file('patner_photo');
            foreach($files as $fileKey => $file){
                $patner_photo = date('Y_m_d_H_i_s'). '_' . $file->getClientOriginalName();
                $path = 'uploads/contact_photos';
                $file->move($path, $patner_photo);
                $partners[] = $patner_photo;
            }

            $data['patner_photo'] = json_encode($partners);

        }

    //patner-photo
       Contactinformations::create($data);
       return back()->with('insertdata','Data Insert Successfully updated');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contactinformations $contactinformations)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contactinformations $contactinformations)
    {
      $edit=Contactinformations::where('id',$contactinformations->id)->first();
       return view('contact.edit',compact('$edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contactinformations $contactinformations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Contactinformations $contactinformations,$id)
    // {
    //     $delete=Contactinformations::find($id);
    //     unlink('uploads/contact_photos/'.$delete->photo);
    //    $delete->delete();
    //    return back()->with('delete','data deleted successfully');
    // }
}
