<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;

class faqcontroller extends Controller
{
   public function index()
    {
        $test = faq::all();
        return view('admin.faq.faq', ['test' => $test]);

    }

    public function create()
    {
        $category=faq::all();
        return view('admin.faq.c_faq',['category'=>$category]);

    }

    public function edit($id)
    {
        $product=faq::find($id);
   
        return view('admin.faq.e_faq',['product'=>$product]);

    }

    function add(Request $request)
    {
        $this->validate($request,
            [
                'head' => 'required',

                'des' => 'required',
             

            ]);
        $test = new faq();

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
        $test = faq::find($id) ;
     $test->name = $request->head;
   
        $test->description= $request->des;


        if ($test->save()) {



            return redirect("/kt_admin/faq");


        }else{

            return back();
        }
    }


    function delete($id){
        $slider=faq::find($id);
        $slider->delete();
        return back();

    }
}
