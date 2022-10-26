<?php

namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
      public function delete($id){
         $data=Info::find($id);
         $data->delete();
            return redirect()->back();
     }
}
