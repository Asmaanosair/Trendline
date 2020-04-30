<?php

namespace App\Http\Controllers;


use App\category;
use App\product;
use App\product_image;
use Illuminate\Http\Request;

class productcontroller extends Controller
{

    function index(){
        $test=product::all();
        $cat=category::all();
        return view('admin.products.product',['test'=>$test,'cat'=>$cat]);

    }
    
      function product_image($id){
        $test=product_image::where('product_id',$id)->get();
      
        return view('admin.products.image',['test'=>$test,'id'=>$id]);

    }
    
    
    
       function add_image(Request $request,$id){
       
      if(!empty($request->file('image'))) {
                $files2 = [];
                foreach ($request->file('image') as $media) {
                    if (!empty($media)) {
                        $destinationPath = 'img';
                        $filename2 = $media->getClientOriginalName();
                        $media->move($destinationPath, $filename2);
                        $files2[] = $filename2;
                    }
                }

                foreach ($files2 as $key => $row) {

                    $img2 = new product_image();
                    $img2->image = $row;
                    $img2->product_id = $id;
                    $img2->save();
                }
      
        return back();

    }
}

    function up_image(Request $request,$id){

        $this->validate($request,
            [

             
                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=product_image::find($id);



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

    function add(Request $request){

        $this->validate($request,
            [

                'des'=>'required',
                'des_ar'=>'required',
                'name'=>'required',
                'old'=>'required',
                'new'=>'required',
                'select'=>'required',
                'amount'=>'required',
                'name_ar'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new product();

        $test->des_ar=$request->des_ar;
        $test->des=$request->des;
        $test->name_ar=$request->name_ar;
        $test->name=$request->name;
        
        $test->recommended=$request->recommend;
        $test->old_price=$request->old;
        $test->new_price=$request->new;
        $test->amount=$request->amount;
        $test->category_id=$request->select;


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
                'select'=>'required',
                'amount'=>'required',
                'name_ar'=>'required',

                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=product::find($id);

$test->recommended=$request->recommend;
        $test->des_ar=$request->des_ar;
        $test->des=$request->des;
        $test->name_ar=$request->name_ar;
        $test->name=$request->name;

        $test->old_price=$request->old;
        $test->new_price=$request->new;
        $test->amount=$request->amount;
        $test->category_id=$request->select;


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
        $test=product::find($id);
        $test->delete();
        return back();

    }
    
     function del_image($id){
        $test=product_image::find($id);
        $test->delete();
        return back();

    }

}
