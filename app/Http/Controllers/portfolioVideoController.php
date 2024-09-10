<?php

namespace App\Http\Controllers;

use App\Models\MainProfiles;
use App\Models\PortfolioVideo;
use Illuminate\Http\Request;

class portfolioVideoController extends Controller
{
  public function portfolio_video($id) {
    $single_portfolio_video = MainProfiles::find($id);
    $photo_gallery_items_video = PortfolioVideo::where('portfolio_id', $id)->get();
    return view('main_portfilo.portfoli_video', compact('photo_gallery_items_video', 'single_portfolio_video'));
}
public function portfolio_video_store(Request $request){
    $request->validate([
        'portfolio_id'=>'required',
        'caption'=>'required',
        'video_id'=>'required',
    ]);
    PortfolioVideo::insert([
      'portfolio_id'=> $request->portfolio_id,
      'caption'=> $request->caption,
      'video_id'=> $request->video_id,
    ]);
    return back()->with('success','Data Insert Successfully!');
}
public function portfolio_video_edit(Request $request,$id){
    $portfoli_video=PortfolioVideo::find($id);
    return view('main_portfilo.portfoli_video_edite',compact('portfoli_video'));
}
public function portfolio_video_update(Request $request, $id) {
    // Validate the incoming request data
    $request->validate([
        'caption' => 'required',
        'video_id' => 'required',
    ]);

    $portfolioVideo = PortfolioVideo::find($id);
    $portfolioVideo->update([
        'caption' => $request->caption,
        'video_id' => $request->video_id,
    ]);
    return back()->with('success', 'Data Edit Successfully!');
}
public function portfolio_video_delete(Request $request, $id){
    $delete= PortfolioVideo::find($id);
    $delete->delete();
    return back()->with('success', 'Data deleted Successfully!');
}
}
