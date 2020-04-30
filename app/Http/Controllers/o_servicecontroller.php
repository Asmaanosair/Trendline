<?php

namespace App\Http\Controllers;

use App\o_service;
use Illuminate\Http\Request;

class o_servicecontroller extends Controller
{
    function index(){
        $service=o_service::first();
        return view('admin.service.o_service',['service'=>$service]);

    }



    function update(Request $request,$id){

        $this->validate($request,
            [
                'des'=>'required',
                'des_ar'=>'required',
             

            ]);
        $service=o_service::find($id);
   

        $service->description_ar=$request->des_ar;
        $service->description=$request->des;



        if($service->save()){

            return back();
        }
    }
   
}
