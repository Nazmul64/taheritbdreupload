<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostcategoryController extends Controller
{
    public function postCategory(){
      return view('postcategory.create');
    }
}
