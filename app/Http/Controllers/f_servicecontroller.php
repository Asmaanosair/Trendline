<?php

namespace App\Http\Controllers;

use App\f_service;
use Illuminate\Http\Request;

class f_servicecontroller extends Controller
{
    public function index()
    {
        $test = f_service::all();
        return view('admin.service.f_service', ['test' => $test]);

    }

    public function create()
    {
        $category=f_service::all();
        return view('admin.service.c_service',['category'=>$category]);

    }

    public function edit($id)
    {
        $product=f_service::find($id);
   
        return view('admin.service.e_service',['product'=>$product]);

    }

    function add(Request $request)
    {
        $this->validate($request,
            [
                'head' => 'required',

                'des' => 'required',
             

            ]);
        $test = new f_service();

        $test->name = $request->head;
   
        $test->description= $request->des;

    

        if ($test->save()) {



            return back();
        }
    }


    function update(Request $request ,$id)
    {
        $this->validate($request,
            [
                 'head' => 'required',

                'des' => 'required',
            ]);
        $test = f_service::find($id) ;
     $test->name = $request->head;
   
        $test->description= $request->des;


        if ($test->save()) {



            return redirect("/kt_admin/f_service");


        }else{

            return back();
        }
    }


    function delete($id){
        $slider=f_service::find($id);
        $slider->delete();
        return back();

    }

}
