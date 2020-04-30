<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feature;

class featcontroller extends Controller
{
   function index(){
        $test=feature::all();
        return view('admin.feat.feat',['test'=>$test]);

    }

    function add(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
        
            ]);
        $test=new feature();


        $test->des=$request->des;

       

        if($test->save()){

            return back();
        }

    }
    function update(Request $request,$id){
        $this->validate($request,
            [
                'des'=>'required',
              
            ]);
        $test=feature::find($id);
        $test->des=$request->des;
      

       

        if($test->save()){

            return back();
        }

    }
    function delete($id){
        $test=feature::find($id);
        $test->delete();
        return back();

    }
}
