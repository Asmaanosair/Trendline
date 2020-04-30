<?php

namespace App\Http\Controllers;

use App\how;
use App\link;
use Illuminate\Http\Request;

class howcontroller extends Controller
{
    function index(){
        $service=how::all();
         $service2=link::all();
        return view('admin.how.how',['service'=>$service,'service2'=>$service2]);

    }


    function add(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
                'des_ar'=>'required',
                'title_ar'=>'required',
                'title'=>'required',



            ]);

        $service=new how();
        $service->name_ar=$request->title_ar;
        $service->name=$request->title;
        $service->description_ar=$request->des_ar;
        $service->description=$request->des;





        if($service->save()){

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [
                'des'=>'required',
                'des_ar'=>'required',
                'title_ar'=>'required',
                'title'=>'required',

            ]);
        $service=how::find($id);
        $service->name_ar=$request->title_ar;
        $service->name=$request->title;

        $service->description_ar=$request->des_ar;
        $service->description=$request->des;



        if($service->save()){

            return back();
        }
    }
    function delete($id){
        $service=how::find($id);
        $service->delete();
        return back();
    }
    
        function update_link(Request $request){

        $this->validate($request,
            [
              
                'title'=>'required',

            ]);
        $service=link::find(1);
        $service->link=$request->title;
    



        if($service->save()){

            return back();
        }
    }
}
