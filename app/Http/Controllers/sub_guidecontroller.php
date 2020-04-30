<?php

namespace App\Http\Controllers;

use App\guid;
use App\sub_guide;
use Illuminate\Http\Request;

class sub_guidecontroller extends Controller
{
    function index(){
        $test=sub_guide::all();
        $guide=guid::all();
        return view('admin.guide.sub_guide',['test'=>$test,'guide'=>$guide]);

    }


    function add(Request $request){

        $this->validate($request,
            [

                'name'=>'required',
                'name_ar'=>'required',
                'guide'=>'required',


            ]);
        $test=new sub_guide();


        $test->name_ar=$request->name_ar;
        $test->name=$request->name;
        $test->guide_id=$request->guide;



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
        $test=sub_guide::find($id);



        $test->name_ar=$request->name_ar;

        $test->name=$request->name;
        $test->guide_id=$request->guide;







        if($test->save()){

            return back();
        }

    }
    function delete($id){
        $test=sub_guide::find($id);
        $test->delete();
        return back();

    }
}
