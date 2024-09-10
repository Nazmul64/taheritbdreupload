<?php

namespace App\Http\Controllers;

use App\Models\MainProfile;
use App\Models\MainProfiles;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
use App\Models\PortfolioPhoto;

class PortfiloController extends Controller
{
    public function added(){
         $portfilo_category=PortfolioCategory::get();
        return view('main_portfilo.create',compact('portfilo_category'));
    }
    public function index(){
        $portfolio_main = MainProfile::with('rPortfolioCategory')->get();
        return view('main_portfilo.index', compact('portfolio_main'));
}

    public function main_portfilos_insert(Request $request) {
        $request->validate([
            'slug' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'project_client' => 'required',
            'project_company' => 'required',
            'project_start_date' => 'required',
            'project_end_date' => 'required',
            'project_cost' => 'required',
            'project_website' => 'required',
            'seo_title' => 'required',
            'seo_meta_description' => 'required',
            'photo' => 'required|image',
            'banner' => 'required|image',
            'background1'=> 'required|image',
            'background2'=> 'required|image',
        ]);


        $photo = $banner = null;
        if ($request->hasFile('photo')) {
            $photo = time() . '_photo.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('uploads/portfolio/'), $photo);
        }
        if ($request->hasFile('background1')) {
            $background1 = time() . 'background1.' . $request->file('background1')->getClientOriginalExtension();
            $request->file('background1')->move(public_path('uploads/portfolio/'), $background1);
        }
        if ($request->hasFile('background2')) {
            $background2 = time() . 'background2.' . $request->file('background2')->getClientOriginalExtension();
            $request->file('background2')->move(public_path('uploads/portfolio/'), $background2);
        }

        if ($request->hasFile('banner')) {
            $banner = time() . '_banner.' . $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move(public_path('uploads/portfolio/'), $banner);
        }

        if ($photo && $banner) {
            MainProfile::create([
                'subtitle' => $request->subtitle,
                'maintitle' => $request->maintitle,
                'name' => $request->name,
                'slug' => $request->slug,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'project_client' => $request->project_client,
                'project_company' => $request->project_company,
                'project_start_date' => $request->project_start_date,
                'project_end_date' => $request->project_end_date,
                'project_website' => $request->project_website,
                'seo_title' => $request->seo_title,
                'seo_meta_description' => $request->seo_meta_description,
                'project_cost' => $request->project_cost,
                'portfoli_category_id' => $request->portfoli_category_id,
                'photo' => $photo,
                'banner' => $banner,
                'background1' => $background1,
                'background2' => $background2,

            ]);

            return back()->with('success', 'Data inserted successfully');
        } else {
            return back()->withErrors(['file_upload' => 'Photo or banner upload failed']);
        }
    }
    public function edit_portfilos($id){
        $data_show=MainProfile::find($id);
        $portfilo_category=PortfolioCategory::get();
        return view('main_portfilo.edite',compact('data_show','portfilo_category'));
    }

    public function update_portfilos(Request $request, $id)
    {
        $main_category = MainProfile::find($id);

        if (!$main_category) {
            return back()->with('error', 'Portfolio not found!');
        }

        if ($request->hasFile('new_photo')) {
            if ($main_category->photo && file_exists(public_path('uploads/portfolio/' . $main_category->photo))) {
                unlink(public_path('uploads/portfolio/' . $main_category->photo));
            }

            $file = $request->file('new_photo');
            $new_photo = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/portfolio'), $new_photo);
            $main_category->photo = $new_photo;
        }

        if ($request->hasFile('banner_new')) {
            if ($main_category->banner && file_exists(public_path('uploads/portfolio/' . $main_category->banner))) {
                unlink(public_path('uploads/portfolio/' . $main_category->banner));
            }

            $file = $request->file('banner_new');
            $banner_new = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/portfolio'), $banner_new);
            $main_category->banner = $banner_new;
        }
        if ($request->hasFile('background2')) {
            if ($main_category->banner && file_exists(public_path('uploads/portfolio/' . $main_category->background2))) {
                unlink(public_path('uploads/portfolio/' . $main_category->background2));
            }

            $file = $request->file('background2');
            $background2 = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/portfolio'), $background2);
            $main_category->banner = $background2;
        }
        if ($request->hasFile('background1')) {
            if ($main_category->background1 && file_exists(public_path('uploads/portfolio/' . $main_category->background1))) {
                unlink(public_path('uploads/portfolio/' . $main_category->background1));
            }

            $file = $request->file('background1');
            $background1 = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/portfolio'), $background1);
            $main_category->background1 = $background1;
        }




        $main_category->update([
           'name' => $request->name,
                'subtitle' => $request->subtitle,
                'maintitle' => $request->maintitle,
                'slug' => $request->slug,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'project_client' => $request->project_client,
                'project_company' => $request->project_company,
                'project_start_date' => $request->project_start_date,
                'project_end_date' => $request->project_end_date,
                'project_website' => $request->project_website,
                'seo_title' => $request->seo_title,
                'seo_meta_description' => $request->seo_meta_description,
                'project_cost' => $request->project_cost,
                'portfoli_category_id' => $request->portfoli_category_id,
        ]);

        return back()->with('success', 'Data edited successfully!');
    }
public function delete_portfilos($id){
    $portfilos = MainProfile::find($id);
    $portfilos->delete();
    return back();
}

public function photo_gallery($id,){
    $single_portfolio=MainProfile::where('id',$id)->first();
    $photo_gallery_items = PortfolioPhoto::where('portfolio_id',$id)->get();
    // $photo_gallery_items =PortfolioPhoto::all();
    return view('main_portfilo.portfoli_gallery', compact('photo_gallery_items','single_portfolio'));
}

public function photo_gallery_store(Request $request){
    $request->validate([
        'photo'=>'required',
        'portfolio_id'=> 'required',
    ]);
    $file = $request->file('photo');
    $gallery_photo = 'portfoli_gallery_photo_'.time() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('uploads/portfolio'), $gallery_photo);
  PortfolioPhoto::insert([
      'photo'=> $gallery_photo,
      'portfolio_id'=> $request->portfolio_id,
  ]);
  return back()->with('success','DataInsert Successfully');
}
function photo_gallery_edit($id,Request $request){
     $photo_gallery_edite = PortfolioPhoto::find($id);
     return view('main_portfilo.portfoli_gallery_edite', compact('photo_gallery_edite'));
}
public function photo_gallery_update(Request $request,$id){
    if($request->hasFile('new_photo')){
        $experience = PortfolioPhoto::find($id);
        $oldPhotoPath = 'uploads/portfolio/' . $experience->photo;

        // Check if the old photo exists before trying to delete it
        if (file_exists($oldPhotoPath)) {
            unlink($oldPhotoPath);
        }

        $file = $request->file('new_photo');
        $path = "uploads/portfolio/";
        $new_photo = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $new_photo);

        $experience->update([
            'photo' => $new_photo,
        ]);

    return back()->with('success', 'Data Edited successfully!');
}
}
public function photo_gallery_delete($id,Request $request){
    PortfolioPhoto::find($id)->delete();
    return back()->with('success', 'Data Deleted successfully!');
}

}
