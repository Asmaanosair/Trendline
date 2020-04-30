<?php

namespace App\Http\Controllers;

use App\market;
use App\sub_market;
use Illuminate\Http\Request;

class sub_marketcontroller extends Controller
{
    public function index()
    {
        $test = sub_market::all();
        return view('admin.market.detail', ['test' => $test]);

    }

    public function create()
    {
        $category=market::all();
        return view('admin.market.c_detail',['category'=>$category]);

    }

    public function edit($id)
    {
        $product=sub_market::find($id);
        $category=market::all();
        return view('admin.market.e_detail',['product'=>$product,'category'=>$category]);

    }

    function add(Request $request)
    {
        $this->validate($request,
            [
                'head' => 'required',

                'head_ar' => 'required',

                'des' => 'required',
                'des_ar' => 'required',

            ]);
        $test = new sub_market();
        $test->name_ar = $request->head_ar;
        $test->name = $request->head_ar;
        $test->des_ar = $request->des_ar;
        $test->des = $request->des;

        $test->market_id = $request->cat;

        if ($test->save()) {



            return back();
        }
    }


    function update(Request $request ,$id)
    {
        $this->validate($request,
            [
                'head' => 'required',

                'head_ar' => 'required',

                'des' => 'required',
                'des_ar' => 'required',
            ]);
        $test = sub_market::find($id) ;
        $test->name_ar = $request->head_ar;
        $test->name = $request->head_ar;
        $test->des_ar = $request->des_ar;
        $test->des = $request->des;

        $test->market_id = $request->cat;

        if ($test->save()) {



            return redirect("/kt_admin/sub_market");


        }else{

            return back();
        }
    }


    function delete($id){
        $slider=sub_market::find($id);
        $slider->delete();
        return back();

    }

}
