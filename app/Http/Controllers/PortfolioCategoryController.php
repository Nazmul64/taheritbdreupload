<?php

namespace App\Http\Controllers;

use App\Models\MainProfiles;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    function portfilo(){
       return view("portfilo.create");
    }
 function category_insert(Request $request){
    $request->validate([
        "category_name"=> "required",
    ]);

   PortfolioCategory::create([
        "category_name"=> $request->category_name,
    ]);
    return back()->with("success","Data Insert Successfully");
 }
 function show(){
    $portfolio_category = PortfolioCategory::all();
    return view("portfilo.index",compact("portfolio_category"));
 }
 function edit($id){
    $edite_category = PortfolioCategory::find($id);
   return view('portfilo.edit',compact('edite_category'));
 }
 function update_category(Request $request,$id){
    $request->validate([
        "category_name"=> "required",
    ]);
    PortfolioCategory::find($id)->update([
        "category_name" => $request->category_name,
     ]);
    return back()->with("success","Data Update Successfully");
 }
 function delete_category($id){
    $delete_category = PortfolioCategory::find($id);
    // $delete_category->delete();
    // return back()->with("success","Data Update Successfully");
    $count =MainProfiles::where("portfoli_category_id",$delete_category->id)->count();
    if($count==0){
       $delete_category->delete();
    }else{
        return back()->with("success","You can not delete this portfolio category,becaus there is one or more portfolio under this");
    }
    return back()->with("success","Data Update Successfully");
 }

}
