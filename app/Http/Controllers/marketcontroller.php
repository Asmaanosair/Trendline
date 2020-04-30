<?php

namespace App\Http\Controllers;

use App\market;
use Illuminate\Http\Request;

class marketcontroller extends Controller
{
    function index(){
        $test=market::all();
        return view('admin.market.market',['test'=>$test]);

    }


    function add(Request $request){

        $this->validate($request,
            [

                'name'=>'required',
                'name_ar'=>'required',


            ]);
        $test=new market();


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
        $test=market::find($id);



        $test->name_ar=$request->name_ar;

        $test->name=$request->name;







        if($test->save()){

            return back();
        }

    }
    function delete($id){
        $test=market::find($id);
        $test->delete();
        return back();

    }
}
