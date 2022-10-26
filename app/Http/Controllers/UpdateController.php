<?php

namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
     public function edit($id)
             {
                 //dd($id);
                 $data=Info::find($id);
                return  view('update',compact('data'));
             }
             public function update(Request $request,$id)
             {
      $list=Info::find($id);
      $filename =$list->image;
                    if($request->hasFile('image'))
                    {
                        $file= $request->file('image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }
        $list->update([
               'name'=>$request->name,
            'fname'=>$request->fname,
             'image'=>$filename
        ]);
                 return redirect()->back()->with('success','Update Successful');
             }

}