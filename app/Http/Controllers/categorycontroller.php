<?php

namespace App\Http\Controllers;
use App\category;

use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    function index(){
        $test=category::all();
        return view('admin.category.category',['test'=>$test]);

    }


    function add(Request $request){

        $this->validate($request,
            [

                'des'=>'required',
                'des_ar'=>'required',
                'name'=>'required',
                'name_ar'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new category();

        $test->des_ar=$request->des_ar;
        $test->des=$request->des;
        $test->name_ar=$request->name_ar;
        $test->name=$request->name;


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->image=$filname1;
        }

        if($test->save()){

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'des'=>'required',
                'des_ar'=>'required',
                'name'=>'required',
                'name_ar'=>'required',

                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=category::find($id);


        $test->des_ar=$request->des_ar;
        $test->des=$request->des;
        $test->name_ar=$request->name_ar;

        $test->name=$request->name;


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->image=$filname1;
        }




        if($test->save()){

            return back();
        }

    }
    function delete($id){
        $test=category::find($id);
        $test->delete();
        return back();

    }
}
