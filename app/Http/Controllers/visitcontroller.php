<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visit;

class visitcontroller extends Controller
{
     function index(){
        $service=visit::all();
       
        return view('admin.visit.visit',['service'=>$service]);

    }


  

    function update(Request $request,$id){

        $this->validate($request,
            [
                'des'=>'required',
             
                'number'=>'required',
                'title'=>'required',

            ]);
        $service=visit::find($id);
       
        $service->title=$request->title;
          $service->number=$request->number;

    
        $service->des=$request->des;
        $service->des_ar=$request->des_ar;
        $service->img=$request->color;
 


        if($service->save()){

            return back();
        }
    }
}
