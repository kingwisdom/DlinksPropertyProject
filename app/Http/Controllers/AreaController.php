<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    //
    public function admin(){
        
    }
    public function my_area(){
        return view('area.myarea');
    }
}
