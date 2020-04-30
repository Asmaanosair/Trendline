<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;

class slidercontroller extends Controller
{
    function index(){
        $slider=slider::all();
        return view('admin.slider.slider',['slider'=>$slider]);

    }
     function create(){
       
        return view('admin.slider.c_slider');

    }
    function edit($id){
        $slider=slider::find($id);
        return view('admin.slider.e_slider',['slider'=>$slider]);

    }

    function add(Request $request){

        $this->validate($request,
            [
                
                'image'=>'required',
            ]);
        $slider=new slider();
   
        $slider->title=$request->head;
    
        $slider->description=$request->des;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $slider->img=$filname1;
        }
        if($slider->save()){

            return back();
        }
    }
    function update(Request $request,$id){

        $slider=slider::find($id);
      
        $slider->title=$request->head;
    
        $slider->description=$request->des;

        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $slider->img=$filname1;
        }
        if($slider->save()){
            return back();
        }
    }
    function delete($id){
        $slider=slider::find($id);
        $slider->delete();
        return back();

    }

}
