<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;

class SearchController extends Controller
{


  public function index()

  {

    $q = Disease::get('q');
    dd($q);

      return view('pages.searchdisease');

  }


}
