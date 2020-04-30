<?php

namespace App\Http\Controllers;

use App\agent;
use Illuminate\Http\Request;

class agentcontroller extends Controller
{

    public function index()
    {
        $test = agent::all();
        return view('admin.service.agent', ['test' => $test]);

    }

    public function create()
    {
        $category=agent::all();
        return view('admin.service.c_agent',['category'=>$category]);

    }

    public function edit($id)
    {
        $product=agent::find($id);
   
        return view('admin.service.e_agent',['product'=>$product]);

    }

    function add(Request $request)
    {
        $this->validate($request,
            [
                'head' => 'required',

                'des' => 'required',
             

            ]);
        $test = new agent();

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
        $test = agent::find($id) ;
     $test->name = $request->head;
   
        $test->description= $request->des;


        if ($test->save()) {



            return redirect("/kt_admin/agent");


        }else{

            return back();
        }
    }


    function delete($id){
        $slider=agent::find($id);
        $slider->delete();
        return back();

    }

}
