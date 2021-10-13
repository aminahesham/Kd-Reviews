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
        return view('dramadetails' , ['dramas' => $data]);
    }

    public function allDramas (){
        $dramas = Drama:: all ();
        return view ('DramaTypes' , compact('dramas'));
    }

    public function full (){
        $dramas = Drama:: where ('status' , 'full' )->get();
        return view ('DramaTypes' , compact('dramas'));
    }

    public function continous (){
        $dramas = Drama:: where ('status' , 'continous' )->get();
        return view ('DramaTypes' , compact('dramas'));
    }

/* admin shows dramas table */

    public function dramasTable(){
        $dramas=Drama::all();
        return view('ShowDramas',compact('dramas'));

    }

    
}
