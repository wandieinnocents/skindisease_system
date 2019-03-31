<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skincategory;
use App\Models\Disease;


class PageController extends Controller
{
    //

    public function category(){

      $skin_dcategories = Skincategory::all();

      return view('pages.category',compact('skin_dcategories'));
    }

    public function diseases(){

      $skin_diseases = Disease::all();


      return view('pages.diseases',compact('skin_diseases'));
    }

    public function diagnosis(){

      $skin_dcategories = Skincategory::all();

      return view('pages.diagnosis',compact('skin_diagnosis'));
    }


   public function searchdisease(Request $req)
   {
     if($req->search == ""){
      $diseases = Disease::paginate(3);
      return view('pages.searchdisease',compact('diseases'));

    }
    else{

      $diseases = Disease::where('disease_name','LIKE', '%' . $req->search . '%')->paginate(3);
      $diseases->appends($req->only('search'));

      return view('pages.searchdisease',compact('diseases'));
    }

   }






}
