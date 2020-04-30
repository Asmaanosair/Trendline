<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimonial;

class testimonialcontroller extends Controller
{
    function index(){
        $test=testimonial::all();
        return view('admin.testimonial.testimonial',['test'=>$test]);

    }

    function add(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
                'des_ar'=>'required',
                'name'=>'required',
                'name_ar'=>'required',
                'job'=>'required',
                'job_ar'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png',
            ]);
        $test=new testimonial();

        $test->description_ar=$request->des_ar;
        $test->description=$request->des;
        $test->name_ar=$request->name_ar;
        $test->job=$request->job;
        $test->name=$request->name;
        $test->job_ar=$request->job_ar;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
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
                'job'=>'required',
                'job_ar'=>'required',
                'image'=>'mimes:jpeg,bmp,png',
            ]);
        $test=testimonial::find($id);
        $test->description_ar=$request->des_ar;
        $test->description=$request->des;
        $test->name_ar=$request->name_ar;
        $test->job=$request->job;
        $test->name=$request->name;
        $test->job_ar=$request->job_ar;

        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }

        if($test->save()){

            return back();
        }

    }
    function delete($id){
        $test=testimonial::find($id);
        $test->delete();
        return back();

    }
}
