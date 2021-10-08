<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;


class DramaController extends Controller
{
    //

/*slider in main home page shows dramas photos  */
    public function showDramas(){
        $dramas = Drama :: all();

        return view('Home' ,['dramas' => $dramas]);
    }

    public function dramaDetails($id){
        $data =Drama :: find($id);
        return view('dramadetails' , ['dramas' => $data]);
    }


/* admin shows dramas table */

    public function dramasTable(){
        $dramas=Drama::all();
        return view('ShowDramas',compact('dramas'));

    }

    
}
