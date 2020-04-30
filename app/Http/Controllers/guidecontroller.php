<?php

namespace App\Http\Controllers;

use App\guid;
use Illuminate\Http\Request;

class guidecontroller extends Controller
{
    function index(){
        $test=guid::all();
        return view('admin.guide.guide',['test'=>$test]);

    }


    function add(Request $request){

        $this->validate($request,
            [

                'name'=>'required',
                'name_ar'=>'required',


            ]);
        $test=new guid();


        $test->name_ar=$request->name_ar;
        $test->name=$request->name;



        if($test->save()){

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [


                'name'=>'required',
                'name_ar'=>'required',




            ]);
        $test=guid::find($id);



        $test->name_ar=$request->name_ar;

        $test->name=$request->name;







        if($test->save()){

            return back();
        }

    }
    function delete($id){
        $test=guid::find($id);
        $test->delete();
        return back();

    }
}
