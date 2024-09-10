<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Awesome;
use App\Models\CategoryWelcom;
use App\Models\Contactinformations;
use App\Models\Experience;
use App\Models\Expertise;
use App\Models\MainProfile;
use App\Models\MainProfiles;
use App\Models\PortfolioCategory;
use App\Models\Pricing;
use App\Models\Projectclient;
use App\Models\Sitelogo;
use App\Models\Testmonial;
use Illuminate\Http\Request;

class ForntendController extends Controller
{

    public function index(){

        return view('forntend.index',[
            'datashow'=>CategoryWelcom::where('status', 'show')->get(),
            'awesome'=>Awesome::where('status','show')->get(),
            'about'=>About::all(),
            'experience'=>Experience::all(),
            'pricing' =>Pricing::all(),
            'expertise' =>Expertise::all(),
            'sitelogo'=>Sitelogo::all(),
            'testmonial' =>Testmonial::all(),
            'mainportfoloi'=>MainProfile::all(),
            'portfolio_category'=>PortfolioCategory::all(),
            'projectclient'=>Projectclient::all(),

        ]);
    }

    public function contact()
    {
        return view('forntend.contact',[
            'sitelogo'=>Sitelogo::all(),
            'contactus'=>Contactinformations::all(),
        ]);
    }
   public function portfolio_details($id){
    $sitelogo=Sitelogo::all();
    $portfoli_details =MainProfile::where('id', $id)->first();
      return view('forntend.portfilo_details',compact('sitelogo','portfoli_details'));
   }

}
