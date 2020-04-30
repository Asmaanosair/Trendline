<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\counter;

class countcontroller extends Controller
{
    function index(){
        $test=counter::all();
        return view('admin.counter.counter',['test'=>$test]);

    }


    function add(Request $request){

        $this->validate($request,
            [

                'des'=>'required',
               
                'name'=>'required',
          
              


            ]);
        $test=new counter();

      
        $test->des=$request->des;
     
        $test->number=$request->name;


      

        if($test->save()){

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'des'=>'required',
           
                'name'=>'required',
         



            ]);
        $test=counter::find($id);


        $test->des=$request->des;
  

        $test->number=$request->name;


      




        if($test->save()){

            return back();
        }

    }
    function delete($id){
        $test=counter::find($id);
        $test->delete();
        return back();

    }
}
