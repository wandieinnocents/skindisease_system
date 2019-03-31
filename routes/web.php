<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Disease;
use App\Models\Skincategory;
use App\User;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {

    //functions from backend

    $skin_disease_counter = Disease::get()->count();
    $skin_disease_cat_counter = Skincategory::get()->count();
    $users = User::get()->count();

    return view('welcome',compact('skin_disease_cat_counter','skin_disease_counter','users'));
});

Route::post('/searchdisease',function(){

  $q = Input::get('q');
  if($q != ' '){
    //when data is found
    $disease = Disease::where('disease_name','LIKE', '%' . $q . '%')
                        ->orWhere('symptom', 'LIKE' , '%' . $q . '%')
                        ->orWhere('disease_diagnosis', 'LIKE' , '%' . $q . '%')
                        ->get();
            if(count($disease) >0 )
              return view('pages.searchdisease')->withDetails($disease)->withQuery($q);
  }
  return view('pages.searchdisease')->withMessage("No disease found in system!");

  dd($q);

});




 Route::get('/search','SearchController@index')->name('index');
Route::get('category','PageController@category');
Route::get('diseases','PageController@diseases');
Route::get('diagnosis','PageController@diagnosis');
