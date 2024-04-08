<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function createArea(Request $Request){
       $request->validate([
        'area_name'=>'ruired'
       ]);

       $area = Areas::create([
        'area_name'=>$request->area_name,
        'description'=>$request->area_name
       ]);

       return responce()->json($area);
    }
}

