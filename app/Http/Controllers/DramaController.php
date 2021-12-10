<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;


class DramaController extends Controller
{
    //

/*slider in first home page shows dramas photos  */
    public function showDramas(){
        $dramas = Drama :: all( );
        return view('Home' ,['dramas' => $dramas]);
    }

    public function dramaDetails($id){
        $data =Drama :: find($id);
        return view('Drama/dramadetails' , ['dramas' => $data]);
    }

    public function allDramas (){
        $dramas = Drama:: all ();
        return view ('Drama/DramaTypes' , compact('dramas'));
    }

    public function full (){
        $dramas = Drama:: where ('status' , 'full' )->get();
        return view ('Drama/DramaTypes' , compact('dramas'));
    }

    public function continous (){
        $dramas = Drama:: where ('status' , 'continous' )->get();
        return view ('Drama/DramaTypes' , compact('dramas'));
    }

    public function trendingDrama(){
        $dramas = Drama:: where ('trending' , 1)->get();
        return view('Drama/TrendingDrama' , compact ('dramas'));

    }

/* admin shows dramas table */

    public function dramasTable(){
        $dramas=Drama::all();
        return view('Drama/ShowDramas',compact('dramas'));

    }
    
/* admin save new drama in database */

    public function saveDrama(Request $requ){
      
        Drama::create([
       'name'           => $requ -> name,
       'story'          => $requ -> story,
       'photo'          => $requ -> photo,
       'rate'           => $requ -> rate,
       'cast'           => $requ -> cast,
       'status'         => $requ -> status,
       'country'        => $requ -> country,
       'classification' => $requ -> classification,
       'year'           => $requ -> year,
       'trending'       => $requ -> trending,


        ]);
        return redirect()->back();
    }
// admin delete drama from database 
    public function deleteDrama($id){

        Drama::destroy($id);
         return redirect()->back();
    }

//get Drama to update 
    public function getDrama($id){

        $dramas= Drama::find($id);
        if(!$dramas)
        return redirect()->back();
 
        $dramas=Drama::select('id','name','photo', 'rate','story' , 'cast' , 'status' , 'country' , 'classification' , 'year' , 'trending')->find($id);
        return view('Drama/UpdateDrama',compact('dramas'));
       }

//save updated Drama
public function updateDrama(Request $request,$id){

        $dramas =Drama::find($id);
         if (!$dramas)
        return redirect()->back();
      
        $dramas->update($request->all());
        return redirect('showdramas'); 
          }
}
