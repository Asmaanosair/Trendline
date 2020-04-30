<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;

class servicecontroller extends Controller
{
    function index(){
        $service=service::all();
        return view('admin.service.service',['service'=>$service]);

    }


    function add(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
                'des_ar'=>'required',
                'head'=>'required',
                'head_ar'=>'required',
                'title_ar'=>'required',
                'title'=>'required',
                'icon'=>'required',


            ]);

        $service=new service();
        $service->name_ar=$request->title_ar;
        $service->name=$request->title;
        $service->head_ar=$request->head_ar;
        $service->head=$request->head;
        $service->description_ar=$request->des_ar;
        $service->description=$request->des;
        $service->icon=$request->icon;




        if($service->save()){

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [
                'des'=>'required',
                'des_ar'=>'required',
                'head'=>'required',
                'head_ar'=>'required',
                'title_ar'=>'required',
                'title'=>'required',
                'icon'=>'required',

            ]);
        $service=service::find($id);
        $service->name_ar=$request->title_ar;
        $service->name=$request->title;
        $service->head_ar=$request->head_ar;
        $service->head=$request->head;
        $service->description_ar=$request->des_ar;
        $service->description=$request->des;
        $service->icon=$request->icon;


        if($service->save()){

            return back();
        }
    }
    function delete($id){
        $service=service::find($id);
        $service->delete();
        return back();

    }

}
