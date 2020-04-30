<?php

namespace App\Http\Controllers;

use App\stock;
use Illuminate\Http\Request;

class stockcontroller extends Controller
{
    function index(){
        $test=stock::all();
        return view('admin.category.stock',['test'=>$test]);

    }


    function add(Request $request){

        $this->validate($request,
            [

                'des'=>'required',
                'des_ar'=>'required',
                'name'=>'required',
                'old'=>'required',
                'new'=>'required',
             
                'amount'=>'required',
                'name_ar'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new stock();

        $test->des_ar=$request->des_ar;
        $test->des=$request->des;
        $test->name_ar=$request->name_ar;
        $test->name=$request->name;

        $test->old_price=$request->old;
        $test->new_price=$request->new;
        $test->amount=$request->amount;
     


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
                'old'=>'required',
                'new'=>'required',
            
                'amount'=>'required',
                'name_ar'=>'required',

                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=stock::find($id);


        $test->des_ar=$request->des_ar;
        $test->des=$request->des;
        $test->name_ar=$request->name_ar;
        $test->name=$request->name;

        $test->old_price=$request->old;
        $test->new_price=$request->new;
        $test->amount=$request->amount;
   


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
        $test=stock::find($id);
        $test->delete();
        return back();

    }
}
