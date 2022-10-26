<?php

namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function insert(){
         return view('insert');

    }
      public function insertStore(Request $request){



                $image_name=null;
//              step 1: check image exist in this request.
                 if($request->hasFile('image'))
                 {
                     // step 2: generate file name
                     $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();

                     //step 3 : store into project directory

                     $request->file('image')->storeAs('/photo',$image_name);

                 }

        Info::create([
            // field name from db || field name from form
            'name'=>$request->name,
            'fname'=>$request->fname,
            'image'=>$image_name,
        ]);

        return redirect()->back()->with('success','Information created successfully.');

    }
}
