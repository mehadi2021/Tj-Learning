<?php

namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;

class ViewController extends Controller
{
     public function view(){
        $datas=Info::all();
        return view('view', compact('datas'));

    }
}
