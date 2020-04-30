<?php

namespace App\Http\Controllers;

use App\about;
use App\about_video;

use Illuminate\Http\Request;

class aboutcontroller extends Controller
{
    function index(){
        $service=about::all();
         $service2=about_video::all();
        return view('admin.about.about',['service'=>$service,'service2'=>$service2]);

    }


  

    function update(Request $request,$id){

        $this->validate($request,
            [
                'des'=>'required',
                'des_ar'=>'required',
                'title_ar'=>'required',
                'title'=>'required',

            ]);
        $service=about::find($id);
        $service->name_ar=$request->title_ar;
        $service->name=$request->title;

        $service->des_ar=$request->des_ar;
        $service->des=$request->des;
  if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $service->image=$filname1;
        }


        if($service->save()){

            return back();
        }
    }
   
   
   
    function update_video(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
             
                'title'=>'required',

            ]);
        $service=about_Video::find(1);
   
        $service->name=$request->title;

      
        $service->des=$request->des;
  if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $service->Video=$filname1;
        }


        if($service->save()){

            return back();
        }
    }
}
