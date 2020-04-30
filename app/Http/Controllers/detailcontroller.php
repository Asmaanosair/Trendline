<?php

namespace App\Http\Controllers;

use App\guide_detail;
use App\product;
use App\sub_guide;
use Illuminate\Http\Request;

class detailcontroller extends Controller
{
  


    public function image(Request $request){

        $lang='en';
        if($request->file('file')!=null){
            $filname1=time().".".$request->file('files')->getClientOriginalExtension();
            $request->file('files')->move('img',$filname1);
            return $filname1;

        }else{

            return view('admin.imageup',['lang'=>$lang]);
        }


    }


    public function uploadimage(Request $request){
        $this->validate($request,
            [
                'image'=>'required|mimes:jpeg,bmp,png',

            ]);

        $filname1=time().".".$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('img',$filname1);
        //  echo $filname1;
        return view('admin.imageup',['filname1'=>$filname1]);



    }

    public function edit($id)
    {
        $product=product::find($id);
     
        return view('admin.products.e_detail',['product'=>$product]);

    }

  


    function update(Request $request ,$id)
    {
        $test = product::find($id) ;

     
        $test->prog_ar = $request->des_ar;
        $test->prog = $request->des;



        if ($test->save()) {



            return redirect("/kt_admin/product");


        }else{

            return back();
        }
    }


    
    //     // public function image(Request $request){

    //     // $lang='en';
    //     // if($request->file('file')!=null){
    //     //     $filname1=time().".".$request->file('files')->getClientOriginalExtension();
    //     //     $request->file('files')->move('img',$filname1);
    //     //     return $filname1;

    //     // }else{

    //     //     return view('admin.imageup',['lang'=>$lang]);
    //     // }


    // }


    // public function uploadimage(Request $request){
    //     $this->validate($request,
    //         [
    //             'image'=>'required|mimes:jpeg,bmp,png',

    //         ]);

    //     $filname1=time().".".$request->file('image')->getClientOriginalExtension();
    //     $request->file('image')->move('img',$filname1);
    //     //  echo $filname1;
    //     return view('admin.imageup',['filname1'=>$filname1]);



    // }



}
